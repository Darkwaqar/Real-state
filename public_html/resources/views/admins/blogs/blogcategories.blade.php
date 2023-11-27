@extends('layouts.admin.main');
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">Blog Categories</h1>
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
                            <strong>Blog Categories</strong>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-xl-12">
            <div class="row">
                <div class="col-4">
                    {!! Form::open(['method'=>'get']) !!}
                    <div class="form-group">
                        {!! Form::text('s','',['class'=>'form-control','placeholder'=>'Search']) !!}
                    </div>
                   <div class="form-group">
                       {!! Form::submit('Search',['class'=>'btn btn-primary']) !!}
                       <a class="btn btn-primary" href="{{url('/admin/blog-categories')}}">Restore</a>
                       {!! Form::close() !!}
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    {{getSetFlashData()}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if(count($blogCategories->toArray()) > 0)
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Image</th>
                                <th scope="col">Staus</th>
                                <th scope="col">Admin</th>
                                <th scope="col">Date</th>
                                <th scope="col">Updated</th>
                                <th scope="col">Deleted_at</th>
                                <th scope="col">Edite</th>
                                <th scope="col">Update</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blogCategories->toArray()['data'] as $mycategory)

                                <tr>
                                    <th scope="row">{{$mycategory['bc_id']}}</th>
                                    <td>{{$mycategory['bc_name']}}</td>
                                    <td>{{$mycategory['bc_slug']}}</td>
                                    <td>
                                        <img style="width: 50px; height: 50px;" class="img-fluid" src="{{ asset('public/images/blogs/'.$mycategory['bc_dp']) }}" alt="{{$mycategory['bc_name']}}">
                                    </td>
                                    <td>
                                        @if($mycategory['deleted_at'])
                                            <button class="btn btn-danger">Deleted</button>
                                        @else
                                        <button class="btn btn-primary">Active</button>
                                        @endif

                                    </td>
                                    <td>
                                        @foreach ($mycategory['admin'] as $admindata)
                                        {{$admindata['first_name']}}
                                        @endforeach
                                    </td>
                                    <td>{{$mycategory['created_at']}}</td>
                                    <td>{{$mycategory['updated_at']}}</td>
                                    <td>{{$mycategory['deleted_at']}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url('/admin/edit-blog-category').'/'.$mycategory['bc_id']}}">
                                            Edit
                                        </a>
                                    </td>
                                    @if(isset($mycategory['deleted_at']) && !empty($mycategory['deleted_at']))
                                        <td>
                                            <a class="btn btn-danger" href="{{url('/admin/restore-blog-category/').'/'.$mycategory['bc_id']}}">
                                                Restore Now
                                            </a>
                                        </td>
                                    @else
                                        <td>
                                            <a class="btn btn-danger" href="{{url('/admin/delete-blog-category/').'/'.$mycategory['bc_id']}}">
                                                Delete
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {{$blogCategories->links()}}
                </div>
            </div>
        </div>

    </section>
</section>
@endsection
