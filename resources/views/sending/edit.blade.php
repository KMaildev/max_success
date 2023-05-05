@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Edit Sending / Departure
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Edit Sending / Departure
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Sending / Departure
                        </h3>
                    </div>
                    <div class="box-body">

                        <form action="{{ route('sending.update', $sending->id) }}" method="POST" autocomplete="off" id="create-form"
                            role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{ $contract->demand_id }}" name="demand_id">
                            <input type="hidden" value="{{ $contract->id }}" name="contract_id">

                            <br>
                            <h6 style="font-size: 17px;">
                                1. Demand Information
                            </h6>
                            <hr>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Oversea Company Name
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control"
                                        value="{{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}"
                                        readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Demand Date
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="DemandDate" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Cabinet Date
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="CabinetDate" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Issue Date
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="IssueDate" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Issue Number
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="IssueNumber" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Male
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="Male" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Female
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="Female" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Total
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="Total" readonly>
                                </div>
                            </div>

                            <br>
                            <h6 style="font-size: 17px;">
                                2. Contract Information
                            </h6>
                            <hr>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Contract Date
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="form-control @error('contract_date') form-control-danger @enderror"
                                        name="contract_date" value="{{ $contract->contract_date ?? '' }}" readonly>
                                    @error('contract_date')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Contract Male
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="form-control @error('contract_male') form-control-danger @enderror"
                                        name="contract_male" value="{{ $contract->contract_male ?? 0 }}" readonly>
                                    @error('contract_male')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Contract Male
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="form-control @error('contract_female') form-control-danger @enderror"
                                        name="contract_female" value="{{ $contract->contract_female ?? 0 }}" readonly>
                                    @error('contract_female')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Contract Total
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" readonly
                                        value="{{ $contract->contract_male + $contract->contract_female }}">
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Remark
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="form-control @error('remark') form-control-danger @enderror" name="remark"
                                        value="{{ $contract->remark ?? '' }}" readonly>
                                    @error('remark')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>


                            <br>
                            <h6 style="font-size: 17px;">
                                3. Sending Information
                            </h6>
                            <span style="color: red;">
                                Fill your sending (Departure) information
                            </span>
                            <hr>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Sending Date
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="date_picker form-control @error('sending_date') form-control-danger @enderror"
                                        name="sending_date" value="{{ $sending->sending_date ?? '' }}">
                                    @error('sending_date')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Sending Male
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="form-control @error('sending_male') form-control-danger @enderror"
                                        name="sending_male" oninput="MaleFemaleTotalCalc()" id="male"
                                        value="{{ $sending->sending_male ?? 0 }}">
                                    @error('sending_male')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Sending Male
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="form-control @error('sending_female') form-control-danger @enderror"
                                        name="sending_female" oninput="MaleFemaleTotalCalc()" id="female"
                                        value="{{ $sending->sending_female ?? 0 }}">
                                    @error('sending_female')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Sending Total
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" id="total" readonly>
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
                                <label for="html5-text-input" class="col-md-3 control-label">
                                    Remark
                                </label>
                                <div class="col-md-7">
                                    <input type="text"
                                        class="form-control @error('remark') form-control-danger @enderror" name="remark"
                                        value="{{ $sending->remark ?? '' }}">
                                    @error('remark')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }} </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group" style="padding: 15px;">
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
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreSending', '#create-form') !!}
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

        function demandAjaxAutoCall() {
            var demand_id = '{{ $contract->demand_id }}';
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
        }
        demandAjaxAutoCall();

        function MaleFemaleTotalCalc() {
            var male = document.getElementById("male").value;
            var female = document.getElementById("female").value;
            var total = parseInt(female) + parseInt(male);
            document.getElementById('total').value = total;
        }
        MaleFemaleTotalCalc();
    </script>
@endsection
