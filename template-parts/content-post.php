<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beatech
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry border p-2 p-md-3 bg-light mb-3">
        <header class="entry-header">

            <?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php
                    beatech_posted_on();
                    beatech_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
        <div class="entry-content mt-2 d-lg-flex">
            <div class="entry-img align-top d-flex align-top">
                <div class="">
                    <?php beatech_post_thumbnail(); ?>
                </div>
            </div>

            <div class="entry-summary pl-lg-3 ">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
        </div>


        <footer class="entry-footer">
            <?php beatech_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
