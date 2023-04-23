<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Country;
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
        $countries = Country::all();
        return view('home', compact('countries'));
    }
}
