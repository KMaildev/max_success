@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Bank & Cash
                        </h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr>
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5">Bank</th>
                                        <th class="text-white w-5">Bank In</th>
                                        <th class="text-white w-5">Bank Out</th>
                                        <th class="text-white w-5">Total Balance	</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_income = [];
                                        $total_expense = [];
                                        $total_total_balance = [];
                                    @endphp
                                    @foreach ($chartof_accounts as $key => $chartof_account)
                                        <tr>
                                            <td style="text-align: center;">
                                                {{ $key + 1 }}
                                            </td>

                                            <td style="text-align: center;">
                                                {{ $chartof_account->description }}
                                            </td>

                                            <td style="text-align: right;">
                                                @php
                                                    $income = $chartof_account->bank_cash_report->sum('income');
                                                    $total_income[] = $income;
                                                    echo number_format($income, 2);
                                                @endphp
                                            </td>

                                            <td style="text-align: right;">
                                                @php
                                                    $expense = $chartof_account->bank_cash_report->sum('expense');
                                                    $total_expense[] = $expense;
                                                    echo number_format($expense, 2);
                                                @endphp
                                            </td>

                                            <td style="text-align: right;">
                                                @php
                                                    $total_balance = $income - $expense;
                                                    echo number_format(abs($total_balance), 2);
                                                    $total_total_balance[] = $total_balance;
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <tr>
                                    <th colspan="2">Total</th>
                                    <th style="text-align: right; font-weight: bold">
                                        @php
                                            $total_income = array_sum($total_income);
                                            echo number_format($total_income, 2);
                                        @endphp
                                    </th>
                                    
                                    <th style="text-align: right; font-weight: bold">
                                        @php
                                            $total_expense = array_sum($total_expense);
                                            echo number_format($total_expense, 2);
                                        @endphp
                                    </th>

                                    <th style="text-align: right; font-weight: bold">
                                        @php
                                            $total_total_balance = array_sum($total_total_balance);
                                            echo number_format(abs($total_total_balance), 2);
                                        @endphp
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
