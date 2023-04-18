@extends('layouts.main')
@section('content')
    <div class="row">
        @include('components.contact_information')
        <div class="col-md-12 py-3">
            <div class="card mb-3">
                <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" id="nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="{{ route('labour_create_view', $contract->id) }}" class="nav-link"
                                aria-selected="true">
                                Add Contract Labour
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('view_contract_labour', $contract->id) }}" class="nav-link active"
                                aria-selected="true">
                                View Contract Labour
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="ProcessingFile" role="tabpanel"
                        aria-labelledby="ProcessingFile-tab">
                        <div class="col-md-12 col-lg-12 col-xl-12 mb-6 order-0">
                            <h4>Contract Labour</h4>
                            @include('components.passport_lists')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script></script>
@endsection
