<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
				<ul>
					<li><a href="#blog-tab">Blog</a></li>
                    <li><a href="#twitter-3">Twitter</a></li>				
				</ul>
            <ul class="xoxo">
				
<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
			if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
                <li id="search" class="widget-container widget_search">
                    <?php get_search_form(); ?>
                </li>
    
                <li id="archives" class="widget-container">
                    <h3 class="widget-title"><?php _e( 'Archives', 'twentyten' ); ?></h3>
                    <ul>
                        <?php wp_get_archives( 'type=monthly' ); ?>
                    </ul>
                </li>
    
                <li id="meta" class="widget-container">
                    <h3 class="widget-title"><?php _e( 'Meta', 'twentyten' ); ?></h3>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </li><?php 
		
			endif; // end primary widget area ?>
            	<li id="blog-tab">          
					 <?php 
	
						 query_posts('category_name=h2c-blog&showposts=2');
	
						 while ( have_posts() ) : the_post(); ?>
                    
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <h2><?php the_title(); ?></h2>
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                    <?php endwhile; // end of the loop. ?>                              
                </li>
			</ul>
		</div><!-- #primary .widget-area -->

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>
		</div><!-- #secondary .widget-area -->

<?php endif; ?>
