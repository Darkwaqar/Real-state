@extends('layouts.admin.main');
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

                {{-- <div class="float-right d-none">
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
                </div> --}}

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
                <div class="col-4">
                    <div class="form-group">
                        {!! Form::label('Enter Blog Name') !!}
                        {!! Form::text('blogName',
                        $myBlog['blog_title'] ?? "",
                        [
                            'class'=>'form-control ',
                            'id'=>'b_name',
                            'placeholder'=>'Blog Name'
                        ]
                        ) !!}
                        @error('blogName')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                @if(isset($myBlog['b_id']))
                    <input type="hidden" name="xfxc" value="{{$myBlog['b_id']}}">
                @endif
                <div class="col-4">
                    <div class="form-group">
                        {!! Form::label('Enter Blog Slug') !!}
                        <a href="javascript:void(0)" class="edturl float-right" id="edturl">Edit</a>

                        {!! Form::text('blogSlug',
                        $myBlog['b_slug'] ?? "",
                        [
                            'class'=>'form-control ',
                            'id'=>'b_url',
                            'placeholder'=>'Blog Slug'
                        ]
                        ) !!}
                        @error('blogSlug')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {!! Form::label('Enter Meta Title') !!}
                        {!! Form::text('metaTitle', 
                        $myBlog['meta_title'] ?? "",
                        [
                            'class'=>'form-control ',
                            'id'=>'m_title',
                            'placeholder'=>'Meta Title'
                        ]
                        ) !!}
                        @error('metaTitle')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        {!! Form::label('Select Status') !!}
                        {!! Form::select('status',['1'=>'Active','0'=>'Pending'],$myBlog['b_status'] ?? "1",
                        ['class'=>'form-control','id'=>'']) !!}
                        @error('status')
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <?php $blogTypeOptions = []; ?>
                            @php
                                 $blogTypeOptions['home-buying-guide'] = 'Home Buying Guide';
                                 $blogTypeOptions['home-selling-guide'] = 'Home Selling Guide';
                                 $blogTypeOptions['lender-resource-center'] = 'Lender Resource Center';
                                 $blogTypeOptions['mortgage-resource-center'] = 'Mortgage Resource Center';
                                 $blogTypeOptions['agent-resource-center'] = 'Agent Resource Center';
                                 $blogTypeOptions['housing-market-updates'] = 'Housing Market Updates';
                                 $blogTypeOptions['present-mortgage-rates'] = 'Present Mortgage Rates';
                                 $blogTypeOptions['rent-or-buy-decision'] = 'Rent or Buy Decision';
                                 $blogTypeOptions['blog'] = 'Blogs';

                            @endphp
                        {!! Form::label('Select Type') !!}
                        {!! Form::select('blogType',$blogTypeOptions,$myBlog['blogType'] ?? "blog",
                        ['class'=>'form-control','id'=>'skztype']) !!}
                        @error('blogType')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <?php
                            $blogCatOptions = [];
                            $blogCatOptions[''] = 'Select Category';
                        ?>
                        @foreach($allBlogCat as $blogCat)
                            @php
                                $blogCatOptions[$blogCat['bc_id']] = $blogCat['bc_name'];
                            @endphp
                        @endforeach
                        {!! Form::label('Select Category') !!}
                        {!! Form::select('blogCategory',$blogCatOptions,$myBlog['category_id'] ?? "''",
                        ['class'=>'form-control','id'=>'categoryskz']) !!}
                        @error('blogCategory')
                        {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        {!! Form::file('blogDp',['class'=>'','id'=>'blogDp']) !!}
                        @error('blogDp')
                        {{$message}}
                        @enderror
                    </div>
                </div>
            </div>

            @if(isset($myBlog['blog_cover']))
                <div class="row">
                    <div class="col-2">
                        <div class="form-group">
                            <h3>Uploaded Image</h3>
                        <img class="img-fluid" src="{{asset('public/images/blogs/'.$myBlog['blog_cover'])}}" class="">
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::textArea('blogBody',
                        $myBlog['b_body'] ?? "",
                        [
                            'class'=>'form-control editor',
                            'id'=>'elm1',
                            'placeholder'=>'Add Your Body Detail',
                            'wrap'=>'off',
                            'rows'=>'13'
                        ]
                    ) !!}
                    @error('blogBody')
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
            {!! Form::close() !!}
        </div>
    </section>
</section>
@endsection


{{-- @section('extrajs')
<script src="<?php //echo asset('ck/build/ckeditor.js')?>"></script>
<script>ClassicEditor
        .create( document.querySelector( '.editor' ), {

            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'indent',
                    'outdent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',

        } )
        .then( editor => {
            window.editor = editor;




        } )
        .catch( error => {
            console.error( 'Oops, something gone wrong!' );
            console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
            console.warn( 'Build id: o86ozjmqxjuq-8o65j7c6blw0' );
            console.error( error );
        } );
</script>
@endsection --}}
