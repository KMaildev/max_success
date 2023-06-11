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
                        <div class="table-responsive text-nowrap">
                            <table id="demand_invoice" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Invoice No
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Agent Company Name
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Company Name
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Demand Number
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Issue Number
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Male
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Female
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Total
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Amount
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Balance
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Remark
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Status
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 20%;">
                                            Actions
                                        </th>

                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                    <tr>
                                        <th>
                                            <input type="hidden" data-colum="0">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="1" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="2" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="3" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="4" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="5" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="6" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="7" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="hidden" data-colum="8" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="9" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="10" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="text" data-colum="11" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="hidden" data-colum="12" placeholder="Search">
                                        </th>

                                        <th>
                                            <input class="form-control" type="hidden" data-colum="13" placeholder="Search">
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
            var table = $('#demand_invoice').DataTable({
                orderCellsTop: true,
                processing: true,
                serverSide: true,
                ordering: false,
                fixedHeader: true,
                scrollY: 350,
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
                    url: "{{ route('demand_invoice_datatable') }}",
                },

                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                    },

                    {
                        data: 'invoice_no',
                        name: 'invoice_no',
                        class: 'text-center'
                    },

                    {
                        data: 'agent_company_name',
                        name: 'agent_company_name',
                        class: 'text-center'
                    },

                    {
                        data: 'company_name',
                        name: 'company_name',
                        class: 'text-center'
                    },

                    {
                        data: 'demand_number',
                        name: 'demand_number',
                        class: 'text-center'
                    },

                    {
                        data: 'issue_number',
                        name: 'issue_number',
                        class: 'text-center'
                    },

                    {
                        data: 'male',
                        name: 'male',
                        class: 'text-center'
                    },

                    {
                        data: 'female',
                        name: 'female',
                        class: 'text-center'
                    },

                    {
                        data: 'total_labour',
                        name: 'total_labour',
                        class: 'text-center'
                    },

                    {
                        data: 'amount',
                        name: 'amount',
                        class: 'text-center'
                    },

                    {
                        data: 'balance',
                        name: 'balance',
                        class: 'text-center'
                    },

                    {
                        data: 'remark',
                        name: 'remark',
                        class: 'text-center'
                    },

                    {
                        data: 'status',
                        name: 'status',
                        class: 'text-center'
                    },

                    {
                        data: 'action',
                        name: 'action',
                        class: 'text-center'
                    },
                ],
            });
        });

        $(document).ready(function() {
            $('#demand_invoice thead th').each(function() {
                var title = $('#demand_invoice thead th').eq($(this).index()).text();
            });
            var table = $('#demand_invoice').DataTable();

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
