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
                    Comparing Direct and Indirect Real Estate Investments
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
                Comparing Direct and Indirect Real Estate Investments
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="public/assets/images/Comparing Direct and Indirect Real Estate Investments.jpg" alt="Comparing Direct and Indirect Real Estate Investments">
                </div>
                 <div class="details">
                  <p>Direct and indirect real estate investments offer different levels of control and diversification. Direct investments allow investors to choose specific properties and have more control, but are less diversified. Indirect investments, such as REITs, offer greater diversification and liquidity, but less control. The choice between direct and indirect investments depends on an investor's goals and risk tolerance.</p>
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

