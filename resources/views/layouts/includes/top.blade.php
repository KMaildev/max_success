<header class="main-header">

    <a href="{{ route('home') }}" class="logo">
        <span class="logo-mini">
            <b title="Store 01">
                M
            </b>
            S
        </span>
        <span class="logo-lg">
            <b title="Store 01">
                Max Success
            </b>
        </span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">#</span>
        </a>
        <ul class="nav navbar-nav navbar-left">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="en">
                    <img src="{{ asset('data/en.png') }}" alt="en">
                </a>

                <ul class="dropdown-menu">
                    @foreach ($country_lists as $country_list)
                        <li>
                            <a href="{{ route('country_dashboard.show', $country_list->id) }}"
                                title="{{ $country->title ?? '' }}">
                                <img src="{{ Storage::url($country_list->image) }}" class="language-img"
                                    style="width: 20%">
                                &nbsp;&nbsp;
                                {{ $country_list->title ?? '' }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>

            <li>
                <a href="#" onClick="return false;" id="live_datetime"></a>
            </li>

        </ul>

        <!-- navbar custome menu start -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="user user-menu">
                    <a href="report_cashbook.php" title="Cashbook Report">
                        <svg class="svg-icon">
                            <use href="#icon-register-green">
                        </svg>
                        <span class="text">
                            CASHBOOK 
                        </span>
                    </a>
                </li>
                <li class="user user-menu">
                    <a href="invoice.php" title="Invoice">
                        <svg class="svg-icon">
                            <use href="#icon-invoice-green">
                        </svg>
                        <span class="text">
                            INVOICE 
                        </span>
                        &nbsp;<span class="label label-warning">0</span>
                    </a>
                </li>
                <li id="user-preference" class="user user-menu sell-btn">
                    <a href="user_preference.php?store_id=1" title="User Preference">
                        <svg class="svg-icon">
                            <use href="#icon-heart-green">
                        </svg>
                    </a>
                </li>
                <li class="user user-menu sell-btn">
                    <a href="store_single.php" title="Settings">
                        <svg class="svg-icon">
                            <use href="#icon-settings-green">
                        </svg>
                    </a>
                </li>
                <li class="user user-menu">
                    <a href="stock_alert.php" title="Stock Alert">
                        <svg class="svg-icon">
                            <use href="#icon-alert-green">
                        </svg>
                    </a>
                </li>

                <li class="user user-menu">
                    <a ng-click="SupportDeskModal();" onClick="return false;" href="#" title="ITsolution24">
                        <svg class="svg-icon">
                            <use href="#icon-support-green">
                        </svg>
                    </a>
                </li>
                <li>
                    <a id="togglingfullscreen" onClick="toggleFullScreenMode(); return false;" href="#"
                        title="Fullscreen">
                        <span class="fa fa-fw fa-expand"></span>
                    </a>
                </li>
                <li id="scrolling-sidebar" class="user user-menu">
                    <a href="#" title="Reports" data-toggle="scrolling-sidebar" data-width="350">
                        <i class="fa fa-square"></i>
                    </a>
                </li>

                <li class="user user-menu">
                    <a id="logout" class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </div>
    </nav>
</header>
