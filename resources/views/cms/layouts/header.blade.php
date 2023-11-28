<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- ==== Document Title ==== -->
    <title>Dashboard - ARIS360</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicon ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="public/assets/cms/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/morris.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/select2.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/jquery-jvectormap.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/horizontal-timeline.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/weather-icons.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/dropzone.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/ion.rangeSlider.skinFlat.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/datatables.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="public/assets/cms/assets/css/style.css">
    <!-- Sweet Alert  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css">
    <!-- Page Level Stylesheets -->
    <script src="public/assets/cms/assets/js/jquery.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span preloader-text="A" class="characters">A</span>

                    <span preloader-text="R" class="characters">R</span>

                    <span preloader-text="I" class="characters">I</span>

                    <span preloader-text="S" class="characters">S</span>

                    <span preloader-text="3" class="characters">3</span>

                    <span preloader-text="6" class="characters">6</span>

                    <span preloader-text="0" class="characters">0</span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Navbar Start -->
        <header class="navbar navbar-fixed">
            <!-- Navbar Header Start -->
            <div class="navbar--header">
                <!-- Logo Start -->
                <a href="index.html" class="logo">
                    {{-- <img src="public/assets/cms/assets/img/logo.png" alt=""> --}}
                    <img src="public/assets/images/Aris-Logonew2.png" alt="">
                </a>
                <!-- Logo End -->

                <!-- Sidebar Toggle Button Start -->
                <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                    <i class="fa fa-bars"></i>
                </a>
                <!-- Sidebar Toggle Button End -->
            </div>
            <!-- Navbar Header End -->

            <!-- Sidebar Toggle Button Start -->
            <a href="#" class="navbar--btn" data-toggle="sidebar" title="Toggle Sidebar">
                <i class="fa fa-bars"></i>
            </a>
            <!-- Sidebar Toggle Button End -->


            <div class="navbar--nav ml-auto">
                <ul class="nav">

                    <!-- Nav User Start -->
                    <li class="nav-item dropdown nav--user online">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="public/assets/images/icons/profile-picture.webp" alt=""
                                class="rounded-circle">
                            <span>ARIS360</span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            {{-- <li>
                                <a href="#" data-toggle="modal" data-target="#basicModal" class="btn-link"><i
                                        class="far fa-user"></i>Profile</a></li> --}}
                            <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-power-off"></i>Logout</a></li>
                        </ul>
                    </li>
                    <!-- Nav User End -->
                </ul>
            </div>
        </header>
        <!-- Navbar End -->

        <!-- basic modal -->
        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content bg-modal">
                    <div class="modal-body">

                        <!-- Edit info -->
                        <div class="container">

                            <!-- Vertical navs -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <ul class="nav-vertical nav nav-pills flex-column" id="myTab" role="tablist">
                                        {{-- <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#profile"
                                        role="tab" aria-controls="home" aria-selected="true">Update Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#account" role="tab"
                                        aria-controls="profile" aria-selected="false">Update Username</a>
                                </li> --}}
                                        <li class="nav-item">
                                            <a class="nav-link" href="#password" aria-controls="contact"
                                                aria-selected="false">Update Password</a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Pages -->
                                <div class="col-md-8">
                                    <div class="tab-content" id="myTabContent">

                                        <!-- Page : Edit profile -->
                                        <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                            aria-labelledby="home-tab">

                                            <label>Old password</label>
                                            <div class="input-group">
                                                <input type="password" name="" id=""
                                                    class="form-control">
                                            </div>
                                            <br />
                                            <label>New password</label>
                                            <div class="input-group">
                                                <input type="password" name="" id=""
                                                    class="form-control">
                                            </div>

                                            <!-- Page : Account -->
                                            {{-- <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="profile-tab">

                                    <label>Username</label>
                                    <div class="input-group">
                                        <input type="text" name="" id="" value="My Name" class="form-control">
                                    </div>
                                    <br />
                                    <label>Email</label>
                                    <div class="input-group">
                                       <input type="email" name="" id="" value="myname@gmail.com" class="form-control" disabled>
                                    </div>


                                </div> --}}

                                            <!-- Page : Password -->
                                            {{-- <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="contact-tab">

                                    <label>Old password</label>
                                    <div class="input-group">
                                        <input type="password" name="" id="" class="form-control">
                                    </div>
                                    <br />
                                    <label>New password</label>
                                    <div class="input-group">
                                        <input type="password" name="" id="" class="form-control">
                                    </div>

                                </div> --}}

                                        </div>
                                    </div>
                                    <!-- /.col-md-8 -->
                                </div>

                            </div>
                            <!-- Edit info -->

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary update-alert">Update changes</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
