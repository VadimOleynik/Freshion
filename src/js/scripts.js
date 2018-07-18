'use strict';
window.onload = function() {

	var mobMenuBtn = document.querySelector(".main-header--mobile");
	var menuList = document.querySelector(".main-header--list");
	var needParallax = document.querySelectorAll('[data-parallax="true"]');
	var needSmooth = document.querySelectorAll('[data-smooth="true"]');
	var anchors = document.querySelectorAll('[data-anchor="true"]');
	var altMenu = document.querySelector(".alt-nav");
	var shop = document.querySelector("#shop");

  // Мобильное меню
  mobMenuBtn.addEventListener("click", function(event) {
  	event.preventDefault();
  	var menuListOpen = document.querySelector(".main-header--list__open");
  	toggleSlide(menuList);
  }, false);


console.log(shop.offsetBottom);

  window.onscroll = function() {
  	parallax(needParallax, 2);
  	
  	var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  	if (scrolled > (anchorPositions[0] - 400)) {
  		altMenu.classList.add("alt-nav__visible");
  	}
  	else if(scrolled < (anchorPositions[0] - 400)) {
  		altMenu.classList.remove("alt-nav__visible");
  	}
  }
  

  // Плавная прокрутка 
  for (var i = 0; i < needSmooth.length; i++) {
  	needSmooth[i].addEventListener("click", function(event) {
  		event.preventDefault();
  		var el = document.querySelector(this.getAttribute("href"));
  		smoothScroll(el, 10, 60);
  	}, false);
  }

  // Изменение активного пункта навигации
  var anchorPositions = new Array;

  for (var i = 0; i < anchors.length; i++) {
  	anchorPositions[i] = (elmYPosition(anchors[i]));
  }


  

};