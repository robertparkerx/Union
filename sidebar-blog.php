<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _blend
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="secondary" class="col m12 l4 widget-area" role="complementary" data-sticky-container>
    <div class="sticky" data-sticky data-anchor="content">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
    </div>
</aside><!-- #secondary -->
