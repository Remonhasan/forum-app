<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/magnific-popup.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.css')}}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery.fancybox.min.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/themify-icons.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/niceselect.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.css')}}">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/flex-slider.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl-carousel.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slicknav.min.css')}}">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
    @stack('css')
</head>
<body class="js">
@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')


<!-- Jquery -->
<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/frontend/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- Color JS -->
<script src="{{asset('assets/frontend/js/colors.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('assets/frontend/js/slicknav.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('assets/frontend/js/owl-carousel.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('assets/frontend/js/magnific-popup.js')}}"></script>
<!-- Waypoints JS -->
<script src="{{asset('assets/frontend/js/waypoints.min.js')}}"></script>
<!-- Countdown JS -->
<script src="{{asset('assets/frontend/js/finalcountdown.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('assets/frontend/js/nicesellect.js')}}"></script>
<!-- Flex Slider JS -->
<script src="{{asset('assets/frontend/js/flex-slider.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{asset('assets/frontend/js/scrollup.js')}}"></script>
<!-- Onepage Nav JS -->
<script src="{{asset('assets/frontend/js/onepage-nav.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{asset('assets/frontend/js/easing.js')}}"></script>
<!-- Active JS -->
<script src="{{asset('assets/frontend/js/active.js')}}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>
@stack('js')
</body>
</html>