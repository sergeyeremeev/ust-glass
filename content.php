<?php
/**
 * @package _mbbasetheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-container">
		<div class="post-image">
			<?php the_post_thumbnail(array(360, 200)); ?>
		</div>

		<div class="post-category">
			<?php the_category(); ?>
		</div>
		
		<div class="post-content">
			<h1><?php the_title(); ?></h1>
			<?php the_excerpt(); ?>
            <a class="read-more" href="<?php the_permalink(); ?>">read more</a>
		</div>
</article><!-- #post-## -->
