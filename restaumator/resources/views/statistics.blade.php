@extends('layouts.app')

@section('content')

@include('partials._logged-in-nav')

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
                        @if(!empty($drink_time))
                            {{ $drink_time }} min
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
                        {{ $bill_time }}
                    </span>


                </div>

            </div>
        </div>
    </div>

</div>

@endsection
