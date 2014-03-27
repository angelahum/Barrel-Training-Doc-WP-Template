<?php
/*
Template Name: Print Page
*/
get_header(); ?>
<h1><?php the_title(); ?></h1>
<!-- HEADER STUFF -->
		<nav id="PrintNavOuter">
			<h2>Table of Contents</h2>
			<?php wp_nav_menu( array( 
				'theme_location' => 'main_nav', 
				'container' => false, 
				'menu_id' => 'PrintNav'
			 	) ); ?>
		</nav>
		<div class="container just">
			<section id="Main">
<!-- HEADER STUFF -->
<?

$args = array(
'post_type' => 'page',
'orderby' => 'menu_order title',
'order' => 'ASC',
'posts_per_page' => -1
);


$the_query = new WP_Query( $args );

?>

<!-- Start Loop -->
<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<!--List the posts -->
<h2><?php the_title(); ?></h2>

<?php
/*
*  Loop through a Repeater field
*/

	if( get_field('repeater') ): ?>
	<div class="stepstable">
	<?php while( has_sub_field('repeater') ): ?>

			<ul class="just row">
				<li class="anchor"><a name="<?php the_sub_field('anchor');?>"><?php the_sub_field('section');?></a></li>
				<li class="steps"><?php the_sub_field('steps');?></li>
			    <li class="screenshot"><img class="img-wrapper" src="<?php the_sub_field('screenshot'); ?>"/></li>
			</ul>
	<?php endwhile; endif; ?>
	</div>

<?php endwhile;?>


<?php endif; ?>
</div>
<!-- End Loop -->

<?php get_footer(); ?>