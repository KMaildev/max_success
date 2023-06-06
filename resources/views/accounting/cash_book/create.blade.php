<form method="POST" id="createAccountForm" autocomplete="off">

    <td>
        <input type="hidden">
    </td>

    <td>
        <input type="text" class="form-control date_picker" style="width: 120px" name="cash_book_date" id="cashBookDate"
            autocomplete="off">
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
        <input type="text" class="form-control" style="width: 120px" name="reference" autocomplete="off">
    </td>

    <td>
        <select name="demand_invoice_id" class="form-select form-select select2" style="width: 100%;"
            autocomplete="off">
            <option value="">
                -- Demand Invoice --
            </option>
            @foreach ($demand_invoices as $demand_invoice)
                <option value="{{ $demand_invoice->id }}">
                    {{ $demand_invoice->invoice_no }}
                </option>
            @endforeach
        </select>
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="description" autocomplete="off">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="income" value="0"
            autocomplete="off">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="expense" value="0"
            autocomplete="off">
    </td>

    <td>
        <input type="text" class="form-control" style="width: 120px" name="tax" value="0"
            autocomplete="off">
    </td>

    <td>
        <select name="chartof_account_id" class="form-select form-select select2" style="width: 100%;"
            autocomplete="off">
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
        <input class="form-control" type="text" style="width: 120px" readonly id="coa_description"
            autocomplete="off" />
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

    <td colspan="2">
        <button type="button" onclick="saveCashBook()" class="btn btn-block btn-primary">
            <i class="fa fa-save fa-pencil"></i>
        </button>
    </td>

</form>
