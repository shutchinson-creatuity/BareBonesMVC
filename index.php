<?php

ini_set('display_errors', 1);
error_reporting(-1);

define('DOC_ROOT', __DIR__ . '/');


require_once DOC_ROOT . 'lib/View.php';
require_once DOC_ROOT . 'lib/Router.php';

$router = new Router;
$router->loadUrlVars();

$view = new View;

$view->content = '<h2>Lorem Ipsum</h2>';
$view->setViewScriptPath('lib/views/layouts/');

$view->render('default.php');
