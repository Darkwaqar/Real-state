@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Ticket System</h1>
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
                    <!-- <h2 class="title float-left">Responsive Table - Focus & Select Columns</h2> -->

                </header>
                <div class="content-body">
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                @if (isset($tickets) && count($tickets) > 0)
                                <table cellspacing="0" id="users_table" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Ticket Number</th>
                                            <th data-priority="1">Complain By</th>
                                            <th>Email </th>
                                            <th data-priority="2">Contact Number</th>
                                            <th data-priority="3">City</th>
                                            <th data-priority="4">Type</th>
                                            <th data-priority="5">Subject</th>
                                            <th data-priority="5">Attachments</th>
                                            <th data-priority="5">Description</th>
                                            <th data-priority="6">Complain Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($tickets as $ticket)
                                        <tr>
                                            <td>#{{$ticket->ticket_no}}</td>
                                            <td>{{isset($ticket->userComplaints->first_name) ? $ticket->userComplaints->first_name : ''}}</td>
                                            <td>{{isset($ticket->userComplaints->email) ? $ticket->userComplaints->email : ''}}</td>
                                            <td>{{isset($ticket->userComplaints->mobile_number) ? $ticket->userComplaints->mobile_number : ''}}</td>
                                            <td>{{isset($ticket->userComplaints->city) ? $ticket->userComplaints->city : ''}}</td>
                                            <td>{{isset($ticket->type) ? $ticket->type : ''}}</td>
                                            <td>{{isset($ticket->subject) ? $ticket->subject : ''}}</td>
                                            <td>
                                                <img class="img-fluid" src="{{asset("public/images/tickets/".$ticket->attachment)}}">
                                                </td>
                                            <td>{{isset($ticket->description) ? $ticket->description : ''}}</td>
                                            <td>{{isset($ticket->status) ? $ticket->status : ''}}</td>
                                            <td>{{isset($ticket->created_at) ? stringTodate($ticket->created_at) : ''}}</td>
                                            <td>
                                                <a target="__blank" href="{{isset($ticket->id) ? url('admin/ticket-info/'.$ticket->id) : '' }}">
                                                    Edit Ticket
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                    <h3>Data is not available</h3>
                                    @endforelse
                                    </tbody>
                                </table>
                                @else
                                <h3>Data is not available</h3>
                                @endif
                            </div>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        {{ $tickets->links('admins.pagination') }}
                    </div>
                </div>
            </section></div>






    </section>
</section>
@endsection
