@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">All Blogs</h1>
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
           
            <div class="row">
                <div class="col-6">
                    {{getSetFlashData()}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if(count($blogs->toArray()) > 0)
                        <table class="table table-bordered" id="users_table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Image</th>
                                <th scope="col">Blog</th>
                                <th scope="col">Staus</th>
                                <th scope="col">Admin</th>
                                <th scope="col">Date</th>
                                <th scope="col">Updated</th>
                                <th scope="col">Deleted</th>
                                <th scope="col">Edite</th>
                                <th scope="col">Date</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($blogs->toArray()['data'] as $myblog)

                                <tr>
                                    <th scope="row">{{$myblog['b_id']}}</th>
                                    <td>{{$myblog['blog_title']}}</td>
                                    <td>{{$myblog['b_slug']}}</td>
                                    <td><img style="width:50px; height: 50px;" class="img-fluid" src="{{ asset('public/images/blogs/'.$myblog['blog_cover']) }}" alt="{{$myblog['blog_title']}}"></td>
                                    <td>
                                        {{Str::limit(strip_tags($myblog['b_body']) , 100)}}
                                    </td>
                                    {{-- <td>{{$myblog['b_body']}}</td> --}}
                                    <td>
                                        @if($myblog['deleted_at'])
                                            <button class="btn btn-danger">Deleted</button>
                                        @else
                                        <button class="btn btn-primary">Active</button>
                                        @endif

                                    </td>

                                    <td>
                                        @foreach ($myblog['admin'] as $admindata)
                                        {{$admindata['first_name']}}
                                        @endforeach
                                    </td>
                                    <td>{{$myblog['created_at']}}</td>
                                    <td>{{$myblog['updated_at']}}</td>
                                    <td>{{$myblog['deleted_at']}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{url('/admin/edit-blog').'/'.$myblog['b_id']}}">
                                            Edit
                                        </a>
                                    </td>
                                    @if(isset($myblog['deleted_at']) && !empty($myblog['deleted_at']))
                                        <td>
                                            <a class="btn btn-danger" href="{{url('/admin/restore-blog/').'/'.$myblog['b_id']}}">
                                                Restore Now
                                            </a>
                                        </td>
                                    @else
                                        <td>
                                            <a class="btn btn-danger" href="{{url('/admin/delete-blog/').'/'.$myblog['b_id']}}">
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
                    {{$blogs->links()}}
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
