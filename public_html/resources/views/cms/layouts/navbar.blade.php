<!-- Sidebar Start -->
<aside class="sidebar" data-trigger="scrollbar" style="display: none">
    <!-- Sidebar Profile Start -->
    <div class="sidebar--profile">
        <div class="profile--img">
            <a>
                <img src="public/assets/images/icons/profile-picture.webp" alt="" class="rounded-circle">
            </a>
        </div>

        <div class="profile--name">
            <a href="#" data-toggle="modal" data-target="#basicModal" class="btn-link">ARIS360</a>
        </div>

    </div>
    <!-- Sidebar Profile End -->

    <!-- Sidebar Navigation Start -->
    <div class="sidebar--nav">
        <ul>
            <li>
                <ul>
                    <li class="">
                        <a href="{{ url('/cms-index') }}">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <!-- <li class="active open">
                                <a href="#">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Ecommerce</span>
                                </a>

                                <ul>
                                    <li><a href="ecommerce.html">Dashboard</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li class="active"><a href="products-edit.html">Edit Products</a></li>
                                    <li><a href="orders.html">Orders</a></li>
                                    <li><a href="order-view.html">Order View</a></li>
                                </ul>
                            </li> -->
                </ul>
            </li>

            <li>
                
                <a href="#">
                    <i class="fab fa-wpforms"></i>
                    Buy
                </a>

                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-th"></i>
                            <span>Buying Options</span>
                        </a>

                        <ul>
                            {{-- <li><a href="{{ url('/buy-with') }}">Buy With ARIS360</a></li> --}}
                            <li><a href="{{ url('/cms-system') }}">Buy With ARIS360</a></li>
                            <li><a href="{{ url('/why-choose') }}">Why Choose ARIS360</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-th-list"></i>
                            <span>Buying Resources</span>
                        </a>

                        <ul>
                            <li><a href="{{ url('/buying-guide') }}">Home Buying Guide</a></li>
                            <li><a href="{{ url('/first-time') }}">First Time Home Buyer</a></li>
                            <li><a href="{{ url('/current-owner') }}">Current Homeowner</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                
                <a href="#">
                    <i class="fab fa-wpforms"></i>
                    Sell
                </a>

                <ul>
                    <li>
                        <a href="#">
                            <i class="far fa-newspaper"></i>
                            <span>My Home</span>
                        </a>

                        <ul>
                            <li><a href="{{ url('/360') }}">Value360</a></li>
                            <li><a href="{{ url('/home-val') }}">Bling Your Home</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-wpforms"></i>
                            <span>Aris Selling Options</span>
                        </a>

                        <ul>
                            <li><a href="{{ url('/sell-with') }}">Sell With ARIS360</a></li>
                            <li><a href="{{ url('/comparative') }}">Comparative Analysis</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-wpforms"></i>
                            <span>Selling Resources</span>
                        </a>

                        <ul>
                            <li><a href="{{ url('/sell-guide') }}">Home Selling Guide</a></li>
                            <li><a href="{{ url('/selling-worth') }}">Is Selling Worth It?</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                
                <a href="#">
                    <i class="fab fa-wpforms"></i>
                    Home Loans
                </a>

                <ul>
                    <li>
                        <a href="#">
                            <i class="far fa-newspaper"></i>
                            <span>Mortgage</span>
                        </a>

                        <ul>
                            <li><a href="{{ url('/mortgage-r') }}">Mortgage Rates</a></li>
                            {{-- <li><a href="{{ url('/home-val') }}">Lender Directory</a></li> --}}
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-wpforms"></i>
                            <span>Resources</span>
                        </a>

                        <ul>
                            <li><a href="{{ url('/about-home-loan') }}">About ARIS360 Home Loans</a></li>
                            <li><a href="{{ url('/Mortgage-Learning-Center') }}">Mortgage Learning Center</a></li>
                            <li><a href="{{ url('/lender-resource-l') }}">Lender Resource Center</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fab fa-wpforms"></i>
                    <span>ARIS360 Agents</span>
                </a>

                <ul>
                    <li><a href="{{ url('/agent-find') }}">Find An ARIS360 Prime Agent</a></li>
                    <li><a href="{{ url('/etate-real') }}">Become An ARIS360 Prime Agent</a></li>
                    <li><a href="{{ url('/resource-center') }}">Agent Resource Center</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fab fa-wpforms"></i>
                    <span>ARIS360 News</span>
                </a>

                <ul>
                    <li><a href="{{ url('/market-update') }}">Housing Market Updates</a></li>
                    <li><a href="{{ url('/today-mortgage-rates') }}">Present Mortgage Rates</a></li>
                    <li><a href="{{ url('/mortgage-buy') }}">Rent Or Buy Decision</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('/instruction') }}">
                    <i class="fab fa-wpforms"></i>
                    <span>Instructions</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar Navigation End -->

</aside>
