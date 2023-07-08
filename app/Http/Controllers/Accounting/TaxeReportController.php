<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\Taxes;
use Illuminate\Http\Request;

class TaxeReportController extends Controller
{
    public function index()
    {
        $taxes = Taxes::all();
        return view('accounting.taxe_report.index', compact('taxes'));
    }
}
