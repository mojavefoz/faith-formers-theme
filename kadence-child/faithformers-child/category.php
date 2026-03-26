<?php
/**
 * Category Archive Template — Faith Formers Child (Kadence)
 * Renders category archives with CollectionPage schema JSON-LD.
 *
 * @package Faith_Formers_Child
 */

// CollectionPage schema — output via wp_head (fires inside get_header()).
add_action( 'wp_head', function () {
	if ( ! is_category() ) {
		return;
	}
	$cat = get_queried_object();

	$posts = get_posts( [
		'category'    => $cat->term_id,
		'numberposts' => 10,
		'post_status' => 'publish',
	] );

	$items = [];
	foreach ( $posts as $i => $p ) {
		$items[] = [
			'@type'    => 'ListItem',
			'position' => $i + 1,
			'name'     => get_the_title( $p ),
			'url'      => get_permalink( $p ),
		];
	}

	$schema = [
		'@context'    => 'https://schema.org',
		'@type'       => 'CollectionPage',
		'name'        => $cat->name . ' — Faith Formers',
		'description' => wp_strip_all_tags( $cat->description ) ?: 'Catholic faith formation articles about ' . $cat->name,
		'url'         => get_category_link( $cat->term_id ),
		'publisher'   => [ '@id' => home_url( '/#organization' ) ],
	];

	if ( $items ) {
		$schema['mainEntity'] = [
			'@type'           => 'ItemList',
			'itemListElement' => $items,
		];
	}

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}, 10 );

get_header();
?>

<?php if ( have_posts() ) : ?>

<main id="primary" class="site-main ff-archive">

	<header class="ff-archive__header">
		<div class="ff-archive__inner">
			<h1 class="ff-archive__title"><?php single_cat_title(); ?></h1>
			<?php if ( category_description() ) : ?>
			<p class="ff-archive__desc"><?php echo category_description(); ?></p>
			<?php endif; ?>
		</div>
	</header>

	<div class="ff-archive__grid">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'ff-archive__card' ); ?>>
			<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>" class="ff-archive__card-img-wrap">
				<?php the_post_thumbnail( 'medium', [ 'class' => 'ff-archive__card-img' ] ); ?>
			</a>
			<?php endif; ?>
			<div class="ff-archive__card-body">
				<h2 class="ff-archive__card-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
				<p class="ff-archive__card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '…' ); ?></p>
				<a href="<?php the_permalink(); ?>" class="ff-archive__card-link">Read more →</a>
			</div>
		</article>
		<?php endwhile; ?>
	</div>

	<?php the_posts_pagination( [ 'prev_text' => '← Previous', 'next_text' => 'Next →' ] ); ?>

</main>

<?php else : ?>

<main id="primary" class="site-main ff-archive">
	<p>No posts found in this category.</p>
</main>

<?php endif; ?>

<?php get_footer(); ?>
