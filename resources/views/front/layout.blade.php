@include('front.scripts')
@include('front.styles')
@include('front.metriks')
@include('front.header')
@include('front.footer')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    @yield('styles')
    @yield('meta')
</head>
<body>
    <div class="wrapper">
        @yield('header')
        @yield('content')
        @yield('footer')
    </div>
    @yield('scripts')
    @yield('metriks')
</body>
</html>