<?php

namespace Bones;

if (!class_exists('\\Bones\Loader\AutoLoader', true)) {
    require_once 'bootstrap.php';
}

use \Bones\Di\Di;
use \Bones\Mvc\Controller\SiteController;

class Bones {

    private $di = null;

    public function __construct()
    {
        $this->di = new Di;
        $siteController = new SiteController;
        $this->di->set('siteController', $siteController);
        $this->di->get('siteController')->renderDebug();
    }
}
