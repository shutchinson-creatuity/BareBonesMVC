<?php

namespace Bones\Controller;

class Router
{

    private $urlParams;
    private $activePath;

    const BASE_URL                      =   WEB_ROOT;
    const MAX_URL_PARAM_COUNT             =   9;
    const MAX_URL_PARAM_COUNT_FRONTEND    =   4;

    public function __construct()
    {

    }

    public function loadUrlParams()
    {
        if ($this->urlParams === null) {
            $this->urlParams = array();
        }
        for ($i = 1; $i <= self::MAX_URL_PARAM_COUNT; $i++) {
            if (!empty($_GET['node' . $i])) {
                $this->urlParams[] = $_GET['node' . $i];
                $this->path .= $_GET['node' . $i] . '/';
            }
        }
    }

    public function getUrlParams()
    {
        return $this->urlParams;
    }
}
