<?php

namespace Bones\Controller;

class Router
{

    private $urlVars;
    private $path;

    const BASE_URL                      =   'http://crunchbang.home/';
    const MAX_URL_VAR_LENGTH            =   9;
    const MAX_URL_VAR_LENGTH_FRONTEND   =   4;


    public function __construct()
    {



    }

    public function loadUrlVars()
    {
        if($this->urlVars === null){
            $this->urlVars = array();
        }
        for ($i = 1; $i <= self::MAX_URL_VAR_LENGTH; $i++) {
            if (!empty($_GET['node' . $i])) {
                $this->urlVars[] = $_GET['node' . $i];
                $this->path .= $_GET['node' . $i] . '/';
            }
        }
    }

    public function getUrlVars()
    {
        return $this->urlVars;
    }
}
