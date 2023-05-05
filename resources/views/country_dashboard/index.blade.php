@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            {{ session('country_title') }}
            Dashboard
        </h1>
    </section>

    <section class="content">
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
    </section>
@endsection
