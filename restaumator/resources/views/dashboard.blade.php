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
            <div class="col-md-12">
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
                                @if(!$table->active_bill)
                                    <div class="symbol text-center bg-yellow">
                                        <i class="fa fa-glass fa-2x"></i>
                                    </div>
                                @endif
                                @if(!$table->active_drink)
                                    <div class="symbol text-center bg-green">
                                        <i class="fa fa-money fa-2x"></i>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                    <div class="wall">
                        <div class="door">

                        </div>
                    </div>
                    <div class="bar"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/settabletoactive.js') }}"></script>
@endsection
