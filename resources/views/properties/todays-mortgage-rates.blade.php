@extends('properties.layouts.main')
@php
    $metaTitle = 'Todays Washington Mortgage Rates | Mortgage Rates of Washington Today';
    $metaDescription = "Find the best mortgage rates in Washington today.
     Stay updated with the latest mortgage rates of Washington for your home financing needs.";
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@section('content')

<section class="todays_mortgage_rates_sect1">

    <div class="container">

        <div class="mortgagerate-sec1-banner">

            <h3 class="title">{!! $page[0]['content'];!!}</h3>

            <p class="para">{!! $page[1]['content'];!!}</p>

        </div>

    </div>

</section>

<section class="home-ownersec2 first-sec2">

    <div class="container">

        <div class="ownersec2-bannercard">

          <div class="row">

              <div class="col-12 col-md-12 col-lg-12">

                   <div class="home-ownerleftwrap">

                        <div class="banner-headwrap">

                            <p class="gen-heading">{!! $page[2]['content'];!!}</p>

                        </div>

                            <p class="gen-text mb-4 text-center">{!! $page[3]['content'];!!}</p>

                    </div>

              </div>

          </div>

        </div>

    </div>

</section>

<section class="home-ownersec3">

    <div class="container">

        <div style="flex-wrap: wrap-reverse" class="row align-items-center">

            <div class="col-12 col-md-6 col-lg-6">

                <div class="home-ownerleftwrap">

                    <p class="mortgage-step-text mb-2">01</p>

                    <div class="banner-headwrap">

                        <p class="gen-heading text-capitalize">{!! $page[4]['content'];!!}</p>

                    </div>

                    <div class="ownersec3-text">

                        <p class="gen-text mb-4">{!! $page[5]['content'];!!}</p>

                    </div>

                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-6">

                <div class="home-ownerrightwrap mortgage-step-images">

                    <img data-src="public/assets/images/todays-mortgage-calculator-img4.jpg" class="img-fluid lazy ownsersce3right mb-4" alt="">

                </div>

            </div>

        </div>

    </div>

</section>

<section class="home-ownersec3 home-ownersec6">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-12 col-md-6 col-lg-6">

                <div class="home-ownerrightwrap mortgage-step-images">

                    <img data-src="public/assets/images/todays-mortgage-calculator-img3.jpg" class="img-fluid lazy ownsersce3right mb-4" alt="">

                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-6">

                <div class="home-ownerleftwrap">

                    <p class="mortgage-step-text mb-2">02</p>

                    <div class="banner-headwrap">

                        <p class="gen-heading text-capitalize">{!! $page[6]['content'];!!}</p>

                    </div>

                    <div class="ownersec3-text">

                        <p class="gen-text mb-3">{!! $page[7]['content'];!!}</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="home-ownersec3">

    <div class="container">

        <div style="flex-wrap: wrap-reverse" class="row align-items-center">

            <div class="col-12 col-md-6 col-lg-6">

                <div class="home-ownerleftwrap">

                    <p class="mortgage-step-text mb-2">03</p>

                    <div class="banner-headwrap">

                        <p class="gen-heading text-capitalize">{!! $page[8]['content'];!!}</p>

                    </div>

                    <div class="ownersec3-text">

                        <p class="gen-text mb-3">{!! $page[9]['content'];!!}</p>

                    </div>

                </div>

            </div>

            <div class="col-12 col-md-6 col-lg-6">

                <div class="home-ownerrightwrap mortgage-step-images">

                    <img data-src="public/assets/images/todays-mortgage-calculator-img5.jpg" class="img-fluid lazy ownsersce3right mb-4" alt="">

                </div>

            </div>

        </div>

    </div>

</section>
{{--
<section class="sell-home-sect4 card-sec1">

    <div class="auto-container">

        <div class="resource-center-titleSec">

            <p class="title">{!! $page[10]['content'];!!}</p>

            <p class="para">{!! $page[11]['content'];!!}</p>

        </div>



        <!-- Swiper -->

        <div class="swiper latestMortgagenews">

            <div class="swiper-wrapper">

                @if(isset($homebuyingguide) && count($homebuyingguide) > 0)
                @foreach ($homebuyingguide as $myhbguide)
                <div class="swiper-slide">

                    <div class="for_blog feat_property">

                        <div class="thumb">

                            <a href="{{ url('/present-mortgage-rates/').'/'.$myhbguide['b_slug'] }}">

                                <img class="img-whp lazy" data-src="{{ asset('public/images/blogs/'.$myhbguide['blog_cover']) }}" alt="/assets/images/blog/5.jpg">

                            </a>

                        </div>

                        <div class="details">

                           <div class="tc_content">

                              <h4><a href="{{ url('/present-mortgage-rates/').'/'.$myhbguide['b_slug'] }}">
                                {{ $myhbguide['blog_title'] }}
                            </a></h4>

                              <p>
                                {{Str::limit(strip_tags($myhbguide['b_body']) , 100)}}
                            </p>

                           </div>

                        </div>

                    </div>

                </div>
                @endforeach
                @endif







            </div>

            <div class="swiper-button-next custom_prevnxt">

                <i class="fas fa-chevron-right"></i>

            </div>

            <div class="swiper-button-prev custom_prevnxt">

                <i class="fas fa-chevron-left"></i>

            </div>

            <!--<div class="swiper-pagination"></div>-->

        </div>

    </div>

</section> --}}
    <!-- Start of Why Choose section
	============================================= -->
<section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
    <div class="container">



        <div class="in-why-choose-content-2">

            <div class="row">

                <div class="col-lg-6">



                    <div class="in-section-title-2 headline wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">



                        <h2>ARIS360  FAQs</h2>

                    </div>



                    <div class="in-why-choose-img-text">

                        <div class="in-why-choose-img-area">

                            <div class="row">

                                <div class="col-md-6 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">

                                    <div class="in-why-choose-img">

                                <img data-src="public/assets/images/todays-mortgage-calculator-img1.jpg" class="lazy" alt="">

                                    </div>

                                </div>

                                <div class="col-md-6 wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">

                                    <div class="in-why-choose-img">

                                <img data-src="public/assets/images/todays-mortgage-calculator-img2.jpg" class="lazy" alt="">

                                    </div>

                                </div>

                            </div>

                            <div class="react_to_us">
                                <a href="{{ route('contact') }}">For Any Queries Further, please reach out to us! <i class="fas fa-phone"></i></a>
                            </div>

                        </div>



                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="in-why-choose-faq">

                        <div class="accordion" id="accordionExample2">

                            <div class="accordion-item headline-2 pera-content wow" >

                                <h2 class="accordion-header" id="headingOne2">

                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">

                                        {!! $page[12]['content'];!!}

                                    </button>

                                </h2>

                                <div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">

                                    <div class="accordion-body">

                                        {!! $page[13]['content'];!!}

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item headline-2 pera-content wow">

                                <h2 class="accordion-header" id="headingTwo2">

                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">

                                        {!! $page[14]['content'];!!}

                                    </button>

                                </h2>

                                <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">

                                    <div class="accordion-body">

                                        {!! $page[15]['content'];!!}

                                    </div>

                                </div>

                            </div>

                            <div class="accordion-item headline-2 pera-content wow">

                                <h2 class="accordion-header" id="headingThree2">

                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">

                                    {!! $page[16]['content'];!!}

                                    </button>

                                </h2>

                                <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">

                                    <div class="accordion-body">

                                    {!! $page[17]['content'];!!}

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

<!-- End of  Why Choose section
	============================================= -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

@endsection
