@php
    $metaTitle = 'Mortgage Learning USA | Mortgage Learning Washington';
    $metaDescription = "Discover Mortgage Learning resources for a comprehensive understanding of mortgages in the USA and Washington. Expand your knowledge and make informed decisions.";
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>
@extends('properties.layouts.main')
@section('content')

<section class="mortgage-calc-sect1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mortgage-sec1-banner">
                    <p class="title">{!! $page[0]['content'];!!}</p>
                    <p class="para">{!! $page[1]['content'];!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start of Blog Grid section
	============================================= -->
	<section id="in-blog-grid" class="in-blog-grid-section">
		<div class="container">
			<div class="blog-grid-content">

				<div class="text-center">
					<!--<h1 class="text-dark">Everything You Need to Know About Mortgages </h1>-->
					<h1 class="text-dark">{!! $page[8]['content'];!!}</h1>
				</div>
				<div class="row">
                    @if(isset($homebuyingguide) && count($homebuyingguide) > 0)
                      @foreach ($homebuyingguide as $myhbguide)
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="in-blog-item">
                                <div class="blog-title headline">
                                    <h3>
                                        <a href="{{ url('/mortgage-learning').'/'.$myhbguide['b_slug'] }}">
                                            {{ $myhbguide['blog_title'] }}
                                        </a>
                                    </h3>
                                </div>
                                <div class="blog-img">
                                    <a href="{{ url('/mortgage-learning').'/'.$myhbguide['b_slug'] }}">
                                        <img class="lazy" data-src="{{ asset('public/images/blogs/'.$myhbguide['blog_cover']) }}" alt="{{ $myhbguide['blog_title'] }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
			    </div>
		    </div>
		</div>
	</section>
<!-- End of Blog Grid section
	============================================= -->


<section id="in-why-choose-2" class="in-why-choose-section-2" data-background="assets/img/bg/wc-bg.jpg">
	<div class="container">

		<div class="in-why-choose-content-2">
			<div class="row">
				<div class="col-lg-6">

					<div class="in-section-title-2 headline wow fadeInLeft animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">

						<h2>Aris360 FAQs</h2>
					</div>

					<div class="in-why-choose-img-text">
						<div class="in-why-choose-img-area">
							<div class="row">
								<div class="col-md-6 wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
									<div class="in-why-choose-img">
										<img class="lazy" data-src="public/assets/images/wc2.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6 wow fadeInUp animated" data-wow-delay="500ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
									<div class="in-why-choose-img">
										<img class="lazy" data-src="public/assets/images/wc3.jpg" alt="">
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
										{!! $page[2]['content'];!!}
									</button>
								</h2>
								<div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2" style="">
									<div class="accordion-body">
										{!! $page[3]['content'];!!}
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
										{!! $page[4]['content'];!!}
									</button>
								</h2>
								<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">
									<div class="accordion-body">
										{!! $page[5]['content'];!!}
									</div>
								</div>
							</div>
							<div class="accordion-item headline-2 pera-content wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
								<h2 class="accordion-header" id="headingThree2">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
										{!! $page[6]['content'];!!}
									</button>
								</h2>
								<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
									<div class="accordion-body">
										{!! $page[7]['content'];!!}
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection
