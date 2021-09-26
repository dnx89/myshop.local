<?php

function loadPage(string $controllerName, string $actionName = 'index'): void {
    include_once PathControllers . $controllerName . ControllerPostfix . PHP;
    $function = $actionName . 'Action';
    $function();
}

