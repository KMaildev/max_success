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

            <li id="sidebar-bottom"></li>
        </ul>
    </section>
</aside>
