<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CFIERD</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico" type="image/x-icon') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/imagebg.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('assets/css/switcher-style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>

<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/validation.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.js')}}"></script>
    <script src="{{ asset('assets/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/text_animation.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>
</body>

</html>
