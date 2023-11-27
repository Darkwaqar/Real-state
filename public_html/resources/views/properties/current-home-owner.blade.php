@php
    $metaTitle = 'Current Home Owner | Owner Of A Home';
    $metaDescription = 'As a current homeowner, stay informed and empowered with our resources tailored for owners of a home. Discover tips, advice, and insights to enhance your homeownership experience.';
@endphp

<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')
    <section class="home-ownersec1 agent-sect1">
        <div class="container">
            <div class="sell-home-bannerSec mb-4">
                <h1 class="mb-3">
                    {{-- Current Homeowner --}}
                    {!! $page[0]['content'] !!}
                </h1>
                <h5 class="mt-2 text-light">
                    {{-- You have done this before, Now experience it the ARIS360 way --}}
                    {!! $page[1]['content'] !!}
                </h5>
            </div>
        </div>
    </section>
    <section class="home-ownersec2">
        <div class="container">
            <!--<div class="banner-boxwrap">-->
            <!--    <div class="banner-headwrap">-->
            <!--        <p class="gen-heading">You’ve done it once <br> Let us help you do it again.</p>-->
            <!--    </div>-->
            <!--    <div class="banner-textwrapper">-->
            <!--        <p class="gen-text">As a current homeowner, there are a lot of things you need to know when it comes to your current house and the loan that goes with it. Have no fear. We’re here to help you navigate the unknown.</p>-->
            <!--    </div>-->
            <!--</div>-->
            <div class="ownersec2-bannercard banner-img">
                <div class="row">
                    <div class="col-12 col-md-3 col-lg-3 col-lg-3">
                        <a href="#data1">
                            <div class="bannercardwrap">
                                <div class="banner-imagewrap">
                                    <img data-src="public/assets/images/box58.png" class="img-fluid ownerimg mb-4 lazy"
                                        alt="">
                                </div>
                                <div class="ownercardtext">
                                    <p class="gen-text">Mortgage</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-lg-3">
                        <a href="#data2">
                            <div class="bannercardwrap">
                                <div class="banner-imagewrap">
                                    <img data-src="public/assets/images/box57.png" class="img-fluid ownerimg mb-4 lazy"
                                        alt="">
                                </div>
                                <div class="ownercardtext">
                                    <p class="gen-text">Refinance</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-lg-3">
                        <a href="#data3">
                            <div class="bannercardwrap">
                                <div class="banner-imagewrap">
                                    <img data-src="public/assets/images/box55.png" class="img-fluid ownerimg mb-4 lazy"
                                        alt="">
                                </div>
                                <div class="ownercardtext">
                                    <p class="gen-text">More-Than-One Mortgage</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-lg-3">
                        <a href="#data4">
                            <div class="bannercardwrap">
                                <div class="banner-imagewrap">
                                    <img data-src="public/assets/images/box56.png" class="img-fluid ownerimg mb-4 lazy"
                                        alt="">
                                </div>
                                <div class="ownercardtext">
                                    <p class="gen-text">Reverse Mortgage</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-ownersec3" id="data1">
        <div class="container">
            <div style="flex-wrap: wrap-reverse" class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerleftwrap">
                        <div class="banner-headwrap">
                            <p class="gen-heading">
                                {{-- Mortgage --}}
                                {!! $page[2]['content'] !!}
                            </p>
                        </div>
                        <div class="ownersec3-text">
                            <p class="gen-text mb-4">
                                {{-- Purchasing a home constitutes a significant financial commitment. Unless you possess ample liquid funds, you'll probably require a home loan to turn your dream into reality. Hence, allow us to assist you in exploring various home mortgage loan options and identifying the one that suits your needs perfectly. --}}
                                {!! $page[3]['content'] !!}
                            </p>
                        </div>
                    </div>
                    <!--<div class="btn-box">-->
                    <!--    <a href="#!" target="_blank" class="theme-btn btn-one bnn-thr">Learn More</a>-->
                    <!--</div>-->
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerrightwrap">
                        <img data-src="public/assets/images/box58.png" class="lazy img-fluid ownsersce3right mb-4"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-ownersec5" id="data2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerrightwrap">
                        <img data-src="public/assets/images/box57.png" class="lazy img-fluid ownsersce3right mb-4"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerleftwrap">
                        <div class="banner-headwrap">
                            <p class="gen-heading">
                                {{-- Refinance --}}
                                {!! $page[4]['content'] !!}
                            </p>
                        </div>
                        <div class="ownersec3-text">
                            <p class="gen-text mb-4">
                                {{-- With a home remortgage, you can modify the terms of your existing debt contract by replacing it with a new one. This option provides you with the opportunity to benefit from a more favorable interest rate or combine other debts. By remortgaging your home, you can significantly reduce your monthly payments or obtain extra funds. --}}
                                {!! $page[5]['content'] !!}
                            </p>
                        </div>
                    </div>
                    <!-- <div class="btn-box">-->
                    <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="home-ownersec3 home-ownersec6" id="data3">
        <div class="container">
            <div style="flex-wrap: wrap-reverse" class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerleftwrap">
                        <div class="banner-headwrap">
                            <p class="gen-heading">
                                {{-- More-Than-One Mortgage --}}
                                {!! $page[6]['content'] !!}
                            </p>
                        </div>
                        <div class="ownersec3-text">
                            <p class="gen-text mb-4">
                                {{-- It is important to note that purchasing a second home entails just as many obstacles as your first-time experience. Since nobody is an expert in their second attempt, our goal is to guide you through the process of buying a second home and provide assistance on all the aspects you need to consider while securing a mortgage for your second property. --}}
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
                        <img data-src="public/assets/images/box55.png" class="lazy img-fluid ownsersce3right mb-4"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="home-ownersec7"></section>-->
    <section class="home-ownersec5 home-ownersec8" id="data4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerrightwrap">
                        <img data-src="public/assets/images/box56.png" class="lazy img-fluid ownsersce3right mb-4"
                            alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerleftwrap">
                        <div class="banner-headwrap">
                            <p class="gen-heading">
                                {{-- Reverse Mortgage --}}
                                {!! $page[8]['content'] !!}
                            </p>
                        </div>
                        <div class="ownersec3-text">
                            <p class="gen-text mb-4">
                                {{-- If you are a homeowner aged 62 or above, a reverse mortgage loan allows you to convert the equity of your property into cash. We can guide you through the process of unlocking the value of your home and help you explore the various reverse mortgage options such as receiving a one-time sum, establishing a line of credit, or other alternatives available. --}}
                                {!! $page[9]['content'] !!}
                            </p>
                        </div>
                    </div>
                    <!-- <div class="btn-box">-->
                    <!--    <a href="#!" target="_blank" class="theme-btn btn-one btn-thr">Learn More</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="home-ownersec3 home-ownersec9">
        <div class="container">
            <div style="flex-wrap: wrap-reverse" class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="home-ownerleftwrap">
                        <div class="banner-headwrap">
                            <p class="gen-heading">
                                {{-- Seeking a Loan Officer --}}
                                {!! $page[10]['content'] !!}
                            </p>
                        </div>
                        <div class="ownersec3-text">
                            <p class="gen-text mb-4">
                                {{-- If you're a current homeowner seeking mortgage options for your property, it can be challenging to navigate the complex landscape of mortgage loans and lending institutions. A loan officer can provide invaluable assistance by guiding you through the process of securing a loan that meets your specific needs and financial situation. They can help you explore various options, including remortgaging, home equity loans, or reverse mortgages, and assist you in choosing the best course of action to achieve your goals. With their expertise and knowledge of the real estate market, a loan officer can help you make informed decisions and streamline the loan application process, making your experience stress-free and successful. --}}
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
                        <img data-src="public/assets/images/loanofficer.png" class="lazy img-fluid ownsersce3right mb-4"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-worth-body real-slider-sec1 find-an-agent-slider current-slider">
        <div class="container">
            <div class="title-sec my-2">
                <p class="title my-2 font-36 text-center mb-5">
                    {{-- Read Real Stories From Our Customers --}}
                    {!! $page[12]['content'] !!}
                </p>
            </div>


            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="item p-2">
                    <div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-01.png"
                                        class="lazy image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The First-Time Homeowner --}}
                                                {!! $page[13]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Sarah had always rented apartments, but she finally decided it was time to invest in a home of her own. She worked with ARIS360  to find a starter home that fit her budget and needs.<br/><br/>With the help of her agent, Sarah secured financing through an FHA loan and was able to purchase her first home.<br/><br/>The agent provided guidance throughout the process and helped Sarah navigate the complexities of home ownership.<br/><br/>Now, Sarah is enjoying the benefits of owning her own home and building equity for her future. --}}
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
                    <div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-02.png"
                                        class="lazy image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The Luxury Homeowner --}}
                                                {!! $page[15]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Chris and his wife had always dreamed of owning a luxury home, and they finally found the perfect property with the help of ARIS360 .<br/><br/>Their agent showed them several properties that fit their criteria and negotiated a great deal on their dream home.<br/><br/>The agent also helped them secure financing through a jumbo loan, which is specifically designed for high-end properties.<br/><br/>Now, Chris and his family are enjoying the luxurious features of their home, including a swimming pool, home theater, and spacious living areas. --}}
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
                    <div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories-03.png"
                                        class="lazy image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">
                                                {{-- The DIY Homeowner --}}
                                                {!! $page[17]['content'] !!}
                                            </p>
                                            <p class="gen-text slider-gen-text mb-2">
                                                {{-- Mark was a DIY enthusiast and loved the challenge of fixing up homes. He purchased a fixer-upper with the help of ARIS360  and worked on renovating the home himself.<br/><br/>His agent provided guidance on what features to look for in a home that needed some work and helped him secure a renovation loan to finance the improvements.<br/><br/>With Mark's hard work and dedication, the home was transformed into a beautiful and modern living space.<br/><br/>Today, Mark is proud to call the home his own and enjoys the satisfaction of knowing he did the work himself. --}}
                                                {!! $page[18]['content'] !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <br><br>


        </div>
    </section>
@endsection
