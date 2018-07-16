'use strict';
window.onload = function() {

	var mobMenuBtn = document.querySelector(".main-header--mobile");
	var menuList = document.querySelector(".main-header--list");
	var needParallax = document.querySelector('[data-parallax="true"]');


	mobMenuBtn.addEventListener("click", function(event) {
		event.preventDefault();
		var menuListOpen = document.querySelector(".main-header--list__open");
		toggleSlide(menuList);
	}, false);


	parallax(needParallax, 2);





	

};