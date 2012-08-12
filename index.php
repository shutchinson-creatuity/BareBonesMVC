<?php

ini_set('display_errors', 1);
error_reporting(-1);

define('DOC_ROOT', __DIR__ . '/');
define('WEB_ROOT', 'http://crunchbang.home');

require_once DOC_ROOT . '/lib/Bones/Bones.php';

$router = new \Bones\Controller\Router;
$view = new \Bones\View\View;

$router->loadUrlVars();
$view->urlVars = $router->getUrlVars();
$view->main = $view->render('url/url.php');
$view->setViewScriptPath('app/views/layouts/');

echo $view->render('default.php');
