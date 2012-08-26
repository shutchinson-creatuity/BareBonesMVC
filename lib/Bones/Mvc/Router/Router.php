<?php

namespace Bones\Mvc\Router;

use \Bones\Http\Request as Request;

class Router
{

    private $routes = array();

    public function route(Request $request)
    {
        $requestUri = $request->getUri();
        if (strcmp($requestUri, '/') === 0){
            echo 'Home Page';
        } else {
            echo $requestUri;
        }
    }
}
