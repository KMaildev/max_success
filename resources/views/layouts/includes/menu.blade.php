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


            <li class="{{ Route::is('all_labour_list') ? 'active' : '' }}">
                <a href="{{ route('all_labour_list') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Labour Lists
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

            <li class="{{ Route::is('country.index') ? 'active' : '' }}">
                <a href="{{ route('country.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Country
                    </span>
                </a>
            </li>

            <li id="sidebar-bottom"></li>
        </ul>
    </section>
</aside>
