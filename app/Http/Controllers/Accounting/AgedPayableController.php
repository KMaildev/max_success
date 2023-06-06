<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\DemandInvoice;
use Illuminate\Http\Request;

class AgedPayableController extends Controller
{
    public function index(Request $request)
    {
        $demand_invoices = DemandInvoice::with('overseas_agencies', 'cash_books')
            ->selectRaw('*, SUM(amount * total_labour) as total_amount')
            ->groupBy('overseas_agencie_id')
            ->get();

        return view('accounting.aged_payable.index', compact('demand_invoices'));
    }
}
