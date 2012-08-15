<?php

namespace Bones\Controller;

class Router
{

    public function __construct(Request $request)
    {
        //echo $request->getQuery('node1');
        //$request->setPost('username', 'shutchinson');
        //echo $request->getPost('username');
    }

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
