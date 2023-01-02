<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>BAEI EXPRESS LIMITED | HOME</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="{{ asset('landing/root/img/favicon.png')}}"/>

        <!-- CDN JS File start -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
        <!-- <link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="all"> -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all"> -->
        <!-- CDN JS File end -->

        <!-- login Registration css start -->
        <link rel="stylesheet" href="{{ asset('landing/root/css/reset.css') }}"> <!-- CSS reset -->
        <link rel="stylesheet" href="{{ asset('landing/root/css/loginstyle.css') }}">  <!--Resource style -->
        <link rel="stylesheet" href="{{ asset('landing/root/css/demo.css') }}"> <!-- Demo style -->
        <!-- login Registration css end -->

        <!-- Primary JS File start -->
        <!-- Place favicon.ico in the landing/root directory -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        {{-- <link rel="stylesheet" href="{{ asset('landing/root/css/font-awesome.min.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('landing/root/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/root/css/build.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/root/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/root/css/style.css') }}">
        <link href="{{ asset('landing/root/css/tracking.css') }}" rel="stylesheet" >
        <link href="{{ asset('landing/root/css/bootstrap-touch-slider.css') }}" rel="stylesheet" >
        <!-- Primary JS File end -->
    </head>
    <body>
        @include('landing_pages.common.navbar')

        @yield('content')

        @include('landing_pages.common.landing_footer')

    </body>
</html>
