@extends('layouts.main')
@section('content')
    <!-- Content Header Start -->
    <section class="content-header">
        <h1>
            Dashboard <small>
                Store 01 </small>
        </h1>
    </section>
    <!-- ContentH eader End -->

    <!-- Content Start -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="alert alert-info mb-0">
                            <p><span class="fa fa-fw fa-info-circle"></span> This is a demo version. Data will
                                be reset in every 1 hour interval. <a
                                    style="color: #b3ffe0;font-weight: bold;border: 1px solid #fff;padding: 5px 10px;text-decoration: none;text-transform: uppercase;"
                                    href="https://1.envato.market/gbeVPO">Buy Now &rarr;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hidden-xs action-button-sm">
            <div id="action-button" class="row">
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_pos">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="pos.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-pos">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    POS </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_invoice">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="invoice.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-invoice">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Sell List </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_overview_report">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="report_overview.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-overview-report">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Overview Report </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_sell">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="report_sell_itemwise.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-sell-report">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Sell Report </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_purchase_report">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="report_purchase_itemwise.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-purchase-report">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Purchase Report </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_stock_alert">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="stock_alert.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-stock-alert">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Stock Alert </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 tour-item" id="button_expired_product">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="expired.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-expired">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Expired </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 tour-item" id="button_backup_restore">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="backup_restore.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-backup-restore">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Backup/Restore </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 tour-item" id="button_settings">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="store.php">
                                <h2>
                                    <span class="icon">
                                        <svg class="svg-icon">
                                            <use href="#icon-btn-stores">
                                        </svg>
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Stores </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Small Boxes Start -->
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div id="invoice-count" class="small-box bg-green">
                    <div class="inner">
                        <h4>
                            <i>TOTAL INVOICE</i> <span class="total-invoice">0</span>
                        </h4>
                        <h4>
                            <i>TOTAL INVOICE TODAY</i> <span class="total-invoice">0</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <a href="invoice.php" class="small-box-footer">
                        Details
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div id="customer-count" class="small-box bg-red">
                    <div class="inner">
                        <h4>
                            <i>TOTAL CUSTOMER</i> <span class="total-customer">2</span>
                        </h4>
                        <h4>
                            <i>TOTAL CUSTOMER TODAY</i> <span class="total-customer">0</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="customer.php" class="small-box-footer">
                        Details
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div id="supplier-count" class="small-box bg-purple">
                    <div class="inner">
                        <h4>
                            <i>TOTAL SUPPLIER</i> <span class="total-suppier">1</span>
                        </h4>
                        <h4>
                            <i>TOTAL SUPPLIER TODAY</i> <span class="total-suppier">0</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-shopping-cart"></i>
                    </div>
                    <a href="supplier.php" class="small-box-footer">
                        Details
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div id="product-count" class="small-box bg-yellow">
                    <div class="inner">
                        <h4>
                            <i>TOTAL PRODUCT</i> <span class="total-product">2</span>
                        </h4>
                        <h4>
                            <i>TOTAL PRODUCT TODAY</i> <span class="total-product">0</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="product.php" class="small-box-footer">
                        Details
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--Small Box End -->

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Recent Activities</h3>
                    </div>
                    <div class="box-body">
                        <div class="nav-tabs-custom mb-0">
                            <ul class="nav nav-tabs store-m15">
                                <li class="active">
                                    <a href="#sales" data-toggle="tab" aria-expanded="false">
                                        Sells </a>
                                </li>
                                <li class="">
                                    <a href="#quotations" data-toggle="tab" aria-expanded="false">
                                        Quotations </a>
                                </li>
                                <li class="">
                                    <a href="#purchases" data-toggle="tab" aria-expanded="false">
                                        Purchases </a>
                                </li>
                                <li class="">
                                    <a href="#transfers" data-toggle="tab" aria-expanded="false">
                                        Transfers </a>
                                </li>
                                <li class="">
                                    <a href="#customers" data-toggle="tab" aria-expanded="false">
                                        Customers </a>
                                </li>
                                <li class="">
                                    <a href="#suppliers" data-toggle="tab" aria-expanded="false">
                                        Suppliers </a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <!-- Sales Start -->
                                <div class="tab-pane active" id="sales">
                                    <div class="row">
                                        <div class="col-lg-8 col-xs-12">
                                            <div class="box box-default banking-box mb-0">
                                                <div class="box-body">
                                                    <div class="table-responsive" style="min-height:166px">
                                                        <table class="table table-striped no-margin">
                                                            <thead>
                                                                <tr class="bg-gray">
                                                                    <th class="text-center">Invoice Id</th>
                                                                    <th class="text-center">Created At</th>
                                                                    <th class="text-left">Customer Name</th>
                                                                    <th class="text-right">Amount</th>
                                                                    <th class="text-center">Payment Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <a href="http://itsolution24.com/posv33/admin/pos.php"
                                                        class="btn btn-xs btn-info btn-flat"><span
                                                            class="fa fa-fw fa-plus"></span> Add Sell</a>
                                                    <a href="http://itsolution24.com/posv33/admin/invoice.php"
                                                        class="btn btn-xs btn-success btn-flat"><span
                                                            class="fa fa-fw fa-list"></span> SELL LIST</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xs-12" style="padding-right: 15px">
                                            <div class="progress-group-container">
                                                <div class="progress-group">
                                                    <span class="progress-text">Sell Amount</span>
                                                    <span class="progress-number">
                                                        0.00</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-aqua" style="width: NAN%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group">
                                                    <span class="progress-text">Discount Given</span>
                                                    <span class="progress-number">0.00</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-warning" style="width:NAN%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group">
                                                    <span class="progress-text">Due Given</span>
                                                    <span class="progress-number">0.00</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-red" style="width: NAN%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-group">
                                                    <span class="progress-text">Received Amount</span>
                                                    <span class="progress-number">0.00</span>
                                                    <div class="progress sm">
                                                        <div class="progress-bar progress-bar-success"
                                                            style="width: NAN%"></div>
                                                    </div>
                                                </div>
                                                <a href="report_overview.php?type=sell"
                                                    class="btn btn-sm btn-block btn-warning btn-flat">Overview
                                                    Report &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Sales End -->

                                <!-- Quotations Start -->
                                <div class="tab-pane" id="quotations">
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-12">
                                            <div class="box box-default banking-box mb-0">
                                                <div class="box-body">
                                                    <div class="table-responsive" style="min-height:166px">
                                                        <table class="table table-striped no-margin">
                                                            <thead>
                                                                <tr class="bg-gray">
                                                                    <th class="text-center">Date</th>
                                                                    <th class="text-center">Ref. No.</th>
                                                                    <th class="text-center">Customer</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-right">Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <a href="http://itsolution24.com/posv33/admin/quotation.php?box_state=open"
                                                        class="btn btn-xs btn-info btn-flat"><span
                                                            class="fa fa-fw fa-plus"></span> Add Quotation</a>
                                                    <a href="http://itsolution24.com/posv33/admin/quotation.php"
                                                        class="btn btn-xs btn-success btn-flat"><span
                                                            class="fa fa-fw fa-list"></span> Quotation List</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quotations End -->

                                <!-- Purchases Start -->
                                <div class="tab-pane" id="purchases">
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-12">
                                            <div class="box box-default banking-box mb-0">
                                                <div class="box-body">
                                                    <div class="table-responsive" style="min-height:166px">
                                                        <table class="table table-striped no-margin">
                                                            <thead>
                                                                <tr class="bg-gray">
                                                                    <th class="text-center">Invoice Id</th>
                                                                    <th class="text-center">Created At</th>
                                                                    <th class="text-center">Supplier Name</th>
                                                                    <th class="text-right">Amount</th>
                                                                    <th class="text-center">Payment Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center"><a
                                                                            href="http://itsolution24.com/posv33/admin/purchase.php?invoice_id=B123122">B123122</a>
                                                                    </td>
                                                                    <td class="text-center">2022-01-04 12:13:55
                                                                    </td>
                                                                    <td class="text-center">No Supplier</td>
                                                                    <td class="text-right">4,000.00</td>
                                                                    <td class="text-center"><span
                                                                            class="label label-success">Paid</span></span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <a href="http://itsolution24.com/posv33/admin/purchase.php?box_state=open"
                                                        class="btn btn-xs btn-info btn-flat"><span
                                                            class="fa fa-fw fa-plus"></span> Add Purchase</a>
                                                    <a href="http://itsolution24.com/posv33/admin/purchase.php"
                                                        class="btn btn-xs btn-success btn-flat"><span
                                                            class="fa fa-fw fa-list"></span> Purchase List</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Purchases End -->

                                <!-- Transfers Start -->
                                <div class="tab-pane" id="transfers">
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-12">
                                            <div class="box box-default banking-box mb-0">
                                                <div class="box-body">
                                                    <div class="table-responsive" style="min-height:166px">
                                                        <table class="table table-striped no-margin">
                                                            <thead>
                                                                <tr class="bg-gray">
                                                                    <th class="text-center">Date</th>
                                                                    <th class="text-center">Invoice Id</th>
                                                                    <th class="text-center">From</th>
                                                                    <th class="text-center">To</th>
                                                                    <th class="text-center">Status</th>
                                                                    <th class="text-center">Quantity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <a href="http://itsolution24.com/posv33/admin/transfer.php?box_state=open"
                                                        class="btn btn-xs btn-info btn-flat"><span
                                                            class="fa fa-fw fa-plus"></span> Add Transfer</a>
                                                    <a href="http://itsolution24.com/posv33/admin/transfer.php"
                                                        class="btn btn-xs btn-success btn-flat"><span
                                                            class="fa fa-fw fa-list"></span> Transfer List</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Transfers End -->

                                <!-- Customers Start -->
                                <div class="tab-pane" id="customers">
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-12">
                                            <div class="box box-default banking-box mb-0">
                                                <div class="box-body">
                                                    <div class="table-responsive" style="min-height:166px">
                                                        <table class="table table-striped no-margin">
                                                            <thead>
                                                                <tr class="bg-gray">
                                                                    <th>Customer Name</th>
                                                                    <th>Phone</th>
                                                                    <th>Email</th>
                                                                    <th>Address</th>
                                                                    <th>Created At</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a
                                                                            href="http://itsolution24.com/posv33/admin/customer_profile.php?customer_id=2">John
                                                                            Doe</a></td>
                                                                    <td></td>
                                                                    <td>8c22e4@gmail.com</td>
                                                                    <td>BD</td>
                                                                    <td>2022-01-04 12:14:35</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a
                                                                            href="http://itsolution24.com/posv33/admin/customer_profile.php?customer_id=1">Walking
                                                                            Customer</a></td>
                                                                    <td>0170000000000</td>
                                                                    <td>wc@itsolution24.com</td>
                                                                    <td>BD</td>
                                                                    <td>2018-04-29 14:18:37</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <a href="http://itsolution24.com/posv33/admin/customer.php?box_state=open"
                                                        class="btn btn-xs btn-info btn-flat"><span
                                                            class="fa fa-fw fa-plus"></span> Add Customer</a>
                                                    <a href="http://itsolution24.com/posv33/admin/customer.php"
                                                        class="btn btn-xs btn-success btn-flat"><span
                                                            class="fa fa-fw fa-list"></span> Customer List</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Customers End -->

                                <!-- Suppliers Start -->
                                <div class="tab-pane" id="suppliers">
                                    <div class="row">
                                        <div class="col-lg-12 col-xs-12">
                                            <div class="box box-default banking-box mb-0">
                                                <div class="box-body">
                                                    <div class="table-responsive" style="min-height:166px">
                                                        <table class="table table-striped no-margin">
                                                            <thead>
                                                                <tr class="bg-gray">
                                                                    <th>Supplier Name</th>
                                                                    <th>Phone</th>
                                                                    <th>Email</th>
                                                                    <th>Address</th>
                                                                    <th>Created At</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><a
                                                                            href="http://itsolution24.com/posv33/admin/supplier_profile.php?sup_id=1">No
                                                                            Supplier</a></td>
                                                                    <td>016000000</td>
                                                                    <td>supplier@itsolution24.com</td>
                                                                    <td>USA</td>
                                                                    <td>2018-03-24 20:19:51</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="box-footer clearfix">
                                                    <a href="http://itsolution24.com/posv33/admin/supplier.php?box_state=open"
                                                        class="btn btn-xs btn-info btn-flat"><span
                                                            class="fa fa-fw fa-plus"></span> Add Supplier</a>
                                                    <a href="http://itsolution24.com/posv33/admin/supplier.php"
                                                        class="btn btn-xs btn-success btn-flat"><span
                                                            class="fa fa-fw fa-list"></span> Supplier List</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Suppliers End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accounting Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info mb-0">
                    <div class="box-body deposit-today">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6">
                                <div class="description-block border-right">
                                    <h2 class="description-header">0.00</h2>
                                    <h4 class="description-text">Deposit Today</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="description-block border-right">
                                    <h2 class="description-header">0.00</h2>
                                    <h4 class="description-text">Widthdraw Today</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="row">
                            <div class="pr-15 col-md-6 col-xs-12">
                                <div class="box box-default banking-box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Recent Deposit</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive" style="min-height:150px">
                                            <table class="table table-striped no-margin">
                                                <thead>
                                                    <tr class="bg-gray">
                                                        <th class="w-35 text-center">Date</th>
                                                        <th class="w-45">Description</th>
                                                        <th class="w-20 text-right">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box-footer clearfix text-center">
                                        <a href="http://itsolution24.com/posv33/admin/bank_transactions.php">View
                                            All &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            <div class="pr-15 pl-5 col-md-6 col-xs-12">
                                <div class="box box-default banking-box">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Recent Withdraw</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive" style="min-height:150px">
                                            <table class="table table-striped no-margin">
                                                <thead>
                                                    <tr class="bg-gray">
                                                        <th class="w-35 text-center">Date</th>
                                                        <th class="w-45">Description</th>
                                                        <th class="w-20 text-right">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="w-35 text-center">2022-01-04 12:13:55</td>
                                                        <td class="w-45"><a class="view-withdraw" data-refno="W1"
                                                                href="#"
                                                                style="white-space:nowrap;max-width:100%;overflow:hidden;display:inline-block;">Debit
                                                                for Product Purchase</a></td>
                                                        <td class="w-20 text-right">4,000.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box-footer clearfix text-center">
                                        <a href="http://itsolution24.com/posv33/admin/bank_transactions.php">View
                                            All &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accounting End -->

        <hr>

        <div class="row">
            <div class="col-md-12 tour-item">
                <div class="box box-info mb-0">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            Income vs Expense &rarr;April, 2023 </h4>
                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a class="btn btn-xs btn-info" href="income-vs-expense.js"
                                    id="income-expense-graph"><span class="fa fa-fw fa-download"></span>Download as
                                    PNG</a>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <canvas id="income-vs-expense" class="report-chart"></canvas>
                    </div>
                    <div class="box-footer text-center">
                        <a href="report_income_and_expense.php">
                            Details <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>


                <script type="text/javascript">
                    $(function() {
                        var labels = ["Day: 1", "Day: 2", "Day: 3", "Day: 4", "Day: 5", "Day: 6", "Day: 7", "Day: 8", "Day: 9",
                            "Day: 10", "Day: 11", "Day: 12", "Day: 13", "Day: 14", "Day: 15", "Day: 16", "Day: 17",
                            "Day: 18", "Day: 19", "Day: 20", "Day: 21", "Day: 22", "Day: 23", "Day: 24", "Day: 25",
                            "Day: 26", "Day: 27", "Day: 28", "Day: 29", "Day: 30"
                        ];
                        var incomes = ["0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00",
                            "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00",
                            "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00"
                        ];
                        var expenses = ["0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00",
                            "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00",
                            "0.00", "0.00", "0.00", "0.00", "0.00", "0.00", "0.00"
                        ];
                        // var profitData = ["0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00","0.00"];
                        var ctx = document.getElementById("income-vs-expense");
                        ctx.height = 80;
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: labels,
                                datasets: [{
                                        label: "Income",
                                        borderColor: "#27CDF7",
                                        borderWidth: "1",
                                        backgroundColor: "#27CDF7",
                                        pointHighlightStroke: "rgba(26,179,148,1)",
                                        data: incomes
                                    },
                                    {
                                        label: "Expense",
                                        borderColor: "#27CDF7",
                                        borderWidth: "1",
                                        backgroundColor: "#00A65A",
                                        pointHighlightStroke: "rgba(26,179,148,1)",
                                        data: expenses
                                    },
                                ]
                            },
                            options: {
                                responsive: true,
                                tooltips: {
                                    mode: 'index',
                                    intersect: false
                                },
                                hover: {
                                    mode: 'nearest',
                                    intersect: true
                                },
                                barPercentage: 0.5
                            }
                        });
                        $("#income-expense-graph").on("click", function(e) {
                            var link = $(this);
                            var canvas = document.getElementById("income-vs-expense");
                            var img = canvas.toDataURL("image/png");
                            link.attr("href", img);
                            link.attr("download", "Income vs Expense-" + window.formatDate(new Date()) + ".png");
                        });
                        // $("#income-vs-expense").css({height:"500px", paddingRight:"40px",paddingLeft:"40px"});
                    });
                </script>
            </div>
        </div>
    </section>
    <!-- Content End -->
@endsection
