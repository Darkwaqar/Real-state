<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>Aris 360</title> --}}
    <!-- Fav Icon -->
    <link type="image/x-icon" href="{{ asset('public/assets/images/favicon.png') }}" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{ asset('public/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/nice-select.css') }}" rel="stylesheet">
    <link id="jssDefault" href="{{ asset('public/assets/css/color/theme-color.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css?version=178') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/form/dist/css/formValidation.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="{{ asset('public/assets/js/jquery.js') }}"></script>


    <meta name="robots" content="index">
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5GHXG3J');
    </script>
    <!-- End Google Tag Manager -->
</head>
<!-- page wrapper -->


<style>
    .singup_alert_modal {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        background: #000000a6;
        z-index: 99999;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        backdrop-filter: blur(2px);
        opacity: 0;
        display: none;
        padding: 30px
    }

    .singup_alert_modal .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: #ffff;
        border-radius: 5px;
        height: max-content;
        width: max-content;

    }

    .singup_alert_modal.open_modal {
        opacity: 1;
        display: flex;
    }

    .singup_alert_modal.open_modal .container {
        animation: animateModal 0.3s both;
    }

    .singup_alert_modal .close_btn {
        position: absolute;
        top: -20px;
        right: -20px;
        height: 40px;
        width: 40px;
        background: #de1e25;
        color: #fff;
        border-radius: 30px;
        box-shadow: 0 0 10px #5c5b5b;
    }

    .singup_alert_modal .logo_image {
        max-width: 200px;
        margin-bottom: 20px;
    }

    .singup_alert_modal .signup_btn {
        border-radius: 5px;
        display: none;
    }

    .singup_alert_modal .hide_lg {
        display: none
    }

    @keyframes animateModal {
        from {
            transform: translateY(-20px);
        }

        to {
            transform: translateY(0px);
        }
    }



    .bottom_fix {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #3c3c3c;
        z-index: 99999;
    }

    .bottom_fix .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 20px;
        border-radius: 5px 5px 0 0;
    }

    .bottom_fix .container * {
        color: #fff;
    }
