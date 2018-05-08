@extends('auth.layouts.app')

@section('content')
<section id="wrapper">
    <div class="login-register" style="background-image:url({{ asset('assets/images/background/login-register.jpg') }});">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal" id="loginform" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}" placeholder="Username / E-Mail">
                        @if ($errors->has('email'))
                            <div class="form-control-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' form-control-danger' : '' }}" placeholder="Password">
                        @if ($errors->has('password'))
                            <div class="form-control-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-info pull-left p-t-0">
                                <input id="checkbox-signup" type="checkbox" name="remember" class="filled-in chk-col-light-blue" {{ old( 'remember') ? 'checked' : '' }}>
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-dark pull-right">
                                <i class="fa fa-lock m-r-5"></i> Forgot pwd?
                            </a>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Don't have an account? <a href="{{ route('register') }}" class="text-info m-l-5"><b>Sign Up</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
