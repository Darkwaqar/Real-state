@extends('layouts.admin.main')
@section('admin-content')


    <!-- START CONTENT -->
    <!-- START CONTENT -->
    <section id="main-content" class=" ">



        <section class="wrapper main-wrapper">

            <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
                <div class="page-title">
                    <div class="float-left">
                        <h1 class="title">Welcome Patrick J. Davis</h1>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-xl-12">
                <section class="box nobox">
                    <div class="content-body">

                        <!-- End .row -->


                        <!--<div class="row">-->
                        <!--    <div class="col-lg-8 col-md-12 col-12">-->
                        <!--        <div class="wid-vectormap">-->
                        <!--            <h5>Visitor's Statistics</h5>-->
                        <!--            <div class="spacer"></div>-->
                        <!--            <div class="row">-->
                        <!--                <div class="col-md-12 col-sm-12 col-xs-12">-->
                        <!--                    <figure>-->
                        <!--                        <div id="db-world-map-markers" style="width: 100%; height: 300px"></div>        -->
                        <!--                    </figure>-->
                        <!--                </div>-->
                        <!--                 <div class="col-md-3 col-sm-3 col-xs-12 map_progress">-->
                        <!--                    <h4>Unique Visitors</h4>-->
                        <!--                    <span class='text-muted'><small>Last Week Rise by 62%</small></span>-->
                        <!--                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>-->
                        <!--                    <br>-->
                        <!--                    <h4>Registrations</h4>-->
                        <!--                    <span class='text-muted'><small>Up by 57% last 7 days</small></span>-->
                        <!--                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>-->
                        <!--                    <br>-->
                        <!--                    <h4>Direct Sales</h4>-->
                        <!--                    <span class='text-muted'><small>Last Month Rise by 22%</small></span>-->
                        <!--                    <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="spacer"></div>-->
                        <!--        </div>-->
                        <!--    </div>		-->

                        <!--    <div class="col-lg-4 col-md-12 col-12">-->
                        <!--        <div class="r2_graph1 db_box">-->
                        <!--            <h5>Quaterly Leads Report</h5>-->


                        <!--            <div id="morris_bar_graph2">-->

                        <!--            </div>-->

                        <!--        </div>-->

                        <!--    </div>		-->

                    </div>
                    <!-- End .row -->




                    <h3 class="text-dark">B2B Model</h3>
                    <div class="spacer"></div>
                    <div class="row">


                        <div class="col-lg-3 col-md-8 col-12">
                            <div class="r4_counter db_box">
                                <i class='float-left fa fa-user icon-md icon-rounded icon-primary'></i>
                                <div class="stats">
                                    <h4><strong>Agents</strong></h4>
                                    <span>{{ $totalAgents }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 col-12">
                            <div class="r4_counter db_box">
                                <i class='float-left fa fa-bank icon-md icon-rounded icon-orange'></i>
                                <div class="stats">
                                    <h4><strong>Users</strong></h4>
                                    <span>{{ $totalUser }}</span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-8 col-12">
                            <div class="r4_counter db_box">
                                <!-- <i class="fa-sharp fa-regular fa-person-military-to-person"></i> -->
                                <i class='float-left fa fa-dollar icon-md icon-rounded icon-purple'></i>
                                <div class="stats">
                                    <h4><strong>Loan Officers</strong></h4>
                                    <span>0</span>
                                </div>
                            </div>
                        </div> --}}
                        <!-- <div class="col-lg-3 col-md-6 col-12">
                                                                                                <div class="r4_counter db_box">
                                                                                                    <i class='float-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                                                                                    <div class="stats">
                                                                                                        <h4><strong>Customers</strong></h4>
                                                                                                        <span>999</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div> -->
                    </div> <!-- End .row -->

                    <h3 class="text-dark">B2C Model</h3>
                    <div class="spacer"></div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="r4_counter db_box">
                                <i class='float-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                <div class="stats">
                                    <h4><strong><a href="{{ url('/admin/leads/') }}">Buyer/Seller Leads</a></strong></h4>
                                    <span>{{ $leads }}</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="r4_counter db_box">
                                <i class='float-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                <div class="stats">
                                    <h4><strong><a href="{{ url('/admin/leads/') }}">Schedule Tour Leads</a></strong></h4>
                                    <span>{{ $tour }}</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="r4_counter db_box">
                                <i class='float-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                <div class="stats">
                                    <h4><strong><a href="{{ url('/admin/leads/') }}">Listing Property Contact</a></strong>
                                    </h4>
                                    <span>{{ $contact }}</span>
                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <!--
                                                                                            <div class="col-lg-6 col-md-6 col-12">

                                                                                                <div class="r1_graph1 db_box" style="width: 225px;">
                                                                                                    <span class='bold'>98.95%</span>
                                                                                                    <span class='float-right'><small>Agents</small></span>
                                                                                                    <div class="clearfix"></div>
                                                                                                    <span class="db_dynamicbar">Loading...</span>
                                                                                                </div>


                                                                                                <div class="r1_graph2 db_box" style="width: 225px;">
                                                                                                    <span class='bold'>2332</span>
                                                                                                    <span class='float-right'><small>Loan Officers</small></span>
                                                                                                    <div class="clearfix"></div>
                                                                                                    <span class="db_linesparkline">Loading...</span>
                                                                                                </div>


                                                                                                <div class="r1_graph3 db_box hidden-xs" style="width: 225px;">
                                                                                                    <span class='bold'>342/123</span>
                                                                                                    <span class='float-right'><small>Customers</small></span>
                                                                                                    <div class="clearfix"></div>
                                                                                                    <span class="db_compositebar">Loading...</span>
                                                                                                </div>

                                                                                            </div> -->



                        <!--<div class="col-lg-6 col-md-7 col-12">-->
                        <!--    <div class="r1_maingraph db_box" style="height: 200px;">-->
                        <!--        <span class='float-left'>-->
                        <!--            <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>Loan Officers</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>Agents</small>-->
                        <!--        </span>-->
                        <!--        <span class='float-right switch'>-->
                        <!--            <i class='icon-default fa fa-line-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-bar-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-area-chart icon-xs'></i>-->
                        <!--        </span>-->

                        <!--        <div id="db_morris_line_graph" style="height:272px;width:95%;"></div>-->
                        <!--        <div id="db_morris_area_graph" style="height:272px;width:90%;display:none;"></div>-->
                        <!--        <div id="db_morris_bar_graph" style="height:272px;width:90%;display:none;"></div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!-- <div class="col-lg-3 col-md-12 col-12">
                                                                                                <div class="r1_graph4 db_box">
                                                                                                    <span class=''>
                                                                                                        <i class='icon-purple fa fa-square icon-xs icon-1'></i>&nbsp;<small>CPU USAGE</small>
                                                                                                    </span>
                                                                                                    <canvas width='180' height='90' id="gauge-meter"></canvas>
                                                                                                    <h4 id='gauge-meter-text'></h4>
                                                                                                </div>
                                                                                                <div class="r1_graph5 db_box col-6">
                                                                                                    <span class=''><i class='icon-purple fa fa-square icon-xs icon-1'></i>&nbsp;<small>LONDON</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-2'></i>&nbsp;<small>PARIS</small></span>
                                                                                                    <div style="width:120px;height:120px;margin: 0 auto;">
                                                                                                        <span class="db_easypiechart1 easypiechart" data-percent="66"><span class="percent" style='line-height:120px;'></span></span>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>  -->
                    </div>



                    <!-- <div class="row">
                                                                                            <div class="col-lg-5 col-md-12 col-12">
                                                                                                <div class="r3_notification db_box">
                                                                                                    <h4>Notifications</h4>

                                                                                                    <ul class="list-unstyled notification-widget">


                                                                                                        <li class="unread status-available">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Clarine Vassar</strong>
                                                                                                                        <span class="time small">- 15 mins ago</span>
                                                                                                                        <span class="profile-status available pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                        <li class=" status-away">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Brooks Latshaw</strong>
                                                                                                                        <span class="time small">- 45 mins ago</span>
                                                                                                                        <span class="profile-status away pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                        <li class=" status-busy">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Clementina Brodeur</strong>
                                                                                                                        <span class="time small">- 1 hour ago</span>
                                                                                                                        <span class="profile-status busy pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                        <li class=" status-offline">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-4.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Carri Busey</strong>
                                                                                                                        <span class="time small">- 5 hours ago</span>
                                                                                                                        <span class="profile-status offline pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                        <li class=" status-offline">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-5.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Melissa Dock</strong>
                                                                                                                        <span class="time small">- Yesterday</span>
                                                                                                                        <span class="profile-status offline pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                        <li class=" status-available">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Verdell Rea</strong>
                                                                                                                        <span class="time small">- 14th Mar</span>
                                                                                                                        <span class="profile-status available pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                        <li class=" status-busy">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Linette Lheureux</strong>
                                                                                                                        <span class="time small">- 16th Mar</span>
                                                                                                                        <span class="profile-status busy pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                        <li class=" status-away">
                                                                                                            <a href="javascript:;">
                                                                                                                <div class="user-img">
                                                                                                                    <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline">
                                                                                                                </div>
                                                                                                                <div>
                                                                                                                    <span class="name">
                                                                                                                        <strong>Araceli Boatright</strong>
                                                                                                                        <span class="time small">- 16th Mar</span>
                                                                                                                        <span class="profile-status away pull-right"></span>
                                                                                                                    </span>
                                                                                                                    <span class="desc small">
                                                                                                                        Sometimes it takes a lifetime to win a battle.
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                            </a>
                                                                                                        </li>


                                                                                                    </ul>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-3 col-md-6 col-12">
                                                                                                <div class="r3_weather">
                                                                                                    <div class="wid-weather wid-weather-small">
                                                                                                        <div class="">

                                                                                                            <div class="location">
                                                                                                                <h3>California, USA</h3>
                                                                                                                <span>Today, 12<sup>th</sup> March 2015</span>
                                                                                                            </div>
                                                                                                            <div class="clearfix"></div>
                                                                                                            <div class="degree">
                                                                                                                <i class='fa fa-cloud icon-lg text-white'></i><span>Now</span><h3>24°</h3>
                                                                                                                <div class="clearfix"></div>
                                                                                                                <h4 class="text-white text-center">Hot & Sunny</h4>
                                                                                                            </div>
                                                                                                            <div class="clearfix"></div>
                                                                                                            <div class="weekdays bg-white">
                                                                                                                <ul class="list-unstyled">
                                                                                                                    <li><span class='day'>Sunday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>23° - 27°</span></li>
                                                                                                                    <li><span class='day'>Monday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>21° - 26°</span></li>
                                                                                                                    <li><span class='day'>Tuesday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>24° - 28°</span></li>
                                                                                                                    <li><span class='day'>Wednesday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>25° - 26°</span></li>
                                                                                                                    <li><span class='day'>Thursday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>22° - 25°</span></li>
                                                                                                                    <li><span class='day'>Friday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>21° - 28°</span></li>
                                                                                                                    <li><span class='day'>Satday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>23° - 29°</span></li>
                                                                                                                </ul>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-lg-4 col-md-6 col-12">

                                                                                                <div class="ultra-widget ultra-todo-task bg-primary">
                                                                                                    <div class="wid-task-header">
                                                                                                        <div class="wid-icon">
                                                                                                            <i class="fa fa-tasks"></i>
                                                                                                        </div>
                                                                                                        <div class="wid-text">
                                                                                                            <h4>To do Tasks</h4>
                                                                                                            <span>Wed, <small>11<sup>th</sup> March 2015</small></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="wid-all-tasks" id="widalltasks-607931581">

                                                                                                        <ul class="list-unstyled">

                                                                                                            <li class="checked">
                                                                                                                <input type="checkbox" id="task-1-607931581" class="icheck-minimal-white todo-task" checked>
                                                                                                                <label class="icheck-label form-label" for="task-1-607931581">Office Projects</label>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <input type="checkbox" id="task-2-607931581" class="icheck-minimal-white todo-task" >
                                                                                                                <label class="icheck-label form-label" for="task-2-607931581">Generate Invoice</label>
                                                                                                            </li>

                                                                                                            <li>
                                                                                                                <input type="checkbox" id="task-3-607931581" class="icheck-minimal-white todo-task" >
                                                                                                                <label class="icheck-label form-label" for="task-3-607931581">Ecommerce Theme</label>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <input type="checkbox" id="task-4-607931581" class="icheck-minimal-white todo-task" >
                                                                                                                <label class="icheck-label form-label" for="task-4-607931581">PHP and jQuery</label>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <input type="checkbox" id="task-5-607931581" class="icheck-minimal-white todo-task" >
                                                                                                                <label class="icheck-label form-label" for="task-5-607931581">Allocate&nbsp;Resource</label>
                                                                                                            </li>
                                                                                                        </ul>

                                                                                                    </div>
                                                                                                    <div class="wid-add-task">
                                                                                                        <input type="text" class="form-control" placeholder="Add task" />
                                                                                                    </div>
                                                                                                </div>


                                                                                            </div>

                                                                                        </div> End .row -->


            </div>
        </section>
        </div>
    </section>
    </section>
    <!-- END CONTENT -->
@endsection
