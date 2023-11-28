@extends('properties.layouts.main')
@section('content')

<section class="compare_option_sect1">
     <div class="container">
         <div class="sell-home-bannerSec">
             <h1>
                {{-- Market Your Home With Assurance --}}
                {!!$page[0]['content']!!}
            </h1>
            <h4 class="text-light">
                {{-- Maximize Your Potential Profit and Minimize Your Stress --}}
                {!!$page[1]['content']!!}
            </h4>
         </div>
     </div>
</section>

<section class="compare_option_sect2">
    <div class="container">
        <h1>
            {{-- Select Your Way Forward --}}
            {!!$page[2]['content']!!}
        </h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="compare_option_agents">
                    <div class="compare_option_agents_top">
                        <h5>
                            {{-- List Your Property --}}
                            {!!$page[3]['content']!!}
                        </h5>
                    </div>
                    <div class="compare_option_agents_img">
                        <img class="lazy" data-src="public/assets/images/realestate-agent-comp_img2.jpg">
                    </div>
                    <div class="compare_option_agents_detail">
                        <ul class="compare_option_agents_detaillisting">
                            <li><i class="fas fa-check"></i><p>
                                {{-- Visits Decided By Your Self --}}
                                {!!$page[4]['content']!!}
                                </p></li>
                            <li><i class="fas fa-check"></i><p>
                                {{-- Terms & Conditions --}}
                                {!!$page[5]['content']!!}
                            </p></li>
                            <li><i class="fas fa-check"></i><p>
                                {{-- No Charges Hidden Savings --}}
                                {!!$page[6]['content']!!}
                            </p></li>
                            <li><i class="fas fa-check"></i><p>
                                {{-- Property Of Your Choice --}}
                                {!!$page[7]['content']!!}
                            </p></li>
                        </ul>
                    </div>
                    <div class="btn-box">
                        <a href="{{route('home.property-listing')}}" class="theme-btn btn-one" >List Your Property</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="compare_option_agents">
                    <div class="compare_option_agents_top">
                        <h5>
                            {{-- Find an Agent --}}
                            {!!$page[8]['content']!!}
                        </h5>
                    </div>
                    <div class="compare_option_agents_img">
                        <img class="lazy" data-src="public/assets/images/agents/toprated-agent4.jpg">
                    </div>
                    <div class="compare_option_agents_detail">
                        <ul class="compare_option_agents_detaillisting">
                            <li><i class="fas fa-check"></i><p>
                                {{-- Authorized agent as your advisor --}}
                                {!!$page[9]['content']!!}
                            </p></li>
                            <li><i class="fas fa-check"></i><p>
                                {{-- Flexible Closing Dates --}}
                                {!!$page[10]['content']!!}
                            </p></li>
                            <li><i class="fas fa-check"></i><p>
                                {{-- Exclusive Property Listings --}}
                                {!!$page[11]['content']!!}
                            </p></li>
                            <li><i class="fas fa-check"></i><p>
                                {{-- Access best market rates --}}
                                {!!$page[12]['content']!!}
                            
                            </p></li>
                        </ul>
                    </div>
                    <div class="btn-box">
                        <a href="{{route('find-an-agent')}}" class="theme-btn btn-one" >Find an Agent</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="compare_option_sect3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
              <div class="search_top_sect mb-4">
                    <div class="resource-center-titleSec">
                        <p class="title mb-2">
                            {{-- Find An Agent in Washington --}}
                            {!!$page[13]['content']!!}
                        </p>
                        <p class="mb-2">
                            {{-- ARIS360  Agents are Sustainable Resources to Satisfy the Lifestyle of Your Future Generations --}}
                            {!!$page[14]['content']!!}
                        </p>
                    </div>
                    <div class="btn-box">
                        <a href="{{route('find-an-agent')}}" class="theme-btn btn-one">Find An Agent in Washington</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketimg">
                     <img data-src="public/assets/images/realestate-agent-comp_img1.jpg" class="image-fluid arisindximg lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="compare_option_sect3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="house-marketimg">
                     <img data-src="public/assets/images/real-estate-agent_listing_1.jpg" class="image-fluid arisindximg lazy">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
              <div class="search_top_sect">
                    <div class="resource-center-titleSec">
                        <p class="title mb-2">
                            {{-- List Your Property --}}
                            {!!$page[15]['content']!!}
                        </p>
                        <p class="mb-2">
                            {{-- Ready to Sell Your Property? List with Us Today and Get Top Dollar! --}}
                            {!!$page[16]['content']!!}
                        </p>
                    </div>
                    <div class="btn-box">
                        <a href="{{route('home.property-listing')}}" class="theme-btn btn-one">List Your Property</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="compare_option_sect4">
     <div class="container">
         <div class="sell-home-bannerSec">
             <h1>
                {{-- Value360<sup>0</sup> --}}
                {!!$page[17]['content']!!}
            </h1>
            <h4 class="text-light">
                {{-- See what local agents estimate the value of your home --}}
                {!!$page[18]['content']!!}
            </h4>
            <div class="btn-box">
                <a href="{{route('my-home-worth')}}" class="theme-btn btn-one">Value360<sup>0</sup></a>
            </div>
         </div>
     </div>
