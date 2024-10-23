/*!
* PT. IMAJIKU CIPTA MEDIA
* Copyright 2024 IMAJIKU.
*/


$(document).ready(function() {

	// show more
	let loadMoreBtnShowMore1 = document.querySelector("#load-more-btn1");
	let currentItemShowMore1 = 3;

	loadMoreBtnShowMore1.onclick = () => {
		let boxes = [...document.querySelectorAll('.content-box[data-variant="card-show-more-variant-1"] .card-show-more-card .card-box')];

		for (var i = currentItemShowMore1; i < currentItemShowMore1 + 3 && i < boxes.length; i++) {
			boxes[i].style.display = "inline-block";
		}

		currentItemShowMore1 += 3;

		if (currentItemShowMore1 >= boxes.length) {
			loadMoreBtnShowMore1.style.display = "none";
		}
	};


	// section promo js
	const swiper = new Swiper('.swiperPromo', {
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
	document.addEventListener('keydown', function (event) {
		if (event.key === 'ArrowRight') {
			swiper.slideNext();
		} else if (event.key === 'ArrowLeft') {
			swiper.slidePrev();
		}
	});
	const promotionImages = document.querySelectorAll('.promotion-img');
	promotionImages.forEach(img => {
		img.addEventListener('click', function (event) {
			const imgRect = img.getBoundingClientRect();
			const clickX = event.clientX - imgRect.left;

			if (clickX < imgRect.width / 2) {
				swiper.slideNext();
			} else {
				swiper.slidePrev();
			}
		});
	});

		let swiperAllUnits = new Swiper('.swiperAllUnits', {
			loop: true,
			spaceBetween: 30,
			slidesPerView: 3,
			centeredSlides: false,
			hashNavigation: {
				watchState: true,
			},
			navigation: {
				nextEl: '.swiper-button-next-all',
				prevEl: '.swiper-button-prev-all',
			},
			breakpoints: {
				// width is <= 850px
				1200: {
					slidesPerView: 3,
					spaceBetweenSlides: 50,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
				766: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				576: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				250: {
					slidesPerView: 1,
					spaceBetween: 30,
				},
			},
		});

		let swiperRentUnits = new Swiper('.swiperRentUnits', {
			loop: true,
			spaceBetween: 30,
			slidesPerView: 3,
			centeredSlides: false,
			hashNavigation: {
				watchState: true,
			},
			navigation: {
				nextEl: '.swiper-button-next-rent',
				prevEl: '.swiper-button-prev-rent',
			},
			breakpoints: {
				// width is <= 850px
				1200: {
					slidesPerView: 3,
					spaceBetweenSlides: 50,
				},
				992: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				766: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				567: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				250: {
					slidesPerView: 1,
					spaceBetween: 30,
				},
			},
		});

		let swiperBuyUnits = new Swiper('.swiperBuyUnits', {
			loop: true,
			spaceBetween: 50,
			slidesPerView: 3,
			centeredSlides: false,
			hashNavigation: {
				watchState: true,
			},
			navigation: {
				nextEl: '.swiper-button-next-buy',
				prevEl: '.swiper-button-prev-buy',
			},
			breakpoints: {
				// width is <= 850px
				1200: {
					slidesPerView: 3,
					spaceBetweenSlides: 50,
				},
				992: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				766: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				567: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				250: {
					slidesPerView: 1,
					spaceBetween: 30,
				},
			},
		});
	/* ---------- xxxx ----------- */

});