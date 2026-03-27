<?php
/**
 * Template Name: About
 * About Anna — clean editorial rebuild.
 *
 * @package Faith_Formers_Child
 */

get_header();
?>

<style>
/* ── About Page ─────────────────────────────────────────── */
.ff-about { font-family: 'Instrument Sans', sans-serif; }

/* ── 1. Hero ─────────────────────────────────────────────── */
.ff-about-hero {
	display: grid;
	grid-template-columns: 1fr 1fr;
	min-height: 600px;
	max-width: 1200px;
	margin: 0 auto;
	background: #FAF7F2;
}
.ff-about-hero__portrait {
	position: relative;
	overflow: hidden;
	min-height: 500px;
}
.ff-about-hero__portrait img {
	width: 100%; height: 100%; object-fit: cover; display: block;
}
.ff-about-hero__portrait-placeholder {
	width: 100%; height: 100%; min-height: 500px;
	background: #EDE3D0;
	display: flex; flex-direction: column;
	align-items: center; justify-content: center;
	color: #9B8E7E; font-size: 0.875rem; text-align: center;
	padding: 24px; gap: 6px;
}
.ff-about-hero__content {
	padding: 80px 64px;
	display: flex; flex-direction: column; justify-content: center;
}
.ff-about-hero__eyebrow {
	font-size: 13px; font-weight: 700;
	text-transform: uppercase; letter-spacing: 3px;
	color: #2B4C7E; margin: 0 0 1.25rem;
}
.ff-about-hero__headline {
	font-size: clamp(2.2rem, 3.5vw, 3.5rem);
	font-weight: 800; line-height: 1.1;
	color: #1A1A2E; margin: 0 0 1.5rem;
	letter-spacing: -0.5px;
}
.ff-about-hero__subtext {
	font-size: 19px; line-height: 1.8;
	color: #5A5A6E; margin: 0 0 2.5rem;
	max-width: 420px;
}
.ff-about-hero__stats {
	display: flex; gap: 40px;
	border-top: 1px solid rgba(26,26,46,0.1);
	padding-top: 2rem;
}
.ff-about-hero__stat-num {
	font-size: 2.5rem; font-weight: 900;
	color: #2B4C7E; line-height: 1; display: block;
}
.ff-about-hero__stat-label {
	font-size: 0.78rem; font-weight: 600;
	text-transform: uppercase; letter-spacing: 1px;
	color: #9B8E7E; margin-top: 4px; display: block;
}

/* ── 2. Mission ──────────────────────────────────────────── */
.ff-about-mission {
	background: #FFFFFF;
	padding: 120px 24px;
}
.ff-about-mission__inner {
	max-width: 780px; margin: 0 auto;
}
.ff-about-mission__quote {
	font-size: clamp(1.2rem, 2vw, 1.5rem);
	font-style: italic; line-height: 1.75;
	color: #1A1A2E;
	border-left: 4px solid #2B4C7E;
	padding-left: 2rem;
	margin: 0 0 2rem;
}
.ff-about-mission__body {
	font-size: 18px; line-height: 1.9;
	color: #5A5A6E;
	padding-left: calc(2rem + 4px);
	margin: 0;
}

/* ── 3. Stats band ───────────────────────────────────────── */
.ff-about-stats {
	background: #F5EDE0;
	padding: 80px 24px;
}
.ff-about-stats__inner {
	max-width: 900px; margin: 0 auto;
	display: flex;
}
.ff-about-stats__item {
	flex: 1; text-align: center;
	padding: 0 24px;
	border-right: 1px solid rgba(26,26,46,0.1);
}
.ff-about-stats__item:last-child { border-right: none; }
.ff-about-stats__num {
	font-size: clamp(2.75rem, 5vw, 4.5rem);
	font-weight: 900; line-height: 1;
	color: #2B4C7E; display: block; margin-bottom: 12px;
}
.ff-about-stats__label {
	font-size: 0.9rem; line-height: 1.5;
	color: #5A5A6E; font-weight: 500;
	margin: 0;
}

