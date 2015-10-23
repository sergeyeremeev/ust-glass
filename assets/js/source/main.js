(function($) {
	'use strict';
	
	var i,
		galleryOuterContainer,
		galleryInnerContainer,
		repetitions,
		leftOutImage,
		videosLength;
		
	// wrap videos and text underneath in containers
	for (i = 0, videosLength = $('.videos-container').children().length; i < videosLength / 2; i++) {
		$('.videos-container').children('p:first-of-type').prevAll('.wp-video').addBack().wrapAll('<div class="video-gallery-item"/>');
	}
	
	// carousel for locations, videos and testimonials
	$(document).ready(function () {
		if ($(document).width() > 1024) {
			$('.locations-container').owlCarousel({
				margin: 20,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.videos-container').owlCarousel({
				margin: 20,
				items: 3,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.articles-container').owlCarousel({
				margin: 20,
				items: 3,
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
			
			$('.videos-container').owlCarousel({
				margin: 20,
				items: 2,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.articles-container').owlCarousel({
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
			
			$('.videos-container').owlCarousel({
				margin: 20,
				items: 1,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.articles-container').owlCarousel({
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
	
	$(window).on('resize', function () {
        if ($(document).width() > 1024) {
            if ($('.locations-container').find('.owl-stage').length !== 0) {
                $('.locations-container').data('owlCarousel').destroy();
                $('.locations-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.locations-container').find('.owl-stage-outer').children().unwrap();
                $('.locations-container').removeData();
            }

            if ($('.videos-container').find('.owl-stage').length !== 0) {
                $('.videos-container').data('owlCarousel').destroy();
                $('.videos-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.videos-container').find('.owl-stage-outer').children().unwrap();
                $('.videos-container').removeData();
            }
			
			if ($('.articles-container').find('.owl-stage').length !== 0) {
                $('.articles-container').data('owlCarousel').destroy();
                $('.articles-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.articles-container').find('.owl-stage-outer').children().unwrap();
                $('.articles-container').removeData();
            }

            $('.locations-container').owlCarousel({
				margin: 20,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.videos-container').owlCarousel({
				margin: 20,
				items: 3,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.articles-container').owlCarousel({
				margin: 20,
				items: 3,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
        } else if ($(document).width() >= 768) {
            if ($('.locations-container').find('.owl-stage').length !== 0) {
                $('.locations-container').data('owlCarousel').destroy();
                $('.locations-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.locations-container').find('.owl-stage-outer').children().unwrap();
                $('.locations-container').removeData();
            }

            if ($('.videos-container').find('.owl-stage').length !== 0) {
                $('.videos-container').data('owlCarousel').destroy();
                $('.videos-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.videos-container').find('.owl-stage-outer').children().unwrap();
                $('.videos-container').removeData();
            }
			
			if ($('.articles-container').find('.owl-stage').length !== 0) {
                $('.articles-container').data('owlCarousel').destroy();
                $('.articles-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.articles-container').find('.owl-stage-outer').children().unwrap();
                $('.articles-container').removeData();
            }
			
			$('.locations-container').owlCarousel({
				margin: 20,
				items: 2,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.videos-container').owlCarousel({
				margin: 20,
				items: 2,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.articles-container').owlCarousel({
				margin: 20,
				items: 2,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
        } else {
            if ($('.locations-container').find('.owl-stage').length !== 0) {
                $('.locations-container').data('owlCarousel').destroy();
                $('.locations-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.locations-container').find('.owl-stage-outer').children().unwrap();
                $('.locations-container').removeData();
            }

            if ($('.videos-container').find('.owl-stage').length !== 0) {
                $('.videos-container').data('owlCarousel').destroy();
                $('.videos-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.videos-container').find('.owl-stage-outer').children().unwrap();
                $('.videos-container').removeData();
            }
			
			if ($('.articles-container').find('.owl-stage').length !== 0) {
                $('.articles-container').data('owlCarousel').destroy();
                $('.articles-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.articles-container').find('.owl-stage-outer').children().unwrap();
                $('.articles-container').removeData();
            }

            $('.locations-container').owlCarousel({
				items: 1,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.videos-container').owlCarousel({
				items: 1,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
			
			$('.articles-container').owlCarousel({
				items: 1,
				loop: true,
				nav: true,
				navText: ['&lt','&gt']
			});
        }
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
	
	$('.get-a-quote').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
        	scrollTop: $('.quote-section').offset().top - 105
		}, 'slow');
	});
})(jQuery);
