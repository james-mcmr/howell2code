<div class="row">

<?php global $layout_option, $display_content, $hide_title, $hide_meta, $image_width, $image_height; ?>
			
<?php
	$temp_rows_count = 0;
	if($layout_option != "grid-view-sidebar") {
		$max_row_length = 4;	
	} else {
		$max_row_length = 3;
	}
?>
<?php 
	if(is_home()){
		query_posts('category_name=projects&showposts=6');
	};
?>					
<?php while(have_posts()) : the_post(); ?>

	<?php global $more; $more = 0; ?>

	<?php 
	if(($temp_rows_count%$max_row_length) == 0){ 
		$temp_class = ' clear';
		$temp_rows_count = 0;		
	} else {
		$temp_class = '';	
	}
	?>
	<?php $temp_rows_count++; ?>

	<?php $link = get_post_meta($post->ID, 'external_url', true); ?>
	<?php if ($link == '') { ?>
		<?php $link = get_permalink(); ?>
	<?php } ?>
	
	<div id="post-<?php the_ID(); ?>" class="post gridview col gu1 <?php echo $temp_class; ?>"> 
		<?php themify_image("field_name=Post Image, post_image, image, wp_thumb&w=205&h=140&alt=".get_the_title()."&before=<a href='".$link."'>&after=</a>&class=img-style"); ?>
	

		<?php if($hide_title != 'on'){ ?>
			<h3 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<?php } ?>    
	
		<?php if($hide_date != 'on'){ ?>
			<p class="post-date"><?php the_time('M j, Y') ?></p>
		<?php } ?>    

		<div class="excerpt">
			<?php if($display_content == 'content'){ ?>
				<?php the_content(__('More &raquo;','themify')); ?>
			<?php } elseif($display_content == 'none'){ ?>
			<?php } else { ?>
				<?php the_excerpt(); ?>
			<?php } ?>
		</div>
		<?php edit_post_link('Edit', '[', ']'); ?>
	</div>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

</div><!--/row -->

