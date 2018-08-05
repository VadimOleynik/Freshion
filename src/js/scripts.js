'use strict';
window.onload = function() {

	var mobMenuBtn = document.querySelector(".main-header--mobile");
	var menuList = document.querySelector(".main-header--list");
	var needParallax = document.querySelectorAll('[data-parallax="true"]');
	var needSmooth = document.querySelectorAll('[data-smooth="true"]');
	var needToggle = document.querySelectorAll('[data-toggle-alt="true"]');
	var anchors = document.querySelectorAll('[data-anchor="true"]');
	var altMenu = document.querySelector(".alt-nav");
	var shop = document.querySelector("#shop");
	var colorSwitchBtns = document.querySelectorAll(".product--color");
	var imgsOfProducts = document.querySelectorAll(".product--img");
	var smallScreen = 767;

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

  if(window.innerWidth > smallScreen) {
  	window.onscroll = function() {
  		parallax(needParallax, 10);

  		var scrolled = window.pageYOffset || document.documentElement.scrollTop;

  		if(scrolled >=(shopZone.topPos - 200) && scrolled < shopZone.botPos -400) {
  			altMenu.classList.add("alt-nav__visible");

  			for (var i = 0; i < needToggle.length; i++) {
  				needToggle[i].classList.remove("alt-nav--item__active");
  			}
  			for (var i = 0; i < anchorPositions.length; i++) {
  				if (scrolled >= anchorPositions[i] - 400 && scrolled < anchorPositions[i+1] - 400) {
  					needToggle[i].classList.add("alt-nav--item__active");
  				}
  				else if (scrolled >= anchorPositions[anchorPositions.length - 1] - 400) {
  					needToggle[anchorPositions.length - 1].classList.add("alt-nav--item__active");
  				}
  			}
  		}

  		else if (scrolled <(shopZone.topPos - 200) || scrolled >= shopZone.botPos - 400) {
  			altMenu.classList.remove("alt-nav__visible");
  		}
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
  for (var i = 0; i < anchors.length; i++) {
  	anchorPositions[i] = (elmYPosition(anchors[i]));
  }	

	// Переключение цветов товара 
  var activeImg;
/*  var removeImgCLass = function(el) {
    el.classList.remove("product--img__active");
  };
  var addImgCLass = function(el) {
    el.classList.add("product--img__active");
  };*/
  for (var i = 0; i < colorSwitchBtns.length; i++) {
    colorSwitchBtns[i].addEventListener("click", function(event) {
     event.preventDefault();	
     const index = [...colorSwitchBtns].indexOf(this);
     activeImg = imgsOfProducts[index].closest(".product--more-info").querySelectorAll(".product--img__active");
     for (var i = 0; i < activeImg.length; i++) {
      fadeOut(activeImg[i], "product--img__active");
      
    }
    fadeIn(imgsOfProducts[index], "product--img__active");
  }, false);
  }

};

