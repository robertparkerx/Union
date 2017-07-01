<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 7/1/2017
 * Time: 7:04 AM
 */
/*
Removes the generator tag with WP version numbers.
*/
function no_generator() {
	return '';
}
add_filter( 'the_generator', 'no_generator' );
/*
Clean up wp_head() from unused or unsecured stuff
*/
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );