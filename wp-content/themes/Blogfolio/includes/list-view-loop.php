<?php global $layout_option, $display_content, $hide_title, $hide_date, $hide_meta, $image_width, $image_height; ?>

<?php while(have_posts()) : the_post(); ?>

	<?php global $more; $more = 0; ?>

		<?php $link = get_post_meta($post->ID, 'external_url', true); ?>
		<?php if ($link == '') { ?>
			<?php $link = get_permalink(); ?>
		<?php } ?>

		<div id="post-<?php the_ID(); ?>" class="post listview row">
			<div class="col gu1"> 
				<?php if($hide_date != 'on'){ ?>
					<div class="post-date"><?php the_time('F j, Y') ?></div>
				<?php } ?>
				<?php themify_image("field_name=Post Image, post_image, image, wp_thumb&setting=image_post&w=205&h=140&alt=".get_the_title()."&before=<a href='".$link."' title=''>&after=</a>&class=img-style"); ?>
			</div>

			<div class="col <?php if ($layout_option == "list-view-fullwidth") echo 'gu3'; else echo 'gu2'; ?>">

				<?php if($hide_title != 'on'){ ?>
					<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php } ?>

				<?php if($hide_meta != 'on'){ ?>
					<p class="post-meta"><span class="post-author"><?php the_author() ?></span> <span class="post-category"><?php the_category(', ') ?></span> <?php the_tags('<span class="post-tags">', ', ', '</span>'); ?></span> <span class="post-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span> <?php edit_post_link('Edit', '[', ']'); ?></p>
				<?php } ?>
				
				<?php if($display_content == 'excerpt'){ ?>
					<?php the_excerpt(); ?>
				<?php } elseif($display_content == 'none'){ ?>
				<?php } else { ?>
					<?php the_content(__('More &raquo;','themify')); ?>
				<?php } ?>

			</div>
		</div>
		
<?php endwhile; ?>

<?php wp_reset_query(); ?>