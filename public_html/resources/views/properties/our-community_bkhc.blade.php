@extends('properties.layouts.all-properties-main')
@section('content')

    <head>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>


    <style>
        .footer-bottom .footer-logo {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: -90px;
        }

        .footer-logo {
            display: flex;
            justify-content: center;
            width: 100%;
            max-width: 220px;
            height: 100%;
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

        /* .gmnoprint{
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                display: none !important;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } */
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
    </style>
    {{-- <script src="{{ asset('public/assets/js/jquery.js') }}"></script> --}}

    <section class=" mtts-20">
        <div class="map_row">
            <div style="display:none" id="map-loader" class="map_zoom_progress_wrap">
                <div class="d-flex justify-content-between align-items-center">
                    <span style="font-size: 12px; line-height:1;">Receving listings from Aris360</span>
                    <span style="font-size: 12px; line-height:1;">70%</span>
                </div>
                <div class="progress_bar">
                    <div style="width: 70%" class="progress_bar_thumb"></div>
                    <div class="progress_bar_track"></div>
                </div>
            </div>
            <div id="map_wrapper" class="map_leftCol fixed_search_section  ">
                <div class="map_leftCol_inner position-relative">
                    <div class="drawOnMapActionBar">
                        <div class="drawOnMapActionBarMsg">
                            Click and drag to draw your search.
                        </div>
                        <div class="drawOnMapActionBarBtnBox">
                            <button type="button" id="Cancel" class="btn drawOnMapActionBarBtn">Cancel</button>
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
                                    {{-- <div class="buttonBoxInnerBoxes">
                                        <button>
                                            <div class="buttonBoxInnerBoxesIconBox" style="background-image: url('{{asset('public/assets/images/map-icons/x-out.png')}}');
                                            background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>X-out</span>
                                        </button>
                                    </div> --}}
                                    {{-- <div class="buttonBoxInnerBoxes">
                                        <button>
                                            <div class="buttonBoxInnerBoxesIconBox" style="background-image: url('{{asset('public/assets/images/map-icons/estimates.png')}}');
                                            background-size: cover; background-repeat: no-repeat; background-position: center center;">

                                            </div>
                                            <span>Estimates</span>
                                        </button>
                                    </div> --}}
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
                                        <button id="changeMapTypeButton2" class="active">
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
                    {{-- <video id="video" autoplay loop width="320" height="240" controls>
                        <source id="source"
                            src="https://rr2---sn-ab5l6nrl.googlevideo.com/videoplayback?expire=1686745361&ei=Ha-JZN_3H-iB_9EPtpeeyA4&ip=0.0.0.0&id=f9eba10000000001&itag=375&source=aerial_view&requiressl=yes&mh=oY&mm=31&mn=sn-ab5l6nrl&ms=au&mv=D&mvi=2&pl=0&susc=av&acao=yes&mime=video/mp4&vprv=1&gir=yes&clen=37353685&dur=40.016&lmt=1686685909731947&mt=1686743415&txp=0011224&sparams=expire,ei,ip,id,itag,source,requiressl,susc,acao,mime,vprv,gir,clen,dur,lmt&sig=AOq0QJ8wRQIgQPpaM7ZczyYoul4gQg4sQeW8WW4Kuq0Ll4HRwcPe0iICIQDzye_T6BKhzXDJYqA8ODg_BPPlGn3wBE8cSyKzU3nncw==&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRAIgfVFVpLy_zc1RJ9zZ8fqz4hU_XG_SKkzuzInvIPBcVZECIFvG0flwPfkyGjhCMen85uXxHEFPUSu2gOP8ry8Jgc0n"
                            type="video/mp4">
                        Your browser does not support the video tag.
                    </video> --}}

                    <div id="googleMap" class="lazy">
                    </div>
                </div>
                {{-- @include('properties.map') --}}
                {{-- <div id="customControls"></div>
                <button id="amenitiesControl" class="btn btn-warning mb-4">amaneties</button> --}}


            </div>


            <div class="map_rightCol">

                <div class="search-field-section style-two mb-3">
                    <div class="inner-container">
                        <div class="search-field">
                            <div class="inner-box">
                                <div class="top-search">
                                    <form action="#" method="post" class="px-3">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 search-column mb-2">
                                                <div class="form-group">
                                                    <!-- <label>Search Property</label> -->
                                                    <div class="field-input position-relative">
                                                        <i class="fas fa-search"></i>
                                                        <input type="search" name="search" id="search"
                                                            placeholder="Enter City or Zip" required="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="row all_filter_custom_row">
                                                    <div
                                                        class="col-xl-2 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                        <div class="switch_btn_one">
                                                            <button type="button"
                                                                class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                                <span>PRICE</span>
                                                                <i class="fas fa-angle-down"> </i>
                                                            </button>



                                                            <div class="advanced-search advance_price_range"
                                                                style="top: 55px !important">
                                                                {{-- <div class="range-box">

                                                                    <div class="price-range">

                                                                        <h6>Select Price Range</h6>

                                                                        <div class="price-input">
                                                                            <div class="field">
                                                                                <span>Min</span>
                                                                                <input type="number"
                                                                                    class="input-min minPrice"
                                                                                    name="minPrice" value="0">
                                                                            </div>
                                                                            <div class="separator">-</div>
                                                                            <div class="field">
                                                                                <span>Max</span>
                                                                                <input type="number"
                                                                                    class="input-max maxPrice"
                                                                                    name="maxPrice" value="4900000">
                                                                            </div>
                                                                        </div>
                                                                        <div class="slider">
                                                                            <div class="progress"></div>
                                                                        </div>
                                                                        <div class="range-input mb-0">
                                                                            <input type="range"
                                                                                class="range-min minPrice" min="0"
                                                                                name="minPrice" max="10000000"
                                                                                value="0" step="1000"
                                                                                style="margin-bottom: -5px;">
                                                                            <input type="range"
                                                                                class="range-max maxPrice" min="0"
                                                                                name="maxPrice" max="100000000"
                                                                                value="4900000" step="1000">
                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="custome-range-slider">
                                                                    <label for="range-slider">Select Price Range:</label>
                                                                    <div class="range-wrap">
                                                                        <div class="range-wrapper">
                                                                            <span>Min</span>
                                                                            <input type="text" id="min-input"
                                                                                value="0">
                                                                        </div>
                                                                        <div class="range-seprator">-</div>
                                                                        <div class="range-wrapper">
                                                                            <span>Max</span>
                                                                            <input type="text" id="max-input"
                                                                                value="4,900,000">
                                                                        </div>
                                                                    </div>
                                                                    <div id="range-slider"></div>
                                                                </div>

                                                                <button type="button" id="priceButton"
                                                                    class="btn btn-block done_btn mt-4">Done
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-xl-3 col-lg-3 col-md-4 col-sm-3 col-12 search-column mb-2">
                                                        <div class="switch_btn_one">
                                                            <button type="button"
                                                                class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                                <span>BEDS & BATHS</span>
                                                                <i class="fas fa-angle-down"> </i>
                                                            </button>

                                                            <div class="advanced-search advance_bedBaths_search"
                                                                style="top: 55px !important">

                                                                <div class="form-group">

                                                                    <label>Number of Bedrooms</label>

                                                                    <div class="btn-group search_btn_group"
                                                                        role="group">
                                                                        <input type="radio" class="btn-check bed"
                                                                            name="no_of_bedroom" value="0"
                                                                            id="no_of_bedroom" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bedroom">Any</label>

                                                                        <input type="radio" class="btn-check bed"
                                                                            name="no_of_bedroom" value="1"
                                                                            id="no_of_bedroom1" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bedroom1">1+</label>

                                                                        <input type="radio" class="btn-check bed"
                                                                            name="no_of_bedroom" value="2"
                                                                            id="no_of_bedroom2" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bedroom2">2+</label>

                                                                        <input type="radio" class="btn-check bed"
                                                                            name="no_of_bedroom" value="3"
                                                                            id="no_of_bedroom3" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bedroom3">3+</label>

                                                                        <input type="radio" class="btn-check bed"
                                                                            name="no_of_bedroom" value="4"
                                                                            id="no_of_bedroom4" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bedroom4">4+</label>

                                                                        <input type="radio" class="btn-check bed"
                                                                            name="no_of_bedroom" value="5"
                                                                            id="no_of_bedroom5" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bedroom5">5+</label>

                                                                    </div>
                                                                </div>

                                                                <div class="form-group">

                                                                    <label>Number of Bathrooms</label>

                                                                    <div class="btn-group search_btn_group"
                                                                        role="group">
                                                                        <input type="radio" class="btn-check bath"
                                                                            name="no_of_bathroom" value="0"
                                                                            id="no_of_bathroom" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bathroom">Any</label>

                                                                        <input type="radio" class="btn-check bath"
                                                                            name="no_of_bathroom" value="1"
                                                                            id="no_of_bathroom1" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bathroom1">1+</label>

                                                                        <input type="radio" class="btn-check bath"
                                                                            name="no_of_bathroom" value="2"
                                                                            id="no_of_bathroom2" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bathroom2">2+</label>

                                                                        <input type="radio" class="btn-check bath"
                                                                            name="no_of_bathroom" value="3"
                                                                            id="no_of_bathroom3" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bathroom3">3+</label>

                                                                        <input type="radio" class="btn-check bath"
                                                                            name="no_of_bathroom" value="4"
                                                                            id="no_of_bathroom4" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bathroom4">4+</label>

                                                                        <input type="radio" class="btn-check bath"
                                                                            name="no_of_bathroom" value="5"
                                                                            id="no_of_bathroom5" autocomplete="off">
                                                                        <label class="theme-btn btn-two"
                                                                            for="no_of_bathroom5">5+</label>

                                                                    </div>
                                                                </div>


                                                                <button type="button" id="bathButton"
                                                                    class="btn btn-block done_btn mt-4">Done
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="col-xl-3 col-lg-3 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                        <div class="switch_btn_one">
                                                            <button type="button"
                                                                class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
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
                                                                            //var_dump($cities);
                                                                        @endphp
                                                                        @if (isset($propertyTypes) && count($propertyTypes) > 0)
                                                                            @foreach ($propertyTypes as $value)
                                                                                <input type="checkbox"
                                                                                    class="btn-check home-type"
                                                                                    name="home_type"
                                                                                    value="{{ $value->id }}"
                                                                                    id="home_type{{ $value->id }}"
                                                                                    autocomplete="off">
                                                                                <label class="theme-btn btn-two"
                                                                                    for="home_type{{ $value->id }}">{{ $value->StructureTypeName }}</label>
                                                                            @endforeach
                                                                        @endif

                                                                        {{-- <input type="radio" class="btn-check home-type" name="home_type" value="1" id="home_type" autocomplete="off">
                                                                        <label class="theme-btn btn-two" for="home_type">House</label>

                                                                        <input type="radio" class="btn-check home-type" name="home_type" value="2" id="home_type1" autocomplete="off">
                                                                        <label class="theme-btn btn-two" for="home_type1">Manufactured House</label>

                                                                        <input type="radio" class="btn-check home-type" name="home_type" value="3" id="home_type2" autocomplete="off">
                                                                        <label class="theme-btn btn-two" for="home_type2">Multi Family</label>  --}}


                                                                    </div>
                                                                </div>


                                                                <button type="button" id="homeTypeButton"
                                                                    class="btn btn-block done_btn mt-4">Done
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-xl-2 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                        <div class="switch_btn_one publish_status_wrapper">
                                                            <button type="button"
                                                                class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                                <span id="sort_elem">Active</span>
                                                                <i class="fas fa-angle-down"> </i>
                                                            </button>

                                                            <div class="advanced-search advance_hometype_search"
                                                                style="top: 55px !important">

                                                                <div class="form-group">

                                                                    {{-- <label id="sort_elem">Active</label> --}}

                                                                    <div class="search_btn_group" role="group">
                                                                        @forelse ($properties['pulicshStatus'] as $status)
                                                                            <input onchange="onStatusChange(this)"
                                                                                type="radio"
                                                                                class="btn-check active publish_status"
                                                                                name="active"
                                                                                value="{{ $status['PublishStatus'] }}"
                                                                                id="{{ $status['PublishStatus'] }}"
                                                                                autocomplete="off">
                                                                            <label for="{{ $status['PublishStatus'] }}"
                                                                                class="theme-btn btn-two">{{ $status['PublishStatus'] }}</label>
                                                                        @empty
                                                                        @endforelse
                                                                    </div>
                                                                </div>

                                                                {{-- <button id="publish_status" type="button"
                                                                    id="homeTypeButton"
                                                                    class="btn btn-block done_btn mt-4">Done
                                                                </button> --}}

                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- <div
                                                        class="col-xl-2 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">

                                                        <select class="wide publishStatus">

                                                            @forelse ($properties['pulicshStatus'] as $status)
                                                                <option value="{{ $status['PublishStatus'] }}">
                                                                    {{ $status['PublishStatus'] }}
                                                                </option>
                                                            @empty
                                                            @endforelse
                                                        </select>

                                                    </div> --}}

                                                    <div
                                                        class="col-xl-1 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">

                                                        <button style="height: 100%; padding: 0px;" type="button"
                                                            class="custom-open-btn theme-btn btn-one  w-100">

                                                            More
                                                        </button>
                                                    </div>

                                                    {{-- <div
                                                        class="col-xl-2 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                        <div class="switch_btn_one">
                                                            <button
                                                                class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                                                MORE<i class="fas fa-angle-down ml-2"></i>
                                                            </button>
                                                            <div class="advanced-search advanced-search-2 advance_allfilter"
                                                                style="top: 65px !important; padding-left:25px; padding-right:10px">
                                                                <!-- <div class="close-btn">
                                                                                                                                        <a href="#" class="close-side-widget"><i
                                                                                                                                                class="far fa-times"></i></a>
                                                                                                                                    </div> -->
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 column">
                                                                        <div class="form-group">
                                                                            <label>Distance from Location</label>
                                                                            <div class="select-box">
                                                                                <select class="wide">
                                                                                    <option
                                                                                        data-display="Distance from Location">
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
                                                                                    <option data-display="Max Rooms"
                                                                                        value="5">
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
                                                                                    <option data-display="Max Bath"
                                                                                        value="5">
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
                                                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                            <div class="price-range">
                                                                                <h6>Select Price Range</h6>
                                                                                <div class="range-input">
                                                                                    <div class="input">
                                                                                        <input type="text"
                                                                                            class="property-amount price-prop"
                                                                                            name="field-name"
                                                                                            readonly=""
                                                                                            style="height:15px!important" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="price-range-slider"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                                                            <div class="area-range">
                                                                                <h6>Select Area</h6>
                                                                                <div class="range-input">
                                                                                    <div class="input">
                                                                                        <input type="text"
                                                                                            class="area-range area-prop"
                                                                                            name="field-name"
                                                                                            readonly=""
                                                                                            style="height:15px!important" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="area-range-slider"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}


                                                    {{-- @foreach ($properties['pulicshStatus'] as $myStatus)
                                                    {{$myStatus['PublishStatus']}}
                                                @endforeach --}}
                                                    {{-- @dd('') --}}
                                                    <div
                                                        class="col-xl-1 col-lg-2 col-md-4 col-sm-2 col-12 search-column mb-2">
                                                        {{-- <button class="theme-btn btn-one clear_search nav-btn nav-toggler navSidebar-button search__toggler w-100"></button> --}}
                                                        <a style="height: 100%;" href="{{ route('home.our-community') }}"
                                                            class="theme-btn btn-one clear_search w-100">Clear</a>
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

                    {{-- <div class="col-xl-7 col-lg-7 col-md-7 col-sm-6 col-12  search-keyword">
                        <div class="form-group">
                            <!-- <label>Search Property</label> -->
                            <div class="field-input">
                                <i class="fas fa-search"></i>
                                <input type="search" placeholder="Search by Home Amenities" required=""
                                    class="pac-target-input" id="searchKeyword">
                            </div>
                        </div>
                    </div> --}}

                    <div class="col property-filter-select">

                        <p class="pgssts">{{ 'Showing ' }} {{ $properties['community']->lastItem() }} of
                            {{ $properties['community']->total() }}</p>


                        <div class="styled_property_search_filter">

                            {{-- <div style="position: relative" class="search-column">
                                <div id="search__toggler_wrapper" class="switch_btn_one">
                                    <button
                                        id="search__toggler_btn"
                                        class="nav-btn nav-toggler navSidebar-button search__toggler d-flex justify-content-between align-items-center w-100">
                                        <span>HOME TYPE</span>
                                        <i class="fas fa-angle-down"> </i>
                                    </button>
                                    <div class="advanced-search advance_hometype_search" style="top: 55px !important">

                                        <div class="form-group">

                                            <label class="text-center w-100">SORT</label> <br>


                                            <div>
                                                <input type="radio" class="btn-check active" name="active"
                                                    value="1" id="1" autocomplete="off">
                                                <label for="1" class="theme-btn btn-two w-100">
                                                    Price (High to Low)
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" class="btn-check active" name="active"
                                                    value="2" id="2" autocomplete="off">
                                                <label for="2" class="theme-btn btn-two w-100">
                                                    Price (Low to High)
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" class="btn-check active" name="active"
                                                    value="3" id="3" autocomplete="off">
                                                <label for="3" class="theme-btn btn-two w-100">
                                                    City
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" class="btn-check active" name="active"
                                                    value="4" id="4" autocomplete="off">
                                                <label for="4" class="theme-btn btn-two w-100">
                                                    Listing Date
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" class="btn-check active" name="active"
                                                    value="5" id="5" autocomplete="off">
                                                <label for="5" class="theme-btn btn-two w-100">
                                                    Listing Number
                                                </label>
                                            </div>
                                            <div>
                                                <input type="radio" class="btn-check active" name="active"
                                                    value="5" id="5" autocomplete="off">
                                                <label for="5" class="theme-btn btn-two w-100">
                                                    Listing Number
                                                </label>
                                            </div>

                                        </div>
                                        <button type="button" id="homeTypeButton"
                                            class="btn btn-block done_btn mt-4">Done
                                        </button>

                                    </div>
                                </div>
                            </div> --}}

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

                    <a href="javascript:void(0)" class="map_custom_btn">Map <i class="fas fa-map"></i></a>


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
                                                © 2023 ARIS360 All rights reserved. Programs, rates, program terms and
                                                conditions subject to change without notice. Other restrictions and
                                                limitations apply. Additionally, ARIS360 is a real estate company in
                                                Washington state only. Though consumers may search for a lender on
                                                <a href="https://www.tristarfinance.com"
                                                    target="_blank">www.tristarfinance.com</a>
                                                <br>All products are subject to credit and property approval.

                                                <!--© 2023 Aris 360. All rights reserved. All products are subject to credit and property approval. Programs, rates, program terms and conditions subject to change without notice. Other restrictions and limitations apply. Additionally, Aris 360 is a lead generation platform only. There are no lending only options, though consumers may search for a lender on <a href="Straightforwardlending.com">Straightforwardlending.com</a> or <a href="Aris360.com">Aris360</a>.-->

                                            </p>

                                        </div>
                                    </div>
                                    <div class="post-inner d-flex align-items-start mt-4">
                                        <div class="post" style="padding:5px;">
                                            <div class="post-thumb">
                                                <img data-src="{{ asset('public/assets/images/equal-housing-opportunity-logo.png') }}"
                                                    alt="" id="Myimg" class="rounded float-right lazy">
                                            </div>
                                        </div>
                                        <p style="font-size:13px" class="mt-4">ARIS 360 IS COMMITTED TO AND ABIDES BY
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
                                                <li><a href="{{ route('featured-properties') }}">Featured Property</a>
                                                </li>
                                                <li><a href="{{ route('find-an-agent') }}">Find an Agent in
                                                        Washington</a>
                                                </li>
                                                <li><a href="{{ route('blogs') }}">Our Blog</a></li>
                                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                <!--<li><a href="#">About Us</a></li>-->

                                                <!--<li><a href="#">Listing</a></li>-->

                                                <!--<li><a href="#">How It Works</a></li>-->

                                                <!--<li><a href="#">Our Services</a></li>-->


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
                                                    <p class="mb-0"><a
                                                            href="www.nmlsconsumeraccess.org">www.nmlsconsumeraccess.org</a>
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
                                    <img class="lazy" data-src="{{ asset('public/assets/images/realtor-logo.png') }}">
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
                    <!-- Start of aris360 Zendesk Widget script -->
                    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=34dd1433-3714-4c50-b0fc-7a6140ba66f4">
                    </script>
                    <!-- End of aris360 Zendesk Widget script -->
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
                                            <input type="text" class="area-range area-prop" name="field-name"
                                                readonly="" style="height:15px!important" />
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



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
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
                // $('.maxPrice').change(function() {

                // });
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

            let drawOnMapBtn = $("#drawOnMapBtn");
            drawOnMapBtn.click(function() {
                if ($(".drawOnMapActionBar").hasClass("active")) {
                    $(".drawOnMapActionBar").removeClass("active");

                } else {
                    $(".drawOnMapActionBar").addClass("active");
                }
            });

            $(".drawOnMapActionBarBtn").click(function() {
                if ($(".drawOnMapActionBar").hasClass("active")) {
                    $(".drawOnMapActionBar").removeClass("active");
                }
            });
        </script>
        <script type="text/javascript">
            var map;
            var markerCluster;

            function updateMarket(response, markers, markerCluster) {
                // Assuming response.data is the new data for your markers
                var newData = response.data;
                var newLocations = [];

                for (var i = 0; i < newData.length; i++) {
                    newLocations.push({
                        lat: parseFloat(newData[i].PropertyLatitude),
                        lng: parseFloat(newData[i].PropertyLongitude),
                        price: parseFloat(newData[i].PropetySellPrice)
                    });
                }

                // Clear old markers from the map
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setMap(null);
                }

                markers = []; // Clear the markers array

                // Add new markers to the map
                newLocations.forEach(function(location) {
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        label: {
                            text: `${Math.abs(location.price) >= 1000000
                                ? Math.abs((location.price / 1000000)).toLocaleString(undefined, {minimumFractionDigits: 0}) + "M"
                                : Math.abs(location.price) >= 1000
                                    ? Math.abs((location.price / 1000)).toLocaleString(undefined, {minimumFractionDigits: 0}) + "k"
                                    : Math.abs(location.price).toLocaleString()}`,
                            color: "#DE1E25",
                            fontWeight: "bold",
                            fontSize: "14px"
                        },
                        icon: {
                            url: '{{ asset('public/assets/images/marker_map.png') }}',
                            size: new google.maps.Size(60, 60),
                            scaledSize: new google.maps.Size(60, 60),
                        },
                    });

                    markers.push(marker); // Add the new marker to the markers array
                });

                // If you're using a marker clusterer, you'll also need to clear and recreate it
                markerCluster.clearMarkers();
                markerCluster.addMarkers(markers);
                // markerCluster.setIgnoreHidden(true);
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
                    // propertyAjaxCall(global_url);
                }
                if (home_address != "") {
                    global_data.address = home_address;
                    // propertyAjaxCall(global_url);
                }


                if (sectionName == "Premier Properties") {
                    global_data.home_type = 1;
                    // propertyAjaxCall(global_url);
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
                    propertyAjaxCall(global_url);
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
                    propertyAjaxCall(global_url);
                }

                //---------------- Bed & Bath Filter Code Ajax ----------------

                $("#bathButton").click(function() {

                    var numBed = $(".bed:checked").val();
                    var numBath = $(".bath:checked").val();

                    global_data.bed = numBed;
                    global_data.bath = numBath;
                    propertyAjaxCall(global_url);

                });

                //---------------- Price Range Filter Code Ajax ----------------

                $("#priceButton").click(function() {

                    // var [firstVal,secondVal] = $(".property-amount").val().split('-');
                    // var minPrice = firstVal.replace('$','');
                    // var maxPrice = secondVal.replace('$','');

                    // console.log("first")

                    var minPrice = $('#min-input').val().split(",").join("");
                    var maxPrice = $('#max-input').val().split(",").join("");



                    global_data.min = +minPrice;
                    global_data.max = +maxPrice;
                    propertyAjaxCall(global_url);


                });

                //---------------- Home Type Filter Code Ajax ----------------

                $("#homeTypeButton").click(function() {

                    var hometype = []; // New array
                    $(".home-type:checked").each(function() {
                        hometype.push(this.value);
                    });
                    global_data.home = hometype;

                    propertyAjaxCall(global_url);


                });

                //---------------- Advanced Search Filter Code Ajax ----------------


                // $('.publishStatus').change(function() {
                //     alert($(this).val());
                //     var value = $(this).val();
                //     global_data.publishStatus = value;
                //     propertyAjaxCall(global_url);
                // });
                $('.publish_status').change(function() {
                    $('.publish_status_wrapper').removeClass('active')
                    var value = $(this).val();

                    $('#sort_elem').text(value);
                    global_data.publishStatus = value;
                    clearMarkers();
                    if (global_data.publishStatus === 'Sold') {
                        const clusterStyles = [{
                            textColor: '#ffffff',
                            textSize: 12,
                            url: '{{ asset('public/assets/images/resource/m2.png') }}',
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
                            gridSize: 120,
                            maxZoom: 15,
                            styles: clusterStyles,
                        });
                        markerCluster.addMarkers(markers);
                        // markerCluster.setIgnoreHidden(true);
                        markerCluster.repaint();
                    } else {
                        const clusterStyles = [{
                            textColor: '#ffffff',
                            textSize: 12,
                            url: '{{ asset('public/assets/images/resource/m1.png') }}',
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
                            gridSize: 120,
                            maxZoom: 15,
                            styles: clusterStyles,
                        });
                        markerCluster.addMarkers(markers);
                        // markerCluster.setIgnoreHidden(true);
                        markerCluster.repaint();
                    }
                    propertyAjaxCall(global_url);
                });

                $('.rooms').change(function() {
                    var value = $(this).val();
                    global_data.bed = value;
                    propertyAjaxCall(global_url);
                });

                $('.baths').change(function() {
                    var value = $(this).val();
                    global_data.bath = value;
                    propertyAjaxCall(global_url);
                });

                $('.floors').change(function() {
                    var value = $(this).val();
                    global_data.floor = value;
                    propertyAjaxCall(global_url);
                });

                $('.parkings').change(function() {
                    var value = $(this).val();
                    global_data.parking = value;
                    propertyAjaxCall(global_url);
                });

                if ($('.area-range-slider').length) {

                    $(".area-range-slider").slider({

                        range: true,

                        min: 0,

                        max: 7500,

                        values: [100, 4000],

                        slide: function(event, ui) {

                            $("input.area-range").val(ui.values[0] + " - " + ui.values[1]);

                            global_data.min_area = ui.values[0];
                            global_data.max_area = ui.values[1];
                            propertyAjaxCall(global_url);

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
                    propertyAjaxCall(global_url);
                });

                //------------------------ Dynamic Function for Ajax Call ------------------

                function propertyAjaxCall(_url) {

                    //console.log(global_data)

                    $.ajax({
                        type: 'POST',
                        url: _url,
                        data: global_data,

                        beforeSend: function() {
                            var _html = `<div class="col-12 d-flex justify-content-center my-5  ">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
             </div>`

                            $('#searchResultProperty').html(_html);
                        },

                        success: function(response) {
                            var skzCategory = 'right';
                            testingSameer(response, skzCategory);
                            // console.log(global_data)

                            //myMap();

                            //console.log('actual response');
                            //console.log(response.mapData);
                            //var { markers, markerCluster } = initializeMap(properties, type);
                            updateMarkers(response.mapData);


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
            //ubaid code ends here
            var markers = [];
            var processingClusterClick = false; // Declare processingClusterClick globally
            var map;
            var markerCluster;
            var defaultZoom = 10;
            var minZoom = 9;

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
                        lng: -122.330401
                    },
                    mapId: "ebc94a9217e81a17",
                    mapTypeControl: false,

                });

                var currentZoom = map.getZoom();
                // console.log(currentZoom);
                // If the current zoom is less than the minZoom, reset the zoom to minZoom
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

                // Transit End
                // Amaneties
                let amenitiesLayer;
                let amenitiesLayerVisible = false;

                document.getElementById('amenities').addEventListener('click', function() {
                    let amenities = document.getElementById('amenities');
                    var businessLayer = map.get('businessLayer');
                    if (businessLayer) {
                        amenities.classList.add('active');
                        businessLayer.setMap(null); // Hide business locations
                        map.set('businessLayer', null);
                    } else {
                        amenities.classList.remove('active');
                        businessLayer = new google.maps.Data();
                        businessLayer.loadGeoJson('https://maps.googleapis.com/maps/api/js/GeoJSON.json');
                        businessLayer.setMap(map); // Show business locations
                        map.set('businessLayer', businessLayer);
                    }
                });
                // Amaneties End
                // Bike
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
                    locations.push({
                        lat: parseFloat(properties[i].PropertyLatitude),
                        lng: parseFloat(properties[i].PropertyLongitude),
                        price: parseFloat(properties[i].PropetySellPrice),
                        city: properties[i].CityName,
                        address: properties[i].PropertyAddress
                    });
                    // console.log(locations[0].address)
                }
                document.getElementById('changeMapTypeButton').addEventListener('click', function() {
                    var currentMapType = map.getMapTypeId();
                    let changeMapTypeButton = document.getElementById('changeMapTypeButton');
                    let changeMapTypeButton2 = document.getElementById('changeMapTypeButton2');
                    if (currentMapType === 'roadmap') {
                        changeMapTypeButton2.classList.remove('active')
                        changeMapTypeButton.classList.add('active')
                        map.setMapTypeId('satellite');
                        // Enable labels.
                        map.setStreetNames(true);
                    }
                });
                document.getElementById('changeMapTypeButton2').addEventListener('click', function() {
                    var currentMapType = map.getMapTypeId();
                    let changeMapTypeButton = document.getElementById('changeMapTypeButton');
                    let changeMapTypeButton2 = document.getElementById('changeMapTypeButton2');
                    if (currentMapType === 'satellite') {
                        map.setMapTypeId('roadmap');
                        changeMapTypeButton2.classList.add('active')
                        changeMapTypeButton.classList.remove('active')
                    }
                });

                var bounds = new google.maps.LatLngBounds();
                // console.log(bounds, 'bounds')
                map.fitBounds(bounds);
                markers = locations.map(function(location) {
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map,
                        label: {
                            text: `$${Math.abs(location.price) >= 1000000
                                ? Math.abs((location.price / 1000000)).toFixed(2).toLocaleString(undefined, {minimumFractionDigits: 0}) + "M"
                                : Math.abs(location.price) >= 1000
                                    ? Math.abs((location.price / 1000)).toFixed(0).toLocaleString(undefined, {minimumFractionDigits: 0}) + "K"
                                    : Math.abs(location.price).toLocaleString()}`,
                            color: "#DE1E25",
                            fontWeight: "bold",
                            fontSize: "14px"
                        },
                        icon: {
                            url: '{{ asset('public/assets/images/marker_map.png') }}',
                            size: new google.maps.Size(65, 65),
                            scaledSize: new google.maps.Size(65, 65),
                        },
                    });

                    bounds.extend(marker.getPosition());
                    map.fitBounds(bounds);
                    map.setCenter(bounds)
                    return marker;
                });

                // School
                // School
                document.getElementById('showSchool').addEventListener('click', function() {
                    let showSchool = document.getElementById('showSchool');
                    showSchool.classList.add('active')
                    const request = {
                        location: map.getCenter(),
                        radius: 1000, // Adjust the radius as needed
                        type: ['school'] // Use other types if required (e.g., university, college)
                    };

                    const service = new google.maps.places.PlacesService(map);
                    service.nearbySearch(request, callback);
                });

                function callback(results, status) {
                    if (status === google.maps.places.PlacesServiceStatus.OK) {
                        // Clear existing markers
                        clearMarkers();

                        // Create new markers for each school
                        for (let i = 0; i < results.length; i++) {
                            createMarker(results[i]);
                        }
                    }
                }

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



                // School End
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
                    gridSize: 120,
                    maxZoom: 15,
                    styles: clusterStyles,
                });


                function getPlaceId(urlParams) {
                    const zip = urlParams.get('zip');
                    global_data.zip = zip;
                    const geocoder = new google.maps.Geocoder();
                    const address = zip.length > 0 ? zip : locations[0].city;
                    const searchInput = document.getElementById("search");
                    searchInput.value = address;

                    const geocodeRequest = {
                        address: address,
                        componentRestrictions: {
                            country: 'US'
                        }
                    };

                    geocoder.geocode(geocodeRequest, (results, status) => {
                        if (status === google.maps.GeocoderStatus.OK) {
                            const placeId = results[0].place_id;
                            console.log(results, 'results');
                            //@ts-ignore
                            featureLayer = zip.length > 0 ? map.getFeatureLayer("POSTAL_CODE") : map.getFeatureLayer(
                                "LOCALITY");

                            // Define a style with purple fill and border.
                            //@ts-ignore
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

                            console.log(`Place ID for ${address}:`, placeId);
                        }
                    });
                }

                // function getPlaceId(urlParams)
                // {
                //     zip = urlParams.get('zip')
                //     global_data.zip = zip;
                //     const geocoder = new google.maps.Geocoder();
                //     const address = zip.length > 0 ? zip : locations[0].city;
                //     const searchInput = document.getElementById("search");
                //     searchInput.value = address;

                //     geocoder.geocode({
                //         address: address
                //     }, (results, status) => {
                //         const placeId = results[0].place_id;
                //         //@ts-ignore
                //         featureLayer = zip.length > 0 ? map.getFeatureLayer("POSTAL_CODE") : map.getFeatureLayer(
                //             "LOCALITY")

                //         // Define a style with purple fill and border.
                //         //@ts-ignore
                //         const featureStyleOptions = {
                //             strokeColor: "#DE1E25",
                //             strokeOpacity: 1.0,
                //             strokeWeight: 3.0,
                //             fillColor: "transparent",
                //             fillOpacity: 0.5,
                //         };

                //         // Apply the style to a single boundary.
                //         //@ts-ignore
                //         featureLayer.style = (options) => {
                //             if (options.feature.placeId == placeId) {
                //                 // Hana, HI
                //                 return featureStyleOptions;
                //             }
                //         };
                //         // console.log("Place ID for Seattle:", placeId);

                //     });
                // }

                // Call the function to retrieve the Place ID for Seattle
                const queryString = window.location.search;
                const urlParams = new URLSearchParams(queryString);
                if (urlParams.get('search')) {
                    getPlaceId(urlParams);
                }

                var processingClusterClick = false; // Flag to track cluster click processing state

                google.maps.event.addListener(markerCluster, 'clusterclick', function(cluster) {
                    // Check if cluster click processing is already in progress
                    if (processingClusterClick) {
                        return;
                    }

                    processingClusterClick = true;

                    // Get the cluster's center coordinates
                    var clusterCenter = cluster.getCenter();

                    // Pan the map to the cluster's center
                    map.panTo(clusterCenter);

                    // Wait for the pan animation to complete
                    google.maps.event.addListenerOnce(map, 'idle', function() {
                        // Zoom in
                        map.setZoom(map.getZoom() + 1);

                        // Get the updated bounds after zooming
                        var bounds = map.getBounds();
                        var southwest = bounds.getSouthWest();
                        var northeast = bounds.getNorthEast();
                        var zoomCoordinates = {
                            southwestLat: southwest.lat(),
                            southwestLng: southwest.lng(),
                            northeastLat: northeast.lat(),
                            northeastLng: northeast.lng()
                        };
                        global_data.zoomCoordinates = zoomCoordinates;

                        var markersInViewport = getMarkersInViewport();
                        var coordinatesInViewport = markersInViewport.map(function(marker) {
                            return marker.getPosition().toJSON();
                        });

                        disable();
                        $('#map-loader').show();

                        // Animate previous cluster markers to new positions
                        animatePreviousMarkers(cluster, clusterCenter, function() {
                            // After animation completion, make the AJAX request
                            $.ajax({
                                url: surl + '/search',
                                type: 'POST',
                                data: JSON.stringify(global_data),
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(response) {
                                    clearMarkers();
                                    var skzCategory = 'left';
                                    testingSameer(response, skzCategory);
                                    updateMarkers(response.mapData);
                                    enable();
                                    $('#map-loader').hide();
                                    processingClusterClick =
                                        false; // Set the flag to false after receiving the response
                                },
                                error: function(error) {
                                    console.log(error);
                                    enable();
                                    $('#map-loader').hide();
                                    processingClusterClick =
                                        false; // Set the flag to false even on error
                                }
                            });
                        });

                        $('.lazy').Lazy();
                    });
                });

                function animatePreviousMarkers(cluster, clusterCenter, callback) {
                    var previousMarkers = cluster.getMarkers();
                    var animationDuration = 1000; // Animation duration in milliseconds
                    var animationStart = null;

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
                            callback(); // Call the provided callback function after animation completion
                        } else {
                            requestAnimationFrame(animateStep);
                        }
                    }

                    requestAnimationFrame(animateStep);
                }

                // var processingClusterClick = false; // Flag to track cluster click processing state
                // google.maps.event.addListener(markerCluster, 'clusterclick', function(cluster) {
                //     disable();
                //     $('#map-loader').show();
                //     // Check if cluster click processing is already in progress
                //     if (processingClusterClick) {
                //         return;
                //     }

                //     processingClusterClick = true;

                //     // Get the cluster's center coordinates
                //     var clusterCenter = cluster.getCenter();

                //     // Pan the map to the cluster's center
                //     map.panTo(clusterCenter);

                //     // Wait for the pan animation to complete
                //     google.maps.event.addListenerOnce(map, 'idle', function() {
                //         // Zoom in
                //         map.setZoom(map.getZoom() + 1);

                //         // Get the updated bounds after zooming
                //         var bounds = map.getBounds();
                //         var southwest = bounds.getSouthWest();
                //         var northeast = bounds.getNorthEast();
                //         var zoomCoordinates = {
                //         southwestLat: southwest.lat(),
                //         southwestLng: southwest.lng(),
                //         northeastLat: northeast.lat(),
                //         northeastLng: northeast.lng()
                //         };
                //         global_data.zoomCoordinates = zoomCoordinates;

                //         var markersInViewport = getMarkersInViewport();
                //         // console.log(markersInViewport.length); // Logs the count of markers within the current viewport

                //         var coordinatesInViewport = markersInViewport.map(function(marker) {
                //         return marker.getPosition().toJSON();
                //         });

                //         // global_data.coordinates = coordinatesInViewport;


                //         // console.log("clusterClick");

                //         // Animate previous cluster markers to new positions
                //         animatePreviousMarkers(cluster, clusterCenter);

                //         setTimeout(() => {
                //         $.ajax({
                //             url: surl + '/search',
                //             type: 'POST',
                //             data: JSON.stringify(global_data),
                //             contentType: 'application/json; charset=utf-8',
                //             dataType: 'json',
                //             success: function(response) {
                //             clearMarkers();
                //             var skzCategory = 'left';
                //             testingSameer(response, skzCategory);
                //             updateMarkers(response.mapData);
                //             enable();
                //             $('#map-loader').hide();
                //             processingClusterClick = false;
                //             },
                //             error: function(error) {
                //             console.log(error);
                //             enable();
                //             $('#map-loader').hide();
                //             processingClusterClick = false;
                //             }
                //         });
                //         }, 100);

                //         $('.lazy').Lazy();
                //     });
                // });

                // function animatePreviousMarkers(cluster, clusterCenter) {
                //     var previousMarkers = cluster.getMarkers();
                //     var animationDuration = 1000; // Animation duration in milliseconds
                //     var animationStart = null;

                //     function animateStep(timestamp) {
                //         if (!animationStart) animationStart = timestamp;
                //             var progress = (timestamp - animationStart) / animationDuration;

                //             if (progress >= 1) {
                //             previousMarkers.forEach(function(marker) {
                //                 marker.setPosition(clusterCenter);
                //             });
                //             } else {
                //             previousMarkers.forEach(function(marker) {
                //                 var previousPosition = marker.getPosition();
                //                 var newPosition = google.maps.geometry.spherical.interpolate(previousPosition, clusterCenter, progress);
                //                 marker.setPosition(newPosition);
                //             });

                //             requestAnimationFrame(animateStep);
                //         }
                //     }

                //     requestAnimationFrame(animateStep);
                // }


                var sendLocationUpdate = debounce(function(bounds, markers) {
                    // console.log("sendLocationUpdate");
                    disable();
                    $('#map-loader').show();

                    var boundaryCoordinates = {};
                    boundaryCoordinates['southwestLat'] = bounds.getSouthWest().lat();
                    boundaryCoordinates['southwestLng'] = bounds.getSouthWest().lng();
                    boundaryCoordinates['northeastLat'] = bounds.getNorthEast().lat();
                    boundaryCoordinates['northeastLng'] = bounds.getNorthEast().lng();


                    global_data.zoomCoordinates = boundaryCoordinates
                    $.ajax({
                        url: surl + '/search',
                        type: 'POST',
                        data: JSON.stringify(global_data),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(response) {
                            clearMarkers();
                            var skzCategory = 'left';
                            testingSameer(response, skzCategory);
                            updateMarkers(response.mapData);
                            // console.log(response.pagination);
                            map.setOptions({
                                draggable: true,
                                scrollwheel: true
                            });
                            enable();
                            $('#map-loader').hide();

                        },
                        error: function(error) {
                            console.log(error);
                            enable();
                            $('#map-loader').hide();
                        }
                    });

                }, 500);



                // google.maps.event.addListener(map, 'bounds_changed', function() {
                //     var newBounds = map.getBounds();
                //     if (!isFirstLoad && !processingClusterClick) {
                //         // sendLocationUpdate(newBounds, markers);
                //     }

                //     isFirstLoad = false;
                //     $('.lazy').Lazy();
                // });

                let isFirstLoad = true;
                google.maps.event.addListener(map, 'idle', function() {
                    var center = map.getCenter();
                    var zoom = map.getZoom();
                    var newBounds = map.getBounds();
                    if (zoom >= 8) {
                        if (!isFirstLoad && !processingClusterClick) {
                            sendLocationUpdate(newBounds, markers);
                        }
                        // console.log("Ajax called on zoom change");
                    }
                    isFirstLoad = false;
                });
                return {
                    markers,
                    markerCluster
                };
            }

            var polygonCoordinates = [];
            var poly = null;
            var cancel = true;
            var path;

            function drawFreeHand() {
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
                });

                // Mouseup listener

                google.maps.event.addListenerOnce(map, 'mouseup', function(e) {
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

                    google.maps.event.clearListeners(map.getDiv(), 'mousedown');

                    enable();
                });

                return coordinates; // Return the polygon coordinates array
            }

            document.getElementById('Cancel').addEventListener('click', function() {
                $('#map-loader').show();
                cancel = true;
                clearDrawing();
                global_data.polygonCoordinates = null;
                var boundaryCoordinates = {};
                var bounds = map.getBounds();
                boundaryCoordinates['southwestLat'] = bounds.getSouthWest().lat();
                boundaryCoordinates['southwestLng'] = bounds.getSouthWest().lng();
                boundaryCoordinates['northeastLat'] = bounds.getNorthEast().lat();
                boundaryCoordinates['northeastLng'] = bounds.getNorthEast().lng();
                global_data.zoomCoordinates = boundaryCoordinates
                setTimeout(() => {
                    $.ajax({
                        url: surl + '/search',
                        type: 'POST',
                        data: JSON.stringify(global_data),
                        contentType: 'application/json; charset=utf-8',
                        dataType: 'json',
                        success: function(response) {
                            clearMarkers();
                            var skzCategory = 'left';
                            testingSameer(response, skzCategory);
                            updateMarkers(response.mapData);
                            // console.log(response.pagination);
                            $('#map-loader').hide();
                            enable();
                        },
                        error: function(error) {
                            console.log(error);
                            $('#map-loader').hide();
                            enable();
                        }
                    });
                }, 1000);
            });

            function clearDrawing() {
                if (poly) {
                    poly.setMap(null); // Remove the polyline or polygon from the map
                    poly = null; // Reset the poly variable
                    polygonCoordinates = [];
                }

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

                e.preventDefault();
                disable();
                cancel = !cancel;
                map.getDiv().addEventListener('mousedown', function(e) {
                    if (cancel == false) {
                        $('#map-loader').show();

                        polygonCoordinates = drawFreeHand();
                        global_data.polygonCoordinates = polygonCoordinates;
                        // Add the coordinates array to the global_data object
                        setTimeout(() => {
                            $.ajax({
                                url: surl + '/search',
                                type: 'POST',
                                data: JSON.stringify(global_data),
                                contentType: 'application/json; charset=utf-8',
                                dataType: 'json',
                                success: function(response) {
                                    clearMarkers();
                                    var skzCategory = 'left';
                                    testingSameer(response, skzCategory);
                                    updateMarkers(response.mapData);
                                    // console.log(response.pagination);
                                    $('#map-loader').hide();
                                    enable();
                                },
                                error: function(error) {
                                    console.log(error);
                                    $('#map-loader').hide();
                                    enable();
                                }
                            });
                        }, 2000);
                    }
                });
                if (cancel == true) {
                    $('#map-loader').show();
                    disable();
                    clearDrawing();
                    global_data.polygonCoordinates = null;
                    var boundaryCoordinates = {};
                    var bounds = map.getBounds();
                    boundaryCoordinates['southwestLat'] = bounds.getSouthWest().lat();
                    boundaryCoordinates['southwestLng'] = bounds.getSouthWest().lng();
                    boundaryCoordinates['northeastLat'] = bounds.getNorthEast().lat();
                    boundaryCoordinates['northeastLng'] = bounds.getNorthEast().lng();
                    global_data.zoomCoordinates = boundaryCoordinates
                    setTimeout(() => {
                        $.ajax({
                            url: surl + '/search',
                            type: 'POST',
                            data: JSON.stringify(global_data),
                            contentType: 'application/json; charset=utf-8',
                            dataType: 'json',
                            success: function(response) {
                                clearMarkers();
                                var skzCategory = 'left';
                                testingSameer(response, skzCategory);
                                updateMarkers(response.mapData);
                                // console.log(response.pagination);
                                $('#map-loader').hide();
                                enable();
                            },
                            error: function(error) {
                                console.log(error);
                                $('#map-loader').hide();
                                enable();
                            }
                        });
                    }, 1000);
                } else {
                    // console.log(cancel);
                }

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
        {{-- <script src="{{asset('public/form/dist/js/plugins/Bootstrap.min.js')}}"></script> --}}
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
        <script src="{{ asset('public/assets/js/form-script.js') }}"></script>
        {{--
<script ssrc="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
<script src="{{asset('public/form/dist/js/FormValidation.full.min.js')}}"></script>
{{-- <script src="{{asset('public/form/dist/js/plugins/Bootstrap.min.js')}}"></script> --}}
        {{-- <script src="{{asset('public/assets/js/form-script.js')}}"></script> --}}

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
<script src="{{asset('public/assets/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('public/assets/dist/js/plugins/Bootstrap3.min.js')}}"></script>

<script src="{{asset('public/assets/js/form-script.js')}}"></script> --}}





        <!-- main-js -->

        <script src="{{ asset('public/assets/js/script.js') }}"></script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=myMap"
            defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-marker-clusterer/1.0.0/markerclusterer.js"
            integrity="sha512-qk0kjj1Y3oBy4ohnPJwo/C3CYbYxBnlu0vWxvpMQkmt25s0eEsjmRSxsiyhVfxbJA26/u0LAdbNbtxq6vFF/8A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


        <!-- Login Modal -->
        <div class="modal signIn_Modal fade" id="signInModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="login-page">
                            <a href="{{ route('home') }}" class="Modal_logo">
                                <img class="lazy" data-src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}"
                                    alt="" style="padding-top:10px"></a>
                            <h4>Sign In</h4>
                            <small>Need an account? <a href="{{ url('/user/register') }}" class="">Signup
                                    Aris360</a></small>
                            <div class="social_login_opt">
                                <a href="javascript:(0)" class="google_btn">Continue with Google
                                    <img class="lazy" data-src="{{ url('public/assets/images/google.png') }}"></a>
                                <a href="javascript:(0)" class="facbook_btn">Continue with
                                    <img class="lazy" data-src="{{ url('public/assets/images/facebook.png') }}"></a>
                                <!--<a href="javascript:(0)" class="apple_btn">Continue with Apple <img src="{{ url('public/assets/images/apple-logo.png') }}"></a>-->
                            </div>
                            <div class="inner-box default-form">
                                {{ getSetFlashData() }}
                                <form method="POST" action="{{ route('login') }}" id="loginForm">
                                    @csrf
                                    <div class="row clearfix">

                                        <div class="col-12">
                                            <div class="field-input">
                                                <label>Email Address</label>
                                                <input type="email" name="email" placeholder="Enter Email Address"
                                                    id="emailForm">
                                                <input type="hidden" name="currenturl" value="{{ url()->full() }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="field-input">
                                                <label>Password</label>
                                                <div class="input-group-text input_eye_icon"><i class="fas fa-eye-slash"
                                                        id="eye"></i></div>
                                                <input type="password" id="password" name="password"
                                                    placeholder="Enter your password">
                                                <small class="frgt-pswd"><a href="javascript:void(0)"
                                                        class="frgt-pswd-txt" data-toggle="modal"
                                                        data-target="#forgotModal">forgot your
                                                        password</a></small>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-box-login">
                                                <button type="submit" class="theme-btn btn-one">Sign In</a>
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
        <div class="modal signIn_Modal fade" id="forgotModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="login-page">
                            <a href="{{ route('home') }}" class="Modal_logo">
                                <img class="lazy" data-src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}"
                                    alt="" style="padding-top:10px"></a>
                            <h4>Forgot Password</h4>
                            <div class="inner-box default-form">
                                {{ getSetFlashData() }}
                                <form method="POST" action="{{ url('/agent/auth') }}" id="submitForm2">
                                    @csrf
                                    <div class="row clearfix">

                                        <div class="col-12">
                                            <div class="field-input">
                                                <label>Email Address</label>
                                                <input type="email" name="email" placeholder="Enter Email Address"
                                                    id="emailForm">
                                                <input type="hidden" name="currenturl" value="{{ url()->full() }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-box-login">
                                                <a href="#" class="theme-btn btn-one">Submit</a>
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
        <div class="modal signIn_Modal fade" id="examplenewmemberModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
        <div class="modal fade" id="exampleModalcontact" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="agentDetail-askQuestion-sect">
                            <div class="estate-agent-form" style="padding: 0px 10px;">
                                <p class="contact-gentext mb-4 text-center">Give Your Detail</p>
                                <form id="contact_form" action="https://demo.wizardinnovations.us/aris-new/add-lead"
                                    method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token"
                                        value="XHFmpVfCRbOjIVbWNCbv3WliYfXCMPWMd39jAQw3">
                                    <div class="input_fields">
                                        <label for="">Name *</label>
                                        <input type="text" name="name" placeholder="Enter your name"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Email *</label>
                                        <input type="email" name="city" placeholder="Enter your Email"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Phone *</label>
                                        <input type="text" name="phone" placeholder="Enter your number"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Message *</label>
                                        <textarea name="question" placeholder="Enter Your Message" required=""></textarea>
                                    </div>
                                    <input type="hidden" name="agent_id" value="36">
                                    <input type="hidden" name="lead_type" value="buy">
                                    <div class="btn-box">
                                        <button type="submit" class="theme-btn btn-one">Send</button>
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
        <div class="modal fade" id="writeReviewModal" tabindex="-1" role="dialog"
            aria-labelledby="writeReviewModalLabel" aria-hidden="true">
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

                                    <input type="hidden" name="_token"
                                        value="XHFmpVfCRbOjIVbWNCbv3WliYfXCMPWMd39jAQw3">
                                    <div class="input_fields">
                                        <label for="">Review Heading *</label>
                                        <input type="text" name="name" placeholder="Enter your name"
                                            required="">
                                    </div>
                                    <div class="input_fields">
                                        <label for="">Message *</label>
                                        <textarea name="question" placeholder="Enter Your Message" required=""></textarea>
                                    </div>
                                    <input type="hidden" name="agent_id" value="36">
                                    <input type="hidden" name="lead_type" value="buy">
                                    <div class="btn-box">
                                        <button type="submit" class="theme-btn btn-one">Submit</button>
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


    {{-- <script>
        $(document).ready(function() {
            $('#search__toggler_btn').click(function() {
              alert('clicked')
            if ($('#search__toggler_wrapper').hasClass('active')) {
              // The active class is present, remove it
              $('#search__toggler_wrapper').removeClass('active');
              console.log('Active class is removed');
            } else {
              // The active class is not present, add it
              $('#search__toggler_wrapper').addClass('active');
              console.log('Active class is added');
            }
          });
        });
      </script> --}}
    <!-- main-js -->


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

        $("body").one('click', '.formShare', (function(e) {
            var property_id = $(this).data("text");
            var user_id = $(this).data("user");
            $('#shareSubmitButton').on('click', function() {
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
                        console.log("Success");
                    },
                    error: function(e) {
                        console.log("Failure");
                    }
                });
            });
        }));

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
                    // console.log(response)
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
        function testingSameer(response, skzCategory) {
            //console.log(response.mapData);
            if (
                response.pagination &&
                typeof response.pagination.to === 'number' &&
                response.pagination.to > 0 &&
                typeof response.pagination.total === 'number' &&
                response.pagination.total > 0
            ) {
                // Display the pagination data
                var paginationText = 'Showing ' + response.pagination.to + ' of ' + response.pagination.total;
                $('.pgssts').text(
                    paginationText); // assuming you have an HTML element with id "pagination" to display this data
            }
            properties = JSON.parse(response.mapData);
            type = 'category';
            //  if(skzCategory == 'right'){
            //     myMap();
            //  }
            // function myMap() {
            //     $('.lazy').Lazy();
            //     alert('working..');
            //     //initializeMap(mydunamicValue, randtype);
            // }

            var {
                data,
                links
            } = response.pagination;

            htmlSearch = "";
            var _paginate = "";

            if (data.length > 0) {
                $.each(data, function(key, value) {

                    var home_id = value.mlsstructure_types_id;
                    var home_type = "";

                    if (home_id == 1) {
                        home_type = "Premier Properties";
                    }
                    if (home_id == 2) {
                        home_type = "Single Family";
                    }
                    if (home_id == 3) {
                        home_type = "Multi Family";
                    }
                    if (home_id == 4) {
                        home_type = "Condominium";
                    }
                    if (home_id == 5) {
                        home_type = "Townhouse";
                    }
                    if (home_id == 6) {
                        home_type = "Land";
                    }
                    if (home_id == 7) {
                        home_type = "Other";
                    }

                    var id = value.id;

                    var url = '{{ route('home.property-detail', ':id') }}';
                    url = url.replace(':id', id);
                    var price = value.PropetySellPrice;
                    var newprice = new Intl.NumberFormat().format(price);

                    let image = value.s3buckettempurl;
                    // let result = image.replace('https://s3.amazonaws.com/mlsgrid',
                    //     "{{ URL('/public') }}");

                    htmlSearch += `
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="feature-block">
                                        <div class="feature-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                        <a class="image" href="${url}">
                                                            <figure class="image">
                                                                <img style="height: 250px; width:500px;" src="${image}" alt="">
                                                            </figure>
                                                        </a>


                                                    <span class="category">${value.PublishStatus}</span>

                                                </div>

                                                <div class="lower-content">
                                                    <div class="price-info custom_price_info">
                                                        <h4>$${newprice}</h4>
                                                        <div class="fav_and_share">
                                                        <div class="share_onlyIcon">
                                                            <ul class="other-option feat_fav pull-right clearfix">
                                                                @if (auth()->check())
                    <li>
                        <button id="shrBtnListed${value.id}"
                                                                            data-id="${value.id}}"
                                                                            data-text="${value.id}"
                                                                            data-user="{{ Auth::id() }}"
                                                                            href="javascript:;"
                                                                            data-toggle="modal"
                                                                            data-target="#shareModal"
                                                                            class="formShare">
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
                $('.pgssts').text(
                    emptypagination);
                htmlSearch += ` <div class="col-12 my-5">
                                <div class="text-center">
                                    <h4> No properties found </h4>
                                </div>
                            </div>`;
            }

            $.each(links, function(key, value) {

                _paginate += `<li class="page-item ${(value.active) ? 'active' : ''} ${(value.url) ? '' : 'disabled'} ">
                                            <a href="javascript:void(0)" class="page-link" data-href="${(value.url) ? value.url : ''}">
                                                ${value.label}
                                            </a>
                                        </li>`;
            });


            // myMap(); // here is the map working

            $('#searchResultProperty').html(htmlSearch);
            $('.aris_pagination').html(_paginate);
        }

        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });


        function updateMarkers(data) {
            data = JSON.parse(data);
            // Extract location data from response
            var locations = data.map(function(property) {
                return {
                    lat: parseFloat(property.PropertyLatitude),
                    lng: parseFloat(property.PropertyLongitude),
                    price: parseFloat(property.PropetySellPrice)
                };
            });

            // Clear existing markers from markerCluster
            markerCluster.clearMarkers();

            // Create new markers and add to markerCluster
            var markers = locations.map(function(location) {
                var marker = new google.maps.Marker({
                    position: location,
                    map: map,
                    label: {
                        text: `${Math.abs(location.price) >= 1000000
                            ? Math.abs((location.price / 1000000)).toLocaleString(undefined, {minimumFractionDigits: 0}) + "M"
                            : Math.abs(location.price) >= 1000
                                ? Math.abs((location.price / 1000)).toLocaleString(undefined, {minimumFractionDigits: 0}) + "k"
                                : Math.abs(location.price).toLocaleString()}`,
                        color: "#DE1E25",
                        fontWeight: "bold",
                        fontSize: "14px"
                    },
                    icon: {
                        url: '{{ asset('public/assets/images/marker_map.png') }}',
                        size: new google.maps.Size(50, 50),
                        scaledSize: new google.maps.Size(50, 50),
                    },
                });
                return marker;
            });

            markerCluster.addMarkers(markers);
            // markerCluster.setIgnoreHidden(true);
            markerCluster.repaint();
        }

        function clearMarkers() {
            // console.log(markers);
            for (let i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
            markers = [];
        }
    </script>

    <!--Here is my last comment-->
@endsection
