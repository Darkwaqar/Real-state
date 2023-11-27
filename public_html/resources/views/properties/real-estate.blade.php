@php
    $metaTitle = 'Real Estate Washington | Washington Real Estate';
    $metaDescription = "Explore the dynamic world of Washington real estate.
     Find top-notch properties and expert real estate services near you.
      Discover the best Washington real estate opportunities today.";
@endphp

<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')
    <section class="realestate-agent-index1">
        <div class="container">
            <div class="agent-sec1-content-left">
                <p class="title mb-0">{!! $page[0]['content'] !!}</p>
                <p class="para">{!! $page[1]['content'] !!}</p>
            </div>
        </div>
    </section>

    <section class="Prime_agent_section_inner">
        <div class="container">
            <div class="real-estate-topSect">
                <p class="title">{!! $page[2]['content'] !!}</p>
                <p class="para">{!! $page[3]['content'] !!}</p>
                <div class="future-oppertunity-detailSec1">
                    <a href="{{ route('register') }}">Apply</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sell-home-sect4 card-sec1 real-agentsec2">
        <div class="auto-container">
            <div class="resource-center-titleSec">
                <p class="title">{!! $page[4]['content'] !!}</p>
                <p class="para">{!! $page[5]['content'] !!}</p>
            </div>
            <!-- Swiper -->


            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                <div class="item p-2">
                    <div class="real-estate-agentCard">
                        <span class="agentCard-bottomSect">
                            <p class="title2">{!! $page[6]['content'] !!}</p>
                            <p class="para">{!! $page[7]['content'] !!}</p>
                        </span>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="real-estate-agentCard">
                        <span class="agentCard-bottomSect">
                            <p class="title2">{!! $page[8]['content'] !!}</p>
                            <p class="para">{!! $page[9]['content'] !!}</p>
                        </span>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="real-estate-agentCard">
                        <span class="agentCard-bottomSect">
                            <p class="title2">{!! $page[10]['content'] !!}</p>
                            <p class="para">{!! $page[11]['content'] !!}</p>
                        </span>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="real-estate-agentCard">
                        <span class="agentCard-bottomSect">
                            <p class="title2">{!! $page[14]['content'] !!}</p>
                            <p class="para">{!! $page[15]['content'] !!}</p>
                        </span>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="real-estate-agentCard">
                        <span class="agentCard-bottomSect">
                            <p class="title2">{!! $page[12]['content'] !!}</p>
                            <p class="para">{!! $page[13]['content'] !!}</p>
                        </span>
                    </div>
                </div>
                <div class="item p-2">
                    <div class="real-estate-agentCard">
                        <span class="agentCard-bottomSect">
                            <p class="title2">{!! $page[16]['content'] !!}</p>
                            <p class="para">{!! $page[17]['content'] !!}</p>
                        </span>
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>





        </div>
    </section>


    <section class="home-worth-body real-slider-sec1 find-an-agent-slider">
        <div class="container">
            <div class="title-sec my-2">
                <p class="title my-2 font-36 text-center mb-5">
                    {!! $page[18]['content'] !!}
                </p>
            </div>


            <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one pb-5">
                <div class="item p-2">

                    <div class="custom_row_homeworth">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                    <img data-src="public/assets/images/stories18.png" class="lazy image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">{!! $page[19]['content'] !!}</p>
                                            <p class="gen-text slider-gen-text mb-2">{!! $page[20]['content'] !!}</p>
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
                                    <img data-src="public/assets/images/stories19.png" class="image-fluid lazy arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">{!! $page[21]['content'] !!}</p>
                                            <p class="gen-text slider-gen-text mb-2">{!! $page[22]['content'] !!}</p>
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
                                    <img data-src="public/assets/images/stories-14.png"
                                        class="image-fluid lazy arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                    <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                            <p class="gen-heading slider-heading mb-3">{!! $page[23]['content'] !!}</p>
                                            <p class="gen-text slider-gen-text mb-2">{!! $page[24]['content'] !!}</p>
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



    <section id="in-why-choose-2" class="in-why-choose-section-2 faq-secs" data-background="assets/img/bg/wc-bg.jpg">
        <div class="container">

            <div class="in-why-choose-content-2">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="in-section-title-2 headline wow fadeInLeft animated animated animated"
                            data-wow-delay="200ms" data-wow-duration="1000ms"
                            style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                            <h2>ARIS360 FAQs</h2>
                        </div>

                        <div class="in-why-choose-img-text">
                            <div class="in-why-choose-img-area">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp animated animated animated" data-wow-delay="400ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                        <div class="in-why-choose-img">
                                            <img class="lazy" data-src="public/assets/images/wc2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 wow fadeInUp animated animated animated" data-wow-delay="500ms"
                                        data-wow-duration="1000ms"
                                        style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="in-why-choose-img">
                                            <img class="lazy" data-src="public/assets/images/wc3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="react_to_us">
                                    <a href="{{ route('contact') }}">For Any Queries Further, please reach out to us! <i
                                            class="fas fa-phone"></i></a>
                                </div>
                            </div>
                            <!--<div class="in-btn-2 position-relative wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInUp;">-->
                            <!--	<a href="#" class="theme-btn btn-one">Get Started Now</a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="in-why-choose-faq">
                            <div class="accordion" id="accordionExample2">
                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated"
                                    data-wow-delay="200ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="headingOne2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                            aria-expanded="false" aria-controls="collapseOne">
                                            {!! $page[25]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseOne2" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne2" data-bs-parent="#accordionExample2" style="">
                                        <div class="accordion-body">
                                            {!! $page[26]['content'] !!}
                                        </div>
                                    </div>
                                </div>
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
                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated"
                                    data-wow-delay="400ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="headingTwo22">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            {!! $page[27]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {!! $page[28]['content'] !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated"
                                    data-wow-delay="600ms" data-wow-duration="1500ms"
                                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                    <h2 class="accordion-header" id="headingThree2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                            aria-expanded="false" aria-controls="collapseThree2">
                                            {!! $page[29]['content'] !!}
                                        </button>
                                    </h2>
                                    <div id="collapseThree2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            {!! $page[30]['content'] !!}
                                        </div>
                                    </div>
                                </div>
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

    <!-- Modal -->
    <div class="modal agenfutureoppModal-wrapper fade" id="agenfutureoppModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <div class="agenfutureoppModal-content">
                        <p class="title">Start Your Application</p>
                        <p class="para mt-2">Real Estate Agent - Birmingham (Future Opportunities)</p>
                        <small>Thank you for starting your application! This will take you 5 minutes or less to
                            complete.</small>
                        <div class="manually-apply-sect">
                            <a href="{{ route('apply-job') }}">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
