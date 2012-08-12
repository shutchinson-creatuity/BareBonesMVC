<?php

ini_set('display_errors', 1);
error_reporting(-1);

define('DOC_ROOT', __DIR__ . '/');


require_once DOC_ROOT . 'lib/Router.php';
$router = new Router;
$router->loadUrlVars();
