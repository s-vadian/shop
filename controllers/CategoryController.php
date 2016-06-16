<?php

/**
*
* Контроллер страницы Категории (/category/..)
*
*/

// подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModal.php';

/**
*
* Формирование страницы категории
*
* @param object $smarty шаблонизатор
* 
*/
function indexAction($smarty){
	$catId = isset($_GET['id']) ? $_GET['id'] : null;
	if (!$catId) exit();

	$rsChildCats = null;
	$rsProducts = null;

	$rsCategory = getCatById($catId);
	if ($rsCategory['root'] == 0) {
		$rsChildCats = getChildrenForCat($catId);
		$rsProducts = getChildrenProductsByCat($catId);
	} else {
		$rsProducts = getProductsByCat($catId);		
	}

	$rsCaregories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', $rsCategory['name']);
	$smarty->assign('rsCaregory', $rsCaregory);
	$smarty->assign('rsProducts', $rsProducts);
	$smarty->assign('rsChildCats', $rsChildCats);
	$smarty->assign('rsCaregories', $rsCaregories);

	loadTemplate($smarty, 'index');
}