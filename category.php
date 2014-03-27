<?php get_header(); ?>

	<ul class="just col-blocks">
		<li>				
			<h2><?php single_cat_title(); ?></h2>

			<?php if ( have_posts() ) : ?>
				<ul>
					<?php while ( have_posts() ) : the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</li>
	</ul>
<?php get_footer(); ?>