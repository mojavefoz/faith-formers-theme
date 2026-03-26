/**
 * Faith Formers Child — sticky header on scroll
 *
 * @package Faith_Formers_Child
 */

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
