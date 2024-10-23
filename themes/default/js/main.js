/*!
* PT. IMAJIKU CIPTA MEDIA
* Copyright 2024 IMAJIKU.
*/


/* ---------- CATEGORY: SCROLL TOP ----------- */

/* header scroll */
window.onscroll = function() {
	
	/* function show hide button backtotop*/
	function scrollFunction() {
		if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) {
			if ($('#backtotop').length) {
				document.getElementById('backtotop').classList.add('active');
			}
		} else {
			if ($('#backtotop').length) {
				document.getElementById('backtotop').classList.remove('active');
			}
		}
	}
	scrollFunction();
}

$(document).ready(function() {

	/* BACKTOTOP ON CLICK BUTTON */
	if ($('#backtotop').length) {
		$('#backtotop').on('click', function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 1200);
		});
	}

	/* MACTH HEIGHT */
	if ($('.mth-1').length) {
		$('.mth-1').matchHeight();
	}
	if ($('.mth-2').length) {
		$('.mth-2').matchHeight();
	}
	if ($('.mth-3').length) {
		$('.mth-3').matchHeight();
	}
	if ($('.mth-4').length) {
		$('.mth-4').matchHeight();
	}
	if ($('.mth-5').length) {
		$('.mth-5').matchHeight();
	}
	if ($('.mth-6').length) {
		$('.mth-6').matchHeight();
	}
	if ($('.mth-7').length) {
		$('.mth-7').matchHeight();
	}
	if ($('.mth-8').length) {
		$('.mth-8').matchHeight();
	}
	if ($('.mth-9').length) {
		$('.mth-9').matchHeight();
	}
	if ($('.mth-10').length) {
		$('.mth-10').matchHeight();
	}


});

var swiperLeft = new Swiper('.swiper-left', {
    freeMode: true,
    loop: true,
    slidesPerView: 6,
    centeredSlides:true, 
    speed: 6000,
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
    speed: 6000,
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
  
