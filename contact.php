<?php
/**
 * Template Name: Contact
 * Contact page: hero, two-column form + expectations, three reason cards.
 *
 * @package Faith_Formers_Child
 */

get_header();
?>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

.ff-contact-page { font-family: Arial, sans-serif; color: #555555; margin: 0; padding: 0; width: 100%; }
body.admin-bar .ff-contact-hero { padding-top: 112px !important; }

/* Hero — 60vh, brand gradient, centered white text */
.ff-contact-hero {
	min-height: 60vh;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
	text-align: center;
	padding: 80px 24px 60px;
	box-sizing: border-box;
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
}
.ff-contact-hero__inner { max-width: 720px; }
.ff-contact-hero__headline {
	font-family: 'Montserrat', sans-serif;
	font-size: 72px;
	font-weight: 900;
	line-height: 1.15;
	color: #FFFFFF;
	margin: 0 0 1rem;
}
.ff-contact-hero__sub {
	font-family: Arial, sans-serif;
	font-size: 20px;
	line-height: 1.6;
	color: #FFFFFF;
	margin: 0;
	opacity: 0.95;
}

/* Two column — white, 100px padding, max-width 1200px */
.ff-contact-form-section {
	background: #ffffff;
	padding: 100px 24px;
}
.ff-contact-form-section__inner {
	max-width: 1200px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: 55% 45%;
	gap: 4rem;
	align-items: start;
}
@media (max-width: 900px) {
	.ff-contact-form-section__inner { grid-template-columns: 1fr; }
}

/* Right column — What to expect */
.ff-contact-expect__heading {
	font-family: 'Montserrat', sans-serif;
	font-size: 36px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 1.5rem;
}
.ff-contact-expect__list { list-style: none; margin: 0; padding: 0; }
.ff-contact-expect__item {
	display: flex;
	align-items: flex-start;
	gap: 1rem;
	margin-bottom: 1.25rem;
	font-family: Arial, sans-serif;
	font-size: 17px;
	line-height: 1.6;
	color: #555555;
}
.ff-contact-expect__item::before {
	content: '';
	flex-shrink: 0;
	width: 12px;
	height: 12px;
	border-radius: 50%;
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	margin-top: 0.5rem;
}

/* Three reason cards — light gray bg */
.ff-contact-cards {
	background: #F5F5F7;
	padding: 80px 24px;
}
.ff-contact-cards__inner {
	max-width: 1200px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 2rem;
}
@media (max-width: 768px) {
	.ff-contact-cards__inner { grid-template-columns: 1fr; }
}
.ff-contact-card {
	background: #ffffff;
	border-radius: 16px;
	padding: 2.5rem;
	text-align: center;
	box-shadow: 0 4px 20px rgba(0,0,0,0.06);
	transition: transform 0.2s, box-shadow 0.2s;
}
.ff-contact-card:hover {
	transform: translateY(-4px);
	box-shadow: 0 12px 32px rgba(0,0,0,0.1);
}
.ff-contact-card__icon {
	width: 56px;
	height: 56px;
	margin: 0 auto 1.25rem;
	border-radius: 50%;
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	display: flex;
	align-items: center;
	justify-content: center;
}
.ff-contact-card__icon svg { width: 28px; height: 28px; }
.ff-contact-card__icon svg path { fill: #ffffff; }
.ff-contact-card__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 20px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 0.75rem;
}
.ff-contact-card__text {
	font-family: Arial, sans-serif;
	font-size: 16px;
	line-height: 1.7;
	color: #555555;
	margin: 0;
}

@media (max-width: 768px) {
	.ff-contact-hero h1 {
		font-size: 36px !important;
		line-height: 1.2 !important;
		padding: 0 20px !important;
	}
	.ff-contact-hero p {
		font-size: 16px !important;
		padding: 0 20px !important;
	}
	.ff-contact-columns {
		flex-direction: column !important;
	}
	.ff-contact-left,
	.ff-contact-right {
		width: 100% !important;
	}
	.ff-contact-wrap,
	.ff-contact-form-wrap {
		padding: 40px 20px !important;
	}
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
			<div class="ff-contact-form-wrap ff-contact-form">
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
			<div class="ff-contact-card">
				<div class="ff-contact-card__icon">
					<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
				</div>
				<h3 class="ff-contact-card__title">Retreat Enquiry</h3>
				<p class="ff-contact-card__text">Commission Anna to lead a retreat for your parish or group.</p>
			</div>
			<div class="ff-contact-card">
				<div class="ff-contact-card__icon">
					<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
				</div>
				<h3 class="ff-contact-card__title">Partnership</h3>
				<p class="ff-contact-card__text">Collaborate with Faith Formers on content, events or projects.</p>
			</div>
			<div class="ff-contact-card">
				<div class="ff-contact-card__icon">
					<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>
				</div>
				<h3 class="ff-contact-card__title">General</h3>
				<p class="ff-contact-card__text">Questions, feedback, or just saying hello.</p>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
