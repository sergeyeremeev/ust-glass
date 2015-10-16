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
			<div class="col-1">
				<h3><?php _e( 'Ust Glass', '_mbbasetheme' ); ?></h3>
				<?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>
			</div>
			<div class="col-2">
				<h3><?php _e( 'Other Links', '_mbbasetheme' ); ?></h3>
				<?php wp_nav_menu( array( 'theme_location' => 'footer1' ) ); ?>
			</div>
			<div class="col-3">
				<h3><?php _e( 'Other Links', '_mbbasetheme' ); ?><i class="mail"></i></h3>
				<p>Please signup our newsletter to get updates from our latest products daily/weekly</p>
			</div>
		</div>
		<div class="footer-bottom">
			<p class="copyright"><span class="uppercase">&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?>.</span> All Rights Reserved.</p>
			<div class="footer-social">
				<ul>
					<?php
						$args = array('post_type' => 'social');
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<li><a href="<?php the_field('facebook'); ?>"></a></li>
						<li><a href="<?php the_field('twitter'); ?>"></a></li>
						<li><a href="<?php the_field('google-plus'); ?>"></a></li>
						<li><a href="<?php the_field('youtube'); ?>"></a></li>
					<?php
						endwhile;
						wp_reset_postdata();
					?>
				</ul>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
