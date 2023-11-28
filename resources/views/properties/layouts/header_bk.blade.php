<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    {{-- <title>Aris 360</title> --}}
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('public/assets/images/favicon.png') }}" type="image/x-icon">
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
    <link href="{{ asset('public/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css?version=178') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('public/form/dist/css/formValidation.min.css') }}" rel="stylesheet">
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

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GHXG3J" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
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
    <header class="main-header @if ($home_route_checker) position-absolute shadow-none @endif">
        <!-- header-lower -->
        <div class="header-lower">
            <div class="outer-box">
                <div id="nav_main_box" class="main-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ url('/') }}">
                                @if ($home_route_checker)
                                    <img src="{{ asset('/public/assets/images/Aris-Logonew2.png') }}"
                                        class="aris_multiple_logo1" alt="" style="padding-top:10px">
                            </a>
                        @elseif ($home_loans_checker)
                            <img src="{{ asset('/public/assets/images/Aris_logo_loan1.png') }}"
                                class="aris_multiple_logo2" alt=""></a>
                        @else
                            @endif
                            <img class="aris_multiple_logo3"
                                src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div id="menu_search_area" class="menu_search_area">
                        <div onclick="onBack()" class="back_btn">
                            <button class="fa fa-arrow-left" onclick="onCloseSearchModal()"></button>
                        </div>
                        <div id="search_container_mobile" class="search_container for_mobile">
                            <div id="search_wrapper" class="peroperty_serach_wrapper">
                                <div class="input_wrapper">
                                    <input onclick="onOpenSearchModal()" placeholder="Enter City or Zip" type="text">
                                    <button id="search_button" class="theme-btn btn-one">
                                        <i class="fas fa-search"></i>
                                    </button>

                                </div>
                                <div id="search_modal" class="property_search_modal">
                                    <div class="button_group">
                                        <button id="property_search_filter" class="btn_filter active_btn">For Sale</button>
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
                        </div>

                    </div>
                    <div id="search_container" class="search_container">
                        <div id="search_wrapper" class="peroperty_serach_wrapper">
                            <form action="{{ route('home.our-community') }}" method="GET">
                            <div class="input_wrapper">
                                <input type="search" class="searchPropertyText" id="searchPropertyText"
                                    placeholder="Search by CITY or ZIP Code" onkeyup="codeAddress()"
                                    onfocusout="codeAddress()" required="">
                                    <input type="hidden" name="search"
                                    placeholder="Find an agent in your area"
                                    id="locality">
                             <input type="hidden" name="zip"
                                    placeholder="Find an agent in your area"
                                    id="postal_code">
                                <button type='submit' id="search_button" class="theme-btn btn-one">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>
                        </form>
                            <div id="search_modal" class="property_search_modal">
                                <div class="button_group">
                                    <button id="property_search_filter" class="btn_filter active_btn">For Sale</button>
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
                    </div>

                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div id="search_btn" class="search_btn">
                            <button onclick="onSearch()" class="fas fa-search"></button>
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
                                    {{-- {{ route('featured-properties') }} --}}
                                    <li class="dropdown"><a href="{{ url('/all-properties') }}"
                                            class="headerNavItem"><span>Buy</span></a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-xl-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Buying Options</h4>
                                                        </li>
                                                        <li><a href="{{ route('buy-with-aris') }}"
                                                                class="headerNavLink">Buy with
                                                                ARIS360</a></li>
                                                        <li><a href="{{ route('why-choose-aris') }}"
                                                                class="headerNavLink">Why choose ARIS360</a></li>
                                                        <li><a href="{{ url('/all-properties') }}"
                                                                class="headerNavLink">Listings - For Sale</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-xl-4 column">
                                                    <ul>
                                                        <li>
                                                            <h4>Buying Resources</h4>
                                                        </li>
                                                        <li><a href="{{ route('home-buying-guide') }}"
                                                                class="headerNavLink">Home buying
                                                                guide</a></li>
                                                        <li><a href="{{ route('first-time-homebuyer') }}"
                                                                class="headerNavLink">First time home buyer</a></li>
                                                        <li><a href="{{ route('current-home-owner') }}"
                                                                class="headerNavLink">Current home owner</a></li>
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
                                                                <li data-value="{{ $value->StructureTypeName }}"
                                                                    class="option">
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
                <a href="{{ route('rent') }}" class="headerNavItem"><span>Rent</span></a>
            </li>
            <li class="dropdown"><a href="#" class="headerNavItem"><span>Sell</span></a>
                <div class="megamenu">
                    <div class="row clearfix">
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>My Home</h4>
                                </li>
                                <li><a href="{{ route('my-home-worth') }}" class="headerNavLink">Value360</a>
                                </li>
                                <li><a href="{{ route('home-values') }}" class="headerNavLink">
                                        Increase Your Homes Value</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Aris Selling Options</h4>
                                </li>
                                <li><a href="{{ route('sell-with-aris') }}" class="headerNavLink">Sell
                                        with
                                        ARIS360</a></li>
                                {{-- <li>
                                                        <a href="{{ route('real-estate-agent') }}" class="headerNavLink">ARIS360
                                                            Prime</a>
                                                    </li> --}}
                                <li><a href="{{ route('compare-my-option') }}" class="headerNavLink">Comparative
                                        Analysis</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Selling Resources</h4>
                                </li>
                                <li><a href="{{ route('selling-guide') }}" class="headerNavLink">Home
                                        selling
                                        guide</a></li>
                                <li>
                                    <a href="{{ route('home-sale-proceeds-calculator') }}" class="headerNavLink">Is
                                        Selling Worth It? </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown"><a href="#" class="headerNavItem"><span>Home Loans</span></a>
                <div class="megamenu">
                    <div class="row clearfix">
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Mortgages</h4>
                                </li>
                                <li><a href="{{ route('mortgage-rates') }}" class="headerNavLink">Mortgage
                                        rates</a>
                                </li>
                                <li><a href="{{ route('lender-directory') }}" class="headerNavLink">Lenders
                                        directory</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Calculators</h4>
                                </li>
                                <li><a href="{{ route('mortgage-calculator') }}" class="headerNavLink">Mortgage
                                        calculator</a></li>
                                <li><a href="{{ route('refinance-calculator') }}" class="headerNavLink">Refinance
                                        calculator</a></li>
                                <li><a href="{{ route('affordability-calculator') }}"
                                        class="headerNavLink">Affordability
                                        calculator</a></li>
                                <li><a href="{{ route('amortization-calculator') }}"
                                        class="headerNavLink">Amortization
                                        calculator</a></li>
                            </ul>
                        </div>
                        <div class="col-xl-4 column">
                            <ul>
                                <li>
                                    <h4>Resources</h4>
                                </li>
                                <li><a href="{{ route('agent-about-homeloan') }}" class="headerNavLink">About
                                        ARIS360 Home Loans</a></li>
                                <li><a href="{{ route('mortgage-learning') }}" class="headerNavLink">Mortgage
                                        learning center</a></li>
                                <li><a href="{{ route('lender-resource') }}" class="headerNavLink">Lender
                                        resource center</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="dropdown"><a href="{{ route('real-estate-agent') }}" class="headerNavItem"><span>ARIS360
                        Agents</span></a>
                <ul>
                    <li>
                        <a href="{{ route('find-an-agent') }}" class="headerNavLink">Find An ARIS360
                            Prime Agent</a>
                    </li>
                    <li><a href="{{ route('real-estate') }}" class="headerNavLink">Become an ARIS360
                            Prime Agent</a>
                    </li>
            </li>
            <li><a href="{{ route('agent-resource-center') }}" class="headerNavLink">Agent
                    Resource
                    Center</a></li>
            </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="headerNavItem"><span>ARIS360 News</span></a>
                <ul>
                    <li><a href="{{ route('aris-market-update') }}" class="headerNavLink">Housing
                            Market Updates</a>
                    </li>
                    <li><a href="{{ route('todays-mortgage-rates') }}" class="headerNavLink">Present
                            Mortgage
                            Rates</a></li>
                    <li><a href="{{ route('mortgage-or-buy') }}" class="headerNavLink">Rent or Buy
                            Decision</a></li>
                    <li><a href="{{ route('blog') }}" class="headerNavLink">ARIS360 Blogs</a></li>
                    <!--<li><a href="{{ route('home-buying-guide') }}">Home Buying Guide</a></li>-->
                </ul>
            </li>
            <li class="dropdown forum_dropdown">
                <a href="{{ route('forum') }}" class="headerNavItem"><span>Forum</span></a>
            </li>
            </ul>
        </div>
        </nav>
        </div>
        @if (isUserLoggedIn() && !getAdminId())
            <div class="noti_fication_wrapper">
                <a href="javascript:void(0)" class="noti_fication_bell">
                    <i class="fas fa-bell"></i>
                    <span class="noti_fication_detail">5</span>
                </a>
                <div class="notification-sect" style="display: none;">
                    <h5 class="prof_title">Notification</h5>
                    <div class="notifi_listing">
                        <ul>
                            <li>
                                <div class="user_img">
                                    <img data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        class="img-fluid lazy" alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>2 min ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        class="img-fluid lazy" alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>22 min ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        class="img-fluid lazy" alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>2 hr ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        class="img-fluid lazy" alt="">
                                </div>
                                <div class="user_detail_sect">
                                    <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                    <small>50 min ago</small>
                                </div>
                            </li>
                            <li>
                                <div class="user_img">
                                    <img data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                        class="img-fluid lazy" alt="">
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
                <a href="{{ route('home.property-listing') }}" class="theme-btn btn-one"><span>+</span>List Your
                    Property</a>
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
                <a href="{{ route('home.property-listing') }}" class="theme-btn btn-one">
                    <span>+</span>
                    {{--                    <img src="{{asset('public/images/iconWhite.png')}}" alt=""> --}}
                    List Your Property
                </a>
                <a href="{{ route('login') }}" class="theme-btn btn-one">Sign In </a>
            </div>
        @endif
        </div>
        </div>
        </div>
        <!--sticky Header-->
        <div class="sticky-header">
            <div class="outer-box">
                <div id="nav_main_box" class="main-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ url('/') }}">
                                @if ($home_route_checker)
                                    <img src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}"
                                        class="aris_multiple_logo1" alt="" style="padding-top:10px">
                            </a>
                        @elseif ($home_loans_checker)
                            <img src="{{ asset('/public/assets/images/Aris_logo_loan1.png') }}"
                                class="aris_multiple_logo2" alt=""></a>
                        @else
                            @endif
                            <img class="aris_multiple_logo3"
                                src="{{ asset('/public/assets/images/Aris-Logonew1.png') }}" alt=""></a>
                        </figure>
                    </div>
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    @if (isUserLoggedIn() && !getAdminId())
                        <div class="noti_fication_wrapper">
                            <a href="javascript:void(0)" class="noti_fication_bell">
                                <i class="fas fa-bell"></i>
                                <span class="noti_fication_detail">5</span>
                            </a>
                            <div class="notification-sect" style="display: none;">
                                <h5 class="prof_title">Notification</h5>
                                <div class="notifi_listing">
                                    <ul>
                                        <li>
                                            <div class="user_img">
                                                <img data-src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    class="img-fluid lazy" alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>2 min ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img data-src="" class="img-fluid lazy" alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>22 min ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>2 hr ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                            <div class="user_detail_sect">
                                                <p class="paragraph">Roita Roa joined as aris 360 buyer agent.</p>
                                                <small>50 min ago</small>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user_img">
                                                <img src="{{ asset('public/assets/images/agents/toprated-agent1.jpg') }}"
                                                    class="img-fluid" alt="">
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
                        <a href="{{ route('home.property-listing') }}" class="theme-btn btn-one"><span>+</span>List
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
                            <a href=" {{ route('home.property-listing') }}"
                                class="theme-btn btn-one"><span>+</span>List Your Property</a>
                            <a href="{{ route('login') }}" class="theme-btn btn-one">Sign In</a>
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
            <div class="nav-logo d-flex justify-content-center"><a href="{{ url('/') }}" class="mt-3">
                    <img data-src="{{ asset('public/assets/images/Aris-Logonew1.png') }}" class="img-fluid lazy"
                        alt="" title=""></a></div>
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
                    <a href=" {{ route('home.property-listing') }}" class="theme-btn btn-one"><span>+</span>List Your
                        Property</a>
                    <a href="{{ route('login') }}" class="theme-btn btn-one mobile_signin">Sign In</a>
                </div>
            @endif
        </nav>
    </div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&libraries=places&callback=initialize"></script>
    <script>
         //Search
         function initialize() {
                initAutocomplete();
            }
            var autocomplete;
            var search1 = document.getElementById('searchPropertyText');
            function initAutocomplete() {
                autocomplete = new google.maps.places.Autocomplete(
                    /** @type {!HTMLInputElement} */
                    (search1), {
                        types: ['geocode'],
                        componentRestrictions: {
                        country: 'US'
                    }
                    });
            }
            function codeAddress() {
                var geocoder, map, address;
                var address = search1.value;
                var componentForm = {
                    locality: 'long_name',
                    postal_code: 'short_name',
                };
                geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    'address': address
                }, function (results, status) {
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

        if (pathName[pathName.length - 1] === '' || pathName[pathName.length - 1] === 'home' ) {

            document.getElementById('search_container').remove();
            document.getElementById('search_btn').remove();
        }

        let searchWrapper = document.getElementById('search_wrapper');
        let searchModal = document.getElementById('search_modal');

        function onOpenSearchModal() {

            searchWrapper.classList.add('open');

        }

        function handleClickOutside(event) {
            if (
                searchWrapper.classList.contains('open') &&
                !searchWrapper.contains(event.target) &&
                !searchModal.contains(event.target)
            ) {
                searchWrapper.classList.remove('open');
            }
        }
        document.addEventListener('click', handleClickOutside);

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
            let mainBox = document.getElementById('menu_search_area')
            console.log(mainBox)
            mainBox.style.display = 'flex';
        }
        function onBack() {
            let mainBox = document.getElementById('menu_search_area')
            console.log(mainBox)
            mainBox.style.display = 'none';
        }
    </script>

    <!-- End Mobile Menu -->
