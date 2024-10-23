/*!
* PT. IMAJIKU CIPTA MEDIA
* Copyright 2024 IMAJIKU.
*/


$(document).ready(function() {

	let loadMoreBtn2 = document.querySelector("#load-more-btn2");
	let currentItem1 = 4;

	loadMoreBtn2.onclick = () => {
		let boxes = [...document.querySelectorAll('.content-box[data-variant="card-show-more-variant-2"] .card-show-more-card .card-box')];

		for (var i = currentItem1; i < currentItem1 + 4 && i < boxes.length; i++) {
			boxes[i].style.display = "inline-block";
		}

		currentItem1 += 4;

		if (currentItem1 >= boxes.length) {
			loadMoreBtn2.style.display = "none";
		}
	};



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

	/* ---------- xxxx ----------- */

});