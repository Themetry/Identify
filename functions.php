<?php
/**
 * Identify functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Identify
 */

if ( ! function_exists( 'identify_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function identify_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Identify, use a find and replace
	 * to change 'identify' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'identify', get_template_directory() . '/languages' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'social' => esc_html__( 'Social Menu', 'identify' ),
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'identify_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'identify_setup' );

/**
 * Enqueue scripts and styles.
 */
function identify_scripts() {
	wp_enqueue_style( 'identify-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'identify_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
