<?php get_header(); ?>

<?php if (is_home() & !is_paged()) { include (TEMPLATEPATH . '/includes/welcome-message.php'); } ?>

<?php if ($data['setting-feature_box_enabled']) { ?>
	<?php if (is_home() & !is_paged()) { include (TEMPLATEPATH . '/includes/slider.php'); } ?>
<?php } ?>

<div class="row">

	<div id="content" class="col gu4">

	<?php if (have_posts()) : ?>
	
		<?php include (TEMPLATEPATH . '/includes/grid-view-loop.php'); ?>
	
	<?php else : ?>
	
		<p><?php _e( 'Sorry, nothing found.', 'themify' ); ?></p>
	
	<?php endif; ?>

	</div><!--/content -->

</div><!--/row -->

<?php get_footer(); ?>