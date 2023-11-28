@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
                <section class="wrapper main-wrapper">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                        <div class="page-title">

                            <div class="float-left">
                                <h1 class="title">Selling Inquries</h1>
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
                                <form action="" method="GET" enctype="multipart/form-data">
                                    <div class="row mb-5">
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <label for="city">Search</label>
                                            <input type="text" name="s" placeholder="search here ..." class="form-control">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <label for="type">Select Month</label>
                                                <select class="form-control" name="month" id="month">
                                                    <option value="">Select Month</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <label for="city">Select City</label>
                                            @php
                                                $cities = getCitiesFromListing();
                                                //var_dump($cities);
                                            @endphp
                                            <select class="form-control" name="city" id="city">
                                                <option value="">Select City</option>
                                                    @if (isset($cities) && count($cities) > 0)
                                                        @foreach ($cities as $filterCity)
                                                            <option value="{{ $filterCity['CityName'] }}">
                                                                {{ $filterCity['CityName'] }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <label for="year">Select Year</label>
                                            <select class="form-control" name="year" id="year">
                                                <option value="">Select Year</option>
                                                {{-- <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option> --}}
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-12">
                                            <br>
                                            <button class="btn btn-primary" type="submit">Filter Now</button>
                                            <a class="btn btn-primary" href="{{ url('/admin/selling-guide') }}" >Clear Filters</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                            <thead>



                                                <tr>

                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Contact Number</th>
                                                    <th>City</th>
                                                    <th >Message</th>
                                                    <th>Agent Name</th>
                                                    <th>Date</th>
                                                    <!-- <th>Action</th> -->
                                                </tr>

                                            </thead>
                                            <tbody>
                                                @forelse ($leads as $lead)
                                                <tr>
                                                    <td>{{$lead->name}}</td>
                                                    <td>{{$lead->email}}</td>
                                                    <td>{{$lead->phone}}</td>
                                                    <td>{{$lead->city}}</td>
                                                    <td>{{$lead->question}}</td>
                                                    <td>{{$lead->user['first_name'].' '.$lead->user['last_name']}}</td>

                                                    <td>{{ date('d-m-Y', strtotime($lead->created_at)) }}</td>

                                                    <!-- <td colspan="2">
                                                        <button class="btn btn-default">Add to Database</button>
                                                    </td> -->

                                                </tr>
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
                                <div class="col-12">
                                    {{$leads->links()}}
                                </div>
                            </div>
                        </section></div>






                </section>
            </section>
@endsection
