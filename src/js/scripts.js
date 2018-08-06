'use strict';
window.onload = function() {

	var mobMenuBtn = document.querySelector(".main-header--mobile");
	var menuList = document.querySelector(".main-header--list");
	var needParallax = document.querySelectorAll('[data-parallax="true"]');
	var needSmooth = document.querySelectorAll('[data-smooth="true"]');
  var needToggleMain = document.querySelectorAll('[data-toggle-main="true"]');
  var needToggleAlt = document.querySelectorAll('[data-toggle-alt="true"]');
  var mainAnchors = document.querySelectorAll('[data-anchor-main="true"]');
  var shopAnchors = document.querySelectorAll('[data-anchor-shop="true"]');
  var altMenu = document.querySelector(".alt-nav");
  var shop = document.querySelector("#shop");
  var colorSwitchBtns = document.querySelectorAll(".product--color");
  var imgsOfProducts = document.querySelectorAll(".product--img");
  var orders = document.querySelector(".orders");
  var orderBtnShow = document.querySelector(".main-header--orders");
  var orderBtnHide = document.querySelector(".orders--close");
  var orderOverlay = document.querySelector(".orders--overlay");
  var orderSubmit = document.querySelector(".orders--submit");
  var thanksModal = document.querySelector(".thanks-for-order");
  var thanksModalCloseBtn = document.querySelector(".thanks-for-order--btn");
  var thanksModalOverlay = document.querySelector(".thanks-for-order--overlay");
  var smallScreen = 767;

  // Мобильное меню
  mobMenuBtn.addEventListener("click", function(event) {
  	event.preventDefault();
    menuList.classList.toggle("main-header--list__show");
    menuList.classList.toggle("main-header--list__hide");
  }, false);

  // Действия при скролле (паралакс, скрытие/появление меню, переключение активных пунктов меню)
  var shopZone = caclZone(shop);
  var mainAnchorPositions = getPosition(mainAnchors);
  var shopAnchorPositions = getPosition(shopAnchors);

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

      for (var i = 0; i < mainAnchorPositions.length; i++) {
        for (var i = 0; i < needToggleMain.length; i++) {
          needToggleMain[i].closest(".main-header--item").classList.remove("main-header--item__active");
        }
        if (scrolled >= mainAnchorPositions[i] && scrolled < mainAnchorPositions[i+1]) {
          needToggleMain[i].closest(".main-header--item").classList.add("main-header--item__active");
        }
        else if (scrolled >= shopAnchorPositions[shopAnchorPositions.length - 1]) {
          needToggleMain[mainAnchorPositions.length - 1].closest(".main-header--item").classList.add("main-header--item__active");
        }
      }

      if(scrolled >=(shopZone.topPos - 200) && scrolled < shopZone.botPos -400) {
       altMenu.classList.add("alt-nav__visible");
       for (var i = 0; i < needToggleAlt.length; i++) {
        needToggleAlt[i].classList.remove("alt-nav--item__active");
      }
      for (var i = 0; i < shopAnchorPositions.length; i++) {
        if (scrolled >= shopAnchorPositions[i] - 400 && scrolled < shopAnchorPositions[i+1] - 400) {
         needToggleAlt[i].classList.add("alt-nav--item__active");
       }
       else if (scrolled >= shopAnchorPositions[shopAnchorPositions.length - 1] - 400) {
         needToggleAlt[shopAnchorPositions.length - 1].classList.add("alt-nav--item__active");
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
      console.log(this);
      event.preventDefault();
      var el = document.querySelector(this.getAttribute("href"));
      smoothScroll(el, 10, 60);
    }, false);
  }

	// Переключение цветов товара 
  var activeImg;
  for (var i = 0; i < colorSwitchBtns.length; i++) {
    colorSwitchBtns[i].addEventListener("click", function(event) {
     event.preventDefault();	
     const index = [...colorSwitchBtns].indexOf(this);
     activeImg = imgsOfProducts[index].closest(".product--more-info__img").querySelectorAll(".product--img__active");

     if (imgsOfProducts[index].closest(".product--more-info__img").querySelectorAll(".product--img").length > 1) { // Не анимировать, если только одно фото
      for (var i = 0; i < activeImg.length; i++) {
        fadeOut(activeImg[i], "product--img__active");
      }
      fadeIn(imgsOfProducts[index], "product--img__active");
    }
    else {
      return false;
    }

  }, false);
  }

  // Корзина
  orderBtnShow.addEventListener("click", function(event) {
    event.preventDefault();
    orderBtnHide.classList.remove("orders--close__rotate");
    orders.classList.remove("orders__hide")
    orders.classList.add("orders__show");
    orderOverlay.classList.remove("overlay__hide")
    orderOverlay.classList.add("overlay__show");
  }, false);

  orderBtnHide.addEventListener("click", function(event) {
    event.preventDefault();
    orderBtnHide.classList.add("orders--close__rotate");
    orders.classList.remove("orders__show")
    orders.classList.add("orders__hide");
    orderOverlay.classList.remove("overlay__show")
    orderOverlay.classList.add("overlay__hide");  
  }, false);

  // Модальное окно "Спасибо за заказ"
  orderSubmit.addEventListener("click", function(event) {
    event.preventDefault();
    thanksModal.classList.add("modal__show");
    thanksModalOverlay.classList.add("overlay__show")
    thanksModal.classList.remove("modal__hide");
    thanksModalOverlay.classList.remove("overlay__hide");
  }, false);

  thanksModalCloseBtn.addEventListener("click", function(event) {
    event.preventDefault();
    thanksModal.classList.add("modal__hide");
    thanksModalOverlay.classList.add("overlay__hide")
    thanksModal.classList.remove("modal__show");
    thanksModalOverlay.classList.remove("overlay__show");
  }, false);

};

