<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
		</article>
	<?php endwhile; endif; ?>

	<aside class="meta">
		<p><b>Categories:</b> <?php echo get_the_category_list(', '); ?></p>
		<p><a href="<?php echo home_url(); ?>">&larr; Back to Knowledge Base</a></p>
	</aside>
<?php get_footer(); ?>