@php
    $metaTitle = 'ARIS360 | Real Estate & Home Loans';
@endphp

<head>
    <title>{{ $metaTitle }}</title>
</head>

@extends('properties.layouts.main')
@section('content')
    <!-- banner-section -->
    {{-- data-src="{{asset('public/assets/images/banner.png')}}" --}}
    <section class="banner-section lazy main-banner" id="homeSliderRandomImages">


        <div class="auto-container">

            <div class="inner-container">

                <div class="content-box centred">

                    @php
                        $pagecontent = json_decode($properties['page_data']);
                    @endphp

                    <h2 class="text-shadow-black">{!! $pagecontent[0]->content !!}</h2>

                </div>

                <div class="search-field">

                    <div class="tabs-box">

                        <div class="tab-btn-box">

                            <ul class="tab-btns tab-buttons centred clearfix">

                                <li class="tab-btn active-btn" data-tab="#tab-1">BUY</li>

                                <li class="tab-btn" data-tab="#tab-2">Sell</li>

                                <!--<li class="tab-btn" data-tab="#tab-3">Home Loans</li>-->

                                <li class="tab-btn" data-tab="#tab-4">Home Estimate</li>

                            </ul>

                        </div>

                    </div>

                    <div class="search_container for_home" id="search_container">
                        <div class="peroperty_serach_wrapper" id="search_wrapper">
                            <div class="search_loading" id="search_loading" style="display: none">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="input_wrapper position-relative">
                                <input id="search_city_input" name="search_city_input" type="text"
                                    autocomplete="off" onclick="onOpenSearchModal()" placeholder="Enter City or Zip">
                                <button class="theme-btn btn-one" id="search_button">
                                    <i class="fas fa-search"></i>
                                </button>
                                <div class="x-icon" id="search_cancel_icon"
                                    style="position: absolute;
                                display:none;
                                right: 15px;
                                top: 15px;
                                border: 1px solid #333;
                                border-radius: 50px;
                            }">
                                    <span id='search-placeholder-icon'><svg width="15" height="15"
                                            fill="none" stroke="#333" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </span>


                                </div>
                                <span class="search-placeholder" id='search-placeholder' style="display:none;">
                                </span>
                            </div>
                            <div class="property_search_modal" id="search_modal">
                                <div class="current_location_box" id="current_location_box"
                                    onclick="getCurrentLocation()">
                                    <span class="currentLocationIcon m-2">
                                        <svg width="23" height="23" fill="#de1e25" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3 9.738a.75.75 0 0 0 .472.709l7.2 2.88 2.881 7.202a.75.75 0 0 0 .697.472h.012a.752.752 0 0 0 .693-.494l6-16.5a.75.75 0 0 0-.961-.962l-16.5 6A.75.75 0 0 0 3 9.738Z">
                                            </path>
                                        </svg></span> Current Location
                                </div>


                                {{-- <div class="button_group">
                                    <button class="btn_filter active_btn" id="property_search_filter">For
                                        Sale</button>
                                    <button class="btn_filter" id="property_search_filter">For Rent</button>
                                    <button class="btn_filter" id="property_search_filter">Sold</button>
                                </div> --}}

                                <div class="search_result_wrapper p-0" id="places-container">
                                    {{-- <h1 class="result_title">Places</h1> --}}

                                </div>
                                <div class="search_result_wrapper p-0" id="school-container">

                                </div>

                            </div>

                            <script></script>

                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- banner-section end -->

    <!-- second-section start -->
    <section class="container mt-5 mb-4 py-4">


        <div class="row d-flex align-items-center">

            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <img data-src="{{ asset('public/assets/images/home_sweet_home.png') }}" class="img-fluid lazy"
                    alt="">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <p class="mx-3 para-area" style="color:#0f172b">
                    {!! $pagecontent[1]->content !!}
                </p>
            </div>

        </div>

    </section>
    <!-- second-section end -->
    @if(count($properties['Aris360PrimeProperties']) > 0 && isset($properties['Aris360PrimeProperties']))
    <section class="feature-section sec-pad">

        <div class="auto-container">

            <div class="sec-title centred">

                <h2 class="red-aris">ARIS360 Prime Properties</h2>

            </div>

            {{-- @include('properties.includes.homepageFeatured') --}}
            @include('properties.includes.aris360Primeproperties')

            <div class="more-btn centred"><a href="{{ route('home.our-community') }}" class="theme-btn btn-one">View
                    Listings</a></div>
            </div>
    </section>
    @endif
    <!-- feature-section -->
    <section class="feature-section sec-pad">

        <div class="auto-container">

            <div class="sec-title centred">

                <h2 class="red-aris">Featured Properties</h2>

            </div>


            @include('properties.includes.homepageFeatured')
            {{-- @include('properties.properties') --}}

            <div class="more-btn centred"><a href="{{ route('home.our-community') }}" class="theme-btn btn-one">View
                    Listings</a></div>

        </div>

    </section>
    <!-- feature-section end -->
    <section class="banSec ceoSec">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <figure class="ceoImg">
                        <img class="img-fluid lazy" src="{{ asset('public/images/sethProfile.jpg') }}" alt="">
                    </figure>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <h2>{!! $pagecontent[2]->content !!}</h2>
                        <h6>
                            {!! $pagecontent[3]->content !!}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category-section -->
    @include('properties.includes.categories')

    <!-- category-section end -->


    <!--app-sec-start-->
    <section class="app-sec3">
        <div class="container">
            <div class="sec-title text-center">

                <h2 class="red-aris">What's Your Next Plan?</h2>

            </div>
            <div class="appsec3-cardwrapper">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 my-5">
                        <div class="real-estate-agent">
                            <div class="realestate-image">
                                <img data-src="public/assets/images/homeone.png" class="lazy img-fluid home-img mb-4"
                                    alt="">
                            </div>
                            <div class="agentCard-bottomSect">
                                <div class="agentCard-top">
                                    <p class="gen-heading mb-3">{!! $pagecontent[4]->content !!}</p>
                                    <p class="gen-text">{!! $pagecontent[5]->content !!}</p>
                                </div>
                                <div class="agentCard-bottom">
                                    <div class="btn-box mt-2">
                                        <a href="{{ url('/all-properties') }}" class="theme-btn btn-one">View
                                            Listings</a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 my-5">
                        <div class="real-estate-agent">
                            <div class="realestate-image">
                                <img data-src="public/assets/images/hometwo.png" class="lazy img-fluid home-img mb-4"
                                    alt="">
                            </div>
                            <div class="agentCard-bottomSect">
                                <div class="agentCard-top">
                                    <p class="gen-heading mb-3">{!! $pagecontent[6]->content !!}</p>
                                    <p class="gen-text">{!! $pagecontent[7]->content !!}</p>
                                </div>
                                <div class="agentCard-bottom">
                                    <div class="btn-box mt-2">
                                        <a href="{{ route('home.property-listing') }}" class="theme-btn btn-one">List
                                            Your Property</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 my-5">
                        <div class="real-estate-agent">
                            <div class="realestate-image">
                                <img data-src="public/assets/images/homethree.png" class="lazy img-fluid home-img mb-4"
                                    alt="">
                            </div>
                            <div class="agentCard-bottomSect">
                                <div class="agentCard-top">
                                    <p class="gen-heading mb-3">{!! $pagecontent[8]->content !!}</p>
                                    <p class="gen-text">{!! $pagecontent[9]->content !!}</p>
                                </div>
                                <div class="agentCard-bottom">
                                    <div class="btn-box mt-2">
                                        <a href="{{ route('mortgage-rates') }}" class="theme-btn btn-one">Mortgage
                                            Rates</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--app-sec-end-->


    <!-- about-section -->

    <section class="feature-section sec-pad bck-black">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2 class="red-aris">{!! $pagecontent[10]->content !!}</h2>
            </div>
            {{-- @include('properties.featured') --}}
            @include('properties.includes.HomepageAgents')
        </div>
    </section>

    <!-- about-section -->




    <!-- deals-section -->
    <section class="feature-section sec-pad">

        <div class="auto-container">

            <div class="sec-title text-center">

                <h2 class="red-aris">{!! $pagecontent[11]->content !!}</h2>

            </div>

            {{-- @include('properties.featured') --}}
            @include('properties.includes.HomepageMLS')

            <div class="more-btn centred"><a href="{{ route('home.our-community') }}" class="theme-btn btn-one">View
                    Listings</a></div>
        </div>

    </section>
    <!-- deals-section end -->

    <!-- chooseus-section -->
    <section class="chooseus-section">

        <div class="auto-container">

            <div class="inner-container bg-color-2">

                <div class="upper-box clearfix">

                    <div class="sec-title light">

                        <h5>{!! $pagecontent[12]->content !!}</h5>

                        <h2>{!! $pagecontent[13]->content !!}</h2>

                    </div>

                    <div class="btn-box">

                        <a href="{{ route('home.our-community') }}" class="theme-btn btn-one">All Categories</a>

                    </div>

                </div>

                <div class="lower-box">

                    <div class="row clearfix">

                        <div class="col-lg-4 chooseus-block">

                            <div class="chooseus-block-one">

                                <div class="inner-box">

                                    <div class="icon-box"><i class="icon-19"></i></div>

                                    <h4>{!! $pagecontent[14]->content !!}</h4>

                                    <p>{!! $pagecontent[15]->content !!}</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 chooseus-block">

                            <div class="chooseus-block-one">

                                <div class="inner-box">

                                    <div class="icon-box"><i class="icon-26"></i></div>

                                    <h4>{!! $pagecontent[16]->content !!}</h4>

                                    <p>{!! $pagecontent[17]->content !!}</p>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-4 chooseus-block">

                            <div class="chooseus-block-one">

                                <div class="inner-box">

                                    <div class="icon-box"><i class="icon-21"></i></div>

                                    <h4>{!! $pagecontent[18]->content !!}</h4>

                                    <p>{!! $pagecontent[19]->content !!} </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- chooseus-section end -->

    <!-- saving-banner-start -->

    <!-- <section class="home-ownersec3 saving-banner-sec1 line-len backsec1">
                                        <div class="container">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md-12 col-lg-12">
                                                    <div class="home-ownerleftwrap text-center">
                                                        <div class="banner-headwrap">
                                                            <p class="gen-heading text-center" style="text-transform:capitalize;">Save Your Investment</p>
                                                        </div>
                                                        <div class="ownersec3-text">
                                                            <p class="gen-text mb-4 text-center" style="max-width:100%;">The most pragmatic of all the first-time homebuyer tips is establishing your budget. Every property is uniquely priced, so when buying your first home, use our affordability calculator to refine your search by knowing what you can afford from the start.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> -->

    <!--<div class="aris_more_solution_Sect"></div> -->


    <!-- saving-banner-end -->


    <!-- cta-section -->

    <section class="cta-section bg-color-2">

        <div class="pattern-layer lazy" data-src="{{ asset('public/assets/images/shape/shape-2.png') }}"></div>

        <div class="auto-container">

            <div class="clearfix">

                <div class="text">

                    <h2>{!! $pagecontent[20]->content !!}</h2>

                </div>

                <div class="btn-box pull-right">

                    <a href="{{ route('sell-with-aris') }}" class="theme-btn btn-three">Sell Properties</a>

                    <a href="{{ route('buy-with-aris') }}" class="theme-btn btn-one">Buy Properties</a>

                </div>

            </div>

        </div>

    </section>

    <!-- cta-section end -->

    <!---->

    <section class="aris-compare-section">
        <div class="container">
            <div class="text pull-left">
                <h2>HOW DOES ARIS360 COMPARE?</h2>
                <p>FASTER, SIMPLER AND THE BEST PART? CASH BACK.</p>
            </div>
            <div class="compare_table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="banSec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2>How Does ARIS360 Compare?</h2>
                        <h6>Faster, Simpler and the Best Part? <span>CASHBACK.</span></h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table border-0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="font-cinzel">

                                        <img style="max-width: 100px;transform: scale(2);"
                                            src="public/assets/images/Aris-Logonew1.png" alt="">

                                    </th>
                                    <th><span class="red">Redfin</span></th>
                                    <th><span class="blue">Traditional</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>
                                            Home Tour
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            Instant tour
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            Wait for days
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            Wait for days
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            Avg. buyer cash back
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            $5,750
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            $1,500
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            $0
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            Agents
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            5-star local agents
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            Sales associates
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            5-start agents
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            Contract
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            No contracts or commitments
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            90+ days agents contract
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            90+ days agents contract
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    <div class="aris-new-banner-Sect lazy" data-src="{{asset('public/assets/images/aris-newBanner.png')}}"> --}}

    {{--    </div> --}}

    <div class="container mt-5 mb-4 py-4">


        <div class="row d-flex align-items-center">

            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <img data-src="public/assets/images/fee-image2.png" class="img-fluid lazy" alt="">
            </div>

            <div class="col-lg-6 col-md-6 col-12">
                <p class="text-dark mx-3 para-area">
                    {!! $pagecontent[21]->content !!}
                </p>
            </div>

        </div>

    </div>
    <!-- Redfin section -->



    <!-- download-section -->

    <section class="download-section bg-color-3">
        <img data-src="public/assets/images/app-banner.png" class="img-fluid lazy" alt="Responsive image">
    </section>

    <section class="news_letter_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <section class="bg-img text-center">
                        <div class="container">
                            <h2>
                                <strong class="text-light">Subscribe</strong>
                            </h2>
                            <h6 class="font-alt"> Stay informed with the latest professional updates from ARIS360</h6>
                            <br><br>
                            <form id="subscribe-form" class="form-subscribe" method="post"
                                action="{{ route('newsletter') }}">
                                @csrf
                                <div class="input-group">
                                    <input type="email" name="email"
                                        value="{{ isset(Auth()->user()->email) ? Auth()->user()->email : '' }}"
                                        class="form-control input-lg py-4" placeholder="email address">
                                @if (auth()->check())
                                    <span class="input-group-btn">
                                        <button class="btn btn-success btn" type="submit">Subscribe</button>
                                    </span>
                                @else
                                <span class="input-group-btn">
                                    <button class="btn btn-success btn favNotLoggedIn">Subscribe</button>
                                </span>
                                @endif
                                </div>
                            </form>
                            <div id="subscribe-message"></div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#subscribe-form').submit(function(event) {
                event.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var data = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function(response) {
                        $('#subscribe-message').text(response.message);
                        setTimeout(function() {
                            $('#subscribe-message').fadeOut('slow', function() {
                                $(this).text('');
                                $(this).show();
                            });
                        }, 3000);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
            $("body").on('click', '.favNotLoggedIn', function(e) {
                window.location.href = sturl + '/login';
            });
        });
        $(document).ready(function() {
            $("body").on('click', '.formFavourite', (function(e) {
                var value = $(this).data("text");
                $.ajax({
                    url: "<?php echo url('/skzfav'); ?>",
                    type: "GET",
                    data: {
                        text: value
                    },
                    success: function(response) {
                        if (response.return == true) {
                            $('#favtle').text('Favorite');
                            $('#favbdy').text(response.message);
                            $('#favModalNoti').modal('show');
                            $('#favBtnListed' + value).find('i').toggleClass(
                                'far fa-heart fas fa-heart');
                            $('#favBtnListed' + value).removeClass("formFavourite");
                            $('#favBtnListed' + value).addClass('formFavourite skzfavx');
                        } else {
                            $('#favtle').text('Favorite');
                            $('#favbdy').text(response.message);
                            $('#favModalNoti').modal('show');
                            $('#favBtnListed' + value).find('i').toggleClass(
                                'fas fa-heart far fa-heart');
                            $('#favBtnListed' + value).removeClass("skzfavx");
                            $('#favBtnListed' + value).addClass('formFavourite');
                        }
                    },
                    error: function(e) {
                        alert('Failed to submit');
                    }
                });

            }));

            $("body").on('click', '.formShare', function(e) {
                e.preventDefault(); // Prevent the default action of the link/button
                var property_id = $(this).data("text");
                var user_id = $(this).data("user");
                $('#shareSubmitButton').off('click').on('click', function() {
                    var email = $('#recipient-email').val();
                    var message = $('#message-text').val();
                    setTimeout(function() {
                        $('#shareModal').modal('hide');
                        $('#recipient-email').val("");
                        $('#message-text').val(""); // Hide the modal after 1 second
                        $('#favtle').text('Share Listing');
                        $('#favbdy').text("Property Shared Successfully");
                        $('#favModalNoti').modal('show');
                    }, 1000);

                    $.ajax({
                        url: "<?php echo url('/share-listing'); ?>",
                        type: "POST",
                        data: {
                            "property_id": property_id,
                            "user_id": user_id,
                            "email": email,
                            "message": message,
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(e) {
                            console.log("Failure");
                        }
                    });
                });
            });

            $("body").on('click', '.favNotLoggedIn', function(e) {
                window.location.href = sturl + '/login';
            });

            $("body").on('click', '.shrNotLoggedIn', function(e) {
                window.location.href = sturl + '/login';
            });

            var global_data = {};
        });
    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

    <!-- download-section end -->


    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script>

    <script>
        const showCurrentLocation2 = () => {
            $('.current_location_box2').show();
        }

        const hideCurrentLocation2 = () => {
            let timer = setTimeout(() => {
                $('.current_location_box2').hide();
            }, 200)
            return () => clearTimeout(timer)
        }



        const getCurrentLocation2 = () => {
            $('.current_location_box2').hide();
            document.getElementById('search_loader').style.display = 'block'
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    async (position) => {
                            document.getElementById('search_loader').style.display = 'none'
                            console.log("position : " + position);
                            const pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };

                            // Reverse geocode to get location details
                            const geocoder = new google.maps.Geocoder();
                            await geocoder.geocode({
                                location: pos
                            }, (res, status) => {
                                if (status === 'OK') {
                                    if (res[0]) {
                                        let state = '';

                                        // Extract state from address components
                                        for (const component of res[0].address_components) {
                                            if (component.types.includes('administrative_area_level_1')) {
                                                state = component.short_name;
                                            }
                                        }

                                        // Check if the state is Washington (WA)
                                        if (state === 'WA') {

                                            let zipcode = '';
                                            let city = '';

                                            // Extract zipcode and city from address components
                                            for (const component of res[0].address_components) {
                                                if (component.types.includes('postal_code')) {
                                                    zipcode = component.long_name;
                                                } else if (component.types.includes('locality')) {
                                                    city = component.long_name;
                                                }
                                            }

                                            var currentDomain = window.location.origin;
                                            if (window.location.origin === 'http://localhost:8080' || window
                                                .location.origin === 'http://localhost') {
                                                currentDomain = currentDomain + '/aris360';
                                            }

                                            var desiredLink =
                                                `/all-properties?search=${encodeURIComponent(city)}&zip=${encodeURIComponent(zipcode)}`;
                                            window.location.href = currentDomain + desiredLink;
                                        } else {
                                            document.getElementById('warning-section').style =
                                                'display : flex';
                                        }
                                    } else {
                                        console.error('Error: No results found');
                                    }
                                } else {
                                    console.error(`Error: Geocoder failed due to: ${status}`);
                                }
                            });
                        },
                        (error) => {
                            console.log('Error: The Geolocation service failed.', error);
                        }
                );
            } else {
                console.error('Error: Your browser doesn\'t support geolocation.');
            }
        }

        function initialize() {
            initAutocomplete();
        }

        var autocomplete;
        var search1 = document.getElementById('searchPropertyText1');
        var search2 = document.getElementById('searchPropertyText2');
        var search4 = document.getElementById('searchPropertyText4');


        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search1), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'US'
                    }
                });
            google.maps.event.addListener(autocomplete, 'place_changed', () => {
                var form = $('#search-from-1');
                var url = form.attr('action');
                var data = form.serialize();
                console.log(data, 'data')
                window.location.href = 'all-properties?' + data;
            })

            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search2), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'US'
                    }
                });

            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search4), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'US'
                    }
                });

        }

        function codeAddress() {

            var geocoder, map, address;
            var address = search1.value;
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
                        }
                    }

                    // $('#locality').val(results[0].address_components[4].long_name);
                    // $('#administrative_area_level_1').val();
                }
            });
            let timer = setTimeout(() => {
                $('.current_location_box2').hide();
            }, 200)
            return () => clearTimeout(timer)
        }
        // random images on homepage banner while refreshing the page
        window.onload = randomp;

        var pic_rand = [
            "{{ asset('public/assets/images/homeSlider/1.png') }}",
            "{{ asset('public/assets/images/homeSlider/2.png') }}",
            "{{ asset('public/assets/images/homeSlider/3.png') }}",
            "{{ asset('public/assets/images/homeSlider/4.png') }}",
            "{{ asset('public/assets/images/homeSlider/5.png') }}",
            "{{ asset('public/assets/images/homeSlider/6.png') }}",
            "{{ asset('public/assets/images/homeSlider/7.png') }}",
            "{{ asset('public/assets/images/homeSlider/8.png') }}",
            "{{ asset('public/assets/images/homeSlider/9.png') }}",
            "{{ asset('public/assets/images/homeSlider/10.png') }}",
            "{{ asset('public/assets/images/homeSlider/11.png') }}",
            "{{ asset('public/assets/images/homeSlider/12.png') }}",
            "{{ asset('public/assets/images/homeSlider/13.png') }}",
            "{{ asset('public/assets/images/homeSlider/14.png') }}"
        ];

        function randomp() {
            var randomNum = Math.floor(Math.random() * pic_rand.length);
            document.getElementById("homeSliderRandomImages").style.backgroundImage = "url('" + pic_rand[randomNum] + "')";
        }
    </script>
@endsection
