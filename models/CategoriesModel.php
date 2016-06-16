<?php

/**
*
* Модель для таблицы категорий (categories)
*
*/

/**
*
* Получить дочернии категории для категории $catId
*
* @param integer $catId ID категории
* @return array $smartyRS массив дочерних категорий
* 
*/
function getChildrenForCat($catId){
	$sql = "SELECT * 
			FROM categories 
			WHERE root = '".$catId."'";
	$db = new DB();
	$result = $db->select($sql);
	return createSmartyRsArray($result);
}

/**
*
* Получить главные категории с привязкой дочерних
*
* @return array $smartyRS массив категорий
* 
*/
function getAllMainCatsWithChildren(){
	$sql = "SELECT * 
			FROM categories 
			WHERE root = 0";
	$db = new DB();
	$result = $db->select($sql);
	$smartyRs = array();
	while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
		$rsChildren = getChildrenForCat($row['id']);
		if ($rsChildren) $row['children'] = $rsChildren;
		$smartyRs[] = $row;
	}
	$result->close();
	return $smartyRs;

	// $sql = "SELECT * 
	// 		FROM categories";
	// $db = new DB();
	// $result = $db->select($sql);
	// $smartyRs = array();
	// while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
	// 	$smartyRs[] = $row;
	// }
	// $result->close();
	// return $smartyRs;
}

/**
*
* Получить данные категории по id
*
* @param integer $catId$ Id категории
* @return array $smartyRS массив - строка категорий
* 
*/
function getCatById($catId){
	$catId = intval($catId);
	$sql = "SELECT * 
			FROM categories
			WHERE id = '".$catId."'";
	$db = new DB();
	$result = $db->select($sql);
	return mysqli_fetch_assoc($result);
}