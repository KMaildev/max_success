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


            <div class="col-md-12 col-xs-12">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 60vh; width: 100vw" id="demandData"></canvas>
                </div>
            </div>

            <div class="col-md-12 col-xs-12">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 60vh; width: 100vw" id="demandJob"></canvas>
                </div>
            </div>


            <div class="col-md-6 col-xs-6">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 90vh; width: 100vw" id="contractData"></canvas>
                </div>
            </div>

            <div class="col-md-6 col-xs-6">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 90vh; width: 100vw" id="sendingData"></canvas>
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


            <div class="col-md-4 col-xs-4">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height: 10vh; width: 40vw" id="OverseasCountryData"></canvas>
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
                    label: '# Total Labour Entry Chart',
                    data: @json($passportData),
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



        const contractData = document.getElementById('contractData');
        new Chart(contractData, {
            type: 'bar',
            data: {
                labels: @json($months),
                datasets: [{
                    label: '# Contract Total Chart',
                    data: @json($contractData),
                    borderWidth: 1
                }]
            },
        });


        const sendingData = document.getElementById('sendingData');
        new Chart(sendingData, {
            type: 'bar',
            data: {
                labels: @json($months),
                datasets: [{
                    label: '# Sending Total Chart',
                    data: @json($sendingData),
                    borderWidth: 1
                }]
            },
        });



        const demandData = document.getElementById('demandData');
        new Chart(demandData, {
            type: 'bar',
            data: {
                labels: @json($companyData),
                datasets: [{
                    label: '# Demand male + female',
                    data: @json($demandData),
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                    ],
                }]
            },
        });


        const demandJob = document.getElementById('demandJob');
        new Chart(demandJob, {
            type: 'bar',
            data: {
                labels: @json($job),
                datasets: [{
                    label: '# The Most In-Demand Jobs',
                    data: @json($demandJob),
                    borderWidth: 1,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                    ],
                }]
            },
        });

        
        const OverseasCountryData = document.getElementById('OverseasCountryData');
        new Chart(OverseasCountryData, {
            type: 'pie',
            data: {
                labels: @json($country),
                datasets: [{
                    label: '# Total Company',
                    data: @json($OverseasCountryData),
                    borderWidth: 1,
                }]
            },
        });

    </script>
@endsection
