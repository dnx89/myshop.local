<?php

/*
 * Константы для обращения к файлам
 */
define('PHP', '.php');

define('DirControllers', 'controllers');
define('DirLibrary', 'library');

define('_', DIRECTORY_SEPARATOR);
define('PathChroot', _ . 'chroot' . _ . 'web' . _);
define('PathRoot', str_replace(PathChroot, _, dirname(__DIR__) . _));
define('PathControllers', PathRoot . DirControllers . _);
define('PathLibrary', PathRoot . DirLibrary . _);
define('ControllerPostfix', 'Controller');

