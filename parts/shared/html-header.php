<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en" <?php language_attributes(); ?>><!--<![endif]-->
<head>

<!-- Site Information -->
<?php 
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if( is_plugin_active( 'wordpress-seo/wp-seo.php' ) ) : 
?>
	<title><?php wp_title( '|' ); ?></title>
<?php else : ?>
	<title><?php bloginfo(); ?><?php wp_title( '|' ); ?></title>
<?php endif; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="/favicon.ico">

<!-- Header Information -->
<?php wp_head(); ?>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
<link href="https://media.campaigner.com/csb/app_themes/lightning/combobox.campformcombo.css" type="text/css" rel="stylesheet">
<link href="https://media.campaigner.com/csb/app_themes/lightning/common/fonticons.css" type="text/css" rel="stylesheet">

</head>

<!-- Start Site -->
<body <?php body_class(); ?>>
