@extends('auth')
@section('title', 'login')
<div class="container-fluid">
    <div class="login-box">
    @include('pages.alert')
        <div>
            <a href="#" class="login-logo">
                <b>TECH</b>ADEMIA
            </a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
                <form action="#" method="post">
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group has-feedback">
                        <input class="form-control" placeholder="Email" name="email">
                        <span class="fa fa-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <span class="fa fa-unlock-alt form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">
                            Sign In
                        </button>
                    </div>
                </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="{{ url('/auth/login/facebook') }}" class="btn btn-block btn-facebook">
                    <i class="fa fa-facebook"></i>
                        Sign in with Facebook
                </a>
                <a href="{{ url('/auth/login/twitter') }}" class="btn btn-block btn-twitter">
                    <i class="fa fa-twitter"></i>
                        Sign in with Twitter
                </a>
                <a href="{{ URL::to('/auth/login/github') }}" class="btn btn-block btn-github">
                    <i class="fa fa-github-alt"></i>
                        Sign in with Github
                </a>
            </div>
            <small>
                <a href="{{ route('getRegister') }}" class="text-center">Register a new membership</a>
            </small>
        </div>
    </div>
</div>
