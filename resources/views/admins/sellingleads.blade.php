
{{-- @dd($leadsData) --}}
@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Leads</h1>
                </div>

                <div class="float-right d-none">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="tables-basic.html">Tables</a>
                        </li>
                        <li class="">
                            <strong>Responsive Tables</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xl-12">
            <section class="box ">
                <header class="panel_header">
                    <!-- <h2 class="title float-left">Inquiries</h2> -->

                </header>
                <div class="content-body">
                    {{-- <form action="" method="GET" enctype="multipart/form-data">
                        <div class="row mb-5">
                            <div class="col-lg-12 col-md-6 col-12">
                                <label for="Search">Search</label>
                                <input type="text" name="search" placeholder="search here ..." class="form-control">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <br><br>
                                <select class="form-control" name="month" id="month" data-filter="month">
                                    <option value="">Select Month</option>
                                    <option value="1" @if(request('month') === '1') selected @endif>Jan</option>
                                    <option value="2" @if(request('month') === '2') selected @endif>Feb</option>
                                    <option value="3" @if(request('month') === '3') selected @endif>March</option>
                                    <option value="4" @if(request('month') === '4') selected @endif>April</option>
                                    <option value="5" @if(request('month') === '5') selected @endif>May</option>
                                    <option value="6" @if(request('month') === '6') selected @endif>June</option>
                                    <option value="7" @if(request('month') === '7') selected @endif>July</option>
                                    <option value="8" @if(request('month') === '8') selected @endif>August</option>
                                    <option value="9" @if(request('month') === '9') selected @endif>September</option>
                                    <option value="10" @if(request('month') === '10') selected @endif>October</option>
                                    <option value="11" @if(request('month') === '11') selected @endif>November</option>
                                    <option value="12" @if(request('month') === '12') selected @endif>December</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <br><br>
                                @php
                                    $cities = getCitiesFromListing();
                                    //var_dump($cities);
                                @endphp
                                <select class="form-control" name="city" id="city">
                                    <option value="">Select City</option>
                                    @if (isset($cities) && count($cities) > 0)
                                        @foreach ($cities as $filterCity)
                                            <option value="{{ $filterCity['CityName'] }}" @if(request('city') === $filterCity['CityName']) selected @endif>
                                                {{ $filterCity['CityName'] }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <br><br>
                                <select class="form-control" name="leadType" id="year">
                                    <option value="">Lead Type</option>
                                    <option value="Schedule" @if(request('leadType') === 'Schedule') selected @endif>Schedule Leads</option>
                                    <option value="Leads" @if(request('leadType') === 'Leads') selected @endif>Property Leads</option>
                                    <option value="ContactForm" @if(request('leadType') === 'ContactForm') selected @endif>Property Contact Form</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <br><br>
                                <select class="form-control" name="year" id="year">
                                    <option value="">Select Year</option>
                                    {{-- <option value="2016" @if(request('year') === '2016') selected @endif>2016</option>
                                    <option value="2017" @if(request('year') === '2017') selected @endif>2017</option>
                                    <option value="2018" @if(request('year') === '2018') selected @endif>2018</option>
                                    <option value="2019" @if(request('year') === '2019') selected @endif>2019</option>
                                    <option value="2020" @if(request('year') === '2020') selected @endif>2020</option>
                                    <option value="2021" @if(request('year') === '2021') selected @endif>2021</option>
                                    <option value="2022" @if(request('year') === '2022') selected @endif>2022</option>
                                    <option value="2023" @if(request('year') === '2023') selected @endif>2023</option>
                                </select>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <br>
                                <button class="btn btn-primary" type="submit">Filter Now</button>
                                <a class="btn btn-primary" href="{{ url('/admin/leads') }}" >Clear Filters</a>
                            </div>
                        </div>
                    </form> --}}

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                           <div id="leadData"  class="table-responsive" data-pattern="priority-columns">
                                <table cellspacing="0" id="users_table" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>City</th>
                                            <th>plan to sell home</th>
                                            <th>Property</th>
                                            <th>Lead Type</th>
                                            <th>Schedule Tour</th>
                                            <th>Property Contact</th>
                                            <th>Date</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($leadsData['leads'] as $lead)
                                        <tr>

                                            <td>
                                                @if($lead['type'] == 'Schedule' || $lead['type'] == 'ContactForm')
                                                    {{isset($lead['user']['first_name']) ? $lead['user']['first_name'] : 'N/A'}}
                                                @else
                                                    {{isset($lead['name']) ? $lead['name'] : 'N/A' }}
                                                @endif
                                            </td>
                                             <td>
                                                @if($lead['type'] == 'Schedule' || $lead['type'] == 'ContactForm')
                                                {{isset($lead['user']['email']) ? $lead['user']['email'] : 'N/A'}}
                                                @else
                                                {{isset($lead['email']) ? $lead['email'] : 'N/A' }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($lead['type'] == 'Schedule' || $lead['type'] == 'ContactForm')
                                                {{isset($lead['user']['mobile_number']) ? $lead['user']['mobile_number'] : 'N/A'}}
                                                @else
                                                {{isset($lead['contact']) ? $lead['contact'] : 'N/A' }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($lead['type'] == 'Schedule' || $lead['type'] == 'ContactForm')
                                                {{isset($lead['user']['city']) ? $lead['user']['city'] : 'N/A'}}
                                                @else
                                                {{isset($lead['city']) ? $lead['city'] : 'N/A' }}
                                                @endif
                                            </td>
                                            <td>
                                                @if($lead['type'] == 'Schedule' || $lead['type'] == 'ContactForm')
                                                {{"N/A"}}
                                                @else
                                                {{isset($lead['plan_to_sell_home']) ? $lead['plan_to_sell_home'] : 'N/A'}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($lead['type'] == 'Schedule' || $lead['type'] == 'ContactForm')
                                                <a target="__blank" href="{{isset($lead['property']['id']) ? url('property-detail/'.$lead['property']['id']) : '' }}">
                                                    {{isset($lead['property']['ListingKey']) ? $lead['property']['ListingKey'] : ''}}
                                                </a>
                                                @else
                                                {{isset($lead['property_type']) ? $lead['property_type'] : 'N/A'}}
                                                @endif
                                            </td>
                                            <td>
                                                {{$lead['type']}}
                                            </td>
                                            <td>
                                                @if($lead['type'] == 'Schedule')
                                                    <a target="__blank" href="{{isset($lead['property']['id']) ? url('property-detail/'.$lead['property']['id']) : '' }}">
                                                        {{isset($lead['scheduled_date']) ? $lead['scheduled_date'] : 'N/A'}}
                                                    </a>
                                                @else
                                                    {{"N/A"}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($lead['type'] == 'ContactForm')
                                                    <a target="__blank" href="{{url('/admin/more-info/'.$lead['id'])}}">
                                                        {{isset($lead['message']) ? limitString($lead['message']) : 'N/A'}}
                                                    </a>
                                                @elseif($lead['type'] == 'Leads')
                                                <a target="__blank" href="{{url('/admin/leads-info/'.$lead['id'])}}">
                                                    {{isset($lead['message']) ? limitString($lead['message']) : 'More info'}}
                                                </a>
                                                @else
                                                    {{"N/A"}}
                                                @endif
                                            </td>
                                            <td>
                                                @if($lead['type'] == 'ContactForm' || $lead['type'] == 'leads')
                                                {{isset($lead['created_at']) ? stringTodate($lead['created_at']) : 'N/A'}}
                                                @elseif($lead['type'] == 'Leads')
                                                {{isset($lead['created_at']) ? stringTodate($lead['created_at']) : 'N/A'}}
                                                @else
                                                {{isset($lead['created_at']) ? stringTodate($lead['created_at']) : 'N/A'}}
                                                @endif
                                            </td>

                                        @empty
                                        <p> No data found </p>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">

                        {{ $leadsData['leads']->links('admins.pagination') }}
                    </div>
                </div>
            </section></div>






    </section>
</section>
@endsection
