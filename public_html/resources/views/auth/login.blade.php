{{-- @php
    $metaTitle = 'Aris Market Update | Washington Real Estate Updates By Aris360';
    $metaDescription = "Stay informed with the latest Washington real estate updates by Aris360.
     Get exclusive market insights and trends to make informed decisions in the dynamic real estate
      landscape.";
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head> --}}
@extends('properties.layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{  getSetFlashData() }}
            </div>
        </div>
        {{-- testing --}}


        {{-- azeem bhai here --}}
        <div class="signIn_Modal signIn_Page mb-3">
            <div class="login-page">
                <a href="{{ route('home') }}" class="Modal_logo"><img
                        src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt=""
                        style="padding-top:10px"></a>
{{--                <h4>Sign In</h4>--}}
                <div class="social_login_opt">
                    <a href="{{ route('login.google') }}" class="google_btn">Continue with <img
                            src="public/assets/images/google.png"></a>
                    {{-- <a href="{{ route('facebook') }}" class="facbook_btn">Continue with <img
                            src="public/assets/images/facebook.png"></a> --}}
                    <!--<a href="javascript:(0)" class="apple_btn">Continue with Apple <img src="public/assets/images/apple-logo.png"></a>-->
                </div>
                <div class="inner-box default-form">

                    <form method="POST" action="{{ route('login') }}" id="loginForm">
                        @csrf
                        <input type="hidden" name="" value="">
                        <div class="row clearfix">
                            <div class="col-12">
                                <div class="field-input">
                                    <label>Email Address</label>
                                    <input type="email" id="email" name="email" placeholder="Enter Email Address"
                                           id="emailForm" class="form-control @error('email') is-invalid @enderror">
                                    <input type="hidden" name="currenturl" value="">
                                </div>
                            <!-- @error('email')
                                <span class="invalid-feedbackx" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                        @enderror -->

                                @error('email')
                                <span class="red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="field-input">
                                    <label>Password</label>
                                    <div class="input-group-text input_eye_icon"><i class="fas fa-eye-slash"
                                                                                    id="regeye"></i></div>
                                    <input type="password" id="regpassword" name="password"
                                           placeholder="Enter your password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           autocomplete="current-password">
                                    <small class="frgt-pswd">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="frgt-pswd-txt">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </small>
                                </div>
                            <!-- @error('password')
                                <span class="invalid-feedbackx" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                       @enderror -->

                                @error('password')
                                <span class="red">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label p-0" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <div class="btn-box-login">
                                    <button type="submit" class="theme-btn btn-one">Sign In
                                    </button>
                                </div>
                            </div>

                            <br>
                            <div class="col-12 mt-3">
                                <p class="para">By Signing in you agree to ARIS360 <a
                                        href="{{'terms-of-use'}}">Terms</a> and <a href="{{'homes-privacy-notice'}}">Privacy</a>
                                </p>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="signIn_Modal signIn_Page mt-0">
            <div class="login-page">
                <h4 class="signupHeading">Create my ARIS360 Account</h4>
                <p class="para mb-1">
                    Join us for exciting listings and expert advice. We're here to make your real estate dream a reality.
                </p>
                <div class="btn-box-login signUpBtnBox">
                    {{--                                    <small>Need an account? <a href="{{ url('/user/register') }}" class="signUp_popup_btn">Join ARIS360</a></small>--}}
                    <a href="{{ url('/user/register') }}" type="submit" class="theme-btn btn-one  google-signup">Sign Up Now
                    </a>
                </div>
            </div>
        </div>
        {{-- azeem bhai here --}}
        {{-- <div class="row justify-content-center">
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
        </div> --}}

    </div>
@endsection
