const swiper = new Swiper('.swiper', {
    loop: true,
    slidesPerView: 1,
    centeredSlides: true,
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false
    // },
    
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 5,
        },
    },
});
document.addEventListener('keydown', function(event) {
    if (event.key === 'ArrowRight') {
        swiper.slideNext(); 
    } else if (event.key === 'ArrowLeft') {
        swiper.slidePrev();
    }
});
const promotionImages = document.querySelectorAll('.promotion-img');
promotionImages.forEach(img => {
    img.addEventListener('click', function(event) {
        const imgRect = img.getBoundingClientRect();
        const clickX = event.clientX - imgRect.left;

        if (clickX < imgRect.width / 2) {
            swiper.slideNext(); 
        } else {
            swiper.slidePrev(); 
        }
    });
});