"use strict";
window.onload = function() {

	const mobMenuBtn = document.querySelector(".main-header--mobile");
	const menuList = document.querySelector(".main-header--list");
  const smallScreen = 767;

  const needParallax = document.querySelectorAll('[data-parallax="true"]');
  const needSmooth = document.querySelectorAll('[data-smooth="true"]');
  const needToggleMain = document.querySelectorAll('[data-toggle-main="true"]');
  const needToggleAlt = document.querySelectorAll('[data-toggle-alt="true"]');
  const mainAnchors = document.querySelectorAll('[data-anchor-main="true"]');
  const shopAnchors = document.querySelectorAll('[data-anchor-shop="true"]');
  const altMenu = document.querySelector(".alt-nav");
  
  const shop = document.querySelector("#shop");
  const products = document.querySelectorAll(".product");
  const moreInfo = document.querySelectorAll(".product--more-info");
  const moreInfoModal = document.querySelectorAll(".product--details");
  const moreInfoOverlay = document.querySelectorAll(".product--details");
  const productsBtn = document.querySelectorAll(".product--buy");
  const colorSwitchBtns = document.querySelectorAll(".product--color");
  const imgsOfProducts = document.querySelectorAll(".product--img");
  const imgDetails = document.querySelectorAll(".details--img");

  const orders = document.querySelector(".orders");
  const ordersForm = document.querySelector("#orders--form");
  const ordersList = document.querySelector(".orders--list");
  const ordersInput = document.querySelectorAll(".orders--input__required");
  const orderBtnShow = document.querySelector(".main-header--orders");
  const ordersAmount = document.querySelector(".main-header--amount");
  const cart = document.querySelector(".main-header--buy"); 
  const orderBtnHide = document.querySelector(".orders--close");
  const orderPriceSumm = document.querySelector(".price--amount");
  const promocod = document.querySelector("#cod");
  const orderOverlay = document.querySelector(".orders--overlay");
  const orderDelete = document.querySelector(".order--deletes");
  const orderSubmit = document.querySelector(".orders--submit");
  const ordersEmpty = document.querySelector(".orders--empty");
  const ordersError = document.querySelector(".orders--error");

  const modal = document.querySelectorAll(".modal");
  const overlay = document.querySelectorAll(".overlay");
  const modalCloseBtn = document.querySelectorAll(".modal--btn");

  const thanksModal = document.querySelector(".thanks-for-order");
  const thanksModalCloseBtn = document.querySelector(".modal--btn");
  const thanksModalOverlay = document.querySelector(".thanks-for-order--overlay");

  // Мобильное меню
  mobMenuBtn.addEventListener("click", function(event) {
  	event.preventDefault();
    menuList.classList.toggle("main-header--list__show");
    menuList.classList.toggle("main-header--list__hide");
  }, false);

  // Действия при скролле (паралакс, скрытие/появление меню, переключение активных пунктов меню)
  const shopZone = caclZone(shop);
  const mainAnchorPositions = getPosition(mainAnchors);
  const shopAnchorPositions = getPosition(shopAnchors);

  function caclZone(el) {
  	let zone = new Object;
  	zone.topPos = el.offsetTop;
  	zone.botPos = shop.offsetHeight + shop.offsetTop;
  	return zone;
  };

  if(window.innerWidth > smallScreen) {
  	window.onscroll = function() {
  		parallax(needParallax, 10);

  		const scrolled = window.pageYOffset || document.documentElement.scrollTop;

      for (let i = 0; i < needToggleMain.length; i++) {
        needToggleMain[i].closest(".main-header--item").classList.remove("main-header--item__active");
      }
      for (let i = 0; i < mainAnchorPositions.length; i++) {
        if (scrolled >= mainAnchorPositions[i] - 200 && scrolled < mainAnchorPositions[i+1] - 200) {
          needToggleMain[i].closest(".main-header--item").classList.add("main-header--item__active");
        }
        else if (scrolled >= mainAnchorPositions[mainAnchorPositions.length - 1] - 200) {
          needToggleMain[mainAnchorPositions.length - 1].closest(".main-header--item").classList.add("main-header--item__active");
        }
      }

      if(scrolled >=(shopZone.topPos - 200) && scrolled < shopZone.botPos - 400) {
       altMenu.classList.add("alt-nav__visible");
       for (let i = 0; i < needToggleAlt.length; i++) {
        needToggleAlt[i].classList.remove("alt-nav--item__active");
      }
      for (let i = 0; i < shopAnchorPositions.length; i++) {
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
  for (let i = 0; i < needSmooth.length; i++) {
  	needSmooth[i].addEventListener("click", function(event) {
      event.preventDefault();
      const el = document.querySelector(this.getAttribute("href"));
      smoothScroll(el, 10, 60);
    }, false);
  }

	// Переключение цветов товара
  for (let i = 0; i < colorSwitchBtns.length; i++) {
    colorSwitchBtns[i].addEventListener("click", function(event) {
     event.preventDefault();	
     const index = [...colorSwitchBtns].indexOf(this);
     const activeImg = imgsOfProducts[index].closest(".product--more-info__img").querySelectorAll(".product--img__active");
     const activeBtn = (colorSwitchBtns[index]).closest(".product--colors").querySelectorAll(".product--color__active");

     for (let i = 0; i < activeBtn.length; i++) {
       activeBtn[i].classList.remove("product--color__active");
     }
     colorSwitchBtns[index].classList.add("product--color__active"); // Смена актывных кнопок

     if (imgsOfProducts[index].closest(".product--more-info__img").querySelectorAll(".product--img").length > 1) { // Не анимировать, если только одно фото
      for (let i = 0; i < activeImg.length; i++) {
        fadeOut(activeImg[i], "product--img__active");
      }
      fadeIn(imgsOfProducts[index], "product--img__active");
    }
    else {
      return false;
    }
  }, false);
  }

  // Открытие модального окно с подробной информацией о товаре 
  for (let i = 0; i < moreInfo.length; i++) {
    moreInfo[i].addEventListener("click", function(event) {
      const atr = this.getAttribute("href");
      const modal = document.querySelector(atr);
      const overlay = modal.previousElementSibling;
      addAndRemoveClass([modal, overlay], ["modal__show", "overlay__show"], [modal, overlay], ["modal__hide", "overlay__hide"]);
      
      const img = this.closest(".product").querySelector(".product--img__active");
      const index = [...imgsOfProducts].indexOf(img);

      modal.querySelector('[tabindex="-1"]').setAttribute("tabindex","1");

      for (let i = 0; i < imgDetails.length; i++) {
       imgDetails[i].classList.remove("details--img__active");
     }
     imgDetails[index].classList.add("details--img__active");
   }, false);
  }

  // Скрытие модальных окон
  for (let i = 0; i < overlay.length; i++) {
    overlay[i].addEventListener("click", function(event) {
      event.preventDefault();
      const modal = this.nextElementSibling;
      if (modal.classList.contains("modal")) {
        addAndRemoveClass([modal, this], ["modal__hide", "overlay__hide"], [modal, this], ["modal__show", "overlay__show"]);
        modal.querySelector('[tabindex="1"]').setAttribute("tabindex","-1");
      }
      else {
        return false;
      }
    }, false);
  }

  for (let i = 0; i < modalCloseBtn.length; i++) {
    modalCloseBtn[i].addEventListener("click", function(event) {
      event.preventDefault();
      const modal = this.closest(".modal");
      const overlay = modal.previousElementSibling;
      if(modal)
        addAndRemoveClass([modal, overlay], ["modal__hide", "overlay__hide"], [modal, overlay], ["modal__show", "overlay__show"]);
        modal.querySelector('[tabindex="1"]').setAttribute("tabindex","-1");
    }, false);
  }

  // Добавление товаров в корзину 
  for (let i = 0; i < productsBtn.length; i++) {
    productsBtn[i].addEventListener("click", function(event) {
      event.preventDefault(); 
      const productName = this.closest(".shop--item").querySelector(".product--about").innerHTML;
      const productPrice = this.closest(".shop--item").querySelector(".product--price").innerHTML.replace(/\D+/g,""); //Оставить только цифры из строки
      const productPhoto = this.closest(".shop--item").querySelector(".product--img__active");
      const productPhotoLink = this.closest(".shop--item").querySelector(".product--img__active").getAttribute("src");
      const productPhotoAlt = this.closest(".shop--item").querySelector(".product--img__active").getAttribute("alt");
      const productInfo = this.closest(".shop--item").querySelector(".product--more-info").getAttribute("href");
      const order = document.querySelectorAll(".order");
      const orderName = new Array;
      const orderPrice = new Array;
      const orderPhotoLink = new Array;
      const amountsOfOrders = new Array; 
      ordersEmpty.hidden = true;

      cart.classList.add("main-header--buy__rotate");
      
      if (!order.length) { // Создать первый заказ
        createNewOrderItem();
        orderPriceSumm.innerHTML = productPrice;
        setTimeout(function() {
          ordersAmount.innerHTML = 1;
        }, 500)
      }
      else {
        for (let j = 0; j < order.length; j++) {
          orderName[j] = order[j].querySelector(".order--name").innerHTML;
          orderPrice[j] = order[j].querySelector(".order--price").innerHTML.replace(/\D+/g,"");
          orderPhotoLink[j] = order[j].querySelector(".order--img").getAttribute("src"); 
          amountsOfOrders[j] = order[j].querySelector(".order--amount").getAttribute("value");// Массивы названий, цен, ссылок и количеств товаров, которые в корзине
        }

        getOrdersValues(true, true, true, 0);
        
        // Увеличить количество товаров, если его добавили в корзину больше одного раза
        const nameIndex = orderName.indexOf(productName);
        const priceIndex = orderPrice.indexOf(productPrice);
        const photoLinkIndex = orderPhotoLink.indexOf(productPhotoLink); // Проверка совпадения параметров добавляемого товара с параметрами товаров, которые уже в корзине 
        
        if(nameIndex !== -1 && priceIndex !== -1 && photoLinkIndex !== -1) {
          let orderAmount = +(order[nameIndex].querySelector(".order--amount").value);
          orderAmount++;
          order[nameIndex].querySelector(".order--amount").setAttribute("value", orderAmount);
          getOrdersValues(true, true, false, 0);
        }
        else {
          createNewOrderItem();
          getOrdersValues(true, true, false, 0); 
        }
      }
      function createNewOrderItem() {
        const newItemHTML = 
        ` <a class="order--more-info" href="${productInfo}"> 
        <img class="order--img" src="${productPhotoLink}" alt="${productPhotoAlt}">
        </a>
        <div class="order--info">
        <p class="order--name">${productName}</p>
        <label class="order--label">
        Количество:
        <input type="number" min="1" max="10" class="order--amount" value="1">
        </label>
        <p class="order--price">${productPrice} <span class="orders--currency">грн.</span></p>
        <button class="order--delete">Удалить товар</button>
        </div>`;
        const newItem = document.createElement("li");
        newItem.className += " orders--item order";
        newItem.innerHTML = newItemHTML;
        ordersList.appendChild(newItem);
      }
    }, false);
  }

  // Удаление класса у корзины после окончания анимации. Два синтаксиса для разных браузеров
  cart.addEventListener("webkitAnimationEnd", function(event) {
    cart.classList.remove("main-header--buy__rotate");
  }, false);
  cart.addEventListener("animationend",  function(event) {
    cart.classList.remove("main-header--buy__rotate");
  }, false);

  // Изменение числа заказов при изменении поля "Количество"
  document.addEventListener("input", function(e){
    if(e.target && e.target.classList[0] == "order--amount"){ // e.target = this
      e.target.setAttribute("value", e.target.value);
      getOrdersValues(true, true, false, 0);
    }
  }, false);

  // Открытие и закрытие корзины
  orderBtnShow.addEventListener("click", function(event) {
    event.preventDefault();
    addAndRemoveClass([orders, orderOverlay], ["orders__show", "overlay__show"], [orders, orderOverlay, orderBtnHide], ["orders__hide", "overlay__hide", "orders--close__rotate"]);    

    const active = orders.querySelectorAll('[tabindex="-1"]');
    for (var i = 0; i < active.length; i++) {
      active[i].setAttribute("tabindex","1")
    }
    promocod.focus();
  }, false);


  orderBtnHide.addEventListener("click", function(event) {
    event.preventDefault();
    addAndRemoveClass([orderBtnHide, orders, orderOverlay], ["orders--close__rotate", "orders__hide", "overlay__hide"], [orders, orderOverlay], ["orders__show", "overlay__show"]);
    
    const active = orders.querySelectorAll('[tabindex="1"]');
    for (var i = 0; i < active.length; i++) {
      active[i].setAttribute("tabindex","-1")
    }
  }, false);

  orderOverlay.addEventListener("click", function(event) {
    event.preventDefault();
    addAndRemoveClass([orderBtnHide, orders, orderOverlay], ["orders--close__rotate", "orders__hide", "overlay__hide"], [orders, orderOverlay], ["orders__show", "overlay__show"]);
    
    const active = orders.querySelectorAll('[tabindex="1"]');
    for (var i = 0; i < active.length; i++) {
      active[i].setAttribute("tabindex","-1")
    }
  }, false);

  // Введение промокода
  promocod.addEventListener("input", function(event) {
    event.preventDefault();
    if (this.value == "1254") {
      this.closest(".orders--label__cod").classList.add("orders--label__descending");
      getOrdersValues(true, true, false, 10);
    }
    else {
      this.closest(".orders--label__cod").classList.remove("orders--label__descending");
      getOrdersValues(true, true, false, 0);
    }
  }, false);

  // Открытие окна подробной информации о товаре с корзины
  document.addEventListener("click", function(e) {
    if(e.target && e.target.classList[0] == "order--img"){
      e.preventDefault();
      const thisOrder =  e.target.closest(".order");
      const imgSrc = e.target.getAttribute("src");
      const atr = e.target.closest(".order--more-info").getAttribute("href");
      const modal = document.querySelector(atr);
      const overlay = modal.previousElementSibling;
      addAndRemoveClass([modal, overlay], ["modal__show", "overlay__show"], [modal, overlay], ["modal__hide", "overlay__hide"]);
      modal.querySelector('[tabindex="-1"]').setAttribute("tabindex","1");

      const productImgSrc = new Array;
      for (let i = 0; i < imgsOfProducts.length; i++) {
        productImgSrc.push(imgsOfProducts[i].getAttribute("src"));
      }
      const index = [...productImgSrc].indexOf(imgSrc);

      for (let i = 0; i < imgDetails.length; i++) {
       imgDetails[i].classList.remove("details--img__active");
     }
     imgDetails[index].classList.add("details--img__active");
   }
 });

  function addAndRemoveClass (elemsToAddClass, classToAdd, elemsToremoveClass, classToRemove) {
    for (let i = 0; i < elemsToAddClass.length; i++) {
      elemsToAddClass[i].classList.add(classToAdd[i]);
    }
    for (let i = 0; i < elemsToremoveClass.length; i++) {
      elemsToremoveClass[i].classList.remove(classToRemove[i]);
    }
  }

  function clearOrders(ordersEl) {
    while(ordersEl.firstChild) {
      ordersEl.removeChild(ordersEl.firstChild);
    }
  } 

  // Удаление товаров с корзины 
  document.addEventListener('click', function(e) {
    if(e.target && e.target.classList[0] == "order--delete"){
      e.preventDefault();
      const thisOrder =  e.target.closest(".order");
      const callback = function(thisOrder) {
        thisOrder.parentNode.removeChild(thisOrder);
        getOrdersValues(true, true, false, 0);
      };
      fadeOut(thisOrder, "", 40, callback, thisOrder);
    }
  });


  // Проверка текущих значений количества и цен заказов в корзине и запись этих значений в нужные переменные
  function getOrdersValues(amount, price, needIter, discount=0) {
    const order = document.querySelectorAll(".order");
    const amountsOfOrders = new Array; 
    const orderPrice = new Array;

    for (let i = 0; i < order.length; i++) {
      amountsOfOrders[i] = order[i].querySelector(".order--amount").getAttribute("value");
      orderPrice[i] = order[i].querySelector(".order--price").innerHTML.replace(/\D+/g,"");
    }

    if (amount && price) {
      let amountSumm = 0;
      let priceSumm = 0;
      for (let i = 0; i < amountsOfOrders.length; i++) {
        amountSumm += +amountsOfOrders[i];
      }
      if (needIter) {
        amountSumm++;
      }
      setTimeout(function() {
        ordersAmount.innerHTML = amountSumm.toString();
      }, 500)
      
      for (let i = 0; i < orderPrice.length; i++) {
        priceSumm += orderPrice[i] * amountsOfOrders[i];
      }
      orderPriceSumm.innerHTML = (priceSumm - (priceSumm / 100 * discount)).toString();
    }
  };


  // Действия при отправке формы (дополнительная валидация данных, вывод модального окна)
  ordersForm.addEventListener("submit", function(event) {
    event.preventDefault();
    if(!ordersList.querySelector(".orders--item")) {
      ordersEmpty.hidden = false;
      return false;
    }
    formValid(ordersForm);
    addAndRemoveClass([thanksModal, thanksModalOverlay], ["modal__show", "overlay__show"], [thanksModal, thanksModalOverlay], ["modal__hide", "overlay__hide"]);
    thanksModal.querySelector('[tabindex="-1"]').setAttribute("tabindex","1");
  }, false);

   // Действия при закрытии модального окна "Спасибо за заказ"
   thanksModalCloseBtn.addEventListener("click", function(event) {
    event.preventDefault();
    clearOrders(ordersList);
    ordersForm.reset();
    orderPriceSumm.innerHTML = 0;
    ordersAmount = 0;
    thanksModal.querySelector('[tabindex="1"]').setAttribute("tabindex","-1");
  }, false);

   thanksModalOverlay.addEventListener("click", function(event) {
    event.preventDefault();
    clearOrders(ordersList);
    ordersForm.reset();
    orderPriceSumm.innerHTML = 0;
    ordersAmount = 0;
  }, false);



  // Скрытие надписи об ошибке, при начале заполнения формы
  for (let i = 0; i < ordersInput.length; i++) {
    ordersInput[i].addEventListener("input", function(event) {
      event.preventDefault();
      ordersError.hidden = true;
    }, false);
  }


  function formValid(form) {
    const inputs = form.querySelector(".orders--input__required");
    const name = form.querySelector("#name");
    const surname = form.querySelector("#surname");
    const phone = form.querySelector("#phone");

    for (let i = 0; i < inputs.length; i++) {
      if(!inputs[i].value) {
        ordersError.hidden = false;
      }
    }

    if (!name.value.match(/^[а-яФА-Я]+$/)) {
      ordersError.hidden = false;
    }

    if (!surname.value.match(/^[а-яФА-Я]+$/)) {
      ordersError.hidden = false;
    }

    if (!phone.value.match(/^\+380 \([0-9]{2}\) [0-9]{3}-[0-9]{2}-[0-9]{2}$/)) {
      ordersError.hidden = false;
    }
  }

};

