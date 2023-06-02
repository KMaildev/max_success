<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <svg class="svg-icon">
                    <use href="#icon-avatar">
                </svg>
            </div>
            <div class="pull-left info">
                <p class="username" title="{{ auth()->user()->name ?? '' }}">
                    {{ auth()->user()->name ?? '' }}
                </p>
                <a href="user_profile.php?id=1">
                    <i class="fa fa-circle user-status-dot"></i>
                    Welcome
                </a>
            </div>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Route::is('accounting_dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('accounting_dashboard.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>


            <li class="{{ Route::is('labour_payment.index') ? 'active' : '' }}">
                <a href="{{ route('labour_payment.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Labour Invoice
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('demand_invoice.index') ? 'active' : '' }}">
                <a href="{{ route('demand_invoice.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Demand Invoice
                    </span>
                </a>
            </li>


            <li class="{{ Route::is('cashbook.index') ? 'active' : '' }}">
                <a href="{{ route('cashbook.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Cashbook
                    </span>
                </a>
            </li>


            <li class="">
                <a ng-click="BankingDepositModal()" onclick="return false;" href="#">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Tax Report
                </a>
            </li>

            <li class="">
                <a ng-click="BankingDepositModal()" onclick="return false;" href="#">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Balance Sheet
                </a>
            </li>

            <li class="">
                <a ng-click="BankingDepositModal()" onclick="return false;" href="#">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Aged Receivable
                </a>
            </li>

            <li class="">
                <a ng-click="BankingDepositModal()" onclick="return false;" href="#">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Aged Payable
                </a>
            </li>

            <li class="">
                <a ng-click="BankingDepositModal()" onclick="return false;" href="#">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    General Ledger
                </a>
            </li>

            <li class="">
                <a ng-click="BankingDepositModal()" onclick="return false;" href="#">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Bank & Cash
                </a>
            </li>


            <li class="{{ Route::is('accountclassification.index') ? 'active' : '' }}">
                <a href="{{ route('accountclassification.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Account Classification
                </a>
            </li>

            <li class="{{ Route::is('accounttype.index') ? 'active' : '' }}">
                <a href="{{ route('accounttype.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Account Type
                </a>
            </li>

            <li class="{{ Route::is('chartofaccount.index') ? 'active' : '' }}">
                <a href="{{ route('chartofaccount.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-plus"></use>
                    </svg>
                    Chart Of Accounts
                </a>
            </li>

            <li id="sidebar-bottom"></li>
        </ul>
    </section>
</aside>
