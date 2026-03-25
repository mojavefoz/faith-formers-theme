<?php
/**
 * Single post template — individual blog post. Hero, content, author bio, newsletter.
 *
 * @package Faith_Formers_Child
 */

get_header();

while ( have_posts() ) :
	the_post();
	$hero_img   = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	$cats       = get_the_category();
	$pillar_slug = 'parish';
	foreach ( $cats as $cat ) {
		if ( in_array( $cat->slug, array( 'parish', 'home', 'heart' ), true ) ) {
			$pillar_slug = $cat->slug;
			break;
		}
	}
	$word_count = str_word_count( strip_tags( get_the_content() ) );
	$read_mins  = max( 1, (int) ceil( $word_count / 200 ) );
?>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

.ff-single-page { font-family: Arial, sans-serif; margin: 0; padding: 0; width: 100%; }
body.admin-bar .ff-single-hero { padding-top: calc(50vh * 0.5 + 32px) !important; }

/* Hero — 50vh, featured image or gradient, overlay */
.ff-single-hero {
	position: relative;
	width: 100%;
	height: 50vh;
	min-height: 280px;
	display: flex;
	align-items: center;
	justify-content: center;
	text-align: center;
	padding: 100px 24px 60px;
	box-sizing: border-box;
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	background-size: cover;
	background-position: center;
}
.ff-single-hero__overlay {
	position: absolute;
	inset: 0;
	background: rgba(0, 0, 0, 0.4);
}
.ff-single-hero__inner {
	position: relative;
	z-index: 1;
	max-width: 900px;
}
.ff-single-hero__pill {
	display: inline-block;
	padding: 6px 16px;
	border-radius: 24px;
	font-family: 'Montserrat', sans-serif;
	font-size: 12px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	color: #ffffff;
	margin-bottom: 1rem;
}
.ff-single-hero__pill--parish { background: rgba(79, 195, 247, 0.9); }
.ff-single-hero__pill--home { background: rgba(139, 92, 246, 0.9); }
.ff-single-hero__pill--heart { background: rgba(200, 80, 192, 0.9); }
.ff-single-hero__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 56px;
	font-weight: 900;
	line-height: 1.15;
	color: #ffffff;
	margin: 0 0 0.75rem;
}
.ff-single-hero__meta {
	font-family: Arial, sans-serif;
	font-size: 14px;
	color: rgba(255, 255, 255, 0.9);
	margin: 0;
}

/* Content area */
.ff-single-content {
	background: #ffffff;
	padding: 80px 40px;
}
.ff-single-content__inner {
	max-width: 780px;
	margin: 0 auto;
}
.ff-single-content__inner,
.ff-single-content__inner p {
	font-family: Arial, sans-serif;
	font-size: 20px;
	line-height: 2.0;
	color: #333333;
}
.ff-single-content__inner h1,
.ff-single-content__inner h2,
.ff-single-content__inner h3,
.ff-single-content__inner h4 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	color: #2D1B69;
}
.ff-single-content__inner blockquote {
	border-left: 4px solid;
	border-image: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0) 1;
	padding-left: 24px;
	margin: 2rem 0;
	font-family: Georgia, serif;
	font-size: 22px;
	font-style: italic;
	color: #2D1B69;
	line-height: 1.6;
}

/* Author bio */
.ff-single-author {
	background: #F5F5F7;
	border-radius: 16px;
	padding: 40px;
	max-width: 780px;
	margin: 60px auto;
}
.ff-single-author__inner {
	display: flex;
	align-items: flex-start;
	gap: 24px;
	flex-wrap: wrap;
}
.ff-single-author__photo {
	width: 80px;
	height: 80px;
	border-radius: 50%;
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	flex-shrink: 0;
}
.ff-single-author__text { flex: 1; min-width: 0; }
.ff-single-author__name {
	font-family: 'Montserrat', sans-serif;
	font-size: 20px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 0.25rem;
}
.ff-single-author__title {
	font-family: Arial, sans-serif;
	font-size: 16px;
	color: #555555;
	margin: 0 0 0.75rem;
}
.ff-single-author__bio {
	font-family: Arial, sans-serif;
	font-size: 16px;
	line-height: 1.8;
	color: #555555;
	margin: 0;
}

/* Newsletter CTA */
.ff-single-newsletter {
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	padding: 80px 24px;
}
.ff-single-newsletter__inner {
	max-width: 900px;
	margin: 0 auto;
	text-align: center;
}
.ff-single-newsletter__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 36px;
	font-weight: 700;
	color: #FFFFFF;
	margin: 0 0 0.5rem;
}
.ff-single-newsletter__text {
	font-family: Arial, sans-serif;
	font-size: 18px;
	line-height: 1.7;
	color: rgba(255, 255, 255, 0.95);
	margin: 0 0 2rem;
}
.ff-single-newsletter__embed { min-height: 80px; }
</style>

<main class="ff-single-page">

	<header class="ff-single-hero"<?php if ( $hero_img ) : ?> style="background-image: url(<?php echo esc_url( $hero_img ); ?>);"<?php endif; ?>>
		<div class="ff-single-hero__overlay"></div>
		<div class="ff-single-hero__inner">
			<span class="ff-single-hero__pill ff-single-hero__pill--<?php echo esc_attr( $pillar_slug ); ?>"><?php echo esc_html( $pillar_slug === 'parish' ? 'Parish' : ( $pillar_slug === 'home' ? 'Home' : 'Heart' ) ); ?></span>
			<h1 class="ff-single-hero__title"><?php the_title(); ?></h1>
			<p class="ff-single-hero__meta"><?php echo esc_html( get_the_date() ); ?> · <?php echo (int) $read_mins; ?> min read</p>
		</div>
	</header>

	<div class="ff-single-content">
		<div class="ff-single-content__inner">
			<?php the_content(); ?>
		</div>

		<aside class="ff-single-author" aria-label="About the author">
			<div class="ff-single-author__inner">
				<div class="ff-single-author__photo" aria-hidden="true"></div>
				<div class="ff-single-author__text">
					<p class="ff-single-author__name">Anna Forsberg</p>
					<p class="ff-single-author__title">Founder of Faith Formers · Director of Family Faith Formation, Holy Spirit Catholic Church, Las Vegas</p>
					<p class="ff-single-author__bio">Anna Forsberg is the founder of Faith Formers and Director of Family Faith Formation at Holy Spirit Catholic Church, Las Vegas. She has 30 years of experience in Catholic formation ministry.</p>
				</div>
			</div>
		</aside>
	</div>

	<section class="ff-single-newsletter">
		<div class="ff-single-newsletter__inner">
			<h2 class="ff-single-newsletter__title">Join the Community</h2>
			<p class="ff-single-newsletter__text">Formation resources, family faith practices, and reflections for the interior life — delivered to your inbox.</p>
			<div id="newsletter" class="ff-single-newsletter__embed">
				<div style="text-align:center; display:flex; justify-content:center; align-items:center; flex-direction:column;">
					<script async data-uid="6eb3da3edd" src="https://faith-formers.kit.com/6eb3da3edd/index.js"></script>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
endwhile;
get_footer();
