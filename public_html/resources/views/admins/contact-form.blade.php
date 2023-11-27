@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Contact Form</h1>
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
                    <div class="row mb-5">
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="city">Search</label>
                            <input type="text" placeholder="search here ..." class="form-control">
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="city">Select City</label>
                            <select class="form-control" name="city" id="city">
                                <option value="Houston">Houston</option>
                                <option value="Houston">Houston</option>
                                <option value="Houston">Houston</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="month">Select Month</label>
                            <select class="form-control" name="month" id="month">
                                <option value="Jan">Jan</option>
                                <option value="Feb">Feb</option>
                                <option value="Mar">Mar</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <label for="year">Select Year</label>
                            <select class="form-control" name="year" id="year">
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                    </div>   
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
                                            <th>Message</th>
                                            <th>Date</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($contacts as $contact)
                                        <tr>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->phone}}</td>
                                            <td>{{$contact->city}}</td>
                                            <td>{{$contact->Message}}</td>
                                            <td>{{ date('d-m-Y', strtotime($contact->created_at)) }}</td>

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
            </section></div>






    </section>
</section>
@endsection
