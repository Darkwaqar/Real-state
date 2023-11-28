@php
    $metaTitle = "ARIS360 | " . $Details['properties']->PropertyAddress;
   @endphp
<head>
    <title>{{ $metaTitle }}</title>

</head>

<style>
.collapse_wrap {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin: 30px 0 0 0;
}

.collapse_header_title {
    font-size: 20px;
    color: #000000;
    margin-bottom: 40px;
}
.collapse_wrap .collapse_items {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}
.collapse_wrap .collapse_items h1 {
    font-size: 18px;
    height: 40px;
    display: flex;
    align-items: center;
    line-height: 1;
}

.collapse_wrap .custom_collapse {
    height: 40px;
    overflow: hidden;
    transition: .3s;
    border-bottom: 1px solid #cccccc;
}
.collapse_wrap .custom_collapse button {
    width: 100%;
    height: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;

    background: #ffffff;

}

</style>

@extends('properties.layouts.main')

@section('content')
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
    <style>

        #map {
            width: 100%;
            height: 400px;
            border-radius: 12px;
        }

        #map2 {
            width: 100%;
            height: 400px;
            border-radius: 12px;
        }

        #locationField,
        #controls {
            position: relative;
            width: 480px;
        }

        /* #autocomplete {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 99%;
            } */

        .label {
            text-align: right;
            font-weight: bold;
            width: 100px;
            color: #303030;
        }

        #address {
            border: 1px solid #000090;
            background-color: #f0f0ff;
            width: 480px;
            padding-right: 2px;
        }

        #address td {
            font-size: 10pt;
        }

        .field {
            width: 99%;
        }

        .slimField {
            width: 80px;
        }

        .wideField {
            width: 200px;
        }

        #locationField {
            height: 20px;
            margin-bottom: 2px;
        }

    </style>

    <div id="property_nav" class="container-fluid">
        <div class="container">
            <div class="property_section_list">
                <ul>
                    <li>
                        <a href="#overview">Overview</a>
                    </li>
                    <li>
                        <a href="#propertyDetail">Property Details</a>
                    </li>
                    <li>
                        <a href="#taxHistory" hre>Tax History </a>
                    </li>
                    <li>
                        <a href="#schoolData">School</a>
                    </li>
                    <li>
                        <a href="#estimate">ARIS360 Estimate</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @if (isset($Details['properties']->ListingContractDate))
    <span class="category5">  Days On Market: {{getTimeSinceCreation($Details['properties']->ListingContractDate)}} Days</span>
    @endif
    <section class="property-details property-details-one">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="property-details-content">

                        <div class="property_images_and_datePicker" id="overview">
                            <div class="row">
                                @if( isset($Details['topThreeMedia'][0]) && $Details['topThreeMedia'][0]['Order'] == 0)
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <div class="property_main_img">

                                            <a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#propertyDetailimg">
                                                <img id="" class="lazy" src="{{$Details['topThreeMedia'][0]['s3buckettempurl']}}" alt="">
                                            </a>
                                            <div class='btnCont'>
                                                <button id="streetViewButton" data-toggle="modal"
                                                        data-target="#streetViewModal" class="theme-btn btn-two">
                                                    <i class="fad fa-street-view"></i>Street View
                                                </button>

                                                @if(isset($Details['PropertyOtherDetails']->VirtualTourURLUnbranded) && !empty($Details['PropertyOtherDetails']->VirtualTourURLUnbranded))

                                                    <a href="{{$Details['PropertyOtherDetails']->VirtualTourURLUnbranded}}"
                                                        target="_blank" class="theme-btn btn-two">Virtual Tour</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="property_main2_images">
                                        @if(isset($Details['topThreeMedia'][1]))
                                        <div class="property_main_img2">
                                            <a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#propertyDetailimg">
                                                <img id="" class="lazy" src="{{$Details['topThreeMedia'][1]['s3buckettempurl']}}" alt="">
                                            </a>
                                        </div>
                                        @endif
                                        @if( isset($Details['topThreeMedia'][2]))
                                        <div class="property_main_img2">
                                            <a href="javascript:void(0)" data-toggle="modal"
                                                data-target="#propertyDetailimg">
                                                <img id="" class="lazy" src="{{$Details['topThreeMedia'][2]['s3buckettempurl']}}" alt="">
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                    <a class="all_photos" href="javascript:void(0)" data-toggle="modal" data-target="#propertyDetailimg">see all {{$Details['countMedia'][0]['media_count'] > 0 ? $Details['countMedia'][0]['media_count'] : 'N/A'}} photos</a>
                                </div>
                            </div>

                            <div class="date_slider_section">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-12">
                                <div class="smallInfo">
                                    <div class="proprty_status">
                                        <h5>{{isset($Details['properties']->PublishStatus) ? $Details['properties']->PublishStatus : 'N/A' }}</h5>
                                    </div>
                                    <div class="propertyInfo">
                                        @if(isset($Details['properties']->IsMlsProperty) && $Details['properties']->IsMlsProperty == 1)
                                            <p>
                                                <span class="text-danger">Listing Firm:</span>
                                                {{$Details['properties']->ListOfficeName}}
                                            </p>
                                        @endif
                                        <span>MLS # {{$Details['properties']->ListingKeyNumeric}} </span>
                                        @if(!empty($Details['PropertyOtherDetails']->VirtualTourURLUnbranded))
                                            <a class="theme-btn btn-one" target="_blank" rel="noopener"
                                               href="{{($Details['PropertyOtherDetails']->VirtualTourURLUnbranded) }}">
                                                Virtual Tour </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="virtualBttn-text d-flex align-items-center">

                                    <div class="virtualBttn-sec virtualBttn-sec-2 d-flex align-items-center flex-wrap">

                                    </div>
                                </div>
                                <div class="property_detail_bttm_sect">
                                    <div class="top-details clearfix">
                                        <div class="addressShare">
                                            <h3>{{$Details['properties']->PropertyAddress}}</h3>
                                            <div class="fav_and_share">
                                                <div class="share_onlyIcon">
                                                    <ul class="other-option feat_fav pull-right clearfix">
                                                        @if (auth()->check())
                                                            <li>
                                                                <button id="shrBtnListed{{$Details['properties']->id}}"
                                                                        data-id="{{$Details['properties']->id}}"
                                                                        data-text="{{$Details['properties']->id}}"
                                                                        data-user="{{Auth::id()}}"
                                                                        href="javascript:;"
                                                                        data-toggle="modal"
                                                                        data-target="#shareModal"
                                                                        class="formShare">
                                                                    <i class="far fa-share"></i>
                                                                </button>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <button class="shrNotLoggedIn"><i
                                                                        class="far fa-share"></i></button>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="fav_onlyIcon">
                                                    <ul class="other-option feat_fav pull-right clearfix">
                                                        @if (auth()->check())
                                                            @if (isset($Details['favorite'][0]['is_fav']) and $Details['favorite'][0]['is_fav'] == 1)
                                                                <li>
                                                                    <button
                                                                        id="favBtnListed{{$Details['properties']->id}}"
                                                                        data-id="{{$Details['properties']->id}}"
                                                                        data-text="{{$Details['properties']->id}}"
                                                                        class="formFavourite skzfavx"><i
                                                                            class="fas fa-heart"></i></button>
                                                                </li>
                                                            @else
                                                                <li>
                                                                    <button
                                                                        id="favBtnListed{{$Details['properties']->id}}"
                                                                        data-id="{{$Details['properties']->id}}"
                                                                        data-text="{{$Details['properties']->id}}"
                                                                        class="formFavourite"><i
                                                                            class="far fa-heart"></i></button>
                                                                </li>
                                                            @endif
                                                        @else
                                                            <li>
                                                                <button class="favNotLoggedIn"><i
                                                                        class="far fa-heart"></i></button>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="price_section">
                                            <div class="price_section_left">
                                                <h3 class="property_priceNew">
                                                    ${{number_format($Details['properties']->PropetySellPrice)}}
                                                </h3>
                                                <div class="price_section2">
                                                    <div class="author-info clearfix">
                                                        <ul class="rating est-monthly clearfix pull-left">
                                                            <li>
                                                                <a class="theme-btn-payment"
                                                                   href="">Est. ${{ number_format($principal)}}
                                                                    <span>Monthly Payment</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/lender-directory')}}"
                                                                   class="theme-btn-payment theme-btn-app p-0">
                                                                    Get Pre Approved
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="author-info clearfix">
                                                    <ul class="rating clearfix">
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="bed_innerSec">
                                                <div class="bed_innerSec_left">

                                                </div>

                                                <div class="bed_innerSec_right">
                                                    <ul class="sliderSec_detail">
                                                        <li>
                                                            @if($Details['properties']->Bedrooms>0)
                                                                <span>{{$Details['properties']->Bedrooms}}</span>
                                                            @else
                                                                <span>-</span>
                                                            @endif

                                                            <span>Beds</span>
                                                        </li>
                                                        <li>
                                                            @if($Details['properties']->BathroomsFull>0)
                                                                <span>{{$Details['properties']->BathroomsFull}}</span>
                                                            @else
                                                                <span>-</span>
                                                            @endif
                                                            <span>Baths</span>
                                                        </li>
                                                        <li>
                                                            @if($Details['properties']->PropertyArea>0)
                                                                <span>{{$Details['properties']->PropertyArea}}</span>
                                                            @else
                                                                <span>-</span>
                                                            @endif

                                                            <span>Sq.ft.</span>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    @if(isset($Details['properties']->IsMlsProperty) && $Details['properties']->IsMlsProperty == 1)
                                        <small class="mt-2 mb-0">Listings with the three tree icon are courtesy of NWMLS<span
                                                class="property_small_img">
                                        <img src="{{asset('public/assets/images/NWMLS2.jpeg')}}" class="img-fluid">
                                    </span></small>
                                    @endif

                                    <div class="discription-box content-widget" style="padding: 2px 30p">
                                        <div class="title-box" style="margin-bottom: 0px;">
                                            <h3>About This Property</h3>
                                        </div>

                                        @if(!empty($Details['properties']->PropertyDescription))
                                            <div class="text">
                                                <p class="more">{{$Details['properties']->PropertyDescription}}</p>

                                            </div>
                                        @endif

                                    </div>

                                    <div class="location-box content-widget">
                                        <div class="title-box">
                                            <h3>Location</h3>
                                        </div>
                                        <ul class="info virtual_loc clearfix">
                                            <li>
                                                <span>Country:</span> @if(!empty($Details['PropertyOtherDetails']->Country))
                                                    {{$Details['PropertyOtherDetails']->Country}}</li>
                                            @endif</li>
                                            <li><span>Neighborhood:</span>
                                                @if(!empty($Details['PropertyOtherDetails']->StreetName))
                                                    {{$Details['PropertyOtherDetails']->StreetName}}</li> @endif
                                            <li><span>Zip/Postal Code:</span> {{$Details['properties']->PostalCode}}
                                            </li>
                                            <li><span>City:</span> {{$Details['properties']->CityName}}</li>
                                        </ul>

                                        <div class="google-map-area">
                                            <div id="map" class="in-google-map lazy"></div>

                                        </div>
                                    </div>

                                    <div class="payment_calculator_wrapper">
                                        <h3 class="property_feature">Payment Calculator</h3>
                                        <div class="payment_calculator_content">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="payment_section">
                                                        <h4 id="monthlyPaymentHeading"><a href="javascript:void(0)">Reset</a>
                                                            ${{ number_format($principal)}} per month</h4>
                                                        <div class="btn-box">
                                                            <a href="javascript:void(0)" class="theme-btn btn-one">Get
                                                                pre-approved</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="payment_progressBar">
                                                        <div class="principle_int_rate"></div>
                                                        <div id="progressBar1" class="property_taxes"></div>
                                                        <div id="progressBar2" class="HOA_dues"></div>
                                                        <div id="progressBar3" class="Home_insu"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6">
                                                    <div class="payment_value_section princ_rate_sect">
                                                        <p class="payment_value_title">Principal and interest</p>
                                                        <p class="payment_value" id="PrincipalTaxInner">$0</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6">
                                                    <div class="payment_value_section property_Taxes_text">
                                                        <p class="payment_value_title">Property taxes</p>
                                                        <p class="payment_value" id="propertyTaxInner">$0</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6">
                                                    <div class="payment_value_section hoa_dues_text">
                                                        <p class="payment_value_title">HOA dues</p>
                                                        <p class="payment_value" id="HOAInner">$0</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 col-md-6">
                                                    <div class="payment_value_section home_insurance">
                                                        <p class="payment_value_title">Homeowners' insurance</p>
                                                        <p class="payment_value" id="HomeownersTaxInner">$0</p>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="MortgageCalculatorForm">
                                                        <div class="defaultpanel_downPaymentSection">
                                                            <div class="downPaymentSection">
                                                                <p class="panel-title">Down payment</p>
                                                                <p class="panel-value" id="downpayValue"><i
                                                                        class="fas fa-pencil"></i></p>
                                                            </div>
                                                            <div class="downPaymentSection_modal">
                                                                <div class="PaymentSection_modal_inner">
                                                                    <p class="panel-value">Down payment</p>
                                                                    <a href="javascript:void(0)"
                                                                       class="downPaymentclose"><i
                                                                            class="fas fa-times"></i></a>
                                                                    <div class="payment_label_input">
                                                                        <label for="">cash</label>
                                                                        <div class="payment_label_input2">
                                                                            <input
                                                                                onchange="calculatePercentageDownPay()"
                                                                                id="downpay"
                                                                                class="payment_label_input_border"
                                                                                type="text" value="0">
                                                                            <input id="percent1"
                                                                                   onchange="calculatePercentage()"
                                                                                   class="payment_label_input2_notBorder"
                                                                                   type="text" value="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="cashPayment_range">
                                                                        <input onchange="DownpayRange()"
                                                                               id="downpayRange" type="range"
                                                                               value="10000" min="0" max="1000000"
                                                                               step="1" class="progresss">
                                                                    </div>
                                                                    <p class="payment_label_title">Have a home to
                                                                        sell?</p>
                                                                    <div class="btn-box">
                                                                        <a href="javascript:void(0)"
                                                                           class="theme-btn btn-one">Add my home
                                                                            equity</a>
                                                                    </div>
                                                                    <ul class="home_equity">
                                                                        <li>
                                                                            <span>cash</span>
                                                                            <span>$321,750</span>
                                                                        </li>
                                                                        <li>
                                                                            <span>Home Equity</span>
                                                                            <span>$0</span>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="Payment_total">
                                                                        <p class="panel-title">Down payment</p>
                                                                        <p class="panel-value" id="downpayValue2"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="defaultpanel_HomePriceValue">
                                                            <div class="HomePriceValue">
                                                                <p class="panel-title">Home
                                                                    price {{ number_format($Details['properties']->PropetySellPrice)}}</p>
                                                                <p class="panel-value" id="homePrice"><i
                                                                        class="fas fa-pencil"></i></p>
                                                            </div>
                                                            <div class="HomePrice_modal">
                                                                <div class="PaymentSection_modal_inner">
                                                                    <p class="panel-value">Home price</p>
                                                                    <a href="javascript:void(0)" class="Priceclose"><i
                                                                            class="fas fa-times"></i></a>
                                                                    <div class="payment_label_input">
                                                                        <div class="payment_label_input2">
                                                                            <input onchange="calculateHomePrice()"
                                                                                   id="homeVal" class="home_price_input"
                                                                                   type="text"
                                                                                   value="{{ number_format($Details['properties']->PropetySellPrice)}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="cashPayment_range">
                                                                        <input onchange="calculateHomePriceRange()"
                                                                               id="rangeinput" type="range" value="0"
                                                                               min="0" max="100000" step="1"
                                                                               class="progresss">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="defaultpanel_LoanDetailValue">
                                                            <div class="LoanDetailValue">
                                                                <p class="panel-title">Loan details</p>
                                                                <p class="panel-value">30 yr, 7.03% <i
                                                                        class="fas fa-pencil"></i></p>
                                                            </div>
                                                            <div class="LoanDetailValue_modal">
                                                                <div class="PaymentSection_modal_inner">
                                                                    <p class="panel-value">Interest rate</p>
                                                                    <a href="javascript:void(0)"
                                                                       class="interestclose"><i
                                                                            class="fas fa-times"></i></a>
                                                                    <div class="payment_label_input">
                                                                        <div class="payment_label_input2">
                                                                            <input onchange="InterestInput()"
                                                                                   class="home_price_input"
                                                                                   id="loanInput" type="text" value="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="loanType_radio_sect">
                                                                        <p class="panel-value">Loan type</p>
                                                                        <div class="loan__type__radio">
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" value="30"
                                                                                       id="LoanType1"
                                                                                       onclick="RadioChange()"
                                                                                       name="loantypeRadio"
                                                                                       class="custom-control-input">
                                                                                <label class="custom-control-label"
                                                                                       for="LoanType1">30 </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" value="25"
                                                                                       onclick="RadioChange()"
                                                                                       id="LoanType2"
                                                                                       name="loantypeRadio"
                                                                                       class="custom-control-input">
                                                                                <label class="custom-control-label"
                                                                                       for="LoanType2">15 </label>
                                                                            </div>
                                                                            <div class="custom-control custom-radio">
                                                                                <input type="radio" value="5"
                                                                                       onclick="RadioChange()"
                                                                                       id="LoanType3"
                                                                                       name="loantypeRadio"
                                                                                       class="custom-control-input">
                                                                                <label class="custom-control-label"
                                                                                       for="LoanType3">5 </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="defaultpanel_AdvanceValueOpt">
                                                            <div class="AdvanceValueOpt">
                                                                <p class="panel-title"><i class="fas fa-ellipsis-h"></i>
                                                                </p>
                                                            </div>
                                                            <div class="AdvanceValueOpt_modal">
                                                                <div class="PaymentSection_modal_inner">
                                                                    <p class="panel-value">Advanced options</p>
                                                                    <a href="javascript:void(0)"
                                                                       class="AdvanceValueOptclose"><i
                                                                            class="fas fa-times"></i></a>
                                                                    <div class="payment_label_input">
                                                                        <label for="">Property taxes</label>
                                                                        <div class="payment_label_input2">
                                                                            <input onchange="onchangeTax()" id="tax"
                                                                                   class="payment_label_input_border"
                                                                                   type="text" value="0">
                                                                            <input id="taxPercent"
                                                                                   class="payment_label_input2_notBorder"
                                                                                   type="text" value="0.85%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="payment_label_input">
                                                                        <label for="">HOA dues</label>
                                                                        <div class="payment_label_input2">
                                                                            <input onchange="onchangeHOA()" id="hoa"
                                                                                   class="payment_label_input_border"
                                                                                   type="text" value="0">
                                                                            <input
                                                                                class="payment_label_input2_notBorder"
                                                                                type="text" value="0%">
                                                                        </div>
                                                                    </div>
                                                                    <div class="payment_label_input">
                                                                        <label for="">Homeowners' insurance</label>
                                                                        <div class="payment_label_input2">
                                                                            <input onchange="onchangeinsurance()"
                                                                                   id="homeOwnerIns"
                                                                                   class="payment_label_input_border"
                                                                                   type="text" value="0">
                                                                            <input
                                                                                class="payment_label_input2_notBorder"
                                                                                type="text" value="0.33%">
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="contentModal">
                                        <div class="headerBox">
                                            <a data-toggle="modal" href="javascript:;"
                                               data-target="#electricityAndSolarModal">
                                                Electricity and solar
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal" id="electricityAndSolarModal">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h3 class="modal-title font-weight-normal">Electricity</h3>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        &times;
                                                    </button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <p> Estimated electricity cost </p>
                                                    <h5 class="mt-3"> ${{$Details['electricity']['min_cost']}} per
                                                        month </h5>
                                                    <p class="mt-3">Based on home features, weather and climate, and
                                                        local electricity rates.</p>

                                                    <div class="mt-4">
                                                        <div class="row">
                                                            <div class="col-md-8 col-lg-8 col-sm-12">
                                                                <span class="">Monthly usage</span>
                                                                <span class="ml-5">{{$Details['electricity']['min_usage']}} kWh</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <hr>

                                                    <div class="mt-4">
                                                        <h5 class="mb-3"><a href="#"> View full energy details on
                                                                WattBuy </a></h5>
                                                        <p>Electricity and solar estimates are provided by WattBuy
                                                            for informational purposes only. Aris360 does not
                                                            guarantee this information and is not responsible for
                                                            the accuracy of energy estimates.</p>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Check if 'fourSquareData' exists and is not empty -->
                                    @if(isset($Details['fourSquareData']) && !empty($Details['fourSquareData']))
                                        <div class="contentModal">
                                            <div class="headerBox">
                                                <a href="javascript:;" data-toggle="modal" data-target="#places_modal">
                                                    View Nearby Amenities
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade placesModal" id="places_modal" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered places-modal-wrapper"
                                                 role="document">
                                                <div class="modal-content ">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Around this
                                                            home</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul class="custom-tabs">
                                                            @foreach ($Details['fourSquareData'] as $category => $places)
                                                                <li class="custom-tab-link {{ $loop->first ? 'active' : '' }}"
                                                                    data-tab="{{ str_replace(' ', '-', strtolower($category)) }}-tab">{{ $category }}
                                                                    <div class="tag">{{ count($places) }}</div>
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                        @foreach ($Details['fourSquareData'] as $category => $places)
                                                            <div
                                                                id="{{ str_replace(' ', '-', strtolower($category)) }}-tab"
                                                                class="custom-tab-content {{ $loop->first ? 'active' : '' }}">
                                                                <div class="row">
                                                                    @foreach ($places as $place)
                                                                        <div class="col-lg-6 p-3">
                                                                            <div class="content-wrapper">
                                                                                <div class="thumb">
                                                                                    <div
                                                                                        class="thumb-load skeleton"></div>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h1>{{ $place['name'] }}</h1>
                                                                                    <p>
                                                                                        {{ $place['location']['address'] ?? 'No address provided.' }}
                                                                                    </p>
                                                                                    <p>
                                                                                        Distance: {{ $place['distance'] * 0.001 }}
                                                                                        km
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                    @endforeach

                                                    <!-- Your pagination here -->

                                                        <div class="col-lg-12">
                                                            <p class="desc">
                                                                Foursquare's listing of nearby conveniences is intended
                                                                only as a helpful guide.
                                                                Buyers are encouraged to perform their own research on
                                                                the availability of requested
                                                                facilities, since ARIS360 does not support or guarantee
                                                                this information.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            $(document).ready(function () {
                                                // Switch tabs
                                                $('.custom-tab-link').click(function () {
                                                    var currentTab = $('.custom-tab-content.active');
                                                    var newTabId = $(this).data('tab');
                                                    var newTab = $('#' + newTabId);

                                                    // Ignore click if the current tab is clicked
                                                    if (currentTab.attr('id') === newTabId) {
                                                        return;
                                                    }

                                                    // Add exit animation to current tab
                                                    currentTab.removeClass('active');
                                                    currentTab.addClass('exit');

                                                    // Remove active class from tab links
                                                    $('.custom-tab-link').removeClass('active');

                                                    // Add active class to selected tab link
                                                    $(this).addClass('active');

                                                    // Add active class to new tab and remove exit animation
                                                    newTab.addClass('active');
                                                    newTab.removeClass('exit');
                                                });
                                            });
                                        </script>
                                    @endif

                                    <div class="ask_agent_question">
                                        <h2 class="property_feature text-capitalize">Connect with an ARIS360 Prime Agent</h2>
                                        <div class="ask_agent_question_sect">
                                            <div class="agent_prof_detail">
                                            @if(!empty($Details['agent_details']))
                                                <div class="agent_pf_photo">
                                                    <img src={{ asset('public/images/userdp/'.$Details['agent_details'][0]['user_dp']) }} alt="">
                                                </div>
                                                <div class="agent_pf_mainDetail">
                                                    <p class="titleName">{{ ucfirst($Details['agent_details'][0]['first_name']) . ' ' .  ucfirst($Details['agent_details'][0]['last_name'])  }}</p>
                                                    <p class="desc_title">Prime Agent</p>
                                                    <p class="desc_title"><i class="fas fa-envelope"></i><a
                                                            href="emailto:{{$Details['agent_details'][0]['email']}}">{{ $Details['agent_details'][0]['email'] }}</a></p>
                                                    <p class="desc_title"><i class="fas fa-phone-volume"></i><a
                                                            href="telto:206-240-8514">{{$Details['agent_details'][0]['mobile_number']}}</a></p>
                                                    <p class="desc_title">Responds in a few minutes</p>
                                                </div>
                                            @else
                                                <div class="agent_pf_photo">
                                                    <img src={{asset('/public/assets/images/seth_raddue.png')}} alt="">
                                                </div>
                                                <div class="agent_pf_mainDetail">
                                                    <p class="titleName">Seth Raddue</p>
                                                    <p class="desc_title">President & CEO</p>
                                                    <p class="desc_title"><i class="fas fa-envelope"></i><a
                                                            href="emailto:seth@aris360.com">seth@aris360.com</a></p>
                                                    <p class="desc_title"><i class="fas fa-phone-volume"></i><a
                                                            href="telto:206-240-8514">206-240-8514</a></p>
                                                    <p class="desc_title">Responds in a few minutes</p>
                                                </div>
                                            @endif
                                            </div>

                                            <div class="ask_agent_question_area">
                                                <textarea name="aksquestionzks" id="zksquestxtar"
                                                          placeholder="Write A Message..."></textarea>
                                            </div>
                                            <input type="hidden" value="{{ csrf_token() }}" id="zkscrsr">
                                            <input type="hidden" value="{{ $Details['properties']->id }}" id="prprtyId">
                                            @if(!empty($Details['agent_details']))
                                                <input type="hidden" value="{{ $Details['agent_details'][0]['email'] }}" id="emailID">
                                                <input type="hidden" value="{{ $Details['agent_details'][0]['id'] }}" id="agentID">
                                                <input type="hidden" value="{{ ucfirst($Details['agent_details'][0]['first_name']) . ' ' .  ucfirst($Details['agent_details'][0]['last_name'])  }}" id="agentUserName">
                                            @else
                                                <input type="hidden" value="" id="emailID">
                                                <input type="hidden" value="" id="agentID">
                                                <input type="hidden" value="" id="agentUserName">
                                            @endif
                                            <div class="btn-box">
                                                <a href="javascript:void(0)" class="theme-btn btn-one" id="zkssaque">Ask a question</a>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- <div class="advertise_banner">
                                        <img class="lazy" data-src="{{asset('public/assets/images/banner-tolet.png')}}"
                                             alt="">
                                    </div> --}}

                                    <div class="advertise_banner">
                                        <a href="https://www.docudash.net" target="_blank">
                                            <img class="lazy" src="{{asset('public/assets/images/banner-tolet2.png')}}" alt="">
                                        </a>
                                    </div>

                                    <div class="advertise_banner">
                                        <a href="https://www.tristarfinance.com" target="_blank">
                                            <img class="lazy" src="{{asset('public/assets/images/tristar_banner.jpeg')}}" alt="">
                                        </a>
                                    </div>

                                    <h2 class="property_feature" id="propertyDetail">Property Features</h2>
                                    <div class="details-box content-widget">
                                        <div class="title-box">
                                            <h3>LOCATION INFORMATION</h3>
                                        </div>

                                        <ul>

                                            @if(!empty($Details['properties']->SubdivisionName))
                                                <li class="property_ft_list">
                                                    <h5> County </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->SubdivisionName}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->MLSArea))
                                                <li class="property_ft_list">
                                                    <h5>Community</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->MLSArea}}
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </li>
                                            @endif

                                            @if (!empty($Details['PropertyOtherDetails']->MLSArea))
                                                <li class="property_ft_list">
                                                    <h5>MLS Area </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->MLSArea}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['properties']->PropertyLongitude))
                                                <li class="property_ft_list">
                                                    <h5>Longitude </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->PropertyLongitude}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['properties']->PropertyLatitude))
                                                <li class="property_ft_list">
                                                    <h5>Latitude </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->PropertyLatitude}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['properties']->PropertyName))
                                                <li class="property_ft_list">
                                                    <h5> Project</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->PropertyName}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['properties']->PropertyDirections))
                                                <li class="property_ft_list">
                                                    <h5>Directions </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->PropertyDirections}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                        </ul>

                                        <div class="title-box">
                                            <h3>INTERIOR FEATURES</h3>
                                        </div>
                                        <ul>
                                            @if(sizeof($Details['PropertyInterior']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Interior</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyInterior'] as $value)
                                                                {{-- {{$value['InteriorFeatureName']}} --}}
                                                                <li>
                                                                    {{$value['InteriorFeatureName']}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['PropertyFlooring']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Floors</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyFlooring'] as $value)
                                                                <li>
                                                                    {{$value['FloringName']}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (sizeof($Details['PowerProduction']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Power Production Type </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PowerProduction'] as $value)
                                                                <li>
                                                                    {{$value['ProductionTypeName']}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['properties']->BathroomsFull))
                                                <li class="property_ft_list">
                                                    <h5>Full Baths</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->BathroomsFull}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->NWM_WaterHeaterLocation) and  isset($Details['PropertyOtherDetails']->NWM_WaterHeaterType))
                                                <li class="property_ft_list">
                                                    <h5>Water Heater</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->NWM_WaterHeaterLocation}}
                                                                ,
                                                                {{$Details['PropertyOtherDetails']->NWM_WaterHeaterType}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- <li> <br> <span></span></li> -->
                                                </li>
                                            @endif

                                            @if (!empty($Details['properties']->BathroomsHalf))
                                                <li class="property_ft_list">
                                                    <h5>1/2 Baths </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->BathroomsHalf}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->FireplaceYN))
                                                <li class="property_ft_list">
                                                    <h5>Has Fireplace </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->FireplaceYN >= 1)
                                                                <li>
                                                                    Yes
                                                                </li>
                                                            @else
                                                                <li>
                                                                    No
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['PropertyOtherDetails']->Furnished))
                                                <li class="property_ft_list">
                                                    <h5>Furnished</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->Furnished}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if($Details['PropertyOtherDetails']->FireplacesTotal >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Number of Fireplaces </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->FireplacesTotal}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (sizeof($Details['PropertyBasement']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Basement Description</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyBasement'] as $value)
                                                                <li>
                                                                    {{$value['BasementName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (sizeof($Details['Fireplacefeatures']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Fireplace Description</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['Fireplacefeatures'] as $value)
                                                                <li>
                                                                    {{$value['FirePlaceName']}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(isset($Details['PropertyOtherDetails']) && !empty($Details['PropertyOtherDetails']->EntryLocation))
                                                <li class="property_ft_list">
                                                    <h5>Entry</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->EntryLocation}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (sizeof($Details['PropertyAppliances']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Appliances </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl appliances">
                                                            @foreach ($Details['PropertyAppliances'] as $value)
                                                                <li>
                                                                    {{$value['ApplianceName']}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['PropertyOtherDetails']->HeatingCoolingType))
                                                <li class="property_ft_list">
                                                    <h5>HeatingCoolingType</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->HeatingCoolingType}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                        </ul>

                                        <div class="title-box">
                                            <h3>EXTERIOR FEATURES</h3>
                                        </div>

                                        <ul>
                                            @if (!empty($Details['PropertyOtherDetails']->StoriesTotal))
                                                <li class="property_ft_list">
                                                    <h5>Stories</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->StoriesTotal >= 1)
                                                                <li>
                                                                    {{$Details['PropertyOtherDetails']->StoriesTotal}}
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->StyleCode))
                                                <li class="property_ft_list">
                                                    <h5>Style</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->StyleCode }}
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->GarageSpaces))
                                                <li class="property_ft_list">
                                                    <h5>Garage Spaces</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->GarageSpaces >=1)
                                                                <li>
                                                                    {{$Details['PropertyOtherDetails']->GarageSpaces}}
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['PropertyVegetation']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5> Vegetation</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyVegetation'] as $value)
                                                                <li>
                                                                    {{$value['VegetationName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['PropertyOtherDetails']->NewConstructionYN))
                                                <li class="property_ft_list">
                                                    <h5>Is New Construction</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->NewConstructionYN = 1)
                                                                <li>
                                                                    Yes
                                                                </li>
                                                            @else
                                                                <li>
                                                                    No
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->ParkingTotal))
                                                <li class="property_ft_list">
                                                    <h5> Parking Spaces</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->ParkingTotal}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (sizeof($Details['LotFeature']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Lot Description</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['LotFeature'] as $value)
                                                                <li>
                                                                    {{$value['LotFeatureName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['FoundationDetails']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Foundation</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['FoundationDetails'] as $value)
                                                                <li>
                                                                    {{$value['FoundationDetailsName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->Topography))
                                                <li class="property_ft_list">
                                                    <h5>Topography</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->Topography}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->ElevationUnits))
                                                <li class="property_ft_list">
                                                    <h5>Elevation</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->ElevationUnits}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['WaterSource']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Water Source</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['WaterSource'] as $value)
                                                                <li>
                                                                    {{$value['WaterSourceName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (sizeof($Details['PropertyExteriorFeatures']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Exterior</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyExteriorFeatures'] as $value)
                                                                <li>
                                                                    {{$value['ExterFeatureName']}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->SiteFeatures))
                                                <li class="property_ft_list">
                                                    <h5>Site Description</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">

                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->SiteFeatures}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (sizeof($Details['PropertyArchitecturalStyles']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Architecture </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyArchitecturalStyles'] as $value)
                                                                <li>
                                                                    {{$value['ArchitecturalName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['PropertyRoof']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Roof</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyRoof'] as $value)
                                                                <li>
                                                                    {{$value['RoofName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['PropertySewer']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Septic or Sewer </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertySewer'] as $value)
                                                                <li>
                                                                    {{$value['SewerName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->LotSizeAcres))
                                                <li class="property_ft_list">
                                                    <h5>Lot Size in Acres</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                <p> {{$Details['PropertyOtherDetails']->LotSizeAcres}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->CoveredSpaces))
                                                <li class="property_ft_list">
                                                    <h5>Covered Spaces</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->CoveredSpaces >= 1)
                                                                <li>
                                                                    {{$Details['PropertyOtherDetails']->CoveredSpaces}}
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['PropertyCondition']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Condition</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyCondition'] as $value)
                                                                <li>
                                                                    {{$value['ConditionName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->WaterCompany))
                                                <li class="property_ft_list">
                                                    <h5>Water</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->WaterCompany}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->BuildingInformation))
                                                <li class="property_ft_list">
                                                    <h5>Buildings</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->BuildingInformation}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->LotSizeSquareFeet))
                                                <li class="property_ft_list">
                                                    <h5>Building Total Area (Sq. Ft.)</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->LotSizeSquareFeet}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->ViewYN))
                                                <li class="property_ft_list">
                                                    <h5>Has View</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->ViewYN  == 1)
                                                                <li>
                                                                    Yes
                                                                </li>
                                                            @else
                                                                <li>
                                                                    No
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['Utilities']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Utilities</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['Utilities'] as $value)
                                                                <li>
                                                                    {{$value['UtilityName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['GreenEnergy']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Energy Features</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['GreenEnergy'] as $value)
                                                                <li>
                                                                    {{$value['GreenEnergyName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->ElectricOnPropertyYN))
                                                <li class="property_ft_list">
                                                    <h5>Electric On Property</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->ElectricOnPropertyYN  = 1)
                                                                <li>
                                                                    Yes
                                                                </li>
                                                            @else
                                                                <li>
                                                                    No
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['ParkingFeature']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Parking Description</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['ParkingFeature'] as $value)
                                                                <li>
                                                                    {{$value['ParkingFeatureName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['PropertyView']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>View Description</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyView'] as $value)
                                                                <li>
                                                                    {{$value['ProperyViewName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->GarageYN))
                                                <li class="property_ft_list">
                                                    <h5>Has Garage</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @if($Details['PropertyOtherDetails']->GarageYN  == 1)
                                                                <li>
                                                                    Yes

                                                                </li>
                                                            @else
                                                                <li>
                                                                    No
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                        </ul>

                                        @if(!empty($Details['PropertyOtherDetails']->Inclusions))
                                            <div class="title-box">
                                                <h3>FEATURES</h3>
                                            </div>
                                            <ul>
                                                @if(!empty($Details['PropertyOtherDetails']->Inclusions))
                                                    <li class="property_ft_list">
                                                        <h5> Inclusions </h5>
                                                        <div class="property_detail_listing_sect">
                                                            <ul class="property_detail_listingfl">
                                                                <li>
                                                                    {{$Details['PropertyOtherDetails']->Inclusions}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                @endif
                                            </ul>
                                        @endif

                                        <div class="title-box">
                                            <h3>SCHOOL</h3>
                                        </div>

                                        <ul>
                                            @if(!empty($Details['PropertyOtherDetails']->HighSchoolDistrict))
                                                <li class="property_ft_list">
                                                    <h5> High School District </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->HighSchoolDistrict}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->MiddleOrJuniorSchool))
                                                <li class="property_ft_list">
                                                    <h5> Jr. High School </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->MiddleOrJuniorSchool}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif
                                            @if(!empty($Details['PropertyOtherDetails']->ElementarySchool))
                                                <li class="property_ft_list">
                                                    <h5> Elementary School</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->ElementarySchool}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->HighSchool))
                                                <li class="property_ft_list">
                                                    <h5> High School</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->HighSchool}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif
                                        </ul>

                                        <div class="title-box">
                                            <h3>ADDITIONAL INFORMATION</h3>
                                        </div>

                                        <ul>
                                            @if(sizeof($Details['PropertyPossession']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5> Possession</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach($Details['PropertyPossession'] as $value)
                                                                <li>
                                                                    {{$value['PossessionsName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->AssociationFee))
                                                <li class="property_ft_list">
                                                    <h5> Association Fee </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->AssociationFee}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- <li> <br> <span></span></li> -->
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->PropertyType))
                                                <li class="property_ft_list">
                                                    <h5>Property Type</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->PropertyType}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->AssociationFeeFrequency))
                                                <li class="property_ft_list">
                                                    <h5> Association Fee Frequency</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->AssociationFeeFrequency}}
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->PropertySubType))
                                                <li class="property_ft_list">
                                                    <h5>Property SubType</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->PropertySubType}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->TaxYear))
                                                <li class="property_ft_list">
                                                    <h5>Tax Year </h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->TaxYear}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['StructureType']) >= 1)
                                                <li class="property_ft_list">
                                                    <h5>Structure Type</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['StructureType'] as $value)
                                                                <li>
                                                                    {{$value['StructureTypeName']}},
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->TaxAnnualAmount))
                                                <li class="property_ft_list">
                                                    <h5>Tax Amount</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                ${{$Details['PropertyOtherDetails']->TaxAnnualAmount}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->YearBuilt))
                                                <li class="property_ft_list">
                                                    <h5>Year Built</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->YearBuilt}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->YearBuiltEffective))
                                                <li class="property_ft_list">
                                                    <h5>Effective Year Built</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->YearBuiltEffective}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(!empty($Details['PropertyOtherDetails']->Status))
                                                <li class="property_ft_list">
                                                    <h5>Status</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['PropertyOtherDetails']->Status}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if(sizeof($Details['PropertyCommunity']) >= 1 )
                                                <li class="property_ft_list">
                                                    <h5>Community Features</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            @foreach ($Details['PropertyCommunity'] as $value)
                                                                <li>
                                                                    {{$value['CommunityFeatureName']}}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endif

                                            @if (!empty($Details['properties']->PropertyName))
                                                <li class="property_ft_list">
                                                    <h5> Project</h5>
                                                    <div class="property_detail_listing_sect">
                                                        <ul class="property_detail_listingfl">
                                                            <li>
                                                                {{$Details['properties']->PropertyName}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- <li> <br> <span></span></li> -->
                                                </li>
                                            @endif

                                        </ul>

                                    </div>

                                    @if (
                                        // isset($Details['canaryData']) &&
                                        // isset($Details['canaryData'][0]['property/sales_history']) &&
                                        // isset($Details['canaryData'][0]['property/sales_history']['result'])
                                        ($Details['canaryData'][0]['property/sales_history']['result'] ?? null) !== null
                                        )

                                        <div class="tax_section" id="taxHistory">
                                            <div class="card">
                                                <div class="card-body"><h3>Sale and Tax History for:
                                                        <a href="javascript:void(0)">
                                                            {{$Details['properties']->PropertyAddress}}
                                                        </a>
                                                    </h3>
                                                    <div class="tax_detail">
                                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                            <li class="nav-item">
                                                                @if (
                                                                    // isset($Details['canaryData']) &&
                                                                    // isset($Details['canaryData'][0]['property/sales_history']) &&
                                                                    // isset($Details['canaryData'][0]['property/sales_history']['result'])
                                                                    isset($Details['canaryData'][0]['property/sales_history']['result'])
                                                                    )
                                                                    <a class="nav-link active" id="pills-sale-tab"
                                                                       data-toggle="pill" href="#pills-sale" role="tab"
                                                                       aria-controls="pills-sale" aria-selected="true">Sale
                                                                        History</a>
                                                                @endif
                                                            </li>
                                                            @if (
                                                                // isset($Details['canaryData']) &&
                                                                // isset($Details['canaryData'][0]['property/tax_history']) &&
                                                                // isset($Details['canaryData'][0]['property/tax_history']['result'])&&
                                                                // isset($Details['canaryData'][0]['property/tax_history']['result']['tax_history'])
                                                                isset($Details['canaryData'][0]['property/tax_history']['result']['tax_history'])
                                                                )
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="pills-tax-tab"
                                                                       data-toggle="pill"
                                                                       href="#pills-tax" role="tab"
                                                                       aria-controls="pills-tax"
                                                                       aria-selected="false">
                                                                        Tax History
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                        <div class="tab-content" id="pills-tabContent">
                                                            @if (
                                                                // isset($Details['canaryData']) &&
                                                                // isset($Details['canaryData'][0]['property/sales_history']) &&
                                                                // isset($Details['canaryData'][0]['property/sales_history']['result'])
                                                                isset($Details['canaryData'][0]['property/sales_history']['result'])
                                                                )
                                                                <div class="tab-pane fade show active" id="pills-sale"
                                                                     role="tabpanel" aria-labelledby="pills-sale-tab">
                                                                    <div class="sale_history_section">
                                                                        {{-- <section class="cd-horizontal-timeline">
                                                                            <div class="timeline">
                                                                                <div class="events-wrapper">
                                                                                    <div class="events">
                                                                                        <ol>
                                                                                            @foreach ($Details['canaryData'][0]['property/sales_history']['result']
                                                                                            as $key => $saleTaxmainLink)
                                                                                                <li>
                                                                                                    <a href="#date{{$key}}" data-date="{{$saleTaxmainLink['record_date']}}" class="selected_not {{($key == 0) ? 'selected':''}}">
                                                                                                        {{$saleTaxmainLink['record_date']}}
                                                                                                    </a>
                                                                                                </li>
                                                                                            @endforeach

                                                                                        </ol>

                                                                                        <span class="filling-line" aria-hidden="true"></span>
                                                                                    </div> <!-- .events -->
                                                                                </div> <!-- .events-wrapper -->

                                                                                <ul class="cd-timeline-navigation">
                                                                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                                                                    <li><a href="#0" class="next">Next</a></li>
                                                                                </ul> <!-- .cd-timeline-navigation -->
                                                                            </div> <!-- .timeline -->

                                                                            <div class="events-content">
                                                                                <ol>
                                                                                    @foreach ($Details['canaryData'][0]['property/sales_history']['result']
                                                                                    as $saleTaxmainLink)
                                                                                    <li data-date="{{$saleTaxmainLink['record_date']}}">
                                                                                        <em>{{$saleTaxmainLink['record_date']}}</em>
                                                                                        <div class="sale_history_list">
                                                                                            <div class="sale_history_listView">
                                                                                                <div>
                                                                                                    <p class="paragraph">{{$saleTaxmainLink['record_date']}}</p>
                                                                                                    <p class="small_para">Date</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <p class="paragraph">FIPS</p>
                                                                                                    <p class="small_para">{{$saleTaxmainLink['fips']}}</p>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <p class="paragraph">${{$saleTaxmainLink['amount']}}</p>
                                                                                                    <p class="small_para">Price</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    @endforeach
                                                                                </ol>
                                                                            </div> <!-- .events-content -->
                                                                        </section> --}}
                                                                        <div class="table-responsive">
                                                                            @if (
                                                                                // isset($Details['canaryData']) &&
                                                                                // isset($Details['canaryData'][0]['property/sales_history']) &&
                                                                                // isset($Details['canaryData'][0]['property/sales_history']['result'])
                                                                                isset($Details['canaryData'][0]['property/sales_history']['result'])
                                                                                )
                                                                                <table class="table table-hover">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th class="tb_col1" scope="col">
                                                                                            Date
                                                                                        </th>
                                                                                        <th class="tb_col2" scope="col">
                                                                                            Amount
                                                                                        </th>
                                                                                        <th class="tb_col4" scope="col">
                                                                                            FIPS
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    @foreach (
                                                                                        $Details['canaryData'][0]['property/sales_history']['result']
                                                                                        as $taxData
                                                                                        )

                                                                                        <tr>
                                                                                            <td>{{$taxData['record_date']}}</td>
                                                                                            <td>{{isset($taxData['amount'])?'$'.number_format($taxData['amount']):'NULL'}}</td>
                                                                                            <td>
                                                                                                ${{number_format($taxData['fips'])}}</td>
                                                                                        </tr>
                                                                                    @endforeach

                                                                                    </tbody>
                                                                                </table>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                            @if (
                                                                // isset($Details['canaryData']) &&
                                                                // isset($Details['canaryData'][0]['property/tax_history']) &&
                                                                // isset($Details['canaryData'][0]['property/tax_history']['result'])&&
                                                                // isset($Details['canaryData'][0]['property/tax_history']['result']['tax_history'])
                                                                isset($Details['canaryData'][0]['property/tax_history']['result']['tax_history'])
                                                                )
                                                                <div class="tab-pane fade" id="pills-tax"
                                                                     role="tabpanel"
                                                                     aria-labelledby="pills-tax-tab">
                                                                    <div class="tax_history_listtable">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-hover">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th class="tb_col1" scope="col">Tax
                                                                                        Year
                                                                                    </th>
                                                                                    <th class="tb_col2" scope="col">
                                                                                        Property
                                                                                        Tax
                                                                                    </th>
                                                                                    <th class="tb_col4" scope="col">
                                                                                        Assessed
                                                                                        value
                                                                                    </th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                @foreach (
                                                                                    $Details['canaryData'][0]['property/tax_history']['result']['tax_history']
                                                                                    as $taxData
                                                                                    )
                                                                                    <tr>
                                                                                        <td>{{$taxData['tax_year']}}</td>
                                                                                        <td>
                                                                                            ${{number_format($taxData['tax_amount'])}}</td>
                                                                                        <td>
                                                                                            ${{number_format($taxData['total_assessed_value'])}}</td>
                                                                                    </tr>
                                                                                @endforeach

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    {{-- <div class="advertise_banner mb-3">
                                        <img class="lazy" data-src="{{asset('public/assets/images/banner-tolet.png')}}"
                                             alt="">
                                    </div> --}}
                                    <div class="advertise_banner">
                                        <a href="https://www.docudash.net" target="_blank">
                                            <img class="lazy" src="{{asset('public/assets/images/banner-tolet2.png')}}" alt="">
                                        </a>
                                    </div>

                                    <div class="advertise_banner" style="">
                                        <a href="https://www.tristarfinance.com" target="_blank">
                                            <img class="lazy" src="{{asset('public/assets/images/tristar_banner.jpeg')}}" alt="">
                                        </a>
                                    </div>

                                    {{-- @if (
                                        // isset($Details['canaryData']) &&
                                        // isset($Details['canaryData'][0]['property/school']) &&
                                        // isset($Details['canaryData'][0]['property/school']['result'])&&
                                        // isset($Details['canaryData'][0]['property/school']['result']['school'])
                                        isset($Details['canaryData'][0]['property/school']['result']['school'])
                                        )
                                        <div class="school_data_section">
                                            <h3>School</h3>
                                            @foreach ($Details['canaryData'][0]['property/school']['result']['school'] as $key=>$mySchool)
                                                <div class="colapse_wrapper">
                                                    <p style="margin-bottom:10px">
                                                        {{ucfirst($key)}}
                                                    </p>
                                                    <div class="collapse show" id="{{$key}}">
                                                        <div class="card card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col">Name</th>
                                                                        <th scope="col">Phone</th>
                                                                        <th scope="col">Score</th>
                                                                        <th scope="col">Address</th>
                                                                        <th scope="col">Assessment Year</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    @foreach ($mySchool as $innerSchool)
                                                                        <tr>
                                                                            <td>{{$innerSchool['name']}}</td>
                                                                            <td>{{$innerSchool['phone']}}</td>
                                                                            <td>{{$innerSchool['score']}}</td>
                                                                            <td>{{$innerSchool['address']}}</td>
                                                                            <td>{{$innerSchool['assessment_year']}}</td>
                                                                        </tr>
                                                                    @endforeach

                                                                    </tbody>
                                                                </table>
                                                                <p class="small_para"><small>Disclaimer: This
                                                                        information is powered by House Canary.</small>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif --}}
                                    @if (
                                        // isset($Details['canaryData']) &&
                                        // isset($Details['canaryData'][0]['property/fema_disaster_area']) &&
                                        // isset($Details['canaryData'][0]['property/fema_disaster_area']['result'])&&
                                        // isset($Details['canaryData'][0]['property/fema_disaster_area']['result']['details'])
                                        isset($Details['canaryData'][0]['property/fema_disaster_area']['result']['details'])
                                        )
                                        <div class="femaDisaster">
                                            <h3>Fema Disaster Area</h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="femaDisaster_data_table table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Title</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Declared Date</th>
                                                                <th scope="col">Start Date</th>
                                                                <th scope="col">End Date</th>
                                                                <th scope="col">Fips</th>
                                                                <th scope="col">FD Number</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($Details['canaryData'][0]['property/fema_disaster_area']['result']['details'] as $mydisaster)
                                                                <tr>
                                                                    <td>{{$mydisaster['title']}}</td>
                                                                    <td>{{$mydisaster['type']}}</td>
                                                                    <td>{{$mydisaster['declared_date']}}</td>
                                                                    <td>{{$mydisaster['start_date']}}</td>
                                                                    <td>{{$mydisaster['end_date']}}</td>
                                                                    <td>{{$mydisaster['fips']}}</td>
                                                                    <td>{{$mydisaster['fema_disaster_num']}}</td>
                                                                </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (
                                        // isset($Details['canaryData']) &&
                                        // isset($Details['canaryData'][0]['property/flood']) &&
                                        // isset($Details['canaryData'][0]['property/flood']['result']) &&
                                        // count($Details['canaryData'][0]['property/flood']['result']) == 4
                                        isset($Details['canaryData'][0]['property/flood']['result']) &&
                                        count($Details['canaryData'][0]['property/flood']['result']) === 4
                                        )
                                        <div class="femaDisaster">
                                            <h3>Flood</h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="femaDisaster_data_table table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Effective Date</th>
                                                                <th scope="col">Flood Risk</th>
                                                                <th scope="col">Zone</th>
                                                                <th scope="col">Panel Number</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/flood']['result']['effective_date']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/flood']['result']['flood_risk']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/flood']['result']['zone']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/flood']['result']['panel_number']}}
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (
                                        // isset($Details['canaryData']) &&
                                        // isset($Details['canaryData'][0]['property/geo_features']) &&
                                        // isset($Details['canaryData'][0]['property/geo_features']['result']) &&
                                        // isset($Details['canaryData'][0]['property/geo_features']['result']['geo_features'])
                                        isset($Details['canaryData'][0]['property/geo_features']['result']['geo_features'])
                                        )
                                        <div class="femaDisaster">
                                            <h3>Geo Features</h3>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="femaDisaster_data_table table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Backyard Exposure Angle</th>
                                                                <th scope="col">Backyard Slope</th>
                                                                <th scope="col">Backyard View Angle</th>
                                                                <th scope="col">Elevation</th>
                                                                <th scope="col">Frontage Length</th>
                                                                <th scope="col">Orientation</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/geo_features']['result']['geo_features']['backyard_exposure_angle']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/geo_features']['result']['geo_features']['backyard_slope']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/geo_features']['result']['geo_features']['backyard_view_angle']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/geo_features']['result']['geo_features']['elevation']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/geo_features']['result']['geo_features']['frontage_length']}}
                                                                </td>
                                                                <td>
                                                                    {{$Details['canaryData'][0]['property/geo_features']['result']['geo_features']['orientation']}}
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="aris_school_section" id="schoolData">
                                        <h2 class="property_feature">School</h2>
                                        <div class="school_innerContent">
                                            <p class="paragraph greatSchool">GreatSchools Summary Rating
                                                 {{-- <a href="javascript:void(0)">Seattle Public Schools.</a></p> --}}
                                            @php
                                             $greatSchool =  greatSchool($Details['properties']->PropertyLatitude,$Details['properties']->PropertyLongitude)
                                           @endphp
                                           {{-- @dd($greatSchool) --}}
                                            @if (isset($greatSchool['schools']) && count($greatSchool['schools']) > 0)
                                            @forelse ($greatSchool['schools']   as $key => $school)
                                            <div class="school_innerwidget" data-toggle="modal" data-target="#exampleschoolModal{{$key}}">
                                                <div class="school_innerwidget_left">
                                                    <p class="para"><strong class="school_rating">{{isset($school['rating']) ? $school['rating'] : "-" }}</strong>/10</p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name school_rating">{{$school['name']}}</p>
                                                            @php
                                                            $levelColumnValue = $school['level']; // Replace this with your actual value from the database
                                                            [$firstLevel, $lastLevel] = schoolLevel($levelColumnValue);
                                                            @endphp

                                                            <small>{{$school['type'].', '.$firstLevel.'-'.$lastLevel}} • Serves this home • {{formatDistance($school['distance'])}}</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @empty
                                            @endforelse
                                            @endif
                                            <small class="disclaimer_text mt-2">School data is provided by GreatSchools, a nonprofit organization. ARIS360 recommends buyers and renters use GreatSchools information and ratings as a first step, and conduct their own investigation to determine their desired schools or school districts, including by contacting and visiting the schools themselves.</small>
                                            <small class="disclaimer_text">ARIS360 does not endorse or guarantee this information. School service boundaries are intended to be used as a reference only; they may change and are not guaranteed to be accurate. To verify school enrollment eligibility, contact the school district directly.</small>
                                        </div>
                                    </div>

                                    {{-- <div class="around_thishome_section aris_school_section" id="schoolData">
                                        <h3>Around this home</h3>
                                        <div class="school_innerContent">
                                            <p class="paragraph"><a href="javascript:void(0)">ARIS360</a><i class="fas fa-chevron-right"></i><a href="javascript:void(0)">Washington</a><i class="fas fa-chevron-right"></i><a href="javascript:void(0)">Seattle</a><i class="fas fa-chevron-right"></i>
                                                <a href="javascript:void(0)">Westlake</a><i class="fas fa-chevron-right"></i>
                                            </p>
                                            <div class="around_home_wrapper">
                                                <h5>Transportation near <a href="javascript:void(0)">1000 Aurora Ave N #603</a></h5>
                                                <div class="around_home_content">
                                                    <ul>
                                                        <li class="around_home_content_list">
                                                            <a href="javascript:void(0)"><i class="fas fa-walking"></i></a>
                                                            <span>89/100</span>
                                                            <p>Very walkable</p>
                                                            <small>Walk Score</small>
                                                        </li>
                                                        <li class="around_home_content_list">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                            <span>79/100</span>
                                                            <p>Excellent transit</p>
                                                            <small>Transit Score</small>
                                                        </li>
                                                        <li class="around_home_content_list">
                                                            <a href="javascript:void(0)"><i class="fas fa-bicycle"></i></a>
                                                            <span>87/100</span>
                                                            <p>Very bikeable</p>
                                                            <small>Bike Score</small>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="placeTab school_innerwidget" data-toggle="modal" data-target="#examplearoundHomeModal">
                                                <div class="school_innerwidget_left">
                                                    <p class="para">
                                                        <a href="javascript:void(0)"><i class="fas fa-shopping-cart"></i></a>
                                                    </p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name">Places</p>
                                                            <small>2 groceries, 50 restaurants, 8 parks</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="transitTab school_innerwidget" data-toggle="modal" data-target="#examplearoundHomeModal">
                                                <div class="school_innerwidget_left">
                                                    <p class="para">
                                                        <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                    </p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name">Transit</p>
                                                            <small>1, 124, 13, 131, 132, 14, 15, 16, 17, 18, 2, 21, 24, 27, 28, 29, 3, 320, 33, 4, 40, 5, 55, 554, 577, 578, 62, 64, 70, 8, C Line, D Line, E Line, South Lake Union Streetcar</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  --}}

                                     {{-- <div class="climate_risks_section around_thishome_section aris_school_section" id="schoolData">
                                        <h3>Climate risks</h3>
                                        <div class="school_innerContent">
                                            <h5>About climate risks</h5>
                                            <p class="paragraph">Most homes have some risk of natural disasters, and may be impacted by climate change due to rising temperatures and sea levels.</p>
                                            <h5>Risk Factor</h5>
                                            <div class="floodclimateTab school_innerwidget" data-toggle="modal" data-target="#exampleclimateriskModal">
                                                <div class="school_innerwidget_left">
                                                    <p class="para">
                                                        <a href="javascript:void(0)"><i class="fas fa-house-flood"></i></a>
                                                    </p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name">Flood Factor - Minimal</p>
                                                            <small>Unlikely to flood in next 30 years</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fireclimateTab school_innerwidget" data-toggle="modal" data-target="#exampleclimateriskModal">
                                                <div class="school_innerwidget_left">
                                                    <p class="para">
                                                        <a href="javascript:void(0)"><i class="fas fa-fire"></i></a>
                                                    </p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name">Fire Factor - Minimal</p>
                                                            <small>Unlikely to be in a wildfire within 30 years</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="heatclimateTab school_innerwidget" data-toggle="modal" data-target="#exampleclimateriskModal">
                                                <div class="school_innerwidget_left">
                                                    <p class="para">
                                                        <a href="javascript:void(0)"><i class="fas fa-sun"></i></a>
                                                    </p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name">Heat Factor - Moderate</p>
                                                            <small>Heat risk increasing in next 30 years</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">ClimateCheck</h5>
                                            <div class="stormrisktab school_innerwidget" data-toggle="modal" data-target="#exampleclimatecheckModal">
                                                <div class="school_innerwidget_left">
                                                    <p class="para">
                                                        <a href="javascript:void(0)"><i class="fas fa-thunderstorm"></i></a>
                                                    </p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name">Storm risk - very high</p>
                                                            <small>24 storms expected in 2050</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="droughttab school_innerwidget" data-toggle="modal" data-target="#exampleclimatecheckModal">
                                                <div class="school_innerwidget_left">
                                                    <p class="para">
                                                        <a href="javascript:void(0)"><i class="fas fa-tint"></i></a>
                                                    </p>
                                                </div>
                                                <div class="school_innerwidget_right">
                                                    <ul>
                                                        <li>
                                                            <p class="school_name">Drought risk - moderate</p>
                                                            <small>Water stress expected to be 6% in 2050</small>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)"><i class="fas fa-chevron-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <small class="disclaimer_text mt-2">Climate risk data is provided for informational purposes only. If you have questions or feedback about this data, get help at <a href="riskfactor.com">riskfactor.com</a> and <a href="climatecheck.com">climatecheck.com</a>.</small>
                                            <small class="disclaimer_text">ARIS360 does not endorse nor guarantee this information. By providing this information, ARIS360 and its agents are not providing advice or guidance on flood risk, flood insurance, or other climate risks. ARIS360 strongly recommends that consumers independently investigate the property's climate risks to their own personal satisfaction.</small>
                                        </div>
                                    </div> --}}

                                    <div class="advertise_banner">
                                        <img src="{{asset('public/assets/images/advertise_banner_bg1.png')}}" alt="">
                                    </div>

                                    {{-- <div id="schedule">
                       @include('properties.includes.Schedule-tour')
                   </div> --}}

                                    {{-- Aris360 Estimate Section Start's Here--}}
                                    @if (
                                     // isset($Details['canaryData']) && isset($Details['canaryData'][0]['property/value']) &&
                                     // isset($Details['canaryData'][0]['property/value']['result']) &&
                                     // isset($Details['canaryData'][0]['property/value']['result']['value'])
                                     isset($Details['canaryData'][0]['property/value']['result']['value'])
                                    )
                                        <div class="aris_estimate_section" id="estimate">
                                            <p class="paragraph">Value360-Est Valuation:
                                                <a href="javascript:void(0)">
                                                    {{$Details['properties']->PropertyAddress}}
                                                </a>
                                            </p>
                                            <div class="aris_estimate_sec_content">
                                                <div class="row">
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Upper Value</small>
                                                            <p>${{
                                                    number_format($Details['canaryData'][0]['property/value']['result']['value']['price_upr'])
                                                }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Average Value</small>
                                                            <p>${{
                                                    number_format($Details['canaryData'][0]['property/value']['result']['value']['price_mean'])
                                                }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Lower Value</small>
                                                            <p>${{
                                                number_format($Details['canaryData'][0]['property/value']['result']['value']['price_lwr'])
                                                }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Confidence score</small>
                                                            <p>{{
                                                    confidenceScore($Details['canaryData'][0]['property/value']['result']['value']['fsd'])
                                                }}%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="small_para"><small>Disclaimer: This estimate is powered by
                                                        House Canary. ARIS360 does not guarantee any of these
                                                        numbers.</small></p>
                                            </div>
                                        </div>
                                    @endif

                                    {{-- Aris360 Estimate Section End's Here--}}

                                    {{-- Aris360 Estimate Section Start's Here--}}
                                    @if (
                                        // isset($Details['canaryData']) &&
                                        // isset($Details['canaryData'][0]['property/rental_value']) &&
                                        // isset($Details['canaryData'][0]['property/rental_value']['result'])&&
                                        // isset($Details['canaryData'][0]['property/rental_value']['result'])
                                        isset($Details['canaryData'][0]['property/rental_value']['result'])
                                    )
                                        <div class="aris_estimate_section">
                                            <p class="paragraph">Rental Estimate for: <br><a href="javascript:void(0)">
                                                    {{$Details['properties']->PropertyAddress}}
                                                </a>
                                            </p>
                                            <div class="aris_estimate_sec_content">
                                                <div class="row">
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Upper Value</small>
                                                            <p>${{
                                            number_format($Details['canaryData'][0]['property/rental_value']['result']['price_upr'])
                                            }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Average Value</small>
                                                            <p>${{
                                            number_format($Details['canaryData'][0]['property/rental_value']['result']['price_mean'])
                                            }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Lower Value</small>
                                                            <p>${{
                                            number_format($Details['canaryData'][0]['property/rental_value']['result']['price_lwr'])
                                            }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-3 col-md-3 col-sm-6">
                                                        <div class="arisestimate_content_list">
                                                            <small>Confidence score</small>
                                                            <p>{{
                                            confidenceScore($Details['canaryData'][0]['property/rental_value']['result']['fsd'])
                                            }}%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="small_para"><small>Disclaimer: This estimate is powered by
                                                        House Canary. ARIS360 does not guarantee any of these
                                                        numbers.</small></p>
                                            </div>

                                        </div>
                                    @endif
                                </div>
                            </div>
                            @if (
                                // isset($Details['canaryData']) && isset($Details['canaryData'][0]['property/value']) &&
                                // isset($Details['canaryData'][0]['property/value']['result']) &&
                                // isset($Details['canaryData'][0]['property/value']['result']['value'])
                                isset($Details['canaryData'][0]['property/value']['result']['value'])
                               )
                                <div class="col-lg-4 col-md-4 col-12">
                                    <section id="sticky-section">
                                        <!-- content goes here -->
                                        <div class="schedule_meeting_section">
                                            <p class="paragraph">Interested in Buying this property?</p>
                                            <p class="paragraph">Connect with an ARIS360 Prime Agent today.</p>
                                            <div class="schedule_estimate_sect">
                                                <p class="paragraph">Estimated Price</p>
                                                <ul class="schedule_estimate_pricelist">
                                                    <li>
                                                        <a href="javascript:void(0)">${{
                                                        number_format($Details['canaryData'][0]['property/value']['result']['value']['price_lwr'])
                                                        }}</a>
                                                    </li>
                                                    <li>
                                                        <span>-</span>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">${{
                                                        number_format($Details['canaryData'][0]['property/value']['result']['value']['price_upr'])
                                                    }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="calendarCont">
                                                <h3 class="secHeading">Let's Tour this Property</h3>
                                                <div class="swiper calenderSwiper">
                                                  <div class="swiper-wrapper" id="dateSlider">
                                                  </div>
                                                  <div class="swiper-button-next">
                                                    <i class="fas fa-chevron-right"></i>
                                                  </div>
                                                  <div class="swiper-button-prev">
                                                    <i class="fas fa-chevron-left"></i>
                                                  </div>
                                                </div>
                                                <div class="btn-box">
                                                    <input type="hidden" value="{{ csrf_token() }}" id="schedule_token">
                                                    <input type="hidden" value="{{ $Details['properties']->id }}" id="prprtyId">
                                                    @if(!empty($Details['agent_details']))
                                                        <input type="hidden" value="{{ $Details['agent_details'][0]['email'] }}" id="emailID">
                                                        <input type="hidden" value="{{ $Details['agent_details'][0]['id'] }}" id="agentID">
                                                        <input type="hidden" value="{{ ucfirst($Details['agent_details'][0]['first_name']) . ' ' .  ucfirst($Details['agent_details'][0]['last_name'])  }}" id="agentUserName">
                                                    @else
                                                        <input type="hidden" value="" id="emailID">
                                                        <input type="hidden" value="" id="agentID">
                                                        <input type="hidden" value="" id="agentUserName">
                                                    @endif
                                                    <a href="javascript:void(0)" class="theme-btn btn-one schedule_now" id="schedule_now">Schedule Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 sidebar-side" style="padding-top: 50px;">
                    <div class="property-sidebar default-sidebar">
                        <div class="author-widget sidebar-widget">
                            <div class="feature-block">
                                <div class="feature-block-one feature_block_two">
                                    <h3 class="mb-3">Recently Listed Properties</h3>
                                    <div class="recently_properties_newSect">
                                        @foreach($Details['PropertyListed'] as $property)
                                            <div class="inner-box propertyDetail-innerbox">
                                                <div class="image-box">
                                                    <a href="{{ route('home.property-detail', ['id' => $property->id]) }}">
                                                        @if (isset($property['prefferedMedia']) && count($property['prefferedMedia']) > 0)

                                                            <figure class="image">
                                                                <img class="lazy"
                                                                     src="{{$property['prefferedMedia'][0]['s3buckettempurl']}}"
                                                                     alt="">
                                                            </figure>

                                                        @endif
                                                    </a>
                                                    {{-- <span class="category">Active</span> --}}

                                                    @if($property['PropetySellPrice'] > 1000000)
                                                        {{-- <span class="category">Active</span> --}}
                                                        <span class="category"> ARIS360 Premier</span>
                                                    @endif
                                                    @if(isset($property['PublishStatus']) && !empty($property['PublishStatus']))
                                                        {{-- <span class="category">Active</span> --}}
                                                        <span
                                                            class="category2">{{$property['PublishStatus']}}</span>
                                                    @endif
                                                </div>

                                                <div class="lower-content lower_content_Detail">
                                                    <div class="price-info custom_price_info">
                                                        <h4 class="mt-2">
                                                            $ {{number_format($property->PropetySellPrice)}}</h4>

                                                        <div class="fav_and_share">
                                                            <div class="share_onlyIcon">
                                                                <ul class="other-option feat_fav pull-right clearfix">
                                                                    @if (auth()->check())
                                                                        <li>
                                                                            <button
                                                                                id="shrBtnListed{{$property['id']}}"
                                                                                data-id="{{$property['id']}}"
                                                                                data-text="{{$property['id']}}"
                                                                                data-user="{{Auth::id()}}"
                                                                                href="javascript:;"
                                                                                data-toggle="modal"
                                                                                data-target="#shareModal"
                                                                                class="formShare">
                                                                                <i class="far fa-share"></i>
                                                                            </button>
                                                                        </li>
                                                                    @else
                                                                        <li>
                                                                            <button class="shrNotLoggedIn"><i
                                                                                    class="far fa-share"></i>
                                                                            </button>
                                                                        </li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                            <div class="fav_onlyIcon">
                                                                @if (auth()->check())
                                                                    @if (isset($property['favoriteProperty'][0]['is_fav']) and $property['favoriteProperty'][0]['is_fav'] == 1)
                                                                        <ul class="other-option feat_fav pull-right clearfix">
                                                                            <li>
                                                                                <button
                                                                                    id="favBtnListed{{$property['id']}}"
                                                                                    data-id="{{$property['id']}}"
                                                                                    data-text="{{$property['id']}}"
                                                                                    class="formFavourite skzfavx"><i
                                                                                        class="fas fa-heart"></i>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    @else
                                                                        <ul class="other-option feat_fav pull-right clearfix">
                                                                            <li>
                                                                                <button
                                                                                    id="favBtnListed{{$property['id']}}"
                                                                                    data-id="{{$property['id']}}"
                                                                                    data-text="{{$property['id']}}"
                                                                                    class="formFavourite"><i
                                                                                        class="far fa-heart"></i>
                                                                                </button>
                                                                            </li>
                                                                        </ul>
                                                                    @endif
                                                                @else
                                                                    <ul class="other-option feat_fav pull-right clearfix">
                                                                        <li>
                                                                            <button class="favNotLoggedIn"><i
                                                                                    class="far fa-heart"></i>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                @endif
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div>
                                                        <ul class="more-details custom_price_infoDetails mt-2 clearfix">
                                                            <li>
                                                                <div>{{$property->Bedrooms}} Beds</div>
                                                            </li>
                                                            <li>
                                                                <div>{{$property->BathroomsFull}} Baths</div>
                                                            </li>
                                                            <li>
                                                                <div>{{$property->PropertyArea}} Sq.ft.</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="title-text">
                                                        <h5><a href="#">{{$property->PropertyAddress}}</a></h5>
                                                    </div>
                                                    <div class="listing_key_section">
                                                        <ul>
                                                            <li>
                                                                <span class="text-danger">Property Category:</span>
                                                            </li>
                                                            <li>
                                                                @if($property['PropetySellPrice'] > 1000000)
                                                                    <p> Premier Properties </p>
                                                                @else
                                                                    <p> {{isset($property['StructureType'][0]['StructureTypeName']) ?
                                                        $property['StructureType'][0]['StructureTypeName'] : " N/A "
                                                                        }} </p>
                                                                @endif
                                                            </li>

                                                        </ul>
                                                        <small>Listing provided by NWMLS</small>
                                                    </div>

                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="virtual_mortgageSect" class="virtual_mortgageSect">
                            {{-- <div class="text-center mb-4">
                                <h2>Your Est. Monthly Payment</h2>
                            </div>

                            <div class="in-contact-form-title-area">
                                <div class="in-contact-form">
                                    <form action="#" method="get" class="row d-flex justify-content-center bg-white p-lg-5 p-md-4 p-2 border-radius">

                                        <div class="col-12 mb-3">
                                            <label for="home_price">Home price</label>
                                            <div class="inline_input">
                                                <div class="input_label">$</div>
                                                <input type="number" id="home_price" name="home_price">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="down_payment">Down payment</label>
                                            <div class="inline_input">
                                                <div class="input_label">$</div>
                                                <input type="number" id="down_payment" name="down_payment">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="property_tax">Property tax</label>
                                            <div class="inline_input">
                                                <div class="input_label">$</div>
                                                <input type="number" id="property_tax" name="property_tax">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <div>
                                                <label for="interest_rate">Interest rate</label>
                                                <div class="inline_input">
                                                    <div class="input_label">%</div>
                                                    <input type="text" id="interest_rate" name="interest_rate">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="home_insurance">Home Insurance</label>
                                            <div class="inline_input">
                                                <div class="input_label">$</div>
                                                <input type="number" id="home_insurance" name="home_insurance">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <label for="hoa_dues">HOA dues</label>
                                            <div class="inline_input">
                                                <div class="input_label">$</div>
                                                <input type="number" id="hoa_dues" name="hoa_dues">
                                            </div>
                                        </div>

                                        <div class="col-12 mb-3 loan_type_select">
                                            <label for="loan_type">Loan Type</label>
                                            <div class="in-insurance-type in-select position-relative">
                                                <select name="loan_type" id="loan_type">
                                                    <option value="10" selected="">10 Year</option>
                                                    <option value="15">15 Year</option>
                                                    <option value="20">20 Year</option>
                                                    <option value="30">30 Year</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-4 text-center field_error d-none">
                                            <p class="text-danger">Please fill all the fields</p>
                                        </div>

                                        <div class="col-12">
                                            <div class="mt-4 text-center">
                                                <div class="in-btn-1 position-relative">
                                                    <!-- <button type="submit">Submit</button> -->
                                                    <a href="javascript:void(0)" class="submit_btn theme-btn btn-one" data-bs-toggle="modal" data-bs-target="#loading_modal">Calculate Now</a>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div> --}}

                            <div class="calculation_result in-contact-form-title-area mt-5 d-none">
                                <div class="in-contact-form">
                                    <div class="cal_sheet_right">
                                        <div class="mt-4 text-center">
                                            <div class="in-btn-1 position-relative">
                                                <a href="javascript:void(0)" class="theme-btn btn-one">Find a
                                                    Lender</a>
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <div class="in-btn-1 position-relative">
                                                <a href="javascript:void(0)" class="theme-btn btn-one"
                                                   id="btn_excel">Export
                                                    to Excel</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="info_form text-center">

                                        <!-- <h2 class="mb-3">Payment Breakdown</h2> -->
                                        <h2 class="mb-3">Your Mortgage Payment Plan</h2>

                                    </div>

                                    <div class="info_form text-center d-none">

                                        <h5 class="mb-3">Your Payment
                                            <span class="text_primary">$1,781</span>
                                        </h5>

                                        <div class="info_div">
                                            <label>Insurance</label>
                                            <p class="fw-bold">$105</p>
                                        </div>

                                        <div class="info_div">
                                            <label>Taxes</label>
                                            <p class="fw-bold">$193</p>
                                        </div>

                                        <div class="info_div">
                                            <label>Principal &amp; interest</label>
                                            <p class="fw-bold">$1,484</p>
                                        </div>

                                    </div>

                                    <div class="chart py-5 d-none">
                                        <h3>Amortization</h3>
                                        <canvas id="amortization_chart"></canvas>
                                    </div>

                                    <div class="mt-5">
                                        <table id="Record" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Months</th>
                                                <th>Monthly Payment</th>
                                                <th>Interest Paid</th>
                                                <th>Principal Paid</th>
                                                <th>Balance</th>
                                            </tr>
                                            </thead>
                                            <tbody class="tbody"></tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="similar-content Similar_Properties">
                <div class="title">
                    <h3>Similar Properties</h3>
                </div>
                <div class="row clearfix">
                    @foreach  ($Details['SimilarProperties'] as $property)
                        <div class="col-12 col-lg-4 col-md-4 col-sm-6 feature-block">
                            <div class="feature-block-one feature_block_two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="{{ route('home.property-detail', ['id' => $property->id]) }}">
                                            @if (isset($property['prefferedMedia']) && count($property['prefferedMedia']) > 0)

                                                <figure class="image">
                                                    <img class="lazy"
                                                         src="{{$property['prefferedMedia'][0]['s3buckettempurl']}}"
                                                         alt="">
                                                </figure>

                                            @endif
                                        </a>
                                        @if($property['PropetySellPrice'] > 1000000)
                                            {{-- <span class="category">Active</span> --}}
                                            <span class="category"> ARIS360 Premier</span>
                                        @endif
                                        @if(isset($property['PublishStatus']) && !empty($property['PublishStatus']))
                                            {{-- <span class="category">Active</span> --}}
                                            <span class="category2
                            ">{{$property['PublishStatus']}}</span>
                                        @endif
                                    </div>

                                    <div class="lower-content lower_content_Detail">
                                        <div class="price-info custom_price_info">
                                            <h4 class="mt-2">$ {{number_format($property->PropetySellPrice)}}</h4>

                                            <div class="fav_and_share">
                                                <div class="share_onlyIcon">
                                                    <ul class="other-option feat_fav pull-right clearfix">
                                                        @if (auth()->check())
                                                            <li>
                                                                <button id="shrBtnListed{{$property['id']}}"
                                                                        data-id="{{$property['id']}}"
                                                                        data-text="{{$property['id']}}"
                                                                        data-user="{{Auth::id()}}"
                                                                        href="javascript:;"
                                                                        data-toggle="modal"
                                                                        data-target="#shareModal"
                                                                        class="formShare">
                                                                    <i class="far fa-share"></i>
                                                                </button>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <button class="shrNotLoggedIn"><i
                                                                        class="far fa-share"></i></button>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                <div class="fav_onlyIcon">
                                                    @if (auth()->check())
                                                        @if (isset($property['favoriteProperty'][0]['is_fav']) and $property['favoriteProperty'][0]['is_fav'] == 1)
                                                            <ul class="other-option feat_fav pull-right clearfix">
                                                                <li>
                                                                    <button id="favBtnListed{{$property['id']}}"
                                                                            data-id="{{$property['id']}}"
                                                                            data-text="{{$property['id']}}"
                                                                            class="formFavourite skzfavx"><i
                                                                            class="fas fa-heart"></i></button>
                                                                </li>
                                                            </ul>
                                                        @else
                                                            <ul class="other-option feat_fav pull-right clearfix">
                                                                <li>
                                                                    <button id="favBtnListed{{$property['id']}}"
                                                                            data-id="{{$property['id']}}"
                                                                            data-text="{{$property['id']}}"
                                                                            class="formFavourite"><i
                                                                            class="far fa-heart"></i></button>
                                                                </li>
                                                            </ul>
                                                        @endif
                                                    @else
                                                        <ul class="other-option feat_fav pull-right clearfix">
                                                            <li>
                                                                <button class="favNotLoggedIn"><i
                                                                        class="far fa-heart"></i></button>
                                                            </li>
                                                        </ul>
                                                    @endif
                                                </div>

                                            </div>

                                        </div>
                                        <ul class="more-details mt-2 clearfix">
                                            <li> {{$property->Bedrooms}} Beds</li>
                                            <li> {{$property->BathroomsFull}} Baths</li>
                                            <li> {{$property->PropertyArea}} sq. ft</li>

                                            {{-- <i class="icon-14"></i>
                                            <i class="icon-15"></i>
                                            <i class="icon-16"></i> --}}
                                        </ul>
                                        <div class="title-text">
                                            <h5><a href="#">{{$property->PropertyAddress}}</a></h5>
                                        </div>
                                        <div class="listing_key_section">
                                            <ul>
                                                <li>
                                                    <span class="text-danger">Property Category:</span>
                                                </li>
                                                <li>
                                                    @if($property['PropetySellPrice'] > 1000000)
                                                        <p> Premier Properties </p>
                                                    @else
                                                        <p> {{isset($property['StructureType'][0]['StructureTypeName']) ?
                                                $property['StructureType'][0]['StructureTypeName'] : " N/A "
                                                                }} </p>
                                                    @endif
                                                </li>

                                            </ul>
                                            <small>Listing provided by NWMLS</small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="disclaimer_section">
                <p>Listing provided by NWMLS <img class="lazy"
                                                  src="{{asset('public/assets/images/NWMLS2.jpeg')}}"
                                                  class="img-fluid"></p>
                <p class="disclaimer_para">Disclaimer: The information contained in this listing has not been
                    verified
                    and should be verified by the buyer. All information deemed reliable but not guaranteed and
                    should
                    be independently verified through personal inspection by and/or with the appropriate
                    professionals.
                    All properties are subject to prior sale, change, or withdrawal. Neither broker(s) or
                    information
                    provider(s) shall be responsible for any typographical errors, misinformation, or misprints and
                    shall be held totally harmless. The information on this website is provided exclusively for
                    consumers' personal, non-commercial use and may not be used for any purpose other than to
                    identify
                    prospective properties consumers may be interested in purchasing. The data relating to real
                    estate
                    for sale on this website comes in part from the Internet Data Exchange program of Northwest MLS
                    IDX.
                    Listings with the three tree icon are courtesy of NWMLS. Real estate listings held by other
                    brokerage firms are marked with the green "three trees" logo and include the name of the listing
                    broker(s). Copyright © 2023 Northwest MLS. All rights reserved.</p>
            </div>
        </div>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXxZfe3ydEUow5-Qa0S69FEddWOj-ut2k&callback=myMap"></script> --}}
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places"
            defer></script>

        <div class="modal signIn_Modal fade" id="request-info" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="login-page">
                            <form action="{{ route('scheduleTour') }}" method="POST">

                                <h4> Request property info</h4>
                                @csrf
                                <div class="col-lg-12 col-md-12 col-sm-12 column">
                                    <div class="profile_fields">
                                        <label>Name</label>
                                        @if(Auth::check())
                                            <input type="hidden" name="sellerId"
                                                   value="{{ $Details['properties']->user_id }}">
                                            <input type="hidden" name="propertyId"
                                                   value="{{ $Details['properties']->id }}">
                                            <input type="text" name="name" readonly
                                                   value="{{Auth::user()->first_name}}"
                                                   required="">
                                        @else
                                            <input type="text" name="name" required="">
                                            <input type="hidden" name="propertyId"
                                                   value="{{ $Details['properties']->id }}">
                                            <input type="hidden" name="sellerId"
                                                   value="{{ $Details['properties']->user_id }}">
                                        @endif

                                        @error('name')
                                        <div class="error">{{ $message }}</div>
                                        @enderror

                                    </div>
                                    <div class="profile_fields">
                                        <label>Email</label>
                                        @if(Auth::check())
                                            <input type="text" name="email" readonly value="{{Auth::user()->email}}"
                                                   required="">
                                        @else
                                            <input type="text" name="email" required="">
                                        @endif
                                        @error('email')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="profile_fields">
                                        <label>Phone</label>
                                        @if(Auth::check())
                                            <input type="text" name="phone" readonly
                                                   value="{{Auth::user()->mobile_number}}" required="">
                                        @else
                                            <input type="text" name="phone" required="">
                                        @endif
                                        @error('phone')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="profile_fields">
                                    <label>Message</label>
                                    <textarea name="message" value="{{old('message')}}"
                                              placeholder="Message"></textarea>
                                    @error('message')
                                    <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="profile_fields">

                                    <input type="submit" class="theme-btn btn-one" value="Send ">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script> --}}
        <script src="{{asset('public/assets/js/gmaps.js')}}"></script>
        <script src="{{asset('public/assets/js/map-helper.js')}}"></script>
        <script>
            $('.js-anchor-link').click(function (e) {
                e.preventDefault();
                var target = $($(this).attr('href'));
                if (target.length) {
                    var scrollTo = target.offset().top;
                    $('body, html').animate({scrollTop: scrollTo + 'px'}, 1000);
                }
            });
        </script>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="propertyDetailimg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Photos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="property_modal_images">
                        <div class="property_modal_images_left">

                            <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach ($Details['propertyMedia']  as $key => $property)

                                    <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="v-pills-propertyimgtab1-tab"
                                       data-toggle="pill" href="#v-pills-{{ $key }}" role="tab"
                                       aria-controls="v-pills-propertyimgtab1" aria-selected="true">
                                        <img class="lazy" id="" src="{{$property['s3buckettempurl']}}"
                                             alt="">

                                    </a>
                                @endforeach
                            </div>

                        </div>
                        <div class="property_modal_images_right">
                            <div class="tab-content" id="v-pills-tabContent">
                                @foreach ($Details['propertyMedia']  as $key => $property)
                                    <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}"
                                         id="v-pills-{{ $key }}" role="tabpanel"
                                         aria-labelledby="v-pills-{{ $key }}-tab">
                                        <div class="property_inner_detail_images">
                                            <img id="" class="lazy" src="{{$property['s3buckettempurl']}}"
                                                 alt="">
                                        </div>
                                        <div class="author-info clearfix">
                                            <ul class="rating text-center mt-3 clearfix">
                                                <a class="theme-btn btn-one js-anchor-link" href="#schedule-tour">Schedule
                                                    Tour</a>
                                            </ul>
                                        </div>
                                        <div class="property_detail_prevnext">
                                            <button class="theme-btn btn-one property_detail_next"><i
                                                    class="fas fa-chevron-left"></i></button>
                                            <button class="theme-btn btn-one property_detail_prev"><i
                                                    class="fas fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Property Detail Inner Modal --}}

    <!-- School Modal -->
    @php
        $greatSchool =  greatSchool($Details['properties']->PropertyLatitude,$Details['properties']->PropertyLongitude)
    @endphp
  {{-- @dd($greatSchool) --}}
   @if (isset($greatSchool['schools']) && count($greatSchool['schools']) > 0)
   @forelse ($greatSchool['schools']   as $key => $school)
            @php
            $subRating =  greatSchoolSubrating($school['universal-id'])
            @endphp
    <div class="modal fade propertyDetail_schoolModal" id="exampleschoolModal{{$key}}" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="exampleModalLabel">{{$school['name']}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="propertyDetail_schoolModal_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="summary-rating-and-reviews">
                                    <div class="summary-rating-detail">
                                        <p class="para"><strong>{{isset($school['rating']) ? $school['rating'] : "-" }}</strong>/10</p>
                                        <span>Summary Rating</span>
                                    </div>
                                    <div class="reviews-detail">
                                        <div class="school_review">
                                            <div class="school_review_rating">
                                                <a href="javascript:void(0)"><small>4.0</small></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="not_filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="not_filled_star"><i
                                                        class="fas fa-star"></i></a>
                                            </div>
                                            <p class="para">22 reviews</p>
                                        </div>

                                    </div>
                                </div>
                                <div class="other_service_summary">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)"><i class="far fa-bullhorn"></i></a>
                                            <p>Serves this home</p>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-graduation-cap"></i></a>
                                            @php
                                                $levelColumnValue = $school['level']; // Replace this with your actual value from the database
                                                [$firstLevel, $lastLevel] = schoolLevel($levelColumnValue);
                                            @endphp
                                            <p>{{$school['type'].', '.$firstLevel.'-'.$lastLevel}}</p>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-user"></i></a>
                                            <p>480 students (16 per teacher)</p>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="far fa-car"></i></a>
                                            <p>{{formatDistance($school['distance'])}} away</p>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-map-marker-alt"></i></a>
                                            <p>{{$school['street'].', '.$school['city'].', '.$school['state'].' '.$school['zip']}}</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                            <h3 ><a class="collapse_header_title" href="javascript:void(0)">GreatSchools Subrating</a></h3>
                                <div class="collapse_wrap">
                                    @forelse($subRating as $key => $subRatings)
                                        @if(isset($subRatings) && !empty($subRatings))
                                           <div class="collapse_items">
                                            <h1>{{isset($subRatings['value']) ? $subRatings['value'] : "-"}}/10</h1>
                                            <div id='{{$school['name'].$key}}' class="custom_collapse">
                                                <button onclick="onOpenCollapse('{{$school['name'].$key}}')"><span> {{ ucwords(str_replace('-', ' ', $key)) }}</span> <i id="{{$school['name'].$key}}-arrow" class="fa fa-angle-down"></i></button>
                                                <div id="{{$school['name'].$key}}-content" class="collapse_content">
                                                   <p> {{ isset($subRatings['description']) ? $subRatings['description'] : "-"}}</p>
                                                </div>
                                            </div>
                                           </div>
                                        @endif
                                    @empty
                                    @endforelse
                                </div>

                                {{-- <div class="school-dialog-right-section">
                                    <div class="great-school-subrating-section">
                                        <h3><a href="javascript:void(0)">GreatSchools Subrating</a></h3>
                                        <div id="accordion">
                                            @forelse($subRating as $key => $subRatings)
                                                @if(isset($subRatings) && !empty($subRatings))
                                                    <div class="great-school-subrating-section-accordion">
                                                    <p class="subrating_score">{{isset($subRatings['value']) ? $subRatings['value'] : "-"}}/10</p>
                                                        <div class="card">
                                                            <div class="card-header" id="headingOne">
                                                                <h5 class="mb-0">
                                                                    <button class="btn btn-link" data-toggle="collapse"
                                                                            data-target="#collapseOne" aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                        {{ ucwords(str_replace('-', ' ', $key)) }}
                                                                    </button>
                                                                </h5>
                                                            </div>
                                                            <div id="collapseOne" class="collapse show"
                                                                aria-labelledby="headingOne" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <p class="great-school-paragraph">{{ isset($subRatings['description']) ? $subRatings['description'] : "-"}}.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- breake --}}

                                {{-- <div class="school-community-std-parents-reviews">
                                    <div class="school-community-reviews">
                                        <h3>Community Reviews</h3>
                                        <div class="school_review_rating">
                                            <a href="javascript:void(0)"><small>4.0</small></a>
                                            <a href="javascript:void(0)" class="filled_star"><i class="fas fa-star"></i></a>
                                            <a href="javascript:void(0)" class="filled_star"><i class="fas fa-star"></i></a>
                                            <a href="javascript:void(0)" class="filled_star"><i class="fas fa-star"></i></a>
                                            <a href="javascript:void(0)" class="not_filled_star"><i
                                                    class="fas fa-star"></i></a>
                                            <a href="javascript:void(0)" class="not_filled_star"><i
                                                    class="fas fa-star"></i></a>
                                            <a href="javascript:void(0)"><small>22 reviews</small></a>
                                        </div>
                                        <div class="parent_summary_review">
                                            <h5 class="parent_review_title">Parent review</h5>
                                            <div class="school_review_rating">
                                                <a href="javascript:void(0)"><small>4.0</small></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="not_filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="not_filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)"><small>September 2017</small></a>
                                            </div>
                                            <p>Our family is extremely happy with the education at John Hay. We have two
                                                kids here and have done grades K-2 so far. There are down sides like
                                                you'll have at every school, but the good far exceeds it. The teachers
                                                are very capable and do an amazing job teaching all their students the
                                                myriad of subjects they go through. There's a good amount of focus on
                                                STEM and art, which keeps my kids loving the fun side of school. The
                                                parents are active and volunteer a lot of time to support staff and
                                                tutor students. It's a really strong community.</p>
                                        </div>
                                        <div class="parent_summary_review">
                                            <h5 class="parent_review_title">Students review</h5>
                                            <div class="school_review_rating">
                                                <a href="javascript:void(0)"><small>4.0</small></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="not_filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)" class="not_filled_star"><i
                                                        class="fas fa-star"></i></a>
                                                <a href="javascript:void(0)"><small>October 2015</small></a>
                                            </div>
                                            <p>this school is okay. the teachers like to teach with humor, at least
                                                some, and it's a fun way of learning, some other teachers are strict and
                                                yell alot. have witnessed some bullying</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @empty
        @endforelse
    @endif

    <!-- Around This Home Modal -->
    <div class="modal fade propertyDetail_schoolModal" id="examplearoundHomeModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="exampleModalLabel">Around This Home</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="around_thishome_modalwrapper">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-homePlace-tab" data-toggle="pill"
                                   href="#pills-homePlace" role="tab" aria-controls="pills-homePlace"
                                   aria-selected="true">Place</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-transit-tab" data-toggle="pill" href="#pills-transit"
                                   role="tab" aria-controls="pills-transit" aria-selected="false">Transit</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-homePlace" role="tabpanel"
                                 aria-labelledby="pills-homePlace-tab">
                                <div class="around_thishome_content">
                                    <div class="selector">
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio1" name="selector" class="selector-item_radio"
                                                   checked>
                                            <label for="radio1" class="selector-item_label">Highlights</label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio2" name="selector" class="selector-item_radio">
                                            <label for="radio2" class="selector-item_label">Grocery
                                                <span>2</span></label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio3" name="selector" class="selector-item_radio">
                                            <label for="radio3" class="selector-item_label">Food & Drink <span>65</span></label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio4" name="selector" class="selector-item_radio">
                                            <label for="radio4" class="selector-item_label">Park <span>8</span></label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio5" name="selector" class="selector-item_radio">
                                            <label for="radio5" class="selector-item_label">Shopping
                                                <span>8</span></label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio6" name="selector" class="selector-item_radio">
                                            <label for="radio6" class="selector-item_label">Sports and Recreation <span>24</span></label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio7" name="selector" class="selector-item_radio">
                                            <label for="radio7" class="selector-item_label">Entertainment
                                                <span>12</span></label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio8" name="selector" class="selector-item_radio">
                                            <label for="radio8" class="selector-item_label">Services
                                                <span>30</span></label>
                                        </div>
                                    </div>
                                    <div class="around_thishome_radio_data">
                                        <ul>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Art Marble 21</p>
                                                                <small>Bar • 0.2 miles </small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Sam's Tavern</p>
                                                                <small>Sports Bar, Burger Joint, Dive Bar • 0.4
                                                                    miles</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Ba Bar Green</p>
                                                                <small>Cocktail Bar, Vietnamese Restaurant • 0.4
                                                                    miles</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Cairde Public House</p>
                                                                <small>Sports Bar, American Restaurant • 0.3
                                                                    miles</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Flatstick Pub - South Lake
                                                                    Union</p>
                                                                <small>Bar • 0.3 miles</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Tapster Seattle</p>
                                                                <small>Sports Bar, Beer Bar • 0.4 miles</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Dulce Lash Lounge</p>
                                                                <small>Lounge, Spa, Cocktail Bar • 0.5 miles</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i
                                                                    class="fas fa-shopping-cart"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Maxwell Hotel Lobby</p>
                                                                <small>Cocktail Bar, Lounge • 0.4 miles</small>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-transit" role="tabpanel"
                                 aria-labelledby="pills-transit-tab">
                                <div class="around_thishome_content">
                                    <div class="selector">
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio1all" name="selectortransit"
                                                   class="selector-item_radio" checked>
                                            <label for="radio1all" class="selector-item_label">All</label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio2train" name="selectortransit"
                                                   class="selector-item_radio">
                                            <label for="radio2train" class="selector-item_label">Train
                                                <span>2</span></label>
                                        </div>
                                        <div class="selecotr-item">
                                            <input type="radio" id="radio3bus" name="selectortransit"
                                                   class="selector-item_radio">
                                            <label for="radio3bus" class="selector-item_label">Bus
                                                <span>65</span></label>
                                        </div>
                                    </div>
                                    <div class="around_thishome_radio_data">
                                        <ul>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Aurora Ave N Prospect St</p>
                                                                <small>Bus Stop • 0.0 miles</small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">5</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Westlake Ave N Highland Dr</p>
                                                                <small>Bus Stop • 0.2 miles</small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">40</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Aurora Ave N Galer St</p>
                                                                <small>Bus Stop • 0.3 miles</small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">16</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">28</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">5</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">E Line</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Westlake Ave N Mercer St</p>
                                                                <small>Bus Stop and Train Station • 0.4 miles</small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">320</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">40</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">64</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">C Line</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Dexter Ave N Aloha St</p>
                                                                <small>Bus Stop • 0.1 miles</small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">62</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Taylor Ave N Prospect St</p>
                                                                <small>Bus Stop • 0.2 miles</small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">3</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">4</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">Westlake Ave N Mercer St</p>
                                                                <small>Bus Stop • 0.3 miles </small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">40</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">C Line</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="school_innerwidget">
                                                    <div class="school_innerwidget_left">
                                                        <p class="para">
                                                            <a href="javascript:void(0)"><i class="fas fa-bus"></i></a>
                                                        </p>
                                                    </div>
                                                    <div class="school_innerwidget_right">
                                                        <ul>
                                                            <li>
                                                                <p class="school_name">South Lake Union Streetcar Terry
                                                                    Ave N</p>
                                                                <small>Train Station • 0.4 miles</small>
                                                                <ul class="transit_numBox_wrapper">
                                                                    <li>
                                                                        <a href="javascript:void(0)"><span
                                                                                class="transit_numBox">South Lake Union Streetcar</span></a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Climate risks Modal -->
    <div class="modal fade propertyDetail_schoolModal" id="exampleclimateriskModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="exampleModalLabel">Climate risks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="Climate_risks_modalwrapper around_thishome_modalwrapper">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-Flood-tab" data-toggle="pill" href="#pills-Flood"
                                   role="tab" aria-controls="pills-Flood" aria-selected="true">Flood</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-Fire-tab" data-toggle="pill" href="#pills-Fire" role="tab"
                                   aria-controls="pills-Fire" aria-selected="false">Fire</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-Heat-tab" data-toggle="pill" href="#pills-Heat" role="tab"
                                   aria-controls="pills-Heat" aria-selected="false">Heat</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-Flood" role="tabpanel"
                                 aria-labelledby="pills-Flood-tab">
                                <div class="climate_risk_sect_content">
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Flood Factor</h5>
                                        <span>
                                    <img class="lazy" src="{{asset('public/assets/images/flood_minimal_img.png')}}"
                                         alt="">
                                </span>
                                        <p class="paragraph">This property is unlikely to flood over the next 30
                                            years.</p>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>About FEMA Zone X</h5>
                                        <p class="paragraph">FEMA designates Zone X as a low-to-moderate flood area. In
                                            this zone, the risk of flooding is reduced, but not completely removed.</p>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Flood Insurance</h5>
                                        <p class="paragraph">Based on your estimated FEMA zone, flood insurance is not
                                            required. However, FEMA always recommends considering insurance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Fire" role="tabpanel" aria-labelledby="pills-Fire-tab">
                                <div class="climate_risk_sect_content">
                                    <div class="climate_risk_sect_content_1">
                                        <p class="paragraph mt-2 mb-2">Based on this property’s distance to wildfire
                                            risk areas and burnable vegetation, it has a minimal risk of wildfire.</p>
                                        <h5>Fire Factor</h5>
                                        <span>
                                    <img src="{{asset('public/assets/images/fire-factor-score-01.png')}}" alt="">
                                </span>
                                        <p class="paragraph">This property is unlikely to be in a wildfire.</p>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>USFS relative risk rank</h5>
                                        <p class="paragraph">This property is located in a county with an average
                                            wildfire risk greater than 15.4% of counties in the United States.</p>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Fire Insurance</h5>
                                        <p class="paragraph">Fire insurance for 1000 Aurora Ave N #603 ranges from $604
                                            to $1122 per year.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Heat" role="tabpanel" aria-labelledby="pills-Heat-tab">
                                <div class="climate_risk_sect_content">
                                    <div class="climate_risk_sect_content_1">
                                        <p class="paragraph mt-2 mb-2">Based on the current and future temperature and
                                            humidity in the area and at this specific location, this property has a
                                            moderate risk of heat.</p>
                                        <h5>Heat Factor</h5>
                                        <span>
                                    <img src="{{asset('public/assets/images/heat-factor-score-03.png')}}" alt="">
                                </span>
                                        <p class="paragraph">Due to a changing environment, this property’s heat risk is
                                            increasing.</p>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Hot days over time</h5>
                                        <div class="hot_days_bar_section">
                                            <div class="hotDays_bar_wrapper">
                                                <span>7d</span>
                                                <div class="hotDays_bar_bg"></div>
                                                <div class="hotDays_bar_bg_filled"></div>
                                                <span>1y</span>
                                            </div>
                                            <div class="hotDays_bar_wrapper">
                                                <span>8d</span>
                                                <div class="hotDays_bar_bg"></div>
                                                <div class="hotDays_bar_bg_filled"></div>
                                                <span>5y</span>
                                            </div>
                                            <div class="hotDays_bar_wrapper">
                                                <span>10d</span>
                                                <div class="hotDays_bar_bg"></div>
                                                <div class="hotDays_bar_bg_filled"></div>
                                                <span>10y</span>
                                            </div>
                                            <div class="hotDays_bar_wrapper">
                                                <span>11d</span>
                                                <div class="hotDays_bar_bg"></div>
                                                <div class="hotDays_bar_bg_filled"></div>
                                                <span>15y</span>
                                            </div>
                                            <div class="hotDays_bar_wrapper">
                                                <span>12d</span>
                                                <div class="hotDays_bar_bg"></div>
                                                <div class="hotDays_bar_bg_filled"></div>
                                                <span>20y</span>
                                            </div>
                                            <div class="hotDays_bar_wrapper">
                                                <span>14d</span>
                                                <div class="hotDays_bar_bg"></div>
                                                <div class="hotDays_bar_bg_filled"></div>
                                                <span>25y</span>
                                            </div>
                                            <div class="hotDays_bar_wrapper">
                                                <span>15d</span>
                                                <div class="hotDays_bar_bg"></div>
                                                <div class="hotDays_bar_bg_filled"></div>
                                                <span>30y</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Effect of heat on energy costs</h5>
                                        <p class="paragraph">Energy costs for cooling this home may increase by 30.5%
                                            over the next 30 years as more energy is needed to maintain a consistent
                                            indoor temperature.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Climate check Modal -->
    <div class="modal fade propertyDetail_schoolModal" id="exampleclimatecheckModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title title" id="exampleModalLabel">Climate check</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="Climate_risks_modalwrapper around_thishome_modalwrapper">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-storm-tab" data-toggle="pill" href="#pills-storm"
                                   role="tab" aria-controls="pills-storm" aria-selected="true">Storm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-Drought-tab" data-toggle="pill" href="#pills-Drought"
                                   role="tab" aria-controls="pills-Drought" aria-selected="false">Drought</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-storm" role="tabpanel"
                                 aria-labelledby="pills-storm-tab">
                                <div class="climate_risk_sect_content">
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Historical Impact</h5>
                                        <p class="paragraph">Historically, 1000 Aurora Ave N #603 experiences 8
                                            significant two-day storms a year, with about 1.52" of precipitation per
                                            storm.</p>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Projected Impact</h5>
                                        <p class="paragraph">This home’s risk from severe storms is increasing.</p>
                                        <p class="paragraph">In 2050, 24 storms are projected to occur with about 1.95"
                                            of precipitation per storm.</p>
                                        <div class="project_impact_boxes">
                                            <div class="project_impact_boxes_left">
                                                <h5>Precipitation per storm</h5>
                                                <div class="hot_days_bar_section">
                                                    <div class="hotDays_bar_wrapper">
                                                        <span>1.52"</span>
                                                        <div class="hotDays_bar_bg"></div>
                                                        <div class="hotDays_bar_bg_filled"></div>
                                                        <span>Past</span>
                                                    </div>
                                                    <div class="hotDays_bar_wrapper">
                                                        <span>1.95"</span>
                                                        <div class="hotDays_bar_bg"></div>
                                                        <div class="hotDays_bar_bg_filled"></div>
                                                        <span>2050</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project_impact_boxes_left">
                                                <h5>48-hour storms per year</h5>
                                                <div class="hot_days_bar_section">
                                                    <div class="hotDays_bar_wrapper">
                                                        <span>8</span>
                                                        <div class="hotDays_bar_bg"></div>
                                                        <div class="hotDays_bar_bg_filled"></div>
                                                        <span>Past</span>
                                                    </div>
                                                    <div class="hotDays_bar_wrapper">
                                                        <span>24</span>
                                                        <div class="hotDays_bar_bg"></div>
                                                        <div class="hotDays_bar_bg_filled"></div>
                                                        <span>2050</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>About Storm Risk</h5>
                                        <p class="paragraph">Storm risk is calculated using the typical number of
                                            extremely wet or snowy events, and the amount of rain or snow that will fall
                                            during those storms. An “extremely wet event” means experiencing an amount
                                            of precipitation over 48 hours that normally happened only 8 times during
                                            the baseline period from 1981 to 2005.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Drought" role="tabpanel"
                                 aria-labelledby="pills-Drought-tab">
                                <div class="climate_risk_sect_content">
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Historical Impact</h5>
                                        <p class="paragraph">Historically, 1000 Aurora Ave N #603 experiences 8
                                            significant two-day storms a year, with about 1.52" of precipitation per
                                            storm.</p>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>Projected Impact</h5>
                                        <p class="paragraph">This home’s risk from severe storms is increasing.</p>
                                        <p class="paragraph">In 2050, 24 storms are projected to occur with about 1.95"
                                            of precipitation per storm.</p>
                                        <div class="project_impact_boxes">
                                            <div class="project_impact_boxes_left">
                                                <h5>Water Stress (% of supply used by humans)</h5>
                                                <div class="hot_days_bar_section">
                                                    <div class="hotDays_bar_wrapper">
                                                        <span>1.52"</span>
                                                        <div class="hotDays_bar_bg"></div>
                                                        <div class="hotDays_bar_bg_filled"></div>
                                                        <span>Past</span>
                                                    </div>
                                                    <div class="hotDays_bar_wrapper">
                                                        <span>1.95"</span>
                                                        <div class="hotDays_bar_bg"></div>
                                                        <div class="hotDays_bar_bg_filled"></div>
                                                        <span>2050</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="climate_risk_sect_content_1">
                                        <h5>About Storm Risk</h5>
                                        <p class="paragraph">Storm risk is calculated using the typical number of
                                            extremely wet or snowy events, and the amount of rain or snow that will fall
                                            during those storms. An “extremely wet event” means experiencing an amount
                                            of precipitation over 48 hours that normally happened only 8 times during
                                            the baseline period from 1981 to 2005.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- sharemodal-start --}}
    <div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="share-text text-center">Share Listing</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p class="share-gentxt">Email</p>
                        <input type="email" class="form-control" id="recipient-email" required>
                    </div>
                    <div class="form-group">
                        <p class="share-gentxt">Message</p>
                        <textarea class="form-control" id="message-text" required></textarea>
                    </div>
                    <div class="send-btn d-flex justify-content-end">
                        <button id="shareSubmitButton"
                                class="theme-btn btn-one cta-btnshare button Button primary submit-button">Send
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- sharemodal-End --}}

    {{-- favModel-start --}}
    <div class="modal align-middle" id="favModalNoti">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="favtle"></h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="favbdy">
                </div>
                <div class="modal-footer">
                    <button class="theme-btn btn-one" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- favModel-end --}}

    {{-- streetViewModal Start --}}
    <div class="modal fade" id="streetViewModal" class="streetview-modal-wrapper" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered streetview-modal-wrapper">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Street View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="map2"></div>
                    {{-- <button style="position: absolute; top: 0px; z-index: 999;" id="streetViewButton">Toggle Street View</button> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- streetViewModal End --}}

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places"></script>
    <script>

        function initializeStreetView() {
            // Get the address or coordinates (latitude, longitude)
            const addresss = "{{$Details['properties']->PropertyAddress}}"
            // Geocode the address to get the coordinates
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({address: addresss}, function (results, status) {
                if (status === "OK") {
                    const location = results[0].geometry.location;

                    // Create a map centered at the location
                    const map = new google.maps.Map(document.getElementById("map2"), {
                        center: location,
                        zoom: 15
                    });

                    // Create a Street View object
                    const streetViewService = new google.maps.StreetViewService();
                    const streetViewPanorama = new google.maps.StreetViewPanorama(document.getElementById("map2"), {
                        position: location,
                        pov: {heading: 0, pitch: 0}
                    });

                    // Check if Street View is available at the location
                    streetViewService.getPanorama({location: location, radius: 50}, function (data, status) {
                        if (status === "OK") {
                            // Street View is available
                            map.setStreetView(streetViewPanorama);
                        } else {
                            // Street View is not available
                            alert("Street View is not available at this location.");
                        }
                    });
                } else {
                    // Geocoding failed
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
        }

        // Attach click event listener to the button
        document.getElementById("streetViewButton").addEventListener("click", initializeStreetView);
    </script>

    {{-- Modal End's --}}

    <script>

const onOpenCollapse = (id)=> {
        let parentElem = document.getElementById(id);
        let contentHeight = document.getElementById(`${id}-content`).getBoundingClientRect().height

        if(parentElem.getBoundingClientRect().height > 40){
            parentElem.style.height =  40
            document.getElementById(`${id}-arrow`).style.transform = 'rotate(0deg)'
        }else {
            parentElem.style.height = contentHeight + 40
            document.getElementById(`${id}-arrow`).style.transform = 'rotate(-180deg)'
        }

    }

$(document).ready(function() {
      var startDate = new Date(); // Get the current date
      var endDate = new Date();
      endDate.setDate(startDate.getDate() + 15); // Set the end date as 7 days from the current date

      var currentDate = startDate;
      var dateSlider = $('#dateSlider');

      // Loop through the dates and generate the HTML dynamically
      while (currentDate <= endDate) {
        var dayOfWeek = currentDate.toLocaleDateString('en-US', {
          weekday: 'long'
        }).toLowerCase();
        var dayOfMonth = currentDate.getDate();
        var month = currentDate.toLocaleDateString('en-US', {
          month: 'short'
        }).toLowerCase();

        var dateBox = $('<div class="swiper-slide"></div>');
        var label = $('<label class="dateBox"></label>');
        var radio = $('<input id="date_box" type="radio" name="date">').val(currentDate.toISOString().split('T')[0]);
        var span1 = $('<span>' + dayOfWeek + '</span>');
        var h6 = $('<h6>' + dayOfMonth + '</h6>');
        var span2 = $('<span>' + month + '</span>');

        label.append(radio, span1, h6, span2);
        dateBox.append(label);
        dateSlider.append(dateBox);

        currentDate.setDate(currentDate.getDate() + 1); // Move to the next date
      }

      // Initialize the swiper slider
      var swiper = new Swiper('.calenderSwiper', {
        slidesPerView: 3,
        spaceBetween: 10,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });

      // Event handler for Schedule Now button
    //   $('.schedule_now').on('click', function() {
    //     var selectedDate = $('input[name="date"]:checked').val();
    //         console.log('Selected date:', selectedDate);
    //   });
    });

        jQuery(function ($) {
            $(window).scroll(function fix_element() {
                $('#target').css(
                    $(window).scrollTop() > 100
                        ? {'position': 'fixed', 'top': '10px'}
                        : {'position': 'relative', 'top': 'auto'}
                );
                return fix_element;
            }());
        });
    </script>
    <!-- main-js -->

    <script type="text/javascript">

        // get elem by  id and if touch on top then add class

        $(document).ready(function () {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll > 150) {
                    $("#property_nav").addClass("property_nav_sticky");
                } else {
                    $("#property_nav").removeClass("property_nav_sticky");
                }
            });
        });

        $(document).ready(function () {

            $("body").on('click', '.formFavourite', (function (e) {
                var value = $(this).data("text");
                $.ajax({
                    url: "<?php echo url('/skzfav'); ?>",
                    type: "GET",
                    data: {
                        text: value
                    },
                    success: function (response) {
                        if (response.return == true) {
                            $('#favtle').text('Favorite');
                            $('#favbdy').text(response.message);
                            $('#favModalNoti').modal('show');
                            $('#favBtnListed' + value).find('i').toggleClass('far fa-heart fas fa-heart');
                            $('#favBtnListed' + value).removeClass("formFavourite");
                            $('#favBtnListed' + value).addClass('formFavourite skzfavx');
                            $('#skzmtle')
                        } else {
                            $('#favtle').text('Favorite');
                            $('#favbdy').text(response.message);
                            $('#favModalNoti').modal('show');
                            $('#favBtnListed' + value).find('i').toggleClass('fas fa-heart far fa-heart');
                            $('#favBtnListed' + value).removeClass("skzfavx");
                            $('#favBtnListed' + value).addClass('formFavourite');
                        }
                    },
                    error: function (e) {
                        alert('Failed to submit');
                    }
                });

            }));

            $("body").one('click', '.formShare', (function (e) {
                var property_id = $(this).data("text");
                var user_id = $(this).data("user");
                $('#shareSubmitButton').on('click', function () {
                    var email = $('#recipient-email').val();
                    var message = $('#message-text').val();
                    setTimeout(function () {
                        $('#shareModal').modal('hide');
                        $('#recipient-email').val("");
                        $('#message-text').val(""); // Hide the modal after 1 second
                        $('#favtle').text('Share Listing');
                        $('#favbdy').text("Property Shared Successfully");
                        $('#favModalNoti').modal('show');
                    }, 1000);

                    $.ajax({
                        url: "<?php echo url('/share-listing'); ?>",
                        type: "POST",
                        data: {
                            "property_id": property_id,
                            "user_id": user_id,
                            "email": email,
                            "message": message,
                            "_token": "{{csrf_token()}}"
                        },
                        success: function (response) {
                            console.log("Success");
                        },
                        error: function (e) {
                            console.log("Failure");
                        }
                    });
                });
            }));

            $("body").on('click', '.favNotLoggedIn', (function (e) {
                window.location.href = sturl + '/login';
            }));

            $("body").on('click', '.shrNotLoggedIn', (function (e) {
                window.location.href = sturl + '/login';
            }));
        });

    </script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

    <script>

        function initialize() {
            initMap();

        }

        var map, marker;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -34.397,
                    lng: 150.644
                },
                zoom: 10
            });

            // const geocoder = new google.maps.Geocoder();
            // const infowindow = new google.maps.InfoWindow();

            var geocoder, map, address;

            var address = "{{$Details['properties']->PropertyAddress}}";
            console.log(address, 'address')
            codeAddress(address);
        }

        function codeAddress(address) {

            var componentForm = {
                locality: 'long_name',
                administrative_area_level_1: 'short_name',
            };
            const infowindow = new google.maps.InfoWindow();
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                'address': address
            }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    var myOptions = {
                        zoom: 17,
                        center: results[0].geometry.location,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    map = new google.maps.Map(document.getElementById("map"), myOptions);

                    const marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,

                    });

                    infowindow.setContent(results[0].formatted_address);
                    infowindow.open(map, marker);
                }
            });
        }

        // Code for Fetch Address using autocomplete -- End

        // code for hiding header menu on scroll down and show on scroll top
        // .main-header

        $(document).scroll(function () {
            var y = $(this).scrollTop();
            if (y > 0) {
                $('.main-header').hide();
            } else {
                $('.main-header').show();
            }
        });
    </script>

    <script
        src="https://maps.google.com/maps/api/js?key=AIzaSyBxLYi2X9cTrWsyTdjIvRuwiRnU_iD9qp0&libraries=places&callback=initialize"
        defer></script>

@endsection
