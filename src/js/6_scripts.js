"use strict";
window.onload = function() {
	const mobMenuBtn = document.querySelector(".main-header--mobile");
	const menuList = document.querySelector(".main-header--list");
  const mediumScreen = 998;

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
  const imgsOfProducts = document.querySelectorAll(".product--picture");
  const imgDetails = document.querySelectorAll(".details--picture");

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
  const promoLabel = document.querySelector(".orders--label__cod");
  const orderOverlay = document.querySelector(".orders--overlay");
  const orderDelete = document.querySelector(".order--deletes");
  const orderSubmit = document.querySelector(".orders--submit");
  const ordersEmpty = document.querySelector(".orders--empty");
  const ordersError = document.querySelector(".orders--error");
  const name = document.querySelector("#name");
  const surname = document.querySelector("#surname");
  const phone = document.querySelector("#phone");

  const modal = document.querySelectorAll(".modal");
  const overlay = document.querySelectorAll(".overlay");
  const modalCloseBtn = document.querySelectorAll(".modal--btn");

  const thanksModal = document.querySelector(".thanks-for-order");
  const thanksModalCloseBtn = document.querySelector(".thanks-for-order--btn");
  const thanksModalOverlay = document.querySelector(".thanks-for-order--overlay");
  

  // Мобильное меню
  mobMenuBtn.addEventListener("click", function(event) {
  	event.preventDefault();
    menuList.classList.toggle("main-header--list__show");
    menuList.classList.toggle("main-header--list__hide");
  });


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

  if(window.innerWidth > mediumScreen) {
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
  }
};


  // Плавная прокрутка 
  for (let i = 0; i < needSmooth.length; i++) {
  	needSmooth[i].addEventListener("click", function(event) {
      event.preventDefault();
      const el = document.querySelector(this.getAttribute("href"));
      smoothScroll(el, 10, 60);
    });
  }


	// Переключение цветов товара
  for (let i = 0; i < colorSwitchBtns.length; i++) {
    colorSwitchBtns[i].addEventListener("click", function(event) {
      event.preventDefault();
      const index = [...colorSwitchBtns].indexOf(this); // Прототипом colorSwitchBtns является NodeList, у которого нету метода indexOf, поэтому из NodeList делается Array 
      const activeImg = imgsOfProducts[index].closest(".product--more-info__img").querySelectorAll(".product--picture__active");
      const activeBtn = (colorSwitchBtns[index]).closest(".product--colors").querySelectorAll(".product--color__active");

      for (let i = 0; i < activeBtn.length; i++) {
        activeBtn[i].classList.remove("product--color__active");
      }

      colorSwitchBtns[index].classList.add("product--color__active"); // Смена актывных кнопок

      if (imgsOfProducts[index].closest(".product--more-info__img").querySelectorAll(".product--picture").length > 1) { // Не анимировать, если только одно фото
        for (let i = 0; i < activeImg.length; i++) {
          fadeOut(activeImg[i], "product--picture__active");
        }
        fadeIn(imgsOfProducts[index], "product--picture__active");
      }
      else {
        return false;
      }
    });
  }


  // Открытие модального окно с подробной информацией о товаре 
  for (let i = 0; i < moreInfo.length; i++) {
    moreInfo[i].addEventListener("click", function(event) {
      const atr = this.getAttribute("href");
      const modal = document.querySelector(atr);
      const overlay = modal.previousElementSibling;
      const img = this.closest(".product").querySelector(".product--picture__active");
      const index = [...imgsOfProducts].indexOf(img); // Прототипом imgsOfProducts является NodeList, у которого нету метода indexOf, поэтому из NodeList делается Array

      addAndRemoveClass([modal, overlay], ["modal__show", "overlay__show"], [modal, overlay], ["modal__hide", "overlay__hide"]);
      modal.querySelector('[tabindex="-1"]').setAttribute("tabindex","1");

      for (let i = 0; i < imgDetails.length; i++) {
        imgDetails[i].classList.remove("details--picture__active");
      }

      imgDetails[index].classList.add("details--picture__active");
    });
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
    });
  }

  for (let i = 0; i < modalCloseBtn.length; i++) {
    modalCloseBtn[i].addEventListener("click", function(event) {
      event.preventDefault();
      const modal = this.closest(".modal");
      const overlay = modal.previousElementSibling;

      if(modal)
        addAndRemoveClass([modal, overlay], ["modal__hide", "overlay__hide"], [modal, overlay], ["modal__show", "overlay__show"]);
      modal.querySelector('[tabindex="1"]').setAttribute("tabindex","-1");
    });
  }


  // Добавление товаров в корзину 
  for (let i = 0; i < productsBtn.length; i++) {
    productsBtn[i].addEventListener("click", function(event) {
      event.preventDefault(); 
      const productName = this.closest(".shop--item").querySelector(".product--about").textContent;
      const productPrice = this.closest(".shop--item").querySelector(".product--price").textContent.replace(/\D+/g,""); //Оставить только цифры из строки
      const productPicture = this.closest(".shop--item").querySelector(".product--picture__active");
      const productPictureSrc = productPicture.querySelector("source").srcset;
      const productPictureType = productPicture.querySelector("source").type;
      const productPhoto = productPicture.querySelector(".product--img");
      const productPhotoLink = productPicture.querySelector(".product--img").getAttribute("src");
      const productPhotoAlt = productPicture.querySelector(".product--img").getAttribute("alt");
      const productInfo = this.closest(".shop--item").querySelector(".product--more-info").getAttribute("href");
      const productNumber = productInfo.replace(/\D+/g,"");
      const productColor = this.closest(".shop--item").querySelector(".product--color__active").textContent;
      const order = document.querySelectorAll(".order");
      const orderName = new Array;
      const orderPrice = new Array;
      const orderPhotoLink = new Array;
      const amountsOfOrders = new Array; 

      ordersEmpty.hidden = true;
      cart.classList.add("main-header--buy__rotate");
      
      if (!order.length) { // Создать первый заказ
        createNewOrderItem();
        orderPriceSumm.textContent = productPrice;
        setTimeout(function() {
          ordersAmount.textContent = 1;
        }, 500)
      }
      else {
        for (let j = 0; j < order.length; j++) {
          orderName[j] = order[j].querySelector(".order--name").textContent;
          orderPrice[j] = order[j].querySelector(".order--price").textContent.replace(/\D+/g,"");
          orderPhotoLink[j] = order[j].querySelector(".order--picture__active").querySelector(".order--img").getAttribute("src"); 
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
        ` <a class="order--more-info" href="${productInfo}" data-number="${productNumber}"> 
        <picture class="order--picture order--picture__active">
        <source srcset="${productPictureSrc}" type="${productPictureType}"/>
        <img class="order--img" src="${productPhotoLink}" alt="${productPhotoAlt}" data-color="${productColor}">
        </picture> 
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
    });
}


  // Удаление класса у корзины после окончания анимации. Два синтаксиса для разных браузеров
  cart.addEventListener("webkitAnimationEnd", function(event) {
    cart.classList.remove("main-header--buy__rotate");
  });

  cart.addEventListener("animationend",  function(event) {
    cart.classList.remove("main-header--buy__rotate");
  });


  // Изменение числа заказов при изменении поля "Количество"
  document.addEventListener("input", function(e){
    if(e.target && e.target.classList[0] == "order--amount"){ // e.target = this
      e.target.setAttribute("value", e.target.value);
      getOrdersValues(true, true, false, 0);
    }
  });


  // Открытие и закрытие корзины
  orderBtnShow.addEventListener("click", function(event) {
    event.preventDefault();
    const active = orders.querySelectorAll('[tabindex="-1"]');

    addAndRemoveClass([orders, orderOverlay], ["orders__show", "overlay__show"], [orders, orderOverlay, orderBtnHide], ["orders__hide", "overlay__hide", "orders--close__rotate"]);    
    for (var i = 0; i < active.length; i++) {
      active[i].setAttribute("tabindex","1")
    }

    if (window.innerWidth > mediumScreen) {
      promocod.focus();
    }
  });

  orderBtnHide.addEventListener("click", function(event) {
    event.preventDefault();
    const active = orders.querySelectorAll('[tabindex="1"]');

    addAndRemoveClass([orderBtnHide, orders, orderOverlay], ["orders--close__rotate", "orders__hide", "overlay__hide"], [orders, orderOverlay], ["orders__show", "overlay__show"]);

    for (var i = 0; i < active.length; i++) {
      active[i].setAttribute("tabindex","-1")
    }
  });

  orderOverlay.addEventListener("click", function(event) {
    event.preventDefault();
    const active = orders.querySelectorAll('[tabindex="1"]');

    addAndRemoveClass([orderBtnHide, orders, orderOverlay], ["orders--close__rotate", "orders__hide", "overlay__hide"], [orders, orderOverlay], ["orders__show", "overlay__show"]);
    
    for (var i = 0; i < active.length; i++) {
      active[i].setAttribute("tabindex","-1")
    }
  });


  // Введение промокода
  promocod.addEventListener("input", function(event) {
    event.preventDefault();
    let promocodsArr;

    getPromocods(function(responce) {
      promocodsArr = responce;
      for (let i = 0; i < promocodsArr.length; i++) {
        event.target.closest(".orders--label__cod").classList.remove("orders--label__descending");
        getOrdersValues(true, true, false, 0);

        if (event.target.value == promocodsArr[i]) {
          event.target.closest(".orders--label__cod").classList.add("orders--label__descending");
          getOrdersValues(true, true, false, 10);
          break;
        }
      }
    });
  });


  // Открытие окна подробной информации о товаре с корзины
  document.addEventListener("click", function(e) {
    if(e.target && e.target.classList[0] == "order--img"){
      e.preventDefault();
      const thisOrder =  e.target.closest(".order");
      const imgSrc = e.target.getAttribute("src");
      const atr = e.target.closest(".order--more-info").getAttribute("href");
      const modal = document.querySelector(atr);
      const overlay = modal.previousElementSibling;
      const productImgSrc = new Array;

      for (let i = 0; i < imgsOfProducts.length; i++) {
        productImgSrc.push(imgsOfProducts[i].querySelector(".product--img").getAttribute("src"));
      }

      const index = productImgSrc.indexOf(imgSrc); // Прототипом productImgSrc является NodeList, у которого нету метода indexOf, поэтому из NodeList делается Array

      addAndRemoveClass([modal, overlay], ["modal__show", "overlay__show"], [modal, overlay], ["modal__hide", "overlay__hide"]);
      modal.querySelector('[tabindex="-1"]').setAttribute("tabindex","1");

      for (let i = 0; i < imgDetails.length; i++) {
       imgDetails[i].classList.remove("details--picture__active");
     }

     imgDetails[index].classList.add("details--picture__active");
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
  document.addEventListener("click", function(e) {
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
      orderPrice[i] = order[i].querySelector(".order--price").textContent.replace(/\D+/g,"");
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
        ordersAmount.textContent = amountSumm.toString();
      }, 500)
      
      for (let i = 0; i < orderPrice.length; i++) {
        priceSumm += orderPrice[i] * amountsOfOrders[i];
      }

      orderPriceSumm.textContent = (priceSumm - (priceSumm / 100 * discount)).toString();
    }
  };


  // Действия при отправке формы (дополнительная валидация данных, отправка данных на сервер, вывод модального окна)
  ordersForm.addEventListener("submit", function(event) {
    event.preventDefault();
    if(!ordersList.querySelector(".orders--item")) {
      ordersEmpty.hidden = false;
      return false;
    }
    formValid(sendData);
  });

  // Действия при закрытии модального окна "Спасибо за заказ"
  thanksModalCloseBtn.addEventListener("click", function(event) {
    event.preventDefault();
    clearOrders(ordersList);
    ordersForm.reset();
    orderPriceSumm.textContent = "0";
    ordersAmount.textContent = "0";
    promoLabel.classList.remove("orders--label__descending");
  });

  thanksModalOverlay.addEventListener("click", function(event) {
    event.preventDefault();
    clearOrders(ordersList);
    ordersForm.reset();
    orderPriceSumm.textContent = "0";
    ordersAmount.textContent = "0";
    promoLabel.classList.remove("orders--label__descending");
  });


  // Скрытие надписи об ошибке, при начале заполнения формы
  for (let i = 0; i < ordersInput.length; i++) {
    ordersInput[i].addEventListener("input", function(event) {
      event.preventDefault();
      ordersError.hidden = true;
    });
  }


  function formValid(callback) {
    for (let i = 0; i < ordersInput.length; i++) {
      if(!ordersInput[i].value) {
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

    else callback();
  }


  function sendData() {
    const orders = document.querySelectorAll(".orders--item");
    const request = new XMLHttpRequest();
    let ordersInfo = new Array;

    for (let i = 0; i < orders.length; i++) {
      ordersInfo.push({
        "name" : orders[i].querySelector(".order--name").textContent,
        "amount" : orders[i].querySelector(".order--amount").value,
        "price" : orders[i].querySelector(".order--price").textContent.replace(/\D+/g,""),
        "number" : orders[i].querySelector("[data-number]").getAttribute("data-number"),
        "color" : orders[i].querySelector("[data-color]").getAttribute("data-color")
      });
    }

    let data = JSON.stringify({
      "name" : name.value.toString(),
      "surname" : surname.value.toString(), 
      "phone" : phone.value.toString(),
      "order" : ordersInfo,
      "promocod" : promocod.value.toString(),
      "promocod-descending" : promoLabel.classList.contains("orders--label__descending"),
      "summ" : orderPriceSumm.textContent
    });

    request.open("POST", "../php/form.php");
    request.setRequestHeader("Content-Type", "application/json");

    request.onreadystatechange = function() {
      document.body.classList.add("wait");
      if (request.readyState == "4" && request.status == 200 && request.responseText == "1") {
        document.body.classList.remove("wait");
        addAndRemoveClass([thanksModal, thanksModalOverlay], ["modal__show", "overlay__show"], [thanksModal, thanksModalOverlay], ["modal__hide", "overlay__hide"]);
        thanksModal.querySelector('[tabindex="-1"]').setAttribute("tabindex","1");
      }
      else if(request.readyState == "4" && request.status == 200 && request.responseText !== "1") {
        document.body.classList.remove("wait");
        switch(request.responseText) {
          case "err_1":
          ordersError.textContent = "Заполните все поля формы";
          ordersError.hidden = false;
          break;
          case "err_2_1":
          ordersError.textContent = "Имя некоректно, исправьте ошибку";
          ordersError.hidden = false;
          break;
          case "err_2_2":
          ordersError.textContent = "Фамилия некоректна, исправьте ошибку";
          ordersError.hidden = false;
          break;
          case "err_2_3":
          ordersError.textContent = "Номер телефона некоректен, исправьте ошибку";
          ordersError.hidden = false;
          break;
        }
      }
      else if (request.readyState == "4" || request.status !== 200) {
        document.body.classList.remove("wait");
        ordersError.textContent = "Ошибка отправки данных, повторите попытку позже";
        ordersError.hidden = false;
      }
    }
    request.send(data);
  }


  function getPromocods(callback) {
    const request = new XMLHttpRequest();
    var respArr = new Array;

    request.open("POST", "../php/promocods.php");
    request.setRequestHeader("Content-Type", "application/json");

    request.onreadystatechange = function() {

      if (request.readyState == "4" && request.status == 200) {
        respArr = request.responseText.replace(/\n/ig, "").split(",");
        callback(respArr);
      }
      else if (request.readyState == "4" && request.status !== 200) {
        return false;
      }
    }
    request.send();
  }
};

