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
                            GOV Standard Cost
                        </label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="standard_cost"
                                value="{{ old('standard_cost') }}" oninput="calcExchangeRage()" id="standard_cost">
                            @error('standard_cost')
                                <div class="form-control-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <label for="html5-text-input" class="col-md-1 control-label" style="text-align: right;">
                            MMK
                        </label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="standard_cost_mmk"
                                value="{{ old('standard_cost_mmk') }}" oninput="calcMMK()" id="standard_cost_mmk">
                            @error('standard_cost_mmk')
                                <div class="form-control-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Exchange Rate
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('exchange_rate') form-control-danger @enderror"
                                name="exchange_rate" oninput="calcExchangeRage()" id="exchange_rate">
                            @error('exchange_rate')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            MMK
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('total_amount_mmk') form-control-danger @enderror"
                                name="total_amount_mmk" id="total_amount_mmk" readonly>
                            @error('total_amount_mmk')
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
    <script>
        function calcExchangeRage() {
            const standard_cost = document.getElementById("standard_cost").value;
            const exchange_rate = document.getElementById("exchange_rate").value;
            const total_amount = standard_cost * exchange_rate;
            document.getElementById("total_amount_mmk").value = total_amount;
            document.getElementById("standard_cost_mmk").value = 0;
        }

        function calcMMK() {
            const standard_cost_mmk = document.getElementById("standard_cost_mmk").value;
            document.getElementById("total_amount_mmk").value = standard_cost_mmk;

            document.getElementById("standard_cost").value = 0;
            document.getElementById("exchange_rate").value = 0;
        }
    </script>
@endsection
