@extends('layouts.based.accounting_main')
@section('content')
    <section class="content-header">
        <h1>
            CashBook
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-dashboard"></i>
                    Dashboard
                </a>
            </li>
            <li class="active">
                CashBook
            </li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-info collapsed-box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <span class="fa fa-fw fa-plus"></span>
                    Add New CashBook
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
                            Country List
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive text-nowrap">
                            <table id="cash_books" class="table table-bordered table-striped table-hover"
                                data-hide-colums="">
                                <thead>
                                    <tr class="bg-gray">
                                        <th class="text-center text-white w-5" style="width: 1%;">
                                            #
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Date
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Day
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Month
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Year
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Reference no
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Description
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Income
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Expenses
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Tax
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Chart of Account
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Account Header
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Bank & Cash
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Actions
                                        </th>
                                    </tr>
                                    @include('accounting.cash_book.create')
                                </thead>
                                <tbody>
                                </tbody>
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
        $(function() {
            var table = $('#cash_books').DataTable({
                orderCellsTop: true,
                processing: true,
                serverSide: true,
                ordering: false,
                fixedHeader: true,
                scrollY: 200,
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
                    url: "{{ route('cashbook_datatable') }}",
                },

                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                    },

                    {
                        data: 'cash_book_date',
                        name: 'cash_book_date',
                    },

                    {
                        data: 'entry_day',
                        name: 'entry_day',
                    },

                    {
                        data: 'entry_month',
                        name: 'entry_month',
                    },

                    {
                        data: 'entry_year',
                        name: 'entry_year',
                    },

                    {
                        data: 'reference',
                        name: 'reference',
                    },

                    {
                        data: 'description',
                        name: 'description',
                    },

                    {
                        data: 'income',
                        name: 'income',
                    },

                    {
                        data: 'expense',
                        name: 'expense',
                    },

                    {
                        data: 'tax',
                        name: 'tax',
                    },

                    {
                        data: 'chartof_account_id',
                        name: 'chartof_account_id',
                    },

                    {
                        data: 'chartof_account_id',
                        name: 'chartof_account_id',
                    },

                    {
                        data: 'bank_cash_id',
                        name: 'bank_cash_id',
                    },

                    {
                        data: 'edit',
                        name: 'edit',
                    },

                ],
            });
        });

        // $(document).ready(function() {
        //     $('#cash_books thead th').each(function() {
        //         var title = $('#cash_books thead th').eq($(this).index()).text();
        //     });
        //     var table = $('#cash_books').DataTable();

        //     table.columns().eq(0).each(function(colIdx) {
        //         $('input', table.column(colIdx).footer()).on('change', function() {
        //             table
        //                 .column(colIdx)
        //                 .search(this.value)
        //                 .draw();
        //         });
        //     });
        // });
    </script>


    <script>
        document.getElementById("cashBookDate").addEventListener("blur", getCashBookDate)

        function getCashBookDate(e) {
            var dateArr = e.srcElement.value.split('-');
            if (dateArr.length > 1) {
                document.getElementById("Month").value = dateArr[1];
                document.getElementById("Year").value = dateArr[0];
                document.getElementById("Day").value = dateArr[2];
            }
        }

        $('select[name="chartof_account_id"]').on('change', function() {
            var chartof_account_id = $(this).val();
            if (chartof_account_id) {
                $.ajax({
                    url: '/chartofaccountdependent/ajax/' + chartof_account_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        document.getElementById("coa_description").value = data.description;
                    }
                });
            }
        });

        $(function() {
            $('#createAccountForm').on('submit', function(e) {
                e.preventDefault();
                let cash_book_date = document.getElementsByName("cash_book_date")[0].value;
                let day = document.getElementsByName("day")[0].value;
                let month = document.getElementsByName("month")[0].value;
                let year = document.getElementsByName("year")[0].value;
                let reference = document.getElementsByName("reference")[0].value;
                let description = document.getElementsByName("description")[0].value;
                let income = document.getElementsByName("income")[0].value;
                let expense = document.getElementsByName("expense")[0].value;
                let tax = document.getElementsByName("tax")[0].value;
                let chartof_account_id = document.getElementsByName("chartof_account_id")[0].value;
                let bank_cash_id = document.getElementsByName("bank_cash_id")[0].value;

                $.ajax({
                    url: "{{ route('cashbook.store') }}",
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "cash_book_date": cash_book_date,
                        "day": day,
                        "month": month,
                        "year": year,
                        "reference": reference,
                        "description": description,
                        "income": income,
                        "expense": expense,
                        "tax": tax,
                        "chartof_account_id": chartof_account_id,
                        "bank_cash_id": bank_cash_id,
                    },
                    success: function(response) {
                        document.getElementsByName("cash_book_date")[0].value = '';
                        document.getElementsByName("day")[0].value = '';
                        document.getElementsByName("month")[0].value = '';
                        document.getElementsByName("year")[0].value = '';
                        document.getElementsByName("reference")[0].value = '';
                        document.getElementsByName("description")[0].value = '';
                        document.getElementsByName("income")[0].value = '';
                        document.getElementsByName("expense")[0].value = '';
                        document.getElementsByName("tax")[0].value = '';
                        document.getElementsByName(
                            "chartof_account_id")[0].value = '';
                        document.getElementsByName("bank_cash_id")[0].value = '';


                        toastr.remove()
                        toastr.success("Your processing has been completed.");
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText)
                        toastr.remove()
                        toastr.error("Error occurred.");
                    }
                });
            });
        });

        function save() {
            let cash_book_date = document.getElementsByName("cash_book_date")[0].value;
            let day = document.getElementsByName("day")[0].value;
            let month = document.getElementsByName("month")[0].value;
            let year = document.getElementsByName("year")[0].value;
            let reference = document.getElementsByName("reference")[0].value;
            let description = document.getElementsByName("description")[0].value;
            let income = document.getElementsByName("income")[0].value;
            let expense = document.getElementsByName("expense")[0].value;
            let tax = document.getElementsByName("tax")[0].value;
            let chartof_account_id = document.getElementsByName("chartof_account_id")[0].value;
            let bank_cash_id = document.getElementsByName("bank_cash_id")[0].value;
            $.ajax({
                url: "{{ route('cashbook.store') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "cash_book_date": cash_book_date,
                    "day": day,
                    "month": month,
                    "year": year,
                    "reference": reference,
                    "description": description,
                    "income": income,
                    "expense": expense,
                    "tax": tax,
                    "chartof_account_id": chartof_account_id,
                    "bank_cash_id": bank_cash_id,
                },
                success: function(response) {
                    document.getElementsByName("cash_book_date")[0].value = '';
                    document.getElementsByName("day")[0].value = '';
                    document.getElementsByName("month")[0].value = '';
                    document.getElementsByName("year")[0].value = '';
                    document.getElementsByName("reference")[0].value = '';
                    document.getElementsByName("description")[0].value = '';
                    document.getElementsByName("income")[0].value = '';
                    document.getElementsByName("expense")[0].value = '';
                    document.getElementsByName("tax")[0].value = '';
                    document.getElementsByName(
                        "chartof_account_id")[0].value = '';
                    document.getElementsByName("bank_cash_id")[0].value = '';


                    toastr.remove()
                    toastr.success("Your processing has been completed.");
                },
                error: function(xhr) {
                    console.log(xhr.responseText)
                    toastr.remove()
                    toastr.error("Error occurred.");
                }
            });
        }
    </script>
@endsection
