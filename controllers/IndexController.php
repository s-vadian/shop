<?php

/**
*
* Контроллер главной страницы
*
*/

//подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModal.php';

/**
*
* Формирование главной страницы
*
* @param object $smarty шаблонизатор
* 
*/
function indexAction($smarty){
	$rsCaregories = getAllMainCatsWithChildren();
	$rsProducts = getLastProducts();		
	$smarty->assign('pageTitle', 'Все товары');
	$smarty->assign('rsCaregories', $rsCaregories);
	$smarty->assign('rsProducts', $rsProducts);

	loadTemplate($smarty, 'index');
}