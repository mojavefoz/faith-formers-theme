<?php
/**
 * Faith Formers home page hero section.
 * Brand: warm, pastoral, Catholic. Primary CTA: Join the Newsletter.
 * Three pillars: Parish, Home, Heart.
 *
 * @package Faith_Formers_Child
 */

$logo_url = '';
if ( get_theme_mod( 'custom_logo' ) ) {
	$logo_url = wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' );
} elseif ( file_exists( get_stylesheet_directory() . '/assets/images/Faith_Formers_Logo_2.png' ) ) {
	$logo_url = get_stylesheet_directory_uri() . '/assets/images/Faith_Formers_Logo_2.png';
}

// Hero image (Anna): Customizer or theme file assets/images/anna-hero.png
$hero_image_url = '';
if ( get_theme_mod( 'faithformers_hero_image' ) ) {
	$hero_image_url = wp_get_attachment_image_url( get_theme_mod( 'faithformers_hero_image' ), 'large' );
} elseif ( file_exists( get_stylesheet_directory() . '/assets/images/anna-hero.png' ) ) {
	$hero_image_url = get_stylesheet_directory_uri() . '/assets/images/anna-hero.png';
}
$has_hero_image = ! empty( $hero_image_url );
?>

<section class="ff-hero" id="hero" aria-label="Faith Formers introduction">
	<div class="ff-hero__wrap">
		<div class="ff-hero__inner">
		<?php if ( $logo_url ) : ?>
			<div class="ff-hero__logo">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="280" height="" loading="eager" />
			</div>
		<?php endif; ?>

		<h1 class="ff-hero__title">
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</h1>

		<p class="ff-hero__tagline">
			Live and pass on your faith — in the parish, in the home, and in the heart.
		</p>

		<p class="ff-hero__intro">
			Every person who lands here should see something for them. Whether you serve in ministry, lead at the dinner table, or are deepening your own walk — you belong.
		</p>

		<div class="ff-hero__cta">
			<a href="#newsletter" class="ff-hero__btn">Join the Newsletter</a>
		</div>

		<p class="ff-hero__pillars">
			<span class="ff-hero__pillar">For the Parish</span>
			<span class="ff-hero__pillar-sep" aria-hidden="true">·</span>
			<span class="ff-hero__pillar">For the Home</span>
			<span class="ff-hero__pillar-sep" aria-hidden="true">·</span>
			<span class="ff-hero__pillar">For the Heart</span>
		</p>
		</div>

		<div class="ff-hero__image-wrap">
			<?php if ( $has_hero_image ) : ?>
				<img src="<?php echo esc_url( $hero_image_url ); ?>" alt="<?php echo esc_attr( __( 'Anna Forsberg', 'faithformers' ) ); ?>" class="ff-hero__image" width="600" height="400" loading="eager" />
			<?php else : ?>
				<div class="ff-hero__placeholder" aria-hidden="true">
					<span class="ff-hero__placeholder-text">Anna — hero image</span>
					<span class="ff-hero__placeholder-hint">Horizontal, 1200×800px recommended</span>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
