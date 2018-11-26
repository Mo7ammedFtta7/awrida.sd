@extends('layouts.master')

@section('title')
    {{ $page->title }} |   @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
<section class="page--header--section pt--130 pb--150 bg--overlay bg--img" data-rjs="2" style="background-image: url(&quot;../../../assets/img/page-header-img/bg.jpg&quot;); padding-top: 263px;"> <div class="container"> <div class="page--header-breadcrumb text-uppercase text-center"> <ol class="breadcrumb"> <li><a href="index-2.html" class="btn-link">Home</a></li><li class="active"><span>{{ $page->title }}</span></li></ol> </div><div class="page--header-title text-uppercase text-center"> <h2 class="h1">{{ $page->title }}</h2> </div></div></section>
<div class="container">
    <div class="row">
        {!! $page->body !!}
    </div>
</div>

@stop
