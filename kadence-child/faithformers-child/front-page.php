<?php
/**
 * Front Page Template
 * Faith Formers homepage: Full-viewport hero (photo + overlay), dbuas-style pillar cards, Anna intro, gradient newsletter.
 *
 * @package Faith_Formers_Child
 */

get_header();
?>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

html { scroll-behavior: smooth; }
html, body { margin: 0; padding: 0; background-color: #ffffff; }
.ff-page { font-family: Arial, sans-serif; font-size: 18px; line-height: 1.8; color: #555555; margin: 0; padding: 0; width: 100%; }
.ff-page h1, .ff-page h2, .ff-page h3 { font-family: 'Montserrat', sans-serif; font-weight: 600; }

/* HEADER: background, sticky, nav colors, button only — Kadence controls layout */
#masthead, .site-header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background-color: rgba(26, 26, 46, 1) !important; transition: background-color 0.3s ease, backdrop-filter 0.3s ease; }
body.admin-bar #masthead { top: 32px !important; }
body.admin-bar .ff-hero { padding-top: 112px !important; }
.main-navigation a, .nav-primary a { color: #ffffff !important; font-family: 'Montserrat', sans-serif !important; font-weight: 500 !important; font-size: 15px !important; letter-spacing: 0.5px !important; }
.main-navigation a:hover { color: #4FC3F7 !important; }
.header-button-wrap a, .kadence-header-btn { background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0) !important; color: #ffffff !important; border-radius: 40px !important; padding: 10px 24px !important; font-family: 'Montserrat', sans-serif !important; font-weight: 600 !important; font-size: 14px !important; border: none !important; text-decoration: none !important; }

/* HERO: full width, diagonal bottom, two columns 60/40 */
.ff-hero {
	min-height: 100vh;
	width: 100%;
	position: relative;
	background-color: #2D1B69;
	clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
	padding-top: 80px !important;
}
.ff-hero__bg {
	position: absolute;
	inset: 0;
	width: 100%;
	height: 100%;
	background-color: #2D1B69;
	/* Add Anna's photo: background-image: url('...'); background-size: cover; background-position: center; */
}
.ff-hero__overlay {
	position: absolute;
	inset: 0;
	background: rgba(26, 26, 46, 0.65);
}
.ff-hero__wrap {
	position: relative;
	z-index: 1;
	display: grid;
	grid-template-columns: 1fr;
	min-height: 100vh;
	align-items: center;
}
.ff-hero__content {
	padding: 2rem 1.5rem;
	text-align: center;
	color: #FFFFFF;
}
.ff-hero__photo {
	width: 100%;
	min-height: 50vh;
	background: rgba(255,255,255,0.06);
	border: 2px dashed rgba(255,255,255,0.35);
	display: flex;
	align-items: center;
	justify-content: center;
	color: rgba(255,255,255,0.6);
	font-size: 0.9rem;
	text-align: center;
	order: 2;
}
.ff-hero__headline {
	font-size: clamp(42px, 6vw, 72px);
	line-height: 1.15;
	margin: 0 0 1.25rem;
	color: #FFFFFF;
	font-family: 'Montserrat', sans-serif;
	font-weight: 600;
}
.ff-hero__subline {
	font-size: 20px;
	line-height: 1.6;
	color: #FFFFFF;
	margin: 0 0 2rem;
	font-family: Arial, sans-serif;
	opacity: 0.95;
}
.ff-hero__cta {
	display: inline-flex;
	align-items: center;
	gap: 0.5rem;
	padding: 1rem 1.75rem;
	font-size: 1rem;
	font-weight: 600;
	color: #2D1B69;
	text-decoration: none;
	border-radius: 40px;
	background: #FFFFFF;
	transition: opacity 0.2s;
	font-family: Arial, sans-serif;
}
.ff-hero__cta:hover { opacity: 0.92; color: #2D1B69; }

/* PILLAR NAV: three cards 200×200 after hero, before "Where do you need formation today?" */
.ff-pillars-nav {
	background: #FFFFFF;
	padding: 2.5rem 1.5rem;
	width: 100%;
}
.ff-pillars-nav__inner {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: stretch;
	gap: 1.5rem;
	max-width: 1400px;
	margin: 0 auto;
}
.ff-pillars-nav__item {
	width: 200px;
	height: 200px;
	border-radius: 20px;
	display: block;
	position: relative;
	text-decoration: none;
	transition: transform 0.25s ease;
}
.ff-pillars-nav__item:hover {
	transform: translateY(-4px);
}
.ff-pillars-nav__item--parish { background: #3BA8D8; }
.ff-pillars-nav__item--home { background: #7B4FD6; }
.ff-pillars-nav__item--heart { background: #B040A8; }
.ff-pillars-nav__icon {
	position: absolute;
	top: 16px;
	right: 16px;
	display: flex;
	align-items: center;
	justify-content: center;
}
.ff-pillars-nav__icon svg {
	width: 40px;
	height: 40px;
}
.ff-pillars-nav__icon svg path,
.ff-pillars-nav__icon svg line { stroke: #FFFFFF; fill: none; stroke-width: 2; stroke-linecap: round; stroke-linejoin: round; }
.ff-pillars-nav__bottom {
	position: absolute;
	bottom: 16px;
	left: 16px;
	right: 16px;
}
.ff-pillars-nav__label {
	font-family: 'Montserrat', sans-serif;
	font-size: 22px;
	font-weight: 700;
	color: #FFFFFF;
	display: block;
}

/* UNIFIED SHOWCASE: three stacked blocks (Parish, Home, Heart) */
.ff-showcase {
	padding: 120px 0;
	background: #FFFFFF;
	width: 100%;
}
.ff-showcase__inner { max-width: 1400px; margin: 0 auto; padding: 0 40px; }
.ff-showcase__header { text-align: center; margin-bottom: 2.5rem; }
.ff-showcase__accent {
	width: 60px;
	height: 4px;
	background: linear-gradient(90deg, #4FC3F7 0%, #8B5CF6 50%, #C850C0 100%);
	margin: 0 auto 1rem;
	border-radius: 2px;
}
.ff-showcase__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 48px;
	font-weight: 600;
	color: #2D1B69;
	margin: 0 0 0.5rem;
}
.ff-showcase__sub {
	font-size: 18px;
	line-height: 1.8;
	color: #2D1B69;
	opacity: 0.9;
	margin: 0;
	font-weight: 600;
}
.ff-showcase__blocks {
	display: flex;
	flex-direction: column;
	gap: 24px;
	max-width: 1400px;
	margin: 0 auto;
	padding: 0 40px;
	box-sizing: border-box;
}
.ff-showcase__block {
	border-radius: 20px;
	padding: 30px 0 0 0;
	box-sizing: border-box;
}
.ff-showcase__block--parish { background: #3BA8D8; }
.ff-showcase__block--home { background: #7B4FD6; }
.ff-showcase__block--heart { background: #B040A8; }
.ff-showcase__block-head {
	margin: 0;
	padding: 0 0 0 12px;
}
.ff-showcase__block-title {
	font-family: 'Montserrat', sans-serif;
	font-size: 48px;
	font-weight: 900;
	color: #FFFFFF;
	margin: 0 0 0;
	letter-spacing: 0.02em;
}
.ff-showcase__minicards {
	display: grid;
	grid-template-columns: 1fr 1fr 1fr;
	gap: 12px;
	padding: 12px;
	box-sizing: border-box;
}
.ff-showcase__minicard {
	background: rgba(0, 0, 0, 0.2);
	border-radius: 16px;
	padding: 20px;
	text-decoration: none;
	display: flex;
	flex-direction: column;
	justify-content: space-between;
	box-sizing: border-box;
	aspect-ratio: 1 / 1;
	border: none;
}
.ff-showcase__minicard-name {
	font-family: 'Montserrat', sans-serif;
	font-size: 22px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 0.02em;
	display: block;
	margin: 0;
	color: #FFFFFF;
}
.ff-showcase__minicard-desc {
	font-family: Arial, sans-serif;
	font-size: 17px;
	line-height: 1.5;
	font-weight: 600;
	color: #FFFFFF;
	margin: 0;
}

/* LATEST REFLECTIONS: header row (title left, arrows + counter right), full-width slider */
.ff-reflections {
	background: #FFFFFF;
	padding: 80px 0;
	width: 100%;
}
.ff-reflections__inner { max-width: 1400px; margin: 0 auto; padding: 0 40px; }
.ff-reflections__header {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	justify-content: space-between;
	gap: 1rem;
	margin-bottom: 1.5rem;
}
.ff-reflections__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 42px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 0.25rem;
	text-align: left;
}
.ff-reflections__sub {
	font-family: Arial, sans-serif;
	font-size: 18px;
	color: #555555;
	margin: 0 0 0;
	text-align: left;
}
.ff-reflections__nav-wrap {
	display: flex;
	align-items: center;
	gap: 0.75rem;
}
.ff-reflections__arrow {
	width: 52px;
	height: 52px;
	border-radius: 50%;
	border: 2px solid #2D1B69;
	background: #FFFFFF;
	cursor: pointer;
	display: flex;
	align-items: center;
	justify-content: center;
	color: #2D1B69;
	transition: background 0.2s, color 0.2s;
}
.ff-reflections__arrow:hover {
	background: #2D1B69;
	color: #FFFFFF;
}
.ff-reflections__arrow svg {
	width: 22px;
	height: 22px;
}
.ff-reflections__counter {
	font-family: 'Montserrat', sans-serif;
	font-size: 22px;
	font-weight: 700;
	color: #2D1B69;
}
.ff-reflections__slider-wrap {
	position: relative;
	width: 100%;
	overflow: hidden;
}
.ff-reflections__track {
	display: flex;
	transition: transform 0.35s ease;
	width: 300%;
}
.ff-reflections__slide {
	flex: 0 0 33.333%;
	width: 33.333%;
	box-sizing: border-box;
}
.ff-reflections__slide-inner { min-width: 0; }
.ff-reflections__image {
	width: 100%;
	height: 400px;
	background: #F5F5F7;
	border-radius: 16px;
	display: flex;
	align-items: center;
	justify-content: center;
	color: #555555;
	font-size: 0.9rem;
	margin-bottom: 0.75rem;
}
.ff-reflections__pill {
	display: inline-block;
	font-size: 0.75rem;
	font-weight: 700;
	letter-spacing: 0.08em;
	text-transform: uppercase;
	padding: 0.35rem 0.75rem;
	border-radius: 20px;
	margin-bottom: 0.5rem;
	font-family: Arial, sans-serif;
}
.ff-reflections__pill--parish { background: #3BA8D8; color: #FFFFFF; }
.ff-reflections__pill--home { background: #7B4FD6; color: #FFFFFF; }
.ff-reflections__pill--heart { background: #B040A8; color: #FFFFFF; }
.ff-reflections__slide-title {
	font-family: 'Montserrat', sans-serif;
	font-size: 28px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 0.5rem;
	line-height: 1.3;
	text-align: left;
}
.ff-reflections__excerpt {
	font-family: Arial, sans-serif;
	font-size: 16px;
	line-height: 1.5;
	color: #555555;
	margin: 0;
	text-align: left;
}

/* ANNA INTRO: 50/50 two columns — left text with vertical padding, right full-height image */
.ff-anna {
	background: #FFFFFF;
	padding: 0;
	width: 100%;
}
.ff-anna__inner {
	max-width: 1400px;
	margin: 0 auto;
	padding: 0 40px;
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 3rem;
	align-items: stretch;
}
.ff-anna__content {
	min-width: 0;
	padding: 80px 0;
}
.ff-anna__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 48px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 24px;
	text-align: left;
}
.ff-anna__text {
	font-size: 18px;
	line-height: 1.8;
	color: #555555;
	margin: 0 0 1.25rem;
}
.ff-anna__link {
	font-size: 18px;
	font-weight: 600;
	color: #2D1B69;
	text-decoration: none;
}
.ff-anna__link:hover { text-decoration: underline; }
.ff-anna__photo {
	width: 100%;
	min-height: 100%;
	background: #F5F5F7;
	display: flex;
	align-items: center;
	justify-content: center;
	color: #555555;
	font-size: 0.9rem;
	text-align: center;
}

/* NEWSLETTER: gradient, two-column — image left, content + Kit right */
.ff-newsletter {
	width: 100%;
	padding: 120px 0;
	background: linear-gradient(135deg, #4FC3F7 0%, #8B5CF6 50%, #C850C0 100%);
	color: #FFFFFF;
}
.ff-newsletter__inner {
	max-width: 1200px;
	margin: 0 auto;
	padding: 0 1.5rem;
	display: grid;
	grid-template-columns: 1fr;
	gap: 2rem;
	align-items: center;
}
.ff-newsletter__image {
	width: 100%;
	max-width: 400px;
	height: 300px;
	background: rgba(255,255,255,0.15);
	border: 2px dashed rgba(255,255,255,0.5);
	border-radius: 8px;
	display: flex;
	align-items: center;
	justify-content: center;
	color: rgba(255,255,255,0.8);
	font-size: 0.9rem;
	text-align: center;
}
.ff-newsletter__content { min-width: 0; }
.ff-newsletter__title {
	font-family: 'Montserrat', sans-serif;
	font-size: clamp(2rem, 4vw, 2.5rem);
	font-weight: 600;
	margin: 0 0 0.75rem;
	color: #FFFFFF;
}
.ff-newsletter__text {
	font-size: 18px;
	line-height: 1.8;
	opacity: 0.95;
	margin: 0 0 1.5rem;
}
.ff-newsletter__embed {
	display: flex;
	justify-content: flex-start;
	align-items: center;
	min-height: 80px;
}

/* FOOTER: top three columns + bottom strip */
.ff-footer {
	background: #1A1A2E;
	width: 100%;
	margin: 0;
}
.ff-footer__top {
	padding: 60px 40px;
	max-width: 1400px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: 1fr 1fr 1fr;
	gap: 3rem;
}
.ff-footer__logo {
	display: block;
	margin: 0 0 1rem;
}
.ff-footer__tagline {
	font-family: Arial, sans-serif;
	font-size: 14px;
	line-height: 1.8;
	color: #FFFFFF;
	margin: 0;
}
.ff-footer__heading {
	font-family: 'Montserrat', sans-serif;
	font-size: 18px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: #FFFFFF;
	margin: 0 0 1rem;
}
.ff-footer__links {
	display: flex;
	flex-direction: column;
	gap: 0;
}
.ff-footer__links a {
	font-family: Arial, sans-serif;
	font-size: 16px;
	font-weight: 600;
	line-height: 2.2;
	color: #FFFFFF;
	text-decoration: none;
}
.ff-footer__links a:hover {
	background: linear-gradient(90deg, #4FC3F7 0%, #8B5CF6 50%, #C850C0 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	background-clip: text;
}
.ff-footer__social {
	display: flex;
	gap: 0.75rem;
	margin-top: 1.25rem;
}
.ff-footer__social a {
	width: 44px;
	height: 44px;
	border: 2px solid rgba(255, 255, 255, 0.4);
	background: transparent;
	border-radius: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	text-decoration: none;
	transition: border-color 0.2s, transform 0.2s;
}
.ff-footer__social a:hover {
	border-color: #ffffff;
	transform: scale(1.08);
}
.ff-footer__social a svg { width: 22px; height: 22px; }
.ff-footer__social a svg path { fill: #FFFFFF; }
.ff-footer__bottom {
	background: #111827;
	padding: 16px 40px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	gap: 1rem;
}
.ff-footer__copy {
	font-family: Arial, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
	margin: 0;
}
.ff-footer__legal {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	gap: 0.25rem;
}
.ff-footer__legal a {
	font-family: Arial, sans-serif;
	font-size: 12px;
	color: #888888;
	text-decoration: none;
}
.ff-footer__legal a:hover { color: #FFFFFF; }
.ff-footer__legal .ff-footer__sep { color: #666; font-size: 12px; margin: 0 0.35rem; }

#colophon, .site-footer { display: none !important; }

/* Responsive breakpoints */
@media (max-width: 768px) {
	.ff-showcase__blocks { padding: 0; }
	.ff-showcase__block {
		width: calc(100% - 32px);
		margin: 0 16px 24px 16px;
		overflow: hidden;
	}
	.ff-showcase__minicards {
		grid-template-columns: 1fr;
		gap: 12px;
		padding: 12px;
		width: 100%;
		box-sizing: border-box;
	}
	.ff-showcase__minicard {
		width: 100%;
		box-sizing: border-box;
		aspect-ratio: unset;
		min-height: 140px;
	}
	.ff-showcase__minicard-name {
		font-size: 16px;
	}
	.ff-showcase__minicard-desc {
		font-size: 14px;
	}
}
@media (max-width: 640px) {
	.ff-pillars-nav__item { width: 100%; max-width: 200px; }
}
@media (max-width: 900px) {
	.ff-footer__top { grid-template-columns: 1fr; padding: 40px 24px; }
	.ff-footer__bottom { flex-direction: column; padding: 16px 24px; text-align: center; }
}
@media (max-width: 767px) {
	.ff-anna__inner { grid-template-columns: 1fr; }
	.ff-anna__content { padding: 60px 0; }
	.ff-anna__photo { min-height: 320px; }
}
@media (min-width: 768px) {
	.ff-hero__wrap { grid-template-columns: 60% 40%; }
	.ff-hero__content { order: 1; text-align: left; padding: 2rem 3rem; }
	.ff-hero__photo { order: 2; min-height: 100vh; }
	.ff-newsletter__inner { grid-template-columns: 400px 1fr; }
	.ff-newsletter__image { order: 1; }
	.ff-newsletter__content { order: 2; }
}
@media (max-width: 700px) {
	.ff-reflections__header { flex-direction: column; align-items: flex-start; }
}
</style>

<main class="ff-page">

	<section class="ff-hero">
		<div class="ff-hero__bg" aria-hidden="true"></div>
		<div class="ff-hero__overlay" aria-hidden="true"></div>
		<div class="ff-hero__wrap">
			<div class="ff-hero__content">
				<h1 class="ff-hero__headline">Faith for the Parish. Faith for the Home. Faith for the Heart.</h1>
				<p class="ff-hero__subline">A Catholic content community for formation professionals, families, and anyone seeking a deeper interior life.</p>
				<a href="#newsletter" class="ff-hero__cta">Join the Newsletter →</a>
			</div>
			<div class="ff-hero__photo">Anna hero photo — full height</div>
		</div>
	</section>

	<nav class="ff-pillars-nav" aria-label="Formation pillars">
		<div class="ff-pillars-nav__inner">
			<a href="#parish-block" class="ff-pillars-nav__item ff-pillars-nav__item--parish">
				<span class="ff-pillars-nav__icon" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><line x1="12" y1="2" x2="12" y2="22"/><line x1="5" y1="9" x2="19" y2="9"/></svg></span>
				<div class="ff-pillars-nav__bottom">
					<span class="ff-pillars-nav__label">Parish</span>
				</div>
			</a>
			<a href="#home-block" class="ff-pillars-nav__item ff-pillars-nav__item--home">
				<span class="ff-pillars-nav__icon" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 3L2 12h3v9h6v-6h2v6h6v-9h3L12 3z" fill="none" stroke="currentColor" stroke-width="2"/></svg></span>
				<div class="ff-pillars-nav__bottom">
					<span class="ff-pillars-nav__label">Home</span>
				</div>
			</a>
			<a href="#heart-block" class="ff-pillars-nav__item ff-pillars-nav__item--heart">
				<span class="ff-pillars-nav__icon" aria-hidden="true"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 21.35c0 0-10-7.35-10-12.85C2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 5.5-10 12.85-10 12.85z" fill="none" stroke="currentColor" stroke-width="2"/></svg></span>
				<div class="ff-pillars-nav__bottom">
					<span class="ff-pillars-nav__label">Heart</span>
				</div>
			</a>
		</div>
	</nav>

	<section class="ff-showcase">
		<div class="ff-showcase__inner">
			<header class="ff-showcase__header">
				<div class="ff-showcase__accent" aria-hidden="true"></div>
				<h2 class="ff-showcase__title">Where do you need formation today?</h2>
				<p class="ff-showcase__sub">Faith Formers meets you where you are — in the parish, at home, or in your own heart.</p>
			</header>
		</div>
		<div class="ff-showcase__blocks">
			<div id="parish-block" class="ff-showcase__block ff-showcase__block--parish">
				<div class="ff-showcase__block-head">
					<h3 class="ff-showcase__block-title">PARISH</h3>
				</div>
				<div class="ff-showcase__minicards">
					<a href="<?php echo esc_url( home_url( '/category/parish/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Resources</span>
						<p class="ff-showcase__minicard-desc">Practical tools and session plans for DREs, catechists and youth ministers.</p>
					</a>
					<a href="<?php echo esc_url( home_url( '/category/parish/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Templates</span>
						<p class="ff-showcase__minicard-desc">Ready-to-use liturgical calendar resources and formation session frameworks.</p>
					</a>
					<a href="<?php echo esc_url( home_url( '/category/parish/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Liturgical Calendar</span>
						<p class="ff-showcase__minicard-desc">Stay rooted in the seasons of the Church with formation content tied to the calendar.</p>
					</a>
				</div>
			</div>
			<div id="home-block" class="ff-showcase__block ff-showcase__block--home">
				<div class="ff-showcase__block-head">
					<h3 class="ff-showcase__block-title">HOME</h3>
				</div>
				<div class="ff-showcase__minicards">
					<a href="<?php echo esc_url( home_url( '/category/home/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Family Activities</span>
						<p class="ff-showcase__minicard-desc">Simple faith practices that bring the whole family together around the table and beyond.</p>
					</a>
					<a href="<?php echo esc_url( home_url( '/category/home/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Prayer Prompts</span>
						<p class="ff-showcase__minicard-desc">Short, honest prompts to help families pray together — even on the hard days.</p>
					</a>
					<a href="<?php echo esc_url( home_url( '/category/home/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Dinner Table Questions</span>
						<p class="ff-showcase__minicard-desc">Conversation starters that open up faith naturally in everyday family life.</p>
					</a>
				</div>
			</div>
			<div id="heart-block" class="ff-showcase__block ff-showcase__block--heart">
				<div class="ff-showcase__block-head">
					<h3 class="ff-showcase__block-title">HEART</h3>
				</div>
				<div class="ff-showcase__minicards">
					<a href="<?php echo esc_url( home_url( '/category/heart/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">One Hour Retreats</span>
						<p class="ff-showcase__minicard-desc">Guided personal retreats you can do alone, in an hour, wherever you are.</p>
					</a>
					<a href="<?php echo esc_url( home_url( '/category/heart/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Reflections</span>
						<p class="ff-showcase__minicard-desc">Anna's personal reflections on faith, formation, and the ordinary moments that matter.</p>
					</a>
					<a href="<?php echo esc_url( home_url( '/category/heart/' ) ); ?>" class="ff-showcase__minicard">
						<span class="ff-showcase__minicard-name">Inspiration</span>
						<p class="ff-showcase__minicard-desc">Words, practices and reminders for anyone seeking a deeper interior life.</p>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ff-anna">
		<div class="ff-anna__inner">
			<div class="ff-anna__content">
				<h2 class="ff-anna__title">Meet Anna.</h2>
				<p class="ff-anna__text">Anna Forsberg is the voice and pastoral heart of Faith Formers. She serves as Director of Family Faith Formation at Holy Spirit Catholic Church in Las Vegas — and that work in the parish is the living proof of everything we teach here.</p>
				<p class="ff-anna__text">She doesn't lecture. She invites. You'll find practical tools, real behind-the-scenes moments, and the kind of encouragement that meets you where you are — in ministry, at the dinner table, or in your own quiet prayer.</p>
				<a href="<?php echo esc_url( home_url( '/about-anna/' ) ); ?>" class="ff-anna__link">Read Anna's Story →</a>
			</div>
			<div class="ff-anna__photo">
				<span>Anna — editorial photo, portrait orientation</span>
			</div>
		</div>
	</section>

	<section class="ff-reflections" aria-label="Latest Reflections">
		<div class="ff-reflections__inner">
			<div class="ff-reflections__header">
				<div>
					<h2 class="ff-reflections__title">Latest Reflections</h2>
					<p class="ff-reflections__sub">Stories and resources from the Faith Formers community.</p>
				</div>
				<nav class="ff-reflections__nav-wrap" aria-label="Slider navigation">
					<button type="button" class="ff-reflections__arrow" id="ff-reflections-prev" aria-label="Previous slide"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg></button>
					<span class="ff-reflections__counter" id="ff-reflections-counter">01 / 03</span>
					<button type="button" class="ff-reflections__arrow" id="ff-reflections-next" aria-label="Next slide"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
				</nav>
			</div>
			<div class="ff-reflections__slider-wrap">
				<div class="ff-reflections__track" id="ff-reflections-track">
					<div class="ff-reflections__slide">
						<div class="ff-reflections__slide-inner">
							<div class="ff-reflections__image">Article image</div>
							<span class="ff-reflections__pill ff-reflections__pill--parish">Parish</span>
							<h3 class="ff-reflections__slide-title">Article title placeholder — Parish</h3>
							<p class="ff-reflections__excerpt">Short excerpt will go here. Replace with dynamic post excerpt when WordPress is connected.</p>
						</div>
					</div>
					<div class="ff-reflections__slide">
						<div class="ff-reflections__slide-inner">
							<div class="ff-reflections__image">Article image</div>
							<span class="ff-reflections__pill ff-reflections__pill--home">Home</span>
							<h3 class="ff-reflections__slide-title">Article title placeholder — Home</h3>
							<p class="ff-reflections__excerpt">Short excerpt will go here. Replace with dynamic post excerpt when WordPress is connected.</p>
						</div>
					</div>
					<div class="ff-reflections__slide">
						<div class="ff-reflections__slide-inner">
							<div class="ff-reflections__image">Article image</div>
							<span class="ff-reflections__pill ff-reflections__pill--heart">Heart</span>
							<h3 class="ff-reflections__slide-title">Article title placeholder — Heart</h3>
							<p class="ff-reflections__excerpt">Short excerpt will go here. Replace with dynamic post excerpt when WordPress is connected.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ff-newsletter">
		<div class="ff-newsletter__inner">
			<div class="ff-newsletter__image">Newsletter feature image</div>
			<div class="ff-newsletter__content">
				<h2 class="ff-newsletter__title">Join the Community</h2>
				<p class="ff-newsletter__text">Formation resources, family faith practices, and reflections for the interior life — delivered to your inbox.</p>
				<div id="newsletter" class="ff-newsletter__embed">
					<script async data-uid="6eb3da3edd" src="https://faith-formers.kit.com/6eb3da3edd/index.js"></script>
				</div>
			</div>
		</div>
	</section>

	<footer class="ff-footer">
		<div class="ff-footer__top">
			<div class="ff-footer__col">
				<img src="https://staging.faithformers.com/wp-content/uploads/2026/03/Faith-Formers-Horizontal.png" alt="Faith Formers" class="ff-footer__logo" style="max-width:180px;">
				<p class="ff-footer__tagline">Formation for the parish. Faith for the home. Quiet for the heart.</p>
			</div>
			<div class="ff-footer__col">
				<h3 class="ff-footer__heading">PAGES</h3>
				<nav class="ff-footer__links" aria-label="Footer pages">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<a href="<?php echo esc_url( home_url( '/about-anna/' ) ); ?>">About Anna</a>
					<a href="<?php echo esc_url( home_url( '/articles/' ) ); ?>">Articles</a>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
				</nav>
			</div>
			<div class="ff-footer__col">
				<h3 class="ff-footer__heading">USEFUL LINKS</h3>
				<nav class="ff-footer__links" aria-label="Useful links">
					<a href="<?php echo esc_url( home_url( '/category/parish/' ) ); ?>">Parish Resources</a>
					<a href="<?php echo esc_url( home_url( '/category/home/' ) ); ?>">Home Faith Practices</a>
					<a href="<?php echo esc_url( home_url( '/category/heart/' ) ); ?>">Heart Reflections</a>
					<a href="#newsletter">Join the Newsletter</a>
				</nav>
				<div class="ff-footer__social">
					<a href="#" class="ff-footer__social--ig" aria-label="Instagram"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
					<a href="#" class="ff-footer__social--yt" aria-label="YouTube"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
					<a href="#" class="ff-footer__social--fb" aria-label="Facebook"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
				</div>
			</div>
		</div>
		<div class="ff-footer__bottom">
			<p class="ff-footer__copy">© 2026 Faith Formers. All rights reserved.</p>
			<div class="ff-footer__legal">
				<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
				<span class="ff-footer__sep">·</span>
				<a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a>
				<span class="ff-footer__sep">·</span>
				<a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">Cookie Policy</a>
				<span class="ff-footer__sep">·</span>
				<a href="<?php echo esc_url( home_url( '/amazon-associates-disclosure/' ) ); ?>">Amazon Associates Disclosure</a>
			</div>
		</div>
	</footer>

</main>

<script>
(function() {
	var track = document.getElementById('ff-reflections-track');
	var prevBtn = document.getElementById('ff-reflections-prev');
	var nextBtn = document.getElementById('ff-reflections-next');
	var counterEl = document.getElementById('ff-reflections-counter');
	if (!track || !prevBtn || !nextBtn) return;
	var slides = track.querySelectorAll('.ff-reflections__slide');
	var total = slides.length;
	var index = 0;
	function pad(n) { return n < 10 ? '0' + n : String(n); }
	function updateCounter() {
		if (counterEl) counterEl.textContent = pad(index + 1) + ' / ' + pad(total);
	}
	function goTo(i) {
		index = (i + total) % total;
		track.style.transform = 'translateX(-' + index * (100 / total) + '%)';
		updateCounter();
	}
	prevBtn.addEventListener('click', function() { goTo(index - 1); });
	nextBtn.addEventListener('click', function() { goTo(index + 1); });
	updateCounter();
})();
</script>

<script>
window.addEventListener('scroll', function() {
	var header = document.getElementById('masthead') || document.querySelector('.site-header');
	if (!header) return;
	if (window.scrollY > 80) {
		header.style.backgroundColor = 'rgba(26, 26, 46, 0.7)';
		header.style.backdropFilter = 'blur(10px)';
	} else {
		header.style.backgroundColor = 'rgba(26, 26, 46, 1)';
		header.style.backdropFilter = 'none';
	}
});
</script>

<?php
get_footer();
