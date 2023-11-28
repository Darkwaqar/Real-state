@extends('properties.layouts.main')
@php
    $metaTitle = 'Washington Mortgage Rates | Mortgage Rates in Washington';
    $metaDescription = "Stay informed about the latest mortgage rates in Washington.
    Discover competitive rates and find the perfect mortgage for your dream home in Washington.
     Whether you're a first-time buyer or looking to refinance, our comprehensive information on
      Washington mortgage rates will help you make sound financial decisions.
       Explore the current rates and secure the best mortgage option for your needs in Washington today.";
@endphp

<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>
@section('content')
    <section class="mortgage-calc-sect1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mortgage-sec1-banner">
                        <p class="title">
                            {{-- Mortgage Rates --}}
                            {!! $page[0]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Determine from a variety of options for costs of acquiring financing today --}}
                            {!! $page[1]['content'] !!}
                        </p>
                        <div class="in-sidebar-widget">
                            <div class="search-widget">
                                <p class="mb-2 text-left">
                                    {{-- Where are you buying or financing? --}}
                                    {!! $page[2]['content'] !!}
                                </p>
                                <form action="{{ route('mortgage-rate-list') }}" method="GET">
                                    <input type="text" id="agentSearch" placeholder="Search..." onkeyup="codeAddress()"
                                        onfocusout="codeAddress()" required>
                                    <input type="hidden" name="search" id="locality">
                                    <button type="submit" class="search-icon fas fa-search"> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start of Service section
                             ============================================= -->
    <section id="in-service-2" class="in-service-section-2 position-relative">
        <span class="in-service-bg position-absolute"><img class="lazy" data-src="assets/img/bg/ser-bg1.png"
                alt=""></span>
        <div class="container">
            <div class="row in-service-top-content">
                <div class="col-lg-6 col-md-6 col-12 in-service-title-text wow fadeInLeft" data-wow-delay="200ms"
                    data-wow-duration="1000ms">
                    <div class="in-section-title-2 headline">

                        <h2>
                            {{-- BASIC INFORMATION --}}
                            {!! $page[3]['content'] !!}
                        </h2>
                    </div>
                    <div class="in-service-title-desc">
                        <p>
                            {{-- We are committed to helping you make the best decision when it comes to your mortgage. You can find up-to-date information on mortgage rates from various lenders across the country with ARIS360 .<br/><br/>Update your self with changes in today’s mortgage rates --}}
                            {!! $page[4]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 in-service-title-img wow fadeInRight" data-wow-delay="300ms"
                    data-wow-duration="1000ms">
                    <img class="lazy" data-src="public/assets/images/ser-title.jpg" alt="">
                </div>
            </div>
            <div class="in-benefit-feature mortgageratebox" data-wow-delay="500ms" data-wow-duration="1000ms">
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <div class="in-benefit-feature-item position-relative">
                                <span class="serial position-absolute">01</span>
                                <div class="inner-icon bck-none">
                                    <i class="fal fa-file-alt"></i>
                                </div>
                                <div class="inner-text headline">
                                    <h3>
                                        {{-- Provide Your Information --}}
                                        {!! $page[5]['content'] !!}
                                    </h3>
                                    <p>
                                        {{-- Start Your Home Buying Journey Today. --}}
                                        {!! $page[6]['content'] !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <div class="in-benefit-feature-item position-relative">
                                <span class="serial position-absolute">02</span>
                                <div class="inner-icon bck-none">
                                    <i class="fal fa-quote-right"></i>
                                </div>
                                <div class="inner-text headline">
                                    <h3>
                                        {{-- Analyze Personalized Rates --}}
                                        {!! $page[7]['content'] !!}
                                    </h3>
                                    <p>
                                        {{-- Find the Best Financing Option for You. --}}
                                        {!! $page[8]['content'] !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <div class="in-benefit-feature-item position-relative">
                                <span class="serial position-absolute">03</span>
                                <div class="inner-icon bck-none">
                                    <i class="fal fa-users"></i>
                                </div>
                                <div class="inner-text headline">
                                    <h3>
                                        {{-- Approach the Best Lenders --}}
                                        {!! $page[9]['content'] !!}
                                    </h3>
                                    <p>
                                        {{-- Secure Your Dream Home with Aris360's Network of Top Lenders. --}}
                                        {!! $page[10]['content'] !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="in-service-more-btn text-center pera-content wow fadeInUp" data-wow-delay="600ms"
                data-wow-duration="1000ms">
                <p>Determine from a variety of options for costs of acquiring financing today!</p>
            </div>
        </div>
    </section>
    <!-- End of service section
                             ============================================= -->




    <section class="agent-sect2 mortgage-sec-chose">
        <div class="container">
            <div class="why-choose-us">
                <p class="mort-genhead">
                    {{-- Why Choose ARIS360  --}}
                    {!! $page[11]['content'] !!}
                </p>
                <p class="mort-para mb-3">
                    {{-- Discover the benefits of choosing ARIS360  --}}
                    {!! $page[12]['content'] !!}
                </p>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img class="lazy" data-src="public/assets/images/loanicon4.png">
                        </div>
                        <p class="title2">
                            {{-- Authorized Agents --}}
                            {!! $page[13]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Trusted representation for smooth real estate transactions: The value of working with an authorized agent on our plaform. --}}
                            {!! $page[14]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="why-choose-us-innercontent">
                        <div>
                            <img class="lazy" data-src="public/assets/images/loanicon2.png">
                        </div>
                        <p class="title2">
                            {{-- Optimum Profitability --}}
                            {!! $page[15]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Maximizing profit potential: How our real estate platform helps you achieve optimum returns on your investment. --}}
                            {!! $page[16]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="why-choose-us-innercontent mb-3">
                        <div>
                            <img class="lazy" data-src="public/assets/images/loanicon1.png">
                        </div>
                        <p class="title2">
                            {{-- Exclusive Property Listings --}}
                            {!! $page[17]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Accessing the best properties on the market: Our real estate platform's exclusive listings. --}}
                            {!! $page[18]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="why-choose-us-innercontent mb-3">
                        <div>
                            <img class="lazy" data-src="public/assets/images/loanicon3.png">
                        </div>
                        <p class="title2">
                            {{-- Swift User Experience --}}
                            {!! $page[19]['content'] !!}
                        </p>
                        <p class="para">
                            {{-- Effortless and expedient: Streamlining your real estate journey with our platform's swift and user-friendly experience. --}}
                            {!! $page[20]['content'] !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--mortgage-made-easy-start-->

    <section class="mortgage-madesec1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="heading-text heading-section">
                        <p class="mortgage-genheading">
                            {{-- Mortgages <br> made easy --}}
                            {!! $page[21]['content'] !!}
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <p class="mortgage-gentext">
                        {{-- Are you a prospective home buyer who is struggling to meet the eligibility criteria for the first time? Are you seeking assistance for down payment or concerned about interest rates? Do you need to sell your existing home before purchasing a new one? --}}
                        {!! $page[22]['content'] !!}
                    </p>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <p class="mortgage-gentext">
                        {{-- Explore various options that can save your time and money and make the home loan process smoother. Discover solutions that can alleviate stress and help you obtain a feasible home loan. --}}
                        {!! $page[23]['content'] !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--mortgage-made-easy-end-->


    <section class="agent-resource-center-sec3 why_choose_boxesSec mortgage-loansec">
        <div class="auto-container">
            <div class="resource-center-titleSec renowed-sec  profit-gen-sec">
                <p class="title profit-gentext">
                    {{-- Types of mortgages for homebuyers --}}
                    {!! $page[24]['content'] !!}
                </p>
                <p>
                    {{-- A new home may be one of the biggest purchases you’ll make in your life --}}
                    {!! $page[25]['content'] !!}

                </p>
            </div>
            <div class="">
                <p class="stand-text">
                    {{-- Standard Mortgage Documentation Categories: --}}
                    {!! $page[26]['content'] !!}
                </p>
            </div>

            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <p class="title2">
                                {{-- FHA --}}
                                {!! $page[29]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Experience Flexible Financing Options with Aris360's FHA Standard Mortgage Documentation Home Loan --}}
                                {!! $page[30]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <p class="title2">
                                {{-- VA --}}
                                {!! $page[31]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Serve Your Country, Secure Your Home with Aris360's VA Standard Mortgage Documentation Home Loan --}}
                                {!! $page[32]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <p class="title2">
                                {{-- Home Possible Mortgage --}}
                                {!! $page[33]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Homeownership with Aris360's Home Possible Standard Mortgage Documentation Loan --}}
                                {!! $page[34]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <p class="title2">
                                {{-- Standard Full Documentation --}}
                                {!! $page[27]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Unlock the Door to Your Dream Home with Aris360's Standard Full Documentation Home Loan --}}
                                {!! $page[28]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="agent-articaleBox agentarticleboxpd">
                            <p class="title2">
                                {{-- Remove Hard Money --}}
                                {!! $page[35]['content'] !!}
                            </p>
                            <p class="para">
                                {{-- Get Rid of High Interest Rates with Aris360's Remove Hard Money Standard Mortgage Documentation Loan --}}
                                {!! $page[36]['content'] !!}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Add more items as needed -->
            </div>

            <!-- owl-carosuel-start -->
            <div class="">
                <p class="stand-text">
                    {{-- Alternative Document Products --}}
                    {!! $page[37]['content'] !!}
                </p>


                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="item p-2">
                        <div class="custom_row_homeworth">
                            <div class="agent-articaleBox agentarticleboxpd">
                                <p class="title2">
                                    {{-- P&L & Balance Sheet Loan --}}
                                    {!! $page[38]['content'] !!}
                                </p>
                                <p class="para">
                                    {{-- Unlock More Opportunities: P&L & Balance Sheet Loan Options for Real Estate Financing --}}
                                    {!! $page[39]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="custom_row_homeworth">
                            <div class="agent-articaleBox agentarticleboxpd">
                                <p class="title2">
                                    {{-- Bridge Loan --}}
                                    {!! $page[40]['content'] !!}
                                </p>
                                <p class="para">
                                    {{-- A type of short-term loan that provides financing until a more permanent financing solution is secured. --}}
                                    {!! $page[41]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="custom_row_homeworth">
                            <div class="agent-articaleBox agentarticleboxpd">
                                <p class="title2">
                                    {{-- Hard Money Loan --}}
                                    {!! $page[42]['content'] !!}
                                </p>
                                <p class="para">
                                    {{-- A type of real estate financing that is secured by the property being purchased, rather than the borrower's creditworthiness or ability to repay the loan. --}}
                                    {!! $page[43]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="custom_row_homeworth">
                            <div class="agent-articaleBox agentarticleboxpd">
                                <p class="title2">
                                    {{-- Bank Statement Loan --}}
                                    {!! $page[44]['content'] !!}
                                </p>
                                <p class="para">
                                    {{-- A type of mortgage that allows borrowers to qualify based on their bank statement records. --}}
                                    {!! $page[45]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item p-2">
                        <div class="custom_row_homeworth">
                            <div class="agent-articaleBox agentarticleboxpd">
                                <p class="title2">
                                    {{-- No Ratio --}}
                                    {!! $page[46]['content'] !!}
                                </p>
                                <p class="para">
                                    {{-- No Ratio Loans are a type of mortgage that do not take into account the borrower's debt-to-income ratio. --}}
                                    {!! $page[47]['content'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more items as needed -->

                    <!--<div class="swiper-pagination"></div>-->
                </div>
            </div>
            <!-- owl-carousel-end -->
            <!-- owl-carosuel-start -->

        </div>
    </section>

    <!-- Start of CTA section
                             ============================================= -->
    <section id="in-cta-2" class="in-cta-section-2">
        <div class="jarallax  position-relative" data-background="assets/img/bg/cta2.jpg">
            <div class="container">
                <div class="in-cta-content-2 position-relative ">
                    <div class="in-cta-text-btn-group finance-banner wow fadeInUp" data-wow-delay="400ms"
                        data-wow-duration="1000ms">
                        <div class="in-section-title-2 headline text-center">
                            <h2 class="mortgage-genheading">
                                {{-- Begin Your Financing Today --}}
                                {!! $page[48]['content'] !!}
                            </h2>
                            <p class="mortgage-gentext">
                                {{-- At our mortgage service, we prioritize convenience. With excellent rates, swift and flexible closing times tailored to your schedule, and exceptional customer service, we strive to make the mortgage process as effortless as possible. Interested in applying? --}}
                                {!! $page[49]['content'] !!}
                            </p>
                        </div>
                        <div class="in-cta-btn-grp text-center">
                            <div class="in-btn-2 position-relative">
                                <a href="{{ route('agent-about-homeloan') }}" class="theme-btn btn-one">Get Started
                                    Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of CTA section
                             ============================================= -->




    <section class="home-worth-body real-slider-sec1 find-an-agent-slider current-slider">
        <div class="container">
            <div class="title-sec my-2">
                <p class="title my-2 font-36 text-center mb-5">
                    {{-- Read Real Stories From Our Customers --}}
                    {!! $page[50]['content'] !!}
                </p>
            </div>

            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="item p-2">
                    <div class="custom_row_homeworth">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-01.png"
                                        class="image-fluid arisindximg lazy">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- Mark and Jenny: First-Time Homebuyers --}}
                                                {!! $page[51]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Sarah had always rented apartments, but she finally decided it was time to invest in a home of budget and needs.<br/><br/> Mark and Jenny are a young couple who were looking to buy their first home. They were worried about the mortgage process and finding the right lender, but with the help of their ARIS360 agent, they were able to secure a great mortgage rate that fit their budget. Their agent was with them every step of the way, providing support and guidance, and they were able to close on their dream home in record time. --}}
                                                {!! $page[52]['content'] !!}
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
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-02.png"
                                        class="image-fluid arisindximg lazy">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- Mike and Lisa: Upgrading to a Larger Home --}}
                                                {!! $page[53]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Mike and Lisa had outgrown their current home and were ready to upgrade to a larger property. They were concerned about the cost of a larger mortgage, but their ARIS360 agent helped them find a great rate that fit their needs. With their agent's expertise, they were able to secure a mortgage that allowed them to buy the home of their dreams without breaking the bank. --}}
                                                {!! $page[54]['content'] !!}
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
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-03.png"
                                        class="image-fluid arisindximg lazy">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- David and Sarah: Refinancing Their Mortgage --}}
                                                {!! $page[55]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- David and Sarah had been in their home for several years and were interested in refinancing their mortgage to take advantage of lower interest rates. They turned to ARIS360 for help, and their agent was able to guide them through the refinancing process and secure them a fantastic rate that lowered their monthly payments significantly. With the help of their ARIS360 agent, they were able to save money and achieve their financial goals. --}}
                                                {!! $page[56]['content'] !!}

                                            </p>

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
                                            <img class='lazy' data-src="public/assets/images/wc2.jpg" alt="">
                                        </div>

                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
                                        <div class="in-why-choose-img">
                                            <img class='lazy' data-src="public/assets/images/wc3.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="react_to_us">
                                    <a href="{{ route('contact') }}">For Any Queries Further, please reach out to us!
                                        <i class="fas fa-phone"></i></a>
                                </div>
                            </div>
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
                                            {{-- What are mortgage rates in the USA? --}}
                                            {!! $page[57]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseOne2" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- Interest rate that borrowers pay on their home loans. In the USA, mortgage rates can vary depending on the lender, loan term, credit score, and other factors. --}}
                                            {!! $page[58]['content'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            {{-- How are mortgage rates determined in the USA? --}}
                                            {!! $page[59]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- Mortgage rates are influenced by several factors, including the state of the economy, inflation rates, government policies, and the demand for housing. --}}
                                            {!! $page[60]['content'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingThree2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree2">
                                            {{-- Should I choose a fixed or adjustable mortgage rate? --}}
                                            {!! $page[61]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseThree2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {{-- The choice between a fixed or adjustable mortgage rate depends on the borrower's financial situation and goals. --}}
                                            {!! $page[62]['content'] !!}
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
    {{-- <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"
        defer></script> --}}

    {{-- <script>
        function initialize() {
            initAutocomplete();
        }


        var autocomplete;

        var search6 = document.getElementById('agentSearch');



        function initAutocomplete() {


            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search6), {
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

                    // $('#locality').val(results[0].address_components[4].long_name);
                    // $('#administrative_area_level_1').val();
                }
            });
        }

    //     const swiper = new Swiper('.sample-slider', {
    //     loop: true,
    //     speed: 2000,
    //     slidesPerView: 3,
    //     autoplay: {
    //         delay: 0,
    //     },
    // })

    </script> --}}
    <!-- End of  Why Choose section
                             ============================================= -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
        if ($('.three-item-carousel').length) {

            $('.three-item-carousel').owlCarousel({

                loop: true,

                margin: 30,

                nav: true,

                smartSpeed: 1000,

                autoplay: 500,

                navText: ['<span class="far fa-angle-left"></span>', '<span class="far fa-angle-right"></span>'],

                responsive: {

                    0: {

                        items: 1

                    },

                    480: {

                        items: 1

                    },

                    600: {

                        items: 2

                    },

                    800: {

                        items: 2

                    },

                    1024: {

                        items: 3

                    }

                }

            });

        }
    </script>
@endsection
