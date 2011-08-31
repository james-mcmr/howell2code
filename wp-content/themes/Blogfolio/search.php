<?php get_header(); ?>

	<!-- row -->
    <div class="row">

		<!-- content -->
        <div id="content" class="col gu3">
            
        <h1><?php _e('Search Results', 'themify') ?></h1>
        
            <?php if (have_posts()) : ?>
        
                <?php include (TEMPLATEPATH . '/includes/list-view-loop.php'); ?>
                    
                <?php include (TEMPLATEPATH . '/includes/pagination.php'); ?>
                    
            <?php else : ?>
                
                <p><?php _e('Sorry, nothing found.', 'themify') ?></p>
        
            <?php endif; ?>

        </div>
        <!--/content -->

		<?php get_sidebar(); ?>

		</div><!--/row -->

<?php get_footer(); ?>