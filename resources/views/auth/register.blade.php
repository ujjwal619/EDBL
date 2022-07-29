@extends('layouts.auth-master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="d-flex justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                    <form method="post" action="{{ route('register.perform') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <img class="mb-4" src="{!! url('images/bootstrap-logo.png') !!}" alt="" width="100" height="100">
                        <h1 class="h3 mb-3 fw-normal">Register</h1>


                        <div class="form-group form-floating mb-3">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="name@example.com" required="required" autofocus>
                            <label for="floatingEmail">Email address</label>
                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                                placeholder="Username" required="required" autofocus>
                            <label for="floatingName">Username</label>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="Password" required="required">
                            <label for="floatingPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" placeholder="Confirm Password"
                                required="required">
                            <label for="floatingConfirmPassword">Confirm Password</label>
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                        <div>
                            <button class="w-20 btn btn-lg btn-primary" type="submit">Save</button>
                            <a href="{{ route('login.perform') }}" class="btn btn-lg btn-primary">Login</a>
                        </div>
                </div>
            </div>
            @include('auth.partials.copy')
            </form>
        @endsection
