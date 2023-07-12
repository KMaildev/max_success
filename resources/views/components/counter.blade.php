<div class="row">
    <div class="col-md-3 col-xs-6">
        <div id="invoice-count" class="small-box bg-green">
            <div class="inner">
                <h4>
                    <i>TOTAL LABOUR</i>
                    <span class="total-invoice">
                        {{ number_format($total_passport) }}
                    </span>
                </h4>
                <h4>
                    <i>
                        Total Male + Female
                    </i>
                    <span class="total-invoice" style="padding-top: 4px;">
                        M: {{ $total_passport_male }}
                        +
                        F: {{ $total_passport_female }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-pencil"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-xs-6">
        <div id="customer-count" class="small-box bg-red">
            <div class="inner">
                <h4>
                    <i>TOTAL DEMAND</i>
                    <span class="total-customer">
                        {{ $total_demand ?? 0 }}
                    </span>
                </h4>
                <h4>
                    <i>
                        Total Male + Female
                    </i>
                    <span class="total-customer">
                        M:
                        {{ $demand_male ?? 0 }}
                        +
                        F:
                        {{ $demand_female ?? 0 }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-xs-6">
        <div id="supplier-count" class="small-box bg-purple">
            <div class="inner">
                <h4>
                    <i>TOTAL CONTRACT</i>
                    <span class="total-suppier">
                        {{ $contract_total ?? 0 }}
                    </span>
                </h4>
                <h4>
                    <i>
                        Total Male + Female
                    </i>
                    <span class="total-suppier">
                        M:
                        {{ $contract_male ?? 0 }}
                        +
                        F:
                        {{ $contract_female ?? 0 }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-xs-6">
        <div id="product-count" class="small-box bg-yellow">
            <div class="inner">
                <h4>
                    <i>TOTAL SENDING</i>
                    <span class="total-product">
                        {{ $sending_total ?? 0 }}
                    </span>
                </h4>
                <h4>
                    <i>
                        Total Male + Female
                    </i>
                    <span class="total-product">
                        M:
                        {{ $sending_male ?? 0 }}
                        +
                        F:
                        {{ $sending_female ?? 0 }}
                    </span>
                </h4>
            </div>
            <div class="icon">
                <i class="fa fa-star"></i>
            </div>
        </div>
    </div>
</div>
