<?php
/**
 * Single Post Template — Faith Formers Child (Kadence)
 * Renders individual blog posts with Article schema JSON-LD.
 *
 * @package Faith_Formers_Child
 */

// Article schema — output via wp_head (fires inside get_header()).
add_action( 'wp_head', function () {
	if ( ! is_singular( 'post' ) ) {
		return;
	}
	global $post;

	$headline    = get_the_title( $post );
	$date_pub    = get_the_date( 'c', $post );
	$date_mod    = get_the_modified_date( 'c', $post );
	$permalink   = get_permalink( $post );
	$description = has_excerpt( $post )
		? wp_strip_all_tags( get_the_excerpt( $post ) )
		: wp_trim_words( wp_strip_all_tags( $post->post_content ), 40, '' );

	$schema = [
		'@context'      => 'https://schema.org',
		'@type'         => 'Article',
		'headline'      => $headline,
		'description'   => $description,
		'datePublished' => $date_pub,
		'dateModified'  => $date_mod,
		'url'           => $permalink,
		'author'        => [
			'@type' => 'Person',
			'name'  => 'Anna Forsberg',
			'url'   => home_url( '/about-anna/' ),
		],
		'publisher'     => [
			'@type' => 'Organization',
			'@id'   => home_url( '/#organization' ),
			'name'  => 'Faith Formers',
			'url'   => home_url( '/' ),
		],
	];

	if ( has_post_thumbnail( $post ) ) {
		$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post ), 'large' );
		if ( $img ) {
			$schema['image'] = [
				'@type' => 'ImageObject',
				'url'   => $img[0],
			];
		}
	}

	echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
}, 10 );

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<main id="primary" class="site-main ff-single">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail() ) : ?>
		<div class="ff-single__hero">
			<?php the_post_thumbnail( 'large', [ 'class' => 'ff-single__hero-img' ] ); ?>
		</div>
		<?php endif; ?>

		<div class="ff-single__body">
			<header class="ff-single__header">
				<?php
				$cats = get_the_category();
				if ( $cats ) : ?>
				<div class="ff-single__cats">
					<?php foreach ( $cats as $cat ) : ?>
					<a href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" class="ff-badge"><?php echo esc_html( $cat->name ); ?></a>
					<?php endforeach; ?>
				</div>
				<?php endif; ?>
				<h1 class="ff-single__title"><?php the_title(); ?></h1>
				<div class="ff-single__meta">
					<span><?php echo get_the_date(); ?></span>
					<span class="ff-single__meta-sep">&middot;</span>
					<span>By Anna Forsberg</span>
				</div>
			</header>

			<div class="ff-single__content">
				<?php the_content(); ?>
			</div>

			<footer class="ff-single__footer">
				<div class="ff-single__author-bio">
					<p><strong>Anna Forsberg</strong> is the voice and pastoral heart of Faith Formers — Director of Family Faith Formation at Holy Spirit Catholic Church in Las Vegas. <a href="<?php echo esc_url( home_url( '/about-anna/' ) ); ?>">Read her full story →</a></p>
				</div>
				<?php
				$prev = get_previous_post();
				$next = get_next_post();
				if ( $prev || $next ) : ?>
				<nav class="ff-single__nav" aria-label="Post navigation">
					<?php if ( $prev ) : ?>
					<a href="<?php echo esc_url( get_permalink( $prev ) ); ?>" class="ff-single__nav-prev">← <?php echo esc_html( get_the_title( $prev ) ); ?></a>
					<?php endif; ?>
					<?php if ( $next ) : ?>
					<a href="<?php echo esc_url( get_permalink( $next ) ); ?>" class="ff-single__nav-next"><?php echo esc_html( get_the_title( $next ) ); ?> →</a>
					<?php endif; ?>
				</nav>
				<?php endif; ?>
			</footer>
		</div>

	</article>
</main>

<?php endwhile; ?>

<?php get_footer(); ?>
