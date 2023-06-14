<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\DemandInvoice;
use Illuminate\Http\Request;

class CompanyLabourController extends Controller
{
    public function index()
    {
        $demand_invoices = DemandInvoice::with('demand', 'overseas_agencies')
            ->get();
        
        $demands = Demand::all();
        return view('accounting.company_labour.index', compact('demands'));
    }
}
