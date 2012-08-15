<?php

# Error Reporting; Erase in live environment
ini_set('display_errors', 1);
error_reporting(-1);

# Define global variables
define('DOC_ROOT', __DIR__ . '/');
define('WEB_ROOT', 'http://crunchbang.home');

# Load the library
require_once DOC_ROOT . '/lib/Bones/Bones.php';

$router = new \Bones\Controller\Router;
$view = new \Bones\View\View;

$router->loadUrlParams();
$view->urlParams = $router->getUrlParams();
$view->path = $view->render('path/path.php');
$view->main = $view->render('router/router.php');

$view->setViewScriptPath('app/views/layouts/');

echo $view->render('default.php');
