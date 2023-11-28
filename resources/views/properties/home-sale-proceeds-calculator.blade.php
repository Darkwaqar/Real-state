{{-- @php
    $metaTitle = 'Property For Sale Washington | Washington Property For Sale';
    $metaDescription = 'Discover a variety of properties for sale in Washington.
     Explore our extensive listings for Washington property for sale and find
      your dream home or investment opportunity today.';
@endphp
<head>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head> --}}
@extends('properties.layouts.main')
@section('content')

<section class="home-sale-cal-sect1">
    <div class="container">
        <h1 class="text-center">Determine Your Earnings</h1>
        <div class="row">
            <div class="col-lg-9 col-md-9 col-12">
                <div class="home-sale-cal-banner home-sale-red">
                    <div class="estimated-home-sale-table">
                        <p class="title">Estimate Profit Generation</p>
                        <table class="table table-striped">
                          <thead>
                              <tr>
                              <th scope="col"></th>
                              <th style="color: #de1e25;" scope="col" class="arisAgent1Res text-center">ARIS360  Agent</th>
                              <th scope="col" class="arisAgent2Res text-center">Traditional Agent</th>
                            </tr>
                            <tr>
                              <th scope="col"></th>
                              <th style="vertical-align:middle; text-align: center;" scope="col" class="arisAgent1Res arisAgent1ResBg">$<span>000</span></th>
                              <th style="vertical-align:middle; text-align: center;" scope="col" class="arisAgent2Res arisAgent1ResBg2">$<span>000</span> </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Seller Agent Commission</th>
                              <td class="arisAgent1">$<span class="1-5percent">0</span> (1.5%)</td>
                              <td class="arisAgent2 ">$<span class="3percent">0</span> (3%)</td>
                            </tr>
                            <tr>
                              <th scope="row">Buyer Agent Commission</th>
                              <td class="arisAgent1">$<span class="3percent">0</span> (3%)</td>
                              <td class="arisAgent2">$<span class="3percent">0</span> (3%)</td>
                            </tr>
                            <tr>
                              <th scope="row">Fees & Taxes</th>
                              <td class="arisAgent1">$<span class="taxNFee1">5,785</span></td>
                              <td class="arisAgent2">$<span class="taxNFee2">5,785</span></td>
                            </tr>
                          </tbody>
                        </table>
                        <div class="btn-box">
                            <a href="{{route('sell-with-aris')}}" class="theme-btn btn-one">Talk to ARIS about selling</a>
                        </div>
                    </div>
                    <div class="estimated-home-sale-save-sect">
                        <div class="save-sect">
                            <span><img data-src="public/assets/images/tag.png" class="img-fluid lazy"></span>
                            <p class="para"><strong>With ARIS360  You Save 1.5% On Seller Agent Commission</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="affordability-leftSect afford-rightwrap">
                    <form class="net_incomefields_section">
                        <div class="annual_incomefields">
                            <label>Home Sale Price</label>
                            <div class="income_field">
                                <input type="number" placeholder="" id="homeSalePriceInput">
                            </div>
                        </div>
                        <div class="annual_incomefields mt-3">
                            <label>Outstanding Mortgage</label>
                            <div class="income_field">
                                <input placeholder="" id="outstandingMortgage">
                            </div>
                        </div>
                        <!--<div class="field-input">-->
                        <!--    <label>Selling In</label>-->
                        <!--    <div class="select-box">-->
                        <!--        <select class="wide" style="display: none;">-->
                        <!--            <option data-display="Select a Region">Select a Region</option>-->
                        <!--            <option value="1">Boston</option>-->
                        <!--            <option value="2">Seattle</option>-->
                        <!--            <option value="3">Washington DC</option>-->
                        <!--        </select>-->
                        <!--        <div class="nice-select wide" tabindex="0">-->
                        <!--            <span class="current">Select a Region</span><ul class="list"><li data-value="Select a Region" data-display="Select a Region" class="option selected focus">Select a Region</li><li data-value="1" class="option">Boston</li><li data-value="2" class="option">Seattle</li><li data-value="3" class="option">Washington DC</li>-->
                        <!--            </ul></div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="btn-box">
                            <a href="javascript:void(0)" class="theme-btn btn-one mt-3" id="calculateSaleProceed">Calculate Sale Proceeds</a>
                        </div>
                        <small class="para_st mt-2">This calculator is not intended to replace a professional estimate.<span>*</span> </small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="agent-resource-center-sec3 why_choose_boxesSec">
    <div class="auto-container">
        <div class="resource-center-titleSec renowed-sec  profit-gen-sec">
            <p class="title profit-gentext">
                {{-- Know Your Profit Generation Calculation Model --}}
                {!!$page[0]['content']!!}
            </p>
            <!--<p>Dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text dummy text</p>-->
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 col-md-4 col-12 p-4">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">
                        {{-- Estimate Profit Generation --}}
                        {!!$page[1]['content']!!}
                    </p>
                    <p class="para">
                        {{-- An approximation of the amount you take home as net income from the sale of a property after current debt, agent fees and taxes. --}}
                        {!!$page[2]['content']!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 p-4">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">
                        {{-- Agents Fees --}}
                        {!!$page[3]['content']!!}
                    </p>
                    <p class="para">
                        {{-- Real Estate agents are authorized for commissions on property sale. --}}
                        {!!$page[4]['content']!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 p-4">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">
                        {{-- Compare Your Options --}}
                        {!!$page[5]['content']!!}
                    </p>
                    <p class="para">
                        {{-- Determine a consequential analysis of selling or not selling property based on evaluated data. --}}
                        {!!$page[6]['content']!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 p-4">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">
                        {{-- Estimate Selling Price --}}
                        {!!$page[7]['content']!!}
                    </p>
                    <p class="para">
                        {{-- An approximated selling price assumed to incorporate an approximate for profitability. --}}
                        {!!$page[8]['content']!!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 p-4">
                <div class="agent-articaleBox agentarticleboxpd">
                    <p class="title2">
                        {{-- Save as Investment --}}
                        {!!$page[9]['content']!!}
                    </p>
                    <p class="para">
                        {{-- Savings through rates and offerings are invested in the property you acquire as a marginal asset. --}}
                        {!!$page[10]['content']!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section cta-sec-sell bg-color-2">

        <div class="pattern-layer" style="background-image: url(public/assets/images/shape/shape-2.png); background-size: cover; background-repeat: no-repeat;"></div>

        <div class="auto-container">

            <div class="inner-box clearfix">

                <div class="text">

                    <h2>
                        {{-- Individual Marketing For Property Sales --}}
                        {!!$page[11]['content']!!}
                    </h2>
                    <h6>
                        {{-- Marketing aimed at promoting the sale of a particular property to individual buyers --}}
                        {!!$page[12]['content']!!}
                    </h6>

                </div>

                <div class="btn-box">

                    <a href="{{route('sell-with-aris')}}" class="theme-btn btn-one">Sell With Aris</a>

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
							<h2>ARIS360 FAQs</h2>
						</div>

						<div class="in-why-choose-img-text">
							<div class="in-why-choose-img-area">
								<div class="row">
									<div class="col-md-6 wow fadeInUp animated animated animated" data-wow-delay="400ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInUp;">
										<div class="in-why-choose-img">
											<img data-src="public/assets/images/wc2.jpg" class="lazy" alt="">
										</div>

									</div>
									<div class="col-md-6 wow fadeInUp animated animated animated" data-wow-delay="500ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 500ms; animation-name: fadeInUp;">
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
								<div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
									<h2 class="accordion-header" id="headingOne2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne">
											 {{-- How much will I earn if I sell my property? --}}
                                             {!!$page[13]['content']!!}
                                            </button>
									</h2>
									<div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2" style="">
										<div class="accordion-body">
											{{-- Interest rate that borrowers pay on their home loans. In the USA, mortgage rates can vary depending on the lender, loan term, credit score, and other factors. --}}
                                            {!!$page[14]['content']!!}
                                        </div>
									</div>
								</div>

								<div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
									<h2 class="accordion-header" id="headingTwo22">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
											   {{-- Does any one want to buy my house? --}}
                                               {!!$page[15]['content']!!}
                                            </button>
									</h2>
									<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo22" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											{{-- Mortgage rates are influenced by several factors, including the state of the economy, inflation rates, government policies, and the demand for housing. --}}
                                            {!!$page[16]['content']!!}
                                        </div>
									</div>
								</div>
								<div class="accordion-item headline-2 pera-content wow fadeInUp animated animated animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
									<h2 class="accordion-header" id="headingThree2">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
											{{-- Is there any Safety for the Payment Process for Selling my Property? --}}
                                            {!!$page[17]['content']!!}
                                        </button>
									</h2>
									<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
										<div class="accordion-body">
											{{-- The choice between a fixed or adjustable mortgage rate depends on the borrower's financial situation and goals. --}}
                                            {!!$page[18]['content']!!}
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


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script>
// function kFormatter(num) {
//     return Math.abs(num) > 999 ? Math.sign(num)*((Math.abs(num)/1000).toFixed(1)) + 'k' : Math.sign(num)*Math.abs(num);
// }
    $("#calculateSaleProceed").click(function(){
           let arisAgent1Res = 0;
           let arisAgent2Res = 0;
           $(".1-5percent").text(((($("#homeSalePriceInput").val() / 100) * 1.5).toFixed(2).replace(/\.0+$/, '')).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
           $(".3percent").text(((($("#homeSalePriceInput").val() / 100) * 3).toFixed(2).replace(/\.0+$/, '')).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));

           $(".arisAgent1").each((index, element) => {

               arisAgent1Res =  $("#homeSalePriceInput").val() - parseFloat(element.querySelector("span").innerText.replace(/,/g, '')) ;

           });

            $(".arisAgent2").each((index, element) => {

               arisAgent2Res =  $("#homeSalePriceInput").val() - parseFloat(element.querySelector("span").innerText.replace(/,/g, '')) ;

           });

           if(arisAgent1Res >= 1000){
               $(".arisAgent1Res span").text((arisAgent1Res - $("#outstandingMortgage").val()).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
           }
           else {
               $(".arisAgent1Res span").text(0);
           }

           if(arisAgent2Res >= 1000){
               $(".arisAgent2Res span").text((arisAgent2Res - $("#outstandingMortgage").val()).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
           }
           else {
               $(".arisAgent2Res span").text(0);
           }


    });
</script>
@endsection