/* ── 4. Anna's Story ─────────────────────────────────────── */
.ff-about-story {
	background: #FAF7F2;
	padding: 120px 24px;
}
.ff-about-story__inner {
	max-width: 680px; margin: 0 auto;
}
.ff-about-story__eyebrow {
	font-size: 13px; font-weight: 700;
	text-transform: uppercase; letter-spacing: 3px;
	color: #2B4C7E; margin: 0 0 1.25rem;
}
.ff-about-story__heading {
	font-size: clamp(1.9rem, 3vw, 2.75rem);
	font-weight: 800; line-height: 1.15;
	color: #1A1A2E; margin: 0 0 2rem;
	letter-spacing: -0.5px;
}
.ff-about-story__body p {
	font-size: 19px; line-height: 1.9;
	color: #4A4740; margin: 0 0 1.5rem;
}
.ff-about-story__body p:last-child { margin-bottom: 0; }

/* ── 5. Her Work ─────────────────────────────────────────── */
.ff-about-work {
	background: #F5EDE0;
	padding: 120px 24px;
}
.ff-about-work__inner {
	max-width: 1040px; margin: 0 auto;
}
.ff-about-work__header {
	text-align: center; margin-bottom: 64px;
}
.ff-about-work__heading {
	font-size: clamp(1.9rem, 3vw, 2.75rem);
	font-weight: 800; color: #1A1A2E;
	letter-spacing: -0.5px; margin: 0 0 1rem;
}
.ff-about-work__intro {
	font-size: 18px; line-height: 1.8;
	color: #5A5A6E; max-width: 580px; margin: 0 auto;
}
.ff-about-work__grid {
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	gap: 2rem;
}
.ff-about-work__card {
	background: #FFFFFF;
	border-radius: 16px;
	padding: 2.5rem;
	box-shadow: 0 2px 16px rgba(0,0,0,0.05);
}
.ff-about-work__num {
	font-size: 0.78rem; font-weight: 800;
	text-transform: uppercase; letter-spacing: 2px;
	color: #2B4C7E; margin: 0 0 1.25rem; display: block;
}
.ff-about-work__title {
	font-size: 22px; font-weight: 700;
	color: #1A1A2E; margin: 0 0 0.75rem;
	letter-spacing: -0.25px;
}
.ff-about-work__desc {
	font-size: 16px; line-height: 1.8;
	color: #5A5A6E; margin: 0;
}

