import Swiper, { Pagination, Navigation } from 'swiper';
import 'swiper/css';
import lozad from 'lozad';

import { Fancybox } from '@fancyapps/ui';

import AOS from 'aos';
AOS.init();
// import '@fancyapps/ui/dist/fancybox.css';

const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();

const testo_swiper = new Swiper('.testimonial-swiper', {
	modules: [Pagination],
	autoplay: {
		delay: 5000,
	},
	spaceBetween: 40,
	loop: true,
	slidesPerView: 1,
	centeredSlides: true,
	preventClicks: false,
	preventClicksPropagation: false,
	parallax: true,
	grabCursor: true,
	pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
	},
});

const gal_swiper = new Swiper('.mini-gallery', {
	modules: [Navigation],
	autoplay: {
		delay: 5000,
	},
	spaceBetween: 15,
	loop: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	preventClicks: false,
	preventClicksPropagation: false,
	height: 400,
	grabCursor: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	// breakpoints: {
	// 	640: {
	// 		slidesPerView: 2,
	// 	},
	// 	1100: {
	// 		slidesPerView: 3,
	// 	},
	// 	1326: {
	// 		slidesPerView: 4,
	// 	},
	// },
});

Fancybox.bind('#gallery a', {
	groupAll: true, // Group all items
	on: {
		ready: (fancybox) => {
			console.log(`fancybox #${fancybox.id} is ready!`);
		},
	},
});

window.onscroll = function () {
	myFunction();
};

// Get the navbar
var navbar = document.getElementById('nav');

// Get the offset position of the navbar
var sticky = navbar.offsetTop + 200;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
	if (window.scrollY >= sticky) {
		navbar.classList.add('sticky');
	} else {
		navbar.classList.remove('sticky');
	}
}

gform.addFilter('gform_datepicker_options_pre_init', function (optionsObj, formId, fieldId) {
	// do stuff
	optionsObj.yearRange = '-0:+2';
	// optionsObj.dateFormat = 'dd/mm/yy';
	optionsObj.minDate = '+2';
	return optionsObj;
});

// Define selector for selecting
// anchor links with the hash
let anchorSelector = 'a[href^="#"]';

// Collect all such anchor links
let anchorList = document.querySelectorAll(anchorSelector);

// Iterate through each of the links
anchorList.forEach((link) => {
	link.onclick = function (e) {
		// Prevent scrolling if the
		// hash value is blank
		e.preventDefault();

		// Get the destination to scroll to
		// using the hash property
		let destination = document.querySelector(this.hash);

		// Scroll to the destination using
		// scrollIntoView method
		destination.scrollIntoView({
			behavior: 'smooth',
		});
	};
});
