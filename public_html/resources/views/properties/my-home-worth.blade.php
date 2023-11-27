@php
    $metaTitle = 'Value 360, Value360';
@endphp

<head>
    <title>{{ $metaTitle }}</title>
</head>
@extends('properties.layouts.main')
@section('content')
    <section class="home-worth-banner-wrap">
        <div class="container">
            <div class="home-worth-banner">
                <div class="my-4">
                    <h1>
                        {{-- Estimation of your valued property --}}
                        {!! $page[0]['content'] !!}
                    </h1>
                    <!--<h6>-->
                    <!--    Dummy text dummy text dummy text dummy text dummy text-->
                    <!--</h6>-->
                </div>
                <div class="my-4">
                    <!--<form action="" class="agent-search-field">-->
                    <!--        <input type="text" placeholder="Enter Your Current Address..." id="worthSearch">-->
                    <!--        <a href="{{ route('my-home-worth-detail') }}" class="search-icon"><i class="fas fa-search"></i></a>-->
                    <!--    </form>-->

                    <form action="javascript:void()" method="GET" class="agent-search-field homeworth_addressfield">
                        <div class="search_address position-relative">
                            <input onblur="hideCurrentLocationHomeWorth()"
                            onfocus="showCurrentLocationHomeWorth()" name="address" id="searchPropertyText4x" type="text"
                                placeholder="Enter Your Current Address..." id="sellSearch">
                            <div class="skzHworth"></div>
                            <div class="current_location_box_home" onclick="getCurrentLocationHomeWorth()">
                                <span class="currentLocationIcon m-2">
                                    <svg width="23" height="23" fill="#de1e25" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3 9.738a.75.75 0 0 0 .472.709l7.2 2.88 2.881 7.202a.75.75 0 0 0 .697.472h.012a.752.752 0 0 0 .693-.494l6-16.5a.75.75 0 0 0-.961-.962l-16.5 6A.75.75 0 0 0 3 9.738Z">
                                        </path>
                                    </svg></span> Current Location
                            </div>
                        </div>
                        @if (Auth::user())
                            <button type="button" class="search-icon fas fa-search" id="skzwmhw"></button>
                        @else
                            <button type="button" id="loginNow" class="search-icon fas fa-search">
                            </button>
                        @endif

                    </form>
                    <!--<form class="adress-section">-->

                    <!--    <input type="text" class="" id="" placeholder="Enter Your Current Address...">-->
                    <!--     <a href="{{ route('my-home-worth-detail') }}" class="valuation-btn btn-one" >Get My Free Valuation</a>-->

                    <!--</form>-->
                    <!--<button class=""></button>-->

                </div>
                <h4 class="text-light mt-2">
                    {{-- Expert insights can assist you in managing your assets effectively. --}}
                    {!! $page[1]['content'] !!}
                </h4>
            </div>
        </div>
    </section>

    <section class="how-it-work-sect">
        <div class="auto-container">
            <div class="resource-center-titleSec">
                <p class="title">
                    {{-- Steps for Home Worth Evaluation --}}
                    {!! $page[2]['content'] !!}
                </p>
                <p class="para">
                    {{-- Understanding how ARIS360  Home Evaluation is determined as an estimate --}}
                    {!! $page[3]['content'] !!}
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 mb-5">
                    <div class="how-it-work-Box">
                        <div class="how-it-work-img">
                            <img data-src="public/assets/images/illustrated-icon-06.png" class="lazy img-fluid">
                            <div class="btn-box">
                                <a href="javascript:void(0)" class="theme-btn btn-one">Step 1</a>
                            </div>
                        </div>
                        <div class="how-it-work-detail">
                            <!--<p class="title2">Pre Approval and Appointment</p>-->
                            <p class="title2">
                                {{-- Comparative Options --}}
                                {!! $page[4]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Evaluate recently sold homes in your area that are similar to yours in terms of location, size, age, features, and condition. --}}
                                {!! $page[5]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-5">
                    <div class="how-it-work-Box">
                        <div class="how-it-work-img">
                            <img data-src="public/assets/images/illustrated-icon-07.png" class="lazy img-fluid">
                            <div class="btn-box">
                                <a href="javascript:void(0)" class="theme-btn btn-one">Step 2</a>
                            </div>
                        </div>
                        <div class="how-it-work-detail">
                            <!--<p class="title2">Outstanding Offer</p>-->
                            <p class="title2">
                                {{-- Unique Features and Upgrades --}}
                                {!! $page[6]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Assess the value of unique features offered to make the property more desirable to potential buyers and increase its worth. --}}
                                {!! $page[7]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mb-5">
                    <div class="how-it-work-Box">
                        <div class="how-it-work-img">
                            <img data-src="public/assets/images/illustrated-icon-08.png" class="lazy img-fluid">
                            <div class="btn-box">
                                <a href="javascript:void(0)" class="theme-btn btn-one">Step 3</a>
                            </div>
                        </div>
                        <div class="how-it-work-detail">
                            <!--<p class="title2">Closing Agreement</p>-->
                            <p class="title2">
                                {{-- Expert Analysis --}}
                                {!! $page[8]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- You have an experienced and reliable ARIS360  agent to guide you at every step. --}}
                                {!! $page[9]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-ownersec3 line-len backsec1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="home-ownerleftwrap text-center">
                        <div class="banner-headwrap">
                            <p class="gen-heading text-center">
                                {{-- Discover Your Property's true potential <br> Get a Free Property Estimate Today and maximize Your Real Estate Investment! --}}
                                {!! $page[10]['content'] !!}
                            </p>
                        </div>
                        <div class="ownersec3-text">
                            <p class="gen-text mb-4 text-center" style="max-width:100%;">
                                {{-- The most pragmatic of all the first-time homebuyer tips is establishing your budget. Every property is uniquely priced, so when buying your first home, use our affordability calculator to refine your search by knowing what you can afford from the start. --}}
                                {!! $page[11]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-12 col-md-6 col-lg-6">-->
                <!--    <div class="home-ownerrightwrap step-images">-->
                <!--        <img src="public/assets/images/step8.png" class="img-fluid ownsersce3right mb-4" alt="">-->
                <!--    </div>-->
                <!--</div> -->
            </div>
        </div>
    </section>
    <section class="home-worth-body real-slider-sec1 find-an-agent-slider">
        <div class="container">
            <div class="title-sec my-2">
                <p class="title my-2 font-36 text-center mb-5">
                    {{-- Read Real Stories From Our Customers --}}
                    {!! $page[12]['content'] !!}

                </p>
            </div>

            <!-- Swiper -->

            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one pb-5">
                <div class="item p-2">

                    <div class="custom_row_homeworth">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-04.png"
                                        class="image-fluid lazy arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The Empty Nester --}}
                                                {!! $page[13]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- After raising their children in their family home for 30 years, John and his wife decided it was time to downsize.<br/><br/>They were curious about how much their home was worth, so they turned to ARIS360  for a home valuation.<br/><br/>The valuation report provided by ARIS360  helped them understand the current market value of their home and gave them an idea of what they could expect to sell it for.<br/><br/>Armed with this information, they were able to make informed decisions about their next steps. --}}
                                                {!! $page[14]['content'] !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-05.png"
                                        class="lazy image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The Investor --}}
                                                {!! $page[15]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- As a real estate investor, Sarah was always on the lookout for great deals. She contacted ARIS360  to get a home valuation on a property she was considering purchasing.<br/><br/>The valuation report helped her understand the property's current market value and gave her an idea of what she could expect to earn if she decided to rent it out.<br/><br/>With this information, Sarah was able to make a sound investment decision and move forward with the purchase. --}}
                                                {!! $page[16]['content'] !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-06.png"
                                        class="lazy image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The Potential Seller --}}
                                                {!! $page[17]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Amy had been considering selling her home but wasn't sure if it was the right time. She contacted ARIS360  to get a home valuation report,<br/><br/>which gave her an idea of what her home was worth in the current market.<br/><br/>Armed with this information, she was able to make an informed decision about whether or not to sell her home.<br/><br/>In the end, she decided to wait a few more years until the market conditions were more favorable, but she was grateful for the information provided by ARIS360  that helped her make a sound decision. --}}
                                                {!! $page[18]['content'] !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>

           


        </div>
    </section>

    <!--<section class="home-worth-body my-5">-->
    <!--    <div class="container">-->
    <!--        <div class="title-sec my-2">-->
    <!--            <p class="title my-2">-->
    <!--                Read Real Stories From Our Customers-->
    <!--            </p>-->
    <!--        </div>-->
    <!--        <div class="row my-5">-->
    <!--            <div class="col-lg-4 col-md-6 col-12">-->
    <!--                <div class="custom_row_homeworth">-->
    <!--                    <div class="home-worth-image">-->
    <!--                        <img src="public/assets/images/home-worth1.png" alt="" class="img-fluid">-->
    <!--                    </div>-->
    <!--                    <div class="home-worth-detail">-->
    <!--                        <h6 class="text-dark title2">David</h6>-->
    <!--                        <p>Best Property Valuation in Washington</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-md-6 col-12">-->
    <!--                <div class="custom_row_homeworth">-->
    <!--                    <div class="home-worth-image">-->
    <!--                        <img src="public/assets/images/home-worth2.png" alt="" class="img-fluid">-->
    <!--                    </div>-->
    <!--                    <div class="home-worth-detail">-->
    <!--                        <h6 class="text-dark title2">Sam</h6>-->
    <!--                        <p>Comparative Property Analysis</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 col-md-6 col-12">-->
    <!--                <div class="custom_row_homeworth">-->
    <!--                    <div class="home-worth-image">-->
    <!--                        <img src="public/assets/images/home-worth3.png" alt="" class="img-fluid">-->
    <!--                    </div>-->
    <!--                    <div class="home-worth-detail">-->
    <!--                        <h6 class="text-dark title2">Peter</h6>-->
    <!--                        <p>Innovative Real Estate Solutions</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- Start of Why Choose section
         ============================================= -->
    <section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
        <div class="container">

            <div class="in-why-choose-content-2">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="in-section-title-2 headline wow fadeInLeft" data-wow-delay="200ms"
                            data-wow-duration="1000ms">
                            <h2>ARIS360 FAQs</h2>
                        </div>

                        <div class="in-why-choose-img-text">
                            <div class="in-why-choose-img-area">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                                        <div class="in-why-choose-img">
                                            <img class="lazy" data-src="public/assets/images/wc2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                                        <div class="in-why-choose-img">
                                            <img class="lazy" data-src="public/assets/images/wc3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="react_to_us">
                            <a href="{{ route('contact') }}">For Any Queries Further, please reach out to us! <i
                                    class="fas fa-phone"></i></a>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="in-why-choose-faq">
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingOne2">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne2" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            {{-- What is the price of my home? --}}
                                            {!! $page[19]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseOne2" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- Find out the price of your home by entering the location of the property on What's My Home Worth page. --}}
                                            {!! $page[20]['content'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            {{-- What are the most valuable features in my property? --}}
                                            {!! $page[21]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- Find out the value of the features of your property on Bling Your Home page. --}}
                                            {!! $page[22]['content'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingThree2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree2">
                                            {{-- How accurate is my home worth? --}}
                                            {!! $page[23]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseThree2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- Find out the accuracy of home worth estimate on Home Selling Guide. --}}
                                            {!! $page[24]['content'] !!}
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">-->
                                <!--	<h2 class="accordion-header" id="headingFour">-->
                                <!--		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">-->
                                <!--			Frequently Ask Question 4-->
                                <!--		</button>-->
                                <!--	</h2>-->
                                <!--	<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">-->
                                <!--		<div class="accordion-body">-->
                                <!--			This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. This is the dummy text. -->
                                <!--		</div>-->
                                <!--	</div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of  Why Choose section
         ============================================= -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    const showCurrentLocationHomeWorth = () => {
            $('.current_location_box_home').show();
        }

        const hideCurrentLocationHomeWorth = () => {
            let timer = setTimeout(() => {
                $('.current_location_box_home').hide();
            }, 200)
            return () => clearTimeout(timer)
        }
        const getCurrentLocationHomeWorth = () => {
            $('.current_location_box_home').hide();

            if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(
        async (position) => {
            const pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            // Reverse geocode to get location details
            const geocoder = new google.maps.Geocoder();
            await geocoder.geocode({
                location: pos
            }, (results, status) => {
                if (status === 'OK') {
                    if (results[0]) {
                        let state = '';

                        // Extract state from address components
                        for (const component of results[0].address_components) {
                            if (component.types.includes('administrative_area_level_1')) {
                                state = component.short_name;
                            }
                        }

                        // Check if the state is Washington (WA)
                        if (state === 'WA') {
                            let zipcode = '';
                            let city = '';

                            // Extract zipcode and city from address components
                            for (const component of results[0].address_components) {
                                if (component.types.includes('postal_code')) {
                                    zipcode = component.long_name;
                                } else if (component.types.includes('locality')) {
                                    city = component.long_name;
                                }
                            }

                            var currentDomain = window.location.origin;
                            if (window.location.origin === 'http://localhost:8080' || window.location.origin === 'http://localhost') {
                                currentDomain = currentDomain + '/aris360';
                            }

                            var desiredLink = `/all-properties?search=${encodeURIComponent(city)}&zip=${encodeURIComponent(zipcode)}`;
                            window.location.href = currentDomain + desiredLink;
                        } else {
                            document.getElementById('warning-section').style='display : flex';
                        }
                    } else {
                        console.error('Error: No results found');
                    }
                } else {
                    console.error(`Error: Geocoder failed due to: ${status}`);
                }
            });
        },
        () => {
            console.error('Error: The Geolocation service failed.');
        }
    );
} else {
    console.error('Error: Your browser doesn\'t support geolocation.');
}

        }
</script>
@endsection
