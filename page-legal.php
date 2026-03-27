<?php
/**
 * Template Name: Legal Page
 * Used for Terms & Conditions, Privacy Policy, Cookie Policy.
 * Renders page content with site header/footer and cream design.
 *
 * @package Faith_Formers_Child
 */

get_header();
?>

<style>
/* ── Legal Page ──────────────────────────────────────────── */
.ff-legal {
	font-family: 'Instrument Sans', sans-serif;
	background: #F5EDE0;
	min-height: 60vh;
}

/* Hero */
.ff-legal__hero {
	background: #F5EDE0;
	padding: 80px 40px 60px;
	text-align: center;
	border-bottom: 1px solid #EDE3D0;
}
.ff-legal__hero-inner {
	max-width: 720px;
	margin: 0 auto;
}
.ff-legal__eyebrow {
	font-size: 13px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 3px;
	color: #2B4C7E;
	margin: 0 0 1rem;
}
.ff-legal__title {
	font-size: clamp(2rem, 4vw, 3rem);
	font-weight: 800;
	line-height: 1.1;
	color: #1A1A2E;
	letter-spacing: -0.5px;
	margin: 0 0 1rem;
}
.ff-legal__updated {
	font-size: 14px;
	color: #9B8E7E;
	margin: 0;
}

/* Content */
.ff-legal__body {
	background: #FFFFFF;
	padding: 80px 40px;
}
.ff-legal__body-inner {
	max-width: 720px;
	margin: 0 auto;
}

/* WordPress content typography */
.ff-legal__body-inner h2 {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 1.5rem;
	font-weight: 700;
	color: #1A1A2E;
	margin: 2.5rem 0 0.875rem;
	letter-spacing: -0.25px;
}
.ff-legal__body-inner h3 {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 1.15rem;
	font-weight: 700;
	color: #1A1A2E;
	margin: 2rem 0 0.75rem;
}
.ff-legal__body-inner p {
	font-size: 17px;
	line-height: 1.85;
	color: #4A4740;
	margin: 0 0 1.25rem;
}
.ff-legal__body-inner ul,
.ff-legal__body-inner ol {
	font-size: 17px;
	line-height: 1.85;
	color: #4A4740;
	margin: 0 0 1.25rem;
	padding-left: 1.5rem;
}
.ff-legal__body-inner li { margin-bottom: 0.5rem; }
.ff-legal__body-inner a {
	color: #2B4C7E;
	text-decoration: underline;
	text-underline-offset: 3px;
}
.ff-legal__body-inner a:hover { color: #E91E8C; }
.ff-legal__body-inner strong { color: #1A1A2E; font-weight: 700; }
.ff-legal__body-inner hr {
	border: none;
	border-top: 1px solid #EDE3D0;
	margin: 2.5rem 0;
}

/* Responsive */
@media (max-width: 640px) {
	.ff-legal__hero,
	.ff-legal__body { padding-left: 24px; padding-right: 24px; }
	.ff-legal__hero { padding-top: 60px; padding-bottom: 40px; }
	.ff-legal__body { padding-top: 60px; padding-bottom: 60px; }
}
</style>

<main class="ff-legal">

	<div class="ff-legal__hero">
		<div class="ff-legal__hero-inner">
			<p class="ff-legal__eyebrow">Faith Formers</p>
			<h1 class="ff-legal__title"><?php the_title(); ?></h1>
			<?php
			$modified = get_the_modified_date( 'F j, Y' );
			if ( $modified ) : ?>
				<p class="ff-legal__updated">Last updated <?php echo esc_html( $modified ); ?></p>
			<?php endif; ?>
		</div>
	</div>

	<div class="ff-legal__body">
		<div class="ff-legal__body-inner">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</div>

</main>

<?php get_footer(); ?>
