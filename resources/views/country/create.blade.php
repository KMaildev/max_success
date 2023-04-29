<form class="form-horizontal" action="{{ route('country.store') }}" method="POST" autocomplete="off" id="create-form"
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
                            Country
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('country_name') form-control-danger @enderror"
                                name="country_name">
                            @error('country_name')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Currency Format
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('currency_format') form-control-danger @enderror"
                                name="currency_format" list="currency_formats">
                            <small style="font-weight: bold;">
                                You can enter custom currency format. it will be use in demand section.
                            </small>
                            <datalist id="currency_formats">
                                <option value="Dollar">
                                <option value="SGD">
                                <option value="MMK">
                                <option value="Yen">
                                <option value="Thai Baht">
                                <option value="Ringgit">
                                <option value="Rupees">
                                <option value="AED">
                                <option value="Yuan">
                                <option value="Other">
                            </datalist>
                            @error('currency_format')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Country Flag / Photo
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                name="image" value="{{ old('image') }}" />
                            @error('image')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

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
    {!! JsValidator::formRequest('App\Http\Requests\StoreCountry', '#create-form') !!}
@endsection
