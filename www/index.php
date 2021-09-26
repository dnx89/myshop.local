<?php

require_once '../config/config.php'; // initializing configuration
require_once PathLibrary . 'mainFunctions' . PHP; // connection of main functions.
/*
 * определяем с каким контрлером будем работать
 */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

/*
 * определяем с какой функцией будем работать 
 */

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($controllerName, $actionName);
;
