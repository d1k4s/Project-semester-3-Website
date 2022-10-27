// Navbar Fixed
window.onscroll = function() {
	const header	= document.querySelector('header');
	const fixedNav	= header.offsetTop;

	if(window.pageYOffset > fixedNav) {
		header.classList.add('navbar-fixed');
		header.classList.add('backdrop-blur');
	} else {
		header.classList.remove('navbar-fixed');
		header.classList.add('backdrop-blur');

	}
}

// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu	= document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
	hamburger.classList.toggle('hamburger-active');
	navMenu.classList.toggle('hidden');
})