@extends('properties.layouts.main')
@section('content')


<section class="mortgage-calc-sect1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mortgage-sec1-banner">
                    <p class="title">Remortgage Rates</p>
                    <p class="para">For financing again on your property</p>
                    <div class="in-sidebar-widget">
						<div class="search-widget">
							<p class="mb-2 text-left">Where are you buying or remortgage?</p>
							<form action="{{route('mortgage-rate-list')}}">
								<input type="text" name="serach" id="mortgage_rate_search" placeholder="Search...">
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
		<span class="in-service-bg position-absolute"><img src="assets/img/bg/ser-bg1.png" alt=""></span>
		<div class="container">
			<div class="row in-service-top-content">
				<div class="col-lg-6 col-md-6 col-12 in-service-title-text wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
					<div class="in-section-title-2 headline">

						<h2>HAVE YOU HAD FINANCING BEFORE? GET TO KNOW HOW YOU CAN AGAIN?</h2>
					</div>
					<div class="in-service-title-desc">
					    <p>If you are looking for a second round of financing for your property, Aris360 can guide you with the best options.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-12 in-service-title-img wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1000ms">
					<img src="public/assets/images/ser-title.jpg" alt="">
				</div>
			</div>
			<div class="in-benefit-feature mortgageratebox" data-wow-delay="500ms" data-wow-duration="1000ms">
				<div class="row mt-5">
					<div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
					    <div class="agent-articaleBox agentarticleboxpd">
    						<div class="in-benefit-feature-item position-relative">
    							<span class="serial position-absolute">01</span>
    							<div class="inner-icon">
    								<i class="fal fa-file-alt"></i>
    							</div>
    							<div class="inner-text headline">
    								<h3>Provide Your Information</h3>
    								<p>Start Your Home Buying Journey Today.</p>
    							</div>
    						</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
					     <div class="agent-articaleBox agentarticleboxpd">
						<div class="in-benefit-feature-item position-relative">
							<span class="serial position-absolute">02</span>
							<div class="inner-icon">
								<i class="fal fa-quote-right"></i>
							</div>
							<div class="inner-text headline">
								<h3>Analyze Personalized Rates</h3>
								<p>Find the Best Financing Option for You.</p>
							</div>
						</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1000ms">
					      <div class="agent-articaleBox agentarticleboxpd">
						<div class="in-benefit-feature-item position-relative">
							<span class="serial position-absolute">03</span>
							<div class="inner-icon">
								<i class="fal fa-users"></i>
							</div>
							<div class="inner-text headline">
								<h3>Approach the Best Lenders</h3>
								<p>Secure Your Dream Home with Aris360's Network of Top Lenders.</p>
							</div>
						</div>
							</div>
					</div>
				</div>
			</div>
			<div class="in-service-more-btn text-center pera-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
				<p>Determine from a variety of options for costs of acquiring refinancing today!</p>
			</div>
		</div>
	</section>
<!-- End of service section
	============================================= -->


<section class="agent-sect2 mortgage-sec-chose">
    <div class="container">
        <div class="why-choose-us">
            <p class="mort-genhead">Why Choose Aris360</p>
            <p class="mort-para mb-3">Discover the benefits of choosing Aris360</p>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <div class="why-choose-us-innercontent">
                    <div>
                      <img src="public/assets/images/loanicon4.png">
                    </div>
                    <p class="title2">Authorized Agents</p>
                    <p class="para">Trusted representation for smooth real estate transactions: The value of working with an authorized agent on our plaform.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <div class="why-choose-us-innercontent">
                    <div>
                       <img src="public/assets/images/loanicon2.png">
                    </div>
                    <p class="title2">Optimum Profitability</p>
                    <p class="para">Maximizing profit potential: How our real estate platform helps you achieve optimum returns on your investment.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <div class="why-choose-us-innercontent mb-3">
                    <div>
                        <img src="public/assets/images/loanicon1.png">
                    </div>
                    <p class="title2">Exclusive Property Listings</p>
                    <p class="para">Accessing the best properties on the market: Our real estate platform's exclusive listings.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-4">
                <div class="why-choose-us-innercontent mb-3">
                    <div>
                        <img src="public/assets/images/loanicon3.png">
                    </div>
                    <p class="title2">Swift User Experience</p>
                    <p class="para">Effortless and expedient: Streamlining your real estate journey with our platform's swift and user-friendly experience.</p>
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
                    <p class="mortgage-genheading">Remortgage <br> made easy</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <p class="mortgage-gentext">Are you a prospective home buyer who is struggling to meet the eligibility criteria for the first time? Are you seeking assistance for down payment or concerned about interest rates? Do you need to sell your existing home before purchasing a new one?</p>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <p class="mortgage-gentext">Explore various options that can save your time and money and make the home loan process smoother. Discover solutions that can alleviate stress and help you obtain a feasible home loan.</p>
            </div>
        </div>
    </div>
</section>

<!--mortgage-made-easy-end-->

