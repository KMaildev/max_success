<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Demand;
use App\Models\Interview;
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
        // Demand Total 
        $demand_male = Demand::sum('male');
        $demand_female = Demand::sum('female');
        $total_demand = $demand_male + $demand_female;

        // Interview Total 
        $interview_male = Interview::sum('interview_male');
        $interview_female = Interview::sum('interview_female');
        $total_interview = $interview_male + $interview_female;

        // Contract 
        $contract_male = Contract::sum('contract_male');
        $contract_female = Contract::sum('contract_female');
        $total_contract = $contract_male + $contract_female;

        // Sending
        $sending_male = Sending::sum('sending_male');
        $sending_female = Sending::sum('sending_female');
        $total_sending = $sending_male + $sending_female;


        $chart_options = [
            'chart_title' => 'Daily Data Entry - Labour',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Passport',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            // 'filter_days' => 30, 
        ];

        $passports_report = new LaravelChart($chart_options);


        $chart_options = [
            'chart_title' => 'Medical Test - Failed & Pass',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\MedicalTest',
            'group_by_field' => 'failed_or_pass',
            'chart_type' => 'pie',
        ];
        $medical_test = new LaravelChart($chart_options);


        $chart_options = [
            'chart_title' => 'Male - Female',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Passport',
            'group_by_field' => 'gender',
            'chart_type' => 'pie',
        ];
        $passport_male_female = new LaravelChart($chart_options);


        return view('home', compact('total_demand', 'total_interview', 'total_contract', 'total_sending', 'passports_report', 'medical_test', 'passport_male_female'));
    }
}
