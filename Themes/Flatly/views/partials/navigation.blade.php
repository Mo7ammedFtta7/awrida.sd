

         <div class="nav-outer clearfix" @if(LaravelLocalization::getCurrentLocale() =='ar') style="float:left" @endif>
                         
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    
                    <div class="navbar-collapse collapse clearfix">
                            @menu('main')

                    </div>
                </nav>
                <!-- Main Menu End-->
                
                <!--Outer Box-->
                <div class="outer-box">
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="dropdown">
                            <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                            <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                <li class="panel-outer">
                                    <div class="form-container">
                                        <form method="post" action="http://steelthemes.com/demo/html/Bruges/blog.html">
                                            <div class="form-group">
                                                <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                
            </div>
    
    
    

           
{{-- 
         <div class="nav-outer clearfix">
                         
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->    	
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li class="current dropdown"><a href="#">Home</a>
                           <ul>
                                <li><a href="index-2.html">Homepage 01</a></li>
                                <li><a href="index-3.html">Homepage 02</a></li>
                                <li class="dropdown"><a href="#">Header Styles</a>
                                    <ul>
                                        <li><a href="index-2.html">Header Style One</a></li>
                                        <li><a href="index-3.html">Header Style Two</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Services</a>
                           <ul>
                                <li><a href="services.html">View All Services</a></li>
                                <li><a href="residential-design.html">Residential Design</a></li>
                                <li><a href="industrial-design.html">Industrial Design</a></li>
                                <li><a href="restaurant-design.html">Restaurant Design</a></li>
                                <li><a href="commercial-design.html">Commercial Design</a></li>
                                <li><a href="corporate-design.html">Corporate Design</a></li>
                                <li><a href="hospitality-design.html">Hospitality Design</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">About Us</a>
                           <ul>
                                <li><a href="about.html">About Our Company</a></li>
                                <li><a href="press.html">Press Release</a></li>
                                <li><a href="testimonial.html">Testimonials</a></li>
                                <li><a href="faq.html">FAQ’s</a></li>
                                <li><a href="catelogue.html">Catelogue</a></li>
                                <li><a href="not-found.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Projects</a>
                           <ul>
                                <li class="dropdown"><a href="#">Grid View</a>
                                    <ul>
                                        <li><a href="project-three-column.html">Project Three Column</a></li>
                                        <li><a href="project-four-column.html">Project Four Column</a></li>
                                    </ul>
                                </li>
                                <li><a href="project-fullwidth.html">Project Fullwidth</a></li>
                                <li><a href="project-modern.html">Modern View</a></li>
                                <li><a href="project-masonry.html">Project Masonry</a></li>
                                <li><a href="project-single.html">Single Project</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Blog</a>
                           <ul>
                                <li><a href="blog.html">Blog Default</a></li>
                                <li><a href="blog-large.html">Blog Large image</a></li>
                                <li><a href="blog-single.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Shop</a>
                           <ul>
                                <li><a href="shop.html">Shop Products</a></li>
                                <li><a href="shop-single.html">Product Single</a></li>
                                <li><a href="shoping-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="account.html">My account</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                     </ul>
                </div>
            </nav>
            <!-- Main Menu End-->
            
            <!--Outer Box-->
            <div class="outer-box">
                <!--Search Box-->
                <div class="search-box-outer">
                    <div class="dropdown">
                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                            <li class="panel-outer">
                                <div class="form-container">
                                    <form method="post" action="http://steelthemes.com/demo/html/Bruges/blog.html">
                                        <div class="form-group">
                                            <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--Cart Box-->
                <div class="cart-box">
                   <a href="shop-single.html" class="cart"><span class="icon flaticon-commerce"><span class="number">0</span></span> $0.00</a>
                </div>
            </div>
            
        </div>

 --}}
