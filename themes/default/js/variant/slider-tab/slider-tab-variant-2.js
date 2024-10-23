document.addEventListener('DOMContentLoaded', function () {
    // var swiper = new Swiper(".Swipercatalog", {
    //     loop: true,
    //     spaceBetween: 30,
    //     hashNavigation: {
    //         watchState: true,
    //     },
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     autoplay: {
    //         delay: 8000,
    //     },
    // });

    let swiperRoomFamily = new Swiper(".swiperRoomFamily", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 3,
        centeredSlides: false,
        hashNavigation: {
            watchState: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // width is <= 850px
            1200: {
                slidesPerView:3,
                spaceBetweenSlides:50
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            766: {
                slidesPerView: 2,
                spaceBetween:30
            },
            567: {
                slidesPerView: 2,
                spaceBetween:30
            },
            250:{
                slidesPerView:1,
                spaceBetween:30
            }
           

        }
    });

    let swiperRoomSingle = new Swiper(".swiperRoomSingle", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 3,
        centeredSlides: false,
        hashNavigation: {
            watchState: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // width is <= 850px
            1200: {
                slidesPerView:3,
                spaceBetweenSlides:50
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            766: {
                slidesPerView: 2,
                spaceBetween:30
            },
            567: {
                slidesPerView: 2,
                spaceBetween:30
            },
            320:{
                slidesPerView:1,
                spaceBetween:30
            }
        }
    });

    let swiperRoomCouple = new Swiper(".swiperRoomCouple", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 3,
        centeredSlides: false,
        hashNavigation: {
            watchState: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // width is <= 850px
            1200: {
                slidesPerView:3,
                spaceBetweenSlides:50
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            766: {
                slidesPerView: 2,
                spaceBetween:30
            },
            567: {
                slidesPerView: 2,
                spaceBetween:30
            },
            250:{
                slidesPerView:1,
                spaceBetween:30
            }
        }
    });
});
