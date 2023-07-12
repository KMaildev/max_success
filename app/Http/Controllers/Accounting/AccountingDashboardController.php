<?php

namespace App\Http\Controllers\Accounting;

use App\Http\Controllers\Controller;
use App\Models\CashBook;
use App\Models\Demand;
use App\Models\DemandInvoice;
use App\Models\PassportPayment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccountingDashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();

        // Labour Payment 
        $total_labour_payment = PassportPayment::sum('deposit');
        $total_labour_payment_today = PassportPayment::whereDate('deposit_date', $today)
            ->sum('deposit');

        // Demand Invoice 
        $total_labour_invoice = DemandInvoice::selectRaw('sum(amount * total_labour) as total_sum')
            ->value('total_sum');
        $total_labour_invoice_today = DemandInvoice::selectRaw('sum(amount * total_labour) as total_sum')
            ->whereDate('submit_date', $today)
            ->value('total_sum');


        // Total Income form cashbook 
        $total_income = CashBook::sum('income');
        $total_income_today = CashBook::whereDate('cash_book_date', $today)
            ->sum('income');

        $total_expense = CashBook::sum('expense');
        $total_expense_today = CashBook::whereDate('cash_book_date', $today)
            ->sum('expense');





        // Chart 
        $months = [date('F-Y', strtotime("-5 month"))];
        $yearMonths = [
            [
                'year' => date('Y'),
                'month' => date('m', strtotime("-5 month")),
            ]
        ];
        for ($i = -4; $i <= 0; $i++) {
            $months[] = date('F-Y', strtotime("+$i month"));
            $yearMonths[] = [
                'year' => date('Y', strtotime("+$i month")),
                'month' => date('m', strtotime("+$i month")),
            ];
        }

        $incomeData = [];
        foreach ($yearMonths as $key => $ym) {
            $incomeData[] = CashBook::selectRaw('SUM(income) as total')
                ->whereYear('created_at', $ym['year'])
                ->whereMonth('created_at', $ym['month'])
                ->first()
                ->total;
        }


        $expenseData = [];
        foreach ($yearMonths as $key => $ym) {
            $expenseData[] = CashBook::selectRaw('SUM(expense) as total')
                ->whereYear('created_at', $ym['year'])
                ->whereMonth('created_at', $ym['month'])
                ->first()
                ->total;
        }




        // Get the start and end dates for the week
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();
        // Query your income and expense data for the weekly report (modify according to your needs)
        $incomeWeeklyData = CashBook::whereBetween('created_at', [$startDate, $endDate])
            ->orderBy('created_at')
            ->get();

        $expenseWeeklyData = CashBook::whereBetween('created_at', [$startDate, $endDate])
            ->orderBy('created_at')
            ->get();

        // Prepare the data for the chart
        $chartIncomeData = $incomeWeeklyData->pluck('income');
        $chartExpenseData = $expenseWeeklyData->pluck('expense');
        $chartLabels = $incomeWeeklyData->pluck('created_at')->map(function ($date) {
            return Carbon::parse($date)->format('M d');
        });

        return view('accounting.dashboard.index', compact(
            'total_labour_payment',
            'total_labour_payment_today',
            'total_labour_invoice',
            'total_labour_invoice_today',
            'total_income',
            'total_income_today',
            'total_expense',
            'total_expense_today',

            'months',
            'incomeData',
            'expenseData',

            'chartIncomeData',
            'chartExpenseData',
            'chartLabels'
        ));
    }
}