</style>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GHXG3J" style="display:none;visibility:hidden"
            height="0" width="0"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php
    $home_route_checker = false;
    $home_loans_checker = false;
    if (Route::currentRouteName() == 'home' || Route::currentRouteName() == 'mainHome') {
        $home_route_checker = true;
    }
    if (Route::currentRouteName() == 'mortgage-rates' || Route::currentRouteName() == 'lender-directory' || Route::currentRouteName() == 'mortgage-calculator' || Route::currentRouteName() == 'refinance-calculator' || Route::currentRouteName() == 'affordability-calculator' || Route::currentRouteName() == 'amortization-calculator' || Route::currentRouteName() == 'agent-about-homeloan' || Route::currentRouteName() == 'mortgage-learning' || Route::currentRouteName() == 'lender-resource') {
        $home_loans_checker = true;
    }
    ?>
    @if ($home_route_checker)
        <style>
            .home_menu .navigation>li.dropdown>a span {
                color: white;
            }

            .aris_multiple_logo3 {
                display: none;
            }
        </style>
    @endif
    @if ($home_loans_checker)
        <style>
            .aris_multiple_logo3 {
                display: none;
            }
        </style>
    @endif
    <!-- main header -->
    <header class="main-header  @if ($home_route_checker) position-absolute shadow-none @endif">
        <section class="warning-section" id="warning-section">
            <div class="warning-box position-relative" id="warning-box">
                <h3
                    style="margin-top: 20px;
                    margin-left: 20px;
                    text-align: center;
                    font-weight: 600;">
                    Sorry, Aris 360 isn’t in this area yet.</h3>
                <div class="position-absolute" style="right: -19px;
                    top: -20px; cursor: pointer;">
                    <button class="close_btn"
                        style="height: 40px;
                        width: 40px;
                        background: #de1e25;
                        color: #fff;
                        border-radius: 30px;
                        box-shadow: 0 0 10px #5c5b5b;"
                        onclick="cancelSearchModal()">
                        <svg width="25" height="25" fill="none" stroke="#fff" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <p style="margin-top: 20px;margin-left: 20px;">We are expanding to new markets each month. Check back
                    soon for new listings!</p>
            </div>
        </section>
        <!-- header-lower -->
        <div class="header-lower">
            <div class="outer-box">
                <div class="main-box" id="nav_main_box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ url('/') }}">
                                @if ($home_route_checker)
                                    <img class="aris_multiple_logo1"
                                        src="{{ asset('/public/assets/images/Aris-Logonew2.png') }}" alt=""
                                        style="padding-top:10px">
                            </a>
                        @elseif ($home_loans_checker)
                            <img class="aris_multiple_logo2 "
                                src="{{ asset('/public/assets/images/Aris_logo_loan1.png') }}" alt=""></a>
                        @else
                            @endif
                            <img class="aris_multiple_logo3"
                                src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="menu_search_area" id="menu_search_area">
                        <div class="back_btn" onclick="onBack()">
                            <button class="fa fa-arrow-left" onclick="onCloseSearchModal()"></button>
                        </div>


                    </div>
                    <div class="search_container" class="hide_on_home" id="search_container_header">
                        <div class="peroperty_serach_wrapper" id="search_wrapper">
                            <div class="search_loading" id="search_loading" style="display: none">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                            <div class="input_wrapper position-relative">
                                <input id="search_city_input" name="search_city_input" type="text"
                                    autocomplete="off" onclick="onOpenSearchModal()" placeholder="Enter City or Zip">
                                <button class="theme-btn btn-one" id="search_button">
                                    <i class="fas fa-search"></i>
                                </button>
                                <div class="x-icon" id="search_cancel_icon"
                                    style="position: absolute;
                                display:none;
                                right: 15px;
                                top: 15px;
                                border: 1px solid #333;
                                border-radius: 50px;
                            }">
                                    <span id='search-placeholder-icon'><svg width="15" height="15"
                                            fill="none" stroke="#333" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 6 6 18"></path>
                                            <path d="m6 6 12 12"></path>
                                        </svg>
                                    </span>


                                </div>
                                <span class="search-placeholder" id='search-placeholder' style="display:none;">
                                </span>
                            </div>
                            <div class="property_search_modal" id="search_modal">
                                <div class="current_location_box" id="current_location_box"
                                    onclick="getCurrentLocation()">
                                    <span class="currentLocationIcon m-2">
                                        <svg width="23" height="23" fill="#de1e25" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3 9.738a.75.75 0 0 0 .472.709l7.2 2.88 2.881 7.202a.75.75 0 0 0 .697.472h.012a.752.752 0 0 0 .693-.494l6-16.5a.75.75 0 0 0-.961-.962l-16.5 6A.75.75 0 0 0 3 9.738Z">
                                            </path>
                                        </svg></span> Current Location
                                </div>
                                <div class="search_result_wrapper p-0" id="places-container">
                                </div>
                                <div class="search_result_wrapper p-0" id="school-container">

                                </div>

                            </div>

                            <script></script>

                        </div>
                    </div>

                    <div class="menu-area clearfix">
                        <div class="search_btn" id="search_btn">
                            <button class="fas fa-search" onclick="onSearch()"></button>
                        </div>
                        <div class="mobile-nav-toggler">
                            @if ($home_route_checker)
                                <i class="icon-bar" style="background-color:#fff!important;"></i>
                                <i class="icon-bar" style="background-color:#fff!important;"></i>
                                <i class="icon-bar" style="background-color:#fff!important;"></i>
                            @else
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            @endif
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light home_menu">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a class="headerNavItem"
                                            href="javascript:void(0);"><span>Buy</span></a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-xl-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Buying Options</h4>
                                                        </li>
                                                        <li><a class="headerNavLink"
                                                                href="{{ route('buy-with-aris') }}">Buy with
                                                                ARIS360</a></li>
                                                        <li><a class="headerNavLink"
                                                                href="{{ route('why-choose-aris') }}">Why choose
                                                                ARIS360</a></li>

                                                    </ul>
                                                </div>
                                                <div class="col-xl-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Buying Resources</h4>
                                                        </li>
                                                        <li><a class="headerNavLink"
                                                                href="{{ route('home-buying-guide') }}">Home buying
                                                                guide</a></li>
                                                        <li><a class="headerNavLink"
                                                                href="{{ route('first-time-homebuyer') }}">First time
                                                                home buyer</a></li>
                                                        <li><a class="headerNavLink"
                                                                href="{{ route('current-home-owner') }}">Current home
                                                                owner</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Washington Searches</h4>
                                                        </li>
                                                        <div class="washington_tab_header">
                                                            @php
                                                                $propertyTypes = categoriesCount();
                                                            @endphp
                                                            @forelse($propertyTypes  as $value)
                                                                <li class="option"
                                                                    data-value="{{ $value->StructureTypeName }}">
                                                                    <a
                                                                        href="{{ url('/all-properties?type=' . createSEOUrlWithPlus($value->StructureTypeName)) }}">
                                                                        {{ $value->StructureTypeName }}
                                                                    </a>
                                                                @empty
                                                                    No categories found
                                                            @endforelse
                                    </li>
                            </div>
                            </ul>
                    </div>
                </div>
            </div>
            </li>
            <li class="dropdown forum_dropdown">
                <a class="headerNavItem" href="{{ url('/all-properties?rent=Rent') }}"><span>Rent</span></a>
            </li>
            <li class="dropdown"><a class="headerNavItem" href="#"><span>Sell</span></a>
                <div class="megamenu">
                    <div class="row clearfix">
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>My Home</h4>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('my-home-worth') }}">Value360</a>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('home-values') }}">
                                        Increase Your Homes Value</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Aris Selling Options</h4>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('sell-with-aris') }}">Sell
                                        with
                                        ARIS360</a></li>
                                <li><a class="headerNavLink" href="{{ route('compare-my-option') }}">Comparative
                                        Analysis</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Selling Resources</h4>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('selling-guide') }}">Home
                                        selling
                                        guide</a></li>
                                <li>
                                    <a class="headerNavLink" href="{{ route('home-sale-proceeds-calculator') }}">Is
                                        Selling Worth It? </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown"><a class="headerNavItem" href="#"><span>Home Loans</span></a>
                <div class="megamenu">
                    <div class="row clearfix">
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Mortgages</h4>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('mortgage-rates') }}">Mortgage
                                        rates</a>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('lender-directory') }}">Lenders
                                        directory</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Calculators</h4>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('mortgage-calculator') }}">Mortgage
                                        calculator</a></li>
                                <li><a class="headerNavLink" href="{{ route('refinance-calculator') }}">Refinance
                                        calculator</a></li>
                                <li><a class="headerNavLink"
                                        href="{{ route('affordability-calculator') }}">Affordability
                                        calculator</a></li>
                                <li><a class="headerNavLink"
                                        href="{{ route('amortization-calculator') }}">Amortization
                                        calculator</a></li>
                                {{-- <li><a class="headerNavLink"
                                        href="{{ route('buyDown-calculator') }}">BuyDown Calculator</a></li> --}}
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Resources</h4>
                                </li>
                                <li><a class="headerNavLink" href="{{ route('agent-about-homeloan') }}">About
                                        ARIS360 Home Loans</a></li>
                                <li><a class="headerNavLink" href="{{ route('mortgage-learning') }}">Mortgage
                                        learning center</a></li>
                                <li><a class="headerNavLink" href="{{ route('lender-resource') }}">Lender
                                        resource center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown"><a class="headerNavItem" href="{{ route('real-estate-agent') }}"><span>ARIS360
                        Agents</span></a>
                <ul>
                    <li>
                        <a class="headerNavLink" href="{{ url('find-an-agent') }}">Find An ARIS360
                            Prime Agent</a>
                    </li>
                    <li><a class="headerNavLink" href="{{ route('real-estate') }}">Become an ARIS360
                            Prime Agent</a>
                    </li>
            </li>
            <li><a class="headerNavLink" href="{{ route('agent-resource-center') }}">Agent
                    Resource
                    Center</a></li>
            </ul>
            </li>
            <li class="dropdown">
                <a class="headerNavItem" href="#"><span>ARIS360 News</span></a>
                <ul>
                    <li><a class="headerNavLink" href="{{ route('aris-market-update') }}">Housing
                            Market Updates</a>
                    </li>
                    <li><a class="headerNavLink" href="{{ route('todays-mortgage-rates') }}">Present
                            Mortgage
                            Rates</a></li>
                    <li><a class="headerNavLink" href="{{ route('mortgage-or-buy') }}">Rent or Buy
                            Decision</a></li>
                    <li><a class="headerNavLink" href="{{ route('blog') }}">ARIS360 Blogs</a></li>
                    <!--<li><a href="{{ route('home-buying-guide') }}">Home Buying Guide</a></li>-->
                </ul>
            </li>

            <li class="dropdown forum_dropdown">
                <a class="headerNavItem forum-border" href="{{ route('forum.categories') }}"><span>Forum</span></a>
            </li>

            </ul>
        </div>
        </nav>
        </div>
        @if (isUserLoggedIn() && !getAdminId())
            <div class="noti_fication_wrapper">
                <a class="noti_fication_bell" href="javascript:void(0)">
                    <i class="fas fa-bell"></i>
                    <span class="noti_fication_detail">5</span>
                </a>
                <div class="notification-sect" style="display: none;">
                    <h5 class="prof_title">Notification</h5>
                    <div class="notifi_listing">
                        <ul>
                            <li>
                                <div class="user_img">
                                    <img class="img-fluid lazy"
                                        data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>2 min ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img class="img-fluid lazy"
                                        data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>22 min ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img class="img-fluid lazy"
                                        data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>2 hr ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img class="img-fluid lazy"
                                        data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>50 min ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img class="img-fluid lazy"
                                        data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>1 hr ago</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="user_signout user_signout1">
                <a class="theme-btn btn-one" href="{{ route('home.property-listing') }}"><span>+</span>List Your
                    Property</a>
                <a class="dashboard_signout">
                    <img class="lazy" id="userDpImage"
                        data-src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}">
                    <span class="arrow_down"><i class="fas fa-sort-down"></i></span>
                </a>
                <div class="dashBoard-signOut-sect">
                    <ul>
                        @if (isAgent())
                            @php
                                $dashboardUrl = url('/agent/dashboard');
                            @endphp
                        @else
                            @php
                                $dashboardUrl = url('/user/dashboard');
                            @endphp
                        @endif
                        <li>
                            <a href="{{ $dashboardUrl }}">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/agent/logout') }}">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="btn-box">
                <a class="theme-btn btn-one header-small-btn" href="{{ route('home.property-listing') }}"
                    style="padding: 4px 5px !important;">
                    <span>+</span>
                    {{--                    <img src="{{asset('public/images/iconWhite.png')}}" alt=""> --}}
                    List Your Property
                </a>
                <a class="theme-btn btn-one" href="{{ route('login') }}">Sign In </a>
            </div>
        @endif
        </div>
        </div>
        </div>
        <!--sticky Header-->
        <div class="sticky-header d-none">
            <div class="outer-box">
                <div class="main-box" id="nav_main_box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ url('/') }}">
                                @if ($home_route_checker)
                                    <img class="aris_multiple_logo1"
                                        src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt=""
                                        style="padding-top:10px">
                            </a>
                        @elseif ($home_loans_checker)
                            <img class="aris_multiple_logo2"
                                src="{{ asset('/public/assets/images/Aris_logo_loan1.png') }}" alt=""></a>
                        @else
                            @endif
                            <img class="aris_multiple_logo3"
                                src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt=""></a>
                        </figure>
                    </div>

                    {{-- <div id="search_container" class="search_container">
                        <div id="search_wrapper" class="peroperty_serach_wrapper">
                            <form action="{{ route('home.our-community') }}" method="GET">
                                <div class="input_wrapper">
                                    <input type="search" class="searchPropertyText" id="searchPropertyText"
                                        placeholder="Search by CITY or ZIP Code" onkeyup="codeAddress()"content_title
                                        onfocusout="codeAddress()" required="">
                                    <input type="hidden" name="search" placeholder="Find an agent in your area"
                                        id="locality">
                                    <input type="hidden" name="zip" placeholder="Find an agent in your area"
                                        id="postal_code">
                                    <button type='submit' id="search_button" class="theme-btn btn-one">
                                        <i class="fas fa-search"></i>
                                    </button>

                                </div>
                            </form>
                            <div id="search_modal" class="property_search_modal">
                                <div class="button_group">
                                    <button id="property_search_filter" class="btn_filter active_btn">For
                                        Sale</button>
                                    <button id="property_search_filter" class="btn_filter">For Rent</button>
                                    <button id="property_search_filter" class="btn_filter">Sold</button>
                                </div>

                                <div class="search_result_wrapper">
                                    <div
                                        style="border-bottom:solid 1px #cccccc; padding:0 0 15px 0; margin:0 0 15px 0;">
                                        <h1 class="result_title">Places</h1>
                                        <div class="serach_results">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <div class="search_result_content">
                                                <h1 class="content_title">Kent</h1>
                                                <p class="conten_sm">Kent, WA, USA</p>
                                            </div>
                                        </div>
                                        <div class="serach_results">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <div class="search_result_content">
                                                <h1 class="content_title">Kent</h1>
                                                <p class="conten_sm">Kent, WA, USA</p>
                                            </div>
                                        </div>
                                        <div class="serach_results">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <div class="search_result_content">
                                                <h1 class="content_title">Kent</h1>
                                                <p class="conten_sm">Kent, WA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="search_result_wrapper">
                                    <div
                                        style="border-bottom:solid 1px #cccccc; padding:0 0 15px 0; margin:0 0 15px 0;">
                                        <h1 class="result_title">Schools</h1>
                                        <div class="serach_results">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                            <div class="search_result_content">
                                                <h1 class="content_title">Kent</h1>
                                                <p class="conten_sm">Kent, WA, USA</p>
                                            </div>
                                        </div>
                                        <div class="serach_results">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                            <div class="search_result_content">
                                                <h1 class="content_title">Kent</h1>
                                                <p class="conten_sm">Kent, WA, USA</p>
                                            </div>
                                        </div>
                                        <div class="serach_results">
                                            <i class="fa fa-book" aria-hidden="true"></i>
                                            <div class="search_result_content">
                                                <h1 class="content_title">Kent</h1>
                                                <p class="conten_sm">Kent, WA, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    @if (isUserLoggedIn() && !getAdminId())
                        <div class="noti_fication_wrapper">
                            <a class="noti_fication_bell" href="javascript:void(0)">
                                <i class="fas fa-bell"></i>
                                <span class="noti_fication_detail">5</span>
                            </a>
                            <div class="notification-sect" style="display: none;">
                                <h5 class="prof_title">Notification</h5>
                                <div class="notifi_listing">
                                    <ul>
                                        <li>
                                            <div class="user_img">
                                                <img class="img-fluid lazy"
                                                    data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>2 min ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img class="img-fluid lazy" data-src="" alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>22 min ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img class="img-fluid"
                                                    src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>2 hr ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img class="img-fluid"
                                                    src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>50 min ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img class="img-fluid"
                                                    src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>1 hr ago</small>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a class="theme-btn btn-one" href="{{ route('home.property-listing') }}"><span>+</span>List
                            Your Property</a>
                        <div class="user_signout user_signout1">
                            <a class="dashboard_signout">
                                <img class="lazy"
                                    data-src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}">
                                <span class="arrow_down"><i class="fas fa-sort-down"></i></span>
                            </a>
                            <div class="dashBoard-signOut-sect">
                                <ul>
                                    @if (isAgent())
                                        @php
                                            $dashboardUrl = url('/agent/dashboard');
                                        @endphp
                                    @else
                                        @php
                                            $dashboardUrl = url('/user/dashboard');
                                        @endphp
                                    @endif
                                    <li>
                                        <a href="{{ $dashboardUrl }}">
                                            Dashboard
                                        </a>
                                    </li>
                                    @if (isAgent())
                                        <li>
                                            <a href="{{ url('/agent/profile') }}">Profile</a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{ url('/agent/logout') }}">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="btn-box">
                            <a class="theme-btn btn-one"
                                href=" {{ route('home.property-listing') }}"><span>+</span>List Your Property</a>
                            <a class="theme-btn btn-one" href="{{ route('login') }}">Sign In</a>
                        </div>
                    @endif
                </div>



            </div>
        </div>
    </header>
    <!-- main-header end -->
    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        <nav class="menu-box">
            <div class="nav-logo d-flex justify-content-center"><a class="mt-3" href="{{ url('/') }}">
                    <img class="img-fluid lazy" data-src="{{ asset('public/assets/images/Aris-Logonew1.png') }}"
                        title="" alt=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8339661976">+(833) 966-1976</a></li>
                    <li><a href="mailto:info@example.com">info@aris360.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
            @if (!isUserLoggedIn())
                <div class="btn-box">
                    <a class="theme-btn btn-one" href=" {{ route('home.property-listing') }}"><span>+</span>List Your
                        Property</a>
                    <a class="theme-btn btn-one mobile_signin google-signin" href="{{ route('login') }}">Sign In</a>
                </div>
            @endif
        </nav>
    </div>

    @if (!auth()->check())
        <section class="singup_alert_modal" id="singup_alert_modal">
            <div class="container">
                <button class="close_btn" onclick="onCloseModal('singup_alert_modal')"><i
                        class="fa fa-times"></i></button>
                {{-- <div class="signIn_Modal signIn_Page hide_sm mt-0 mb-0">
                    <div class="login-page">
                        <a class="Modal_logo" href="{{ route('home') }}">
                            <img class="logo_image" src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}"
                                alt=""></a>
                        <h4 class="signupHeading">Create my ARIS360 Account</h4>
                        <p class="para mb-1">
                            Join us for exciting listings and expert advice. We're here to make your real estate dream a
                            reality.
                        </p>
                        <div class="btn-box-login signUpBtnBox">
                            <a href="{{ url('/user/register') }}" type="submit"
                                class="theme-btn btn-one  google-signup">Sign Up Now
                            </a>
                        </div>
                    </div>
                </div> --}}

                <div class="signIn_Modal signIn_Page mt-2 mb-0">

                    <div class="login-page">
                        <a class="Modal_logo" href="{{ route('home') }}">
                            <img class="logo_image" src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}"
                                alt=""></a>
                        <div class="social_login_opt">
                            <a class="google_btn" href="{{ route('login.google') }}">Continue with <img
                                    src="{{ asset('public/assets/images/google.png') }}"></a>
                            {{-- <a href="{{ route('facebook') }}" class="facbook_btn">Continue with <img
                                    src="public/assets/images/facebook.png"></a> --}}
                            <!--<a class="apple_btn" href="javascript:(0)">Continue with Apple <img src="public/assets/images/apple-logo.png"></a>-->
                        </div>
                        <div class="inner-box default-form">

                            <form id="loginForm" method="POST" action="{{ route('userLogin') }}">
                                @csrf
                                <input name="" type="hidden" value="">
                                <div class="row clearfix">
                                    <div class="col-12">
                                        <div class="field-input">
                                            <label>Email Address</label>
                                            <input class="form-control @error('email') is-invalid @enderror"
                                                id="email" id="emailForm" name="email" type="email"
                                                placeholder="Enter Email Address">
                                            <input name="currenturl" type="hidden" value="">
                                        </div>
                                        <!-- @error('email')
    <span class="invalid-feedbackx" role="alert">
                                                                                                                        <strong>{{ $message }}</strong>
                                                                                                                        </span>
