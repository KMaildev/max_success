@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card mb-4">
                <h5 class="card-header">
                    Add New Contract
                </h5>
                <div class="card-body">

                    <form action="{{ route('contract.store') }}" method="POST" autocomplete="off" id="create-form"
                        role="form" enctype="multipart/form-data">
                        @csrf

                        <h6>
                            1. Demand Information
                        </h6>
                        <hr>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Oversea Company Name
                            </label>
                            <div class="col-md-9">
                                <select class="form-control form-select select2" name="demand_id" id="demandId">
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
                                    class="date_picker form-control @error('contract_date') form-control-danger @enderror"
                                    name="contract_date">
                                @error('contract_date')
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
                                    class="form-control @error('contract_male') form-control-danger @enderror"
                                    name="contract_male" oninput="MaleFemaleTotalCalc()" id="male" value="0">
                                @error('contract_male')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Contract Female
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('contract_female') form-control-danger @enderror"
                                    name="contract_female" oninput="MaleFemaleTotalCalc()" id="female" value="0">
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
                                <input type="text" class="form-control" id="total" readonly>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Remark
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('remark') form-control-danger @enderror"
                                    name="remark">
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
