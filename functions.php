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

/**
 * Customizer: About Page section.
 */
function faithformers_customize_about_page( $wp_customize ) {
	$wp_customize->add_section( 'faithformers_about_page', array(
		'title'    => __( 'About Page', 'faithformers' ),
		'priority' => 32,
	) );

	// Anna's portrait (hero split layout).
	$wp_customize->add_setting( 'ff_about_portrait', array(
		'default'           => '',
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'ff_about_portrait', array(
		'label'     => __( 'Anna\'s Portrait (hero)', 'faithformers' ),
		'section'   => 'faithformers_about_page',
		'mime_type' => 'image',
	) ) );

	// Parallax strip toggle — off until community photo is ready.
	$wp_customize->add_setting( 'ff_about_parallax_enabled', array(
		'default'           => false,
		'sanitize_callback' => 'rest_sanitize_boolean',
	) );
	$wp_customize->add_control( 'ff_about_parallax_enabled', array(
		'label'   => __( 'Show parallax community photo strip', 'faithformers' ),
		'section' => 'faithformers_about_page',
		'type'    => 'checkbox',
	) );

	// Community photo used by the parallax strip.
	$wp_customize->add_setting( 'ff_about_community_photo', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ff_about_community_photo', array(
		'label'   => __( 'Community Photo (parallax strip)', 'faithformers' ),
		'section' => 'faithformers_about_page',
	) ) );
}
add_action( 'customize_register', 'faithformers_customize_about_page' );

/**
 * Load Kit modal script sitewide.
 */
function faithformers_kit_modal_script() {
	echo '<script async data-uid="0f497b7f18" src="https://faith-formers.kit.com/0f497b7f18/index.js"></script>' . "\n";
}
add_action( 'wp_head', 'faithformers_kit_modal_script' );