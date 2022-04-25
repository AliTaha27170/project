// swiper
var mySwiper = new Swiper('.swiper-container', {
    effect: '',
    loop: true,
    speed: 1000,
    slidesPerView: 1,
    autoplay: {
        delay: 5000,
      },
    navigation: {
       nextEl: '.swiper-button-next',
       prevEl: '.swiper-button-prev'
    },
    pagination: {
       el: '.swiper-pagination',
       type: 'bullets',
       clickable: 'true'
    },
 });

//hero
