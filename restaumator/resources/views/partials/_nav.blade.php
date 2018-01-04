<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ route('productpage') }}#page-top">Restaumator</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto padding-top-half">

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('productpage') }}#service">Service</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('productpage') }}#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('productpage') }}#contact">Contact</a>
                </li>

                @if(Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endif

                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        {{ Form::open(array('url' => '/logout', 'method' => 'post')) }}
                        <button class="btn glyphicon-log-out" type="submit">Logout</button>
                        {{ Form::close() }}
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>