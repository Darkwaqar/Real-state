<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name . ' | ARIS360 Prime Agent' }} </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('public/assets/images/favicon.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <link rel="stylesheet" href="{{ asset('public/assetsnew/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('public/assetsnew/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('public/assetsnew/css/pstyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assetsnew/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assetsnew/css/sub-responsive.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.2.js"></script>
    <link href="{{ asset('public/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('public/assetsnew/js/custom.js') }}"></script> --}}
</head>

<body>
    @if (session('success'))
        <script>
            $(document).ready(function() {
                $('#modal-icon').html('<i class="fas fa-check-circle"></i>');
                $('#modal-message').html('{{ session('success') }}');
                $('#exampleModalsubmit').modal('show');
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            $(document).ready(function() {
                $('#modal-icon').html('<i class="fas fa-exclamation-triangle"></i>');
                $('#modal-message').html('{{ session('error') }}');
                $('#exampleModalsubmit').modal('show');
            });
        </script>
    @endif

    {{-- header-start --}}
    <!-- Preloader -->
    <div id="page-loader">
        <div class="loader-icon"></div>
    </div>
    <!-- Preloader -->
    {{-- header-start --}}
    <header class="user-dashboard">
        <div class="headerWrap">
            <div class="header-left-sect">
                <p class="heading-text">Welcome, {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>
                <p class="small-text">{{ formattedDate() }}</p>
            </div>
            <div class="header-right-sect">
                {{--
                  <div class="search-field">
                     <input type="text" placeholder="search here">
                     <div class="search-icon">
                        <i class="fas fa-search"></i>
                     </div>
                  </div>
                  --}}
                <div class="notification-sect">
                    <a href="#!"><i class="far fa-bell"></i></a>
                    <p class="total-notification">1</p>
                    {{--
                     <div class="notification-dropdown-wrap">
                        <div class="notification-item">
                           <div class="notification-item-image">
                              <img src="assets/images/notification-img-1.png" class="img-fluid">
                           </div>
                           <div class="notification-item-text">
                              <p>Up tp 75% off is back! Shop today &amp; tomorrow to save big on fun family activities, spa treatments, yummy food.</p>
                           </div>
                        </div>
                        <div class="notification-item">
                           <div class="notification-item-image">
                              <img src="assets/images/notification-img-1.png" class="img-fluid">
                           </div>
                           <div class="notification-item-text">
                              <p>Up tp 75% off is back! Shop today &amp; tomorrow to save big on fun family activities, spa treatments, yummy food.</p>
                           </div>
                        </div>
                        <div class="notification-btns">
                           <a href="javascript:;" class="notification-btn">View All Notifications</a>
                        </div>
                     </div>
                     --}}
                </div>
                <div class="user-section">
                    <div class="userImg">
                        <img src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}"alt="">
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="mobile-toggle"><i class="fas fa-bars"></i></a>
    </header>
    {{-- header-end --}}
    {{-- header-end --}}
    <section class="freight-userdashboard">
        <div class="mobile-wrap">
            <aside class="main-left-wrap">
                <button type="button" class="toogle-close-btn">
                    <i class="fas fa-times"></i>
                </button>
                <div class="top-left-sect">
                    <div class="top-firstwrap">
                        <div class="user-D-Logo">
                            <a href="#!" target="_blank">
                                <img src="{{ asset('public/assetsnew/images/arislog.png') }}" class="img-fluid"
                                    alt="">
                            </a>
                        </div>
                        <div class="tabs-Btns-section">
                            <div class="menu-wrapper">
                                <p class="menu-text">Menu</p>
                            </div>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <div class="tab-dash-wrap">
                                    <div class="dashboard-wrappers">
                                        <div class="dasboard-content">
                                            <button class="nav-link tabs-text tab active" id="v-pills-home-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                                role="tab" aria-controls="v-pills-home" aria-selected="false">
                                                <span class="round-circle"><i class="fas fa-tachometer-alt"></i></span>
                                                Dashboard
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dashboard-wrappers">
                                        <div class="dasboard-content">
                                            <button class="nav-link tabs-text tab" id="v-pills-home-tab-prof"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-home-prof" type="button"
                                                role="tab" aria-controls="v-pills-home" aria-selected="false">
                                                <span class="round-circle"><i class="fas fa-user"></i></span>
                                                Profile
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dashboard-wrappers">
                                        <div class="dasboard-content">
                                            <button class="nav-link tabs-text tab" id="v-pills-addtwo-tab1"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-addtwo1" type="button"
                                                role="tab" aria-controls="v-pills-addtwo1" aria-selected="false">
                                                <span class="round-circle"><i class="fas fa-star"></i></span>
                                                Featured Leads
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dashboard-wrappers">
                                        <div class="dasboard-content">
                                            <button class="nav-link tabs-text tab" id="v-pills-addtwo-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-addtwo" type="button"
                                                role="tab" aria-controls="v-pills-addtwo" aria-selected="false">
                                                <span class="round-circle"><i
                                                        class="fas fa-question-circle"></i></span>
                                                Inquiries
                                            </button>
                                        </div>
                                    </div>
                                    <div class="dashboard-wrappers">
                                        <div class="dasboard-content">
                                            <button class="nav-link tabs-text tab" id="v-pills-view-load-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-view-load"
                                                type="button" role="tab" aria-controls="v-pills-load"
                                                aria-selected="false">
                                                <span class="round-circle"><i class="fas fa-save"></i></span>
                                                Save Searches
                                            </button>
                                            <button class="nav-link tabs-text tab" id="v-pills-unassign-load-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-unassign-load"
                                                type="button" role="tab" aria-controls="v-pills-load"
                                                aria-selected="false">
                                                <span class="round-circle"><i class="fas fa-bars"></i></span>
                                                My Listings
                                            </button>
                                            <button class="nav-link tabs-text tab"
                                                id="v-pills-unassign-load-tab-teams" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-unassign-load-teams" type="button"
                                                role="tab" aria-controls="v-pills-load" aria-selected="false">
                                                <span class="round-circle"><i class="fas fa-users"></i></span>
                                                Team

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="top-secondwrap">
                        <div class="menu-wrapper">
                            <p class="menu-text">Profile</p>
                        </div>
                        <div class="user-section">
                            <div class="userImg">
                                <img src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="username-section">
                                <p class="name">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</p>
                                <p class="small-text">
                                    ARIS360 Prime Agent
                                </p>
                            </div>
                        </div>
                        <div class="home-link">
                            <a href="{{ url('/agent/logout') }}">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                        <!-- user-profile-end -->
                    </div>
                </div>
                <!--<div class="home-link">-->
                <!--	<a href="#!">-->
                <!--		<img src="assets/images/home-img.png" class="img-fluid" alt="">-->
                <!--		Back to home-->
                <!--	</a>-->
                <!--</div>-->
            </aside>
        </div>
        <div class="main-right-wrap profile-tabs-rw">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <!-- explore-tab-start -->
                    <div class="cardwrappsaris">
                        <div class="row">
                            <div class="col-12 col-md-5 col-lg-4">
                                <div class="box1 box boxcard">
                                    <div class="content">
                                        <div class="image mb-3">
                                            <img src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}"
                                                alt="Profile Image">
                                        </div>
                                        <div class="text">
                                            <p class="name">
                                                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                            </p>
                                            <p class="prime-txt mt-2">
                                                ARIS360 Prime Agent
                                            </p>
                                            <p class="aris-usrtxt"><i class="fas fa-info-circle"></i> Need Help?</p>
                                            <p class="aris-usrtxt"><i class="fas fa-envelope"></i> Email:
                                                info@aris360.com</p>
                                            <p class="aris-usrtxt"><i class="fas fa-phone-alt"></i> Call: (833)
                                                966-1976</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-6">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="leads-wrap">
                                            <div class="lead-content">
                                                <div class="icons">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="lead-txt">
                                                    <p>Leads</p>
                                                </div>
                                            </div>
                                            <div class="lead-number mt-2">
                                                <p class="lead-numtxt">{{ $myLeads }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="leads-wrap mb-4">
                                            <div class="lead-content">
                                                <div class="icons">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <div class="lead-txt">
                                                    <p>My Pending Properties</p>
                                                </div>
                                            </div>
                                            <div class="lead-number mt-2">
                                                <p class="lead-numtxt">{{ $myPendingProperties }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="leads-wrap">
                                            <div class="lead-content">
                                                <div class="icons">
                                                    <i class="fa fa-home"></i>
                                                </div>
                                                <div class="lead-txt">
                                                    <p>My Properties</p>
                                                </div>
                                            </div>
                                            <div class="lead-number mt-2">
                                                <p class="lead-numtxt">{{ $myProperties }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="map-wrap">
                                <div class="map" id="map"></div>
                            </div>
                        </div>
                    </div>
                    <!-- explore-tab-end -->
                </div>

                {{-- profile-tab-start --}}

                <div class="tab-pane fade" id="v-pills-home-prof" role="tabpanel"
                    aria-labelledby="v-pills-home-tab-prof">
                    <!-- explore-tab-start -->
                    <form action="{{ url('/agent/update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="profiletabswraps">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div class="banner-wrappertop">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-12">

                                                <!-- banner-image -->
                                                <div class="profile-imagewrapper">
                                                    <div class="profile-image-box">
                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type="file" class="roundd"
                                                                    name="coverImage" id="imageUploadban"
                                                                    accept=".png, .jpg, .jpeg">
                                                                <label class="camera-img" for="imageUploadban">Edit
                                                                    Cover</label>
                                                            </div>
                                                            <div class="avatar-preview">
                                                                <div id="imagePreviewban"
                                                                    style="background-image:url('{{ asset('public/images/userdp') . '/' . Auth::user()->cover_image }}')">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="profile-btnwrap">
                                                        <div class="proflie-btnleft">
                                                            <div class="user-section">
                                                                <div class="profile-pic">
                                                                    <label class="-label" for="file">
                                                                        <span
                                                                            class="glyphicon glyphicon-camera"></span>
                                                                        <span>Change Image</span>
                                                                    </label>
                                                                    <input id="file" type="file"
                                                                        name="userDp" onchange="loadFile(event)" />
                                                                    <img src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}"
                                                                        id="output" width="200" />
                                                                </div>
                                                                {{-- <div class="userImgtwo">
                                                                <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                                            </div> --}}
                                                                <div class="username-section">
                                                                    <p class="name">
                                                                        {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                                                                    </p>
                                                                    <p class="small-text">
                                                                        Your Profile
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="proflie-btnright">
                                                        <div class="slide-button">
                                                            <a href="javascript:void(0)"
                                                                class="cta-btnone yellow-bg">Save</a>
                                                        </div>
                                                        <div class="slide-button">
                                                            <a href="javascript:void(0)"
                                                                class="cta-btncan yellow-bg">Cancel</a>
                                                        </div>
                                                    </div> --}}
                                                    </div>
                                                </div>

                                                <!-- banner-image-end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- form-start --}}
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-wrapperd">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">First Name</p>
                                                <input class="subject-input"
                                                    value="{{ Auth::user()->first_name ? Auth::user()->first_name : '' }}"
                                                    name="firstName" type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Last Name</p>
                                                <input class="subject-input"
                                                    value="{{ Auth::user()->last_name ? Auth::user()->last_name : '' }}"
                                                    name="lastName" type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Email</p>
                                                <input class="subject-input" name=""
                                                    value="{{ Auth::user()->email }}" type="text" readonly
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Contact No</p>
                                                <input class="subject-input"
                                                    value="{{ isset(Auth::user()->mobile_number) ? Auth::user()->mobile_number : '' }}"
                                                    name="contact" type="text" placeholder="Contact No">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Zip Code</p>
                                                <input class="subject-input" name="zip"
                                                    value="{{ Auth::user()->postal_code ? Auth::user()->postal_code : '' }}"
                                                    value="" type="text" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Street Line 1</p>
                                                <input name="address"
                                                    value="{{ isset(Auth::user()->address) ? Auth::user()->address : '' }}"
                                                    class="subject-input" type="text" placeholder="Street Line 1">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Street Line 2</p>
                                                <input class="subject-input" type="text"
                                                    placeholder="Street Line 2">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">City</p>
                                                <input class="subject-input" name="city"
                                                    value="{{ isset(Auth::user()->city) ? Auth::user()->city : '' }}"
                                                    type="text" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">State</p>
                                                <input class="subject-input" name="state"
                                                    value="{{ isset(Auth::user()->state) ? Auth::user()->state : '' }}"
                                                    type="text" placeholder="State">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="proflie-btnright" style="justify-content:end;">
                                        <div class="slide-button">
                                            <button type="submit" class="cta-btnone yellow-bg">Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- form-end --}}

                        <!-- explore-tab-end -->
                    </form>
                </div>

                {{-- profile-tab-end --}}

                <!-- inbox-tab-start -->
                <div class="tab-pane fade" id="v-pills-addtwo1" role="tabpanel"
                    aria-labelledby="v-pills-addtwo-tab1">
                    <div class="inbox-rightwrap">
                        {{-- feature-lead-start --}}
                        {{-- header-start --}}
                        {{-- header-end --}}
                        {{-- table-start --}}
                        <div class="header-left-sect">
                            <p class="heading-text">Featured Leads</p>
                            <p class="small-text">{{ formattedDate() }}</p>
                        </div>
                        <div class="table-aris">
                            <div class="table-container  table-responsive">
                                <table class="table-hover">
                                    @if (isset($leads) && count($leads) > 0)
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="checkboxwaps">
                                                        <input type="checkbox" class="checkbox-wrap">
                                                    </div>
                                                </th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>Lead Types</th>
                                                <th>Property Type</th>
                                                <th>Location</th>
                                            </tr>
                                        </thead>
                                        <tbody role="alert">
                                            @foreach ($leads as $MyPropertyLead)
                                                <tr>
                                                    <td>
                                                        <div class="checkboxwaps">
                                                            <input type="checkbox" class="checkbox-wrap">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="user-section">
                                                            <div class="userImg">
                                                                @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                                    @if (!empty($MyPropertyLead['user']['user_dp']))
                                                                        <img src="{{ asset('public/images/userdp') . '/' . $MyPropertyLead['user']['user_dp'] }}"
                                                                            class="img-fluid" alt="">
                                                                    @endif
                                                                @endif
                                                            </div>
                                                            <div class="username-section">
                                                                <p class="name">
                                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                                        {{ isset($MyPropertyLead['user']['first_name']) ? $MyPropertyLead['user']['first_name'] : 'N/A' }}
                                                                    @else
                                                                        {{ isset($MyPropertyLead['name']) ? $MyPropertyLead['name'] : 'N/A' }}
                                                                    @endif
                                                                </p>
                                                                <p class="small-text">
                                                                    @if ($MyPropertyLead['type'] == 'ContactForm' || $MyPropertyLead['type'] == 'leads')
                                                                        {{ isset($MyPropertyLead['created_at']) ? stringTodate($MyPropertyLead['created_at']) : 'N/A' }}
                                                                    @elseif($MyPropertyLead['type'] == 'Leads')
                                                                        {{ isset($MyPropertyLead['created_at']) ? stringTodate($MyPropertyLead['created_at']) : 'N/A' }}
                                                                    @else
                                                                        {{ isset($MyPropertyLead['created_at']) ? stringTodate($MyPropertyLead['created_at']) : 'N/A' }}
                                                                    @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                            {{ isset($MyPropertyLead['user']['email']) ? $MyPropertyLead['user']['email'] : 'N/A' }}
                                                        @else
                                                            {{ isset($MyPropertyLead['email']) ? $MyPropertyLead['email'] : 'N/A' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                            {{ isset($MyPropertyLead['user']['mobile_number']) ? $MyPropertyLead['user']['mobile_number'] : 'N/A' }}
                                                        @else
                                                            {{ isset($MyPropertyLead['contact']) ? $MyPropertyLead['contact'] : 'N/A' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                            {{ isset($MyPropertyLead['property']['CityName']) ? $MyPropertyLead['property']['CityName'] : 'N/A' }}
                                                        @else
                                                            {{ isset($MyPropertyLead['city']) ? $MyPropertyLead['city'] : 'N/A' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                            {{ isset($MyPropertyLead['property']['StateOrProvince']) ? $MyPropertyLead['property']['StateOrProvince'] : 'N/A' }}
                                                        @else
                                                            {{ isset($MyPropertyLead['state']) ? $MyPropertyLead['state'] : 'N/A' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                            Buyer
                                                        @else
                                                            {{ isset($MyPropertyLead['lead_type']) ? $MyPropertyLead['lead_type'] : 'N/A' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                            {{ isset($MyPropertyLead['property']['structure_type'][0]['StructureTypeName']) ? $MyPropertyLead['property']['structure_type'][0]['StructureTypeName'] : 'N/A' }}
                                                        @else
                                                            {{ isset($MyPropertyLead['property_type']) ? $MyPropertyLead['property_type'] : 'N/A' }}
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <p class="table-txt">
                                                            @if ($MyPropertyLead['type'] == 'ContactForm' || $MyPropertyLead['type'] == 'Schedule')
                                                                {{ isset($MyPropertyLead['property']['PropertyAddress']) ? $MyPropertyLead['property']['PropertyAddress'] : 'N/A' }}
                                                            @else
                                                                {{ isset($MyPropertyLead['address']) ? $MyPropertyLead['address'] : 'N/A' }}
                                                            @endif
                                                        </p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    @else
                                        <tbody class="alert alert-primary" role="alert">
                                            <tr>
                                                <td>No new Leads Found</td>
                                            </tr>
                                        </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                        {{-- table-end --}}
                        {{-- feature-lead-end --}}
                    </div>
                </div>
                <!-- inbox-tab-end -->
                <!-- add-two-tab-start -->
                <div class="tab-pane fade" id="v-pills-addtwo" role="tabpanel" aria-labelledby="v-pills-addtwo-tab">
                    <!-- explore-tab-start -->
                    {{-- table-start --}}
                    <div class="header-left-sect">
                        <p class="heading-text">New Inquiries</p>
                        <p class="small-text">{{ formattedDate() }}</p>
                    </div>
                    <div class="table-aris">
                        <div class="table-container  table-responsive">
                            @if (isset($userInquiries) && count($userInquiries) > 0)
                                <table class="table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="checkboxwaps">
                                                    <input type="checkbox" class="checkbox-wrap">
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>City</th>
                                            <th>What can help you with?</th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert">
                                        @foreach ($userInquiries as $agentInuiry)
                                            <tr>
                                                <td>
                                                    <div class="checkboxwaps">
                                                        <input type="checkbox" class="checkbox-wrap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="user-section">
                                                        <div class="userImg">
                                                            @if (!empty($agentInuiry['user']['user_dp']))
                                                                <img src="{{ asset('public/images/userdp') . '/' . $agentInuiry['user']['user_dp'] }}"
                                                                    class="img-fluid" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="username-section">
                                                            <p class="name">
                                                                {{ isset($agentInuiry['name']) ? $agentInuiry['name'] : 'N/A' }}
                                                            </p>
                                                            <p class="small-text">
                                                                {{ stringTodate($agentInuiry['created_at']) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ isset($agentInuiry['email']) ? $agentInuiry['email'] : 'N/A' }}
                                                </td>
                                                <td>{{ isset($agentInuiry['phone']) ? $agentInuiry['phone'] : 'N/A' }}
                                                </td>
                                                <td>{{ isset($agentInuiry['city']) ? $agentInuiry['city'] : 'N/A' }}
                                                </td>
                                                <td>
                                                    <p class="table-txt">
                                                        {{ isset($agentInuiry['question']) ? $agentInuiry['question'] : 'N/A' }}
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tbody class="alert alert-primary" role="alert">
                                        <tr>
                                            <td>No new Inquiries Found</td>
                                        </tr>
                                    </tbody>
                            @endif
                            </table>
                        </div>
                    </div>
                    {{-- table-end --}}
                    <div class="table-wrapperinquiry">
                        <div class="header-left-sect">
                            <p class="heading-text">Scheduled Inquiries</p>
                            <p class="small-text">{{ formattedDate() }}</p>
                        </div>
                    </div>
                    <div class="table-aris mt-4">
                        <div class="table-container  table-responsive">
                            <table class="table-hover">
                                @if (isset($agentQueries) && count($agentQueries) > 0)
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="checkboxwaps">
                                                    <input type="checkbox" class="checkbox-wrap">
                                                </div>
                                            </th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Scheduled Date</th>
                                            <th>Property Address</th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert">
                                        @foreach ($agentQueries as $tour)
                                            <tr>
                                                <td>
                                                    <div class="checkboxwaps">
                                                        <input type="checkbox" class="checkbox-wrap">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="user-section">
                                                        <div class="userImg">
                                                            @if (!empty($agentInuiry['user']['user_dp']))
                                                                <img src="{{ asset('public/images/userdp') . '/' . $agentInuiry['user']['user_dp'] }}"
                                                                    class="img-fluid" alt="">
                                                            @endif
                                                        </div>
                                                        <div class="username-section">
                                                            <p class="name">
                                                                {{ isset($tour['user']['first_name']) ? $tour['user']['first_name'] : 'N/A' }}
                                                            </p>
                                                            <p class="small-text">
                                                                {{ formattedDate() }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> {{ isset($tour['user']['email']) ? $tour['user']['email'] : 'N/A' }}
                                                </td>
                                                <td>{{ isset($tour['user']['mobile_number']) ? $tour['user']['mobile_number'] : 'N/A' }}
                                                </td>
                                                <td>
                                                    @if ($tour['type'] == 'ContactForm')
                                                        {{ isset($tour['message']) ? $tour['message'] : 'N/A' }}
                                                    @else
                                                        {{ isset($tour['scheduled_date']) ? $tour['scheduled_date'] : 'N/A' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <p class="table-txt">
                                                        @if (isset($tour['property']['id']))
                                                            <a
                                                                href="{{ url('property-detail/' . $tour['property']['id']) }}">
                                                                {{ $tour['property']['PropertyAddress'] }}
                                                            </a>
                                                        @else
                                                            <p> N/A </p>
                                                        @endif
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @else
                                    <tbody class="alert alert-primary" role="alert">
                                        <tr>
                                            <td>No new Scheduled Inquiries Found</td>
                                        </tr>
                                    </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                    <!-- explore-tab-end -->
                </div>
                <!-- add-two-tab-end -->
                <!-- load-tab-start -->
                <div class="tab-pane fade" id="v-pills-view-load" role="tabpanel"
                    aria-labelledby="v-pills-view-load-tab">
                    <!-- explore-tab-start -->
                    <div class="savesearchwrappers">
                        <div class="header-left-sect">
                            <p class="heading-text">Save Searches</p>
                            <p class="small-text">{{ formattedDate() }}</p>
                        </div>
                        <div class="search-field mb-4">
                            <input type="text" placeholder="search here">
                            <div class="search-icon">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        {{-- save-search-start --}}

                        @if (isset($savedSearches) && count($savedSearches) > 0)
                            @foreach ($savedSearches as $savedSearch)
                                @php
                                    $searchCriteria = json_decode($savedSearch['search_criteria']);
                                @endphp
                                <div class="searchwrapped mb-4">
                                    <div class="f_leads_item_details">
                                        <div class="details">
                                            @if (isset($searchCriteria->publishStatus) && $searchCriteria->publishStatus == 'Active')
                                                <p class="danger">For Sale</p>
                                            @else
                                                <p class="danger">
                                                    {{ $searchCriteria->publishStatus }}
                                                </p>
                                            @endif
                                        </div>
                                        <div class="editwrapped">
                                            <a target="_blank"
                                                href="{{ route('home.our-community', [
                                                    'search' => isset($searchCriteria->address) ? $searchCriteria->address : '',
                                                    'zip' => isset($searchCriteria->zip) ? $searchCriteria->zip : '',
                                                    'search_criteria' => base64_encode(json_encode($searchCriteria)),
                                                    'id' => $savedSearch['id'],
                                                ]) }}"
                                                class="acticon">
                                                <div class="editwrappers">
                                                    <i class="fas fa-edit"></i><span>Edit</span>
                                                </div>
                                            </a>
                                            <form action="{{ route('delete-saved-search', $savedSearch->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="trash-btn">
                                                    <i class="fa fa-trash-alt del-trash">  </i> <span>Delete</span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-primary" role="alert">
                                No Saved Searches.
                            </div>
                        @endif
                        {{-- save-search-end --}}
                    </div>
                       <!-- explore-tab-end -->
                </div>
                <!-- load-tab-end --><!-- load-tab-start -->
                <div class="tab-pane fade" id="v-pills-unassign-load" role="tabpanel"
                    aria-labelledby="v-pills-unassign-load-tab">
                    <div class="header-left-sect">
                        <p class="heading-text">My Listings</p>
                        <p class="small-text">{{ formattedDate() }}</p>
                    </div>
                    <!-- explore-tab-start -->
                    <div class="listing-cardwrap">
                        <div class="row">
                            @forelse($userProperties as $usrProperty)
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="listing-cardwrapper">
                                        {{-- card-wrapper-start --}}
                                        <div class="box">
                                            <div class="top">
                                                @if ($usrProperty['PropertyStatus'] == 1)
                                                    <a
                                                        href="{{ route('home.property-detail', ['id' => $usrProperty['id']]) }}">
                                                        <img src="{{ isset($usrProperty['preffered_media'][0]['id']) ? $usrProperty['preffered_media'][0]['s3buckettempurl'] : '' }}"
                                                            alt="" />
                                                    </a>
                                                @else
                                                    <img src="{{ isset($usrProperty['preffered_media'][0]['id']) ? $usrProperty['preffered_media'][0]['s3buckettempurl'] : '' }}"
                                                        alt="">
                                                @endif
                                                <span><i class="fas fa-heart"></i><i
                                                        class="fas fa-exchange-alt"></i></span>
                                                <div class="topbarwrap">
                                                    <div class="aris360prem">
                                                        <p class="bartxt">ARIS360 PREMIER</p>
                                                    </div>
                                                    <div class="arissalewrap">
                                                        <p class="saletxt">
                                                            {{ isset($usrProperty['PublishStatus']) ? $usrProperty['PublishStatus'] : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom">
                                                <div class="propertycardhead">
                                                    <button class="editwrappers"><i class="fa fa-edit"></i>
                                                        <a class="action"
                                                            href="{{ url('/edit_property') . '/' . $usrProperty['id'] }}"
                                                            target="_blank">
                                                            Edit
                                                        </a>
                                                    </button>
                                                    <p class="price-txt">$
                                                        {{ isset($usrProperty['PropetySellPrice']) ? number_format($usrProperty['PropetySellPrice']) : '0' }}
                                                    </p>
                                                </div>
                                                <p class="address-txt">
                                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                                    {{ isset($usrProperty['PropertyAddress']) ? $usrProperty['PropertyAddress'] : '' }}
                                                </p>
                                                <p class="premier-txt"><span>Property Category : </span>
                                                    {{ isset($usrProperty['structure_type'][0]['StructureTypeName'])
                                                        ? $usrProperty['structure_type'][0]['StructureTypeName']
                                                        : ' N/A ' }}
                                                </p>
                                                <div class="advants">
                                                    <div>
                                                        <div><i class="fas fa-th-large"></i><span>{{ isset($usrProperty['Bedrooms']) ? $usrProperty['Bedrooms'] : '0' }}
                                                                Bedrooms</span>
                                                        </div>

                                                    </div>
                                                    <div>
                                                        <div><i class="fas fa-shower"></i><span>{{ isset($usrProperty['BathroomsFull']) ? $usrProperty['BathroomsFull'] : '0' }}
                                                                Bathrooms</span>
                                                        </div>

                                                    </div>
                                                    <div style="border-right:none;">
                                                        <div>
                                                            <span><i
                                                                    class="fas fa-vector-square"></i>{{ isset($usrProperty['PropertyArea']) ? $usrProperty['PropertyArea'] : '0' }}
                                                                Sq. Ft</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="cardsharewrap">
                                                    <div class="cardprofilewrap">
                                                        <div class="user-section">
                                                            <div class="userImg">
                                                                @if (!empty(Auth::user()->user_dp))
                                                                    <img src="{{ asset('public/images/userdp') . '/' . Auth::user()->user_dp }}"
                                                                        class="img-fluid" alt="">
                                                                @endif
                                                            </div>
                                                            <div class="username-section">
                                                                <p class="small-text">
                                                                    Listing Provided by NWMLS
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sharewrap">
                                                        <a href="#!" class="shareicon">
                                                            <span class="sharecontent"><i
                                                                    class="fas fa-share-alt"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- card-wrapper-end --}}
                                    </div>
                                </div>
                            @empty
                                <div class="alert alert-primary" role="alert">
                                    No properties found. please <a href="{{ url('/property-listing') }}">
                                        click here </a>
                                    to list your property.
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <!-- explore-tab-end -->
                </div>
                <!-- load-tab-end -->
                {{-- team-tab-start --}}
                <div class="tab-pane fade" id="v-pills-unassign-load-teams" role="tabpanel"
                    aria-labelledby="v-pills-unassign-load-tab-teams">
                    <!-- explore-tab-start -->
                    <div class="listing-cardwrap">
                        <div class="row">
                            @if (!empty($agentTeams))
                                @foreach ($agentTeams as $team)
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="team-cardwrap">
                                            <div class="team-1">
                                                <div class="team-inner d-block">
                                                    <div class="team-overflow">
                                                        <div class="team-photo">
                                                            <div class="team-img">
                                                                <a href="{{ url('real-estate-agent-detail/' . (isset($team['slug']) ? $team['slug'] : '')) }}"
                                                                    target="_blank">
                                                                    <img src="{{ asset('public/images/userdp/' . (isset($team['user_dp']) ? $team['user_dp'] : '')) }}"
                                                                        alt="agent-2"
                                                                        class="img-fluid w-100 agent_team_max_width">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="team-details">
                                                        <h5><a href="{{ url('real-estate-agent-detail/' . (isset($team['slug']) ? $team['slug'] : '')) }}"
                                                                target="_blank">
                                                                {{ isset($team['first_name']) && isset($team['last_name']) ? $team['first_name'] . ' ' . $team['last_name'] : '' }}
                                                            </a></h5>
                                                        <p>{{ isset($team['state']) && isset($team['city']) ? $team['state'] . ', ' . $team['city'] : '' }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="slide-button add-btnmem">
                                    <button type="button" class="cta-btnone yellow-bg" data-bs-toggle="modal"
                                        data-bs-target="#exampleModaltwo" data-bs-whatever="@mdo"><span
                                            class="addmeber">+</span>Add Member</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- explore-tab-end -->
                </div>
                {{-- teams-tab-end --}}
                <!-- Loan Control -->
                <!-- offer-tab-end -->
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script src="{{ asset('public/assetsnew/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assetsnew/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('public/assetsnew/js/custom.js') }}"></script>
    <!-- Sweet alert 2 -->
    <script src="js/sweetalert2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('public/assetsnew/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/assetsnew/js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('public/assetsnew/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/assetsnew/js/aos.js') }}"></script>
    <script src=" {{ asset('public/assetsnew/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.js"></script>

    <script>
        //edit-profile-round-image
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#imagePreviewban").css("background-image", "url(" + e.target.result + ")");
                    $("#imagePreviewban").hide();
                    $("#imagePreviewban").fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUploadban").change(function() {
            readURL(this);
        });
        //edit-profile-main-banner-image-end
        //round-image-start
    </script>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <div class="modal fade" id="exampleModaltwo" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="title mt-3 mb-2 text-center add-newteam"> Add New Team Member</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="login-page">

                        @php
                            $propertyTypes = agentTeam();
                        @endphp

                        @if (isset($propertyTypes) && count($propertyTypes) > 0)
                            <label>Add Agent To Your Team </label>
                            <form action="{{ route('agentTeam') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="profile_fields mt-3">

                                    <select class="mb-3" name="agentTeam" required>
                                        <option value="">Agents </option>
                                        @foreach ($propertyTypes as $value)
                                            <option value="{{ $value['id'] }}">
                                                {{ $value['first_name'] . ' ' . $value['last_name'] }}
                                            </option>
                                        @endforeach
                                    </select>


                                </div>
                                <div class="profile_fields mt-3">
                                    <input type="submit" class="theme-btn btn-one add-inputfield" value="Add Member">
                                </div>
                            </form>
                        @else
                            <p class="title mt-3 mb-2 text-center"> No Agent Available</p>
                        @endif
                    </div>
                    {{-- end --}}

                </div>
            </div>
        </div>
    </div>
    <!-- modal.blade.php -->
    <div class="modal fade" id="exampleModalsubmit" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  " role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="form_submitting_content">
                        <span class="check_icon" id="modal-icon"></span>

                        <p id="modal-message"></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        var optionMenuth = document.querySelector(".select-menu-three"),
            selectBtnns = optionMenuth.querySelector(".select-btn-three"),
            optionstws = optionMenuth.querySelectorAll(".option-three"),
            sBtn_textss = optionMenuth.querySelector(".sBtn-text-three");

        selectBtnns.addEventListener("click", () =>
            optionMenuth.classList.toggle("active")
        );

        optionstws.forEach((optionth) => {
            optionth.addEventListener("click", () => {
                var selectedOptionss = optionth.querySelector(".option-text-three").innerText;
                sBtn_textss.innerText = selectedOptionss;
                optionMenuth.classList.remove("active");
            });
        });
    </script>
    <script>
        var map;
        var userCity = @json($userCity);
        console.log('UserCity ', userCity);

        function initMap() {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                address: userCity
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK && results.length > 0) {
                    var userLocation = results[0].geometry.location;

                    // Initialize the Google Map
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: userLocation,
                        zoom: 10
                    });

                    // Add a marker to the map at the user's location
                    var marker = new google.maps.Marker({
                        position: userLocation,
                        map: map,
                        title: userCity
                    });
                } else {
                    // Handle geocoding errors here.
                    console.error('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSEEKrvzM3-vFcLEoOUf256gzLG7tyWWc&callback=initMap" async
        defer></script>
    <script>
        var map;
        var userCity = @json($userCity);
        console.log('UserCity ', userCity);

        function initMap() {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
                address: userCity
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK && results.length > 0) {
                    var userLocation = results[0].geometry.location;
                    var userLatitude = userLocation.lat();
                    var userLongitude = userLocation.lng();
                    console.log('Latitude: ', userLatitude);
                    console.log('Longitude: ', userLongitude);
                    // Initialize the Google Map
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: userLocation,
                        zoom: 10
                    });
                    console.log('UserCity ', userLocation);
                    // Add a marker to the map at the user's location
                    var marker = new google.maps.Marker({
                        position: userLocation,
                        map: map,
                        title: userCity
                    });
                } else {
                    // Handle geocoding errors here.
                    console.error('Geocode was not successful for the following reason: ' + status);
                }
            });
        }
    </script>
</body>

</html>
