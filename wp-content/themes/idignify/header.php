<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]>
<html class="no-js ie6" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 7 ]>    
<html class="no-js ie7" <?php language_attributes(); ?>> 
<![endif]-->
<!--[if IE 8 ]>    
<html class="no-js ie8" <?php language_attributes(); ?>>
 <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 
<html class="no-js" <?php language_attributes(); ?>> 
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'smm' ), max( $paged, $page ) );

	?></title>
<meta name="author" content="Jesse Kade of Sharp Machine Media">
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scaleable=0">

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/icons/favicon.ico">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/icons/apple-touch-icon.png">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/embedded-fonts.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" type="text/css" media="screen, projection">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
<style type="text/css">
	body
	{
		padding-top: 160px;
	}
</style>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-responsive.css" type="text/css" media="screen">

<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" type="text/css" media="screen, projection"><![endif]-->
	
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.7.min.js"></script>
<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/js/selectivizr-min.js"></script><![endif]--> 

<?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		
	wp_head();
?>

</head>

<body <?php body_class(); ?> data-spy="scroll">
	<header>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php bloginfo('url'); ?>/#home">
						<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="232" height="114" alt="Logo">
					</a>
					<div class="nav-collapse">
						<nav>
							<ul class="nav">
								<li class="active"><a href="#home" class="home">Home</a></li>
								<li><a href="#about" class="about">Who We Are</a></li>
								<li><a href="#issue" class="issue">The Issue</a></li>
								<li><a href="#giving" class="giving">Ways To Give</a></li>
								<li><a href="#involved" class="involved">Get Involved</a></li>
							</ul>
						</nav>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</header>
    