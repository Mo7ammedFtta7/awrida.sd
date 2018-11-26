






<!DOCTYPE html>
<html @if (LaravelLocalization::setLocale()=="ar") dir="rtl" @endif >
    <head lang="{{ LaravelLocalization::setLocale() }}">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible"
         content="IE=edge">
      <meta name="viewport"
         content="width=device-width, initial-scale=1">
         <title>@section('title')@setting('core::site-name')@show</title>
         @if(isset($alternate))
         @foreach($alternate as $alternateLocale=>$alternateSlug)
             <link rel="alternate" hreflang="{{$alternateLocale}}" href="{{url($alternateLocale.'/'.$alternateSlug)}}">
         @endforeach
         @endif
         <link rel="canonical" href="{{url()->current()}}" />
         <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">      <meta name="author" content="ThemeLooks">
      <meta name="description" content="Multipurpose Domain, Hosting and WHMCS Template">
      <meta name="keywords" content="cloudsky, dedicated server, hosting,
         hosting template, multipurpose, responsive whmcs template,
         technology, web hosting, whmcs, whmcs 7, whmcs hosting template,
         whmcs integration, whmcs theme">
      <link rel="icon" href="favicon.png"
         type="image/png">
      <link rel="stylesheet"
         href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,900%7CLato:300,400i,900%7CRaleway:100,300,300i,400,500,500i,600,700">
      <link rel="stylesheet" href="../../../assets/css/font-awesome.min.css">
      <link
         rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
      <link
         rel="stylesheet" href="../../../assets/css/jquery-ui.min.css">
      <link
         rel="stylesheet" href="../../../assets/css/owl.carousel.min.css">
      <link
         rel="stylesheet" href="../../../assets/css/fontawesome-stars-o.min.css">
      <link
         rel="stylesheet" href="../../../assets/style.css">
      <link rel="stylesheet"
         href="../../../assets/css/responsive-style.css">
      <link rel="stylesheet"
         href="../../../assets/css/colors/theme-color-1.css" id="changeColorScheme">
      <link
         rel="stylesheet" href="../../../assets/css/font-awesome-rtl.css"
         id="changeColorScheme">
      <link rel="stylesheet"
         href="../../../assets/css/bootstrap-rtl.min.css" id="changeColorScheme">
      <link
         rel="stylesheet" href="../../../assets/css/rtl-style.css" id="changeColorScheme">
      <link rel="stylesheet" href="../../../assets/css/custom.css">
      <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <body>
      <div id="preloader">
         <div class="preloader--spinners"> <span
            class="preloader--spinner"></span> <span
            class="preloader--spinner"></span> </div>
      </div>
      <div
         class="wrapper">
         <header class="header--section">
            <div
               class="header--topbar">
               <div class="container">
                  <ul
                     class="nav social float--left hidden-xs">
                     <li><a
                        href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-pinterest"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-google-plus"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>
                  <ul class="nav button float--right">
                     <li><a
                        href="#loginForm" class="btn btn-sm
                        btn-primary" data-toggle="modal">Login</a></li>
                  </ul>
                  <ul class="nav links float--right">
                     <li
                        class="dropdown">
                        <a href="#"
                           class="dropdown-toggle"
                           data-toggle="dropdown"> <i
                           class="text-c--main mr--8 fa fa-globe"></i><span
                           class="caret"></span> </a> 
                        <ul
                           class="dropdown-menu">
                           <li><a href="#">United
                              State</a>
                           </li>
                           <li><a href="#">Bangladesh</a></li>
                           <li><a
                              href="#">United Kingdom</a></li>
                           <li><a
                              href="#">Japan</a></li>
                           <li><a
                              href="#">Spain</a></li>
                        </ul>
                     </li>
                     <li>
                        <a
                           href="http://themelooks.us/cdn-cgi/l/email-protection#395c41585449555c795c41585449555c175a5654">
                        <i class="text-c--main mr--8 fa
                           fa-envelope-o"></i><span>Email Us</span>
                        </a> 
                     </li>
                     <li class="hidden-xs"> <a
                        href="tel:0004561239870"> <i
                        class="text-c--main mr--8 fa
                        fa-volume-control-phone"></i><span>000
                        456 123 9870</span> </a> 
                     </li>
                  </ul>
               </div>
            </div>
            <nav class="header--navbar navbar"
               data-trigger="sticky">
               <div class="container">
                  <div
                     class="navbar-header"> <button type="button"
                     class="navbar-toggle collapsed"
                     data-toggle="collapse" data-target="#headerNav">
                     <span class="sr-only">Toggle Navigation</span>
                     <span class="icon-bar"></span> <span
                        class="icon-bar"></span> <span
                        class="icon-bar"></span> </button> <a
                        href="index-2.html" class="navbar-brand"> <img
                        src="../../../assets/img/logo.png" alt=""> </a> 
                  </div>
                  <div
                     class="header--cart-btn float--right"> <a
                     href="cart.html" class="btn-link"><i class="fa
                     fa-shopping-cart"></i><span>3</span></a>
                  </div>
                  <div id="headerNav" class="navbar-collapse
                     collapse float--right">
                     <ul class="header--nav-links
                        nav">
                        <li class="active"><a href="index-2.html">Home</a></li>
                        <li
                           class="dropdown">
                           <a href="#"
                              class="dropdown-toggle"
                              data-toggle="dropdown">Hosting</a> 
                           <ul
                              class="dropdown-menu">
                              <li><a
                                 href="shared-hosting.html">Shared
                                 Hosting</a>
                              </li>
                              <li><a
                                 href="reseller-hosting.html">Reseller
                                 Hosting</a>
                              </li>
                              <li><a
                                 href="vps-hosting.html">VPS
                                 Hosting</a>
                              </li>
                              <li><a
                                 href="dedicated-hosting.html">Dedicated
                                 Hosting</a>
                              </li>
                           </ul>
                        </li>
                        <li><a
                           href="domain.html">Domain</a></li>
                        <li
                           class="dropdown">
                           <a href="#"
                              class="dropdown-toggle"
                              data-toggle="dropdown">Pages</a> 
                           <ul
                              class="dropdown-menu">
                              <li
                                 class="dropdown">
                                 <a href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown">About</a>
                                 <ul class="dropdown-menu">
                                    <li><a
                                       href="about.html">About
                                       CloudSky</a>
                                    </li>
                                    <li><a
                                       href="datacenter.html">About
                                       Datacenter</a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="dropdown">
                                 <a href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown">SSL
                                 Certificates</a> 
                                 <ul
                                    class="dropdown-menu">
                                    <li><a
                                       href="ssl-certificates.html">SSL
                                       Certificates</a>
                                    </li>
                                    <li><a
                                       href="ssl-certificate-details.html">SSL
                                       Certificate Details</a>
                                    </li>
                                 </ul>
                              </li>
                              <li class="dropdown">
                                 <a href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown">Services</a>
                                 <ul class="dropdown-menu">
                                    <li><a
                                       href="services.html">Services</a></li>
                                    <li><a
                                       href="service-details.html">Service
                                       Details</a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="team.html">Team</a></li>
                              <li
                                 class="dropdown">
                                 <a href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown">Portfolio</a>
                                 <ul class="dropdown-menu">
                                    <li><a
                                       href="portfolio.html">Portfolio</a></li>
                                    <li><a
                                       href="portfolio-details.html">Portfolio
                                       Details</a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="pricing.html">Pricing</a></li>
                              <li><a
                                 href="clients.html">Our Clients</a></li>
                              <li><a
                                 href="affiliate-marketing.html">Affiliate
                                 Marketing</a>
                              </li>
                              <li><a
                                 href="faq.html">FAQ</a></li>
                              <li
                                 class="dropdown">
                                 <a href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown">Other
                                 Pages</a> 
                                 <ul
                                    class="dropdown-menu">
                                    <li><a
                                       href="coming-soon.html">Coming
                                       Soon</a>
                                    </li>
                                    <li><a
                                       href="404.html">404</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a
                              href="#" class="dropdown-toggle"
                              data-toggle="dropdown">Shop</a> 
                           <ul
                              class="dropdown-menu">
                              <li><a
                                 href="shop.html">Shop</a></li>
                              <li><a
                                 href="shop-details.html">Shop
                                 Details</a>
                              </li>
                              <li><a
                                 href="cart.html">Cart</a></li>
                              <li><a
                                 href="checkout.html">Checkout</a></li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="#"
                              class="dropdown-toggle"
                              data-toggle="dropdown">Blog</a> 
                           <ul
                              class="dropdown-menu">
                              <li><a
                                 href="blog-sidebar-right.html">Blog
                                 Sidebar Right</a>
                              </li>
                              <li><a
                                 href="blog-sidebar-left.html">Blog
                                 Sidebar Left</a>
                              </li>
                              <li><a
                                 href="blog-details.html">Blog
                                 Details</a>
                              </li>
                           </ul>
                        </li>
                        <li><a
                           href="contact.html">Contact</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
         <section class="banner--section">
            <div class="banner--slider owl-carousel" data-owl-dots="true">
               <div class="banner--item bg--overlay" data-bg-img="/img/banner-home-img/slider-bg-01.jpg">
                  <div class="vc--parent">
                     <div class="vc--child">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                 <div class="banner--content text-center pt--60 pb--80">
                                    <div class="title text-uppercase">
                                       <h1 class="h1">Website</h1>
                                       <h2 class="h1"><strong>Performance</strong></h2>
                                    </div>
                                    <div class="desc">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                    <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="banner--item bg--overlay" data-bg-img="/img/banner-home-img/slider-bg-02.jpg">
                  <div class="vc--parent">
                     <div class="vc--child">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                 <div class="banner--content text-center pt--60 pb--80">
                                    <div class="title text-uppercase">
                                       <h1 class="h1">Website</h1>
                                       <h2 class="h1"><strong>Performance</strong></h2>
                                    </div>
                                    <div class="desc">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                    <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="banner--item bg--overlay" data-bg-img="/img/banner-home-img/slider-bg-03.jpg">
                  <div class="vc--parent">
                     <div class="vc--child">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                 <div class="banner--content text-center pt--60 pb--80">
                                    <div class="title text-uppercase">
                                       <h1 class="h1">Website</h1>
                                       <h2 class="h1"><strong>Performance</strong></h2>
                                    </div>
                                    <div class="desc">
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                    <div class="action"> <a href="#" class="btn btn-lg btn-default">Read More<i class="ml--8 fa fa-check-circle"></i></a> <a href="#" class="btn btn-lg btn-primary">Our Plans<i class="ml--8 fa fa-check-circle"></i></a> </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="domain-search--section pt--70 pb--70">
            <div
               class="container">
               <div class="section--title pb--30
                  text-center">
                  <h2 class="h1 text-uppercase">Search Your
                     Perfect Domain Name Here
                  </h2>
                  <div class="row">
                     <div
                        class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum
                           dolor sit amet, consectetur adipisicing
                           elit, sed do eiusmod tempor incididunt ut
                           labore et dolore magna aliqua.
                        </p>
                     </div>
                  </div>
               </div>
               <div
                  class="domain-search--form">
                  <form
                     action="http://billing.ywhmcs.com/domainchecker.php?systpl=CloudSky"
                     method="post" data-form="validate">
                     <div class="row
                        gutter--0">
                        <div class="col-md-6
                           col-md-offset-3">
                           <div class="input-group">
                              <input type="text" name="domain"
                                 placeholder="Your Domain Name Here"
                                 class="form-control" required> 
                              <div
                                 class="input-group-addon">
                                 <select
                                    name="ext" class="btn-default
                                    active">
                                    <option value=".com"
                                       selected>.com</option>
                                    <option value=".net">.net</option>
                                    <option value=".org">.org</option>
                                 </select>
                                 <button type="submit"
                                    class="btn btn-default active">Search<i
                                    class="ml--8 fa fa-search"></i></button>
                              </div>
                           </div>
                           <div class="extras">
                              <ul
                                 class="nav">
                                 <li><span
                                    data-scroll-reveal="bottom">Instant
                                    Activation</span>
                                 </li>
                                 <li><span
                                    data-scroll-reveal="bottom">Complete
                                    DNS Control</span>
                                 </li>
                                 <li><span
                                    data-scroll-reveal="bottom">No
                                    Hidden Cost</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </section>
         <section class="services--section">
            <div class="services--slider
               owl-carousel" data-owl-nav="true" data-owl-responsive='{" 0"
               :{" items" :" 1" }," 551" :{" items" :" 2" }," 768" :{"
               items" :" 3"
               }," 992" :{" items" :" 3" }," 1200" :{" items" :" 4" }}'>
               <div
                  class="service--item style--1 p--80 bg--c-main
                  text-center">
                  <div class="icon"> <img
                     src="../../../assets/img/services-img/icon-01.png" alt="">
                  </div>
                  <div class="title text-uppercase">
                     <h2 class="h4">Shared
                        Hosting
                     </h2>
                  </div>
                  <div class="desc">
                     <p>Consectetur
                        adipisicing elit, sed do eiusmod tempor incidunt
                        labore dolore magna aliqua. Ut enim ad nostrud
                        exeycitation.
                     </p>
                  </div>
                  <div class="action"> <a
                     href="service-details.html" class="btn
                     btn-primary">Read More</a> </div>
               </div>
               <div
                  class="service--item style--1 p--80 bg--c-main
                  text-center">
                  <div class="icon"> <img
                     src="../../../assets/img/services-img/icon-02.png" alt="">
                  </div>
                  <div class="title text-uppercase">
                     <h2 class="h4">Reseller
                        Hosting
                     </h2>
                  </div>
                  <div class="desc">
                     <p>Consectetur
                        adipisicing elit, sed do eiusmod tempor incidunt
                        labore dolore magna aliqua. Ut enim ad nostrud
                        exeycitation.
                     </p>
                  </div>
                  <div class="action"> <a
                     href="service-details.html" class="btn
                     btn-primary">Read More</a> </div>
               </div>
               <div
                  class="service--item style--1 p--80 bg--c-main
                  text-center">
                  <div class="icon"> <img
                     src="../../../assets/img/services-img/icon-03.png" alt="">
                  </div>
                  <div class="title text-uppercase">
                     <h2 class="h4">VPS
                        Hosting
                     </h2>
                  </div>
                  <div class="desc">
                     <p>Consectetur
                        adipisicing elit, sed do eiusmod tempor incidunt
                        labore dolore magna aliqua. Ut enim ad nostrud
                        exeycitation.
                     </p>
                  </div>
                  <div class="action"> <a
                     href="service-details.html" class="btn
                     btn-primary">Read More</a> </div>
               </div>
               <div
                  class="service--item style--1 p--80 bg--c-main
                  text-center">
                  <div class="icon"> <img
                     src="../../../assets/img/services-img/icon-04.png" alt="">
                  </div>
                  <div class="title text-uppercase">
                     <h2 class="h4">Dedicated
                        Hosting
                     </h2>
                  </div>
                  <div class="desc">
                     <p>Consectetur
                        adipisicing elit, sed do eiusmod tempor incidunt
                        labore dolore magna aliqua. Ut enim ad nostrud
                        exeycitation.
                     </p>
                  </div>
                  <div class="action"> <a
                     href="service-details.html" class="btn
                     btn-primary">Read More</a> </div>
               </div>
               <div
                  class="service--item style--1 p--80 bg--c-main
                  text-center">
                  <div class="icon"> <img
                     src="../../../assets/img/services-img/icon-05.png" alt="">
                  </div>
                  <div class="title text-uppercase">
                     <h2 class="h4">Cloud
                        Hosting
                     </h2>
                  </div>
                  <div class="desc">
                     <p>Consectetur
                        adipisicing elit, sed do eiusmod tempor incidunt
                        labore dolore magna aliqua. Ut enim ad nostrud
                        exeycitation.
                     </p>
                  </div>
                  <div class="action"> <a
                     href="service-details.html" class="btn
                     btn-primary">Read More</a> </div>
               </div>
            </div>
         </section>
         <section class="pricing--section pt--70 pb--80">
            <div
               class="container">
               <div class="section--title pb--50
                  text-center">
                  <h2 class="h1 text-uppercase">Our Pricing</h2>
                  <div class="row">
                     <div class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur
                           adipisicing elit, sed do eiusmod tempor
                           incididunt ut labore et dolore magna aliqua.
                        </p>
                     </div>
                  </div>
               </div>
               <div
                  class="pricing--nav pb--50 text-center">
                  <ul
                     class="nav">
                     <li class="active"> <a
                        href="#pricingTab01" data-toggle="tab"> <img
                        src="../../../assets/img/pricing-img/nav-icon-01-normal.png"
                        alt="" class="icon"> <img
                        src="../../../assets/img/pricing-img/nav-icon-01-hover.png"
                        alt="" class="icon"> <span>Shared
                        Hosting</span> </a> 
                     </li>
                     <li> <a
                        href="#pricingTab02" data-toggle="tab"> <img
                        src="../../../assets/img/pricing-img/nav-icon-02-normal.png"
                        alt="" class="icon"> <img
                        src="../../../assets/img/pricing-img/nav-icon-02-hover.png"
                        alt="" class="icon"> <span>Reseller
                        Hosting</span> </a> 
                     </li>
                     <li> <a
                        href="#pricingTab03" data-toggle="tab"> <img
                        src="../../../assets/img/pricing-img/nav-icon-03-normal.png"
                        alt="" class="icon"> <img
                        src="../../../assets/img/pricing-img/nav-icon-03-hover.png"
                        alt="" class="icon"> <span>VPS Hosting</span>
                        </a> 
                     </li>
                     <li> <a href="#pricingTab04"
                        data-toggle="tab"> <img
                        src="../../../assets/img/pricing-img/nav-icon-04-normal.png"
                        alt="" class="icon"> <img
                        src="../../../assets/img/pricing-img/nav-icon-04-hover.png"
                        alt="" class="icon"> <span>Dedicated
                        Hosting</span> </a> 
                     </li>
                  </ul>
               </div>
               <div
                  class="tab-content">
                  <div class="tab-pane fade in
                     active" id="pricingTab01">
                     <div
                        class="pricing--slider owl-carousel"
                        data-owl-margin="30" data-owl-autoplay="false"
                        data-owl-loop="false" data-owl-nav="true"
                        data-owl-responsive='{" 0" :{" items" :" 1" },"
                        551"
                        :{" items" :" 2" }," 768" :{" items" :" 3" },"
                        992"
                        :{" items" :" 3" }," 1200" :{" items" :" 4" }}'>
                        <div class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Free</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>0<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10 active">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Basic</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>32<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Popular</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>69<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Gold</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>99<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Business</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>199<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="tab-pane fade" id="pricingTab02">
                     <div
                        class="pricing--slider pt--50 owl-carousel"
                        data-owl-margin="30" data-owl-autoplay="false"
                        data-owl-loop="false" data-owl-nav="true"
                        data-owl-responsive='{" 0" :{" items" :" 1" },"
                        551"
                        :{" items" :" 2" }," 768" :{" items" :" 3" },"
                        992"
                        :{" items" :" 3" }," 1200" :{" items" :" 4" }}'>
                        <div class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Free</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>0<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10 active">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Basic</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>32<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Popular</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>69<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Gold</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>99<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Business</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>199<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="tab-pane fade" id="pricingTab03">
                     <div
                        class="pricing--slider pt--50 owl-carousel"
                        data-owl-margin="30" data-owl-autoplay="false"
                        data-owl-loop="false" data-owl-nav="true"
                        data-owl-responsive='{" 0" :{" items" :" 1" },"
                        551"
                        :{" items" :" 2" }," 768" :{" items" :" 3" },"
                        992"
                        :{" items" :" 3" }," 1200" :{" items" :" 4" }}'>
                        <div class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Free</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>0<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10 active">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Basic</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>32<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Popular</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>69<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Gold</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>99<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Business</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>199<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="tab-pane fade" id="pricingTab04">
                     <div
                        class="pricing--slider pt--50 owl-carousel"
                        data-owl-margin="30" data-owl-autoplay="false"
                        data-owl-loop="false" data-owl-nav="true"
                        data-owl-responsive='{" 0" :{" items" :" 1" },"
                        551"
                        :{" items" :" 2" }," 768" :{" items" :" 3" },"
                        992"
                        :{" items" :" 3" }," 1200" :{" items" :" 4" }}'>
                        <div class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Free</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>0<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10 active">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Basic</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>32<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Popular</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>69<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Gold</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>99<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                        <div
                           class="pricing--item pt--10">
                           <div
                              class="title text-uppercase">
                              <h3
                                 class="h4"> <span
                                 class="vc--parent"> <span
                                 class="vc--child">Business</span>
                                 </span> 
                              </h3>
                           </div>
                           <div
                              class="price">
                              <p><small>$</small>199<small>/mo</small></p>
                           </div>
                           <div
                              class="features">
                              <ul class="nav">
                                 <li>24/7
                                    Support
                                 </li>
                                 <li>5TB Bandwidth</li>
                                 <li>100GB
                                    Hosting Space
                                 </li>
                                 <li>16GB
                                    Memory
                                 </li>
                                 <li>100 Free Domain</li>
                                 <li>User
                                    Analytics
                                 </li>
                              </ul>
                           </div>
                           <div
                              class="action"> <a href="#" class="btn
                              btn-default">Select Plan<i
                              class="ml--8 fa
                              fa-check-circle"></i></a> </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="features--section pt--70 pb--50 bg--overlay"
            data-bg-img="../../../assets/img/features-img/bg.jpg">
            <div class="container">
               <div class="section--title pb--50 text-center">
                  <h2
                     class="h1 text-uppercase">Our Featurs Makes Us Best</h2>
                  <div class="row">
                     <div class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur
                           adipisicing elit, sed do eiusmod tempor
                           incididunt ut labore et dolore magna aliqua.
                        </p>
                     </div>
                  </div>
               </div>
               <div
                  class="row AdjustRow" data-scroll-reveal="group">
                  <div
                     class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                     <div
                        class="feature--item style--1 text-center">
                        <div
                           class="img"> <img
                           src="../../../assets/img/features-img/icon-01-normal.png"
                           alt=""> <img
                           src="../../../assets/img/features-img/icon-01-hover.png"
                           alt=""> </div>
                        <div class="title">
                           <h3
                              class="h4">Multiple Cloud Infrastructure</h3>
                        </div>
                        <div class="desc">
                           <p>Lorem ipsum dolor
                              sit amet, consectetur adipiscing
                              elitLorem ipsum dolor sit consectetur
                              sed do eiusmod tempor.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div
                     class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                     <div
                        class="feature--item style--1 text-center">
                        <div
                           class="img"> <img
                           src="../../../assets/img/features-img/icon-02-normal.png"
                           alt=""> <img
                           src="../../../assets/img/features-img/icon-02-hover.png"
                           alt=""> </div>
                        <div class="title">
                           <h3
                              class="h4">Multiple Datacenters</h3>
                        </div>
                        <div class="desc">
                           <p>Lorem ipsum dolor
                              sit amet, consectetur adipiscing
                              elitLorem ipsum dolor sit consectetur
                              sed do eiusmod tempor.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div
                     class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                     <div
                        class="feature--item style--1 text-center">
                        <div
                           class="img"> <img
                           src="../../../assets/img/features-img/icon-03-normal.png"
                           alt=""> <img
                           src="../../../assets/img/features-img/icon-03-hover.png"
                           alt=""> </div>
                        <div class="title">
                           <h3
                              class="h4">Unlimited Database</h3>
                        </div>
                        <div class="desc">
                           <p>Lorem ipsum dolor
                              sit amet, consectetur adipiscing
                              elitLorem ipsum dolor sit consectetur
                              sed do eiusmod tempor.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div
                     class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                     <div
                        class="feature--item style--1 text-center">
                        <div
                           class="img"> <img
                           src="../../../assets/img/features-img/icon-04-normal.png"
                           alt=""> <img
                           src="../../../assets/img/features-img/icon-04-hover.png"
                           alt=""> </div>
                        <div class="title">
                           <h3
                              class="h4">99.99% Uptime</h3>
                        </div>
                        <div
                           class="desc">
                           <p>Lorem ipsum dolor sit amet,
                              consectetur adipiscing elitLorem ipsum
                              dolor sit consectetur sed do eiusmod
                              tempor.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div
                     class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                     <div
                        class="feature--item style--1 text-center">
                        <div
                           class="img"> <img
                           src="../../../assets/img/features-img/icon-05-normal.png"
                           alt=""> <img
                           src="../../../assets/img/features-img/icon-05-hover.png"
                           alt=""> </div>
                        <div class="title">
                           <h3
                              class="h4">24/7 Support</h3>
                        </div>
                        <div
                           class="desc">
                           <p>Lorem ipsum dolor sit amet,
                              consectetur adipiscing elitLorem ipsum
                              dolor sit consectetur sed do eiusmod
                              tempor.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div
                     class="col-md-4 col-xs-6 col-xxs-12 pb--30">
                     <div
                        class="feature--item style--1 text-center">
                        <div
                           class="img"> <img
                           src="../../../assets/img/features-img/icon-06-normal.png"
                           alt=""> <img
                           src="../../../assets/img/features-img/icon-06-hover.png"
                           alt=""> </div>
                        <div class="title">
                           <h3
                              class="h4">High Security</h3>
                        </div>
                        <div
                           class="desc">
                           <p>Lorem ipsum dolor sit amet,
                              consectetur adipiscing elitLorem ipsum
                              dolor sit consectetur sed do eiusmod
                              tempor.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="testimonials--section pt--70 pb--70">
            <div
               class="container">
               <div class="section--title pb--50
                  text-center">
                  <h2 class="h1 text-uppercase">Customer's
                     Feedback
                  </h2>
                  <div class="row">
                     <div class="col-md-6
                        col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet,
                           consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna
                           aliqua.
                        </p>
                     </div>
                  </div>
               </div>
               <div
                  class="row">
                  <div class="col-md-8 col-md-offset-2">
                     <div
                        class="testimonial--slider owl-carousel"
                        data-owl-dots="true" data-owl-margin="30"
                        data-owl-speed="2000">
                        <div
                           class="testimonial--item">
                           <div
                              class="content text-center">
                              <div
                                 class="img"> <img
                                 src="../../../assets/img/testimonial-img/client-01.jpg"
                                 alt=""> </div>
                              <blockquote>
                                 <p>Lorem
                                    ipsum dolor sit amet,
                                    consectetur adipisicing elit,
                                    sed do eiuovod tempor incididunt
                                    ut labore et dolore magna
                                    aliqua. Ut enim ad minim quis
                                    nostrud exercitation.
                                 </p>
                              </blockquote>
                           </div>
                           <div class="name">
                              <p>Maria Doe</p>
                           </div>
                        </div>
                        <div
                           class="testimonial--item">
                           <div
                              class="content text-center">
                              <div
                                 class="img"> <img
                                 src="../../../assets/img/testimonial-img/client-02.jpg"
                                 alt=""> </div>
                              <blockquote>
                                 <p>Lorem
                                    ipsum dolor sit amet,
                                    consectetur adipisicing elit,
                                    sed do eiuovod tempor incididunt
                                    ut labore et dolore magna
                                    aliqua. Ut enim ad minim quis
                                    nostrud exercitation.
                                 </p>
                              </blockquote>
                           </div>
                           <div class="name">
                              <p>Alan Palmer</p>
                           </div>
                        </div>
                        <div
                           class="testimonial--item">
                           <div
                              class="content text-center">
                              <div
                                 class="img"> <img
                                 src="../../../assets/img/testimonial-img/client-03.jpg"
                                 alt=""> </div>
                              <blockquote>
                                 <p>Lorem
                                    ipsum dolor sit amet,
                                    consectetur adipisicing elit,
                                    sed do eiuovod tempor incididunt
                                    ut labore et dolore magna
                                    aliqua. Ut enim ad minim quis
                                    nostrud exercitation.
                                 </p>
                              </blockquote>
                           </div>
                           <div class="name">
                              <p>Nicole Morrison</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="counter--section pt--80 pb--50 bg--overlay"
            data-bg-img="../../../assets/img/counter-img/bg.jpg">
            <div class="container">
               <div class="row AdjustRow">
                  <div class="col-md-3 col-xs-6
                     col-xss-12 pb--30">
                     <div class="counter--item
                        style--1">
                        <div class="img"> <img
                           src="../../../assets/img/counter-img/icon-01.png"
                           alt=""> </div>
                        <div class="title">
                           <h2
                              class="h4">Happy Costomers</h2>
                        </div>
                        <div
                           class="count">
                           <h3 class="h1"><span
                              data-trigger="counterUp">302</span>+</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-xs-6
                     col-xss-12 pb--30">
                     <div class="counter--item
                        style--1">
                        <div class="img"> <img
                           src="../../../assets/img/counter-img/icon-02.png"
                           alt=""> </div>
                        <div class="title">
                           <h2
                              class="h4">Hosting Servers Sold</h2>
                        </div>
                        <div class="count">
                           <h3 class="h1"><span
                              data-trigger="counterUp">502</span>+</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-xs-6
                     col-xss-12 pb--30">
                     <div class="counter--item
                        style--1">
                        <div class="img"> <img
                           src="../../../assets/img/counter-img/icon-03.png"
                           alt=""> </div>
                        <div class="title">
                           <h2
                              class="h4">Our Data Center</h2>
                        </div>
                        <div
                           class="count">
                           <h3 class="h1"><span
                              data-trigger="counterUp">150</span>+</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3 col-xs-6
                     col-xss-12 pb--30">
                     <div class="counter--item
                        style--1">
                        <div class="img"> <img
                           src="../../../assets/img/counter-img/icon-04.png"
                           alt=""> </div>
                        <div class="title">
                           <h2
                              class="h4">Team Members</h2>
                        </div>
                        <div
                           class="count">
                           <h3 class="h1"><span
                              data-trigger="counterUp">690</span>+</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="faq--section pt--80 pb--20">
            <div class="container">
               <div class="section--title pb--50 text-center">
                  <h2
                     class="h1 text-uppercase">Here are some common
                     questions about CloudSky
                  </h2>
                  <div class="row">
                     <div
                        class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum
                           dolor sit amet, consectetur adipisicing
                           elit, sed do eiusmod tempor incididunt ut
                           labore et dolore magna aliqua.
                        </p>
                     </div>
                  </div>
               </div>
               <div
                  class="row row--vc-md">
                  <div class="col-md-6 pb--60">
                     <div class="faq--img" data-scroll-reveal="left">
                        <img src="../../../assets/img/faq-img/01.jpg" alt=""
                           class="center-block"> 
                     </div>
                  </div>
                  <div
                     class="col-md-6 pb--60">
                     <div class="faq--items
                        panel-group" id="faqItems01"
                        data-scroll-reveal="right">
                        <div
                           class="faq--item panel">
                           <div
                              class="panel-heading">
                              <h3 class="h4">
                                 <a href="#faqItems01_1"
                                    data-toggle="collapse"
                                    data-parent="#faqItems01"> <i
                                    class="fa fa-cloud"></i>
                                 <span>What is bandwidth and how
                                 much do you need?</span>
                                 </a> 
                              </h3>
                           </div>
                           <div
                              id="faqItems01_1" class="panel-collapse
                              collapse in">
                              <div class="panel-body">
                                 <p>Consectetur adipisicing elit, sed
                                    do eiusmod tempor incunt ut
                                    labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea
                                    commodo consequat.
                                 </p>
                                 <p>Duis
                                    aute irure dolor in
                                    reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat
                                    nulla pariatur.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div
                           class="faq--item panel">
                           <div
                              class="panel-heading">
                              <h3 class="h4">
                                 <a href="#faqItems01_2"
                                    class="collapsed"
                                    data-toggle="collapse"
                                    data-parent="#faqItems01"> <i
                                    class="fa fa-database"></i>
                                 <span>What is SSL security?</span>
                                 </a> 
                              </h3>
                           </div>
                           <div
                              id="faqItems01_2" class="panel-collapse
                              collapse">
                              <div class="panel-body">
                                 <p>Consectetur
                                    adipisicing elit, sed do eiusmod
                                    tempor incunt ut labore et
                                    dolore magna aliqua. Ut enim ad
                                    minim veniam, quis nostrud
                                    exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo
                                    consequat.
                                 </p>
                                 <p>Duis aute irure
                                    dolor in reprehenderit in
                                    voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div
                           class="faq--item panel">
                           <div
                              class="panel-heading">
                              <h3 class="h4">
                                 <a href="#faqItems01_3"
                                    class="collapsed"
                                    data-toggle="collapse"
                                    data-parent="#faqItems01"> <i
                                    class="fa fa-server"></i>
                                 <span>What is shared web
                                 hosting?</span> </a> 
                              </h3>
                           </div>
                           <div id="faqItems01_3"
                              class="panel-collapse collapse">
                              <div
                                 class="panel-body">
                                 <p>Consectetur
                                    adipisicing elit, sed do eiusmod
                                    tempor incunt ut labore et
                                    dolore magna aliqua. Ut enim ad
                                    minim veniam, quis nostrud
                                    exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo
                                    consequat.
                                 </p>
                                 <p>Duis aute irure
                                    dolor in reprehenderit in
                                    voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div
                           class="faq--item panel">
                           <div
                              class="panel-heading">
                              <h3 class="h4">
                                 <a href="#faqItems01_4"
                                    class="collapsed"
                                    data-toggle="collapse"
                                    data-parent="#faqItems01"> <i
                                    class="fa fa-lock"></i>
                                 <span>Is my website protected
                                 from hackers?</span> </a>
                              </h3>
                           </div>
                           <div id="faqItems01_4"
                              class="panel-collapse collapse">
                              <div
                                 class="panel-body">
                                 <p>Consectetur
                                    adipisicing elit, sed do eiusmod
                                    tempor incunt ut labore et
                                    dolore magna aliqua. Ut enim ad
                                    minim veniam, quis nostrud
                                    exercitation ullamco laboris
                                    nisi ut aliquip ex ea commodo
                                    consequat.
                                 </p>
                                 <p>Duis aute irure
                                    dolor in reprehenderit in
                                    voluptate velit esse cillum
                                    dolore eu fugiat nulla pariatur.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="call-to-action pt--50 pb--50 bg--c-main">
            <div
               class="container">
               <div class="cta--content text-center">
                  <div class="title">
                     <h2 class="h3">Choose the best
                        Managed Cloud Hosting experience for your
                        business!
                     </h2>
                  </div>
                  <div class="action"> <a
                     href="#" class="btn btn-lg btn-primary">Get
                     Started Now<i class="ml--8 fa fa-check-circle"></i></a>
                  </div>
                  <div class="note text-uppercase">
                     <p><small>Vorem
                        ipsum dolor sit amet</small>
                     </p>
                  </div>
               </div>
            </div>
         </section>
         <section class="blog--section pt--80 pb--50 bg--c-lighterblue">
            <div
               class="container">
               <div class="section--title pb--50
                  text-center">
                  <h2 class="h1 text-uppercase">Latest Blog
                     Posts
                  </h2>
                  <div class="row">
                     <div class="col-md-6
                        col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet,
                           consectetur adipisicing elit, sed do eiusmod
                           tempor incididunt ut labore et dolore magna
                           aliqua.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row
                  AdjustRow">
                  <div class="col-md-4 col-sm-12 pb--30">
                     <div
                        class="post--item">
                        <div class="post--img"> <img
                           src="../../../assets/img/blog-img/post-item-01.jpg"
                           alt=""> <a href="#" class="date"><i
                           class="mr--8 fa fa-calendar-o"></i>June
                           01, 2017</a> 
                        </div>
                        <div
                           class="post--inner">
                           <ul class="nav meta">
                              <li><a href="#"><i class="fa
                                 fa-heart-o"></i>23</a></li>
                              <li><a
                                 href="#"><i class="fa
                                 fa-comments-o"></i>13</a></li>
                           </ul>
                           <div class="title">
                              <h2 class="h4"><a
                                 href="blog-details.html"
                                 class="btn-link">Lorem ipsum
                                 dolor</a>
                              </h2>
                           </div>
                           <div
                              class="content">
                              <p>Lorem ipsum dolor
                                 sit amet, consectetur adipisicing
                                 elit sed do eiusmod tempor
                                 incididunt ut labore et dolore magna
                                 aliqua.
                              </p>
                           </div>
                           <div class="action
                              text-right"> <a href="blog-details.html"
                              class="btn btn-default">Read More<i
                              class="ml--5 fa
                              fa-long-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4
                     col-sm-12 pb--30">
                     <div class="post--item">
                        <div
                           class="post--img"> <img
                           src="../../../assets/img/blog-img/post-item-02.jpg"
                           alt=""> <a href="#" class="date"><i
                           class="mr--8 fa fa-calendar-o"></i>June
                           01, 2017</a> 
                        </div>
                        <div
                           class="post--inner">
                           <ul class="nav meta">
                              <li><a href="#"><i class="fa
                                 fa-heart-o"></i>23</a></li>
                              <li><a
                                 href="#"><i class="fa
                                 fa-comments-o"></i>13</a></li>
                           </ul>
                           <div class="title">
                              <h2 class="h4"><a
                                 href="blog-details.html"
                                 class="btn-link">Lorem ipsum
                                 dolor sit amet</a>
                              </h2>
                           </div>
                           <div
                              class="content">
                              <p>Lorem ipsum dolor
                                 sit amet, consectetur adipisicing
                                 elit sed do eiusmod tempor
                                 incididunt ut labore et dolore magna
                                 aliqua.
                              </p>
                           </div>
                           <div class="action
                              text-right"> <a href="blog-details.html"
                              class="btn btn-default">Read More<i
                              class="ml--5 fa
                              fa-long-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4
                     col-sm-12 pb--30">
                     <div class="post--item">
                        <div
                           class="post--img"> <img
                           src="../../../assets/img/blog-img/post-item-03.jpg"
                           alt=""> <a href="#" class="date"><i
                           class="mr--8 fa fa-calendar-o"></i>June
                           01, 2017</a> 
                        </div>
                        <div
                           class="post--inner">
                           <ul class="nav meta">
                              <li><a href="#"><i class="fa
                                 fa-heart-o"></i>23</a></li>
                              <li><a
                                 href="#"><i class="fa
                                 fa-comments-o"></i>13</a></li>
                           </ul>
                           <div class="title">
                              <h2 class="h4"><a
                                 href="blog-details.html"
                                 class="btn-link">Lorem ipsum
                                 dolor</a>
                              </h2>
                           </div>
                           <div
                              class="content">
                              <p>Lorem ipsum dolor
                                 sit amet, consectetur adipisicing
                                 elit sed do eiusmod tempor
                                 incididunt ut labore et dolore magna
                                 aliqua.
                              </p>
                           </div>
                           <div class="action
                              text-right"> <a href="blog-details.html"
                              class="btn btn-default">Read More<i
                              class="ml--5 fa
                              fa-long-arrow-right"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="clients--section pt--70 pb--50">
            <div
               class="container">
               <div class="section--title pb--50
                  text-center">
                  <h2 class="h1 text-uppercase">We Work With</h2>
                  <div class="row">
                     <div class="col-md-6 col-md-offset-3">
                        <p>Lorem ipsum dolor sit amet, consectetur
                           adipisicing elit, sed do eiusmod tempor
                           incididunt ut labore et dolore magna aliqua.
                        </p>
                     </div>
                  </div>
               </div>
               <div
                  class="row" data-scroll-reveal="group">
                  <div
                     class="col-md-3 col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-01.png"
                        alt=""> </div>
                  </div>
                  <div class="col-md-3
                     col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-02.png"
                        alt=""> </div>
                  </div>
                  <div class="col-md-3
                     col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-03.png"
                        alt=""> </div>
                  </div>
                  <div class="col-md-3
                     col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-04.png"
                        alt=""> </div>
                  </div>
                  <div class="col-md-3
                     col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-05.png"
                        alt=""> </div>
                  </div>
                  <div class="col-md-3
                     col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-06.png"
                        alt=""> </div>
                  </div>
                  <div class="col-md-3
                     col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-07.png"
                        alt=""> </div>
                  </div>
                  <div class="col-md-3
                     col-xs-6 col-xss-12 pb--30">
                     <div
                        class="client--brand"> <img
                        src="../../../assets/img/client-img/client-brand-08.png"
                        alt=""> </div>
                  </div>
               </div>
            </div>
         </section>
         <footer class="footer--section"
            data-bg-img="../../../assets/img/footer-img/footer-widget-bg.jpg">
            <div
               class="footer--widgets pt--90 pb--30">
               <div
                  class="container">
                  <div class="row AdjustRow">
                     <div
                        class="col-md-3 col-xs-6 col-xss-12 pb--60">
                        <div class="widget">
                           <div class="about--widget">
                              <div class="logo"> <img
                                 src="../../../assets/img/logo.png" alt="">
                              </div>
                              <address>
                                 <p>52 Shewrapara,
                                    Ibrahimpur, Mirpur 2653, Dhaka.
                                 </p>
                              </address>
                              <dl>
                                 <dt><i class="fa fa-envelope-o"></i>Email</dt>
                                 <dd>
                                    <p> <span>Sales:</span> <a
                                       href="http://themelooks.us/cdn-cgi/l/email-protection#790a18151c0a391c01181409151c571a1614"
                                       class="btn-link"><span
                                       class="__cf_email__"
                                       data-cfemail="96e5f7faf3e5d6f3eef7fbe6faf3b8f5f9fb">[email&#160;protected]</span></a>
                                    </p>
                                    <p> <span>Support:</span> <a
                                       href="http://themelooks.us/cdn-cgi/l/email-protection#087b7d7878677a7c486d70696578646d266b6765"
                                       class="btn-link"><span
                                       class="__cf_email__"
                                       data-cfemail="493a3c3939263b3d092c31282439252c672a2624">[email&#160;protected]</span></a>
                                    </p>
                                 </dd>
                              </dl>
                              <dl>
                                 <dt><i
                                    class="fa fa-phone"></i>Phone</dt>
                                 <dd>
                                    <p> <span>Sales:</span> <a
                                       href="tel:00123412345"
                                       class="btn-link">001 234
                                       12345</a> 
                                    </p>
                                    <p> <span>Support:</span>
                                       <a href="tel:00123412345"
                                          class="btn-link">001 234
                                       12345</a> 
                                    </p>
                                 </dd>
                              </dl>
                           </div>
                        </div>
                     </div>
                     <div
                        class="col-md-3 col-xs-6 col-xss-12 pb--60">
                        <div class="widget">
                           <h2 class="h4 widget--title
                              text-uppercase">Resources</h2>
                           <div
                              class="links--widget">
                              <ul class="nav">
                                 <li><a href="#">Hosting</a></li>
                                 <li><a
                                    href="#">Dedicated Hosting</a></li>
                                 <li><a
                                    href="#">VPS Hosting</a></li>
                                 <li><a
                                    href="#">Professional
                                    Services</a>
                                 </li>
                                 <li><a
                                    href="#">Reseller Hosting</a></li>
                                 <li><a
                                    href="#">Cloud Hosting</a></li>
                                 <li><a
                                    href="#">System Status</a></li>
                                 <li><a
                                    href="#">Referral System</a></li>
                                 <li><a
                                    href="#">Forum</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3
                        col-xs-6 col-xss-12 pb--60">
                        <div
                           class="widget">
                           <h2 class="h4 widget--title
                              text-uppercase">Quick Links</h2>
                           <div
                              class="links--widget">
                              <ul class="nav">
                                 <li><a href="#">About Us</a></li>
                                 <li><a
                                    href="#">Our Team</a></li>
                                 <li><a
                                    href="#">Cloud Hosting</a></li>
                                 <li><a
                                    href="#">Logos &amp; Banners</a></li>
                                 <li><a
                                    href="#">Cloud Hosting</a></li>
                                 <li><a
                                    href="#">Reseller Hosting</a></li>
                                 <li><a
                                    href="#">Shop</a></li>
                                 <li><a
                                    href="#">Contact</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-3
                        col-xs-6 col-xss-12 pb--60">
                        <div
                           class="widget">
                           <h2 class="h4 widget--title
                              text-uppercase">NewsLetter</h2>
                           <div
                              class="newsletter--widget">
                              <div
                                 class="desc">
                                 <p>Dolor sit amet
                                    consectetur adipisicing elit sed
                                    do tempor ut labore
                                 </p>
                              </div>
                              <form
                                 action="https://themelooks.us13.list-manage.com/subscribe/post?u=79f0b132ec25ee223bb41835f&amp;id=f4e0e93d1d"
                                 method="post"
                                 name="mc-embedded-subscribe-form"
                                 target="_blank"
                                 data-form="validate"> <input
                                 type="text" name="EMAIL"
                                 placeholder="Email"
                                 class="form-control" required>
                                 <button type="submit" class="btn
                                    btn-primary">Subscribe</button>
                              </form>
                           </div>
                        </div>
                        <div class="widget">
                           <h2 class="h4 widget--title text-uppercase">Payment
                              Methods
                           </h2>
                           <div class="img---widget">
                              <img
                                 src="../../../assets/img/footer-img/payment-methods.png"
                                 alt=""> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div
               class="footer--copyright pt--30 pb--30">
               <div
                  class="container">
                  <ul class="social nav">
                     <li><a
                        href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-pinterest"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-google-plus"></i></a></li>
                     <li><a
                        href="#"><i class="fa fa-rss"></i></a></li>
                  </ul>
                  <p class="copyright--text">Copyright 2018 &copy; <a
                     href="#">CloudSky</a>. All Rights Reserved.</p>
               </div>
            </div>
         </footer>
      </div>
      <div id="loginForm" class="login--form modal fade">
         <div
            class="modal-dialog">
            <div class="modal-content">
               <button
                  type="button" class="close" data-dismiss="modal"><span
                  aria-hidden="true">&times;</span></button> 
               <div
                  class="modal-body">
                  <div class="title">
                     <h2 class="h4">Login</h2>
                  </div>
                  <form
                     action="http://billing.ywhmcs.com/dologin.php"
                     data-form="validate">
                     <div class="form-group">
                        <input type="email" name="username"
                           placeholder="Your Email"
                           class="form-control" required> 
                     </div>
                     <div
                        class="form-group"> <input type="password"
                        name="password" placeholder="Password"
                        class="form-control" required> </div>
                     <input
                        type="hidden" name="systpl" value="CloudSky"> 
                     <p
                        class="help-block"><a
                        href="http://billing.ywhmcs.com/pwreset.php?systpl=CloudSky">Forgot
                        Your Password?</a>
                     </p>
                     <button type="submit"
                        class="btn btn-block btn-default
                        text-uppercase">Login</button> 
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div
         id="cookieNotify" class="hidden">
         <div class="alert
            bg--c-darkgray--b">
            <button class="close" data-dismiss="alert">&times;</button>
            <div class="container">
               <button data-dismiss="alert" class="btn
                  btn-sm btn-primary float--right">GOT IT!</button> 
               <p>This
                  is a sample cookie notification bar.
               </p>
            </div>
         </div>
      </div>
      <div
         id="backToTop"> <a href="#" class="btn btn-lg btn-default active"><i
         class="fa fa-chevron-up"></i></a> </div>
      <script
         data-cfasync="false"
         src="http://themelooks.us/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script
         src="../../../assets/js/jquery-3.2.1.min.js"></script> <script
         src="../../../assets/js/jquery-ui.min.js"></script> <script
         src="../../../assets/js/jquery.ui.touch-punch.min.js"></script> <script
         src="../../../assets/js/bootstrap.min.js"></script> <script
         src="../../../assets/js/jquery.sticky.min.js"></script> <script
         src="../../../assets/js/owl.carousel.min.js"></script> <script
         src="../../../assets/js/jquery.waypoints.min.js"></script> <script
         src="../../../assets/js/jquery.counterup.min.js"></script> <script
         src="../../../assets/js/jquery.countdown.min.js"></script> <script
         src="../../../assets/js/jquery.validate.min.js"></script> <script
         src="../../../assets/js/isotope.min.js"></script> <script
         src="../../../assets/js/jquery.zoom.min.js"></script> <script
         src="../../../assets/js/jquery.barrating.min.js"></script> <script
         src="../../../assets/js/scrollreveal.min.js"></script> <script
         src="../../../assets/js/retina.min.js"></script> <script
         src="../../../assets/js/color-switcher.min.js"></script> <script
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>
      <script src="../../../assets/js/main.js"></script>
   </body>
   <!-- Mirrored from themelooks.us/demo/cloudsky/html/preview/rtl/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Nov 2018 18:31:29 GMT -->
</html>