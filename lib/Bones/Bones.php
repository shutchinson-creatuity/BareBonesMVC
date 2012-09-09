<?php

namespace Bones;

if (!class_exists('\\Bones\Loader\AutoLoader', true)) {
    require_once 'bootstrap.php';
}

class Bones {

    private $di = null;

    public function __construct()
    {
    }
}
