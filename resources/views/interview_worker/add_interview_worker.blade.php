@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Manage Interview Labour
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Manage Interview Labour
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Manage Interview Labour for
                            {{ $interview->demands_table->overseas_agencies_table->company_name ?? '' }}
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="card-header border-bottom">
                            <ul class="nav nav-tabs card-header-tabs" id="nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="{{ route('add_interview_worker', $interview->id) }}" class="nav-link active"
                                        aria-selected="true">
                                        Upload Contract Labour
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('interview.show', $interview->id) }}" class="nav-link"
                                        aria-selected="true">
                                        View Contract Labour
                                    </a>
                                </li>
                            </ul>
                        </div>



                        <div class="col-md-8" style="padding-top: 30px;">
                            <form action="{{ route('interview_labour.store') }}" method="post" autocomplete="off"
                                enctype="multipart/form-data" id="create-form">
                                @csrf
                                <input type="hidden" required value="{{ $interview->demand_id }}" name="demand_id">
                                <input type="hidden" required value="{{ $interview->id }}" name="interview_id">
                                <input type="hidden" required value="{{ $interview->overseas_agencie_id }}"
                                    name="overseas_agencie_id">

                                <div class="input-group">
                                    <span class="text-success">
                                        Import Excel File (Interview Labour)
                                    </span>
                                    <input type="file" class="form-control" name="file">
                                </div>

                                <br>
                                <input type="submit" class="create-new btn btn-primary" value="Upload">
                                <a href="{{ asset('data/interview.xlsx') }}" class="btn btn-success">
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
@endsection
