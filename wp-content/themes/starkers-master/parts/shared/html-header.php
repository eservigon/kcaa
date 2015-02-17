<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title( '|' ); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
  <?php wp_head(); ?>
    
	<!-- CSS
  ================================================== -->
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css"> -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400italic,700italic|Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
</head>
<body>
