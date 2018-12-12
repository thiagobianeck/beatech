<?php get_header();?>

    <section class="pagina py-4">
        <div class="container">
            <div class="row d-md-flex">


                <?php if ( have_posts() ) : ?>
                <main class="px-4 pl-md-0">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'beatech' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
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



<!---->
<?php //get_header(); ?>
<!---->
<!--	<section id="primary" class="content-area">-->
<!--		<main id="main" class="site-main">-->
<!---->
<!--		--><?php //if ( have_posts() ) : ?>
<!---->
<!--			<header class="page-header">-->
<!--				<h1 class="page-title">-->
<!--					--><?php
//					/* translators: %s: search query. */
//					printf( esc_html__( 'Search Results for: %s', 'beatech' ), '<span>' . get_search_query() . '</span>' );
//					?>
<!--				</h1>-->
<!--			</header><!-- .page-header -->-->
<!---->
<!--			--><?php
//			/* Start the Loop */
//			while ( have_posts() ) :
//				the_post();
//
//				/**
//				 * Run the loop for the search to output the results.
//				 * If you want to overload this in a child theme then include a file
//				 * called content-search.php and that will be used instead.
//				 */
//				get_template_part( 'template-parts/content', 'search' );
//
//			endwhile;
//
//			the_posts_navigation();
//
//		else :
//
//			get_template_part( 'template-parts/content', 'none' );
//
//		endif;
//		?>
<!---->
<!--		</main><!-- #main -->-->
<!--	</section><!-- #primary -->-->
<!---->
<?php
//get_sidebar();
//get_footer();


