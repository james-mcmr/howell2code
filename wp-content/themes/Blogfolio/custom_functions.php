<?php

/* 	Custom Write Panels
/***************************************************************************/
	
	///////////////////////////////////////
	// Setup Write Panel Options
	///////////////////////////////////////
	$meta_box_options = array(
								array(
									  "name" 		=> "post_image", 
									  "std" 		=> "", 
									  "title" 		=> "Post Image", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "feature_image", 
									  "std" 		=> "", 
									  "title" 		=> "Feature Image", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_1", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 1", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_2", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 2", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_3", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 3", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_4", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 4", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_5", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 5", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_6", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 6", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_7", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 7", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_8", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 8", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_9", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 9", 
									  "description" => "", 
									  "type" 		=> "image"
									  ),
								array(
									  "name" 		=> "large_image_10", 
									  "std" 		=> "", 
									  "title" 		=> "Large Image 10", 
									  "description" => "", 
									  "type" 		=> "image"
									  )
							);

	// Post Meta Box Options
	$post_meta_box_options = array(
									// Layout
									array(
										  "name" 		=> "layout",	
										  "title" 		=> "Single Layout", 	
										  "description" => "", 				
										  "type" 		=> "layout",			
										  "meta"		=> array(
																 array("value" => "default", 	"img" => "images/layout-icons/single-default.png", "selected" => true),
																 array("value" => "fullwidth",	 	"img" => "images/layout-icons/single-fullwidth.png"),
																 array("value" => "content-only","img" => "images/layout-icons/single-content-only.png")
																 )			
										),
									// Hide Post Date
									array(
										  "name" 		=> "hide_date",
										  "title"		=> "Post Date",
										  "description"	=> "Hide post date in Single post",
										  "type"		=> "checkbox",
										  "meta"		=> array()
										),
									// Hide Post Meta
									array(
										  "name" 		=> "hide_meta",
										  "title"		=> "Post Meta",
										  "description"	=> "Hide post meta in Single post",
										  "type"		=> "checkbox",
										  "meta"		=> array()
										),
								   	// Post Image
									array(
										  "name" 		=> "post_image", 
										  "std" 		=> "", 
										  "title" 		=> "Post Image", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									// External Image
									array(
										  "name" 		=> "external_url",	
										  "title" 		=> "External URL", 	
										  "description" => "Use this URL to link post image elsewhere (default image link is to post)", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array()			
										),
									array(
										  "name" 		=> "feature_image", 
										  "std" 		=> "", 
										  "title" 		=> "Feature Image", 
										  "description" => "Feature image for slider and feature post widget", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_1", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 1", 
										  "description" => "Large image in the post", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_2", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 2", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_3", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 3", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_4", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 4", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_5", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 5", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_6", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 6", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_7", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 7", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_8", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 8", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_9", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 9", 
										  "description" => "", 
										  "type" 		=> "image"
										  ),
									array(
										  "name" 		=> "large_image_10", 
										  "std" 		=> "", 
										  "title" 		=> "Large Image 10", 
										  "description" => "", 
										  "type" 		=> "image"
										  )
									);

	// Page Meta Box Options
	$page_meta_box_options = array(
								  	// Page Layout
									array(
										  "name" 		=> "page_layout",
										  "title"		=> "Page Layout",
										  "description"	=> "",
										  "type"		=> "layout",
										  "meta"		=> array(
																 array("value" => "default", "img" => "images/layout-icons/page-sidebar.png", "selected" => true),
																 array("value" => "fullwidth", "img" => "images/layout-icons/page-fullwidth.png"),
																 array("value" => "content-only", "img" => "images/layout-icons/page-content-only.png")
																 )
										),
								   );
									
	// Query Post Meta Box Options
	$query_meta_box_options = array(
								   	// Query Category
									array(
										  "name" 		=> "query_category",
										  "title"		=> "Query Category",
										  "description"	=> "Select a category or enter multiple category IDs (eg. 2,5,6). Enter 0 to display all categories.",
										  "type"		=> "query_category",
										  "meta"		=> array()
										),
									// Posts Per Page
									array(
										  "name" 		=> "posts_per_page",
										  "title"		=> "Posts per page",
										  "description"	=> "",
										  "type"		=> "textbox",
										  "meta"		=> array("size" => "small")
										),
									// Post Layout
									array(
										  "name" 		=> "layout",
										  "title"		=> "Layout",
										  "description"	=> "",
										  "type"		=> "layout",
										  "meta"		=> array(
																 array("value" => "grid-view", "img" => "images/layout-icons/grid-view.png", "selected" => true),
																 array("value" => "grid-view-sidebar", "img" => "images/layout-icons/grid-view-sidebar.png"),
																 array("value" => "list-view", "img" => "images/layout-icons/list-view.png"),
																 array("value" => "list-view-fullwidth", "img" => "images/layout-icons/list-view-fullwidth.png")
																 )
										),
									// Display Content
									array(
										  "name" 		=> "display_content",
										  "title"		=> "Display",
										  "description"	=> "",
										  "type"		=> "dropdown",
										  "meta"		=> array(
																 array("name"=>"Excerpt","value"=>"excerpt","selected"=>true),
																 array("name"=>"Content","value"=>"content"),
																 array("name"=>"None","value"=>"none")
																 )
										),
									// Hide Title
									array(
										  "name" 		=> "hide_title",
										  "title"		=> "Post Title",
										  "description"	=> "Hide post title",
										  "type"		=> "checkbox",
										  "meta"		=> array()
										),
									// Hide Date
									array(
										  "name" 		=> "hide_date",
										  "title"		=> "Post Date",
										  "description"	=> "Hide post date",
										  "type"		=> "checkbox",
										  "meta"		=> array()
										),
									// Hide Post Meta
									array(
										  "name" 		=> "hide_meta",
										  "title"		=> "Post Meta",
										  "description"	=> "Hide post meta (list view only)",
										  "type"		=> "checkbox",
										  "meta"		=> array()
										),
									// Image Width
									array(
										  "name" 		=> "image_width",	
										  "title" 		=> "Image Width", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
									// Image Height
									array(
										  "name" 		=> "image_height",	
										  "title" 		=> "Image Height", 
										  "description" => "", 				
										  "type" 		=> "textbox",			
										  "meta"		=> array("size"=>"small")			
										),
									// Page Navigation Visibility
									array(
										  "name" 		=> "hide_navigation",
										  "title"		=> "Page Navigation",
										  "description"	=> "Hide page navigation",
										  "type"		=> "checkbox",
										  "meta"		=> array()
										),
									// Hide page title
									array(
										  "name" 		=> "hide_page_title",
										  "title"		=> "Page Title",
										  "description"	=> "Hide page title",
										  "type"		=> "checkbox",
										  "meta"		=> array()
										)
									);
	
		
	///////////////////////////////////////
	// Build Write Panels
	///////////////////////////////////////
	themify_build_write_panels(array(
									array(
										 "name"		=> "Post Options",			// Name displayed in box
										 "options"	=> $post_meta_box_options, 	// Field options
										 "pages"	=> "post"					// Pages to show write panel
										 ),
									array(
										 "name"		=> "Regular Page Options",	
										 "options"	=> $page_meta_box_options, 		
										 "pages"	=> "page"
										 ),
									array(
										 "name"		=> "Query Posts Template Options",	
										 "options"	=> $query_meta_box_options, 		
										 "pages"	=> "page"
										 ),
							   		array(
										 "name"		=> "Homepage Slider Options",	
										 "options"	=> $slider_meta_box_options, 		
										 "pages"	=> "slider"
										 ),
									array(
										 "name"		=> "Hompage Highlights Options",	
										 "options"	=> $highlights_meta_box_options, 		
										 "pages"	=> "highlights"
										 )
							  		)
								);
	
/* 	Custom Functions
/***************************************************************************/	

	// enable shortcode in excerpt
	add_filter('the_excerpt', 'do_shortcode');	
	
	// Title Tag Function
	function title_tag() {
		if (is_home() || is_front_page()) {
			echo bloginfo('name');
		} elseif (is_404()) {
			_e('404 Not Found','themify');
		} elseif (is_category()) {
			_e('Category:','themify'); wp_title('');
		} elseif (is_tag()) {
			_e('Tag:','themify'); wp_title('');
		} elseif (is_search()) {
			_e('Search Results','themify');
		} elseif ( is_day() || is_month() || is_year() ) {
			_e('Archives:','themify'); wp_title('');
		} else {
			echo wp_title('');
		}
	}
	
	// Register Custom Menu Function
	function register_custom_nav() {
		if (function_exists('register_nav_menus')) {
			register_nav_menus( array(
				'main-nav' => __( 'Main Navigation', 'themify' ),
			) );
		}
	}
	
	// Register Custom Menu Function - Action
	add_action('init', 'register_custom_nav');
	
	// Default Main Nav Function
	function default_main_nav() {
		echo '<ul id="main-nav" class="clearfix">';
		wp_list_pages('title_li=');
		echo '</ul>';
	}

	// Register Widgets
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'name' => 'Header_Widget',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<strong class="widgettitle">',
			'after_title' => '</strong>',
		));
	}

	// Footer Widgets
	if ( function_exists('register_sidebar') ) {
		if($data['setting-footer_widgets'] != "" && $data['setting-footer_widgets'] != 0){
			for($x=1;$x<=$data['setting-footer_widgets'];$x++){
				register_sidebar(array(
					'name' => 'Footer_'.$x,
					'before_widget' => '<div id="%1$s" class="widget">',
					'after_widget' => '</div>',
					'before_title' => '<h4 class="widgettitle">',
					'after_title' => '</h4>',
				));			
			}
		}
	}

	// post_is_in_descendant_category
	function post_is_in_descendant_category( $cats, $_post = null )
	{
		foreach ( (array) $cats as $cat ) {
			$descendants = get_term_children( (int) $cat, 'category');
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}

	// Check if paged > 1
	function show_posts_nav() {
		global $wp_query;
		return ($wp_query->max_num_pages > 1);
	}

	// Custom Theme Comment
	function custom_theme_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; 
	   ?>
		<li id="comment-<?php comment_ID() ?>">
			<p class="comment-author">
				<?php echo get_avatar($comment,$size='52'); ?>
				<?php printf(__('<cite>%s</cite>'), get_comment_author_link()) ?><br />
				<small class="comment-time"><strong><?php comment_date('M d, Y'); ?></strong> @ <?php comment_time('H:i:s'); ?><?php edit_comment_link('Edit',' [',']') ?></small>
			</p>
			<div class="commententry">
				<?php if ($comment->comment_approved == '0') : ?>
				<p><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
				<?php endif; ?>
			
				<?php comment_text() ?>
			</div>
			
			<p class="reply">
			<?php comment_reply_link(array_merge( $args, array('add_below' => 'comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</p>
		<?php
	}


?>