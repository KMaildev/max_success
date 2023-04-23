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

            <li class="{{ Route::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        DASHBOARD
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        User Lists
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('hospital.index') ? 'active' : '' }}">
                <a href="{{ route('hospital.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Hospital
                    </span>
                </a>
            </li>

            <li id="sidebar-bottom"></li>
        </ul>
    </section>
</aside>
