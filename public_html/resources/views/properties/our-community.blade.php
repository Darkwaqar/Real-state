@php
    $metaTitle = 'Property For Sale Washington | Washington Property For Sale';
    $metaDescription = 'Discover a variety of properties for sale in Washington.
     Explore our extensive listings for Washington property for sale and find
      your dream home or investment opportunity today.';
@endphp

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
</head>

@extends('properties.layouts.all-properties-main')
@section('content')

    <style>
        .footer-bottom .footer-logo {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            /* top: -90px; */
        }

        .footer-logo {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 220px;
            /* height: 100%; */
        }

        #customControls {
            position: absolute;
            bottom: 200px;
            right: 12px;
            display: flex;
            flex-direction: column;
            z-index: 100;
        }

        #customControls .buttonBox {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        #customControls .buttonBoxInner {
            position: absolute;
            top: 0;
            right: 58px;
            border: none;
            background: #fff;
            border-radius: 5px;
            display: none;
        }

        #customControls .buttonBox:nth-child(2) .buttonBoxInner {
            width: 368px;
            height: 235px;


            /* padding: 12px;  */
        }

        #customControls .buttonBox:nth-child(3) .buttonBoxInner {
            width: 220px;
            height: 150px;
        }

        #customControls .buttonBoxBtns {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0.25rem;
            font-weight: 400;
            line-height: 12px;
            width: 50px;
            height: 50px;
            border-radius: 6px;
            background-color: #fff;
            box-shadow: unset;
            margin-bottom: 8px;
            border: none !important;
        }

        #customControls .buttonBoxBtns i {
            font-size: 16px;
        }

        #customControls .buttonBoxBtns span {
            font-size: 10px;
            color: #333;
            font-weight: 400;
            text-align: center;
            margin-top: 5px;
        }

        #googleMap .gm-svpc {
            left: -9px !important;
            border-radius: 8px !important;
            width: 50px !important;
            height: 50px !important;
            box-shadow: unset !important;
            border: none !important;
        }

        #googleMap .gmnoprint:nth-child(4) {
            left: -8px !important;
        }

        #googleMap .gmnoprint:nth-child(4)>div {
            width: 50px !important;
        }

        #googleMap .gmnoprint:nth-child(4) button {
            width: 50px !important;
            height: 50px !important;
        }

        .buttonBoxInnerRow {
            display: flex;
            flex-wrap: wrap;
        }

        .buttonBox:nth-child(2) .buttonBoxInnerBoxes {
            /* border: 1px solid red; */
            width: 25%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }

        .buttonBox:last-child .buttonBoxInnerBoxes {
            /* border: 1px solid red; */
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
        }

        .buttonBoxInner h4 {
            padding: 15px 22px 0px 22px;
            font-size: .875rem;
            font-weight: 600;
            color: #000;
        }

        .buttonBoxInnerBoxes button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: transparent;
        }

        .buttonBoxInnerBoxes button span {
            font-size: .875rem;
            color: #333;
            font-weight: 400;
            display: flex;
        }

        .buttonBoxInnerBoxes button.active .buttonBoxInnerBoxesIconBox {
            border: 2px solid #DE1E25;
        }

        .buttonBoxInnerBoxesIconBox {
            width: 48px;
            height: 48px;
            padding: 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            position: relative;
            margin-bottom: 0.25rem;
        }

        .drawOnMapActionBar {
            position: absolute;
            top: -13px;
            left: 0;
            width: 100%;
            height: 40px;
            background-color: #000000c7;
            display: none;
            align-items: center;
            justify-content: space-between;
            z-index: 100;
            padding: 10px;
            border-top-right-radius: 10px;
        }

        .drawOnMapActionBar.active {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .drawOnMapActionBar .drawOnMapActionBarMsg {
            color: #fff;
        }

        .drawOnMapActionBar .drawOnMapActionBarBtn {
            color: #fff !important;
            margin-left: auto;
            height: 40px;
            line-height: 40px;
            padding-left: 0.7vw;
            border: none;
            border-left: 1px solid #b2b2b2;
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-right: 5px;
            border-radius: 0px !important;
        }

        #drawOnMapBtn {
            cursor: pointer;
        }

        #drawOnMapBtn:disabled {
            cursor: none;
        }

        input[type="search"]::-webkit-search-cancel-button {
            display: none;
        }

        .cross {
            cursor: pointer;
            position: absolute;
            top: 13px;
            right: 10px;
            z-index: 1;
        }

        .gm-style {
            font: inherit;
            text-decoration: inherit;
        }

        .removeOutlineButton {
            position: absolute;
            z-index: 9999;
            bottom: 42px;
            right: 65px;
        }

        .removeOutlineButton button {
            background-color: #fff !important;
            border: none !important;
            font-size: 0.8rem !important;
        }
    </style>
    {{-- <script src="{{ asset('public/assets/js/jquery.js') }}"></script> --}}

    <section class=" mtts-20">
        {{-- <div id="test">asdasdasdasdas</div> --}}
        <div class="map_row">
            <div class="map_zoom_progress_wrap" id="map-loader" style="display:none">
                <div class="d-flex justify-content-between align-items-center">
                    <span style="font-size: 12px; line-height:1;">Receving listings from ARIS360</span>
                    <span style="font-size: 12px; line-height:1;">70%</span>
                </div>
                <div class="progress_bar">
                    <div class="progress_bar_thumb" style="width: 70%"></div>
                    <div class="progress_bar_track"></div>
                </div>
            </div>
            <div class="map_leftCol fixed_search_section  " id="map_wrapper">
                @if (auth()->check())
                    <div id="save">

                        <button onclick="onOpenSaveSearch()" class="saveData" id="loginCheck"> Save search</button>
                        <div id="dropdown_save_search_wrap" class="search_dropdown_wrap">
                            <h1 class="title">Save Your Search</h1>
                            <p>You'll be the first to know when new homes hit the market.
                            </p>
                            <div class="input_wrap">
                                <label for="save_search">Name your search</label>
                                <input id="save_search" type="text">
                                <p id="save_search_status"></p>
                            </div>

                            <div class="py-3 d-flex justify-content-end">
                                <button id="saveData" class="theme-btn btn-one">Save</button>
                            </div>

                        </div>
                    </div>
                @endif
                <div class="map_leftCol_inner position-relative">
                    <div class="drawOnMapActionBar" id="drawOnMapActionBar">
                        <div class="drawOnMapActionBarMsg">
                            Click and drag to draw your search.
                        </div>
                        <div class="drawOnMapActionBarBtnBox">
                            <button class="btn drawOnMapActionBarBtn" id="Cancel" type="button">Cancel</button>
                        </div>

                    </div>
                    <div id="customControls">
                        <div class="buttonBox">
                            <button class="btn btn-warning buttonBoxBtns " id="drawOnMapBtn">
                                <i class="fas fa-draw-polygon"></i>
                                <span>
                                    Draw
                                </span>
                            </button>
                        </div>
                        <div class="buttonBox">
                            <button class="btn btn-warning buttonBoxBtns">
                                <i class="far fa-layer-group"></i>
                                <span>
                                    Options
                                </span>
                            </button>
                            <div class="buttonBoxInner">
                                <h4>Map details</h4>
                                <div class="buttonBoxInnerRow">
                                    <div class="buttonBoxInnerBoxes">
                                        <button id="showSchool">
                                            <div class="buttonBoxInnerBoxesIconBox"
                                                style="background-image: url('{{ asset('public/assets/images/map-icons/schools.png') }}');
                                                     background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Schools</span>
                                        </button>
                                    </div>
                                    <div class="buttonBoxInnerBoxes">
                                        <button id="amenities">
                                            <div class="buttonBoxInnerBoxesIconBox"
                                                style="background-image: url('{{ asset('public/assets/images/map-icons/amenities.png') }}');
                                                     background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Amenities</span>
                                        </button>
                                    </div>
                                    <div class="buttonBoxInnerBoxes">
                                        <button id="transit">
                                            <div class="buttonBoxInnerBoxesIconBox"
                                                style="background-image: url('{{ asset('public/assets/images/map-icons/transit.png') }}');
                                                     background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Transit</span>
                                        </button>
                                    </div>
                                    <div class="buttonBoxInnerBoxes">
                                        <button id="bike">
                                            <div class="buttonBoxInnerBoxesIconBox"
                                                style="background-image: url('{{ asset('public/assets/images/map-icons/bike.png') }}');
                                                     background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Bike</span>
                                            <span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="buttonBoxInnerBoxes">
                                        <button>
                                            <div class="buttonBoxInnerBoxesIconBox"
                                                style="background-image: url('{{ asset('public/assets/images/map-icons/flood.png') }}');
                                                     background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Flood</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttonBox">
                            <button class="btn btn-warning buttonBoxBtns">
                                <i class="far fa-globe-americas"></i>
                                <span>
                                    Map
                                </span>
                            </button>
                            <div class="buttonBoxInner">
                                <h4>Map Types</h4>
                                <div class="buttonBoxInnerRow">
                                    <div class="buttonBoxInnerBoxes">
                                        <button class="active" id="changeMapTypeButton2">
                                            <div class="buttonBoxInnerBoxesIconBox"
                                                style="background-image: url('{{ asset('public/assets/images/map-icons/streetview.png') }}');
                                                     background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Street</span>
                                        </button>
                                    </div>
                                    <div class="buttonBoxInnerBoxes">
                                        <button id="changeMapTypeButton">
                                            <div class="buttonBoxInnerBoxesIconBox"
                                                style="background-image: url('{{ asset('public/assets/images/map-icons/satelliteview.png') }}');
                                                     background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Satellite</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="removeOutlineButton">
                        <button class="btn btn-warning buttonBoxBtns " id="RemoveOutlineMapBtn" style="display:none">
                            <span class="outline-btn-text">
                                Remove Outline
                            </span>
                        </button>
                    </div>
                    <div class="lazy" id="googleMap">
                    </div>
                </div>
            </div>


            <script>
                const onOpenSaveSearch = () => {
                    let elem = document.getElementById('dropdown_save_search_wrap')

                    if (elem.classList.contains('open')) {
                        elem.classList.remove('open')
                    } else {
                        elem.classList.add('open')
                    }
                }
            </script>

            <div class="map_rightCol">
                <div class="search-field-section style-two mb-3">
                    <div class="inner-container">
                        <div class="search-field">
                            <div class="inner-box">
                                <div class="d-flex w-100 justify-content-end mb-2">
                                    <button class="filter_btn" onclick="onOpenFilter('filter_container')">
                                        Filter <i class="fa fa-filter"></i>
                                    </button>
                                </div>
                                <div class="top-search" id="filter_container">
                                    <form class="px-3" action="#" method="post">
                                        @csrf
                                        <div class="mt-2"></div>
                                        <div class="col-12">
                                            <div class="row all_filter_custom_row">
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                    <div class="switch_btn_one">
                                                        <button
                                                            class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                                            type="button">
                                                            <span>PRICE</span>
                                                            <i class="fas fa-angle-down"> </i>
                                                        </button>
                                                        <div class="advanced-search advance_price_range"
                                                            style="top: 55px !important">
                                                            <div class="custome-range-slider">
                                                                <label for="range-slider">Select Price Range:</label>
                                                                <div class="range-wrap">
                                                                    <div class="range-wrapper">
                                                                        <span>Min</span>
                                                                        <input id="min-input" type="text"
                                                                            value="0">
                                                                    </div>
                                                                    <div class="range-seprator">-</div>
                                                                    <div class="range-wrapper">
                                                                        <span>Max</span>
                                                                        <input id="max-input" type="text"
                                                                            value="4,900,000">
                                                                    </div>
                                                                </div>
                                                                <div id="range-slider"></div>
                                                            </div>

                                                            <button class="btn btn-block done_btn mt-4" id="priceButton"
                                                                type="button">Done
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12 search-column mb-2">
                                                    <div class="switch_btn_one">
                                                        <button
                                                            class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                                            type="button">
                                                            <span>BEDS & BATHS</span>
                                                            <i class="fas fa-angle-down"> </i>
                                                        </button>

                                                        <div class="advanced-search advance_bedBaths_search"
                                                            style="top: 55px !important">

                                                            <div class="form-group">

                                                                <label>Number of Bedrooms</label>

                                                                <div class="btn-group search_btn_group" role="group">
                                                                    <input class="btn-check bed" id="no_of_bedroom"
                                                                        name="no_of_bedroom" type="radio"
                                                                        value="0" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bedroom">Any</label>

                                                                    <input class="btn-check bed" id="no_of_bedroom1"
                                                                        name="no_of_bedroom" type="radio"
                                                                        value="1" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bedroom1">1+</label>

                                                                    <input class="btn-check bed" id="no_of_bedroom2"
                                                                        name="no_of_bedroom" type="radio"
                                                                        value="2" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bedroom2">2+</label>

                                                                    <input class="btn-check bed" id="no_of_bedroom3"
                                                                        name="no_of_bedroom" type="radio"
                                                                        value="3" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bedroom3">3+</label>

                                                                    <input class="btn-check bed" id="no_of_bedroom4"
                                                                        name="no_of_bedroom" type="radio"
                                                                        value="4" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bedroom4">4+</label>

                                                                    <input class="btn-check bed" id="no_of_bedroom5"
                                                                        name="no_of_bedroom" type="radio"
                                                                        value="5" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bedroom5">5+</label>

                                                                </div>
                                                            </div>

                                                            <div class="form-group">

                                                                <label>Number of Bathrooms</label>

                                                                <div class="btn-group search_btn_group" role="group">
                                                                    <input class="btn-check bath" id="no_of_bathroom"
                                                                        name="no_of_bathroom" type="radio"
                                                                        value="0" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bathroom">Any</label>

                                                                    <input class="btn-check bath" id="no_of_bathroom1"
                                                                        name="no_of_bathroom" type="radio"
                                                                        value="1" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bathroom1">1+</label>

                                                                    <input class="btn-check bath" id="no_of_bathroom2"
                                                                        name="no_of_bathroom" type="radio"
                                                                        value="2" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bathroom2">2+</label>

                                                                    <input class="btn-check bath" id="no_of_bathroom3"
                                                                        name="no_of_bathroom" type="radio"
                                                                        value="3" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bathroom3">3+</label>

                                                                    <input class="btn-check bath" id="no_of_bathroom4"
                                                                        name="no_of_bathroom" type="radio"
                                                                        value="4" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bathroom4">4+</label>

                                                                    <input class="btn-check bath" id="no_of_bathroom5"
                                                                        name="no_of_bathroom" type="radio"
                                                                        value="5" autocomplete="off">
                                                                    <label class="theme-btn btn-two"
                                                                        for="no_of_bathroom5">5+</label>

                                                                </div>
                                                            </div>


                                                            <button class="btn btn-block done_btn mt-4" id="bathButton"
                                                                type="button">Done
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                    <div class="switch_btn_one">
                                                        <button
                                                            class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                                            type="button">
                                                            <span>HOME TYPE</span>
                                                            <i class="fas fa-angle-down"> </i>
                                                        </button>

                                                        <div class="advanced-search advance_hometype_search"
                                                            style="top: 55px !important">

                                                            <div class="form-group">

                                                                <label>Home Type</label>

                                                                <div class="search_btn_group" role="group">
                                                                    @php
                                                                        $propertyTypes = categoriesCount();
                                                                    @endphp
                                                                    @if (isset($propertyTypes) && count($propertyTypes) > 0)
                                                                        @foreach ($propertyTypes as $value)
                                                                            <input class="btn-check home-type"
                                                                                id="home_type{{ $value->id }}"
                                                                                name="home_type" type="checkbox"
                                                                                value="{{ $value->id }}"
                                                                                autocomplete="off">
                                                                            <label class="theme-btn btn-two"
                                                                                for="home_type{{ $value->id }}">{{ $value->StructureTypeName }}</label>
                                                                        @endforeach
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-block done_btn mt-4"
                                                                id="homeTypeButton" type="button">Done
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                    <div class="switch_btn_one publish_status_wrapper">
                                                        <button
                                                            class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100"
                                                            type="button">
                                                            <span id="sort_elem">Active </span>
                                                            <i class="fas fa-angle-down"> </i>
                                                        </button>

                                                        <div class="advanced-search advance_hometype_search"
                                                            style="top: 55px !important">

                                                            <div class="form-group">
                                                                <div class="search_btn_group" role="group">
                                                                    @forelse ($properties['pulicshStatus'] as $status)
                                                                        <input class="btn-check active publish_status"
                                                                            id="{{ $status['PublishStatus'] }}"
                                                                            name="active" type="radio"
                                                                            value="{{ $status['PublishStatus'] }}"
                                                                            onchange="onStatusChange(this)"
                                                                            autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="{{ $status['PublishStatus'] }}">{{ $status['PublishStatus'] }}</label>
                                                                    @empty
                                                                    @endforelse

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-1 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">

                                                    <button class="custom-open-btn theme-btn btn-one  w-100"
                                                        type="button" style="height: 100%; padding: 0px;">

                                                        More
                                                    </button>
                                                </div>
                                                <div class="col-xl-1 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                    <a class="theme-btn btn-one clear_search w-100"
                                                        href="{{ route('home.our-community') }}"
                                                        style="height: 100%;">Clear</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>

                <div class="row item-shorting mt-3">
                    <div class="col property-filter-select">
                        <p class="pgssts">Showing
                            {{ $properties['propertiesCount'] <= 40 ? $properties['propertiesCount'] : 40 }} of
                            {{ $properties['propertiesCount'] }}</p>
                        <div class="styled_property_search_filter">
                            <label class="mb-0 mx-2" for="">Sort:</label>
                            <div class="short-box clearfix">
                                <div class="select-box">
                                    <select class="wide wide_box sort-prop">
                                        <option data-display="Recomended">Recomended</option>
                                        <option value="1">Price (High to Low)</option>
                                        <option value="2">Price (Low to High)</option>
                                        <option value="3">City</option>
                                        <option value="4">Listing Date</option>
                                        <option value="5">Listing Number</option>
                                        <option value="6">Open Home Date Asc</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>

                @include('properties.search-properties')



                <!-- main-footer -->

                <footer class="main-footer">

                    <div class="footer-top bg-color-2">
                        <div class="auto-container">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 footer-column">

                                    <div class="footer-widget about-widget">

                                        <div class="widget-title">

                                            <h3>About Us</h3>

                                        </div>

                                        <div class="text">
                                            <p>
                                                <!--   NMLS ID: 43583 <br>-->
                                                <!--<a href="www.nmlsconsumeraccess.org">www.nmlsconsumeraccess.org</a>-->
                                                Â© 2023 ARIS360 All rights reserved. Programs, rates, program terms and
                                                conditions subject to change without notice. Other restrictions and
                                                limitations apply. Additionally, ARIS360 is a real estate company in
                                                Washington state only. Though consumers may search for a lender on
                                                <a href="https://www.tristarfinance.com"
                                                    target="_blank">www.tristarfinance.com</a>
                                                <br>All products are subject to credit and property approval.

                                                <!--Â© 2023 Aris 360. All rights reserved. All products are subject to credit and property approval. Programs, rates, program terms and conditions subject to change without notice. Other restrictions and limitations apply. Additionally, Aris 360 is a lead generation platform only. There are no lending only options, though consumers may search for a lender on <a href="Straightforwardlending.com">Straightforwardlending.com</a> or <a href="Aris360.com">Aris360</a>.-->

                                            </p>

                                        </div>
                                    </div>
                                    <div class="post-inner d-flex align-items-start mt-4">
                                        <div class="post" style="padding:5px;">
                                            <div class="post-thumb">
                                                <img class="rounded float-right lazy" id="Myimg"
                                                    data-src="{{ asset('public/assets/images/equal-housing-opportunity-logo.png') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <p class="mt-4" style="font-size:13px">ARIS 360 IS COMMITTED TO AND ABIDES BY
                                            THE
                                            FAIR HOUSING ACT AND EQUAL OPPORTUNITY ACT.<br> READ ARIS 360'S <a
                                                href="{{ url('fair-housing-eop') }}"> FAIR HOUSING POLICY</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">

                                    <div class="footer-widget links-widget ml-70">

                                        <div class="widget-title">

                                            <h3>Services</h3>

                                        </div>

                                        <div class="widget-content">

                                            <ul class="links-list class">
                                                <li><a href="{{ route('buy-with-aris') }}">Buy With Aris360</a></li>
                                                <li><a href="{{ route('sell-with-aris') }}">Sell With Aris360</a></li>
                                                <li><a href="{{ route('home.our-community') }}">Our Community</a></li>
                                                {{-- <li><a href="{{ route('featured-properties') }}">Featured Property</a>
                                                </li> --}}
                                                <li><a href="{{ route('find-an-agent') }}">Find an Agent in
                                                        Washington</a>
                                                </li>
                                                <li><a href="{{ route('blogs') }}">Our Blog</a></li>
                                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 footer-column">

                                    <div class="footer-widget contact-widget">

                                        <div class="widget-title">

                                            <h3>Contacts</h3>

                                        </div>

                                        <div class="widget-content">

                                            <ul class="info-list clearfix">

                                                <li>
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <p class="mb-0">10510 Northrup Way, Suite 115 </p>
                                                    <p class="mb-0">Kirkland, WA 98033</p>
                                                </li>

                                                <li>
                                                    <i class="fas fa-solid fa-phone"></i>
                                                    <a href="tel:+8339661976">(833) 966-1976</a>
                                                </li>

                                                <li><i class="fas fa-envelope"></i><a
                                                        href="mailto:info@aris.com">info@aris360.com</a></li>

                                                <li><i class="fas fa-solid fa-building"></i>Corporate NMLS# 43583</li>
                                                <li>
                                                    <i class="fas fa-link"></i>
                                                    <p class="mb-0">
                                                        <a target="_blank"
                                                            href="https://www.nmlsconsumeraccess.org/">www.nmlsconsumeraccess.org</a>
                                                    </p>
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="row aris-ft-bttmSec aris-ft-bttmSec-row">
                                <div class="col-lg-4 aris-ft-bttmSec-logo">
                                    <!--<a href="#!">-->
                                    <img class="lazy" data-src="{{ asset('public/assets/images/aris-aws-logo.png') }}">
                                    <!--</a>-->
                                </div>
                                <div class="col-lg-4 aris-ft-bttmSec-logo">
                                    <!--<a href="#!">-->
                                    <img class="lazy" data-src="{{ asset('public/assets/images/aris-dma-logo.png') }}">
                                    <!--</a>-->
                                </div>
                               
                                <div class="col-lg-4 aris-ft-bttmSec-logo">
                                    <!--<a href="#!">-->
                                    <img class="lazy" class="mba-logo"
                                        data-src="{{ asset('public/assets/images/mba-logo.png') }}">
                                    <!--</a>-->
                                </div>
                                <div class="col-lg-4 aris-ft-bttmSec-logo">
                                    <!--<a href="#!">-->
                                    <img class="mba-logo lazy" data-src="{{ asset('public/assets/images/gdpr.png') }}">
                                    <!--</a>-->
                                </div>
                                <div class="col-lg-4 aris-ft-bttmSec-logo">
                                    <!--<a href="#!">-->
                                    <img class="mba-logo lazy" data-src="{{ asset('public/assets/images/pci.png') }}">
                                    <!--</a>-->
                                </div>
                            </div>

                            <div class="col-12 mt-4 mb-5 d-flex justify-content-center">

                                <a class="btn btn-lg btn-outline-light footer_button"
                                    href="https://www.facebook.com/Aris360llc/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>

                                <a class="btn btn-lg btn-outline-light footer_button"
                                    href="https://www.instagram.com/aris360llc/">
                                    <i class="fab fa-instagram"></i>
                                </a>

                                <a class="btn btn-lg btn-outline-light footer_button"
                                    href="https://www.linkedin.com/company/aris360llc/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>

                                <a class="btn btn-lg btn-outline-light footer_button"
                                    href="https://twitter.com/aris360llc">
                                    <i class="fab fa-twitter"></i>
                                </a>

                                <a class="btn btn-lg btn-outline-light footer_button"
                                    href="https://www.youtube.com/@Aris-360">
                                    <i class="fab fa-youtube"></i>
                                </a>

                            </div>

                        </div>

                    </div>


                    <div class="footer-bottom">

                        <div class="auto-container">

                            <div class="inner-box clearfix">

                                <figure class="footer-logo "><a href="{{ route('home') }}"><img
                                            src="{{ asset('public/assets/images/Aris-Logonew2.png') }}"
                                            alt=""></a>
                                </figure>

                                <!--<div class="copyright pull-left">-->

                                <!--    <p><a href="#">Aris 360</a> &copy; 2023 All Right Reserved</p>-->

                                <!--</div>-->

                                <ul class="footer-nav clearfix mt-5">

                                    <li><a href="{{ url('homes-privacy-notice') }}">Privacy Notice</a></li>

                                    <li><a href="{{ url('fair-housing-eop') }}">Fair Housing EOP</a></li>

                                    <li><a href="{{ url('terms-of-use') }}">Terms Of Use</a></li>

                                    <li>
                                        <a href="https://nmlsconsumeraccess.org/TuringTestPage.aspx?ReturnUrl=/EntityDetails.aspx/COMPANY/43583"
                                            target="_blank">NMLS Consumer Access</a>
                                    </li>

                                    <li><a href="{{ url('ada-accessiblity') }}">ADA Accessibility Statment</a></li>

                                    <li><a href="{{ url('licensing') }}">Licensing</a></li>

                                </ul>
                                <!--<img src="footer_icon_home.png">-->

                            </div>

                        </div>

                    </div>

                    <style>
                        #Myimg {
                            /*margin:0 auto;*/
                            background: transparent;
                            /*border: 1px solid #000;*/
                            padding: 9px;
                            height: 110px;
                            width: 150px;
                        }
                    </style>


                    <!--Start of Tawk.to Script-->
                    <script type="text/javascript">
                        var Tawk_API = Tawk_API || {};
                        var Tawk_LoadStart = new Date();

                        (function() {
                            var s1 = document.createElement("script"),
                                s0 = document.getElementsByTagName("script")[0];
                            s1.async = true;
                            s1.src = 'https://embed.tawk.to/64ff40c50f2b18434fd7e92b/1ha2ha1n1';
                            s1.charset = 'UTF-8';
                            s1.setAttribute('crossorigin', '*');
                            s0.parentNode.insertBefore(s1, s0);
                        })();

                        // Customize the chat button after the Tawk.to script has loaded
                        Tawk_API.onLoad = function() {
                            // Change the button text for the "default" widget
                            Tawk_API.setWidget("default", "buttonText", "Chat with Us");

                            // Customize button styles for the "default" widget
                            Tawk_API.setWidget("default", "buttonBackground", "#007bff");
                            Tawk_API.setWidget("default", "buttonTextSize", 16);
                            Tawk_API.setWidget("default", "buttonTextColor", "#ffffff");
                        };
                    </script>
                    <!--End of Tawk.to Script-->

                </footer>



                <!--Scroll to top-->

                <button class="scroll-top scroll-to-target" data-target="html">

                    <span class="fal fa-angle-up"></span>

                </button>

            </div>
        </div>

        <div class="custom-wrapper">
            <div class="custom-overlay"></div>

            <div class="custom-drawer">
                <button class="custom-close-btn">
                    <i class="fas fa-times"></i>
                </button>


                <div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                            <div class="form-group">
                                <label>Distance from Location</label>
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Distance from Location">
                                            Distance from Location
                                        </option>

                                        <option value="2">
                                            Within 1 Miles
                                        </option>
                                        <option value="3">
                                            Within 2 Miles
                                        </option>
                                        <option value="4">
                                            Within 3 Miles
                                        </option>
                                        <option value="1">
                                            Within 4 Miles
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                            <div class="form-group">
                                <label>Bedrooms</label>
                                <div class="select-box">
                                    <select class="wide rooms">
                                        <option data-display="Max Rooms" value="5">
                                            Max Rooms
                                        </option>
                                        <option value="1">One Rooms
                                        </option>
                                        <option value="2">Two Rooms
                                        </option>
                                        <option value="3">Three Rooms
                                        </option>
                                        <option value="4">Four Rooms
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                            <div class="form-group">
                                <label>SORT BY</label>
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Most Popular">
                                            Most Popular
                                        </option>
                                        <option value="1">Top Rating
                                        </option>
                                        <option value="2">New Rooms
                                        </option>
                                        <option value="3">
                                            Classic Rooms
                                        </option>
                                        <option value="4">Luxry Rooms
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                            <div class="form-group">
                                <label>Floor</label>
                                <div class="select-box">
                                    <select class="wide floors">
                                        <option data-display="Select Floor">
                                            Select Floor
                                        </option>
                                        <option value="1">One Floor
                                        </option>
                                        <option value="2">Two Floor
                                        </option>
                                        <option value="3">Three Floor
                                        </option>
                                        <option value="4">Four Floor
                                        </option>
                                        <option value="5">Five Floor
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                            <div class="form-group">
                                <label>Bath</label>
                                <div class="select-box">
                                    <select class="wide baths">
                                        <option data-display="Max Bath" value="5">
                                            Max Bath
                                        </option>
                                        <option value="1">1 Bath</option>
                                        <option value="2">2 Baths</option>
                                        <option value="3">3 Baths</option>
                                        <option value="4">4 Baths</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 column">
                            <div class="form-group">
                                <label>Parking Spots</label>
                                <div class="select-box">
                                    <select class="wide parkings">
                                        <option data-display="No Spot">
                                            No Spot
                                        </option>
                                        <option value="1">1 Spot</option>
                                        <option value="2">2 Spots</option>
                                        <option value="3">3 Spots</option>
                                        <option value="4">4 Spots</option>
                                        <option value="5">5 Spots</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="range-box">
                        <div class="row clearfix">

                            <div class="col-lg-12 col-md-12 col-sm-12 column">
                                <div class="area-range">
                                    <h6>Select Area</h6>
                                    <div class="range-input">
                                        <div class="input">
                                            <input class="area-range area-prop" name="field-name" type="text"
                                                style="height:15px!important" readonly="" />
                                        </div>
                                    </div>
                                    <div class="area-range-slider"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <button class="map_toogle_btn" onclick="onOpenMap(this, 'map_wrapper')">
            Map <i class="fas fa-map ml-2"></i>
        </button>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            let listingPages
            $(document).ready(function() {
                // Scroll to the top of the page without smooth behavior
                window.scrollTo(0, 0);
            });


            const onOpenMap = (elem, id) => {
                let map = document.getElementById(id);

                if (map.classList.contains("open_map")) {

                    let icon = document.createElement('i')
                    icon.className = 'fas fa-map ml-2'
                    elem.innerHTML = 'Map'
                    elem.appendChild(icon)
                    // elem.style.top = '90px'
                    map.classList.remove("open_map")

                } else {
                    map.classList.add("open_map")
                    let icon = document.createElement('i')
                    icon.className = 'fas fa-list ml-2'
                    elem.innerHTML = 'List'
                    // elem.style.top = '10px'
                    elem.appendChild(icon)

                }

            }

            const onOpenFilter = (id) => {
                let elem = document.getElementById(id)

                if (elem.classList.contains("open_filters")) {
                    elem.classList.remove("open_filters")
                } else {

                    elem.classList.add("open_filters")
                }
            }

            $('.open-filter').click(function() {
                $('.custom-drawer').addClass('custom-open');
                $('.custom-overlay').addClass('custom-overlay-open');
            });
            $('.custom-close-btn').click(function() {
                $('.custom-drawer').removeClass('custom-open');
                $('.custom-overlay').removeClass('custom-overlay-open');
            });
            $('.custom-overlay').click(function() {
                $('.custom-drawer').removeClass('custom-open');
                $('.custom-overlay').removeClass('custom-overlay-open');

                $(".search__toggler").on("click", function(event) {
                    $(".wide_box").removeClass("open");

                });

            })


            $('.custom-open-btn').click(function() {
                $('.custom-drawer').addClass('custom-open');
                $('.custom-overlay').addClass('custom-overlay-open');
            });
            $('.custom-close-btn').click(function() {
                $('.custom-drawer').removeClass('custom-open');
                $('.custom-overlay').removeClass('custom-overlay-open');
            });
            $('.custom-overlay').click(function() {
                $('.custom-drawer').removeClass('custom-open');
                $('.custom-overlay').removeClass('custom-overlay-open');

                $(".search__toggler").on("click", function(event) {
                    $(".wide_box").removeClass("open");

                });


            })

            $(document).ready(function() {
                loadGoogleMapsScriptWithRetry('initMap');
            });

            function initMap() {
                myMap();
                initialize();
            }


            function loadGoogleMapsScriptWithRetry(callback, retries = 3, delay = 1000) {
                function loadScript() {
                    var script = document.createElement('script');
                    script.src =
                        'https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=' +
                        callback;
                    script.onerror = function() {
                        if (retries > 0) {
                            setTimeout(loadScript, delay);
                            retries--;
                        } else {
                            console.error('Failed to load Google Maps API.');
                        }
                    };
                    document.body.appendChild(script);
                }

                loadScript();
            }

            $(document).ready(function() {

                $(".search__toggler").on("click", function(event) {
                    $(".wide_box").removeClass("open");
                });

                $('.custom-close-btn').click(function() {
                    $('.custom-drawer').removeClass('custom-open');
                    $('.custom-overlay').removeClass('custom-overlay-open');
                });

                $('.custom-overlay').click(function() {
                    $('.custom-drawer').removeClass('custom-open');
                    $('.custom-overlay').removeClass('custom-overlay-open');

                })
            });

            $(document).ready(function() {
                $(document).on('click', '#search-placeholder-icon-s', function() {
                    $('#search-placeholder').hide();
                    $('#search-placeholder').empty();
                    $('#search_city_input').val('');
                    $('#current_location_box').show()
                    $('#places-container').empty()
                    $('#school-container').empty()
                    $('#search-input').attr('placeholder', 'Search by CITY or ZIP Code');
                    $('#RemoveOutlineMapBtn').trigger('click');

                });
            });

            $(function() {
                const minValue = 0;
                const maxValue = 100000000;

                // Range Slider
                $("#range-slider").slider({
                    range: true,
                    min: minValue,
                    max: maxValue,
                    values: [minValue, 4900000],
                    slide: function(event, ui) {
                        $("#min-input").val(ui.values[0].toLocaleString());
                        $("#max-input").val(ui.values[1].toLocaleString());
                    }
                });

                // Input value updates
                $("#min-input").on("input", function() {
                    const value = parseInt($(this).val().replace(/,/g, ''));
                    if (!isNaN(value)) {
                        const currentValue = $("#range-slider").slider("values");
                        const updatedValues = [value, currentValue[1]];
                        $("#range-slider").slider("values", updatedValues);
                    }
                });

                $("#max-input").on("input", function() {
                    const value = parseInt($(this).val().replace(/,/g, ''));
                    if (!isNaN(value)) {
                        const currentValue = $("#range-slider").slider("values");
                        const updatedValues = [currentValue[0], value];
                        $("#range-slider").slider("values", updatedValues);
                    }
                });
            });
        </script>


        <!-- jequery plugins -->
        <script>
            sturl = "{{ url('') }}";
            surl = "{{ url('/') }}";
            //alert(surl+'/getproperties')
        </script>
        <script src="{{ asset('public/assets/js/popper.min.js') }}"></script>

        <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('public/assets/js/owl.js') }}"></script>

        <script src="{{ asset('public/assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/wow.js') }}"></script>

        <script src="{{ asset('public/assets/js/validation.js') }}"></script>

        <script src="{{ asset('public/assets/js/jquery.fancybox.js') }}"></script>

        <script src="{{ asset('public/assets/js/appear.js') }}"></script>

        <script src="{{ asset('public/assets/js/scrollbar.js') }}"></script>

        <script src="{{ asset('public/assets/js/isotope.js') }}"></script>

        <script src="{{ asset('public/assets/js/jquery.nice-select.min.js') }}"></script>

        <script src="{{ asset('public/assets/js/jquery-ui.js') }}"></script>

        <script src="{{ asset('public/assets/js/nav-tool.js') }}"></script>
        <script>
            let customControlsBtn = $("#customControls .buttonBoxBtns");
            customControlsBtn.click(function(e) {
                if (e.target.closest(".buttonBoxBtns").id !== "drawOnMapBtn") {
                    if (e.target.closest(".buttonBox").querySelector(".buttonBoxInner").style.display != "block") {
                        e.target.closest(".buttonBox").querySelector(".buttonBoxInner").style.display = "block";
                    } else {
                        e.target.closest(".buttonBox").querySelector(".buttonBoxInner").style.display = "none";
                    }
                }
            });
            // let buttonBoxInnerBoxesBtn = $(".buttonBoxInnerBoxes button");
            // buttonBoxInnerBoxesBtn.click(function(e){
            //     if(e.target.closest("button").classList.contains("active")){
            //         e.target.closest("button").classList.remove("active");
            //     }
            //     else {
            //         e.target.closest("button").classList.add("active");
            //     }
            // });


            $(".buttonBox").click(function(e) {
                e.stopPropagation();
            });
            $(document).click(function() {
                $(".buttonBoxInner").hide();
            });

            // let drawOnMapBtn = $("#drawOnMapBtn");
            // drawOnMapBtn.click(function() {
            //     if ($(".drawOnMapActionBar").hasClass("active")) {
            //         $(".drawOnMapActionBar").removeClass("active");

            //     } else {
            //         $(".drawOnMapActionBar").addClass("active");
            //     }
            // });

            // $(".drawOnMapActionBarBtn").click(function() {
            //     if ($(".drawOnMapActionBar").hasClass("active")) {
            //         $(".drawOnMapActionBar").removeClass("active");
            //     }
            // });
        </script>
        <script type="text/javascript">
            var map;
            var markerCluster;

            function updateMarket(response, markers, markerCluster) {
                const newData = response.data;
                const newLocations = newData.map(({
                    PropertyLatitude,
                    PropertyLongitude,
                    PropetySellPrice
                }) => ({
                    lat: parseFloat(PropertyLatitude),
                    lng: parseFloat(PropertyLongitude),
                    price: parseFloat(PropetySellPrice)
                }));

                // Clear old markers from the map
                markers.forEach(marker => marker.setMap(null));
                markers = [];

                // Add new markers to the map
                newLocations.forEach(location => {
                    const label = Math.abs(location.price) >= 1000000 ?
                        Math.abs(location.price / 1000000).toLocaleString(undefined, {
                            minimumFractionDigits: 0
                        }) + "M" :
                        Math.abs(location.price) >= 1000 ?
                        Math.abs(location.price / 1000).toLocaleString(undefined, {
                            minimumFractionDigits: 0
                        }) + "k" :
                        Math.abs(location.price).toLocaleString();

                    const marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        label: {
                            text: label,
                            color: "#fff",
                            // fontWeight: "500",
                            fontSize: "10.5px"
                        },
                        icon: {
                            url: '{{ asset('public/assets/images/marker-wide-img.png') }}',
                            size: new google.maps.Size(60, 28),
                            scaledSize: new google.maps.Size(60, 28),
                        },
                    });

                    markers.push(marker);
                });

                // Update the markers in the markerCluster
                markerCluster.removeMarkers(markers);
                markerCluster.addMarkers(markers);
                markerCluster.repaint();
            }

            var jsonData = '<?php echo $properties['map']; ?>';
            var properties = JSON.parse(jsonData);
            var type = 'category';
            //ubaid Code here
            var global_data = {};
            global_data.publishStatus = 'Active'; //defaul value for the active propreties.
            var global_url = `{{ URL::to('search') }}`;
            $(document).ready(function() {


                var urlParams = new URLSearchParams(window.location.search);
                // Get value of single parameter
                var sectionName = urlParams.get('type');
                var home_zip = urlParams.get('zip');
                var home_address = urlParams.get('search');


                if (home_zip != "") {
                    global_data.zip = home_zip;

                }
                if (home_address != "") {
                    global_data.address = home_address;

                }


                if (sectionName == "Premier Properties") {
                    global_data.home_type = 1;

                }
                if (sectionName == "Single Family") {
                    global_data.home_type = 2;
                    //propertyAjaxCall(global_url);
                }
                if (sectionName == "Multi Family") {
                    global_data.home_type = 3;
                    //propertyAjaxCall(global_url);
                }
                if (sectionName == "Condominium") {
                    global_data.home_type = 4;
                    //propertyAjaxCall(global_url);
                }
                if (sectionName == "Townhouse") {
                    global_data.home_type = 5;
                    //propertyAjaxCall(global_url);
                }
                if (sectionName == "Land") {
                    global_data.home_type = 6;
                    //propertyAjaxCall(global_url);
                }
                if (sectionName == "Other") {
                    global_data.home_type = 7;
                    //propertyAjaxCall(global_url);
                }

                //---------------- Search Bar Filter Code Ajax ----------------


                $('#searchKeyword').on('keyup', function() {
                    var value = $(this).val();
                    global_data.description = value;

                    sendSearchRequest();
                });


                //setup before functions
                var typingTimer; //timer identifier
                var doneTypingInterval = 500; //time in ms, 1 second for example
                var $input = $('#search');

                //on keyup, start the countdown
                $input.on('keyup', function() {
                    clearTimeout(typingTimer);
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                });


                //on keydown, clear the countdown
                $input.on('keydown', function() {
                    clearTimeout(typingTimer);
                    typingTimer = setTimeout(doneTyping, doneTypingInterval);
                });

                //user is "finished typing," do something
                function doneTyping() {
                    //do something
                    var value = $('#search').val();
                    global_data.search = value;

                    sendSearchRequest();
                }

                //---------------- Bed & Bath Filter Code Ajax ----------------

                $("#bathButton").click(function() {

                    var numBed = $(".bed:checked").val();
                    var numBath = $(".bath:checked").val();

                    global_data.bed = numBed;
                    global_data.bath = numBath;

                    sendSearchRequest();

                });

                //---------------- Price Range Filter Code Ajax ----------------

                $("#priceButton").click(function() {
                    var minPrice = $('#min-input').val().split(",").join("");
                    var maxPrice = $('#max-input').val().split(",").join("");

                    global_data.min = +minPrice;
                    global_data.max = +maxPrice;
                    sendSearchRequest();


                });

                //---------------- Home Type Filter Code Ajax ----------------

                $("#homeTypeButton").click(function() {

                    var hometype = []; // New array
                    $(".home-type:checked").each(function() {
                        hometype.push(this.value);
                    });
                    global_data.home = hometype;
                    sendSearchRequest();
                });

                $('.publish_status').change(function() {

                    global_data.polygonCoordinates = [];
                    var boundaryCoordinates = getBoundaryCoordinates();
                    global_data.zoomCoordinates = boundaryCoordinates;
                    $('.publish_status_wrapper').removeClass('active');
                    var value = $(this).val();
                    $('#sort_elem').text(value);
                    global_data.publishStatus = value;
                    let currentURL = window.location.href;
                    let updatedURL = currentURL.split('?')[0];
                    window.history.replaceState(null, null, updatedURL);
                    clearMarkers();
                    $('#map-loader').show();
                    var clusterStyles = [{
                        textColor: '#ffffff',
                        textSize: 12,
                        url: value === 'Sold' ? '{{ asset('public/assets/images/resource/m2.png') }}' :
                            '{{ asset('public/assets/images/resource/m1.png') }}',
                        height: 50,
                        width: 50,
                        backgroundPosition: 'center',
                        backgroundColor: '#de1e25',
                        borderRadius: 50,
                        border: 'solid rgba(46,126,54,.35) 2px',
                        opacity: 0.9,
                    }];

                    markerCluster.clearMarkers();
                    markerCluster = new MarkerClusterer(map, markers, {
                        gridSize: 80,
                        maxZoom: 12,
                        styles: clusterStyles,
                    });
                    markerCluster.addMarkers(markers);
                    markerCluster.repaint();
                    sendSearchRequest();

                });
                $(document).ready(function() {
                    if (pathName[pathName.length - 1] === 'all-properties?rent=Rent') {
                        $('#Rent').prop('checked', true);
                        var optionInput = document.getElementById('sort_elem');
                        optionInput.innerHTML = 'Rent'
                    } else {
                        $('#Rent').prop('checked', false);
                    }
                });


                $('.rooms').change(function() {
                    var value = $(this).val();
                    global_data.bed = value;


                    sendSearchRequest();
                });

                $('.baths').change(function() {
                    var value = $(this).val();
                    global_data.bath = value;

                });

                $('.floors').change(function() {
                    var value = $(this).val();
                    global_data.floor = value;

                    sendSearchRequest();
                });

                $('.parkings').change(function() {
                    var value = $(this).val();
                    global_data.parking = value;
                    sendSearchRequest();

                });

                if ($('.area-range-slider').length) {

                    $(".area-range-slider").slider({

                        range: true,

                        min: 0,

                        max: 7500,

                        values: [100, 4000],

                        stop: function(event, ui) {
                            $("input.area-range").val(ui.values[0] + " - " + ui.values[1]);
                            global_data.min_area = ui.values[0];
                            global_data.max_area = ui.values[1];
                            sendSearchRequest();

                        }

                    });

                    $("input.area-range").val($(".area-range-slider").slider("values", 0) + " - sq ft" + $(
                        ".area-range-slider").slider("values", 1));

                }


                //------------------------- Sort Filters -----------------------------------

                $('.sort-prop').change(function() {
                    var sort = $(this).val();
                    var data = {
                        'sort': sort
                    };
                    global_data.sort = sort;
                    sendSearchRequest();

                });

                //------------------------ Dynamic Function for Ajax Call ------------------

                function propertyAjaxCall(_url) {

                    var spinnerHtml = `<div class="col-12 d-flex justify-content-center my-5">
                        <div class="spinner-border" role="status">
                        <span class="sr-only">Loading...</span>
                        </div>
                    </div>`;

                    $('#searchResultProperty').html(spinnerHtml);

                    $.ajax({
                        type: 'POST',
                        url: _url,
                        data: global_data,
                        success: function(response) {
                            var skzCategory = 'right';
                            testingSameer(response, skzCategory, propertyId);

                            if (response.mapData && response.mapData.length > 0) {
                                updateMarkers(response.mapData);
                            }
                        }
                    });
                }


                // click on pagination  *****************************************************************************************

                $(document).on('click', '.page-link', function() {
                    var _route = $(this).attr('data-href');
                    //alert(_route);
                    (_route) ? propertyAjaxCall(_route): null;

                });

                // click on pagination  *****************************************************************************************
            });
            var markers = [];
            var processingClusterClick = false;
            var map;
            var markerCluster;
            var defaultZoom = 10;
            var minZoom = 9;
            var isFirstLoad = true;
            var animationInProgress = false;
            var clusterClickDisabled = false;
            var polygonCoordinates = [];
            var poly = null;
            var cancel = true;
            var path;
            var drawnShapes = [];
            var drawable = false;
            let featureLayer;


            function myMap() {
                $('.lazy').Lazy();
                initializeMap(properties, type);
            }

            function initializeMap(properties, type) {
                map = new google.maps.Map(document.getElementById("googleMap"), {
                    zoom: defaultZoom,
                    minZoom: minZoom,
                    scrollwheel: true,
                    center: {
                        lat: 47.593002,
                        lng: -122.330401,
                        restrictions: null
                    },
                    mapId: "ebc94a9217e81a17",
                    mapTypeControl: false,
                });


                let savedSearchJson = '<?php echo $properties['savedSearch']; ?>';
                let _selected_zoom = JSON.parse(savedSearchJson)?.searchCriteria;
                console.log(_selected_zoom, "_selected_zoom");

                var currentZoom = map.getZoom();
                if (currentZoom < minZoom) {
                    map.setZoom(minZoom);
                }

                let transitLayer;
                let transitLayerVisible = false;

                document.getElementById('transit').addEventListener('click', function() {
                    let transit = document.getElementById('transit');

                    if (transitLayerVisible) {
                        transit.classList.remove('active');
                        transitLayer.setMap(null);
                        transitLayerVisible = false;
                    } else {
                        transit.classList.add('active');
                        transitLayer = new google.maps.TransitLayer();
                        transitLayer.setMap(map);
                        transitLayerVisible = true;
                    }
                });

                let amenitiesLayer;
                let amenitiesLayerVisible = false;

                document.getElementById('amenities').addEventListener('click', function() {
                    let amenities = document.getElementById('amenities');
                    var businessLayer = map.get('businessLayer');
                    if (businessLayer) {
                        amenities.classList.add('active');
                        businessLayer.setMap(null);
                        map.set('businessLayer', null);
                    } else {
                        amenities.classList.remove('active');
                        businessLayer = new google.maps.Data();
                        businessLayer.loadGeoJson('https://maps.googleapis.com/maps/api/js/GeoJSON.json');
                        businessLayer.setMap(map);
                        map.set('businessLayer', businessLayer);
                    }
                });

                let bikeLayer;
                let bikeLayerVisible = false;

                document.getElementById('bike').addEventListener('click', function() {
                    let bike = document.getElementById('bike');

                    if (bikeLayerVisible) {
                        bike.classList.remove('active');
                        bikeLayer.setMap(null);
                        bikeLayerVisible = false;
                    } else {
                        bike.classList.add('active');
                        bikeLayer = new google.maps.BicyclingLayer();
                        bikeLayer.setMap(map);
                        bikeLayerVisible = true;
                    }
                });

                // Bike End
                var locations = [];
                for (var i = 0; i < properties.length; i++) {
                    // console.log(properties[i].preffered_media[0]);
                    var image = '';

                    if (properties[i].s3buckettempurl !== undefined) {
                        image = properties[i].s3buckettempurl;
                    } else if (properties[i].preffered_media[0] && properties[i].preffered_media[0].s3buckettempurl !== '') {
                        image = properties[i].preffered_media[0].s3buckettempurl;
                    }

                    var hashValue = properties[i].PropertyAddress.match(/#([\w\d]+)/);
                    var parts = properties[i].PropertyAddress.split('#'); // Split the address at '#'
                    var beforeHash = parts[0].trim();
                    locations.push({
                        lat: parseFloat(properties[i].PropertyLatitude),
                        lng: parseFloat(properties[i].PropertyLongitude),
                        price: parseFloat(properties[i].PropetySellPrice),
                        city: properties[i].CityName,
                        address: beforeHash,
                        id: properties[i].id,
                        img: image,
                        hno: hashValue,
                        property_category: properties[i].PropertyName,
                        bed: properties[i].Bedrooms,
                        bath: properties[i].BathroomsFull,
                        sqft: properties[i].PropertyArea
                    });
                }
                document.getElementById('changeMapTypeButton').addEventListener('click', function() {
                    var currentMapType = map.getMapTypeId();
                    let changeMapTypeButton = document.getElementById('changeMapTypeButton');
                    let changeMapTypeButton2 = document.getElementById('changeMapTypeButton2');

                    if (currentMapType === 'roadmap') {
                        changeMapTypeButton2.classList.remove('active');
                        changeMapTypeButton.classList.add('active');
                        map.setMapTypeId('satellite');
                        map.setStreetNames(true);
                    }
                });

                document.getElementById('changeMapTypeButton2').addEventListener('click', function() {
                    var currentMapType = map.getMapTypeId();
                    let changeMapTypeButton = document.getElementById('changeMapTypeButton');
                    let changeMapTypeButton2 = document.getElementById('changeMapTypeButton2');

                    if (currentMapType === 'satellite') {
                        map.setMapTypeId('roadmap');
                        changeMapTypeButton2.classList.add('active');
                        changeMapTypeButton.classList.remove('active');
                    }
                });
                var marker;
                var bounds = new google.maps.LatLngBounds();
                var clickCount = 0;
                var threshold = 500;
                var activeMarker = null; // Variable to store the reference to the currently active marker
                // First Marker

                let is_search = window.location.href.includes('search_criteria')

                if (_selected_zoom?.zoomCoordinates && is_search) {
                    const southwestLat = parseFloat(_selected_zoom.zoomCoordinates.southwestLat);
                    const southwestLng = parseFloat(_selected_zoom.zoomCoordinates.southwestLng);
                    const northeastLat = parseFloat(_selected_zoom.zoomCoordinates.northeastLat);
                    const northeastLng = parseFloat(_selected_zoom.zoomCoordinates.northeastLng);

                    const newBounds = new google.maps.LatLngBounds(
                        new google.maps.LatLng(southwestLat, southwestLng),
                        new google.maps.LatLng(northeastLat, northeastLng)
                    );

                    console.log("Zoom Coordinates:", _selected_zoom.zoomCoordinates);
                    console.log("New Bounds:", newBounds);


                    map.fitBounds(newBounds);


                } else {
                    map.fitBounds(bounds);
                }


                markers = locations.map(function(location) {
                    var property_lng = location.lng;
                    var property_lat = location.lat;
                    var filter_property = locations.filter((location) => {
                        return property_lng === location.lng && property_lat === location.lat;
                    })
                    marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        label: {
                            text: filter_property.length > 1 ? `${filter_property.length} Units` : `$${Math.abs(location.price) >= 1000000
                        ? Math.abs((location.price / 1000000)).toFixed(2).toLocaleString(undefined, { minimumFractionDigits: 0 }) + "M"
                        : Math.abs(location.price) >= 1000
                            ? Math.abs((location.price / 1000)).toFixed(0).toLocaleString(undefined, { minimumFractionDigits: 0 }) + "K"
                            : Math.abs(location.price).toLocaleString()}`,
                            color: "#fff",
                            fontSize: "10.5px"
                        },
                        icon: {
                            url: '{{ asset('public/assets/images/marker-wide-img.png') }}',
                            size: new google.maps.Size(60, 28),
                            scaledSize: new google.maps.Size(60, 28),
                        },

                    });

                    google.maps.event.addListener(map, 'dragend', function() {
                        if (openedInfoWindow) {
                            openedInfoWindow.close(map);
                        }
                    });
                    google.maps.event.addListener(map, 'zoom_changed', function() {
                        if (openedInfoWindow) {
                            openedInfoWindow.close(map);
                        }
                    });
                    // var originalZIndex = marker.getZIndex(); // Store the original z-index
                    // var propertyListingBox = document.getElementById(`prp_${location.id}`);
                    // if (propertyListingBox) {
                    //     propertyListingBox.addEventListener("mouseover", function(marker) {
                    //         return function() {
                    //             // Increase marker size when hovering over listing box
                    //             marker.setIcon({
                    //                 url: '{{ asset('public/assets/images/marker-wide-img-white.png') }}',
                    //                 size: new google.maps.Size(80,
                    //                     38), // Increase the size as needed
                    //                 scaledSize: new google.maps.Size(80,
                    //                     38), // Increase the size as needed
                    //             });
                    //             marker.getLabel().color = '#de1e25';
                    //             marker.setZIndex(google.maps.Marker.MAX_ZINDEX); // Set a high z-index
                    //         };
                    //     }(marker));

                    //     propertyListingBox.addEventListener("mouseleave", function(marker) {
                    //         return function() {
                    //             // Reset marker size when mouse leaves listing box
                    //             marker.setIcon({
                    //                 url: '{{ asset('public/assets/images/marker-wide-img.png') }}',
                    //                 size: new google.maps.Size(60, 28),
                    //                 scaledSize: new google.maps.Size(60, 28),
                    //             });
                    //             marker.getLabel().color = '#fff';
                    //             marker.setZIndex(originalZIndex); // Restore the original z-index
                    //         };
                    //     }(marker));
                    // }
                    var currentInfoWindow = null;
                    var openedInfoWindow = null;
                    // <div class="col-md-12 text-start">
                    //                             <p class="info_para">${location.address}</p>
                    //                         </div>
                    function generateInfoWindowContent(markerPosition) {
                        return `<div class="container">
                                <div class="row border-bottom">
                                    <div class="col-md-12 text-start my-2">
                                        <p class="info_para">${filter_property.length} for sale</p>
                                        <div class="row">
                                           <div class="col-md-12 text-start">
                                               <p class="info_para">${location.address}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-start mt-3">
                                        <span class="" style="font-size: 16px;font-weight: 300; color:#585858!important;">For Sale (${filter_property.length} Units)</span>
                                    </div>
                                </div>
                                ${filter_property.map(function(data, i) {
                                        return `
                                                                                            <div onclick="
                                                                                                var locationId =${locations?.find((item) => item?.id === data?.id)?.id};
                                                                                                if(${locations?.find((item) => item?.id === data?.id)?.id}){
                                                                                                    $('.rmv-border').removeClass('active-property')
                                                                                                    $('.prp_${locations?.find((item) => item?.id === data?.id)?.id}').addClass('active-property');
                                                                                                    var access = document.getElementById('prp_${locations?.find((item) => item?.id === data?.id)?.id}');
                                                                                                    if(document.getElementById('prp_${locations?.find((item) => item?.id === data?.id)?.id}')) {
                                                                                                        access.scrollIntoView({
                                                                                                            behavior: 'smooth'
                                                                                                        });
                                                                                                    }else {

                                                                                                        console.log(listingPages)

                                                                                                        let elemsWithIndex = listingPages?.response?.pagination.map((item, index) => {
                                                                                                            if (item?.id === ${locations?.find((item) => item?.id === data?.id)?.id}) {
                                                                                                                return {
                                                                                                                    ...item,
                                                                                                                    itemIndex: index
                                                                                                                };
                                                                                                            }
                                                                                                            return null;
                                                                                                        }).filter(item => item !== null)

                                                                                                        const pageNumber = Math.floor(elemsWithIndex[0]?.itemIndex / 40) + 1;

                                                                                                        testingSameer(listingPages?.response, listingPages?.skzCategory, pageNumber);

                                                                                                        $('.rmv-border').removeClass('active-property')
                                                                                                        $('.prp_${location.id}').addClass('active-property');
                                                                                                        var access = document.getElementById('prp_${location.id}');
                                                                                                        access.scrollIntoView({
                                                                                                            behavior: 'smooth'
                                                                                                        });
                                                                                                    }
                                                                                                }"
                                                                                                ' id="filterBox_${data.id}" style="gap: 20px; cursor:pointer;" class="info_detail_box border-bottom d-flex align-items-center">
                                                                                                <div class="info_image_box">
                                                                                                    <img src=${data.img} class="filter_property_img">
                                                                                                </div>
                                                                                                <div class="info_price_box d-flex flex-column">
                                                                                                    <div style="color: #1080a2 !important;font-weight: 400;font-size: 16px;">
                                                                                                        <a target="__blank" style="color:#1080a2 !important;" href="property-detail/${data.id}">${data.property_category}</a>
                                                                                                    </div>
                                                                                                    <div style="font-size: 23px; color:#585858!important; font-weight: 400;">$${data.price.toLocaleString()}</div>
                                                                                                    <div style="font-size:13px; color:#585858!important; font-weight: 400;">${data.bed>1?data.bed + ' Beds - ': data.bed + ' Bed - '}${data.bath>1?data.bath + ' Baths - ': data.bath + ' Bath - '}${data.sqft>0?data.sqft + ' sq.ft. ':' 0 sq.ft.'}</div>
                                                                                                </div>
                                                                                            </div>`;
                                    }).join('')}
                            </div>`;
                    }
                    // <div style="font-size:11px; color:#585858!important;">${data.bed + ' Beds-' + data.bath + ' Baths-' + data.sqft + ' sq.ft.'}</div>
                    // <a target="__blank" style="color:#1080a2 !important;" href="property-detail/${data.id}">${data.hno}</a></div>

                    function CustomInfoWindow(content) {
                        this.content = content;
                        this.div = document.createElement("div");
                        this.div.className = "custom-info-window";
                        this.div.innerHTML = this.content;
                        this.isOpen = false;
                    }

                    CustomInfoWindow.prototype = new google.maps.OverlayView();

                    CustomInfoWindow.prototype.onAdd = function() {
                        var div = document.createElement("div");
                        div.className = "custom-info-window";
                        div.innerHTML = this.content;
                        this.div = div;

                        var panes = this.getPanes();
                        panes.floatPane.appendChild(div);
                    };

                    CustomInfoWindow.prototype.draw = function() {
                        if (!this.div) return;

                        var overlayProjection = this.getProjection();
                        var position = overlayProjection.fromLatLngToDivPixel(this.position);

                        var div = this.div;
                        div.style.left = position.x + "px";
                        div.style.top = position.y + "px";
                    };

                    CustomInfoWindow.prototype.onRemove = function() {
                        this.div.parentNode.removeChild(this.div);
                        this.div = null;
                    };

                    CustomInfoWindow.prototype.open = function(map, marker) {
                        if (!this.isOpen) {
                            // Close previously opened info window
                            if (openedInfoWindow) {
                                openedInfoWindow.close(map);
                            }

                            this.div.style.visibility = "visible";
                            map.controls[google.maps.ControlPosition.TOP_CENTER].push(this.div);
                            this.isOpen = true;

                            openedInfoWindow = this; // Store the reference to the currently opened window
                        }
                    };

                    CustomInfoWindow.prototype.close = function(map) {
                        if (this.isOpen) {
                            this.div.style.visibility = "hidden";
                            map.controls[google.maps.ControlPosition.TOP_CENTER].removeAt(0);
                            this.isOpen = false;

                            openedInfoWindow = null; // Clear the reference to the opened window
                        }
                    };

                    map.addListener("click", function() {
                        if (openedInfoWindow) {
                            openedInfoWindow.close(map);
                        }
                    });
                    marker.addListener("click", function(e) {

                        if (filter_property.length > 1) {

                            if (openedInfoWindow) {
                                openedInfoWindow.close(map);
                            }
                            // Generate content for the info window based on marker data
                            var content = generateInfoWindowContent(marker);
                            customInfoWindow = new CustomInfoWindow(content);
                            customInfoWindow.open(map, this);
                        } else {
                            var clickedId = location.id;
                            $('.rmv-border').removeClass('active-property')
                            $(`.prp_${ location.id }`).addClass('active-property');
                            var access = document.getElementById(`prp_${ location.id }`);


                            if (access) {

                                access.scrollIntoView({
                                    behavior: 'smooth'
                                });
                            } else {
                                let elemsWithIndex = listingPages?.response?.pagination.map((item, index) => {
                                    if (item?.id === location?.id) {
                                        return {
                                            ...item,
                                            itemIndex: index
                                        };
                                    }
                                    return null;
                                }).filter(item => item !== null);

                                const pageNumber = Math.floor(elemsWithIndex[0]?.itemIndex / 40) + 1;

                                testingSameer(listingPages?.response, listingPages?.skzCategory, pageNumber);


                                //                                 if (listingPages?.response.pagination?.length > 0 && typeof listingPages?.response.pagination?.length ===
                                //                                     'number') {
                                //                                     if (listingPages?.response.pagination?.length <= 40) {
                                //                                          paginationText = 'Showing ' + listingPages?.response.pagination?.length + ' of ' +  listingPages?.response.pagination?.length                                       var paginationText = 'Showing ' + listingPages?.response.pagination?.length + ' of ' +
                                // ;
                                //                                     } else {
                                //                                          paginationText = 'Showing ' + 40 + ' of ' + listingPages?.response.pagination?.length;
                                //                                     }

                                //                                     $('.pgssts').text(paginationText);
                                //                                 }


                                $('.rmv-border').removeClass('active-property')
                                $(`.prp_${ location.id }`).addClass('active-property');
                                var access = document.getElementById(`prp_${ location.id }`);
                                access.scrollIntoView({
                                    behavior: 'smooth'
                                });

                            }
                        }

                        // Reset the icon of the previously active marker (if any)
                        if (activeMarker !== null && activeMarker !== this) {
                            const defaultIcon = '{{ asset('public/assets/images/marker-wide-img.png') }}';
                            activeMarker.setIcon({
                                url: defaultIcon,
                                size: new google.maps.Size(60, 28),
                                scaledSize: new google.maps.Size(60, 28)
                            });
                            activeMarker.getLabel().color = '#fff';
                        }
                        // Update the currently active marker
                        activeMarker = this;
                        var newIcon = '{{ asset('public/assets/images/marker-wide-img-white.png') }}';
                        var Icon = '{{ asset('public/assets/images/marker-wide-img.png') }}';
                        if (clickedId === location.id) {
                            if (this.getIcon().url ===
                                '{{ asset('public/assets/images/marker-wide-img.png') }}') {
                                var prevMarker = [];
                                prevMarker.push(clickedId)
                                this.setIcon({
                                    url: newIcon,
                                    size: new google.maps.Size(60, 28),
                                    scaledSize: new google.maps.Size(60, 28)
                                });
                                this.getLabel().color = '#de1e25';
                            } else {
                                var href = $(`#href_${ location.id }`).attr('href');
                                window.open(href, '_blank');
                                clickCount = 0;
                            }
                        } else {
                            this.setIcon({
                                url: Icon,
                                size: new google.maps.Size(60, 28),
                                scaledSize: new google.maps.Size(60, 28)
                            });
                            this.getLabel().color = '#fff';
                        }
                    });

                    bounds.extend(marker.getPosition());
                    return marker;
                });

                document.getElementById('showSchool').addEventListener('click', function() {
                    let showSchool = document.getElementById('showSchool');
                    showSchool.classList.add('active');
                    const request = {
                        location: map.getCenter(),
                        radius: 1000,
                        type: ['school']
                    };

                    const service = new google.maps.places.PlacesService(map);
                    service.nearbySearch(request, function(results, status) {
                        if (status === google.maps.places.PlacesServiceStatus.OK) {
                            clearMarkers();

                            for (let i = 0; i < results.length; i++) {
                                createMarker(results[i]);
                            }
                        }
                    });
                });

                function createMarker(place) {
                    const marker = new google.maps.Marker({
                        map: map,
                        position: place.geometry.location,
                        title: place.name,
                        icon: {
                            url: '{{ asset('public/assets/images/school.png') }}',
                            size: new google.maps.Size(25, 25),
                            scaledSize: new google.maps.Size(25, 25),
                        },
                    });

                    markers.push(marker);
                }

                const clusterStyles = [{
                    textColor: '#ffffff',
                    textSize: 12,
                    url: '{{ asset('public/assets/images/resource/m1.png') }}',
                    height: 50,
                    width: 50,
                    backgroundPosition: 'center',
                    backgroundColor: '#de1e25',
                    borderRadius: 100,
                    border: 'solid rgba(46,126,54,.35) 2px',
                    opacity: 0.9,
                }];

                markerCluster = new MarkerClusterer(map, markers, {
                    gridSize: 80,
                    maxZoom: 12,
                    styles: clusterStyles,
                });

                function getPlaceId(urlParams) {
                    const zip = urlParams.get('zip');
                    global_data.zip = zip;
                    const geocoder = new google.maps.Geocoder();
                    var address = zip.length > 0 ? zip : urlParams.get('search');

                    if (zip.length > 0 || address != "") {
                        $('#RemoveOutlineMapBtn').show();
                    } else {
                        $('#RemoveOutlineMapBtn').hide();
                    }
                    // const searchInput = document.getElementById("search");
                    // searchInput.value = address;

                    const geocodeRequest = {
                        address: address,
                        componentRestrictions: {
                            country: 'US',

                        }
                    };

                    var HoverPropertyLatitude;
                    var HoverPropertyLongitude;
                    $(".propertyBox").hover(function() {
                        HoverPropertyLatitude = $(this).data("lat");
                        HoverPropertyLongitude = $(this).data("lng");
                        PropertySellPrice = $(this).data("price");
                        addMarker(HoverPropertyLatitude, HoverPropertyLongitude, PropertySellPrice);
                        const defaultIcon = '{{ asset('public/assets/images/marker-wide-img.png') }}';
                        activeMarker.setIcon({
                            url: defaultIcon,
                            size: new google.maps.Size(60, 28),
                            scaledSize: new google.maps.Size(60, 28)
                        });
                        activeMarker.getLabel().color = '#fff'

                    }, function() {
                        console.log('2nd')
                        removeMarker();
                        const whiteIcon = '{{ asset('public/assets/images/marker-wide-img-white.png') }}';
                        activeMarker.setIcon({
                            url: whiteIcon,
                            size: new google.maps.Size(60, 28),
                            scaledSize: new google.maps.Size(60, 28),
                        });
                        activeMarker.getLabel().color = '#de1e25'
                    });

                    function addMarker(lat, lng, price) {
                        const label = Math.abs(price) >= 1000000 ?
                            '$' + Math.abs(price / 1000000).toLocaleString(undefined, {
                                minimumFractionDigits: 0
                            }) + "M" :
                            Math.abs(price) >= 1000 ?
                            '$' + Math.abs(price / 1000).toLocaleString(undefined, {
                                minimumFractionDigits: 0
                            }) + "k" :
                            '$' + Math.abs(price).toLocaleString();

                        const locationCoordinates = {
                            lat: lat,
                            lng: lng
                        };
                        const newMarker = new google.maps.Marker({
                            map: map,
                            position: locationCoordinates,
                            label: {
                                text: label,
                                color: "#de1e25",
                                // fontWeight: "500",
                                fontSize: "12.5px"
                            },
                            icon: {
                                url: '{{ asset('public/assets/images/marker-wide-img-white.png') }}',
                                size: new google.maps.Size(70, 45),
                                scaledSize: new google.maps.Size(70, 45),
                            },
                        });
                        console.log(newMarker, 'newMarker')
                        markers.push(newMarker);
                    }

                    function removeMarker() {
                        if (markers.length > 0) {
                            const lastMarker = markers.pop(); // Get the last marker from the array
                            lastMarker.setMap(null); // Remove the marker from the map
                        }
                    }

                    geocoder.geocode(geocodeRequest, (results, status) => {
                        if (status === google.maps.GeocoderStatus.OK) {
                            const placeId = results[0].place_id;
                            featureLayer = zip.length > 0 ? map.getFeatureLayer("POSTAL_CODE") : map.getFeatureLayer(
                                "LOCALITY");
                            const featureStyleOptions = {
                                strokeColor: "#DE1E25",
                                strokeOpacity: 1.0,
                                strokeWeight: 3.0,
                                fillColor: "transparent",
                                fillOpacity: 0.5,
                            };


                            // Apply the style to a single boundary.
                            //@ts-ignore
                            featureLayer.style = (options) => {
                                if (options.feature.placeId === placeId) {
                                    // Hana, HI
                                    return featureStyleOptions;
                                }
                            };
                        }
                    });
                }

                var queryString = window.location.search;
                var urlParams = new URLSearchParams(queryString);
                if (urlParams.get('search')) {
                    getPlaceId(urlParams);
                }


                google.maps.event.addListener(markerCluster, 'clusterclick', function(cluster) {

                    if (clusterClickDisabled || animationInProgress || processingClusterClick) {
                        enable();
                        $('#map-loader').hide();
                        return;
                    }

                    processingClusterClick = true;
                    clusterClickDisabled = true;

                    var clusterCenter = cluster.getCenter();

                    map.panTo(clusterCenter);

                    google.maps.event.addListenerOnce(map, 'idle', function() {
                        map.setZoom(map.getZoom() + 1);

                        // var boundaryCoordinates = getBoundaryCoordinates();
                        // global_data.zoomCoordinates = boundaryCoordinates;

                        var markersInViewport = getMarkersInViewport();
                        var coordinatesInViewport = markersInViewport.map(function(marker) {
                            return marker.getPosition().toJSON();
                        });

                        sendSearchRequest();

                        $('.lazy').Lazy();
                    });
                });

                function animatePreviousMarkers(cluster, clusterCenter, callback) {
                    var previousMarkers = cluster.getMarkers();
                    var animationDuration = 1000;
                    var animationStart = null;
                    animationInProgress = true;

                    function animateStep(timestamp) {
                        if (!animationStart) animationStart = timestamp;
                        var progress = (timestamp - animationStart) / animationDuration;

                        if (previousMarkers && previousMarkers.length > 0) {
                            previousMarkers.forEach(function(marker) {
                                var previousPosition = marker.getPosition();
                                var newPosition = google.maps.geometry.spherical.interpolate(previousPosition,
                                    clusterCenter, progress);
                                marker.setPosition(newPosition, google.maps.Animation.NONE);
                            });
                        }

                        if (progress >= 1) {
                            animationInProgress = false;
                            callback();
                        } else {
                            requestAnimationFrame(animateStep);
                        }
                    }

                    requestAnimationFrame(animateStep);
                }

                var sendLocationUpdate = function(bounds, markers) {
                    // disable();
                    // $('#map-loader').show();
                    // var boundaryCoordinates = getBoundaryCoordinates();
                    // global_data.zoomCoordinates = boundaryCoordinates;

                    sendSearchRequest();
                };

                google.maps.event.addListener(map, 'idle', function() {
                    var center = map.getCenter();
                    var zoom = map.getZoom();
                    var newBounds = map.getBounds();
                    if (zoom >= 8) {
                        if (!isFirstLoad && !processingClusterClick) {
                            sendLocationUpdate(newBounds, markers);
                        }
                    }
                    isFirstLoad = false;
                });


                return {
                    markers,
                    markerCluster
                };
            }



            function drawFreeHand(callback) {
                if (drawable == true) {
                    return;
                }
                drawable = true;

                var strokeColor = '#DE1E25';
                var coordinates = []; // Array to store polygon coordinates

                // The polygon
                poly = new google.maps.Polyline({
                    map: map,
                    clickable: false
                });

                // Move listener
                var move = google.maps.event.addListener(map, 'mousemove', function(e) {
                    poly.setOptions({
                        strokeColor: strokeColor,
                        strokeWeight: 2
                    });
                    poly.getPath().push(e.latLng);
                    $(".drawOnMapActionBar").removeClass("active");
                });

                // Mouseup listener
                var mouseUpListener = google.maps.event.addListenerOnce(map, 'mouseup', function(e) {
                    google.maps.event.removeListener(move);
                    path = poly.getPath();
                    poly.setMap(null);

                    // Get polygon coordinates
                    path.forEach(function(coordinate) {
                        coordinates.push({
                            lat: coordinate.lat(),
                            lng: coordinate.lng()
                        });
                    });

                    // Check if the polygon is closed
                    var firstCoordinate = path.getAt(0);
                    var lastCoordinate = path.getAt(path.getLength() - 1);
                    var isClosed = (firstCoordinate.lat() === lastCoordinate.lat() && firstCoordinate.lng() ===
                        lastCoordinate.lng());

                    if (!isClosed) {
                        path.push(firstCoordinate); // Close the polygon
                        coordinates.push({
                            lat: firstCoordinate.lat(),
                            lng: firstCoordinate.lng()
                        });
                    }

                    poly = new google.maps.Polygon({
                        map: map,
                        path: path,
                        strokeColor: strokeColor,
                        strokeWeight: 2,
                        fillColor: "transparent"
                    });

                    drawnShapes.push(poly);

                    callback(coordinates); // Pass the polygon coordinates to the callback function
                });

                return mouseUpListener; // Return the mouseup event listener
            }

            document.getElementById('Cancel').addEventListener('click', function() {
                $("#drawOnMapBtn").show();
                $(".drawOnMapActionBar").removeClass("active");
                // $('#map-loader').show();
                cancel = true;
                // disable();
                clearDrawing();
                drawable = false;
                global_data.polygonCoordinates = [];
                // var boundaryCoordinates = getBoundaryCoordinates();
                // global_data.zoomCoordinates = boundaryCoordinates;
                // setTimeout(() => {
                // sendSearchRequest();
                // }, 1000);
            });

            function clearDrawing() {
                drawnShapes.forEach(function(shape) {
                    shape.setMap(null);
                });
                global_data.polygonCoordinates = [];
                // Clear the array
                drawnShapes = [];
            }

            function disable() {
                map.setOptions({
                    draggable: false,
                    zoomControl: false,
                    scrollwheel: false,
                    disableDoubleClickZoom: false
                });
            }

            function enable() {
                map.setOptions({
                    draggable: true,
                    zoomControl: true,
                    scrollwheel: true,
                    disableDoubleClickZoom: true
                });
            }

            $("#drawOnMapBtn").click(function(e) {
                $(this).hide();
                $(".drawOnMapActionBar").addClass("active");

                if (global_data.address != null || global_data.zip != null) {
                    global_data.address = null;
                    global_data.zip = null;
                    $('#RemoveOutlineMapBtn').hide();
                    let currentURL = window.location.href;
                    let updatedURL = currentURL.split('?')[0];
                    window.history.replaceState(null, null, updatedURL);
                    featureLayer.style = null;
                }
                disable();
                cancel = !cancel;
                var mouseUpListener = null;

                function handleMouseUp(coordinates) {
                    if (cancel) {
                        $('#map-loader').show();
                        disable();
                        clearDrawing();
                        drawable = false;
                        global_data.polygonCoordinates = [];
                        sendSearchRequest();

                    } else {
                        // setTimeout(() => {
                        if (Array.isArray(global_data.polygonCoordinates) && global_data.polygonCoordinates.length >
                            0) {
                            $('#map-loader').show();
                            $('#RemoveOutlineMapBtn').show();
                            sendSearchRequest();
                        }
                        // }, 1000);
                    }
                }

                function handleMouseDown(e) {

                    if (!cancel) {
                        polygonCoordinates = drawFreeHand(function(coordinates) {
                            global_data.polygonCoordinates = coordinates;
                            handleMouseUp(coordinates);
                        });
                        map.getDiv().removeEventListener('mousedown', handleMouseDown);
                        map.getDiv().addEventListener('mouseup', handleMouseUp);
                    }
                }

                map.getDiv().addEventListener('mousedown', handleMouseDown);
            });

            document.getElementById('RemoveOutlineMapBtn').addEventListener('click', () => {
                $('#search-placeholder').hide();
                var search = document.getElementById("search_city_input")
                search.placeholder = 'Search by CITY or ZIP Code';
                document.getElementById('search_city_input').value = ''
                $('#map-loader').show();
                disable();
                $('#RemoveOutlineMapBtn').hide();
                global_data.polygonCoordinates = [];
                if (global_data.address != null || global_data.zip != null) {
                    global_data.address = null;
                    global_data.zip = null;
                    $('#RemoveOutlineMapBtn').hide();
                    let currentURL = window.location.href;
                    let updatedURL = currentURL.split('?')[0];
                    window.history.replaceState(null, null, updatedURL);
                    featureLayer.style = null;
                } else {
                    $('#RemoveOutlineMapBtn').hide();
                    $("#drawOnMapBtn").show();
                    cancel = true;
                    clearDrawing();
                    drawable = false;
                }
                sendSearchRequest();

            });


            // draw End

            function getMarkersInViewport() {
                var bounds = map.getBounds();
                var markersInViewport = [];

                for (var i = 0; i < markers.length; i++) {
                    if (bounds.contains(markers[i].getPosition())) {
                        markersInViewport.push(markers[i]);
                    }
                }

                return markersInViewport;
            }

            function debounce(func, wait) {
                var timeout;

                return function executedFunction() {
                    var context = this;
                    var args = arguments;

                    var later = function() {
                        timeout = null;
                        func.apply(context, args);
                    };

                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            }

            function getBoundaryCoordinates() {
                var boundaryCoordinates = {};
                var bounds = map.getBounds();
                boundaryCoordinates['southwestLat'] = bounds.getSouthWest().lat();
                boundaryCoordinates['southwestLng'] = bounds.getSouthWest().lng();
                boundaryCoordinates['northeastLat'] = bounds.getNorthEast().lat();
                boundaryCoordinates['northeastLng'] = bounds.getNorthEast().lng();
                return boundaryCoordinates;
            }

            function sendSearchRequest(fromSearch) {
                $('#map-loader').show();
                disable();

                $('#searchResultProperty').html('');
                var spinnerHtml = '';
                for (var i = 0; i < 40; i++) {
                    spinnerHtml += `<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 custom_mediumCol"  style="margin-bottom:40px; padding-left: 5px; padding-right: 5px;">
                                        <div class="card">
                                            <div style="height:250px;width:600px;" class="card-img skeleton"></div>
                                            <div class="card-body">
                                                <h2 class="card-title skeleton"></h2>
                                                <p class="card-intro skeleton"></p>
                                            </div>
                                        </div>
                                    </div>`;
                }

                $('#searchResultProperty').html(spinnerHtml);

                if (!fromSearch) {
                    var boundaryCoordinates = getBoundaryCoordinates();
                    global_data.zoomCoordinates = boundaryCoordinates;
                }
                $.ajax({
                    url: surl + '/search',
                    type: 'POST',
                    data: JSON.stringify(global_data),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function(response) {
                        if (fromSearch) {
                            $('#map-loader').hide();
                            enable();
                            initializeMap(response.pagination, type);
                            fromSearch = false;
                        } else {
                            clearMarkers();
                            var skzCategory = 'left';
                            $('#searchResultProperty').html('');
                            testingSameer(response, skzCategory, 1);
                            updateMarkers(response.mapData);
                            processingClusterClick = false;
                            enable();
                            $('#map-loader').hide();
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        processingClusterClick = false;
                        enable();
                        $('#searchResultProperty').html('');
                        $('#map-loader').hide();
                    }
                });


            }


            let savedSearchJson = '<?php echo $properties['savedSearch']; ?>';

            let _savedSearch = JSON.parse(savedSearchJson)?.searchCriteria


            document.addEventListener("DOMContentLoaded", function() {
                let isSearchData = Object.keys(_savedSearch).length > 0

                if (isSearchData) {

                    global_data = {}

                    let payload = {
                        ...(_savedSearch?.min ? {
                            min: _savedSearch?.min
                        } : {}),
                        ...(_savedSearch?.max ? {
                            max: _savedSearch?.max
                        } : {}),
                        ...(_savedSearch?.zoomCoordinates ? {
                            zoomCoordinates: _savedSearch?.zoomCoordinates
                        } : {}),
                        ...(_savedSearch?.bed ? {
                            bed: _savedSearch?.bed
                        } : {}),
                        ...(_savedSearch?.bath ? {
                            bath: _savedSearch?.bath
                        } : {}),
                        ...(_savedSearch?.publishStatus ? {
                            publishStatus: _savedSearch?.publishStatus
                        } : {}),
                        ...(_savedSearch?.home ? {
                            home: _savedSearch?.home
                        } : {}),
                        ...(_savedSearch?.sort ? {
                            sort: _savedSearch?.sort
                        } : {}),
                        ...(_savedSearch?.parking ? {
                            parking: _savedSearch?.parking
                        } : {}),
                        ...(_savedSearch?.floor ? {
                            floor: _savedSearch?.floor
                        } : {}),
                        ...(_savedSearch?.sqft ? {
                            sqft: _savedSearch?.sqft
                        } : {})
                    }


                    global_data = payload;

                    sendSearchRequest()

                    // FOR ACTIVE

                    if (_savedSearch?.publishStatus) {
                        $('#sort_elem').text(_savedSearch?.publishStatus)
                        $(`#${_savedSearch?.publishStatus}`).prop('checked', true);
                    }

                    //FOR HOME TYPE
                    if (_savedSearch?.home) {
                        let _homeTypesElem = document.getElementsByClassName('home-type');
                        let selectedHomeType = []
                        for (let item of _homeTypesElem) {
                            if (_savedSearch?.home.includes(item.value)) {
                                item.checked = true
                            }
                        }
                    }

                    //  FOR BED BATH

                    if (_savedSearch?.bed) {
                        $(`#no_of_bedroom${_savedSearch?.bed}`).prop('checked', true);
                    }
                    if (_savedSearch?.bath) {
                        $(`#no_of_bathroom${_savedSearch?.bath}`).prop('checked', true);
                    }

                    // FOR PRICE

                    if (_savedSearch?.max) {
                        $(`#max-input`).val(_savedSearch?.max);
                    }
                    if (_savedSearch?.min) {
                        $(`#min-input`).val(_savedSearch?.min);
                    }

                    // FOR SEAVED SEARCH DROPDOWN

                    console.log('%cour-community.blade.php line:2893 object', 'color: #red;', _savedSearch);

                    $('#save_search').val('')



                }

            });
        </script>


        <script type="text/javascript">
            (function(d, src, c) {
                var t = d.scripts[d.scripts.length - 1],
                    s = d.createElement('script');
                s.id = 'la_x2s6df8d';
                s.defer = true;
                s.src = src;
                s.onload = s.onreadystatechange = function() {
                    var rs = this.readyState;
                    if (rs && (rs != 'complete') && (rs != 'loaded')) {
                        return;
                    }
                    c(this);
                };
                t.parentElement.insertBefore(s, t.nextSibling);
            })(document, 'https://aris360.ladesk.com/scripts/track.js', function(e) {
                LiveAgent.createButton('k1ik4oq8', e);
            });
        </script>

        <!-- For Validation -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
        <script src="{{ asset('public/form/dist/js/FormValidation.full.min.js') }}"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
        <script src="{{ asset('public/assets/js/form-script.js') }}"></script>

        <script src="{{ asset('public/assets/js/script.js') }}"></script>
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-marker-clusterer/1.0.0/markerclusterer.js"
            integrity="sha512-qk0kjj1Y3oBy4ohnPJwo/C3CYbYxBnlu0vWxvpMQkmt25s0eEsjmRSxsiyhVfxbJA26/u0LAdbNbtxq6vFF/8A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


        <!-- Login Modal -->
        <div class="modal signIn_Modal fade" id="signInModal" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="login-page">
                            <a class="Modal_logo" href="{{ route('home') }}">
                                <img class="lazy" data-src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}"
                                    alt="" style="padding-top:10px"></a>
                            <h4>Sign In</h4>
                            <small>Need an account? <a class="" href="{{ url('/user/register') }}">Signup
                                    Aris360</a></small>
                            <div class="social_login_opt">
                                <a class="google_btn" href="javascript:(0)">Continue with Google
                                    <img class="lazy" data-src="{{ url('public/assets/images/google.png') }}"></a>
                                <a class="facbook_btn" href="javascript:(0)">Continue with
                                    <img class="lazy" data-src="{{ url('public/assets/images/facebook.png') }}"></a>
                                <!--<a class="apple_btn" href="javascript:(0)">Continue with Apple <img src="{{ url('public/assets/images/apple-logo.png') }}"></a>-->
                            </div>
                            <div class="inner-box default-form">
                                {{ getSetFlashData() }}
                                <form id="loginForm" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row clearfix">

                                        <div class="col-12">
                                            <div class="field-input">
                                                <label>Email Address</label>
                                                <input id="emailForm" name="email" type="email"
                                                    placeholder="Enter Email Address">
                                                <input name="currenturl" type="hidden" value="{{ url()->full() }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="field-input">
                                                <label>Password</label>
                                                <div class="input-group-text input_eye_icon"><i class="fas fa-eye-slash"
                                                        id="eye"></i></div>
                                                <input id="password" name="password" type="password"
                                                    placeholder="Enter your password">
                                                <small class="frgt-pswd"><a class="frgt-pswd-txt" data-toggle="modal"
                                                        data-target="#forgotModal" href="javascript:void(0)">forgot your
                                                        password</a></small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-box-login">
                                                <button class="theme-btn btn-one" type="submit">Sign In</a>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="col-12 mt-3">
                                            <p class="para">By Signing in you agree to aris360 <a
                                                    href="{{ url('terms-of-use') }}">Terms</a> and <a
                                                    href="{{ url('homes-privacy-notice') }}">Privacy</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Forgot Password Modal -->
        <div class="modal signIn_Modal fade" id="forgotModal" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="login-page">
                            <a class="Modal_logo" href="{{ route('home') }}">
                                <img class="lazy" data-src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}"
                                    alt="" style="padding-top:10px"></a>
                            <h4>Forgot Password</h4>
                            <div class="inner-box default-form">
                                {{ getSetFlashData() }}
                                <form id="submitForm2" method="POST" action="{{ url('/agent/auth') }}">
                                    @csrf
                                    <div class="row clearfix">

                                        <div class="col-12">
                                            <div class="field-input">
                                                <label>Email Address</label>
                                                <input id="emailForm" name="email" type="email"
                                                    placeholder="Enter Email Address">
                                                <input name="currenturl" type="hidden" value="{{ url()->full() }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-box-login">
                                                <a class="theme-btn btn-one" href="#">Submit</a>
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

        <!-- New Member Modal -->
        <div class="modal signIn_Modal fade" id="examplenewmemberModal" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button class="close" data-dismiss="modal" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            </div>
        </div>

        {{-- Favouite Modal Start --}}
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
        {{-- Favouite Modal End --}}

        <script>
            // Password
            $(function() {

                $('#eye').click(function() {

                    if ($(this).hasClass('fa-eye-slash')) {

                        $(this).removeClass('fa-eye-slash');

                        $(this).addClass('fa-eye');

                        $('#password').attr('type', 'text');

                    } else {

                        $(this).removeClass('fa-eye');

                        $(this).addClass('fa-eye-slash');

                        $('#password').attr('type', 'password');
                    }
                });
            });

            // Confirm Password
            $(function() {

                $('#confirmeye').click(function() {

                    if ($(this).hasClass('fa-eye-slash')) {

                        $(this).removeClass('fa-eye-slash');

                        $(this).addClass('fa-eye');

                        $('#confirmpassword').attr('type', 'text');

                    } else {

                        $(this).removeClass('fa-eye');

                        $(this).addClass('fa-eye-slash');

                        $('#confirmpassword').attr('type', 'password');
                    }
                });
            });

            // Registration Password
            $(function() {

                $('#regeye').click(function() {

                    if ($(this).hasClass('fa-eye-slash')) {

                        $(this).removeClass('fa-eye-slash');

                        $(this).addClass('fa-eye');

                        $('#regpassword').attr('type', 'text');

                    } else {

                        $(this).removeClass('fa-eye');

                        $(this).addClass('fa-eye-slash');

                        $('#regpassword').attr('type', 'password');
                    }
                });
            });

            // Admin Password
            $(function() {

                $('#admineye').click(function() {

                    if ($(this).hasClass('fa-eye-slash')) {

                        $(this).removeClass('fa-eye-slash');

                        $(this).addClass('fa-eye');

                        $('#user_pass').attr('type', 'text');

                    } else {

                        $(this).removeClass('fa-eye');

                        $(this).addClass('fa-eye-slash');

                        $('#user_pass').attr('type', 'password');
                    }
                });
            });


            $(document).ready(function() {
                $(".frgt-pswd-txt").click(function() {
                    $("#signInModal").modal('hide');
                });
            });


            $(document).ready(function() {
                $(".signUp_popup_btn").click(function() {
                    $("#signInModal").modal('hide');
                });
            });

            $(document).ready(function() {
                $(".mobile_signin").click(function() {
                    $(".mobile-menu").hide();
                });

                $(".mobile-nav-toggler").click(function() {
                    $(".mobile-menu").show();
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $(".noti_fication_bell").click(function() {
                    $(".notification-sect").toggle();
                });
            });


            // Nav Active func:
            // headerNavItem
            $(".menu-area .headerNavLink").each((index, element) => {
                if (window.location.href == element.href) {
                    element.classList.add("active");
                    element.closest(".dropdown").querySelector(".headerNavItem").classList.add("active");
                }
                //   else {
                //       element.classList.remove("active");
                //       element.closest(".dropdown").querySelector(".headerNavItem").classList.remove("active");
                //   }
            });
        </script>


        </body>
        <!-- End of .page_wrapper -->

        <!--lendl-modal-start-->
        <div class="modal fade" id="exampleModalcontact" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="agentDetail-askQuestion-sect">
                            <div class="estate-agent-form" style="padding: 0px 10px;">
                                <p class="contact-gentext mb-4 text-center">Give Your Detail</p>
                                <form id="contact_form" action="https://demo.wizardinnovations.us/aris-new/add-lead"
                                    method="POST" enctype="multipart/form-data">
                                    <input name="_token" type="hidden"
                                        value="XHFmpVfCRbOjIVbWNCbv3WliYfXCMPWMd39jAQw3">
                                    <div class="input_fields">
                                        <label for="">Name *</label>
                                        <input name="name" type="text" placeholder="Enter your name"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Email *</label>
                                        <input name="city" type="email" placeholder="Enter your Email"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Phone *</label>
                                        <input name="phone" type="text" placeholder="Enter your number"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Message *</label>
                                        <textarea name="question" placeholder="Enter Your Message" required=""></textarea>
                                    </div>
                                    <input name="agent_id" type="hidden" value="36">
                                    <input name="lead_type" type="hidden" value="buy">
                                    <div class="btn-box">
                                        <button class="theme-btn btn-one" type="submit">Send</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--lendl-modal-end-->
        <!--lendl-modal-start-->
        <div class="modal fade" id="writeReviewModal" role="dialog" aria-labelledby="writeReviewModalLabel"
            aria-hidden="true" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="agentDetail-askQuestion-sect">
                            <div class="estate-agent-form" style="padding: 0px 10px;">
                                <p class="contact-gentext mb-4 text-center">Write a review</p>
                                <form id="contact_form" action="https://demo.wizardinnovations.us/aris-new/add-lead"
                                    method="POST" enctype="multipart/form-data">

                                    <div class="input_fields reviewStars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>

                                    </div>

                                    <input name="_token" type="hidden"
                                        value="XHFmpVfCRbOjIVbWNCbv3WliYfXCMPWMd39jAQw3">
                                    <div class="input_fields">
                                        <label for="">Review Heading *</label>
                                        <input name="name" type="text" placeholder="Enter your name"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Message *</label>
                                        <textarea name="question" placeholder="Enter Your Message" required=""></textarea>
                                    </div>
                                    <input name="agent_id" type="hidden" value="36">
                                    <input name="lead_type" type="hidden" value="buy">
                                    <div class="btn-box">
                                        <button class="theme-btn btn-one" type="submit">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--lendl-modal-end-->
        <script>
            (function() {
                var s = document.createElement('script');
                var h = document.querySelector('head') || document.body;
                s.src = 'https://acsbapp.com/apps/app/dist/js/app.js';
                s.async = true;
                s.onload = function() {
                    acsbJS.init({
                        statementLink: 'https://www.aris360.com/ada-accessiblity',
                        footerHtml: 'ARIS360 - ADA COMPLIANT',
                        hideMobile: false,
                        hideTrigger: false,
                        disableBgProcess: false,
                        language: 'en',
                        position: 'left',
                        leadColor: '#f81616',
                        triggerColor: '#f81616',
                        triggerRadius: '5px',
                        triggerPositionX: 'left',
                        triggerPositionY: 'bottom',
                        triggerIcon: 'people2',
                        triggerSize: 'medium',
                        triggerOffsetX: 20,
                        triggerOffsetY: 20,
                        mobile: {
                            triggerSize: 'small',
                            triggerPositionX: 'right',
                            triggerPositionY: 'center',
                            triggerOffsetX: 10,
                            triggerOffsetY: 0,
                            triggerRadius: '50%'
                        }
                    });
                };
                h.appendChild(s);
            })();
        </script>

        </html>


        <!-- main-footer end -->


        </div>


        </div>
    </section>


    {{-- sharemodal-start --}}
    <div class="modal fade" id="shareModal" aria-labelledby="exampleModalLabel" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="share-text text-center">Share Listing</p>
                    <button class="close" data-dismiss="modal" type="button" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <p class="share-gentxt">Email</p>
                        <input class="form-control" id="recipient-email" type="email" required>
                    </div>
                    <div class="form-group">
                        <p class="share-gentxt">Message</p>
                        <textarea class="form-control" id="message-text" required></textarea>
                    </div>
                    <div class="send-btn d-flex justify-content-end">
                        <button class="theme-btn btn-one cta-btnshare button Button primary submit-button"
                            id="shareSubmitButton">Send
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- sharemodal-End --}}


    <script type="text/javascript">
        $("body").on('click', '.formFavourite', (function(e) {
            var value = $(this).data("text");
            $.ajax({
                url: "<?php echo url('/skzfav'); ?>",
                type: "GET",
                data: {
                    text: value
                },
                success: function(response) {
                    if (response.return == true) {
                        $('#favtle').text('Favorite');
                        $('#favbdy').text(response.message);
                        $('#favModalNoti').modal('show');
                        setTimeout(() => {
                            $('#favModalNoti').modal('hide');
                        }, 2000);
                        $('#favBtnListed' + value).find('i').toggleClass(
                            'far fa-heart fas fa-heart');
                        $('#favBtnListed' + value).removeClass("formFavourite");
                        $('#favBtnListed' + value).addClass('formFavourite skzfavx');
                        $('#skzmtle')
                    } else {
                        $('#favtle').text('Favorite');
                        $('#favbdy').text(response.message);
                        $('#favModalNoti').modal('show');
                        setTimeout(() => {
                            $('#favModalNoti').modal('hide');
                        }, 2000);
                        $('#favBtnListed' + value).find('i').toggleClass(
                            'fas fa-heart far fa-heart');
                        $('#favBtnListed' + value).removeClass("skzfavx");
                        $('#favBtnListed' + value).addClass('formFavourite');
                    }
                },
                error: function(e) {
                    alert('Failed to submit');
                }
            });

        }));

        $("body").on('click', '.formShare', function(e) {
            e.preventDefault(); // Prevent the default action of the link/button
            var property_id = $(this).data("text");
            var user_id = $(this).data("user");
            $('#shareSubmitButton').off('click').on('click', function() {
                var email = $('#recipient-email').val();
                var message = $('#message-text').val();
                setTimeout(function() {
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
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(e) {
                        console.log("Failure");
                    }
                });
            });
        });

        $("body").on('click', '.favNotLoggedIn', (function(e) {
            window.location.href = sturl + '/login';
        }));

        $("body").on('click', '.shrNotLoggedIn', (function(e) {
            window.location.href = sturl + '/login';
        }));

        $(".formFavourite_ajax_one").on('submit', (function(e) {

            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    $("#favFormOne").trigger("reset");

                },
                error: function(e) {
                    alert('Failed to submit');
                }
            });
        }));


        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = 1000000;

        priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice;
                        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }
            });
        });

        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                if (maxVal - minVal < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap;
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
                    range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });
    </script>

    <script type="text/javascript">
        var id;

        function testingSameer(response, skzCategory, page) {

            var total_records = response.count;
            var properties = response.pagination;
            var type = 'category';

            var perPage = 40; // Number of records to display per page
            var totalPages = Math.ceil(properties.length / perPage); // Calculate total pages

            var start = (page - 1) * perPage; // Start index of records for the current page
            var end = start + perPage; // End index of records for the current page
            var paginatedData = properties.slice(start, end);

            var htmlSearch = "";

            if (paginatedData.length > 0) {
                $.each(paginatedData, function(key, value) {

                    var home_id = value.mlsstructure_types_id;
                    var home_type = "";

                    if (home_id == 1) {
                        home_type = "Premier Properties";
                    } else if (home_id == 2) {
                        home_type = "Single Family";
                    } else if (home_id == 3) {
                        home_type = "Multi Family";
                    } else if (home_id == 4) {
                        home_type = "Condominium";
                    } else if (home_id == 5) {
                        home_type = "Townhouse";
                    } else if (home_id == 6) {
                        home_type = "Land";
                    } else if (home_id == 7) {
                        home_type = "Other";
                    }

                    id = value.id;

                    var url = '{{ route('home.property-detail', ':id') }}';
                    url = url.replace(':id', id);
                    var price = value.PropetySellPrice;
                    var newprice = new Intl.NumberFormat().format(price);
                    let image = (value.s3buckettempurl == undefined) ? value['preffered_media'][0][
                        's3buckettempurl'
                    ] : value.s3buckettempurl;
                    var hoursAgo = getTimeSinceCreation(value.created_at);

                    htmlSearch += `
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 propertyBox prp_div_${ id }" data-id="${id}"  data-lat="${value.PropertyLatitude}" data-lng="${value.PropertyLongitude}" data-price="${price}">
                        <div class="feature-block">
                            <div class="feature-block-one">
                            <div id='prp_${ id }' class="inner-box prp_${ id } rmv-border" data-lat="${value.PropertyLatitude}" data-lng="${value.PropertyLongitude}" data-price="${price}">
                                <div class="image-box">
                                <a id='href_${id}'class="image" href="${url}" target="_blank">
                                    <figure class="image">
                                    <img style="height: 250px; width:500px;" src="${image}" alt="">
                                    </figure>
                                </a>

                                ${price > 1000000 ? '<span class="category">ARIS360 Premier</span>' : ''}
                                <span class="category2">${(value.PublishStatus == 'Closed') ? 'Sold' : value.PublishStatus}</span>
                                ${((value.PublishStatus == 'Closed' || value.PublishStatus == 'Sold') &  hoursAgo != '' ) ? '' : (hoursAgo != '') ? '<span class="category4"> NEW '+ hoursAgo +'</span>' : ''}

                                </div>

                                <div class="lower-content">
                                <div class="price-info custom_price_info">
                                    <h4>$${newprice}</h4>
                                    <div class="fav_and_share">
                                    <div class="share_onlyIcon">
                                        <ul class="other-option feat_fav pull-right clearfix">
                                        @if (auth()->check())
                                        <li>
                                            <button id="shrBtnListed${value.id}" data-id="${value.id}}" data-text="${value.id}" data-user="{{ Auth::id() }}" href="javascript:;" data-toggle="modal" data-target="#shareModal" class="formShare">
                                            <i class="far fa-share"></i>
                                            </button>
                                        </li>
                                        @else
                                        <li>
                                            <button class="shrNotLoggedIn"><i class="far fa-share"></i></button>
                                        </li>
                                        @endif
                                        </ul>
                                    </div>
                                    <div class="fav_onlyIcon">
                                        @if (auth()->check())
                                        @if (isset($property['favoriteProperty'][0]['is_fav']) and $property['favoriteProperty'][0]['is_fav'] == 1)
                                        <ul class="other-option feat_fav pull-right clearfix">
                                        <li>
                                            <button id="favBtnListed${value.id}" data-id="${value.id}" data-text="${value.id}" class="formFavourite skzfavx"><i class="fas fa-heart"></i></button>
                                        </li>
                                        </ul>
                                        @else
                                        <ul class="other-option feat_fav pull-right clearfix">
                                        <li>
                                            <button id="favBtnListed${value.id}" data-id="${value.id}" data-text="${value.id}" class="formFavourite"><i class="far fa-heart"></i></button>
                                        </li>
                                        </ul>
                                        @endif
                                        @else
                                        <ul class="other-option feat_fav pull-right clearfix">
                                        <li>
                                            <button class="favNotLoggedIn"><i class="far fa-heart"></i></button>
                                        </li>
                                        </ul>
                                        @endif
                                    </div>
                                    </div>
                                </div>
                                <div>
                                    <ul class="more-details custom_price_infoDetails  clearfix mb-2">
                                    <li>${value.Bedrooms} Beds</li>
                                    <li>${value.BathroomsFull} Baths</li>
                                    <li>${value.PropertyArea} Sq.ft.</li>
                                    </ul>
                                </div>
                                <div class="title-text">
                                    <p>${value.PropertyAddress}</p>
                                </div>
                                <div class="listing_key_section">
                                    <ul>
                                    <li>
                                        <span class="text-danger">Property Category:</span>
                                    </li>
                                    <li>
                                        <p>${home_type}</p>
                                    </li>
                                    </ul>
                                    <small>Listing provided by NWMLS</small>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                `;
                });
            } else {

                var emptypagination = 'Showing ' + 0 + ' of ' + 0;
                $('.pgssts').text(emptypagination);
            }
            $('#searchResultProperty').html(htmlSearch);

            var HoverPropertyLatitude;
            var HoverPropertyLongitude;
            $(".propertyBox").hover(function() {
                //    2nd

                HoverPropertyLatitude = $(this).data("lat");
                HoverPropertyLongitude = $(this).data("lng");
                PropertySellPrice = $(this).data("price");
                addMarker(HoverPropertyLatitude, HoverPropertyLongitude, PropertySellPrice);
                const defaultIcon = '{{ asset('public/assets/images/marker-wide-img.png') }}';
                activeMarker.setIcon({
                    url: defaultIcon,
                    size: new google.maps.Size(60, 28),
                    scaledSize: new google.maps.Size(60, 28)
                });
                activeMarker.getLabel().color = '#fff'

            }, function() {
                console.log('2nd')
                removeMarker();
                const whiteIcon = '{{ asset('public/assets/images/marker-wide-img-white.png') }}';
                activeMarker.setIcon({
                    url: whiteIcon,
                    size: new google.maps.Size(60, 28),
                    scaledSize: new google.maps.Size(60, 28),
                });
                activeMarker.getLabel().color = '#de1e25'
            });


            function addMarker(lat, lng, price) {
                const label = Math.abs(price) >= 1000000 ?
                    '$' + Math.abs(price / 1000000).toLocaleString(undefined, {
                        minimumFractionDigits: 0
                    }) + "M" :
                    Math.abs(price) >= 1000 ?
                    '$' + Math.abs(price / 1000).toLocaleString(undefined, {
                        minimumFractionDigits: 0
                    }) + "k" :
                    '$' + Math.abs(price).toLocaleString();

                const locationCoordinates = {
                    lat: lat,
                    lng: lng
                };
                const newMarker = new google.maps.Marker({
                    map: map,
                    position: locationCoordinates,
                    label: {
                        text: label,
                        color: "#de1e25",
                        // fontWeight: "500",
                        fontSize: "12.5px"
                    },
                    icon: {
                        url: '{{ asset('public/assets/images/marker-wide-img-white.png') }}',
                        size: new google.maps.Size(70, 45),
                        scaledSize: new google.maps.Size(70, 45),
                    },
                });

                markers.push(newMarker);
            }

            function removeMarker() {
                if (markers.length > 0) {
                    const lastMarker = markers.pop(); // Get the last marker from the array
                    lastMarker.setMap(null); // Remove the marker from the map
                }
            }
            var records = (properties.length == 200) ? total_records : properties.length;
            generatePagination(response, skzCategory, totalPages, page, records);
        }


        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });

        function generatePagination(response, skzCategory, totalPages, currentPage, totalRecords) {
            listingPages = {
                response,
                skzCategory,
                totalPages,
                currentPage,
                totalRecords
            }

            var perPage = 40; // Number of records to display per page
            var startCount = (currentPage - 1) * perPage + 1; // Calculate starting count for the current page
            var endCount = Math.min(currentPage * perPage, totalRecords); // Calculate ending count for the current page
            if (response.pagination.length > 0) {
                if (response.pagination.length > 0) {

                    if (response.pagination.length <= 40) {
                        paginationText = 'Showing ' + endCount + ' of ' + totalRecords;
                    } else {
                        paginationText = 'Showing ' + 40 + ' of ' + totalRecords;
                    }
                }
            } else {
                var paginationText = 'Showing ' + startCount + ' to ' + endCount + ' of ' + totalRecords;
            }

            $('.pgssts').text(paginationText);

            var htmlPagination = '';

            for (var i = 1; i <= totalPages; i++) {
                if (i === currentPage) {
                    htmlPagination += `<li class="page-item active">
                    <a class="page-link" id="prp_${id}" href="javascript:void(0);" data-page="${i}">${i}</a>
                </li>`;
                } else {
                    htmlPagination += `<li class="page-item">
                    <a class="page-link" id="prp_${id}" href="javascript:void(0);" data-page="${i}">${i}</a>
                </li>`;
                }
            }
            $('.pagination').html(htmlPagination);
            $('.pagination a').click(function(e) {
                e.preventDefault();
                var page = $(this).data('page');
                testingSameer(response, skzCategory, page);
                $('html, body').animate({
                    scrollTop: 0
                }, 'slow');
            });
        }
        var clickCount = 0;
        var threshold = 500;
        var activeMarker = null; // Variable to store the reference to the currently active marker
        var marker;

        function updateMarkers(data) {
            data = JSON.parse(data);
            var locations = data.map(function(property) {
                var hashValue = property.PropertyAddress.match(/#([\w\d]+)/);
                var parts = property.PropertyAddress.split('#'); // Split the address at '#'
                var beforeHash = parts[0].trim();
                return {
                    lat: parseFloat(property.PropertyLatitude),
                    lng: parseFloat(property.PropertyLongitude),
                    price: parseFloat(property.PropetySellPrice),
                    address: beforeHash,
                    property_category: property.PropertyName,
                    img: property.s3buckettempurl,
                    id: property.id,
                    hno: hashValue,
                    bed: property.Bedrooms,
                    bath: property.BathroomsFull,
                    sqft: property.PropertyArea
                };
            });

            // Create an info window to share between markers.
            // Clear existing markers from markerCluster
            markerCluster.clearMarkers();

            var currentInfoWindow = null;
            var openedInfoWindow = null;
            var propertyId;


            // Create new markers and add to markerCluster
            // second marker
            var markers = locations.map(function(location) {
                var property_lng = location.lng;
                var property_lat = location.lat;
                var filter_property = locations.filter((location) => {
                    return property_lng === location.lng && property_lat === location.lat;
                })
                marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    id: location.id,
                    label: {
                        text: filter_property.length > 1 ? `${filter_property.length} units` : `$${Math.abs(location.price) >= 1000000
                            ? Math.abs((location.price / 1000000)).toLocaleString(undefined, {minimumFractionDigits: 0}) + "M"
                            : Math.abs(location.price) >= 1000
                                ? Math.abs((location.price / 1000)).toLocaleString(undefined, {minimumFractionDigits: 0}) + "k"
                                : Math.abs(location.price).toLocaleString()}`,
                        color: "#fff",
                        // fontWeight: "500",
                        fontSize: "10.5px"
                    },
                    icon: {
                        url: '{{ asset('public/assets/images/marker-wide-img.png') }}',
                        size: new google.maps.Size(60, 28),
                        scaledSize: new google.maps.Size(60, 28),
                    },
                });

                google.maps.event.addListener(map, 'dragend', function() {
                    if (openedInfoWindow) {
                        openedInfoWindow.close(map);
                    }
                });
                google.maps.event.addListener(map, 'zoom_changed', function() {
                    if (openedInfoWindow) {
                        openedInfoWindow.close(map);
                    }
                });
                // var originalZIndex = marker.getZIndex(); // Store the original z-index

                // var propertyListingBox = document.getElementById(`prp_${location.id}`);
                // if (propertyListingBox) {
                //     propertyListingBox.addEventListener("mouseover", function(marker) {
                //         return function() {
                //             // Increase marker size when hovering over listing box
                //             marker.setIcon({
                //                 url: '{{ asset('public/assets/images/marker-wide-img-white.png') }}',
                //                 size: new google.maps.Size(80,
                //                     38), // Increase the size as needed
                //                 scaledSize: new google.maps.Size(80,
                //                     38), // Increase the size as needed
                //             });
                //             marker.getLabel().color = '#de1e25';
                //             marker.setZIndex(google.maps.Marker.MAX_ZINDEX); // Set a high z-index
                //         };
                //     }(marker));

                //     propertyListingBox.addEventListener("mouseleave", function(marker) {
                //         return function() {
                //             // Reset marker size when mouse leaves listing box
                //             marker.setIcon({
                //                 url: '{{ asset('public/assets/images/marker-wide-img.png') }}',
                //                 size: new google.maps.Size(60, 28),
                //                 scaledSize: new google.maps.Size(60, 28),
                //             });
                //             marker.getLabel().color = '#fff';
                //             marker.setZIndex(originalZIndex); // Restore the original z-index
                //         };
                //     }(marker));
                // }



                function generateInfoWindowContent(markerPosition) {
                    return `<div class="container">
                        <div class="row border-bottom">
                            <div class="col-md-12 text-start my-2">
                                <p class="info_para">${filter_property.length} for sale</p>
                                        <div class="row">
                                    <div class="col-md-12 text-start">
                                        <p class="info_para">${location.address}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-start mt-3">
                                <span class="" style="font-size: 16px;font-weight: 300; color:#585858!important;">For Sale (${filter_property.length} Units)</span>
                            </div>
                            </div>
                            ${filter_property.map(function(data, i) {
                                return `
                                                                    <div onclick="
                                                                        var locationId =${locations?.find((item) => item?.id === data?.id)?.id};
                                                                        if(${locations?.find((item) => item?.id === data?.id)?.id}){
                                                                            $('.rmv-border').removeClass('active-property')
                                                                            $('.prp_${locations?.find((item) => item?.id === data?.id)?.id}').addClass('active-property');
                                                                            var access = document.getElementById('prp_${locations?.find((item) => item?.id === data?.id)?.id}');
                                                                            if(document.getElementById('prp_${locations?.find((item) => item?.id === data?.id)?.id}')) {
                                                                                access.scrollIntoView({
                                                                                    behavior: 'smooth'
                                                                                });
                                                                            }else {

                                                                                console.log(listingPages)

                                                                                let elemsWithIndex = listingPages?.response?.pagination.map((item, index) => {
                                                                                    if (item?.id === ${locations?.find((item) => item?.id === data?.id)?.id}) {
                                                                                        return {
                                                                                            ...item,
                                                                                            itemIndex: index
                                                                                        };
                                                                                    }
                                                                                    return null;
                                                                                }).filter(item => item !== null)

                                                                                const pageNumber = Math.floor(elemsWithIndex[0]?.itemIndex / 40) + 1;

                                                                                testingSameer(listingPages?.response, listingPages?.skzCategory, pageNumber);

                                                                                $('.rmv-border').removeClass('active-property')
                                                                                $('.prp_${location.id}').addClass('active-property');
                                                                                var access = document.getElementById('prp_${location.id}');
                                                                                access.scrollIntoView({
                                                                                    behavior: 'smooth'
                                                                                });
                                                                            }
                                                                        }"
                                                                        ' id="filterBox_${data.id}" style="gap: 20px; cursor:pointer;" class="info_detail_box border-bottom d-flex align-items-center">
                                                                        <div class="info_image_box">
                                                                            <img src=${data.img} class="filter_property_img">
                                                                        </div>
                                                                        <div class="info_price_box d-flex flex-column">
                                                                            <div style="color: #1080a2 !important;font-weight: 400;font-size: 16px;">
                                                                                <a target="__blank" style="color:#1080a2 !important;" href="property-detail/${data.id}">${data.property_category}</a>
                                                                            </div>
                                                                            <div style="font-size: 23px; color:#585858!important; font-weight: 400;">$${data.price.toLocaleString()}</div>
                                                                            <div style="font-size:13px; color:#585858!important; font-weight: 400;">${data.bed>1?data.bed + ' Beds - ': data.bed + ' Bed - '}${data.bath>1?data.bath + ' Baths - ': data.bath + ' Bath - '}${data.sqft>0?data.sqft + ' sq.ft. ':' 0 sq.ft.'}</div>
                                                                        </div>
                                                                    </div>`;
                            }).join('')}
                        </div>`;
                }


                function CustomInfoWindow(content) {
                    this.content = content;
                    this.div = document.createElement("div");
                    this.div.className = "custom-info-window";
                    this.div.innerHTML = this.content;
                    this.isOpen = false;
                }

                CustomInfoWindow.prototype = new google.maps.OverlayView();

                CustomInfoWindow.prototype.onAdd = function() {
                    var div = document.createElement("div");
                    div.className = "custom-info-window";
                    div.innerHTML = this.content;
                    this.div = div;

                    var panes = this.getPanes();
                    panes.floatPane.appendChild(div);
                };


                CustomInfoWindow.prototype.onRemove = function() {
                    this.div.parentNode.removeChild(this.div);
                    this.div = null;
                };

                CustomInfoWindow.prototype.open = function(map, marker) {
                    if (!this.isOpen) {
                        // Close previously opened info window
                        if (openedInfoWindow) {
                            openedInfoWindow.close(map);
                        }

                        this.div.style.visibility = "visible";
                        map.controls[google.maps.ControlPosition.TOP_CENTER].push(this.div);
                        this.isOpen = true;

                        openedInfoWindow = this; // Store the reference to the currently opened window
                    }
                };

                CustomInfoWindow.prototype.close = function(map) {
                    if (this.isOpen) {
                        this.div.style.visibility = "hidden";
                        map.controls[google.maps.ControlPosition.TOP_CENTER].removeAt(0);
                        this.isOpen = false;

                        openedInfoWindow = null; // Clear the reference to the opened window
                    }
                };

                map.addListener("click", function() {
                    if (openedInfoWindow) {
                        openedInfoWindow.close(map);
                    }
                });

                marker.addListener("click", function(e) {
                    let mapRect = document.getElementById("googleMap").getBoundingClientRect();
                    console.log(mapRect, 'mapRect')
                    let markerPosition = this.getPosition()
                    console.log(markerPosition, 'markerRect')

                    if (filter_property.length > 1) {

                        if (openedInfoWindow) {
                            openedInfoWindow.close(map);
                        }
                        // Generate content for the info window based on marker data
                        var content = generateInfoWindowContent(marker);
                        customInfoWindow = new CustomInfoWindow(content);
                        customInfoWindow.open(map, marker);

                    } else {
                        var clickedId = location.id;
                        $('.rmv-border').removeClass('active-property')
                        $(`.prp_${ location.id }`).addClass('active-property');
                        var access = document.getElementById(`prp_${ location.id }`);
                        if (access) {
                            access.scrollIntoView({
                                behavior: 'smooth'
                            });
                        } else {
                            let elemsWithIndex = listingPages?.response?.pagination.map((item, index) => {
                                if (item?.id === location?.id) {
                                    return {
                                        ...item,
                                        itemIndex: index
                                    };
                                }
                                return null;
                            }).filter(item => item !== null);

                            const pageNumber = Math.floor(elemsWithIndex[0]?.itemIndex / 40) + 1;

                            testingSameer(listingPages?.response, listingPages?.skzCategory, pageNumber);

                            $('.rmv-border').removeClass('active-property')
                            $(`.prp_${ location.id }`).addClass('active-property');
                            var access = document.getElementById(`prp_${ location.id }`);
                            access.scrollIntoView({
                                behavior: 'smooth'
                            });

                        }
                    }
                    // Reset the icon of the previously active marker (if any)
                    if (activeMarker !== null && activeMarker !== this) {
                        const defaultIcon = '{{ asset('public/assets/images/marker-wide-img.png') }}';
                        activeMarker.setIcon({
                            url: defaultIcon,
                            size: new google.maps.Size(60, 28),
                            scaledSize: new google.maps.Size(60, 28)
                        });
                        activeMarker.getLabel().color = '#fff';
                    }

                    // Update the currently active marker
                    activeMarker = this;
                    var newIcon = '{{ asset('public/assets/images/marker-wide-img-white.png') }}';
                    var Icon = '{{ asset('public/assets/images/marker-wide-img.png') }}';
                    if (clickedId === location.id) {
                        if (this.getIcon().url ===
                            '{{ asset('public/assets/images/marker-wide-img.png') }}') {
                            var prevMarker = [];
                            prevMarker.push(clickedId)
                            this.setIcon({
                                url: newIcon,
                                size: new google.maps.Size(60, 28),
                                scaledSize: new google.maps.Size(60, 28)
                            });
                            this.getLabel().color = '#de1e25';
                        } else {
                            var href = $(`#href_${ location.id }`).attr('href');
                            window.open(href, '_blank');
                            clickCount = 0;
                        }
                    } else {
                        this.setIcon({
                            url: Icon,
                            size: new google.maps.Size(60, 28),
                            scaledSize: new google.maps.Size(60, 28)
                        });
                        this.getLabel().color = '#fff';
                    }
                })
                return marker;
            });
            markerCluster.addMarkers(markers);
            // markerCluster.setIgnoreHidden(true);
            markerCluster.repaint();
        }

        function clearMarkers() {
            for (let i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
            markers = [];
        }
        $(".scroll-to-target").on('click', function() {

            var target = $(this).attr('data-target');

            // animate

            $('html, body').animate({

                scrollTop: $(target).offset().top

            }, 1000);

        });

        function getTimeSinceCreation(createdDate) {
    var now = new Date();
    var created = new Date(createdDate);
    var diff = Math.floor((now - created) / 1000); // Get the difference in seconds

    if (diff > 0) {
        var minutes = Math.floor(diff / 60);
        var hours = Math.floor(minutes / 60);

        if (hours > 0) {
            if (hours === 1) {
                return '1 hour ago';
            } else {
                return hours <= 24 ? hours + ' hours ago' : '';
            }
        } else if (minutes > 0) {
            if (minutes === 1) {
                return 'one minute ago';
            } else {
                return minutes <= 1440 ? minutes + ' minutes ago' : '';
            }
        }
    }
    
    return ''; // Return empty string if more than 24 hours have passed
}



        $(document).ready(function() {
            $('#saveData').click(function() {
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var searchName = $('#save_search').val();
                var allData = [];
                var dataToSend = {
                    searchName: searchName,
                    allData: global_data
                }

                let isValue = document.getElementById('save_search').value

                if(!isValue) {

                    document.getElementById('save_search_status').classList.add('error_message')
                    $('#save_search_status').text('Please input search name')

                    return;
                }

                $.ajax({

                    type: 'POST',
                    url: "<?php echo url('/save-search'); ?>",
                    data: dataToSend, // Send the global_data variable data
                    headers: {
                        'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                    },
                    success: function(response) {

                        if (response.message.includes('successfully')) {

                            document.getElementById('save_search_status').classList.remove('error_message')
                            document.getElementById('dropdown_save_search_wrap').classList.remove('open')
                           // $('#save_search_status').text('Search has been saved.');
                            $('#save_search').val('');
                            $('#favtle').text('Save Search');
                            $('#favbdy').text(response.message);
                            $('#favModalNoti').modal('show');

                        } else {
                            $('#favtle').text('Save Search');
                            $('#favbdy').text(response.message);
                            $('#favModalNoti').modal('show');
                            setTimeout(() => {
                                $('#favModalNoti').modal('hide');
                            }, 2000);
                            //document.getElementById('dropdown_save_search_wrap').style.display = 'none';
                        }


                        // Empty the input field after the search has been saved

                    },
                    error: function(error) {
                        console.error('Error saving search:', error);
                    }
                });
            });
        });
    </script>






    <!--Here is my last comment-->





    <script>
        const showCurrentLocation = () => {
            $('.current_location_box').show();
        }

        const hideCurrentLocation = () => {
            let timer = setTimeout(() => {
                $('.current_location_box').hide();
            }, 200)
            return () => clearTimeout(timer)
        }



        const getCurrentLocation = () => {
            // $('.current_location_box').hide();
            // document.getElementById('search_loader').style.display = 'block';
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    async (position) => {

                            console.log(position, "position")
                            // document.getElementById('search_loader').style.display = 'none'
                            const pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };
                            // Reverse geocode to get location details
                            const geocoder = new google.maps.Geocoder();
                            await geocoder.geocode({
                                location: pos
                            }, (results, status) => {
                                if (status === 'OK') {
                                    if (results[0]) {
                                        let state = '';
                                        // Extract state from address components
                                        for (const component of results[0].address_components) {
                                            if (component.types.includes('administrative_area_level_1')) {
                                                state = component.short_name;
                                            }
                                        }
                                        // Check if the state is Washington (WA)
                                        if (state === 'WA') {
                                            let zipcode = '';
                                            let city = '';
                                            // Extract zipcode and city from address components
                                            for (const component of results[0].address_components) {
                                                if (component.types.includes('postal_code')) {
                                                    zipcode = component.long_name;
                                                } else if (component.types.includes('locality')) {
                                                    city = component.long_name;
                                                }
                                            }

                                            var currentDomain = window.location.origin;
                                            if (window.location.origin === 'http://localhost:8080' || window
                                                .location.origin === 'http://localhost') {
                                                currentDomain = currentDomain + '/aris360';
                                            }

                                            var desiredLink =
                                                `/all-properties?search=${encodeURIComponent(city)}&zip=${encodeURIComponent(zipcode)}`;
                                            window.location.href = currentDomain + desiredLink;
                                        } else {
                                            document.getElementById('warning-section').style =
                                                'display : flex';
                                        }
                                    } else {
                                        console.error('Error: No results found');
                                    }
                                } else {
                                    console.error(`Error: Geocoder failed due to: ${status}`);
                                }
                            });
                        },
                        (error) => {
                            console.error('Error: The Geolocation service failed.' + error);
                        }
                );
            } else {
                console.error('Error: Your browser doesn\'t support geolocation.');
            }

        }
        //Search
        function initialize() {
            initAutocomplete();
        }
        var autocomplete;
        var autocomplete2;
        var autocomplete3;
        var autocomplete4;
        var autocomplete5;
        var autocomplete6;
        var search1 = document.getElementById('searchPropertyText');
        var search6 = document.getElementById('sellSearch');
        var search5 = document.getElementById('buySearch');
        var agentAddress = document.getElementById('agentAddress')
        var userAddress = document.getElementById("userAddress")
        var search3 = document.getElementById('buySearch2');

        function initAutocomplete() {
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (search1), {
                    types: ['geocode'],
                    componentRestrictions: {
                        country: 'US'
                    }
                });
            autocomplete2 = new google.maps.places.Autocomplete(search6, {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'US'
                }
            });
            autocomplete3 = new google.maps.places.Autocomplete(agentAddress, {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'US'
                }
            });
            autocomplete4 = new google.maps.places.Autocomplete(search5, {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'US'
                }
            });
            autocomplete5 = new google.maps.places.Autocomplete(search3, {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'US'
                }
            });
            autocomplete6 = new google.maps.places.Autocomplete(userAddress, {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'US'
                }
            });
            google.maps.event.addListener(autocomplete, 'place_changed', () => {
                var {
                    city,
                    zipCode
                } = getAddressParts(search1.value);
                console.log("City Name:", city);
                console.log("Zip Code:", zipCode);
                if (pathName[pathName.length - 1].includes('all-properties')) {
                    var placehoder = document.getElementById('search-placeholder');
                    placehoder.innerHTML =
                        `${zipCode.length>0?zipCode:city}` + `<span style='margin-left:5px; cursor:pointer;' id='search-placeholder-icon-s'><svg width="15"    height="15" fill="none" stroke="#333"
                                                 stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6 6 18"></path>
                                                <path d="m6 6 12 12"></path>
                                                </svg>
                                                </span>`;
                    $('#search-placeholder').show();
                    search.setAttribute('placeholder', '')
                    search.value = '';
                    const url =
                        `all-properties?search=${encodeURIComponent(city)}&zip=${encodeURIComponent(zipCode)}`;
                    window.history.pushState({}, "", url);
                    // global_data = {};
                    global_data.address = city;
                    global_data.zip = zipCode;
                    global_data.zoomCoordinates = [];
                    sendSearchRequest(fromSearch = true);
                } else {
                    var currentDomain = window.location.origin;
                    if (window.location.origin === 'http://localhost:8080' || window.location.origin ===
                        'http://localhost') {
                        currentDomain = currentDomain + '/aris360';
                    }

                    var desiredLink =
                        `/all-properties?search=${encodeURIComponent(city)}&zip=${encodeURIComponent(zipCode)}`;
                    window.location.href = currentDomain + desiredLink;
                }

            })
        }

        function getAddressParts(address) {
            const addressParts = address.split(',');

            // Extracting the city name
            const city = addressParts[0].trim();

            // Extracting the zip code
            let zipCode = '';
            const zipCodeRegex = /\b\d{5}(?:-\d{4})?\b/;
            const zipCodeMatch = address.match(zipCodeRegex);
            if (zipCodeMatch) {
                zipCode = zipCodeMatch[0];
            }

            return {
                city,
                zipCode,
            };
        }

        function codeAddress() {
            let timer = setTimeout(() => {
                $('.current_location_box').hide();
            }, 200)
            return () => clearTimeout(timer)
            var geocoder, map, address;
            var address = search1.value;
            var componentForm = {
                locality: 'long_name',
                postal_code: 'short_name',
            };

            geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    for (var component in componentForm) {
                        document.getElementById(component).value = '';
                        document.getElementById(component).disabled = false;
                    }
                    for (var i = 0; i < results[0].address_components.length; i++) {
                        var addressType = results[0].address_components[i].types[0];
                        if (componentForm[addressType]) {
                            var val = results[0].address_components[i][componentForm[addressType]];
                            document.getElementById(addressType).value = val;

                        }
                    }

                    // $('#locality').val(results[0].address_components[4].long_name);
                    // $('#administrative_area_level_1').val();
                }
            });

        }
        //Search End
        let pathName = window.location.href.split('/');

        console.log(pathName[pathName.length - 1])
        if (pathName[pathName.length - 1] === 'home' || pathName[pathName.length - 1] === '' || pathName[pathName.length -
                1] === 'register' || pathName[pathName.length - 1] === 'dashboard') {
            document.getElementById('search_container').remove();
            document.getElementById('search_btn').remove();
        }

        function stickyHeader() {
            var siteHeader = $('.main-header');
            var stickyHeader = $('.sticky-header ');
            var headerLower = $('.header-lower ');
            if (window.scrollY >= 110 && pathName[pathName.length - 1] === '') {
                stickyHeader.addClass('d-block')
                headerLower.addClass('d-none')
                // document.getElementById('search_container').remove();
                // document.getElementById('search_btn').remove();
            } else if (window.scrollY >= 110 && pathName[pathName.length - 1] === 'home') {
                stickyHeader.addClass('d-block')
                headerLower.addClass('d-none')
                // document.getElementById('search_container').remove();
                // document.getElementById('search_btn').remove();
            } else {
                stickyHeader.removeClass('d-block')
                headerLower.removeClass('d-none')
            }
        }
        document.addEventListener('scroll', stickyHeader)


        // // google places api
        // $(document).ready(function() {

        function isSearching() {
            let _search_wrap = document.getElementById('search_wrapper')

            if (_search_wrap.classList.contains('open')) {
                $('#search-placeholder').hide();
            }
        }

        $('#search_city_input').click(isSearching);


        let timeoutId;

        $('#search_city_input').on('keyup', function() {
            isSearching()
            const query = $(this).val();

            if (query) {
                $('#current_location_box').hide()
            }

            // Clear the previous timer if it exists
            clearTimeout(timeoutId);
            // Set a new timer to delay the AJAX request by 500 milliseconds (adjust as needed)
            timeoutId = setTimeout(function() {

                if (!query) {

                    // reset all states when there is no query

                    document.getElementById('search_wrapper').classList.remove('open');
                    $('#search-plaeceholder').hide();
                    $('#search-placeholdr').val('');
                    $('#search_city_input').val('');
                    $('#current_location_box').show()
                    $('#places-container').empty()
                    $('#school-container').empty()
                    return;
                }

                document.getElementById('search_loading').style.display = 'block'
                console.log("query" + query);

                $.ajax({
                    url: "<?php echo url('/places-api'); ?>",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(response) {
                        document.getElementById('search_loading').style
                            .display = 'none'
                        document.getElementById('search_wrapper').classList.add(
                            'open');
                        // Call a function to update the HTML with the response data
                        updateResults(response); // Assuming results is an array
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            }, 500); // Adjust the delay time as needed (e.g., 500 milliseconds)
        });

        // Function to update the HTML with the response data
        function updateResults(data) {

            // Assuming you have a container div with the id "places-container" to hold the results
            const placesContainer = $('#places-container');
            // Clear existing results
            placesContainer.empty();
            placesContainer.append($('<h1>').addClass('result_title').text("Places"));
            // Loop through the response data and add each result to the container
            data.googleCityData.predictions.forEach(function(place, index) {

                let placeArr = place?.description?.split(',') || []
                 placeArr.shift()

                        console.log('%cour-community.blade.php line:4694 placeArr', 'color: #007acc;', placeArr);

                const resultDiv = $('<div>')
                    .addClass('search_results mt-3 p-2') // Correct the class name
                    .append($('<i>').addClass('fa fa-map-marker text-danger').attr('aria-hidden',
                        'true'))



                    .append(
                        $('<div>').addClass('search_result_content')
                        // .append($('<h1>')).addClass('result_title').text("Places")
                        .append($('<h1>').addClass('content_title').text(place.description.split(",")[0])) // Use place.description
                        .append($('<h3>').addClass('content_subtitle').text(placeArr)) // Use place.location if it exists in your data
                    );
                // Add a border-bottom to the last result element
                if (index === data.googleCityData.predictions.length - 1) {
                    resultDiv.addClass('last-result border-bottom pb-3');
                }
                placesContainer.append(resultDiv);
                resultDiv.click(function() {

                    // FOR CITY

                    searchWrapper.classList.remove('open');
                    const descriptionParts = place.description.split(',');
                    const city = descriptionParts[0].trim();
                    const zipCode = descriptionParts[1].trim().match(/\d+/);

                    document.getElementById('search_city_input').value = city

                    var placehoder = document.getElementById('search-placeholder');
                    $('#search-placeholder').show();
                    placehoder.innerHTML =
                        `${city}` + `<span><svg id="search-placeholder-icon-s" width="15" height="15" fill="none" stroke="#333"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                            </svg>
                                            </span>`;



                    const searchParam = `search=${encodeURIComponent(city)}`;
                    const zipParam = `zip=`;
                    const queryString = `${searchParam}&${zipParam}`;
                    const currentPath = window.location.pathname;

                    if (!currentPath.includes('/all-properties')) {
                        const pathParts = currentPath.split('/');
                        const newPath = `/${pathParts[1]}/all-properties`;
                        console.log(newPath, "___N");
                        window.location.href = `${newPath}?${queryString}`;
                    } else {
                        window.history.pushState({}, "", `all-properties?${queryString}`);
                    }

                    // global_data = {};
                    global_data.address = city;
                    global_data.zip = '';
                    global_data.zoomCoordinates = [];
                    sendSearchRequest(fromSearch = true);
                    console.log(place.description.split(',')[0].trim());
                    // $('#search-placeholder').text(place.description.split(',')[0].trim());

                });
            });
            data.googlePostalCodeData.predictions.forEach(function(place, index) {


                let parts = place.description.split(",")
                parts.shift();

                const resultDiv = $('<div>')
                    .addClass('search_results mt-3 p-2') // Correct the class name
                    .append($('<i>').addClass('fa fa-map-marker text-danger ').attr('aria-hidden',
                        'true'))
                    .append(
                        $('<div>').addClass('search_result_content')
                        // .append($('<h1>')).addClass('result_title').text("Places")
                        .append($('<h1>').addClass('content_title').text(place.description.split(",")[0]))
                        .append($('<h3>').addClass('content_subtitle').text(parts))
                        .append($('<p>').addClass('content_sm').text(place
                            .location)) // Use place.location if it exists in your data
                    );
                placesContainer.append(resultDiv);
                resultDiv.click(function() {

                    // FOR ZIPCODE

                    searchWrapper.classList.remove('open');

                    const descriptionParts = place.description.split(',');
                    const city = descriptionParts[0].trim();
                    const zipCode = descriptionParts[1].trim().match(/\d+/);

                    document.getElementById('search_city_input').value = zipCode

                    var placehoder = document.getElementById('search-placeholder');
                    $('#search-placeholder').show();
                    placehoder.innerHTML =
                        `${zipCode}` + `<span><svg id="search-placeholder-icon-s" width="15" height="15" fill="none" stroke="#333"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                            </svg>
                                            </span>`;

                    const searchParam = `search=${encodeURIComponent(city)}`;
                    const zipParam = `zip=${encodeURIComponent(zipCode[0])}`;
                    const queryString = `${searchParam}&${zipParam}`;

                    const currentPath = window.location.pathname;

                    if (!currentPath.includes('/all-properties')) {
                        const pathParts = currentPath.split('/');
                        const newPath = `/${pathParts[1]}/all-properties`;
                        console.log(newPath, "___N");
                        window.location.href = `${newPath}?${queryString}`;
                    } else {

                        window.history.pushState({}, "", `all-properties?${queryString}`);
                    }


                    // global_data = {};
                    global_data.address = city;
                    global_data.zip = zipCode;
                    global_data.zoomCoordinates = [];
                    sendSearchRequest(fromSearch = true);

                    console.log(zipCode[0]); // Print place.description to the console
                });
            });
            const schoolContainer = $('#school-container');
            schoolContainer.empty();
            data.googleSchoolsData.predictions.length > 0 ? schoolContainer.append($('<h1>').addClass(
                'result_title mt-3').text("School")) : schoolContainer.append($('<h1>').addClass(
                'result_title mt-3').text(""))
            data.googleSchoolsData.predictions.forEach(function(place, index) {

                let parts = place.description.split(",")
                parts.shift();


                const resultDiv = $('<div>')
                    .addClass('search_results mt-3 p-2') // Correct the class name
                    .append($('<i>').addClass('fa fa-map-marker text-danger').attr('aria-hidden',
                        'true'))
                    .append(
                        $('<div>').addClass('search_result_content')
                        // .append($('<h1>')).addClass('result_title').text("School")
                        .append($('<h1>').addClass('content_title').text(place.description?.split(',')[0])) // Use place.description
                        .append($('<h3>').addClass('content_subtitle').text(parts)) // Use place.location if it exists in your data
                    );


                resultDiv.click(function() {

                    // FOR SACHOOL

                    searchWrapper.classList.remove('open');

                    const schoolName = place.description;
                    const cityMatch = schoolName.match(/\bSeattle\b|\bBellevue\b|\bLos Angeles\b/gi);
                    const city = cityMatch[0];
                    const schoolSplitWords = place.description.split(' ').slice(0, 3);
                    const displaySchoolName = schoolSplitWords.join(' ');


                    var placehoder = document.getElementById('search-placeholder');

                    $('#search-placeholder').show();
                    placehoder.innerHTML =
                        `${displaySchoolName}` + `<span><svg id="search-placeholder-icon-s" width="15" height="15" fill="none" stroke="#333"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                            </svg>
                                            </span>`;






                    const searchParam = `search=${encodeURIComponent(city)}`;
                    const zipParam = `zip=`;
                    const schoolParam = `school=${displaySchoolName}`

                    const queryString = `${searchParam}&${zipParam}&${schoolParam}`;
                    const currentPath = window.location.pathname;

                    if (!currentPath.includes('/all-properties')) {
                        const pathParts = currentPath.split('/');
                        const newPath = `/${pathParts[1]}/all-properties`;
                        console.log(newPath, "___N");
                        window.location.href = `${newPath}?${queryString}`;
                    } else {

                        window.history.pushState({}, "", `all-properties?${queryString}`);
                    }


                    // global_data = {};
                    global_data.address = city;
                    global_data.zip = '';
                    global_data.zoomCoordinates = [];
                    sendSearchRequest(fromSearch = true);

                });
                schoolContainer.append(resultDiv);
            });
        }

        // });

        let propertyPageSearch = (query = "") => {
            $.ajax({
                url: "<?php echo url('/places-api'); ?>",
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    document.getElementById('search_loading').style
                        .display = 'none'

                    // Call a function to update the HTML with the response data
                    updateResults(response); // Assuming results is an array
                },
                error: function(error) {
                    console.error(error);
                }
            });
        }


        let isPropertyPath = window.location.pathname.includes('/all-properties');

        if (isPropertyPath) {
            let params = new URLSearchParams(window.location.search);
            let search = params.get('search');
            let zip = params.get('zip');
            let school = params.get('school');

            console.log(search); // Outputs: Bellevue
            console.log(zip); // Outputs: 98004

            var placehoder = document.getElementById('search-placeholder');

            if (search || zip || school) {
                $('#current_location_box').hide()
                if (zip && search) {
                    placehoder.innerHTML =
                        `${zip}` + `<span><svg id="search-placeholder-icon-s" width="15" height="15" fill="none" stroke="#333"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                            </svg>
                                            </span>`;

                    $('#search-placeholder').show();
                    $('#search_city_input').val(zip)
                    propertyPageSearch(zip)
                }
                if (search && !zip) {
                    $('#search-placeholder').show();
                    placehoder.innerHTML =
                        `${search}` + `<span><svg id="search-placeholder-icon-s" width="15" height="15" fill="none" stroke="#333"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                            </svg>
                                            </span>`;
                    $('#search_city_input').val(search)
                    propertyPageSearch(search)
                }
                if (school && search && !zip) {
                    $('#search-placeholder').show();
                    placehoder.innerHTML =
                        `${school}` + `<span><svg id="search-placeholder-icon-s" width="15" height="15" fill="none" stroke="#333"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                            </svg>
                                            </span>`;
                    $('#search_city_input').val(search)
                    propertyPageSearch(search)
                }
            } else {
                $('#current_location_box').show()
            }
        }




        let searchWrapper = document.getElementById('search_wrapper');
        let searchModal = document.getElementById('search_modal');

        function onOpenSearchModal() {
            if ($("#search_wrapper").hasClass('open') === true) {

                searchWrapper.classList.remove('open');
                console.log("workingg close")
                $("#search_cancel_icon").hide()
            } else {
                searchWrapper.classList.add('open');
                console.log("workingg open")
                $("#search_cancel_icon").show()
            }

        }
        $("#search_cancel_icon").click((e) => {

            document.getElementById("search_city_input").value = "";
            $('#search-placeholder').text('')
            $('#search-placeholder').hide();

        })

        function handleClickOutside(event) {
            if (
                searchWrapper.classList.contains('open') &&
                !searchWrapper.contains(event.target) &&
                !searchModal.contains(event.target)
            ) {
                searchWrapper.classList.remove('open');

                // Check if #search-placeholder has text

                if ($('#search-placeholder').text().trim() !== "") {
                    $('#search-placeholder').show();
                } else {
                    $('#search-placeholder').hide();
                }
            }
        }
        document.addEventListener('click', handleClickOutside);


        const currentPath = window.location.pathname;

        if (!currentPath.includes('/all-properties')) {
            $('#search-placeholder').empty()
            $('#search-placeholder').hide();
        }


        // hide on scroll

        $(window).scroll(function() {
            if ($(window).scrollTop() > 10) {
                $('#search_wrapper').removeClass('open');
            }
        });

        // add active_btn on clicked btn_filter
        $('.btn_filter').click(function() {
            $('.btn_filter').removeClass('active_btn');
            $(this).addClass('active_btn');
        });

        function onSearch() {
            let mainBox = document.getElementById('search_container')
            mainBox.style.display = 'flex';
        }

        function onBack() {
            let mainBox = document.getElementById('search_container')
            mainBox.style.display = 'none';
        }
    </script>


@endsection
