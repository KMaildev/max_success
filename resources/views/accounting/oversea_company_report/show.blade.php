@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Detail
            &nbsp;
            <small>of</small>
            &nbsp;
            {{ $overseas_agency->company_name ?? $overseas_agency->agent_company_name }}
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('accounting_dashboard.index') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Detail
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row profile-heading">

            <div class="col-sm-4 col-xs-12">
                <div class="box box-widget widget-user">

                    <div class="widget-user-header bg-green">
                        <h3 class="widget-user-username">
                            {{ $overseas_agency->company_name ?? $overseas_agency->agent_company_name }}
                        </h3>
                        <h5 class="widget-user-desc">
                            {{ $overseas_agency->created_at->diffForHumans() }}
                            <br><br>
                            From {{ $overseas_agency->countries_table->title ?? '' }}
                        </h5>
                    </div>

                    <div class="widget-user-image">
                        <svg class="svg-icon">
                            <use href="#icon-avatar"></use>
                        </svg>
                    </div>

                    <div class="box-footer">
                        <div class="row">

                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">
                                        {{ $total_demand ?? 0 }}
                                    </h5>
                                    <span class="description-text">
                                        <small>
                                            TOTAL DEMAND
                                        </small>
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-5 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">
                                        {{ number_format($total_amount, 2) }}
                                    </h5>
                                    <span class="description-text">
                                        <small>
                                            Total Payable Amount
                                        </small>
                                    </span>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="description-block">
                                    <button ng-click="customerEdit(1, 'Walking Customer')" title="Edit"
                                        class="btn btn-xs btn-info">
                                        <i class="fa fa-pencil"></i>
                                    </button>

                                    <a id="sell-product" class="btn btn-xs btn-success" target="_blink"
                                        href="pos.php?customer_id=1" title="Sell">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 contact">
                <div class="box box-info">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">
                            Agent Information
                        </h3>
                    </div>
                    <div class="box-body">
                        <address class="mb-0 text-center">
                            <p>
                                <b>
                                    Company Name:
                                </b>
                                {{ $overseas_agency->agent_company_name }}
                            </p>
                            <p>
                                <b>
                                    Contact Person:
                                </b>
                                {{ $overseas_agency->agent_contact_person }}
                            </p>


                            <p>
                                <b>
                                    Phone:
                                </b>
                                <a href="tel:{{ $overseas_agency->agent_phone }}">
                                    {{ $overseas_agency->agent_phone }}
                                </a>
                            </p>

                            <p>
                                <b>
                                    Email:
                                </b>
                                <a href="mailto:{{ $overseas_agency->agent_email }}">
                                    {{ $overseas_agency->agent_email }}
                                </a>
                            </p>

                            <p>
                                <b>
                                    Address:
                                </b>
                                {{ $overseas_agency->agent_address }}
                            </p>
                        </address>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 contact">
                <div class="box box-info">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">
                            Company Information
                        </h3>
                    </div>
                    <div class="box-body">
                        <address class="mb-0 text-center">
                            <p>
                                <b>
                                    Company Name:
                                </b>
                                {{ $overseas_agency->company_name }}
                            </p>
                            <p>
                                <b>
                                    Contact Person:
                                </b>
                                {{ $overseas_agency->contact }}
                            </p>


                            <p>
                                <b>
                                    Phone:
                                </b>
                                <a href="tel:{{ $overseas_agency->company_phone }}">
                                    {{ $overseas_agency->company_phone }}
                                </a>
                            </p>

                            <p>
                                <b>
                                    Email:
                                </b>
                                <a href="mailto:{{ $overseas_agency->company_email }}">
                                    {{ $overseas_agency->company_email }}
                                </a>
                            </p>

                            <p>
                                <b>
                                    Address:
                                </b>
                                {{ $overseas_agency->company_address }}
                            </p>
                        </address>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12 balance">
                <div class="info-box">
                    <span class="info-box-icon bg-green">
                        <i>
                            $
                        </i>
                    </span>
                    <div class="info-box-content">
                        <h4 class="info-box-text text-blue">
                            Total Payable Amount
                        </h4>
                        <span id="balance" class="info-box-number">
                            {{ number_format($total_amount, 2) }}
                        </span>

                        <hr style="margin-top:0;">
                        <h4 class="info-box-text text-green">
                            Total Paid Amount
                        </h4>
                        <span id="due" class="info-box-number">
                            {{ number_format($total_paid_amount, 2) }}
                        </span>

                        <hr style="margin-top:0;">
                        <h4 class="info-box-text text-red">
                            Total Remaining Amount
                        </h4>
                        <span id="due" class="info-box-number">
                            @php
                                $remaining_amount = $total_amount - $total_paid_amount;
                                echo number_format($remaining_amount, 2);
                            @endphp
                        </span>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered table-sm">

                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th class="text-center">
                                            Agent Company Name
                                        </th>
                                        <th class="text-center">
                                            Company Name
                                        </th>
                                        <th class="text-center">
                                            Job
                                        </th>
                                        <th class="text-center">
                                            Salary
                                        </th>
                                        <th class="text-center">
                                            Demand Date
                                        </th>
                                        <th class="text-center">
                                            Male
                                        </th>
                                        <th class="text-center">
                                            Female
                                        </th>
                                        <th class="text-center">
                                            Total
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    {{-- Group 1 --}}
                                    @foreach ($demands as $d_id => $demand)
                                        {{-- Demand Information --}}
                                        <tr data-toggle="collapse" data-target="#_{{ $d_id }}"
                                            aria-expanded="false" aria-controls="_{{ $d_id }}">

                                            <td class="text-center">
                                                <i class="fas fa-caret-down"></i>
                                            </td>

                                            <td class="text-center">
                                                {{ $demand->overseas_agencies_table->agent_company_name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $demand->overseas_agencies_table->company_name ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $demand->job ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $demand->salary ?? '' }}
                                                {{ $demand->country->currency_format ?? '' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $demand->demand_date }}
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $demand_male = $demand->male ?? 0;
                                                    echo $demand_male;
                                                @endphp
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $demand_female = $demand->female ?? 0;
                                                    echo $demand_female;
                                                @endphp
                                            </td>

                                            <td class="text-center">
                                                @php
                                                    $demald_total = $demand_male + $demand_female;
                                                    echo $demald_total;
                                                @endphp
                                            </td>
                                        </tr>

                                        {{-- Demand Invoice  --}}
                                        <tr>
                                            <td colspan="9">
                                                <div class="collapse sub-table" id="_{{ $d_id }}">
                                                    <table class="table table-bordered table-sm">
                                                        <thead>
                                                            <tr class="bg-gray">
                                                                <th class="text-center" style="width: 100px">
                                                                    #
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Invoice No
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Invoice Date
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Remark
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Male
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Female
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Total
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Amount
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Balance
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $invoice_balance = [];
                                                            @endphp
                                                            @foreach ($demand->demand_invoices as $key => $demand_invoice)
                                                                <tr>
                                                                    <td class="text-center">
                                                                        {{ $key + 1 }}
                                                                    </td>

                                                                    <td class="text-center">
                                                                        {{ $demand_invoice->invoice_no ?? '' }}
                                                                    </td>

                                                                    <td class="text-center">
                                                                        {{ $demand_invoice->submit_date ?? '' }}
                                                                    </td>

                                                                    <td class="text-center">
                                                                        {{ $demand_invoice->remark ?? '' }}
                                                                    </td>

                                                                    <td class="text-center">
                                                                        @php
                                                                            $male = $demand_invoice->demand->male ?? 0;
                                                                            echo $male;
                                                                        @endphp
                                                                    </td>

                                                                    <td class="text-center">
                                                                        @php
                                                                            $female = $demand_invoice->demand->female ?? 0;
                                                                            echo $female;
                                                                        @endphp
                                                                    </td>

                                                                    <td class="text-center">
                                                                        @php
                                                                            $total_labour = $male + $female;
                                                                            echo $total_labour;
                                                                        @endphp
                                                                    </td>

                                                                    <td class="text-center">
                                                                        @php
                                                                            $amount = $demand_invoice->amount ?? 0;
                                                                            echo number_format($amount, 2);
                                                                        @endphp
                                                                    </td>

                                                                    <td class="text-center">
                                                                        @php
                                                                            $balance = $total_labour * $amount;
                                                                            echo number_format($balance, 2);
                                                                            $invoice_balance[] = $balance;
                                                                        @endphp
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tr>
                                                            <td colspan="8">
                                                                Total Invoice Amount
                                                            </td>

                                                            <td class="text-center">
                                                                @php
                                                                    $invoice_balance = array_sum($invoice_balance);
                                                                    echo number_format($invoice_balance, 2);
                                                                @endphp
                                                            </td>
                                                        </tr>
                                                    </table>

                                                    <table class="table sub-table  table-bordered table-sm">
                                                        <thead>
                                                            <tr class="bg-gray">

                                                                <th class="text-center" style="width: 100px">
                                                                    #
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Reference no
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Payment Date
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Description
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Chart of Account
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Account Header
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Bank & Cash
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Tax
                                                                </th>

                                                                <th class="text-center" style="width: 100px">
                                                                    Amount
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $total_cash_book_tax = [];
                                                                $total_cash_book_expense = [];
                                                            @endphp
                                                            @foreach ($demand->demand_invoices as $key => $demand_invoice)
                                                                @foreach ($demand_invoice->cash_books as $key => $cash_book)
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            {{ $key + 1 }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            {{ $cash_book->reference ?? '' }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            {{ $cash_book->cash_book_date ?? '' }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            {{ $cash_book->description ?? '' }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            {{ $cash_book->chart_of_account->coa_number ?? '' }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            {{ $cash_book->chart_of_account->description ?? '' }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            {{ $cash_book->bank_cash->coa_number ?? '' }}
                                                                        </td>

                                                                        <td class="text-center">
                                                                            @php
                                                                                $cash_book_tax = $cash_book->tax ?? 0;
                                                                                echo number_format($cash_book_tax, 2);
                                                                                $total_cash_book_tax[] = $cash_book_tax;
                                                                            @endphp
                                                                        </td>

                                                                        <td class="text-center">
                                                                            @php
                                                                                $cash_book_expense = $cash_book->expense ?? 0;
                                                                                echo number_format($cash_book_expense, 2);
                                                                                $total_cash_book_expense[] = $cash_book_expense;
                                                                            @endphp
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            @endforeach
                                                        </tbody>
                                                        <tr>
                                                            <td colspan="7">
                                                                Total Paid Amount
                                                            </td>

                                                            <td class="text-center">
                                                                @php
                                                                    $total_cash_book_tax = array_sum($total_cash_book_tax);
                                                                    echo number_format($total_cash_book_tax, 2);
                                                                @endphp
                                                            </td>

                                                            <td class="text-center">
                                                                @php
                                                                    $total_cash_book_expense = array_sum($total_cash_book_expense);
                                                                    echo number_format($total_cash_book_expense, 2);
                                                                @endphp
                                                            </td>
                                                        </tr>

                                                        <tr style="background-color: #00A65A; color: white;">
                                                            <td colspan="8">
                                                                Total Remaining Amount
                                                            </td>

                                                            <td class="text-center">
                                                                @php
                                                                    $total_remaining = $invoice_balance - $total_cash_book_expense;
                                                                    echo number_format($total_remaining, 2);
                                                                @endphp
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
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
    <script>
        $(document).ready(function() {
            $('.main-category-row').click(function() {
                $(this).next('.sub-table-row').find('.sub-table').toggle();
            });
        });
    </script>
@endsection
