<?php
$pageTitle = 'الرئيسية';
$page = 'main';
?>
@extends('layout')

@section('content')
      <!-- Slider main container -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach ($slides as $item)


      <div class="swiper-slide" style="background-image: url(storage/{{$item->image}});">
        <div class="txt-home">
          <h1>{!! $item->title !!}</h1>
          {{-- <h3>منطقة عمل الجمعية مكة المكرمة</h3> --}}
          <p>{!! $item->description !!}</p>
          
        </div>
      </div>

      @endforeach
        @foreach ($new_slides as $item)


      <div class="swiper-slide" style="background-image: url(storage/{{$item->image}});">
        <div class="txt-home">
          <h1>{!! $item->title !!}</h1>
          <p>{!! $item->mini_des !!}</p>
          <!--<a style="width:50%;color: rgb(255, 255, 255);background-color: #1f1a3b;" class="btn btn-light" href="/news/{{$item->id}}">قراءة المزيد</a>-->
        </div>
        <button onclick="redirectToNews({{$item->id}})" class="btn btn-link" style="    color: rgb(255, 255, 255);
    background-color: #1f1a3b;">قراءة المزيد</buuton>
      </div>

      @endforeach
    </div>
    <div class="button-next">
      <i class="fas fa-chevron-left"></i>
    </div>
    <div class="button-prev">
      <i class="fas fa-chevron-right"></i>
    </div>
    <!--<div class="swiper-pagination"></div>-->
  </div>
  
  <!-- بداية من نحن  -->
  <section class="who">
    <div class="container">
      <div class="bullet">
        <div class="title">
          <h2>{{$aboutus->about_title}}</h2>
        </div>
        <div class="crile">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="content-who">
        <div class="img-who">
          <img src="{{('front/images/who-are-you/img01.jpg')}}" alt="" />
        </div>
        <div class="text">
          <p>
            {!! $aboutus->about !!}
          </p>
{{--           <div class="link gn-link">
            <i class="far fa-arrow-alt-circle-left"></i>
            <a href="#">شاهد المزيد</a>
          </div> --}}
        </div>
      </div>
    </div>
  </section>
  <!-- نهاية من نحن  -->

  <!-- بداية خدمات الشركة  -->
  <section class="serviecs">
    <div class="container">
      <div class="bullet">
        <div class="title">
          <h2> معلومات عامة</h2>
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
        <div class="item">
          <i class="fas fa-star"></i>
          <h3>  الرؤية</h3>
          <p>
            {!! $msg->vision !!}
          </p>
        </div>
        <div class="item">
          <i class="fas fa-star"></i>
          <h3>  الرسالة</h3>
          <p>
            {!! $msg->message !!}
          </p>

        </div>
        <div class="item">
          <i class="fas fa-star"></i>
          <h3>  الاهداف</h3>
          <p>
              <?php $g=1 ?>
            @foreach ($goals as $item)


            <span>             {{$g++}}-  {{$item->title}}  </span>


            @endforeach
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- نهاية خدمات الشركة  -->
  <!-- بداية المدونة  -->
  <div class="blog">
    <div class="container">
      <div class="bullet">
        <div class="title">
          <h2>الفعاليات</h2>
        </div>
        <div class="crile">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="content-blog">
          @foreach ($actmain as $item)


        <div class="item">
          <div class="img-blog">
            <a href="/activity-main/{{$item->id}}"><img src="storage/{{$item->image}}" alt=""></a>
          </div>
          <div class="text">
            <div class="bullet sub">
              <div class="title">
                <h2>{{$item->title}}</h2>
              </div>
              <div class="crile">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <p>
                {!! $item->description !!}
            </p>
            <div class="bottom-desc">
              <div class="day">
                <i class="fas fa-clock"></i>
                <span>{{$item->created_at}}</span>
              </div>
              <div class="link gn-link">
                <i class="far fa-arrow-alt-circle-left"></i>
                <a href="/activity-main/{{$item->id}}"> المزيد</a>
              </div>
            </div>
          </div>
        </div>

        @endforeach

      </div>
      <div class="link gn-link bottom">
        <i class="far fa-arrow-alt-circle-left"></i>
        <a class="null" href="/activities">شاهد الكل</a>
      </div>
    </div>
  </div>
  <!-- نهاية المدونة   -->
  <!-- بداية شركاء النجاح -->
   <div class="company">
    <div class="container">
      <div class="bullet">
        <div class="title">
          <h2>شركاء النجاح</h2>
        </div>
        <div class="crile">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="partners-sec">
        <div class="swiper partners">
          <div class="swiper-wrapper">

            @foreach ($partners as $item)


            <div class="swiper-slide" style="margin-left: 13px;">
              <div class="txt-partners">
                <img src="/storage/{{$item->image}}" alt="">

              </div>
            </div>

            @endforeach
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
  </div>
   </div>
      <!-- Counter Section -->
      <div class="counter-sec">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="tit-counter">
                <h2>أخر الإحصائيات</h2>
              </div>
            </div>
          </div>
          <div class="boxes-sec">
            <div class="row">
              <div class="col-6 col-md-3">
                <div class="box-sec">
                  <h3>99+</h3>
                  <h4>عضويات فعال</h4>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="box-sec">
                  <h3>99+</h3>
                  <h4>عضويات متطوع</h4>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="box-sec">
                  <h3>99+</h3>
                  <h4>عضويات مساهم</h4>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="box-sec">
                  <h3>99+</h3>
                  <h4>عضويات طالب</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Devs Section -->
   <div class="company">
    <div class="container">
      <div class="bullet">
        <div class="title">
          <h2> الداعمين</h2>
        </div>
        <div class="crile">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="partners-sec">
        <div class="swiper partners">
          <div class="swiper-wrapper">
              @foreach($supporters as $item)
            <div class="swiper-slide" style="margin-left: 13px;">
              <div class="txt-partners">
                <img src="storage/{{$item->image}}" alt="">

              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
  </div>
   </div>
  <!-- نهاية شركاء النجاح -->
@endsection
<script>
    function redirectToNews(id){
        console.log(id)
        window.location.href="/news/"+id;    
    }
</script>
