<?php
/**
 * Category archive template — used for /category/parish, /category/home, /category/heart.
 * Layout matches home.php; header shows category name and description; filter pills highlight active category.
 *
 * @package Faith_Formers_Child
 */

get_header();

$current_cat  = get_queried_object();
$current_slug = ( $current_cat && isset( $current_cat->slug ) ) ? $current_cat->slug : '';
?>

<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap');

.ff-archive-page { font-family: 'Instrument Sans', sans-serif; color: #4A4740; margin: 0; padding: 0; width: 100%; }
.ff-archive-page h1, .ff-archive-page h2 { font-family: 'Instrument Sans', sans-serif; }

/* Header (match other templates) */
#masthead, .site-header { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; background-color: rgba(24, 22, 15, 1) !important; transition: background-color 0.3s ease, backdrop-filter 0.3s ease; }
body.admin-bar #masthead { top: 32px !important; }
body.admin-bar .ff-archive-header { padding-top: 112px !important; }
.main-navigation a, .nav-primary a { color: #ffffff !important; font-family: 'Instrument Sans', sans-serif !important; font-weight: 500 !important; font-size: 15px !important; letter-spacing: 0.5px !important; }
.main-navigation a:hover { color: #7DD3C0 !important; }
.header-button-wrap a, .kadence-header-btn { background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C) !important; color: #ffffff !important; border-radius: 40px !important; padding: 10px 24px !important; font-family: 'Instrument Sans', sans-serif !important; font-weight: 600 !important; font-size: 14px !important; border: none !important; text-decoration: none !important; }

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
	font-family: 'Instrument Sans', sans-serif;
	font-size: 18px;
	line-height: 1.7;
	color: #4A4740;
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

/* Main + sidebar layout — wrapper uses inline flex; 70% main, 28% sidebar */
.ff-archive-grid-wrap {
	background: #F5EDE0;
	padding: 80px 0;
}
.ff-archive-main { min-width: 0; flex-shrink: 0; }
.ff-archive-grid {
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	gap: 2rem;
}
.ff-archive-card {
	background: #ffffff;
	border-radius: 16px;
	overflow: hidden;
	box-shadow: 0 4px 20px rgba(0,0,0,0.06);
	transition: transform 0.2s, box-shadow 0.2s;
	display: flex;
	flex-direction: column;
}
.ff-archive-card:hover {
	transform: translateY(-4px);
	box-shadow: 0 12px 32px rgba(0,0,0,0.12);
}
.ff-archive-card__img-wrap {
	width: 100%;
	height: 260px;
	overflow: hidden;
	position: relative;
}
.ff-archive-card__img-wrap img { display: block; }
.ff-archive-card__body { padding: 1.5rem 1.75rem; flex: 1; display: flex; flex-direction: column; }
.ff-archive-card__cat {
	display: inline-block;
	padding: 4px 12px;
	border-radius: 20px;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 11px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	margin-bottom: 0.5rem;
	align-self: flex-start;
}
.ff-archive-card__cat--parish { background: rgba(125, 211, 192, 0.2); color: #18160F; }
.ff-archive-card__cat--home { background: rgba(0, 191, 255, 0.2); color: #18160F; }
.ff-archive-card__cat--heart { background: rgba(233, 30, 140, 0.2); color: #18160F; }
.ff-archive-card__date {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 13px;
	color: #9A9488;
	margin: 0 0 0.5rem;
}
.ff-archive-card__title {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 22px;
	font-weight: 700;
	color: #18160F;
	margin: 0 0 0.5rem;
	line-height: 1.3;
}
.ff-archive-card__title a { color: inherit; text-decoration: none; }
.ff-archive-card__title a:hover { text-decoration: underline; }
.ff-archive-card__excerpt {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 16px;
	line-height: 1.7;
	color: #4A4740;
	margin: 0 0 1rem;
	flex: 1;
}
.ff-archive-card__link {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 15px;
	font-weight: 600;
	color: #18160F;
	text-decoration: none;
}
.ff-archive-card__link:hover { text-decoration: underline; }

/* Pagination — in main column */
.ff-archive-pagination {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-wrap: wrap;
	gap: 1rem;
	padding: 2rem 0 0;
}
.ff-archive-pagination a,
.ff-archive-pagination span {
	display: inline-block;
	margin: 0 0.5rem;
	padding: 10px 20px;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 15px;
	color: #18160F;
	text-decoration: none;
	border-radius: 8px;
	background: #ffffff;
	border: 1px solid #ddd;
}
.ff-archive-pagination a:hover { background: #F5EDE0; border-color: #18160F; }
.ff-archive-pagination .current { background: #18160F; color: #ffffff; border-color: #18160F; }

/* Newsletter CTA */
.ff-archive-newsletter {
	background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C);
	padding: 80px 24px;
}
.ff-archive-newsletter__inner {
	max-width: 900px;
	margin: 0 auto;
	text-align: center;
}
.ff-archive-newsletter__title {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 36px;
	font-weight: 700;
	color: #FFFFFF;
	margin: 0 0 0.5rem;
}
.ff-archive-newsletter__text {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 18px;
	line-height: 1.7;
	color: rgba(255,255,255,0.95);
	margin: 0 0 2rem;
}
.ff-archive-newsletter__embed { min-height: 80px; }

/* Sidebar */
.ff-archive-sidebar {
	background: #ffffff;
	border-radius: 16px;
	padding: 32px;
	position: sticky;
	top: 100px;
}
.ff-archive-sidebar__section { margin-bottom: 2rem; }
.ff-archive-sidebar__section:last-child { margin-bottom: 0; }
.ff-archive-sidebar__heading {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 14px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 1px;
	color: #18160F;
	margin: 0 0 1rem;
}
.ff-archive-sidebar__cats { list-style: none; margin: 0; padding: 0; }
.ff-archive-sidebar__cats li { margin: 0 0 0.6rem; padding: 0; display: flex; align-items: center; gap: 0.5rem; }
.ff-archive-sidebar__cats li::before { content: ''; width: 8px; height: 8px; border-radius: 50%; flex-shrink: 0; }
.ff-archive-sidebar__cats li.ff-archive-sidebar__cat--parish::before { background: #7DD3C0; }
.ff-archive-sidebar__cats li.ff-archive-sidebar__cat--home::before { background: #00BFFF; }
.ff-archive-sidebar__cats li.ff-archive-sidebar__cat--heart::before { background: #E91E8C; }
.ff-archive-sidebar__cats a {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 17px;
	font-weight: 600;
	line-height: 2.2;
	color: #18160F;
	text-decoration: none;
}
.ff-archive-sidebar__cats a:hover { text-decoration: underline; }
.ff-archive-sidebar__tags {
	display: flex;
	flex-wrap: wrap;
	gap: 0;
}
.ff-archive-sidebar__tags a {
	display: inline-block;
	padding: 6px 16px;
	margin: 4px;
	border-radius: 30px;
	font-family: 'Instrument Sans', sans-serif;
	font-size: 13px;
	font-weight: 600;
	color: #ffffff;
	background: linear-gradient(135deg, #7DD3C0, #00BFFF, #E91E8C);
	text-decoration: none;
	transition: opacity 0.2s;
}
.ff-archive-sidebar__tags a:hover { opacity: 0.85; }
.ff-archive-sidebar__newsletter .ff-archive-sidebar__heading { font-size: 16px; text-transform: none; letter-spacing: 0; }
.ff-archive-sidebar__newsletter .ff-archive-newsletter-mini__embed { min-height: 60px; margin-top: 0.5rem; }

/* Newsletter section — center Kit form */
.ff-newsletter, .ff-newsletter-inner, .seva-form, .formkit-form { margin: 0 auto !important; text-align: center !important; max-width: 600px; }
.ff-archive-newsletter .seva-form, .ff-archive-newsletter .formkit-form { margin: 0 auto !important; text-align: center !important; max-width: 600px; }

@media (max-width: 900px) {
	.ff-archive-header__title { font-size: 2.5rem; }
	.ff-archive-wrap { flex-direction: column !important; padding: 0 24px !important; }
	.ff-archive-main, .ff-archive-sidebar { width: 100% !important; }
	.ff-archive-grid { grid-template-columns: 1fr; }
	.ff-archive-sidebar { position: static; }
}
</style>

<main class="ff-archive-page">

	<header class="ff-archive-header">
		<div class="ff-archive-header__inner">
			<h1 class="ff-archive-header__title"><?php single_cat_title(); ?></h1>
			<?php if ( category_description() ) : ?>
				<div class="ff-archive-header__desc"><?php echo wp_kses_post( category_description() ); ?></div>
			<?php endif; ?>
			<nav class="ff-archive-pills" aria-label="Category filter">
				<?php
				$parish_cat = get_category_by_slug( 'parish' );
				$home_cat   = get_category_by_slug( 'home' );
				$heart_cat  = get_category_by_slug( 'heart' );
				?>
				<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="ff-archive-pill ff-archive-pill--inactive">All</a>
				<a href="<?php echo $parish_cat ? esc_url( get_category_link( $parish_cat ) ) : esc_url( home_url( '/category/parish/' ) ); ?>" class="ff-archive-pill <?php echo ( $current_slug === 'parish' ) ? 'ff-archive-pill--active' : 'ff-archive-pill--inactive'; ?>">Parish</a>
				<a href="<?php echo $home_cat ? esc_url( get_category_link( $home_cat ) ) : esc_url( home_url( '/category/home/' ) ); ?>" class="ff-archive-pill <?php echo ( $current_slug === 'home' ) ? 'ff-archive-pill--active' : 'ff-archive-pill--inactive'; ?>">Home</a>
				<a href="<?php echo $heart_cat ? esc_url( get_category_link( $heart_cat ) ) : esc_url( home_url( '/category/heart/' ) ); ?>" class="ff-archive-pill <?php echo ( $current_slug === 'heart' ) ? 'ff-archive-pill--active' : 'ff-archive-pill--inactive'; ?>">Heart</a>
			</nav>
		</div>
	</header>

	<div class="ff-archive-grid-wrap">
		<div class="ff-archive-wrap" style="display:flex; gap:2%; max-width:1400px; margin:0 auto; padding:0 40px;">
			<div class="ff-archive-main" style="width:70%;">
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
							$img = get_the_post_thumbnail_url( get_the_ID(), 'large' );
							?>
							<article class="ff-archive-card">
								<div class="ff-archive-card__img-wrap">
									<?php if ( $img ) : ?>
										<img src="<?php echo esc_url( $img ); ?>" alt="" style="width:100%;height:260px;object-fit:cover;" loading="lazy">
									<?php else : ?>
										<div style="width:100%;height:260px;background:linear-gradient(135deg,#7DD3C0,#00BFFF,#E91E8C);display:flex;align-items:center;justify-content:center;"><span style="font-family:'Instrument Sans',sans-serif;font-size:64px;color:white;opacity:0.5;">F</span></div>
									<?php endif; ?>
								</div>
								<div class="ff-archive-card__body">
									<span class="ff-archive-card__cat ff-archive-card__cat--<?php echo esc_attr( $pillar_slug ); ?>"><?php echo esc_html( $pillar_slug === 'parish' ? 'Parish' : ( $pillar_slug === 'home' ? 'Home' : 'Heart' ) ); ?></span>
									<time class="ff-archive-card__date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
									<h2 class="ff-archive-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<div class="ff-archive-card__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 22 ); ?></div>
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
					<p>No posts in this category yet.</p>
				<?php endif; ?>
			</div>

			<aside class="ff-archive-sidebar" style="width:28%;">
				<div class="ff-archive-sidebar__section">
					<h3 class="ff-archive-sidebar__heading">Categories</h3>
					<ul class="ff-archive-sidebar__cats">
						<?php
						$parish_cat = get_category_by_slug( 'parish' );
						$home_cat   = get_category_by_slug( 'home' );
						$heart_cat  = get_category_by_slug( 'heart' );
						?>
						<li class="ff-archive-sidebar__cat--parish"><a href="<?php echo $parish_cat ? esc_url( get_category_link( $parish_cat ) ) : esc_url( home_url( '/category/parish/' ) ); ?>">Parish</a></li>
						<li class="ff-archive-sidebar__cat--home"><a href="<?php echo $home_cat ? esc_url( get_category_link( $home_cat ) ) : esc_url( home_url( '/category/home/' ) ); ?>">Home</a></li>
						<li class="ff-archive-sidebar__cat--heart"><a href="<?php echo $heart_cat ? esc_url( get_category_link( $heart_cat ) ) : esc_url( home_url( '/category/heart/' ) ); ?>">Heart</a></li>
					</ul>
				</div>
				<div class="ff-archive-sidebar__section">
					<h3 class="ff-archive-sidebar__heading">Tags</h3>
					<div class="ff-archive-sidebar__tags">
						<?php
						$tags = get_tags( array( 'orderby' => 'count', 'order' => 'DESC', 'number' => 20 ) );
						if ( $tags ) :
							foreach ( $tags as $tag ) :
								?>
								<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
							<?php
							endforeach;
						else :
							?>
							<span style="font-size:14px;color:#9A9488;">No tags yet.</span>
						<?php endif; ?>
					</div>
				</div>
				<div class="ff-archive-sidebar__section ff-archive-sidebar__newsletter">
					<h3 class="ff-archive-sidebar__heading">Subscribe</h3>
					<a data-formkit-toggle="0f497b7f18" href="https://faith-formers.kit.com/0f497b7f18" style="display:inline-block;background:#1A1A2E;color:#FFFFFF;font-family:'Instrument Sans',sans-serif;font-size:15px;font-weight:700;border-radius:100px;padding:12px 28px;text-decoration:none;margin-top:0.5rem;transition:opacity 0.2s;">Subscribe</a>
				</div>
			</aside>
		</div>
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
		header.style.backgroundColor = 'rgba(24, 22, 15, 0.7)';
		header.style.backdropFilter = 'blur(10px)';
	} else {
		header.style.backgroundColor = 'rgba(24, 22, 15, 1)';
		header.style.backdropFilter = 'none';
	}
});
</script>

<?php
get_footer();
