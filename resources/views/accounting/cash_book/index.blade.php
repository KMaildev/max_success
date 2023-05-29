@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            CashBook
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                CashBook
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New CashBook
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Country List
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table id="datatable" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Date
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Day
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Month
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Year
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Reference no
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Description
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Income
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Expenses
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Tax
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Chart of Account
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Account Header
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Bank & Cash
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @include('accounting.cash_book.create')
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
