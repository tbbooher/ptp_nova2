<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ptp_NoVa
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper m-all d-all">
	<section class="header">
		<a href="/"><div class="logo d3-d6"></div></a>
		<div class="m-all d6-d12">
			<nav class="nav-collapse closed" style="-webkit-transition: max-height 250ms; transition: max-height 250ms; position: relative;" aria-hidden="false">
               <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><a href="#" class="nav-toggle" aria-hidden="true">Menu</a>
		</div>
	</section>
</div>

<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<div id="content" class="site-content">
