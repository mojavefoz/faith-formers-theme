<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="ff-header" class="ff-header" role="banner">
	<div class="ff-header__inner">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ff-header__logo-link" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> — home">
			<?php
			$logo_id = get_theme_mod( 'custom_logo' );
			if ( $logo_id ) :
				$logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
			?>
				<img
					src="<?php echo esc_url( $logo_url ); ?>"
					alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
					class="ff-header__logo-img"
					width="220"
					height=""
					loading="eager"
				>
			<?php else : ?>
				<span class="ff-header__logo-wordmark">Faith <span>Formers</span></span>
			<?php endif; ?>
		</a>

		<nav class="ff-header__nav" id="ff-header-nav" aria-label="Primary navigation">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
				class="ff-header__nav-link<?php echo is_front_page() ? ' ff-header__nav-link--active' : ''; ?>">Home</a>
			<a href="<?php echo esc_url( home_url( '/about-anna/' ) ); ?>"
				class="ff-header__nav-link<?php echo is_page( 'about-anna' ) ? ' ff-header__nav-link--active' : ''; ?>">About</a>
			<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"
				class="ff-header__nav-link<?php echo ( is_page( 'resources' ) || is_category() || is_archive() ) ? ' ff-header__nav-link--active' : ''; ?>">Resources</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
				class="ff-header__nav-link<?php echo is_page( 'contact' ) ? ' ff-header__nav-link--active' : ''; ?>">Contact</a>
		</nav>

		<a href="<?php echo esc_url( home_url( '/#newsletter' ) ); ?>" class="ff-header__cta">Join Free</a>

		<button
			class="ff-header__toggle"
			aria-label="Open menu"
			aria-expanded="false"
			aria-controls="ff-header-nav"
		>
			<span class="ff-header__toggle-bar"></span>
			<span class="ff-header__toggle-bar"></span>
			<span class="ff-header__toggle-bar"></span>
		</button>

	</div>
</header>
