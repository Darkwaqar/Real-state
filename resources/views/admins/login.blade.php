<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Aris 360</title>
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('public/assets/images/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{ asset('public/assets/css/font-awesome-all.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('public/assets/images/favicon.png') }}" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/apple-touch-icon-57-precomposed.png') }}">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('public/admin/assets/images/apple-touch-icon-114-precomposed.png') }}">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('public/admin/assets/images/apple-touch-icon-72-precomposed.png') }}">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('public/admin/assets/images/apple-touch-icon-144-precomposed.png') }}">    <!-- For iPad Retina display -->




        <!-- CORE CSS FRAMEWORK - START -->
        <link href="{{ asset('public/admin/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('public/admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('public/admin/assets/css/animate.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('public/admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <link href="{{ asset('public/admin/assets/plugins/icheck/skins/square/orange.css') }}" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


        <!-- CORE CSS TEMPLATE - START -->
        <link href="{{ asset('public/admin/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('public/admin/assets/css/responsive.cs') }}s" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
<style>
    .admin_logo_img {
    display: flex;
    justify-content: center;
    align-items: center;
}

.admin_logo_img img {
    max-width: 230px;
    object-fit: cover;
    object-position: center;
}
.admin_logo_img .adminSFL {
     filter: brightness(15.5);
}
</style>
    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" login_page">


        <div class="login-wrapper d-flex align-items-center">
            <div id="login" class="login loginpage offset-xl-4 col-xl-4 offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-offset-0 col-12">
                <h1>
                    <!-- <a href="#" title="Login Page" tabindex="-1"></a>
                    <a href="#" title="" tabindex="-1"></a> -->
                </h1>
                <div class="row">
                    <div class="admin_logo_img col-12 col-lg-6">
                        <img class="lgadmn2" src="{{ asset('public/assets/images/Aris-Logonew2.png') }}" alt="">
                    </div>
                    <div class="admin_logo_img col-12 col-lg-6">
                        <img class="adminSFL" src="{{ asset('public/admin/assets/images/sfl-admin-logo.png') }}" alt="">
                    </div>
                    <div class="col-12">
                        {{ getSetFlashData() }}
                    </div>
                </div>

                <form name="loginform" id="loginform" action="{{ url('/admin/auth') }}" method="post">
                    <div class="row clearfix">
                        <div class="col-12">
                            <div class="field-input">
                                <label for="user_login">Email<br />
                                <input type="text" name="email" id="user_login" class="input" value="{{old('email')}}" placeholder="enter your email..." size="20" /></label>
                                @error('email')
                                {{$message}}
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="field-input">
                                <label for="user_pass">Password<br />
                                <!--<div class="input_eye_icon_2"><i class="fas fa-eye-slash" id="admineye"></i></div>-->
                                <input type="password" name="password" id="user_pass" class="input" value="" size="20" placeholder="enter your password..." /></label>
                                @error('password')
                                {{$message}}
                                @enderror
                            </div>
                        </div>

                        @csrf
                    </div>
                    <!-- <p class="forgetmenot">
                        <label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Remember me</label>
                    </p> -->



                    <p class="submit">
                        <!-- <a href="way-page.html" type="submit" class="btn btn-orange btn-block" value="">Sign In -->
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block  google-signin" value="Sign In" />
                        <!-- </a> -->
                    </p>
                </form>

                <!-- <p id="nav">
                    <a class="float-left" href="#" title="Password Lost and Found">Forgot password?</a>
                    <a class="float-right" href="ui-register.html" title="Sign Up">Sign Up</a>
                </p> -->


            </div>
        </div>





        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START -->
        <script src="{{ asset('public/admin/assets/js/jquery-3.4.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/js/popper.min.js') }}" type="text/javascript"></script>
        <!-- <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>  -->
        <script src="{{ asset('public/admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('public/admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/plugins/viewport/viewportchecker.js') }}" type="text/javascript"></script>
        <!-- CORE JS FRAMEWORK - END -->


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <script src="{{ asset('public/admin/assets/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->


        <!-- CORE TEMPLATE JS - START -->
        <script src="{{ asset('public/admin/assets/js/scripts.js') }}" type="text/javascript"></script>
        <!-- END CORE TEMPLATE JS - END -->

        <!-- Sidebar Graph - START -->
        <script src="{{ asset('public/admin/assets/plugins/sparkline-chart/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/assets/js/chart-sparkline.js') }}" type="text/javascript"></script>
        <!-- Sidebar Graph - END -->













        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>



