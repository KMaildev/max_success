@extends('layouts.based.base_main')
@section('content')
    <section class="content-header">
        <h1>
            Labour Lists
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Labour Lists
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New Agent
                </h3>
                <button type="button" class="btn btn-box-tool add-new-btn" data-widget="collapse" data-collapse="true">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Labour Lists
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table id="labour_lists" class="table table-striped table-bordered border-primary">
                                @include('passport.shared.thead_tfooter')
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreMedicalTest', '#create-form') !!}
    <script>
        $(function() {
            var table = $('#labour_lists').DataTable({
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

                dom: 'Blfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf'
                ],

                lengthMenu: [
                    [20, 50, 100, 200, 300, 400, -1],
                    [20, 50, 100, 200, 300, 400, "All"]
                ],

                ajax: {
                    url: "{{ route('labour_lists') }}",
                },

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
                        data: 'gender',
                        name: 'gender',
                    },
                    {
                        data: 'nrc',
                        name: 'nrc',
                    },
                    {
                        data: 'father_name',
                        name: 'father_name',
                    },
                    {
                        data: 'mother_name',
                        name: 'mother_name',
                    },
                    {
                        data: 'qualification',
                        name: 'qualification',
                    },
                    {
                        data: 'date_of_birth',
                        name: 'date_of_birth',
                    },
                    {
                        data: 'address',
                        name: 'address',
                    },
                    {
                        data: 'passport',
                        name: 'passport',
                    },
                    {
                        data: 'passport_date',
                        name: 'passport_date',
                    },
                    {
                        data: 'place_of_passport',
                        name: 'place_of_passport',
                    },

                    {
                        data: 'age',
                        name: 'age',
                    },
                    {
                        data: 'weight',
                        name: 'weight',
                    },
                    {
                        data: 'height',
                        name: 'height',
                    },
                    {
                        data: 'marital_status',
                        name: 'marital_status',
                    },

                    {
                        data: 'nation_religion',
                        name: 'nation_religion',
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                    },
                    {
                        data: 'phone_family',
                        name: 'phone_family',
                    },
                    {
                        data: 'owic',
                        name: 'owic',
                    },
                    {
                        data: 'owic_date',
                        name: 'owic_date',
                    },

                    {
                        data: 'join_date',
                        name: 'join_date',
                    },
                    // Interview
                    {
                        data: 'action',
                        name: 'action',
                    },
                    // Contract Date	
                    {
                        data: 'action',
                        name: 'action',
                    },
                    // Sending Date	
                    {
                        data: 'action',
                        name: 'action',
                    },
                    // Remark
                    {
                        data: 'remark',
                        name: 'remark',
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ],
            });
        });

        $(document).ready(function() {
            $('#labour_lists thead th').each(function() {
                var title = $('#labour_lists thead th').eq($(this).index()).text();
            });
            var table = $('#labour_lists').DataTable();

            table.columns().eq(0).each(function(colIdx) {
                $('input', table.column(colIdx).footer()).on('change', function() {
                    table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
                });
            });
        });
    </script>
@endsection
