<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Freshion</title> 

	<link rel="stylesheet" href="css/style.min.css">

	<link rel="preload" href="css/style.min.css" as="style">
	<!--[if IE]><link rel="stylesheet" type="text/css" href="style-for-ie.css"><![endif]-->
	<link rel="preload" href="js/scripts.min.js" as="script">
	<link rel="preload" href="fonts/Comfortaa.woff2" as="font">
	<link rel="preload" href="fonts/Cormorant-garamound.woff2" as="font">

	<link rel="apple-touch-icon" href="apple-icon-57x57.png">
	<link rel="apple-touch-icon" href="apple-icon-60x60.png">
	<link rel="apple-touch-icon" href="apple-icon-72x72.png">
	<link rel="apple-touch-icon" href="apple-icon-76x76.png">
	<link rel="apple-touch-icon" href="apple-icon-114x114.png">
	<link rel="apple-touch-icon" href="apple-icon-120x120.png">
	<link rel="apple-touch-icon" href="apple-icon-144x144.png">
	<link rel="apple-touch-icon" href="apple-icon-152x152.png">
	<link rel="apple-touch-icon" href="apple-icon-180x180.png">
	<link rel="icon" type="image/png" href="android-icon-192x192.png">
	<link rel="icon" type="image/png" href="favicon-32x32.png">
	<link rel="icon" type="image/png" href="favicon-96x96.png">
	<link rel="icon" type="image/png" href="favicon-16x16.png">
	<link rel="manifest" href="manifest.json"> 
