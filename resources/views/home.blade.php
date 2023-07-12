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
                    @if (auth()->user()->can($country->title) == $country->title)
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
                    @endif
                @endforeach


                @can('accounting')
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
                @endcan

                @can('hr')
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2" id="button_pos">
                        <div class="panel panel-app">
                            <div class="panel-body">
                                <a class="panel-app-link" href="{{ route('hr_dashboard.index') }}">
                                    <h2>
                                        <span class="icon">
                                            <img src="{{ asset('data/icons/hr.png') }}" alt=""
                                                style="width: 30px; height: 30px; background-position: center; background-size: contain, cover;">
                                        </span>
                                    </h2>
                                    <div class="small small2">
                                        HR
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endcan
            </div>
        </div>
        <hr>
        @include('components.counter')
        <hr>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="small-box bg-white" style="background-color: white;">
                    <canvas style="height:50vh; width:80vw" id="passportData"></canvas>
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
    </script>
@endsection
