<?php

namespace Bones;

if (!class_exists('\\Bones\Loader\AutoLoader', true)) {
    require_once 'bootstrap.php';
}

use \Bones\Di\Di;


class Bones {

    private $di = null;

    public function __construct()
    {
        $this->di = new Di;
        $this->di->set('request', new Http\Request);
        echo $this->di->get('request')->uriParam(1);
    }



}
