<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts()
{
	wp_dequeue_style('understrap-styles');
	wp_deregister_style('understrap-styles');

	wp_dequeue_script('understrap-scripts');
	wp_deregister_script('understrap-scripts');
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles()
{

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get('Version'));
	wp_enqueue_script('jquery');
	wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get('Version'), true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain()
{
	load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version($current_mod)
{
	return 'bootstrap5';
}
add_filter('theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20);



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js()
{
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array('customize-preview'),
		'20130508',
		true
	);
}
add_action('customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js');

/*
Register for custom fields for whole webiste for kierunki-theme needs
*/

function register_custom_fields()
{
	add_theme_support('custom-fields');
}
add_action('init', 'register_custom_fields');

/*
Register post types for kierunki-theme
*/
function volume_post_type()
{
	$labels = array(
		'name' => __('Numery', 'textdomain'),
		'singular_name' => __('Numer', 'textdomain'),
		'search_items' => __('Wyszukaj numery'),
		'all_items' => __('Wszystkie numery'),
		'parent_item' => __('Numer zawierający'),
		'parent_item_colon' => __('Numer zawierający:'),
		'edit_item' => __('Edytuj stornę numery'),
		'update_item' => __('Zaktualizuj numer'),
		'add_new' => __('Dodaj nowy'),
		'add_new_item' => __('Dodaj nowy'),
		'new_item_name' => __('Nazwa nowego numeru'),
		'menu_name' => __('Numery'),
	);

	$supports = array(
		'title',
		'thumbnail',
		'excerpt',
		'custom-fields'
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-welcome-write-blog',
		'rewrite' => array('slug' => 'numer'),
		'supports' => $supports
	);

	register_post_type('volume_post_type', $args);

}
add_action('init', 'volume_post_type');

function friend_post_type()
{
	$labels = array(
		'name' => __('Przyjaciele', 'textdomain'),
		'singular_name' => __('Przyjaciel', 'textdomain'),
		'search_items' => __('Wyszukaj przyjaciół'),
		'all_items' => __('Wszyscy przyjaciele'),
		'parent_item' => __('Przyjaciel zawierający'),
		'parent_item_colon' => __('Przyjaciel zawierający:'),
		'edit_item' => __('Edytuj stornę przyjaciół'),
		'update_item' => __('Zaktualizuj przyjaciela'),
		'add_new' => __('Dodaj przyjaciela'),
		'add_new_item' => __('Dodaj przyjaciela'),
		'new_item_name' => __('Nazwa nowego przyjaciela'),
		'menu_name' => __('Przyjaciele'),
	);

	$supports = array(
		'title',
		'thumbnail',
		'custom-fields'
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-groups',
		'supports' => $supports
	);

	register_post_type('friend_post_type', $args);
}
add_action('init', 'friend_post_type');