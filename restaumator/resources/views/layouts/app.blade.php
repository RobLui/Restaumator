<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <script>
            if(navigator.userAgent.indexOf("Speed Insights") == -1) {
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-68616424-4', 'auto');
                ga('send', 'pageview');
            }
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--APPLE--}}
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-title" content="Restaumator" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />

        {{--GENERAL--}}
        <meta name="description" content="Restaurant Automator" />
        <meta name="title" content="Restaumator">
        <meta name="locale" content="en">
        <meta name="keywords" content="Restaurant,Automator,Drinks,Restaumator">
        <meta name="author" content="Alessandro Aussems & Robbert Luit">
        <meta name="publisher" content="Alessandro Aussems & Robbert Luit">
        <meta name="robots" content="all">

        {{--FACEBOOK--}}
        <meta property="og:title" content="Restaumator" />
        <meta property="og:site_name" content="Restaumator" />
        <meta property="og:description" content="Restaurant Automator" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{ asset("img/logo.png") }}" />
        <meta property="og:url" content="{{ asset("img/logo.png") }}" />

        {{--TWITTER--}}
        <meta property="twitter:card" content="summary" />
        <meta property="twitter:title" content="Restaumator" />
        <meta property="twitter:description" content="Restaurant Automator" />
        <meta property="twitter:image" content="{{ asset("img/logo.png") }}" />
        <meta property="twitter:url" content="{{ asset("img/logo.png") }}" />

        <link rel="icon" type="image/png" href="{{asset("img/logo.png")}}">
        <link rel="canonical" href="https://restaumator.com">

        <title>{{ config('app.name', 'Restaumator') }}</title>

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/creative.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        {{-- ADMIN CSS --}}
        <link rel="stylesheet" href="{{ asset('css/admin/AdminLTE.css') }}">

        {{-- JQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        {{-- FONTS --}}
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    </head>
    <body id="page-top">
        <div id="app">

            @yield('content')

            <!-- CORE JS -->
            <script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
            <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

            <!-- PLUGIN JS -->
            <script src="{{ asset('js/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
            <script src="{{ asset('js/vendor/scrollreveal/scrollreveal.min.js') }}"></script>

            <!-- CUSTOM JS -->
            {{-- <script src="{{ asset('js/app.js') }}"></script>--}}
            <script src="{{ asset('js/creative.min.js') }}"></script>

        </div>
    </body>
</html>
