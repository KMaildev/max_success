@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Balance Sheet
                        </h3>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">

                                {{-- Fixed Assets --}}
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-white w-5">
                                            Fixed Assets
                                        </th>

                                        <th class="text-white w-5">
                                            Account Number
                                        </th>

                                        <th class="text-white w-5">
                                            Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_fixed_assets = [];
                                    @endphp
                                    @foreach ($chart_of_accounts->where('account_type_id', 6) as $key => $account)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            <td>
                                                {{ $account->description ?? '' }}
                                            </td>

                                            <td>
                                                {{ $account->coa_number ?? '' }}
                                            </td>

                                            <td style="text-align: right;">
                                                @php
                                                    $fixed_assets = $account->cash_books_table->sum('expense');
                                                    echo number_format($fixed_assets, 2);
                                                    $total_fixed_assets[] = $fixed_assets;
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3">
                                            Total
                                        </td>
                                        <td style="text-align: right;">
                                            @php
                                                $total_fixed_assets = array_sum($total_fixed_assets);
                                                echo number_format($total_fixed_assets, 2);
                                            @endphp
                                        </td>
                                    </tr>
                                </tbody>


                                {{-- Current Assets --}}
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-white w-5">
                                            Current Assets
                                        </th>

                                        <th class="text-white w-5">
                                            Account Number
                                        </th>

                                        <th class="text-white w-5">
                                            Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_current_assets = [];
                                    @endphp
                                    @foreach ($chart_of_accounts->where('account_classification_id', 1) as $key => $account)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            <td>
                                                {{ $account->description ?? '' }}
                                            </td>

                                            <td>
                                                {{ $account->coa_number ?? '' }}
                                            </td>

                                            <td style="text-align: right;">
                                                @php
                                                    $current_assets = $account->cash_books_table->sum('expense');
                                                    echo number_format($current_assets, 2);
                                                    $total_current_assets[] = $current_assets;
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3">
                                            Total
                                        </td>
                                        <td style="text-align: right;">
                                            @php
                                                $total_current_assets = array_sum($total_current_assets);
                                                echo number_format($total_current_assets, 2);
                                            @endphp
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="3">
                                            Total Assets
                                        </td>
                                        <td style="text-align: right; font-weight: bold;">
                                            @php
                                                $all_total_assets = $total_fixed_assets + $total_current_assets;
                                                echo number_format($all_total_assets, 2);
                                            @endphp
                                        </td>
                                    </tr>
                                </tbody>



                                {{-- EQUITY	 --}}
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-white w-5">
                                            Equity
                                        </th>

                                        <th class="text-white w-5">
                                            Account Number
                                        </th>

                                        <th class="text-white w-5">
                                            Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_equity = [];
                                    @endphp
                                    @foreach ($chart_of_accounts->where('account_classification_id', 2) as $key => $account)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            <td>
                                                {{ $account->description ?? '' }}
                                            </td>

                                            <td>
                                                {{ $account->coa_number ?? '' }}
                                            </td>

                                            <td style="text-align: right;">
                                                @php
                                                    $equity = $account->cash_books_table->sum('income');
                                                    echo number_format($equity, 2);
                                                    $total_equity[] = $equity;
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3">
                                            Total
                                        </td>
                                        <td style="text-align: right;">
                                            @php
                                                $total_equity = array_sum($total_equity);
                                                echo number_format($total_equity, 2);
                                            @endphp
                                        </td>
                                    </tr>
                                </tbody>



                                {{-- LIABILITIES --}}
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-white w-5">
                                            Liabilities
                                        </th>

                                        <th class="text-white w-5">
                                            Account Number
                                        </th>

                                        <th class="text-white w-5">
                                            Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total_liabilities = [];
                                    @endphp
                                    @foreach ($chart_of_accounts->where('account_classification_id', 11) as $key => $account)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>

                                            <td>
                                                {{ $account->description ?? '' }}
                                            </td>

                                            <td>
                                                {{ $account->coa_number ?? '' }}
                                            </td>

                                            <td style="text-align: right;">
                                                @php
                                                    $liabilities = $account->cash_books_table->sum('income');
                                                    echo number_format($liabilities, 2);
                                                    $total_liabilities[] = $liabilities;
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="3">
                                            Total
                                        </td>
                                        <td style="text-align: right;">
                                            @php
                                                $total_liabilities = array_sum($total_liabilities);
                                                echo number_format($total_liabilities, 2);
                                            @endphp
                                        </td>
                                    </tr>


                                    <tr>
                                        <td colspan="3">
                                            Total Equity & Liabilities
                                        </td>
                                        <td style="text-align: right; font-weight: bold;">
                                            @php
                                                $total_equity_liabilities = $total_equity + $total_liabilities;
                                                echo number_format($total_equity_liabilities, 2);
                                            @endphp
                                        </td>
                                    </tr>
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
