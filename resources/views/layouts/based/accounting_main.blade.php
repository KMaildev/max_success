@include('layouts.includes.header')

@include('layouts.includes.top')


@include('layouts.based.menus.accounting_menu')

<div class="content-wrapper" style="min-height: 95vh !important">
    @yield('content')
</div>

@include('layouts.includes.footer')
