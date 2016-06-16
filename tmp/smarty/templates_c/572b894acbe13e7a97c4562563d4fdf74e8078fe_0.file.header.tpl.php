<?php
/* Smarty version 3.1.29, created on 2016-06-16 21:37:04
  from "C:\OpenServer\domains\myshop\views\normal\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5762f1d07c43e0_67711720',
  'file_dependency' => 
  array (
    '572b894acbe13e7a97c4562563d4fdf74e8078fe' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\normal\\header.tpl',
      1 => 1466102187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5762f1d07c43e0_67711720 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="stylesheet" href="/fonts/roboto/fonts.css">
	<?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">

    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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
				<label id="cartCntItems"><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
 товар(а/ов)</label>
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
	<br><?php }
}
