@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" >

        <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title"> Leads Details</h1>
                </div>



            </div>
        </div>

        <div class="col-xl-12">
            <section class="box ">
                <header class="panel_header">
                    <!-- <h2 class="title float-left">List A New Property Form</h2> -->

                </header>
                <div class="content-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="property_detail_dashbard_list">

                                <h4>
                                    Address:
                                    <strong>
                                        <a  href="javascript:void()">
                                            {{ isset($leads['address']) ? $leads['address'] : '' }}
                                        </a>
                                           
                                    </strong>
                                </h4>

                                <div class="row">
                                   
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                           
                                            @if (isset($leads['lead_type']))
                                            <li>
                                                <p>Lead Type
                                                    <span>
                                                        {{ $leads['lead_type']}}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                            @if (isset($leads['plan_to_sell_home']))
                                            <li>
                                                <p>Plan To Sell: 
                                                    <span>
                                                        {{ $leads['plan_to_sell_home']}}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($leads['any_agent']))
                                            <li>
                                                <p>Has Any Agent: 
                                                    <span>
                                                        {{ $leads['any_agent'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                            
                                            <li>
                                                @if (isset($leads['user']['first_name']))
                                                <p> User: 
                                                    <span>
                                                        {{ $leads['user']['first_name'].' '.$leads['user']['last_name'] }}
                                                    </span>
                                                </p>
                                                @else
                                                <p> User: 
                                                    <span>
                                                        {{ isset($leads['name']) ? $leads['name'] : 'N/A'  }}
                                                    </span>
                                                </p>
                                                @endif
                                            </li>
                                           

                                            <li>
                                                @if (isset($leads['user']['mobile_number']))
                                                <p>User Contact: 
                                                    <span>
                                                        {{ $leads['user']['mobile_number'] }}
                                                    </span>
                                                </p>
                                                @else
                                                <p>User Contact: 
                                                    <span>
                                                        {{isset($leads['contact']) ? $leads['contact'] : 'N/A'  }}
                                                    </span>
                                                </p>
                                                @endif
                                            </li>
                                            <li>
                                                @if (isset($leads['user']['email']))
                                                <p>User Email: 
                                                    <span>
                                                        {{ $leads['user']['email'] }}
                                                    </span>
                                                </p>
                                                @else
                                                <p>User Email: 
                                                    <span>
                                                        {{isset($leads['email']) ? $leads['email'] : 'N/A'  }}
                                                    </span>
                                                </p>
                                                @endif
                                            </li>

                                            <li>
                                            @if (isset($leads['created_at']))
                                                <p>Lead Date: 
                                                    <span>
                                                        {{isset($leads['created_at']) ? stringTodate($leads['created_at']) : 'N/A'  }}
                                                    </span>
                                                </p>
                                            @endif
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h4>User Message</h4>
                                    @if (isset($leads['message']))
                                    <p class="breakword">
                                        {{ isset($leads['message']) ? $leads['message'] : 'N/A' }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
        </div>


    </section>
</section>

@endsection
