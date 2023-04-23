<form class="form-horizontal" action="{{ route('hospital.store') }}" method="POST" autocomplete="off" id="create-form"
    role="form" enctype="multipart/form-data">
    @csrf
    <div class="box-body">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#general" data-toggle="tab" aria-expanded="false">
                        Data Entry
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <!-- General Start -->
                <div class="tab-pane active" id="general">
                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Hospital Name
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('name') form-control-danger @enderror"
                                name="name">
                            @error('name')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Location
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('location') form-control-danger @enderror"
                                name="location">
                            @error('location')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Phone
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('phone') form-control-danger @enderror"
                                name="phone">
                            @error('phone')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Attachment File
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('attachment_files') is-invalid @enderror" type="file"
                                name="attachment_files[]" value="{{ old('attachment_files') }}" multiple />
                            @error('attachment_files')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Submit Date
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="date_picker_no_time form-control @error('submit_date') form-control-danger @enderror"
                                name="submit_date" value="{{ old('submit_date') }}">
                            @error('submit_date')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Remark
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <textarea name="remark" id="" cols="30" rows="10"
                                class="form-control @error('remark') form-control-danger @enderror">{{ old('remark') }}</textarea>
                            @error('remark')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    <!-- General End -->

                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-4">
                            <button class="btn btn-info btn-block" id="create-product-submit" type="submit"
                                name="create-product-submit">
                                <span class="fa fa-fw fa-save"></span>
                                Save
                            </button>
                        </div>
                        <div class="col-sm-3">
                            <button type="reset" class="btn btn-warning btn-block" id="reset" name="reset">
                                <span class="fa fa-circle-o"></span>
                                Reset
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreHospital', '#create-form') !!}
@endsection
