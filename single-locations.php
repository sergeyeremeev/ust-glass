<?php
/**
 * Template Name: Location Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _mbbasetheme
 */
 
 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="top-banner product-banner">
				</div>
				
				<div class="breadcrumbs">
					<div class="container">
						<a class="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'Home', '_mbbasetheme' ); ?></a><a class="current" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				
				<div class="location-page-title"><h2><?php _e( 'Products', '_mbbasetheme' ); ?></h2></div>
				<div class="location-map">
					<?php the_field('map'); ?>
				</div>
				<div class="location-data">
					<h1><?php the_title(); ?></h1>
					<div class="location-info">
						<div class="location-info-single">
							<div class="icon-container">
								<i class="location-icon"></i>
							</div>
							<div class="text-container">
								<span><?php _e( 'Location', '_mbbasetheme' ); ?></span>
								<span><?php the_field('address_line_2'); ?></span>
								<span><?php the_field('time'); ?></span>
							</div>
						</div>
						<div class="location-info-single">
							<div class="icon-container">
								<i class="clock-icon"></i>
							</div>
							<div class="text-container">
								<span><?php _e( 'Hours of Operation', '_mbbasetheme' ); ?></span>
								<span><?php the_field('hours_1'); ?></span>
								<span><?php the_field('hours_2'); ?></span>
							</div>
						</div>
						<div class="location-info-single">
							<div class="icon-container">
								<i class="phone-icon"></i>
							</div>
							<div class="text-container">
								<span><?php _e( 'Contact Us', '_mbbasetheme' ); ?></span>
								<span><?php the_field('phone_1'); ?></span>
								<span><?php the_field('phone_2'); ?></span>
							</div>
						</div>
						<div class="location-info-single">
							<div class="icon-container">
								<i class="email-icon"></i>
							</div>
							<div class="text-container">
								<span><?php _e( 'Email Us', '_mbbasetheme' ); ?></span>
								<span><?php the_field('email_1'); ?></span>
								<span><?php the_field('email_2'); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="location-mobile-map">
					<?php the_field('mobile_map'); ?>
				</div>
				<div class="location-content">
					<div class="container">
						<h2><?php _e( 'Description', '_mbbasetheme' ); ?></h2>
						<?php the_content(); ?>
					</div>
				</div>
				
				<div class="our-categories">
					<div class="container">
						<h2><?php _e( 'Our Categories', '_mbbasetheme' ); ?></h2>
						<?php the_field('our_categories'); ?>
					</div>
				</div>
				
				<div class="location-video">
					<div class="container">
						<h2><?php _e( 'What our customers are saying', '_mbbasetheme' ); ?></h2>
						<?php the_field('video'); ?>
					</div>
				</div>
				
				<div class="quote-section">
					<div class="container">
						<h2><?php _e( 'Get a Quote', '_mbbasetheme' ); ?></h2>
						<i class="icon-envelope"></i>
						<?php echo do_shortcode('[contact-form-7 id="77" title="Get a quote"]'); ?>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
