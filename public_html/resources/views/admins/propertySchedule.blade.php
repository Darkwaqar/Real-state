@extends('layouts.admin.main')
@section('admin-content')

<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Property Schedule Tour</h1>
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
                    <h2 class="title float-left">Queries</h2>

                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">

                            <div class="table-responsive" data-pattern="priority-columns">
                                @if (isset($propertyScheduledData))
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Property</th>
                                            <th>Scheduled Date</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($propertyScheduledData as $propertyScheduled)
                                        <tr>
                                            <td>{{$propertyScheduled['id']}}</td>
                                            <td>{{$propertyScheduled['user']['first_name']}}</td>
                                            <td>{{$propertyScheduled['user']['email']}}</td>
                                            <td>{{$propertyScheduled['user']['mobile_number']}}</td>
                                            <td>
                                                <a target="__blank" href="{{url('property-detail/'.$propertyScheduled['property']['id'])}}">
                                                    {{$propertyScheduled['property']['ListingKey']}}
                                                </a>
                                            </td>
                                            <td>{{$propertyScheduled['scheduled_date']}}</td>
                                            <td>{{$propertyScheduled['created_at']}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h3>Data is not available</h3>
                                @endif
                                <!-- Pagination links -->
                                <div class="pagination">
                                    {{ $propertyScheduledData->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section></div>






    </section>
</section>
@endsection
