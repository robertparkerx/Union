<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 7/1/2017
 * Time: 7:05 AM
 */
/**
 * Register menus
 */
function union_menus() {
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', '_union' ),
		'menu-2' => esc_html__( 'Secondary', '_union' ),
		'social-1' => esc_html__( 'Social', '_union' ),
	) );
}
add_action('after_setup_theme', 'union_menus');

/**
 * Add active class to current-menu-item
 */
function material_active_class($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}
add_filter('nav_menu_css_class' , 'material_active_class' , 10 , 2);