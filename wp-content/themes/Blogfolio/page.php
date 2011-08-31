<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php $query_category = get_post_meta($post->ID, 'query_category', true); ?>
<?php endwhile; endif; ?>
<?php if($query_category == "" || !isset($query_category)){ 
	include( TEMPLATEPATH . '/template-page.php' );
} else {
	include( TEMPLATEPATH . '/template-query-posts.php' );
}
?>