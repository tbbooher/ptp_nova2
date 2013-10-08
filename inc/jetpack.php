<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package ptp_NoVa
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ptp_nova_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ptp_nova_jetpack_setup' );
