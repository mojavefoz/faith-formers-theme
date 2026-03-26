<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
<style>
/* ── Faith Formers universal header ── */
#ff-header {
  position: sticky;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
  height: 72px;
  background: #FAF7F2;
  box-shadow: 0 1px 0 rgba(0,0,0,.08);
  transition: all 0.3s ease;
}
body.admin-bar #ff-header { top: 32px; }
@media screen and (max-width: 782px) {
  body.admin-bar #ff-header { top: 46px; }
}

/* Homepage: transparent at top, cream after 80px scroll */
body.home #ff-header {
  background: transparent;
  box-shadow: none;
}
body.home #ff-header.scrolled {
  background: #FAF7F2;
  box-shadow: 0 1px 0 rgba(0,0,0,.08);
}

.ff-header-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 clamp(24px, 5vw, 64px);
  height: 72px;
  display: flex;
  align-items: center;
  gap: 40px;
}

/* Logo */
.ff-header-logo { flex-shrink: 0; display: flex; align-items: center; text-decoration: none; }
.ff-header-logo img { height: 48px; width: auto; display: block; filter: none; transition: filter 0.3s ease; }
/* Homepage transparent: invert logo to white */
body.home #ff-header:not(.scrolled) .ff-header-logo img { filter: brightness(0) invert(1); }

.ff-header-logo-text {
  font-family: 'Instrument Sans', sans-serif;
  font-size: 22px; font-weight: 800;
  color: #1A1A2E; letter-spacing: -.5px;
}
.ff-header-logo-text span { color: #E91E8C; }

/* Nav links */
.ff-header-nav { display: flex; align-items: center; gap: 36px; margin-left: auto; }
.ff-header-nav a {
  font-family: 'Instrument Sans', sans-serif;
  font-size: 16px; font-weight: 600;
  color: #1A1A2E; text-decoration: none;
  transition: color 0.2s;
}
.ff-header-nav a:hover,
.ff-header-nav a.active { color: #E91E8C; }
/* Homepage transparent: white nav links */
body.home #ff-header:not(.scrolled) .ff-header-nav a { color: #ffffff; }
body.home #ff-header:not(.scrolled) .ff-header-nav a:hover,
body.home #ff-header:not(.scrolled) .ff-header-nav a.active { color: #E91E8C; }

/* CTA button */
.ff-header-cta {
  background: #E91E8C;
  color: #fff !important;
  font-family: 'Instrument Sans', sans-serif;
  font-size: 14px; font-weight: 700;
  padding: 12px 32px;
  border-radius: 100px;
  text-decoration: none;
  white-space: nowrap;
  flex-shrink: 0;
  transition: background 0.2s, transform 0.2s;
}
.ff-header-cta:hover { background: #c01575; transform: translateY(-1px); }

@media (max-width: 768px) {
  .ff-header-nav, .ff-header-cta { display: none; }
}
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="ff-header">
  <div class="ff-header-inner">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ff-header-logo" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
      <?php
      $theme_uri  = get_stylesheet_directory_uri();
      $logo_id    = get_theme_mod( 'custom_logo' );
      $logo_url   = $logo_id
        ? wp_get_attachment_image_url( $logo_id, 'full' )
        : $theme_uri . '/Faith%20Formers/Faith%20Formers%20Logo_2.svg';
      $alt        = esc_attr( get_bloginfo( 'name' ) );
      if ( $logo_url ) : ?>
        <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo $alt; ?>" height="48">
      <?php else : ?>
        <span class="ff-header-logo-text">Faith <span>Formers</span></span>
      <?php endif; ?>
    </a>

    <nav class="ff-header-nav" aria-label="Primary navigation">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"<?php echo is_front_page() ? ' class="active"' : ''; ?>>Home</a>
      <a href="<?php echo esc_url( home_url( '/about-anna/' ) ); ?>"<?php echo is_page( 'about-anna' ) ? ' class="active"' : ''; ?>>About</a>
      <a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"<?php echo ( is_page( 'resources' ) || is_category() ) ? ' class="active"' : ''; ?>>Resources</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php echo is_page( 'contact' ) ? ' class="active"' : ''; ?>>Contact</a>
    </nav>

    <a href="<?php echo esc_url( home_url( '/#newsletter' ) ); ?>" class="ff-header-cta">Join Newsletter</a>

  </div>
</header>

<script>
( function () {
  var header = document.getElementById( 'ff-header' );
  if ( ! header || ! document.body.classList.contains( 'home' ) ) return;
  function onScroll() {
    header.classList.toggle( 'scrolled', window.scrollY > 80 );
  }
  window.addEventListener( 'scroll', onScroll, { passive: true } );
  onScroll();
} )();
</script>
