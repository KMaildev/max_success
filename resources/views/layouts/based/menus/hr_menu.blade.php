<aside class="main-sidebar">
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('data/logo.png') }}" alt="">
            </div>

            <div class="pull-left info">
                <p class="username" title="{{ auth()->user()->name ?? '' }}">
                    {{ auth()->user()->name ?? '' }}
                </p>
                <a href="{{ route('home') }}">
                    <i class="fa fa-circle user-status-dot"></i>
                    Welcome
                </a>
            </div>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Route::is('hr_dashboard.index') ? 'active' : '' }}" hidden>
                <a href="{{ route('hr_dashboard.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>


            <li class="{{ Route::is('users.index') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Users
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('attendance.index') ? 'active' : '' }}">
                <a href="{{ route('attendance.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Attendance
                    </span>
                </a>
            </li>


            <li class="{{ Route::is('role.index') ? 'active' : '' }}">
                <a href="{{ route('role.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Role
                    </span>
                </a>
            </li>


            <li class="{{ Route::is('permission.index') ? 'active' : '' }}">
                <a href="{{ route('permission.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Permission
                    </span>
                </a>
            </li>

            <li id="sidebar-bottom"></li>
        </ul>
    </section>
</aside>
