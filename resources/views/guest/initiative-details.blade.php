<?php
$pageTitle = 'تفاصيل المبادرة';
$page = 'initiative-details';
?>
@extends('layout')
@section('head')
<link rel="stylesheet" href="{{asset('front/css/style.css')}}">
<link rel="stylesheet" href="{{asset('front/css/mohammed.css')}}">
@endsection
@section('content')
<div class="header">

    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->

    <h1>   تفاصيل المبادرة

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


             <!-- strad About Us -->
             <section class="aboutUs">
                <div class="container">
                    <!-- end row about-box -->
                    <!-- strad row about-Cotnent -->
                    <div class="row mt-4">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="aboutContent">
                                <div class="all-Heading">
                                    <h4>{{$init->title}}</h4>
                                    <p class="p-one"></p>
                                    <p class="p-tow"></p>
                                </div>
                                <span>{{$init->created_at}}</span>
                                <p>
                                    {!! $init->description !!}
                                </p>
                            </div>
                        </div>
                        <!-- ********************* -->
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="aboutImage">
                                <img src="/storage/{{$init->image}}" class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- end row about Content -->
                </div>
            </section>
        <!-- End About Us -->
@endsection
