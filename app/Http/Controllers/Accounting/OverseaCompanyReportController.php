<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\DemandInvoice;
use App\Models\OverseasAgency;
use Illuminate\Http\Request;

class OverseaCompanyReportController extends Controller
{
    public function show($id)
    {
        $overseas_agency = OverseasAgency::findOrFail($id);

        $total_demand = Demand::where('overseas_agencie_id', $id)
            ->count();

        $demands = Demand::with('demand_invoices')
            ->where('overseas_agencie_id', $id)
            ->get();
            
        $demand_invoices = DemandInvoice::with('cash_books')
            ->where('overseas_agencie_id', $id)
            ->get();

        $total_amount = [];
        $paid_amount = [];
        foreach ($demand_invoices as $key => $demand_invoice) {
            $total_amount[] = $demand_invoice->amount * $demand_invoice->total_labour;
            $paid_amount[] = $demand_invoice->cash_books->sum('expense');
        }
        $total_paid_amount = array_sum($paid_amount);
        $total_amount = array_sum($total_amount);

        return view('accounting.oversea_company_report.show', compact('overseas_agency', 'demands', 'total_demand', 'demand_invoices', 'total_paid_amount', 'total_amount'));
    }
}
