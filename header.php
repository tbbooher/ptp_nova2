<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ptp_NoVa
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>        
        <meta name="description" content="Chrissy Booher is a Pediatric Physical Therapist who provides in-home Physical Therapy Evaluation and Treatments to infants and children in Northern Virginia. Therapy is play based, yet guided by research driven principles as well as a thorough understanding of anatomy, human movement and development.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- fix these to pull from the main js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>

        <!-- link href="https://get.gridsetapp.com/23622/" rel="stylesheet" -->
        <link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="mainshow" class="wrapper m-all d-all d-padinfull">
        	<section class="header">
        	    <a href="/"><div class="logo d3-d6"></div></a>
        		<div class="m-all d6-d12">
	        		<nav class="nav-collapse">
                       <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				    </nav>
        		</div>
        	</section><!-- header -->
