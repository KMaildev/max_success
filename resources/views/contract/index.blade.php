@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Contact Lists
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Contact Lists
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Contact
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            @include('contract.create')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Contacts
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table id="datatable" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-white w-5">
                                            #
                                        </th>
                                        <th class="text-white w-5">
                                            Name
                                        </th>

                                        <th class="text-white w-5">
                                            Company
                                        </th>

                                        <th class="text-white w-5">
                                            Job
                                        </th>

                                        <th class="text-white w-5">
                                            Male
                                        </th>
                                        <th class="text-white w-5">
                                            Female
                                        </th>
                                        <th class="text-white w-5">
                                            Total
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Date
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Remark
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Labour
                                        </th>
                                        <th class="text-white w-5">
                                            Sending
                                        </th>
                                        <th class="text-white w-5">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contracts as $key => $contract)
                                        <tr>
                                            <td data-title="No">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Name">
                                                {{ $contract->demands_table->office_table->name ?? '' }}
                                            </td>

                                            <td data-title="Overseas Company">
                                                {{ $contract->demands_table->overseas_agencies_table->company_name ?? '' }}
                                            </td>

                                            <td data-title="Job">
                                                {{ $contract->demands_table->job ?? '' }}
                                            </td>

                                            <td data-title="Male" style="tfont-weight: bold">
                                                {{ number_format($contract->contract_male) }}
                                            </td>

                                            <td data-title="Female" style="tfont-weight: bold">
                                                {{ number_format($contract->contract_female) }}
                                            </td>

                                            <td data-title="Contract Total" style="tfont-weight: bold">
                                                {{ number_format($contract->contract_male + $contract->contract_female) }}
                                            </td>

                                            <td data-title="Contract Date" style="font-weight: bold">
                                                {{ $contract->contract_date }}
                                            </td>

                                            <td data-title="Remark" style="font-weight: bold">
                                                {{ $contract->remark ?? '' }}
                                            </td>

                                            <td data-title="Manage Labours" style="font-weight: bold">
                                                <a href="{{ route('labour_create_view', $contract->id) }}">
                                                    Manage Labour
                                                </a>
                                            </td>

                                            <td data-title="Sending Status" style="font-weight: bold">
                                                @if ($contract->sending_table)
                                                    <span class="badge bg-success"
                                                        style="color: white; background-color: green;">
                                                        <i class="fa fa-check-double"></i>
                                                        Done
                                                    </span>
                                                @else
                                                    <a style="color: red;"
                                                        href="{{ route('sending_create', $contract->id) }}">
                                                        Pending
                                                    </a>
                                                @endif
                                            </td>

                                            <td data-title="Edit" style="text-align: center">
                                                <button onclick="editContract({{ $contract->id }})" type="button"
                                                    class="btn btn-sm btn-block btn-primary">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="bg-gray">
                                        <th class="text-white w-5">
                                            #
                                        </th>
                                        <th class="text-white w-5">
                                            Name
                                        </th>
                                        <th class="text-white w-5">
                                            Company
                                        </th>

                                        <th class="text-white w-5">
                                            Job
                                        </th>

                                        <th class="text-white w-5">
                                            Male
                                        </th>
                                        <th class="text-white w-5">
                                            Female
                                        </th>
                                        <th class="text-white w-5">
                                            Total
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Date
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Remark
                                        </th>
                                        <th class="text-white w-5">
                                            Contract Labour
                                        </th>
                                        <th class="text-white w-5">
                                            Sending
                                        </th>
                                        <th class="text-white w-5">
                                            Edit
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('contract.edit')
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


        function editContract(contractId) {
            $('#editContractModel').modal('show');
            $.ajax({
                url: `contract_edit_form_ajax/${contractId}`,
                method: 'GET',
                success: function(result) {
                    $('#showEditForm').html(result.html);
                }
            });
        }
    </script>
@endsection
