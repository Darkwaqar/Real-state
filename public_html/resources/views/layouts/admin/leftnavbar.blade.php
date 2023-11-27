@php

    $notifications = fetchNotification();
    //dd($notifications)
@endphp
</head>
<script src="{{ asset('public/assets/js/jquery.js') }}"></script>
<script src="https://js.pusher.com/8.0/pusher.min.js"></script>
<script type="module" src="../resources/js/admin.js"></script>
<!-- END HEAD -->
<style>
    .admin_logo_img {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .active {
        color: red;
        /* You can customize the styles for the active class as per your requirements */
    }

    .admin_logo_img img {
        max-width: 230px;
        object-fit: cover;
        object-position: center;
    }

    .admin_logo_img .adminSFL {
        filter: brightness(15.5);
    }

    .notification_icon_wrap {
        position: fixed;
        right: 20px;
        top: 20px;
        z-index: 999;
    }

    .notification_icon_wrap button {
        font-size: 38px;
        color: #32323a;
        border: none;
        width: max-content;
        height: max-content;
        outline: none;
        background: transparent;
    }

    .notification_icon_wrap .count_wrap {
        background: #DE1E25;
        font-size: 10px;
        position: absolute;
        z-index: 999;
        width: 20px;
        height: 20px;
        color: #fff;
        font-weight: 500;
        display: flex;
        align-items: center;
        justify-content: center;
        top: -5px;
        border-radius: 20px;
        right: 0px;
    }

    .notification_icon_wrap .notification_dropdown {
        position: absolute;
        background: #f5f5f5;
        top: calc(100% - 10px);
        right: calc(100% - 4px);
        width: 400px;
        height: 500px;
        overflow: hidden;
        z-index: -999;
        border-radius: 10px;
        transition: .3s;
        opacity: 0;
        display: none;
        box-shadow: 0 0 10px #d4d4d4;
        flex-direction: column;
        justify-content: space-between;
        padding: 10px;

    }

    .notification_dropdown.open_notification {
        display: flex;
        animation: open_dropdown .3s both;
    }

    .notification_icon_wrap .notification_dropdown .scrollable_area {
        flex-grow: 1;
        overflow-y: auto;
    }

    .notification_icon_wrap .notification_dropdown .scrollable_area::-webkit-scrollbar {
        display: none
    }

    .notification {
        display: flex;
        align-items: flex-start;
        border-bottom: solid 1px #d4d4d4;
        padding: 10px;
        position: relative;
        margin-bottom: 10px;
    }

    .notification.unread {
        background: #e1e1e1;
    }

    .notification .user img {
        width: 40px;
        height: 40px;
        border-radius: 40px;
        margin-right: 10px;

    }

    .notification .content {
        overflow: hidden;
    }

    .notification .content p {
        margin: 0;
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .notification .content h3 {
        color: #32323a;
        line-height: 1;
        margin: 0 0 5px 0;
        text-transform: capitalize;
        font-size: 16px
    }

    .notification_icon_wrap .footer_area {
        display: flex;
        justify-content: center;
        background: #32323a;
    }

    .notification_icon_wrap .header_area {
        display: flex;
        justify-content: flex-end;
        background: #32323a;
    }

    .notification_icon_wrap .footer_area button,
    .notification_icon_wrap .header_area button {
        margin: 10px;
        font-size: 16px;
        color: rgba(214, 218, 223, 1.0);
    }

    .notification_icon_wrap .header_area button {
        font-size: 12px;
    }

    .notification_icon_wrap .notification .time_wrap {
        position: absolute;
        right: 10px;
        top: 8px;
        font-size: 12px;
    }

    @keyframes open_dropdown {
        from {
            transform: translateY(-20px);
            opacity: 0;

        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
<!-- BEGIN BODY -->

<body class=" ">


    <div  class="notification_icon_wrap">
        <button onclick="onOpenNotification('notification_dropdown')" class="fa fa-bell"></button>
        <p id="notification_count" class="count_wrap">
            {{ $notifications['count'] }}
        </p>
        <div id="notification_dropdown" class="notification_dropdown">

            <div id="notification_box" class="scrollable_area">

                @forelse ($notifications['data'] as $item)
                    <div class="notification {{ (isset($item['is_read']) &&  $item['is_read'] == 0) ? 'unread' : '' }}">
                        <div class="time_wrap">{{ getTimeAgoAttribute($item['created_at']) }}</div>
                        <div class="user">
                            @if(isset($item['user']['user_dp']) && $item['user_id'] != null)
                            <img src="{{asset('public/images/userdp/'.$item['user']['user_dp'])}}"
                                alt="">
                            @else
                            <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_640.png"
                                alt="">
                            @endif
                        </div>
                        <div class="content">
                            @if(isset($item['source']) && !empty($item['source']))
                            <h3> <a href="{{url($item['source'])}}" target="_blank"> {{ isset($item['type']) ? $item['type'] : '' }} </a></h3>
                            @endif
                            <p>
                                {{ isset($item['message']) ? $item['message'] : '' }}
                            </p>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="footer_area">
                <a href="{{url('/admin/notification')}}">
                <button>See More</button></a>
            </div>
        </div>
    </div>

    <audio id="notificationSound">
        <source src="{{asset('public/assets/tunes/free.mp3')}}" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <!-- START TOPBAR -->

    <div class='page-topbar'>
        <div class='quick-area'>
            <div class='float-right'>
                <ul class="info-menu right-links list-inline list-unstyled">

                </ul>
            </div>
        </div>
    </div>
    <!-- END TOPBAR -->



    <!-- START CONTAINER -->
    <div class="page-container row-fluid">

        <!-- SIDEBAR - START -->
        <div class="page-sidebar ">

            <!-- MAIN MENU - START -->
            <div class="page-sidebar-wrapper" id="main-menu-wrapper">

                <!-- USER INFO - START -->
                <div class="profile-info row">

                    <div
                        class="profile-image col-lg-12 col-md-12 col-12 d-flex align-items-center justify-content-center">
                        <a href="#">
                            <img src="{{ asset('public/data/profile/profile.png') }}" class="img-fluid rounded-circle">
                        </a>
                    </div>

                    <div
                        class="profile-details col-lg-12 col-md-12 col-12 d-flex justify-content-center align-items-center">
                        <div class="name-section">
                            <h3>
                                <a href="#">
                                    {{ getUserSessionData('first_name') }}
                                </a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <!-- <span class="profile-status online"></span> -->
                            </h3>

                            <p class="profile-title">Super Admin</p>
                        </div>
                    </div>

                </div>
                <!-- USER INFO - END -->



                <ul class='wraplist'>

                    <li>
                        <a href="{{ route('adminHomeNew') }}">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li
                        class="{{ Route::currentRouteName() === 'adminProperties' || Route::currentRouteName() === 'adminFeaturedProperties' ? 'open active' : '' }}">
                        <a href="javascript:;"
                            class="{{ Route::currentRouteName() == 'adminHomeNew' ? 'open dashboard' : '' }}">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">All Properties</span>
                            <span
                                class="{{ Route::currentRouteName() === 'adminProperties' || Route::currentRouteName() === 'adminFeaturedProperties' ? 'arrow open' : 'arrow' }}"></span>
                            <!-- <span class="badge badge-orange">NEW</span> -->
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="{{ Route::currentRouteName() === 'adminProperties' ? 'open active' : '' }}"
                                    href="{{ url('/admin/properties') }}">NWMLS Properties</a>
                            </li>
                            <li>
                                <a class="{{ Route::currentRouteName() === 'adminFeaturedProperties' ? 'open active' : '' }}"
                                    href="{{ url('/admin/featured-properties') }}">Aris360 Featured
                                    Properties</a>
                            </li>


                        </ul>
                    </li>

                    <li class="{{ Route::currentRouteName() === 'agentOnboard' ? 'menu-item open active' : '' }}">
                        <a href="{{ url('/admin/agent-onboard') }}">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Real State Agent</span>
                            <!-- <span class="badge badge-orange">NEW</span> -->
                        </a>
                    </li>

                    <li class="{{ Route::currentRouteName() === 'usersignedup' ? 'menu-item open active' : '' }}">
                        <a href="{{ url('/admin/user-signed-up') }}">
                            <i class="fa fa-gift"></i>
                            <span class="title">Users Signed Up</span>
                        </a>
                    </li>


                    <li class="{{ Route::currentRouteName() === 'sellingleads' ? 'menu-item open active' : '' }}">
                        <a href="{{ url('/admin/leads') }}">
                            <i class="fa fa-gift"></i>
                            <span class="title">Leads</span>
                        </a>
                    </li>


                    <li class="{{ Route::currentRouteName() === 'newsletterAdmin' ? 'menu-item open active' : '' }}">
                        <a href="{{ url('/admin/newsletter') }}">
                            <i class="fa fa-gift"></i>
                            <span class="title">subscribers</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="javascript:;">
                            <i class="fa fa-bar-chart"></i>
                            <span class="title">Blogs</span>
                            <span class="arrow "></span>

                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="{{ url('/admin/new-blog-category') }}">New Blog Category</a>
                            </li>
                            <li>
                                <a class="" href="{{ url('/admin/blog-categories') }}">All Categories</a>
                            </li>
                            <li>
                                <a class="" href="{{ url('/admin/new-blog') }}">New Blog</a>
                            </li>
                            <li>
                                <a class="" href="{{ url('/admin/blogs') }}">All Blog</a>
                            </li>
                        </ul>
                    </li>





                    {{-- <li class="">
                                    <a href="{{ url('/admin/finance') }}">
                                        <i class="fa fa-dashboard"></i>
                                        <span class="title">Finance</span>
                                    </a>
                                </li> --}}

                    <li class="">
                        <a href="{{ url('/admin/tickets') }}">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Ticket System</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ url('/cms-system') }}" target="_blank">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">CMS System</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="{{ url('/admin/logout') }}">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">logout</span>
                        </a>
                    </li>
                    {{-- <li class="">
                                    <a href="https://app.hubspot.com/login?hubs_signup-url=www.hubspot.com/homepage&hubs_signup-cta=homepage-nav-login&hubs_content=www.hubspot.com/homepage&hubs_content-cta=homepage-nav-login" target = "_blank">
                                        <i class="fa fa-dashboard"></i>
                                        <span class="title">HubSpot</span>
                                    </a>
                                </li> --}}

                    <li class="menu-item">
                        <a href="{{ url('/') }}" class="d-flex justify-content-center align-items-center p-0">
                            <img class="img-fluid lgadmn" src="{{ asset('public/assets/images/Aris-Logonew2.png') }}"
                                alt="" style="">
                        </a>
                    </li>

                    <li class="admin_logo_img mt-2">
                        <a href="{{ url('/') }}" class="d-flex justify-content-center align-items-center p-0">
                            <img class="adminSFL" src="{{ asset('public/admin/assets/images/sfl-admin-logo.png') }}"
                                alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- MAIN MENU - END -->
            <!--<div class="project-info">-->

            <!--    <div class="block1">-->
            <!--        <div class="data">-->
            <!--            <span class='title'>Agents</span>-->
            <!--            <span class='total'>2,345</span>-->
            <!--        </div>-->
            <!--        <div class="graph">-->
            <!--            <span class="sidebar_orders">...</span>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="block2">-->
            <!--        <div class="data">-->
            <!--            <span class='title'>Lending&nbsp;Companies</span>-->
            <!--            <span class='total'>345</span>-->
            <!--        </div>-->
            <!--        <div class="graph">-->
            <!--            <span class="sidebar_visitors">...</span>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--</div>-->




        </div>



        <!-- USER INFO - END -->
    </div>
    </div>
    <!--  SIDEBAR - END -->
    <script>
        $(document).ready(function() {
            // alert('fghfgj')
            // Attach click event to menu items
            $(".menu-item").click(function() {
                // Remove active class from all menu items
                $(".menu-item").removeClass("active");

                // Add active class to the clicked menu item
                $(this).addClass("active");
            });
        });


        const onOpenNotification = (dropdownId) => {
            let count = document.getElementById('notification_count')
            let dropdown = document.getElementById(dropdownId);


            let items = document.querySelectorAll('.notification');

            if (!items?.length) return

            if (dropdown.classList.contains('open_notification')) {

                dropdown.classList.remove('open_notification');
                if (+count.innerHTML > 0) {
                    count.innerHTML = 0;

                    $.ajax({
                        url: "<?php echo url('/notification-update'); ?>",
                        type: "POST",
                        data: {

                        "_token": "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            console.log(response);
                        },
                        error: function(e) {
                            console.log("Failure");
                        }
                    });

                    for(elem of items){
                        elem.classList.remove('unread')
                    }


                }
            } else {
                dropdown.classList.add('open_notification')
            }

        }
    </script>
