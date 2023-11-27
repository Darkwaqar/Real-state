@extends('properties.layouts.main')
@section('content')
<div class="container">
{{-- Azeem Changes --}}
<div class="signIn_Modal signIn_Page">
    <div class="login-page">
        <a href="{{ url('/') }}" class="Modal_logo">
            <img src="{{ asset('public/assets/images/Aris-Logonew1.png') }}" alt="" style="padding-top:10px">
        </a>
        <div class="inner-box default-form mt-3">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }},
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- Azeem Changes --}}


</div>
@endsection
