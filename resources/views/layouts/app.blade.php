<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
<body>
    @include('partials.top')
    <div class="container">
	@include('partials.header')
    @include('partials.navbar')
    @include('partials.newsection')
    <!-- main content -->
    <main class="py-4">
        @yield('content')
    </main>
    <br/>
    @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>
</html>
