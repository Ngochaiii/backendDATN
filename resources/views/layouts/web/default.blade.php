<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.web.default.header_css')
    @stack('hcss')
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('layouts.web.default.nav')
        @include('layouts.web.default.header')
        <div class="container-fluid">
            @yield('content')
            @include('layouts.web.default.footer')           
        </div>
    </div>
    @include('layouts.web.default.footer_js')
    @stack('footer_js')
</body>

</html>
