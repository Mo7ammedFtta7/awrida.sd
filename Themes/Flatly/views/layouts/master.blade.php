<!DOCTYPE html>
        @if(LaravelLocalization::getCurrentLocale() =='ar')  
        <html  dir="rtl">
    
            @else
            <html lang="en">
                    @endif
<head>
   <meta charset="utf-8">
   <title>@section('title')@setting('core::site-name')@show</title>
   <!-- Stylesheets -->
   <link href="../../../assets/css/bootstrap.css" rel="stylesheet">
   <link href="../../../assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
   <link href="../../../assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
   <link href="../../../assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
   <link href="../../../assets/css/style.css" rel="stylesheet">
   <link href="../../../assets/css/responsive.css" rel="stylesheet">
   
   <!--Color Switcher Mockup-->
   <link href="../../../assets/css/color-switcher-design.css" rel="stylesheet">
   
   <!--Color Themes-->
   <link id="theme-color-file" href="../../../assets/css/color-themes/default-theme.css" rel="stylesheet">
   
   <link rel="shortcut icon" href="../../../assets/images/favicon.png" type="image/x-icon">
   <link rel="icon" href="../../../assets/images/favicon.png" type="image/x-icon">
   <!-- Responsive -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!--[if lt IE 9]><script src="../../../assets/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
   <!--[if lt IE 9]><script src="../../../assets/js/respond.js"></script><![endif]-->
   </head>
   
   <body>

      <div class="page-wrapper">
 	
         <!-- Preloader -->
         <div class="preloader"></div>
         
         <!-- Main Header / Header Style Two-->
         <header class="main-header header-style-two">
         
            <!-- Header Top Two-->
            <div class="header-top-two" style="background-image:url(../img/background/pattern-3.png)">
                <div class="auto-container">
                    <div class="top-outer clearfix">
                         
                         <!--Top Left-->
                         <div class="top-left">
                            <ul class="links clearfix">
                                <li><a href="#"><span class="icon fa fa-hand-o-right"></span>{{ __('full.Hire Us') }}</a></li>
                                 <li><a href="#"><span class="icon flaticon-pin"></span> {{ __('full.address') }}</a></li>
                                 <li><a href="#"><span class="icon flaticon-web"></span>info@awrida.sd</a></li>
                             </ul>
                         </div>
                         
                         <!--Top Right-->
                         <div class="top-right clearfix">
                            <ul class="social-icon-three">
                                 <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                 <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                 <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                 <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                             </ul>
                            <ul class="link">
                                <li><a href="#"><span class="fa fa-phone"></span> +(249)912854218</a></li>
                             </ul> 
                             <ul class="nav links float--right">
                                <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="text-c--main mr--8 fa fa-globe"></i><span class="caret"></span> </a> 
                                   <ul class="dropdown-menu">
                                      
                                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                      <li class="{{ App::getLocale() == $localeCode ? 'active' : '' }}">
                                          <a rel="alternate" lang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                              {!! $properties['native'] !!}
                                          </a>
                                      </li>
                                  @endforeach
           
                                   </ul>
                                </li>
                             </ul>                       
                         </div>
                         
                     </div>
                     
                 </div>
             </div>
             <!-- Header Top End -->
             
             <!-- Main Box -->
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                         <!--Logo Box-->
                         <div class="logo-box" @if(LaravelLocalization::getCurrentLocale() =='ar') style="float:right" @endif >
                             <div class="logo">
                                    @if(LaravelLocalization::getCurrentLocale() =='ar')  <a href="/home"><img src="../../../assets/images/logo (1).png" alt=""></a> 
                                    @else
                         <a href="/home"><img src="../../../assets/images/logo.png" alt=""></a> 

                                    @endif
                                </div>
                         </div>
                         
                         <!--Nav Outer-->
                        
                         @include('partials.navigation')


                         <!--Nav Outer End-->
                         
                    </div>    
                 </div>
             </div>
            
             <!--Sticky Header-->
             <div class="sticky-header">
                <div class="auto-container">
                    
                     <div class="outer-container clearfix">
                         <!--Logo Box-->
                         <div class="logo-box pull-left">
                             <div class="logo"><a href="index-2.html"><img src="../.../../assets/images/logo-small.png" alt=""></a></div>
                         </div>
                         
                         <!--Nav Outer-->
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
                                        @include('partials.navigation')

                                </div>
                             </nav>
                             <!-- Main Menu End-->
                             
                         </div>
                         <!--Nav Outer End-->
                         
                    </div>
                     
                 </div>
             </div>
             <!--End Sticky Header-->
             
         </header>
         <!--End Main Header -->
       
         @yield('content')
  {{--          
         <!--Services Section Two-->
         <section class="services-section-two">
            <div class="auto-container">
                <div class="inner-container">
                    
                     <div class="row clearfix">
                        
                         <div class="column blocks-column col-md-9 col-sm-12 col-xs-12">
                            <div class="columns-inner clearfix">
                                
                                 <!--Services Block Three-->
                                 <div class="services-block-three col-md-4 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-house-plans"></span>
                                         </div>
                                         <h3><a href="commercial-design.html">Interior</a></h3>
                                         <div class="text">Desires to obtain pain of itself, <br> because occasionally.</div>
                                     </div>
                                 </div>
                                 
                                 <!--Services Block Three-->
                                 <div class="services-block-three col-md-4 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-school"></span>
                                         </div>
                                         <h3><a href="commercial-design.html">Architecture</a></h3>
                                         <div class="text">Explain you how this mistaken <br> idea of pleasure.</div>
                                     </div>
                                 </div>
                                 
                                 <!--Services Block Three-->
                                 <div class="services-block-three col-md-4 col-sm-6 col-xs-12">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-sketch"></span>
                                         </div>
                                         <h3><a href="commercial-design.html">Planning</a></h3>
                                         <div class="text">It is long established fact that <br> reader distracted</div>
                                     </div>
                                 </div>
                                 
                             </div>
                         </div>
                         <div class="column col-md-3 col-sm-12 col-xs-12">
                            
                             <!--Services Block Four-->
                             <div class="services-block-four">
                                 <div class="inner-box">
                                     <div class="icon-box">
                                         <span class="icon flaticon-new-email-message-with-file-symbol"></span>
                                     </div>
                                     <h3>Make Pre Plan for Your Projects.</h3>
                                     <a href="contact.html" class="theme-btn btn-style-one">Get a Quote</a>
                                 </div>
                             </div>
                             
                         </div>
                         
                     </div>
                     
                 </div>
             </div>
         </section>
         <!--End Services Section Two-->
         
         <!--Certificate Section-->
         <section class="certificate-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="certificate">
                        <div class="image"><img src="../.../../assets/images/clients/certificate-1.png" alt="" /></div>
                     </div>
                     <div class="certificate">
                        <div class="image"><img src="../.../../assets/images/clients/certificate-2.png" alt="" /></div>
                     </div>
                     <div class="certificate">
                        <div class="image"><img src="../.../../assets/images/clients/certificate-3.png" alt="" /></div>
                     </div>
                 </div>
             </div>
         </section>
         <!--End Clients Section-->
         
         <!--About Section-->
         <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <h2>Providing best <span>Interior & Architecture</span> <br> services since 1975.</h2>
                             <div class="text">
                                <p>Bruges brings 42 years of interior designs experience right to your home or office. Our design professionals are equipped to help you determine the products and design that work best for our customers within the colors and lighting of your surroundings.</p>
                                 <p>Experience right to your home or office. Our design professionals are equipped to help you determine the products and work best for our customers  more than expectating from us economically.</p>
                             </div>
                             <div class="author">Velina Millan <span>/ G-Manager</span></div>
                         </div>
                     </div>
                     <div class="column col-md-6 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="../.../../assets/images/resource/about.jpg" alt="" />
                             <a href="about.html" class="more-about">More About Us</a>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
         <!--End About Section-->
         
         <!--Gallery Section-->
         <section class="gallery-section">
            
             <!--MixitUp Galery-->
             <div class="mixitup-gallery">
                 <div class="auto-container">
                    <!--Filter-->
                     <div class="filters text-center clearfix">
                         
                         <ul class="filter-tabs filter-btns clearfix">
                             <li class="active filter" data-role="button" data-filter="all">View All</li>
                             <li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
                             <li class="filter" data-role="button" data-filter=".residential">Residential</li>
                             <li class="filter" data-role="button" data-filter=".corporate">Corporate</li>
                             <li class="filter" data-role="button" data-filter=".restaurant">Restaurant</li>
                             <li class="filter" data-role="button" data-filter=".industry">Industrial</li>
                         </ul>
                         
                     </div>
                 </div>
                 
                 <div class="filter-list clearfix">
              
                    <!--Project Block-->
                     <div class="project-block mix all col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../.../../assets/images/gallery/project-5.jpg" alt="" />
                             </div>
                             <div class="overlay-box">
                                <div class="category"><span class="icon flaticon-hotel-1"></span> Residential</div>
                                <div class="content">
                                    <h2>Modern Living Room</h2>
                                     <a href="project-single.html" class="link-box">Must explain to you how all this idea... <span class="icon"></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                     <!--Project Block-->
                     <div class="project-block mix all corporate col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../.../../assets/images/gallery/project-6.jpg" alt="" />
                             </div>
                             <div class="overlay-box">
                                <div class="category"><span class="icon flaticon-online-store"></span> Commercial</div>
                                <div class="content">
                                    <h2>Modern Commercial Building</h2>
                                     <a href="project-single.html" class="link-box">Must explain to you how all this idea... <span class="icon"></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                     <!--Project Block-->
                     <div class="project-block mix all restaurant commercial col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../.../../assets/images/gallery/project-7.jpg" alt="" />
                             </div>
                             <div class="overlay-box">
                                <div class="category"><span class="icon flaticon-hotel-1"></span> Residential</div>
                                <div class="content">
                                    <h2>Wooden Small House</h2>
                                     <a href="project-single.html" class="link-box">Must explain to you how all this idea... <span class="icon"></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                     <!--Project Block-->
                     <div class="project-block mix all industry residential col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../.../../assets/images/gallery/project-8.jpg" alt="" />
                             </div>
                             <div class="overlay-box">
                                <div class="category"><span class="icon flaticon-residential-block"></span> Restaurant</div>
                                <div class="content">
                                    <h2>Koubba Luxury Bar</h2>
                                     <a href="project-single.html" class="link-box">Must explain to you how all this idea... <span class="icon"></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                     <!--Project Block-->
                     <div class="project-block mix all commercial industry col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../.../../assets/images/gallery/project-9.jpg" alt="" />
                             </div>
                             <div class="overlay-box">
                                <div class="category"><span class="icon flaticon-residential-block"></span> Commercial</div>
                                <div class="content">
                                    <h2>Lake Museum Biwa</h2>
                                     <a href="project-single.html" class="link-box">Must explain to you how all this idea... <span class="icon"></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     
                     <!--Project Block-->
                     <div class="project-block mix all residential col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="../.../../assets/images/gallery/project-10.jpg" alt="" />
                             </div>
                             <div class="overlay-box">
                                <div class="category"><span class="icon flaticon-hotel-1"></span> Residential</div>
                                <div class="content">
                                    <h2>Wooden Small House</h2>
                                     <a href="project-single.html" class="link-box">Must explain to you how all this idea... <span class="icon"></span></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 
                 </div>
                 
                 <div class="btn-box text-center">
                    <a href="project-modern.html" class="theme-btn btn-style-two">View all</a>
                 </div>
                 
             </div>
         </section>
         <!--End Gallery Section-->
         
         <!--Products Section-->
         <section class="products-section">
            <div class="title-box" style="background-image:url(images/background/2.jpg)">
                <div class="auto-container">
                    <h2>We provide only high quality <span class="theme_color">products & Concepts</span>, More <br> than our customer expectation</h2>
                     <div class="text">Must explain to you how all this mistaken idea of denouncing pleasure and praising Design.</div>
                     <a href="shop.html" class="theme-btn btn-style-one">More Products</a>
                 </div>
             </div>
            <div class="lower-section">
                <div class="auto-container">
                     <div class="four-item-carousel owl-carousel owl-theme">
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/1.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">The Innovators</a></h3>
                                         <div class="price">$34.99</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star-half-empty"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/2.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">Win Your Friends</a></h3>
                                         <div class="price">$29.00</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/3.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">Business Adventures</a></h3>
                                         <div class="price">$24.99</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star-half-empty"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/4.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">Win Your Friends</a></h3>
                                         <div class="price">$29.00</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/1.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">The Innovators</a></h3>
                                         <div class="price">$34.99</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star-half-empty"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/2.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">Win Your Friends</a></h3>
                                         <div class="price">$29.00</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/3.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">Business Adventures</a></h3>
                                         <div class="price">$24.99</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star-half-empty"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                         <!--Shop Item-->
                         <div class="shop-item">
                             <div class="inner-box">
                                 <div class="image-box">
                                     <div class="image">
                                         <img src="../.../../assets/images/resource/products/4.jpg" alt="" />
                                         <div class="overlay-box">
                                             <ul class="cart-option">
                                                 <li><a href="shop-single.html"><span class="fa fa-eye"></span></a></li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="lower-content">
                                     <div class="price-box">
                                         <h3><a href="shop-single.html">Win Your Friends</a></h3>
                                         <div class="price">$29.00</div>
                                     </div>
                                     <!--Rating-->
                                     <div class="rating">
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                         <span class="fa fa-star"></span>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         
                     </div>
                 </div>
             </div>
         </section>
         <!--End Products Section-->
         
         <!--Default Section Two-->
         <section class="default-section-two" style="background-image:url(images/background/pattern-2.png)">
            <div class="auto-container">
                <div class="row clearfix">
                    
                     <!--Video Column-->
                     <div class="video-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            <!--Video Box-->
                             <div class="video-box">
                                 <figure class="image">
                                     <img src="../.../../assets/images/resource/video-img.jpg" alt="">
                                 </figure>
                                 <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-button-4"></span></a>
                                 <div class="text">Mrs.Veena William, <span>California</span></div>
                             </div>
                         </div>
                     </div>
                     
                     <!--Testimonial Column-->
                     <div class="testimonial-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                            
                             <div class="testimonial-outer">
                                     
                                 <!--Client Testimonial Carousel-->
                                 <div class="client-testimonial-carousel owl-carousel owl-theme">
                                 
                                     <!--Testimonial Block One-->
                                     <div class="testimonial-block-one">
                                         <div class="inner-box">
                                            <div class="quote-icon">
                                                <span class="icon flaticon-right-quote-sign"></span>
                                             </div>
                                             <div class="text">Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered most beautiful house ever!. </div>
                                             <div class="author-name">Teena Venanda <span>- Newyork</span></div>
                                             <!--Rating-->
                                             <div class="rating">
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                     
                                     <!--Testimonial Block One-->
                                     <div class="testimonial-block-one">
                                         <div class="inner-box">
                                            <div class="quote-icon">
                                                <span class="icon flaticon-right-quote-sign"></span>
                                             </div>
                                             <div class="text">Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered most beautiful house ever!. </div>
                                             <div class="author-name">Teena Venanda <span>- Newyork</span></div>
                                             <!--Rating-->
                                             <div class="rating">
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                     
                                     <!--Testimonial Block One-->
                                     <div class="testimonial-block-one">
                                         <div class="inner-box">
                                            <div class="quote-icon">
                                                <span class="icon flaticon-right-quote-sign"></span>
                                             </div>
                                             <div class="text">Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered most beautiful house ever!. </div>
                                             <div class="author-name">Teena Venanda <span>- Newyork</span></div>
                                             <!--Rating-->
                                             <div class="rating">
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                     
                                     <!--Testimonial Block One-->
                                     <div class="testimonial-block-one">
                                         <div class="inner-box">
                                            <div class="quote-icon">
                                                <span class="icon flaticon-right-quote-sign"></span>
                                             </div>
                                             <div class="text">Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered most beautiful house ever!. </div>
                                             <div class="author-name">Teena Venanda <span>- Newyork</span></div>
                                             <!--Rating-->
                                             <div class="rating">
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                     
                                     <!--Testimonial Block One-->
                                     <div class="testimonial-block-one">
                                         <div class="inner-box">
                                            <div class="quote-icon">
                                                <span class="icon flaticon-right-quote-sign"></span>
                                             </div>
                                             <div class="text">Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered most beautiful house ever!. </div>
                                             <div class="author-name">Teena Venanda <span>- Newyork</span></div>
                                             <!--Rating-->
                                             <div class="rating">
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                     
                                     <!--Testimonial Block One-->
                                     <div class="testimonial-block-one">
                                         <div class="inner-box">
                                            <div class="quote-icon">
                                                <span class="icon flaticon-right-quote-sign"></span>
                                             </div>
                                             <div class="text">Today we can tell you, thanks to your passion, hard work creativity, and expertise, you delivered most beautiful house ever!. </div>
                                             <div class="author-name">Teena Venanda <span>- Newyork</span></div>
                                             <!--Rating-->
                                             <div class="rating">
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                                 <span class="fa fa-star"></span>
                                             </div>
                                         </div>
                                     </div>
                                     
                                 </div>
                                 
                                 <!--Product Thumbs Carousel-->
                                 <div class="client-thumb-outer">
                                     <div class="client-thumbs-carousel owl-carousel owl-theme">
                                         <div class="thumb-item">
                                             <figure class="thumb-box"><img src="../.../../assets/images/resource/author-1.jpg" alt=""></figure>
                                         </div>
                                         <div class="thumb-item">
                                             <figure class="thumb-box"><img src="../.../../assets/images/resource/author-2.jpg" alt=""></figure>
                                         </div>
                                         <div class="thumb-item">
                                             <figure class="thumb-box"><img src="../.../../assets/images/resource/author-3.jpg" alt=""></figure>
                                         </div>
                                         <div class="thumb-item">
                                             <figure class="thumb-box"><img src="../.../../assets/images/resource/author-1.jpg" alt=""></figure>
                                         </div>
                                         <div class="thumb-item">
                                             <figure class="thumb-box"><img src="../.../../assets/images/resource/author-2.jpg" alt=""></figure>
                                         </div>
                                         <div class="thumb-item">
                                             <figure class="thumb-box"><img src="../.../../assets/images/resource/author-3.jpg" alt=""></figure>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="more-option">
                                     <a class="option" href="testimonial.html"><span class="icon flaticon-more"></span></a>
                                     <div class="more-text">Read More</div>
                                 </div>
                                 
                             </div>
                             
                         </div>
                     </div>
                     
                 </div>
             </div>
         </section>
         <!--End Video Section-->
         
         <section class="counter-section">
            <div class="auto-container">
                
                 <div class="fact-counter style-two">
                 
                     <div class="row clearfix">
                     
                        <!--Column-->
                         <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                             <div class="inner">
                                <span class="icon-box">
                                    <span class="icon flaticon-design"></span>
                                 </span>
                                 <div class="count-outer count-box">
                                     <span class="count-text" data-speed="2500" data-stop="2.5">0</span>k
                                 </div>
                                 <h4 class="counter-title">Projects Worked</h4>
                             </div>
                         </div>
                     
                         <!--Column-->
                         <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                             <div class="inner">
                                <span class="icon-box">
                                    <span class="icon flaticon-idea"></span>
                                 </span>
                                 <div class="count-outer count-box">
                                     <span class="count-text" data-speed="2500" data-stop="376">0</span>
                                 </div>
                                 <h4 class="counter-title">Creative Concepts</h4>
                             </div>
                         </div>
                 
                         <!--Column-->
                         <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                             <div class="inner">
                                <span class="icon-box">
                                    <span class="icon flaticon-medal"></span>
                                 </span>
                                 <div class="count-outer count-box">
                                     <span class="count-text" data-speed="2000" data-stop="23">0</span>
                                 </div>
                                 <h4 class="counter-title">Awards Holded</h4>
                             </div>
                         </div>
                 
                         <!--Column-->
                         <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                             <div class="inner">
                                <span class="icon-box">
                                    <span class="icon flaticon-people-2"></span>
                                 </span>
                                 <div class="count-outer count-box">
                                     <span class="count-text" data-speed="3000" data-stop="825">0</span>
                                 </div>
                                 <h4 class="counter-title">Team Members</h4>
                             </div>
                         </div>
                         
                     </div>
                     
                 </div>
                     
                 
             </div>
         </section>
         
         <!--Map Info Section-->
         <section class="map-info-section">
            
             <!--Map Canvas-->
             <div class="map-canvas"
                 data-zoom="12"
                 data-lat="-37.817085"
                 data-lng="144.955631"
                 data-type="roadmap"
                 data-hue="#ffc400"
                 data-title="Envato"
                 data-icon-path="images/icons/map-marker.png"
                 data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
             </div>
             
            <div class="auto-container">
              <div class="clearfix">	
                    <!--Form Box-->
                    <div class="form-box">
                         
                         <!--Default Form-->
                         <div class="default-form">
                             <form method="post" action="http://steelthemes.com/demo/html/Bruges/blog.html">
                                 <div class="clearfix">
                                     <div class="column col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                             <input type="text" name="username" placeholder="Name *" required>
                                         </div>
                                         <div class="form-group">
                                             <input type="email" name="email" placeholder="Email Address *" required>
                                         </div>
                                         <div class="form-group">
                                             <input type="text" name="phone" placeholder="Phone " required>
                                         </div>
                                         <div class="form-group">
                                             <input type="text" name="subject" placeholder="Subject * " required>
                                         </div>
                                     </div>
                                     
                                     <div class="column col-md-6 col-sm-6 col-xs-12">
                                         <div class="form-group">
                                             <textarea name="message" placeholder="Message..."></textarea>
                                         </div>
                                     </div>
                                     <div class="column btn-column col-md-12 col-sm-12 col-xs-12">
                                         <div class="form-group btn-box">
                                             <button class="theme-btn btn-style-two" type="submit" name="submit-form">Send Message</button>
                                         </div>
                                     </div>
                                 </div>
                                 
                             </form>
                         </div>
                         
                    </div>
                    
                 </div>
             </div>
             
         </section> --}}
         <!--End Map Info Section-->
         
         <!--Footer Style Two-->
         <footer class="main-footer">
                <div class="auto-container">
                
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row clearfix">
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index-2.html"><img src="../img/footer-logo.png" alt=""></a>
                                    </div>
                                    <h3>{{ __('full.Main Branch') }}</h3>
                                    <ul class="list clearfix">
                                        <li>{{ __('full.address') }}</li>
                                        <li> 00249912854218 <br> ingo@awrida.com</li>
                                    </ul>
                                    
                                    <ul class="social-icon-two">
                                        <li class="share">We Are Social</li>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                        <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget news-widget">
                                    <div class="footer-title">
                                        <h2>Latest News</h2>
                                    </div>
                                    <div class="widget-content">
                                    
                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="post-date">March 31, 2018</div>
                                                <h3><a href="blog-single.html">Special Message Regarding Mystery Shopper Programs.</a></h3>
                                            </div>
                                        </div>
                                        
                                        <!--News Widget Block-->
                                        <div class="news-widget-block">
                                            <div class="widget-inner">
                                                <div class="post-date">March 06, 2018</div>
                                                <h3><a href="blog-single.html">More than 50 percent of the work we do today didnot exist.</a></h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <a href="blog.html" class="more-news">More News</a>
                                    
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                            <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                                <div class="footer-widget lists-widget">
                                    <div class="footer-title">
                                        <h2>{{__('menu')}}</h2>
                                    </div>
                                    <div class="widget-content">
                                        <div class="row clearfix">
                                            
                                            <div class="column col-md-12 col-sm-12 col-xs-12"> 
                                                @menu('main')
                                            </div>
                                          
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
                <!--Footer Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="row clearfix">
                            
                            <div class="column col-md-6 col-sm-12 col-xs-12">
                                <div class="copyright">Copyrights © 2012-2018 <a href="#">Bruges.</a> All rights reserved.</div>	
                            </div>
                            <div class="link-column col-md-6 col-sm-12 col-xs-12">
                                <div class="go-to-top scroll-to-target" data-target="html"><span class="icon flaticon-arrows-9"></span><span class="text-outer">Move to Top</span></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </footer>
         <!--End Footer Style Two-->
         
     </div>
      </body>

<!-- /.End Of Color Palate -->

<script src="../../../assets/js/jquery.js"></script> 
<!--Revolution Slider-->
<script src="../../../assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="../../../assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../../../assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="../../../assets/js/main-slider-script.js"></script>

<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="../../../assets/js/jquery.fancybox.js"></script>
<script src="../../../assets/js/jquery-ui.js"></script>
<script src="../../../assets/js/owl.js"></script>
<script src="../../../assets/js/mixitup.js"></script>
<script src="../../../assets/js/wow.js"></script>
<script src="../../../assets/js/appear.js"></script>
<script src="../../../assets/js/script.js"></script>
<!--Google Map APi Key-->
<script src="../../../assets/http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="../../../assets/js/map-script.js"></script>
<!--End Google Map APi-->

<!--Color Switcher-->
<script src="../../../assets/js/color-settings.js"></script>
</body>

<!-- Mirrored from steelthemes.com/demo/html/Bruges/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Nov 2018 08:41:00 GMT -->
</html>