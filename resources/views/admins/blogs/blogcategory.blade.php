@extends('layouts.admin.main')
@section('admin-content')
<section id="main-content" class="">
    <section class="wrapper main-wrapper">

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
            <div class="page-title">

                <div class="float-left">
                    <h1 class="title">
                        {{$title}}
                    </h1>
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
            <div class="col">
                {{getSetFlashData()}}
            </div>
        </div>
        {!! Form::open([
                                'url' => $url,
                                'class'=>'classhere',
                                'id'=>'idhere',
                                'enctype'=>'multipart/form-data'
                               ]
                            ) !!}
        <div class="row">
            <div class="col-6">
                <div class="form-group">

                    {!! Form::label('Enter Blog Category Name') !!}
                    {!! Form::text('categoryName',
                    $myCategory['bc_name'] ?? "",
                    [
                        'class'=>'form-control ',
                        'id'=>'b_name',
                        'placeholder'=>'Add Your Blog Category'
                    ]
                    ) !!}
                    @error('categoryName')
                    {{$message}}
                    @enderror
                </div>
            </div>
            @if(isset($myCategory['bc_id']))
                <input type="hidden" name="xfxc" value="{{$myCategory['bc_id']}}">
            @endif
            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('Enter Category Slug') !!}
                    <a href="javascript:void(0)" class="edturl float-right" id="edturl">Edit</a>

                    {!! Form::text('categorySlug',
                    $myCategory['bc_slug'] ?? "",
                    [
                        'class'=>'form-control ',
                        'id'=>'b_url',
                        'placeholder'=>'Add Category Slug'
                    ]
                    ) !!}
                    @error('categorySlug')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    {!! Form::label('Select Status') !!}
                    {!! Form::select('status',['1'=>'Active','0'=>'Pending'],$myCategory['bc_status'] ?? "1",
                    ['class'=>'form-control','id'=>'']) !!}
                    @error('status')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    {!! Form::file('categoryDp',['class'=>'','id'=>'categoryDp']) !!}
                    @error('categoryDp')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    {!! Form::submit($buttonName,['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        </div>
        @if(isset($myCategory['bc_dp']))
            <div class="row">
                <div class="col-2">
                    <h3>Uploaded Image</h3>
                    <img class="img-fluid" src="{{asset('public/images/blogs/'.$myCategory['bc_dp'])}}" class="">
                </div>
            </div>
        @endif
        {!! Form::close() !!}
       </div>
    </section>
</section>

@endsection
