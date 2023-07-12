@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Accounting Dashboard
        </h1>
    </section>

    <section class="content">
        @include('accounting.dashboard.counter')

        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 90vh; width: 100vw" id="incomeData"></canvas>
                </div>
            </div>

            <div class="col-md-6 col-xs-6">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 90vh; width: 100vw" id="expenseData"></canvas>
                </div>
            </div>



            <div class="col-md-12 col-xs-12">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 90vh; width: 100vw" id="weekly-chart"></canvas>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        const ctx = document.getElementById('incomeData');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($months),
                datasets: [{
                    label: '# Total Income',
                    data: @json($incomeData),
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        });


        const expense = document.getElementById('expenseData');
        new Chart(expense, {
            type: 'bar',
            data: {
                labels: @json($months),
                datasets: [{
                    label: '# Total Expense',
                    data: @json($expenseData),
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(202, 203, 207, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        });





        // Get the data from the server-side
        var chartIncomeData = {!! json_encode($chartIncomeData) !!};
        var chartExpenseData = {!! json_encode($chartExpenseData) !!};
        var chartLabels = {!! json_encode($chartLabels) !!};

        // Create the chart
        var weeklyChart = document.getElementById('weekly-chart').getContext('2d');
        new Chart(weeklyChart, {
            type: 'bar',
            data: {
                labels: chartLabels,
                datasets: [{
                    label: 'Income',
                    data: chartIncomeData,
                    backgroundColor: 'green',
                    borderColor: 'green',
                    borderWidth: 1,
                    fill: false
                }, {
                    label: 'Expense',
                    data: chartExpenseData,
                    backgroundColor: 'red',
                    borderColor: 'red',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });
    </script>
@endsection