/* ── 6. The Vision ───────────────────────────────────────── */
.ff-about-vision {
	background: #1A1A2E;
	padding: 120px 24px;
}
.ff-about-vision__inner {
	max-width: 860px; margin: 0 auto;
}
.ff-about-vision__header {
	text-align: center; margin-bottom: 64px;
}
.ff-about-vision__eyebrow {
	font-size: 13px; font-weight: 700;
	text-transform: uppercase; letter-spacing: 3px;
	color: rgba(255,255,255,0.4); margin: 0 0 1rem;
}
.ff-about-vision__heading {
	font-size: clamp(1.9rem, 3vw, 2.75rem);
	font-weight: 800; color: #FFFFFF;
	letter-spacing: -0.5px; margin: 0 0 1rem;
}
.ff-about-vision__subtext {
	font-size: 18px; line-height: 1.8;
	color: rgba(255,255,255,0.55);
	max-width: 560px; margin: 0 auto;
}
.ff-about-vision__cards {
	display: flex; flex-direction: column; gap: 1.25rem;
}
.ff-about-vision__card {
	background: #FFFFFF;
	border-radius: 16px;
	padding: 2rem 2.5rem;
	display: flex; align-items: center; justify-content: space-between;
	gap: 24px;
	border-top: 4px solid transparent;
}
.ff-about-vision__card--ff    { border-top-color: #4FC3F7; }
.ff-about-vision__card--pp    { border-top-color: #8B5CF6; }
.ff-about-vision__card--manna { border-top-color: #C850C0; }
.ff-about-vision__card-text { flex: 1; }
.ff-about-vision__card-name {
	font-size: 22px; font-weight: 800;
	color: #1A1A2E; letter-spacing: -0.25px;
	margin: 0 0 0.4rem; display: block;
}
.ff-about-vision__card-desc {
	font-size: 16px; line-height: 1.6;
	color: #5A5A6E; margin: 0;
}
.ff-about-vision__card-badge {
	font-size: 11px; font-weight: 700;
	text-transform: uppercase; letter-spacing: 1.5px;
	color: #FFFFFF; white-space: nowrap; flex-shrink: 0;
	padding: 6px 14px; border-radius: 100px;
}
.ff-about-vision__card--pp    .ff-about-vision__card-badge { background: #8B5CF6; }
.ff-about-vision__card--manna .ff-about-vision__card-badge { background: #C850C0; }

/* ── 7. CTA ──────────────────────────────────────────────── */
.ff-about-cta {
	background: #2B4C7E;
	padding: 100px 24px;
	text-align: center;
}
.ff-about-cta__heading {
	font-size: clamp(1.9rem, 3vw, 2.75rem);
	font-weight: 800; color: #FFFFFF;
	letter-spacing: -0.5px; margin: 0 0 1rem;
}
.ff-about-cta__text {
	font-size: 19px; line-height: 1.8;
	color: rgba(255,255,255,0.75);
	max-width: 520px; margin: 0 auto 2.5rem;
}
.ff-about-cta__actions {
	display: flex; gap: 16px;
	justify-content: center; flex-wrap: wrap;
}
.ff-about-cta__btn-primary {
	display: inline-block;
	background: #E91E8C; color: #FFFFFF;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 16px; font-weight: 700;
	padding: 16px 40px; border-radius: 100px;
	text-decoration: none;
	transition: background 0.2s, transform 0.2s;
}
.ff-about-cta__btn-primary:hover { background: #c01575; transform: translateY(-1px); }
.ff-about-cta__btn-secondary {
	display: inline-block;
	background: rgba(255,255,255,0.15); color: #FFFFFF;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 16px; font-weight: 600;
	padding: 16px 40px; border-radius: 100px;
	text-decoration: none;
	transition: background 0.2s;
}
.ff-about-cta__btn-secondary:hover { background: rgba(255,255,255,0.25); }

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 860px) {
	.ff-about-hero { grid-template-columns: 1fr; }
	.ff-about-hero__portrait,
	.ff-about-hero__portrait-placeholder { min-height: 300px; }
	.ff-about-hero__content { padding: 56px 24px; }
	.ff-about-hero__subtext { max-width: 100%; }
	.ff-about-stats__inner { flex-direction: column; gap: 0; }
	.ff-about-stats__item {
		border-right: none;
		border-bottom: 1px solid rgba(26,26,46,0.1);
		padding: 40px 0;
	}
	.ff-about-stats__item:first-child { padding-top: 0; }
	.ff-about-stats__item:last-child { border-bottom: none; padding-bottom: 0; }
	.ff-about-work__grid { grid-template-columns: 1fr; }
	.ff-about-vision__card { flex-direction: column; align-items: flex-start; }
}
@media (max-width: 560px) {
	.ff-about-hero__stats { flex-direction: column; gap: 20px; }
	.ff-about-cta__actions { flex-direction: column; align-items: center; }
	.ff-about-mission__body { padding-left: 0; }
}
</style>

<main class="ff-about">

	<!-- 1. HERO -->
	<section class="ff-about-hero">
		<div class="ff-about-hero__portrait">
			<?php
			$portrait_id  = get_theme_mod( 'ff_about_portrait' );
			$portrait_url = $portrait_id ? wp_get_attachment_image_url( $portrait_id, 'large' ) : '';
			if ( $portrait_url ) : ?>
				<img src="<?php echo esc_url( $portrait_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) . ' — Anna Forsberg' ); ?>">
			<?php else : ?>
				<div class="ff-about-hero__portrait-placeholder">
					<span>Anna's portrait</span>
					<span style="opacity:.55;font-size:0.75rem;">Upload via Customizer → About Page</span>
				</div>
			<?php endif; ?>
		</div>

		<div class="ff-about-hero__content">
			<p class="ff-about-hero__eyebrow">About Faith Formers</p>
			<h1 class="ff-about-hero__headline">Formation that goes all the way down.</h1>
			<p class="ff-about-hero__subtext">For the parish. For the home. For the heart. Faith Formers exists for the moments that actually change people.</p>
		</div>
	</section>

	<!-- 2. MISSION -->
	<section class="ff-about-mission">
		<div class="ff-about-mission__inner">
			<blockquote class="ff-about-mission__quote">Formation doesn't happen only on Sunday. It happens in the half-empty parish hall at 7pm when someone finally says the thing they've been carrying all year. It happens at the dinner table, in the car, in the quiet before everyone wakes up. We built this for those moments.</blockquote>
			<p class="ff-about-mission__body">Faith Formers is a Catholic content community for formation professionals, families, and anyone who wants their faith to go deeper than Sunday morning. Formation is a posture, not a programme — and the right resource, at the right moment, can change everything.</p>
		</div>
	</section>

	<?php if ( get_theme_mod( 'ff_about_parallax_enabled', false ) ) :
		$community_photo = get_theme_mod( 'ff_about_community_photo', '' );
		if ( $community_photo ) : ?>
	<section style="width:100%;height:500px;overflow:hidden;position:relative;">
		<div style="width:100%;height:140%;top:-20%;position:absolute;background-attachment:fixed;background-size:cover;background-position:center;background-image:url('<?php echo esc_url( $community_photo ); ?>')"></div>
		<div style="position:absolute;inset:0;background:rgba(26,43,74,0.15)"></div>
	</section>
	<?php endif; endif; ?>

	<!-- 3. STATS BAND -->
	<section class="ff-about-stats">
		<div class="ff-about-stats__inner">
			<div class="ff-about-stats__item">
				<span class="ff-about-stats__num">30 Yrs</span>
				<p class="ff-about-stats__label">in Catholic formation &amp; ministry</p>
			</div>
			<div class="ff-about-stats__item">
				<span class="ff-about-stats__num">3</span>
				<p class="ff-about-stats__label">Formation pillars — Heart, Home &amp; Parish</p>
			</div>
			<div class="ff-about-stats__item">
				<span class="ff-about-stats__num">100s</span>
				<p class="ff-about-stats__label">of families and parishes served</p>
			</div>
		</div>
	</section>

	<!-- 4. ANNA'S STORY -->
	<section class="ff-about-story">
		<div class="ff-about-story__inner">
			<p class="ff-about-story__eyebrow">Anna's Story</p>
			<h2 class="ff-about-story__heading">Thirty years of formation work. Still surprised by what happens.</h2>
			<div class="ff-about-story__body">
				<p>Anna Forsberg has been doing this work since she was 19 years old — not because she had to, but because she couldn't imagine doing anything else. She started in Youth Ministry in England, studied theology and education, ran her own formation company, and has spent the last decade as Director of Family Faith Formation at Holy Spirit Catholic Church in Las Vegas.</p>
				<p>Thirty years in. She's still surprised by what happens when people are given permission to go deeper. That surprise — that reverence for what formation actually does to people — is what drives everything at Faith Formers.</p>
			</div>
		</div>
	</section>

	<!-- 5. HER WORK -->
	<section class="ff-about-work">
		<div class="ff-about-work__inner">
			<div class="ff-about-work__header">
				<h2 class="ff-about-work__heading">Our Work</h2>
				<p class="ff-about-work__intro">Anna brings thirty years of frontline formation experience to everything we create. Here's what that looks like in practice.</p>
			</div>
			<div class="ff-about-work__grid">
				<div class="ff-about-work__card">
					<span class="ff-about-work__num">01</span>
					<h3 class="ff-about-work__title">Sacramental Preparation</h3>
					<p class="ff-about-work__desc">Anna designs and leads preparation experiences for First Communion, Confirmation, and RCIA. Sessions are built for real families and real schedules — formation that sticks.</p>
				</div>
				<div class="ff-about-work__card">
					<span class="ff-about-work__num">02</span>
					<h3 class="ff-about-work__title">Adult Faith Formation</h3>
					<p class="ff-about-work__desc">From parish staff development to small-group series, she creates spaces where adults can ask hard questions and grow in faith without being talked down to.</p>
				</div>
				<div class="ff-about-work__card">
					<span class="ff-about-work__num">03</span>
					<h3 class="ff-about-work__title">Retreat Facilitation</h3>
					<p class="ff-about-work__desc">Commissioned retreats for parishes, women's groups, and formation teams. Each retreat is designed in conversation with the hosting community — no one-size-fits-all.</p>
				</div>
				<div class="ff-about-work__card">
					<span class="ff-about-work__num">04</span>
					<h3 class="ff-about-work__title">Spiritual Inspiration &amp; Resources</h3>
					<p class="ff-about-work__desc">Weekly reflections, prayer guides, and formation content for anyone who wants their faith to go deeper than Sunday morning — wherever they are in the journey.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- 6. THE VISION -->
	<section class="ff-about-vision">
		<div class="ff-about-vision__inner">
			<div class="ff-about-vision__header">
				<p class="ff-about-vision__eyebrow">The Bigger Picture</p>
				<h2 class="ff-about-vision__heading">Bigger Than One Voice</h2>
				<p class="ff-about-vision__subtext">Faith Formers is the beginning of something larger — a community of projects committed to making Catholic faith relevant, integrated, and deeply human.</p>
			</div>
			<div class="ff-about-vision__cards">
				<div class="ff-about-vision__card ff-about-vision__card--ff">
					<div class="ff-about-vision__card-text">
						<span class="ff-about-vision__card-name">Faith Formers</span>
						<p class="ff-about-vision__card-desc">Formation content for the parish, home &amp; heart</p>
					</div>
				</div>
				<div class="ff-about-vision__card ff-about-vision__card--pp">
					<div class="ff-about-vision__card-text">
						<span class="ff-about-vision__card-name">ProParish</span>
						<p class="ff-about-vision__card-desc">Technology, AV &amp; operations for the modern parish</p>
					</div>
					<span class="ff-about-vision__card-badge">Coming soon</span>
				</div>
				<div class="ff-about-vision__card ff-about-vision__card--manna">
					<div class="ff-about-vision__card-text">
						<span class="ff-about-vision__card-name">The Manna Project</span>
						<p class="ff-about-vision__card-desc">Creative nourishment — Catholic art, music &amp; culture with a mainstream edge</p>
					</div>
					<span class="ff-about-vision__card-badge">Coming soon</span>
				</div>
			</div>
		</div>
	</section>

	<!-- 7. CTA -->
	<section class="ff-about-cta">
		<h2 class="ff-about-cta__heading">Invite Anna to Lead a Retreat</h2>
		<p class="ff-about-cta__text">Anna leads commissioned retreats for parishes, women's groups, and formation teams. Each retreat is designed in conversation with the hosting community.</p>
		<div class="ff-about-cta__actions">
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ff-about-cta__btn-primary">Get in Touch</a>
			<a data-formkit-toggle="0f497b7f18" href="https://faith-formers.kit.com/0f497b7f18" class="ff-about-cta__btn-secondary">Subscribe</a>
		</div>
	</section>

</main>

<?php get_footer(); ?>
