@include('front.scripts')
@include('front.styles')
@include('front.metriks')
@include('front.header')
@include('front.footer')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('styles')
    @yield('meta')
</head>
<body>
    <p class="top">{{$static->logo_text_field}}</p>
    <div class="wrapper">
        @yield('header')
        @yield('content')
        @yield('footer')
    </div>
</body>
    @yield('scripts')
    @yield('metriks')
</html>