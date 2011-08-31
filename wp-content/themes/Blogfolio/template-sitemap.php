<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>
	
    <!-- row -->
    <div class="row">

		<!-- content -->
        <div id="content" class="col gu3">

            <h1 class="page-title"><?php the_title() ?></h1>
            
            <h3><?php _e('Pages', 'themify') ?></h3>
            <ul>
                <?php wp_list_pages('depth=0&sort_column=menu_order&title_li=' ); ?>
            </ul>
            <h3><?php _e('Categories', 'themify') ?></h3>
            <ul>
                <?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>
            </ul>
            <h3><?php _e('Posts Per Category', 'themify') ?></h3>
            
            <?php $cats = get_categories(); ?>
            <?php foreach ($cats as $cat) : ?>
			
                	<?php query_posts('cat='.$cat->cat_ID);	?>
                    <h4><?php echo $cat->cat_name; ?></h4>
                    <ul>
                        <?php while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                        <?php endwhile;  ?>
                    </ul>
                    
            <?php endforeach; ?>

        </div><!-- /content -->

		<?php get_sidebar(); ?>

	</div><!-- /row -->

<?php get_footer(); ?>