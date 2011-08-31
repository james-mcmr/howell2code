<?php get_header(); ?>

<?php if (is_front_page() & !is_paged()) { include (TEMPLATEPATH . '/includes/welcome-message.php'); } ?>

<?php if ($data['setting-feature_box_enabled']) { ?>
	<?php if (is_front_page() & !is_paged()) { include (TEMPLATEPATH . '/includes/slider.php'); } ?>
<?php } ?>
	
		<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $query_category_option = get_post_meta($post->ID, 'query_category', true); ?>
					<?php $posts_per_page_option = get_post_meta($post->ID, 'posts_per_page', true); ?>
					<?php $hide_nav_option = get_post_meta($post->ID, 'hide_navigation', true); ?>
					<?php $hide_page_title = get_post_meta($post->ID, 'hide_page_title', true); ?>
					<?php global $layout_option, $display_content, $hide_title, $hide_date, $hide_meta, $image_width, $image_height; ?>
						<?php $layout_option = get_post_meta($post->ID, 'layout', true); ?>
						<?php $display_content = get_post_meta($post->ID, 'display_content', true); ?>
						<?php $hide_title = get_post_meta($post->ID, 'hide_title', true); ?>
						<?php $hide_date = get_post_meta($post->ID, 'hide_date', true); ?>
						<?php $hide_meta = get_post_meta($post->ID, 'hide_meta', true); ?>
						<?php $image_width = get_post_meta($post->ID, 'image_width', true); ?>
						<?php $image_height = get_post_meta($post->ID, 'image_height', true); ?>

					<div id="content" class="col <?php if ($layout_option != "grid-view" && $layout_option != "list-view-fullwidth") echo 'gu3'; else echo 'gu4'; ?>">
		
					<?php if ($hide_page_title !== "on") { ?><h1 class="page-title"><?php the_title() ?></h1><?php } ?>
					<?php if (!is_paged()) { ?>
						<?php the_content(); ?>
					<?php } ?>
					<?php edit_post_link('Edit', '<p>[', ']</p>'); ?>
				<?php endwhile; endif; ?>

				<?php 
					if ( get_query_var('paged') ) {
						$paged = get_query_var('paged');
					} elseif ( get_query_var('page') ) {
						$paged = get_query_var('page');
					} else {
						$paged = 1;
					}
			
					$wp_query->query('cat='.$query_category_option.'&posts_per_page='.$posts_per_page_option.'&paged='.$paged);
				?>
	
				<?php if ($layout_option == "list-view" || $layout_option == "list-view-fullwidth") { 
					include (TEMPLATEPATH . '/includes/list-view-loop.php');
				} else {
					include (TEMPLATEPATH . '/includes/grid-view-loop.php');
				} ?>
																			
				<?php if ($hide_nav_option !== "on") { include (TEMPLATEPATH . '/includes/pagination.php'); } ?>
					
			</div><!--/content -->

			<?php if ($layout_option != "grid-view" && $layout_option != "list-view-fullwidth") { get_sidebar(); } ?>

		</div><!--/row -->

<?php get_footer(); ?>