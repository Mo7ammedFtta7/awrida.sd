@extends('layouts.master')

@section('title')
    Blog posts | @parent
@stop

@section('content')

<section class="page-title" style="background-image:url(~/img/background/5.jpg)">
   <div class="auto-container">
       <h1>Blog</h1>
       <ul class="page-breadcrumb">
           <li><a href="en/home">Home</a></li>
           <li>Blog</li>
       </ul>
   </div>
</section>
 <div class="sidebar-page-container">
      <div class="auto-container">
          <div class="row clearfix">
              
               <!--Content Side-->
               <div class="content-side col-lg-8 col-md-8 col-sm-12 col-xs-12">
                  <!--Our Classic-->
                  <div class="blog-classic">
                        <?php if (isset($posts)): ?>
                        <?php foreach ($posts as $post): ?>
                      <!--News Block Three-->
                       <div class="news-block-three">
                           <div class="inner-box">
                               <div class="image">
                                   <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}"><img src="../../../assets/media/{{ $post->thumbnail->filename }}" alt=""></a>
                               </div>
                               <div class="lower-content">
                                   <div class="lower-box">
                                       <div class="post-date">21 <br> Aug</div>
                                       <h3><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}">{{ $post->title }}</a></h3>
                                       <div class="post-info"><span class="theme_color">By:</span> Admin <span class="theme_color">-</span>  <span class="theme_color">Comments:</span> 0</div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <?php endforeach; ?>

                       <?php endif; ?>
                   
                       
                       <!--Styled Pagination-->
                       <ul class="styled-pagination text-center">
                           <li class="prev"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                           <li><a href="#" class="active">1</a></li>
                           <li><a href="#">2</a></li>
                           <li class="next"><a href="#"><span class="fa fa-angle-right"></span></a></li>
                       </ul>                
                       <!--End Styled Pagination-->
                      
                   </div>
               </div>
               
               <!--Sidebar Side-->
               <div class="sidebar-side col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <aside class="sidebar default-sidebar with-border">
                 
                       <!-- Search -->
                       <div class="sidebar-widget search-box">
                          <form method="post" action="http://steelthemes.com/demo/html/Bruges/contact.html">
                               <div class="form-group">
                                   <input type="search" name="search-field" value="" placeholder="Enter Your Keyword..." required="">
                                   <button type="submit"><span class="icon fa fa-search"></span></button>
                               </div>
                           </form>
                 </div>
                       
                       <!--Blog Category Widget-->
                       <div class="sidebar-widget sidebar-blog-category">
                           <div class="sidebar-title">
                               <h2>Categories</h2>
                           </div>
                           <ul class="blog-cat-two">
                               <li><a href="/ar/blog/news/posts">News</a></li>
                               <li><a href="/ar/blog/projects/posts">projects </a></li>
                           </ul>
                       </div>
                       
                       <!-- Popular Posts -->
                       <div class="sidebar-widget popular-posts">
                           <div class="sidebar-title"><h2>Most viewd</h2></div>
                    
                           <div class="widget-content">
                              
                                 @foreach ($latestPosts as $item)
                           
                                     <article class="post">
                                          <figure class="post-thumb"><img src="../../../assets/media/{{ $item->thumbnail->filename }}" alt=""><a class="overlay" href="{{ URL::route($currentLocale . '.blog.slug', [$item->slug]) }}"></a></figure>
                                          <div class="post-info">{{ $item->created_at->format('d-m-Y') }}</div>
                                          <div class="text"><a href="{{ URL::route($currentLocale . '.blog.slug', [$item->slug]) }}">{{ $item->title }}</a></div>
                                      </article>
                                @endforeach  
                            
                               
                           </div>
                          
                       </div>
                       
                       <!-- Popular Tags -->
                       <div class="sidebar-widget popular-tags">
                           <div class="sidebar-title"><h2>Tag Cloud</h2></div>
                           <a href="#">Idea</a>
                           <a href="#">Finance</a>
                           <a href="#">Experts</a>
                           <a href="#">Tips</a>
                           <a href="#">Marketing</a>
                           <a href="#">Services</a>
                           <a href="#">Growth</a>
                       </div>
                       
                   </aside>
               </div>
               
           </div>
       </div>
   </div>

 @stop
