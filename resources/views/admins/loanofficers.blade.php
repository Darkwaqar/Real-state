@extends('layouts.admin.main')
@section('admin-content')

    <section id="main-content" class="">
        <section class="wrapper main-wrapper">

            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="page-title">

                    <div class="float-left">
                        <h1 class="title">Loan Officers</h1>
                    </div>
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
            <div class="clearfix"></div>

            <div class="col-xl-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title float-left">Loan Officers Onboard</h2>

                    </header>
                    <div class="content-body">
                        <form action="" method="GET">

                            <div class="row mb-5">

                                <div class="col-lg-3 col-md-6 col-12">

                                    <label for="city">Search</label>

                                    <input name="search" type="text" placeholder="search here ..." class="form-control">

                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="month">Select City</label>
                                    @php
                                        $citiesUsers = getCitiesFromUsers();
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
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <label for="year">Select Year</label>
                                    <select class="form-control" name="year" id="year">
                                        <option value="">Select Year</option>
                                        {{-- <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option> --}}
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <br>
                                    <button type="submit" class="btn btn-primary">Filter Now</button>
                                    <a class="btn btn-primary" href="{{ url('/admin/loan-officers') }}">Clear Filters</a>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table cellspacing="0" id="tech-companies-1"
                                        class="table table-small-font table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Company Name</th>
                                                <th>NMLS ID</th>
                                                <th data-priority="1">Email</th>
                                                <th data-priority="3">Contact Number</th>
                                                <th data-priority="3">Date</th>
                                                <th>City</th>
                                                <th data-priority="1">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($loanOfficer as $myuser)
                                                <tr>
                                                    <th>
                                                        <a href="{{ url('/admin/user-signed-up/' . $myuser['id']) }}">
                                                            {{ $myuser['first_name'] . $myuser['last_name'] }}
                                                        </a>
                                                    </th>
                                                    <!-- <td>123-456</td> -->
                                                    <td>{{ isset($myuser['company_name']) ? $myuser['company_name'] : 'N/A' }}
                                                    </td>
                                                    <td>{{ isset($myuser['user_nmls_id']) ? $myuser['user_nmls_id'] : 'N/A' }}
                                                    </td>
                                                    <td>{{ $myuser['email'] }}</td>
                                                    <td>{{ $myuser['mobile_number'] }}</td>
                                                    <td>{{ stringTodate($myuser['created_at']) }}</td>
                                                    <td>{{ $myuser['city'] }}</td>
                                                    <td>
                                                        @if ($myuser['status'] == 0)
                                                            <button class="btn btn-access">Pending</button>
                                                        @elseif ($myuser['status'])
                                                            <button class="btn btn-primary">Active</button>
                                                        @endif
                                                    </td>
                                                    @if (isset($myuser['role']) && $myuser['role']['name'] == 'Agent')
                                                        <td colspan="2">
                                                            @if ($myuser['status'] == 0)
                                                                <a href="{{ url('/admin/approve-agent') . '/' . $myuser['id'] }}"
                                                                    class="btn btn-default">Approve Now</a>
                                                            @elseif ($myuser['status'])
                                                                <button class="btn btn-primary">Already Approved</button>
                                                            @endif
                                                        </td>
                                                    @elseif((isset($myuser['role']) && $myuser['role']['name'] == 'Lender') || $myuser['role']['name'] == 'Loan Officer')
                                                        <td colspan="2">
                                                            @if ($myuser['status'] == 0)
                                                                <a href="{{ url('/admin/approve-sfl-user') . '/' . $myuser['id'] }}"
                                                                    class="btn btn-default">Approve Now</a>
                                                            @elseif ($myuser['status'])
                                                                <button class="btn btn-primary">Already Approved</button>
                                                            @endif
                                                        </td>
                                                    @endif
                                                </tr>
                                            @empty
                                                <h5>The data does not exist.</h5>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
            </div>






        </section>
    </section>

@endsection
