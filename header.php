<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_mbbasetheme' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="header-top">
            <div class="container">
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <button class="menu-toggle"><span></span><span></span><span></span></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                    <div class="header-social">
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
                </nav><!-- #site-navigation -->
            </div>
        </div><!-- .header-top -->
        
        <div class="header-bottom">
            <div class="container">
                <div class="site-branding">
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="logo"></span><?php bloginfo( 'name' ); ?></a></h1>
                </div>
                <div class="header-search">
                    <div class="toggle-search">
                    </div>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div><!-- .header-bottom -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
