<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="home-banner" style="background: url(<?php the_field('banner_image'); ?>) no-repeat;">
					<div class="container">
						<div class="banner-content">
							<?php the_content(); ?>
							<a href="#" class="request-quote"><?php the_field('button_text'); ?></a>
						</div>
					</div>
				</div>
				
				<div class="home-about">
					<div class="container">
						<?php the_field('who_we_are'); ?>
					</div>
				</div>
				
				<div class="locations-section">
					<div class="container">
						<h2><?php _e( 'Our Products', '_mbbasetheme' ); ?></h2>
						<div class="locations-container">
							<?php
								$args = array('post_type' => 'locations', 'order' => 'asc');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
							?>
								<div class="location-single">
									<div class="location-img">
										<img src="<?php the_field('home_page_image'); ?>" alt="<?php the_title(); ?>">
									</div>
									<h2><?php the_title(); ?></h2>
									<div class="location-description">
										<?php the_field('home_page_description'); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="show-all-products">
										<?php _e( 'Show All Products', '_mbbasetheme' ); ?>
									</a>
								</div><!-- .location-single -->
							<?php
								endwhile;
								wp_reset_postdata();
							?>
						</div><!-- .locations-container -->
					</div>
				</div><!-- .locations-section -->
				
				<div class="home-gallery">
					<?php the_field('home_gallery'); ?>
				</div>
				
				<div class="testimonials-section">
					<div class="container">
						<h2><?php _e( 'Testimonials', '_mbbasetheme' ); ?></h2>
						<div class="testimonials-container">
							<?php
								$args = array('post_type' => 'testimonials');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
							?>
								<div class="testimonial-container">
									<div class="testimonial-content">
										<?php the_content(); ?>
									</div>
									<div class="testimonial-author-image">
										<img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
									</div>
									<div class="testimonial-author-name">
										<?php the_title(); ?>
									</div>
									<div class="testimonial-author-location">
										<?php the_field('location'); ?>
									</div>
								</div>
							<?php
								endwhile;
								wp_reset_postdata();
							?>
						</div>
					</div>
				</div>
				
				<div class="videos-section">
					<div class="container">
						<h2><?php _e( 'Videos', '_mbbasetheme' ); ?></h2>
					</div>
				</div>
				
				<div class="quote-section">
					<div class="pattern-bg">
						<div class="container">
							<h2><?php _e( 'Get a Quote', '_mbbasetheme' ); ?></h2>
							<i class="icon-envelope"></i>
							<?php echo do_shortcode('[contact-form-7 id="77" title="Get a quote"]'); ?>
						</div>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
