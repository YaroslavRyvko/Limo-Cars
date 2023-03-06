<?php

/**
 * wordpress-project functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordpress-project
 */

if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

/* defines START */
define('_TP_', get_stylesheet_directory_uri()); //theme path
define('_IMAGES_', _TP_ . '/src/images'); //images path
/* defines END */


/**
 * Enqueue scripts and styles.
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kaminusok_setup()
{
	foreach (glob(get_template_directory() . "/inc/*.php") as $file) {
		require $file;
	}
}

add_action('init', 'register_post_types');

function register_post_types()
{
	register_post_type('services', [
		'labels' => array(
			'name' => 'Services',
			'singular_name' => 'Service',
		),
		'menu_icon' => 'dashicons-list-view',
		'hierarchical' => true,
		'has_archive ' => false,
		'taxonomies'  => array('category'),
		'public' => true,
		'supports' => array('title')
	]);

	register_post_type('vehicles', [
		'labels' => array(
			'name' => 'Vehicles',
			'singular_name' => 'Vehicle',
		),
		'menu_icon' => 'dashicons-car',
		'hierarchical' => true,
		'has_archive ' => false,
		'taxonomies'  => array('category'),
		'public' => true,
		'supports' => array('title')
	]);
}


add_action('after_setup_theme', 'kaminusok_setup');

add_filter('wpcf7_autop_or_not', '__return_false');

function doublee_filter_yoast_breadcrumb_output($output)
{
	$from = '<span>';
	$to = '</span>';
	$output = str_replace($from, $to, $output);
	return $output;
}

add_filter('wpseo_breadcrumb_output', 'doublee_filter_yoast_breadcrumb_output');

/* Ajax handler for posts */
function ajax_filter_posts_scripts()
{
	global $wp_query;
	wp_register_script('afp', _TP_ . '/src/js/afp.js', array('jquery'), false, null, false);
	wp_enqueue_script('afp');
	wp_localize_script(
		'afp',
		'afp_vars',
		array(
			'query' => json_encode($wp_query->query),
			'url' => admin_url('admin-ajax.php'),
		)
	);
}

add_action('wp_enqueue_scripts', 'ajax_filter_posts_scripts', 1);


function my_excerpt_ending($more)
{
	return '...';
}
add_filter('excerpt_more', 'my_excerpt_ending');

function shorten_yoast_breadcrumb_title($link_info)
{
	$limit = 29;
	if (strlen($link_info['text']) > ($limit)) {
		$link_info['text'] = substr($link_info['text'], 0, $limit) . '...';
	}

	return $link_info;
}

add_filter('wpseo_breadcrumb_single_link_info', 'shorten_yoast_breadcrumb_title', 10);
