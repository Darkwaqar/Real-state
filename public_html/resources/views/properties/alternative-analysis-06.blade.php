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
                    Comparing Private and Public Real Estate Investments
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
                 Comparing Private and Public Real Estate Investments
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="public/assets/images/Comparing Private and Public Real Estate Investments.jpg" alt="Comparing Private and Public Real Estate Investments">
                </div>
                 <div class="details">
                  <p>Private and public real estate investments offer different levels of access and liquidity. Private investments offer direct ownership and potentially higher returns, but require larger upfront investments and may have lower liquidity. Public investments, such as REITs, offer greater diversification and liquidity, but potentially lower returns. The decision between private and public investments depends on an investor's goals and liquidity needs.</p>
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

