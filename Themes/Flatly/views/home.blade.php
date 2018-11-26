@extends('layouts.master')

@section('title')
    {{ $page->title }}| @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

<!--/#main-slider-->
{{-- <div class="container">
<div class="section-header">
        <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">{{ $page->title }}</h2>
        <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></p>
    </div>
</div> --}}
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
                                   <h2 class="h1">منظمة اوردة</h2>
                                   <h3 class="h3">للتنمية الانسانية</h3>

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
                                      <h2 class="h1">منظمة اوردة</h2>
                                      <h3 class="h3">للتنمية الانسانية</h3>

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
                                   <h2 class="h1">منظمة اوردة</h2>
                                   <h3 class="h3">للتنمية الانسانية</h3>

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
     
     @section('content')
     {!! $page->body !!}

<section class="counter--section pt--80 pb--50 bg--overlay bg--img" data-rjs="2" style="background-image: url(&quot;../../../assets/img/counter-img/bg.jpg&quot;);">
    <div class="container">
       <div class="row AdjustRow" style="position: relative; height: 456px;">
          <div class="col-md-3 col-xs-6
             col-xss-12 pb--30" style="position: absolute; right: 0px; top: 0px;">
             <div class="counter--item
                style--1">
                <div class="img"> <img src="../../../assets/img/counter-img/icon-01.png" alt="" data-rjs="2"> </div>
                <div class="title">
                   <h2 class="h4">عمليات عيون</h2>
                </div>
                <div class="count">
                   <h3 class="h1"><span data-trigger="counterUp">3000</span>+</h3>
                </div>
             </div>
          </div>
          <div class="col-md-3 col-xs-6
             col-xss-12 pb--30" style="position: absolute; right: 375px; top: 0px;">
             <div class="counter--item
                style--1">
                <div class="img"> <img src="../../../assets/img/counter-img/icon-02.png" alt="" data-rjs="2"> </div>
                <div class="title">
                   <h2 class="h4">سماعة اذن</h2>
                </div>
                <div class="count">
                   <h3 class="h1"><span data-trigger="counterUp">300</span>+</h3>
                </div>
             </div>
          </div>
          <div class="col-md-3 col-xs-6
             col-xss-12 pb--30" style="position: absolute; right: 0px; top: 228px;">
             <div class="counter--item
                style--1">
                <div class="img"> <img src="../../../assets/img/counter-img/icon-03.png" alt="" data-rjs="2"> </div>
                <div class="title">
                   <h2 class="h4">بير</h2>
                </div>
                <div class="count">
                   <h3 class="h1"><span data-trigger="counterUp">12</span>+</h3>
                </div>
             </div>
          </div>
          <div class="col-md-3 col-xs-6
             col-xss-12 pb--30" style="position: absolute; right: 375px; top: 228px;">
             <div class="counter--item
                style--1">
                <div class="img"> <img src="../../../assets/img/counter-img/icon-04.png" alt="" data-rjs="2"> </div>
                <div class="title">
                   <h2 class="h4">محاضرة تثقيقية</h2>
                </div>
                <div class="count">
                   <h3 class="h1"><span data-trigger="counterUp">27</span>+</h3>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 

     <section class="team--section pt--80 pb--80 bg--c-lighterblue">
            <div class="container">
               <div class="section--title pb--50 text-center">
                  <h2 class="h1 text-uppercase">المكتب التنفيذي</h2>
                  <div class="row">
                     <div class="col-md-6 col-md-offset-3">
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
                     </div>
                  </div>
               </div>
               <div class="team--members owl-carousel" data-owl-margin="30" data-owl-nav="true" data-owl-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "992":{"items": "3"}}'>
                  <div class="team--member text-center">
                     <div class="img"> <img src="../../../assets/img/team-img/member-01.jpg" alt="" class="img-circle"> </div>
                     <div class="name text-uppercase">
                        <h3 class="h4">Jeffrey Stevens</h3>
                     </div>
                     <div class="role">
                        <p>Founder</p>
                     </div>
                     <div class="social">
                        <ul class="nav">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="team--member text-center">
                     <div class="img"> <img src="../../../assets/img/team-img/member-02.jpg" alt="" class="img-circle"> </div>
                     <div class="name text-uppercase">
                        <h3 class="h4">Harold Crawford</h3>
                     </div>
                     <div class="role">
                        <p>Sales</p>
                     </div>
                     <div class="social">
                        <ul class="nav">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="team--member text-center">
                     <div class="img"> <img src="../../../assets/img/team-img/member-03.jpg" alt="" class="img-circle"> </div>
                     <div class="name text-uppercase">
                        <h3 class="h4">Jack Lopez</h3>
                     </div>
                     <div class="role">
                        <p>Manager</p>
                     </div>
                     <div class="social">
                        <ul class="nav">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="team--member text-center">
                     <div class="img"> <img src="../../../assets/img/team-img/member-04.jpg" alt="" class="img-circle"> </div>
                     <div class="name text-uppercase">
                        <h3 class="h4">Larry Hall</h3>
                     </div>
                     <div class="role">
                        <p>Support</p>
                     </div>
                     <div class="social">
                        <ul class="nav">
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
 <section class="call-to-action pt--50 pb--50 bg--c-main">
      <div class="container"> 
          <div class="cta--content text-center">
      <div class="title"> 
          <h2 class="h3">اخر الاخبار</h2> </div>
      </div>
    </div>
    </section>
<section class="blog--section pt--80 pb--50 bg--c-lighterblue">
   
               
    <div class="row AdjustRow" style="position: relative; height: 1926.77px;">
            @foreach ($latestPosts as $item)

        <div class="col-md-3 col-sm-12 pb--30" style="position: absolute; right: 0px; top: 0px;">
               <div class="post--item">
                  <div class="post--img">
                       <img src="../../../assets/media/{{ $item->thumbnail->filename }}" style="height: 150;" alt="" data-rjs="2"> <a href="#" class="date"><i class="mr--8 fa fa-calendar-o"></i>{{ $item->created_at->format('d-m-Y') }}</a> </div>
                  <div class="post--inner">
                     <ul class="nav meta">
                        {{-- <li><a href="#"><i class="fa fa-heart-o"></i>23</a></li>
                        <li><a href="#"><i class="fa fa-comments-o"></i>13</a></li> --}}
                     </ul>
                     <div class="title">
                        <h2 class="h4"><a href="{{ URL::route($currentLocale . '.blog.slug', [$item->slug]) }}" class="btn-link">{{ $item->title }}</a></h2>
                     </div>
                     <div class="content">
                        <p>{{ substr($item->content, 0, 200)  }}</p>
                     </div>
                     <div class="action text-right"> <a href="{{ URL::route($currentLocale . '.blog.slug', [$item->slug]) }}" class="btn btn-default">قراءة المزيد<i class="ml--5 fa fa-long-arrow-right"></i></a> </div>
                  </div>
               </div>
            </div>
            @endforeach  

         </div>

</section>
 
         @stop

