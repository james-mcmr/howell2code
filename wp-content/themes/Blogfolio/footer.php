	</div><!--/div for ie7 -->
	</div>
	<!--/middlewrap -->
	<div id="footer">
	<div><!--div for ie7 -->
		<div class="row">

			<?php $data = get_data(); ?>
			<?php if($data['setting-footer_widgets'] != ""){ ?>
				<?php
				$columns = array('4' 	=> array('col gu1','col gu1','col gu1','col gu1'),
								 '3'	=> array('col gu1','col gu1','col gu2'),
								 '2' 	=> array('col gu2','col gu2'),
								 '1' 	=> array('col gu4') );
				$x=0;
				?>
				<?php foreach($columns[$data['setting-footer_widgets']] as $col): ?>
					<?php $x++; ?>
					<div class="<?php echo $col;?>">
						 <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer_'.$x) ) ?>
					</div>
				<?php endforeach; ?>
			<?php } ?>

		</div><!--/row -->
		<div class="footer-text clearfix">
        	<?php $data = get_data(); ?>
			<div class="left"><?php if($data['setting-footer_text_left'] != ""){ echo $data['setting-footer_text_left']; } else { echo '&copy; <a href="'.get_option('home').'">'.get_bloginfo('name').'</a> '.date('Y'); } ?>
            </div>
			<div class="right"><?php if($data['setting-footer_text_right'] != ""){ echo $data['setting-footer_text_right']; } else { echo 'Powered by <a href="http://wordpress.org">WordPress</a>. Theme by <a href="http://themify.me">Themify.me</a>'; } ?></div>
		</div>
	</div><!--/div for ie7 -->
	</div>
	<!--/footer -->
</div>
<!--/pagewrap -->

<?php wp_footer(); ?>

</body>
</html>
