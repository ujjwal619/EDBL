@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="img-logo" src="{!! url('images/bootstrap-logo.png')!!}" alt="" width="200" height="200">
        
        <h1 class="h2 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')
        <div class="d-flex justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif    
</div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </div>
        </div>
        @include('auth.partials.copy')
    </form>
@endsection