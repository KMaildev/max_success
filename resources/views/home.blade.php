@extends('layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Dashboard
        </h1>
    </section>

    <!-- Content Start -->
    <section class="content">
        <div class="hidden-xs action-button-sm">
            <div id="action-button" class="row">
                @foreach ($countries as $key => $country)
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_pos">
                        <div class="panel panel-app">
                            <div class="panel-body">
                                <a class="panel-app-link" href="{{ route('country_dashboard.show', $country->id) }}">
                                    <h2>
                                        <span class="icon">
                                            @if ($country->image)
                                                <img src="{{ Storage::url($country->image) }}" alt=""
                                                    style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                            @endif
                                        </span>
                                    </h2>
                                    <div class="small small2">
                                        {{ $country->title ?? '' }}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_pos">
                    <div class="panel panel-app">
                        <div class="panel-body">
                            <a class="panel-app-link" href="{{ route('accounting_dashboard.index') }}">
                                <h2>
                                    <span class="icon">
                                        <img src="{{ asset('data/icons/accounting.png') }}" alt=""
                                            style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                    </span>
                                </h2>
                                <div class="small small2">
                                    Accounting
                                </div>
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
                            <i>TOTAL LABOUR</i>
                            <span class="total-invoice">0</span>
                        </h4>
                        <h4>
                            <i>TOTAL LABOUR TODAY</i>
                            <span class="total-invoice">0</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <a href="" class="small-box-footer">
                        Details
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div id="customer-count" class="small-box bg-red">
                    <div class="inner">
                        <h4>
                            <i>TOTAL OVERSEA COMPANY</i>
                            <span class="total-customer">2</span>
                        </h4>
                        <h4>
                            <i>TOTAL COMPANY TODAY</i>
                            <span class="total-customer">0</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Details
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div id="supplier-count" class="small-box bg-purple">
                    <div class="inner">
                        <h4>
                            <i>TOTAL LOCAL AGENT</i>
                            <span class="total-suppier">1</span>
                        </h4>
                        <h4>
                            <i>TOTAL AGENT TODAY</i>
                            <span class="total-suppier">0</span>
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
                            <i>TOTAL DEMAND</i>
                            <span class="total-product">2</span>
                        </h4>
                        <h4>
                            <i>TOTAL DEMAND TODAY</i>
                            <span class="total-product">0</span>
                        </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        Details
                        <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!--Small Box End -->


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
                                <a class="btn btn-xs btn-info" href="income-vs-expense.js" id="income-expense-graph"><span
                                        class="fa fa-fw fa-download"></span>Download as
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

        <hr>

        <div class="row">
            <h6>
                Need to update to the next version.
            </h6>
            <ul>
                <li>
                    All Chart and Report Data
                </li>
                <li>
                    All Reporting System in Accounting
                </li>
                <li>
                    Labour Payment & Cash Book
                </li>
                <li>
                    Printing system
                </li>
                <li>
                    Tax Report
                </li>
            </ul>
        </div>
    </section>
    <!-- Content End -->
@endsection
