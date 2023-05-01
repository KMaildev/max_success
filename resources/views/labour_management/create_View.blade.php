@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Labour Manage
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Labour Manage
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Labour Manage for {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="card-header border-bottom">
                            <ul class="nav nav-tabs card-header-tabs" id="nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="{{ route('labour_create_view', $contract->id) }}" class="nav-link active"
                                        aria-selected="true">
                                        Add Contract Labour
                                    </a>
                                </li>
        
                                <li class="nav-item">
                                    <a href="{{ route('view_contract_labour', $contract->id) }}" class="nav-link"
                                        aria-selected="true">
                                        View Contract Labour
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
