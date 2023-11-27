@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Finance</h1>
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
                    <!--<h2 class="title float-left">Responsive Table - Focus & Select Columns</h2>-->

                </header>
                <form action="" method="GET">

                    <div class="row mb-5">

                        <div class="col-lg-3 col-md-6 col-12">

                            <label for="city">Search</label>

                            <input type="text" name="search" placeholder="search here ..." class="form-control">

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
                            <a class="btn btn-primary" href="{{ url('admin/finance') }}" >Clear Filters</a>

                        </div>

                        <div class="col-lg-9 col-md-6 col-12 print_btn">

                            <br>

                            <button class="btn btn-primary" type="submit"><i class="fa fa-print"></i> Print</button>

                            <a class="btn btn-primary" href="javascipt:void(0)" ><i class="fa-regular fa-file-csv"></i> CSV</a>

                        </div>

                    </div>

                </form>

                <div class="content-body">    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Card Number</th>
                                            <th>Transaction ID</th>
                                            <th>Paid By</th>
                                            {{-- <th data-priority="1">Account Type</th> --}}
                                            <th data-priority="3">Amount</th>
                                            {{-- <th data-priority="1">Service</th> --}}
                                            {{-- <th>City</th> --}}


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($finance as $fin)
                                        <tr>
                                            <th>{{ date('d-m-Y', strtotime($fin->created_at)) }}</th>
                                            <td>{{\Illuminate\Support\Str::mask($fin->card_number, '*', 2, 14)}}</td>
                                            <td>{{$fin->transaction_id}}</td>
                                            <td>{{$fin->card_holder_name}}</td>
                                            <td>${{$fin->amount}}</td>
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

                        {{$finance->links()}}

                    </div>

                </div>
            </section></div>






    </section>
</section>
@endsection
