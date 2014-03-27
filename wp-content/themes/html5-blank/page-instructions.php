<?php
/*
Template Name: Instructions Page
*/
get_header(); ?>
<!-- HEADER STUFF -->
		<nav id="MainNavOuter">
			<h2>Table of Contents</h2>
			<?php wp_nav_menu( array( 
				'theme_location' => 'main_nav', 
				'container' => false, 
				'menu_id' => 'MainNav'
			 	) ); ?>
			 <a class="btn" href="<?php echo home_url(); ?>/print/">Print View</a>
		</nav>
		<div class="container just">
			<section id="Main">
<!-- END HEADER STUFF -->

<h2><?php the_title(); ?></h2>
<!-- <div class="secondmenu">
<?php

if( get_field('repeater') ): ?>
 
	<?php while( has_sub_field('repeater') ): ?>
			<ul class="menuitems">
				<li><a href="#<?php the_sub_field('anchor'); ?>"><?php the_sub_field('section'); ?></a></li>
			</ul>

<?php endwhile; endif; ?>
</div> -->

<?php
/*
*  Loop through a Repeater field
*/

	if( get_field('repeater') ): ?>
	<div class="stepstable">
		 	<ul class= "just instructions">
				<li class="anchor"><h3>Section</h3></li>
				<li class="steps"><h3>Instructions</h3></li>
				<li class="screenshot"><h3>Screenshots</h3></li>
			</ul>
	<?php while( has_sub_field('repeater') ): ?>

			<ul class="just row">
				<li class="anchor"><a name="<?php the_sub_field('anchor');?>"><?php the_sub_field('section');?></a></li>
				<li class="steps"><?php the_sub_field('steps');?></li>
			    <li class="screenshot"><img class="img-wrapper" src="<?php the_sub_field('screenshot'); ?>"/></li>
			</ul>
	<?php endwhile; endif; ?>
	</div>
<?php get_footer(); ?>