<?php if ( post_password_required() ) {
	return;
} ?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$beatech_comment_count = get_comments_number();
			if ( '1' === $beatech_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'beatech' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $beatech_comment_count, 'comments title', 'beatech' ) ),
					number_format_i18n( $beatech_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
                'avatar_size'       => 32,
                'format'            => 'html5',
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'beatech' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().


    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields =  array(

        'author' =>
            '<div class="form-row"><div class="form-group col-md-6"><label for="author">' . __( 'Nome', 'beatech' ) .
            ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
            '<input class="form-control" placeholder="Digite seu Nome" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
            '" ' . $aria_req . ' /></div>',


        'email' =>
            '<div class="form-group col-md-6"><label for="email">' . __( 'Email', 'beatech' ) .
            ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
            '<input id="email" name="email" placeholder="Digite seu Email" type="email" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" ' . $aria_req . ' /></div></div>',

        'url' =>
            '<div class="form-group"><label for="url">' . __( 'Website', 'beatech' ) . '</label>' .
            '<input placeholder="Digite o endereço do seu site" class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
            '" /></div>',
    );


    $args = array(
        'id_form'           => 'commentform',
        'class_form'      => 'comment-form',
        'id_submit'         => 'submit',
        'class_submit'      => 'btn-round-outl btn-round-outl-seccolor3 mt-3',
        'name_submit'       => 'submit',
        'title_reply'       => __( 'Leave a Reply' ),
        'title_reply_to'    => __( 'Leave a Reply to %s' ),
        'cancel_reply_link' => __( 'Cancel Reply' ),
        'label_submit'      => __( 'Post Comment' ),
        'format'            => 'xhtml',

        'comment_field' =>  '<div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) .
            '</label><textarea class="form-control" id="comment" name="comment" rows="8" aria-required="true"></textarea></div>',

        'must_log_in' => '<p class="must-log-in">' .
            sprintf(
                __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
            ) . '</p>',

        'logged_in_as' => '<p class="logged-in-as">' .
            sprintf(
                __( 'Logado como <a href="%1$s">%2$s</a>. Gostaria de <a href="%3$s" title="Log out of this account"> Deslogar?</a>' ),
                admin_url( 'profile.php' ),
                $user_identity,
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
            ) . '</p>',

        'comment_notes_before' => '<p class="comment-notes">' .
            __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
            '</p>',


        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    );

	comment_form($args);
	?>

</div><!-- #comments -->
