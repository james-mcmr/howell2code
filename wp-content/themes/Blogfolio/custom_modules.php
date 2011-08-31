<?php

/* 	Custom Theme Modules
/***************************************************************************/	
	
	///////////////////////////////////////////
	// Footer Text Left Function
	///////////////////////////////////////////
	function themify_footer_text_left($data=array()){
		$data = get_data();
		return '	<p><textarea class="widthfull" rows="4" name="setting-footer_text_left">'.$data['setting-footer_text_left'].'</textarea></p>';	
	}
	
	///////////////////////////////////////////
	// Footer Text Right Function
	///////////////////////////////////////////
	function themify_footer_text_right($data=array()){
		$data = get_data();
		return '	<p><textarea class="widthfull" rows="4" name="setting-footer_text_right">'.$data['setting-footer_text_right'].'</textarea></p>';	
	}
	
	///////////////////////////////////////////
	// Footer Widgets Function
	///////////////////////////////////////////
	function themify_footer_widgets($data=array()){
		$data = get_data();
		$options = array(0, 1, 2, 3, 4);
		$output .= '<p><span class="label">Footer widgets</span> <select name="setting-footer_widgets">';
		foreach($options as $option){
			if($option == $data['setting-footer_widgets']){
				$output .= "<option value='".$option."' selected='selected'>".$option."</option>";
			} else {
				$output .= "<option value='".$option."'>".$option."</option>";
			}
		}
		$output .= '</select> widgets</p>';	
		return $output;
	}
	
	///////////////////////////////////////////
	// Image Settings Function
	///////////////////////////////////////////
	function themify_image_settings($data=array()){
		$data = get_data();
		
		$options = array("left","right");
		
		if($data['setting-post_image_single_disabled']){
			$checked = 'checked="checked"';
		}
		
		$output .=  '<p>
						<span class="label">Post image in the list view</span>  
						<input type="text" class="width2" name="setting-image_post_width" value="'.$data['setting-image_post_width'].'" /> width <small>(px)</small>  
						<input type="text" class="width2" name="setting-image_post_height" value="'.$data['setting-image_post_height'].'" /> height <small>(px)</small>
						
					</p>
					<p>
						<span class="label">Post image in Single post</span>  
						<input type="text" class="width2" name="setting-image_post_single_width" value="'.$data['setting-image_post_single_width'].'" /> width <small>(px)</small>  
						<input type="text" class="width2" name="setting-image_post_single_height" value="'.$data['setting-image_post_single_height'].'" /> height <small>(px)</small>
					</p>
					<p>
						<span class="label">Large images in Single post</span>  
						<input type="text" class="width2" name="setting-image_large_width" value="'.$data['setting-image_large_width'].'" /> width <small>(px)</small>  
						<input type="text" class="width2" name="setting-image_large_height" value="'.$data['setting-image_large_height'].'" /> height <small>(px)</small>
					</p>
					<p>
						<span class="label">Image alignment in Single post</span>
						<select name="setting-image_post_align">
							<option></option>';
		foreach($options as $option){
			if($option == $data['setting-image_post_align']){
				$output .= '<option value="'.$option.'" selected="selected">'.$option.'</option>';
			} else {
				$output .= '<option value="'.$option.'">'.$option.'</option>';
			}
		}
		$output .=	'</select>
					</p>
					<p>
						<span class="pushlabel">
							<input type="checkbox" name="setting-post_image_single_disabled" '.$checked.' >
							Exclude post image in Single
						</span>
					</p>';
		return $output;
	}
	
	///////////////////////////////////////////
	// Homepage Welcome Function
	///////////////////////////////////////////
	function themify_homepage_welcome($data=array()){
		$data = get_data();
		return '<p><textarea class="widthfull" name="setting-homepage_welcome" rows="4">'.$data['setting-homepage_welcome'].'</textarea></p>';
	}	
		
	///////////////////////////////////////////
	// Comments Visibility
	///////////////////////////////////////////
	function themify_comments_visibility($data=array()){
		$data = get_data();
		if($data['setting-comments_visibility_pages']){
			$pages_checked = "checked='checked'";	
		}
		return '<p><input type="checkbox" name="setting-comments_visibility_pages" '.$pages_checked.'/> Disable comments in Pages</p>';	
	}
		
	///////////////////////////////////////////
	// Homepage Feature Box Function
	///////////////////////////////////////////
	function themify_homepage_featurebox($data=array()){
		$data = get_data();
		
		if($data['setting-feature_box_enabled']){
			$enabled_checked = "checked='checked'";	
		} else {
			$enabled_display = "style='display:none;'";	
		}
		
		if($data['setting-feature_box_display'] == 'images'){
			$display_images = "checked='checked'";
			$display_posts_display = "style='display:none;'";
		} else {
			$display_posts = "checked='checked'";	
			$display_images_display = "style='display:none;'";
		}
		
		$effect_options = array("Slide Horizontal"=>"scrollHorz","Slide Vertical"=>"scrollVert","Fade"=>"fade");
		$speed_options = array("Fast"=>200,"Normal"=>1000,"Slow"=>2000);
		$auto_options = array("Off"=>0, "1 Sec"=>1000, "2 Sec"=>2000, "3 Sec"=>3000,"4 Sec"=>4000, "5 Sec"=>5000, "6 Sec"=>6000, "7 Sec"=>7000, "8 Sec"=>8000, "9 Sec"=>9000, "10 Sec"=>10000); 
		
		$output .= '<p><span class="label">Feature box</span> <input type="checkbox" name="setting-feature_box_enabled" class="feature_box_enabled_check" '.$enabled_checked.' />  Enable</p>
					<div class="feature_box_enabled_display" '.$enabled_display.'>
					<p><span class="label">Display</span> <input type="radio" class="feature-box-display" name="setting-feature_box_display" value="posts" '.$display_posts.' /> Posts <input type="radio" class="feature-box-display" name="setting-feature_box_display" value="images" '.$display_images.' /> Images</p>
					<p class="pushlabel feature_box_posts" '.$display_posts_display.'>';
							$output .= wp_dropdown_categories(array("show_option_all"=>"All Categories","hide_empty"=>0,"echo"=>0,"name"=>"setting-feature_box_posts_category","selected"=>$data['setting-feature_box_posts_category']));
		$output .=	'	<input type="text" name="setting-feature_box_posts_slides" value="'.$data['setting-feature_box_posts_slides'].'" class="width2" /> number of slides 
					</p>
					<div class="feature_box_images" '.$display_images_display.'>
						<p>
							<span class="label">Link 1</span>
							<input type="text" class="width10" name="setting-feature_box_images_one_link" value="'.$data['setting-feature_box_images_one_link'].'" />
							<span class="label">Image 1</span>
							<input type="text" class="width10 feature_box_img" name="setting-feature_box_images_one_image" value="'.$data['setting-feature_box_images_one_image'].'" /> 
							<span class="pushlabel" style="display:block;"><a href="#" class="upload-btn upload-image simple" id="feature_box_image_one">+ Upload</a></span>
						</p>
						<p>
							<span class="label">Link 2</span>
							<input type="text" class="width10" name="setting-feature_box_images_two_link" value="'.$data['setting-feature_box_images_two_link'].'" />
							<span class="label">Image 2</span>
							<input type="text" class="width10 feature_box_img" name="setting-feature_box_images_two_image" value="'.$data['setting-feature_box_images_two_image'].'" /> 
							<span class="pushlabel" style="display:block;"><a href="#" class="upload-btn upload-image simple" id="feature_box_image_two">+ Upload</a></span>
						</p>
						<p>
							<span class="label">Link 3</span>
							<input type="text" class="width10" name="setting-feature_box_images_three_link" value="'.$data['setting-feature_box_images_three_link'].'" />
							<span class="label">Image 3</span>
							<input type="text" class="width10 feature_box_img" name="setting-feature_box_images_three_image" value="'.$data['setting-feature_box_images_three_image'].'" /> 
							<span class="pushlabel" style="display:block;"><a href="#" class="upload-btn upload-image simple" id="feature_box_image_three">+ Upload</a></span>
						</p>
						<p>
							<span class="label">Link 4</span>
							<input type="text" class="width10" name="setting-feature_box_images_four_link" value="'.$data['setting-feature_box_images_four_link'].'" />
							<span class="label">Image 4</span>
							<input type="text" class="width10 feature_box_img" name="setting-feature_box_images_four_image" value="'.$data['setting-feature_box_images_four_image'].'" /> 
							<span class="pushlabel" style="display:block;"><a href="#" class="upload-btn upload-image simple" id="feature_box_image_four">+ Upload</a></span>
						</p>
						<p>
							<span class="label">Link 5</span>
							<input type="text" class="width10" name="setting-feature_box_images_five_link" value="'.$data['setting-feature_box_images_five_link'].'" />
							<span class="label">Image 5</span>
							<input type="text" class="width10 feature_box_img" name="setting-feature_box_images_five_image" value="'.$data['setting-feature_box_images_five_image'].'" /> 
							<span class="pushlabel" style="display:block;"><a href="#" class="upload-btn upload-image simple" id="feature_box_image_five">+ Upload</a></span>
						</p>
					</div>
					<hr />
					<p>
						<span class="label">Effect</span> 
						<select name="setting-feature_box_effect">';
						foreach($effect_options as $name => $val){
							if($data['setting-feature_box_effect'] == $val){
								$output .= '<option value="'.$val.'" selected="selected">'.$name.'</option>';	
							} else {
								$output .= '<option value="'.$val.'">'.$name.'</option>';	
							}
						}
			$output .=	'</select>
					</p>
					<p>
						<span class="label">Speed</span> 
						<select name="setting-feature_box_speed">';
						foreach($speed_options as $name => $val){
							if($data['setting-feature_box_speed'] == $val){
								$output .= '<option value="'.$val.'" selected="selected">'.$name.'</option>';	
							} else {
								$output .= '<option value="'.$val.'">'.$name.'</option>';	
							}	
						}
			$output .= '</select>
					</p>
					<p>
						<span class="label">Timeout</span> 
						<select name="setting-feature_box_auto">';
						foreach($auto_options as $name => $val){
							if($data['setting-feature_box_auto'] == $val){
								$output .= '<option value="'.$val.'" selected="selected">'.$name.'</option>';	
							} else {
								$output .= '<option value="'.$val.'">'.$name.'</option>';	
							}
						}
			$output .=	'</select> <small>(Off = disable autoplay)</small>
					</p>
					<hr />
					<p>
						<span class="label">Feature image size</span>  
						<input type="text" class="width2" name="setting-image_feature_width" value="'.$data['setting-image_feature_width'].'" /> width <small>(px)</small>  
						<input type="text" class="width2" name="setting-image_feature_height" value="'.$data['setting-image_feature_height'].'" /> height <small>(px)</small>
					</p>
					</div>';		
		return $output;
	}
	
	///////////////////////////////////////////
	// Homepage Feature Box Function - Action
	///////////////////////////////////////////
	function themify_homepage_featurebox_action($data=array()){
		$data = get_data();
		?>		
		<script type='text/javascript'>
			!window.jQuery && document.write('<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/themify/js/jquery.js"><\/script>')
		</script>
		<script type='text/javascript' src='<?php echo get_bloginfo('stylesheet_directory'); ?>/js/cycle.js'></script>
        <script type='text/javascript'>
        jQuery(function($) {
             $('#slideshow').cycle({
                  fx:     'fade',
                  timeout: 5000,
                  pause: 1,
                  pager:  '#showcasenav',
                  pagerAnchorBuilder: function(idx, slide) {
                        // return sel string for existing anchor
                        return '#showcasenav li:eq(' + (idx) + ') a';
                  }
             });
            $('#slider .slides').after('<div class="slide-nav-wrap"><a class="next-prev-slide-button prev-slide" href="#">&lt;</a><span class="slide-nav"></span><a class="next-prev-slide-button next-slide" href="#">&gt;</a> </div>').cycle({
                fx:     '<?php echo $data['setting-feature_box_effect']; ?>', 
                speed:   <?php echo $data['setting-feature_box_speed']; ?>, 
                timeout: <?php echo $data['setting-feature_box_auto']; ?>, 
                pause: 1,
                pager: '#slider .slide-nav',
                 next: '#slider .next-slide', 
                 prev: '#slider .prev-slide', 
                 before: function() { if (window.console) console.log(this.src); }
            });					
        });
        </script>
        <?php
	}
	add_action('wp_footer', 'themify_homepage_featurebox_action');
?>