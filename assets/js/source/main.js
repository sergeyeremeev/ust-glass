(function($) {
	'use strict';
	
	var i,
		galleryOuterContainer,
		galleryInnerContainer,
		repetitions,
		leftOutImage;
	
	// carousel for locations and testimonials
	$(document).ready(function () {
		if ($(document).width() > 1024) {
			$('.locations-container').owlCarousel({
				margin: 20,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
		} else if ($(document).width() >= 768) {
			$('.locations-container').owlCarousel({
				margin: 20,
				items: 2,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
		} else {
			$('.locations-container').owlCarousel({
				items: 1,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
		}
		
		$('.testimonials-container').owlCarousel({
			items: 1,
			nav: true,
			navText: ['&lt','&gt']
		});
	});
	
	// split home gallery images into 2 rows and initialize carousel for it
	galleryOuterContainer = $('.home-gallery');
	galleryInnerContainer = galleryOuterContainer.children('.gallery');
	repetitions = Math.ceil(galleryInnerContainer.children('.gallery-item').length / 2);
	for (i = 0; i < repetitions; i++) {
		galleryInnerContainer.children('.gallery-item:nth-of-type(2)').prevAll('.gallery-item').addBack().wrapAll('<div class="image-col"/>');
	}
	leftOutImage = galleryInnerContainer.children('.gallery-item');
	if (leftOutImage.length > 0) {
		leftOutImage.wrap('<div class="image-col"/>');
	}
	
	galleryInnerContainer.width(galleryOuterContainer.width());
	
	$(document).ready(function () {
		galleryInnerContainer.owlCarousel({
			autoWidth: true
		});
	});
	
	// toggle search on mobile
	$(document).on('click', '.toggle-search', function () {
		$(this).next('.search-form').toggle();
	});
	
	// menu toggle
	$(document).on('click', '.menu-toggle', function () {
		$('.header-bottom').toggleClass('hidden');
		$('.header-top').toggleClass('shifted');
	});
})(jQuery);
