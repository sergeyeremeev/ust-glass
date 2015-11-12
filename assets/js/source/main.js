(function($) {
	'use strict';
	
	var i,
		galleryOuterContainer,
		galleryInnerContainer,
		repetitions,
		leftOutImage,
		videosLength,
		videoClickTarget,
		bannerHeight,
		pageContainer;
		
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
			
			$('.video-section-container').owlCarousel({
				margin: 20,
				items: 4,
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
			
			$('.video-section-container').owlCarousel({
				margin: 20,
				items: 3,
				nav: true,
				loop: true,
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
			
			$('.video-section-container').owlCarousel({
				items: 1,
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
			
			if ($('.video-section-container').find('.owl-stage').length !== 0) {
                $('.video-section-container').data('owlCarousel').destroy();
                $('.video-section-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.video-section-container').find('.owl-stage-outer').children().unwrap();
                $('.video-section-container').removeData();
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
			
			$('.video-section-container').owlCarousel({
				margin: 20,
				items: 4,
				nav: true,
				loop: true,
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
			
			if ($('.video-section-container').find('.owl-stage').length !== 0) {
                $('.video-section-container').data('owlCarousel').destroy();
                $('.video-section-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.video-section-container').find('.owl-stage-outer').children().unwrap();
                $('.video-section-container').removeData();
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
			
			$('.video-section-container').owlCarousel({
				margin: 20,
				items: 3,
				nav: true,
				loop: true,
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
			
			if ($('.video-section-container').find('.owl-stage').length !== 0) {
                $('.video-section-container').data('owlCarousel').destroy();
                $('.video-section-container').removeClass('owl-carousel owl-loaded owl-desktop');
                $('.video-section-container').find('.owl-stage-outer').children().unwrap();
                $('.video-section-container').removeData();
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
			
			$('.video-section-container').owlCarousel({
				items: 1,
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
		$('body').toggleClass('menu-toggled');
	});
	
	$('.get-a-quote').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
        	scrollTop: $('.quote-section').offset().top - 105
		}, 'slow');
	});
	
	$('.request-quote').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
        	scrollTop: $('.quote-section').offset().top - 104
		}, 'slow');
	});
	
	// homepage video section functionality
	$(document).ready(function () {
		$('.video-section-container').find('.owl-item.active').first().find('.wp-video').clone().appendTo('.video-large');
	});
	
	$(document).on('click', function (e) {
		if ($(document).width() >= 768) {
			videoClickTarget = e.target;
			if ($('.video-section-container').find('video').is(videoClickTarget)) {
				$('.video-large').find('video').attr('src', $(videoClickTarget).attr('src')); 
				$('.video-large').find('video').find('source').attr('src', $(videoClickTarget).find('source').attr('src')); 
			}
		}
	});
	
	
	// homepage sticky header functionality
	/*if ($('body').hasClass('home')) {
		bannerHeight = $('.home-banner').height();
		$(document).on('scroll', function () {
			if ($(document).width() >= 768) {
				if ($(window).scrollTop() > bannerHeight + 184) {
					$('body').addClass("sticky-header");
				} else {
					$('body').removeClass("sticky-header");
				}
			} else {
				if ($(window).scrollTop() > bannerHeight + 72) {
					$('body').addClass("sticky-header");
				} else {
					$('body').removeClass("sticky-header");
				}
			}
		});
	}*/
	
	// parallax header
	$(document).ready(function () {

		var $window = $(window);
		
		if ($('body').hasClass('home')) {
			$('#masthead').each(function(){
				var $bgobj = $(this); // assigning the object
				$(window).scroll(function() {
					if ($(document).width() >= 768) {
						if ($window.scrollTop() <= 680) {
							$('body').removeClass("sticky-header");
							var yPos = -($window.scrollTop() / $bgobj.data('speed'));
							// Put together our final background position
							var coords = '50% '+ yPos + 'px';
							var contentCoords = -yPos + 'px';
							// Move the background
							$bgobj.css({ backgroundPosition: coords });
							$('.header-content-wrapper').css('top', contentCoords);
						} else {
							$('.header-content-wrapper').css('top', '0px');
							$('body').addClass("sticky-header");
						}
					} else {
						if ($window.scrollTop() <= 390) {
							$('body').removeClass("sticky-header");
							var yPos = -($window.scrollTop() / $bgobj.data('speed'));
							// Put together our final background position
							var coords = '50% '+ yPos + 'px';
							var contentCoords = -yPos + 'px';
							// Move the background
							$bgobj.css({ backgroundPosition: coords });
							$('.header-content-wrapper').css('top', contentCoords);
						} else {
							$('.header-content-wrapper').css('top', '0px');
							$('body').addClass("sticky-header");
						}
					}
				});
			});
		}
	});
	
})(jQuery);
