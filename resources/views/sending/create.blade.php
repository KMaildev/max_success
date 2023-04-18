@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card mb-4">
                <h5 class="card-header">
                    Create New Sending
                </h5>
                <div class="card-body">

                    <form action="{{ route('sending.store') }}" method="POST" autocomplete="off" id="create-form" role="form"
                        enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{ $contract->demand_id }}" name="demand_id">
                        <input type="hidden" value="{{ $contract->id }}" name="contract_id">
                        <h6>
                            1. Demand Information
                        </h6>
                        <hr>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Oversea Company Name
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"
                                    value="{{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}"
                                    readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Demand Date
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="DemandDate" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Cabinet Date
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="CabinetDate" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Issue Date
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="IssueDate" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Issue Number
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="IssueNumber" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Male
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="Male" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Female
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="Female" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Total
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="Total" readonly>
                            </div>
                        </div>


                        <h6>
                            2. Contract Information
                        </h6>
                        <hr>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Contract Date
                            </label>
                            <div class="col-md-9">
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Contract Male
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('contract_male') form-control-danger @enderror"
                                    name="contract_male" value="{{ $contract->contract_male ?? 0 }}" readonly>
                                @error('contract_male')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Contract Male
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('contract_female') form-control-danger @enderror"
                                    name="contract_female" value="{{ $contract->contract_female ?? 0 }}" readonly>
                                @error('contract_female')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Contract Total
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" readonly
                                    value="{{ $contract->contract_male + $contract->contract_female }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Remark
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('remark') form-control-danger @enderror"
                                    name="remark" value="{{ $contract->remark ?? '' }}" readonly>
                                @error('remark')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>



                        <h6>
                            3. Sending Information
                        </h6>
                        <hr>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Sending Date
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="date_picker form-control @error('sending_date') form-control-danger @enderror"
                                    name="sending_date" value="{{ old('sending_date') }}">
                                @error('sending_date')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Sending Male
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('sending_male') form-control-danger @enderror"
                                    name="sending_male" oninput="MaleFemaleTotalCalc()" id="male" value="0">
                                @error('sending_male')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Sending Male
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('sending_female') form-control-danger @enderror"
                                    name="sending_female" oninput="MaleFemaleTotalCalc()" id="female" value="0">
                                @error('sending_female')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Sending Total
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="total" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Remark
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('remark') form-control-danger @enderror"
                                    name="remark" value="{{ old('remark') }}">
                                @error('remark')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-search-input" class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
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
