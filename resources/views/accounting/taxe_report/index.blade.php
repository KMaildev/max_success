@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Tax Report
                        </h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>
                                        <th class="text-white w-5">
                                            Tax Name
                                        </th>
                                        <th class="text-white w-5">
                                            Income
                                        </th>
                                        <th class="text-white w-5">
                                            Tax
                                        </th>
                                        <th class="text-white w-5">
                                            Expenses
                                        </th>
                                        <th class="text-white w-5">
                                            Tax
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($taxes as $key => $taxe)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                {{ $taxe->tax_name ?? '' }}
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $income = $taxe->cashbook->sum('income');
                                                    $total_income[] = $income;
                                                    echo number_format($income, 2);
                                                @endphp
                                            </td>

                                            <td>

                                            </td>


                                            <td style="text-align: right">
                                                @php
                                                    $expense = $taxe->cashbook->sum('expense');
                                                    $total_expense[] = $expense;
                                                    echo number_format($expense, 2);
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
