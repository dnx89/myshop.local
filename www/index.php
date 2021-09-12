<?php

/*
 * определяем с каким контрлером будем работать
 */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo 'Подключаемый php файл (Контролер) = ' . $controllerName . '<br />';
/*
 * определяем с какой функцией будем работать 
 */

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

echo 'Функция формирующая страницу (Экшн) = ' . $actionName . '<br />';

/*
 * Константы для обращения к контролерам
 */
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller');
define('PHP', '.php');

function loadPage(string $controllerName, string $actionName = 'index'): void {
    include_once PathPrefix . $controllerName . PathPostfix . PHP;
    $function = $actionName . 'Action';
    $function();
}

loadPage($controllerName, $actionName);
;
