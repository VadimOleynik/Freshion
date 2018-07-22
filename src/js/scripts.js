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


  // Действия при скролле (паралакс, скрытие/появление меню, переключение активных пунктов меню)

  var shopZone = caclZone(shop);
  function caclZone(el) {
  	var zone = new Object;
  	zone.topPos = el.offsetTop;
  	zone.botPos = shop.offsetHeight + shop.offsetTop;
  	return zone;
  };

  window.onscroll = function() {
  	parallax(needParallax, 2);
  	
  	var scrolled = window.pageYOffset || document.documentElement.scrollTop;

  	if(scrolled >=(shopZone.topPos - 200) && scrolled < shopZone.botPos - 400) {
  		altMenu.classList.add("alt-nav__visible");

  		function switchMenuItems(array) {
  			for (var i = 0; i < array.length; i++) {
  				
  				
  			}
  		}

  		switch (true) {
  			case (scrolled >= anchorPositions[0]  - 200 && scrolled < anchorPositions[1] - 200):
  			console.log("рюкзаки");
  			break;
  			case (scrolled >= anchorPositions[1]  - 200 && scrolled < anchorPositions[2] - 200):
  			console.log("сумки");
  			break;
  			case (scrolled >= anchorPositions[2]  - 200 && scrolled < anchorPositions[3] - 200):
  			console.log("клатчи");
  			break;
  			case (scrolled >= anchorPositions[3] - 400):
  			console.log("кошельки");
  			break;  		}
  		}
  		else if (scrolled <(shopZone.topPos - 200) || scrolled >= shopZone.botPos - 400) {
  			altMenu.classList.remove("alt-nav__visible");
  		}


  	};


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
  console.log(anchorPositions);
  for (var i = 0; i < anchors.length; i++) {
  	anchorPositions[i] = (elmYPosition(anchors[i]));
  }	

};