<?php
/**
 * Three Pillars section — Parish, Home, Heart.
 * Editorial cards with title, description, Read More link. Gradient accent.
 *
 * @package Faith_Formers_Child
 */

$pillars = array(
	array(
		'title' => 'For the Parish',
		'desc'  => 'Practical tools and behind-the-scenes encouragement for DREs, catechists, youth ministers, and parish leaders. Session ideas, liturgical resources, and the kind of support that keeps formation work sustainable.',
		'url'   => home_url( '/category/parish/' ),
	),
	array(
		'title' => 'For the Home',
		'desc'  => 'Dinner table conversations, seasonal faith practices, and honest help for parents and families. Make Sunday mean something Monday through Saturday — without adding one more program to your week.',
		'url'   => home_url( '/category/home/' ),
	),
	array(
		'title' => 'For the Heart',
		'desc'  => 'Reflection prompts, prayer practices, and faith in ordinary moments. Personal formation that feeds everything else — the interior life, drawn from Ignatian spirituality and lived Catholic tradition.',
		'url'   => home_url( '/category/heart/' ),
	),
);
$pillars = apply_filters( 'faithformers_pillar_cards', $pillars );
?>

<section class="ff-pillars" id="pillars" aria-label="Three pillars of Faith Formers">
	<div class="ff-pillars__inner">
		<h2 class="ff-pillars__title">Where faith meets life</h2>
		<p class="ff-pillars__subtitle">Whether you serve in ministry, lead at home, or are deepening your own walk — there’s a place for you here.</p>

		<div class="ff-pillars__grid">
			<?php foreach ( $pillars as $pillar ) : ?>
				<article class="ff-pillars__card">
					<h3 class="ff-pillars__card-title"><?php echo esc_html( $pillar['title'] ); ?></h3>
					<p class="ff-pillars__card-desc"><?php echo esc_html( $pillar['desc'] ); ?></p>
					<a href="<?php echo esc_url( $pillar['url'] ); ?>" class="ff-pillars__link">Read More</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
