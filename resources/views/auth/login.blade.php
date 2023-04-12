@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- Sign in form START -->
    <div class="card card-body p-4 p-sm-5 mt-sm-n5 mb-n5">
        <!-- Title -->
        <h2 class="h1 mb-2">Sign in</h2>
        <p>Don't have an account?<a href="/register"> Click here to sign up</a></p>
        <!-- Form START -->
        <form class="mt-4" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <div class="mb-3 position-relative input-group-lg">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- password -->
            <div class="mb-3">
                <!-- Input group -->
                <div class="input-group input-group-lg">
                    <input class="form-control fakepassword @error('password') is-invalid @enderror" type="password"
                        id="psw-input" placeholder="Enter your password" name="password" required
                        autocomplete="current-password">
                    <span class="input-group-text p-0">
                        <i class="fakepasswordicon fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                    </span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <!-- Remember me -->
            <div class="mb-3 d-sm-flex justify-content-between">
                <div>
                    <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="rememberCheck">Remember me?</label>
                </div>
                <a href="forgot-password.html">Forgot password?</a>
            </div>
            <!-- Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-lg btn-primary-soft">Login</button>
            </div>
            <!-- Copyright -->
            <p class="mb-0 mt-3 text-center">©2023 <a target="_blank" href="https://www.userrounakk.com/">GDSC Social.</a>
                All
                rights reserved</p>
        </form>
        <!-- Form END -->
    </div>
    <!-- Sign in form START -->
@endsection
