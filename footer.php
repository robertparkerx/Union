<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _union
 */

?>

	    </div><!-- .section -->
    </div><!-- #content -->

	<footer id="colophon" class="container site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_union' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', '_union' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_union' ), '_union', '<a href="https://robertparker.me" rel="designer">Robert Parker</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
