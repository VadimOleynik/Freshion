var parallax = function(el, speed) {
	var scrolled = window.pageYOffset || document.documentElement.scrollTop;
	var yPos = -(scrolled / speed);
	for (var i = 0; i < el.length; i++) {
		el[i].style.backgroundPosition = "center "+ yPos + "%";
	}
};