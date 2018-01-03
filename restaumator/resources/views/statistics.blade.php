@extends('layouts.app')

@section('content')

<div class="black-bg">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{ route('productpage') }}">Restaumator</a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="jumbotron text-center bg-primary">
        <h2 class="text-white">Your restaurant statistics</h2>
    </div>

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">

                <span class="info-box-icon">
                    <i class="fa fa-glass"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">
                        Drinks
                    </span>

                    <span class="info-box-number">
                        @if(!empty($average_drink_time))
                            {{ $average_drink_time }} min
                        @endif
                    </span>

                </div>

            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box bg-green">

                <span class="info-box-icon">
                    <i class="fa fa-clock-o"></i>
                </span>

                <div class="info-box-content">

                    <span class="info-box-text">
                        Time spent
                    </span>

                    <span class="info-box-number">
                        {{$bill_time}}
                    </span>


                </div>

            </div>
        </div>
    </div>

</div>

@endsection
