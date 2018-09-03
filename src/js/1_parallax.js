const parallax = function(el, speed) {
	let scrolled = window.pageYOffset || document.documentElement.scrollTop;
	const yPos = (scrolled / speed);
	
	for (let i = 0; i < el.length; i++) {
		el[i].style.backgroundPosition = "center "+ yPos + "vh";
	}
};