<?php
/* Smarty version 3.1.29, created on 2016-06-14 13:45:01
  from "C:\OpenServer\domains\myshop\views\default\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575fe02d0d2b47_47686327',
  'file_dependency' => 
  array (
    'e8fbc27bf575c5297d857c7328783a0899169a90' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\default\\header.tpl',
      1 => 1465901099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575fe02d0d2b47_47686327 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<!-- <meta charset="UTF-8"> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
	<link rel="stylesheet" href="/bootstrap/css/normalize.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bootstrap/css/sticky-footer.css">
	<?php echo '<script'; ?>
 src="/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/js/main.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
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
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1>Интернет-магазин</h1>
					<div class="cart">
						<img src="/images/cart.png" alt="">
						<p id="cartCntItems"><?php echo $_smarty_tpl->tpl_vars['cartCntItems']->value;?>
</p>
					</div>
				</div>				
			</div>
		</div>
	</header><?php }
}
