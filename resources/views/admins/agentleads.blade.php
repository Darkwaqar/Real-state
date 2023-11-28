{{-- @dd($data['agentLeads']) --}}
@extends('layouts.admin.main')
@section('admin-content')

<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title"> Agent Inqueires</h1>
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
                    <h2 class="title float-left">Leads</h2>

                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <!-- <th>License Number</th> -->
                                            <th data-priority="1">Email</th>
                                            <th data-priority="3">Contact Number</th>
                                             <th data-priority="3">City</th>
                                            <th data-priority="1">Message</th> 
                                            {{-- <th data-priority="1">Property Type</th>
                                            <th>City</th> --}}
                                            <th data-priority="3">Date</th>



                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($Leads as $inquiry)
                                        <tr>
                                            <th>
                                                <a href="#">
                                                    {{ isset($inquiry['name']) ? $inquiry['name'] : 'N/A'  }}
                                                </a>
                                            </th>
                                            <!-- <td>123-456</td> -->
                                            <td>{{ isset($inquiry['email']) ? $inquiry['email'] : 'N/A'  }}</td>
                                            <td>{{ isset($inquiry['phone']) ? $inquiry['phone'] : 'N/A'  }}</td>
                                            <td>{{ isset($inquiry['city']) ? $inquiry['city'] : 'N/A'  }}</td>
                                            <td>{{ isset($inquiry['question']) ? $inquiry['question'] : 'N/A'  }}</td>
                                            <td>{{ isset($inquiry['created_at']) ? stringTodate($inquiry['created_at']) : 'N/A' }}</td>
                                                                                                                                         
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
        <div class="row">
            <div class="col-12">
                 {{ $Leads->links('admins.pagination') }}
            </div>
        </div>
    </section>
</section>
@endsection
