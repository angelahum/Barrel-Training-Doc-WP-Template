<?php get_header(); ?>
<div id="SiteOuter">
		<header id="Header">
			<div class="container just">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
		</header>
		<div class="container just">
			<section id="Main">
				<article>
					<h2>Not Found</h2>
					<p>Sorry, but the page you requested could not be found.</p>
					<p>Use the links above to navigate the website, or search the website below.</p>
					<?php get_search_form(); ?>

					<script type="text/javascript">
						// focus on search field after it has loaded
						document.getElementById('s') && document.getElementById('s').focus();
					</script>
				</article>

<?php get_footer(); ?>