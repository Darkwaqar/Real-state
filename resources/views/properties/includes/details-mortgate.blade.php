<script src="{{ asset('public/assets/js/jquery.js') }}"></script>
<section class="mt-2">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 fixed_search_section">

            <div class="">

                <div class="search-field-section style-two mb-3">
                    <div class="inner-container">
                        <div class="search-field">
                            <div class="inner-box">
                                <div class="top-search">
                                    <div class="top_search_range" id="mortgage">
                                        @php
                                            $balance = $Details['properties']->PropetySellPrice;
                                            $mortgage = PMT(6, 30, $balance);
                                            $interest = 0;
                                            $principal = 0;
                                            $prininterest = 0;
                                            $downPayment  = 20 / 100 * $balance;
                                            for ($i = 1; $i <= 30 * 12; $i++) {
                                                $interest = ((6 / 100) * $balance) / 12;
                                                $principal = $mortgage - $interest;
                                                $balance = $balance - $principal;
                                                $prininterest = $principal + $interest;
                                            }
                                            
                                        @endphp
                                        <h6>Payment Calculator</h6>
                                        <div class="search_calculation" id="intialformulaval">
                                            <div class="search_calculation_top">
                                                <p class="payment_text"><strong>${{ showValue($principal) }} per
                                                        month</strong> <a href="javascript:void(0)">Reset</a></p>
                                                <div class="lender_btn">
                                                    <a href="javascript:void(0)">Find a lander</a>
                                                </div>
                                            </div>
                                            <div class="payment_color_bar">
                                                <div class="simpleBar principlePaymentColor"></div>
                                                <div class="simpleBar interestPaymentColor"></div>
                                                <div class="simpleBar loanPaymentColor"></div>
                                                <div class="simpleBar mortgagePaymentColor"></div>
                                            </div>
                                            <div class="search_calculation_bottom">
                                                <ul>
                                                    <li class="dotted_color1">
                                                        <span class="interest_princ">Principal and Interest</span><span
                                                            class="interest_rate">${{ showValue($prininterest) }}</span>
                                                        <p class="custom_poper">The monthly payments on your home loan
                                                            to your mortgage lender. Based on your loan size and
                                                            interest rate. Interest rates vary based on lender and
                                                            credit score.</p>
                                                    </li>
                                                    <li class="dotted_color2">
                                                        <span class="interest_princ">Homeowners' Insurance</span><span
                                                            class="interest_rate">$40</span>
                                                        <p class="custom_poper">Home buyers should purchase insurance
                                                            when they apply for a mortgage loan to guard against
                                                            potential damages to their future home. Compare quotes with
                                                            Policygenius.</p>
                                                    </li>
                                                    <li class="dotted_color3">
                                                        <span class="interest_princ">Property Taxes</span><span
                                                            class="interest_rate">$156</span>
                                                        <p class="custom_poper">This tax is a percentage of a home’s
                                                            assessed value and varies by area. Homeowners pay this tax
                                                            annually, semi-annually, or as part of a monthly mortgage
                                                            payment.</p>
                                                    </li>
                                                    <li class="dotted_color4">
                                                        <span class="interest_princ">Mortgage Insurance</span><span
                                                            class="interest_rate">$26</span>
                                                        <p class="custom_poper">Borrowers with a down payment of less
                                                            than 20% are required to purchase mortgage insurance.
                                                            Mortgage insurance protects the mortgage lender against loss
                                                            if a borrower defaults on their loan. Typically, mortgage
                                                            insurance rates range from 0.5%–1% of the loan amount. Your
                                                            actual rate may vary.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="search_calculation" id="downpaymentval" style="display: none">
                                            <div class="search_calculation_top">
                                                <p class="payment_text" id="MonttlyPayment"><strong> $  per
                                                        month</strong> <a href="javascript:void(0)">Reset</a></p>
                                                <div class="lender_btn">
                                                    <a href="javascript:void(0)">Find a lander</a>
                                                </div>
                                            </div>
                                            <div class="payment_color_bar">
                                                <div class="simpleBar principlePaymentColor"></div>
                                                <div class="simpleBar interestPaymentColor"></div>
                                                <div class="simpleBar loanPaymentColor"></div>
                                                <div class="simpleBar mortgagePaymentColor"></div>
                                            </div>
                                      
                                        </div>    




                                    </div>
                                    <form action="#" method="post" class="px-3">
                                        @csrf
                                        <div class="row d-flex justify-content-end align-items-center py-3">
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                                <div class="switch_btn_one">
                                                    <button id=""
                                                        class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                        <div class="inner_toggleBnt">
                                                            <span>Down Payment</span>
                                                            <strong  class="down_payment_text">${{showValue($downPayment)}} / 20%</strong>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-angle-down"> </i>
                                                        </div>
                                                    </button>

                                                    <div class="advanced-search" style="top: 55px !important">
                                                        <div class="range-box">

                                                            <div class="price-range">

                                                                <h6>Down Payment</h6>

                                                                <div class="payment_Rang_slider">
                                                                    <span>cash</span>
                                                                    <div class="payment_Rang_sliderValue">
                                                                        <input class="payment_max_value" type="text"
                                                                            name="down" id="down"
                                                                            value="$111,000" readonly>
                                                                        <input class="payment_perc_value" type="text"
                                                                            name="downPerc" id="downPerc"
                                                                            value="63%" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="progress_range">
                                                                    <input type="range" min="1" max="100" class="down_payment_slider"
                                                                        name="downRange" id="downRange" value="50">
                                                                </div>
                                                                {{-- <div class="payment_bottomSec">
                                                                    <p class="payment_bottomSec_values">
                                                                        <span>Cash</span>
                                                                        <span>$14338</span>
                                                                    </p>
                                                                    <p class="payment_bottomSec_values">
                                                                        <span>Home Equity</span>
                                                                        <span>$0</span>
                                                                    </p>
                                                                </div>
                                                                <div class="payment_bottomSec2">
                                                                    <p class="payment_bottomSec_values">
                                                                        <span>Total Down:</span>
                                                                        <strong>$447,980 (65%)</strong>
                                                                    </p>
                                                                </div> --}}
                                                            </div>

                                                        </div>

                                                        <button type="button" id="downButton"
                                                            class="btn btn-block done_btn mt-4">Done</button>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                                <div class="switch_btn_one">
                                                    <button
                                                        class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                        <div class="inner_toggleBnt">
                                                            <span>Home Price</span>
                                                            <strong class="home_price_text">{{ number_format($Details['properties']->PropetySellPrice) }}</strong>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-angle-down"> </i>
                                                        </div>
                                                    </button>

                                                    <div class="advanced-search" style="top: 55px !important">

                                                        <div class="form-group">

                                                            <label>Home Price</label>
                                                            <div class="payment_Rang_slider">
                                                                <div class="payment_Rang_sliderValue">
                                                                    <input class="payment_max_value" type="text"
                                                                        name="homePrice"
                                                                        value="{{ number_format($Details['properties']->PropetySellPrice) }}"
                                                                        id="homePrice">
                                                                </div>
                                                            </div>
                                                            <div class="progress_range">
                                                                <input type="range" min="1" max="100" class="home_prcie_slider"
                                                                    name="homeRange" value="50" id="homeRange">
                                                            </div>
                                                            <button type="button" id="priceButton"
                                                            class="btn btn-block done_btn mt-4">Done</button>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                                <div class="switch_btn_one">
                                                    <button
                                                        class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                        <div class="inner_toggleBnt">
                                                            <span>Loan Details</span>
                                                            <strong>30 yr, 6.317%</strong>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-angle-down ml-2"></i>
                                                        </div>
                                                    </button>
                                                    <div class="advanced-search"
                                                        style="top: 65px !important; left:auto!important; padding-left:25px; padding-right:10px">
                                                        <div class="form-group">
                                                            <label>Interest Rate</label>
                                                            <div class="payment_Rang_slider">
                                                                <div class="payment_Rang_sliderValue">
                                                                    <input class="payment_max_value" type="text" 
                                                                        name="interest" id="interest" placeholder="%6">
                                                                </div>
                                                            </div>
                                                            <div class="payment_Radio_btn">
                                                                <label>Loan Type</label>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input"
                                                                            name="optradio" value="30" id="optradio">30 Year Fixed
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input"
                                                                            name="optradio" value="15" id="optradio">15 Year Fixed
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="radio" class="form-check-input"
                                                                            name="optradio" value="5" id="optradio">5/1 ARM
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" id="loanButton"
                                                        class="btn btn-block done_btn mt-4">Done</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12 search-column mb-2">
                                                <div class="switch_btn_one">
                                                    <button
                                                        class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                        <div class="inner_toggleBnt">
                                                            <span>Advance option</span>
                                                        </div>
                                                        <div>
                                                            <i class="fas fa-angle-down ml-2"></i>
                                                        </div>
                                                    </button>
                                                    <div class="advanced-search"
                                                        style="top: 65px !important; left:auto!important; padding-left:25px; padding-right:10px">
                                                        <div class="form-group">
                                                            <label for="">Advance Option</label>
                                                            <div class="payment_Rang_slider">
                                                                <span>Property taxes</span>
                                                                <div class="payment_Rang_sliderValue">
                                                                    <input class="payment_max_value" type="text"
                                                                        name="proTax" id="proTax"
                                                                        placeholder="$111,000">
                                                                    <input class="payment_perc_value" type="text"
                                                                        name="proTaxperc" id="proTaxperc"
                                                                        placeholder="63%">
                                                                </div>
                                                            </div>
                                                            <div class="payment_Rang_slider">
                                                                <span>HOA Dues</span>
                                                                <div class="payment_Rang_sliderValue">
                                                                    <input class="payment_max_value" type="text"
                                                                        name="dues" id="dues"
                                                                        placeholder="$111,000">
                                                                </div>
                                                            </div>
                                                            <div class="payment_Rang_slider">
                                                                <span>Homeowners' Insurance</span>
                                                                <div class="payment_Rang_sliderValue">
                                                                    <input class="payment_max_value" type="text"
                                                                        name="homeInsurance" id="homeInsurance"
                                                                        placeholder="$111,000">
                                                                    <input class="payment_perc_value" type="text"
                                                                        name="homeInsuranceperc"
                                                                        id="homeInsuranceperc" placeholder="63%">
                                                                </div>
                                                            </div>
                                                            <div class="payment_Rang_slider">
                                                                <span>Mortgage Insurance</span>
                                                                <div class="payment_Rang_sliderValue">
                                                                    <input class="payment_max_value" type="text"
                                                                        name="mortInsurance"
                                                                        id="mortInsurance" placeholder="$111,000">
                                                                    <input class="payment_perc_value" type="text"
                                                                        name="mortInsurancepercperc"
                                                                        id="mortInsurancepercperc" placeholder="63%">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" id="advanceButton"
                                                        class="btn btn-block done_btn mt-4">Done</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>