</head> 
<body>
	<!-- Проверка поддержки Webp -->
	<script>!function(e,n,A){function o(e){var n=u.className,A=Modernizr._config.classPrefix||"";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+A+"no-js(\\s|$)");n=n.replace(o,"$1"+A+"js$2")}Modernizr._config.enableClasses&&(n+=" "+A+e.join(" "+A),c?u.className.baseVal=n:u.className=n)}function t(e,n){return typeof e===n}function a(){var e,n,A,o,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(o=t(n.fn,"function")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split("."),1===l.length?Modernizr[l[0]]=o:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=o),s.push((o?"":"no-")+l.join("-"))}}function i(e,n){if("object"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var t=e.split("."),a=Modernizr[t[0]];if(2==t.length&&(a=a[t[1]]),"undefined"!=typeof a)return Modernizr;n="function"==typeof n?n():n,1==t.length?Modernizr[t[0]]=n:(!Modernizr[t[0]]||Modernizr[t[0]]instanceof Boolean||(Modernizr[t[0]]=new Boolean(Modernizr[t[0]])),Modernizr[t[0]][t[1]]=n),o([(n&&0!=n?"":"no-")+t.join("-")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c="svg"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=t(e,"undefined")||t(e.call,"undefined")?function(e,n){return n in e&&t(e.constructor.prototype[n],"undefined")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&"load"===n.type?1==t.width:!1,a="webp"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&"load"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),a(),o(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);</script>
	
	<header class="main-header">
		<div class="main-header--container container">
			<nav class="main-header--nav">
				<h3 class="visually-hidden">Меню навигации по сайту:</h3>

				<button class="main-header--mobile main-header--mobile__active">Мобильно меню</button>

				<ol class="main-header--list main-header--list__hide">	  
					<li class="main-header--item"><a class="main-header--link" href="#main" data-toggle-main="true" data-smooth="true"><?php echo 14; ?></a></li>
					<li class="main-header--item"><a class="main-header--link" href="#shop" data-toggle-main="true" data-smooth="true">Магазин</a></li>
					<li class="main-header--item"><a class="main-header--link" href="#about-us" data-toggle-main="true" data-smooth="true">О нас</a></li>
					<li class="main-header--item"><a class="main-header--link" href="#contacts" data-toggle-main="true" data-smooth="true">Контакты</a></li>
				</ol>
			</nav>

			<h3 class="visually-hidden">Меню покупок:</h3>

			<p class="main-header--purchase">
				<span class="visually-hidden">Выбраных товаров:</span>
				<button class="main-header--orders">
					<span class="main-header--amount">0</span>
					<span class="main-header--buy">Перейти к оформлению заказа
						<svg class="main-header--svg" xmlns="http://www.w3.org/2000/svg" width="40" height="38" viewBox="0 0 446.843 446.843"><path class="main-header--cart" d="M444.09 93.103a14.343 14.343 0 0 0-11.584-5.888H109.92c-.625 0-1.249.038-1.85.119l-13.276-38.27a14.352 14.352 0 0 0-8.3-8.646L19.586 14.134c-7.374-2.887-15.695.735-18.591 8.1-2.891 7.369.73 15.695 8.1 18.591l60.768 23.872 74.381 214.399c-3.283 1.144-6.065 3.663-7.332 7.187l-21.506 59.739a11.928 11.928 0 0 0 1.468 10.916 11.95 11.95 0 0 0 9.773 5.078h11.044c-6.844 7.616-11.044 17.646-11.044 28.675 0 23.718 19.298 43.012 43.012 43.012s43.012-19.294 43.012-43.012c0-11.029-4.2-21.059-11.044-28.675h93.776c-6.847 7.616-11.048 17.646-11.048 28.675 0 23.718 19.294 43.012 43.013 43.012 23.718 0 43.012-19.294 43.012-43.012 0-11.029-4.2-21.059-11.043-28.675h13.433c6.599 0 11.947-5.349 11.947-11.948s-5.349-11.947-11.947-11.947H143.647l13.319-36.996c1.72.724 3.578 1.152 5.523 1.152h210.278a14.33 14.33 0 0 0 13.65-9.959l59.739-186.387a14.33 14.33 0 0 0-2.066-12.828zM169.659 409.807c-10.543 0-19.116-8.573-19.116-19.116s8.573-19.117 19.116-19.117 19.116 8.574 19.116 19.117-8.573 19.116-19.116 19.116zm157.708 0c-10.543 0-19.117-8.573-19.117-19.116s8.574-19.117 19.117-19.117c10.542 0 19.116 8.574 19.116 19.117s-8.574 19.116-19.116 19.116zm75.153-261.658h-73.161V115.89h83.499l-10.338 32.259zm-21.067 65.712h-52.094v-37.038h63.967l-11.873 37.038zm-146.882 0v-37.038h66.113v37.038h-66.113zm66.113 28.677v31.064h-66.113v-31.064h66.113zm-161.569-65.715h66.784v37.038h-53.933l-12.851-37.038zm95.456-28.674V115.89h66.113v32.259h-66.113zm-28.673-32.259v32.259h-76.734l-11.191-32.259h87.925zm-43.982 126.648h43.982v31.064h-33.206l-10.776-31.064zm167.443 31.065v-31.064h42.909l-9.955 31.064h-32.954z" fill="#1f2d2e"/></svg>
					</span>
				</button>
			</p>
		</div>
	</header>
	
	<section class="shop-nav" id="main" data-parallax="true" data-anchor-main="true">
		<div class="shop-nav--container container">
			<h1 class="shop-nav--header">Freshion<span class="visually-hidden"> - интернет-магазин аксессуаров для женщин</span></h1>

			<h3 class="visually-hidden">Меню навигации по магазину:</h3>

			<ol class="shop-nav--list">
				<li class="shop-nav--item"><a href="#backpacks" class="shop-nav--link" data-smooth="true">Рюкзаки</a></li>
				<li class="shop-nav--item"><a href="#bags" class="shop-nav--link" data-smooth="true">Сумки</a></li>
				<li class="shop-nav--item"><a href="#clutches" class="shop-nav--link" data-smooth="true">Клатчи</a></li>
				<li class="shop-nav--item"><a href="#wallets" class="shop-nav--link" data-smooth="true">Кошельки</a></li>
			</ol>
		</div>
	</section>

	<section class="shop" id="shop" data-anchor-main="true">
		<h2 class="shop--header header">Магазин</h2>

		<article class="shop--alt-nav alt-nav">
			<h3 class="visually-hidden">Дополнительное меню навигации по магазину:</h3>

			<ol class="alt-nav--list">
				<li class="alt-nav--item" data-toggle-alt="true"><a href="#backpacks" class="alt-nav--link" data-smooth="true"><span class="alt-nav--text">Рюкзаки</span></a></li>
				<li class="alt-nav--item" data-toggle-alt="true"><a href="#bags" class="alt-nav--link" data-smooth="true"><span class="alt-nav--text">Сумки</span></a></li>
				<li class="alt-nav--item" data-toggle-alt="true"><a href="#clutches" class="alt-nav--link" data-smooth="true"><span class="alt-nav--text">Клатчи</span></a></li>
				<li class="alt-nav--item" data-toggle-alt="true"><a href="#wallets" class="alt-nav--link" data-smooth="true"><span class="alt-nav--text">Кошельки</span></a></li>
			</ol>
		</article> 

		<div class="container shop--container">

			<article class="shop--article" id="backpacks" data-anchor-shop="true">
				<h3 class="shop--sub-header">Рюкзаки</h3>

				<ul class="shop--list">
					<li class="shop--item product">
						<a href="#product-1" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/backpacks/backpack-1-eggplant.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-eggplant.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: баклажанный" class="product--img" width="382" height="340">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-1-beige.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-beige.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: бежевый" class="product--img" class="product--img" width="330" height="340">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-1-black.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-black.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: черный" class="product--img" class="product--img" width="270" height="284">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-1-blue.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-blue.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: синий" class="product--img" class="product--img" width="270" height="294">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-1-golden.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-golden.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: золотой" class="product--img" width="350" height="340">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-1-silver.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-silver.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: серебряный" class="product--img" width="357" height="338">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-1-violet.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-violet.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: фиолетовый" class="product--img" width="282" height="281">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-1-white.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-1-white.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: синий" class="product--img" width="270" height="294">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active eggplant">Баклажанный</button>
							<button class="product--color beige">Бежевый</button>
							<button class="product--color black">Черный</button>
							<button class="product--color blue">Синий</button>
							<button class="product--color golden">Золотой</button>
							<button class="product--color silver">Серебряный</button>
							<button class="product--color violet">Фиолетовый</button>
							<button class="product--color white">Белый</button>
						</p>

						<a href="#product-1" class="product--more-info product--more-info__text">
							<p class="product--about">Рюкзак из экокожи <span class="product--firm">Zocijor</span></p>
							<p class="product--size">Размер: 27&#215;23<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 545<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-1" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Рюкзак из экокожи Zocijor</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-1-eggplant.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-eggplant.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: баклажанный" class="details--img" width="382" height="340">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-1-beige.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-beige.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: бежевый" class="details--img" class="details--img" width="330" height="340">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-1-black.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-black.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: черный" class="details--img" class="details--img" width="270" height="284">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-1-blue.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-blue.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: синий" class="details--img" class="details--img" width="270" height="294">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-1-golden.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-golden.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: золотой" class="details--img" width="350" height="340">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-1-silver.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-silver.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: серебряный" class="details--img" width="357" height="338">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-1-violet.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-violet.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: фиолетовый" class="details--img" width="282" height="281">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-1-blue.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-1-blue.png" alt="Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму.Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Цвет: синий" class="details--img" width="270" height="294">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильный женский рюкзак. Изготовлен из эко кожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Рюкзак имеет средние размеры: 27&#215;23 и глубина 11 см. Внутри одно сплошное отделение и есть небольшой карманчик на замочке. На заднее стороне рюкзака находятся прочные шлейки из экокожи. Они регулируемые, не съемные. Есть множество цветов этой модели: Бордовый, пудра, черный, синий, бежевый, серый, сиреневый, белый.</p>
								<p class="details--size">Размер: 27&#215;23<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 545<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-2" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/backpacks/backpack-2-black.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-2-black.png" alt="Женский рюкзак, отлично подходит для прогулок по городу, для студенток. Изготовлен из экокожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Внутри одно отделение, застегивается на замок и магнит. Цвет: черный" class="product--img" width="368" height="357">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-2-blue.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-2-blue.png" alt="Женский рюкзак, отлично подходит для прогулок по городу, для студенток. Изготовлен из экокожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Внутри одно отделение, застегивается на замок и магнит. Цвет: синий" class="product--img" width="297" height="325">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-2-red.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-2-red.png" alt="Женский рюкзак, отлично подходит для прогулок по городу, для студенток. Изготовлен из экокожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Внутри одно отделение, застегивается на замок и магнит. Цвет: красный" class="product--img" width="297" height="325">
							</picture>							
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active black">Черный</button>
							<button class="product--color blue">Синий</button>
							<button class="product--color red">Красный</button>
						</p>

						<a href="#product-2" class="product--more-info product--more-info__text">
							<p class="product--about">Рюкзак из экокожи <span class="product--firm">Alicy</span></p>
							<p class="product--size">Размер: 25&#215;21<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 525<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-2" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Рюкзак из экокожи Alicy</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-2-black.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-2-black.png" alt="Женский рюкзак, отлично подходит для прогулок по городу, для студенток. Изготовлен из экокожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Внутри одно отделение, застегивается на замок и магнит. Цвет: черный" class="details--img" width="368" height="357">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-2-blue.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-2-blue.png" alt="Женский рюкзак, отлично подходит для прогулок по городу, для студенток. Изготовлен из экокожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Внутри одно отделение, застегивается на замок и магнит. Цвет: синий" class="details--img" width="297" height="325">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-2-red.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-2-red.png" alt="Женский рюкзак, отлично подходит для прогулок по городу, для студенток. Изготовлен из экокожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Внутри одно отделение, застегивается на замок и магнит. Цвет: красный" class="details--img" width="297" height="325">
								</picture>			

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Женский рюкзак, отлично подходит для прогулок по городу, для студенток. Изготовлен из экокожи, хорошего качества, прочный материал. Рюкзак прекрасно держит свою форму. Рюкзак имеет средние размеры 25&#215;21 и глубина 8 см. Внутри одно отделение, застегивается на замок и магнит. Представлены такие цвета: черный, синий, красный.</p>
								<p class="details--size">Размер: 25&#215;21<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 525<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-3" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/backpacks/backpack-3-dark-violet.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-3-dark-violet.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: темно-фиолетовый" class="product--img" width="232" height="356">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-3-black.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-3-black.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: черный" class="product--img" width="220" height="358">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-3-light-green.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-3-light-green.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: светло-зеленый" class="product--img" width="228" height="390">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-3-pink.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-3-pink.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: розовый" class="product--img" width="225" height="368">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active dark-violet">Темно-фиолетовый</button>
							<button class="product--color black">Черный</button>
							<button class="product--color light-green">Светло-зеленый</button>
							<button class="product--color pink">Розовый</button>
						</p>

						<a href="#product-3" class="product--more-info product--more-info__text">
							<p class="product--about">Спортивный рюкзак <span class="product--firm">Stay Ready</span></p>
							<p class="product--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 480<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-3" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>
							<div class="details--wrap">
								<h4 class="details--name">Спортивный рюкзак Stay Ready</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-3-dark-violet.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-3-dark-violet.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: темно-фиолетовый" class="details--img" width="232" height="356">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-3-black.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-3-black.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: черный" class="details--img" width="220" height="358">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-3-light-green.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-3-light-green.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: светло-зеленый" class="details--img" width="228" height="390">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-3-pink.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-3-pink.png" alt="Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: розовый" class="details--img" width="225" height="368">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Спортивный рюкзак, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака: текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Рюкзак имеет такие размеры: 30&#215;25 глубина 12 см. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Представлены такие цвета: голубой, синий, зеленый, розовый</p>
								<p class="details--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 480<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-4" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/backpacks/backpack-4-red.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-4-red.png" alt="Спортивный рюкзак. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: красный" class="product--img" width="233" height="380">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-4-black.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-4-black.png" alt="Спортивный рюкзак. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: черный" class="product--img" width="254" height="403">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-4-blue.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-4-blue.png" alt="Спортивный рюкзак. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: синий" class="product--img" width="237" height="368">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active red">Красный</button>
							<button class="product--color black">Черный</button>
							<button class="product--color blue">Синий</button>
						</p>

						<a href="#product-4" class="product--more-info product--more-info__text">
							<p class="product--about">Спортивный рюкзак <span class="product--firm">Jingpin</span></p>
							<p class="product--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 480<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-4" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Спортивный рюкзак Jingpin</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-4-red.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-4-red.png" alt="Спортивный рюкзак. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: красный" class="details--img" width="233" height="380">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-4-black.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-4-black.png" alt="Спортивный рюкзак. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: черный" class="details--img" width="254" height="403">
								</picture>
								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-4-blue.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-4-blue.png" alt="Спортивный рюкзак. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Цвет: синий" class="details--img" width="237" height="368">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Спортивный рюкзак. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Рюкзак имеет такие размеры, 30&#215;25 глубина 12 см. Внутри два отдела, снаружи есть небольшое отделение, застегивается на замок. Представлены такие цвета: красный, черный, синий.</p>
								<p class="details--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 480<span class="details--currency"> грн.</span></b>
							</div>


							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-5" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/backpacks/backpack-5-blue.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-5-blue.png" alt="Рюкзак спортивный, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака - текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри одно отделение, застегивается на замок. Есть карманчик внутри и снаружи, застегивается на замок. Цвет: синий" class="product--img" width="253" height="420">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-5-sky-blue.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-5-sky-blue.png" alt="Рюкзак спортивный, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака - текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри одно отделение, застегивается на замок. Есть карманчик внутри и снаружи, застегивается на замок. Цвет: голубой" class="product--img" width="253" height="389">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-5-black.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-5-black.png" alt="Рюкзак спортивный, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака - текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри одно отделение, застегивается на замок. Есть карманчик внутри и снаружи, застегивается на замок. Цвет: черный" class="product--img" width="273" height="438">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active blue">Синий</button>
							<button class="product--color sky-blue">Голубой</button>
							<button class="product--color black">Черный</button>
						</p>

						<a href="#product-5" class="product--more-info product--more-info__text">
							<p class="product--about">Спортивный рюкзак <span class="product--firm">Jooz</span></p>
							<p class="product--size">Размер: 28&#215;23<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 450<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-5" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Спортивный рюкзак Jooz</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-5-blue.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-5-blue.png" alt="Рюкзак спортивный, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака - текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри одно отделение, застегивается на замок. Есть карманчик внутри и снаружи, застегивается на замок. Цвет: синий" class="details--img" width="253" height="420">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-5-sky-blue.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-5-sky-blue.png" alt="Рюкзак спортивный, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака - текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри одно отделение, застегивается на замок. Есть карманчик внутри и снаружи, застегивается на замок. Цвет: голубой" class="details--img" width="253" height="389">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-5-black.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-5-black.png" alt="Рюкзак спортивный, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака - текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Внутри одно отделение, застегивается на замок. Есть карманчик внутри и снаружи, застегивается на замок. Цвет: черный" class="details--img" width="273" height="438">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Рюкзак спортивный, унисекс. Подходит как и для девушек так и для парней. Материал рюкзака - текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Рюкзак имеет размеры 28&#215;23, глубина 10 см. Внутри одно отделение, застегивается на замок. Есть карманчик внутри и снаружи, застегивается на замок. Представлены такие цвета: синий, голубой, черный.</p>
								<p class="details--size">Размер: 28&#215;23<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 450<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-6" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/backpacks/backpack-6-blue.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-6-blue.png" alt="Очень удобный рюкзак, несмотря на внешнюю красоту, мягкий, легкий, вместительный, изготовленный из тканей разнообразного оригинального дизайна. Есть вместительный передний карман Во внутренний карман из подкладки можно положить кошелек и телефон. Лямки и спинка мягкие и удобные. Цвет: синий" class="product--img" width="264" height="403">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-6-green.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-6-green.png" alt="Очень удобный рюкзак, несмотря на внешнюю красоту, мягкий, легкий, вместительный, изготовленный из тканей разнообразного оригинального дизайна. Есть вместительный передний карман Во внутренний карман из подкладки можно положить кошелек и телефон. Лямки и спинка мягкие и удобные. Цвет: зеленый" class="product--img" width="269" height="370">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active blue">Синий</button>
							<button class="product--color green">Зеленый</button>
						</p>

						<a href="#product-6" class="product--more-info product--more-info__text">
							<p class="product--about">Спортивный рюкзак <span class="product--firm">Lovevook</span></p>
							<p class="product--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 550<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-6" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Спортивный рюкзак Lovevook</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-6-blue.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-6-blue.png" alt="Очень удобный рюкзак, несмотря на внешнюю красоту, мягкий, легкий, вместительный, изготовленный из тканей разнообразного оригинального дизайна. Есть вместительный передний карман Во внутренний карман из подкладки можно положить кошелек и телефон. Лямки и спинка мягкие и удобные. Цвет: синий" class="details--img" width="264" height="403">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-6-green.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-6-green.png" alt="Очень удобный рюкзак, несмотря на внешнюю красоту, мягкий, легкий, вместительный, изготовленный из тканей разнообразного оригинального дизайна. Есть вместительный передний карман Во внутренний карман из подкладки можно положить кошелек и телефон. Лямки и спинка мягкие и удобные. Цвет: зеленый" class="details--img" width="269" height="370">
								</picture>
								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Очень удобный рюкзак, несмотря на внешнюю красоту, мягкий, легкий, вместительный, изготовленный из тканей разнообразного оригинального дизайна. Есть вместительный передний карман Во внутренний карман из подкладки можно положить кошелек и телефон. Лямки и спинка мягкие и удобные. Рюкзак имеет размеры 30&#215;25, глубина 12 см. Представленные цвета: голубой, бирюзовый.</p>
								<p class="details--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 550<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-7" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/backpacks/backpack-7-green.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-7-green.png" alt="Стильный рюкзак с собачками. Подходит как и для девушек так и для парней. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Цвет: темно-зеленый" class="product--img product--img__active" width="233" height="373">
							</picture>
							<picture class="product--picture">
								<source srcset="img/backpacks/backpack-7-bordo.webp" type="image/webp"/>
								<img src="img/backpacks/backpack-7-bordo.png" alt="Стильный рюкзак с собачками. Подходит как и для девушек так и для парней. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Цвет: бордовый" class="product--img" width="235" height="374">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active green">Темно-зеленый</button>
							<button class="product--color bordo">Бордоый</button>
						</p>

						<a href="#product-7" class="product--more-info product--more-info__text">
							<p class="product--about">Спортивный рюкзак <span class="product--firm">Staycy Plays</span></p>
							<p class="product--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 480<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-7" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Спортивный рюкзак Staycy Plays</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/backpacks/backpack-7-green.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-7-green.png" alt="Стильный рюкзак с собачками. Подходит как и для девушек так и для парней. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Цвет: темно-зеленый" class="details--img details--img__active" width="233" height="373">
								</picture>
								<picture class="details--picture">
									<source srcset="img/backpacks/backpack-7-bordo.webp" type="image/webp"/>
									<img src="img/backpacks/backpack-7-bordo.png" alt="Стильный рюкзак с собачками. Подходит как и для девушек так и для парней. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Цвет: бордовый" class="details--img" width="235" height="374">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильный рюкзак с собачками. Подходит как и для девушек так и для парней. Материал рюкзака текстиль. Изготовлен из прочного материала и хорошего качества. Текстиль непромокаемый. Рюкзак имеет размеры 30&#215;25, глубина 12 см. Представлены такие цвета: бирюзовый, красный.</p>
								<p class="details--size">Размер: 30&#215;25<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 480<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>
				</ul> 
			</article>

			<article class="shop--article" id="bags" data-anchor-shop="true">
				<h3 class="shop--sub-header">Сумки</h3>

				<ul class="shop--list">
					<li class="shop--item product">
						<a href="#product-8" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/bags/bag-1-sky-blue.webp" type="image/webp"/>
								<img src="img/bags/bag-1-sky-blue.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: голубой" class="product--img" width="266" height="354">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-1-black.webp" type="image/webp"/>
								<img src="img/bags/bag-1-black.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: черный" class="product--img" width="264" height="352">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-1-pink.webp" type="image/webp"/>
								<img src="img/bags/bag-1-pink.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: голубой" class="product--img" width="267" height="365">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-1-white.webp" type="image/webp"/>
								<img src="img/bags/bag-1-white.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: белый" class="product--img" width="261" height="356">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active sky-blue">Голубой</button>
							<button class="product--color black">Черный</button>
							<button class="product--color pink">Розовый</button>
							<button class="product--color white">Белый</button>
						</p> 

						<a href="#product-8" class="product--more-info product--more-info__text">
							<p class="product--about">Кожанная сумка <span class="product--firm">Gues</span></p>
							<p class="product--size">Размер: 25&#215;30<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 800<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-8" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Кожанная сумка Gues</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/bags/bag-1-sky-blue.webp" type="image/webp"/>
									<img src="img/bags/bag-1-sky-blue.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: голубой" class="details--img" width="266" height="354">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-1-black.webp" type="image/webp"/>
									<img src="img/bags/bag-1-black.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: черный" class="details--img" width="264" height="352">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-1-pink.webp" type="image/webp"/>
									<img src="img/bags/bag-1-pink.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: голубой" class="details--img" width="267" height="365">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-1-white.webp" type="image/webp"/>
									<img src="img/bags/bag-1-white.png" alt="Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Цвет: белый" class="details--img" width="261" height="356">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Сумка сделана из высококачественной кожи. Стильная и вместительная. Прекрасно подойдет как на работу, так и &#34;на выход&#34;. Выглядит шикарно, хорошее качество. Внутренний карман на молнии задней стеночке сумки. Размеры сумки 25&#215;30, глубина 13см. Сумка доспуна в голубом, черном, розовом и белым цветах.</p>
								<p class="details--size">Размер: 25&#215;30<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 800<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-9" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/bags/bag-2-black.webp" type="image/webp"/>
								<img src="img/bags/bag-2-black.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: черный" class="product--img" width="303" height="362">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-2-bordo.webp" type="image/webp"/>
								<img src="img/bags/bag-2-bordo.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: бордовый" class="product--img" width="293" height="353">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-2-dark-gray.webp" type="image/webp"/>
								<img src="img/bags/bag-2-dark-gray.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: темно-серый" class="product--img" width="303" height="363">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-2-mustard.webp" type="image/webp"/>
								<img src="img/bags/bag-2-mustard.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: горчичный" class="product--img" width="294" height="355">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active black">Черный</button>
							<button class="product--color bordo">Бордовый</button>
							<button class="product--color dark-gray">Темно-серый</button>
							<button class="product--color mustard">Горчичный</button>
						</p>

						<a href="#product-9" class="product--more-info product--more-info__text">
							<p class="product--about">Кожанная сумка <span class="product--firm">Paste</span></p>
							<p class="product--size">Размер: 20&#215;35<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 950<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-9" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Женская сумка из экокожи</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/bags/bag-2-black.webp" type="image/webp"/>
									<img src="img/bags/bag-2-black.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: черный" class="details--img" width="303" height="362">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-2-bordo.webp" type="image/webp"/>
									<img src="img/bags/bag-2-bordo.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: бордовый" class="details--img" width="293" height="353">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-2-dark-gray.webp" type="image/webp"/>
									<img src="img/bags/bag-2-dark-gray.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: темно-серый" class="details--img" width="303" height="363">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-2-mustard.webp" type="image/webp"/>
									<img src="img/bags/bag-2-mustard.png" alt="Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Цвет: горчичный" class="details--img" width="294" height="355">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Сумка из натуральной кожи, качественная фурнитура. Удобные, красивые  ручки как для ношения на плече, так и в руке. Фирменная подкладка с металлическим логотипом бренда. Размеры сумки 20&#215;35, глубина 14см. Сумка доспуна в черном, бордовом, темно-сером и горчичном цветах.</p>
								<p class="details--size">Размер: 20&#215;35<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 950<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-10" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/bags/bag-3-dark-gray.webp" type="image/webp"/>
								<img src="img/bags/bag-3-dark-gray.png" alt="Сумка из кожи, качественная серебренная фурнитура. Стильная и вместительная. Удобные, красивые  ручки как для ношения на плече, так и в руке. Цвет: темно-черный" class="product--img" width="282" height="386">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-3-gray.webp" type="image/webp"/>
								<img src="img/bags/bag-3-gray.png" alt="Сумка из кожи, качественная серебренная фурнитура. Стильная и вместительная. Удобные, красивые  ручки как для ношения на плече, так и в руке. Цвет: серый" class="product--img" width="287" height="393">
							</picture>							
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active dark-gray">Темно-серый</button>
							<button class="product--color gray">Серый</button>
						</p>

						<a href="#product-10" class="product--more-info product--more-info__text">
							<p class="product--about">Кожанная сумка <span class="product--firm">KVKY</span></p>
							<p class="product--size">Размер: 20&#215;25<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 780<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-10" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Кожанная сумка KVKY</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/bags/bag-3-dark-gray.webp" type="image/webp"/>
									<img src="img/bags/bag-3-dark-gray.png" alt="Сумка из кожи, качественная серебренная фурнитура. Стильная и вместительная. Удобные, красивые  ручки как для ношения на плече, так и в руке. Цвет: темно-черный" class="details--img" width="282" height="386">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-3-gray.webp" type="image/webp"/>
									<img src="img/bags/bag-3-gray.png" alt="Сумка из кожи, качественная серебренная фурнитура. Стильная и вместительная. Удобные, красивые  ручки как для ношения на плече, так и в руке. Цвет: серый" class="details--img" width="287" height="393">
								</picture>		

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Сумка из кожи, качественная серебренная фурнитура. Стильная и вместительная. Удобные, красивые  ручки как для ношения на плече, так и в руке. Размеры сумки 20&#215;25, глубина 15см. Сумка представленна в сером и темно-сером цветах</p>
								<p class="details--size">Размер: 20&#215;25<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 780<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-11" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/bags/bag-4-beige.webp" type="image/webp"/>
								<img src="img/bags/bag-4-beige.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: бежевый" class="product--img" width="326" height="400">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-4-black.webp" type="image/webp"/>
								<img src="img/bags/bag-4-black.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: черный" class="product--img" width="294" height="360">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-4-bordo.webp" type="image/webp"/>
								<img src="img/bags/bag-4-bordo.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: бордовый" class="product--img" width="320" height="400">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-4-gray.webp" type="image/webp"/>
								<img src="img/bags/bag-4-gray.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: серый" class="product--img" width="333" height="400">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active beige">Бежевый</button>
							<button class="product--color black">Черный</button>
							<button class="product--color bordo">Бордовый</button>
							<button class="product--color gray">Серый</button>
						</p>

						<a href="#product-11" class="product--more-info product--more-info__text">
							<p class="product--about">Кожанная сумка <span class="product--firm">Emini House</span></p>
							<p class="product--size">Размер: 30&#215;30<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 840<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-11" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Кожанная сумка Emini House</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/bags/bag-4-beige.webp" type="image/webp"/>
									<img src="img/bags/bag-4-beige.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: бежевый" class="details--img" width="326" height="400">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-4-black.webp" type="image/webp"/>
									<img src="img/bags/bag-4-black.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: черный" class="details--img" width="294" height="360">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-4-bordo.webp" type="image/webp"/>
									<img src="img/bags/bag-4-bordo.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: бордовый" class="details--img" width="320" height="400">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-4-gray.webp" type="image/webp"/>
									<img src="img/bags/bag-4-gray.png" alt="Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Цвет: серый" class="details--img" width="333" height="400">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильная сумка выполнена из высококачественной натуральной кожи. Она непременно станет Вашей любимицей. Вместительная модель дополнит повседневный образ и будет повсюду сопровождать Вас, будь то офис или магазин, прогулка по городу или встреча с друзьями. Размеры сумки 30&#215;30, глубина 15см. Сумка представленна в бежевом, черном, бордовом, сером цветах.
								</p>
								<p class="details--size">Размер: 30&#215;30<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 840<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-12" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/bags/bag-5-blue.webp" type="image/webp"/>
								<img src="img/bags/bag-5-blue.png" alt="Стильная и удобная женская сумка из искусственной кожы с двойными ручками застегивается молнией. Внутри – очень вместительное отделение с небольшим карманом на молнии для мелочей. Прекрасный вариант для дам, которые предпочитают иметь все самое необходимое под рукой и всегда оставаться стильными и яркими. Цвет: синий" class="product--img" width="269" height="321">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-5-orange.webp" type="image/webp"/>
								<img src="img/bags/bag-5-orange.png" alt="Стильная и удобная женская сумка из искусственной кожы с двойными ручками застегивается молнией. Внутри – очень вместительное отделение с небольшим карманом на молнии для мелочей. Прекрасный вариант для дам, которые предпочитают иметь все самое необходимое под рукой и всегда оставаться стильными и яркими. Цвет: оранжевый" class="product--img" width="270" height="304">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-5-red.webp" type="image/webp"/>
								<img src="img/bags/bag-5-red.png" alt="Стильная и удобная женская сумка из искусственной кожы с двойными ручками застегивается молнией. Внутри – очень вместительное отделение с небольшим карманом на молнии для мелочей. Прекрасный вариант для дам, которые предпочитают иметь все самое необходимое под рукой и всегда оставаться стильными и яркими. Цвет: красный" class="product--img" width="270" height="304">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active blue">Синий</button>
							<button class="product--color orange">Оранжевый</button>
							<button class="product--color light-red">Красный</button>
						</p>

						<a href="#product-12" class="product--more-info product--more-info__text">
							<p class="product--about">Сумка из экокожи <span class="product--firm">Micky Ken</span></p>
							<p class="product--size">Размер: 30&#215;30<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 550<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-12" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Сумка из экокожи Micky Ken</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/bags/bag-5-blue.webp" type="image/webp"/>
									<img src="img/bags/bag-5-blue.png" alt="Стильная и удобная женская сумка из искусственной кожы с двойными ручками застегивается молнией. Внутри – очень вместительное отделение с небольшим карманом на молнии для мелочей. Прекрасный вариант для дам, которые предпочитают иметь все самое необходимое под рукой и всегда оставаться стильными и яркими. Цвет: синий" class="details--img" width="269" height="321">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-5-orange.webp" type="image/webp"/>
									<img src="img/bags/bag-5-orange.png" alt="Стильная и удобная женская сумка из искусственной кожы с двойными ручками застегивается молнией. Внутри – очень вместительное отделение с небольшим карманом на молнии для мелочей. Прекрасный вариант для дам, которые предпочитают иметь все самое необходимое под рукой и всегда оставаться стильными и яркими. Цвет: оранжевый" class="details--img" width="270" height="304">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-5-red.webp" type="image/webp"/>
									<img src="img/bags/bag-5-red.png" alt="Стильная и удобная женская сумка из искусственной кожы с двойными ручками застегивается молнией. Внутри – очень вместительное отделение с небольшим карманом на молнии для мелочей. Прекрасный вариант для дам, которые предпочитают иметь все самое необходимое под рукой и всегда оставаться стильными и яркими. Цвет: красный" class="details--img" width="270" height="304">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильная и удобная женская сумка из искусственной кожы с двойными ручками застегивается молнией. Внутри – очень вместительное отделение с небольшим карманом на молнии для мелочей. Прекрасный вариант для дам, которые предпочитают иметь все самое необходимое под рукой и всегда оставаться стильными и яркими. Сумка представлена в таких цветах: синий, оранжевый, красный.</p>
								<p class="details--size">Размер: 30&#215;30<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 550<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-13" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/bags/bag-6-gray.webp" type="image/webp"/>
								<img src="img/bags/bag-6-gray.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: серый" class="product--img" width="316" height="307">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-6-black.webp" type="image/webp"/>
								<img src="img/bags/bag-6-black.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: черный" class="product--img" width="325" height="309">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-6-green.webp" type="image/webp"/>
								<img src="img/bags/bag-6-green.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: зеленый" class="product--img" width="323" height="311">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-6-red.webp" type="image/webp"/>
								<img src="img/bags/bag-6-red.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: красный" class="product--img" width="324" height="314">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active gray">Серый</button>
							<button class="product--color black">Черный</button>
							<button class="product--color green">Зеленый</button>
							<button class="product--color light-red">Красный</button>
						</p>

						<a href="#product-13" class="product--more-info product--more-info__text">
							<p class="product--about">Кожанная сумка <span class="product--firm">Foxer</span></p>
							<p class="product--size">Размер: 15&#215;20<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 850<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-13" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Кожанная сумка Foxer</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/bags/bag-6-gray.webp" type="image/webp"/>
									<img src="img/bags/bag-6-gray.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: серый" class="details--img" width="316" height="307">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-6-black.webp" type="image/webp"/>
									<img src="img/bags/bag-6-black.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: черный" class="details--img" width="325" height="309">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-6-green.webp" type="image/webp"/>
									<img src="img/bags/bag-6-green.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: зеленый" class="details--img" width="323" height="311">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-6-red.webp" type="image/webp"/>
									<img src="img/bags/bag-6-red.png" alt="Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный. Цвет: красный" class="details--img" width="324" height="314">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Размеры сумки позволят уместить все самое необходимое для деловой женщины: косметику, документы и деловые бумаги формата А4, телефон, портмоне, любимую книжку и даже компактный зонт. Закрывается на молнию, носится в руке или на сгибе локтя. Безупречное качество, стильный дизайн и продуманность каждой детали будут радовать вас долгое время. Сумка представлена в четырех цветах: серый, черный, зеленый и красный.</p>
								<p class="details--size">Размер: 15&#215;20<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 850<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product">
						<a href="#product-14" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/bags/bag-7-red.webp" type="image/webp"/>
								<img src="img/bags/bag-7-red.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: красный" class="product--img" width="276" height="281">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-7-black.webp" type="image/webp"/>
								<img src="img/bags/bag-7-black.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: черный" class="product--img" width="278" height="277">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-7-sky-blue.webp" type="image/webp"/>
								<img src="img/bags/bag-7-sky-blue.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: голубой" class="product--img" width="277" height="274">
							</picture>
							<picture class="product--picture">
								<source srcset="img/bags/bag-7-violet.webp" type="image/webp"/>
								<img src="img/bags/bag-7-violet.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: фиолетовый" class="product--img" width="280" height="282">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active red">Красный</button>
							<button class="product--color pink">Черный</button>
							<button class="product--color sky-blue">Голубой</button>
							<button class="product--color violet">Фиолетовый</button>
						</p>

						<a href="#product-14" class="product--more-info product--more-info__text">
							<p class="product--about">Сумка из экокожи <span class="product--firm">Zency</span></p>
							<p class="product--size">Размер: 15&#215;20<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 530<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-14" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Сумка из экокожи Zency</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/bags/bag-7-red.webp" type="image/webp"/>
									<img src="img/bags/bag-7-red.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: красный" class="details--img" width="276" height="281">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-7-black.webp" type="image/webp"/>
									<img src="img/bags/bag-7-black.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: черный" class="details--img" width="278" height="277">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-7-sky-blue.webp" type="image/webp"/>
									<img src="img/bags/bag-7-sky-blue.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: голубой" class="details--img" width="277" height="274">
								</picture>
								<picture class="details--picture">
									<source srcset="img/bags/bag-7-violet.webp" type="image/webp"/>
									<img src="img/bags/bag-7-violet.png" alt="Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый. Цвет: фиолетовый" class="details--img" width="280" height="282">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Cумка от ТМ Zency украсит любой Ваш образ. С ней Вы всегда будете эксклюзивной, неподражаемой и индивидуальной. Такой аксессуар станет Вашим незаменимым помощником всегда и везде, ведь в нём идеально сочетаются высокая прочность, функциональность и удобство. Сумка доступна в четырех цветах: красный, черный, голубой, фиолетовый.</p>
								<p class="details--size">Размер: 15&#215;20<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 530<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>
				</ul> 
			</article>

			<article class="shop--article" id="clutches" data-anchor-shop="true">
				<h3 class="shop--sub-header">Клатчи</h3>

				<ul class="shop--list">
					<li class="shop--item product product__small">
						<a href="#product-15" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/clutches/clutch-1-beige.webp" type="image/webp"/>
								<img src="img/clutches/clutch-1-beige.png" alt="Это удобный женский аксессуар, благодаря которому, Вы можете носить с собой нужные вещи с максимальным комфортом. Закрывается клапаном с фиксирующимся замочком. Клатч представлен в трех цветах: бежевый, черный и серый. Цвет: бежевый" class="product--img" width="328" height="190">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-1-black.webp" type="image/webp"/>
								<img src="img/clutches/clutch-1-black.png" alt="Это удобный женский аксессуар, благодаря которому, Вы можете носить с собой нужные вещи с максимальным комфортом. Закрывается клапаном с фиксирующимся замочком. Клатч представлен в трех цветах: бежевый, черный и серый. Цвет: черный" class="product--img" width="343" height="200">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-1-gray.webp" type="image/webp"/>
								<img src="img/clutches/clutch-1-gray.png" alt="Это удобный женский аксессуар, благодаря которому, Вы можете носить с собой нужные вещи с максимальным комфортом. Закрывается клапаном с фиксирующимся замочком. Клатч представлен в трех цветах: бежевый, черный и серый. Цвет: серый" class="product--img"  width="341" height="200">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active beige">Бежевый</button>
							<button class="product--color black">Черный</button>
							<button class="product--color gray">Серый</button>
						</p>

						<a href="#product-15" class="product--more-info product--more-info__text">
							<p class="product--about">Клатч из ткани <span class="product--firm">Eman</span></p>
							<p class="product--size">Размер: 13&#215;20<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 500<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-15" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Клатч из ткани Eman</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/clutches/clutch-1-beige.webp" type="image/webp"/>
									<img src="img/clutches/clutch-1-beige.png" alt="Это удобный женский аксессуар, благодаря которому, Вы можете носить с собой нужные вещи с максимальным комфортом. Закрывается клапаном с фиксирующимся замочком. Клатч представлен в трех цветах: бежевый, черный и серый. Цвет: бежевый" class="details--img" width="328" height="190">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-1-black.webp" type="image/webp"/>
									<img src="img/clutches/clutch-1-black.png" alt="Это удобный женский аксессуар, благодаря которому, Вы можете носить с собой нужные вещи с максимальным комфортом. Закрывается клапаном с фиксирующимся замочком. Клатч представлен в трех цветах: бежевый, черный и серый. Цвет: черный" class="details--img" width="343" height="200">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-1-gray.webp" type="image/webp"/>
									<img src="img/clutches/clutch-1-gray.png" alt="Это удобный женский аксессуар, благодаря которому, Вы можете носить с собой нужные вещи с максимальным комфортом. Закрывается клапаном с фиксирующимся замочком. Клатч представлен в трех цветах: бежевый, черный и серый. Цвет: серый" class="details--img"  width="341" height="200">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Это удобный женский аксессуар, благодаря которому, Вы можете носить с собой нужные вещи с максимальным комфортом. Закрывается клапаном с фиксирующимся замочком. Клатч представлен в трех цветах: бежевый, черный и серый.</p>
								<p class="details--size">Размер: 13&#215;20<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 500<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>	

					<li class="shop--item product product__small">
						<a href="#product-16" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/clutches/clutch-2-black.webp" type="image/webp"/>
								<img src="img/clutches/clutch-2-black.png" alt="Стильный клатч пошит из экокожи и украшен паетками. Такой стильный и качественный аксессуар должен быть у каждой уважающей себя модницы. Идеально подойдет под деловой стиль одежды. Товар представлен в трех цветах: черном, золотом и темно-золотом. Цвет: черный" class="product--img" width="320" height="200">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-2-dark-golden.webp" type="image/webp"/>
								<img src="img/clutches/clutch-2-dark-golden.png" alt="Стильный клатч пошит из экокожи и украшен паетками. Такой стильный и качественный аксессуар должен быть у каждой уважающей себя модницы. Идеально подойдет под деловой стиль одежды. Товар представлен в трех цветах: черном, золотом и темно-золотом. Цвет: темно-золотой" class="product--img" width="300" height="188">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-2-golden.webp" type="image/webp"/>
								<img src="img/clutches/clutch-2-golden.png" alt="Стильный клатч пошит из экокожи и украшен паетками. Такой стильный и качественный аксессуар должен быть у каждой уважающей себя модницы. Идеально подойдет под деловой стиль одежды. Товар представлен в трех цветах: черном, золотом и темно-золотом. Цвет: золотой" class="product--img" width="292" height="180">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active black">Черный</button>
							<button class="product--color dark-golden">Темно-золотой</button>
							<button class="product--color golden">Золотой</button>
						</p>

						<a href="#product-16" class="product--more-info product--more-info__text">
							<p class="product--about">Клатч с паетками <span class="product--firm">Zency</span></p>
							<p class="product--size">Размер: 17&#215;22<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 520<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-16" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Клатч Zency с паетками</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/clutches/clutch-2-black.webp" type="image/webp"/>
									<img src="img/clutches/clutch-2-black.png" alt="Стильный клатч пошит из экокожи и украшен паетками. Такой стильный и качественный аксессуар должен быть у каждой уважающей себя модницы. Идеально подойдет под деловой стиль одежды. Товар представлен в трех цветах: черном, золотом и темно-золотом. Цвет: черный" class="details--img" width="320" height="200">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-2-dark-golden.webp" type="image/webp"/>
									<img src="img/clutches/clutch-2-dark-golden.png" alt="Стильный клатч пошит из экокожи и украшен паетками. Такой стильный и качественный аксессуар должен быть у каждой уважающей себя модницы. Идеально подойдет под деловой стиль одежды. Товар представлен в трех цветах: черном, золотом и темно-золотом. Цвет: темно-золотой" class="details--img" width="300" height="188">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-2-golden.webp" type="image/webp"/>
									<img src="img/clutches/clutch-2-golden.png" alt="Стильный клатч пошит из экокожи и украшен паетками. Такой стильный и качественный аксессуар должен быть у каждой уважающей себя модницы. Идеально подойдет под деловой стиль одежды. Товар представлен в трех цветах: черном, золотом и темно-золотом. Цвет: золотой" class="details--img" width="292" height="180">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильный клатч пошит из экокожи и украшен паетками. Такой стильный и качественный аксессуар должен быть у каждой уважающей себя модницы. Идеально подойдет под деловой стиль одежды. Товар представлен в трех цветах: черном, золотом и темно-золотом.</p>
								<p class="details--size">Размер: 17&#215;22<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 520<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product product__small">
						<a href="#product-17" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/clutches/clutch-3-red.webp" type="image/webp"/>
								<img src="img/clutches/clutch-3-red.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: красный" class="product--img" width="342" height="233">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-3-black.webp" type="image/webp"/>
								<img src="img/clutches/clutch-3-black.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: черный" class="product--img" width="338" height="224">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-3-blue.webp" type="image/webp"/>
								<img src="img/clutches/clutch-3-blue.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: синий" class="product--img" width="338" height="224">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-3-dark-violet.webp" type="image/webp"/>
								<img src="img/clutches/clutch-3-dark-violet.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: темно-фиолетовый" class="product--img" width="337" height="225">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-3-white.webp" type="image/webp"/>
								<img src="img/clutches/clutch-3-white.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: белый" class="product--img" width="345" height="223">						
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active red">Красный</button>
							<button class="product--color black">Черный</button>
							<button class="product--color blue">Синий</button>
							<button class="product--color dark-violet">Темно-фиолетовый</button>
							<button class="product--color white">Белый</button>
						</p>

						<a href="#product-17" class="product--more-info product--more-info__text">
							<p class="product--about">Клатч из ткани <span class="product--firm">Foxer</span></p>
							<p class="product--size">Размер: 15&#215;23<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 480<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-17" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Клатч из ткани Foxer</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/clutches/clutch-3-red.webp" type="image/webp"/>
									<img src="img/clutches/clutch-3-red.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: красный" class="details--img" width="342" height="233">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-3-black.webp" type="image/webp"/>
									<img src="img/clutches/clutch-3-black.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: черный" class="details--img" width="338" height="224">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-3-blue.webp" type="image/webp"/>
									<img src="img/clutches/clutch-3-blue.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: синий" class="details--img" width="338" height="224">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-3-dark-violet.webp" type="image/webp"/>
									<img src="img/clutches/clutch-3-dark-violet.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: темно-фиолетовый" class="details--img" width="337" height="225">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-3-white.webp" type="image/webp"/>
									<img src="img/clutches/clutch-3-white.png" alt="Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: белый" class="details--img" width="345" height="223">						
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильный дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Доступно большое количество цветов товара: красный, синий, темно-фиолетовый, белый.</p>
								<p class="details--size">Размер: 15&#215;23<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 480<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product product__small">
						<a href="#product-19" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/clutches/clutch-4-blue.webp" type="image/webp"/>
								<img src="img/clutches/clutch-4-blue.png" alt="Это именно тот клатч, который дополняет образ и придает ему новых красок. Помимо своей практичной стороны, клатч усиливает яркие впечатления от Вас. Цвет: синий" class="product--img" width="448" height="297">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-4-black.webp" type="image/webp"/>
								<img src="img/clutches/clutch-4-black.png" alt="Это именно тот клатч, который дополняет образ и придает ему новых красок. Помимо своей практичной стороны, клатч усиливает яркие впечатления от Вас. Цвет: синий" class="product--img" width="375" height="252">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-4-dark-pink.webp" type="image/webp"/>
								<img src="img/clutches/clutch-4-dark-pink.png" alt="Это именно тот клатч, который дополняет образ и придает ему новых красок. Помимо своей практичной стороны, клатч усиливает яркие впечатления от Вас. Цвет: темно-розовый" class="product--img" width="385" height="254">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active blue">Синий</button>
							<button class="product--color black">Черный</button>
							<button class="product--color dark-pink">Темно-розовый</button>
						</p>

						<a href="#product-19" class="product--more-info product--more-info__text">
							<p class="product--about">Замшевый клатч <span class="product--firm">Artmono</span></p>
							<p class="product--size">Размер: 12&#215;18<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 450<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-19" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Замшевый клатч Artmono</h4>
								
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-4-blue.webp" type="image/webp"/>
									<img src="img/clutches/clutch-4-blue.png" alt="Это именно тот клатч, который дополняет образ и придает ему новых красок. Помимо своей практичной стороны, клатч усиливает яркие впечатления от Вас. Цвет: синий" class="details--img" width="448" height="297">
								</picture>
								<picture class="details--picture details--picture__active">
									<source srcset="img/clutches/clutch-4-black.webp" type="image/webp"/>
									<img src="img/clutches/clutch-4-black.png" alt="Это именно тот клатч, который дополняет образ и придает ему новых красок. Помимо своей практичной стороны, клатч усиливает яркие впечатления от Вас. Цвет: синий" class="details--img" width="375" height="252">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-4-dark-pink.webp" type="image/webp"/>
									<img src="img/clutches/clutch-4-dark-pink.png" alt="Это именно тот клатч, который дополняет образ и придает ему новых красок. Помимо своей практичной стороны, клатч усиливает яркие впечатления от Вас. Цвет: темно-розовый" class="details--img" width="385" height="254">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Это именно тот клатч, который дополняет образ и придает ему новых красок. Помимо своей практичной стороны, клатч усиливает яркие впечатления от Вас. Клатч доступен в трех цветах: синий, черный, темно-розовый.</p>
								<p class="details--size">Размер: 12&#215;18<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 450<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>				

					<li class="shop--item product product__medium">
						<a href="#product-20" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/clutches/clutch-5-black.webp" type="image/webp"/>
								<img src="img/clutches/clutch-5-black.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: черный" class="product--img" width="264" height="273">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-5-blue.webp" type="image/webp"/>
								<img src="img/clutches/clutch-5-blue.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: синий" class="product--img" width="261" height="270">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-5-dark-violet.webp" type="image/webp"/>
								<img src="img/clutches/clutch-5-dark-violet.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: темно-фиолетовый" class="product--img" width="287" height="293">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-5-green.webp" type="image/webp"/>
								<img src="img/clutches/clutch-5-green.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: зеленый" class="product--img" width="263" height="270">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-5-red.webp" type="image/webp"/>
								<img src="img/clutches/clutch-5-red.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: красный" class="product--img" width="265" height="270">
							</picture>
							<picture class="product--picture">
								<source srcset="img/clutches/clutch-5-white.webp" type="image/webp"/>
								<img src="img/clutches/clutch-5-white.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: белый" class="product--img" width="274" height="273">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active black">Черный</button>
							<button class="product--color blue">Синий</button>
							<button class="product--color dark-violet">Темно-фиолетовый</button>
							<button class="product--color green">Зеленый</button>
							<button class="product--color red">Красный</button>
							<button class="product--color white">Белый</button>
						</p>

						<a href="#product-20" class="product--more-info product--more-info__text">
							<p class="product--about">Клатч из ткани <span class="product--firm">Foxer circle</span></p>
							<p class="product--size">Размер: 15&#215;15<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 460<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-20" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Клатч из ткани Foxer круглый</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/clutches/clutch-5-black.webp" type="image/webp"/>
									<img src="img/clutches/clutch-5-black.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: черный" class="details--img" width="264" height="273">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-5-blue.webp" type="image/webp"/>
									<img src="img/clutches/clutch-5-blue.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: синий" class="details--img" width="261" height="270">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-5-dark-violet.webp" type="image/webp"/>
									<img src="img/clutches/clutch-5-dark-violet.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: темно-фиолетовый" class="details--img" width="287" height="293">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-5-green.webp" type="image/webp"/>
									<img src="img/clutches/clutch-5-green.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: зеленый" class="details--img" width="263" height="270">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-5-red.webp" type="image/webp"/>
									<img src="img/clutches/clutch-5-red.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: красный" class="details--img" width="265" height="270">
								</picture>
								<picture class="details--picture">
									<source srcset="img/clutches/clutch-5-white.webp" type="image/webp"/>
									<img src="img/clutches/clutch-5-white.png" alt="Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Цвет: белый" class="details--img" width="274" height="273">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильный круглый дизайн и качество сделают его достойной частью вашего повседневного гардероба. Несмотря на небольшой размер, косметика, кошелек, расческа, телефон и документы вполне уместятся в нем. Доступно большое количество цветов товара: черный, синий, темно-фиолетовый, зеленый, красный, белый.</p>
								<p class="details--size">Размер: 15&#215;15<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 460<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>	
				</ul> 
			</article>

			<article class="shop--article" id="wallets" data-anchor-shop="true">
				<h3 class="shop--sub-header">Кошельки</h3>

				<ul class="shop--list">
					<li class="shop--item product product__medium">
						<a href="#product-21" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/wallets/wallet-1-gray.webp" type="image/webp"/>
								<img src="img/wallets/wallet-1-gray.png" alt="Среднего размера, функциональный и стильный женский кошелек из натуральной кожи от торговой марки Maison Faber. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: серый" class="product--img" width="316" height="295">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-1-black.webp" type="image/webp"/>
								<img src="img/wallets/wallet-1-black.png" alt="Среднего размера, функциональный и стильный женский кошелек из натуральной кожи от торговой марки Maison Faber. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: черный" class="product--img" width="318" height="296">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-1-turquois.webp" type="image/webp"/>
								<img src="img/wallets/wallet-1-turquois.png" alt="Среднего размера, функциональный и стильный женский кошелек из натуральной кожи от торговой марки Maison Faber. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: бирюзовый" class="product--img" width="316" height="292">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active gray">Серый</button>
							<button class="product--color black">Черный</button>
							<button class="product--color turquois">Бирюзовый</button>
						</p>

						<a href="#product-21" class="product--more-info product--more-info__text">
							<p class="product--about">Кожанный кошелек <span class="product--firm">Maison Faber</span></p>
							<p class="product--size">Размер: 8&#215;15<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 750<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-21" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">	
								<h4 class="details--name">Женский кошелек из экокожи</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/wallets/wallet-1-gray.webp" type="image/webp"/>
									<img src="img/wallets/wallet-1-gray.png" alt="Среднего размера, функциональный и стильный женский кошелек из натуральной кожи от торговой марки Maison Faber. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: серый" class="details--img" width="316" height="295">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-1-black.webp" type="image/webp"/>
									<img src="img/wallets/wallet-1-black.png" alt="Среднего размера, функциональный и стильный женский кошелек из натуральной кожи от торговой марки Maison Faber. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: черный" class="details--img" width="318" height="296">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-1-turquois.webp" type="image/webp"/>
									<img src="img/wallets/wallet-1-turquois.png" alt="Среднего размера, функциональный и стильный женский кошелек из натуральной кожи от торговой марки Maison Faber. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: бирюзовый" class="details--img" width="316" height="292">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Среднего размера, функциональный и стильный женский кошелек из натуральной кожи от торговой марки Maison Faber. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Кошелек представлен в сером, черном и бирюзовом цветах.</p>
								<p class="details--size">Размер: 8&#215;15<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 750<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product product__medium">
						<a href="#product-22" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/wallets/wallet-2-violet.webp" type="image/webp"/>
								<img src="img/wallets/wallet-2-violet.png" alt="Кошелек выполнен в оригинальном дизайне с замши. Качество исполнения и функциональность кошелька привлекут внимание всех. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: фиолетовый" class="product--img" width="368" height="320">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-2-light-pink.webp" type="image/webp"/>
								<img src="img/wallets/wallet-2-light-pink.png" alt="Кошелек выполнен в оригинальном дизайне с замши. Качество исполнения и функциональность кошелька привлекут внимание всех. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: светло-розовый" class="product--img" width="345" height="316">	
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-2-pink.webp" type="image/webp"/>
								<img src="img/wallets/wallet-2-pink.png" alt="Кошелек выполнен в оригинальном дизайне с замши. Качество исполнения и функциональность кошелька привлекут внимание всех. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: розовый" class="product--img" width="378" height="330">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active violet">Фиолетовый</button>
							<button class="product--color light-pink">Светло-розовый</button>
							<button class="product--color pink">Розовый</button>
						</p>

						<a href="#product-22" class="product--more-info product--more-info__text">
							<p class="product--about">Замшевый кошелек <span class="product--firm">Verus London</span></p>
							<p class="product--size">Размер: 7&#215;18<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 450<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-22" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Замшевый кошелек Verus London</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/wallets/wallet-2-violet.webp" type="image/webp"/>
									<img src="img/wallets/wallet-2-violet.png" alt="Кошелек выполнен в оригинальном дизайне с замши. Качество исполнения и функциональность кошелька привлекут внимание всех. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: фиолетовый" class="details--img" width="368" height="320">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-2-light-pink.webp" type="image/webp"/>
									<img src="img/wallets/wallet-2-light-pink.png" alt="Кошелек выполнен в оригинальном дизайне с замши. Качество исполнения и функциональность кошелька привлекут внимание всех. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: светло-розовый" class="details--img" width="345" height="316">	
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-2-pink.webp" type="image/webp"/>
									<img src="img/wallets/wallet-2-pink.png" alt="Кошелек выполнен в оригинальном дизайне с замши. Качество исполнения и функциональность кошелька привлекут внимание всех. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: розовый" class="details--img" width="378" height="330">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Кошелек выполнен в оригинальном дизайне с замши. Качество исполнения и функциональность кошелька привлекут внимание всех. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Кошелек доступен в трех цветах: красный, черный, голубой.</p>
								<p class="details--size">Размер: 7&#215;18<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 450<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product product__medium">
						<a href="#product-23" class="product--more-info product--more-info__img">	
							<picture class="product--picture product--picture__active">
								<source srcset="img/wallets/wallet-3-red.webp" type="image/webp"/>
								<img src="img/wallets/wallet-3-red.png" alt="Оригинальный дизайн кошелька понравится каждому. Качество исполнения и функциональность кошелька привлекут внимание дам, ценящих удобство и классический стиль. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: красный" class="product--img" width="352" height="300">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-3-black.webp" type="image/webp"/>
								<img src="img/wallets/wallet-3-black.png" alt="Оригинальный дизайн кошелька понравится каждому. Качество исполнения и функциональность кошелька привлекут внимание дам, ценящих удобство и классический стиль. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: черный" class="product--img" width="351" height="300">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-3-sky-blue.webp" type="image/webp"/>
								<img src="img/wallets/wallet-3-sky-blue.png" alt="Оригинальный дизайн кошелька понравится каждому. Качество исполнения и функциональность кошелька привлекут внимание дам, ценящих удобство и классический стиль. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: голубой" class="product--img" width="401" height="350">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active red">Красный</button>
							<button class="product--color black">Черный</button>
							<button class="product--color sky-blue">Голубой</button>
						</p>

						<a href="#product-23" class="product--more-info product--more-info__text">
							<p class="product--about">Кошелек из экокожи <span class="product--firm">Cobbler Legend</span></p>
							<p class="product--size">Размер: 10&#215;17<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 400<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-23" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">	
								<h4 class="details--name">Кошелек из экокожи Cobbler Legend</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/wallets/wallet-3-red.webp" type="image/webp"/>
									<img src="img/wallets/wallet-3-red.png" alt="Оригинальный дизайн кошелька понравится каждому. Качество исполнения и функциональность кошелька привлекут внимание дам, ценящих удобство и классический стиль. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: красный" class="details--img" width="352" height="300">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-3-red.webp" type="image/webp"/>
									<img src="img/wallets/wallet-3-red.png" alt="Оригинальный дизайн кошелька понравится каждому. Качество исполнения и функциональность кошелька привлекут внимание дам, ценящих удобство и классический стиль. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: черный" class="details--img" width="351" height="300">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-3-sky-blue.webp" type="image/webp"/>
									<img src="img/wallets/wallet-3-sky-blue.png" alt="Оригинальный дизайн кошелька понравится каждому. Качество исполнения и функциональность кошелька привлекут внимание дам, ценящих удобство и классический стиль. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Цвет: голубой" class="details--img" width="401" height="350">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Оригинальный дизайн кошелька понравится каждому. Качество исполнения и функциональность кошелька привлекут внимание дам, ценящих удобство и классический стиль. Он подчеркнет безупречный вкус своей обладательницы и придаст ее образу особый шарм. Кошелек доступен в трех цветах: красный, черный, голубой.</p>
								<p class="details--size">Размер: 10&#215;17<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 400<span class="details--currency"> грн.</span></b>
							</div>


							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product product__medium">
						<a href="#product-24" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/wallets/wallet-4-black.webp" type="image/webp"/>
								<img src="img/wallets/wallet-4-black.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: черный" class="product--img" width="374" height="309">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-4-dark-violet.webp" type="image/webp"/>
								<img src="img/wallets/wallet-4-dark-violet.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: темно-фиолетовый" class="product--img" width="379" height="303">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-4-green.webp" type="image/webp"/>
								<img src="img/wallets/wallet-4-green.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: зеленый" class="product--img" width="388" height="305">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-4-red.webp" type="image/webp"/>
								<img src="img/wallets/wallet-4-red.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: красный" class="product--img" width="361" height="300">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active black">Черный</button>
							<button class="product--color dark-violet">Темно-фиолетовый</button>
							<button class="product--color green">Зеленый</button>
							<button class="product--color red">Красный</button>
						</p>

						<a href="#product-24" class="product--more-info product--more-info__text">
							<p class="product--about">Кошелек из экокожи <span class="product--firm">Bogesi</span></p>
							<p class="product--size">Размер: 8&#215;18<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 420<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-24" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap details--wrap__medium">
								<h4 class="details--name">Кошелек из экокожи Bogesi</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/wallets/wallet-4-black.webp" type="image/webp"/>
									<img src="img/wallets/wallet-4-black.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: черный" class="details--img" width="374" height="309">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-4-dark-violet.webp" type="image/webp"/>
									<img src="img/wallets/wallet-4-dark-violet.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: темно-фиолетовый" class="details--img" width="379" height="303">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-4-green.webp" type="image/webp"/>
									<img src="img/wallets/wallet-4-green.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: зеленый" class="details--img" width="388" height="305">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-4-red.webp" type="image/webp"/>
									<img src="img/wallets/wallet-4-red.png" alt="Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Цвет: красный" class="details--img" width="361" height="300">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Стильный и функциональный женский кошелек среднего размера из экокожи  торговой марки Bogesi. Изделие обязательно порадует счастливую обладательницу элегантным дизайном и высоким качеством исполнения. Кошелек доступен в черном, темно-фиолетовом, зеленом и красном цветах.</p>
								<p class="details--size">Размер: 8&#215;18<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 420<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>

					<li class="shop--item product product__medium">
						<a href="#product-25" class="product--more-info product--more-info__img">
							<picture class="product--picture product--picture__active">
								<source srcset="img/wallets/wallet-5-gray.webp" type="image/webp"/>
								<img src="img/wallets/wallet-5-gray.png" alt="Кошелек из экокожи от Love and Freedom прекрасно подходит для юной модницы и солидной дамы. Эта универсальная модель подчеркнет ваш безупречный вкус и придаст солидности. Качество исполнения и функциональность модели привлекут внимание ценителей удобства и стиля. Цвет: серый" class="product--img" width="385" height="340">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-5-pink.webp" type="image/webp"/>
								<img src="img/wallets/wallet-5-pink.png" alt="Кошелек из экокожи от Love and Freedom прекрасно подходит для юной модницы и солидной дамы. Эта универсальная модель подчеркнет ваш безупречный вкус и придаст солидности. Качество исполнения и функциональность модели привлекут внимание ценителей удобства и стиля. Цвет: розовый" class="product--img" width="366" height="340">
							</picture>
							<picture class="product--picture">
								<source srcset="img/wallets/wallet-5-red.webp" type="image/webp"/>
								<img src="img/wallets/wallet-5-red.png" alt="Кошелек из экокожи от Love and Freedom прекрасно подходит для юной модницы и солидной дамы. Эта универсальная модель подчеркнет ваш безупречный вкус и придаст солидности. Качество исполнения и функциональность модели привлекут внимание ценителей удобства и стиля. Цвет: красный" class="product--img" width="350" height="340">
							</picture>
						</a>

						<p class="product--colors">
							<span class="visually-hidden">Кнопки для переключения фото</span>
							<button class="product--color product--color__active gray">Серый</button>
							<button class="product--color pink">Розовый</button>
							<button class="product--color red">Красный</button>
						</p>

						<a href="#product-25" class="product--more-info product--more-info__text">
							<p class="product--about">Кошелек из экокожи <span class="product--firm">Love and Freedom</span></p>
							<p class="product--size">Размер: 8&#215;14<span class="visually-hidden"> сантиметров</span></p>
							<b class="product--price">Цена: 360<span class="visually-hidden"> гривен</span></b>
						</a>

						<button class="product--buy button">Купить</button>

						<div class="overlay overlay__hide"></div>
						<details class="product--details details modal modal__hide" id="product-25" open>
							<summary class="product--summary">Подробная информация о выбраном товаре</summary>

							<div class="details--wrap">
								<h4 class="details--name">Кошелек из экокожи Love and Freedom</h4>

								<picture class="details--picture details--picture__active">
									<source srcset="img/wallets/wallet-5-gray.webp" type="image/webp"/>
									<img src="img/wallets/wallet-5-gray.png" alt="Кошелек из экокожи от Love and Freedom прекрасно подходит для юной модницы и солидной дамы. Эта универсальная модель подчеркнет ваш безупречный вкус и придаст солидности. Качество исполнения и функциональность модели привлекут внимание ценителей удобства и стиля. Цвет: серый" class="details--img" width="385" height="340">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-5-pink.webp" type="image/webp"/>
									<img src="img/wallets/wallet-5-pink.png" alt="Кошелек из экокожи от Love and Freedom прекрасно подходит для юной модницы и солидной дамы. Эта универсальная модель подчеркнет ваш безупречный вкус и придаст солидности. Качество исполнения и функциональность модели привлекут внимание ценителей удобства и стиля. Цвет: розовый" class="details--img" width="366" height="340">
								</picture>
								<picture class="details--picture">
									<source srcset="img/wallets/wallet-5-red.webp" type="image/webp"/>
									<img src="img/wallets/wallet-5-red.png" alt="Кошелек из экокожи от Love and Freedom прекрасно подходит для юной модницы и солидной дамы. Эта универсальная модель подчеркнет ваш безупречный вкус и придаст солидности. Качество исполнения и функциональность модели привлекут внимание ценителей удобства и стиля. Цвет: красный" class="details--img" width="350" height="340">
								</picture>

								<h5 class="details--header">О товаре</h5>
								<p class="details--info">Кошелек из экокожи от Love and Freedom прекрасно подходит для юной модницы и солидной дамы. Эта универсальная модель подчеркнет ваш безупречный вкус и придаст солидности. Качество исполнения и функциональность модели привлекут внимание ценителей удобства и стиля. Закрывается молнией. Доступен в трех цветах: серый, розовый и красный.</p>
								<p class="details--size">Размер: 8&#215;14<span class="visually-hidden"> сантиметров</span></p>
								<b class="details--price"><span class="visually-hidden">Цена:</span> 360<span class="details--currency"> грн.</span></b>
							</div>

							<button class="modal--btn" tabindex="-1">Закрыть окно</button>
						</details>
					</li>
				</ul> 
			</article>
		</div>
	</section>

	<section class="about-us" id="about-us" data-anchor-main="true">
		<div class="about-us--container">
			<h2 class="about-us--header header">О нас</h2>

			<p class="about-us--info">Freshion - интернет-магазин модных женских аксесуаров. Мы предлагаем модные, качественные и удобные вещи по самым низким ценам. Каждый товар, который поступает от поставщиков, проходит тчательную проерку на качество. Мы заботимся о своей репутации и поэтому предлагаем возврат денег, если вам не понравился купленый товар. Все отправки мы осуществляем наложеным платежем, чтобы каждый клиент мог убедиться в качестве покупки и только потом заплатить. Наша служба поддержки клиентов работает круглосуточно и готова помочь Вам при возникновении любого вопроса.</p>

			<h3 class="visually-hidden">Наши преимущества</h3>

			<ul class="about-us--advantages">
				<li class="about-us--advantage about-us--advantage__favorably">Выгодно</li>
				<li class="about-us--advantage about-us--advantage__qualitatively">Качественно</li>
				<li class="about-us--advantage about-us--advantage__safely">Надежно</li>
				<li class="about-us--advantage about-us--advantage__always">Круглосуточно</li>
			</ul>
		</div>
	</section>

	<footer class="contacts" id="contacts" data-anchor-main="true">
		<h2 class="contacts--header header">Контакты</h2>

		<div class="contacts--wrap">
			<img src="img/map.jpg" alt="Украина, Киев, Набережная 23, офис №3" class="contacts--map visually-hidden">
			<div class="contacts--map">
				<iframe class="contacts--frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.83848037114!2d30.611579814636382!3d50.40684769838841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5a37c019ff9%3A0x8cd1ec9f151d3a9e!2z0JTQvdC10L_RgNC-0LLRgdC60LDRjyDQvdCw0LEuLCAyM1YsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1531206512930" title="map" allowfullscreen></iframe>
			</div>

			<ul class="contacts--list">
				<li class="contacts--item">
					<span class="contacts--name visually-hidden">Адрес:</span>
					<svg class="contacts--svg contacts--svg__address" xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 97.713 97.713"><path class="contacts--figure" d="M48.855 0C29.021 0 12.883 16.138 12.883 35.974c0 5.174 1.059 10.114 3.146 14.684 8.994 19.681 26.238 40.46 31.31 46.359a2.003 2.003 0 0 0 3.034 0c5.07-5.898 22.314-26.676 31.311-46.359 2.088-4.57 3.146-9.51 3.146-14.684C84.828 16.138 68.69 0 48.855 0zm0 54.659c-10.303 0-18.686-8.383-18.686-18.686 0-10.304 8.383-18.687 18.686-18.687s18.686 8.383 18.686 18.687c.001 10.303-8.382 18.686-18.686 18.686z" fill="#1f2d2e"/></svg>
					<a href="https://www.google.com/maps?ll=50.406844,30.613768&z=16&t=m&hl=ru-RU&gl=UA&mapclient=embed&q=%D0%94%D0%BD%D0%B5%D0%BF%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B0%D1%8F+%D0%BD%D0%B0%D0%B1.,+23V+%D0%9A%D0%B8%D0%B5%D0%B2+02000" class="contacts--link contacts--link__address" target="_blank">Киев, Набережная 23, офис №3</a>
				</li>

				<li class="contacts--item">
					<span class="contacts--name visually-hidden">Телефон:</span>
					<svg class="contacts--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 578.106 578.106" width="16" height="16"><path class="contacts--figure" d="M577.83 456.128c1.225 9.385-1.635 17.545-8.568 24.48l-81.396 80.781c-3.672 4.08-8.465 7.551-14.381 10.404-5.916 2.857-11.729 4.693-17.439 5.508-.408 0-1.635.105-3.676.309-2.037.203-4.689.307-7.953.307-7.754 0-20.301-1.326-37.641-3.979s-38.555-9.182-63.645-19.584c-25.096-10.404-53.553-26.012-85.376-46.818-31.823-20.805-65.688-49.367-101.592-85.68-28.56-28.152-52.224-55.08-70.992-80.783-18.768-25.705-33.864-49.471-45.288-71.299-11.425-21.828-19.993-41.616-25.705-59.364S4.59 177.362 2.55 164.51-.306 141.56.102 134.216c.408-7.344.612-11.424.612-12.24.816-5.712 2.652-11.526 5.508-17.442s6.324-10.71 10.404-14.382L98.022 8.756c5.712-5.712 12.24-8.568 19.584-8.568 5.304 0 9.996 1.53 14.076 4.59s7.548 6.834 10.404 11.322l65.484 124.236c3.672 6.528 4.692 13.668 3.06 21.42-1.632 7.752-5.1 14.28-10.404 19.584l-29.988 29.988c-.816.816-1.53 2.142-2.142 3.978s-.918 3.366-.918 4.59c1.632 8.568 5.304 18.36 11.016 29.376 4.896 9.792 12.444 21.726 22.644 35.802s24.684 30.293 43.452 48.653c18.36 18.77 34.68 33.354 48.96 43.76 14.277 10.4 26.215 18.053 35.803 22.949 9.588 4.896 16.932 7.854 22.031 8.871l7.648 1.531c.816 0 2.145-.307 3.979-.918 1.836-.613 3.162-1.326 3.979-2.143l34.883-35.496c7.348-6.527 15.912-9.791 25.705-9.791 6.938 0 12.443 1.223 16.523 3.672h.611l118.115 69.768c8.571 5.308 13.67 12.038 15.303 20.198z" fill="#1f2d2e"/></svg>
					<a href="tel:+380664027927" class="contacts--link contacts--link__phone" target="_blank">+38 (066) 402 79 27</a>
				</li>

				<li class="contacts--item">
					<span class="contacts--name visually-hidden">E-mail:</span>
					<svg class="contacts--svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" width="16" height="16"><g class="contacts--figure" fill="#1f2d2e"><path d="M7 9L5.268 7.484.316 11.729c.18.167.423.271.691.271h11.986c.267 0 .509-.104.688-.271L8.732 7.484 7 9z"/><path d="M13.684 2.271A1.007 1.007 0 0 0 12.993 2H1.007c-.267 0-.509.104-.689.273L7 8l6.684-5.729zM0 2.878v8.308l4.833-4.107zm9.167 4.201L14 11.186V2.875z"/></g></svg>
					<a href="mailto:yourmail@ukr.net" class="contacts--link contacts--link__email" target="_blank">yourmail@ukr.net</a>
				</li>

				<li class="contacts--item">
					<span class="contacts--name visually-hidden">Instagram:</span>
					<svg class="contacts--svg" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 169.063 169.063"><g class="contacts--figure" fill="#1f2d2e"><path d="M122.406 0H46.654C20.929 0 0 20.93 0 46.655v75.752c0 25.726 20.929 46.655 46.654 46.655h75.752c25.727 0 46.656-20.93 46.656-46.655V46.655C169.063 20.93 148.133 0 122.406 0zm31.657 122.407c0 17.455-14.201 31.655-31.656 31.655H46.654C29.2 154.063 15 139.862 15 122.407V46.655C15 29.201 29.2 15 46.654 15h75.752c17.455 0 31.656 14.201 31.656 31.655v75.752z"/><path d="M84.531 40.97c-24.021 0-43.563 19.542-43.563 43.563 0 24.02 19.542 43.561 43.563 43.561s43.563-19.541 43.563-43.561c0-24.021-19.542-43.563-43.563-43.563zm0 72.123c-15.749 0-28.563-12.812-28.563-28.561 0-15.75 12.813-28.563 28.563-28.563s28.563 12.813 28.563 28.563c0 15.749-12.814 28.561-28.563 28.561zm45.39-84.842c-2.89 0-5.729 1.17-7.77 3.22a11.053 11.053 0 0 0-3.23 7.78c0 2.891 1.18 5.73 3.23 7.78 2.04 2.04 4.88 3.22 7.77 3.22 2.9 0 5.73-1.18 7.78-3.22 2.05-2.05 3.22-4.89 3.22-7.78 0-2.9-1.17-5.74-3.22-7.78-2.04-2.05-4.88-3.22-7.78-3.22z"/></g></svg>
					<a href="https://www.instagram.com/sumki" class="contacts--link contacts--link__inst" target="_blank">sumki</a>
				</li>

				<li class="contacts--item">
					<span class="contacts--name visually-hidden">Facebook:</span>
					<svg class="contacts--svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 49.652 49.652"><path class="contacts--figure" d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zM31 25.7h-4.039v14.396h-5.985V25.7h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939h-3.219c-.524 0-1.269.262-1.269 1.386v2.99h4.56L31 25.7z" fill="#1f2d2e"/></svg>
					<a href="https://www.facebook.com/sumki/" class="contacts--link contacts--link__fb" target="_blank">sumki</a>
				</li>
			</ul>

		</div>
	</footer>

	<div class="orders--overlay overlay overlay__hide"></div>
	<section class="orders orders__hide">
		<button class="orders--close" tabindex="-1">Свернуть корзину</button>

		<h2 class="orders--header">Корзина</h2>

		<form class="orders--form" id="orders--form">
			<ul class="orders--list">
			</ul>

			<p class="orders--field">
				<label class="orders--label orders--label__cod">
					Промокод:
					<input class="orders--input orders--input__cod" type="text" id="cod" tabindex="-1">
				</label>
			</p>

			<p class="orders--field price">
				<span class="price--text">Сумма:</span>
				<span class="price--amount">0</span>
				<span class="price--currency">грн.</span>
			</p>

			<p class="orders--field">
				<label class="orders--label" for="name">Ваше имя:</label>
				<input class="orders--input orders--input__name orders--input__required" type="text" id="name" name="name" tabindex="-1">
			</p>

			<p class="orders--field">
				<label class="orders--label" for="surname">Ваша фамилия:</label>
				<input class="orders--input orders--input__surname orders--input__required" type="text" id="surname" name="surname" tabindex="-1">
			</p>

			<p class="orders--field">
				<label class="orders--label" for="phone">Ваш номер:</label>
				<input class="orders--input orders--input__phone orders--input__required" type="tel" id="phone" name="phone" value="+380 (__) ___-__-__" pattern="^\+380 \([0-9]{2}\) [0-9]{3}-[0-9]{2}-[0-9]{2}$" required tabindex="-1">
			</p>

			<input type="submit" class="orders--submit" value ="Заказать" tabindex="-1">
		</form>

		<span class="orders--empty" hidden>Ваша корзина пуста</span>
		<span class="orders--error" hidden>Неверно заполненная форма</span>
	</section>

	<div class="thanks-for-order--overlay overlay overlay__hide"></div>
	<section class="thanks-for-order modal modal__hide">
		<h2 class="visually-hidden">Окно благодарности за заказ</h2>

		<p class="thanks-for-order--text">Спасибо за заказ. Наш оператор свяжется с Вами в ближайшее время.</p>

		<button class="modal--btn thanks-for-order--btn" tabindex="-1">Закрыть окно</button>
	</section> 

	<script src="js/scripts.min.js"></script>
</body>
</html>