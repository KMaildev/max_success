@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Edit New Demand Payment
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Edit New Demand Payment
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-body">
                        <div class="col-md-12">

                            <form action="{{ route('demand_invoice.update', $demand_invoice->id) }}" method="POST"
                                autocomplete="off" id="create-form" role="form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Invoice No
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="invoice_no"
                                            value="{{ $demand_invoice->invoice_no }}">

                                        @error('invoice_no')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Submit Date
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control date_picker" name="submit_date"
                                            value="{{ $demand_invoice->submit_date }}">

                                        @error('submit_date')
                                            <div class="form-control-feedback" style="color: red;">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Foreign Company/Job Offered Company
                                    </label>
                                    <div class="col-md-9">
                                        <select onchange="getDemand(this.value)" class="form-control form-select select2"
                                            name="overseas_agencie_id" id="OverseasAgencyId">
                                            <option value="">
                                                --Select an option--
                                            </option>
                                            @foreach ($overseas_agencies as $overseas_agencie)
                                                <option value="{{ $overseas_agencie->id }}"
                                                    @if ($demand_invoice->overseas_agencie_id == $overseas_agencie->id) selected @endif>
                                                    {{ $overseas_agencie->company_name ?? $overseas_agencie->agent_company_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-label">
                                        Overseas Agent
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="OverseasAgent" readonly>
                                    </div>
                                </div>


                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Select Demand
                                    </label>
                                    <div class="col-md-9">
                                        <select onchange="getDemandById(this.value)" id="demand_id"
                                            class="form-control form-select select2" name="demand_id">
                                            <option value="">Select an option</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Job
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="Job" readonly>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Salary
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="Salary" readonly>
                                    </div>
                                </div>

                                <div class="form-group" style="padding: 17px;">
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Country
                                    </label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="Country" readonly>
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
                                            <input type="text" class="form-control" id="Male" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Female
                                            </span>
                                            <input type="text" class="form-control" id="Female" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Total
                                            </span>
                                            <input type="text" class="form-control" id="Total" readonly>
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
                                                oninput="CalcBalance()" value="{{ $demand_invoice->amount ?? 0 }}"
                                                name="amount">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon2">
                                                Labour
                                            </span>
                                            <input type="text" class="form-control" id="TotalLabour"
                                                name="total_labour" readonly>
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
                                    <label for="html5-text-input" class="col-md-3 control-labe">
                                        Remark
                                    </label>
                                    <div class="col-md-9">
                                        <textarea name="remark" id="" cols="10" rows="5" class="form-control">{{ $demand_invoice->remark ?? '' }}</textarea>
                                        <br>
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

                                    <div class="col-sm-2">
                                        <a href="{{ route('demand_invoice.index') }}" class="btn btn-success btn-block">
                                            <span class="fa fa-fw fa-arrow-left"></span>
                                            Cancel
                                        </a>
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
    {!! JsValidator::formRequest('App\Http\Requests\StoreDemandInvoice', '#create-form') !!}
    <script>
        function getDemand(overseas_agencie_id) {
            $.ajax({
                url: `/demand_by_overseas_agency_id/${overseas_agencie_id}`,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    var select = $('#demand_id');
                    select.empty(); // Clear existing options

                    if (response.length > 0) {
                        // Add options to the select element
                        select.append($('<option selected value="">').text('--Select Demand Number--'));
                        $.each(response, function(index, data) {
                            var company_name = data.demand_number;
                            var demand_id = {{ $demand_invoice->demand_id }};
                            // select.append($('<option >').val(option.id).text(company_name));
                            var option = $('<option>').val(data.id).text(company_name);
                            if (demand_id == data.id) {
                                option.attr('selected', 'selected');
                            }
                            select.append(option);
                        });
                    } else {
                        select.append($('<option selected value="">').text('Data not found'));
                    }
                },
                error: function(xhr, status, error) {
                    var select = $('#demand_id');
                    select.empty(); // Clear existing options
                    select.append($('<option selected> value=""').text('Error fetching data'));
                }
            });
        }

        getDemand({{ $demand_invoice->overseas_agencie_id }});

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
                    document.getElementById('Country').value = data.country.title;
                    CalcBalance();
                },
                error: function() {

                }
            });
        }

        getDemandById({{ $demand_invoice->demand_id }});

        $('select[name="overseas_agencie_id"]').on("change", function() {
            var overseas_agencie_id = $(this).val();
            if (overseas_agencie_id) {
                $.ajax({
                    url: `/overseas_agent_by_id/${overseas_agencie_id}`,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        document.getElementById('OverseasAgent').value = data.agent_company_name;
                    },
                    error: function() {

                    }
                });
            }
        });

        function OverseasAgentCall(overseas_agencie_id) {
            if (overseas_agencie_id) {
                $.ajax({
                    url: `/overseas_agent_by_id/${overseas_agencie_id}`,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        document.getElementById('OverseasAgent').value = data.agent_company_name;
                    },
                    error: function() {

                    }
                });
            }
        }
        OverseasAgentCall({{ $demand_invoice->overseas_agencie_id }});

        function CalcBalance() {
            var amount = document.getElementById('Amount').value;
            var TotalLabour = document.getElementById('TotalLabour').value;
            var total_balance = amount * TotalLabour;
            document.getElementById('TotalBalance').value = total_balance;
        }
    </script>
@endsection
