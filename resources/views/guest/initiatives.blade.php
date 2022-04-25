<?php
$pageTitle = 'المبادرات';
$page = 'initiatives';
?>
@extends('layout')
@section('content')
<div class="header">
    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
    <h1>
      المبادارات و المشاريع
    </h1>
    </div>
    <!--Waves Container-->
    <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
    </div>
    <!--Waves end-->
    </div>
<!-- Start Blog  -->
<div class="blog" id="blog">
    <div class="container">
        <div class="main-heading">
            <h3>                 المبادارات و المشاريع
            </h3>
            <p>
                اهم المبادارات التي تقدمها الجمعية
            </p>
        </div>
        <div class="content-blog">
            @foreach($inits as $item)
            <div class="box-blog animate__animated animate__bounce">
              <div class="img-blog">
                <img src="storage/{{$item->image}}" alt="" class="news-img">
                </div>
                <h3> {{$item->title}}  </h3>
                <p>
                    {{$item->mini_des}}
                </p>
                <a href="/initiative/details/{{$item->id}}" class="links">  المزيد</a>
            </div>
            @endforeach
            
        </div>
    </div>
                          <div class="container">
                        <div class="row justify-content-center">
                            {{$inits->links()}}
                        </div>
                    </div>
</div>
<!-- End Blog  -->
@endsection
