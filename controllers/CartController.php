<?php

/**
*
* Контроллер страницы корзины (/product/..)
*
*/

// подключаем модели
include_once 'models/CategoriesModel.php';
include_once 'models/ProductsModel.php';

/**
*
* Добавление продукта в корзину
*
* @param integer id GET параметр - id добавяемого продукта
* @return json кол-во элементов в корзине
* 
*/
function addtocartAction()
{
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if (!$itemId) return false;
	$rsData = array();
	if ( (isset($_SESSION['cart'])) && (array_search($itemId, $_SESSION['cart']) === false) ){
		$_SESSION['cart'][] = $itemId;
		$rsData['cntItems'] = count($_SESSION['cart']);
		$rsData['success'] = 1;
	} else {
		$rsData['success'] = 0;
	}
	echo json_encode($rsData);
}

/**
*
* Удаление продукта из корзины
*
* @param integer id GET параметр - id удоляемого из конзины продукта
* @return json кол-во элементов в корзине
* 
*/
function removefromcartAction()
{
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if (!$itemId) return false;
	$rsData = array();
	$key = array_search($itemId, $_SESSION['cart']);
	if ($key !== false) {
		unset($_SESSION['cart'][$key]);
		$rsData['cntItems'] = count($_SESSION['cart']);
		$rsData['success'] = 1;
	} else {
		$rsData['success'] = 0;
	}
	echo json_encode($rsData);
}

/**
*
* Формирование страницы индекса
*
* @link /cart/
* 
*/
function indexAction($smarty){
	$itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
	// $rsCategories = getAllMainCatsWithChildren();
	
	$rsProducts = getProductsFromArray($itemsIds);

	$smarty->assign('pageTitle', 'Корзина');
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'cart');
}