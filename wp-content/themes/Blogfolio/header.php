<?php 
$data = get_data();
$data['page'] = array('is_home'=>is_home());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php title_tag(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/themify/css/shortcodes.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
<?php wp_head(); ?>

</head>
<body>
<div class="pagewrap">
	<div id="header">
		<div id="site-logo">
	        <?php if($data['setting-site_logo'] == 'image' && $data['setting-site_logo_image_value'] != ''){ ?>
				<?php themify_image("src=".$data['setting-site_logo_image_value']."&w=".$data['setting-site_logo_width']."&h=".$data['setting-site_logo_height']."&alt=".get_bloginfo('name')."&before=<a href='".get_option('home')."'>&after=</a>"); ?>
            <?php } else { ?>
                <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
            <?php } ?>
      </div>

		<?php
		if (function_exists('wp_nav_menu')) {
			wp_nav_menu(array('theme_location' => 'main-nav' , 'fallback_cb' => 'default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav'));
		}
		else {
			default_main_nav();
		}
		?>

	<div class="header-widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header_Widget') ) ?>
			<div id="site-contact">
                <ul>
                    <li><a href="#" class="email">Stalk me via email</a></li>
                    <li><a href="#" class="twitter">Stalk me on Twitter</a></li>
                    <li><a href="#" class="linkedin">Stalk me on LinkedIn</a></li>
                </ul>
            </div>	
    	</div>

	</div>
	<!--/header -->
	<div id="middlewrap">
	<div><!--div for ie7 -->
