<?php
/**
 * Faith Formers newsletter signup (Kit/ConvertKit).
 * Target for hero CTA #newsletter.
 *
 * @package Faith_Formers_Child
 */

$kit_uid = '6eb3da3edd';
?>

<section class="ff-newsletter" id="newsletter" aria-label="Newsletter signup">
	<div class="ff-newsletter__inner">
		<h2 class="ff-newsletter__title">Join the Newsletter</h2>
		<p class="ff-newsletter__text">Get encouragement and practical faith formation in your inbox — for the parish, the home, and the heart.</p>
		<div class="ff-newsletter__form">
			<script async data-uid="<?php echo esc_attr( $kit_uid ); ?>" src="https://faith-formers.kit.com/<?php echo esc_attr( $kit_uid ); ?>/index.js"></script>
		</div>
	</div>
</section>
