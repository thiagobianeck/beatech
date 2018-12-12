<?php get_header();?>


    <?php if(has_post_thumbnail()):?>
    <section class="hero-page py-2" style="background-image: url('<?php echo get_the_post_thumbnail_url(19,'hero-pg')?>')">
    <?php else:?>
    <section class="hero-page py-2 bg-hor-color9">
    <?php endif;?>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="hero-titulo col-md-8">
                    <h1 class="text-center text-uppercase font-weight-bold text-pricolor3 display-4"><?php echo get_the_title(19)?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="pagina py-4">
        <div class="container">
            <div class="row d-md-flex">
                <main class="px-4 pl-md-0">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', get_post_type() );

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
