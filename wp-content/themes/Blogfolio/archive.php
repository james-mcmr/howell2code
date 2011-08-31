<?php get_header(); ?>

<div class="row">

	<div id="content" class="col gu3">
	
	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	  <?php if (is_category()) { ?>
		<h1 class="page-title"><?php single_cat_title(); ?></h1>
	  <?php } elseif( is_tag() ) { ?>
		<h1 class="page-title"><?php single_tag_title(); ?></h1>
	  <?php } elseif (is_day()) { ?>
		<h1 class="page-title"><?php the_time('F jS, Y'); ?></h1>
	  <?php } elseif (is_month()) { ?>
		<h1 class="page-title"><?php the_time('F Y'); ?></h1>
	  <?php } elseif (is_year()) { ?>
		<h1 class="page-title"><?php the_time('Y'); ?></h1>
	  <?php } elseif (is_author()) { ?>
		<h1 class="page-title"><?php _e( 'Author Archive', 'themify' ); ?></h1>
	  <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="page-title"><?php _e( 'Archive', 'themify' ); ?></h1>
	  <?php } ?>

	
		<?php if (have_posts()) : ?>
	
			<?php include (TEMPLATEPATH . '/includes/list-view-loop.php'); ?>
				
			<?php include (TEMPLATEPATH . '/includes/pagination.php'); ?>
				
		<?php else : ?>
	
		<?php endif; ?>

	</div><!--/content -->

<?php get_sidebar(); ?>

</div><!--/row -->

<?php get_footer(); ?>