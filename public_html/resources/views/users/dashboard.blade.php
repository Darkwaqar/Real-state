<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name . ' | ARIS360 Prime Agent' }} </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>


<style>
    @import url("https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Rubik", sans-serif;
    }

    .alert_wrap {
        background-color: #de1e2529;
        padding: 15px;
        border-radius: 5px;
    }


    .dashboard_wrap {
        height: 100vh;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .dashboard_wrap .header_wrap {
        height: 68px;
        min-height: 68px;
        display: flex;
        align-items: center;
        border-bottom: solid 1px #d4d4d4;
        padding: 0 20px;
        background: #fff;
    }

    .dashboard_wrap .header_wrap .menu_toggle_area {
        display: none;
    }

    .dashboard_wrap .header_wrap .user_wrap {
        display: flex;
        margin-left: auto;
        align-items: center;
    }

    .dashboard_wrap .header_wrap .user_wrap img {
        width: 50px;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 20px;
    }

    .dashboard_wrap .header_wrap .user_wrap h3 {
        margin-left: 10px;
        font-size: 16px;
        font-weight: 500;
        color: rgba(0, 0, 0, 0.6509803922);
        text-transform: uppercase;
    }

    .dashboard_wrap .header_wrap .logo_wrap {
        display: flex;
        align-items: center;
    }

    .dashboard_wrap .header_wrap .logo_wrap img {
        width: 180px;
    }

    .dashboard_wrap .d_flex_row {
        display: flex;
        flex-grow: 1;
        height: 100%;
    }

    .dashboard_wrap .d_flex_row .menu_area {
        height: 100%;
        overflow: hidden;
        min-width: 250px;
        max-width: 250px;
        display: flex;
        flex-direction: column;
        box-shadow: 4px 5px 20px rgba(198, 198, 198, 0.7607843137);
        padding: 20px 0 0 0;
        background-color: #222222;
    }

    .dashboard_wrap .d_flex_row .menu_area .logo_wrap {
        display: flex;
        justify-content: center;
    }

    .dashboard_wrap .d_flex_row .menu_area .logo_wrap img {
        width: 180px;
    }

    .dashboard_wrap .d_flex_row .menu_area .tabs_wrap {
        flex-grow: 1;
        padding: 20px 0 0 26px;
    }

    .dashboard_wrap .d_flex_row .menu_area .tabs_wrap .tab_btn {
        background-color: transparent;
        border: none;
        font-size: 16px;
        color: #8a8a8a;
        display: flex;
        align-items: center;
        padding: 12px 18px;
        margin: 10px 0;
        cursor: pointer;
        width: 100%;
        border-radius: 30px 0 0 30px;
        text-decoration: none
    }

    .dashboard_wrap .d_flex_row .menu_area .tabs_wrap .tab_btn {
        font-size: 16px;
        color: #8a8a8a;
        text-decoration: none
    }

    .dashboard_wrap .d_flex_row .menu_area .tabs_wrap .tab_btn i {
        font-size: 22px;
        margin-right: 10px;
    }

    .dashboard_wrap .d_flex_row .menu_area .tabs_wrap .tab_btn:hover {
        background-color: #323232;
        color: #fff;
    }

    .dashboard_wrap .d_flex_row .menu_area .tabs_wrap .tab_btn:hover a {
        color: #fff;
    }

    .dashboard_wrap .d_flex_row .menu_area .tabs_wrap .tab_btn.active {
        background-color: #DE1E25;
        border-radius: 30px 0 0 30px;
        color: #fff;
    }

    .dashboard_wrap .d_flex_row .content_area {
        flex: 1;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .dashboard_wrap .d_flex_row .content_area .tabs_content {
        flex-grow: 1;
        overflow-y: auto;
        background-color: #e8e8e8;
    }

    .dashboard_wrap .d_flex_row .content_area .tabs_content .tab_item {
        display: none;
    }

    .dashboard_wrap .d_flex_row .content_area .tabs_content .tab_item.active {
        display: block;

    }



    #dashboard .user {
        padding: 30px;
        width: 100%;
        display: flex;
        border-bottom: solid 1px #d4d4d4;
    }

    #dashboard .user img {
        width: 180px;
        height: 180px;
        min-width: 150px;
        -o-object-fit: cover;
        object-fit: cover;
        border-radius: 15px;
        margin-right: 20px;
    }

    #dashboard .user .details_wrap h3 {
        font-size: 32px;
        color: rgba(0, 0, 0, 0.6509803922);
        padding-bottom: 5px;
        text-transform: uppercase;
        border-bottom: solid 1px #d4d4d4;
        margin-bottom: 10px;
    }

    #dashboard .user .details_wrap p {
        font-size: 14px;
        color: rgba(0, 0, 0, 0.6509803922);
        display: flex;
        align-items: center;
        margin-bottom: 14px;
        font-weight: 600;
    }

    #dashboard .user .details_wrap p i {
        color: #DE1E25;
        font-size: 22px;
        margin-right: 10px;
    }

    #dashboard .stats_cards {
        border-bottom: solid 1px #d4d4d4;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 20px;
        padding: 30px;
    }

    #dashboard .stats_cards .stats {
        flex: 1;
        box-shadow: 15px 20px 20px 0px rgba(178, 177, 177, 0.18);
        padding: 15px;
        border-radius: 20px;
        background-color: #ffffff;
        min-width: 300px;
    }

    #dashboard .stats_cards .stats .flex_between {
        display: flex;
        justify-content: space-between;
    }

    #dashboard .stats_cards .stats .flex_between div h1 {
        font-size: 50px;
        color: #DE1E25;
    }

    #dashboard .stats_cards .stats .flex_between div h3 {
        font-size: 22px;
        color: rgba(0, 0, 0, 0.6509803922);
    }

    #dashboard .stats_cards .stats .flex_between .icons {
        display: flex;
        align-items: center;
    }

    #dashboard .stats_cards .stats .flex_between .icons i {
        font-size: 60px;
        color: #bdbdbd;
    }

    #dashboard .map_wrap {
        padding: 20px 0;
        margin: auto;
    }

    #dashboard .map_wrap .map {
        height: 400px;
        width: 80%;
        margin: auto;
    }

    #my_listings {
        padding: 20px;
    }

    #my_listings .listings_wrap {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    #my_listings .listings_wrap .listing {
        flex-basis: calc(25% - 20px);
        min-width: 300px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px #d4d4d4;
        background-color: #fff;
        border: solid 2px transparent;
        transition: 0.3s;
    }

    #my_listings .listings_wrap .listing:hover {
        border-color: #DE1E25;
    }

    #my_listings .listings_wrap .listing .flex_between {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #my_listings .listings_wrap .listing .flex_between p {
        margin-bottom: 0;
    }

    #my_listings .listings_wrap .listing .content_area {
        padding: 15px;
    }

    #my_listings .listings_wrap .listing img {
        width: 100%;
        height: 260px;
        object-fit: cover;
    }

    #my_listings .listings_wrap .listing h1 {
        font-size: 22px;
        font-weight: 400;
        color: #DE1E25;
        margin-bottom: 15px;
    }

    #my_listings .listings_wrap .listing i {
        color: #DE1E25;
        font-size: 22px;
    }

    #my_listings .listings_wrap .listing p {
        font-size: 16px;
        margin-bottom: 10px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    #my_listings .listings_wrap .listing p span {
        margin: 0 3px;
    }

    #my_listings .listings_wrap .listing button {
        border: none;
        outline: none;
        display: flex;
        align-items: center;
    }

    #my_listings .listings_wrap .listing button i {
        font-size: 16px;
        margin-right: 5px;
    }

    #save_Searches .saved_search_wrap {
        padding: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;

    }

    #save_Searches .saved_search_wrap .saved_searches {
        flex-basis: calc(20% - 10px);
        padding: 20px;
        box-shadow: 7px 9px 20px rgba(212, 212, 212, 0.7294117647);
        border-radius: 10px;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 180px;
        border: solid 2px transparent;
        transition: 0.3s;
    }

    #save_Searches .saved_search_wrap .saved_searches a {
        text-decoration: none
    }

    #save_Searches .saved_search_wrap .saved_searches:hover {
        border-color: rgba(222, 30, 37, 0.5);
    }

    #save_Searches .saved_search_wrap .saved_searches p {
        font-size: 14px;
        color: #DE1E25;
    }

    #save_Searches .saved_search_wrap .saved_searches h1 {
        color: rgba(0, 0, 0, 0.6509803922);
        font-size: 20px;
        margin: 6px 0 0 0;
    }

    #save_Searches .saved_search_wrap .saved_searches button {
        background: #DE1E25;
        color: #fff;
        font-size: 18px;
        height: 40px;
        width: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        border-radius: 13px;
        margin-left: auto;
        cursor: pointer;
    }

    #save_Searches .saved_search_wrap .saved_searches button:hover {
        opacity: 0.8;
    }

    #save_Searches .saved_search_wrap .saved_searches button:active {
        opacity: 1;
    }

    #inquiries {
        padding: 20px;
    }

    #inquiries .table-container {
        background-color: white;
        border-radius: 8px;
        overflow-x: auto;
    }

    #inquiries .table-container a {
        color: #DE1E25;
        text-decoration: none
    }

    #inquiries hr {
        margin: 50px 0;
    }

    #inquiries h1 {
        text-align: center;
        margin-bottom: 20px;
        color: #DE1E25;
    }

    #inquiries table {
        width: 100%;
        border-collapse: collapse;
        min-width: 1024px;
    }

    #inquiries table thead {
        background-color: #4e4f4f;
        color: white;
    }

    #inquiries table th,
    #inquiries table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    #featured_leads {
        padding: 20px;

    }

    #featured_leads .f_tab_wrap {
        display: flex
    }



    #featured_leads .f_tabs_action {
        min-width: 250px;
        max-width: 250px;
    }

    #featured_leads .f_tabs_action button {
        width: 100%;
        background-color: transparent;
        border: none;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        background-color: #ffffff;
        box-shadow: 0 0 0 .2rem rgba(0, 0, 0, .02);
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    #featured_leads .f_tabs_action button.active {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .3);
    }

    #featured_leads .f_tabs_action button:hover {
        box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .3);

    }

    #featured_leads .f_tabs_action button .d_flex_between {
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        width: 100%;
        color: #DE1E25;
        font-weight: 600;
    }

    #featured_leads .f_tabs_action button svg {
        color: #DE1E25;
        font-size: 18px;
        margin-right: 5px;
    }

    #featured_leads .f_tabs_action button>p {
        display: flex;
        align-items: center;
    }

    #featured_leads .f_tabs_content {
        padding: 0 20px;
        flex-grow: 1;
        border-left: solid 1px #d4d4d4;
        margin-left: 20px;
    }

    #featured_leads .f_tabs_content .f_tab_item {
        display: none;
    }

    #featured_leads .f_tabs_content .f_tab_item.active {
        display: block;
        animation: fadeTop .5s both;
    }

    @keyframes fadeTop {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0px);

        }
    }

    #featured_leads .f_tabs_content .f_tab_item .f_leads_item_details {
        display: flex;
        align-items: center;
        box-shadow: 0 0 0 .2rem rgba(0, 0, 0, .02);
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 20px;

    }



    #featured_leads .f_tabs_content .f_tab_item .f_leads_item_details i {
        background-color: #a3a3a354;
        color: #DE1E25;
        height: 40px;
        width: 40px;
        border-radius: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }

    #featured_leads .f_tabs_content .f_tab_item .f_leads_item_details .danger {
        color: #DE1E25;
        font-weight: 600;
    }

    @media screen and (max-width: 1024px) {
        .dashboard_wrap .d_flex_row .menu_area {
            position: fixed;
            z-index: 999;
            transition: 0.3s;
            transform: translateX(-100%) scaleX(0);
        }

        .dashboard_wrap .d_flex_row .menu_area.open {
            transform: translateX(0) scaleX(1);
        }

        .dashboard_wrap .d_flex_row .menu_overlay {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 998;
            background-color: rgba(0, 0, 0, 0.4);
            height: 100%;
            width: 100%;
            display: none;
        }

        .dashboard_wrap .d_flex_row .menu_overlay.open {
            display: block;
        }

        .dashboard_wrap .d_flex_row .header_wrap .menu_toggle_area {
            display: block;
        }

        .dashboard_wrap .d_flex_row .header_wrap .menu_toggle_area button {
            background-color: #DE1E25;
            color: #fff;
            border: none;
            height: 40px;
            width: 40px;
            border: none;
            border-radius: 10px;
            font-size: 22px;
            cursor: pointer;
        }

        .dashboard_wrap .d_flex_row .header_wrap .menu_toggle_area button:hover {
            opacity: 0.8;
        }

        .dashboard_wrap .d_flex_row .header_wrap .menu_toggle_area button:active {
            opacity: 1;
        }

        #save_Searches .saved_search_wrap .saved_searches {
            flex-basis: 50%;
        }
    }

    @media screen and (max-width: 767px) {
        #my_listings {
            padding: 20px;
        }

        #my_listings .listings_wrap .listing {
            flex-basis: auto;
            min-width: auto;
        }

        #dashboard .user {
            flex-direction: column;
            align-items: center;
        }

        #dashboard .details_wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 25px;
        }

        #dashboard .stats_cards .stats .flex_between div h1 {
            font-size: 28px;
        }

        #dashboard .stats_cards .stats .flex_between div h3 {
            font-size: 16px;
        }

        #dashboard .stats_cards .stats .flex_between .icons i {
            font-size: 38px;
        }

        #inquiries h1 {
            font-size: 18px;
        }


        #save_Searches .saved_search_wrap .saved_searches {
            flex-basis: 100%;
        }
    }

    /*# sourceMappingURL=index.css.map */
