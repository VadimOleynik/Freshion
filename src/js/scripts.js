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
  var details = document.querySelector(".details");

  var shop = document.querySelector("#shop");
  var products = document.querySelectorAll(".product");
  var productsBtn = document.querySelectorAll(".product--buy");
  var colorSwitchBtns = document.querySelectorAll(".product--color");
  var imgsOfProducts = document.querySelectorAll(".product--img");

  var orders = document.querySelector(".orders");
  var ordersList = document.querySelector(".orders--list");
  var ordersInput = document.querySelector(".orders--input");
  var orderBtnShow = document.querySelector(".main-header--orders");
  var ordersAmount = document.querySelector(".main-header--amount");
  var orderBtnHide = document.querySelector(".orders--close");
  var orderPriceSumm = document.querySelector(".price--amount");
  var orderOverlay = document.querySelector(".orders--overlay");
  var orderDelete = document.querySelector(".order--deletes");
  var orderSubmit = document.querySelector(".orders--submit");

  var thanksModal = document.querySelector(".thanks-for-order");
  var thanksModalCloseBtn = document.querySelector(".modal--btn");
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
  for (var i = 0; i < colorSwitchBtns.length; i++) {
    colorSwitchBtns[i].addEventListener("click", function(event) {
     event.preventDefault();	
     const index = [...colorSwitchBtns].indexOf(this);
     var activeImg = imgsOfProducts[index].closest(".product--more-info__img").querySelectorAll(".product--img__active");
     var activeBtn = (colorSwitchBtns[index]).closest(".product--colors").querySelectorAll(".product--color__active");

     for (var i = 0; i < activeBtn.length; i++) {
       activeBtn[i].classList.remove("product--color__active");
     }
     colorSwitchBtns[index].classList.add("product--color__active"); // Смена актывных кнопок

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

  // Добавление товаров в корзину
  var productsToOrder = 0;

  for (var i = 0; i < productsBtn.length; i++) {
    productsBtn[i].addEventListener("click", function(event) {
      event.preventDefault();
      var productName = this.closest(".shop--item").querySelector(".product--about").innerHTML;
      var productPrice = this.closest(".shop--item").querySelector(".product--price").innerHTML.replace(/\D+/g,""); //Оставить только цифры из строки
      var productPhotoLink = this.closest(".shop--item").querySelector(".product--img__active").getAttribute("src");
      var productPhotoAlt = this.closest(".shop--item").querySelector(".product--img__active").getAttribute("alt");
      var order = document.querySelectorAll(".order");
      var orderName = new Array;
      var orderPrice = new Array;
      var orderPhotoLink = new Array;
      var amountsOfOrders = new Array; 
      
      if (!order.length) { // Создать первый заказ
        createNewOrderItem();
        orderPriceSumm.innerHTML = calcOrdersPrice([productPrice], [1]).toString();
        ordersAmount.innerHTML = 1;
      }
      else {
        for (var j = 0; j < order.length; j++) {
          orderName[j] = order[j].querySelector(".order--name").innerHTML;
          orderPrice[j] = order[j].querySelector(".order--price").innerHTML.replace(/\D+/g,"");
          orderPhotoLink[j] = order[j].querySelector(".order--img").getAttribute("src"); 
          amountsOfOrders[j] = order[j].querySelector(".order--amount").getAttribute("value");// Массивы названий, цен, ссылок и количеств товаров, которые в корзине
        }

        ordersAmount.innerHTML = calcOrdersAmount(amountsOfOrders) + 1;
        
        // Увеличить количество товаров, если его добавили в корзину больше одного раза
        var nameIndex = orderName.indexOf(productName);
        var priceIndex = orderPrice.indexOf(productPrice);
        var photoLinkIndex = orderPhotoLink.indexOf(productPhotoLink); // Проверка совпадения параметров добавляемого товара с параметрами товаров, которые уже в корзине 
        
        if(nameIndex !== -1 && priceIndex !== -1 && photoLinkIndex !== -1) {
          var orderAmount = +(order[nameIndex].querySelector(".order--amount").value);
          orderAmount++;
          order[nameIndex].querySelector(".order--amount").setAttribute("value", orderAmount);
        }
        else {
          createNewOrderItem();
          /*console.log(calcOrdersPrice(orderPrice, [1,5], 10));*/
        }
      }
      function createNewOrderItem() {
        var newItemHTML = 
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
        ordersList.appendChild(newItem);
      }
    }, false);
  }

  // Изминение числа заказов при изминении поля "Количество"
  document.addEventListener("input", function(e){
    if(e.target && e.target.classList[0] == "order--amount"){ // e.target = this
      e.target.setAttribute("value", e.target.value);
      getAndSetOrdersAmount();
    }
  }, false);


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

  // Подсчет количества заказов (такая формула нужна, чтобы динамически менять количество заказов, при изменении поля "Количества". Изменение количества при клике на кнопку "Купить" с этим не справится)
  function calcOrdersAmount(amounts) {
    var summ = 0;
    for (var i = 0; i < amounts.length; i++) {
      summ += +amounts[i];
    }
    return summ;
  }

  // Подсчет суммы заказа
  function calcOrdersPrice(prices, amounts, promocod) {
    var promocod = promocod || 0;
    var summ = 0;
    for (var i = 0; i < prices.length; i++) {
      summ += prices[i] * amounts[i];
    }
    return summ - (summ / 100 * promocod);
  }


  // Удаление товаров с корзины 
  document.addEventListener('click', function(e){
    if(e.target && e.target.classList[0] == "order--delete"){
      e.preventDefault();
      var thisOrder =  e.target.closest(".order");
      var callback = function(thisOrder) {
        thisOrder.parentNode.removeChild(thisOrder);
        getAndSetOrdersAmount();
      };
      fadeOut(thisOrder, "", 40, callback, thisOrder);
    }
  });

  function getAndSetOrdersAmount() {
    var order = document.querySelectorAll(".order");
    var amountsOfOrders = new Array;
    for (var i = 0; i < order.length; i++) {
      amountsOfOrders[i] = order[i].querySelector(".order--amount").getAttribute("value");
    }
    ordersAmount.innerHTML = calcOrdersAmount(amountsOfOrders);
  }
};

