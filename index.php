<?php

ini_set('display_errors', 1);
error_reporting(-1);

define('DOC_ROOT', __DIR__ . '/');
define('WEB_ROOT', 'http://crunchbang.home');


require_once DOC_ROOT . '/lib/View.php';
require_once DOC_ROOT . '/lib/Router.php';

$router = new Router;
$router->loadUrlVars();

$view = new View;

$view->urlVars = $router->getUrlVars();
$view->main = $view->render('url/url.php');


$view->setViewScriptPath('lib/views/layouts/');

echo $view->render('default.php');
