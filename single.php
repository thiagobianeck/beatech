<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php if(has_post_thumbnail()):?>

    <?php endif;?>


    <section class="pagina py-4">
        <div class="container">
            <div class="row d-md-flex">
                <main class="px-4 pl-md-0">
                    <?php get_template_part( 'template-parts/content' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

endwhile; wp_reset_postdata();?>

                </main>
                <?php get_sidebar()?>
            </div>
        </div>
    </section>

<?php get_footer();