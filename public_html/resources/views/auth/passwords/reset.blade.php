@extends('properties.layouts.main')

@section('content')
<div class="container">

{{-- azeem bhai here --}}
<div class="signIn_Modal signIn_Page">
    <div class="login-page">
        <a href="{{ url('/') }}" class="Modal_logo">
            <img src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt="" style="padding-top:10px">
        </a>
        <h4>Renew Password</h4>
        <div class="inner-box default-form">

            <form method="POST" action="{{ route('password.update') }}" id="submitForm2">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="field-input">
                            <label>{{ __('Email Address') }}</label>
                            <input type="email" name="email" placeholder="Enter Email Address" id="emailForm" class="form-control @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
                        </div>
                        @error('email')
                        <span class="invalid-feedbackx" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="field-input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your Password" id="emailForm" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                                <input type="hidden" name="currenturl" value="">
                        </div>
                        @error('password')
                                    <span class="invalid-feedbackx" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="col-12">
                        <div class="field-input from-group">
                            <label>{{ __('Confirm Password') }}</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password-confirm">
                        </div>
                        @error('email')
                            <span class="invalid-feedbackx" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <div class="btn-box-login">
                           <div class="form-group">
                                <button type="submit" class="theme-btn btn-one">
                                    {{ __('Reset Password') }}
                                </button>
                           </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- azeem bhai here --}}


    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
