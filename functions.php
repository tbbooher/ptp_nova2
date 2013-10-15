<?php
/**
 * ptp_NoVa functions and definitions
 *
 * @package ptp_NoVa
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'ptp_nova_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function ptp_nova_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on ptp_NoVa, use a find and replace
	 * to change 'ptp_nova' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'ptp_nova', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 600);

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ptp_nova' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'ptp_nova_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // ptp_nova_setup
add_action( 'after_setup_theme', 'ptp_nova_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ptp_nova_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ptp_nova' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'ptp_nova_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function ptp_nova_scripts() {
	wp_enqueue_style( 'ptp_nova-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ptp_nova-navigation', get_template_directory_uri() . '/js/non_standard/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'ptp_nova-skip-link-focus-fix', get_template_directory_uri() . '/js/non_standard/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'minified_js', get_template_directory_uri() . '/js.min.js', array( 'jquery' ), '20131006', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'ptp_nova-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'ptp_nova_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
