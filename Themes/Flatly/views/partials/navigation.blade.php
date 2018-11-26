{{-- 

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">

                

                <div class="navbar-header @if (LaravelLocalization::setLocale()=="ar")
                navbar-right
                @else
                navbar-left
                @endif">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('/') }}">@setting('core::site-name')</a>
                </div>

                <div class="collapse navbar-collapse  @if (LaravelLocalization::setLocale()=="ar")
                navbar-left
                @else
                navbar-right
                @endif">
                               @menu('main')
         </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header> 
    <!--/header--> --}}


    <div id="headerNav" class="navbar-collapse collapse float--right">
            <ul class="header--nav-links nav">
               {{-- <li class="active"><a href="index.html">Home</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hosting</a> 
                  <ul class="dropdown-menu">
                     <li><a href="shared-hosting.html">Shared Hosting</a></li>
                     <li><a href="reseller-hosting.html">Reseller Hosting</a></li>
                     <li><a href="vps-hosting.html">VPS Hosting</a></li>
                     <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                  </ul>
               </li>
               <li><a href="domain.html">Domain</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a> 
                  <ul class="dropdown-menu">
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a> 
                        <ul class="dropdown-menu">
                           <li><a href="about.html">About CloudSky</a></li>
                           <li><a href="datacenter.html">About Datacenter</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SSL Certificates</a> 
                        <ul class="dropdown-menu">
                           <li><a href="ssl-certificates.html">SSL Certificates</a></li>
                           <li><a href="ssl-certificate-details.html">SSL Certificate Details</a></li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a> 
                        <ul class="dropdown-menu">
                           <li><a href="services.html">Services</a></li>
                           <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                     </li>
                     <li><a href="team.html">Team</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio</a> 
                        <ul class="dropdown-menu">
                           <li><a href="portfolio.html">Portfolio</a></li>
                           <li><a href="portfolio-details.html">Portfolio Details</a></li>
                        </ul>
                     </li>
                     <li><a href="pricing.html">Pricing</a></li>
                     <li><a href="clients.html">Our Clients</a></li>
                     <li><a href="affiliate-marketing.html">Affiliate Marketing</a></li>
                     <li><a href="faq.html">FAQ</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages</a> 
                        <ul class="dropdown-menu">
                           <li><a href="coming-soon.html">Coming Soon</a></li>
                           <li><a href="404.html">404</a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a> 
                  <ul class="dropdown-menu">
                     <li><a href="shop.html">Shop</a></li>
                     <li><a href="shop-details.html">Shop Details</a></li>
                     <li><a href="cart.html">Cart</a></li>
                     <li><a href="checkout.html">Checkout</a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a> 
                  <ul class="dropdown-menu">
                     <li><a href="blog-sidebar-right.html">Blog Sidebar Right</a></li>
                     <li><a href="blog-sidebar-left.html">Blog Sidebar Left</a></li>
                     <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
               </li>
               <li>
                  <a href="contact.html">Contact</a>
               </li> --}}
               @menu('main')

            </ul>
         </div>


