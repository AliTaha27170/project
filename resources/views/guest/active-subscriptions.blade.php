<?php
$pageTitle = 'الاشتراكات الفعالة';
$page = 'active-subscription';
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
     العضويات
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


<!-- Start Pricing  -->
<div class="pricing" id="pricing">
  <div class="container">
      <div class="main-heading">
          <h3>العضويات المدفوعة</h3>
          <p>
              اهم العضويات التي تقدمها الجمعية التعاوينة للسلامة الغذائية
          </p>
      </div>
      <div class="content-pricing">
          <div class="box-price">
              <h3>عضويةمساهمه</h3>
              <div class="number-price">
                  <h2>100$</h2>
                  <span>شهريا</span>
              </div>

              <ul>
                  <li>الدخول الى المنصه</li>
                  <li>الدخول الى المنصه</li>
                  <li>ارباح 5 % سنويا  </li>
                  <li><del>شراء من المتجر</del></li>
                  <li><del>شراء من المتجر</del></li>
                  <li><del>شراء من المتجر</del></li>
              </ul>
              <a href="#">اشترك الان</a>
          </div>
          <div class="box-price">
              <h3>عضويةمساهمه</h3>
              <div class="number-price">
                  <h2>100$</h2>
                  <span>شهريا</span>
              </div>

              <ul>
                  <li>الدخول الى المنصه</li>
                  <li>الدخول الى المنصه</li>
                  <li>ارباح 5 % سنويا  </li>
                  <li><del>شراء من المتجر</del></li>
                  <li><del>شراء من المتجر</del></li>
                  <li><del>شراء من المتجر</del></li>
              </ul>
              <a href="#">اشترك الان</a>
          </div>            <div class="box-price">
              <h3>عضويةمساهمه</h3>
              <div class="number-price">
                  <h2>100$</h2>
                  <span>شهريا</span>
              </div>

              <ul>
                  <li>الدخول الى المنصه</li>
                  <li>الدخول الى المنصه</li>
                  <li>ارباح 5 % سنويا  </li>
                  <li><del>شراء من المتجر</del></li>
                  <li><del>شراء من المتجر</del></li>
                  <li><del>شراء من المتجر</del></li>
              </ul>
              <a href="#">اشترك الان</a>
          </div>
      </div>
  </div>
</div>
<!-- End Pricing  -->
@endsection
