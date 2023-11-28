@php
    $metaTitle = 'First Time Home Buyer Loan | First Time Home Buyers';
    $metaDescription = 'Explore first-time homebuyer loans and programs designed to help first-time buyers achieve their homeownership dreams. Find valuable resources and expert guidance for first-time homebuyers.';
@endphp
@extends('properties.layouts.main')
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@section('content')
    <section class="first_time_homebuying_sect1">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="sell-home-bannerSec">
                    <h1>
                        {{-- First Time Home Buyer --}}
                        {!! $page[0]['content'] !!}
                    </h1>
                    <h6>
                        {{-- Open the Door to Your First Home --}}
                        {!! $page[1]['content'] !!}
                    </h6>
                </div>
            @endif
        </div>
    </section>


    <section class="home-ownersec2 first-sec2">
        <div class="container">
            <div class="ownersec2-bannercard">
                @if (isset($page[0]['content']))
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="home-ownerleftwrap">
                                <div class="banner-headwrap">
                                    <p class="gen-heading">
                                        {{-- Steps For A First Time Home Buyer --}}
                                        {!! $page[2]['content'] !!}
                                    </p>
                                </div>
                                <div class="ownersec3-text">
                                    <p class="gen-text mb-4">
                                        {{-- From Dreaming to Owning: A Comprehensive Guide to the Home Buying Process for First-Time Buyers --}}
                                        {!! $page[3]['content'] !!}
                                    </p>
                                </div>
                            </div>
                            <!--<div class="btn-box text-center">-->
                            <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Get started</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="home-ownersec3">
        <div class="container">
            @if (isset($page[0]['content']))
                <div style="flex-wrap: wrap-reverse" class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">Step one</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading">
                                    {{-- Determine Your Financial Capacity --}}
                                    {!! $page[4]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-4">
                                    {{-- The most pragmatic of all the first-time homebuyer tips is establishing your budget. Every property is uniquely priced, so when buying your first home, use our affordability calculator to refine your search by knowing what you can afford from the start. --}}
                                    {!! $page[5]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step8.png"
                                class="img-fluid ownsersce3right sizestepone mb-4 lazy" alt="">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="home-ownersec3 home-ownersec6">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step2.png" class="img-fluid ownsersce3right mb-4 lazy"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">Step two</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading">
                                    {{-- Aquire Pre-Approval For Your Mortgage --}}
                                    {!! $page[6]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-3">
                                    {{-- It’s important to find a loan officer who can get you preapproved for your budgeted amount. You can then begin your search for your dream home knowing what you can afford. Sellers like buyers who are preapproved.<br/><br/>Though the process is pretty straightforward, it does require that you gather documents such as identifications, bank statements, plus income and asset statements. --}}
                                    {!! $page[7]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="home-ownersec3">
        <div class="container">
            @if (isset($page[0]['content']))
                <div style="flex-wrap: wrap-reverse" class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">Step three</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading text-capitalize">
                                    {{-- Research properties and real estate agents --}}
                                    {!! $page[8]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-4">
                                    {{-- Let the house hunting begin, but don’t go it alone. Partnering with the right realtor—one who understands your wants and can start researching right alongside you can make a major difference in your home-buying experience and quality of home you end up in. --}}
                                    {!! $page[9]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step3.png" class="img-fluid ownsersce3right mb-4 lazy"
                                alt="">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="home-ownersec3 home-ownersec6">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step4.png" class="img-fluid ownsersce3right mb-4 lazy"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">STEP FOUR</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading text-capitalize">
                                    {{-- Apply an offer for the relevant property --}}
                                    {!! $page[10]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-3">
                                    {{-- Once your research and realtor have helped identify the home that’s just right for you, it’s time to put your preapproval to work; it’s time to make an official offer. Don’t worry, it’s a nervous time for everyone. Take a deep breath, trust your instincts and enjoy the moment. --}}
                                    {!! $page[11]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="home-ownersec3">
        <div class="container">
            @if (isset($page[0]['content']))
                <div style="flex-wrap: wrap-reverse" class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">Step five</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading  text-capitalize">
                                    {{-- Choose your loan scheme --}}
                                    {!! $page[12]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-4">
                                    {{-- You’ve found your home—now it’s time to turn your preapproval into an offer. Keep in mind, there are many first-time homebuyer programs to choose from, so you’ll want to work closely with your loan officer to find the program that’s best for you. --}}
                                    {!! $page[13]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step5.png" class="img-fluid ownsersce3right mb-4 lazy"
                                alt="">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="home-ownersec3 home-ownersec6">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step6.png" class="img-fluid ownsersce3right mb-4 lazy"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">STEP SIX</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading  text-capitalize">
                                    {{-- Arrange property inspection --}}
                                    {!! $page[14]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-3">
                                    {{-- Buying a house is a long-term investment. And because no home is perfect, you’ll want to hire a professional home inspector to thoroughly evaluate the integrity of the property and to tell you about any potential problems. --}}
                                    {!! $page[15]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="home-ownersec3">
        <div class="container">
            @if (isset($page[0]['content']))
                <div style="flex-wrap: wrap-reverse" class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">STEP SEVEN</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading  text-capitalize">
                                    {{-- Derive home appraisals --}}
                                    {!! $page[16]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-4">
                                    {{-- The lender ultimately needs to determine if the house you’re buying is worth the price you’re paying. To do this, they perform an appraisal of the property to evaluate if the home’s value matches (or exceeds) the amount of the loan.<br/><br/>If it doesn’t, then you’ll need to talk to your loan officer about your options. --}}
                                    {!! $page[17]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step7.png" class="img-fluid ownsersce3right mb-4 lazy"
                                alt="">
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <section class="home-ownersec3 home-ownersec6">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerrightwrap step-images">
                            <img data-src="public/assets/images/step1.png" class="img-fluid ownsersce3right mb-4 lazy"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6">
                        <div class="home-ownerleftwrap">
                            <p class="step-text mb-2">STEP EIGHT</p>
                            <div class="banner-headwrap">
                                <p class="gen-heading  text-capitalize">
                                    {{-- Finalizing paperwork --}}
                                    {!! $page[18]['content'] !!}
                                </p>
                            </div>
                            <div class="ownersec3-text">
                                <p class="gen-text mb-3">
                                    {{-- Assuming the appraisal is favorable, then you’re just a few signatures away from making this house your home. These documents will legally bind you and the seller to the terms, as well as initiate the transferring of funds that makes your first-time homebuyer loan official. Congrats! --}}
                                    {!! $page[19]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>


    <section class="first_time_homebuying_searchfield expert-sec-1">
        <div class="container">
            @if (isset($page[0]['content']))
                <div style="flex-wrap: wrap-reverse" class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="agent-sec1-content-left">
                            <p class="title">
                                {{-- Looking For Advise From An Expert? --}}
                                {!! $page[20]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Our agents are here to help you in every step of the way --}}
                                {!! $page[21]['content'] !!}
                            </p>
                            <div class="row">
                                <div class="col-lg-12 d-flex">
                                    <a href="{{ route('find-an-agent') }}" type="submit" class="theme-btn btn-one">Find
                                        an Agent</a>
                                    <a href="tel:+18339661976" type="submit" class="theme-btn btn-one ml-2"> <i
                                            class="fas fa-solid fa-phone mr-2"></i>
                                        (833)966-197</a>
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


    <section class="sell-home-sect4 card-sec1">
        @if (isset($page[0]['content']))
            <div class="auto-container mb-5">
                <div class="resource-center-titleSec">
                    <p class="title">
                        {{-- Homes Recently Sold With ARIS360 Prime Agent --}}
                        {!! $page[22]['content'] !!}
                    </p>
                    <p class="para">
                        {{-- Schedule A Consultation With One of Our Top-Performing Agents. --}}
                        {!! $page[23]['content'] !!}
                    </p>
                </div>

                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    @forelse ($properties  as $key => $property)
                        <div class="item p-2">
                            <div class="real-estate-agentCard">
                                <span>
                                    <img data-src="{{ isset($property['preffered_media'][0]['id']) ? $property['preffered_media'][0]['s3buckettempurl'] : '' }}"
                                        class="img-fluid lazy" alt="">
                                </span>
                                <span class="agentCard-bottomSect">
                                    <p class="title2">{{ substr($property['PropertyAddress'], 0, 30) . '...' }} </p>
                                    <p class="para">
                                        {{ $property['CityName'] . ', ' . $property['StateOrProvince'] . ' ' . $property['PostalCode'] }}
                                    </p>
                                    <div class="sold-price-sect">
                                        <p class="para">${{ number_format($property['PropetySellPrice']) }}</p>
                                        <a href="{{ route('home.property-detail', ['id' => $property['id']]) }}"
                                            class="deatil_link">detail <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    @empty
                        <p class="sub"> No data found
                        <p>
                    @endforelse
                    <!-- Add more items as needed -->
                </div>
            </div>
        @endif
    </section>


    <section class="buyer_for_every_property2">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="buyer_for_every_property_wrapper text-cent">
                    <div class="buyer_for_every_property_content">
                        <h3>
                            {{-- Need Help To Determine What Price Range You Can Afford? --}}
                            {!! $page[24]['content'] !!}
                        </h3>
                        <p class="paragraph">
                            {{-- Use the calculator to find an estimate of your affordability --}}
                            {!! $page[25]['content'] !!}
                        </p>
                        <div class="btn-box">
                            <a href="{{ route('affordability-calculator') }}" class="theme-btn btn-one">Calculate Now</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="first_time_homebuying_searchfield first_time_homebuying_searchrepeat first-last-sec">
        <div class="container">
            @if (isset($page[0]['content']))
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="appsec1-imagewrapper">
                            <img class="lazy" data-src="public/assets/images/Mortgage-Interest-Rates-Banner.jpg">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="agent-sec1-content-left">
                            <p class="title">
                                {{-- Find the Best Mortgage Rates with Our Network of Lenders --}}
                                {!! $page[26]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Let us help you finance your dream home! --}}
                                {!! $page[27]['content'] !!}
                            </p>
                            <div class="btn-box">
                                <a href="{{ route('mortgage-rates') }}" class="theme-btn btn-one">Mortgage Rates</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>


    <section class="sell-home-sect1">
        @if (isset($page[0]['content']))
            <div class="container">
                <div class="sell-home-bannerSec">
                    <h1>
                        {{-- Ready For Purchasing Your First Home Now?  --}}
                        {!! $page[28]['content'] !!}
                    </h1>
                    <p>
                        {{-- Search for homes in your preferred area. --}}
                        {!! $page[29]['content'] !!}
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
    <section id="in-why-choose-2" class="in-why-choose-section-2 faq-secs" data-background="assets/img/bg/wc-bg.jpg">
        <div class="container">

            <div class="in-why-choose-content-2">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="in-section-title-2 headline wow fadeInLeft animated animated" data-wow-delay="200ms"
                            data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                            <h2>ARIS360 FAQs</h2>
                        </div>

                        <div class="in-why-choose-img-text">
                            <div class="in-why-choose-img-area">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp animated animated" data-wow-delay="400ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                        <div class="in-why-choose-img">
                                            <img class="lazy" data-src="public/assets/images/wc2.jpg" alt="">
                                        </div>
                                        <!--<div class="in-why-choose-text-wrap">-->
                                        <!--	<div class="in-why-choose-text d-flex align-items-center">-->
                                        <!--		<div class="inner-icon">-->
                                        <!--			<i class="fas fa-arrow-alt-to-right"></i>-->
                                        <!--		</div>-->
                                        <!--		<div class="inner-text">-->
                                        <!--			Strategy &amp; Planning-->
                                        <!--		</div>-->
                                        <!--	</div>-->
                                        <!--	<div class="in-why-choose-text d-flex align-items-center">-->
                                        <!--		<div class="inner-icon">-->
                                        <!--			<i class="fas fa-arrow-alt-to-right"></i>-->
                                        <!--		</div>-->
                                        <!--		<div class="inner-text">-->
                                        <!--			Audit &amp; Evaluation-->
                                        <!--		</div>-->
                                        <!--	</div> -->
                                        <!--</div>-->
                                    </div>
                                    <div class="col-md-6 wow fadeInUp animated animated" data-wow-delay="500ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="in-why-choose-img">
                                            <img class="lazy" data-src="public/assets/images/wc3.jpg" alt="">
                                        </div>
                                        <!--<div class="in-why-choose-text-wrap">-->
                                        <!--	<div class="in-why-choose-text d-flex align-items-center">-->
                                        <!--		<div class="inner-icon">-->
                                        <!--			<i class="fas fa-arrow-alt-to-right"></i>-->
                                        <!--		</div>-->
                                        <!--		<div class="inner-text">-->
                                        <!--			Finance Services-->
                                        <!--		</div>-->
                                        <!--	</div>-->
                                        <!--	<div class="in-why-choose-text d-flex align-items-center">-->
                                        <!--		<div class="inner-icon">-->
                                        <!--			<i class="fas fa-arrow-alt-to-right"></i>-->
                                        <!--		</div>-->
                                        <!--		<div class="inner-text">-->
                                        <!--			Consumer Markets-->
                                        <!--		</div>-->
                                        <!--	</div>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                            <!--<div class="in-btn-2 position-relative wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInUp;">-->
                            <!--	<a href="#" class="theme-btn btn-one">Get Started Now</a>-->
                            <!--</div>-->
                        </div>

                        <div class="react_to_us">
                            <a href="{{ route('contact') }}">For Any Queries Further, please reach out to us! <i
                                    class="fas fa-phone"></i></a>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="in-why-choose-faq">
                            <div class="accordion" id="accordionExample2">
                                @if (isset($page[0]['content']))
                                    <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated"
                                        data-wow-delay="200ms" data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                        <h2 class="accordion-header" id="headingOne2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                {{-- What is the process of buying a home for the first time? --}}
                                                {!! $page[30]['content'] !!}
                                            </button>
                                        </h2>
                                        <div id="collapseOne2" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne2" data-bs-parent="#accordionExample2"
                                            style="">
                                            <div class="accordion-body">
                                                {{-- Once you find a home you like, make an offer, and negotiate with the seller. Finally, you'll need to close the deal by signing the necessary paperwork and paying the down payment and closing costs. --}}
                                                {!! $page[31]['content'] !!}

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (isset($page[1]['content']))
                                    <!--<div class="accordion-item headline-2 pera-content wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">-->
                                    <!--	<h2 class="accordion-header" id="headingTwo2">-->
                                    <!--		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">-->
                                    <!--			    What is my Home's Price?-->
                                    <!--		</button>-->
                                    <!--	</h2>-->
                                    <!--	<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">-->
                                    <!--		<div class="accordion-body">-->
                                    <!--			Mortgage rates are influenced by several factors, including the state of the economy, inflation rates, government policies, and the demand for housing.-->
                                    <!--		</div>-->
                                    <!--	</div>-->
                                    <!--</div>-->
                                    <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated"
                                        data-wow-delay="400ms" data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                        <h2 class="accordion-header" id="headingTwo22">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                                aria-expanded="false" aria-controls="collapseTwo2">
                                                {{-- What are the benefits of working with a real estate agent as a first-time home buyer? --}}
                                                {!! $page[32]['content'] !!}
                                            </button>
                                        </h2>
                                        <div id="collapseTwo2" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                {{-- An experienced agent can help you navigate the buying process, from helping you determine your budget and find properties that meet your criteria to negotiating with the seller and coordinating the closing. --}}
                                                {!! $page[33]['content'] !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (isset($page[0]['content']))
                                    <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated"
                                        data-wow-delay="600ms" data-wow-duration="1500ms"
                                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                        <h2 class="accordion-header" id="headingThree2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                                aria-expanded="false" aria-controls="collapseThree2">
                                                {{-- What types of mortgage options are available for first-time home buyers? --}}
                                                {!! $page[34]['content'] !!}
                                            </button>
                                        </h2>
                                        <div id="collapseThree2" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                            <div class="accordion-body">
                                                {{-- There are several mortgage options available for first-time home buyers, including FHA loans, VA loans, and conventional loans. --}}
                                                {!! $page[35]['content'] !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!--<div class="accordion-item headline-2 pera-content wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">-->
                                <!--	<h2 class="accordion-header" id="headingThree2">-->
                                <!--		<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">-->
                                <!--			How do I qualify to Sell a home?-->
                                <!--		</button>-->
                                <!--	</h2>-->
                                <!--	<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">-->
                                <!--		<div class="accordion-body">-->
                                <!--			The choice between a fixed or adjustable mortgage rate depends on the borrower's financial situation and goals.-->
                                <!--		</div>-->
                                <!--	</div>-->
                                <!--</div>-->
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

    {{-- <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script> --}}

    {{-- <script>
        function initialize() {
            initAutocomplete();
        }


        var autocomplete;

        var search6 = document.getElementById('sellSearch');



        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.




            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search6), {
                    types: ['geocode']
            });




        }

        </script> --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


@endsection
