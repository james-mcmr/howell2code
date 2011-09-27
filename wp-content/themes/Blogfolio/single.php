<?php
	get_header();
?>
	
    <!-- row -->
    <div class="row">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php $layout_option = get_post_meta($post->ID, 'layout', true); ?>
			<?php $hide_meta = get_post_meta($post->ID, 'hide_meta', true); ?>
			<?php $hide_date = get_post_meta($post->ID, 'hide_date', true); 
				  $category = get_the_category(); 
				  $category_name =  $category[0]->cat_name;	  
			?>		
			<!-- content -->
			<div id="content" class="col <?php if ($layout_option != "fullwidth" && $layout_option != "content-only") echo 'gu3'; else echo 'gu4'; ?>">

				<?php if ($layout_option != "content-only"){ ?>
                        <!-- showcase -->
                        
                        <?php
                            if($category_name=="Projects"){?><div class="project-text"><?php }
						?>									
                        <?php if ($hide_date != "on"){ ?>
                            <div class="post-date single-post-date"><?php the_time('F j, Y') ?></div>
                        <?php } ?>
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <?php if ($hide_meta != "on"){ ?>
                            <p class="post-meta"><span class="post-author"><?php the_author() ?></span> <span class="post-category"><?php the_category(', ') ?></span> <?php the_tags('<span class="post-tags">', ', ', '</span>'); ?></span> <span class="post-comments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span></p>
                        <?php } ?>
                        <?php if(!$data['setting-post_image_single_disabled']){ ?>
                            <p class="single-post-img <?php echo $data['setting-image_post_align']; ?>">
                                <?php themify_image("field_name=Post Image, post_image&setting=image_post_single&w=695&h=300&alt=".get_the_title()."&class=img-style"); ?>
                            </p>
                        <?php } ?>
				<?php } ?>
                            
                <?php the_content(); ?>
				
				<?php edit_post_link('Edit', '[', ']'); ?>
				<?php
                      if($category_name=="Projects"){
                        echo "</div>";  
        
					  ?>
                        <div class="showcase">
                            <ul class="showcase-nav clearfix" id="showcasenav">
                                <?php for($x=0;$x<=30;$x++){ ?>
                                    <?php themify_image("field_name=Large Image ".$x.", large_image_".$x."&w=40&h=40&alt=".get_the_title()."&before=<li><a href='#' title=''>&after=</a></li>"); ?>
                                <?php } ?>
                            </ul>
                            <div id="slideshow">
                                <?php for($x=0;$x<=30;$x++){ ?>
                                    <?php themify_image("field_name=Large Image ".$x.", large_image_".$x."&setting=image_large&w=695&h=755&alt=".get_the_title()."&class=img-style"); ?>
                                <?php } ?>
                            </div>
                        </div>
                		<!-- /showcase -->	         
				 <?php
				      }
                 ?>                               
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            <?php comments_template(); ?>
            
            <?php endwhile; else: ?>       
                <p><?php _e( 'Sorry, nothing found.', 'themify' ); ?></p>
            <?php endif; ?>
			</div>
			<!-- /content -->
		<?php if (!$data['setting-sidebar_visibility_portfolio_single'] && $layout_option != "fullwidth" && $layout_option != "content-only")  get_sidebar(); ?>
    </div><!-- /row -->

<?php get_footer(); ?>
