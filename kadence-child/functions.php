<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Enqueue parent (Influencer) and child styles
function faithformers_enqueue_styles() {
	$parent_uri = get_template_directory_uri();
	$child_uri  = get_stylesheet_directory_uri();

	wp_enqueue_style(
		'influencer-parent',
		$parent_uri . '/style.css',
		array(),
		wp_get_theme( get_template() )->get( 'Version' )
	);
	wp_enqueue_style(
		'faithformers-child',
		$child_uri . '/style.css',
		array( 'influencer-parent' ),
		wp_get_theme()->get( 'Version' )
	);

	// Hero section (front page)
	if ( is_front_page() ) {
		wp_enqueue_style(
			'faithformers-hero',
			$child_uri . '/assets/hero.css',
			array( 'faithformers-child' ),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'faithformers_enqueue_styles', 10 );

// Allow SVG uploads
function faithformers_allow_svg_uploads( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'faithformers_allow_svg_uploads' );

// Customizer: Hero image (Anna)
function faithformers_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'faithformers_hero', array(
		'title'    => __( 'Faith Formers Hero', 'faithformers' ),
		'priority' => 30,
	) );
	$wp_customize->add_setting( 'faithformers_hero_image', array(
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'faithformers_hero_image', array(
		'label'       => __( 'Hero image (Anna)', 'faithformers' ),
		'description' => __( 'Horizontal photo recommended (e.g. 1200×800px). Replaces the placeholder.', 'faithformers' ),
		'section'     => 'faithformers_hero',
		'mime_type'   => 'image',
	) ) );
}
add_action( 'customize_register', 'faithformers_customize_register' );

// Output hero + pillars + about mission + newsletter (used by shortcode and hook)
function faithformers_output_front_sections() {
	get_template_part( 'template-parts/hero', null, array( 'source' => 'shortcode' ) );
	get_template_part( 'template-parts/pillars' );
	get_template_part( 'template-parts/about-mission' );
	get_template_part( 'template-parts/newsletter' );
}

// Hero (+ about + newsletter) shortcode: [faithformers_hero] — use at top of Home page or in a Custom HTML block
function faithformers_hero_shortcode() {
	ob_start();
	faithformers_output_front_sections();
	return ob_get_clean();
}
add_shortcode( 'faithformers_hero', 'faithformers_hero_shortcode' );

// Front page sections are output by front-page.php (child theme template).
// Use shortcode [faithformers_hero] if you need to embed these sections on another page.
