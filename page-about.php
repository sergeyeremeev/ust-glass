<?php
/**
 * Template Name: About Page
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

				<div class="top-banner about-banner">
				</div>
				
				<div class="breadcrumbs">
					<div class="container">
						<a class="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'Home', '_mbbasetheme' ); ?></a><a class="current" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				
				<div class="about-us-content">
					<div class="container">
						<div class="about-us-top">
							<div class="left-col">
								<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
								<a href="#" class="get-a-quote">Get a Quote</a>
							</div>
							<div class="right-col">
								<h2><?php _e( 'What our customers are saying.', '_mbbasetheme' ); ?></h2>
								<?php the_field('video'); ?>
							</div>
						</div>
						<div class="about-us-bottom">
							<div class="left-col">
								<h2><?php _e( 'Who We Are?', '_mbbasetheme' ); ?></h2>
								<p><?php the_field('who_we_are'); ?></p>
								<a href="#" class="contact-us">Contact Us</a>
							</div>
							<div class="right-col">
								<h2><?php _e( 'What We Do?', '_mbbasetheme' ); ?></h2>
								<p><?php the_field('what_we_do'); ?></p>
								<a href="#" class="contact-us">Contact Us</a>
							</div>
						</div>
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
