@extends('layouts.main')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <div class="col-3 mb-4">
                <div class="card" style="background-color:#fcd733;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" style="position: relative;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar">
                                    <span class="avatar-initial bg-label-primary rounded-circle"><i
                                            class="bx bx-user fs-4"></i></span>
                                </div>
                                <div class="card-info">
                                    <h5 class="card-title mb-0 me-2">
                                        {{ $total_demand ?? 0 }}
                                    </h5>
                                    <small class="" style="font-size: 16px; color:white; font-weight:bold;">
                                        Demand(Male + Female)
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-4">
                <div class="card" style="background-color:#8ecbfc;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" style="position: relative;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar">
                                    <span class="avatar-initial bg-label-primary rounded-circle">
                                        <i class="fa fa-users fs-4"></i>
                                    </span>
                                </div>
                                <div class="card-info">
                                    <h5 class="card-title mb-0 me-2">
                                        {{ $total_interview ?? 0 }}
                                    </h5>
                                    <small class="" style="font-size: 16px; color:white; font-weight:bold;">
                                        Interview(Male + Female)
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-4">
                <div class="card" style="background-color: #7deb54">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" style="position: relative;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar">
                                    <span class="avatar-initial bg-label-primary rounded-circle">
                                        <i class="fa-solid fa-file-signature fs-4"></i>
                                    </span>
                                </div>
                                <div class="card-info">
                                    <h5 class="card-title mb-0 me-2">
                                        {{ $total_contract ?? 0 }}
                                    </h5>
                                    <small class="" style="font-size: 16px; color:white; font-weight:bold;">
                                        Contract (Male + Female)
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-4">
                <div class="card" style="background-color: #26b7b7;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" style="position: relative;">
                            <div class="d-flex align-items-center gap-3">
                                <div class="avatar">
                                    <span class="avatar-initial bg-label-primary rounded-circle">
                                        <i class="fa-sharp fa-solid fa-paper-plane fs-4"></i>
                                    </span>
                                </div>
                                <div class="card-info">
                                    <h5 class="card-title mb-0 me-2">
                                        {{ $total_sending ?? 0 }}
                                    </h5>
                                    <small class="" style="font-size: 16px; color:white; font-weight:bold;">
                                        Sending (Male + Female)
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-4 py-3">
                <div class="card">
                    <div class="card-body py-5">
                        <h6>{{ $passports_report->options['chart_title'] }}</h6>
                        <div style="height: 400px;">
                            {!! $passports_report->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 py-3">
                <div class="card">
                    <div class="card-body py-5">
                        <h6>{{ $medical_test->options['chart_title'] }}</h6>
                        <div style="height: 400px;">
                            {!! $medical_test->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 py-3">
                <div class="card">
                    <div class="card-body py-5">
                        <h6>{{ $passport_male_female->options['chart_title'] }} </h6>
                        <div style="height: 400px;">
                            {!! $passport_male_female->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript">
        {!! $passports_report->renderChartJsLibrary() !!}
        {!! $passports_report->renderJs() !!}

        {!! $medical_test->renderChartJsLibrary() !!}
        {!! $medical_test->renderJs() !!}

        {!! $passport_male_female->renderChartJsLibrary() !!}
        {!! $passport_male_female->renderJs() !!}


    </script>
@endsection
