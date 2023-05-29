<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCashBook;
use App\Models\CashBook;
use App\Models\ChartofAccount;
use Illuminate\Http\Request;

class CashBookController extends Controller
{
    public function index()
    {
        $chartof_accounts = ChartofAccount::all();
        return view('accounting.cash_book.index', compact('chartof_accounts'));
    }


    public function store(StoreCashBook $request)
    {
        $cash_book = new CashBook();
        $cash_book->cash_book_date = $request->cash_book_date;
        $cash_book->entry_day = $request->day;
        $cash_book->entry_month = $request->month;
        $cash_book->entry_year = $request->year;
        $cash_book->reference = $request->reference;
        $cash_book->description = $request->description;
        $cash_book->income = $request->income;
        $cash_book->expense = $request->expense;
        $cash_book->tax = $request->tax;
        $cash_book->chartof_account_id = $request->chartof_account_id;
        $cash_book->bank_cash_id = $request->bank_cash_id;
        $cash_book->user_id = auth()->user()->id;
        $cash_book->save();
        
        return response()->json(
            [
                'message' => 'Cashbook created successfully.',
                'status' => 200,
            ]
        );
    }
}
