<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ptp_NoVa
 */
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>
        <meta name="msvalidate.01" content="1C3E20F9AB7F3A14C0AF7482E5F06B26" />

        <!-- link href="https://get.gridsetapp.com/23622/" rel="stylesheet" -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>


		<!--[if (lt IE 9)]>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
		<![endif]-->

        <script type="text/javascript">
            jQuery(window).load(function() {
                jQuery('.flexslider').flexslider({
                    start: function(slider) {
                        slider.find('.slides > li:first-child').css('visibility', 'visible');
                    },
                    before: function(slider) {
                        slider.removeClass('loading');
                    }
                });
            });
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="mainshow" class="wrapper">
        	<section class="header">
        	    <a href="/">
            	    <div id="logo_container">
            	       <div id="logo"></div>
            	    </div>
        	    </a>
        		<div id="topmenu">
	        		<nav class="nav-collapse">
                       <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				    </nav>
                    <div class="top-contact">
                        <i class="glyphicon glyphicon-envelope"></i>
                        <span class="text">chrissy@ptpnova.com</span>
                        <i class="glyphicon glyphicon-earphone"></i>
                        <span class="text">571-212-6145</span>
                    </div>
        		</div>
        	</section><!-- header -->
            <section id="content" class="<?php echo is_front_page() ? "front_page" : "content_page" ?>">