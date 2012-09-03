<?php

namespace Bones\Mvc\Controller;

class SiteController extends Controller
{

    private $request    = null;
    private $response   = null;
    private $router     = null;
    private $view       = null;


    public function __construct()
    {
        $this->view = new \Bones\Mvc\View\View;
        $this->request = new \Bones\Http\Request;

        $this->view->getParams = $this->request->getParam();
        $this->view->uriParams = $this->request->getUriParams();
        $this->view->serverParams = $this->request->serverParam();
        $this->view->baseUrl = $this->request->getBaseUrl();
        $this->view->uri = $this->request->getUri();
        $this->view->path = $this->view->render('request/path.php');
        $this->view->main = $this->view->render('request/request.php');

        $this->view->setViewScriptPath('app/layouts/scripts/');
        echo $this->view->render('default.php');
    }


}
