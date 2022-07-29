@extends('layouts.auth-master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="d-flex justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="form-group form-floating mb-3 ">
                        <form method="post" a href="{{ route('customers.index') }}">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <img class="img-logo" src="{!! url('images/bootstrap-logo.png') !!}" alt="" width="100" height="100">

                            <h1 class="h2 mb-3 fw-normal">Login</h1>
                            @include('layouts.partials.messages')

                            <div class="form-group form-floating mb-3">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                                    placeholder="Username" required="required" autofocus>
                                <label for="floatingName">Email or Username</label>
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
                            <div>
                            <button class="btn btn-lg btn-primary ml-3" type="submit">Ok</button>
                            <a href="{{ route('register.perform') }}" class="btn btn-lg btn-primary ml-3">Sign-up</a>
                            </div>
                            @include('auth.partials.copy')
                        </div>
                </div>
                    </form>                   
                </div>
            </div>
        </div>
    </div>
@endsection
