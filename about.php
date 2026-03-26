<?php
/**
 * Template Name: About
 * About Anna page: hero, mission, story, her work, vision, retreat CTA.
 *
 * @package Faith_Formers_Child
 */

get_header();
?>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap');

html { scroll-behavior: smooth; }
html, body { margin: 0; padding: 0; background-color: #F5EDE0; }
.ff-page { font-family: 'Instrument Sans', sans-serif; color: #4A4740; margin: 0; padding: 0; width: 100%; }
.ff-page h1, .ff-page h2, .ff-page h3 { font-family: 'Instrument Sans', sans-serif; font-weight: 600; }
body.admin-bar .ff-about-hero { padding-top: 112px !important; }

/* About Hero — full viewport, brand gradient, Faith Formers led, no photo */
.ff-about-hero {
	min-height: 100vh;
	width: 100%;
	position: relative;
	display: flex;
	align-items: center;
	justify-content: center;
	text-align: center;
	padding: 80px 24px 80px;
	box-sizing: border-box;
	background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C);
}
.ff-about-hero__content {
	position: relative;
	z-index: 1;
	max-width: 650px;
}
.ff-about-hero__label {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 16px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 4px;
	color: rgba(255, 255, 255, 0.7);
	margin: 0 0 1rem;
}
.ff-about-hero__headline {
	font-family: 'Instrument Sans', sans-serif;
	font-size: clamp(50px, 6vw, 96px);
	font-weight: 700;
	line-height: 1.15;
	color: #FFFFFF;
	margin: 0 0 1.5rem;
}
.ff-about-hero__subtext {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 22px;
	line-height: 1.9;
	color: #FFFFFF;
	margin: 0 auto;
	max-width: 650px;
	opacity: 0.95;
}

/* Mission — accent line, larger quote, larger body */
.ff-about-mission {
	background: #ffffff;
	padding: 160px 24px;
}
.ff-about-mission__inner {
	max-width: 900px;
	margin: 0 auto;
	text-align: center;
}
.ff-about-mission__accent {
	width: 60px;
	height: 4px;
	background: linear-gradient(90deg, #7DD3C0, #00BFFF, #E91E8C);
	margin: 0 auto 2rem;
	border-radius: 2px;
}
.ff-about-mission__quote {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 36px;
	font-style: italic;
	line-height: 1.5;
	color: #18160F;
	margin: 0 auto 2rem;
	max-width: 800px;
}
.ff-about-mission__text {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 20px;
	line-height: 1.9;
	color: #18160F;
	font-weight: 500;
	margin: 0 auto;
	max-width: 680px;
}

/* Anna's Story — hero image, then alternate left/right blocks */
.ff-about-story { background: #ffffff; padding: 0 24px 0; }
.ff-about-story__hero-img {
	width: 100%;
	height: 400px;
	border-radius: 16px;
	background: #F5EDE0;
	display: flex;
	align-items: center;
	justify-content: center;
	color: #9A9488;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 14px;
	text-align: center;
	margin-bottom: 0;
}
.ff-about-story__block {
	display: grid;
	grid-template-columns: 1fr 1fr;
	gap: 0;
	min-height: 520px;
	align-items: stretch;
}
.ff-about-story__stat-wrap {
	padding: 100px 60px;
	display: flex;
	align-items: center;
	justify-content: center;
}
.ff-about-story__img-wrap {
	position: relative;
	min-height: 400px;
}
.ff-about-story__img-wrap img { width: 100%; height: 100%; object-fit: cover; display: block; }
.ff-about-story__img-placeholder {
	width: 100%;
	height: 100%;
	min-height: 520px;
	background: #F5EDE0;
}
.ff-about-story__block:not(.ff-about-story__block--reverse) .ff-about-story__img-placeholder { border-radius: 0 16px 16px 0; }
.ff-about-story__content-wrap {
	padding: 100px 60px;
	display: flex;
	flex-direction: column;
	justify-content: center;
}
.ff-about-story__content h2 {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 48px;
	font-weight: 700;
	letter-spacing: 0.5px;
	color: #18160F;
	margin: 0 0 1.5rem;
}
.ff-about-story__content p {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 20px;
	line-height: 1.9;
	color: #4A4740;
	margin: 0 0 1.25rem;
}
.ff-about-story__content p:last-child { margin-bottom: 0; }
.ff-about-story__block--stat .ff-about-story__content p {
	font-size: 22px;
	color: #18160F;
	font-weight: 600;
	line-height: 1.9;
}
.ff-about-story__stat {
	text-align: center;
	padding: 1rem 0;
}
.ff-about-story__stat-value {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 120px;
	font-weight: 900;
	line-height: 1;
	letter-spacing: 0.5px;
	background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	background-clip: text;
	margin: 0 0 0.5rem;
}
.ff-about-story__stat-label {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 18px;
	font-weight: 600;
	line-height: 1.9;
	color: #18160F;
	margin: 0;
}

/* Her Work — larger cards, 80px icons, more padding */
.ff-about-work {
	background: #F5EDE0;
	padding: 120px 24px;
}
.ff-about-work__heading {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 58px;
	font-weight: 700;
	letter-spacing: 0.5px;
	color: #18160F;
	text-align: center;
	margin: 0 0 1rem;
}
.ff-about-work__intro {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 20px;
	line-height: 1.9;
	color: #4A4740;
	text-align: center;
	max-width: 700px;
	margin: 0 auto 4rem;
}
.ff-about-work__grid {
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	gap: 3rem;
	max-width: 1000px;
	margin: 0 auto;
}
.ff-about-work__item {
	display: flex;
	flex-direction: column;
	align-items: flex-start;
	background: #ffffff;
	padding: 3.125rem;
	border-radius: 16px;
	box-shadow: 0 2px 20px rgba(0,0,0,0.06);
}
.ff-about-work__icon-placeholder {
	width: 80px;
	height: 80px;
	border-radius: 50%;
	background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C);
	margin-bottom: 1.5rem;
	flex-shrink: 0;
}
.ff-about-work__title {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 26px;
	font-weight: 700;
	letter-spacing: 0.5px;
	color: #18160F;
	margin: 0 0 0.75rem;
}
.ff-about-work__desc {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 17px;
	line-height: 1.9;
	color: #4A4740;
	margin: 0;
}

/* The Vision — full-width stacked cards, watermark name left, content right */
.ff-about-vision {
	background: #18160F;
	padding: 120px 24px;
}
.ff-about-vision__heading {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 58px;
	font-weight: 700;
	letter-spacing: 0.5px;
	color: #FFFFFF;
	text-align: center;
	margin: 0 0 1rem;
}
.ff-about-vision__text {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 20px;
	line-height: 1.9;
	color: rgba(255,255,255,0.95);
	max-width: 720px;
	margin: 0 auto 4rem;
	text-align: center;
}
.ff-about-vision__cards {
	display: flex;
	flex-direction: column;
	gap: 2rem;
	max-width: 1100px;
	margin: 0 auto;
}
.ff-about-vision__card {
	height: 160px;
	display: flex;
	align-items: center;
	justify-content: center;
	background: rgba(0,0,0,0.2);
	border-radius: 16px;
	padding: 1.5rem 2rem;
	position: relative;
	overflow: hidden;
}
.ff-about-vision__card--active { background: rgba(125, 211, 192, 0.12); }
.ff-about-vision__card-watermark {
	position: absolute;
	inset: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 77px;
	font-weight: 800;
	line-height: 1.1;
	letter-spacing: 0.5px;
	color: rgba(255,255,255,0.12);
	text-transform: uppercase;
	pointer-events: none;
}
.ff-about-vision__card-body {
	position: relative;
	z-index: 1;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	text-align: center;
	width: 100%;
}
.ff-about-vision__card-badge {
	position: absolute;
	top: 0;
	right: 0;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 12px;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	color: #ffffff;
	background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C);
	padding: 8px 18px;
	border-radius: 40px;
}
.ff-about-vision__card-title {
	display: block;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 29px;
	font-weight: 700;
	letter-spacing: 0.5px;
	color: #FFFFFF;
	margin: 0 0 0.25rem;
}
.ff-about-vision__card-tag {
	display: block;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 15px;
	line-height: 1.5;
	color: rgba(255,255,255,0.9);
	margin: 0;
}

/* Retreat CTA — larger button + reassurance line */
.ff-about-cta {
	background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C);
	padding: 100px 24px;
	text-align: center;
}
.ff-about-cta__heading {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 48px;
	font-weight: 700;
	letter-spacing: 0.5px;
	color: #FFFFFF;
	margin: 0 0 1rem;
}
.ff-about-cta__text {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 20px;
	line-height: 1.9;
	color: rgba(255,255,255,0.95);
	max-width: 560px;
	margin: 0 auto 2rem;
}
.ff-about-cta__btn {
	display: inline-block;
	background: #FFFFFF;
	color: #18160F;
	font-family: 'Instrument Sans', sans-serif;
	font-weight: 600;
	font-size: 18px;
	letter-spacing: 0.5px;
	padding: 18px 40px;
	border-radius: 40px;
	text-decoration: none;
	transition: opacity 0.2s;
}
.ff-about-cta__btn:hover { opacity: 0.92; color: #18160F; }
.ff-about-cta__reassurance {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 17px;
	line-height: 1.9;
	color: rgba(255,255,255,0.9);
	margin: 1rem 0 0;
}

@media (max-width: 900px) {
	.ff-about-hero__headline { font-size: clamp(36px, 8vw, 96px); }
	.ff-about-story__hero-img { height: 280px; }
	.ff-about-story__block { grid-template-columns: 1fr; min-height: 0; }
	.ff-about-story__img-placeholder { min-height: 320px; border-radius: 16px; }
	.ff-about-story__stat-value { font-size: 80px; }
	.ff-about-story__content-wrap,
	.ff-about-story__stat-wrap { padding: 60px 24px; }
	.ff-about-work__grid { grid-template-columns: 1fr; }
	.ff-about-vision__card { padding: 1rem 1.25rem; }
	.ff-about-vision__card-watermark { font-size: 48px; }
	.ff-about-vision__card-title { font-size: 22px; }
	.ff-about-vision__card-tag { font-size: 14px; }
}
</style>

<main class="ff-page ff-about">

	<section class="ff-about-hero">
		<div class="ff-about-hero__content">
			<p class="ff-about-hero__label">About Faith Formers</p>
			<h1 class="ff-about-hero__headline">Formation that goes all the way down.</h1>
			<p class="ff-about-hero__subtext">For the parish. For the home. For the heart. Faith Formers exists for the moments that actually change people.</p>
		</div>
	</section>

	<section class="ff-about-mission">
		<div class="ff-about-mission__inner">
			<div class="ff-about-mission__accent"></div>
			<p class="ff-about-mission__quote">Formation doesn't happen only on Sunday. It happens in the half-empty parish hall at 7pm when someone finally says the thing they've been carrying all year. It happens at the dinner table, in the car, in the quiet before everyone wakes up. We built this for those moments.</p>
			<p class="ff-about-mission__text">Faith Formers is a Catholic content community for formation professionals, families, and anyone who wants their faith to go deeper than Sunday morning. We believe formation is a posture, not a programme — and that the right resource, at the right moment, can change everything.</p>
		</div>
	</section>

	<section class="ff-about-story">
		<div class="ff-about-story__hero-img">Community photo — parish gathering, not mass</div>
		<!-- Block 1: image LEFT (full height, radius 0 left / 16px right), text RIGHT -->
		<div class="ff-about-story__block">
			<div class="ff-about-story__img-wrap">
				<div class="ff-about-story__img-placeholder"></div>
			</div>
			<div class="ff-about-story__content-wrap">
				<div class="ff-about-story__content">
					<h2>Anna's Story</h2>
					<p>Anna Forsberg has been doing this work since she was 19 years old — not because she had to, but because she couldn't imagine doing anything else. She started in Youth Ministry in England, studied theology and education, ran her own formation company, and has spent the last decade as Director of Family Faith Formation at Holy Spirit Catholic Church in Las Vegas.</p>
					<p>Thirty years in. She's still surprised by what happens when people are given permission to go deeper. That surprise — that reverence for what formation actually does to people — is what drives everything at Faith Formers.</p>
				</div>
			</div>
		</div>
		<!-- Block 2: text LEFT (Thirty years...), stat RIGHT (30 Years) -->
		<div class="ff-about-story__block ff-about-story__block--stat">
			<div class="ff-about-story__content-wrap">
				<div class="ff-about-story__content">
					<p>Thirty years in. She's still surprised by what happens when people are given permission to go deeper. That surprise — that reverence for what formation actually does to people — is what drives everything at Faith Formers.</p>
				</div>
			</div>
			<div class="ff-about-story__stat-wrap">
				<div class="ff-about-story__stat">
					<div class="ff-about-story__stat-value">30 Years</div>
					<p class="ff-about-story__stat-label">in Catholic formation &amp; ministry</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ff-about-work">
		<h2 class="ff-about-work__heading">Her Work</h2>
		<p class="ff-about-work__intro">Anna brings thirty years of frontline formation experience to everything she creates. Here's what that looks like in practice.</p>
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
		<p class="ff-about-vision__text">Faith Formers is the beginning of something larger. A community of projects committed to making Catholic faith relevant, integrated, and deeply human — in the parish, in the home, and in the culture.</p>
		<div class="ff-about-vision__cards">
			<div class="ff-about-vision__card ff-about-vision__card--active">
				<div class="ff-about-vision__card-watermark">Faith Formers</div>
				<div class="ff-about-vision__card-body">
					<span class="ff-about-vision__card-title">Faith Formers</span>
					<span class="ff-about-vision__card-tag">Formation content for the parish, home &amp; heart</span>
				</div>
			</div>
			<div class="ff-about-vision__card">
				<div class="ff-about-vision__card-watermark">ProParish</div>
				<div class="ff-about-vision__card-body">
					<span class="ff-about-vision__card-badge">Coming soon</span>
					<span class="ff-about-vision__card-title">ProParish</span>
					<span class="ff-about-vision__card-tag">Technology, AV &amp; operations for the modern parish</span>
				</div>
			</div>
			<div class="ff-about-vision__card">
				<div class="ff-about-vision__card-watermark">Manna</div>
				<div class="ff-about-vision__card-body">
					<span class="ff-about-vision__card-badge">Coming soon</span>
					<span class="ff-about-vision__card-title">The Manna Project</span>
					<span class="ff-about-vision__card-tag">Creative nourishment — Catholic art, music &amp; culture with a mainstream edge</span>
				</div>
			</div>
		</div>
	</section>

	<section class="ff-about-cta">
		<h2 class="ff-about-cta__heading">Invite Anna to Lead a Retreat</h2>
		<p class="ff-about-cta__text">Anna leads commissioned retreats for parishes, women's groups, and formation teams. Each retreat is designed in conversation with the hosting community.</p>
		<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ff-about-cta__btn">Get in Touch</a>
		<p class="ff-about-cta__reassurance">Anna personally responds to all retreat enquiries.</p>
	</section>

</main>

<?php get_footer(); ?>
