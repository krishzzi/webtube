<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MpTop10') }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/front/images/favicon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.min.css')}}" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{asset('assets/front/css/typography.css')}}">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}" />
    <!-- Responsive -->
    <link rel="stylesheet" href="{{asset('assets/front/css/responsive.css')}}" />
</head>
<body>
@if(!empty($getTools) && $getTools['display_loader'] ==1)
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
@endif
<!-- loader END -->
@include('layouts.front.components.header')
@yield('content')
@include('layouts.front.components.modal')
@include('layouts.front.components.footer')

<!-- MainContent End-->
<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
</div>
<!-- back-to-top End -->
<!-- jQuery, Popper JS -->
<script src="{{asset('assets/front/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
<!-- Slick JS -->
<script src="{{asset('assets/front/js/slick.min.js')}}"></script>
<!-- owl carousel Js -->
<script src="{{asset('assets/front/js/owl.carousel.min.js')}}"></script>
<!-- select2 Js -->
<script src="{{asset('assets/front/js/select2.min.js')}}"></script>
<!-- Magnific Popup-->
<script src="{{asset('assets/front/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Slick Animation-->
<script src="{{asset('assets/front/js/slick-animation.min.js')}}"></script>
<!-- Custom JS-->
<script src="{{asset('assets/front/js/custom.js')}}"></script>
<script src="{{asset('assets/front/js/userscript.js')}}"></script>
</body>
</html>

