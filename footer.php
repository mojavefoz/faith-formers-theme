<?php
/**
 * Footer template — Faith Formers custom footer. Loaded by get_footer().
 *
 * @package Faith_Formers_Child
 */

?>
<style type="text/css">
/* ── Footer — design system v2: Instrument Sans · ink #18160F · teal #7DD3C0 ── */
#colophon, .site-footer { display: none !important; }

.ff-footer {
	background: #18160F;
	width: 100%;
	margin: 0;
	font-family: 'Instrument Sans', sans-serif;
}
.ff-footer__top {
	padding: 60px 40px;
	max-width: 1400px;
	margin: 0 auto;
	display: grid;
	grid-template-columns: 1fr 1fr 1fr;
	gap: 3rem;
}
.ff-footer__logo { display: block; margin: 0 0 1rem; }
.ff-footer__tagline {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 14px;
	line-height: 1.8;
	color: rgba(255,255,255,0.8);
	margin: 0;
}
.ff-footer__heading {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 13px;
	font-weight: 700;
	text-transform: uppercase;
	letter-spacing: 2px;
	color: rgba(255,255,255,0.5);
	margin: 0 0 1rem;
}
.ff-footer__links { display: flex; flex-direction: column; gap: 0; }
.ff-footer__links a {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 16px;
	font-weight: 500;
	line-height: 2.2;
	color: #ffffff;
	text-decoration: none;
	transition: color 0.2s;
}
.ff-footer__links a:hover {
	color: #7DD3C0;
}
.ff-footer__social { display: flex; gap: 0.75rem; margin-top: 1.25rem; }
.ff-footer__social a {
	width: 44px;
	height: 44px;
	border: 2px solid rgba(255,255,255,0.25);
	background: transparent;
	border-radius: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	text-decoration: none;
	transition: border-color 0.2s, transform 0.2s;
}
.ff-footer__social a:hover { border-color: #7DD3C0; transform: scale(1.08); }
.ff-footer__social a svg { width: 22px; height: 22px; }
.ff-footer__social a svg path { fill: #FFFFFF; }
.ff-footer__bottom {
	background: #0E0D09;
	padding: 16px 40px;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
	gap: 1rem;
}
.ff-footer__copy {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 12px;
	color: rgba(255,255,255,0.5);
	margin: 0;
}
.ff-footer__legal { display: flex; flex-wrap: wrap; align-items: center; gap: 0.25rem; }
.ff-footer__legal a {
	font-family: 'Instrument Sans', sans-serif;
	font-size: 12px;
	color: rgba(255,255,255,0.4);
	text-decoration: none;
}
.ff-footer__legal a:hover { color: rgba(255,255,255,0.8); }
.ff-footer__sep { color: rgba(255,255,255,0.25); font-size: 12px; margin: 0 0.35rem; }

@media (max-width: 900px) {
	.ff-footer__top { grid-template-columns: 1fr; padding: 40px 24px; }
	.ff-footer__bottom { flex-direction: column; padding: 16px 24px; text-align: center; }
}
</style>

<footer class="ff-footer">
	<div class="ff-footer__top">
		<div class="ff-footer__col">
			<img src="https://staging.faithformers.com/wp-content/uploads/2026/03/Faith-Formers-Horizontal.png" alt="Faith Formers" class="ff-footer__logo" style="max-width:180px;">
			<p class="ff-footer__tagline">Formation for the parish. Faith for the home. Quiet for the heart.</p>
		</div>
		<div class="ff-footer__col">
			<h3 class="ff-footer__heading">PAGES</h3>
			<nav class="ff-footer__links" aria-label="Footer pages">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<a href="<?php echo esc_url( home_url( '/about-anna/' ) ); ?>">About</a>
				<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>">Resources</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
			</nav>
		</div>
		<div class="ff-footer__col">
			<h3 class="ff-footer__heading">USEFUL LINKS</h3>
			<nav class="ff-footer__links" aria-label="Useful links">
				<a href="<?php echo esc_url( home_url( '/category/parish/' ) ); ?>">Parish Resources</a>
				<a href="<?php echo esc_url( home_url( '/category/home/' ) ); ?>">Home Faith Practices</a>
				<a href="<?php echo esc_url( home_url( '/category/heart/' ) ); ?>">Heart Reflections</a>
				<a href="<?php echo esc_url( home_url( '/#newsletter' ) ); ?>">Join the Newsletter</a>
			</nav>
			<div class="ff-footer__social">
				<a href="https://instagram.com/faithformers" target="_blank" rel="noopener" class="ff-footer__social--ig" aria-label="Instagram"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
				<a href="https://www.youtube.com/@FaithFormers" target="_blank" rel="noopener" class="ff-footer__social--yt" aria-label="YouTube"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
				<a href="https://www.facebook.com/faithformerscatholic" target="_blank" rel="noopener" class="ff-footer__social--fb" aria-label="Facebook"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
			</div>
		</div>
	</div>
	<div class="ff-footer__bottom">
		<p class="ff-footer__copy">© 2026 Faith Formers. All rights reserved.</p>
		<div class="ff-footer__legal">
			<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
			<span class="ff-footer__sep">·</span>
			<a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>">Terms &amp; Conditions</a>
			<span class="ff-footer__sep">·</span>
			<a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">Cookie Policy</a>
			<span class="ff-footer__sep">·</span>
			<a href="<?php echo esc_url( home_url( '/amazon-associates-disclosure/' ) ); ?>">Amazon Associates Disclosure</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
