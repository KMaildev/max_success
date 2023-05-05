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


            <li class="{{ Route::is('accounting_dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('accounting_dashboard.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Chart of Accounts
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('accounting_dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('accounting_dashboard.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Labour Invoice
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('accounting_dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('accounting_dashboard.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Demand Invoice
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('accounting_dashboard.index') ? 'active' : '' }}">
                <a href="{{ route('accounting_dashboard.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Cashbook
                    </span>
                </a>
            </li>


            <li class="treeview">
                <a href="bank_transactions.php?type=report">
                    <svg class="svg-icon">
                        <use href="#icon-bank"></use>
                    </svg>
                    <span>
                        Reports
                    </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
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
                </ul>
            </li>


            <li id="sidebar-bottom"></li>
        </ul>
    </section>
</aside>
