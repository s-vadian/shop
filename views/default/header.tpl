<!DOCTYPE html>
<html lang="ru">
<head>
	<!-- <meta charset="UTF-8"> -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>{$pageTitle}</title>
	<link rel="stylesheet" href="/bootstrap/css/normalize.css">
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/bootstrap/css/sticky-footer.css">
	<script src="/js/jquery.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
	<link rel="stylesheet" href="{$templateWebPath}css/main.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
						<p id="cartCntItems">{$cartCntItems}</p>
					</div>
				</div>				
			</div>
		</div>
	</header>