<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<h2><?php printf( __( 'Search Results for: %s' ), '' . get_search_query() . '' ); ?></h2>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'boilerplate' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
				<div class="entry-summary">
					<?php the_excerpt(); ?>

					<div class="meta">
						<?php echo get_the_category_list(', '); ?>
					</div>
				</div>
			</article>
			<div class="hr"></div>
		<?php endwhile; ?>
<?php else : ?>
	<article>
		<h2>Nothing Found</h2>
		<p>Sorry, but there were no results for your search query.</p>
		<p>Please try again with some different keywords, or use the links above to navigate the website.</p>
		<?php get_search_form(); ?>
	</article>
<?php endif; ?>

<?php get_footer(); ?>
