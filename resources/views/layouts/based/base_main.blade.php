@include('layouts.includes.header')

@include('layouts.includes.top')


@include('layouts.based.menus.base_menu')

<div class="content-wrapper">
    @yield('content')
</div>

@include('layouts.includes.footer')
