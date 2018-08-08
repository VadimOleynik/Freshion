'use strict';
window.onload = function() {

	var mobMenuBtn = document.querySelector(".main-header--mobile");
	var menuList = document.querySelector(".main-header--list");
  var smallScreen = 767;

  var needParallax = document.querySelectorAll('[data-parallax="true"]');
  var needSmooth = document.querySelectorAll('[data-smooth="true"]');
  var needToggleMain = document.querySelectorAll('[data-toggle-main="true"]');
  var needToggleAlt = document.querySelectorAll('[data-toggle-alt="true"]');
  var mainAnchors = document.querySelectorAll('[data-anchor-main="true"]');
  var shopAnchors = document.querySelectorAll('[data-anchor-shop="true"]');
  var altMenu = document.querySelector(".alt-nav");

  var shop = document.querySelector("#shop");
  var products = document.querySelectorAll("[data-product-cod]");
  var productsBtn = document.querySelectorAll(".product--buy");
  var colorSwitchBtns = document.querySelectorAll(".product--color");
  var imgsOfProducts = document.querySelectorAll(".product--img");

  var orders = document.querySelector(".orders");
  var ordersList = document.querySelector(".orders--list");
  var orderBtnShow = document.querySelector(".main-header--orders");
  var ordersAmount = document.querySelector(".main-header--amount");
  var orderBtnHide = document.querySelector(".orders--close");
  var orderOverlay = document.querySelector(".orders--overlay");
  var orderSubmit = document.querySelector(".orders--submit");

  var thanksModal = document.querySelector(".thanks-for-order");
  var thanksModalCloseBtn = document.querySelector(".thanks-for-order--btn");
  var thanksModalOverlay = document.querySelector(".thanks-for-order--overlay");


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

      for (var i = 0; i < needToggleMain.length; i++) {
        needToggleMain[i].closest(".main-header--item").classList.remove("main-header--item__active");
      }
      for (var i = 0; i < mainAnchorPositions.length; i++) {
        if (scrolled >= mainAnchorPositions[i] - 200 && scrolled < mainAnchorPositions[i+1] - 200) {
          needToggleMain[i].closest(".main-header--item").classList.add("main-header--item__active");
        }
        else if (scrolled >= mainAnchorPositions[mainAnchorPositions.length - 1] - 200) {
          needToggleMain[mainAnchorPositions.length - 1].closest(".main-header--item").classList.add("main-header--item__active");
        }
      }

      if(scrolled >=(shopZone.topPos - 200) && scrolled < shopZone.botPos - 400) {
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

  //Добавление товаров в корзину
  var productsToOrder = 0;
  var productName;
  var productPrice;
  var productPhotoLink;
  var productPhotoAlt;
  var newItemHTML = "";
  /*var t = document.querySelector('#orders--temnplate');
  var clone = document.importNode(t.content, true);
  var orderName = clone.querySelector(".order--name");
  var orderPrice = clone.querySelector(".order--price");
  var orderPhoto = clone.querySelector(".order--img");*/

  for (var i = 0; i < productsBtn.length; i++) {
    productsBtn[i].addEventListener("click", function(event) {
      event.preventDefault();
      productsToOrder++;
      ordersAmount.innerHTML = productsToOrder.toString();
      productName = this.closest(".shop--item").querySelector(".product--about").innerHTML;
      productPrice = this.closest(".shop--item").querySelector(".product--price").innerHTML.replace(/\D+/g,""); //Оставить только цифры из строки
      productPhotoLink = this.closest(".shop--item").querySelector(".product--img__active").getAttribute("src");
      productPhotoAlt = this.closest(".shop--item").querySelector(".product--img__active").getAttribute("alt");

      newItemHTML = 
      `<img class="order--img" src="${productPhotoLink}" alt="${productPhotoAlt}">
      <div class="order--info">
      <p class="order--name">${productName}</p>
      <label class="order--label">
      Количество:
      <input type="number" min="1" max="10" class="order--amount" value="1">
      </label>
      <p class="order--price">${productPrice} <span class="orders--currency">грн.</span></p>
      <button class="order--delete">Удалить товар</button>
      </div>`;
      var newItem = document.createElement("li");
      newItem.className += " orders--item order";
      newItem.innerHTML = newItemHTML;
      console.log(newItem);
      ordersList.appendChild(newItem);
    }, false);
  }

  // Открытие корзины
  orderBtnShow.addEventListener("click", function(event) {
    event.preventDefault();
    removeAndAddClass([orders, orderOverlay], ["orders__show", "overlay__show"], [orders, orderOverlay, orderBtnHide], ["orders__hide", "overlay__hide", "orders--close__rotate"]);    
  }, false);

  orderBtnHide.addEventListener("click", function(event) {
    event.preventDefault();
    removeAndAddClass([orderBtnHide, orders, orderOverlay], ["orders--close__rotate", "orders__hide", "overlay__hide"], [orders, orderOverlay], ["orders__show", "overlay__show"]);
  }, false);

  orderOverlay.addEventListener("click", function(event) {
    event.preventDefault();
    removeAndAddClass([orderBtnHide, orders, orderOverlay], ["orders--close__rotate", "orders__hide", "overlay__hide"], [orders, orderOverlay], ["orders__show", "overlay__show"]);
  }, false);


  // Модальное окно "Спасибо за заказ"
  orderSubmit.addEventListener("click", function(event) {
    event.preventDefault();
    removeAndAddClass([thanksModal, thanksModalOverlay], ["modal__show", "overlay__show"], [thanksModal, thanksModalOverlay], ["modal__hide", "overlay__hide"]);
  }, false);

  thanksModalCloseBtn.addEventListener("click", function(event) {
    event.preventDefault();
    removeAndAddClass([thanksModal, thanksModalOverlay], ["modal__hide", "overlay__hide"], [thanksModal, thanksModalOverlay], ["modal__show", "overlay__show"]);
    clearOrders(ordersList);
  }, false);

  thanksModalOverlay.addEventListener("click", function(event) {
    event.preventDefault();
    removeAndAddClass([thanksModal, thanksModalOverlay], ["modal__hide", "overlay__hide"], [thanksModal, thanksModalOverlay], ["modal__show", "overlay__show"]);
    clearOrders(ordersList);
  }, false);


  function removeAndAddClass (elemsToAddClass, classToAdd, elemsToremoveClass, classToRemove) {
    for (var i = 0; i < elemsToAddClass.length; i++) {
      elemsToAddClass[i].classList.add(classToAdd[i]);
    }
    for (var i = 0; i < elemsToremoveClass.length; i++) {
      elemsToremoveClass[i].classList.remove(classToRemove[i]);
    }
  }

  function clearOrders(ordersEl) {
    while(ordersEl.firstChild) {
      ordersEl.removeChild(ordersEl.firstChild);
    }
  }

};

