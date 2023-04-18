@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card mb-4">
                <h5 class="card-header">Hospital</h5>
                <div class="card-body">

                    <form autocomplete="off" action="{{ route('hospital.store') }}" method="POST" id="create-form" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Hospital Name
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('name') form-control-danger @enderror"
                                    name="name">
                                @error('name')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Location
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('location') form-control-danger @enderror"
                                    name="location">
                                @error('location')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Phone
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('phone') form-control-danger @enderror"
                                    name="phone">
                                @error('phone')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Attachment File
                            </label>
                            <div class="col-md-9">
                                <input class="form-control @error('attachment_files') is-invalid @enderror" type="file"
                                    name="attachment_files[]" value="{{ old('attachment_files') }}" multiple />
                                @error('attachment_files')
                                    <div class="invalid-feedback"> {{ $message }} </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Submit Date
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="date_picker_no_time form-control @error('submit_date') form-control-danger @enderror"
                                    name="submit_date" value="{{ old('submit_date') }}">
                                @error('submit_date')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Remark
                            </label>
                            <div class="col-md-9">
                                <textarea name="remark" id="" cols="30" rows="10"
                                    class="form-control @error('remark') form-control-danger @enderror">{{ old('remark') }}</textarea>
                                @error('remark')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-secondary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreHospital', '#create-form') !!}
@endsection
