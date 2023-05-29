<tr>
    <form method="POST" id="createAccountForm" autocomplete="off">

        <td>
            <input type="hidden">
        </td>

        <td>
            <input type="text" class="form-control date_picker" style="width: 120px" name="cash_book_date"
                id="cashBookDate">
        </td>

        <td>
            <input readonly type="text" class="form-control" style="width: 120px" id="Day" name="day">
        </td>

        <td>
            <input readonly type="text" class="form-control" style="width: 120px" id="Month" name="month">
        </td>

        <td>
            <input readonly type="text" class="form-control" style="width: 120px" id="Year" name="year">
        </td>

        <td>
            <input type="text" class="form-control" style="width: 120px" name="reference">
        </td>

        <td>
            <input type="text" class="form-control" style="width: 120px" name="description">
        </td>

        <td>
            <input type="text" class="form-control" style="width: 120px" name="income" value="0">
        </td>

        <td>
            <input type="text" class="form-control" style="width: 120px" name="expense" value="0">
        </td>

        <td>
            <input type="text" class="form-control" style="width: 120px" name="tax" value="0">
        </td>

        <td>
            <select name="chartof_account_id" class="form-select form-select select2" style="width: 100%;">
                <option value="">
                    -- Chart of Account--
                </option>
                @foreach ($chartof_accounts as $chartof_account)
                    <option value="{{ $chartof_account->id }}">
                        {{ $chartof_account->coa_number }}
                    </option>
                @endforeach
            </select>
        </td>

        <td>
            <input class="form-control" type="text" style="width: 120px" readonly id="coa_description" />
        </td>

        <td>
            <select name="bank_cash_id" class="form-select form-select select2" style="width: 100%;">
                <option value="">
                    -- Bank & Cash--
                </option>
                @foreach ($chartof_accounts as $chartof_account)
                    @if ($chartof_account->id == 1)
                        <option value="{{ $chartof_account->id }}">
                            {{ $chartof_account->coa_number }}
                        </option>
                    @endif

                    @if ($chartof_account->id == 2)
                        <option value="{{ $chartof_account->id }}">
                            {{ $chartof_account->coa_number }}
                        </option>
                    @endif
                @endforeach
            </select>
        </td>

        <td>
            <button type="submit" class="btn btn-block btn-primary">
                <i class="fa fa-fw fa-pencil"></i>
            </button>
        </td>
    </form>

</tr>

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
</script>
