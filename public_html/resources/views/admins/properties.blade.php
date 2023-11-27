@extends('layouts.admin.main')

@section('admin-content')



    <style>
        .print_btn {

            text-align: end;

        }
    </style>



    <section id="main-content" class="">

        <section class="wrapper main-wrapper">



            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="page-title">
                    <div class="float-left">
                        <h1 class="title">NWMLS Properties</h1>
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
                        <h2 class="title float-left">NWMLS Properties</h2>
                    </header>
                    <div class="content-body">
                       
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="table-responsive" data-pattern="priority-columns">
                                    @if (isset($propertiesAPI) && !empty($propertiesAPI))
                                        <table cellspacing="0" id="users_table"
                                            class="table table-small-font table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Agent Name</th>
                                                    <th>Property Address</th>
                                                    <th data-priority="3">Contact Number</th>
                                                    <th data-priority="1">Property Type</th>
                                                    <th data-priority="1">Property Status</th>
                                                    <th data-priority="3">Date</th>
                                                    <th>City</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($propertiesAPI as $myPro)
                                                    <tr>
                                                        <th>
                                                            <a href="{{ url('/admin/properties/' . $myPro['id']) }}">
                                                                {{ $myPro['ListAgentFullName'] }}
                                                            </a>
                                                        </th>
                                                        <th>
                                                            {{ $myPro['PropertyAddress'] }}
                                                        </th>
                                                        <td>{{ $myPro['ListOfficePhone'] }}</td>
                                                        <td>
                                                            @if (isset($myPro['StructureType'][0]['StructureTypeName']))
                                                                {{ $myPro['StructureType'][0]['StructureTypeName'] }}
                                                            @else
                                                                N/A
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{ $myPro['PublishStatus'] }}
                                                        </td>
                                                        <td>
                                                            {{ stringTodate($myPro['OriginatingSystemModificationTimestamp']) }}
                                                        </td>
                                                        <td>
                                                            {{ $myPro['CityName'] }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4>The data does not exist.</h4>
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
