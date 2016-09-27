@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron center-block">
            <h2 class="text-primary">Log in with your account</h2>
            <form role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control"
                           name="email" value="{{ old('email') }}"
                           placeholder="Email address"
                           required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password"
                           class="form-control" name="password"
                           placeholder="Password"
                           required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary col-sm-12">
                        Login
                    </button>
                </div>
                <div class="form-group">
                    <span class="help-block text-right"><a class="btn btn-link"
                                                           href="{{ url('/password/reset') }}">Forgot
                        Your Password?</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection
