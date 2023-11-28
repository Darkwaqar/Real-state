@php
    $metaTitle = 'Lender Directory Washington | Washington  lender Directory';
    $metaDescription = "Looking for a comprehensive lender directory in Washington? Discover a wide range of lending options with our Washington directory lender. Find reputable lenders who can provide the financial support you need for your real estate endeavors. Whether you're looking for a mortgage, loan, or other financing solutions, our directory will connect you with trusted lenders in Washington. Explore our directory and find the perfect lending partner for your specific needs in Washington today.";
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
                    <p class="title text-capitalize">Seeking a Financier?</p>
                    <!--<p class="para">Dummy text dummy text dummy text dummy text dummy text</p>-->
                    <div class="in-sidebar-widget in-contact-form-title-area">
						<div class="search-widget in-contact-form">
							<p class="text-left mb-3">Welcome to Your Reliable Source for Home Loan Providers</p>
							{{-- <form action="#" class="row d-flex align-items-center">

								<div class="col-lg-4 col-md-6 col-12">
									<!--<label for="location2">Location</label>-->
									<input type="text" id="location2" name="location" placeholder="State, City, Country, Zip..." value="Houston">
								</div>

								<div class="col-lg-4 col-md-6 col-12">
									<!--<label for="location2">Name</label>-->
									<input type="text" id="location2" name="location" placeholder="Loan officer or bank..">
								</div>

								<div class="col-lg-4 col-12 text-center">
									<div class="in-btn-1 position-relative">
										<a href="javascript:void(0)" class="theme-btn btn-one">Search Lenders</a>
									</div>
								</div>



							</form> --}}
							{{-- <div class="text-lg-start text-left mt-2">
								<small class="small_para lender-banner-text">Only lenders licensed in the state will be displayed.</small>
							</div> --}}
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start of Service section
	============================================= -->
	<section id="in-service-1" class="in-service-section-1 position-relative">

		<div class="container">
			<div class="row justify-content-center">
			    <div class="col-12 col-lg-3 col-md-12">
    			   <div class="in-blog-feed-item lender_item box-card-lendl p-0">
    				<a href="{{route('lender-profile')}}">
    					<div class="row px-3 py-4 text-center">

    						<div class="col-lg-12 col-md-12 col-12 d-flex">
        						<div class="lendl-imagewrap">
    						    	 <img class="img-180 mb-4 lazy" data-src="public/assets/images/tristar.png" alt="">
        						</div>
    						</div>
    						<div class="col-lg-12 col-md-12 col-12">

    								<h5 class="mb-0">
    									<span class="mb-3 inc-text">Tristar Home Loans</span>

    									<small class="text-muted font_14 nmls-text mb-2">NMLS# 43583</small>
    								</h5>
    								<div class="font_14  mb-2">
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<strong>5 rating</strong>
    								</div>
    								<div class="font_14">
    									<strong>2 Reviews</strong>
    									<small class="text-muted">(2 Recent)</small>
    								</div>

    						</div>


    					</div>
    				</a>
    			</div>
			    </div>
			    {{-- <div class="col-12 col-lg-3 col-md-12">
    		    	<div class="in-blog-feed-item lender_item p-0 box-card-lendl">
    				<a href="{{route('lender-profile-02')}}">
    					<div class="row px-3 py-4 text-center">

    						<div class="col-lg-12 col-md-12 col-12 d-flex">

    							<div class="lendl-imagewrap">
    							    <img class="img-180  mb-4" src="public/assets/images/low-rates-profile.png" alt="">
    							</div>

    						</div>

    						<div class="col-lg-12 col-md-12 col-12">

    								<h5 class="mb-0">
    									<span class="mb-3 inc-text">Low Rates</span>

    									<small class="text-muted font_14 nmls-text mb-2">NMLS# 43583</small>
    								</h5>
    								<div class="font_14  mb-2">
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<i class="fas fa-star bg_primary"></i>
    									<strong>5 rating</strong>
    								</div>
    								<div class="font_14">
    									<strong>2 Reviews</strong>
    									<small class="text-muted">(2 Recent)</small>
    								</div>

    						</div>


    					</div>
    				</a>
    			</div>
			    </div> --}}
			    {{-- <div class="col-12 col-lg-3 col-md-12">
        			<div class="in-blog-feed-item lender_item p-0 box-card-lendl">
        				<a href="{{route('lender-profile-03')}}">
        					<div class="row px-3 py-4 text-center">

        						<div class="col-lg-12 col-md-12 col-12 d-flex">
        						  	<div class="lendl-imagewrap">
        							    <img class="img-180 mb-4" src="public/assets/images/mortgage-smarts-profile.png" style="max-width: 100px;" alt="">
                                    </div>
        						</div>

        						<div class="col-lg-12 col-md-12 col-12">

        								<h5 class="mb-0">
        									<span class="mb-3 inc-text">Mortgage Smarts</span>

        									<small class="text-muted font_14 nmls-text mb-2">NMLS# 43583</small>
        								</h5>
        								<div class="font_14  mb-2">
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<strong>5 rating</strong>
        								</div>
        								<div class="font_14">
        									<strong>2 Reviews</strong>
        									<small class="text-muted">(2 Recent)</small>
        								</div>

        						</div>


        					</div>
        				</a>
        			</div>

			    </div> --}}
			    <div class="col-12 col-lg-3 col-md-12">
        			<div class="in-blog-feed-item lender_item p-0 box-card-lendl">
        				<a href="{{route('lender-profile-04')}}">
        					<div class="row px-3 py-4 text-center">

        						<div class="col-lg-12 col-md-12 col-12 d-flex">
        						  	<div class="lendl-imagewrap">
        							    <img class="img-180 mb-4 lazy" data-src="public/assets/images/homeloansnew.png" alt="">
        							</div>

        						</div>

        						<div class="col-lg-12 col-md-12 col-12">

        								<h5 class="mb-0">
        									<span class="mb-3 inc-text">Aris360 Home Loans</span>

        									<small class="text-muted font_14 nmls-text mb-2">NMLS# 43583</small>
        								</h5>
        								<div class="font_14  mb-2">
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<strong>5 rating</strong>
        								</div>
        								<div class="font_14">
        									<strong>2 Reviews</strong>
        									<small class="text-muted">(2 Recent)</small>
        								</div>

        						</div>


        					</div>
        				</a>
        			</div>

			    </div>
			     {{-- <div class="col-12 col-lg-3 col-md-12">
        			<div class="in-blog-feed-item lender_item p-0 box-card-lendl">
        				<a href="{{route('lender-profile-05')}}">
        					<div class="row px-3 py-4 text-center">

        						<div class="col-lg-12 col-md-12 col-12 d-flex">
        						  	<div class="lendl-imagewrap">
        							    <img class="img-180 mb-4" src="public/assets/images/tr-star-finance-profile.png" alt="">
        							</div>

        						</div>

        						<div class="col-lg-12 col-md-12 col-12">

        								<h5 class="mb-0">
        									<span class="mb-3 inc-text">Tristar Finance</span>

        									<small class="text-muted font_14 nmls-text mb-2">NMLS# 43583</small>
        								</h5>
        								<div class="font_14  mb-2">
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<strong>5 rating</strong>
        								</div>
        								<div class="font_14">
        									<strong>2 Reviews</strong>
        									<small class="text-muted">(2 Recent)</small>
        								</div>

        						</div>


        					</div>
        				</a>
        			</div>

			    </div> --}}
			     {{-- <div class="col-12 col-lg-3 col-md-12">
        			<div class="in-blog-feed-item lender_item p-0 box-card-lendl">
        				<a href="{{route('lender-profile-06')}}">
        					<div class="row px-3 py-4 text-center">

        						<div class="col-lg-12 col-md-12 col-12 d-flex">
        						  	<div class="lendl-imagewrap">
        							    <img class="img-180 mb-4" src="public/assets/images/Aris-Logonew1.png" alt="">
        							</div>

        						</div>

        						<div class="col-lg-12 col-md-12 col-12">

        								<h5 class="mb-0">
        									<span class="mb-3 inc-text">Aris Home Loans</span>

        									<small class="text-muted font_14 nmls-text mb-2">NMLS# 43583</small>
        								</h5>
        								<div class="font_14  mb-2">
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<i class="fas fa-star bg_primary"></i>
        									<strong>5 rating</strong>
        								</div>
        								<div class="font_14">
        									<strong>2 Reviews</strong>
        									<small class="text-muted">(2 Recent)</small>
        								</div>

        						</div>


        					</div>
        				</a>
        			</div>

			    </div> --}}

			    <div class="col-12">
    			{{-- <div class="in-pagination text-center ul-li">
    				<ul>
    					<li><a href="#"><i class="far fa-long-arrow-left"></i></a></li>
    					<li><a href="#">1</a></li>
    					<li><a href="#">2</a></li>
    					<li><a href="#">3</a></li>
    					<li><a href="#"><i class="far fa-long-arrow-right"></i></a></li>
    				</ul>
    			</div> --}}

			    </div>
			</div>





		</div>
	</section>
<!-- End of service section
	============================================= -->

<!-- Start of CTA section
	============================================= -->
	<section id="in-cta-2" class="in-cta-section-2">
		<div class="jarallax  position-relative"  data-background="assets/images/cta2.jpg">
			<div class="container">
				<div class="in-cta-content-2 position-relative ">
					<div class="in-cta-text-btn-group wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="in-section-title-2 headline text-center">
							<h2>Begin Your Financing Today</h2>
						</div>
						<div class="in-cta-btn-grp text-center">
							<div class="in-btn-2 position-relative">
								<a href="{{route('mortgage-rates')}}" class="theme-btn btn-one">Get Started Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of CTA section
	============================================= -->



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection
