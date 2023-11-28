@extends('properties.layouts.main')
@section('content')

<style>
.colors {
  display: none;
}

</style>

<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap-switch-button@1.1.0/css/bootstrap-switch-button.min.css" rel="stylesheet">

<section class="mortgage-calc-sect1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mortgage-sec1-banner">
                    <p class="title">Current Mortgage Rates</p>
                    <p class="para">Enter your information to see today’s mortgage rates.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start of insurance calculator section
	============================================= -->
	<section id="in-insurance-calculator" class="in-insurance-calculator-section">
		<div class="container">
			<div class="in-insurance-calculator-content position-relative">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 col-12">
						<div class="in-get-quote-form-area">
							<div class="in-get-quote-btn">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#purchase" type="button" role="tab" aria-controls="home" aria-selected="true">Purchase</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#refinance" type="button" role="tab" aria-controls="profile" aria-selected="false">Refinance</button>
									</li>
								</ul>
							</div>
							<div class="in-contact-tab-area">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane animated fadeInUp show active" id="purchase" role="tabpanel" aria-labelledby="home-tab">
										<div class="in-contact-form-title-area">

											<div class="in-contact-form">
												<form action="#" method="get">

													<div>
														<label for="home_price2">Location</label>
														<div class="inline_input">
															<div class="input_label"></div>
															<input type="text" id="home_price2" name="home_price" placeholder="price" value="Seattle" />
														</div>
													</div>

													<div class="mt-2">
														<label for="home_price">Home price</label>
														<div class="inline_input">
															<div class="input_label">$</div>
															<input type="text" id="home_price" name="home_price" placeholder="price" value="" />
														</div>
													</div>

													<div class="row d-flex align-items-end mt-4">
														<div class="col-8">
															<div>
																<label for="down_payment">Down payment</label>
																<div class="inline_input">
																	<div class="input_label">$</div>
																	<input type="text" id="down_payment" name="down_payment" placeholder="payment" value="" />
																</div>
															</div>
														</div>
														<div class="col-4">
															<div>
																<div class="inline_input">
																	<input type="text" id="down_payment_percentage" name="down_payment_percentage" placeholder="%" value="" />
																	<div class="input_label">%</div>
																</div>
															</div>
														</div>
													</div>

													<div class="row mt-4">
														<div class="col-12">
    														<p class="mb-2">Loan Tenure</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="loan_type">
    																<option value="#">10 Year Fixed</option>
    																<option value="#">15 Year Fixed</option>
    																<option value="#">20 Year Fixed</option>
    																<option value="#" selected>30 Year Fixed</option>
    																<option value="#">40 Year Fixed</option>
    																<option value="#">1 Year ARM</option>
    																<option value="#">3 Year ARM</option>
    																<option value="#">5 Year ARM</option>
    																<option value="#">7 Year ARM</option>
    																<option value="#">10 Year ARM</option>
    															</select>
    														</div>
                                                        </div>
                                                        <p class="mt-4 mb-1">Loan Type</p>

														<select id="colorselector">
															<option value="red" selected>Standard Mortgage Documentation</option>
															<option value="yellow">Alternative Document Products</option>
														</select>

														<div id="red" class="colors reds">
															<div class="col-12">
																<div class="mt-3 mb-3">
																	<input type="radio" name="loan_year_radio" class="btn-check" id="bank_statement" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="bank_statement">Standard Full Documentation</label>
																	<br />
																	<input type="radio" name="loan_year_radio" class="btn-check" id="No_Ratio" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="No_Ratio">Home Possible Mortgage</label>
																	<br />
																	<input type="radio" name="loan_year_radio" class="btn-check" id="PL_Balance" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="PL_Balance">Remove Hard Money</label>
																	<br />
																	<input type="radio" name="loan_year_radio" class="btn-check" id="Bridge_Loan" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Bridge_Loan">VA</label>
																	<br />
																	<input type="radio" name="loan_year_radio" class="btn-check" id="Hard_Money" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Hard_Money">FHA</label>
																</div>
															</div>
														</div>
														<div id="yellow" class="colors yellows">
															<div class="col-12">
																<div class="mt-3 mb-3">
																	<input type="radio" name="loan_year_radioalt" class="btn-check" id="bank_statementalt" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="bank_statementalt">Bank Statement Loan</label>
																	<br />
																	<input type="radio" name="loan_year_radioalt" class="btn-check" id="No_Ratioalt" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="No_Ratioalt">Hard Money Loan</label>
																	<br />
																	<input type="radio" name="loan_year_radioalt" class="btn-check" id="PL_Balancealt" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="PL_Balancealt">No Ratio</label>
																	<br />
																	<input type="radio" name="loan_year_radioalt" class="btn-check" id="Bridge_Loanalt" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Bridge_Loanalt">Bridge Loan</label>
																	<br />
																	<input type="radio" name="loan_year_radioalt" class="btn-check" id="Hard_Moneyalt" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Hard_Moneyalt">P&L & Balance Sheet Loan</label>
																</div>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-12">
    														<p class="mb-0">Credit score</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="credit_score">
    																<option value="#">740+</option>
    																<option value="#">720 - 739</option>
    																<option value="#">700 - 719</option>
    																<option value="#">680 - 699</option>
    																<option value="#">660 - 679</option>
    																<option value="#">640 - 659</option>
    																<option value="#">620 - 639</option>
    																<option value="#">600 - 619</option>
    															</select>
    														</div>
    													</div>
                                                    </div>
													<div class="row d-flex align-items-center mt-4 mb-4">
														<div class="col-9">
															<p class="mb-0">Include VA loans</p>
															<small class="text-muted">Available for active U.S. military and veterans, as well as eligible spouses</small>
														</div>

														<div class="col-3 d-flex justify-content-end">
															<input type="checkbox" data-toggle="switchbutton" data-size="sm" data-onstyle="secondary" />
														</div>
													</div>

													<div class="row d-flex align-items-center mb-4">
														<div class="col-9">
															<p class="mb-0">Include FHA loans</p>
															<small class="text-muted">Available for borrowers with low down payment or low credit score</small>
														</div>

														<div class="col-3 d-flex justify-content-end">
															<input type="checkbox" data-toggle="switchbutton" data-size="sm" data-onstyle="secondary" />
														</div>
													</div>



													<div class="row  mt-3">
														<div class="col-12">
    														<p class="mb-0">Property type</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="property_type">
    																<option value="#">Single family / Townhome</option>
    																<option value="#">Condominium (less than 4 stories)</option>
    																<option value="#">Condominium (more than 4 stories)</option>
    																<option value="#">Duplex (2 Unit)</option>
    																<option value="#">Triplex (3 Unit)</option>
    																<option value="#">Quadplex (4 unit)</option>
    															</select>
    														</div>
    													</div>
													</div>
													<div class="row  mt-3">
														<div class="col-12">
    														<p class="mb-0">Property usage</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="property_type">
    																<option value="#">Primary residence</option>
    																<option value="#">Secondary / Vacation home</option>
    																<option value="#">Investment property</option>
    															</select>
    														</div>
    													</div>
                                                    </div>
													<div class="row  mt-3">
														<div class="col-12">
    														<p class="mb-0">Points</p>
    														<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
    															<input type="radio" class="btn-check" name="btnradio" id="points_all" autocomplete="off" checked>
    															<label class="btn btn-outline-primary px-4	" for="points_all">All</label>

    															<input type="radio" class="btn-check" name="btnradio" id="points_0" autocomplete="off">
    															<label class="btn btn-outline-primary px-4" for="points_0">0</label>

    															<input type="radio" class="btn-check" name="btnradio" id="points_01" autocomplete="off">
    															<label class="btn btn-outline-primary px-4" for="points_01">0-1</label>

    															<input type="radio" class="btn-check" name="btnradio" id="points_12" autocomplete="off">
    															<label class="btn btn-outline-primary px-4" for="points_12">1-2</label>
    														  </div>
    													</div>
                                                    </div>

													<button class="theme-btn btn-one" type="submit">Updates rates</button>
												</form>
											</div>
										</div>
									</div>
									<div class="tab-pane animated fadeInUp" id="refinance" role="tabpanel" aria-labelledby="home-tab">
										<div class="in-contact-form-title-area">

											<div class="in-contact-form">
												<form action="#" method="get">

													<div>
														<label for="home_price2">Location</label>
														<div class="inline_input">
															<div class="input_label"></div>
															<input type="text" id="home_price2" name="home_price" placeholder="price" value="Seattle" />
														</div>
													</div>
													<div class="mt-2">
														<label for="home_price2">Home Value</label>
														<div class="inline_input">
															<div class="input_label">$</div>
															<input type="text" id="home_price2" name="home_price" placeholder="price" value="400000" />
														</div>
													</div>

													<div class="row d-flex align-items-end mt-4">
														<div class="col-12">
															<div>
																<label for="down_payment2">Loan Balance</label>
																<div class="inline_input">
																	<div class="input_label">$</div>
																	<input type="text" id="down_payment2" name="down_payment" placeholder="payment" value="80000" />
																</div>
															</div>
														</div>
														<!--<div class="col-4">-->
														<!--	<div>-->
														<!--		<div class="inline_input">-->
														<!--			<input type="text" id="down_payment_percentage2" name="down_payment_percentage" placeholder="%" value="20" />-->
														<!--			<div class="input_label">%</div>-->
														<!--		</div>-->
														<!--	</div>-->
														<!--</div>-->
													</div>

													<div class="row mt-4">
														<div class="col-12">
														    <p class="mb-2">Loan Tenure</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="loan_type">
    																<option value="#">10 Year Fixed</option>
    																<option value="#">15 Year Fixed</option>
    																<option value="#">20 Year Fixed</option>
    																<option value="#" selected>30 Year Fixed</option>
    																<option value="#">40 Year Fixed</option>
    																<option value="#">1 Year ARM</option>
    																<option value="#">3 Year ARM</option>
    																<option value="#">5 Year ARM</option>
    																<option value="#">7 Year ARM</option>
    																<option value="#">10 Year ARM</option>
    															</select>
    														</div>
														</div>
														<p class="mt-4">Loan Type</p>

														<select id="colorselectorref">
															<option value="redref" selected>Standard Mortgage Documentation</option>
															<option value="yellowref">Alternative Document Products</option>
														</select>
														<div id="redref" class="colors">
															<div class="col-12">
																<div class="mt-3 mb-3">
																	<input type="radio" name="loan_year_radioref" class="btn-check" id="bank_statementref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="bank_statementref">Standard Full Documentation</label>
																	<br />
																	<input type="radio" name="loan_year_radioref" class="btn-check" id="No_Ratioref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="No_Ratioref">Home Possible Mortgage</label>
																	<br />
																	<input type="radio" name="loan_year_radioref" class="btn-check" id="PL_Balanceref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="PL_Balanceref">Remove Hard Money</label>
																	<br />
																	<input type="radio" name="loan_year_radioref" class="btn-check" id="Bridge_Loanref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Bridge_Loanref">VA</label>
																	<br />
																	<input type="radio" name="loan_year_radioref" class="btn-check" id="Hard_Moneyref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Hard_Moneyref">FHA</label>
																</div>
															</div>
														</div>
														<div id="yellowref" class="colors">
															<div class="col-12">
																<div class="mt-3 mb-3">
																	<input type="radio" name="loan_year_radioaltref" class="btn-check" id="bank_statementaltref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="bank_statementaltref">Bank Statement Loan</label>
																	<br />
																	<input type="radio" name="loan_year_radioaltref" class="btn-check" id="No_Ratioaltref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="No_Ratioaltref">Hard Money Loan</label>
																	<br />
																	<input type="radio" name="loan_year_radioaltref" class="btn-check" id="PL_Balancealtref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="PL_Balancealtref">No Ratio</label>
																	<br />
																	<input type="radio" name="loan_year_radioaltref" class="btn-check" id="Bridge_Loanaltref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Bridge_Loanaltref">Bridge Loan</label>
																	<br />
																	<input type="radio" name="loan_year_radioaltref" class="btn-check" id="Hard_Moneyaltref" autocomplete="off">
																	<label class="btn btn-outline-primary m-1" for="Hard_Moneyaltref">P&L & Balance Sheet Loan</label>
																</div>
															</div>
														</div>

													</div>



													<div class="row mt-4">
														<div class="col-12">
    														<p class="mb-0">Credit score</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="credit_score">
    																<option value="#">740+</option>
    																<option value="#">720 - 739</option>
    																<option value="#">700 - 719</option>
    																<option value="#">680 - 699</option>
    																<option value="#">660 - 679</option>
    																<option value="#">640 - 659</option>
    																<option value="#">620 - 639</option>
    																<option value="#">600 - 619</option>
    															</select>
    														</div>
    													</div>
                                                    </div>
													<div class="row d-flex align-items-center mt-3 mb-4">
														<div class="col-9">
															<p class="mb-0">Include VA loans</p>
															<small class="text-muted">Available for active U.S. military and veterans, as well as eligible spouses</small>
														</div>

														<div class="col-3 d-flex justify-content-end">
															<input type="radio" data-toggle="switchbutton" data-size="sm" data-onstyle="secondary" />
														</div>
													</div>

													<div class="row d-flex align-items-center mt-3 mb-4">
														<div class="col-9">
															<p class="mb-0">Include FHA loans</p>
															<small class="text-muted">Available for borrowers with low down payment or low credit score</small>
														</div>

														<div class="col-3 d-flex justify-content-end">
															<input type="radio" data-toggle="switchbutton" data-size="sm" data-onstyle="secondary" />
														</div>
													</div>



													<div class="row mt-3">
														<div class="col-12">
    														<p class="mb-0">Property type</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="property_type">
    																<option value="#">Single family / Townhome</option>
    																<option value="#">Condominium (less than 4 stories)</option>
    																<option value="#">Condominium (more than 4 stories)</option>
    																<option value="#">Duplex (2 Unit)</option>
    																<option value="#">Triplex (3 Unit)</option>
    																<option value="#">Quadplex (4 unit)</option>
    															</select>
    														</div>
    													</div>
													</div>

													<div class="row  mt-3">
														<div class="col-12">
    														<p class="mb-0">Property usage</p>
    														<div class="in-insurance-type in-select position-relative">
    															<select name="property_type">
    																<option value="#">Primary residence</option>
    																<option value="#">Secondary / Vacation home</option>
    																<option value="#">Investment property</option>
    															</select>
    														</div>
    													</div>
                                                    </div>
													<div class="row  mt-3">
														<div class="col-12">
    														<p class="mb-0">Points</p>
    														<div class="btn-group mb-4" role="group" aria-label="Basic radio toggle button group">
    															<input type="radio" class="btn-check" name="btnradio" id="points_all2" autocomplete="off" checked>
    															<label class="btn btn-outline-primary px-4	" for="points_all2">All</label>

    															<input type="radio" class="btn-check" name="btnradio" id="points_02" autocomplete="off">
    															<label class="btn btn-outline-primary px-4" for="points_02">0</label>

    															<input type="radio" class="btn-check" name="btnradio" id="points_012" autocomplete="off">
    															<label class="btn btn-outline-primary px-4" for="points_012">0-1</label>

    															<input type="radio" class="btn-check" name="btnradio" id="points_122" autocomplete="off">
    															<label class="btn btn-outline-primary px-4" for="points_122">1-2</label>
    														</div>
    													</div>
                                                    </div>

													<button class="theme-btn btn-one" type="submit">Updates rates</button>
												</form>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-12 col-12">
						<div class="in-insurance-calculator-text headline pera-content">
							<div class="in-insurance-calculator-title">
								<h3>Compare loan options</h3>
							</div>
							<div class="table-responsive">
                                @if (
                                    isset($userData->toArray()['data'])
                                    && count($userData->toArray()['data']) > 0
                                )
                                <table class="table">
									<thead>
										<tr>
										  <th scope="col">Lender</th>
										  <th scope="col">Rate</th>
										  <th scope="col">Mo. Payment</th>
										  <th scope="col"></th>
										</tr>
									</thead>
                                    @foreach ($userData->toArray()['data'] as $myCompany)
                                    @if (isset($myCompany['role']) && count($myCompany['role']) > 0)
									<tbody>
										<tr class="mortgage_row">
											<td>
												<h4>
                                                    @if ($myCompany['role']['name'] = 'Lender')
                                                            {{ $myCompany['company_name'] }}
                                                            @else
                                                            {{ $myCompany['company_name'] }}
                                                        @endif
                                                </h4>
                                                @if (file_exists($myCompany['company_dp']))
    												<img src="{{asset('public/images/userdp'.'/'.$myCompany['company_dp'])}}" class="img-180 my-2" alt="{{ $myCompany['company_name'] }}" />

                                                @else
    												<img src="https://www.straightforwardlending.com/public/images/users/{{ $myCompany['company_dp'] }}" class="img-180 my-2" alt="{{ $myCompany['company_name'] }}" />
                                                @endif
												<p class="text-muted">NMLS #
                                                    {{ $myCompany['company_nmls_id'] }}
                                                </p>
											</td>
											<td>
												<div class="in-btn-2 position-relative">
													<a href="https://www.straightforwardlending.com/mortgage-rate-list?search=@if(isset($search)){{ $search }} @endif" target="_blank" class="theme-btn btn-one">Get Started</a>
												</div>
											</td>
										</tr>
									</tbody>
                                    @endif
                                    @endforeach
								</table>
                                @endif
							</div>
							<div>
								<p>
									Payments shown here are calculated on the basis of principal and interest only and do not include taxes and insurance, which will result in higher monthly payments. Borrowers making a down payment of less than 20% may require mortgage insurance, which could increase the monthly payment and APR. The listings that appear on this page are from companies from which this website receives compensation, which may impact how, where and in what order products appear. Compensation is higher for Featured placements. This table does not include all companies or all available products.
								</p>
								<ul>
									<li>Monthly payment amounts do not include amounts for taxes and insurance premiums.</li>
									<li>
										Fees after credits.
									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End of insurance calculator section
	============================================= -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script>
        $("#down_payment_percentage").keyup(() => {
            if($("#home_price").val() != ""){
               $("#down_payment").val($("#home_price").val() * $("#down_payment_percentage").val() / 100);
            }
        })

		$(function() {
			$('#colorselector').change(function(){
				$('.colors').hide();
				$('#' + $(this).val()).show();
			});
			});

		$(function(){
			$('#colorselectorref').change(function(){
				$('.colors').hide();
				$('#' + $(this).val()).show();
			})
		})

	</script>
@endsection
