
document.addEventListener('DOMContentLoaded', function () {
    var swiperCatalog = new Swiper(".Swipercatalog", {
        observer: true,
        observeSlideChildren: true,
        observeParents: true,
        spaceBetween: 30,
        on: {
            slideChangeTransitionEnd: function () {
                setTimeout(() => {
                    AOS.refresh();
                }, 500);
            }
        },
        hashNavigation: {
            watchState: true,
        },
        pagination: {
            el: ".swiper-pagination-hero",
            clickable: true,
        },
        autoplay: {
            delay: 10000,
        },
    });
    AOS.init({
        once: false, // Optional: Set to false to animate every time the element is scrolled into view
    });
});
