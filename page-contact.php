<?php
/**
 * Template Name: Contact Page
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

				<div class="top-banner contact-banner">
				</div>
				
				<div class="breadcrumbs">
					<div class="container">
						<a class="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'Home', '_mbbasetheme' ); ?></a><a class="current" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				
				<div class="contact-page-title"><h1><?php the_title(); ?></h1></div>
				<div class="contact-map">
					<?php echo do_shortcode('[put_wpgm id=1]'); ?>
				</div>
				<div class="contact-map-mobile">
					<?php echo do_shortcode('[put_wpgm id=2]'); ?>
				</div>
				<div class="contact-locations">
					<div class="container">
						<h2><?php _e( 'Our Locations', '_mbbasetheme' ); ?></h2>
						<i class="location-icon"></i>
						<div class="contact-locations-container">
							<?php
								$args = array('post_type' => 'locations', 'order' => 'asc');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
							?>
								<div class="locations-single">
									<span class="address-1"><?php the_field('address_line_1'); ?></span>
									<span class="address-2"><?php the_field('address_line_2'); ?></span>
									<span class="time"><?php the_field('time'); ?></span>
								</div>
							<?php
								endwhile;
								wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
				
				<div class="contact-content">
					<div class="container">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
						
						<div class="contact-blocks">
							<div class="operation-hours">
								<div class="icon-container">
									<i class="clock"></i>
								</div>
								<span><?php _e( 'Hours of Operation', '_mbbasetheme' ); ?></span>
								<span class="time-1"><?php the_field('hours_1'); ?></span>
								<span class="time-2"><?php the_field('hours_2'); ?></span>
							</div>
							<div class="phone">
								<div class="icon-container">
									<i class="phone"></i>
								</div>
								<span><?php _e( 'Please feel free to call us with any questions or comments at ', '_mbbasetheme' ); ?></span>
								<span class="phone-1"><?php the_field('phone_1'); ?></span>
								<span class="phone-2"><?php the_field('phone_2'); ?></span>
							</div>
							<div class="mail">
								<div class="icon-container">
									<i class="mail"></i>
								</div>
								<span><?php _e( 'Feel free to send email with any questions or comments at ', '_mbbasetheme' ); ?></span>
								<span class="time-1"><?php the_field('email_address'); ?></span>
							</div>
						</div>
					</div>
				</div>
				
				<div class="contact-form">
					<div class="pattern-bg-contact">
						<div class="container">
							<h2><?php _e( 'Send an email', '_mbbasetheme' ); ?></h2>
							<i class="icon-envelope"></i>
							<?php echo do_shortcode('[contact-form-7 id="128" title="Contact Form"]'); ?>
						</div>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
