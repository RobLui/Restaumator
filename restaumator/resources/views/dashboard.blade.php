@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/restaurant1.css') }}">
@section('content')
    <div class="black-bg">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{ route('productpage') }}">Restaumator</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ route('statistics') }}">Statistics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 wrapper">
                <div class="maincontent clearfix">

                    <ul class="restauranttables clearfix">
                        @foreach($tables as $table)
                            <li class="restauranttable">
                                <button type="button" onclick="ActivateTable( {{ $table->tablenumber }} )" class="btn btn-success activatebutton @if($table->is_active) hide @endif">
                                    Activate!
                                </button>
                                <button type="button" onclick="DeActivateTable( {{ $table->tablenumber }} )" class="btn btn-danger deactivatebutton @if(!$table->is_active) hide @endif">
                                    De-Activate!
                                </button>
                                <div class="symbol text-center bg-yellow hide drinkicon">
                                    <i class="fa fa-glass fa-2x"></i>
                                </div>
                                <div class="symbol text-center bg-green hide billicon">
                                    <i class="fa fa-money fa-2x"></i>
                                </div>
                            </li>
                        <div class="wrapper">
                                <p><span id="seconds">00</span>:<span id="tens">00</span></p>
                                <button id="button-start">Start</button>
                                <button id="button-stop">Stop</button>
                                <button id="button-reset">Reset</button>
                        </div>
                        @endforeach
                    </ul>

                    <div class="wall">
                        <div class="door">

                        </div>
                        <div class="frontdoor">

                        </div>
                    </div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/tableHandler.js') }}"></script>
@endsection
