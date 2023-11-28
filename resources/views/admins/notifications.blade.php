@extends('layouts.admin.main')
@section('admin-content')
    <section id="main-content" class="">
        <section class="wrapper main-wrapper">

            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="page-title">

                    <div class="float-left">
                        <h1 class="title">Notifications List</h1>
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
                                <strong>Notifications</strong>
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-xl-12">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title float-left">Notifications</h2>

                    </header>
                    <div class="content-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">

                                <div class="table-responsive" data-pattern="priority-columns">
                                    <table cellspacing="0" id="tech-companies-1"
                                        class="table table-small-font table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th data-priority="6">Title</th>
                                                <th data-priority="6">Message</th>
                                                <th data-priority="6"> User Name</th>
                                                <th data-priority="6">User Email</th>
                                                <th data-priority="6">Type</th>
                                                <th data-priority="6">Read</th>
                                                <th data-priority="6">Priority</th>
                                                <th data-priority="6">Date</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($notifications as  $noti)
                                                <tr>
                                                    <td>{{ isset($noti->title) ? $noti->title : 'N/A' }}</td>
                                                    <td>{{isset($noti->message) ? $noti->message : 'N/A'}}</td>
                                                    <td>{{isset($noti->user->first_name) ? $noti->user->first_name : 'N/A'}}</td>
                                                    <td>{{isset($noti->user->email) ? $noti->user->email : 'N/A'}}</td>
                                                    <td>{{isset($noti->type) ? $noti->type : 'N/A'}}</td>
                                                    <td>{{isset($noti->is_read) && $noti->is_read == 1 ? 'Yes' : 'No'}}</td>
                                                    <td>{{isset($noti->priority) ? $noti->priority : 'N/A'}}</td>
                                                    <td>{{isset($noti->created_at) ? stringTodate($noti->created_at) : 'N/A'}}</td>

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

                            {{ $notifications->links('admins.pagination') }}
                        </div>
                    </div>
                </section>
            </div>






        </section>
    </section>
@endsection
