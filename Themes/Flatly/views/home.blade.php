@extends('layouts.master')

@section('title')
    {{ $page->title }}| @parent Home
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop


     
     @section('content')


     <!--Main Slider-->
     <section class="main-slider" dir="ltr">
            
         <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
             <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                 <ul>
                     
                     <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="img/image-5.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                     <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="../../../img/image-4.jpg"> 
                     
                     <div class="tp-caption" 
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingtop="[0,0,0,0]"
                     data-responsive_offset="on"
                     data-type="text"
                     data-height="none"
                     data-width="['600','700','650','460']"
                     data-whitespace="normal"
                     data-hoffset="['15','15','15','15']"
                     data-voffset="['-130','-150','-160','-130']"
                     data-x="['left','left','left','left']"
                     data-y="['middle','middle','middle','middle']"
                     data-textalign="['top','top','top','top']"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     >
                       
                     </div>
                     
                     <div class="tp-caption" 
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingtop="[0,0,0,0]"
                     data-responsive_offset="on"
                     data-type="text"
                     data-height="none"
                     data-width="['600','700','650','460']"
                     data-whitespace="normal"
                     data-hoffset="['15','15','15','15']"
                     data-voffset="['-40','-60','-70','-50']"
                     data-x="['left','left','left','left']"
                     data-y="['middle','middle','middle','middle']"
                     data-textalign="['top','top','top','top']"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     >
                        <h2>Welcom <br> to our website</h2>
                     </div>
                     
                     <div class="tp-caption" 
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingtop="[0,0,0,0]"
                     data-responsive_offset="on"
                     data-type="text"
                     data-height="none"
                     data-width="['600','700','650','460']"
                     data-whitespace="normal"
                     data-hoffset="['15','15','15','15']"
                     data-voffset="['50','30','20','15']"
                     data-x="['left','left','left','left']"
                     data-y="['middle','middle','middle','middle']"
                     data-textalign="['top','top','top','top']"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     >
                        <h1>AWRIDA</h1>
                     </div>
                     
                     <div class="tp-caption" 
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingtop="[0,0,0,0]"
                     data-responsive_offset="on"
                     data-type="text"
                     data-height="none"
                     data-width="['600','700','650','480']"
                     data-whitespace="normal"
                     data-hoffset="['15','15','15','15']"
                     data-voffset="['120','100','70','60']"
                     data-x="['left','left','left','left']"
                     data-y="['middle','middle','middle','middle']"
                     data-textalign="['top','top','top','top']"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     >
                        <div class="text">for humanitarian devolvement</div>
                     </div>
                     
                     <div class="tp-caption tp-resizeme" 
                     data-paddingbottom="[0,0,0,0]"
                     data-paddingleft="[0,0,0,0]"
                     data-paddingright="[0,0,0,0]"
                     data-paddingtop="[0,0,0,0]"
                     data-responsive_offset="on"
                     data-type="text"
                     data-height="none"
                     data-width="['600','550','550','460']"
                     data-whitespace="normal"
                     data-hoffset="['15','15','15','15']"
                     data-voffset="['190','160','130','120']"
                     data-x="['left','left','left','left']"
                     data-y="['middle','middle','middle','middle']"
                     data-textalign="['top','top','top','top']"
                     data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                     >
                        <a href="about.html" class="theme-btn btn-style-one">More info</a>
                     </div>
                     
                     </li>
                     
                     
                 </ul>
             </div>
         </div>
     </section>
     <section class="services-single-section">
         <div class="auto-container">
             <div class="row clearfix">
                 
              <!--Introduction Section-->
              <div class="introduction-section">
                 <div class="sec-title">
                     <div class="clearfix">
                         <div class="pull-left">
                             <h2> {{ __('full.intro') }}</h2>
                              <div class="separator"></div>
                          </div>
                          <div class="pull-right">
                             <div class="text">{{ __('full.intro1') }}</div>
                          </div>
                      </div>
                  </div>
                  
                  <div class="row clearfix">
                     
                      <!--Intro Video Column-->
                      <div class="intro-video-column col-md-6 col-sm-12 col-xs-12">
                         <div class="inner-column">
                             <div class="row clearfix">
                                 <div class="column col-md-6 col-sm-6 col-xs-12">
                                      <div class="image">
                                          <img src="../../../assets/images/resource/video-img-3 (1).jpg" alt="">
                                      </div>
                                  </div>
                                  <div class="column col-md-6 col-sm-6 col-xs-12">
                                      <div class="image image-2">
                                          <img src="../../../assets/images/resource/video-img-3.jpg" alt="">
                                      </div>
                                  </div>
                              </div>
                              <div class="play-box">
                                 <div class="play-inner">
                                     <span class="icon-box">
                                         <span class="icon flaticon-play-button-5"></span>
                                      </span>
                                      <div class="video">Play Video</div>
                                      <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      
                      <div class="intro-content-column col-md-6 col-sm-12 col-xs-12">
                         <div class="inner-column">
                             <div class="text">
                                 <p>{{ __('full.intro2') }}.</p>
                                  <p>{{ __('full.intro3') }}</p>
                              </div>
                          </div>
                      </div>
                      
                  </div>
                  
              </div>
              
          </div>
      </section>
      <section class="video-section" style="background-image:url(../img/background/4.jpg)">
       
       <div class="row">
            <div class="col-md-6">
         <div class="auto-container">
             <h1> <span class="theme_color">{{ __('full.vision') }}</span></h1>
              <div class="text">{{ __('full.visiontxt') }}</div>
            </div>
          </div>
          <div class="col-md-6">
               <div class="auto-container">
                   <h1> <span class="theme_color">{{ __('full.mission') }}</span></h1>
                    <div class="text">{{ __('full.missiontxt') }}</div>
                  </div>
                </div>
         </div>
         </div>
         </section>
     <!--End Main Slider-->
    
    <!--Testimonial Section-->
    <section class="testimonial-section" style="background-image:url(../img/background/pattern-2.png)">
    	<div class="auto-container">
        	<!--Title Box-->
            <div class="title-box">
                <div class="row clearfix">
                    <div class="column col-md-4 col-sm-12 col-xs-12">
                        <div class="sec-title">
                            <h2>{{ __('full.Office') }}
                            </h2>
                            <div class="separator"></div>
                        </div>
                    </div>
                    <div class="column col-md-8 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
            
            <div class="two-item-carousel owl-carousel owl-theme" dir="ltr">
            	
                <!--Testimonial Block-->
                <div class="testimonial-block">
                	<div class="inner-box">
                    	<div class="clearfix">
                        	
                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="../../../img/resource/testimonial-1.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<div class="content">
                                    	<div class="text">محمود الرزيقي</div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                    	<h3>Mahmmod Alrizagy</h3>
                                    	<div class="locations">General Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                	<div class="inner-box">
                    	<div class="clearfix">
                        	
                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="../../../img/resource/testimonial-2.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<div class="content">
                                    	<div class="text">امنة بنت وهب </div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                    	<h3>Amina Bnt_wahb</h3>
                                    	<div class="locations">Executive Director</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                	<div class="inner-box">
                    	<div class="clearfix">
                        	
                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="../../../img/resource/testimonial-1.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<div class="content">
                                    	<div class="text">محمود الرزيقي</div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                    	<h3>Mahmmod Alrizagy</h3>
                                    	<div class="locations">General Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                	<div class="inner-box">
                    	<div class="clearfix">
                        	
                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="../../../img/resource/testimonial-2.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<div class="content">
                                    	<div class="text">امنة بنت وهب </div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                    	<h3>Amina Bnt_wahb</h3>
                                    	<div class="locations">Executive Director</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                	<div class="inner-box">
                    	<div class="clearfix">
                        	
                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="../../../img/resource/testimonial-1.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<div class="content">
                                    	<div class="text">محمود الرزيقي</div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                    	<h3>Mahmmod Alrizagy</h3>
                                    	<div class="locations">General Manager</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                	<div class="inner-box">
                    	<div class="clearfix">
                        	
                            <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="image">
                                	<img src="../../../img/resource/testimonial-2.jpg" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="inner-column">
                                	<div class="content">
                                    	<div class="text"> </div>
                                        <div class="curve"></div>
                                    </div>
                                    <div class="lower-box">
                                    	<h3>Amina Bnt_wahb</h3>
                                    	<div class="locations">Executive Director</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
<section class="call-to-action-section" style="background-image:url(../img/background/5.jpg)">
      <div class="auto-container">
          <h2>{{ __('full.conus') }} </h2>
           <div class="number"> 00249912854218</div>
       </div>
   </section>
         @stop

