<?php
/*
 * Основные функции
 */



/**
 * Формирование запрашиваемой страницы 
 * @param string $controllerName название котроллера
 * @param string $actionName название функции обработки страницы
 * @return void (nothing)
 */

function loadPage(string $controllerName, string $actionName = 'index'): void {
    include_once PathControllers . $controllerName . ControllerPostfix . PHP;
    $function = $actionName . 'Action';
    $function();
}

