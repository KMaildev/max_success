@extends('layouts.based.hr_main')
@section('content')
    <section class="content-header">
        <h1>
            Attendance
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Attendance
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-12">
                            <form action="{{ route('attendance.store') }}" method="POST" autocomplete="off"
                                id="create-form" role="form" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 col-form-label">
                                        Import Excel
                                    </label>
                                    <div class="col-md-9">
                                        <input class="form-control @error('attendance_files') is-invalid @enderror"
                                            type="file" name="attendance_files" />
                                        @error('attendance_files')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3">
                                        <button class="btn btn-info btn-block" type="submit">
                                            <span class="fa fa-fw fa-save"></span>
                                            Upload
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {{-- {!! JsValidator::formRequest('App\Http\Requests\StoreAttendance', '#create-form') !!} --}}
@endsection
