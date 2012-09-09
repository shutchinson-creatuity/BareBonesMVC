<?php

namespace Bones\Mvc\Controller;

use \Bones\Mvc\View\View;
use \Bones\Http\Request;

class SiteController extends Controller
{

    private $request  = null;
    private $response = null;
    private $router   = null;
    private $view     = null;


    public function __construct()
    {
        $this->view = new View;
        $this->request = new Request;


    }

    public function renderDebug()
    {
        $this->view->getParams = $this->request->getParam();
        $this->view->uriParams = $this->request->UriParam();
        $this->view->serverParams = $this->request->serverParam();
        $this->view->requestMethod = $this->request->getMethod();
        $this->view->baseUrl = $this->request->getBaseUrl();
        $this->view->uri = $this->request->getUri();
        $this->view->path = $this->view->render('request/path.php');
        $this->view->main = $this->view->render('request/request.php');

        $this->view->setViewScriptPath('app/layouts/scripts/');
        echo $this->view->render('default.php');
    }


}
