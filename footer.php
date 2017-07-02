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
global $union_opt;
?>

	    </div><!-- .section -->
    </div><!-- #content -->

	<footer id="colophon" class="page-footer site-footer teal" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col s12 l6">
                    <h5 class="white-text"><?php if($union_opt['footer-biotitle']) { print_r($union_opt['footer-biotitle']); } else { ?>Company Bio<?php } ?></h5>
                    <p class="grey-text text-lighten-4"><?php if($union_opt['footer-biotext']) { print_r($union_opt['footer-biotext']); } else { ?>We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.<?php } ?></p>
                </div>
                <div class="col s12 l3">
                    <h5 class="white-text">Explore</h5>
	                <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'secondary-menu', 'container' => '', 'menu_class' => 'left' ) ); ?>

                </div>
                <div class="col s12 l3">
                    <h5 class="white-text">Social</h5>
		            <?php wp_nav_menu( array( 'theme_location' => 'social-1', 'menu_id' => 'social-menu', 'container' => '', 'menu_class' => 'left' ) ); ?>

                </div>
            </div>

        </div>
		<div class="footer-copyright site-info">
            <div class="container white-text">
                <?php if($union_opt['footer-copyright']) { ?>
                    <?php print_r($union_opt['footer-copyright']); ?>
                <?php } else { ?>
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', '_union' ) ); ?>" class="white-text text-lighten-3"><?php printf( esc_html__( 'Proudly powered by %s', '_union' ), 'WordPress' ); ?></a>
                    <span class="sep"> | </span>
                    <?php printf( esc_html__( 'Theme: %1$s by %2$s.', '_union' ), '_union', '<a href="https://robertparker.me" rel="developer" class="white-text text-lighten-3">Robert Parker</a>' ); ?>
                <?php } ?>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
