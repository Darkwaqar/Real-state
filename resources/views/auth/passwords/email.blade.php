@extends('properties.layouts.main')

@section('content')
<div class="container">


{{-- azeem bhai here --}}
<div class="signIn_Modal signIn_Page">
    <div class="row">
        <div class="col-12">
            @if (session('status') && session('status') == 'Password cannot be changed. Because this email was used for social login.')
                <div class="alert alert-warning" style="border-radius: 1rem; !important; background-color: #de1e25 !important; border-color: #de1e25 !important; color:#ffffff" role="alert">
                    {{ session('status') }}
                </div>
            @elseif(session('status'))
                <div class="alert alert-success" style="border-radius: 1rem; !important;" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="login-page">
        <a href="{{ url('/') }}" class="Modal_logo">
            <img src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt="" style="padding-top:10px"></a>
        <h4>Reset Password</h4>
        <div class="inner-box default-form">
            <form method="POST" action="{{ route('password.email') }}" id="submitForm2">
                @csrf
                <div class="row clearfix">
                    <div class="col-12 form-group">
                        <div class="field-input">
                            <label>Email Address</label>
                            <input type="email" placeholder="Enter Email Address" id="emailForm" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="col-12">
                        <div  class="form-group">
                            <button type="submit" class="theme-btn btn-one">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



{{-- Azeem Changes --}}

    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
