<?php 
if($data['setting-feature_box_posts_category'] != "" && isset($data['setting-feature_box_posts_category'])){
	$cat = "cat=".$data['setting-feature_box_posts_category'];	
} else {
	$cat = "";
}
if($data['setting-feature_box_posts_slides'] != "" && isset($data['setting-feature_box_posts_slides'])){
	$num_posts = "showposts=".$data['setting-feature_box_posts_slides']."&";
} else {
	$num_posts = "showposts=5&";	
}
query_posts($num_posts.$cat); ?>
<?php if (have_posts()) : ?>

	<div id="slider">
		<ul class="slides">
		<?php if($data['setting-feature_box_display'] == "images"){ ?>
			<?php 
				$options = array("setting-feature_box_images_one","setting-feature_box_images_two","setting-feature_box_images_three","setting-feature_box_images_four","setting-feature_box_images_five");
				foreach($options as $option){
					if($data[$option."_image"] != ""){
						echo "<li>";
						if($data[$option."_link"] != ""){ 
						
							$image = $data[$option."_image"];
							$link = $data[$option."_link"];
							themify_image("src=".$image."&w=940&h=420&setting=image_feature&class=feature-img&before=<a href='".$link."'>&after=</a>&alt=".$image);
						
						} else {
							
							$image = $data[$option."_image"];
							themify_image("src=".$image."&w=940&h=420&setting=image_feature&class=feature-img");
							
						}
						echo "</li>";
					}
				}
			?>
		<?php } else { ?>
			<?php while (have_posts()) : the_post(); ?>
					<li>
						<div class="details">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
						</div>
							
						<?php themify_image("field_name=Feature Image, feature_image, Post Image, post_image, Large Image 1, large_image_1&h=420&w=940&setting=image_feature&before=<a href='".get_permalink()."' title=''>&after=</a>&alt=".get_the_title()); ?>
							
					</li>
				
			<?php endwhile; ?>
		<?php } ?>
		</ul>
	</div>
	<!--/slider -->

<?php else : ?>

<?php endif; ?>
<?php wp_reset_query(); ?>