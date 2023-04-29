<form class="form-horizontal" action="{{ route('demand.store') }}" method="POST" autocomplete="off" id="create-form"
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

                    <input type="hidden" value="new_demand" name="demand_status">

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Company Name
                            <i class="required">*</i>
                        </label>
                        <div class="col-md-8">
                            <select class="form-control form-select" name="office_id">
                                @foreach ($offices as $office)
                                    <option value="{{ $office->id }}">
                                        {{ $office->name ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                            @error('office_id')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Country
                        </label>
                        <div class="col-md-8">
                            <select class="select2 form-control form-select" name="countrie_id" id="countryId"
                                style="width: 100%;">
                                <option value="0">--Select Country--</option>
                                @foreach ($countryies as $country)
                                    <option value="{{ $country->id }}">
                                        {{ $country->title ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                            @error('countrie_id')
                                <div class="form-control-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Overseas Company/Agent
                        </label>
                        <div class="col-md-8">
                            <select class="select2 form-control form-select" name="overseas_agencie_id"
                                style="width: 100%;">
                            </select>
                            @error('overseas_agencie_id')
                                <div class="form-control-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Job
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control @error('job') form-control-danger @enderror"
                                name="job">
                            @error('job')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Salary
                        </label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="text" class="form-control" name="salary" value="{{ old('salary') }}">
                                <span class="input-group-addon" id="Currency">
                                    Currency
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Male
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control @error('male') form-control-danger @enderror"
                                name="male" oninput="MaleFemaleTotalCalc()" id="male" value="0"
                                placeholder="Male Total">
                            @error('male')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Female
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control @error('female') form-control-danger @enderror"
                                name="female" oninput="MaleFemaleTotalCalc()" id="female" value="0"
                                placeholder="Female Total">
                            @error('female')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Total
                        </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control @error('total') form-control-danger @enderror"
                                id="total" readonly>
                            @error('total')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Demand Date
                        </label>
                        <div class="col-md-8">
                            <input type="text"
                                class="date_picker form-control @error('demand_date') form-control-danger @enderror"
                                name="demand_date" placeholder="Demand Date">
                            @error('demand_date')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Cabinet Date
                        </label>
                        <div class="col-md-8">
                            <input type="text"
                                class="date_picker form-control @error('cabinet_date') form-control-danger @enderror"
                                name="cabinet_date" placeholder="Cabinet Date">
                            @error('cabinet_date')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Issue Date
                        </label>
                        <div class="col-md-8">
                            <input type="text"
                                class="date_picker form-control @error('issue_date') form-control-danger @enderror"
                                name="issue_date" placeholder="Issue Date">
                            @error('issue_date')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Issue Number
                        </label>
                        <div class="col-md-8">
                            <input type="text"
                                class="form-control @error('issue_number') form-control-danger @enderror"
                                name="issue_number" placeholder="Issue Number">
                            @error('issue_number')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Demand Number
                        </label>
                        <div class="col-md-8">
                            <input type="text"
                                class="form-control @error('demand_number') form-control-danger @enderror"
                                name="demand_number" placeholder="Demand Number">
                            @error('demand_number')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreDemand', '#create-form') !!}
    <script>
        $('select[id="countryId"]').on("change", function() {
            var countrie_id = $(this).val();
            if (countrie_id) {
                $.ajax({
                    url: `/overseas_agent_ajax/${countrie_id}`,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="overseas_agencie_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="overseas_agencie_id"]').append(
                                '<option value="' + value.id + '">' +
                                value.company_name +
                                "</option>"
                            );
                        });
                    },
                });


                $.ajax({
                    url: `/find_by_country_id/${countrie_id}`,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        console.log(data.currency_format);
                        document.getElementById('Currency').innerHTML = data.currency_format;
                    },
                    error: function() {
                        document.getElementById('Currency').innerHTML = 'Currency';
                    }
                });



            }
        });

        function MaleFemaleTotalCalc() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var total = parseInt(female) + parseInt(male);
            document.getElementById("total").value = total;
        }
        MaleFemaleTotalCalc();
    </script>
@endsection
