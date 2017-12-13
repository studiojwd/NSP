<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->

	    	<meta name="theme-color" content="#121212">
	    	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/fav/apple-touch-icon.png">
			<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/fav/favicon-32x32.png">
			<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/fav/favicon-16x16.png">
			<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/fav/manifest.json">
			<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/fav/safari-pinned-tab.svg" color="#5bbad5">
			<meta name="theme-color" content="#ffffff">
	    <?php } ?>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox-plus-jquery.min.js"></script>
		
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner">
						
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
	 	
				</header> <!-- end .header -->