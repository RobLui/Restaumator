<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Restaumator') }}</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('css/creative.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    </head>
    <body id="page-top">

        @include('partials._nav')

        @include('partials._header')

        {{--@include('partials._body')--}}

        {{--@include('partials._footer')--}}


        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading text-white">We've got what you need!</h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4">Restaumator has everything you need to get your people up and running in no time! </p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">At Your Service</h2>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Zotte dingen</h3>
                            <p class="text-muted mb-0">Zotte dingen</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Zotte dingen</h3>
                            <p class="text-muted mb-0">Zotte dingen</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Zotte dingen</h3>
                            <p class="text-muted mb-0">Zotte dingen</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Made with Love</h3>
                            <p class="text-muted mb-0">Zotte dingen</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--<section class="p-0" id="portfolio">--}}
            {{--<div class="container-fluid p-0">--}}
                {{--<div class="row no-gutters popup-gallery">--}}
                    {{--<div class="col-lg-4 col-sm-6">--}}
                        {{--<a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">--}}
                            {{--<img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">--}}
                            {{--<div class="portfolio-box-caption">--}}
                                {{--<div class="portfolio-box-caption-content">--}}
                                    {{--<div class="project-category text-faded">--}}
                                        {{--Category--}}
                                    {{--</div>--}}
                                    {{--<div class="project-name">--}}
                                        {{--Project Name--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-6">--}}
                        {{--<a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">--}}
                            {{--<img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">--}}
                            {{--<div class="portfolio-box-caption">--}}
                                {{--<div class="portfolio-box-caption-content">--}}
                                    {{--<div class="project-category text-faded">--}}
                                        {{--Category--}}
                                    {{--</div>--}}
                                    {{--<div class="project-name">--}}
                                        {{--Project Name--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-6">--}}
                        {{--<a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">--}}
                            {{--<img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">--}}
                            {{--<div class="portfolio-box-caption">--}}
                                {{--<div class="portfolio-box-caption-content">--}}
                                    {{--<div class="project-category text-faded">--}}
                                        {{--Category--}}
                                    {{--</div>--}}
                                    {{--<div class="project-name">--}}
                                        {{--Project Name--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-6">--}}
                        {{--<a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">--}}
                            {{--<img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">--}}
                            {{--<div class="portfolio-box-caption">--}}
                                {{--<div class="portfolio-box-caption-content">--}}
                                    {{--<div class="project-category text-faded">--}}
                                        {{--Category--}}
                                    {{--</div>--}}
                                    {{--<div class="project-name">--}}
                                        {{--Project Name--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-6">--}}
                        {{--<a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">--}}
                            {{--<img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">--}}
                            {{--<div class="portfolio-box-caption">--}}
                                {{--<div class="portfolio-box-caption-content">--}}
                                    {{--<div class="project-category text-faded">--}}
                                        {{--Category--}}
                                    {{--</div>--}}
                                    {{--<div class="project-name">--}}
                                        {{--Project Name--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-6">--}}
                        {{--<a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">--}}
                            {{--<img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">--}}
                            {{--<div class="portfolio-box-caption">--}}
                                {{--<div class="portfolio-box-caption-content">--}}
                                    {{--<div class="project-category text-faded">--}}
                                        {{--Category--}}
                                    {{--</div>--}}
                                    {{--<div class="project-name">--}}
                                        {{--Project Name--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}

        <section class="bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Join the wonderfull expierience now!</h2>
                <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading">Let's Get In Touch!</h2>
                        <hr class="my-4">
                        <p class="mb-5">Like Restaumator? Contact us asap</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                        <p><a href="tel:+320400909090">+32 497 77 77 77</a></p>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                        <p>
                            <a href="mailto:restaumatorAlessandroRobbert@gmail.com">email: Restaumator</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{ asset('js/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/vendor/scrollreveal/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('js/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

        <!-- Custom scripts for this template -->
        <script src="{{ asset('js/creative.min.js') }}"></script>

    </body>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/creative.min.js') }}"></script>


    </body>
</html>

