/*!
* PT. IMAJIKU CIPTA MEDIA
* Copyright 2024 IMAJIKU.
*/


$(document).ready(function() {
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