@extends('properties.layouts.main')

@section('content')

<section class="blog_post_container bgc-f7">
   <div class="container">
      <div class="row">
         <div class="col-xl-6">
            <div class="breadcrumb_content style2">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog List 1</li>
               </ol>
               <h2 class="breadcrumb_title">Blog</h2>
            </div>
         </div>
      </div>
      <div style="flex-wrap: wrap-reverse" class="row">
         <div class="col-lg-8">
            <div class="main_blog_post_content">
               <div class="for_blog feat_property">
                  <div class="thumb">
                     <a href="/blog-details/7"><img class="img-whp lazy" data-src="public/assets/images/blog_page_img1.jpg" alt=""></a>
                  </div>
                  <div class="details">
                     <div class="tc_content">
                        <h4 class="mb15"><a href="/blog-details/7">Aris360 Ranks the Most Competitive Neighborhoods of 2022</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. </p>
                     </div>
                     <div class="fp_footer">
                        <ul class="fp_meta float-start mb0">
                           <li class="list-inline-item"><a href="#"><img data-src="public/assets/images/b_poster1.png" class="lazy" alt=""></a></li>
                           <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                           <li class="list-inline-item"><a href="#"><span class="flaticon-calendar pr10"></span> 7 August 2022</a></li>
                        </ul>
                        <a class="fp_pdate float-end text-thm" href="#">Read More <span class="flaticon-next"></span></a>
                     </div>
                  </div>
               </div>
               <div class="for_blog feat_property">
                  <div class="thumb">
                     <a href="/blog-details/8"><img class="img-whp lazy" data-src="public/assets/images/blog_page_img2.jpg" alt=""></a>
                  </div>
                  <div class="details">
                     <div class="tc_content">
                        <h4 class="mb15"><a href="/blog-details/8">Aris360 Ranks the Most Competitive Neighborhoods of 2022</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. </p>
                     </div>
                     <div class="fp_footer">
                        <ul class="fp_meta float-start mb0">
                           <li class="list-inline-item"><a href="#"><img class="lazy" data-src="public/assets/images/b_poster2.png" alt=""></a></li>
                           <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                           <li class="list-inline-item"><a href="#"><span class="flaticon-calendar pr10"></span> 7 August 2022</a></li>
                        </ul>
                        <a class="fp_pdate float-end text-thm" href="#">Read More <span class="flaticon-next"></span></a>
                     </div>
                  </div>
               </div>
               <div class="for_blog feat_property">
                  <div class="thumb">
                     <a href="/blog-details/9"><img class="img-whp lazy" data-src="public/assets/images/blog_page_img3.jpg" alt=""></a>
                  </div>
                  <div class="details">
                     <div class="tc_content">
                        <h4 class="mb15"><a href="/blog-details/9">Aris360 Ranks the Most Competitive Neighborhoods of 2022</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis et sem sed sollicitudin. Donec non odio neque. Aliquam hendrerit sollicitudin purus, quis rutrum mi accumsan nec. Quisque bibendum orci ac nibh facilisis, at malesuada orci congue. Nullam tempus sollicitudin cursus. </p>
                     </div>
                     <div class="fp_footer">
                        <ul class="fp_meta float-start mb0">
                           <li class="list-inline-item"><a href="#"><img class="lazy" data-src="public/assets/images/b_poster3.png" alt=""></a></li>
                           <li class="list-inline-item"><a href="#">Ali Tufan</a></li>
                           <li class="list-inline-item"><a href="#"><span class="flaticon-calendar pr10"></span> 7 August 2022</a></li>
                        </ul>
                        <a class="fp_pdate float-end text-thm" href="#">Read More <span class="flaticon-next"></span></a>
                     </div>
                  </div>
               </div>
               <div class="mbp_pagination mt20">
                  <ul class="page_navigation">
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item active" aria-current="page"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="page-link" href="#">...</a></li>
                     <li class="page-item"><a class="page-link" href="#">29</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-xl-4">
            <div class="blog-sidebar_widgets">
               <div class="sidebar_search_widget">
                  <div class="blog_search_widget">
                     <form>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2" required="">
                           <div class="input-group-append"><button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button></div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="terms_condition_widget">
                  <h4 class="title">Categories Property</h4>
                  <div class="widget_list">
                     <ul class="list_details">
                        <li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-end">6 properties</span></a></li>
                        <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-end">12 properties</span></a></li>
                        <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-end">8 properties</span></a></li>
                        <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-end">26 properties</span></a></li>
                        <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-end">89 properties</span></a></li>
                     </ul>
                  </div>
               </div>
               <div class="sidebar_feature_listing">
                  <h4 class="title">Featured Listings</h4>
                  <div class="media d-flex">
                     <a href="/listing-details-v1/28"><img class="align-self-start me-3 lazy" data-src="public/assets/images/blog_page_img4.jpg" alt="featured listing image"></a>
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
                  <div class="media d-flex">
                     <a href="/listing-details-v1/29"><img class="align-self-start me-3 lazy" data-src="public/assets/images/blog_page_img5.jpg" alt="featured listing image"></a>
                     <div class="media-body">
                        <h5 class="mt-0 post_title"><a href="/listing-details-v1/29">Luxury Family Home</a></h5>
                        <a href="/listing-details-v1/29"> $12000/<small>/mo</small></a>
                        <ul class="mb0">
                           <li class="list-inline-item">Beds:4 </li>
                           <li class="list-inline-item">Baths:2 </li>
                           <li class="list-inline-item">SqFt:5280 </li>
                        </ul>
                     </div>
                  </div>
                  <div class="media d-flex">
                     <a href="/listing-details-v1/30"><img class="align-self-start me-3 lazy" data-src="public/assets/images/blog_page_img5.jpg" alt="featured listing image"></a>
                     <div class="media-body">
                        <h5 class="mt-0 post_title"><a href="/listing-details-v1/30">Renovated Apartment</a></h5>
                        <a href="/listing-details-v1/30"> $11000/<small>/mo</small></a>
                        <ul class="mb0">
                           <li class="list-inline-item">Beds:4 </li>
                           <li class="list-inline-item">Baths:2 </li>
                           <li class="list-inline-item">SqFt:5280 </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="blog_tag_widget">
                  <h4 class="title">Tags</h4>
                  <ul class="tag_list">
                     <li class="list-inline-item"><a href="#">Apartment</a></li>
                     <li class="list-inline-item"><a href="#">Real Estate</a></li>
                     <li class="list-inline-item"><a href="#">Estate</a></li>
                     <li class="list-inline-item"><a href="#">Luxury</a></li>
                     <li class="list-inline-item"><a href="#">Real</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
