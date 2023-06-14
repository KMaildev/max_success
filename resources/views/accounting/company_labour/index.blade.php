@extends('layouts.based.accounting_main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Company & Labour
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
                                            Total Receivable Amount
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($demands as $key => $demand)
                                        <tr>
                                            <td class="text-center">
                                                {{ $key + 1 }}
                                            </td>

                                            <td class="text-center">
                                                {{ $demand->overseas_agencies_table->company_name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $amount = $demand->demand_invoices->sum('amount');
                                                    $total_labour = $demand->demand_invoices->sum('total_labour');
                                                    $total_payable = $amount * $total_labour;
                                                    echo number_format($total_payable, 2);
                                                @endphp
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    foreach ($demand->labour_management as $key => $labour_management) {
                                                        foreach ($labour_management->passport as $key => $value) {
                                                            echo $value->id;
                                                        }
                                                    }
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
