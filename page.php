<?php
/**
 * The template for displaying all pages.
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
			
				<div class="top-banner page-banner">
				</div>

				<div class="breadcrumbs">
					<div class="container">
						<a class="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'Home', '_mbbasetheme' ); ?></a><a class="current" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				
				<div class="page-content">
					<div class="container">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
