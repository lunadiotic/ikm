@extends('auth.layouts.app')

@section('content')
<section id="wrapper">
    <div class="login-register" style="background-image:url({{ asset('assets/images/background/login-register.jpg') }});">
        <div class="login-box card">
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h3 class="box-title m-b-20">Sign Up</h3>
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control{{ $errors->has('name') ? ' form-control-danger' : '' }}" placeholder="Full Name">
                        @if ($errors->has('name'))
                            <div class="form-control-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                        <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control{{ $errors->has('username') ? ' form-control-danger' : '' }}" placeholder="Username">
                        @if ($errors->has('username'))
                            <div class="form-control-feedback">
                                {{ $errors->first('username') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}" placeholder="E-Mail">
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
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' form-control-danger' : '' }}" placeholder="ReType Password">
                        @if ($errors->has('password_confirmation'))
                            <div class="form-control-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group text-center p-b-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Already have an account? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Sign In</b></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
