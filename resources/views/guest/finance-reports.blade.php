<?php
$pageTitle = 'التقارير المالية';
$page = 'finance';
?>
@extends('layout')
@section('head')
<link rel="stylesheet" href="{{asset('front/css/style.css')}}">
@endsection
@section('content')
<div class="header">
    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->

    <h1>
         التقارير المالية
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
    <section class="serviecs">
      <div class="container">
        <div class="bullet">
          <div class="title">
            <h2>     التقارير المالية</h2>
          </div>
          <div class="crile">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div class="content-srv">

            <?php $c = 1 ?>
            @foreach ($reports as $item)



          <div class="item">
            <i class="far fa-file-pdf icons"></i>
             <h3>{{$item->name}}</h3>
            <div class="link gn-link">
              <i class="far fa-arrow-alt-circle-left"></i>
              <a href="/storage/{{$item->file}}">تحميل الملف</a>
            </div>
          </div>


          @endforeach
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
            {{$reports->links()}}
        </div>
    </div>
    </section>
@endsection
