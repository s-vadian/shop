<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

$_COOKIES['cart'] = array();

include_once 'config/config.php';
include 'config/db.class.php';
include_once 'library/mainFunctions.php';

// определяем с каким контроллером будем работать
$controllerName = (isset($_GET['controller']) ? ucfirst($_GET['controller']) : "Index");
// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : "index";

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);