<section class="agent-resource-center-sec3 why_choose_boxesSec mortgage-loansec">
    <div class="auto-container">
        <div class="resource-center-titleSec renowed-sec  profit-gen-sec">
            <p class="title profit-gentext">Types of mortgages   for homebuyers</p>
            <p>A new home may be one of the biggest purchases you’ll make in your life</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">P&L & Balance Sheet Loan</p>
                    <p class="para">Unlock More Opportunities: P&L & Balance Sheet Loan Options for Real Estate Financing</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">Bridge Loan</p>
                    <p class="para">A type of short-term loan that provides financing until a more permanent financing solution is secured.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mb-5">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">Hard Money Loan</p>
                    <p class="para">A type of real estate financing that is secured by the property being purchased, rather than the borrower's creditworthiness or ability to repay the loan.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">Bank Statement Loan</p>
                    <p class="para">A type of mortgage that allows borrowers to qualify based on their bank statement records.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-3">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">No Ratio</p>
                    <p class="para">No Ratio Loans are a type of mortgage that do not take into account the borrower's debt-to-income ratio.</p>
                </div>
            </div>

        </div>
    </div>
</section>


	<section id="in-cta-2" class="in-cta-section-2">
		<div class="jarallax  position-relative"  data-background="assets/img/bg/cta2.jpg">
			<div class="container">
				<div class="in-cta-content-2 position-relative ">
					<div class="in-cta-text-btn-group finance-banner wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
						<div class="in-section-title-2 headline text-center">
							<h2 class="mortgage-genheading">Begin Your mortgage Again</h2>
							<p class="mortgage-gentext">We make remortgaging a simple and easy, offering competitive rates, flexible closing options to fit your schedule, and exceptional customer service. Are you ready to apply? Our team is always here to assist you every step of the way.</p>
						</div>
						<div class="in-cta-btn-grp text-center">
							<div class="in-btn-2 position-relative">
									<a href="{{route('mortgage-rate-list')}}" class="theme-btn btn-one">Compare your refinance options</a>
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
                Read Real Stories From Our Customers
            </p>
        </div>

        <!-- Swiper -->
          <div class="swiper StoriesSwiper swiper-len">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                    <div class="custom_row_homeworth">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                     <img src="public/assets/images/stories-01.png" class="image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                   <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                             <p class="gen-heading slider-heading mb-3">Sarah: A Specialist in Remortgaging</p>
                                             <p class="gen-text slider-gen-text mb-2">Sarah is an Aris360 agent who specializes in remortgaging. She has extensive knowledge of the remortgaging process and works closely with her clients to help them find the best rates and terms for their individual situations. Sarah is committed to providing exceptional service and support throughout the remortgaging process, ensuring that her clients feel confident and informed every step of the way.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="swiper-slide">
                    <div class="custom_row_homeworth">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                     <img src="public/assets/images/stories-02.png" class="image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                   <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                             <p class="gen-heading slider-heading mb-3">David: A Mortgage Broker for Investors</p>
                                             <p class="gen-text slider-gen-text mb-2">David is a mortgage broker who specializes in working with real estate investors. He understands the unique challenges that come with remortgaging investment properties and works closely with his clients to help them find the best rates and terms for their needs. David's expertise and experience in the real estate industry make him a valuable resource for investors looking to remortgage their properties.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="swiper-slide">
                    <div class="custom_row_homeworth">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketimg">
                                     <img src="public/assets/images/stories-03.png" class="image-fluid arisindximg">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="house-marketsecwrap">
                                   <div class="search_top_sect">
                                        <div class="resource-center-titleSec">
                                             <p class="gen-heading slider-heading mb-3">Maria: A Remortgaging Expert for Homeowners</p>
                                             <p class="gen-text slider-gen-text mb-2">Maria is an Aris360 agent who has extensive experience in helping homeowners remortgage their properties. She is committed to providing personalized service and support to her clients, working closely with them to understand their unique needs and goals. Maria is dedicated to helping her clients find the best remortgage rates and terms available, and she strives to make the remortgaging process as seamless and stress-free as possible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

						<div class="in-section-title-2 headline wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">

							<h2>ARIS360 FAQs .</h2>
						</div>

						<div class="in-why-choose-img-text">
							<div class="in-why-choose-img-area">
								<div class="row">
									<div class="col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
										<div class="in-why-choose-img">
											<img src="public/assets/images/wc2.jpg" alt="">
										</div>

									</div>
									<div class="col-md-6 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1000ms">
										<div class="in-why-choose-img">
											<img src="public/assets/images/wc3.jpg" alt="">
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="in-why-choose-faq">
							<div class="accordion" id="accordionExample2">
								<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
									<h2 class="accordion-header" id="headingOne2">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
											What are remortgage rates in the USA?
										</button>
									</h2>
									<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											A new loan to replace an existing one, typically with better terms and conditions.
										</div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
									<h2 class="accordion-header" id="headingTwo2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
											What factors influence remortgage rates?
										</button>
									</h2>
									<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											Inflation rates, economic indicators, and government policies, borrower's credit score, loan-to-value ratio, and other factors when determining the interest rate for a refinance loan.
										</div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
									<h2 class="accordion-header" id="headingThree2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
											How do I know if I should remortgage my property?
										</button>
									</h2>
									<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											Homeowners may consider refinancing their mortgage when interest rates have fallen, when they want to switch to a different type of mortgage, or when they want to take cash out of their home's equity.
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



@endsection