<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
        <title>DCGROUP</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
        <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/apple-touch-icon-114x114.png')}}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/theme-vendors.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />

    </head>
    <body  data-mobile-nav-style="classic">
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript" src="{{asset('js/theme-vendors.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
        <script>
            $( window ).on( 'load', function () {

            });

        </script>

    <body>
