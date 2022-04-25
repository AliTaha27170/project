<?php
$pageTitle = 'تواصل معنا';
$page = 'contact-us';
?>
@extends('layout')

@section('content')


<div class="header">

    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->

    <h1>
        تواصل معنا
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




    <div class="container">
        <br />
        <div class="row">

            <br />
            <div class="col-md-6">

                <form action="/contact-us/store" method="POST" class="my-form">
                    @csrf
                    <div class="form-group">
                        <label class="lable-name" for="form-name">الإسم</label>
                        <input type="email" class="form-control" name="name" id="form-name" placeholder="الإسم">
                    </div>
                    <div class="form-group">
                        <label class="lable-name" for="form-email">الإيميل</label>
                        <input type="email" class="form-control" name="email" id="form-email" placeholder="الإيميل">
                    </div>
                    <div class="form-group">
                        <label class="lable-name" for="form-subject">رقم الهاتف</label>
                        <input type="text" class="form-control" name="phone" id="form-subject" placeholder="رقم الهاتف">
                    </div>
                    <div class="form-group">
                        <label class="lable-name" for="form-message">نص الرساله</label>
                        <textarea class="form-control" name="description" id="form-message" placeholder="نص الرساله"></textarea>
                    </div>
                    <button class="btn btn-default " type="submit"> ارسال</button>
                    <!-- <input type="radio"> ahemd         -->
                </form>
            </div>
            <div class="col-md-6">
                <div class="map-responsive">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2324.6798675091354!2d39.83169299526835!3d21.36558329846174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c2054124d39609%3A0x6532cfb02f575c7d!2z2LTYsdmD2Kkg2YTZhNmF2K3Yp9mF2KfYqSDZiNin2YTYp9iz2KrYtNin2LHYp9iqINin2YTZgtin2YbZiNmG2YrYqSBTLlEuUg!5e1!3m2!1sar!2s!4v1648238496971!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
