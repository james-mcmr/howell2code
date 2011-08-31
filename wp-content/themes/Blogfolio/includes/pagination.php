	<?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>

		<?php if (show_posts_nav()) : ?>

			<div class="next-prev-post">
				<span class="prev"><?php next_posts_link(__('Older Entries', 'themify')) ?></span>
				<span class="next"><?php previous_posts_link(__('Newer Entries', 'themify')) ?></span>
			</div>

		<?php endif; ?>

	<?php } ?>
