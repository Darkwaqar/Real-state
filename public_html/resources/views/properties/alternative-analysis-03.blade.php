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
                     Comparing Real Estate and Stock Investments
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
                 Comparing Real Estate and Stock Investments
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="public/assets/images/Comparing Real Estate and Stock Investments.jpg" alt="Comparing Real Estate and Stock Investments">
                </div>
                 <div class="details">
                  <p>Real estate and stock investments offer different benefits and risks. Real estate investments offer tangible assets, potential for rental income, and tax benefits, but require more upfront capital and may have lower liquidity. Stock investments offer greater liquidity, diversification, and ease of access, but may have higher volatility and less predictable returns. The decision between real estate and stock investments depends on an investor's goals and risk tolerance.</p>
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

