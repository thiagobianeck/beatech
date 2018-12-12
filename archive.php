<?php get_header();?>

    <section class="pagina py-4">
        <div class="container">
            <div class="row d-md-flex">


                <?php if ( have_posts() ) : ?>
                    <main class="px-4 pl-md-0">
                        <?php
                        the_archive_title( '<h1 class="page-title mb-4">', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                        ?>
                        <?php while ( have_posts() ) : the_post();?>
                            <?php get_template_part( 'template-parts/content', get_post_type() );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; wp_reset_postdata();?>

                    </main>
                <?php else : ?>
                    <main class="px-4 pl-md-0">
                        <?php get_template_part( 'template-parts/content', 'none' ); ?>
                    </main>
                <?php endif; ?>
                <?php get_sidebar()?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>