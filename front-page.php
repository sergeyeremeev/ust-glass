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
					<?php the_field('who_we_are'); ?>
				</div>
				
				<div class="locations-section">
					<h2><?php _e( 'Our Products', '_mbbasetheme' ); ?></h2>
					<div class="locations-container">
						<?php
							$args = array('post_type' => 'locations');
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>
							<div class="location-single">
								<div class="location-img">
									<img src="<?php the_field('image'); ?>" alt="<?php the_field('name'); ?>">
								</div>
								<h2><?php the_field('name'); ?></h2>
								<p class="description">
									<?php the_field('description'); ?>
								</p>
								<a href="#" class="show-all-products">
									<?php the_field('button-text'); ?>
								</a>
							</div><!-- .location-single -->
						<?php
							endwhile;
							wp_reset_postdata();
						?>
					</div><!-- .locations-container -->
				</div><!-- .locations-section -->
				
				<div class="home-gallery">
					<?php the_field('home-gallery'); ?>
				</div>
				
				<div class="testimonials-section">
					<h2><?php _e( 'Testimonials', '_mbbasetheme' ); ?></h2>
				</div>
				
				<div class="videos-section">
					<h2><?php _e( 'Videos', '_mbbasetheme' ); ?></h2>
				</div>
				
				<div class="quote-section">
					
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
