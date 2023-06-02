@extends('layouts.based.accounting_main')
@section('content')
    <style>
        .dataTables_filter {
            display: none;
        }

        tfoot {
            display: table-header-group !important;
        }
    </style>

    <section class="content-header">
        <h1>
            Demand Payment
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Demand Payment
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">

                    <div class="box-header">
                        <h3 class="box-title">
                            Demand Payment
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('demand_invoice.create') }}">
                                    <span class="fa fa-add"></span>
                                    Add New Payment
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="labour_payments" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Name
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            NRC
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Passport
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Gender
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Address
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Total Amount
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            <input class="form-control" type="hidden" data-colum="0">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" style="width: 150px;" data-colum="1"
                                                placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" style="width: 150px;" data-colum="2"
                                                placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" style="width: 150px;" data-colum="3"
                                                placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" style="width: 150px;" data-colum="4"
                                                placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" style="width: 150px;" data-colum="5"
                                                placeholder="Search">
                                        </th>

                                        <th>
                                            <input type="hidden" style="width: 150px;" data-colum="6">
                                        </th>

                                        <th>
                                            <input type="hidden" style="width: 150px;" data-colum="7">
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
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#labour_payments').DataTable({
                orderCellsTop: true,
                processing: true,
                serverSide: true,
                ordering: false,
                fixedHeader: true,
                scrollY: 400,
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
                    url: "{{ route('get_labour_payment_datatable') }}",
                },

                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                    },

                    {
                        data: 'name',
                        name: 'name',
                        class: 'text-center'
                    },

                    {
                        data: 'nrc',
                        name: 'nrc',
                        class: 'text-center'
                    },

                    {
                        data: 'passport',
                        name: 'passport',
                        class: 'text-center'
                    },

                    {
                        data: 'gender',
                        name: 'gender',
                        class: 'text-center'
                    },

                    {
                        data: 'address',
                        name: 'address',
                        class: 'text-center'
                    },

                    {
                        data: 'total_deposit',
                        name: 'total_deposit',
                        class: 'text-center'
                    },

                    {
                        data: 'history',
                        name: 'history',
                    },
                ],
            });
        });

        $(document).ready(function() {
            $('#labour_payments thead th').each(function() {
                var title = $('#labour_payments thead th').eq($(this).index()).text();
            });
            var table = $('#labour_payments').DataTable();

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
