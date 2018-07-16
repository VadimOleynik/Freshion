var parallax = function(el, speed) {
	window.onscroll = function() {
		var scrolled = window.pageYOffset || document.documentElement.scrollTop;
		var yPos = -(scrolled / speed);

		el.style.backgroundPosition = "center "+ yPos + "%";
	}
};