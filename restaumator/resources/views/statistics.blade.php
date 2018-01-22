@extends('layouts.app')

@section('content')

@include('partials._logged-in-nav')

<div class="container">
    <img class="restaurantname margin-top-minus-3" src="{{ asset('img/het_huis_pixelated.png') }}" alt="Restaurant Het Huis">
    <div class="jumbotron text-center bg-primary">
        <h2 class="text-white"> Your restaurant statistics </h2>
    </div>

    <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
            <div class="info-box bg-aqua height-20">

                <span class="info-box-icon">
                    <i class="fa fa-glass"></i>
                </span>

                <div class="top-1">
                    <span class="info-box-number">
                        @if(!empty($drink_time))
                            {{ $drink_time }}
                        @endif
                    </span>
                </div>

                <span class="info-box-text margin-top-5">
                    <p> Average drink time </p>
                </span>

            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
            <div class="info-box bg-green height-20">

                <span class="info-box-icon">
                    <i class="fa fa-clock-o"></i>
                </span>

                <div class="top-1">
                    <span class="info-box-number">
                        @if(!empty($bill_time))
                            {{ $bill_time }}
                        @endif
                    </span>
                </div>

                <span class="info-box-text margin-top-5">
                   <p> Average time spent</p>
                </span>
            </div>
        </div>

    </div>

</div>

@endsection
