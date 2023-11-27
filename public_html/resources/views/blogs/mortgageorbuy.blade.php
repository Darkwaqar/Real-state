@extends('properties.layouts.main')
@section('content')
   <!-- Blog Single Post -->
   <section class="blog_post_container bgc-f7">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 mx-auto">
             <div class="breadcrumb_content style2">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/mortgage-or-buy') }}">
                            Mortgage Or Buy
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{$singleBlog['blog_title']}}
                    </li>
                </ol>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="main_blog_post_content">
               <div class="mbp_thumb_post">
                  <h3 class="blog_sp_title">
                    {{$singleBlog['blog_title']}}
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="{{ asset('public/images/blogs/'.$singleBlog['blog_cover']) }}" alt="{{$singleBlog['blog_title']}}">
                </div>
                  <div class="details">
                    {!! $singleBlog['b_body'] !!}
                  </div>
                <br><br>    
               </div>
               <div class="product_single_content mb30">
                  <div class="mbp_pagination_comments">
                     <div class="custom_hr"></div>
                  </div>
               </div>

            </div>
         </div>
          
       </div>
    </div>
 </section>
@endsection

