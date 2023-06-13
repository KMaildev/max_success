@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Interview
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Interview
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Interview
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            @include('interview.create')
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Interview
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
                                            Interview Title
                                        </th>

                                        <th class="text-white w-5">
                                            Interview Date
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
                                            Interview Remark
                                        </th>

                                        <th class="text-white w-5">
                                            Interview Labour
                                        </th>

                                        <th class="text-white w-5">
                                            Edit
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($interviews as $key => $interview)
                                        <tr>
                                            <td data-title="No" style="text-align: center; font-weight: bold">
                                                {{ $key + 1 }}
                                            </td>

                                            <td data-title="Interview Title" style="text-align: center; font-weight: bold">
                                                {{ $interview->interview_title ?? '' }}
                                            </td>

                                            <td data-title="Interview Date" style="text-align: center; font-weight: bold">
                                                {{ $interview->interview_date ?? '' }}
                                            </td>

                                            <td data-title="Company" style="text-align: center; font-weight: bold">
                                                {{ $interview->demands_table->overseas_agencies_table->company_name ?? '' }}
                                            </td>

                                            <td data-title="Job" style="text-align: center; font-weight: bold">
                                                {{ $interview->demands_table->job ?? '' }}
                                            </td>

                                            <td data-title="Male" style="text-align: center; font-weight: bold">
                                                {{ number_format($interview->interview_male) }}
                                            </td>

                                            <td data-title="Female" style="text-align: center; font-weight: bold">
                                                {{ number_format($interview->interview_female) }}
                                            </td>

                                            <td data-title="Total" style="text-align: center; font-weight: bold">
                                                {{ number_format($interview->interview_male + $interview->interview_female) }}
                                            </td>

                                            <td data-title="Remark" style="text-align: center; font-weight: bold">
                                                {{ $interview->remark ?? '' }}
                                            </td>

                                            <td data-title="Remark" style="text-align: center; font-weight: bold">
                                                <a href="{{ route('add_interview_worker', $interview->id) }}">
                                                    Manage Interview Labour
                                                </a>
                                            </td>

                                            <td data-title="Edit" style="text-align: center;">
                                                <button onclick="editInterview({{ $interview->id }})" type="button"
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
                                            Interview Title
                                        </th>

                                        <th class="text-white w-5">
                                            Interview Date
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
                                            Interview Remark
                                        </th>

                                        <th class="text-white w-5">
                                            Interview Labour
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

    @include('interview.edit')
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreInterview', '#create-form') !!}
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


        function editInterview(interview_id) {
            $('#editInterviewModel').modal('show');
            $.ajax({
                url: `interview_edit_form_ajax/${interview_id}`,
                method: 'GET',
                success: function(result) {
                    $('#showEditForm').html(result.html);
                }
            });
        }
    </script>
@endsection
