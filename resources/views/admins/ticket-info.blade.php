
{{-- @dd($leadsData) --}}
@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Ticket Info</h1>
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
                @if (Session::has('success'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="content-body">
                    <form action="{{route('ticketupdate')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-5">
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="Search">Ticket No:</label>
                                <input type="text" readonly value="#{{$complaint['ticket_no']}}" class="form-control">
                                <input type="hidden" value="{{$complaint['id']}}" name="complaintID">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="Search">Complain By</label>
                                <input type="text" readonly value="{{isset($complaint['userComplaints']['first_name']) ? $complaint['userComplaints']['first_name'] : ''}}" class="form-control">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="Search">Complainant Email:</label>
                                <input type="text" readonly  value="{{isset($complaint['userComplaints']['email']) ? $complaint['userComplaints']['email'] : ''}}" class="form-control">
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <label for="Search">Complainant Contact No:</label>
                                <input type="text" readonly  value="{{isset($complaint['userComplaints']['mobile_number']) ? $complaint['userComplaints']['mobile_number'] : ''}}" class="form-control">
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-3">
                                <label for="Search">Complaint Type:</label>
                                <input type="text" readonly  value="{{isset($complaint['type']) ? $complaint['type'] : ''}}" class="form-control">
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mt-3">
                                <label for="Search">Complaint Subject:</label>
                                <input type="text" readonly value="{{isset($complaint['subject']) ? $complaint['subject'] : ''}}" class="form-control">
                            </div>
                            
                            <div class="col-lg-4 col-md-6 col-12 mt-3">
                                <label for="Search">Complaint Status:</label>
                                <select class="form-control" name="status">
                                    @if (isset($complaint['status']) && $complaint['status'] === 'Pending')
                                        <option value="Pending" selected>Pending</option>
                                        <option value="In Progress">In Progress</option>
                                    @elseif (isset($complaint['status']) && $complaint['status'] === 'In Progress')
                                        <option value="In Progress" selected>In Progress</option>
                                        <option value="Resolved">Resolved</option>
                                    @elseif (isset($complaint['status']) && $complaint['status'] === 'Resolved')
                                        <option value="Resolved" selected>Resolved</option>
                                        <option value="Closed">Closed</option>
                                    @elseif (isset($complaint['status']) && $complaint['status'] === 'Closed')
                                        <option value="Closed" selected>Closed</option>
                                    @else
                                        <option value="Pending">Pending</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Resolved">Resolved</option>
                                        <option value="Closed">Closed</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mt-3">
                                <label for="Search">Complaint Description:</label>
                                <textarea  readonly value="" class="form-control">
                                    {{isset($complaint['description']) ? $complaint['description'] : ''}}
                                </textarea>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mt-3">
                                <label for="Search">Complaint Description:</label>
                                <textarea name="statusChangedDescription" class="form-control">
                                    {{ $currentUpdated['status_changed_description'] ?? '' }}
                                </textarea>
                                 
                                @error('statusChangedDescription')
                                <span class="red">{{ $message }}</span>
                                @enderror
                            </div>
                            @if(!empty($complaint['attachment']))
                            <div class="col-lg-3 col-md-6 col-12 mt-3">
                                <a href="{{ asset('public/images/tickets/' . $complaint['attachment']) }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset('public/images/tickets/' . $complaint['attachment']) }}">
                                </a>                            
                            </div>
                            @endif
                            @if(!empty($complaint['attachment2']))
                            <div class="col-lg-3 col-md-6 col-12 mt-3">
                                <a href="{{ asset('public/images/tickets/' . $complaint['attachment2']) }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset('public/images/tickets/' . $complaint['attachment2']) }}">
                                </a> 
                            </div>
                            @endif
                            @if(!empty($complaint['attachment3']))
                            <div class="col-lg-3 col-md-6 col-12 mt-3">
                                <a href="{{ asset('public/images/tickets/' . $complaint['attachment3']) }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset('public/images/tickets/' . $complaint['attachment3']) }}">
                                </a>                            
                            </div>
                            @endif
                            @if(!empty($complaint['attachment4']))
                            <div class="col-lg-3 col-md-6 col-12 mt-3">
                                <a href="{{ asset('public/images/tickets/' . $complaint['attachment4']) }}" target="_blank">
                                    <img class="img-fluid" src="{{ asset('public/images/tickets/' . $complaint['attachment4']) }}">
                                </a>
                               
                            </div>
                            @endif
                           
                        </div>
                        <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mb-5">
                            <br>
                            <button class="btn btn-primary" type="submit">Update Ticket</button>
                        </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                @if (isset($complaint['complaintStatus']) && count($complaint['complaintStatus']) > 0)
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            {{-- <th>Ticket Number</th> --}}
                                            <th data-priority="1">Ticket Updated By</th>
                                            <th data-priority="2">Status Changed Description</th>
                                            <th data-priority="5"> Ticket Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($complaint['complaintStatus'] as $ticket)
                                        <tr>
                                            <td>{{isset($ticket->ticketUpdatedBy->name) ? $ticket->ticketUpdatedBy->name : 'N/A'}}</td>
                                            <td>{{isset($ticket->status_changed_description) ? $ticket->status_changed_description : 'Ticket generated'}}</td>
                                            <td>{{isset($ticket->status) ? $ticket->status : ''}}</td>
                                            <td>{{isset($ticket->created_at) ? stringTodate($ticket->created_at) : ''}}</td>
                                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h3>Data is not available</h3>
                                @endif
                            </div>


                        </div>
                    </div>
                </div>
                
            </section>
        </div>
    </section>
</section>
@endsection
