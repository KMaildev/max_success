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
                            Date
                            <i class="required">*</i>
                        </label>

                        <div class="col-md-8">
                            <input type="text" class="form-control dob" name="entry_date"
                                value="{{ old('entry_date') }}">

                            @error('entry_date')
                                <div class="form-control-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Reference no
                            <i class="required">*</i>
                        </label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="reference"
                                value="{{ old('reference') }}">

                            @error('reference')
                                <div class="form-control-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Descripton
                        </label>

                        <div class="col-md-8">
                            <input type="text" class="form-control" name="description"
                                value="{{ old('description') }}">

                            @error('description')
                                <div class="form-control-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Chart Of Accounts
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-4">
                            <select name="chartof_account_id" class="form-select form-select select2" required
                                style="width: 100%;">
                                @foreach ($chartof_accounts as $chartof_account)
                                    <option value="{{ $chartof_account->id }}">
                                        {{ $chartof_account->coa_number }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <input class="form-control @error('coa_description') is-invalid @enderror" type="text"
                                name="coa_description" />
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
