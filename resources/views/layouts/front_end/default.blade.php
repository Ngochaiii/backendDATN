<!DOCTYPE html>
<html lang="zxx" class="theme-light">
<head>
    <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        @include('layouts.front_end.default.header_css')
        @stack('css')
        <title>{{ $siteTitle ?? 'Eunoia' }}</title>
</head>
<body>
    <div class="content">
        <!-- Start Preloader Area -->
        <div class="preloader">
			<div class="spinner"></div>
		</div>
        <!-- End Preloader Area -->
        @include('layouts.front_end.default.header')
        @yield('content')
        @include('layouts.front_end.default.footer')
        <div class="go-top"><i data-feather="arrow-up"></i></div>

		<!-- Dark/Light Toggle -->
		<div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
    </div>
    @include('layouts.front_end.default.footer_js')
    @stack('footer_js')
</body>
</html>
