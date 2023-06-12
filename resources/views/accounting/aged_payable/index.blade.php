@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Aged Payable
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
                                <thead class="tbbg">
                                    <tr class="bg-gray">
                                        <th class="text-white w-5" style="width: 1%;">#</th>
                                        <th class="text-white w-5">
                                            Company Name
                                        </th>
                                        <th class="text-white w-5">
                                            Total Payable Amount
                                        </th>
                                        <th class="text-white w-5">
                                            Total Paid Amount
                                        </th>
                                        <th class="text-white w-5">
                                            Total Remaining Amount
                                        </th>
                                        <th class="text-white w-5">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $all_pay_amount = [];
                                        $all_remaining_amount = [];
                                    @endphp
                                    @foreach ($demand_invoices as $key => $demand_invoice)
                                        <tr>
                                            <td>
                                                {{ $key + 1 }}
                                            </td>

                                            <td>
                                                {{ $demand_invoice->overseas_agencies->company_name ?? '' }}
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $total_amount = $demand_invoice->total_amount ?? 0;
                                                    echo number_format($total_amount, 2);
                                                @endphp
                                            </td>

                                            <td style="text-align: right">
                                                @php
                                                    $total_pay_amount = $demand_invoice->cash_books->sum('expense');
                                                    echo number_format($total_pay_amount, 2);
                                                    $all_pay_amount[] = $total_pay_amount;
                                                @endphp
                                            </td>

                                            {{-- Remaining Amount --}}
                                            <td style="text-align: right">
                                                @php
                                                    $remaining_amount = $total_amount - $total_pay_amount;
                                                    echo number_format($remaining_amount, 2);
                                                    $all_remaining_amount[] = $remaining_amount;
                                                @endphp
                                            </td>

                                            <td class="text-center">
                                                <a href="{{ route('oversea_company_report.show', $demand_invoice->overseas_agencie_id) }}"
                                                    class="btn btn-sm btn-block btn-primary">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tr>
                                    <td colspan="2">
                                        Total
                                    </td>

                                    <td style="text-align: right">
                                        @php
                                            $all_total_amount = $demand_invoices->sum('total_amount');
                                            echo number_format($all_total_amount, 2);
                                        @endphp
                                    </td>

                                    <td style="text-align: right">
                                        @php
                                            $all_total_pay_amount = array_sum($all_pay_amount);
                                            echo number_format($all_total_pay_amount, 2);
                                        @endphp
                                    </td>

                                    <td style="text-align: right">
                                        @php
                                            $all_remaining_amount = array_sum($all_remaining_amount);
                                            echo number_format($all_remaining_amount, 2);
                                        @endphp
                                    </td>
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
