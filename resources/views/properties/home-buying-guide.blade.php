@php
    $metaTitle = 'Home Buying Guide | First Time Home Buying Guide';
    $metaDescription = "Navigate the home buying process confidently with our comprehensive Home Buying Guide. Whether you're a first-time buyer or not, our guide offers valuable insights and tips to help you make informed decisions along the way.";
@endphp
@extends('properties.layouts.main')
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@section('content')



    <section class="home-guide-section1 styled_section">

        @if (isset($page[0]['content']))
            <div class="container">

                <div class="home-guide-bannerSec">

                    <div class="resource-center-titleSec">

                        <p class="title">
                            {{-- ARIS360  will lead you the way home --}}
                            {!! $page[0]['content'] !!}
                        </p>

                        <p class="para">
                            {{-- A policy and guide for all buyers on ARIS360 <br>Ensure a smooth and reliable journey to your home --}}
                            {!! $page[1]['content'] !!}
                        </p>

                    </div>

                    <!--<div class="home-guide-bannerSec-img">-->

                    <!--    <img src="public/assets/images/home-guide-bannerImg.png" class="img-fluid">-->

                    <!--</div>-->

                </div>

            </div>
        @endif

    </section>



    <section class="home-ownersec2 pd-btm styled_section">

        <div class="container">

            <!--<div class="banner-boxwrap">-->

            <!--    <div class="banner-headwrap">-->

            <!--        <p class="gen-heading">You’ve done it once <br> Let us help you do it again.</p>-->

            <!--    </div>-->

            <!--    <div class="banner-textwrapper">-->

            <!--        <p class="gen-text">As a current homeowner, there are a lot of things you need to know when it comes to your current house and the loan that goes with it. Have no fear. We’re here to help you navigate the unknown.</p>-->

            <!--    </div>-->

            <!--</div>-->

            <div class="ownersec2-bannercard">

                @if (isset($page[0]['content']))
                    <ul class="nav tabs-homebuyingguide nav-pills mb-3" id="pills-tab" role="tablist">

                        <li class="nav-item">

                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">

                                <div class="bannercardwrap">

                                    <div class="banner-imagewrap">

                                        <img data-src="public/assets/images/lets-begin.png"
                                            class="img-fluid ownerimg mb-4 lazy" alt="">

                                    </div>

                                    <div class="ownercardtext">

                                        <p class="gen-text">
                                            {{-- Let's Begin --}}
                                            {!! $page[2]['content'] !!}
                                        </p>

                                    </div>


                                </div>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">

                                <div class="bannercardwrap">

                                    <div class="banner-imagewrap">

                                        <img data-src="public/assets/images/select-a-property.png"
                                            class="img-fluid ownerimg mb-4 lazy" alt="">

                                    </div>

                                    <div class="ownercardtext">

                                        <p class="gen-text">
                                            {{-- Select a Property --}}
                                            {!! $page[3]['content'] !!}
                                        </p>

                                    </div>

                                </div>



                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                role="tab" aria-controls="pills-contact" aria-selected="false">

                                <div class="bannercardwrap">

                                    <div class="banner-imagewrap">

                                        <img data-src="public/assets/images/contact-an-agent.png"
                                            class="img-fluid ownerimg mb-4 lazy" alt="">

                                    </div>

                                    <div class="ownercardtext">

                                        <p class="gen-text">
                                            {{-- Contact an Agent --}}
                                            {!! $page[4]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" id="pills-contact-tab-two" data-toggle="pill" href="#pills-contact-two"
                                role="tab" aria-controls="pills-contact-two" aria-selected="false">

                                <div class="bannercardwrap">

                                    <div class="banner-imagewrap">

                                        <img data-src="public/assets/images/get-your-property.png"
                                            class="img-fluid ownerimg mb-4 lazy" alt="">

                                    </div>

                                    <div class="ownercardtext">

                                        <p class="gen-text">
                                            {{-- Get Your Property --}}
                                            {!! $page[5]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                            </a>

                        </li>

                    </ul>
                @endif

            </div>

        </div>

    </section>



    <section class="home-ownersec3 pdb-40 styled_section">

        <div class="container">

            @if (isset($page[0]['content']))
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="row align-items-center">

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerleftwrap">

                                    <div class="banner-headwrap">

                                        <p class="gen-heading">
                                            {{-- Let's Begin --}}
                                            {!! $page[6]['content'] !!}
                                        </p>

                                    </div>

                                    <div class="ownersec3-text">

                                        <p class="gen-text mb-4">
                                            {{-- The perfect starting point for anyone looking to purchase a property. Get introduced to key steps and tips you need to know before you start your home search, how to determine your budget, how to choose the right neighborhood and how to select a real estate agent. Whether you're a first-time buyer or an experienced homeowner, ARIS360  will provide valuable information and guidance to help you make informed decisions throughout the home buying process. So let's take the first step towards finding your dream home with ARIS360 . --}}
                                            {!! $page[7]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                                <!--<div class="btn-box">-->

                                <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                                <!--</div>-->

                            </div>

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerrightwrap">

                                    <img data-src="public/assets/images/lets-begin.png"
                                        class="img-fluid ownsersce3right mb-4 lazy" alt="">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        <div class="row align-items-center">

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerrightwrap">

                                    <img data-src="public/assets/images/select-a-property.png"
                                        class="img-fluid ownsersce3right mb-4 lazy" alt="">

                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerleftwrap">

                                    <div class="banner-headwrap">

                                        <p class="gen-heading">
                                            {{-- Select a Property --}}
                                            {!! $page[8]['content'] !!}
                                        </p>

                                    </div>

                                    <div class="ownersec3-text">

                                        <p class="gen-text mb-4">
                                            {{-- Choosing the right property for your needs! Cover everything from identifying your must-haves and deal-breakers, to researching the local market and assessing the value of a property. Experienced real estate professionals put together a comprehensive guide to help you make informed decisions when selecting a property, conducting a home inspection, negotiating with the seller and closing the deal. Whether you're looking for a family home, an investment property, or a vacation home, let's dive in exploring the exciting world of real estate with ARIS360 . --}}
                                            {!! $page[9]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                                <!--<div class="btn-box">-->

                                <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                                <!--</div>-->

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                        <div class="row align-items-center">

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerleftwrap">

                                    <div class="banner-headwrap">

                                        <p class="gen-heading">
                                            {{-- Contact an Agent --}}
                                            {!! $page[10]['content'] !!}
                                        </p>

                                    </div>

                                    <div class="ownersec3-text">

                                        <p class="gen-text mb-4">
                                            {{-- Connect with a trusted real estate agent who can guide you through the home buying process. A network of experienced agents is available to assist you with everything from identifying the right properties to negotiating the best possible deal. With ARIS360 , you can be confident that you'll have valuable insights throughout your journey to your dream home. So don't hesitate, contact an agent today and take the first step towards a successful home buying experience with ARIS360 . --}}
                                            {!! $page[11]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                                <!--<div class="btn-box">-->

                                <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                                <!--</div>-->

                            </div>

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerrightwrap">

                                    <img data-src="public/assets/images/contact-an-agent.png"
                                        class="img-fluid ownsersce3right mb-4 lazy" alt="">

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-contact-two" role="tabpanel"
                        aria-labelledby="pills-contact-tab-two">

                        <div class="row align-items-center">

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerrightwrap">

                                    <img data-src="public/assets/images/get-your-property.png"
                                        class="img-fluid ownsersce3right mb-4 lazy" alt="">

                                </div>

                            </div>

                            <div class="col-12 col-md-6 col-lg-6">

                                <div class="home-ownerleftwrap">

                                    <div class="banner-headwrap">

                                        <p class="gen-heading">
                                            {{-- Get Your Property --}}
                                            {!! $page[12]['content'] !!}
                                        </p>

                                    </div>

                                    <div class="ownersec3-text">

                                        <p class="gen-text mb-4">
                                            {{-- Celebrate the final stages of buying a new home. From making an offer and negotiating the terms of the sale, to arranging financing and completing the closing process, ARIS360  will be with you every step of the way. We'll provide tips on how to ensure a smooth transaction, how to work with your lender, and how to prepare for the big day when you finally get the keys to your new property. So let's get started to get your dream property with ARIS360 . --}}
                                            {!! $page[13]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                                <!--<div class="btn-box">-->

                                <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->

                                <!--</div>-->

                            </div>

                        </div>

                    </div>

                </div>
            @endif
        </div>

    </section>



    <section class="home-guide-tab-section styled_section">

        <div class="container">

            {{-- <div class="home-guide-tab-content"> DO NOT REMOVE THIS --}}
                
            <div class="">

                <p class="title text-center">Blogs</p>

                <div class="home-guide-tab1-wrapper">

                    <div class="row mt-5">



                        @if (isset($homebuyingguide) && count($homebuyingguide) > 0)
                            @foreach ($homebuyingguide as $myhbguide)
                                <div class="col-lg-4 col-md-4 col-12">

                                    <div class="real-estate-agentCard">

                                        <span>

                                            <a href="{{ url('/home-buying-guide') . '/' . $myhbguide['b_slug'] }}">

                                                <img data-src="{{ asset('public/images/blogs/' . $myhbguide['blog_cover']) }}"
                                                    class="img-fluid lazy" alt=" {{ $myhbguide['blog_title'] }}">

                                            </a>

                                        </span>

                                        <span class="agentCard-bottomSect">

                                            <p class="title2">

                                                {{ $myhbguide['blog_title'] }}

                                            </p>

                                            <p class="para">

                                                {{ Str::limit(strip_tags($myhbguide['b_body']), 100) }}

                                            </p>

                                        </span>

                                    </div>

                                </div>
                            @endforeach
                        @else
                            <div class="col text-center">
                                The Data is not available
                            </div>
                        @endif



                    </div>

                </div>

            </div>

        </div>

    </section>



    <div class="revolutionary_banner">

    </div>



    <!-- <div class="aris-new-banner-Sect"></div> -->



    <section class="cta-section bg-color-2 styled_section">



        <div class="pattern-layer"
            style="background-image: url(public/assets/images/shape/shape-2.png); background-size: cover; background-repeat: no-repeat;">
        </div>

        @if (isset($page[0]['content']))
            <div class="auto-container">



                <div class="inner-box clearfix">



                    <div class="text">



                        <h2>
                            {{-- Personalized Home Buying Journey --}}
                            {!! $page[14]['content'] !!}
                        </h2>

                        <h6>
                            {{-- Transforming the Home Buying Journey into a Personalized Process of Settling Down --}}
                            {!! $page[15]['content'] !!}
                        </h6>



                    </div>



                    <div class="btn-box">



                        <a href="{{ route('first-time-homebuyer') }}" class="theme-btn btn-one">First Time Home Buyer</a>



                    </div>



                </div>



            </div>
        @endif

    </section>


    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                $("#exampleModalsubmit").modal('show');
            });
        </script>
        <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="form_submitting_content">
                            <span class="check_icon"><i class="fas fa-check-circle"></i></span>
                            <h3>Thank You!</h3>
                            <p>{{ Session::get('success') }}.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif


    {{-- <div class="container mt-5">

        <div class="buying-Bottom-form">

            <form action="{{ route('suggestion') }}" id="sugestionForm" method="POST" enctype="">

                @csrf




                @if (isset(Auth::user()->id))
                    <p class="title text-center">Any Suggestions on Home Buying?</p>

                    <p class="para text-center">Share with us</p>

                    <div class="buying-form-field mt-4">

                        <label>Name</label>

                        <input type="text" id="name" readonly value="{{ Auth::user()->first_name }}"
                            name="name" placeholder="name" required>

                    </div>

                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <div class="buying-form-field">

                        <label>Email</label>

                        <input type="email" id="email" readonly value="{{ Auth::user()->email }}" name="email"
                            placeholder="email" required>

                    </div>

                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <div class="buying-form-field">

                        <label>Contact</label>

                        <input type="text" id="contact" readonly value="{{ Auth::user()->mobile_number }}"
                            name="contact" placeholder="contact" required>

                        <input type="hidden" value="suggestion" name="type" placeholder="type">

                    </div>

                    @error('contact')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <div class="row">

                        <div class="col-12">

                            <div class="field-input">

                            </div>

                            <div class="buying-form-field">

                                <label>city</label>

                                <input type="text" readonly value="{{ Auth::user()->city }}" name="city"
                                    placeholder="contact" required>

                            </div>

                            @error('city')
                                <div class="error">{{ $message }}</div>
                            @enderror

                        </div>

                    </div>

                    <div class="buying-form-field">

                        <label>Your suggestion?</label>

                        <textarea plcaceholder="Your suggestion" id="" value="{{ old('suggestion') }}" name="suggestion" required></textarea>

                        @error('suggestion')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>
                @else
                    <p class="title text-center">Any suggestions on home buying?</p>

                    <p class="para text-center">Share with us!</p>

                    <div class="buying-form-field mt-4">

                        <label>Name <span>*</span></label>

                        <input type="text" value="{{ old('name') }}" name="name" placeholder="name" required>

                    </div>

                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <div class="buying-form-field">

                        <label>Email <span>*</span></label>

                        <input type="email" id="email" value="{{ old('email') }}" name="email"
                            placeholder="email" required>

                    </div>

                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <div class="buying-form-field">

                        <label>Contact <span>*</span></label>

                        <input type="text" value="{{ old('contact') }}" name="contact" placeholder="contact"
                            required>

                        <input type="hidden" value="suggestion" name="type" placeholder="type">

                    </div>

                    @error('contact')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <div class="buying-form-field">

                        <label>City <span>*</span></label>

                        <input type="text" value="{{ old('city') }}" id="agentSearch" onkeyup="codeAddress()"
                            required placeholder="city" required>

                        <input type="hidden" name="city" id="locality">

                        <input type="hidden" value="suggestion" name="type" placeholder="type">

                    </div>

                    <div class="buying-form-field">

                        <label>Your suggestion?<span>*</span></label>

                        <textarea plcaceholder="Your suggestion" id="" value="{{ old('suggestion') }}" name="suggestion" required></textarea>

                        @error('suggestion')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>
                @endif



                <div class="btn-box">

                    <input type="submit" class="theme-btn btn-one" placeholder="Submit">

                   

                </div>

            </form>

        </div>



    </div> --}}



    </section>



    {{-- <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script> --}}



    {{-- <script>
        function initialize() {

            initAutocomplete();

        }





        var autocomplete;



        function initAutocomplete() {

            autocomplete = new google.maps.places.Autocomplete(

                (document.getElementById('agentSearch')), {

                    types: ['geocode']

                });





        }





        function codeAddress() {





            var geocoder, map, address;



            var address = $('#agentSearch').val();





            var componentForm = {

                locality: 'long_name',

            };



            geocoder = new google.maps.Geocoder();

            geocoder.geocode({

                'address': address

            }, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {





                    for (var component in componentForm) {

                        document.getElementById(component).value = '';

                        document.getElementById(component).disabled = false;

                    }





                    for (var i = 0; i < results[0].address_components.length; i++) {

                        var addressType = results[0].address_components[i].types[0];

                        if (componentForm[addressType]) {

                            var val = results[0].address_components[i][componentForm[addressType]];

                            document.getElementById(addressType).value = val;

                        }

                    }





                }

            });

        }
    </script> --}}

@endsection
