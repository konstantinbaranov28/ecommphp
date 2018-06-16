<?php

// Формат dd=mm=yyyy
/*$string='11.21.2015';
$pattern= '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement = 'Месяц &2 День $1 Год $3';
echo preg_replace($pattern, $replacement, $string);
die;*/
// FRONT CONTROLLER

//1. Общие настройки
session_start();
ini_set('display_errors',1);
error_reporting(E_ALL);


//2. Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');
//3. установка соединения с БД

//4. Вызов Router
$router = new Router ();
$router->run();

