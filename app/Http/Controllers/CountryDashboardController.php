<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Country;
use App\Models\Demand;
use App\Models\Passport;
use App\Models\Sending;
use Illuminate\Http\Request;

class CountryDashboardController extends Controller
{
    public function show($id)
    {
        // Country Configuration
        $country = Country::findOrFail($id);
        session(['country_id' => $id, 'country_title' => $country->title]);
        $country_id = $country->id;
        // Passport 
        $total_passport = Passport::where('selected_country', $country->title)->count();
        $total_passport_male = Passport::where('selected_country', $country->title)
            ->where('gender', 'male')
            ->count();
        $total_passport_female = Passport::where('selected_country', $country->title)
            ->where('gender', 'female')
            ->count();

        // Demand 
        $total_demand = Demand::where('countrie_id', $country->id)->count();
        $demand_male = Demand::where('countrie_id', $country->id)
            ->sum('male');
        $demand_female = Demand::where('countrie_id', $country->id)
            ->sum('female');

        // Contract 
        $contract_total = Demand::where('countrie_id', $country->id)
            ->withCount('contract_list_table')
            ->count();

        $contract_male = Contract::whereHas('demands_table', function ($q) use ($country_id) {
            $q->where('countrie_id', $country_id);
        })->sum('contract_male');

        $contract_female = Contract::whereHas('demands_table', function ($q) use ($country_id) {
            $q->where('countrie_id', $country_id);
        })->sum('contract_female');

        // Sending
        $sending_total = Demand::where('countrie_id', $country->id)
            ->withCount('sendings_list_table')
            ->count();

        $sending_male = Sending::whereHas('demands_table', function ($q) use ($country_id) {
            $q->where('countrie_id', $country_id);
        })->sum('sending_male');

        $sending_female = Sending::whereHas('demands_table', function ($q) use ($country_id) {
            $q->where('countrie_id', $country_id);
        })->sum('sending_female');



        // Chart 
        // Passport Data Chart
        $months = [date('F', strtotime("-5 month"))];
        $yearMonths = [
            [
                'year' => date('Y'),
                'month' => date('m', strtotime("-5 month")),
            ]
        ];
        for ($i = -4; $i <= 0; $i++) {
            $months[] = date('F', strtotime("+$i month"));
            $yearMonths[] = [
                'year' => date('Y', strtotime("+$i month")),
                'month' => date('m', strtotime("+$i month")),
            ];
        }
        $passportData = [];
        foreach ($yearMonths as $key => $ym) {
            $passportData[] =  Passport::whereYear('created_at', $ym['year'])->whereMonth('created_at', $ym['month'])->count();
        }
        // Passport Data Chart


        // Passport Country Chart
        $countries = Country::all();
        $passportCountryData = [];
        $country = [];
        foreach ($countries as $key => $value) {
            $country[] = $value->title;
            $passportCountryData[] = Passport::where('selected_country', $value->title)->count();
        }




        // Gender Report 
        $genders = ['male', 'female'];
        $maleFemaleReport = [];
        foreach ($genders as $key => $value) {
            $maleFemaleReport[] = Passport::where('gender', $value)->count();
        }


        return view('country_dashboard.index', compact(
            'total_passport',
            'total_passport_male',
            'total_passport_female',
            'total_demand',
            'demand_male',
            'demand_female',
            'contract_total',
            'contract_male',
            'contract_female',
            'sending_total',
            'sending_male',
            'sending_female',
            'months',
            'passportData',
            'country',
            'passportCountryData',
            'genders',
            'maleFemaleReport',
        ));
    }
}
