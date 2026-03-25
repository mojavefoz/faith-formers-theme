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
 * Enqueue parent (Kadence) and child styles.
 */
function faithformers_child_enqueue_styles() {
	wp_enqueue_style(
		'parent-style',
		get_template_directory_uri() . '/style.css'
	);
	wp_enqueue_style(
		'child-style',
		get_stylesheet_uri(),
		array( 'parent-style' )
	);
}
add_action( 'wp_enqueue_scripts', 'faithformers_child_enqueue_styles', 20 );
