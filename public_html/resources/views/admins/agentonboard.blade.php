@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Real State Agent</h1>
                </div>
                <div class="float-left">
                    {{ getSetFlashData() }}
                    <h1 class="title">User Signed Up</h1>

                </div>
                <div class="float-right d-none">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ url('/admin') }}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="tables-basic.html">Tables</a>
                        </li>
                        <li>
                            <strong>Agents Onboard</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xl-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title float-left">Agents Onboard</h2>

                </header>
                <div class="content-body">
                   
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table cellspacing="0" id="users_table" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>License Number</th>
                                            <th data-priority="1">Email</th>
                                            <th data-priority="3">Contact Number</th>
                                            <th data-priority="1">Agent Type</th>
                                            <th data-priority="1">Reviews</th>
                                            <th data-priority="1">Inquiries</th>
                                            <th data-priority="3">Date</th>
                                            <th>City</th>
                                            <th data-priority="6">Status</th>
                                            <th data-priority="6">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($agents as $myuser)
                                        <tr>

                                            <th>

                                                <a href="{{ url('/admin/user-signed-up/'.$myuser['id']) }}">

                                                    {{ $myuser['first_name'].$myuser['last_name']  }}

                                                </a>

                                            </th>

                                            <!-- <td>123-456</td> -->
                                            <td>{{ isset($myuser['questions']['license_number'])
                                                    ? $myuser['questions']['license_number'] : 'N/A' }}
                                            </td>
                                            <td>{{ $myuser['email'] }}</td>

                                            <td>{{ $myuser['mobile_number'] }}</td>

                                            <td>{{ isset($myuser['type'])
                                                ? 'ARIS360 Prime Agent ' : 'N/A' }}</td>
                                            <td>
                                            @if(!empty($myuser['reviewByUser']) && count($myuser['reviewByUser']) > 0)
                                                <a href="{{ url('/admin/reviewslist/'.$myuser['id']) }}">
                                                    Reviews
                                                </a>
                                                @else
                                                No Reviews
                                                @endif
                                            </td>
                                            <td>
                                                @if(!empty($myuser['agentLeads']))
                                                <a href="{{ url('/admin/agent-leads/'.$myuser['id']) }}">
                                                    Inqueires
                                                </a>
                                                @else
                                                No Inqueires
                                                @endif
                                            </td>


                                            <td>{{ stringTodate($myuser['created_at']) }}</td>

                                            <td>{{ $myuser['city'] }}</td>

                                                <td>

                                                    @if ($myuser['status'] == 0)

                                                        <button class="btn btn-access">Pending</button>

                                                    @elseif ($myuser['status'])

                                                        <button class="btn btn-primary">Active</button>

                                                    @endif

                                                </td>

                                                @if(isset($myuser['role']) && $myuser['role']['name']=='Agent')

                                                    <td colspan="2">

                                                        @if ($myuser['status'] == 0)

                                                        <a href="{{ url('/admin/approve-agent').'/'.$myuser['id'] }}" class="btn btn-default">Approve Now</a>

                                                        @elseif ($myuser['status'])
                                                            <button class="btn btn-primary">Already Approved</button>
                                                        @endif

                                                    </td>

                                                    @elseif(
                                                        isset($myuser['role']) &&
                                                        $myuser['role']['name']=='Lender'
                                                        || $myuser['role']['name']=='Loan Officer'
                                                    )
                                                    <td colspan="2">
                                                        @if ($myuser['status'] == 0)
                                                        <a href="{{ url('/admin/approve-sfl-user').'/'.$myuser['id'] }}" class="btn btn-default">Approve Now</a>
                                                        @elseif ($myuser['status'])
                                                            <button class="btn btn-primary">Already Approved</button>
                                                        @endif
                                                    </td>

                                              @endif

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
            </section></div>






    </section>
</section>

@endsection
