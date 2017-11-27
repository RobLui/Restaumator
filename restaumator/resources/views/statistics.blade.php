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

    <div class="jumbotron text-center bg-green">
        <h2>Your restaurant statistics</h2>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-beer"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Drinks</span>
                    <span class="info-box-number">20 min</span>

                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                      </span>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-orange">
                <span class="info-box-icon"><i class="fa fa-money"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Bill</span>
                    <span class="info-box-number">50 min</span>

                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                      </span>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-clock-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Time spent</span>
                    <span class="info-box-number">45 min</span>

                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div>
                    <span class="progress-description">
                        70% Increase in 30 Days
                      </span>
                </div>
            </div>
        </div>
    </div>

    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Monthly average</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body chart-responsive">
            <div class="chart" id="bar-chart"
                 style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

                    <svg height="300" version="1.1" width="555" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                        <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">RL</desc>
                        <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>

                        <text x="32.515625" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                        </text>

                        <path fill="none" stroke="#aaaaaa" d="M45.015625,261H530" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>

                        <text x="32.515625" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan>
                        </text>

                        <path fill="none" stroke="#aaaaaa" d="M45.015625,202H530" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>

                        <text x="32.515625" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan>
                        </text>

                        <path fill="none" stroke="#aaaaaa" d="M45.015625,143H530" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>

                        <text x="32.515625" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan>
                        </text>

                        <path fill="none" stroke="#aaaaaa" d="M45.015625,84H530" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                        <text x="32.515625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan>
                        </text>
                        <path fill="none" stroke="#aaaaaa" d="M45.015625,25H530" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>

                        <text x="495.35825892857144" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan>
                        </text>

                        <text x="356.79129464285717" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="218.22433035714286" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2017</tspan></text><text x="79.65736607142857" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                            <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2018</tspan>
                        </text>

                        <rect x="53.67606026785714" y="25" width="24.481305803571427" height="236" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="81.15736607142857" y="48.60000000000002" width="24.481305803571427" height="212.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="122.95954241071428" y="84" width="24.481305803571427" height="177" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="150.4408482142857" y="107.6" width="24.481305803571427" height="153.4" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="192.24302455357142" y="143" width="24.481305803571427" height="118" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="219.72433035714283" y="166.60000000000002" width="24.481305803571427" height="94.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="261.52650669642856" y="84" width="24.481305803571427" height="177" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="289.0078125" y="107.6" width="24.481305803571427" height="153.4" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="330.8099888392857" y="143" width="24.481305803571427" height="118" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="358.29129464285717" y="166.60000000000002" width="24.481305803571427" height="94.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="400.09347098214283" y="84" width="24.481305803571427" height="177" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="427.5747767857143" y="107.6" width="24.481305803571427" height="153.4" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="469.376953125" y="25" width="24.481305803571427" height="236" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                        <rect x="496.85825892857144" y="48.60000000000002" width="24.481305803571427" height="212.39999999999998" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></rect>
                    </svg>

                <div class="morris-hover morris-default-style" style="left: 45.6496px; top: 112px; display: none;">
                    <div class="morris-hover-row-label">2017</div>

                    <div class="morris-hover-point" style="color: #00a65a">
                        CPU:
                        100
                    </div><div class="morris-hover-point" style="color: #f56954">
                        DISK:
                        90
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
