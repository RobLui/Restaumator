@extends('layouts.app')
@include('partials._nav')

<div class="container text-center">
    <div class="margin-top-6 text-center"></div>
        <div class="row text-center">
            <div class="col-md-12 text-center">
            <div class="panel panel-default text-center">
                <div class="panel-heading text-center"><h2 class="margin-bottom-3">Login</h2></div>

                <div class="panel-body text-center">
                    <form class="col-md-12 text-center" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                            <div class="form-group text-center {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6 col-md-offset-3 margin-center">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6 col-md-offset-3 margin-center">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 margin-center">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4 margin-center">
                                <button type="submit" class="btn btn-primary loginbutton">
                                    Login
                                </button>

                                <a class="btn btn-link passwordreset" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
