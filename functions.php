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
 * Customizer: Featured Resource section (front page guide block).
 */
function faithformers_customize_featured_resource( $wp_customize ) {
	$wp_customize->add_section( 'faithformers_featured_resource', array(
		'title'    => __( 'Featured Resource', 'faithformers' ),
		'priority' => 31,
	) );

	$wp_customize->add_setting( 'ff_featured_resource_title', array(
		'default'           => 'Our One-Hour Retreat',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ff_featured_resource_title', array(
		'label'   => __( 'Title', 'faithformers' ),
		'section' => 'faithformers_featured_resource',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'ff_featured_resource_desc', array(
		'default'           => 'A retreat guide rooted in Lectio Divina — for anyone who wants a prayer life that actually holds. Yours free when you join.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'ff_featured_resource_desc', array(
		'label'   => __( 'Description', 'faithformers' ),
		'section' => 'faithformers_featured_resource',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'ff_featured_resource_url', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'ff_featured_resource_url', array(
		'label'   => __( 'Button URL', 'faithformers' ),
		'section' => 'faithformers_featured_resource',
		'type'    => 'url',
	) );
}
add_action( 'customize_register', 'faithformers_customize_featured_resource' );