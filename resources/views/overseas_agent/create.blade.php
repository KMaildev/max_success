<form class="form-horizontal" action="{{ route('overseas_agent.store') }}" method="POST" autocomplete="off" id="create-form"
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
                            Company Name
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('company_name') form-control-danger @enderror"
                                name="company_name" value="{{ old('company_name') }}">
                            @error('company_name')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Contact Person
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('contact') form-control-danger @enderror"
                                name="contact" value="{{ old('contact') }}">
                            @error('contact')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Type of Company
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('type_of_company') form-control-danger @enderror"
                                name="type_of_company" value="{{ old('type_of_company') }}">
                            @error('type_of_company')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">Phone</label>
                        <div class="col-md-7">
                            <input class="form-control @error('company_phone') is-invalid @enderror" type="text"
                                name="company_phone" value="{{ old('company_phone') }}" />
                            @error('company_phone')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">Email</label>
                        <div class="col-md-7">
                            <input class="form-control @error('company_email') is-invalid @enderror" type="email"
                                name="company_email" value="{{ old('company_email') }}" />
                            @error('company_email')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">Address</label>
                        <div class="col-md-7">
                            <input class="form-control @error('company_address') is-invalid @enderror" type="text"
                                name="company_address" value="{{ old('company_address') }}" />
                            @error('company_address')
                                <div class="invalid-feedback"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Country
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-7">
                            <select class="form-control form-select" name="countrie_id">
                                <option value="">--Select Country--</option>
                                @foreach ($country_lists as $country)
                                    <option value="{{ $country->id }}"
                                        @if ($country->id == session('country_id')) selected @endif>
                                        {{ $country->title ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                            @error('countrie_id')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">Remark</label>
                        <div class="col-md-7">
                            <textarea class="form-control @error('remark') is-invalid @enderror" name="remark" id="" cols="20"
                                rows="2">{{ old('remark') }}</textarea>
                            @error('remark')
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreOverseaAgency', '#create-form') !!}
@endsection
