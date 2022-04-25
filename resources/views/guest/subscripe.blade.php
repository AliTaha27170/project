<?php
$pageTitle = 'الاشتراك';
$page = 'subuscribe';
?>
@extends('layout')

@section('content')

<div class="header">
    <!--Content before waves-->
    <div class="inner-header flex">
    <!--Just the logo.. Don't mind this-->
    <h1>   اشتراك العضوية
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
<div class="main-content">
<!-- Page content -->
<div class="container-fluid mt-7">
  <div class="row">
    <div class="full-sec">
      <div class="first order-xl-2">
        <div class="card card-profile shadow">
          <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4 left-side">
            <div class="left-sec">
              <h3>السياسيات والحقوق والواجبات</h3>
              <ol>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق والواجبات السياسيات والحقوق والواجباتالسياسيات والحقوق  والواجباتالسياسياتوالواجبات</li>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق لواجباتالسياسيات والحقوق والواج والحقوق والواجباتالسياسياتوالواجبات</li>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق لواجباتالسياسيات والحقوق والواج والحقوق والواجباتالسياسياتوالواجبات</li>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق لواجباتالسياسيات والحقوق والواج والحقوق والواجباتالسياسياتوالواجبات</li>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق لواجباتالسياسيات والحقوق والواج والحقوق والواجباتالسياسياتوالواجبات</li>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق لواجباتالسياسيات والحقوق والواج والحقوق والواجباتالسياسياتوالواجبات</li>
                <li>السياسياتوالواجبات السياسيات والحقوق والواجبات السياسيات والحقوق سياسيات والحقوق والواجباتالسياسيات والحقوق  والواجباتالسياسياتوالواجبات</li>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق لواجباتالسياسيات والحقوق والواج والحقوق والواجباتالسياسياتوالواجبات</li>
                <li>السياسيات والحقوق والواجبات السياسيات والحقوق لواجباتالسياسيات والحقوق والواج والحقوق والواجباتالسياسياتوالواجبات</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="second order-xl-1">
        <div class="card">
          <div class="card-body">
            <form>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-12">
                    <label class="form-control-label tit-sec" for="input-name">الاسم  الرباعي</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-sec">
                    <div class="form-group focused">
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="الإسم الأول" value="الإسم الأول">
                    </div>
                  </div>
                  <div class="col-lg-3 col-sec">
                    <div class="form-group focused">
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="الإسم الثاني" value="الإسم الثاني">
                    </div>
                  </div>
                  <div class="col-lg-3 col-sec">
                    <div class="form-group focused">
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="الإسم الثالث" value="الإسم الثالث">
                    </div>
                  </div>
                  <div class="col-lg-3 col-sec">
                    <div class="form-group">
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="الإسم الأخير" value="الإسم الأخير">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-city">الجنسيه</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="الجنسيه" value="الجنسيه">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-city">رقم الهوية/الاقامة</label>
                      <input type="number" id="input-name" class="form-control form-control-alternative" placeholder="رقم الهوية/ الاقامة" value="رقم الهوية / الاقامة">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-city"> مكان الاقامة</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="  مكان الاقامة" value="  مكان الاقامة">
                    </div>
                  </div>
                  <div class="col-lg-6 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-city"> المؤهل العلمي </label>
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="   الؤهل العلمي" value="  المؤهل العلمي ">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-country">  التخصص</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="التخصص " value=" التخصص">
                    </div>
                  </div>
                  <div class="col-lg-4 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-country"> الوظيفة</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative dir-left" placeholder="الوظيفة" value="الوظيفة">
                    </div>
                  </div>
                  <div class="col-lg-4 col-sec">
                    <div class="form-group">
                      <label class="form-control-label tit-sec" for="input-country">رقم الجوال</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative dir-left" placeholder="059*****" value="059*****">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-country">مجال الدورات</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative" placeholder="مجال الدورات" value="مجال الدورات">
                    </div>
                  </div>
                  <div class="col-lg-4 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-country"> البنك المتعامل معه</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative pad-sec" placeholder="البنك المتعامل معه" value="البنك  المتعامل معه">
                    </div>
                  </div>
                  <div class="col-lg-4 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-city">البريد الإلكتروني</label>
                      <input type="text" id="input-name" class="form-control form-control-alternative pad-sec" placeholder=">البريد الإلكتروني" value="البريد الإلكتروني">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-country">رقم الايبان</label>
                      <input type="number" id="input-name" class="form-control form-control-alternative" placeholder="رقم الايبان" value=" رقم الايبان">
                    </div>
                  </div>

                </div>
                <div class="row">
                  <div class="col-lg-6 col-sec">
                    <div class="form-group focused">
                      <label class="form-control-label tit-sec" for="input-city">نوع العضوية</label>
                      <select class="form-select form-select-lg mb-3"aria-label=".form-select-lg example" class="form-control form-control-alternative">
                        <option value="1">عاملة</option>
                        <option value="2">مدرب</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sec">
                    <div class="form-group">
                      <label class="form-control-label tit-sec" for="input-country">طريقة الدفع</label>
                      <select class="form-select form-select-lg mb-3"aria-label=".form-select-lg example" class="form-control form-control-alternative">
                        <option selected>أون لاين</option>
                        <option value="1">أوف لاين</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sec">
                    <div class="form-group" id="group-check" >
                      <input type="checkbox" name="" id="" >

                      <label class="form-control-label tit-sec" for="input-city"> الموافقه على جميع السياسات</label>
                    </div>
                  </div>
                </div>
                <div class="btn-send">
                  <button type="button" class="btn btn-primary">أرسل</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
