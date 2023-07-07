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
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            CashBook
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
                                            Demand Invoice
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Agent Company Name
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Company Name
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
                                            Account Header
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Edit
                                        </th>

                                        <th class="text-center text-white w-5" style="width: 10%;">
                                            Delete
                                        </th>
                                    </tr>

                                    <tr>
                                        @include('accounting.cash_book.create')
                                    </tr>

                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('accounting.cash_book.edit')
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#cash_books').DataTable({
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
                        data: 'demand_invoice',
                        name: 'demand_invoice',
                    },

                    {
                        data: 'agent_company_name',
                        name: 'agent_company_name',
                    },

                    {
                        data: 'company_name',
                        name: 'company_name',
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
                        data: 'chart_of_account',
                        name: 'chart_of_account',
                    },

                    {
                        data: 'account_header',
                        name: 'account_header',
                    },

                    {
                        data: 'bank_cash',
                        name: 'bank_cash',
                    },

                    {
                        data: 'account_header',
                        name: 'account_header',
                    },

                    {
                        data: 'edit',
                        name: 'edit',
                    },

                    {
                        data: 'delete',
                        name: 'delete',
                    },

                ],
            });
        });

        // Create CashBook 
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


        $('select[name="bank_cash_id"]').on('change', function() {
            var chartof_account_id = $(this).val();
            if (chartof_account_id) {
                $.ajax({
                    url: '/chartofaccountdependent/ajax/' + chartof_account_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        document.getElementById("bank_cash_description").value = data.description;
                    }
                });
            }
        });


        $('select[name="demand_invoice_id"]').on('change', function() {
            var demand_invoice_id = $(this).val();
            if (demand_invoice_id) {
                $.ajax({
                    url: '/demand_invoice_ajax/' + demand_invoice_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var company_name = data.overseas_agencies.company_name;
                        var agent_company_name = data.overseas_agencies.agent_company_name;
                        document.getElementById("agentCompanyName").value = agent_company_name;
                        document.getElementById("companyName").value = company_name;
                    }
                });
            }
        });



        function saveCashBook() {
            var cash_book_date = document.getElementsByName("cash_book_date")[0].value;
            var day = document.getElementsByName("day")[0].value;
            var month = document.getElementsByName("month")[0].value;
            var year = document.getElementsByName("year")[0].value;
            var reference = document.getElementsByName("reference")[0].value;
            var description = document.getElementsByName("description")[0].value;
            var income = document.getElementsByName("income")[0].value;
            var expense = document.getElementsByName("expense")[0].value;
            var tax = document.getElementsByName("tax")[0].value;
            var chartof_account_id = document.getElementsByName("chartof_account_id")[0].value;
            var bank_cash_id = document.getElementsByName("bank_cash_id")[0].value;
            var demand_invoice_id = document.getElementsByName("demand_invoice_id")[0].value;


            if (cash_book_date === '' || cash_book_date === null) {
                toastr.remove()
                toastr.error("Cashbook is required");
                return false;
            } else if (reference === '' || reference === null) {
                toastr.remove()
                toastr.error("Reference no is required");
                return false;
            } else if (income === '' || income === null || isNaN(income)) {
                toastr.remove()
                toastr.error("Income Numeric value only.");
                return false;
            } else if (expense === '' || expense === null || isNaN(expense)) {
                toastr.remove()
                toastr.error("Expense Numeric value only.");
                return false;
            } else if (tax === '' || tax === null || isNaN(tax)) {
                toastr.remove()
                toastr.error("Expense Numeric value only.");
                return false;
            } else if (chartof_account_id === '' || chartof_account_id === null) {
                toastr.remove()
                toastr.error("Chart of Account is required");
                return false;
            } else if (bank_cash_id === '' || bank_cash_id === null) {
                toastr.remove()
                toastr.error("Bank & Cash	 is required");
                return false;
            }

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
                    "demand_invoice_id": demand_invoice_id,
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
                    document.getElementsByName("demand_invoice_id")[0].value = '';

                    reloadDatatable();
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


        // Edit  CashBook
        $('body').on('click', '#editCashBook', function(e) {
            e.preventDefault();
            var cash_book_id = $(this).data('id');
            $.ajax({
                url: `cashbook_edit/${cash_book_id}`,
                method: 'GET',
                success: function(result) {
                    $('#editCashBookModel').modal('show');
                    $('#showEditForm').html(result.html);
                }
            });
        });

        function updateCashBook() {
            var cash_book_date = document.getElementsByName("cash_book_date_edit")[0].value;
            var day = document.getElementsByName("day_edit")[0].value;
            var month = document.getElementsByName("month_edit")[0].value;
            var year = document.getElementsByName("year_edit")[0].value;
            var reference = document.getElementsByName("reference_edit")[0].value;
            var description = document.getElementsByName("description_edit")[0].value;
            var income = document.getElementsByName("income_edit")[0].value;
            var expense = document.getElementsByName("expense_edit")[0].value;
            var tax = document.getElementsByName("tax_edit")[0].value;
            var chartof_account_id = document.getElementsByName("chartof_account_id_edit")[0].value;
            var bank_cash_id = document.getElementsByName("bank_cash_id_edit")[0].value;
            var cash_book_id = document.getElementsByName("cash_book_id")[0].value;
            var demand_invoice_id = document.getElementsByName("demand_invoice_id_edit")[0].value;

            if (cash_book_date === '' || cash_book_date === null) {
                toastr.remove()
                toastr.error("Cashbook is required");
                return false;
            } else if (reference === '' || reference === null) {
                toastr.remove()
                toastr.error("Reference no is required");
                return false;
            } else if (income === '' || income === null || isNaN(income)) {
                toastr.remove()
                toastr.error("Income Numeric value only.");
                return false;
            } else if (expense === '' || expense === null || isNaN(expense)) {
                toastr.remove()
                toastr.error("Expense Numeric value only.");
                return false;
            } else if (tax === '' || tax === null || isNaN(tax)) {
                toastr.remove()
                toastr.error("Expense Numeric value only.");
                return false;
            } else if (chartof_account_id === '' || chartof_account_id === null) {
                toastr.remove()
                toastr.error("Chart of Account is required");
                return false;
            } else if (bank_cash_id === '' || bank_cash_id === null) {
                toastr.remove()
                toastr.error("Bank & Cash	 is required");
                return false;
            }

            $.ajax({
                url: "{{ route('cashbook_update') }}",
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
                    "cash_book_id": cash_book_id,
                    "demand_invoice_id": demand_invoice_id,
                },
                success: function(response) {
                    reloadDatatable();
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


        //Delete CashBook
        $('body').on('click', '#deleteCashBook', function(e) {
            e.preventDefault();
            var cash_book_id = $(this).data('id');
            swal({
                    title: "Delete Account",
                    text: "Are you sure you want to delete this account?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ route('cashbook_delete') }}",
                            method: 'POST',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "cash_book_id": cash_book_id,
                            },
                            success: function(result) {
                                toastr.remove()
                                toastr.success("Your processing has been completed.");
                                reloadDatatable();
                            }
                        });
                    }
                });
        });

        function reloadDatatable() {
            $('#cash_books').DataTable().ajax.reload();
        }
    </script>
@endsection
