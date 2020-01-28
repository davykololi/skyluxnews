<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@include('partials.head')
<body style="background-image: url('/static/body2.jpg');">
	<div id="app">
    	@include('partials.header')
        @include('partials.navbar')
   		<!-- main content -->
        <main class="py-4">
            @yield('content')
        </main>
        <br/>
        @include('partials.footer')
        @include('partials.scripts')
    </div>
</body>
</html>
