@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            Labour Payment
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                Labour Payment
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">

                    <div class="box-header">
                        <h3 class="box-title">
                            Labour Payment
                        </h3>

                        <div class="box-tools pull-right">
                            <div class="btn-group">
                                <a type="button" class="btn btn-primary" href="{{ route('labour_payment.create') }}">
                                    <span class="fa fa-add"></span>
                                    Add New Payment
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="labour_payments" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr>
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
                                    </tr>
                                </thead>
                                <tbody></tbody>
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
                    url: "{{ route('get_labour_payment_datatable') }}",
                },

                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                    },

                    {
                        data: 'name',
                        name: 'name',
                    },

                    {
                        data: 'nrc',
                        name: 'nrc',
                    },

                    {
                        data: 'passport',
                        name: 'passport',
                    },

                    {
                        data: 'gender',
                        name: 'gender',
                    },

                    {
                        data: 'address',
                        name: 'address',
                    },

                    {
                        data: 'deposit',
                        name: 'deposit',
                    },
                ],
            });
        });
    </script>
@endsection
