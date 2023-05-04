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
                <a href="{{ route('country_dashboard.show', session('country_id') ?? 1) }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Dashboard
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('overseas_agent.index') ? 'active' : '' }}">
                <a href="{{ route('overseas_agent.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Overseas Company
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('agent_list.index') ? 'active' : '' }}">
                <a href="{{ route('agent_list.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Local Agent Lists
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('passport.index') ? 'active' : '' }}">
                <a href="{{ route('passport.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Labour Lists
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('demand.index') ? 'active' : '' }}">
                <a href="{{ route('demand.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Demand
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('interview.index') ? 'active' : '' }}">
                <a href="{{ route('interview.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Interview
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('contract.index') ? 'active' : '' }}">
                <a href="{{ route('contract.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Contract
                    </span>
                </a>
            </li>

            <li class="{{ Route::is('sending.index') ? 'active' : '' }}">
                <a href="{{ route('sending.index') }}">
                    <svg class="svg-icon">
                        <use href="#icon-dashboard">
                    </svg>
                    <span>
                        Sending
                    </span>
                </a>
            </li>

            <li id="sidebar-bottom"></li>
        </ul>
    </section>
</aside>
