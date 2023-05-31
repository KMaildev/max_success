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
        <button type="button" onclick="saveCashBook()" class="btn btn-block btn-primary">
            <i class="fa fa-fw fa-pencil"></i>
        </button>
    </td>
</form>