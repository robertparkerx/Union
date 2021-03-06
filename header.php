<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _union
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="hide-on-large-only hide-on-med-and-down skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_union' ); ?></a>

    <header id="masthead" class="site-header">
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo"><?php bloginfo( 'name' ); ?></a>

	        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'container' => '', 'menu_class' => 'right hide-on-med-and-down', 'walker' => new Materialize_Walker_Nav_Menu() ) ); ?>

	        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'nav-mobile', 'container' => '', 'menu_class' => 'sidenav', 'walker' => new Materialize_Walker_Nav_Menu() ) ); ?>
			
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    </header>

<?php if(is_page() || is_single()) :
    if(has_post_thumbnail()) :
        get_template_part( 'template-parts/content', 'banner' );
    endif;
endif; ?>

	<div id="content" class="container site-content">
        <div class="section">