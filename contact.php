<?php
/**
 * Template Name: Contact
 * Contact page: hero, two-column form + expectations, three reason cards.
 *
 * @package Faith_Formers_Child
 */

get_header();
?>

<style>
/* ── Contact Page ────────────────────────────────────────── */
.ff-contact-page {
	font-family: 'Instrument Sans', sans-serif;
	color: #4A4740;
	background: #F5EDE0;
}

/* ── Hero ────────────────────────────────────────────────── */
.ff-contact-hero {
	background: #F5EDE0;
	padding: 100px 40px;
	text-align: center;
}
.ff-contact-hero__inner {
	max-width: 800px;
	margin: 0 auto;
}
.ff-contact-hero__headline {
	font-size: clamp(2.5rem, 5vw, 4rem);
	font-weight: 800;
	line-height: 1.1;
	color: #1A1A2E;
	letter-spacing: -0.5px;
	margin: 0 0 1.25rem;
}
.ff-contact-hero__sub {
	font-size: 19px;
	line-height: 1.8;
	color: #2B4C7E;
	margin: 0;
	max-width: 600px;
	margin-left: auto;
	margin-right: auto;
}

/* ── Form section ────────────────────────────────────────── */
.ff-contact-form-section {
	background: #FFFFFF;
	padding: 80px 40px;
}
.ff-contact-form-section__inner {
	max-width: 900px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: 55% 1fr;
	gap: 4rem;
	align-items: start;
}

/* ── What to expect ──────────────────────────────────────── */
.ff-contact-expect__heading {
	font-size: 24px;
	font-weight: 700;
	color: #1A1A2E;
	margin: 0 0 1.5rem;
	letter-spacing: -0.25px;
}
.ff-contact-expect__list {
	list-style: none;
	margin: 0;
	padding: 0;
}
.ff-contact-expect__item {
	display: flex;
	align-items: flex-start;
	gap: 0.875rem;
	margin-bottom: 1.25rem;
	font-size: 16px;
	line-height: 1.7;
	color: #5A5A6E;
}
.ff-contact-expect__item::before {
	content: '';
	flex-shrink: 0;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: #2B4C7E;
	margin-top: 0.55rem;
}

/* ── Three cards ─────────────────────────────────────────── */
.ff-contact-cards {
	background: #F5EDE0;
	padding: 80px 40px;
}
.ff-contact-cards__inner {
	max-width: 900px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 1.5rem;
}
.ff-contact-card {
	background: #FFFFFF;
	border: 1px solid #EDE3D0;
	border-radius: 12px;
	padding: 2rem;
}
.ff-contact-card--retreat  { border-left: 4px solid #E91E8C; }
.ff-contact-card--partner  { border-left: 4px solid #7DD3C0; }
.ff-contact-card--general  { border-left: 4px solid #2B4C7E; }
.ff-contact-card__num {
	font-size: 0.78rem;
	font-weight: 800;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: #2B4C7E;
	display: block;
	margin: 0 0 1rem;
}
.ff-contact-card__title {
	font-size: 18px;
	font-weight: 700;
	color: #1A1A2E;
	margin: 0 0 0.6rem;
	letter-spacing: -0.25px;
}
.ff-contact-card__text {
	font-size: 15px;
	line-height: 1.7;
	color: #5A5A6E;
	margin: 0;
}

/* ── Responsive ──────────────────────────────────────────── */
@media (max-width: 860px) {
	.ff-contact-form-section__inner { grid-template-columns: 1fr; gap: 3rem; }
	.ff-contact-cards__inner { grid-template-columns: 1fr; }
	.ff-contact-hero { padding: 80px 24px; }
	.ff-contact-form-section,
	.ff-contact-cards { padding: 60px 24px; }
}
</style>

<main class="ff-contact-page">

	<section class="ff-contact-hero">
		<div class="ff-contact-hero__inner">
			<h1 class="ff-contact-hero__headline">Let's talk formation.</h1>
			<p class="ff-contact-hero__sub">Whether you're enquiring about a retreat, a partnership, or just want to say hello — Anna personally reads every message.</p>
		</div>
	</section>

	<section class="ff-contact-form-section">
		<div class="ff-contact-form-section__inner">
			<div class="ff-contact-form-wrap">
				<?php echo do_shortcode( '[wpforms id="58"]' ); ?>
			</div>
			<div class="ff-contact-expect">
				<h2 class="ff-contact-expect__heading">What to expect</h2>
				<ul class="ff-contact-expect__list">
					<li class="ff-contact-expect__item">Anna personally responds to all retreat enquiries.</li>
					<li class="ff-contact-expect__item">Partnership conversations are always welcome.</li>
					<li class="ff-contact-expect__item">We read every message, even if response takes a few days.</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="ff-contact-cards">
		<div class="ff-contact-cards__inner">
			<div class="ff-contact-card ff-contact-card--retreat">
				<span class="ff-contact-card__num">01</span>
				<h3 class="ff-contact-card__title">Retreat Enquiry</h3>
				<p class="ff-contact-card__text">Commission Anna to lead a retreat for your parish or group.</p>
			</div>
			<div class="ff-contact-card ff-contact-card--partner">
				<span class="ff-contact-card__num">02</span>
				<h3 class="ff-contact-card__title">Partnership</h3>
				<p class="ff-contact-card__text">Collaborate with Faith Formers on content, events or projects.</p>
			</div>
			<div class="ff-contact-card ff-contact-card--general">
				<span class="ff-contact-card__num">03</span>
				<h3 class="ff-contact-card__title">General</h3>
				<p class="ff-contact-card__text">Questions, feedback, or just saying hello.</p>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
