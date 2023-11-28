<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <title>Aris 360</title>



    <!-- Fav Icon -->

    <link rel="icon" href="{{asset('public/assets/images/favicon.png')}}" type="image/x-icon">



    <!-- Google Fonts -->

    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    <!-- Stylesheets -->

    <link href="{{asset('public/assets/css/font-awesome-all.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/flaticon.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/owl.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

    <link href="{{asset('public/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">


    <link href="{{asset('public/assets/css/animate.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/jquery-ui.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/nice-select.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">

    <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/responsive.css')}}" rel="stylesheet">


    <script src="{{asset('public/assets/js/jquery.js')}}"></script>



</head>





<!-- page wrapper -->

<body>



    <div class="boxed_wrapper">





        <!-- preloader -->

        <div class="loader-wrap">

            <div class="preloader">

                <div class="preloader-close"><i class="far fa-times"></i></div>

                <div id="handle-preloader" class="handle-preloader">

                    <div class="animation-preloader">

                        <div class="spinner"></div>

                        <!--<img class="image_loader" src="{{ asset('/public/assets/images/aris-logo-red1.png') }}" />-->
                        <img class="image_loader" src="{{ asset('/public/assets/images/aris-home-red-logo.png') }}" />

                        <!--<div class="txt-loading">-->

                        <!--    <span data-text-preloader="A" class="letters-loading">-->

                        <!--        A-->

                        <!--    </span>-->

                        <!--    <span data-text-preloader="R" class="letters-loading">-->

                        <!--        R-->

                        <!--    </span>-->

                        <!--    <span data-text-preloader="I" class="letters-loading">-->

                        <!--        I-->

                        <!--    </span>-->

                        <!--    <span data-text-preloader="S" class="letters-loading">-->

                        <!--        S-->

                        <!--    </span>-->

                        <!--</div>-->

                    </div>

                </div>

            </div>

        </div>

        <!-- preloader end -->


        <?php
            $home_route_checker = false;
            if( Route::currentRouteName() == 'index' || Route::currentRouteName() == 'home' ){
                $home_route_checker = true;
            }
        ?>

        @if($home_route_checker)
            <style>
                .home_menu .navigation > li.dropdown > a span{
                    color: white;
                }
            </style>
        @endif

        <!-- main header -->

        <header class="main-header @if($home_route_checker) position-absolute shadow-none @endif">

            <!-- header-lower -->

            <div class="header-lower">

                <div class="outer-box">

                    <div class="main-box">

                        <div class="logo-box">

                            <figure class="logo"><a href="{{ route('home') }}">
                                @if($home_route_checker)
                                    <img src="{{asset('/public/assets/images/aris-home-white-logo.png')}}" alt="" style="padding-top:10px"></a>

                                @else
                                    <img src="{{asset('/public/assets/images/aris-home-red-logo.png')}}" alt=""></a>
                                @endif
                            </figure>


                        </div>

                        <div class="menu-area clearfix">

                            <!--Mobile Navigation Toggler-->

                            <div class="mobile-nav-toggler">
                                @if($home_route_checker)
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

                                        <li class="dropdown"><a href="#"><span>Buy</span></a>

                                            <div class="megamenu">

                                                <div class="row clearfix">

                                                    <div class="col-xl-4 column">

                                                        <ul>
                                                            <li>
                                                                <h4>Washington Searches</h4>
                                                            </li>

                                                            <div class="washington_tab_header">
                                                                <li data-value="1" class="option"><a href="#!">House</a></li>
                                                            <li data-value="2" class="option"><a href="#!">Manufactured House</a></li>
                                                            <li data-value="3" class="option"><a href="#!">Multi Family</a></li>
                                                            <li data-value="4" class="option"><a href="#!">Townhouse</a></li>
                                                            <li data-value="5" class="option"><a href="#!">Vacant Land</a></li>
                                                            <li data-value="6" class="option"><a href="#!">Office</a></li>
                                                            <li data-value="7" class="option"><a href="#!">Duplex</a></li>
                                                            <li data-value="8" class="option"><a href="#!">Triplex</a></li>

                                                            <li data-value="9" class="option"><a href="#!">Retail</a></li>
                                                            <li data-value="10" class="option"><a href="#!">Commercial</a></li>
                                                            </div>


                                                        </ul>

                                                    </div>

                                                    <div class="col-xl-4 column">

                                                        <ul>

                                                            <li>
                                                                <h4>Buying Options</h4>
                                                            </li>

                                                            <li><a href="#">Buy with aris</a></li>

                                                            <!--<li><a href="#">Buy without an agent</a></li>-->

                                                        </ul>

                                                    </div>

                                                    <div class="col-xl-4 column">

                                                        <ul>

                                                            <li>
                                                                <h4>Buying Resources</h4>
                                                            </li>

                                                            <li><a href="#">Affordability calculator </a></li>

                                                            <li><a href="#">Home buying guide</a></li>

                                                            <!--<li><a href="#">Find lenders & inspectors</a></li>-->

                                                            <!--<li><a href="#">Free home buying classes</a></li>-->

                                                            <!--<li><a href="#">US housing market</a></li>-->

                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>

                                        </li>

                                        <li class="dropdown"><a href="#"><span>Listings</span></a>

                                            <ul>

                                                <li><a href="{{ route('home.our-community') }}">Our community</a></li>

                                                <li><a href="#">Featured properties</a></li>

                                            </ul>

                                        </li>

                                        <li class="dropdown"><a href="#"><span>Sell</span></a>

                                            <div class="megamenu">

                                                <div class="row clearfix">

                                                    <div class="col-xl-4 column">

                                                        <ul>

                                                            <li>
                                                                <h4>My Home</h4>
                                                            </li>

                                                            <li><a href="#">What's my home worth?</a></li>

                                                            <!--<li><a href="#">My home dashboard</a></li>-->

                                                        </ul>

                                                    </div>

                                                    <div class="col-xl-4 column">

                                                        <ul>

                                                            <li>
                                                                <h4>Aris Selling Options</h4>
                                                            </li>
                                                            <li><a href="#">Sell with aris</a></li>
                                                            <!--<li><a href="#">Find an agent in washington</a></li>-->
                                                            <!--<li><a href="#">Compare my options</a></li>-->

                                                            <!--<li><a href="#">Aris full service</a></li>-->

                                                            <!--<li><a href="#">Aris concierge</a></li>-->

                                                            <!--<li><a href="#">Aris premier</a></li>-->



                                                        </ul>

                                                    </div>

                                                    <div class="col-xl-4 column">

                                                        <ul>

                                                            <li>
                                                                <h4>Selling Resources</h4>
                                                            </li>

                                                            <li><a href="#">Home selling guide</a></li>

                                                            <li><a href="#">Will selling pay off?</a></li>

                                                            <!--<li><a href="#">Washington home values</a></li>-->

                                                            <!--<li><a href="#">Find handypeople and stagers</a></li>-->

                                                            <li><a href="#">Home imporvement trends</a></li>

                                                        </ul>

                                                    </div>

                                                </div>

                                            </div>

                                        </li>

                                        <li class="dropdown"><a href="#"><span>Home Loans</span></a>
                                            <ul>
                                                <li><a href="{{ route('agent-about-homeloan') }}">About Aris360 Home Loans</a></li>
                                            </ul>
                                            <!--<div class="megamenu">-->

                                            <!--    <div class="row clearfix">-->

                                            <!--        <div class="col-xl-4 column">-->

                                            <!--            <ul>-->

                                            <!--                <li>-->
                                            <!--                    <h4>Mortgages</h4>-->
                                            <!--                </li>-->


                                            <!--                <li><a href="#">Mortgage lenders</a></li>-->

                                                            <!--<li><a href="#">HELOC lenders</a></li>-->

                                            <!--                <li><a href="#">Mortgage rates</a></li>-->

                                            <!--                <li><a href="#">Refinance rates</a></li>-->

                                            <!--                <li><a href="#">All mortgage rates</a></li>-->


                                            <!--            </ul>-->

                                            <!--        </div>-->

                                            <!--        <div class="col-xl-4 column">-->

                                            <!--            <ul>-->

                                            <!--                <li>-->
                                            <!--                    <h4>Calculators</h4>-->
                                            <!--                </li>-->

                                            <!--                <li><a href="#">Mortgage calculator</a></li>-->
                                            <!--                <li><a href="#">Refinance calculator</a></li>-->
                                            <!--                <li><a href="#">Affordability calculator</a></li>-->

                                            <!--                <li><a href="#">Amortization calculator</a></li>-->

                                                            <!--<li><a href="#">Debt-to-Income calculator</a></li>-->

                                            <!--            </ul>-->

                                            <!--        </div>-->

                                            <!--        <div class="col-xl-4 column">-->

                                            <!--            <ul>-->

                                            <!--                <li>-->
                                            <!--                    <h4>Resources</h4>-->
                                            <!--                </li>-->

                                            <!--                <li><a href="#">Lender reviews</a></li>-->

                                            <!--                <li><a href="#">Mortgage learning center</a></li>-->

                                            <!--                <li><a href="#">Mortgage app</a></li>-->

                                            <!--                <li><a href="#">Lender resource center</a></li>-->

                                            <!--            </ul>-->

                                            <!--        </div>-->

                                            <!--    </div>-->

                                            <!--</div>-->

                                        </li>

                                        <li class="dropdown"><a href="#"><span>Real Estate Agents</span></a>

                                            <ul>

                                                <li><a href="{{ route('find-an-agent') }}">Find an Agent in washington</a></li>

                                                <li><a href="{{ route('real-estate') }}">Become an Aris Agent</a></li>

                                                <!--<li><a href="#">Join our referral network</a></li>-->

                                                <li><a href="{{ route('agent-resource-center') }}">Agent Resource Center</a></li>
                                                <!--<li><a href="#">Agents Hub</a></li>-->

                                            </ul>

                                        </li>
                                        <!--<li class="dropdown"><a href="#">-->
                                        <!--    <span>Lenders & Loan Officers</span>-->
                                        <!--</a>-->
                                        <!--<ul>-->
                                        <!--    <li><a href="#!">Lenders Hub</a></li>-->
                                        <!--    <li><a href="#!">Loan Officer Hub</a></li>-->
                                        <!--</ul>-->
                                        <!--</li>-->

                                    </ul>

                                </div>

                            </nav>

                        </div>

                        <div class="btn-box">

                            <a href=" {{route('home.list-property')}}" class="theme-btn btn-one"><span>+</span>List Your Property</a>

                            <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#signInModal">Sign In</a>

                        </div>

                    </div>

                </div>

            </div>



            <!--sticky Header-->

            <div class="sticky-header">

                <div class="outer-box">

                    <div class="main-box">

                        <div class="logo-box">

                            <figure class="logo"><a href="{{ URL::previous('home') }}"><img src="{{asset('public/assets/images/aris-home-red-logo.png')}}" alt=""></a>
                            </figure>

                        </div>

                        <div class="menu-area clearfix">

                            <nav class="main-menu clearfix">

                                <!--Keep This Empty / Menu will come through Javascript-->

                            </nav>

                        </div>

                        <div class="btn-box">

                            <a href=" {{route('home.list-property')}}" class="theme-btn btn-one"><span>+</span>List Your Property</a>

                            <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#signInModal">Sign In</a>

                        </div>

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

                <div class="nav-logo d-flex justify-content-center"><a href="{{ URL::previous('home') }}" class="mt-3"><img src="{{asset('public/assets/images/aris-home-red-logo.png')}}" class="img-fluid" alt="" title="" ></a></div>

                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
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
                <div class="btn-box">
                    <a href=" {{route('home.list-property')}}" class="theme-btn btn-one"><span>+</span>List Your Property</a>
                    <a href="javascript:void(0)" class="theme-btn btn-one" data-toggle="modal" data-target="#signInModal">Sign In</a>
                </div>


            </nav>

        </div>
        <!-- End Mobile Menu -->


