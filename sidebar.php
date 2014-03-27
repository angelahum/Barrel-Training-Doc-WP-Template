<aside id="Sidebar">
	<div id="Description">
		<?php $sidebar = new WP_Query('pagename=sidebar'); while($sidebar->have_posts()) : $sidebar->the_post();?>
	       <?php the_content(); ?>
		<?php endwhile; ?>
	</div>

	<?php if ( !dynamic_sidebar('sidebar') ) : ?>
	<?php endif; ?>
</aside>