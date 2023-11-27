@php
    $metaTitle = 'Mortgage or Buy | Mortgage or Buy Washington';
    $metaDescription = "Discover whether it's best to mortgage or buy in Washington.
     Explore your options and make an informed decision based on the current market conditions
      and your financial goals.";
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')

<section class="mortgage_buy_sect1">
    <div class="container">
        <div class="mortgagerate-sec1-banner">
            <h3 class="title">{!! $page[0]['content'];!!}</h3>
            <p class="para">{!! $page[1]['content'];!!}</p>
        </div>
    </div>
</section>

<section class="mortgage_buy_sect2">
    <div class="container">
        <div class="boldTitle_sect">
            <h3>{!! $page[2]['content'];!!}</h3>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketsecwrap">
                   <div class="search_top_sect">
                        <div class="mortgage_detail_sect " data-rm-words="70">
                            <p class="gen-heading mb-3">{!! $page[3]['content'];!!}</p>
                            <p class="gen-text mb-3">{!! $page[4]['content'];!!}</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketimgwrp">
                     <img data-src="public/assets/images/mortgage_buy_bannerImg1.jpg" class="lazy image-fluid arisindximg">
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketimgwrp">
                     <img data-src="public/assets/images/mortgage_buy_bannerImg3.jpg" class="lazy image-fluid arisindximg">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketsecwrap">
                   <div class="search_top_sect">
                        <div class="mortgage_detail_sect " data-rm-words="70">
                            <p class="gen-heading mb-3 text-capitalize">{!! $page[5]['content'];!!}</p>
                            <p class="gen-text mb-3">{!! $page[6]['content'];!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketsecwrap">
                   <div class="search_top_sect">
                        <div class="mortgage_detail_sect " data-rm-words="70">
                            <p class="gen-heading mb-3">{!! $page[7]['content'];!!}</p>
                            <p class="gen-text mb-3">{!! $page[8]['content'];!!}</p>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketimgwrp">
                     <img data-src="public/assets/images/mortgage_buy_bannerImg2.jpg" class="image-fluid lazy arisindximg">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="agent-resource-center-sec3 why_choose_boxesSec">
    <div class="auto-container">
        <div class="resource-center-titleSec renowed-sec">
            <p class="title">{!! $page[9]['content'];!!}</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[10]['content'];!!}</p>
                    <p class="para">{!! $page[11]['content'];!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[12]['content'];!!}</p>
                    <p class="para">{!! $page[13]['content'];!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[14]['content'];!!}</p>
                    <p class="para">{!! $page[15]['content'];!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3">
                <div class="agent-articaleBox">
                    <p class="title2 text-capitalize">{!! $page[16]['content'];!!}</p>
                    <p class="para">{!! $page[17]['content'];!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[18]['content'];!!}</p>
                    <p class="para">{!! $page[19]['content'];!!}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3">
                <div class="agent-articaleBox">
                    <p class="title2">{!! $page[20]['content'];!!}</p>
                    <p class="para">{!! $page[21]['content'];!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="sell-home-sect4 card-sec1">
    <div class="auto-container">
        <div class="resource-center-titleSec">
            <p class="title text-capitalize">{!! $page[22]['content'];!!}</p>

        </div>

        <!-- Swiper -->
        <div class="swiper latestMortgagenews">
            <div class="swiper-wrapper">
                @if(isset($homebuyingguide) && count($homebuyingguide) > 0)
                @foreach ($homebuyingguide as $myhbguide)
                <div class="swiper-slide">
                    <div class="for_blog feat_property">
                        <div class="thumb">
                            <a href="{{ url('/mortgage-or-buy/').'/'.$myhbguide['b_slug'] }}">
                                <img class="img-whp lazy" data-src="{{ asset('public/images/blogs/'.$myhbguide['blog_cover']) }}" alt="/assets/images/blog/5.jpg">
                            </a>
                        </div>
                        <div class="details">
                           <div class="tc_content">
                              <h4>
                                <a href="{{ url('/mortgage-or-buy/').'/'.$myhbguide['b_slug'] }}">
                                    {{ $myhbguide['blog_title'] }}
                                </a>
                            </h4>
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
										   {!! $page[23]['content'];!!}
										</button>
									</h2>
									<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
										{!! $page[24]['content'];!!}
										</div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow">
									<h2 class="accordion-header" id="headingTwo2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
											{!! $page[25]['content'];!!}
										</button>
									</h2>
									<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											{!! $page[26]['content'];!!}
										</div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow">
									<h2 class="accordion-header" id="headingThree2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
										{!! $page[27]['content'];!!}
										</button>
									</h2>
									<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
										{!! $page[28]['content'];!!}
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
