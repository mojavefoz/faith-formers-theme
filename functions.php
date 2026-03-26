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

/**
 * Suppress Kadence's header builder so our header.php has full control.
 * Kadence outputs its header via kadence_header action; removing it prevents
 * a duplicate/conflicting header appearing alongside our custom one.
 */
function faithformers_suppress_kadence_header() {
	// Kadence Header Builder — disable the entire header region.
	add_filter( 'kadence_display_header', '__return_false' );

	// Remove the standard Kadence header wrapper hooks (non-builder path).
	remove_action( 'kadence_header', 'kadence_header_markup', 10 );

	// Prevent Kadence from injecting sticky-header inline JS/CSS.
	add_filter( 'kadence_header_sticky', '__return_false' );
}
add_action( 'after_setup_theme', 'faithformers_suppress_kadence_header', 20 );