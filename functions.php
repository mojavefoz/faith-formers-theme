<?php
/**
 * Faith Formers Child Theme
 * Parent: Kadence
 *
 * @package Faith_Formers_Child
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue parent (Kadence), global, and child styles.
 */
function faithformers_child_enqueue_styles() {
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'faithformers-global',
		get_stylesheet_directory_uri() . '/global.css',
		array( 'parent-style' ),
		'1.0'
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array( 'parent-style' )
	);
}
add_action( 'wp_enqueue_scripts', 'faithformers_child_enqueue_styles', 20 );

/**
 * Enqueue theme script (sticky header).
 */
function faithformers_child_enqueue_scripts() {
	wp_enqueue_script(
		'faithformers-theme',
		get_stylesheet_directory_uri() . '/js/theme.js',
		array(),
		'1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'faithformers_child_enqueue_scripts', 20 );