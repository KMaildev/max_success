@include('layouts.includes.header')

@include('layouts.includes.top')
@include('layouts.includes.menu')

<div class="content-wrapper">
    @yield('content')
</div>

@include('layouts.includes.footer')
