<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;

class DemandInvoiceController extends Controller
{
    public function index()
    {
        return view('accounting.demand_invoice.index');
    }

    public function create()
    {
        $overseas_agencies = OverseasAgency::all();
        return view('accounting.demand_invoice.create', compact('overseas_agencies'));
    }
}
