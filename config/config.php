<?php

// константы для обращения к контроллеру
define("PATH_PREFIX", "controllers/");
define("PATH_POSTFIX", "Controller.php");

//константы для определения кодировок для работы с БД
define('DB_ENCODING_CLIENT', 'utf8');
define('DB_ENCODING_CONNECTION', 'utf8');
define('DB_ENCODING_RESULTS', 'utf8');

//константы для подключения к БД
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'myshop');

//константы для шаблонизатора smarty
$template = 'normal';
define("TEMPLATE_PREFIX", "views/".$template."/");
define("TEMPLATE_POSTFIX", ".tpl");
define("TEMPLATE_WEB_PATH", "/templates/".$template."/");

//
require 'library/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
$smarty->setTemplateDir(TEMPLATE_PREFIX);
$smarty->setCompileDir('tmp/smarty/templates_c');
$smarty->setCacheDir('tmp/smarty/cache');
$smarty->setConfigDir('library/smarty/configs');
$smarty->assign('templateWebPath', TEMPLATE_WEB_PATH);