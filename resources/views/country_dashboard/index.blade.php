@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            {{ session('country_title') }}
            Dashboard
        </h1>
    </section>

    <section class="content">
        @include('country_dashboard.counter')

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height:50vh; width:80vw" id="passportData"></canvas>
                </div>
            </div>

            <div class="col-md-4 col-xs-4">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 10vh; width: 40vw" id="passportCountryData"></canvas>
                </div>
            </div>

            <div class="col-md-4 col-xs-4">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 10vh; width: 40vw" id="maleFemaleReport"></canvas>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        const ctx = document.getElementById('passportData');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($months),
                datasets: [{
                    label: '# Total Labour Entry',
                    data: @json($passportData),
                    borderWidth: 1
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


        const passportCountryData = document.getElementById('passportCountryData');
        new Chart(passportCountryData, {
            type: 'pie',
            data: {
                labels: @json($country),
                datasets: [{
                    label: '# Total Labour',
                    data: @json($passportCountryData),
                    borderWidth: 1
                }]
            },
        });


        const maleFemaleReport = document.getElementById('maleFemaleReport');
        new Chart(maleFemaleReport, {
            type: 'pie',
            data: {
                labels: @json($genders),
                datasets: [{
                    label: '# Total',
                    data: @json($maleFemaleReport),
                    borderWidth: 1
                }]
            },
        });
    </script>
@endsection
