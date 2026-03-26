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

/**
 * Sitewide JSON-LD: Organization + WebSite schema
 */
function faithformers_schema_sitewide() {
	$schema = [
		'@context' => 'https://schema.org',
		'@graph'   => [
			[
				'@type'       => 'Organization',
				'@id'         => home_url( '/#organization' ),
				'name'        => 'Faith Formers',
				'url'         => home_url( '/' ),
				'description' => 'Catholic faith formation for the parish, the home, and the heart.',
				'logo'        => [
					'@type' => 'ImageObject',
					'url'   => home_url( '/wp-content/uploads/2026/03/Faith-Formers-Horizontal.png' ),
				],
			],
			[
				'@type'           => 'WebSite',
				'@id'             => home_url( '/#website' ),
				'url'             => home_url( '/' ),
				'name'            => 'Faith Formers',
				'publisher'       => [ '@id' => home_url( '/#organization' ) ],
				'potentialAction' => [
					'@type'       => 'SearchAction',
					'target'      => [
						'@type'       => 'EntryPoint',
						'urlTemplate' => home_url( '/?s={search_term_string}' ),
					],
					'query-input' => 'required name=search_term_string',
				],
			],
		],
	];
	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}
add_action( 'wp_head', 'faithformers_schema_sitewide', 5 );

/**
 * Open Graph + Twitter Card meta tags.
 * Defers to Rank Math or Yoast if either is active.
 */
function faithformers_og_meta_tags() {
	// Let Rank Math or Yoast handle OG if active.
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

	// Fallback image: custom logo.
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
