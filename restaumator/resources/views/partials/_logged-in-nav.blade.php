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
                        <a class="nav-link js-scroll-trigger {{ Route::current()->getName() == 'statistics' ? "active" : " " }}" href="{{ route('statistics') }}">Statistics</a>
{{--                        {{ dump( Route::current()->getName()) }}--}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger {{ Route::current()->getName() == 'dashboard' ? "active" : " " }}" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        {{ Form::open(array('url' => '/logout', 'method' => 'post','class' => 'margin-bottom-minus-1')) }}
                        <button class="btn glyphicon-log-out" type="submit">Logout</button>
                        {{ Form::close() }}
                    </li>

                </ul>
            </div>

        </div>
    </nav>
</div>