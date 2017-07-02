<?php
/**
 * _union functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _union
 */
/**
 * ReduxFramework
 */
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/ReduxFramework/ReduxCore/framework.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/redux-config.php' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/redux-config.php' );
}
/**
 * Theme setup
 */
require get_template_directory() . '/inc/setup.php';
/**
 * Register widgets
 */
require get_template_directory() . '/inc/widgets.php';
/**
 * materialize navwalker
 */
require get_template_directory() . '/inc/materialize-navwalker.php';
/**
 * Register menus
 */
require get_template_directory() . '/inc/menus.php';
/**
 * Load functions to secure your WP install.
 */
require get_template_directory() . '/inc/security.php';
/**
 * Enqueue scripts & styles
 */
require get_template_directory() . '/inc/enqueue.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
