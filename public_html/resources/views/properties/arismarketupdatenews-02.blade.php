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
                        <a href="{{ url('/aris-market-update') }}">
                            Aris Market Update
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                     The Rise of Smart Homes: How Technology is Changing the Real Estate Game
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
                 The Rise of Smart Homes: How Technology is Changing the Real Estate Game
                  </h3>
                  
                  <div class="thumb">
                    <img class="img-fluid" src="public/images/The Rise of Smart Homes How Technology is Changing the Real Estate Game.JPG" alt="The Rise of Smart Homes: How Technology is Changing the Real Estate Game">
                </div>
                 <div class="details">
                  <p>The new real estate website, Aris360, has launched a section titled 'Housing Market Updates' that highlights the latest trends and insights in the real estate industry. One of the most intriguing topics on their website is 'The Rise of Smart Homes: How Technology is Changing the Real Estate Game'. This article explores how technology is transforming the way we live and interact with our homes, and how it is affecting the real estate market. With the rise of smart homes, buyers are looking for properties that are equipped with the latest technological advancements, making it crucial for real estate agents to stay up-to-date with the latest trends in the industry.</p>
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

