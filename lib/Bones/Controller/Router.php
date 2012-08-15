<?php

namespace Bones\Controller;

class Router
{

    private $urlParams = array();
    private $activePath = null;

    const MAX_URL_PARAM_COUNT             =   9;
    const MAX_URL_PARAM_COUNT_FRONTEND    =   4;

    public function loadUrlParams()
    {
        if ($this->urlParams === null) {
            $this->urlParams = array();
        }
        for ($i = 1; $i <= self::MAX_URL_PARAM_COUNT; $i++) {
            if (!empty($_GET['node' . $i])) {
                $this->urlParams[] = $_GET['node' . $i];
                $this->activePath .= $_GET['node' . $i] . '/';
            }
        }
    }

    public function extractParamsFromUrl($url)
    {
        return explode('/', $url, -1);
    }

    public function getUrlParams()
    {
        return $this->urlParams;
    }

    public function getActivePath()
    {
        return $this->activePath;
    }
}
