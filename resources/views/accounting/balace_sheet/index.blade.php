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

                        <div class="box-tools pull-right">

                            <div class="btn-group" style="max-width: 240px;">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control date_picker" style="width: 100px;">
                                        <input type="text" class="form-control date_picker" style="width: 100px;">
                                        <button class="input-group-addon no-print" style="width: 40px; height: 34px;">
                                            <i class="fa fa-search" id="addIcon" style="font-size: 1.2em;"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info dropdown-toggle btn-lg" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                    <span class="fa fa-fw fa-filter"></span>
                                    Filters <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu ps ps--theme_default" role="menu">

                                    <li>
                                        <a href="javascript:void(0);">
                                            This Week
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);">
                                            Last Week
                                        </a>
                                    </li>

                                    <hr class="dropdown-divider">
                                    <li>
                                        <a href="javascript:void(0);">
                                            This Month
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:void(0);">
                                            Last Month
                                        </a>
                                    </li>

                                    <hr class="dropdown-divider">
                                    <li>
                                        <a href="javascript:void(0);">
                                            Current Year
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            Last Year
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <a href="#" class="btn btn-danger btn-lg">
                                <i class="fa fa-file-pdf"></i>
                                PDF
                            </a>

                            <a href="#" class="btn btn-success btn-lg">
                                <i class="fa fa-file-excel"></i>
                                Excel
                            </a>



                        </div>
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
