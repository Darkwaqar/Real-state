@extends('layouts.admin.main')
@section('admin-content')

<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Seth Queries</h1>
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
                                @if (isset($sethData))
                                <table cellspacing="0" id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Property</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sethData as $mySeth)
                                        <tr>
                                            <td>{{$mySeth['id']}}</td>
                                            <td>{{$mySeth['user']['first_name']}}</td>
                                            <td>{{$mySeth['user']['email']}}</td>
                                            <td>{{$mySeth['user']['mobile_number']}}</td>
                                            <td>{{$mySeth['message']}}</td>
                                            <td>
                                                <a target="__blank" href="{{url('property-detail/'.$mySeth['property']['id'])}}">
                                                    {{$mySeth['property']['ListingKey']}}
                                                </a>
                                            </td>
                                            <td>{{$mySeth['created_at']}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h3>Data is not available</h3>
                                @endif
                                <!-- Pagination links -->
                                <div class="pagination">
                                    {{ $sethData->links('pagination::bootstrap-4') }}
                                </div>
                                {{-- {{ $sethData->links() }} --}}
                            </div>


                        </div>
                    </div>
                </div>
            </section></div>






    </section>
</section>
@endsection
