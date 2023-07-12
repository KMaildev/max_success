<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Country;
use App\Models\Demand;
use App\Models\Interview;
use App\Models\OverseasAgency;
use App\Models\Passport;
use App\Models\Sending;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countries = Country::all();


        // Chart 
        // Passport Data Chart
        $months = [date('F-Y', strtotime("-5 month"))];
        $yearMonths = [
            [
                'year' => date('Y'),
                'month' => date('m', strtotime("-5 month")),
            ]
        ];
        for ($i = -4; $i <= 0; $i++) {
            $months[] = date('F-Y', strtotime("+$i month"));
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


        // Passport 
        $total_passport = Passport::count();
        $total_passport_male = Passport::where('gender', 'male')
            ->count();
        $total_passport_female = Passport::where('gender', 'female')
            ->count();

        // Demand 
        $total_demand = Demand::count();
        $demand_male = Demand::sum('male');
        $demand_female = Demand::sum('female');

        // Contract 
        $contract_total = Demand::withCount('contract_list_table')
            ->count();

        $contract_male = Contract::sum('contract_male');

        $contract_female = Contract::sum('contract_female');

        // Sending
        $sending_total = Demand::withCount('sendings_list_table')
            ->count();

        $sending_male = Sending::sum('sending_male');

        $sending_female = Sending::sum('sending_female');


        return view('home', compact(
            'countries',
            'months',
            'passportData',

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
        ));
    }
}
