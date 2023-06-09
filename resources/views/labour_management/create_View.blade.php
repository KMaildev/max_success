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

                        <div class="col-md-6">
                            <br>
                            @include('components.contact_information')
                        </div>
                        <div class="col-md-8">
                            <form action="{{ route('labour_management.store') }}" method="post" autocomplete="off"
                                enctype="multipart/form-data" id="create-form">
                                @csrf
                                <input type="hidden" required value="{{ $contract->demand_id }}" name="demand_id">
                                <input type="hidden" required value="{{ $contract->id }}" name="contract_id">
                                <input type="hidden" required value="{{ $contract->demands_table->overseas_agencie_id }}"
                                    name="overseas_agencies_id">

                                <div class="input-group">
                                    <span class="text-success">
                                        Import Excel File (Contract Labour)
                                    </span>
                                    <input type="file" class="form-control" name="labour_lists" accept=".xlsx">
                                </div>

                                <br>
                                <input type="submit" class="create-new btn btn-primary" value="Upload">
                                <a href="{{ asset('data/labour_lists.xlsx') }}" class="btn btn-success">
                                    Simple File
                                </a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreLabourManagement', '#create-form') !!}
@endsection