</style>

<body>
    <div class="dashboard_wrap">
        <div class="d_flex_row">
            <div onclick="onToggleMenu()" id="menu_overlay" class="menu_overlay"></div>
            <div id="menu_wrap" class="menu_area">
                <div class="logo_wrap">
                    <img src="https://www.aris360.com/public/assets/images/Aris-Logonew2.png" alt="" />
                </div>
                <div class="tabs_wrap">
                    <button id="dashboard_btn" class="tab_btn active" onclick="onViewChange('dashboard', this)">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </button>
                    <button id="featured_leads_btn" class="tab_btn" onclick="onViewChange('featured_leads', this)">
                        <i class="fas fa-star"></i> Featured Leads
                    </button>
                    <button id="inquiries_btn" class="tab_btn" onclick="onViewChange('inquiries', this)">
                        <i class="fas fa-question-circle"></i> Inquiries
                    </button>
                    <button id="save_Searches_btn" class="tab_btn" onclick="onViewChange('save_Searches', this)">
                        <i class="fas fa-save"></i> Save Searches
                    </button>
                    <button id="my_listings_btn" class="tab_btn" onclick="onViewChange('my_listings', this)">
                        <i class="fas fa-list"></i> My Listings
                    </button>
                    {{-- <button class="tab_btn"> --}}
                    <a class="tab_btn" class="nav-link" href="https://www.canva.com/en_gb/login/" target="_blank"><i
                            class="fas fa-paint-brush"></i>Design
                    </a>

                    <a class="tab_btn" class="nav-link" href="{{ url('/agent/logout') }}"><i
                            class="fas fa-sign-out-alt"></i>Logout
                    </a>
                    {{-- </button> --}}
                </div>
            </div>
            <div class="content_area">
                <div class="header_wrap">
                    <div class="menu_toggle_area">
                        <button id="toggle_menu_btn" onclick="onToggleMenu()" class="fa fa-bars"></button>
                    </div>
                    <div class="user_wrap">
                        <img src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}"alt="">
                        <h3>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h3>
                    </div>
                </div>
                <div class="tabs_content">

                    <div class="tab_item active" id="dashboard">
                        <div class="user">
                            <img src="{{ asset('public/images/userdp') . '/' . getUserDp(getUserId()) }}"alt="">
                            <div class="details_wrap">
                                <h3> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h3>
                                <p>
                                    @if (Auth::user()->type == 'featured')
                                        ARIS360 Partner Agent
                                    @elseif (Auth::user()->type == 'aris')
                                        ARIS360 Prime Agent
                                    @endif
                                </p>

                                <p><i class="fas fa-question-circle"></i> Need Help?</p>
                                <p><i class="fas fa-envelope"></i> Email: info@aris360.com</p>
                                <p><i class="fas fa-phone-alt"></i> Call: (833) 966-1976</p>
                                @if (Auth::user()->type == 'featured')
                                    <p class="text_modal_btn">
                                        <span>
                                            <i class="fas fa-coins"></i>
                                            @if ($totalBalance > 2)
                                                {{ $totalBalance / 2 }} Aris Credits
                                            @endif
                                        </span>
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="stats_cards">
                            <div class="stats">
                                <div class="flex_between">
                                    <div>
                                        <h1>{{ $myLeads }}</h1>
                                        <h3>Leads</h3>
                                    </div>
                                    <div class="icons">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="stats">
                                <div class="flex_between">
                                    <div>
                                        <h1>{{ $myPendingProperties }}</h1>
                                        <h3>My Pending Properties</h3>
                                    </div>
                                    <div class="icons">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="stats">
                                <div class="flex_between">
                                    <div>
                                        <h1>{{ $myProperties }}</h1>
                                        <h3>My Properties</h3>
                                    </div>
                                    <div class="icons">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="map_wrap">
                            <div class="map" id="map"></div>
                        </div>
                    </div>

                    <div class="tab_item" id="featured_leads">
                        <div class="f_tab_wrap">

                            <div class="f_tabs_action">


                                @forelse($leads as $key => $MyPropertyLead)
                                    <button class="f_tabs_btn"
                                        onclick="onClickFeatureTabs('f_tab_1{{ $key }}' , this)">
                                        <div class="d_flex_between">
                                            <p>
                                                @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                    {{ isset($MyPropertyLead['user']['first_name']) ? $MyPropertyLead['user']['first_name'] : 'N/A' }}
                                                @else
                                                    {{ isset($MyPropertyLead['name']) ? $MyPropertyLead['name'] : 'N/A' }}
                                                @endif
                                            </p>
                                            <p>
                                                @if ($MyPropertyLead['type'] == 'ContactForm' || $MyPropertyLead['type'] == 'leads')
                                                    {{ isset($MyPropertyLead['created_at']) ? stringTodate($MyPropertyLead['created_at']) : 'N/A' }}
                                                @elseif($MyPropertyLead['type'] == 'Leads')
                                                    {{ isset($MyPropertyLead['created_at']) ? stringTodate($MyPropertyLead['created_at']) : 'N/A' }}
                                                @else
                                                    {{ isset($MyPropertyLead['created_at']) ? stringTodate($MyPropertyLead['created_at']) : 'N/A' }}
                                                @endif
                                            </p>
                                        </div>
                                        <p>
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 256 256" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                                </path>
                                            </svg>
                                        <p>
                                            @if ($MyPropertyLead['type'] == 'ContactForm' || $MyPropertyLead['type'] == 'Schedule')
                                                {{ isset($MyPropertyLead['property']['PropertyAddress']) ? $MyPropertyLead['property']['PropertyAddress'] : 'N/A' }}
                                            @else
                                                {{ isset($MyPropertyLead['address']) ? $MyPropertyLead['address'] : 'N/A' }}
                                            @endif
                                        </p>
                                    </button>
                                @empty
                                @endforelse
                            </div>
                            <div class="f_tabs_content">
                                @forelse($leads as $key => $MyPropertyLead)
                                    <div id="f_tab_1{{ $key }}" class="f_tab_item ">
                                        <div class="f_leads_item_details">
                                            <i class="fa fa-user"></i>
                                            <div class="details">
                                                <p class="danger">Name :</p>
                                                <p>
                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                        {{ isset($MyPropertyLead['user']['first_name']) ? $MyPropertyLead['user']['first_name'] : 'N/A' }}
                                                    @else
                                                        {{ isset($MyPropertyLead['name']) ? $MyPropertyLead['name'] : 'N/A' }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="f_leads_item_details">
                                            <i class="fa fa-envelope"></i>
                                            <div class="details">
                                                <p class="danger">Email :</p>
                                                <p>
                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                        {{ isset($MyPropertyLead['user']['email']) ? $MyPropertyLead['user']['email'] : 'N/A' }}
                                                    @else
                                                        {{ isset($MyPropertyLead['email']) ? $MyPropertyLead['email'] : 'N/A' }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="f_leads_item_details">
                                            <i class="fa fa-phone"></i>
                                            <div class="details">
                                                <p class="danger">Contact :</p>
                                                <p>
                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                        {{ isset($MyPropertyLead['user']['mobile_number']) ? $MyPropertyLead['user']['mobile_number'] : 'N/A' }}
                                                    @else
                                                        {{ isset($MyPropertyLead['contact']) ? $MyPropertyLead['contact'] : 'N/A' }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="f_leads_item_details">
                                            <i class="fa fa-building"></i>
                                            <div class="details">
                                                <p class="danger">City :</p>
                                                <p>
                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                        {{ isset($MyPropertyLead['property']['CityName']) ? $MyPropertyLead['property']['CityName'] : 'N/A' }}
                                                    @else
                                                        {{ isset($MyPropertyLead['city']) ? $MyPropertyLead['city'] : 'N/A' }}
                                                    @endif

                                                </p>
                                            </div>
                                        </div>
                                        <div class="f_leads_item_details">
                                            <i class="fa fa-map"></i>
                                            <div class="details">
                                                <p class="danger">State :</p>
                                                <p>
                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                        {{ isset($MyPropertyLead['property']['StateOrProvince']) ? $MyPropertyLead['property']['StateOrProvince'] : 'N/A' }}
                                                    @else
                                                        {{ isset($MyPropertyLead['state']) ? $MyPropertyLead['state'] : 'N/A' }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="f_leads_item_details">
                                            <i class="fa fa-bullseye"></i>
                                            <div class="details">
                                                <p class="danger">Lead Types :</p>
                                                <p>
                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                        Buyer
                                                    @else
                                                        {{ isset($MyPropertyLead['lead_type']) ? $MyPropertyLead['lead_type'] : 'N/A' }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="f_leads_item_details">
                                            <i class="fa fa-home"></i>
                                            <div class="details">
                                                <p class="danger">Property Type :</p>
                                                <p>
                                                    @if ($MyPropertyLead['type'] == 'Schedule' || $MyPropertyLead['type'] == 'ContactForm')
                                                        {{ isset($MyPropertyLead['property']['structure_type'][0]['StructureTypeName']) ? $MyPropertyLead['property']['structure_type'][0]['StructureTypeName'] : 'N/A' }}
                                                    @else
                                                        {{ isset($MyPropertyLead['property_type']) ? $MyPropertyLead['property_type'] : 'N/A' }}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>

                                        <div class="map_wrap">
                                            <div></div>
                                        </div>

                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>

                    </div>

                    <div class="tab_item" id="inquiries">
                        <h1>New Inquiries</h1>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>What can we help you with?</th>
                                    </tr>
                                </thead>
                                @if (isset($userInquiries) && count($userInquiries) > 0)
                                    <tbody>
                                        @foreach ($userInquiries as $agentInuiry)
                                            <tr>
                                                <td>{{ stringTodate($agentInuiry['created_at']) }}
                                                </td>
                                                <td>{{ isset($agentInuiry['name']) ? $agentInuiry['name'] : 'N/A' }}
                                                </td>
                                                <td>{{ isset($agentInuiry['email']) ? $agentInuiry['email'] : 'N/A' }}
                                                </td>
                                                <td>{{ isset($agentInuiry['phone']) ? $agentInuiry['phone'] : 'N/A' }}
                                                </td>
                                                <td> {{ isset($agentInuiry['city']) ? $agentInuiry['city'] : 'N/A' }}
                                                </td>
                                                <td> {{ isset($agentInuiry['question']) ? $agentInuiry['question'] : 'N/A' }}
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                @else
                                    <tbody class="alert alert-primary" role="alert">
                                        <tr>
                                            <td>No data found</td>
                                        </tr>
                                    </tbody>
                                @endif
                            </table>
                        </div>
                        <hr>
                        <h1>Scheduled Inquiries</h1>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message / Scehduled Date</th>
                                        <th>Property Address</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($agentQueries as $tour)
                                        <tr>
                                            <td>
                                                {{ isset($tour['user']['first_name']) ? $tour['user']['first_name'] : 'N/A' }}
                                            </td>
                                            <td>
                                                {{ isset($tour['user']['email']) ? $tour['user']['email'] : 'N/A' }}
                                            </td>
                                            <td>
                                                {{ isset($tour['user']['mobile_number']) ? $tour['user']['mobile_number'] : 'N/A' }}
                                            </td>
                                            <td>
                                                @if ($tour['type'] == 'ContactForm')
                                                    {{ isset($tour['message']) ? $tour['message'] : 'N/A' }}
                                                @else
                                                    {{ isset($tour['scheduled_date']) ? $tour['scheduled_date'] : 'N/A' }}
                                                @endif
                                            </td>

                                            <td>
                                                @if (isset($tour['property']['id']))
                                                    <a href="{{ url('property-detail/' . $tour['property']['id']) }}">
                                                        {{ $tour['property']['PropertyAddress'] }}
                                                    </a>
                                                @else
                                                    <p> N/A </p>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <td>No data found</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="tab_item" id="save_Searches">
                        <div class="saved_search_wrap">

                            @forelse ($savedSearches as $savedSearch)
                                @php
                                    $searchCriteria = json_decode($savedSearch['search_criteria']);
                                @endphp

                                <div class="saved_searches">
                                    <div>
                                        @if (isset($searchCriteria->publishStatus) && $searchCriteria->publishStatus == 'Active')
                                            <p>For Sale</p>
                                        @else
                                            <p>{{ $searchCriteria->publishStatus }}</p>
                                        @endif
                                        <a target="_blank"
                                            href="{{ route('home.our-community', [
                                                'search' => isset($searchCriteria->address) ? $searchCriteria->address : '',
                                                'zip' => isset($searchCriteria->zip) ? $searchCriteria->zip : '',
                                                'search_criteria' => base64_encode(json_encode($searchCriteria)),
                                                'id' => $savedSearch['id'],
                                            ]) }}">
                                            <h1>{{ isset($savedSearch->name) ? $savedSearch->name : 'View Search ' }}
                                            </h1>
                                        </a>
                                    </div>
                                    <form action="{{ route('delete-saved-search', $savedSearch->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button>
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>

                            @empty
                                <div class="alert_wrap" role="alert">
                                    No Saved Searches.
                                </div>
                            @endforelse

                        </div>
                    </div>

                    <div class="tab_item" id="my_listings">
                        <div class="listings_wrap">
                            @forelse($userProperties as $usrProperty)
                                <div class="listing">
                                    @if ($usrProperty['PropertyStatus'] == 1)
                                        <a href="{{ route('home.property-detail', ['id' => $usrProperty['id']]) }}">
                                            <img src="{{ isset($usrProperty['preffered_media'][0]['id']) ? $usrProperty['preffered_media'][0]['s3buckettempurl'] : '' }}"
                                                alt="" />
                                        </a>
                                    @else
                                        <img src="{{ isset($usrProperty['preffered_media'][0]['id']) ? $usrProperty['preffered_media'][0]['s3buckettempurl'] : '' }}"
                                            alt="">
                                    @endif

                                    <div class="content_area">
                                        <div class="flex_between">
                                            <h1>$
                                                {{ isset($usrProperty['PropetySellPrice']) ? number_format($usrProperty['PropetySellPrice']) : '0' }}
                                            </h1>
                                            <i class="fa fa-share"></i>
                                        </div>
                                        <p>
                                            <span>
                                                {{ isset($usrProperty['Bedrooms']) ? $usrProperty['Bedrooms'] : '0' }}
                                                Beds</span>
                                            <span>{{ isset($usrProperty['BathroomsFull']) ? $usrProperty['BathroomsFull'] : '0' }}
                                                Baths</span>
                                            <span>{{ isset($usrProperty['PropertyArea']) ? $usrProperty['PropertyArea'] : '0' }}
                                                sq. ft.</span>
                                        </p>
                                        @if ($usrProperty['PropertyStatus'] == 1)
                                            <p>{{ $usrProperty['PropertyAddress'] }}</p>
                                        @else
                                            <p>{{ isset($property['PropertyAddress']) ? $property['PropertyAddress'] : '' }}
                                            </p>
                                        @endif

                                        <div class="flex_between">
                                            <p>Property Category:
                                                @if (isset($usrProperty['PropetySellPrice']) && $usrProperty['PropetySellPrice'] >= 1000000)
                                                    ARIS360 Premier
                                                @else
                                                    {{ isset($usrProperty['structure_type'][0]['StructureTypeName'])
                                                        ? $usrProperty['structure_type'][0]['StructureTypeName']
                                                        : ' N/A ' }}
                                                @endif
                                            </p>
                                            <button><i class="fa fa-edit"></i>
                                                <a href="{{ url('/edit_property') . '/' . $usrProperty['id'] }}"
                                                    target="_blank">
                                                    Edit
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="alert_wrap" role="alert">
                                    No properties found. please <a href="{{ url('/property-listing') }}">
                                        click here </a>
                                    to list your property.
                                </div>
                            @endforelse

                        </div>
                    </div>

                    <div class="tab_item" id="design">design</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let _tabs = document.getElementsByClassName("tab_item");
        let _tabsBtn = document.getElementsByClassName("tab_btn");
        let menu = document.getElementById("menu_wrap");
        let menu_overlay = document.getElementById("menu_overlay");


        function onDomLoad() {
            let curerntTab = localStorage.getItem('current_active')

            if (curerntTab) {

                for (item of _tabs) {
                    item.classList.remove("active");
                }
                for (item of _tabsBtn) {
                    item.classList.remove("active");
                }

                document.getElementById(curerntTab).classList.add("active")
                document.getElementById(`${curerntTab}_btn`).classList.add("active")
            }
        }

        // Add an event listener for the DOMContentLoaded event
        document.addEventListener("DOMContentLoaded", onDomLoad);

        const onViewChange = (currentView, btn) => {

            localStorage.setItem("current_active", currentView);

            for (item of _tabs) {
                item.classList.remove("active");
            }
            for (item of _tabsBtn) {
                item.classList.remove("active");
            }
            document.getElementById(currentView).classList.add("active");
            btn.classList.add("active");
            if (menu.classList.contains("open")) {
                menu_overlay.remove("open");
                menu.classList.remove("open");
            }
            return;
        };

        const onToggleMenu = () => {
            if (menu.classList.contains("open")) {
                menu.classList.remove("open");
                menu_overlay.classList.remove("open");
            } else {
                menu.classList.add("open");
                menu_overlay.classList.add("open");
            }
        };


        const onClickFeatureTabs = (tabName, btn) => {

            let _currentTab = document.getElementById(tabName);



            let _tabs = document.getElementsByClassName('f_tab_item');
            let btns = document.getElementsByClassName('f_tabs_btn')

            for (_btn of btns) {
                _btn.classList.remove('active')
            }
            for (_tab of _tabs) {
                _tab.classList.remove('active')
            }

            _currentTab.classList.add('active')
            btn.classList.add('active')
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
</body>

</html>
