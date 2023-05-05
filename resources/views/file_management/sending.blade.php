@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Files / Documents
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Files / Documents
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">

                        <form action="{{ route('file_management.store') }}" method="POST" autocomplete="off"
                            id="create-form" role="form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="sending_id" value="{{ $sending->id }}">
                            <input type="hidden" name="overseas_agencie_id"
                                value="{{ $sending->demands_table->overseas_agencies_table->id ?? '' }}">

                            <div class="input-group">
                                <input class="form-control @error('files') is-invalid @enderror" type="file"
                                    name="files[]" multiple value="{{ old('files') }}" required />
                                <span class="input-group-addon" id="basic-addon2">
                                    <button class="">
                                        Upload
                                    </button>
                                </span>
                            </div>
                        </form>
                        <br>

                        @include('file_management.shared.file_lists')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
