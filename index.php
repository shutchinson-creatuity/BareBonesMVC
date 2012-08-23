<?php

# Error Reporting; Erase in live environment
ini_set('display_errors', 1);
error_reporting(-1);

# Define global variables
define('DOC_ROOT', __DIR__ . '/');

# Load the library
require_once DOC_ROOT . '/lib/Bones/Bones.php';

$view = new \Bones\View\View;
$request = new \Bones\Controller\Request;

$view->getParams = $request->get();
$view->serverParams = $request->server();
$view->baseUrl = $request->getBaseUrl();
$view->uri = $request->getUri();

$view->path = $view->render('request/path.php');

$view->main = $view->render('request/request.php');

$view->setViewScriptPath('app/layouts/');

echo $view->render('default.php');
