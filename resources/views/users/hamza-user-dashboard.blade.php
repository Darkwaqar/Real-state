<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Aris 360</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" href="{{ asset('public/assets/images/favicon.png') }}" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
      <link rel="stylesheet" href="{{ asset('public/assetsnew/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" />
      <link rel="stylesheet" href="{{ asset('public/assetsnew/css/font-awesome.css') }}">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="stylesheet" href="{{ asset('public/assetsnew/css/pstyle.css') }}"/>
      <link rel="stylesheet" href="{{ asset('public/assetsnew/css/responsive.css') }}" />
      <link rel="stylesheet" href="{{ asset('public/assetsnew/css/sub-responsive.css') }}" />
      <script src="https://code.jquery.com/jquery-3.6.2.js"></script>
   </head>
   <body>
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
              <p class="heading-text">Welcome , Scott Dixon</p>
              <p class="small-text">Tue , 03 Apirl 2023</p>
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
                    <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
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
                        <img src="{{ asset('public/assetsnew/images/arislog.png') }}" class="img-fluid" alt="">
                        </a>
                     </div>
                     <div class="tabs-Btns-section">
                        <div class="menu-wrapper">
                           <p class="menu-text">Menu</p>
                        </div>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                           <div class="tab-dash-wrap">
                              <div class="dashboard-wrappers">
                                 <div class="dasboard-content">
                                    <button class="nav-link tabs-text tab active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                    <span class="round-circle"><i class="fas fa-tachometer-alt"></i></span>
                                    Dashboard
                                    </button>
                                 </div>
                              </div>
                              <div class="dashboard-wrappers">
                                <div class="dasboard-content">
                                   <button class="nav-link tabs-text tab" id="v-pills-home-tab-prof" data-bs-toggle="pill" data-bs-target="#v-pills-home-prof" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">
                                   <span class="round-circle"><i class="fas fa-user"></i></span>
                                     Profile
                                   </button>
                                </div>
                             </div>
                             <div class="dashboard-wrappers">
                                <div class="dasboard-content">
                                   <button class="nav-link tabs-text tab" id="v-pills-unassign-load-tab-one" data-bs-toggle="pill" data-bs-target="#v-pills-unassign-load-one" type="button" role="tab" aria-controls="v-pills-load" aria-selected="false">
                                   <span class="round-circle"><i class="fas fa-heart"></i></span>
                                    Favourities Properties
                                   </button>
                                </div>
                             </div>
                              {{-- <div class="dashboard-wrappers">
                                 <div class="dasboard-content">
                                    <button class="nav-link tabs-text tab" id="v-pills-addtwo-tab1" data-bs-toggle="pill" data-bs-target="#v-pills-addtwo1" type="button" role="tab" aria-controls="v-pills-addtwo1" aria-selected="false">
                                    <span class="round-circle"><i class="fas fa-star"></i></span>
                                    Featured Leads
                                    </button>
                                 </div>
                              </div> --}}
                              {{-- <div class="dashboard-wrappers">
                                 <div class="dasboard-content">
                                    <button class="nav-link tabs-text tab" id="v-pills-addtwo-tab" data-bs-toggle="pill" data-bs-target="#v-pills-addtwo" type="button" role="tab" aria-controls="v-pills-addtwo" aria-selected="false">
                                    <span class="round-circle"><i class="fas fa-question-circle"></i></span>
                                    Inquiries
                                    </button>
                                 </div>
                              </div> --}}
                              <div class="dashboard-wrappers">
                                 <div class="dasboard-content">
                                    <button class="nav-link tabs-text tab" id="v-pills-view-load-tab" data-bs-toggle="pill" data-bs-target="#v-pills-view-load" type="button" role="tab" aria-controls="v-pills-load" aria-selected="false">
                                    <span class="round-circle"><i class="fas fa-save"></i></span>
                                    Save Searches
                                    </button>
                                    <button class="nav-link tabs-text tab" id="v-pills-unassign-load-tab" data-bs-toggle="pill" data-bs-target="#v-pills-unassign-load" type="button" role="tab" aria-controls="v-pills-load" aria-selected="false">
                                    <span class="round-circle"><i class="fas fa-bars"></i></span>
                                    My Listings
                                    </button>
                                    <button class="nav-link tabs-text tab" id="v-pills-unassign-load-tab-complain" data-bs-toggle="pill" data-bs-target="#v-pills-unassign-load-complain" type="button" role="tab" aria-controls="v-pills-load-complain" aria-selected="false">
                                    <span class="round-circle"><i class="fas fa-check-circle"></i></span>
                                    Complaint Box
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
                           <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="username-section">
                           <p class="name">Scott Dixon</p>
                           <p class="small-text">
                              Admin Account
                           </p>
                        </div>
                     </div>
                     <div class="home-link">
                        <a href="#!">
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
               <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                  <!-- explore-tab-start -->
                  <div class="cardwrappsaris">
                     <div class="row">

                        <div class="col-12 col-md-7 col-lg-6">
                           <div class="row">

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
                                       <p class="lead-numtxt">10</p>
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
                                       <p class="lead-numtxt">10</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="map-wrap">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d86209.16859161262!2d-122.38467638505458!3d47.528152030725835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490102c93e83355%3A0x102565466944d59a!2sSeattle%2C%20WA%2C%20USA!5e0!3m2!1sen!2s!4v1698764017697!5m2!1sen!2s" width="100%" height="350" style="border:0;"></iframe>
                        </div>
                     </div>
                  </div>
                  <!-- explore-tab-end -->
               </div>

                {{-- profile-tab-start --}}

                <div class="tab-pane fade" id="v-pills-home-prof" role="tabpanel" aria-labelledby="v-pills-home-tab-prof">
                    <!-- explore-tab-start -->
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
                                                            <input type="file" class="roundd" id="imageUploadban" accept=".png, .jpg, .jpeg">
                                                            <label class="camera-img" for="imageUploadban">Edit Cover</label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreviewban" style="background-image:url('public/assetsnew/images/banner-1.png')"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="profile-btnwrap">
                                                    <div class="proflie-btnleft">
                                                        <div class="user-section">
                                                            <div class="userImgtwo">
                                                                <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                                            </div>
                                                            <div class="username-section">
                                                                <p class="name">Scott Dixon</p>
                                                                <p class="small-text">
                                                                    Your Profile
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="proflie-btnright">
                                                        <div class="slide-button">
                                                            <a href="javascript:void(0)" class="cta-btnone yellow-bg">Save</a>
                                                        </div>
                                                        <div class="slide-button">
                                                            <a href="javascript:void(0)" class="cta-btncan yellow-bg">Cancel</a>
                                                        </div>
                                                    </div>
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
                                                <input class="subject-input" type="text" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Last Name</p>
                                                <input class="subject-input" type="text" placeholder="Last Name">
                                            </div>
                                        </div>
                                       <div class="col-12 col-md-4 col-lg-4">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Email</p>
                                                <input class="subject-input" type="text" placeholder="Email">
                                            </div>
                                       </div>
                                       <div class="col-12 col-md-4 col-lg-4">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Contact No</p>
                                                <input class="subject-input" type="text" placeholder="Contact No">
                                            </div>
                                       </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Zip Code</p>
                                                <input class="subject-input" type="text" placeholder="Zip Code">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Street Line 1</p>
                                                <input class="subject-input" type="text" placeholder="Street Line 1">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">Street Line 2</p>
                                                <input class="subject-input" type="text" placeholder="Street Line 2">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">City</p>
                                                <input class="subject-input" type="text" placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="inputformwrap mb-3">
                                                <p class="usertext mb-2">State</p>
                                                <input class="subject-input" type="text" placeholder="State">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="proflie-btnright" style="justify-content:end;">
                                        <div class="slide-button">
                                            <a href="javascript:void(0)" class="cta-btnone yellow-bg">Save</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                      {{-- form-end --}}

                    <!-- explore-tab-end -->
                 </div>

                {{-- profile-tab-end --}}

               <!-- inbox-tab-start -->
               <div class="tab-pane fade" id="v-pills-addtwo1" role="tabpanel" aria-labelledby="v-pills-addtwo-tab1">
                  <div class="inbox-rightwrap">
                     {{-- feature-lead-start --}}
                     {{-- header-start --}}
                     <header class="user-dashboard">
                        <div class="headerWrap">
                           <div class="header-left-sect">
                              <p class="heading-text">Featured Leads</p>
                              <p class="small-text">Tue , 03 Apirl 2023</p>
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
                                    <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <a href="javascript:void(0)" class="mobile-toggle"><i class="fas fa-bars"></i></a>
                     </header>
                     {{-- header-end --}}
                     {{-- table-start --}}
                     <div class="table-aris">
                        <div class="table-container  table-responsive">
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
                                    <th>Contact</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Lead Types</th>
                                    <th>Property Type</th>
                                    <th>Location</th>
                                 </tr>
                              </thead>
                              <tbody  role="alert">
                                 <tr>
                                    <td>
                                       <div class="checkboxwaps">
                                          <input type="checkbox" class="checkbox-wrap">
                                       </div>
                                    </td>
                                    <td>
                                       <div class="user-section">
                                          <div class="userImg">
                                             <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                          </div>
                                          <div class="username-section">
                                             <p class="name">Head</p>
                                             <p class="small-text">
                                                11-1-2023
                                             </p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>350@gmail.com</td>
                                    <td>090078601</td>
                                    <td>New York</td>
                                    <td>WA</td>
                                    <td>Buyer</td>
                                    <td>Single Family</td>
                                    <td>
                                       <p class="table-txt">151 N 79th Street <br> Seatle , WA 98103</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="checkboxwaps">
                                          <input type="checkbox" class="checkbox-wrap">
                                       </div>
                                    </td>
                                    <td>
                                       <div class="user-section">
                                          <div class="userImg">
                                             <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                          </div>
                                          <div class="username-section">
                                             <p class="name">Miller</p>
                                             <p class="small-text">
                                                11-1-2023
                                             </p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>350@gmail.com</td>
                                    <td>090078601</td>
                                    <td>New York</td>
                                    <td>WA</td>
                                    <td>Buyer</td>
                                    <td>Single Family</td>
                                    <td>
                                       <p>151 N 79th Street <br> Seatle , WA 98103</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="checkboxwaps">
                                          <input type="checkbox" class="checkbox-wrap">
                                       </div>
                                    </td>
                                    <td>
                                       <div class="user-section">
                                          <div class="userImg">
                                             <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                          </div>
                                          <div class="username-section">
                                             <p class="name">John</p>
                                             <p class="small-text">
                                                11-1-2023
                                             </p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>350@gmail.com</td>
                                    <td>090078601</td>
                                    <td>New York</td>
                                    <td>WA</td>
                                    <td>Buyer</td>
                                    <td>Single Family</td>
                                    <td>
                                       <p>151 N 79th Street <br> Seatle , WA 98103</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="checkboxwaps">
                                          <input type="checkbox" class="checkbox-wrap">
                                       </div>
                                    </td>
                                    <td>
                                       <div class="user-section">
                                          <div class="userImg">
                                             <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                          </div>
                                          <div class="username-section">
                                             <p class="name">Smith</p>
                                             <p class="small-text">
                                                11-1-2023
                                             </p>
                                          </div>
                                       </div>
                                    </td>
                                    <td>350@gmail.com</td>
                                    <td>090078601</td>
                                    <td>New York</td>
                                    <td>WA</td>
                                    <td>Buyer</td>
                                    <td>Single Family</td>
                                    <td>
                                       <p>151 N 79th Street <br> Seatle , WA 98103</p>
                                    </td>
                                 </tr>
                              </tbody>
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
                  <div class="table-aris">
                     <div class="table-container  table-responsive">
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
                           <tbody  role="alert">
                              <tr>
                                 <td>
                                    <div class="checkboxwaps">
                                       <input type="checkbox" class="checkbox-wrap">
                                    </div>
                                 </td>
                                 <td>
                                    <div class="user-section">
                                       <div class="userImg">
                                          <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                       </div>
                                       <div class="username-section">
                                          <p class="name">Joseph</p>
                                          <p class="small-text">
                                             11-1-2023
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>350@gmail.com</td>
                                 <td>090078601</td>
                                 <td>New York</td>
                                 <td>
                                    <p class="table-txt">We can help you in many ways
                                    </p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="checkboxwaps">
                                       <input type="checkbox" class="checkbox-wrap">
                                    </div>
                                 </td>
                                 <td>
                                    <div class="user-section">
                                       <div class="userImg">
                                          <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                       </div>
                                       <div class="username-section">
                                          <p class="name">Steve</p>
                                          <p class="small-text">
                                             11-1-2023
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>350@gmail.com</td>
                                 <td>090078601</td>
                                 <td>New York</td>
                                 <td>
                                    <p class="table-txt">We can help you in many ways</p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  {{-- table-end --}}
                  <div class="table-wrapperinquiry">
                     <div class="header-left-sect">
                        <p class="heading-text">Scheduled Inquiries</p>
                        <p class="small-text">Tue , 03 Apirl 2023</p>
                     </div>
                  </div>
                  <div class="table-aris mt-4">
                     <div class="table-container  table-responsive">
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
                                 <th>Scheduled Date</th>
                                 <th>Property Address</th>
                              </tr>
                           </thead>
                           <tbody  role="alert">
                              <tr>
                                 <td>
                                    <div class="checkboxwaps">
                                       <input type="checkbox" class="checkbox-wrap">
                                    </div>
                                 </td>
                                 <td>
                                    <div class="user-section">
                                       <div class="userImg">
                                          <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                       </div>
                                       <div class="username-section">
                                          <p class="name">Eddy</p>
                                          <p class="small-text">
                                             11-1-2023
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>350@gmail.com</td>
                                 <td>090078601</td>
                                 <td>11-2-2023</td>
                                 <td>
                                    <p class="table-txt">Not Confirm</p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="checkboxwaps">
                                       <input type="checkbox" class="checkbox-wrap">
                                    </div>
                                 </td>
                                 <td>
                                    <div class="user-section">
                                       <div class="userImg">
                                          <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
                                       </div>
                                       <div class="username-section">
                                          <p class="name">Steve</p>
                                          <p class="small-text">
                                             11-1-2023
                                          </p>
                                       </div>
                                    </div>
                                 </td>
                                 <td>350@gmail.com</td>
                                 <td>090078601</td>
                                 <td>11-2-2023</td>
                                 <td>
                                    <p class="table-txt">Not Confirm</p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- explore-tab-end -->
               </div>
               <!-- add-two-tab-end -->
               <div class="tab-pane fade" id="v-pills-unassign-load-one" role="tabpanel" aria-labelledby="v-pills-unassign-load-tab-one">
                <!-- explore-tab-start -->
                <div class="listing-cardwrap">
                   <div class="row">
                      <div class="col-12 col-md-6 col-lg-4">
                         <div class="listing-cardwrapper">
                            {{-- card-wrapper-start --}}
                            <div class="box">
                               <div class="top">
                                  <img src="{{ asset('public/assetsnew/images/houseone.jpg') }}" alt="" />
                                  <span
                                     ><i class="fas fa-heart"></i><i class="fas fa-exchange-alt"></i
                                     ></span>
                                  <div class="topbarwrap">
                                     <div class="aris360prem">
                                        <p class="bartxt">ARIS360 PREMIER</p>
                                     </div>
                                     <div class="arissalewrap">
                                        <p class="saletxt">For Sale</p>
                                     </div>
                                  </div>
                               </div>
                               <div class="bottom">
                                  <div class="propertycardhead">
                                     <p class="luxury-txt">Luxury Family Home</p>
                                     <p class="price-txt">$ 1,065,000</p>
                                  </div>
                                  <p class="address-txt">
                                     <span><i class="fas fa-map-marker-alt"></i></span> 4800 Fremont Avenue N # 114 Seattle,WA
                                  </p>
                                  <p class="premier-txt"><span>Property Category : </span> Premier Properties </p>
                                  <div class="advants">
                                    <div>
                                       <div><i class="fas fa-th-large"></i><span>3 Bedrooms</span></div>

                                    </div>
                                    <div>
                                       <div><i class="fas fa-shower"></i><span>3 Bathrooms</span></div>

                                    </div>
                                    <div style="border-right:none;">
                                       <div>
                                          <span><i class="fas fa-vector-square"></i
                                             >4300 Sq Ft</span>
                                       </div>

                                    </div>
                                 </div>
                                  <div class="cardsharewrap">
                                     <div class="cardprofilewrap">
                                        <div class="user-section">
                                           <div class="userImg">
                                              <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
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
                                        <span class="sharecontent"><i class="fas fa-share-alt"></i></span>
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            {{-- card-wrapper-end --}}
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                         <div class="listing-cardwrapper mb-4">
                            {{-- card-wrapper-start --}}
                            <div class="box">
                               <div class="top">
                                  <img src="{{ asset('public/assetsnew/images/houseone.jpg') }}" alt="" />
                                  <span
                                     ><i class="fas fa-heart"></i><i class="fas fa-exchange-alt"></i
                                     ></span>
                                  <div class="topbarwrap">
                                     <div class="aris360prem">
                                        <p class="bartxt">ARIS360 PREMIER</p>
                                     </div>
                                     <div class="arissalewrap">
                                        <p class="saletxt">For Sale</p>
                                     </div>
                                  </div>
                               </div>
                               <div class="bottom">
                                  <div class="propertycardhead">
                                     <p class="luxury-txt">Luxury Family Home</p>
                                     <p class="price-txt">$ 1,065,000</p>
                                  </div>
                                  <p class="address-txt">
                                     <span><i class="fas fa-map-marker-alt"></i></span> 4800 Fremont Avenue N # 114 Seattle,WA
                                  </p>
                                  <p class="premier-txt"><span>Property Category : </span> Premier Properties </p>
                                  <div class="advants">
                                    <div>
                                       <div><i class="fas fa-th-large"></i><span>3 Bedrooms</span></div>

                                    </div>
                                    <div>
                                       <div><i class="fas fa-shower"></i><span>3 Bathrooms</span></div>

                                    </div>
                                    <div style="border-right:none;">
                                       <div>
                                          <span><i class="fas fa-vector-square"></i
                                             >4300 Sq Ft</span>
                                       </div>

                                    </div>
                                 </div>
                                  <div class="cardsharewrap">
                                     <div class="cardprofilewrap">
                                        <div class="user-section">
                                           <div class="userImg">
                                              <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
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
                                        <span class="sharecontent"><i class="fas fa-share-alt"></i></span>
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            {{-- card-wrapper-end --}}
                         </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4">
                         <div class="listing-cardwrapper">
                            {{-- card-wrapper-start --}}
                            <div class="box">
                               <div class="top">
                                  <img src="{{ asset('public/assetsnew/images/houseone.jpg') }}" alt="" />
                                  <span
                                     ><i class="fas fa-heart"></i><i class="fas fa-exchange-alt"></i
                                     ></span>
                                  <div class="topbarwrap">
                                     <div class="aris360prem">
                                        <p class="bartxt">ARIS360 PREMIER</p>
                                     </div>
                                     <div class="arissalewrap">
                                        <p class="saletxt">For Sale</p>
                                     </div>
                                  </div>
                               </div>
                               <div class="bottom">
                                  <div class="propertycardhead">
                                     <p class="luxury-txt">Luxury Family Home</p>
                                     <p class="price-txt">$ 1,065,000</p>
                                  </div>
                                  <p class="address-txt">
                                     <span><i class="fas fa-map-marker-alt"></i></span> 4800 Fremont Avenue N # 114 Seattle,WA
                                  </p>
                                  <p class="premier-txt"><span>Property Category : </span> Premier Properties </p>
                                  <div class="advants">
                                    <div>
                                       <div><i class="fas fa-th-large"></i><span>3 Bedrooms</span></div>

                                    </div>
                                    <div>
                                       <div><i class="fas fa-shower"></i><span>3 Bathrooms</span></div>

                                    </div>
                                    <div style="border-right:none;">
                                       <div>
                                          <span><i class="fas fa-vector-square"></i
                                             >4300 Sq Ft</span>
                                       </div>

                                    </div>
                                 </div>
                                  <div class="cardsharewrap">
                                     <div class="cardprofilewrap">
                                        <div class="user-section">
                                           <div class="userImg">
                                              <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
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
                                        <span class="sharecontent"><i class="fas fa-share-alt"></i></span>
                                        </a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            {{-- card-wrapper-end --}}
                         </div>
                      </div>
                   </div>
                </div>
                <!-- explore-tab-end -->
             </div>
               <!-- load-tab-start -->
               <div class="tab-pane fade" id="v-pills-view-load" role="tabpanel" aria-labelledby="v-pills-view-load-tab">
                  <!-- explore-tab-start -->
                   <div class="savesearchwrappers">
                        <div class="search-field mb-4">
                            <input type="text" placeholder="search here">
                            <div class="search-icon">
                            <i class="fas fa-search"></i>
                            </div>
                        </div>
                            {{-- save-search-start --}}
                  <div class="searchwrapped mb-4">
                    <div class="f_leads_item_details">
                       <div class="details">
                          <p class="danger">For Sale</p>
                          <p>
                             Bellevue
                          </p>
                       </div>
                       <div class="editwrapped">
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-edit"></i><span>Edit</span>
                             </div>
                          </a>
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-trash-alt"></i><span>Delete</span>
                             </div>
                          </a>
                       </div>
                    </div>
                 </div>
                 {{-- save-search-end --}}
                 {{-- save-search-start --}}
                 <div class="searchwrapped mb-4">
                    <div class="f_leads_item_details">
                       <div class="details">
                          <p class="danger">For Sale</p>
                          <p>
                             Bellevue
                          </p>
                       </div>
                       <div class="editwrapped">
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-edit"></i><span>Edit</span>
                             </div>
                          </a>
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-trash-alt"></i><span>Delete</span>
                             </div>
                          </a>
                       </div>
                    </div>
                 </div>
                 {{-- save-search-end --}}
                 {{-- save-search-start --}}
                 <div class="searchwrapped mb-4">
                    <div class="f_leads_item_details">
                       <div class="details">
                          <p class="danger">For Sale</p>
                          <p>
                             Bellevue
                          </p>
                       </div>
                       <div class="editwrapped">
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-edit"></i><span>Edit</span>
                             </div>
                          </a>
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-trash-alt"></i><span>Delete</span>
                             </div>
                          </a>
                       </div>
                    </div>
                 </div>
                 {{-- save-search-end --}}
                 {{-- save-search-start --}}
                 <div class="searchwrapped mb-4">
                    <div class="f_leads_item_details">
                       <div class="details">
                          <p class="danger">For Sale</p>
                          <p>
                             Bellevue
                          </p>
                       </div>
                       <div class="editwrapped">
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-edit"></i><span>Edit</span>
                             </div>
                          </a>
                          <a href="#!" class="acticon">
                             <div class="editwrappers">
                                <i class="fas fa-trash-alt"></i><span>Delete</span>
                             </div>
                          </a>
                       </div>
                    </div>
                 </div>
                 {{-- save-search-end --}}
                   </div>
                  <!-- explore-tab-end -->
               </div>
               <!-- load-tab-end --><!-- load-tab-start -->
               <div class="tab-pane fade" id="v-pills-unassign-load" role="tabpanel" aria-labelledby="v-pills-unassign-load-tab">
                  <!-- explore-tab-start -->
                  <div class="listing-cardwrap">
                     <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                           <div class="listing-cardwrapper">
                              {{-- card-wrapper-start --}}
                              <div class="box">
                                 <div class="top">
                                    <img src="{{ asset('public/assetsnew/images/houseone.jpg') }}" alt="" />
                                    <span
                                       ><i class="fas fa-heart"></i><i class="fas fa-exchange-alt"></i
                                       ></span>
                                    <div class="topbarwrap">
                                       <div class="aris360prem">
                                          <p class="bartxt">ARIS360 PREMIER</p>
                                       </div>
                                       <div class="arissalewrap">
                                          <p class="saletxt">For Sale</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bottom">
                                    <div class="propertycardhead">
                                       <p class="luxury-txt">Luxury Family Home</p>
                                       <p class="price-txt">$ 1,065,000</p>
                                    </div>
                                    <p class="address-txt">
                                       <span><i class="fas fa-map-marker-alt"></i></span> 4800 Fremont Avenue N # 114 Seattle,WA
                                    </p>
                                    <p class="premier-txt"><span>Property Category : </span> Premier Properties </p>
                                    <div class="advants">
                                        <div>
                                           <div><i class="fas fa-th-large"></i><span>3 Bedrooms</span></div>

                                        </div>
                                        <div>
                                           <div><i class="fas fa-shower"></i><span>3 Bathrooms</span></div>

                                        </div>
                                        <div style="border-right:none;">
                                           <div>
                                              <span><i class="fas fa-vector-square"></i
                                                 >4300 Sq Ft</span>
                                           </div>

                                        </div>
                                     </div>
                                    <div class="cardsharewrap">
                                       <div class="cardprofilewrap">
                                          <div class="user-section">
                                             <div class="userImg">
                                                <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
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
                                          <span class="sharecontent"><i class="fas fa-share-alt"></i></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- card-wrapper-end --}}
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                           <div class="listing-cardwrapper mb-4">
                              {{-- card-wrapper-start --}}
                              <div class="box">
                                 <div class="top">
                                    <img src="{{ asset('public/assetsnew/images/houseone.jpg') }}" alt="" />
                                    <span
                                       ><i class="fas fa-heart"></i><i class="fas fa-exchange-alt"></i
                                       ></span>
                                    <div class="topbarwrap">
                                       <div class="aris360prem">
                                          <p class="bartxt">ARIS360 PREMIER</p>
                                       </div>
                                       <div class="arissalewrap">
                                          <p class="saletxt">For Sale</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bottom">
                                    <div class="propertycardhead">
                                       <p class="luxury-txt">Luxury Family Home</p>
                                       <p class="price-txt">$ 1,065,000</p>
                                    </div>
                                    <p class="address-txt">
                                       <span><i class="fas fa-map-marker-alt"></i></span> 4800 Fremont Avenue N # 114 Seattle,WA
                                    </p>
                                    <p class="premier-txt"><span>Property Category : </span> Premier Properties </p>
                                    <div class="advants">
                                        <div>
                                           <div><i class="fas fa-th-large"></i><span>3 Bedrooms</span></div>

                                        </div>
                                        <div>
                                           <div><i class="fas fa-shower"></i><span>3 Bathrooms</span></div>

                                        </div>
                                        <div style="border-right:none;">
                                           <div>
                                              <span><i class="fas fa-vector-square"></i
                                                 >4300 Sq Ft</span>
                                           </div>

                                        </div>
                                     </div>
                                    <div class="cardsharewrap">
                                       <div class="cardprofilewrap">
                                          <div class="user-section">
                                             <div class="userImg">
                                                <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
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
                                          <span class="sharecontent"><i class="fas fa-share-alt"></i></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- card-wrapper-end --}}
                           </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                           <div class="listing-cardwrapper">
                              {{-- card-wrapper-start --}}
                              <div class="box">
                                 <div class="top">
                                    <img src="{{ asset('public/assetsnew/images/houseone.jpg') }}" alt="" />
                                    <span
                                       ><i class="fas fa-heart"></i><i class="fas fa-exchange-alt"></i
                                       ></span>
                                    <div class="topbarwrap">
                                       <div class="aris360prem">
                                          <p class="bartxt">ARIS360 PREMIER</p>
                                       </div>
                                       <div class="arissalewrap">
                                          <p class="saletxt">For Sale</p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bottom">
                                    <div class="propertycardhead">
                                       <p class="luxury-txt">Luxury Family Home</p>
                                       <p class="price-txt">$ 1,065,000</p>
                                    </div>
                                    <p class="address-txt">
                                       <span><i class="fas fa-map-marker-alt"></i></span> 4800 Fremont Avenue N # 114 Seattle,WA
                                    </p>
                                    <p class="premier-txt"><span>Property Category : </span> Premier Properties </p>
                                    <div class="advants">
                                        <div>
                                           <div><i class="fas fa-th-large"></i><span>3 Bedrooms</span></div>

                                        </div>
                                        <div>
                                           <div><i class="fas fa-shower"></i><span>3 Bathrooms</span></div>

                                        </div>
                                        <div style="border-right:none;">
                                           <div>
                                              <span><i class="fas fa-vector-square"></i
                                                 >4300 Sq Ft</span>
                                           </div>

                                        </div>
                                     </div>
                                    <div class="cardsharewrap">
                                       <div class="cardprofilewrap">
                                          <div class="user-section">
                                             <div class="userImg">
                                                <img src="{{ asset('public/assetsnew/images/user-image.png') }}" class="img-fluid" alt="">
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
                                          <span class="sharecontent"><i class="fas fa-share-alt"></i></span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              {{-- card-wrapper-end --}}
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- explore-tab-end -->
               </div>
               <!-- load-tab-end -->
               <div class="tab-pane fade" id="v-pills-unassign-load-complain" role="tabpanel" aria-labelledby="v-pills-unassign-load-tab-complain">
                <!-- explore-tab-start -->
                <div class="listing-cardwrap">
                    <div class="searchwrapped mb-4">
                        <div class="f_leads_item_details">
                           <div class="details">
                              <p class="danger">Complaint Box</p>
                              <p>
                                Complaint Box can be an effective way of resolving issues.
                           </div>

                        </div>
                     </div>
                     <div class="slide-button">
                        <button type="button" class="cta-btnone yellow-bg"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Complaint</button>
                    </div>

                </div>
                <!-- explore-tab-end -->
             </div>
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
            if(input.files && input.files[0]) {
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
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title head-complain" id="exampleModalLabel">Complaint Box</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                  {{-- start --}}
                  <div class="profile_setting mb-3" id="complaintForm" style="display: block; margin: auto;">
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="location-wrap">
                                    <!-- location-wrap-start -->
                                    <label class="profile_fields">Complain Type</label>
                                    <div class="select-menu-three">
                                        <div class="select-btn-three">
                                            <span class="sBtn-text-three">SELECT ONE</span>
                                            <i class="fas fa-angle-down icon"></i>
                                        </div>
                                        <ul class="options-three">
                                            <li class="option-three">
                                            <span class="option-text-three">AGENT</span>
                                            </li>
                                            <li class="option-three">
                                            <span class="option-text-three">PROPERTIES</span>
                                            </li>
                                            <li class="option-three">
                                            <span class="option-text-three">USERS</span>
                                            </li>
                                            <li class="option-three">
                                            <span class="option-text-three">OTHERS</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- location-wrap-end -->
                                </div>

                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <label class="profile_fields">Subject</label>
                                <input class="subject-input" type="text" placeholder="Email">
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <label class="profile_fields">Description</label>
                               <textarea class="contact-textarea form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12">
                                <label class="profile_fields mt-3">Attachments (up to 4):</label>
                                <div class="upload-card">
                                    <div class="file-upload">
                                        <div class="file-select">
                                            <!--<div class="imagePreview"></div>-->
                                            <button class="btn btn-secondary">Choose File</button>
                                            <div class="file-select-name">No File Chosen</div>
                                            <input type="file" class="profileimg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                  {{-- end --}}
              </form>
            </div>
            <div class="slide-button complain-btn">
                <button  class="cta-btnone yellow-bg">Submit</button>
            </div>
          </div>
        </div>
      </div>
   </body>
</html>
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
    $(document).ready(function() {
  $(document).on('change', '.file-upload input[type="file"]', function() {
      var filename = $(this).val();
      if (/^\s*$/.test(filename)) {
          $(this).parents(".file-upload").find(".file-select-name").text("No file chosen...");
      } else {
          $(this).parents(".file-upload").find(".file-select-name").text(filename.substring(
              filename.lastIndexOf("\\") + 1, filename.length));
      }

      var uploadFile = $(this);
      var files = !!this.files ? this.files : [];
      if (!files.length || !window.FileReader)
  return; // no file selected, or no FileReader support

      if (/^image/.test(files[0].type)) { // only image file
          var reader = new FileReader(); // instance of the FileReader
          reader.readAsDataURL(files[0]); // read the local file

          reader.onloadend = function() { // set image data as background of div
              // alert(uploadFile.closest(".file-upload").find('.imagePreview').length);
              uploadFile.closest(".file-upload").find('.imagePreview').css("background-image",
                  "url(" + this.result + ")");
          }
      }
  });
  $(document).on('click', '.file-remove', function(e) {
      e.preventDefault();
      $(this).closest('.file-upload').remove();
      return false;
  });
  $(document).on('click', '.file-add', function(e) {
      e.preventDefault();
      $(".upload-card").append('<div class="file-upload">' +
          '<div class="file-select">' +
          '<div class="imagePreview"></div>' +
          '<button class="btn btn-secondary">Choose File</button>' +
          '<div class="file-select-name">No File Chosen</div>' +
          '<input type="file" name="files[]" class="profileimg">' +
          '</div>' +
          '<button class="btn btn-danger file-remove">Remove</button>' +
          '</div>');
      return false;

  });
});

</script>