</section>

<section class="compare_option_sect5">
    <div class="container">
        <div class="home-guide-tab-content">
            <h3>
                {{-- Blogs --}}
                {!!$page[19]['content']!!}
            </h3>
            <div class="home-guide-tab1-wrapper">
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="{{route('alternative-analysis-01')}}" class="real-estate-agentCard">
                            <span>
                                <img data-src="public/assets/images/Comparing Commercial and Residential Real Estate Investments.jpg" class="img-fluid lazy" alt="">
                            </span>
                            <span class="agentCard-bottomSect">
                                <p class="title2">
                                    {{-- Comparing Commercial and Residential Real Estate Investments --}}
                                    {!!$page[20]['content']!!}
                                </p>
                                <p class="para">
                                    {{-- Commercial and residential real estate investments offer different benefits and risks... --}}
                                    {!!$page[21]['content']!!}
                                
                                </p>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="{{route('alternative-analysis-02')}}" class="real-estate-agentCard">
                            <span>
                                <img data-src="public/assets/images/Comparing Direct and Indirect Real Estate Investments.jpg" class="img-fluid lazy" alt="">
                            </span>
                            <span class="agentCard-bottomSect">
                                <p class="title2">
                                    {{-- Comparing Direct and Indirect Real Estate Investments --}}
                                    {!!$page[22]['content']!!}
                                </p>
                                <p class="para">
                                    {{-- Direct and indirect real estate investments offer different levels of control and diversification... --}}
                                    {!!$page[23]['content']!!}
                                </p>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="{{route('alternative-analysis-03')}}" class="real-estate-agentCard">
                            <span>
                                <img data-src="public/assets/images/Comparing Real Estate and Stock Investments.jpg" class="img-fluid lazy" alt="">
                            </span>
                            <span class="agentCard-bottomSect">
                                <p class="title2">
                                    {{-- Comparing Real Estate and Stock Investments --}}
                                    {!!$page[24]['content']!!}
                                </p>
                                <p class="para">
                                    {{-- Real estate and stock investments offer different benefits and risks... --}}
                                    {!!$page[25]['content']!!}
                                </p>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                       <a href="{{route('alternative-analysis-04')}}" class="real-estate-agentCard">
                            <span>
                                <img data-src="public/assets/images/Comparing Domestic and International Real Estate.jpg" class="img-fluid lazy" alt="">
                            </span>
                            <span class="agentCard-bottomSect">
                                <p class="title2">
                                    {{-- Comparing Domestic and International Real Estate... --}}
                                    {!!$page[26]['content']!!}
                                </p>
                                <p class="para">
                                    {{-- Domestic and international real estate investments offer different benefits and risks... --}}
                                    {!!$page[27]['content']!!}
                                </p>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="{{route('alternative-analysis-05')}}" class="real-estate-agentCard">
                            <span>
                                <img data-src="public/assets/images/Comparing Active and Passive Real Estate Investments.jpg" class="img-fluid lazy" alt="">
                            </span>
                            <span class="agentCard-bottomSect">
                                <p class="title2">
                                    {{-- Comparing Active and Passive Real Estate Investments --}}
                                    {!!$page[28]['content']!!}
                                </p>
                                <p class="para">
                                    {{-- Active and passive real estate investments offer different levels of involvement... --}}
                                    {!!$page[29]['content']!!}
                                </p>
                            </span>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <a href="{{route('alternative-analysis-06')}}" class="real-estate-agentCard">
                            <span>
                                <img data-src="public/assets/images/Comparing Private and Public Real Estate Investments.jpg" class="img-fluid lazy" alt="">
                            </span>
                            <span class="agentCard-bottomSect">
                                <p class="title2">
                                    {{-- Comparing Private and Public Real Estate Investments --}}
                                    {!!$page[30]['content']!!}
                                </p>
                                <p class="para">
                                    {{-- Private and public real estate investments offer different levels of access and liquidity... --}}
                                    {!!$page[31]['content']!!}
                                </p>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="in-why-choose-2" class="in-why-choose-section-2 faq-secs" data-background="assets/img/bg/wc-bg.jpg">
		<div class="container">

			<div class="in-why-choose-content-2">
				<div class="row">
					<div class="col-lg-6">

						<div class="in-section-title-2 headline wow fadeInLeft animated animated animated" data-wow-delay="200ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">

							<h2>ARIS360  FAQs</h2>
						</div>

						<div class="in-why-choose-img-text">
							<div class="in-why-choose-img-area">
								<div class="row">
									<div class="col-md-6 wow fadeInUp animated animated animated" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
										<div class="in-why-choose-img">
											<img class="lazy" data-src="public/assets/images/wc2.jpg" alt="">
										</div>

									</div>
									<div class="col-md-6 wow fadeInUp animated animated animated" data-wow-delay="500ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
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
								<div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
									<h2 class="accordion-header" id="headingOne2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne">
										{{-- What is a comparative market analysis (CMA) and why is it important? --}}
                                        {!!$page[32]['content']!!}
										</button>
									</h2>
									<div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2" style="">
										<div class="accordion-body">
                                        {{-- A comparative market analysis (CMA) is a report that compares similar properties that have recently sold, are currently on the market, or were listed but did not sell. This report helps to determine the fair market value of a property. It's important because it allows sellers to set the appropriate price for their property, and helps buyers to make informed decisions about what they're willing to pay for a property. --}}
                                        {!!$page[33]['content']!!}
                                    </div>
									</div>
								</div>

								<div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
									<h2 class="accordion-header" id="headingTwo22">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            {{-- How does Aris360's comparative analysis differ from other real estate websites? --}}
                                            {!!$page[34]['content']!!}
										</button>
									</h2>
									<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
										 {{-- ARIS360 's comparative analysis is different because it's based on a proprietary algorithm that takes into account a wide range of factors that impact property values, including location, property type, size, age, and condition. Additionally, ARIS360's comparative analysis is regularly updated to reflect the most recent market trends and changes. --}}
                                         {!!$page[35]['content']!!}
                                        </div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
									<h2 class="accordion-header" id="headingThree2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
											{{-- Can I get a comparative analysis report for a property that I'm interested in buying or selling? --}}
                                            {!!$page[36]['content']!!}
										</button>
									</h2>
									<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
                                            {{-- Yes, you can request a comparative analysis report for any property that you're interested in buying or selling. Simply fill out a request form on the ARIS360  website with some basic information about the property, and we'll generate a customized report for you. Our team of real estate experts is also available to answer any questions you may have and provide guidance throughout the buying or selling process. --}}
                                            {!!$page[37]['content']!!}
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

@endsection
