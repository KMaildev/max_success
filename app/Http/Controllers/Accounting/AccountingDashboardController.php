<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;

class AccountingDashboardController extends Controller
{
    public function index()
    {
        return view('accounting.dashboard.index');
    }
}
