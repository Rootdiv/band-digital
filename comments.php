<?php
  if (post_password_required()) {
    return;
  }
?>

<div id="comments" class="comments my-4">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="mb-5">Комментарии:</h3>

		<?php the_comments_navigation();?>

		<ol class="comment-list p-0">
      <?php
      wp_list_comments([
        'walker'            => new Bootstrap_Walker_Comment(), //какой шаблон использовать
        'max_depth'         => '2', //Максимальная вложенность
        'style'             => 'ol', //во что оборачиваем комменты
        'type'              => 'all',
        'reply_text'        => __('Reply', 'band_digital') . ' <i class="fa fa-reply"></i>',
        'per_page'          => '10',
        'avatar_size'       => 80,
        'format'            => 'html5', // или xhtml, если HTML5 не поддерживается темой
        'echo'              => true,     // true или false
      ]);
      ?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if (!comments_open()) :
			?>
			<p class="no-comments"><?php esc_html_e('Comments are closed.', 'band-digital'); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$defaults = [
    'fields'               => [
      'author' => '<div class="comment-form-author form-group mb-3 col-lg-6">
        <input id="author" name="author" type="text" class="form-control" placeholder="Имя"
          value="' . esc_attr($commenter['comment_author']) . '" size="30" />
      </div>',
      'email'  => '<div class="form-group mb-4 col-lg-6">
        <input id="email" name="email" type="email" class="form-control" placeholder="Email"
          value="' . esc_attr( $commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes" />
      </div>',
      'cookies' => '<div class="comment-form-cookies-consent d-flex col-lg-12">' .
        sprintf( '<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" class="mr-3"
          type="checkbox" value="yes"%s />', @$consent ) . '
        <label for="wp-comment-cookies-consent">' .
          __( 'Save my name, email, and website in this browser for the next time I comment.', 'band_digital' )
        . '</label>
      </div>',
    ],
    'comment_field'        => '<div class="form-group mb-3 col-lg-12">
      <textarea id="comment" name="comment" cols="30" rows="6" class="form-control" placeholder="Комментарий"
        aria-required="true" required="required"></textarea>
    </div>',
    'must_log_in'          => '<div class="must-log-in mb-3 col-lg-12">' .
      sprintf(__('You need to <a href="%s">log in</a> to leave a comment.', 'band_digital'),
      wp_login_url(apply_filters('the_permalink', get_permalink($post->ID)))) . '
    </div>',
    'logged_in_as'         => '<div class="logged-in-as mb-3 col-lg-12">' .
      sprintf(__('<a href="%1$s" aria-label="You are logged in as %2$s.">You are logged in as %2$s</a>. <a href="%3$s">Sign out?</a>', 'band_digital'),
      get_edit_user_link(), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink($post->ID)))) . '
    </div>',
    'comment_notes_before' => '<div class="comment-notes mb-4 col-lg-12">
      <span id="email-notes">' . __('Your E-mail is being protected from spam', 'band_digital') . '</span>
    </div>',
    'comment_notes_after'  => '',
    'id_form'              => 'commentform',
    'id_submit'            => 'submit',
    'class_form'           => 'comment-form row',
    'class_submit'         => 'submit btn btn-hero btn-circled',
    'name_submit'          => 'submit',
    'title_reply'          => __('Leave a comment', 'band_digital'),
    'title_reply_to'       => esc_html__('Reply %s', 'band_digital'),
    'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
    'title_reply_after'    => '</h3>',
    'cancel_reply_before'  => ' <small>',
    'cancel_reply_after'   => '</small>',
    'cancel_reply_link'    => __('Cancel sending', 'band_digital'),
    'label_submit'         => __('Send a comment', 'band_digital'),
    'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>',
    'submit_field'         => '<div class="form-submit col-lg-12">%1$s %2$s</div>',
    'format'               => 'html5',
  ];

  comment_form($defaults);
	?>

</div><!-- #comments -->
