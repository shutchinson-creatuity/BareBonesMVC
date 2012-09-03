<?php

# Error Reporting; Erase in live environment
ini_set('display_errors', 1);
error_reporting(-1);

# Define global variables
define('BASE_DIR', __DIR__ . '/');

# Load the library
require_once BASE_DIR . '/lib/Bones/Bones.php';

$front = new \Bones\Mvc\Controller\FrontController;












//$view = new \Bones\Mvc\View\View;
//$request = new \Bones\Http\Request;



//$view->getParams = $request->getParam();
//$view->uriParams = $request->getUriParams();
//$view->serverParams = $request->serverParam();
//$view->baseUrl = $request->getBaseUrl();
//$view->uri = $request->getUri();

//$view->path = $view->render('request/path.php');

//$view->main = $view->render('request/request.php');

//$view->setViewScriptPath('app/layouts/');

////$router = new \Bones\Mvc\Router\Router;
////$router->route($request);

//echo $view->render('default.php');
