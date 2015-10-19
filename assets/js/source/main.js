(function($) {
	'use strict';
	
	var i,
		galleryOuterContainer,
		galleryInnerContainer,
		repetitions,
		leftOutImage;
	
	// carousel for locations and testimonials
	$(document).ready(function () {
		$('.locations-container').owlCarousel({
			margin: 20,
			loop: true,
			nav: true,
			navText: ['&lt','&gt']
		});
		
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
})(jQuery);