<script type="text/javascript">

    $(document).ready(function () {

        // $("#downButton").click(function() {
            
            
        //     var downpaymentperc = $("#downPerc").val();
        //     var downpayment = $("#down").val();
        //     var downRange = $("#downRange").val();
        //     var priceGap = <?php
        //         echo  $Details['properties']->PropetySellPrice;
        //         ?>;
        //         document.getElementById("MonttlyPayment").innerHTML = priceGap;
        //         document.getElementById("interestrate").innerHTML = '$32';
                

        //     $('#downpaymentval').show();
        //     $('#intialformulaval').hide();

        // });

        $('.down_payment_slider').change(function () {
            down_payment_cal();
            home_price_call();
        });

        function down_payment_cal() {
            
            var _percentage = parseFloat($('.down_payment_slider').val());
            var _home_price = parseFloat($('#homePrice').val().replaceAll(',' , ''));
            
            var _downPayment_Total = (_home_price / 100) * _percentage ;

            $('#down').val('$'+_downPayment_Total);
            $('.down_payment_text').text('$'+_downPayment_Total);
            $('#downPerc').val(_percentage+'%')

        }
        function home_price_call() {
            
            var _price_slider = parseFloat($('.home_price_slider').val());
            var _home_price = parseFloat($('#homePrice').val().replaceAll(',' , ''));
            

            $('#down').val('$'+__price_slider);
            $('.homePrice').text('$'+_home_price);
            $('#downPerc').val(_percentage+'%')

        }

    });

</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>


