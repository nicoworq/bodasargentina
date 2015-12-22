<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BodasArgentinas
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">


            <header id="masthead" class="site-header" role="banner">
                <div class="container">

                    <div class="col-md-12">

                        <a id="logo" href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo-bodas-argentinas.png" alt="Bodas Argentinas"/></a>

                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'bodasargentinas'); ?></button>
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class'=>'nav-menu')); ?>
                        </nav><!-- #site-navigation -->
                    </div>

                </div>


            </header><!-- #masthead -->

            <div id="content" class="site-content">
