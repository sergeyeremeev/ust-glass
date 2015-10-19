<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-main">
			<div class="container">
				<div class="col-1">
					<h3><?php _e( 'Ust Glass', '_mbbasetheme' ); ?></h3>
					<?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>
				</div>
				<div class="col-2">
					<h3><?php _e( 'Other Links', '_mbbasetheme' ); ?></h3>
					<?php wp_nav_menu( array( 'theme_location' => 'footer2' ) ); ?>
				</div>
				<div class="col-3">
					<h3><?php _e( 'Newsletter Signup', '_mbbasetheme' ); ?></h3>
					<i class="mail"></i>
					<p>Please signup our newsletter to get updates from our latest products daily/weekly</p>
					<?php echo do_shortcode('[contact-form-7 id="109" title="Footer Form"]'); ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<p class="copyright"><span class="uppercase">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?>.</span> All Rights Reserved.</p>
				<div class="footer-social">
					<ul>
						<?php
							$args = array('post_type' => 'social');
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
						?>
							<li><a class="fb" href="<?php the_field('facebook'); ?>"></a></li>
							<li><a class="twit" href="<?php the_field('twitter'); ?>"></a></li>
							<li><a class="google" href="<?php the_field('google-plus'); ?>"></a></li>
							<li><a class="youtube" href="<?php the_field('youtube'); ?>"></a></li>
						<?php
							endwhile;
							wp_reset_postdata();
						?>
					</ul>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
