<?php
/**
 * Template part for displaying blog posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _blend
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
				<?php union_posted_on(); ?>
            </div><!-- .entry-meta -->
			<?php
		endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
		<?php
		the_excerpt();
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
		<?php union_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
