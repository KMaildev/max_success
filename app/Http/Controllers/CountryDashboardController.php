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


        return view('country_dashboard.index', compact('total_passport', 'total_passport_male', 'total_passport_female', 'total_demand', 'demand_male', 'demand_female', 'contract_total', 'contract_male', 'contract_female', 'sending_total', 'sending_male', 'sending_female'));
    }
}
