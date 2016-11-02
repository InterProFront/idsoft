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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/id_fav.gif" type="image/gif">
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

@include('front.popups.question')
@include('front.popups.thank')
@include('front.popups.order')
<a href="#thanks" class="thank" style="display: none"></a>
</html>