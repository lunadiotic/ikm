@extends('auth.layouts.app')

@section('content')
<section id="wrapper">
    <div class="login-register" style="background-image:url({{ asset('assets/images/background/login-register.jpg') }});">
        <div class="login-box card">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form class="form-horizontal" id="loginform" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <h3 class="box-title m-b-20">Reset Password</h3>
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' form-control-danger' : '' }}"
                            placeholder="E-Mail"> @if ($errors->has('email'))
                        <div class="form-control-feedback">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' form-control-danger' : '' }}"
                            placeholder="Password"> @if ($errors->has('password'))
                        <div class="form-control-feedback">
                            {{ $errors->first('password') }}
                        </div>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }}">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' form-control-danger' : '' }}"
                            placeholder="Confirm Password"> @if ($errors->has('password_confirmation'))
                        <div class="form-control-feedback">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                        @endif
                    </div>

                    
                    <div class="form-group text-center">
                        <div class="col-xs-12 p-b-20">
                            <button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">Reset Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
