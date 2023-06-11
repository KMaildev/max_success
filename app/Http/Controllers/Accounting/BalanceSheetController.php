<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\CashBook;
use App\Models\ChartofAccount;
use Illuminate\Http\Request;

class BalanceSheetController extends Controller
{
    public function index()
    {
        $chart_of_accounts = ChartofAccount::all();
        return view('accounting.balace_sheet.index', compact('chart_of_accounts'));
    }
}
