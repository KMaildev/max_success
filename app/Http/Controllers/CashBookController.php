<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCashBook;
use App\Models\CashBook;
use App\Models\ChartofAccount;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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


    public function cashbook_datatable(Request $request)
    {
        $data = CashBook::with('chart_of_account', 'bank_cash')
            ->orderBy('id', 'DESC');

        return DataTables::of($data)
            ->addIndexColumn()

            ->editColumn('chart_of_account', function ($each) {
                return  $each->chart_of_account ? $each->chart_of_account->coa_number : $each->chart_of_account->coa_number;
            })

            ->editColumn('account_header', function ($each) {
                return  $each->chart_of_account ? $each->chart_of_account->description : $each->chart_of_account->description;
            })

            ->editColumn('bank_cash', function ($each) {
                return  $each->bank_cash ? $each->bank_cash->coa_number : $each->bank_cash->coa_number;
            })

            ->addColumn('edit', function ($each) {
                $edit =
                    '
                        <button type="button" class="btn btn-sm btn-block btn-primary"
                            id="editCashBook"
                            data-id="' . $each->id . '"
                            >
                            <i class="fa fa-fw fa-pencil"></i>
                        </button>
                    ';
                return $edit;
            })

            ->addColumn('delete', function ($each) {
                $delete =
                    '
                        <button type="button" class="btn btn-sm btn-block btn-danger"
                            id="deleteCashBook"
                            data-id="' . $each->id . '"
                            >
                            <i class="fa fa-x fa-pencil"></i>
                        </button>
                    ';
                return $delete;
            })

            ->addIndexColumn()
            ->rawColumns(['chart_of_account', 'account_header', 'bank_cash', 'edit', 'delete'])
            ->make(true);
    }


    public function edit($id)
    {
        $cash_book = CashBook::findOrFail($id);
        $chartof_accounts = ChartofAccount::all();

        return response()->json([
            'html' => view('accounting.cash_book.edit_form', compact('cash_book', 'chartof_accounts'))
                ->render()
        ]);
    }


    public function update(StoreCashBook $request)
    {
        $id = $request->cash_book_id;
        $cash_book = CashBook::findOrFail($id);
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
        $cash_book->update();

        return response()->json(
            [
                'message' => 'Cashbook created successfully.',
                'status' => 200,
            ]
        );
    }

    public function destroy(Request $request)
    {
        $id = $request->cash_book_id;
        $cash_book = CashBook::findOrFail($id);
        $cash_book->delete();
        return response()->json(
            [
                'message' => 'Cashbook deleted successfully.',
                'status' => 200,
            ]
        );
    }
}
