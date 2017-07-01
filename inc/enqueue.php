<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 7/1/2017
 * Time: 7:03 AM
 */
/**
 * Enqueue scripts and styles.
 */
function union_scripts() {
	wp_enqueue_style( '_union-style', get_template_directory_uri() . '/css/union.min.css', '', '0.0.1' );
	wp_enqueue_style( '_union-custom-style', get_template_directory_uri() . '/css/custom.css', '', '0.0.1' );
	wp_enqueue_script( '_union-materialize-script', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'), '6.3.1', true );
	wp_enqueue_script( '_union-theme-script', get_template_directory_uri() . '/js/theme.js', array('jquery'), '0.0.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'union_scripts' );