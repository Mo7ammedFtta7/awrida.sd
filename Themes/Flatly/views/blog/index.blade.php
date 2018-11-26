@extends('layouts.master')

@section('title')
    Blog posts | @parent
@stop

@section('content')

<section class="page--header--section pt--130 pb--150 bg--overlay bg--img" data-rjs="2" style="background-image: url(&quot;../../../assets/img/page-header-img/bg.jpg&quot;); padding-top: 263px;"> <div class="container"> <div class="page--header-breadcrumb text-uppercase text-center"> <ol class="breadcrumb"> <li><a href="index-2.html" class="btn-link">Home</a></li><li class="active"><span>Blog</span></li></ol> </div><div class="page--header-title text-uppercase text-center"> <h2 class="h1">Blog</h2> </div></div></section>
<section class="blog--section pt--80 pb--20">
    <div class="container">
       <div class="row">
          <div class="col-md-8 pb--60 pull-left float--md-none">
             <div class="post--items">

                    <?php if (isset($posts)): ?>
                    <?php foreach ($posts as $post): ?>

                <div class="post--item">
                   <div class="post--img">
                      <img src="../../../assets/media/{{ $post->thumbnail->filename }}" alt="" data-rjs="2"> 
                      <p class="date">{{ $post->created_at->format('d-m-Y') }}</p>
                   </div>
                   <div class="post--inner">
                      <ul class="nav meta">
                         <li>By <a href="#">Admin</a></li>
                         {{-- <li><a href="#"><i class="fa fa-heart-o"></i>23</a></li>
                         <li><a href="#"><i class="fa fa-comments-o"></i>13</a></li> --}}
                      </ul>
                      <div class="title">
                         <h2 class="h4"><a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}" class="btn-link">{{ $post->title }}</a></h2>
                      </div>
                      <div class="content">
                         <p> {{ $post->content }} </p>
                      </div>
                      <div class="action"> <a href="{{ URL::route($currentLocale . '.blog.slug', [$post->slug]) }}" class="btn btn-lg btn-default">Continue Reading<i class="ml--8 fa fa-long-arrow-right"></i></a> </div>
                   </div>
                </div>
                <?php endforeach; ?>

                <?php endif; ?>

             </div>
             <nav class="pagination--nav text-center">
                <ul class="pagination">
                   <li class="prev"><a href="#" class="btn btn-default active"><i class="fa fa-angle-double-left"></i></a></li>
                   <li class="active"><a href="#" class="btn btn-default">1</a></li>
                   <li><a href="#" class="btn btn-default">2</a></li>
                   <li><a href="#" class="btn btn-default">3</a></li>
                   <li><a href="#" class="btn btn-default">4</a></li>
                   <li><a href="#" class="btn btn-default">5</a></li>
                   <li class="next"><a href="#" class="btn btn-default active"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
             </nav>
          </div>
          <div class="col-md-4 pb--60">
             <div class="sidebar">
                <div class="widget">
                   <div class="search--widget">
                      <form action="#" data-form="validate" novalidate="novalidate">
                         <div class="input-group">
                            <input type="search" name="search" placeholder="Looking for..." class="form-control" required=""> 
                            <div class="input-group-btn"> <button type="submit" class="btn btn-default active">Search</button> </div>
                         </div>
                      </form>
                   </div>
                </div>
                <div class="widget">
                        <h2 class="h4 widget--title text-uppercase">اخر الاخبار</h2>
                        <div class="recent-posts--widget">
                           <ul class="nav">
                               @foreach ($latestPosts as $item)
                                <li class="clearfix">
                                        <div class="img mr--15 float--right"> <a href="{{ URL::route($currentLocale . '.blog.slug', [$item->slug]) }}"><img src="../../../assets/media/{{ $item->thumbnail->filename }}" style="width: 80px;" alt="" data-rjs="2"></a> </div>
                                            <div class="info">
                                                <p class="title"><a href="{{ URL::route($currentLocale . '.blog.slug', [$item->slug]) }}" class="btn-link">{{ $item->title }}</a></p>
                                                <p class="date"><a href="{{ URL::route($currentLocale . '.blog.slug', [$item->slug]) }}" class="btn-link">{{ $item->created_at->format('d-m-Y') }}</a></p>
                                            </div>
                                    </li>
                               @endforeach       
                           </ul>
                        </div>
                     </div>
                <div class="widget">
                   <h2 class="h4 widget--title text-uppercase">الفئات</h2>
                   <div class="nav--widget">
                      <ul class="nav">
                         <li> <a href="/ar/blog/news/posts"> <span class="text">اخبار</span></a> </li>
                         <li> <a href="/ar/blog/projects/posts"> <span class="text">مشاريع</span>  </a> </li>
                     </ul>
                   </div>
                </div>
                <div class="widget">
                   <h2 class="h4 widget--title text-uppercase">Tags</h2>
                   <div class="tagcloud"> <a href="#">Hosting</a> <a href="#">Shared Hosting</a> <a href="#">VPS Hosting</a> <a href="#">Reseller Hosting</a> <a href="#">Dedicated Hosting</a> <a href="#">Domain</a> </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@stop
