<?php
$pageTitle = 'التقارير السنوية';
$page = 'yearly-reports';
?>
@extends('layout')

@section('content')
<div class="header">
    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
    <h1>
         التقارير السنوية
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
  <!-- stard years -->
  <section class="years">
    <div class="container">
        <div class="all-Heading">
            <h4>التقرير السنوي</h4>
            <p class="p-one"></p>
            <p class="p-tow"></p>
        </div>
        <div class="bg-years">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="list-years">
                        <form action="/yearly-report/search" method="post">
                        @csrf
                        <div class="input-seacrh">
                            <input type="text" id='search' name="search" placeholder="بحت بالسنة">
                            <i class="fas fa-search"><button type="submit" class="btn"></button></i>
                        </div>

                        </form>

                        @foreach ($reports as $item)



                        <div class="cycle-flex">
                            <i class="far fa-dot-circle cycle-cg"></i>
                            <div class="cycle-prag">
                                <h5>{{$item->name}}</h5>
                                {{-- <p>تقرير ترميم المنازل</p> --}}
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
                <!-- --------------------- -->
                <div class="col-md-6 col-lg-6">
                    @if (isset($result))
                    <div class="pdf-years">
                        <div class="pdf-bg">
                            <img src="/storage/{{$result->file}}" alt="">
                            <p>
                                تقرير ترميم المنازل
                            </p>
                        </div>
                        <div class="text-center">
                            <a type="button" href="/storage/{{$result->file}}" class="btn btn-primary">تحميل التقرير</a>
                        </div>

                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end years  -->
@endsection
