@extends('layouts.app')

@section('content')
    <!-- Sign up form START -->
    <div class="card card-body p-4 p-sm-5 mt-sm-n5 mb-n5">
        <div class="text-center">
            <!-- Title -->
            <h2 class="h1 mb-2">Sign up</h2>
            <span class="d-block">Already have an account? <a href="/login">Sign in
                    here</a></span>
        </div>
        <!-- Form START -->
        <form method="POST" action="{{ route('register') }}" class="mt-4">
            @csrf
            <!-- Email -->
            <div class="mb-3 input-group-lg">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your Name"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3 input-group-lg">
                <input type="email" class="form-control" placeholder="Enter email @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                <small>We'll never share your email with anyone else.</small>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- New password -->
            <div class="mb-3 position-relative">
                <!-- Input group -->
                <div class="input-group input-group-lg">
                    <input class="form-control fakepassword  @error('password') is-invalid @enderror" type="password"
                        id="psw-input" placeholder="Enter new password" required autocomplete="new-password"
                        name="password">
                    <span class="input-group-text p-0">
                        <i class=" fa-solid fa-eye-slash cursor-pointer p-2 w-40px"></i>
                    </span>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <!-- Pswmeter -->
                <div id="pswmeter" class="mt-2"></div>
                <div class="d-flex mt-1">
                    <div id="pswmeter-message" class="rounded"></div>
                    <!-- Password message notification -->
                    <div class="ms-auto">
                        <i class="bi bi-info-circle ps-1" data-bs-container="body" data-bs-toggle="popover"
                            data-bs-placement="top"
                            data-bs-content="Include at least one uppercase, one lowercase, one special character, one number and 8 characters long."
                            data-bs-original-title="" title=""></i>
                    </div>
                </div>
            </div>
            <!-- Confirm password -->
            <div class="mb-3 input-group-lg">
                <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation"
                    required autocomplete="new-password">
            </div>
            <!-- Button -->
            <div class="d-grid"><button type="submit" class="btn btn-lg btn-primary">Sign me
                    up</button></div>
            <!-- Copyright -->
            <p class="mb-0 mt-3 text-center">©2023 <a target="_blank" href="https://www.userrounakk.com/">GDSC Social.</a>
                All
                rights reserved</p>
        </form>
        <!-- Form END -->
    </div>
    <!-- Sign up form START -->
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
