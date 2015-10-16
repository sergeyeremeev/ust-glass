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
