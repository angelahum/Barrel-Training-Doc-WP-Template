<?php get_header(); ?>
<nav id="MainNavOuter">
	<h2>Table of Contents</h2>
	<?php wp_nav_menu( array( 
		'theme_location' => 'main_nav', 
		'container' => false, 
		'menu_id' => 'MainNav'
	 	) ); ?>
	 <a class="btn" href="<?php echo home_url(); ?>/print/">Print Layout</a>
</nav>
<div class="container just">
	<section id="Main">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => 'Pages', 'after' => '' ) ); ?>
		</article>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>