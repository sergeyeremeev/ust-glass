<?php
/**
 * Template Name: Video Page
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

				<div class="top-banner video-banner">
				</div>
				
				<div class="video-page-title"><h1><?php _e( 'Video', '_mbbasetheme' ); ?></h1></div>
				
				<div class="breadcrumbs">
					<div class="container">
						<a class="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'Home', '_mbbasetheme' ); ?></a><a class="current" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				
				<div class="video-page-content">
					<div class="container">
						<?php the_content(); ?>
					</div>
				</div>
				
				<div class="related-videos">
					<div class="container">
						<h2><?php _e( 'Related Videos', '_mbbasetheme' ); ?></h2>
						<div class="videos-container">
							<?php the_field('related_videos'); ?>
						</div>
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
