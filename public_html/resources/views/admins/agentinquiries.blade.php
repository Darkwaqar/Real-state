@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Real State Agent</h1>
                </div>

                <div class="float-right d-none">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="#">Tables</a>
                        </li>
                        <li class="">
                            <strong>Real State Agent</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xl-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title float-left">Inquiries</h2>

                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>License Number</th>
                                            <th data-priority="1">Email</th>
                                            <th data-priority="3">Contact Number</th>
                                            <th data-priority="1">Agent Type</th>
                                            <th data-priority="3">Date</th>
                                            <th>City</th>
                                            <th data-priority="6">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <th>John Smith</th>
                                            <td>123-456</td>
                                            <td>john@gmail.com</td>
                                            <td>852-456-1122</td>
                                            <td>Buying Agent</td>
                                            <td>02/11/2023</td>
                                            <td>Seattle</td>
                                            <td colspan="2">
                                                <button class="btn btn-default">Add to Database</button>
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
