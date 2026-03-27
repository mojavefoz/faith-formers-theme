<?php
/**
 * Archive template — category archives for Parish, Home, Heart.
 *
 * @package Faith_Formers_Child
 */

get_header();

$current_slug = is_category() ? get_queried_object()->slug : '';
?>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap');

.ff-archive-page { font-family: Arial, sans-serif; color: #555555; margin: 0; padding: 0; width: 100%; }
.ff-archive-page h1, .ff-archive-page h2 { font-family: 'Montserrat', sans-serif; }

/* Header (match other templates) */
#masthead, .site-header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background-color: rgba(26, 26, 46, 1) !important; transition: background-color 0.3s ease, backdrop-filter 0.3s ease; }
body.admin-bar #masthead { top: 32px !important; }
body.admin-bar .ff-archive-header { padding-top: 112px !important; }
.main-navigation a, .nav-primary a { color: #ffffff !important; font-family: 'Montserrat', sans-serif !important; font-weight: 500 !important; font-size: 15px !important; letter-spacing: 0.5px !important; }
.main-navigation a:hover { color: #4FC3F7 !important; }
.header-button-wrap a, .kadence-header-btn { background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0) !important; color: #ffffff !important; border-radius: 40px !important; padding: 10px 24px !important; font-family: 'Montserrat', sans-serif !important; font-weight: 600 !important; font-size: 14px !important; border: none !important; text-decoration: none !important; }

/* Page header */
.ff-archive-header {
	background: #ffffff;
	padding: 80px 24px;
	padding-top: 100px;
}
.ff-archive-header__inner { max-width: 1200px; margin: 0 auto; }
.ff-archive-header__title {
	font-family: 'Instrument Sans', sans-serif;
	font-size: clamp(2.5rem, 5vw, 4rem);
	font-weight: 800;
	color: #1A1A2E;
	margin: 0 0 0.5rem;
	letter-spacing: 0.5px;
}
.ff-archive-header__desc {
	font-family: Arial, sans-serif;
	font-size: 18px;
	line-height: 1.7;
	color: #555555;
	margin: 0 0 1.5rem;
}
.ff-archive-header__desc:empty { display: none; }
.ff-archive-pills {
	display: flex;
	flex-wrap: wrap;
	gap: 0.75rem;
}
.ff-archive-pill {
	display: inline-block;
	padding: 10px 22px;
	border-radius: 100px;
	font-family: 'Instrument Sans', sans-serif;
	font-weight: 600;
	font-size: 14px;
	text-decoration: none;
	transition: background-color 0.2s, color 0.2s, border-color 0.2s;
}
.ff-archive-pill--active {
	background: #1A1A2E;
	color: #ffffff;
	border: 2px solid #1A1A2E;
}
.ff-archive-pill--inactive {
	background: transparent;
	color: #1A1A2E;
	border: 2px solid #1A1A2E;
}
.ff-archive-pill--inactive:hover { background: #F5EDE0; }

/* Post grid */
.ff-archive-grid-wrap {
	background: #F5F5F7;
	padding: 80px 24px;
}
.ff-archive-grid {
	display: grid;
	grid-template-columns: repeat(3, 1fr);
	gap: 2rem;
	max-width: 1200px;
	margin: 0 auto;
}
.ff-archive-card {
	background: #ffffff;
	border-radius: 16px;
	overflow: hidden;
	transition: transform 0.2s, box-shadow 0.2s;
	display: flex;
	flex-direction: column;
}
.ff-archive-card:hover {
	transform: translateY(-4px);
	box-shadow: 0 12px 32px rgba(0,0,0,0.12);
}
.ff-archive-card__img {
	width: 100%;
	height: 220px;
	object-fit: cover;
	display: block;
	background: #E5E5E5;
}
.ff-archive-card__img-wrap {
	width: 100%;
	height: 220px;
	background: #E5E5E5;
	overflow: hidden;
}
.ff-archive-card__body { padding: 1.25rem 1.5rem; flex: 1; display: flex; flex-direction: column; }
.ff-archive-card__cat {
	display: inline-block;
	padding: 4px 12px;
	border-radius: 20px;
	font-family: 'Montserrat', sans-serif;
	font-size: 11px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	margin-bottom: 0.5rem;
	align-self: flex-start;
}
.ff-archive-card__cat--parish { background: rgba(79, 195, 247, 0.2); color: #2D1B69; }
.ff-archive-card__cat--home { background: rgba(139, 92, 246, 0.2); color: #2D1B69; }
.ff-archive-card__cat--heart { background: rgba(200, 80, 192, 0.2); color: #2D1B69; }
.ff-archive-card__date {
	font-family: Arial, sans-serif;
	font-size: 13px;
	color: #888888;
	margin: 0 0 0.5rem;
}
.ff-archive-card__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 20px;
	font-weight: 700;
	color: #2D1B69;
	margin: 0 0 0.5rem;
	line-height: 1.3;
}
.ff-archive-card__title a { color: inherit; text-decoration: none; }
.ff-archive-card__title a:hover { text-decoration: underline; }
.ff-archive-card__excerpt {
	font-family: Arial, sans-serif;
	font-size: 15px;
	line-height: 1.7;
	color: #555555;
	margin: 0 0 1rem;
	flex: 1;
}
.ff-archive-card__link {
	font-family: Arial, sans-serif;
	font-size: 15px;
	font-weight: 600;
	color: #2D1B69;
	text-decoration: none;
}
.ff-archive-card__link:hover { text-decoration: underline; }

/* Pagination */
.ff-archive-pagination {
	text-align: center;
	padding: 2rem 0 0;
	max-width: 1200px;
	margin: 0 auto;
}
.ff-archive-pagination a,
.ff-archive-pagination span {
	display: inline-block;
	margin: 0 0.5rem;
	padding: 10px 20px;
	font-family: Arial, sans-serif;
	font-size: 15px;
	color: #2D1B69;
	text-decoration: none;
	border-radius: 8px;
	background: #ffffff;
	border: 1px solid #ddd;
}
.ff-archive-pagination a:hover { background: #F5F5F7; border-color: #2D1B69; }
.ff-archive-pagination .current { background: #2D1B69; color: #ffffff; border-color: #2D1B69; }

/* Newsletter CTA */
.ff-archive-newsletter {
	background: linear-gradient(135deg, #4FC3F7, #8B5CF6, #C850C0);
	padding: 80px 24px;
}
.ff-archive-newsletter__inner {
	max-width: 900px;
	margin: 0 auto;
	text-align: center;
}
.ff-archive-newsletter__title {
	font-family: 'Montserrat', sans-serif;
	font-size: 36px;
	font-weight: 700;
	color: #FFFFFF;
	margin: 0 0 0.5rem;
}
.ff-archive-newsletter__text {
	font-family: Arial, sans-serif;
	font-size: 18px;
	line-height: 1.7;
	color: rgba(255,255,255,0.95);
	margin: 0 0 2rem;
}
.ff-archive-newsletter__embed { min-height: 80px; }

@media (max-width: 900px) {
	.ff-archive-header__title { font-size: 2.5rem; }
	.ff-archive-grid { grid-template-columns: 1fr; }
}
</style>

<main class="ff-archive-page">

	<header class="ff-archive-header">
		<div class="ff-archive-header__inner">
			<h1 class="ff-archive-header__title"><?php single_cat_title(); ?></h1>
			<?php if ( category_description() ) : ?>
				<div class="ff-archive-header__desc"><?php echo category_description(); ?></div>
			<?php endif; ?>
			<nav class="ff-archive-pills" aria-label="Category filter">
				<?php
				$parish_cat = get_category_by_slug( 'parish' );
				$home_cat   = get_category_by_slug( 'home' );
				$heart_cat  = get_category_by_slug( 'heart' );
				?>
				<a href="<?php echo $parish_cat ? esc_url( get_category_link( $parish_cat ) ) : esc_url( home_url( '/category/parish/' ) ); ?>" class="ff-archive-pill <?php echo ( $current_slug === 'parish' ) ? 'ff-archive-pill--active' : 'ff-archive-pill--inactive'; ?>">Parish</a>
				<a href="<?php echo $home_cat ? esc_url( get_category_link( $home_cat ) ) : esc_url( home_url( '/category/home/' ) ); ?>" class="ff-archive-pill <?php echo ( $current_slug === 'home' ) ? 'ff-archive-pill--active' : 'ff-archive-pill--inactive'; ?>">Home</a>
				<a href="<?php echo $heart_cat ? esc_url( get_category_link( $heart_cat ) ) : esc_url( home_url( '/category/heart/' ) ); ?>" class="ff-archive-pill <?php echo ( $current_slug === 'heart' ) ? 'ff-archive-pill--active' : 'ff-archive-pill--inactive'; ?>">Heart</a>
			</nav>
		</div>
	</header>

	<div class="ff-archive-grid-wrap">
		<?php if ( have_posts() ) : ?>
			<div class="ff-archive-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					$cats = get_the_category();
					$pillar_slug = 'parish';
					foreach ( $cats as $cat ) {
						if ( in_array( $cat->slug, array( 'parish', 'home', 'heart' ), true ) ) {
							$pillar_slug = $cat->slug;
							break;
						}
					}
					$img = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
					?>
					<article class="ff-archive-card">
						<div class="ff-archive-card__img-wrap">
							<?php if ( $img ) : ?>
								<img src="<?php echo esc_url( $img ); ?>" alt="" class="ff-archive-card__img" loading="lazy">
							<?php else : ?>
								<div class="ff-archive-card__img" style="height:100%;display:flex;align-items:center;justify-content:center;color:#999;font-size:14px;">No image</div>
							<?php endif; ?>
						</div>
						<div class="ff-archive-card__body">
							<span class="ff-archive-card__cat ff-archive-card__cat--<?php echo esc_attr( $pillar_slug ); ?>"><?php echo esc_html( $pillar_slug === 'parish' ? 'Parish' : ( $pillar_slug === 'home' ? 'Home' : 'Heart' ) ); ?></span>
							<time class="ff-archive-card__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
							<h2 class="ff-archive-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="ff-archive-card__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></div>
							<a href="<?php the_permalink(); ?>" class="ff-archive-card__link">Read More →</a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<nav class="ff-archive-pagination" aria-label="Posts navigation">
				<?php
				previous_posts_link( '← Previous' );
				next_posts_link( 'Next →' );
				?>
			</nav>
		<?php else : ?>
			<div class="ff-archive-header__inner" style="padding-top:0;">
				<p>No posts in this category yet.</p>
			</div>
		<?php endif; ?>
	</div>

	<section class="ff-archive-newsletter">
		<div class="ff-archive-newsletter__inner">
			<h2 class="ff-archive-newsletter__title">Join the Community</h2>
			<p class="ff-archive-newsletter__text">Formation resources, family faith practices, and reflections for the interior life — delivered to your inbox.</p>
			<div id="newsletter" class="ff-archive-newsletter__embed">
				<a data-formkit-toggle="0f497b7f18" href="https://faith-formers.kit.com/0f497b7f18" style="display:inline-block;background:#FFFFFF;color:#18160F;font-family:'Instrument Sans',sans-serif;font-size:18px;font-weight:700;border-radius:100px;padding:16px 48px;text-decoration:none;transition:opacity 0.2s;">Subscribe</a>
			</div>
		</div>
	</section>

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
