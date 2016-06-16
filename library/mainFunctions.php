<?php

/**
*
* Основные функции
*
*/

/**
* Формирование запрашиваемой страницы
*
* @param object $smarty объект шаблонизатора
* @param string $controllerName название контроллера
* @param string $actionName название функции обработки страницы
*/
function loadPage($smarty, $controllerName, $actionName = 'index'){
	include_once PATH_PREFIX.$controllerName.PATH_POSTFIX;
	$function = $actionName."Action";
	$function($smarty);
}

/**
* Формирование запрашиваемой страницы
*
* @param object $smarty объект шаблонизатора
* @param string $templateName название файла шаблона
*/
function loadTemplate($smarty, $templateName){
	$smarty->display($templateName.TEMPLATE_POSTFIX);
}

/**
* Функция отладки
*
* @param variant $value переменная для вывода ее на страницу
*/
function d($value = null, $die = 1){
	echo "Debug: <br><pre>";
	print_r($value);
	echo "</pre>";
	if ($die) die;
}

function productInCart($itemId){
	$productInCart = 0;
	if (in_array($itemId, $_SESSION['cart'])) {
		$productInCart = 1;
	}
	return $productInCart;
}

/**
* Преобразование $rs в ассоциативный массив
*
* @param variant $rs переменная для вывода ее на страницу
* @return array $smartyRs ассоциативный массив для вывода на страницу
*/
function createSmartyRsArray($rs){
	if (!$rs) return false;
	$smartyRs = array();
	while ($row = $rs->fetch_array(MYSQLI_ASSOC)) {
		$row['productInCart'] = productInCart($row['id']);
		$smartyRs[] = $row;
	}
	return $smartyRs;
}

