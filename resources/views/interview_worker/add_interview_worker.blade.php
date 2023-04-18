@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-title header-elements">
                        <h5 class="m-0 me-2">
                            Medical Test Passed Labours
                        </h5>
                    </div>
                </div>

                <div class="table-responsive text-nowrap">
                    <table id="datatable" class="table table-bordered table-sm yajra-datatable">
                        @include('medical_test.table_shared.thead_tfooter')
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="col-xxl">
                <div class="card mb-4">
                    <h5 class="card-header">
                        Interview & Labour
                    </h5>

                    <form class="card-body" autocomplete="off" action="{{ route('interview_labour.store') }}" method="POST"
                        id="create-form">
                        @csrf

                        <input type="hidden" name="demand_id" value="{{ $interview->demand_id }}">
                        <input type="hidden" name="interview_id" value="{{ $interview->id }}">

                        <div class="row">

                            <div class="col-md-12 mb-2">
                                <label class="form-label">
                                    Overseas Company
                                </label>
                                <input readonly type="text" class="form-control"
                                    value="{{ $interview->demands_table->overseas_agencies_table->company_name ?? '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label">
                                    Interview Title
                                </label>
                                <input type="text" class="form-control"
                                    value="{{ $interview->interview_title ?? '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label">
                                    Interview Date
                                </label>
                                <input readonly type="text" class="form-control" value="{{ $interview->interview_date ?? '' }}" />
                            </div>

                            <div class="col-md-4 mb-2">
                                <label class="form-label">
                                    Interview Male
                                </label>
                                <input readonly type="text" class="form-control"
                                    value="{{ number_format($interview->interview_male) }}" />
                            </div>

                            <div class="col-md-4 mb-2">
                                <label class="form-label">
                                    Interview Female
                                </label>
                                <input readonly type="text" class="form-control"
                                    value="{{ number_format($interview->interview_female) }}" />
                            </div>

                            <div class="col-md-4 mb-2">
                                <label class="form-label">
                                    Interview Total
                                </label>
                                <input readonly type="text" class="form-control"
                                    value="{{ number_format($interview->interview_male + $interview->interview_female) }}" />
                            </div>


                            <div class="col-md-12 py-2">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-bordered table-sm" id="addRemoveTable">
                                        <thead class="tbbg">
                                            <tr>
                                                <th style="color: white; text-align: center; width: 1%;">
                                                    #
                                                </th>
                                                <th style="color: white; text-align: center; width: 17%;">
                                                    AGENT NAME
                                                </th>
                                                <th style="color: white; text-align: center; width: 7%;">
                                                    NAME
                                                </th>
                                                <th style="color: white; text-align: center; width: 7%;">
                                                    PASSPORT
                                                </th>
                                                <th style="color: white; text-align: center; width: 7%;">
                                                    NRC
                                                </th>
                                                <th style="color: white; text-align: center; width: 5%;">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="medicalTestTempLists"></tbody>
                                    </table>
                                </div>
                                <br>
                                <input type="submit" value="Confirm" class="btn btn-primary float-end">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreInterviewLabour', '#create-form') !!}
    <script>
        $(function() {
            var table = $('#datatable').DataTable({
                orderCellsTop: true,
                processing: true,
                serverSide: true,
                ordering: false,
                fixedHeader: true,
                scrollY: 500,
                scrollX: true,
                language: {
                    "processing": "<img src='/loading.gif' style='width:50px'/><p class='my-3'>... Loading ...</p>",
                },
                ajax: {
                    url: "{{ route('get_medical_tests_pass_labour') }}",
                },
                lengthMenu: [20, 50, 100, 250, 350, 450, 550, 650, 750, 850, 950, 1100, 1200, 1300, 1500,
                    1700,
                    1900, 2000
                ],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                    },
                    {
                        data: 'agent_name',
                        name: 'agent_name',
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'passport',
                        name: 'passport',
                    },
                    {
                        data: 'nrc',
                        name: 'nrc',
                    },
                    {
                        data: 'medical_tests_status',
                        name: 'medical_tests_status',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ],
            });

            $(document).ready(function() {
                $('#datatable thead th').each(function() {
                    var title = $('#datatable thead th').eq($(this).index()).text();
                });
                var table = $('#datatable').DataTable();

                table.columns().eq(0).each(function(colIdx) {
                    $('input', table.column(colIdx).footer()).on('change', function() {
                        table
                            .column(colIdx)
                            .search(this.value)
                            .draw();
                    });
                });
            });

            $('body').on('click', '#addToMedicalTest', function(e) {
                e.preventDefault();
                var passportId = $(this).data('id');
                var url = '{{ url('add_medical_test_temp_list') }}';
                $.ajax({
                    url: url,
                    data: {
                        id: passportId,
                        types: 'interview_labour',
                    },
                    method: 'GET',
                    success: function(result) {
                        toastr.remove()
                        // toastr.success("Your processing has been completed.");
                        getMedicalTestTempList();
                    }
                });
            });

            function getMedicalTestTempList() {
                var url = '{{ url('get_medical_test_temp_interview') }}';
                $.ajax({
                    url: url,
                    method: "GET",
                    success: function(data) {
                        let temp_table = '';
                        $.each(JSON.parse(data), function(key, value) {
                            let k = key + 1;

                            temp_table += '<tr>';
                            temp_table += '<td>' + k + '</td>' //Sr.No	

                            // AGENT NAME 
                            temp_table += '<td>'
                            temp_table += value.agent_name;
                            temp_table += '</td>'

                            // Name 
                            temp_table += '<td>'
                            temp_table += value.name;
                            temp_table += '</td>'

                            // Passport 
                            temp_table += '<td>'
                            temp_table += value.passport;
                            temp_table += '</td>'

                            // Passport 
                            temp_table += '<td>'
                            temp_table += value.nrc;
                            temp_table += '</td>'

                            // Action
                            temp_table += '<td>'
                            temp_table +=
                                '<a href="javascript:void(0);" class="remove_item btn btn-danger btn-xs" data-id="' +
                                value.id + '"> Remove</a>'
                            temp_table += '</td>'
                            temp_table += '</tr>';
                        });
                        $('#medicalTestTempLists').html(temp_table);
                    }
                });
            }
            getMedicalTestTempList();

            $(document).on("click", ".remove_item", function() {
                var id = $(this).data('id');
                $.ajax({
                    url: `/remove_get_medical_test_temp_list/${id}`,
                    method: "GET",
                    success: function(data) {
                        toastr.remove()
                        toastr.success("Your processing has been completed.");
                        getMedicalTestTempList();
                    }
                });
            });
        });
    </script>
@endsection
