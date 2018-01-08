@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/restaurant1.css') }}">
@section('content')

    @include('partials._logged-in-nav')

    <div class="container">
        {{--<h1 class="restaurantname"> {{$restaurant->name}} </h1>--}}
        <img class="restaurantname margin-top-minus-3" src="{{ asset('img/het_huis_pixelated.png') }}" alt="Restaurant Het Huis">
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
