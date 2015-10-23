<?php
/**
 * @package _mbbasetheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-container">
		<div class="post-image">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(array(360, 200)); ?>
			</a>
		</div>

		<div class="post-category">
			<?php the_category(); ?>
		</div>
		
		<div class="post-content">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_excerpt(); ?>
            <a class="read-more" href="<?php the_permalink(); ?>">read more</a>
		</div>
	</div>
</article><!-- #post-## -->
