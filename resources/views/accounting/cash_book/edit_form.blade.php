<form method="POST" autocomplete="off">
    <input type="hidden" value="{{ $cash_book->id }}" name="cash_book_id">

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Date
        </label>
        <div class="col-md-8">
            <input class="form-control @error('cash_book_date') is-invalid @enderror" type="date"
                name="cash_book_date_edit" value="{{ $cash_book->cash_book_date ?? '' }}" id="cashBookDateEdit" />
            @error('cash_book_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Day
        </label>
        <div class="col-md-8">
            <input class="form-control @error('day_edit') is-invalid @enderror" type="text" name="day_edit"
                value="{{ $cash_book->entry_day ?? '' }}" id="DayEdit" />
            @error('day_edit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Month
        </label>
        <div class="col-md-8">
            <input class="form-control @error('month_edit') is-invalid @enderror" type="text" name="month_edit"
                value="{{ $cash_book->entry_month ?? '' }}" id="MonthEdit" />
            @error('month_edit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Year
        </label>
        <div class="col-md-8">
            <input class="form-control @error('year_edit') is-invalid @enderror" type="text" name="year_edit"
                value="{{ $cash_book->entry_year ?? '' }}" id="YearEdit" />
            @error('year_edit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Reference no
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="reference_edit" value="{{ $cash_book->reference }}">
            @error('reference')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Demand Invoice
        </label>
        <div class="col-md-8">
            <select name="demand_invoice_id_edit" class="form-select form-control form-select" style="width: 100%;"
                autocomplete="off">
                <option value="">
                    -- Demand Invoice --
                </option>
                @foreach ($demand_invoices as $demand_invoice)
                    <option value="{{ $demand_invoice->id }}" @if ($demand_invoice->id == $cash_book->demand_invoice_id) selected @endif>
                        {{ $demand_invoice->invoice_no }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Description
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="description_edit" value="{{ $cash_book->description }}">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Income
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="income_edit" value="{{ $cash_book->income ?? 0 }}">
            @error('income')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Expenses
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="expense_edit" value="{{ $cash_book->expense ?? 0 }}">
            @error('expense')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Tax
        </label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="tax_edit" value="{{ $cash_book->tax ?? 0 }}">
            @error('tax')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Chart of Account
        </label>
        <div class="col-md-8">
            <select onchange="selectChartOfAccount()" id="chartof_account_id" name="chartof_account_id_edit"
                class="form-select form-control form-select select3" style="width: 100%;">
                <option value="">
                    -- Chart of Account--
                </option>
                @foreach ($chartof_accounts as $chartof_account)
                    <option value="{{ $chartof_account->id }}" @if ($chartof_account->id == $cash_book->chartof_account_id) selected @endif>
                        {{ $chartof_account->coa_number }}
                    </option>
                @endforeach
            </select>
            @error('chartof_account_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Account Header
        </label>
        <div class="col-md-8">
            <input class="form-control" type="text" readonly id="coa_description_edit" />
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label for="html5-text-input" class="col-md-3 control-label">
            Bank & Cash
        </label>
        <div class="col-md-8">
            <select name="bank_cash_id_edit" class="form-control form-select form-select select2"
                style="width: 100%;">
                <option value="">
                    -- Bank & Cash--
                </option>
                @foreach ($chartof_accounts as $chartof_account)
                    @if ($chartof_account->id == 1)
                        <option value="{{ $chartof_account->id }}" @if ($chartof_account->id == $cash_book->bank_cash_id) selected @endif>
                            {{ $chartof_account->coa_number }}
                        </option>
                    @endif

                    @if ($chartof_account->id == 2)
                        <option value="{{ $chartof_account->id }}" @if ($chartof_account->id == $cash_book->bank_cash_id) selected @endif>
                            {{ $chartof_account->coa_number }}
                        </option>
                    @endif

                    @if ($chartof_account->sub_or_main_account == 'sub_account')
                        <option value="{{ $chartof_account->id }}" @if ($chartof_account->id == $cash_book->bank_cash_id) selected @endif>
                            {{ $chartof_account->coa_number }}
                        </option>
                    @endif
                @endforeach
            </select>
            @error('bank_cash_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="form-group" style="padding: 15px;">
        <label class="col-sm-3 control-label"></label>
        <div class="col-sm-2">
            <button onclick="updateCashBook()" class="btn btn-info btn-block" type="button">
                <span class="fa fa-fw fa-save"></span>
                Save
            </button>
        </div>
    </div>
</form>

<script>
    document.getElementById("cashBookDateEdit").addEventListener("blur", getCashBookDateEdit)

    function getCashBookDateEdit(e) {
        var dateArr = e.srcElement.value.split('-');
        if (dateArr.length > 1) {
            document.getElementById("MonthEdit").value = dateArr[1];
            document.getElementById("YearEdit").value = dateArr[0];
            document.getElementById("DayEdit").value = dateArr[2];
        }
    }

    function selectChartOfAccount(id = null) {
        var chartof_account_id = document.getElementById("chartof_account_id").value;
        if (chartof_account_id) {
            chartof_account_id = chartof_account_id;
        } else {
            chartof_account_id = id;
        }
        if (chartof_account_id) {
            $.ajax({
                url: '/chartofaccountdependent/ajax/' + chartof_account_id,
                type: "GET",
                dataType: "json",
                success: function(data) {
                    document.getElementById("coa_description_edit").value = data.description;
                }
            });
        }
    }
    selectChartOfAccount({{ $cash_book->chartof_account_id }});
</script>
