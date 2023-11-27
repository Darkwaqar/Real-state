@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Reviews</h1>                            </div>

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
                    <h2 class="title float-left">Lender's Reviews</h2>

                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th data-priority="1">Email</th>
                                            <th data-priority="3">Contact Number</th>
                                            <th>City</th>
                                            <th data-priority="1">Review For</th>
                                            <th data-priority="3">Rating</th>
                                            <th data-priority="3">Message</th>

                                            <th data-priority="6">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <td>02/11/2023</td>
                                            <th>John Smith</th>
                                            <td>john@gmail.com</td>
                                            <td>852-456-1122</td>
                                            <td>Seattle</td>
                                            <td>Tristar Finance</td>
                                            <td>5 Stars</td>
                                            <td>Tristar Finance are best in the business</td>

                                            <td colspan="2">
                                                <button class="btn btn-primary btn-sm">Add</button>
                                                <button class="btn btn-danger btn-sm">Discard</button>
                                            </td>
                                        </tr> -->


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
