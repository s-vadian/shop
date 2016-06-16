<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>{$pageTitle}</title>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="/fonts/roboto/fonts.css">
	<script src="/js/jquery.min.js"></script>
	
	<script src="/js/main.js"></script>

	<link rel="stylesheet" href="{$templateWebPath}css/main.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<div class="container">

		<nav>
			<div class="leftbl">

				<div class="tel left">
					<img src="/images/telephone.png" alt="">
					+ 7 (701) 302-93-36
				</div>
				<div class="razd left">
				</div>
				<div class="mail left">
					<img src="/images/email.png" alt="">
					support@shop.kz
				</div>
				<div class="row"></div>

			</div>
			<div class="rightbl">
				<div class="in left">
					<img src="/images/key_password.png" alt="">
					<a href="#">Вход</a>
				</div>

				<div class="razdright left"></div>

				<div class="reg left">
					<img src="/images/lock.png" alt="">
					<a href="#">Регистрация</a>
				</div>

				<div class="razdright left"></div>

				<div class="reg left">
					<img src="/images/heart.png" alt="">
					<a href="#">Список желаний</a>
				</div>

				<div class="razdright left"></div>

				<div class="reg left">
					<img src="/images/cart_small.png" alt="">
					<a href="/cart/">Корзина</a>
				</div>
				<div class="row"></div>
				
			</div>
			<div class="row"></div>
		</nav>
		

		<header class="header">
			<div class="logo">
				<h1>EVA</h1>
				<p>Интернет-магазин</p>
			</div>
			<div class="search">
				<input type="text" placeholder="Поиск по сайту" name="" id="">
				<img class="search-img" src="/images/search_2.png" alt="">
			</div>
			<div class="cart">
				<img src="/images/cart.png" alt="">
				<label id="cartCntItems">{$cartCntItems} товар(а/ов)</label>
			</div>			
		</header>
		<div class="row"></div>

		<nav class="nav_menu">
			<a href="/" class="menu">Товары</a>
			<a href="/dostavka/" class="menu">Доставка</a>
			<a href="#" class="menu">Оплата</a>
			<a href="#" class="menu">Как заказать</a>
			<a href="#" class="menu">Гарантия</a>		
		</nav>
		<div class="row"></div>

		<!-- <nav class="nav_menu">

		</nav> -->
	<br>