@extends('properties.layouts.main')
@section('content')
	<!-- Main Blog Post Content -->
    <section class="blog_post_container bgc-f7">
        <div class="container">
           <div class="row">
              <div class="col-xl-12">
                 <div class="breadcrumb_content style2">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                       <li class="breadcrumb-item"><a href="{{ url('/blog') }}">Aris360 Blogs</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                    <h2 class="breadcrumb_title">Category</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-lg-8">
                 <div class="main_blog_post_content">
                    @if(count($blogs->toArray()) > 0 && !empty($blogs->toArray()['data']))
                    @foreach($blogs->toArray()['data'] as $myblog)
                    <div class="for_blog feat_property">
                       <div class="thumb">
                          <a href="{{url('/blog/'.$myblog['b_slug'])}}">
                            <img class="img-whp" src="{{ asset('public/images/blogs/'.$myblog['blog_cover']) }}" alt="{{$myblog['blog_title']}}">
                        </a>
                       </div>
                       <div class="details">
                          <div class="tc_content">
                             <h4 class="mb15">
                                <a href="{{url('/blog/'.$myblog['b_slug'])}}">
                                    {{$myblog['blog_title']}}
                                </a>
                                </h4>
                                <div>
                                    {{Str::limit(strip_tags($myblog['b_body']) , 300)}}
                                </div>
                          </div>
                          @foreach ($myblog['admin'] as $blogAdmin)
                          <div class="fp_footer">
                             <ul class="fp_meta float-start mb0">
                                <li class="list-inline-item"><a href="#">
                                    <img src="{{ asset('public/images/userdp/'.getUserDp($blogAdmin['id'])) }}" alt=" {{$blogAdmin['first_name']}}">
                                </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)">
                                        {{$blogAdmin['first_name']}}
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)">
                                        <span class="flaticon-calendar pr10"></span>
                                        {{date('M/D/Y',strtotime($myblog['created_at']))}}
                                    </a>
                                </li>
                             </ul>
                             <a class="fp_pdate float-end text-thm" href="{{url('/blog/'.$myblog['b_slug'])}}">
                                Read More
                                <span class="flaticon-next"></span>
                            </a>
                          </div>
                          @endforeach
                       </div>
                    </div>
                    @endforeach
                    <div class="mbp_pagination mt20">
                        {{$blogs->links()}}
                    </div>
                    @else
                    <div class="alert alert-primary" role="alert">
                        The blogs are not avialbe OR   <a href="{{ url('/blog') }}" class="alert-link">Click Here</a> To recheck the blog.
                      </div>
                    @endif
                 </div>
              </div>
              <div class="col-lg-4 col-xl-4">
                 <div class="blog-sidebar_widgets">
                    <div class="sidebar_search_widget">
                       <div class="blog_search_widget">
                            <form action="{{ url('/blog') }}" method="GET">
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
                    {{-- <div class="sidebar_feature_listing">
                       <h4 class="title">Featured Listings</h4>
                       <div class="media d-flex">
                          <a href="/listing-details-v1/28"><img class="align-self-start me-3" src="public/assets/images/blog_page_img4.jpg" alt="featured listing image"></a>
                          <div class="media-body">
                             <h5 class="mt-0 post_title"><a href="/listing-details-v1/28">Luxury Family Home</a></h5>
                             <a href="/listing-details-v1/28"> $19000/<small>/mo</small></a>
                             <ul class="mb0">
                                <li class="list-inline-item">Beds:4 </li>
                                <li class="list-inline-item">Baths:2 </li>
                                <li class="list-inline-item">SqFt:5280 </li>
                             </ul>
                          </div>
                       </div>
                    </div> --}}
                    {{-- <div class="blog_tag_widget">
                       <h4 class="title">Tags</h4>
                       <ul class="tag_list">
                          <li class="list-inline-item"><a href="#">Apartment</a></li>
                          <li class="list-inline-item"><a href="#">Real Estate</a></li>
                          <li class="list-inline-item"><a href="#">Estate</a></li>
                          <li class="list-inline-item"><a href="#">Luxury</a></li>
                          <li class="list-inline-item"><a href="#">Real</a></li>
                       </ul>
                    </div> --}}
                 </div>
              </div>
           </div>
        </div>
     </section>
@endsection

