<?php get_header(); ?>

<?php if (is_front_page() & !is_paged()) { include (TEMPLATEPATH . '/includes/welcome-message.php'); } ?>
	
<?php if ($data['setting-feature_box_enabled']) { ?>
	<?php if (is_front_page()) { include (TEMPLATEPATH . '/includes/slider.php'); } ?>
<?php } ?>

    <!-- row -->
    <div class="row">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $page_layout_option = get_post_meta($post->ID, 'page_layout', true); ?>
	
		  <div id="content" class="col <?php if ($page_layout_option != "content-only" && $page_layout_option != "fullwidth") echo 'gu3'; else echo 'gu4'; ?>">
	  
				<?php if ($page_layout_option != "content-only"){ ?> 
					<h1 class="page-title"><?php the_title(); ?></h1>
				<?php } ?>	
				<?php the_content(__('More','themify')); ?>
				<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','themify').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
			<?php endwhile; endif; ?>
			
			<?php edit_post_link(__('Edit','themify'), '[', ']'); ?>
			
			<?php if(!$data['setting-comments_visibility_pages']){ ?>
				<?php comments_template(); ?>
			<?php } ?>
	  
		  </div>
		  <!-- /content -->

			<?php if ($page_layout_option != "content-only" && $page_layout_option != "fullwidth"){ ?> 
				<?php get_sidebar(); ?>
			<?php } ?>	

		</div>
        <!-- /row -->

<?php get_footer(); ?>