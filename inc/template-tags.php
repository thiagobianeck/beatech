<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package beatech
 */

if ( ! function_exists( 'beatech_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function beatech_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
//		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
//			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>, Atualizado em <time class="updated" datetime="%3$s">%4$s</time>';
//		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Posted on %s', 'post date', 'beatech' ),
			'<a class="badge badge-pill badge-info text-uppercase" href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<i class="far fa-clock mr-2"></i><span class="posted-on">' . $posted_on . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'beatech_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function beatech_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'beatech' ),
			'<i class="far fa-user mr-2"></i><span class="author vcard"><a class="url fn n badge badge-pill badge-warning text-uppercase" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'beatech_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function beatech_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {

		    echo '<div class="row py-2 mx-1 border-top">';
		    echo '<div class="col-lg-6 text-center text-lg-left">';
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( '</span> <span class="badge badge-pill badge-light">');
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				echo '<div class="">Categorias: <span class="badge badge-pill badge-light">' . $categories_list . '</span></div>';
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '<span><span class="badge badge-pill badge-warning">','</span> <span class="badge badge-pill badge-warning">','</span></span>');
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				printf( '<span class="tags-links">' . esc_html__( 'Tags: %1$s', 'beatech' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
            echo '</div>';
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<div class="col-lg-6 text-center text-lg-right"><span class="comments-link"><i class="far fa-edit mr-2"></i>';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'beatech' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			echo '</span></div>';
		}
		echo '</div>';

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'beatech' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<div class="my-4"><span class="btn-round-outl btn-round-outl-pricolor1"><i class="far fa-edit mr-1 text-cincolor"></i> ',
			'</span></div>'
		);
	}
endif;

if ( ! function_exists( 'beatech_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function beatech_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail('post-img', array( 'class' => 'rounded img-fluid')); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                    <?php
                    the_post_thumbnail( 'post-img-thumb', array(
                        'class' => 'rounded img-fluid',
                            'alt' => the_title_attribute( array(
                            'echo' => false,
                        ) ),
                    ) );
                    ?>
                </a>
            </div>

		<?php
		endif; // End is_singular().
	}
endif;
