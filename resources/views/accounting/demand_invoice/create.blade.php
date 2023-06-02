@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Create New Demand Payment
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Create New Demand Payment
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-10">

                            <form action="{{ route('labour_payment.store') }}" method="POST" autocomplete="off"
                                id="create-form" role="form" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Payment Date
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control date_picker" name="deposit_date"
                                            value="{{ old('deposit_date') }}">
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Company
                                    </label>
                                    <div class="col-md-9">
                                        <select onchange="getDemand(this.value)" class="form-control form-select select2"
                                            name="overseas_agencie_id" id="OverseasAgencyId">
                                            <option value="">
                                                --Company--
                                            </option>
                                            @foreach ($overseas_agencies as $overseas_agencie)
                                                <option value="{{ $overseas_agencie->id }}">
                                                    {{ $overseas_agencie->company_name ?? $overseas_agencie->agent_company_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('overseas_agencie_id')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Select Demand
                                    </label>
                                    <div class="col-md-9">
                                        <select onchange="getDemandById(this.value)" id="demand_id"
                                            class="form-control form-select select2">
                                            <option value="">Select an option</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Job
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="Job">
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Salary
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="Salary">
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Gender
                                    </label>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Male
                                            </span>
                                            <input type="text" class="form-control" id="Male">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Female
                                            </span>
                                            <input type="text" class="form-control" id="Female">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Total
                                            </span>
                                            <input type="text" class="form-control" id="Total">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Payment
                                    </label>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Amount
                                            </span>
                                            <input type="text" class="form-control" id="Amount"
                                                oninput="CalcBalance()">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Labour
                                            </span>
                                            <input type="text" class="form-control" id="TotalLabour">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Balance
                                            </span>
                                            <input type="text" class="form-control" id="TotalBalance">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-2">
                                        <button class="btn btn-info btn-block" id="create-product-submit" type="submit"
                                            name="create-product-submit">
                                            <span class="fa fa-fw fa-save"></span>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreLabourPayment', '#create-form') !!}
    <script>
        function getDemand(overseas_agencie_id) {
            $.ajax({
                url: `/demand_by_overseas_agency_id/${overseas_agencie_id}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    var select = $('#demand_id');
                    select.empty(); // Clear existing options

                    if (response.length > 0) {
                        // Add options to the select element
                        select.append($('<option disabled selected>').text('--Select Demand Number--'));
                        $.each(response, function(index, option) {
                            var company_name = option.demand_number;
                            select.append($('<option>').val(option.id).text(company_name));
                        });
                    } else {
                        select.append($('<option disabled selected>').text('Data not found'));
                    }
                },
                error: function(xhr, status, error) {
                    var select = $('#demand_id');
                    select.empty(); // Clear existing options
                    select.append($('<option disabled selected>').text('Error fetching data'));
                }
            });
        }

        function getDemandById(demand_id) {
            $.ajax({
                url: `/demand_ajax/${demand_id}`,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    document.getElementById('Job').value = data.job;
                    document.getElementById('Salary').value = data.salary;
                    document.getElementById('Male').value = data.male;
                    document.getElementById('Female').value = data.female;
                    document.getElementById('Total').value = +data.male + +data.female;
                    document.getElementById('TotalLabour').value = +data.male + +data.female;
                },
                error: function() {

                }
            });
        }

        function CalcBalance() {
            var amount = document.getElementById('Amount').value;
            var TotalLabour = document.getElementById('TotalLabour').value;
            var total_balance = amount * TotalLabour;
            document.getElementById('TotalBalance').value = total_balance;
        }
    </script>
@endsection
