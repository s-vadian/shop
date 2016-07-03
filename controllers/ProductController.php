<?php

/**
*
* Контроллер страницы товара (/product/..)
*
*/

// подключаем модели
include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

/**
*
* Формирование страницы продукта
*
* @param object $smarty шаблонизатор
* 
*/
function indexAction($smarty){
	$itemId = isset($_GET['id']) ? $_GET['id'] : null;
	if (!$itemId) exit();

	$rsProduct = getProductById($itemId);
	// d($rsProduct);
	$rsCaregories = getAllMainCatsWithChildren();

	$smarty->assign('itemCart', 0);
	if (in_array($itemId, $_SESSION['cart'])) {
		$smarty->assign('itemCart', 1);
	}

	$smarty->assign('pageTitle', $rsProduct['name']);
	$smarty->assign('rsProduct', $rsProduct);
	$smarty->assign('rsCaregories', $rsCaregories);

	loadTemplate($smarty, 'product');
}