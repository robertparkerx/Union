<?php
/**
 * Created by PhpStorm.
 * User: exact
 * Date: 5/7/2017
 * Time: 10:48 AM
 * Template Name: Page - Blog
 */

get_header(); ?>
    <div class="row">
        <div id="primary" class="col m12 l8 content-area">
            <main id="main" class="site-main" role="main">

                <?php $args = array('post_type' => 'post', 'posts_per_page' => 10); $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) :

                    if ( is_home() && ! is_front_page() ) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>

                        <?php
                    endif;

                    /* Start the Loop */
                    while ( $the_query->have_posts() ) : $the_query->the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/content', 'blog' );

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif; ?>

            </main><!-- #main -->
        </div><!-- #primary -->

<?php get_sidebar('blog'); ?>
    </div>
<?php
get_footer();
