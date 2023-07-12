<div class="row">
    <div class="col-md-3 col-xs-6">
        <div id="invoice-count" class="small-box bg-green">
            <div class="inner">
                <h4>
                    <i>
                        Total Labour Payment
                    </i>
                    <span class="total-invoice">
                        {{ number_format($total_labour_payment, 2) }}
                    </span>
                </h4>
                <h4>
                    <i>
                        Total Labour Payment Today
                    </i>
                    <span class="total-invoice">
                        {{ number_format($total_labour_payment_today, 2) }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-pencil"></i>
            </div>
            <a href="{{ route('labour_payment.index') }}" class="small-box-footer">
                Details
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-md-3 col-xs-6">
        <div id="customer-count" class="small-box bg-red">
            <div class="inner">
                <h4>
                    <i>
                        Total Demand Invoice
                    </i>
                    <span class="total-customer">
                        {{ number_format($total_labour_invoice, 2) }}
                    </span>
                </h4>
                <h4>
                    <i>
                        Total Demand Invoice Today
                    </i>
                    <span class="total-customer">
                        {{ number_format($total_labour_invoice_today, 2) }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('demand_invoice.index') }}" class="small-box-footer">
                Details
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-md-3 col-xs-6">
        <div id="supplier-count" class="small-box bg-purple">
            <div class="inner">
                <h4>
                    <i>Total Income</i>
                    <span class="total-suppier">
                        {{ number_format($total_income, 2) }}
                    </span>
                </h4>
                <h4>
                    <i>Total Income Today</i>
                    <span class="total-suppier">
                        {{ number_format($total_income_today, 2) }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
            </div>
            <a href="{{ route('cashbook.index') }}" class="small-box-footer">
                Details
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-md-3 col-xs-6">
        <div id="product-count" class="small-box bg-yellow">
            <div class="inner">
                <h4>
                    <i>Total Expense</i>
                    <span class="total-product">
                        {{ number_format($total_expense, 2) }}
                    </span>
                </h4>
                <h4>
                    <i>Total Expense Today</i>
                    <span class="total-product">
                        {{ number_format($total_expense_today, 2) }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-star"></i>
            </div>
            <a href="{{ route('cashbook.index') }}" class="small-box-footer">
                Details
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>
