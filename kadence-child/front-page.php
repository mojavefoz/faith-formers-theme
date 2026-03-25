<?php
/**
 * Front Page Template
 *
 * Overrides the parent theme when a static front page is set.
 * Displays Faith Formers hero, pillars, about, and newsletter sections.
 *
 * @package Faith_Formers_Child
 */

get_header();
?>

<main id="primary" class="site-main ff-front-page">
	<?php
	get_template_part( 'template-parts/hero', null, array( 'source' => 'front-page' ) );
	get_template_part( 'template-parts/pillars' );
	get_template_part( 'template-parts/about-mission' );
	get_template_part( 'template-parts/newsletter' );

	// Optional: any content added to the front page in the editor appears below our sections
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			$content = get_the_content();
			if ( ! empty( $content ) ) :
				?>
				<div class="ff-front-page__content">
					<?php the_content(); ?>
				</div>
				<?php
			endif;
		endwhile;
	endif;
	?>
</main>

<?php
get_footer();
