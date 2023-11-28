@extends('layouts.admin.main')

@section('admin-content')

<section id="main-content" class="">

    <section class="wrapper main-wrapper">



        <div class="col-xl-12 col-lg-12 col-md-12 col-12">

            <div class="page-title">



                <div class="float-left">

                    <h1 class="title">Aris360 Featured  Properties</h1>

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

                {{  getSetFlashData() }}

                <header class="panel_header">

                    <h2 class="title float-left">Aris360 Featured  Properties</h2>

                </header>

                <div class="content-body">

                    

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-12">



                            <div class="table-responsive" data-pattern="priority-columns">

                                @if (isset($propertiesAPI) && !empty($propertiesAPI))

                                <table cellspacing="0" id="users_table" class="tech-companies-table table table-small-font table-bordered table-striped"> 

                                    <thead>

                                        <tr>

                                            <th>Name</th>

                                            <th>Property Address</th>

                                            <th data-priority="3">Contact Number</th>

                                            <th data-priority="1">Structure Type</th>
                                            <th data-priority="1">Property Status</th>

                                            <th data-priority="3">Date</th>

                                            <th>City</th>

                                            <th>Status</th>





                                        </tr>

                                    </thead>

                                    <tbody>

                                       @foreach ($propertiesAPI->toArray()['data'] as $myPro)

                                        <tr>

                                            <th>

                                            <a href="{{ url('/admin/properties/'.$myPro['id']) }}">

                                                {{ isset($myPro['user_properties'][0]['first_name'])
                                                ? $myPro['user_properties'][0]['first_name'] : ' N/A'
                                                }}

                                            </a>

                                            </th>

                                            <th>

                                                {{ $myPro['PropertyAddress'] }}

                                            </th>

                                            @if (isset($myPro['user_properties']))
                                            <td>
                                                {{ isset($myPro['user_properties'][0]['mobile_number'])
                                                ? $myPro['user_properties'][0]['mobile_number'] : ' N/A'
                                                }}
                                            </td>
                                            @endif
                                            <td>
                                                @if (isset( $myPro['structure_type'][0]['StructureTypeName']))
                                                    {{ $myPro['structure_type'][0]['StructureTypeName'] }}
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
                                             <td>
                                                @if ($myPro['PropertyStatus'] == 2)
                                                    <a class="btn btn-primary" href="{{ url('/admin/acceptlisting').'/'.$myPro['id'] }}">
                                                        Accept Now
                                                    </a>

                                                @else
                                                    <button class="btn btn-success" type="button"> Already Accepted</button>
                                                @endif



                                            </td>

                                        </tr>

                                       @endforeach





                                    </tbody>

                                </table>

                                @else

                                <h4>The data is not exist.</h4>

                                @endif



                            </div>





                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-12">

                        {{$propertiesAPI->links()}}

                    </div>

                </div>

            </section></div>



    </section>

</section>

@endsection

