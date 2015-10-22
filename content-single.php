<?php
/**
 * @package _mbbasetheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="top-banner page-banner"></div>
			
	<div class="post-title">
		<h2><?php _e( 'Helpful Articles', '_mbbasetheme' ); ?></h2>
	</div>
			
	<div class="breadcrumbs">
		<div class="container">
			<a class="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'Home', '_mbbasetheme' ); ?></a><a class="blog" href="<?php echo get_page_link(11); ?>"><?php _e( 'Blog', '_mbbasetheme' ); ?></a><a class="current" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</div>
	</div>

	<div class="post-page-content">
		<div class="container">
			<div class="post-image">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="post-category">
				<?php the_category(); ?>
			</div>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
