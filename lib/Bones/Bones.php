<?php

namespace Bones;

if (!class_exists('\\Bones\Loader\AutoLoader', true)) {
    require_once 'bootstrap.php';
}

use \Bones\Di\Di;
use \Bones\Http\Request;


class Bones {

    private $di = null;

    public function __construct()
    {
        $this->di = new Di;
        $request = new Request;
        $this->di->set('request', $request);
        $uriParams = $this->di->get('request')->uriParam();
        foreach($uriParams as $currentParam) {
            echo $currentParam;
        }
    }
}
