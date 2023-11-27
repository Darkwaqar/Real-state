@extends('layouts.admin.main')

@section('admin-content')
<li

    <section id="main-content" class="">

        <section class="wrapper main-wrapper">

            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-12">

                    <div class="page-title">



                        <div class="float-left">
                            {{ getSetFlashData() }}
                            <h1 class="title">User Signed Up</h1>

                        </div>



                        <div class="float-right d-none">

                            <ol class="breadcrumb">

                                <li>

                                    <a href="{{ url('/admin') }}"><i class="fa fa-home"></i>Home</a>

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

                {{-- <div class="clearfix"></div> --}}



                <div class="col-xl-12">

                    <section class="box ">

                        <header class="panel_header">

                            <h2 class="title float-left">Users</h2>



                        </header>

                        {{-- <div class="content-body">

                    <form action="" method="GET">

                        <div class="row mb-5">

                            <div class="col-lg-3 col-md-6 col-12">

                                <label for="city">Search</label>

                                <input name="s" type="text" placeholder="search here ..." class="form-control">

                            </div>



                            {{-- <div class="col-lg-4 col-md-6 col-12">

                                <label for="month">Select City</label>

                                @php

                                    $citiesUsers = getCitiesFromUsers();

                                    //var_dump($cities);

                                @endphp

                                <select class="form-control" name="city" id="city">

                                    <option value="">Select City</option>

                                    @if (isset($citiesUsers) && count($citiesUsers) > 0)

                                    @foreach ($citiesUsers as $filterCity)

                                        <option value="{{ $filterCity['city'] }}">

                                            {{ $filterCity['city'] }}

                                        </option>

                                    @endforeach

                                @endif

                                </select>

                            </div> --}}

                        {{-- <div class="col-lg-4 col-md-6 col-12">

                                <label for="year">Select Year</label>

                                <select class="form-control" name="year" id="year">

                                    <option value="">Select Year</option>

                                    <option value="2020">2020</option>

                                    <option value="2021">2021</option>

                                    <option value="2022">2022</option>

                                    <option value="2023">2023</option>

                                </select>

                            </div>

                            <div class="col-lg-4 col-md-6 col-12">

                                <br>

                                <button type="submit" class="btn btn-primary">Filter Now</button>

                                <a class="btn btn-primary" href="{{ url('admin/user-signed-up') }}" >Clear Filters</a>

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

                                            <th data-priority="1">Email</th>

                                            <th data-priority="3">Contact Number</th>

                                            <th data-priority="1">Address</th>

                                            <th>City</th>

                                            <th>User Type</th>

                                            <th>Date</th>

                                            <th>Status</th>

                                            <th>Action</th>







                                        </tr>

                                    </thead>

                                    <tbody>

                                        @if (isset($userData) && count($userData) > 0)

                                            @foreach ($userData->toArray()['data'] as $myuser)

                                            <tr>

                                                <th>

                                                    <a href="{{ url('/admin/user-signed-up/'.$myuser['id']) }}">

                                                        {{ $myuser['first_name'] }}

                                                    </a>

                                                </th>

                                                <!-- <td>123-456</td> -->

                                                <td>{{ $myuser['email'] }}</td>

                                                <td>{{ $myuser['mobile_number'] }}</td>

                                                <td>{{ $myuser['address'] }}</td>

                                                <td>{{ $myuser['city'] }}</td>

                                                <td>{{ isset($myuser['role']['name']) ? $myuser['role']['name'] : '' }}</td>

                                                <td>{{ isset($myuser['created_at']) ? stringTodate($myuser['created_at']) : '' }}</td>

                                                    <td>

                                                        @if ($myuser['status'] == 0)

                                                            <button class="btn btn-access">Pending</button>

                                                        @elseif ($myuser['status'])

                                                            <button class="btn btn-primary">Active</button>

                                                        @endif

                                                    </td>

                                                    @if (isset($myuser['role']))

                                                        <td colspan="2">

                                                            @if ($myuser['status'] == 0)

                                                            <a href="{{ url('/admin/approve-agent').'/'.$myuser['id'] }}" class="btn btn-default">Approve Now</a>

                                                            @elseif ($myuser['status'])
                                                                <button class="btn btn-primary">Already Approved</button>
                                                            @endif

                                                        </td>


                                                       @else
                                                        <td>N/A</td>
                                                  @endif

                                            </tr>

                                            @endforeach

                                        @endif

                                    </tbody>

                                </table>

                            </div>





                        </div>

                    </div>

                </div> --}}
                        <div class="table-responsive m-2">                            <table id="users_table" class="display table mr-2" style="width:100%">
                                <thead>
                                    <tr>
                                        {{-- <th data-filter="true">Name</th>
                                        <th data-priority="1" data-filter="true">Email</th>
                                        <th data-priority="3" data-filter="true">Contact Number</th>
                                        <th data-priority="1" data-filter="true">Address</th>
                                        <th data-filter="true">City</th>
                                        <th data-filter="true">User Type</th>
                                        <th data-filter="true">Date</th>
                                        <th data-filter="true">Status</th>
                                        <th>Action</th> --}}


                                        <th>Name</th>

                                        <th data-priority="1" class="table_max_width">Email</th>

                                        <th data-priority="3">Contact Number</th>

                                        <th data-priority="1" class="table_max_width">Address</th>

                                        <th>City</th>



                                        <th>Date</th>

                                        <th>Status</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @if (isset($userData) && count($userData) > 0)
                                        @foreach ($userData->toArray()['data'] as $myuser)
                                            <tr>

                                                <th>

                                                    <a href="{{ url('/admin/user-signed-up/' . $myuser['id']) }}">

                                                        {{ $myuser['first_name'] }}

                                                    </a>

                                                </th>

                                                <!-- <td>123-456</td> -->

                                                <td class="table_max_width">{{ $myuser['email'] }}</td>

                                                <td>{{ $myuser['mobile_number'] }}</td>

                                                <td class="table_max_width">{{ $myuser['address'] }}</td>

                                                <td>{{ $myuser['city'] }}</td>

                                                {{-- <td>{{ isset($myuser['role']['name']) ? $myuser['role']['name'] : '' }}</td> --}}

                                                <td>{{ isset($myuser['created_at']) ? stringTodate($myuser['created_at']) : '' }}
                                                </td>

                                                <td>

                                                    @if ($myuser['status'] == 0)
                                                        <button class="btn btn-access">Pending</button>
                                                    @elseif ($myuser['status'])
                                                        <button class="btn btn-primary">Active</button>
                                                    @endif

                                                </td>

                                                @if (isset($myuser['role']))
                                                    <td colspan="2">

                                                        @if ($myuser['status'] == 0)
                                                            <a href="{{ url('/admin/approve-agent') . '/' . $myuser['id'] }}"
                                                                class="btn btn-default">Approve Now</a>
                                                        @elseif ($myuser['status'])
                                                            <button class="btn btn-primary">Already Approved</button>
                                                        @endif

                                                    </td>
                                                @else
                                                    <td>N/A</td>
                                                @endif

                                            </tr>
                                        @endforeach
                                    @endif

                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                        {{-- </section> --}}

                        {{-- {{$userData->links()}} --}}

                </div>
            </div>


        </section>

    </section>

@endsection
