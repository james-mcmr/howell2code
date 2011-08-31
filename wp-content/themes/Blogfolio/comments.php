<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->


<?php if ( have_comments() ) : ?>
<div class="commentwrap">
	<h4 id="comments"><?php comments_number(__('No Comments','themify'), __('One Comment','themify'), __('% Comments','themify') );?></h4>

	<div class="next-prev-comment">
		<span class="prev"><?php previous_comments_link(__('&laquo; Older Comments','themify')) ?></span>
		<span class="next"><?php next_comments_link(__('Newer Comments &raquo;','themify')) ?></span>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments('callback=custom_theme_comment'); ?>
	</ol>

</div><!--/commentwrap -->
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : // if comment is open, but no comments yet ?>

	 <?php else : // comments are closed ?>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

<h4><?php comment_form_title( __('Leave a Reply','themify'), __('Leave a Reply to <em>%s</em>','themify') ); ?></h4>

<p class="cancel-comment-reply">
	<?php cancel_comment_reply_link(__('Cancel','themify')); ?>
</p>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php _e('You must be','themify'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('logged in','themify'); ?></a> <?php _e('to post a comment','themify'); ?>.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php _e('Logged in as','themify'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account','themify'); ?>"><?php _e('Log out','themify'); ?> &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><?php _e('Name','themify');?> <small><?php if ($req) _e('(required)','themify'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email">Mail <small><?php if ($req) _e('(required)','themify'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
<label for="url"><?php _e('Website','themify'); ?></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Submit Comment','themify'); ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div><!--/respond -->

<?php endif; // if you delete this the sky will fall on your head ?>
