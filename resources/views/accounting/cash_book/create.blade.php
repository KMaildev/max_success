<tr>
    <td>
        <input type="hidden">
    </td>

    <td>
        <input type="text" class="form-control date_picker" style="width: 120px" name="cash_book_date" id="cashBookDate">
    </td>

    <td>
        <input readonly type="text" class="form-control" style="width: 120px" id="Day">
    </td>

    <td>
        <input readonly type="text" class="form-control" style="width: 120px" id="Month">
    </td>

    <td>
        <input readonly type="text" class="form-control" style="width: 120px" id="Year">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="reference" value="{{ old('Reference') }}">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="description"
            value="{{ old('description') }}">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="income" value="{{ old('income') }}">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="expense" value="{{ old('expense') }}">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="tax" value="{{ old('tax') }}">
    </td>

    <td>
        <select name="chartof_account_id" class="form-select form-select select2" required style="width: 100%;">
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
        <select name="bank_cash_id" class="form-select form-select select2" required style="width: 100%;">
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
</script>
