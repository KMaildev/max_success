<form class="form-horizontal" action="{{ route('contract.store') }}" method="POST" autocomplete="off" id="create-form"
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

                    <h6>
                        1. Demand Information
                    </h6>
                    <hr>
                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Oversea Company Name
                        </label>
                        <div class="col-md-7">
                            <select class="form-control form-select select2" name="demand_id" id="demandId"
                                style="width: 100%">
                                <option value="0">
                                    --Select Oversea Company Name--
                                </option>
                                @foreach ($demands as $demand)
                                    <option value="{{ $demand->id }}">
                                        {{ $demand->overseas_agencies_table->company_name ?? '' }}
                                        @
                                        {{ $demand->demand_date ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                            @error('demand_id')
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
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="DemandDate" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Cabinet Date
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="CabinetDate" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Issue Date
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="IssueDate" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Issue Number
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="IssueNumber" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Male
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="Male" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Female
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="Female" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Total
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="Total" readonly>
                        </div>
                    </div>


                    <h6>
                        2. Contract Information
                    </h6>
                    <hr>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Contract Date
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="date_picker form-control @error('contract_date') form-control-danger @enderror"
                                name="contract_date">
                            @error('contract_date')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Contract Male
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('contract_male') form-control-danger @enderror"
                                name="contract_male" oninput="MaleFemaleTotalCalc()" id="male" value="0">
                            @error('contract_male')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Contract Female
                        </label>
                        <div class="col-md-7">
                            <input type="text"
                                class="form-control @error('contract_female') form-control-danger @enderror"
                                name="contract_female" oninput="MaleFemaleTotalCalc()" id="female"
                                value="0">
                            @error('contract_female')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Contract Total
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="total" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="html5-text-input" class="col-md-3 control-label">
                            Remark
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control @error('remark') form-control-danger @enderror"
                                name="remark">
                            @error('remark')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }} </div>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreContracts', '#create-form') !!}
    <script>
        $('select[id="demandId"]').on("change", function() {
            var demand_id = $(this).val();
            if (demand_id) {
                $.ajax({
                    url: `/demand_ajax/${demand_id}`,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        document.getElementById("Male").value = data.male;
                        document.getElementById("Female").value = data.female;
                        document.getElementById("Total").value = +data.male + +data.female;
                        document.getElementById("DemandDate").value = data.demand_date;
                        document.getElementById("CabinetDate").value = data.cabinet_date;
                        document.getElementById("IssueDate").value = data.issue_date;
                        document.getElementById("IssueNumber").value = data.issue_number;
                    },
                });
            }
        });

        function MaleFemaleTotalCalc() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var total = parseInt(female) + parseInt(male);
            document.getElementById('total').value = total;
        }
        MaleFemaleTotalCalc();
    </script>
@endsection
