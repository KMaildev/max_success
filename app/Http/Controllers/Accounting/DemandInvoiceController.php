<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDemandInvoice;
use App\Models\Demand;
use App\Models\DemandInvoice;
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

    public function store(StoreDemandInvoice $request)
    {
        $demand_invoices = new DemandInvoice();
        $demand_invoices->submit_date = $request->submit_date;
        $demand_invoices->overseas_agencie_id = $request->overseas_agencie_id;
        $demand_invoices->demand_id = $request->demand_id;
        $demand_invoices->amount = $request->amount;
        $demand_invoices->total_labour = $request->total_labour;
        $demand_invoices->remark = $request->remark;
        $demand_invoices->user_id = auth()->user()->id;
        $demand_invoices->save();

        return redirect()->back()->with('success', 'Your processing has been completed.');
    }
}
