const swiperCardSliderVariant2 = new Swiper('.swiper-card-slider-variant-2', {
    loop: true,
    slidesPerView: 1,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        
    },
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
    },
});
