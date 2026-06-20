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
 * Disable Kadence sticky header and scroll compensation entirely.
 */
add_filter( 'kadence_sticky_header', '__return_false' );
add_filter( 'kadence_header_scroll', '__return_false' );

/**
 * Load Kit modal script sitewide.
 */
function faithformers_kit_modal_script() {
	echo '<script async data-uid="0f497b7f18" src="https://faith-formers.kit.com/0f497b7f18/index.js"></script>' . "\n";
}
add_action( 'wp_head', 'faithformers_kit_modal_script' );

/**
 * Site image URLs — Customizer-backed, with sensible defaults that point
 * at the staging media library. front-page.php reads these via get_theme_mod
 * for hero / heart / home / parish / anna portrait; faithformers_og_meta_tags
 * uses ff_og_image as the social-share fallback.
 */
function faithformers_image_defaults() {
	return array(
		'ff_hero_image'    => 'https://staging.faithformers.com/wp-content/uploads/2026/06/hero-anna-speaking.png',
		'ff_anna_portrait' => 'https://staging.faithformers.com/wp-content/uploads/2026/06/anna-portrait-scaled.png',
		'ff_heart_image'   => 'https://staging.faithformers.com/wp-content/uploads/2026/06/pillar-heart.png',
		'ff_home_image'    => 'https://staging.faithformers.com/wp-content/uploads/2026/06/pillar-home-scaled.png',
		'ff_parish_image'  => 'https://staging.faithformers.com/wp-content/uploads/2026/06/pillar-parish.png',
		'ff_og_image'      => 'https://staging.faithformers.com/wp-content/uploads/2026/06/og-default.png',
	);
}

function faithformers_image_url( $key ) {
	$defaults = faithformers_image_defaults();
	$default  = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';
	return get_theme_mod( $key, $default );
}

/**
 * Customizer: image URL fields. Stored as URL strings so editors can paste a
 * media-library URL without re-uploading; defaults populate the live site.
 */
function faithformers_customize_register_images( $wp_customize ) {
	$wp_customize->add_section( 'faithformers_images', array(
		'title'    => __( 'Faith Formers — Images', 'faithformers' ),
		'priority' => 30,
	) );

	$fields = array(
		'ff_hero_image'    => __( 'Hero image (Anna speaking)', 'faithformers' ),
		'ff_anna_portrait' => __( 'Anna portrait (front-page Meet Anna)', 'faithformers' ),
		'ff_heart_image'   => __( 'Pillar image — Heart', 'faithformers' ),
		'ff_home_image'    => __( 'Pillar image — Home', 'faithformers' ),
		'ff_parish_image'  => __( 'Pillar image — Parish', 'faithformers' ),
		'ff_og_image'      => __( 'Default Open Graph image', 'faithformers' ),
	);
	$defaults = faithformers_image_defaults();

	foreach ( $fields as $key => $label ) {
		$wp_customize->add_setting( $key, array(
			'default'           => isset( $defaults[ $key ] ) ? $defaults[ $key ] : '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( $key, array(
			'label'   => $label,
			'section' => 'faithformers_images',
			'type'    => 'url',
		) );
	}
}
add_action( 'customize_register', 'faithformers_customize_register_images' );

/**
 * Open Graph + Twitter Card meta tags.
 * Defers to Rank Math or Yoast if either is active.
 * Falls back to ff_og_image (Customizer), then the site's custom logo.
 */
function faithformers_og_meta_tags() {
	if ( defined( 'RANK_MATH_VERSION' ) || defined( 'WPSEO_VERSION' ) ) {
		return;
	}

	global $post;

	$site_name   = get_bloginfo( 'name' );
	$og_type     = 'website';
	$title       = get_bloginfo( 'name' );
	$description = get_bloginfo( 'description' );
	$image       = '';
	$url         = home_url( '/' );

	if ( is_singular() && isset( $post ) ) {
		$og_type     = 'article';
		$title       = get_the_title( $post );
		$description = has_excerpt( $post )
			? wp_strip_all_tags( get_the_excerpt( $post ) )
			: wp_trim_words( wp_strip_all_tags( $post->post_content ), 30, '' );
		$url         = get_permalink( $post );
		if ( has_post_thumbnail( $post ) ) {
			$img_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post ), 'large' );
			$image    = $img_data ? $img_data[0] : '';
		}
	} elseif ( is_category() ) {
		$cat         = get_queried_object();
		$title       = $cat->name . ' — ' . $site_name;
		$description = wp_strip_all_tags( $cat->description ) ?: 'Catholic faith formation articles — ' . $cat->name;
		$url         = get_category_link( $cat->term_id );
	}

	if ( ! $image ) {
		$image = faithformers_image_url( 'ff_og_image' );
	}
	if ( ! $image ) {
		$logo_id = get_theme_mod( 'custom_logo' );
		if ( $logo_id ) {
			$logo_src = wp_get_attachment_image_src( $logo_id, 'full' );
			$image    = $logo_src ? $logo_src[0] : '';
		}
	}

	echo "\n<!-- Open Graph -->\n";
	echo '<meta property="og:site_name" content="' . esc_attr( $site_name ) . '">' . "\n";
	echo '<meta property="og:type" content="' . esc_attr( $og_type ) . '">' . "\n";
	echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
	if ( $description ) {
		echo '<meta property="og:description" content="' . esc_attr( $description ) . '">' . "\n";
	}
	echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
	if ( $image ) {
		echo '<meta property="og:image" content="' . esc_url( $image ) . '">' . "\n";
	}
	echo "\n<!-- Twitter Card -->\n";
	echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
	echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
	if ( $description ) {
		echo '<meta name="twitter:description" content="' . esc_attr( $description ) . '">' . "\n";
	}
	if ( $image ) {
		echo '<meta name="twitter:image" content="' . esc_url( $image ) . '">' . "\n";
	}
	echo "\n";
}
add_action( 'wp_head', 'faithformers_og_meta_tags', 10 );