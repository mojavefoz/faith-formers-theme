/**
 * Faith Formers Child — universal header: scroll transition + mobile nav toggle.
 *
 * @package Faith_Formers_Child
 */
( function () {
	'use strict';

	var header = document.getElementById( 'ff-header' );
	if ( ! header ) return;

	// ── Scroll transition ───────────────────────────────────────
	// Transparent → cream (#F5EDE0) with box-shadow after 10px scroll.
	function onScroll() {
		if ( window.scrollY > 10 ) {
			header.classList.add( 'ff-header--scrolled' );
		} else {
			header.classList.remove( 'ff-header--scrolled' );
		}
	}

	window.addEventListener( 'scroll', onScroll, { passive: true } );
	onScroll(); // apply correct state on page load (e.g. after back-navigation)

	// ── Mobile nav toggle ───────────────────────────────────────
	var toggle = document.querySelector( '.ff-header__toggle' );
	var nav    = document.getElementById( 'ff-header-nav' );

	if ( toggle && nav ) {
		toggle.addEventListener( 'click', function () {
			var isOpen = nav.classList.toggle( 'ff-header__nav--open' );
			toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
			toggle.setAttribute( 'aria-label', isOpen ? 'Close menu' : 'Open menu' );
		} );

		// Close nav when a link is tapped on mobile.
		nav.querySelectorAll( '.ff-header__nav-link' ).forEach( function ( link ) {
			link.addEventListener( 'click', function () {
				nav.classList.remove( 'ff-header__nav--open' );
				toggle.setAttribute( 'aria-expanded', 'false' );
				toggle.setAttribute( 'aria-label', 'Open menu' );
			} );
		} );
	}
} )();
