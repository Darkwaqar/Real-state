@extends('layouts.admin.main')

@section('admin-content')

<section id="main-content" class="">

    <section class="wrapper main-wrapper">



        <div class="col-xl-12 col-lg-12 col-md-12 col-12">

            <div class="page-title">



                <div class="float-left">

                    <h1 class="title"> property Schedule Tour</h1>                            </div>



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

                    <h2 class="title float-left">PROPERTY SCHEDULE TOUR</h2>



                </header>

                <div class="content-body">    <div class="row">

                        <div class="col-lg-12 col-md-12 col-12">



                            <div class="table-responsive" data-pattern="priority-columns">

                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">

                                    <thead>







                                        <tr>



                                            <th>Name</th>

                                            <th>Email</th>

                                            <th>Contact Number</th>

                                            <th>message</th>

                                            <th> Property</th>

                                            <th> Schedule Date </th>

                                            <!-- <th>Action</th> -->

                                        </tr>



                                    </thead>

                                    <tbody>

                                        @forelse ($tours as $tour)

                                        <tr>

                                            <td>{{$tour->name}}</td>

                                            <td>{{$tour->email}}</td>

                                            <td>{{$tour->phone}}</td>

                                            <td>{{$tour->message}}</td>
                                        @if(isset($tour['propertyTour'][0]['id']))
                                            <td><a href="{{ url('/admin/properties/'.$tour['propertyTour'][0]['id']) }}">
                                                {{$tour['propertyTour'][0]['PropertyAddress']}}</a></td>
                                        @else
                                        <td> no data found </td>
                                        @endif
                                                <td>{{ $tour->date }} / {{ $tour->time }}</td>



                                            <!-- <td colspan="2">

                                                <button class="btn btn-default">Add to Database</button>

                                            </td> -->

                                        
                                        
                                        </tr>
                                        @empty  
                                        <p> No data found</p>
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

