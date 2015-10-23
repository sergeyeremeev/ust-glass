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
	
	<div class="related-articles">
		<div class="container">
			<h3>Related posts</h3>
			<div class="articles-container">
				<?php
					global $post;
					$cat_ID=array();
					$categories = get_the_category(); //get all categories for this post
					foreach($categories as $category) {
						array_push($cat_ID,$category->cat_ID);
					}
					$args = array(
					'orderby' => 'date',
					'order' => 'DESC',
						'post_type' => 'post',
						'numberposts' => 8,
						'post__not_in' => array($post->ID),
						'category__in' => $cat_ID
					); // post__not_in will exclude the post we are displaying
						$cat_posts = get_posts($args);
					if ($cat_posts) {
					foreach ($cat_posts as $cat_post) {
						?>
						<article>
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
									<?php my_excerpt(12); ?>
									<a class="read-more" href="<?php the_permalink(); ?>">read more</a>
								</div>
							</div>
						</article>
						<?php
						}
					}
				?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
