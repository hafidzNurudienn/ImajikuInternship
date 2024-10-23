var swiperLeft = new Swiper('.swiper-left', {
    freeMode: true,
    loop: true,
    slidesPerView: 6,
    centeredSlides:true, 
    speed: 3000,
    allowTouchMove: false,
    disableOnInteraction: false,
    autoplay:{
      delay:0,
    },
    breakpoints: {
      768: {
        slidesPerView: 6,
      },
      480: {
        slidesPerView: 4,
      },
      320: {
        slidesPerView: 3,
      },
    },
  });
      
  var swiperRight = new Swiper('.swiper-right', {
    freeMode: true,
    loop: true,
    slidesPerView: 6,
    centeredSlides:true, 
    speed: 3000,
    allowTouchMove: false,
    disableOnInteraction: false,
    autoplay:{
      reverseDirection:true,
      delay:0,
    },
    breakpoints: {
      768: {
        slidesPerView: 6,
      },
      480: {
        slidesPerView: 4,
      },
      320: {
        slidesPerView: 3,
      },
    },
  });
  