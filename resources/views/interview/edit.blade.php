@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card mb-4">
                <h5 class="card-header">
                    Edit Interview
                </h5>
                <div class="card-body">

                    <form action="{{ route('interview.update', $interview->id) }}" method="POST" autocomplete="off"
                        id="create-form" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6>
                            1. Demand Information
                        </h6>
                        <hr>
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Oversea Company Name
                            </label>
                            <div class="col-md-9">
                                <select class="form-control form-select" name="demand_id" id="demandId">
                                    <option value="0">
                                        --Select Oversea Company Name--
                                    </option>
                                    @foreach ($demands as $demand)
                                        <option value="{{ $demand->id }}"
                                            @if ($demand->id == $interview->demand_id) selected @endif>
                                            {{ $demand->overseas_agencies_table->company_name ?? '' }}
                                            @if ($demand->demand_id)
                                                / Demand Number:
                                            @endif
                                            {{ $demand->demand_id ?? '' }}
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
                            2. Interview Information
                        </h6>
                        <hr>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Interview Title
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('interview_title') form-control-danger @enderror"
                                    name="interview_title" value="{{ $interview->interview_title ?? '' }}">
                                @error('interview_title')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Interview Date
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control dob @error('interview_date') form-control-danger @enderror"
                                    name="interview_date" value="{{ $interview->interview_date ?? '' }}">
                                @error('interview_date')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Interview Male
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('interview_male') form-control-danger @enderror"
                                    name="interview_male" oninput="MaleFemaleTotalCalc()" id="male"
                                    value="{{ $interview->interview_male ?? 0 }}">
                                @error('interview_male')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Interview Male
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="form-control @error('interview_female') form-control-danger @enderror"
                                    name="interview_female" oninput="MaleFemaleTotalCalc()" id="female"
                                    value="{{ $interview->interview_female ?? 0 }}">
                                @error('interview_female')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Interview Total
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
                                    name="remark" value="{{ $interview->remark ?? '' }}">
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
    {!! JsValidator::formRequest('App\Http\Requests\UpdateInterview', '#create-form') !!}
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
            var demand_id = '{{ $interview->demand_id }}';
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
