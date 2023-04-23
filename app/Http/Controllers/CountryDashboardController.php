<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryDashboardController extends Controller
{
    public function show($id)
    {
        // Country Configuration
        $country = Country::findOrFail($id);
        session(['country_session' => $id, 'country_title' => $country->title]);
        return view('country_dashboard.index');
    }
}
