@extends('layouts.admin.main')
@section('admin-content')
    <section id="main-content" class="">
        <section class="wrapper main-wrapper">

            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="page-title">

                    <div class="float-left">
                        <h1 class="title">Subscriber List</h1>
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
                                <strong>Newsletter</strong>
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
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table cellspacing="0" id="users_table"
                                        class="table table-small-font table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th data-priority="3">Email</th>
                                                <th data-priority="6">Date</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @forelse ($newsletter as  $lead)
                                                <tr>
                                                    <td>{{ $count++ }}</td>
                                                    <td>{{ $lead->email }}</td>

                                                    <td>{{ stringTodate($lead->created_at) }}</td>

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
                    <div class="row">
                        <div class="col-3">

                            {{ $newsletter->links('admins.pagination') }}
                        </div>
                    </div>
                </section>
            </div>






        </section>
    </section>
@endsection
