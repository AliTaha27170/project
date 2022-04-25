<?php
$pageTitle = 'الاجتماعات';
$page = 'meetings';
?>
@extends('layout')

@section('content')
<div class="header">
    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
    <h1>
        الاجتماعات
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
        <h2>   محاضر الإجتماع العادية</h2>
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

    @foreach ($meetings as $item)
    @if ($item->r1 == 'normal')
      <div class="item">
        <i class="far fa-file-pdf icons"></i>
        <h3> {{$item->name}}</h3>
        <p>
            {!! $item->description !!}
        </p>
        <div class="link gn-link">
          <i class="far fa-arrow-alt-circle-left"></i>
          <a href="/storage/{{$item->file}}">تحميل الملف</a>
        </div>
      </div>

    @endif
    @endforeach

    </div>
  </div>
</section>
<section class="serviecs">
  <div class="container">
    <div class="bullet">
      <div class="title">
        <h2>   محاضر الاجتماعات  غير العادية</h2>
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

        @foreach ($meetings as $item)
        @if ($item->r1 == 'abnormal')


            <div class="item">
                <i class="far fa-file-pdf icons"></i>
                <h3>{{$item->name}}</h3>
                <p>
                    {!! $item->description !!}
                </p>
                <div class="link gn-link">
                <i class="far fa-arrow-alt-circle-left"></i>
                <a href="/storage/{{$item->file}}">تحميل الملف</a>
                </div>
            </div>
        @endif
        @endforeach


    </div>
  </div>
</section>
@endsection
