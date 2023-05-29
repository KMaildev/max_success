<?php

namespace App\Http\Controllers;

use App\Models\ChartofAccount;
use Illuminate\Http\Request;

class CashBookController extends Controller
{
    public function index()
    {
        $chartof_accounts = ChartofAccount::all();
        return view('accounting.cash_book.index', compact('chartof_accounts'));
    }

    public function create()
    {
        return view('accounting.cash_book.create');
    }
}
