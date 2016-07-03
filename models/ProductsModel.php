<?php

/**
*
* Модель для таблицы продукции (products)
*
*/

/**
* Получаем последние добавленные товары
*
* @param integer $limit лимит товаров
* @return array массив товаров
*/
function getLastProducts($limit = null){	
	$sql = "SELECT * 
			FROM products
			ORDER BY id DESC";
	if ($limit) $sql .= " LIMIT ".$limit;
	$db = new DB();
	$result = $db->select($sql);
	return createSmartyRsArray($result);	
}

/**
* Получаем товары для категории $itemId
*
* @param integer $itemId ID категории
* @return array массив товаров
*/
function getProductsByCat($itemId){
	$itemId = intval($itemId);
	$sql = "SELECT * 
			FROM products
			WHERE category_id = '".$itemId."'";
	$db = new DB();
	$result = $db->select($sql);
	return createSmartyRsArray($result);	
}

/**
* Получаем товары дочерних категорий для категории $catId
*
* @param integer $catId ID категории
* @return array массив товаров
*/
function getChildrenProductsByCat($catId){
	$childrenCats = getChildrenForCat($catId);
	$childrenId = "";
	foreach ($childrenCats as $item) {
		if (empty($childrenId)) {
			$childrenId .= "'".$item['id'];
		} else {
			$childrenId .= "' OR category_id ='".$item['id'];
		}
		
	}	
	$sql = "SELECT * 
			FROM products
			WHERE category_id = ".$childrenId."'";
	$db = new DB();
	$result = $db->select($sql);
	return createSmartyRsArray($result);
}

/**
* Получаем данные товара по $itemId
*
* @param integer $itemId ID товара
* @return array массив товаров
*/
function getProductById($itemId){
	$itemId = intval($itemId);
	$sql = "SELECT * 
			FROM products
			WHERE id = '".$itemId."'";
	$db = new DB();
	$result = $db->select($sql);
	return mysqli_fetch_assoc($result);
}

/**
* Получить список продуктов из массива идентификаторов $itemsIds
*
* @param array $itemsIds массив идентификаторов
* @return array массив товаров
*/
function getProductsFromArray($itemsIds){
	$strIds = implode($itemsIds, ', ');
	$sql = "SELECT * 
	FROM products
	WHERE id IN (".$strIds.")";
	$db = new DB();
	$result = $db->select($sql);
	return createSmartyRsArray($result);
}