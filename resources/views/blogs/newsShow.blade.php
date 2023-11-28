@extends('properties.layouts.main')
@section('content')
   <!-- Blog Single Post -->
   <section class="blog_post_container bgc-f7">
    <div class="container">
       <div class="row">
          <div class="col-xl-6">
             <div class="breadcrumb_content style2">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('/blog') }}">News</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{$singleBlog['blog_title']}}
                    </li>
                </ol>
                <h2 class="breadcrumb_title">
                    {{$singleBlog['blog_title']}}
                </h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-8">
            <div class="main_blog_post_content">
               <div class="mbp_thumb_post">
                  <h3 class="blog_sp_title">
                    {{$singleBlog['blog_title']}}
                  </h3>
                  <ul class="blog_sp_post_meta">
                     <li class="list-inline-item">
                        <a href="{{url('/news/category/'.$singleBlog['category'][0]['bc_slug'])}}">
                            <img src=" {{ asset('public/images/userdp/'.getUserDp($singleBlog['admin'][0]['id'])) }}" alt="pposter1.png">
                        </a>
                    </li>
                     <li class="list-inline-item">
                        <a href="javascript:void(0)">
                            {{$singleBlog['admin'][0]['first_name']}}
                        </a>
                    </li>
                     <li class="list-inline-item">
                        <span class="flaticon-calendar"></span>
                    </li>
                     <li class="list-inline-item">
                        <a href="#">
                            {{date('M:D:Y',strtotime($singleBlog['created_at']))}}
                        </a>
                    </li>
                     <li class="list-inline-item">
                        <span class="flaticon-view"></span>
                    </li>
                  </ul>
                  <div class="thumb">
                    <img class="img-fluid" src="{{ asset('public/images/blogs/'.$singleBlog['blog_cover']) }}" alt="{{$singleBlog['blog_title']}}">
                </div>
                  <div class="details">
                    {!! $singleBlog['b_body'] !!}
                  </div>

               </div>
               <div class="product_single_content mb30">
                  <div class="mbp_pagination_comments">
                     <div class="custom_hr"></div>
                  </div>
               </div>

            </div>
            @if (isset($releatedBlog) && $releatedBlog->toArray() > 0)
            <br>
            <div class="row">
               <div class="col-lg-12 mb20">
                  <h4>Related Posts</h4>
               </div>
               @foreach ($releatedBlog as $relBlog)
               <div class="col-md-6 col-lg-6">
                  <div class="for_blog feat_property">
                     <div class="thumb">
                        <a href="{{$relBlog['b_slug']}}">
                        <img class="img-whp" src="{{ asset('public/images/blogs/'.$relBlog['blog_cover']) }}" alt=" {{$relBlog['blog_title']}}">
                    </a>
                    </div>
                     <div class="details">
                        <div class="tc_content">
                           <h4>
                            <a href="{{$relBlog['b_slug']}}">
                                {{$relBlog['blog_title']}}
                            </a>
                        </h4>
                           <ul class="bpg_meta">
                              <li class="list-inline-item">
                                <a href="#"><i class="flaticon-calendar"></i></a>
                            </li>
                              <li class="list-inline-item">
                                <a href="{{$relBlog['b_slug']}}">
                                    {{date('M:D:Y',strtotime($relBlog['created_at']))}}
                                </a>
                            </li>
                           </ul>
                           <p>
                            {{Str::limit(strip_tags($relBlog['b_body']) , 150)}}
                           </p>
                        </div>
                        <div class="fp_footer">
                           <ul class="fp_meta float-start mb0">
                              <li class="list-inline-item">
                                <a href="{{$relBlog['b_slug']}}">
                                    <img src="{{ asset('public/images/userdp/'.getUserDp($relBlog['admin'][0]['id'])) }}" alt=" {{$relBlog['admin'][0]['first_name']}}">
                                </a>
                                </li>
                              <li class="list-inline-item">
                                <a href="javascript:void(0)">
                                    {{$relBlog['admin'][0]['first_name']}}
                                </a>
                            </li>
                           </ul>
                           <a class="fp_pdate float-end text-thm" href="{{$relBlog['b_slug']}}">
                            Read More <span class="flaticon-next">

                            </span>
                        </a>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            @endif
         </div>
          <div class="col-lg-4 col-xl-4">
             <div class="blog-sidebar_widgets">
                <div class="sidebar_search_widget">
                   <div class="blog_search_widget">
                      <form method="GET" action="{{ url('/news') }}">
                         <div class="input-group">
                            <input type="text" name="s" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2" required="">
                            <div class="input-group-append"><button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button></div>
                         </div>
                      </form>
                   </div>
                </div>
                <div class="terms_condition_widget">
                    @if (isset($blogCate)&& count($blogCate) > 0)
                   <h4 class="title">Categories Property</h4>
                   <div class="widget_list">
                      <ul class="list_details">
                        @foreach ($blogCate as $itemCat)
                            <li>
                                <a href="{{url('/blog/category/'.$itemCat['bc_slug'])}}">
                                    <i class="fa fa-caret-right mr10"></i>
                                    {{$itemCat['bc_name']}}
                                        <span class="float-end">
                                            {{$itemCat['blogs_count']}}
                                        </span>
                                </a>
                            </li>
                         @endforeach
                      </ul>
                   </div>
                   @endif
                </div>


             </div>
          </div>
       </div>
    </div>
 </section>
@endsection

