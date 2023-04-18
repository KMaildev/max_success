@extends('layouts.main')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card mb-4">
                <h5 class="card-header">
                    Add New Create
                </h5>
                <div class="card-body">

                    <form action="{{ route('demand.store') }}" method="POST" autocomplete="off" id="create-form" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="new_demand" name="demand_status">
                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Company Name
                            </label>
                            <div class="col-md-9">
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Country
                            </label>
                            <div class="col-md-9">
                                <select class="select2 form-control form-select" name="countrie_id" id="countryId">
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Overseas Agent
                            </label>
                            <div class="col-md-9">
                                <select class="select2 form-control form-select" name="overseas_agencie_id">
                                </select>
                                @error('overseas_agencie_id')
                                    <div class="form-control-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Job
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('job') form-control-danger @enderror"
                                    name="job">
                                @error('job')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Salary
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('salary') form-control-danger @enderror"
                                    name="salary">
                                @error('salary')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Male
                            </label>
                            <div class="col-md-9">
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Female
                            </label>
                            <div class="col-md-9">
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


                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Total
                            </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control @error('total') form-control-danger @enderror"
                                    id="total" readonly>
                                @error('total')
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Cabinet Date
                            </label>
                            <div class="col-md-9">
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Issue Date
                            </label>
                            <div class="col-md-9">
                                <input type="text"
                                    class="date_picker form-control @error('issue_date') form-control-danger @enderror"
                                    name="issue_date" placeholder="Issue Date">
                                @error('issue_date')
                                    <div class="form-control-feedback" style="color: red;">
                                        {{ $message }} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Issue Number
                            </label>
                            <div class="col-md-9">
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

                        <div class="mb-3 row">
                            <label for="html5-text-input" class="col-md-3 col-form-label">
                                Demand Number
                            </label>
                            <div class="col-md-9">
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
