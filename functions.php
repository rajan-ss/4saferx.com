<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);
register_nav_menus(array(
	'horizontal_demo' => esc_html__('Horizontal Menu Demo', 'wp-mega-menu-pro'),
	'vertical_demo' => esc_html__('Vertical Menu Demo', 'wp-mega-menu-pro')
));

/**
 * Custom Enqueue scripts and styles.
 */
function custom_scripts()
{
	if (is_page_template('custom/custom-landing.php')) {
		wp_enqueue_style('custom-slick-css', get_stylesheet_directory_uri() . '/custom/lib/slick/slick.css');
		wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/custom/assets/css/style.css', '', true);

		wp_enqueue_script('custom-jquery', get_stylesheet_directory_uri() . '/custom/lib/jquery.min.js', array(), null, true);
		wp_enqueue_script('custom-slick-js', get_stylesheet_directory_uri() . '/custom/lib/slick/slick.min.js', array(), null, true);
		wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/custom/assets/js/main.js', array(), null, true);
	}
}
add_action('wp_enqueue_scripts', 'custom_scripts', 999);

// Remove the 'Main Astra styles.'
function remove_astra_styles()
{
	if (is_page_template('custom/custom-landing.php')) {
		remove_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);
	}
}
add_action('wp_enqueue_scripts', 'remove_astra_styles', 999);

// Dequeue the 'Main Astra styles.'
function dequeue_astra_styles()
{
	if (is_page_template('custom/custom-landing.php')) {
		wp_deregister_style('astra-theme-css');
		wp_dequeue_style('astra-theme-css');
		wp_deregister_style('astra-child-theme-css');
		wp_dequeue_style('astra-child-theme-css');
	}
}
add_action('wp_enqueue_scripts', 'dequeue_astra_styles', 999);
