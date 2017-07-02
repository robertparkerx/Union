<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 7/1/2017
 * Time: 7:02 AM
 */
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function union_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', '_union' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', '_union' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Blog', '_union' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', '_union' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'union_widgets_init' );