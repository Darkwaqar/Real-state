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
                        <a href="{{ url('/compare-my-option') }}">
                         Alternative Analysis
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                     Comparing Domestic and International Real Estate Investments
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
                 Comparing Domestic and International Real Estate Investments
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="public/assets/images/Comparing Domestic and International Real Estate.jpg" alt="Comparing Domestic and International Real Estate Investments">
                </div>
                 <div class="details">
                  <p>Domestic and international real estate investments offer different benefits and risks. Domestic investments offer familiarity with local markets and regulations, but may have limited growth potential. International investments offer greater growth potential and diversification, but may have higher risks due to unfamiliar markets and regulations. The decision between domestic and international investments depends on an investor's goals and risk tolerance.</p>
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

