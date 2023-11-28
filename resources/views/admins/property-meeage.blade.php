@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" >

        <div class='col-xl-12 col-lg-12 col-md-12 col-12'>
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title"> Message On Property</h1>
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
                                    Property:
                                    <strong>
                                        <a target="__blank" href="{{url('property-detail/'.$property['property']['id'])}}">
                                            {{ isset($property['property']['PropertyAddress']) ? $property['property']['PropertyAddress']  : '' }}
                                        </a>
                                           
                                    </strong>
                                </h4>

                                <div class="row">
                                   
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                           
                                            @if (isset($property['property']['PropetySellPrice']))
                                            <li>
                                                <p>Selling Price
                                                    <span>
                                                        {{ $property['property']['PropetySellPrice'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                            @if (isset($property['property']['PropertyArea']))
                                            <li>
                                                <p>Property Area: 
                                                    <span>
                                                        {{ $property['property']['PropertyArea'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['property']['PropertyAreaUnits']))
                                            <li>
                                                <p>Property Area Units: 
                                                    <span>
                                                        {{ $property['property']['PropertyAreaUnits'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <ul class="skzLeft">
                                            @if (isset($property['user']['first_name']))
                                            <li>
                                                <p> User: 
                                                    <span>
                                                        {{ $property['user']['first_name'].' '.$property['user']['last_name'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['user']['mobile_number']))
                                            <li>
                                                <p>User Contact: 
                                                    <span>
                                                        {{ $property['user']['mobile_number'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif
                                            @if (isset($property['user']['email']))
                                            <li>
                                                <p>User Email: 
                                                    <span>
                                                        {{ $property['user']['email'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                            @if (isset($property['user']['city']))
                                            <li>
                                                <p>User City: 
                                                    <span>
                                                        {{ $property['user']['city'] }}
                                                    </span>
                                                </p>
                                            </li>
                                            @endif

                                        </ul>
                                    </div>
                                </div>
                                @if (isset($property['message']))
                                <div class="col-12">
                                    <h4>User Message</h4>
                                    <p class="breakword">
                                        {{ $property['message'] }}
                                    </p>
                                </div>
                                @endif
                            </div>
                        </div>
                       
                    </div>
                </div>
            </section>
        </div>


    </section>
</section>

@endsection
