@php
    $metaTitle = 'Homeloan Agent in Washington | Washington Homeloan Agents';
    $metaDescription = "Our Washington Homeloan Agents directory connects you with experienced professionals who can guide you through the process of obtaining a home loan in Washington. Find a knowledgeable agent who understands the local market and can help you navigate the complexities of securing a mortgage. Explore our directory of Washington Homeloan Agents and make your home financing journey a smooth and successful one.";
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')

<section class="about-homeloan-sect1">
    <div class="auto-container">
        <div class="row">
            <div class='col-12'>
                <div class="about-homeloan-content">
                    <p class="title">{!! $page[0]['content'];!!}</p>
                    <p class="para text-light">{!! $page[1]['content'];!!}</p>
                    <div class="btn-box">
                        <button type="button" data-toggle="modal" data-target="#apply-now-modal" class="theme-btn btn-one">Apply Now</button>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-6 col-md-6 col-12">-->
            <!--    <div class="about-bannerImg">-->
            <!--        <img src="public/assets/images/about-homeloan-banner.png" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</section>


<section class="agent-resource-center-sec3 mt-4">
    <div class="auto-container">
        <div class="resource-center-titleSec">
            <p class="title">{!! $page[2]['content'];!!}</p>
            <p class="para">{!! $page[3]['content'];!!}</p>
        </div>
        <div class="row ">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[4]['content'];!!}</p>
                    <p class="para">{!! $page[5]['content'];!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[6]['content'];!!}</p>
                    <p class="para">{!! $page[7]['content'];!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[8]['content'];!!}</p>
                    <p class="para">{!! $page[9]['content'];!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-it-work-sect">
    <div class="auto-container">
        <div class="resource-center-titleSec">
            <p class="title">{!! $page[10]['content'];!!}</p>
            <p class="para">{!! $page[11]['content'];!!}</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="how-it-work-Box">
                    <div class="how-it-work-img">
                        <img data-src="public/assets/images/illustrated-icon-01.png" class="img-fluid lazy">
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn btn-one">Step 1</a>
                        </div>
                    </div>
                    <div class="how-it-work-detail">
                        <!--<p class="title2">Pre Approval and Appointment</p>-->
                        <p class="title2">{!! $page[12]['content'];!!}</p>
                        <p class="para">{!! $page[13]['content'];!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="how-it-work-Box">
                    <div class="how-it-work-img">
                        <img data-src="public/assets/images/illustrated-icon-02.png" class="img-fluid lazy">
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn btn-one">Step 2</a>
                        </div>
                    </div>
                    <div class="how-it-work-detail">
                        <!--<p class="title2">Outstanding Offer</p>-->
                        <p class="title2">{!! $page[14]['content'];!!}</p>
                        <p class="para">{!! $page[15]['content'];!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="how-it-work-Box">
                    <div class="how-it-work-img">
                        <img data-src="public/assets/images/illustrated-icon-03.png" class="img-fluid lazy">
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn btn-one">Step 3</a>
                        </div>
                    </div>
                    <div class="how-it-work-detail">
                        <!--<p class="title2">Closing Agreement</p>-->
                        <p class="title2">{!! $page[16]['content'];!!}</p>
                        <p class="para">{!! $page[17]['content'];!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="how-it-work-Box">
                    <div class="how-it-work-img">
                        <img data-src="public/assets/images/illustrated-icon-04.png" class="img-fluid lazy">
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn btn-one">Step 4</a>
                        </div>
                    </div>
                    <div class="how-it-work-detail">
                        <!--<p class="title2">Safe Digital Documents Submission</p>-->
                        <p class="title2">{!! $page[18]['content'];!!}</p>
                        <p class="para">{!! $page[19]['content'];!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="how-it-work-Box">
                    <div class="how-it-work-img">
                        <img data-src="public/assets/images/illustrated-icon-05.png" class="img-fluid lazy">
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn btn-one">Step 5</a>
                        </div>
                    </div>
                    <div class="how-it-work-detail">
                        <!--<p class="title2">Possession & Ownership</p>-->
                        <p class="title2">{!! $page[20]['content'];!!}</p>
                        <p class="para">{!! $page[21]['content'];!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-worth-body real-slider-sec1 find-an-agent-slider">
    <div class="container">
        <div class="title-sec my-2">
            <p class="title my-2 font-36 text-center mb-5">
                {!! $page[22]['content'];!!}
            </p>
        </div>

        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
           
            <div class="item p-2">
                <div class="custom_row_homeworth">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketimg">
                                 <img data-src="public/assets/images/homeloan-slider-img1.jpg" class="image-fluid arisindximg lazy">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketsecwrap">
                               <div class="search_top_sect">
                                    <div class="resource-center-titleSec">
                                         <p class="gen-heading slider-heading mb-3">{!! $page[23]['content'];!!}</p>
                                         <p class="gen-text slider-gen-text mb-2">{!! $page[24]['content'];!!}</p>
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
                                 <img data-src="public/assets/images/homeloan-slider-img2.jpeg" class="image-fluid lazy arisindximg">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketsecwrap">
                               <div class="search_top_sect">
                                    <div class="resource-center-titleSec">
                                         <p class="gen-heading slider-heading mb-3">{!! $page[25]['content'];!!}</p>
                                         <p class="gen-text slider-gen-text mb-2">{!! $page[26]['content'];!!}</p>
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
                                 <img data-src="public/assets/images/homeloan-slider-img3.jpg" class="image-fluid arisindximg lazy">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="house-marketsecwrap">
                               <div class="search_top_sect">
                                    <div class="resource-center-titleSec">
                                         <p class="gen-heading slider-heading mb-3">{!! $page[27]['content'];!!}</p>
                                         <p class="gen-text slider-gen-text mb-2">{!! $page[28]['content'];!!}</p>
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


<section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
    <div class="container">

        <div class="in-why-choose-content-2">
            <div class="row">
                <div class="col-lg-6">

                    <div class="in-section-title-2 headline wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">

                        <h2>ARIS360 FAQs</h2>
                    </div>

                    <div class="in-why-choose-img-text">
                        <div class="in-why-choose-img-area">
                            <div class="row">
                                <div class="col-md-6 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                    <div class="in-why-choose-img">
                                        <img data-src="public/assets/images/wc2.jpg" class="lazy" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
                                    <div class="in-why-choose-img">
                                        <img data-src="public/assets/images/wc3.jpg" class="lazy" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="react_to_us">
                        <a href="{{ route('contact') }}">For Any Queries Further, please reach out to us! <i class="fas fa-phone"></i></a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="in-why-choose-faq">
                        <div class="accordion" id="accordionExample2">
                            <div class="accordion-item headline-2 pera-content wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="headingOne2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne">
                                        {!! $page[29]['content'];!!}
                                    </button>
                                </h2>
                                <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2" style="">
                                    <div class="accordion-body">
                                        {!! $page[30]['content'];!!}
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
                            <div class="accordion-item headline-2 pera-content wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="headingTwo22">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                        {!! $page[31]['content'];!!}
                                    </button>
                                </h2>
                                <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        {!! $page[32]['content'];!!}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item headline-2 pera-content wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                                <h2 class="accordion-header" id="headingThree2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                        {!! $page[33]['content'];!!}
                                    </button>
                                </h2>
                                <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        {!! $page[34]['content'];!!}
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




<section class="agent-resource-center-sec4">
    <div class="auto-container">
        <div class="resource-center-titleSec apply_now_section">
            <!--<p class="title">Ready to get pre-approved?</p>-->
            <p class="title">Begin Your Pre-Approval Today</p>
            <p class="para">Initiate an application for Home Loans instantly</p>
            <!--<p class="para">Whether You're Curoius About How Much You Can Afford Or Are Ready To Make An Offer, We're Ready To Help.</p>-->
            <!--<a target="_blank" href="https://demo.wizardinnovations.us/straight-forward-lending/" class="apply_now_btn">Apply Now</a>-->
            <button type="button" class="apply_now_btn" data-toggle="modal" data-target="#apply-now-modal">
              Apply Now
            </button>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="apply-now-modal" tabindex="-1" role="dialog" aria-labelledby="apply-now-modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center w-100" id="apply-now-modal" style="color:#de1e25;">ACKNOWLEDGMENT</h5>
            <button type="button" class="close theme-btn btn-one p-1 mx-1" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="mx-2">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>This is to notify you that <a target="_blank" class="text-dark" href="{{route('home')}}">ARIS360.com</a> is in partnership with <a target="_blank" class="text-dark" href="https://straightforwardlending.com/" > StraightForwardLending.com</a> Set forth below are the types of settlement services offered by these companies and the estimated charge or range of charges for such settlement services:</p>
            <ul class="p-0">
                <li>ARIS360 HOMES LLC Brokerage</li>
                <li>Real Estate Services</li>
                <br>
                <li>Range of Charges</li>
                <li>0-6% of the Purchase Price</li>
                <br>
                <li>Straight Forward Lending</li>
                <li>Mortgage Broker and Lending Services </li>
            </ul>
          {{--  <p class="text-center">ARIS HOMES LLC Brokerage</p>
            <p class="text-center">Real Estate Services</p>
            <p class="text-center">Range of Charges</p>
            <p class="text-center">0-6% of the Purchase Price </p>
            <p class="text-center">Straight Forward Lending</p>
            <p class="text-center">Mortgage Broker and Lending Services </p> --}}
            <p>By clicking “Accept,” I/we acknowledge that I/we have read this disclosure form and understand that ARIS360 is referring me/us to purchase the above-described settlement service(s) and may receive a financial or other benefit as the result of this referral from <a target="_blank" class="text-dark" href="https://straightforwardlending.com/"> StraightForwardLending.com</a> </p>

          </div>
          <div class="modal-footer justify-content-center">
            <a target="_blank" href="https://straightforwardlending.com/" class="theme-btn btn-one">I Accept</a>
          </div>
        </div>
      </div>
    </div>


</section>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
@endsection