@enderror -->

                                        @error('email')
                                            <span class="red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="field-input">
                                            <label>Password</label>
                                            <div class="input-group-text input_eye_icon"><i class="fas fa-eye-slash"
                                                    id="regeye"></i></div>
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                id="regpassword" name="password" type="password"
                                                placeholder="Enter your password" autocomplete="current-password">
                                            <small class="frgt-pswd">
                                                @if (Route::has('password.request'))
                                                    <a class="frgt-pswd-txt" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </small>
                                        </div>
                                        <!-- @error('password')
    <span class="invalid-feedbackx" role="alert">
                                                                                                                        <strong>{{ $message }}</strong>
                                                                                                                </span>
@enderror -->

                                        @error('password')
                                            <span class="red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div id="loginMessage"></div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="remember" name="remember"
                                                type="checkbox" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label p-0" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="alert_form_actions">
                                            <button class="theme-btn btn-one" id="submitBtn" type="submit">Sign In
                                            </button>
                                            <a class="theme-btn btn-one" type="submit"
                                                href="{{ url('user/register') }}">Sign Up Now
                                            </a>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="col-12 mt-3">
                                        <p class="para">By Signing in you agree to ARIS360 <a
                                                href="{{ 'terms-of-use' }}">Terms</a> and <a
                                                href="{{ 'homes-privacy-notice' }}">Privacy</a>
                                        </p>

                                    </div>
                                </div>
                            </form>
                            {{-- <div id="errorMessage" class="red" style="display: none;"></div> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section>
    @endif
    @if (!auth()->check())
        <section class="bottom_fix" id="bottom_fix_alert" style="display:none;">
            <div class="container">
                <p class="mb-4">
                    Join us for exciting listings and expert advice. We're here to make your real estate dream a
                    reality.
                </p>
                <div class="d-flex">
                    <a class="theme-btn btn-one mr-3" type="submit"
                        href="https://www.aris360.com/user/register">Sign Up
                        Now
                    </a>
                    <a class="theme-btn btn-one" type="submit" href="https://www.aris360.com/login">Sign In</a>
                </div>
            </div>
        </section>
    @endif

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent the form from submitting

            var form = this;

            // Perform an AJAX request to submit the form
            fetch(form.action, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        // Successful submission
                        // You can redirect or show a success message here
                        window.location.reload();
                    } else if (response.status === 419) {
                        // Token mismatch
                        // document.getElementById('errorMessage').innerText = 'Token mismatch. Please try again.';
                        // document.getElementById('errorMessage').style.display = 'block';
                    } else {
                        // Other error handling
                        console.error('An error occurred:', response);
                    }
                })
                .catch(error => {
                    console.error('An error occurred:', error);
                });
        });
    </script>

    <script>
        let _path_name = window.location.href.split('/');

        console.log(_path_name[_path_name.length - 1])
        if (_path_name[_path_name.length - 1] === 'home' || _path_name[_path_name.length - 1] === '' || _path_name[
                _path_name.length -
                1] === 'register' || _path_name[_path_name.length - 1] === 'dashboard') {
            document.getElementById('search_container_header').remove();
            document.getElementById('search_btn').remove();
        }

        const cancelSearchModal = () => {
            document.getElementById('warning-section').style = 'display : none';
        }
        $(document).ready(function() {
            $('#loginForm').submit(function() {
                //event.preventDefault(); // Prevent the default form submission

                var formData = $(this).serialize(); // Serialize form data
                formData += '&_token=' + $('meta[name="csrf-token"]').attr('content'); // Add CSRF token
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: formData,
                    success: function(response) {
                        $('#loginMessage').removeClass('red').addClass('green').text(response
                            .message);
                        $('#singup_alert_modal').hide();

                    },
                    error: function(xhr, status, error) {
                        $('#loginMessage').removeClass('green').addClass('red').text(xhr
                            .responseJSON.message);
                    }
                });
            });
        });



        let modalCloseCount = 0;
        const onCloseModal = (elem) => {
            let modal = document.getElementById(elem);
            modal.classList.remove('open_modal');
            // modalCloseCount = modalCloseCount + 1

            // let timer = setTimeout(() => {
            //     onOpenModal('singup_alert_modal')
            //     clearTimeout(timer)
            // }, 6000)

            // if (modalCloseCount > 0) {
            document.getElementById('bottom_fix_alert').style.display = "block"
            // }
        }

        const onOpenModal = (elem) => {
            let modal = document.getElementById(elem);
            if (modalCloseCount === 0) {
                console.log(modalCloseCount)
                modal.classList.add('open_modal');
            }
        }

        $(document).ready(() => {

            let isOpen = window.location.pathname.includes('login') || window.location.pathname.includes(
                'user/register') || window.location.pathname.includes('register')

            console.log(modalCloseCount)

            if (!isOpen) {

                let timer;
                if (modalCloseCount < 1) {
                    console.log(modalCloseCount)
                    timer = setTimeout(() => {
                        onOpenModal('singup_alert_modal')
                        clearTimeout(timer)
                    }, 5000)
                } else {
                    clearTimeout(timer)
                }
            }


        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <!-- End Mobile Menu -->
