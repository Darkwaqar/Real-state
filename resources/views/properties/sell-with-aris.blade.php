@extends('properties.layouts.main')
@php
    $metaTitle = 'Sell With Aris360, Sell With Aris';
    $metaDescription = 'Ready to sell your property? Choose Aris360 for a seamless selling experience.
    With Aris360, you can confidently sell your home and maximize its value. Our expert team will
     guide you through the process, ensuring a stress-free transaction. Sell with Aris360 and unlock
      the potential of your property today.';
@endphp

<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@section('content')
    <section class="sell-home-sect1 banner-size">
        <div class="container">
            <div class="sell-home-bannerSec">
                <h1>
                    {{-- Deal your property  With 360<sup>o</sup>Assurance  --}}
                    {!! $page[0]['content'] !!}
                </h1>
                <div class="my-4">
                    <form action="{{ route('sellaris-homeworth') }}" method="GET" class="agent-search-field">
                        <input name="address" type="text" placeholder="Enter Your Current Address..." id="sellSearch"
                            onkeyup="codeAddress2()" onfocusout="codeAddress2()" required>
                            @if (auth()->check())
                                <button type="submit" class="search-icon fas fa-search"></button>
                            @else
                                <a href="{{url('/login')}}" class="search-icon fas fa-search"> </a>
                            @endif
                    </form>
                </div>
                <h4 class="text-light">
                    {{-- Swift 360<sup>o</sup> Streamlined Channel for Real Rstate sale --}}
                    {!! $page[1]['content'] !!}
                </h4>
            </div>
        </div>
    </section>


    <section class="getSold_now agent-resource-center-sec3">
        <div class="auto-container">
            <div class="how_it_work_title">
                <h3>
                    {{-- Steps To Sell Your Property --}}
                    {!! $page[2]['content'] !!}
                </h3>
                <p>
                    {{-- Swift and Seamless Experience --}}
                    {!! $page[3]['content'] !!}
                </p>
            </div>
            <div class="row custom_border_line">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="agent-articaleBox">
                        <p class="title2">
                            {{-- Introduce Us To Your Home --}}
                            {!! $page[4]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Let ARIS360  showcase the unique qualities of your home to potential buyers. Introduce us to your property and we'll take care of the rest, providing top-notch marketing and personalized support throughout the selling process. --}}
                            {!! $page[5]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="agent-articaleBox">
                        <p class="title2">
                            {{-- Listing Your Property --}}
                            {!! $page[6]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Ready to sell your property? Let ARIS360  help you list your home with ease. Our experienced agents will provide professional guidance and utilize the latest technology to market your property effectively, reaching a broad range of potential buyers and maximizing your chances of a successful sale. --}}
                            {!! $page[7]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="agent-articaleBox">
                        <p class="title2">
                            {{-- Closing Offers --}}
                            {!! $page[8]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- At ARIS360 , we understand that receiving and evaluating offers can be a daunting process. Our expert agents will guide you through the closing offer stage with confidence and ease, negotiating on your behalf to ensure the best possible outcome. Trust us to help you make informed decisions and secure a successful sale. --}}
                            {!! $page[9]['content'] !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sell-home-sect2 sell-witharissce1 sell-exp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="search_top_sect">
                        <div class="resource-center-titleSec">
                            <p class="title mb-2">
                                {{-- Get in Touch with ARIS360  Pro! --}}
                                {!! $page[10]['content'] !!}
                            </p>
                            <p class="para mb-2">
                                {{-- Directly Consult with ARIS360  to reach Your Dream House --}}
                                {!! $page[11]['content'] !!}
                            </p>
                        </div>
                        <p class="para mb-2">
                            {{-- You have the opportunity to contact an ARIS360  authorized agent for an exclusive advice to aquire the most suitable property according to your preferences and lifestyle. --}}
                            {!! $page[12]['content'] !!}
                        </p>
                        <div class="search_section mb-2">
                            <!--<div class="search_input_field">-->
                            <!--    <span><i class="fas fa-search"></i></span>-->
                            <!--    <input type="text" placeholder="Search">-->
                            <!--</div>-->
                            <div class="btn-box">
                                <a href="{{ route('find-an-agent') }}" class="theme-btn btn-one">Find An Agent</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="house-marketimg">
                        <img data-src="public/assets/images/Realtor_Client_Img.jpg" class="lazy image-fluid arisindximg">
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_container container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="sell-banner-details-right2">
                        <p class="title2">
                            {{-- Customer Service & Satisfication --}}
                            {!! $page[13]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- ARIS360  is a great environment of Buyers, Sellers & Agents Of Properties. --}}
                            {!! $page[14]['content'] !!}
                        </p>
                        <p class="title2">
                            {{-- Reliable Sources --}}
                            {!! $page[15]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Regulation and monitoring of real estate market trends, effects of environmental programs and assess the likelihood of foreclosures by region. --}}
                            {!! $page[16]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12 p-0">
                    <div class="sell-banner-image mb-5">
                        <img data-src="public/assets/images/sell-inner-img1.jpg" class="img-fluid lazy">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="sell-banner-details">
                        <p class="title2 mt-5">
                            {{-- Benefits Of Choosing ARIS360  --}}
                            {!! $page[17]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Aris 360 has configured data from all over the country, including more than 500 million real estate and loan transactions in more than 2,690 counties, creating the largest multi-source real estate database. --}}
                            {!! $page[18]['content'] !!}
                        </p>
                        <p class="title2">
                            {{-- Market Intelligence --}}
                            {!! $page[19]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Marketing tactics that are focused on the foundation of predictive analytics using transaction and mortgage data. --}}
                            {!! $page[20]['content'] !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row sell_row_border">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="row custom_border_line mt-5">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="agent-articaleBox box-lenghts sell-banner-details-3">
                                <p class="title2">
                                    {{-- Widespread Network Of Buyers, Sellers & Agents Of Properties  --}}
                                    {!! $page[21]['content'] !!}
                                </p>
                                <p class="para">
                                    {{-- ARIS360  is committed to providing a widespread network of buyers, sellers, and agents for properties, making it easier for individuals to find their dream home or investment property. With our extensive network, we connect buyers and sellers across different geographic locations and provide access to a wide range of properties and real estate investment opportunities. --}}
                                    {!! $page[22]['content'] !!}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="agent-articaleBox box-lengths sell-banner-details-3">
                                <p class="title2">
                                    {{-- Growth & Sustainability --}}
                                    {!! $page[23]['content'] !!}
                                </p>
                                <p class="para">
                                    {{-- At ARIS360 , we believe that growth and sustainability go hand in hand when it comes to the real estate industry. Our mission is to provide innovative and sustainable solutions that support the growth and success of our clients, agents, and partners. --}}
                                    {!! $page[24]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="buyer_for_every_property sell-len">
        <div class="container">
            <div class="buyer_for_every_property_wrapper">
                <div class="buyer_for_every_property_content">
                    <h3>
                        {{-- We Have A Buyer For Every Property --}}
                        {!! $page[25]['content'] !!}
                    </h3>
                    <p class="paragraph">
                        {{-- Matching You WIth a Ready and Relevant Property:Our Commitment to Effective Real Estate Solutions. --}}
                        {!! $page[26]['content'] !!}
                    </p>
                    <div class="btn-box">
                        <a href="{{ route('home.property-listing') }}" target="_blank" class="theme-btn btn-one">List your
                            property</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sell-home-sect4 card-sec1">
        <div class="auto-container">
            <div class="resource-center-titleSec">
                <p class="title">
                    {{-- Homes Recently Sold With ARIS360  Agent --}}
                    {!! $page[27]['content'] !!}
                </p>
                <p class="para">
                    {{-- Schedule A Consultation With One of Our Top-Performing Agents. --}}
                    {!! $page[28]['content'] !!}
                </p>
            </div>

            <!-- Swiper -->
            {{-- <div class="swiper ArisRealtorSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="real-estate-agentCard">
                        <span>
                            <img data-src="public/assets/images/sell-inner-img1.jpg" class="img-fluid lazy" alt="">
                        </span>
                        <span class="agentCard-bottomSect">
                            <p class="title2">8676 Herrington Way, San Diego,</p>
                            <p class="para">123 Queen Street - Toronto, On</p>
                            <div class="sold-price-sect">
                                <p class="para">$1,205,000</p>
                                <a href="#!" class="deatil_link">detail <i class="far fa-arrow-right"></i></a>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next custom_prevnxt">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev custom_prevnxt">
                <i class="fas fa-chevron-left"></i>
            </div>
            <!--<div class="swiper-pagination"></div>-->
        </div> --}}

            <!-- Sold Property section -->
            <section class="feature-section sec-pad feat-pd">
                <div class="auto-container">
                    @include('properties.includes.soldProperties')
                    <div class="more-btn centred"><a href="{{ route('home.our-community') }}"
                            class="theme-btn btn-one">View Listings</a></div>
                </div>
            </section>
            <!-- Sold Property section End -->

        </div>
    </section>
    <section class="home-worth-body real-slider-sec1 find-an-agent-slider">
        <div class="container">
            <div class="title-sec my-2">

                <p class="title my-2 font-36 text-center mb-5">
                    {{-- Read Real Stories From Our Customers --}}
                    {!! $page[29]['content'] !!}
                </p>
            </div>

            <!-- Swiper -->

            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-08.png"
                                        class="image-fluid lazy arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The Quick Sale --}}
                                                {!! $page[30]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Jenny needed to sell her home quickly due to a job relocation. She contacted ARIS360  and worked with an agent who was able to get her home listed and sold within a month.<br/><br/>The agent used Aris360's marketing strategies to maximize exposure for the property, including professional photography and targeted online ads.<br/><br/>The home received multiple offers, and Jenny was able to sell for above the asking price.<br/><br/>Thanks to ARIS360 , Jenny was able to make a smooth transition to her new job and new home. --}}
                                                {!! $page[31]['content'] !!}
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
                                    <img data-src="public/assets/images/stories-09.png"
                                        class="image-fluid arisindximg lazy">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The Luxury Seller --}}
                                                {!! $page[32]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Thomas had a luxury home that he wanted to sell, but he knew it would require a specialized marketing approach.<br/><br/>He contacted ARIS360  and worked with a luxury home specialist who was able to develop a customized marketing plan.<br/><br/>The agent used high-end photography, video tours, and targeted advertising to attract potential buyers.</p><br/><br/>The property received several offers and sold for a record-breaking price in the area. Thomas was thrilled with the results and impressed with Aris360's ability to market his luxury property effectively. --}}
                                                {!! $page[33]['content'] !!}
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
                                    <img data-src="public/assets/images/stories-10.png"
                                        class="image-fluid arisindximg lazy">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The Fixer-Upper --}}
                                                {!! $page[34]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Lisa had inherited a home that needed a lot of work before it could be sold. She turned to ARIS360  for help,<br/><br/>and her agent was able to connect her with a team of contractors who could handle the necessary repairs and updates.<br/><br/>The agent also developed a targeted marketing plan that highlighted the property's potential and attracted potential buyers who were willing to invest in the fixer-upper.<br/><br/>The property sold quickly and for a great price, thanks to the marketing expertise of ARIS360 . Lisa was grateful for the team's support throughout the process and was thrilled with the final outcome. --}}
                                                {!! $page[35]['content'] !!}
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

    <section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
        <div class="container">

            <div class="in-why-choose-content-2">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="in-section-title-2 headline wow fadeInLeft animated" data-wow-delay="200ms"
                            data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">

                            <h2>ARIS360 FAQs</h2>
                        </div>

                        <div class="in-why-choose-img-text">
                            <div class="in-why-choose-img-area">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp animated" data-wow-delay="400ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                        <div class="in-why-choose-img">
                                            <img class="lazy" data-src="public/assets/images/wc2.jpg" alt="">
                                        </div>

                                    </div>
                                    <div class="col-md-6 wow fadeInUp animated" data-wow-delay="500ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
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
                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated"
                                    data-wow-delay="200ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="headingOne2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            {{-- How much will I earn if I sell my property? --}}
                                            {!! $page[36]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseOne2" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionExample2" style="">
                                        <div class="accordion-body">
                                            {{-- Interest rate that borrowers pay on their home loans. In the USA, mortgage rates can vary depending on the lender, loan term, credit score, and other factors. --}}
                                            {!! $page[37]['content'] !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated"
                                    data-wow-delay="400ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="headingTwo22">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            {{-- Does any one want to buy my house? --}}
                                            {!! $page[38]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- Mortgage rates are influenced by several factors, including the state of the economy, inflation rates, government policies, and the demand for housing. --}}
                                            {!! $page[39]['content'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated"
                                    data-wow-delay="600ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="headingThree2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree2">
                                            {{-- Is there any Safety for the Payment Process for Selling my Property? --}}
                                            {!! $page[40]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseThree2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- The choice between a fixed or adjustable mortgage rate depends on the borrower's financial situation and goals. --}}
                                            {!! $page[41]['content'] !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    {{-- <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script> --}}

    <script type="text/javascript">
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

            $("body").on('click', '.favNotLoggedIn', (function(e) {
                window.location.href = sturl + '/login';
            }));

            $("body").on('click', '.shrNotLoggedIn', (function(e) {
                window.location.href = sturl + '/login';
            }));

            var global_data = {};
        });
    </script>
    <script>
        var search6 = document.getElementById('sellSearch');

        function codeAddress2() {

            var geocoder, map, address;
            var address = search6.value;
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
                }
            });
        }
    </script>
    {{-- <script>
        function initialize() {
            initAutocomplete();
        }


        var autocomplete;

        var search6 = document.getElementById('sellSearch');



        function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search6), {
                    types: ['geocode']
            });
        }

        </script> --}}
    <script>
        const buttons = document.querySelectorAll(".faq-toggle");
        buttons.forEach((button) => {
            button.addEventListener("click", () =>
                button.parentElement.classList.toggle("active")
            );
        });
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
