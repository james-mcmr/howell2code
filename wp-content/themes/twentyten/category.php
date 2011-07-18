<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
				<?php 	
					foreach((get_the_category()) as $category) 
					{ 
						$postcat= $category->cat_ID; 
						$catname =$category->cat_name;
						//echo $postcat;
					} 
				?>
                
                <h1>
					<?php 
						if($catname=="h2c-blog"){
							$catname = "Howell2Blog";
							echo $catname;
						}else{
							echo $catname;
						}
					?>
                 </h1>			
				<?php get_template_part( 'loop', 'category' );?>
               
			</div><!-- #content -->
		</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
