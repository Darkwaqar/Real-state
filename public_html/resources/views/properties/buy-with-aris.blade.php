@php
    $metaTitle = 'Buy Properties In Washington | Buy Washington Properties With Aris360';
    $metaDescription = 'Find and buy properties in Washington with Aris360. Explore our diverse
     selection of Washington properties for sale and make your dream of owning a home in Washington
      a reality.';
@endphp

<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')
    @if (Session::has('success'))
        <script>
            $(document).ready(function() {
                $("#exampleModalsubmit").modal('show');
            });
        </script>
        <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
    <section class="buy-with-aris-sect1 buy-wit-ars-sec1 styled_section">
        <div class="auto-container">
            @if (isset($page[0]['content']))
                <div class="row">
                    <div class='col-12'>
                        <div class="about-homeloan-content buy-aris-sec">
                            <!--<p class="title">The Right Home <br> For The Right Price</p>-->
                            <p class="title text-tran gen-heading">
                                {{-- Unlock Your Dream Home with ARIS360  --}}
                                {!! $page[0]['content'] !!}
                            </p>
                        </div>
                    </div>
                    @if (isset($page[0]['content']))
                        <div class="col-12 mt-5">
                            <p class="para col-redd text-center">
                                {{-- ARIS360 's Innovative Real Estate Solutions<br>Revolutionizing the Path to Your Dream Home  --}}
                                {!! $page[1]['content'] !!}
                            </p>
                        </div>
                    @endif
                    <!--<div class="col-lg-6 col-md-6 col-12">-->

                    <!--    <div class="about-bannerImg">-->

                    <!--        <img src="public/assets/images/buy-with-aris-Banner.png" class="img-fluid">-->

                    <!--    </div>-->

                    <!--</div>-->

                </div>
            @endif
        </div>
    </section>
    {{-- <section class="buy-with-aris-sub  pb-5">
        <div class="auto-container">
            @if (isset($page[0]['content']))
                <div class="row">
                    <div class="col-12">
                        <p class="para col-redd">
                            {{-- ARIS360 's Innovative Real Estate Solutions<br>Revolutionizing the Path to Your Dream Home  --}}
    {{-- {!! $page[1]['content'] !!} --}}
    {{-- </p>
                    </div>
                </div>
            @endif
        </div>
    </section> --}}
    <section class="request-free-consultaion styled_section">

        <div class="container">
            @if (isset($page[0]['content']))
                <div class='row'>


                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="about-homeloan-content">

                            <p class="title">
                                {{-- Get in Touch with ARIS360  Pro! --}}
                                {!! $page[9]['content'] !!}
                            </p>

                            <p class="para">
                                {{-- Directly Consult with ARIS360  to reach Your Dream House --}}
                                {!! $page[10]['content'] !!}
                            </p>

                            <p class="para">
                                {{-- You have the opportunity to contact an ARIS360  authorized agent for an exclusive advice to aquire the most suitable property according to your preferences and lifestyle. --}}
                                {!! $page[11]['content'] !!}
                            </p>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-12">

                        <form class="free-consultation-form" method="POST" action="{{ route('store_property_lead') }}"
                            id="buywitharisform">

                            @csrf

                            <p class="para">Searching For Homes?</p>


                            <input id="buySearch2" type="text" onfocusout="codeAddressThree()"
                                onkeyup="codeAddressThree()" name="address"
                                placeholder="Enter an address, neighborhood, city, or ZIP code" required>

                            <input type="hidden" name="city" id="locality">

                            <input type="hidden" name="state" id="administrative_area_level_1">

                            <input type="text" placeholder="Enter your name" name="name" required>

                            <input type="email" placeholder="your email address *" name="email" required>

                            <input type="text" placeholder="phone number" name="contact" required>

                            <textarea placeholder="your message" name="message" required></textarea>

                            <input type="hidden" name="property_type" value="NULL" />

                            <input type="hidden" name="lead_type" value="Buyer" />

                            <div class="btn-box mt-4 text-center">
                                @if (auth()->check())
                                <button type="submit" class="theme-btn btn-one">SEND MESSAGE NOW </button>
                                @else
                                <a href="{{url('/login')}}" class="theme-btn btn-one"> SEND MESSAGE NOW </a>
                                @endif
                            </div>

                        </form>

                    </div>

                </div>
            @endif

        </div>


    </section>


    <section class="agent-resource-center-sec3 renowed-sec1 styled_section">



        <div class="container">

            <div class="resource-center-titleSec renowed-sec mb-5">
                @if (isset($page[0]['content']))
                    <div class="row">
                        <div class="col-md-12">
                            {{ getSetFlashData() }}
                        </div>

                    </div>
                @endif
                @if (isset($page[0]['content']))
                    <p class="title">
                        {{-- Renowned Services for Buyers --}}
                        {!! $page[2]['content'] !!}
                    </p>
                @endif
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">

                    <div class="whysec1-rightwrap">

                        <div class="whysec1-rightimage">

                            <img class="image-fluid lazy" src="public/assets/images/happy-family.jpg"
                                style="display: inline-block;">

                        </div>

                        <img class="img-fluid redtwo lazy" src="public/assets/images/reddottwo.png" style="display: block;">

                        <img class="image-fluid dottwo lazy" src="public/assets/images/dottwo.png" style="display: block;">

                    </div>

                </div>
                @if (isset($page[0]['content']))
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="our_mission_rightSec buy_with_aris_section_three_cards">



                            <div class="row ">

                                <div class="col-lg-6 col-md-6 col-12 ">

                                    <div class="our_mission_box our_mission_box_01">

                                        <p class="title2">

                                            {{-- Speedy home search,<br>instant home tours --}}
                                            {!! $page[3]['content'] !!}
                                        </p>

                                        <p class="para">

                                            {{-- Instantly experience digital tours of properties you're interested in. --}}
                                            {!! $page[4]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-12 center_card">

                                    <div class="our_mission_box our_mission_box_02">

                                        <p class="title2">

                                            {{-- An authorized agent<br>as your advisor --}}
                                            {!! $page[5]['content'] !!}
                                        </p>

                                        <p class="para">

                                            {{-- You have an experienced and reliable guide to help you at every step. --}}
                                            {!! $page[6]['content'] !!}
                                        </p>

                                    </div>

                                </div>


                                <div class="col-lg-6 col-md-6 col-12">

                                    <div class="our_mission_box our_mission_box_03">

                                        <p class="title2">

                                            {{-- Save as<br>investment  --}}
                                            {!! $page[7]['content'] !!}
                                        </p>

                                        <p class="para">

                                            {{-- Multiply your savings by making smart investments. --}}
                                            {!! $page[8]['content'] !!}
                                        </p>

                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                @endif
            </div>
        </div>
    </section>





    <section class="sell-home-sect1 styled_section">
        @if (isset($page[0]['content']))
            <div class="container">
                <div class="sell-home-bannerSec">
                    <h1>
                        Ready For Purchasing Your First Home Now?

                    </h1>
                    <p>
                        Search for homes in your preferred area.
                    </p>
                    <div class="my-2">
                        <form action="{{ route('sellaris-homeworth') }}" method="GET" class="agent-search-field">
                            <input type="text" placeholder="Enter an address, neighborhood, city, or ZIP code"
                                id="sellSearch" class="pac-target-input" name="address" autocomplete="off">
                            <button type="submit" class="search-icon fas fa-search"></button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </section>


    <section class="our_mission_sect grow-sec-1 styled_section">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-12">

                    <div class="whysec1-rightwrap">

                        <div class="whysec1-rightimage">

                            <img data-src="public/assets/images/happy-family.jpg" class="image-fluid lazy">

                        </div>

                        <img data-src="public/assets/images/reddottwo.png" class="img-fluid redtwo lazy">

                        <img data-src="public/assets/images/dottwo.png" class="image-fluid dottwo lazy">

                    </div>

                </div>
                @if (isset($page[0]['content']))
                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="our_mission_rightSec">

                            <p class="title mb-4">
                                {{-- Grow with ARIS360  --}}
                                {!! $page[12]['content'] !!}
                            </p>

                            <p class="paragraph">
                                {{-- Develop your asset profile by real estate acquisition and management with the most reliable and lucrative digital platform for a healthy progress. --}}
                                {!! $page[13]['content'] !!}
                            </p>

                            <!--<p class="paragraph">dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>-->

                            <div class="row mt-4">

                                <div class="col-lg-6 col-md-6 col-12 mb-4">

                                    <div class="our_mission_box our_mission_box_01">

                                        <p class="title2">
                                            {{-- Broad Spectrum of Properties --}}
                                            {!! $page[14]['content'] !!}
                                        </p>

                                        <p class="para">
                                            {{-- Discover the Perfect Property to Suit Your Needs --}}
                                            {!! $page[15]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-12 mb-4">

                                    <div class="our_mission_box our_mission_box_02">

                                        <p class="title2">
                                            {{-- Extensive Users --}}
                                            {!! $page[16]['content'] !!}
                                        </p>

                                        <p class="para">
                                            {{-- Join Our Thriving Community of Homeowners and Real Estate Enthusiasts --}}
                                            {!! $page[17]['content'] !!}
                                        </p>

                                    </div>

                                </div>



                            </div>

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-12 mb-4">

                                    <div class="our_mission_box our_mission_box_03">

                                        <p class="title2">
                                            {{-- Diverse Properties --}}
                                            {!! $page[18]['content'] !!}
                                        </p>

                                        <p class="para">
                                            {{-- Experience the Diversity of the Real Estate Market --}}
                                            {!! $page[19]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                                <div class="col-lg-6 col-md-6 col-12 mb-4">

                                    <div class="our_mission_box our_mission_box_04">

                                        <p class="title2">
                                            {{-- Apt Financial Solutions --}}
                                            {!! $page[20]['content'] !!}
                                        </p>

                                        <p class="para">
                                            {{-- Unlock Your Dream Home with ARIS360's Financial Expertise --}}
                                            {!! $page[21]['content'] !!}
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                @endif

            </div>

        </div>

    </section>





    <section class="buyer_for_every_property buyer-sec styled_section">

        @if (isset($page[0]['content']))
            <div class="container">

                <div class="buyer_for_every_property_wrapper">

                    <div class="buyer_for_every_property_content">

                        <h3 class="text-tran">
                            {{-- We have a buyer for every property --}}
                            {!! $page[22]['content'] !!}
                        </h3>

                        <p class="paragraph">
                            {{-- Our Commitment to Effective Real Estate Solutions<br>Matching You WIth a Ready and Relevant Property --}}
                            {!! $page[23]['content'] !!}
                        </p>

                        <div class="btn-box">

                            <a href="{{ url('/all-properties') }}" target="_blank"
                                class="theme-btn btn-one lg google-link" name="google-link">Buy
                                Now</a>

                        </div>

                    </div>

                </div>

            </div>
        @endif

    </section>



    <section class="tour-day-section styled_section">

        <div class="auto-container">
            @if (isset($page[0]['content']))
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-12">

                        <div class="tour-day-content">

                            <p class="title">
                                {{-- Instant Tour  Today --}}
                                {!! $page[24]['content'] !!}
                            </p>

                            <p class="para">
                                {{-- Step into Your Dream Home Today: Seamless and swift property purchases with instant tours. --}}
                                {!! $page[25]['content'] !!}
                            </p>

                            <p class="para">
                                {{-- Utilize our option of viewing properties and submitting a request for an instant visit to inspect and analyze the property you are interested in --}}
                                {!! $page[26]['content'] !!}
                            </p>

                            <div class="btn-box">

                                <a href="{{ url('/all-properties') }}" class="theme-btn btn-one mt-2 lg google-link"
                                    name="google-link">View Listings</a>

                            </div>

                            <div class="app-store-img">

                                <ul>

                                    <li>

                                        <!--<a href="#!"><img src="public/assets/images/app-store-img.png" class="img-fluid"></a>-->

                                    </li>

                                    <li>

                                        <!--<a href="#!"><img src="public/assets/images/google-play-img.png" class="img-fluid"></a>-->

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-12">

                        <figure class="logo log-mobile">

                            <!--<a href="https://demo.wizardinnovations.us/aris-new/home">-->

                            <!--    <img src="https://demo.wizardinnovations.us/aris-new/public/assets/images/aris-home-white-logo.png" alt="" style="padding-top:10px">-->

                            <!--</a>-->

                            <!-- <p class="gen-heading">Coming Soon</p>-->

                        </figure>

                        <div class="mobile-baner">

                            <img data-src="public/assets/images/instant-tour.png" class="img-fluid lazy">



                        </div>

                    </div>

                </div>
            @endif

        </div>

    </section>

    {{-- Other banner --}}

    <section class="buyer_for_every_property2 styled_section">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="buyer_for_every_property_wrapper text-cent">
                    <div class="buyer_for_every_property_content">
                        <h3>
                            Need Help To Determine What Price Range You Can Afford?

                        </h3>
                        <p class="paragraph">
                            Use the calculator to find an estimate of your affordability
                        </p>
                        <div class="btn-box">
                            <a href="{{ route('affordability-calculator') }}" class="theme-btn btn-one lg google-link"
                                name="google-link">Calculate
                                Now</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="first_time_homebuying_searchfield expert-sec-1 styled_section">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="agent-sec1-content-left">
                            <p class="title">
                                In Search Of Expert Guidance?
                            </p>
                            <p class="para">
                                Let an ARIS360 Prime Agent Assist You
                            </p>
                            <div class="row">
                                <div class="col-lg-12 d-flex btn_flex_box">
                                    <a href="{{ route('find-an-agent') }}" type="submit" class="theme-btn btn-one lg"
                                        name="google-link">Find an Agent</a>
                                    <a href="tel:+18339661976" type="submit"
                                        class="theme-btn btn-one lg ml-2 google-link" name="google-link"> <i
                                            class="fas fa-solid fa-phone"></i> <span class="ml-2">(833)
                                            966-1976</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="appsec1-imagewrapper">
                            <img data-src="public/assets/images/advice_banner2.png" class="lazy">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <script>
        var search3 = document.getElementById('buySearch2');

        function codeAddressThree() {
            var geocoder, map, address;
            var address = search5.value;
            var componentForm = {
                locality: 'long_name',
                postal_code: 'short_name',
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
                            console.log(val, 'component')
                        }
                    }
                }
            });
        }
    </script>











    {{-- <script

        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize" defer>



</script> --}}



    {{-- <script>

        function initialize() {

            initAutocomplete();

        }





        var autocomplete;



        function initAutocomplete() {

            autocomplete = new google.maps.places.Autocomplete(

                (document.getElementById('buySearch')), {

                    types: ['geocode']

            });





        }





        function codeAddress() {





            var geocoder, map, address;



            var address = $('#buySearch').val();





                var componentForm = {

                    locality: 'long_name',

                    administrative_area_level_1: 'short_name',

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



                        // $('#locality').val(results[0].address_components[4].long_name);

                        // $('#administrative_area_level_1').val();

                    }

                });

            }



        </script> --}}
@endsection
