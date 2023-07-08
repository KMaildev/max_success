<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\ChartofAccount;
use Illuminate\Http\Request;

class BankReportController extends Controller
{
    public function index()
    {
        $chartof_accounts = ChartofAccount::orderBy('chartof_account_id')
            ->where('sub_or_main_account', 'sub_account')
            ->get();
        return view('accounting.bank_report.index', compact('chartof_accounts'));
    }
}
