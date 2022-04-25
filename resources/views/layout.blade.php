<?php
$aboutus = DB::table('aboutus')->select('*')->first();
$accounts = DB::table('bank_accounts')->first();
$social = DB::table('socila_media')->first();
$new_slides = DB::table('news')->latest()->limit(4)->get();
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageTitle}}</title>
     <!-- Font Awesome Library  -->
     <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
     <!-- Render All Elements Normally -->
     <link rel="stylesheet" href="{{asset('front/css/normalize.css')}}">
     <!-- Google Fonts  -->
     <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&family=Noto+Naskh+Arabic&display=swap" rel="stylesheet">
     {{-- <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}"> --}}

     @if ($page != 'main')
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/header.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @endif

    @if ($page == 'main')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('front/css/الرئيسيه.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/mediaالرش.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    @endif

    <!-- <link rel="stylesheet" href="css/media-الرئيسية.css"> -->

    @if ($page == 'activities')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @endif

    @if ($page == 'subuscribe')
        <link rel="stylesheet" href="{{('front/css/form.css')}}">
    @endif

    <link rel="stylesheet" href="{{asset('front/css/mediafooter.css')}}">

</head>

<body>
  <div class="MainHeader">
    <nav class="navbar navbar-expand-lg navbar-light bg-light background" >
        <a class="navbar-brand" href="/">
          <img src="{{asset('front/images/logo123.png')}}" width="150px" height="150px" alt="img" class="img-logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                عن الجمعية
              </a>
              <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                <a class="dropdown-item test" href="/boss-speach">كلمة رئيس الجمعية</a>
                <a class="dropdown-item test" href="/creator-members">الاعضاء المؤسيين</a>
                <a class="dropdown-item test" href="/council-members">مجلس الإداره</a>
                <a class="dropdown-item test" href="/structure">الهيكل التنظيمي</a>
                {{-- <a class="dropdown-item test" href="اهداف الجمعية.html"> اهداف الجمعية</a> --}}

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                الجمعية العمومیة
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item test" href="/show-meetings">الاجتماعات</a>
                <a class="dropdown-item test" href="/scheduling">جدول الاعمال </a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                الوثائق و التقارير
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item test" href="/yearly-reports">التقرير السنوي</a>
                <a class="dropdown-item test" href="/policies">اللوائح والسياسات </a>
                <a class="dropdown-item test"  href="/reports">التقارير المالية  </a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                المركز الاعلامي
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item test" href="/activities">الانشطةوالفعاليات</a>
                <a class="dropdown-item test" href="/news">الاخبار </a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/initiatives" id="navbarDropdown">
                المبادارات و المشاريع
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                انضم لنا
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item test" href="/partners"> الرعاه</a>
                <a class="dropdown-item test" href="#"> عضوية مدفوعة</a>
              </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link dropdown-toggle" href="/contact-us" id="navbarDropdown"">
                 تواصل معنا
                 </a>
            </li>
            <li class="nav-item active">
              <button class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="buttons">
                  تسجيل الدخول
              </button>

            </li>

          </ul>

        </div>
      </nav>
  </div>



  @yield('content')



  <footer>
    <div class="container">
      <div class="col">
        <div class="bullet">
          <div class="title">
            <h2> {{$aboutus->about_title}}</h2>
          </div>
          <div class="crile">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
         <p>{!! $aboutus->about !!}</p>

      </div>
      <div class="col">
        <div class="bullet">
          <div class="title">
            <h2>أقسام الموقع</h2>
          </div>
          <div class="crile">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <ul>
          <li><a href="/">الرئيسية</a></li>
          <li><a href="/activities">الفعاليات</a></li>
          <li><a href="/policies">السياسات</a></li>
          <li><a href="/structure">الهيكل التنظيمي</a></li>
          <li><a href="/contact-us">اتصال بنا</a></li>
        </ul>
      </div>
      <div class="col">
        <div class="bullet">
          <div class="title">
            <h2>أقسام الموقع</h2>
          </div>
          <div class="crile">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <ul>

          <li><a href="/news">الأخبار </a></li>
        <li><a href="/initiatives">المبادرات والمشاريع </a></li>
        <li><a href="/show-meetings">الاجتماعات </a></li>
        <li><a href="/scheduling">الأعمال </a></li>
        <li><a href="/boss-speach">كلمة رئيس الجمعية </a></li>
        </ul>
      </div>
      <div class="col">
        <div class="bullet">
          <div class="title">
            <h2> الحسابات البنكية</h2>
          </div>
          <div class="crile">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <ul>
            <li class="item"><a href="#" class="link"> {{$accounts->firstaccount}}</a></li>
            <li class="item"><a href="#" class="link"> {{$accounts->secondaccount}}</a></li>
            <li class="item"><a href="#" class="link"> {{$accounts->thiredaccount}}</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <div class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="down-footer">
            <p>COPYRIGHT © 2022  <span> للجمعية التعاونية للجودة والسلامة الغذائية   </span></p>
            <ul>

              <li><a type="button" href="{{$social->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
              <li><a type="button" href="{{$social->twitter}}"><i class="fab fa-twitter"></i></a></li>
              <li><a type="button" href="{{$social->instagram}}"><i class="fab fa-instagram"></i></a></li>
              <li><a type="button" href="{{$social->youtube}}"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{asset('front/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front/js/main.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('front/js/sliderindex.js')}}"></script>
</body>
</html>
