<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?> xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   	<meta http-equiv="cleartype" content="on">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:title" content="<?php bloginfo('name'); ?>" />
	<meta property="og:url" content="<?php echo home_url(); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	
	<title>
		<?php if(is_front_page()) { 
			bloginfo('name'); 
			echo ' | '; 
			bloginfo('description'); 
		} else { 
			wp_title('',true);
			echo ' | '; 
			bloginfo('name');
		} ?>
	</title>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, print"/>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico"/>
	
	<!--[if lt IE 9 ]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- PUT GOOGLE ANALYTICS HERE IF NEEDED -->
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="SiteOuter">
		<header id="Header">
			<div class="container just">
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
		</header>