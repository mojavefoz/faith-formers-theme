<?php
/**
 * Template Name: About
 * About Anna page: hero, mission, story, her work, vision, retreat CTA.
 *
 * @package Faith_Formers_Child
 */

// Person schema for Anna Forsberg — output via wp_head (fires inside get_header()).
add_action( 'wp_head', function () {
	$schema = [
		'@context'    => 'https://schema.org',
		'@type'       => 'Person',
		'@id'         => home_url( '/about-anna/#person' ),
		'name'        => 'Anna Forsberg',
		'jobTitle'    => 'Director of Family Faith Formation',
		'description' => 'Anna Forsberg is a Catholic faith formation professional, speaker, and retreat facilitator with over a decade of parish ministry experience. Director of Family Faith Formation at Holy Spirit Catholic Church in Las Vegas.',
		'url'         => home_url( '/about-anna/' ),
		'worksFor'    => [
			'@type' => 'Organization',
			'@id'   => home_url( '/#organization' ),
			'name'  => 'Faith Formers',
			'url'   => home_url( '/' ),
		],
	];
	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}, 10 );

get_header();
?>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

html { scroll-behavior: smooth; }
html, body { margin: 0; padding: 0; background-color: #ffffff; }
.ff-page { font-family: Arial, sans-serif; color: #555555; margin: 0; padding: 0; width: 100%; }
.ff-page h1, .ff-page h2, .ff-page h3 { font-family: 'Montserrat', sans-serif; font-weight: 600; }

/* Header (match front-page) */
#masthead, .site-header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background-color: rgba(26, 26, 46, 1) !important; transition: background-color 0.3s ease, backdrop-filter 0.3s ease; }
body.admin-bar #masthead { top: 32px !important; }
body.admin-bar .ff-about-hero { padding-top: 112px !important; }
.main-navigation a, .nav-primary a { color: #ffffff !important; font-family: 'Montserrat', sans-serif !important; font-weight: 500 !important; font-size: 15px !important; letter-spacing: 0.5px !important; }
.main-navigation a:hover { color: #4FC3F7 !important; }
.header-button-wrap a, .kadence-header-btn { background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0) !important; color: #ffffff !important; border-radius: 40px !important; padding: 10px 24px !important; font-family: 'Montserrat', sans-serif !important; font-weight: 600 !important; font-size: 14px !important; border: none !important; text-decoration: none !important; }

/* About Hero */
.ff-about-hero {
	min-height: 70vh;
	width: 100%;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	text-align: center;
	padding: 80px 24px 60px;
	box-sizing: border-box;
}
.ff-about-hero__bg {
	position: absolute;
	inset: 0;
	background: #1A1A2E;
}
.ff-about-hero__photo {
	position: absolute;
	inset: 0;
	background: rgba(255,255,255,0.06);
	border: 2px dashed rgba(255,255,255,0.35);
	display: flex;
	align-items: center;
	justify-content: center;
	color: rgba(255,255,255,0.6);
	font-family: Arial, sans-serif;
	font-size: 14px;
	line-height: 1.4;
	text-align: center;
	padding: 2rem;
	box-sizing: border-box;
}
.ff-about-hero__overlay {
	position: absolute;
	inset: 0;
	background: rgba(26, 26, 46, 0.85);
}
.ff-about-hero__content {
	position: relative;
	z-index: 1;
	max-width: 800px;
}
.ff-about-hero__headline {
	font-family: Georgia, serif;
	font-size: clamp(32px, 4.5vw, 52px);
	line-height: 1.2;
	color: #FFFFFF;
	margin: 0 0 1.25rem;
	font-weight: 400;
}
.ff-about-hero__subtext {
	font-family: Arial, sans-serif;
	font-size: 20px;
	line-height: 1.6;
	color: #FFFFFF;
	margin: 0;
	opacity: 0.95;
}

/* Mission */
.ff-about-mission {
	background: #ffffff;
	padding: 100px 24px;
}
.ff-about-mission__inner {
	max-width: 900px;
	margin: 0 auto;
}
.ff-about-mission__heading {
	font-family: 'Montserrat', sans-serif;
	font-size: 48px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 1.5rem;
	line-height: 1.2;
}
.ff-about-mission__text {
	font-family: Arial, sans-serif;
	font-size: 20px;
	line-height: 1.9;
	color: #555555;
	margin: 0;
}

/* Anna's Story */
.ff-about-story {
	padding: 120px 24px;
	background: #ffffff;
}
.ff-about-story__inner {
	max-width: 1100px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 4rem;
	align-items: start;
}
.ff-about-story__photo {
	width: 100%;
	aspect-ratio: 3 / 4;
	max-height: 560px;
	object-fit: cover;
	border-radius: 12px;
	background: #F5F5F7;
	border: 2px dashed rgba(0,0,0,0.1);
}
.ff-about-story__photo-placeholder {
	width: 100%;
	aspect-ratio: 3 / 4;
	max-height: 560px;
	border-radius: 12px;
	background: rgba(0,0,0,0.06);
	border: 2px dashed rgba(0,0,0,0.2);
	display: flex;
	align-items: center;
	justify-content: center;
	color: #888;
	font-family: Arial, sans-serif;
	font-size: 14px;
	text-align: center;
	padding: 1rem;
	box-sizing: border-box;
}
.ff-about-story__content h2 {
	font-family: 'Montserrat', sans-serif;
	font-size: 36px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 1.5rem;
}
.ff-about-story__content p {
	font-family: Arial, sans-serif;
	font-size: 18px;
	line-height: 1.8;
	color: #555555;
	margin: 0 0 1.25rem;
}
.ff-about-story__content p:last-child { margin-bottom: 0; }

/* Her Work */
.ff-about-work {
	background: #F5F5F7;
	padding: 100px 24px;
}
.ff-about-work__heading {
	font-family: 'Montserrat', sans-serif;
	font-size: 42px;
	font-weight: 700;
	color: #2D1B69;
	text-align: center;
	margin: 0 0 3rem;
}
.ff-about-work__grid {
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	gap: 2.5rem;
	max-width: 900px;
	margin: 0 auto;
}
.ff-about-work__item {
	display: flex;
	flex-direction: column;
	align-items: flex-start;
}
.ff-about-work__icon {
	width: 60px;
	height: 60px;
	border-radius: 50%;
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	margin-bottom: 1rem;
	flex-shrink: 0;
}
.ff-about-work__icon-placeholder {
	width: 60px;
	height: 60px;
	border-radius: 50%;
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	margin-bottom: 1rem;
	flex-shrink: 0;
}
.ff-about-work__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 20px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 0.5rem;
}
.ff-about-work__desc {
	font-family: Arial, sans-serif;
	font-size: 16px;
	line-height: 1.7;
	color: #555555;
	margin: 0;
}

/* The Vision */
.ff-about-vision {
	background: #2D1B69;
	padding: 100px 24px;
	text-align: center;
}
.ff-about-vision__heading {
	font-family: 'Montserrat', sans-serif;
	font-size: 42px;
	font-weight: 700;
	color: #FFFFFF;
	margin: 0 0 1.5rem;
}
.ff-about-vision__text {
	font-family: Arial, sans-serif;
	font-size: 20px;
	line-height: 1.8;
	color: rgba(255,255,255,0.95);
	max-width: 700px;
	margin: 0 auto 3rem;
}
.ff-about-vision__cards {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	gap: 1.5rem;
	max-width: 1000px;
	margin: 0 auto;
}
.ff-about-vision__card {
	background: rgba(0,0,0,0.25);
	border-radius: 12px;
	padding: 2rem;
	min-width: 220px;
	max-width: 280px;
	text-align: center;
	position: relative;
}
.ff-about-vision__card--active { background: rgba(79, 195, 247, 0.15); border: 1px solid rgba(79, 195, 247, 0.4); }
.ff-about-vision__card-title {
	font-family: 'Montserrat', sans-serif;
	font-size: 18px;
	font-weight: 700;
	color: #FFFFFF;
	margin: 0 0 0.25rem;
}
.ff-about-vision__card-tag {
	font-family: Arial, sans-serif;
	font-size: 14px;
	color: rgba(255,255,255,0.85);
	display: block;
	margin-top: 0.25rem;
}
.ff-about-vision__card-badge {
	position: absolute;
	top: 12px;
	right: 12px;
	font-family: Arial, sans-serif;
	font-size: 11px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	color: rgba(255,255,255,0.8);
	background: rgba(255,255,255,0.2);
	padding: 4px 10px;
	border-radius: 20px;
}

/* Retreat CTA */
.ff-about-cta {
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	padding: 80px 24px;
	text-align: center;
}
.ff-about-cta__heading {
	font-family: 'Montserrat', sans-serif;
	font-size: 36px;
	font-weight: 700;
	color: #FFFFFF;
	margin: 0 0 1rem;
}
.ff-about-cta__text {
	font-family: Arial, sans-serif;
	font-size: 18px;
	line-height: 1.7;
	color: rgba(255,255,255,0.95);
	max-width: 560px;
	margin: 0 auto 2rem;
}
.ff-about-cta__btn {
	display: inline-block;
	background: #FFFFFF;
	color: #2D1B69;
	font-family: 'Montserrat', sans-serif;
	font-weight: 600;
	font-size: 16px;
	padding: 14px 32px;
	border-radius: 40px;
	text-decoration: none;
	transition: opacity 0.2s;
}
.ff-about-cta__btn:hover { opacity: 0.92; color: #2D1B69; }

/* Footer (match front-page) */
#colophon, .site-footer { display: none !important; }
.ff-footer { background: #1A1A2E; width: 100%; margin: 0; }
.ff-footer__top { padding: 60px 40px; max-width: 1400px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 3rem; }
.ff-footer__logo { display: block; margin: 0 0 1rem; }
.ff-footer__tagline { font-family: Arial, sans-serif; font-size: 14px; line-height: 1.8; color: #FFFFFF; margin: 0; }
.ff-footer__heading { font-family: 'Montserrat', sans-serif; font-size: 18px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #FFFFFF; margin: 0 0 1rem; }
.ff-footer__links { display: flex; flex-direction: column; gap: 0; }
.ff-footer__links a { font-family: Arial, sans-serif; font-size: 16px; font-weight: 600; line-height: 2.2; color: #FFFFFF; text-decoration: none; }
.ff-footer__links a:hover { background: linear-gradient(90deg, #4FC3F7 0%, #8B5CF6 50%, #C850C0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
.ff-footer__social { display: flex; gap: 0.75rem; margin-top: 1.25rem; }
.ff-footer__social a { width: 44px; height: 44px; border: 2px solid rgba(255,255,255,0.4); background: transparent; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: border-color 0.2s, transform 0.2s; }
.ff-footer__social a:hover { border-color: #ffffff; transform: scale(1.08); }
.ff-footer__social a svg { width: 22px; height: 22px; }
.ff-footer__social a svg path { fill: #FFFFFF; }
.ff-footer__bottom { background: #111827; padding: 16px 40px; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 1rem; }
.ff-footer__copy { font-family: Arial, sans-serif; font-size: 12px; color: #FFFFFF; margin: 0; }
.ff-footer__legal { display: flex; flex-wrap: wrap; align-items: center; gap: 0.25rem; }
.ff-footer__legal a { font-family: Arial, sans-serif; font-size: 12px; color: #888888; text-decoration: none; }
.ff-footer__legal a:hover { color: #FFFFFF; }
.ff-footer__legal .ff-footer__sep { color: #666; font-size: 12px; margin: 0 0.35rem; }
@media (max-width: 900px) {
	.ff-footer__top { grid-template-columns: 1fr; padding: 40px 24px; }
	.ff-footer__bottom { flex-direction: column; padding: 16px 24px; text-align: center; }
	.ff-about-story__inner { grid-template-columns: 1fr; }
	.ff-about-work__grid { grid-template-columns: 1fr; }
	.ff-about-vision__cards { flex-direction: column; align-items: center; }
}
</style>

<main class="ff-page ff-about">

	<section class="ff-about-hero">
		<div class="ff-about-hero__bg"></div>
		<div class="ff-about-hero__photo" aria-hidden="true">Anna hero — full width, landscape, retreat/speaking photo ideal</div>
		<div class="ff-about-hero__overlay"></div>
		<div class="ff-about-hero__content">
			<h1 class="ff-about-hero__headline">She doesn't teach from a distance.</h1>
			<p class="ff-about-hero__subtext">Anna Forsberg has spent over a decade walking alongside parishes, families, and individuals as they try — imperfectly, honestly, faithfully — to live what they believe.</p>
		</div>
	</section>

	<section class="ff-about-mission">
		<div class="ff-about-mission__inner">
			<h2 class="ff-about-mission__heading">Faith that goes all the way down.</h2>
			<p class="ff-about-mission__text">Faith Formers exists because formation doesn't happen only on Sunday. It happens in parish halls at 7pm when the room is half-empty and someone finally says the thing they've been carrying all year. It happens at dinner tables, in quiet moments, in the middle of ordinary Tuesdays. Anna built this for those moments.</p>
		</div>
	</section>

	<section class="ff-about-story">
		<div class="ff-about-story__inner">
			<div class="ff-about-story__photo-placeholder">Editorial portrait — tall, Anna, professional/approachable</div>
			<div class="ff-about-story__content">
				<h2>Anna's Story</h2>
				<p>Anna Forsberg is the voice and pastoral heart of Faith Formers. She has spent over a decade in parish ministry, walking alongside DREs, catechists, parents, and individuals as they try — imperfectly, honestly, faithfully — to live what they believe.</p>
				<p>She serves as Director of Family Faith Formation at Holy Spirit Catholic Church in Las Vegas, Nevada. Her work there is the living proof of concept behind everything Faith Formers teaches: formation that meets people where they are, in the parish hall at 7pm, at the dinner table, in the middle of ordinary Tuesdays.</p>
				<p>Anna's voice is warm, pastoral, and non-preachy — she invites, never lectures. She points toward encounter, not herself. Faith Formers exists because she wanted to extend that presence beyond one parish: formation for the parish, faith for the home, quiet for the heart.</p>
			</div>
		</div>
	</section>

	<section class="ff-about-work">
		<h2 class="ff-about-work__heading">Her Work</h2>
		<div class="ff-about-work__grid">
			<div class="ff-about-work__item">
				<div class="ff-about-work__icon-placeholder"></div>
				<h3 class="ff-about-work__title">Sacramental Preparation</h3>
				<p class="ff-about-work__desc">Anna designs and leads preparation experiences for First Communion, Confirmation, and RCIA. Sessions are built for real families and real schedules — formation that sticks.</p>
			</div>
			<div class="ff-about-work__item">
				<div class="ff-about-work__icon-placeholder"></div>
				<h3 class="ff-about-work__title">Adult Faith Formation</h3>
				<p class="ff-about-work__desc">From parish staff development to small-group series, she creates spaces where adults can ask hard questions and grow in faith without being talked down to.</p>
			</div>
			<div class="ff-about-work__item">
				<div class="ff-about-work__icon-placeholder"></div>
				<h3 class="ff-about-work__title">Retreat Facilitation</h3>
				<p class="ff-about-work__desc">Commissioned retreats for parishes, women's groups, and formation teams. Each retreat is designed in conversation with the hosting community — no one-size-fits-all.</p>
			</div>
			<div class="ff-about-work__item">
				<div class="ff-about-work__icon-placeholder"></div>
				<h3 class="ff-about-work__title">Curriculum Development</h3>
				<p class="ff-about-work__desc">Liturgical-year resources, session plans, and family faith practices that parishes and families can use week to week. Rooted in the calendar, not content trends.</p>
			</div>
		</div>
	</section>

	<section class="ff-about-vision">
		<h2 class="ff-about-vision__heading">Bigger Than One Voice</h2>
		<p class="ff-about-vision__text">Faith Formers is the beginning of something larger. A community of projects and people committed to making Catholic faith relevant, integrated, and deeply human — in the parish, in the home, and in the culture.</p>
		<div class="ff-about-vision__cards">
			<div class="ff-about-vision__card ff-about-vision__card--active">
				<span class="ff-about-vision__card-title">Faith Formers</span>
				<span class="ff-about-vision__card-tag">Content &amp; community</span>
			</div>
			<div class="ff-about-vision__card">
				<span class="ff-about-vision__card-badge">Coming soon</span>
				<span class="ff-about-vision__card-title">ProParish</span>
				<span class="ff-about-vision__card-tag">Parish tools</span>
			</div>
			<div class="ff-about-vision__card">
				<span class="ff-about-vision__card-badge">Coming soon</span>
				<span class="ff-about-vision__card-title">The Manna Project</span>
				<span class="ff-about-vision__card-tag">Daily nourishment</span>
			</div>
		</div>
	</section>

	<section class="ff-about-cta">
		<h2 class="ff-about-cta__heading">Invite Anna to Lead a Retreat</h2>
		<p class="ff-about-cta__text">Anna leads commissioned retreats for parishes, women's groups, and formation teams. Each retreat is designed in conversation with the hosting community.</p>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ff-about-cta__btn">Get in Touch</a>
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
