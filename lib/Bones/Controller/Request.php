<?php

namespace Bones\Controller;

class Request
{

    private $urlParams = array();
    private $activePath = null;
    private $baseUrl = null;


    const MAX_URL_PARAM_COUNT             =   9;
    const MAX_URL_PARAM_COUNT_FRONTEND    =   4;

    public function __construct()
    {
        $this->baseUrl = WEB_ROOT;
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

    public function getQuery($key = null, $default = null)
    {
        if ($key ===  null) {
            return $_GET;
        }
        return (isset($_GET[$key])) ? $_GET[$key] : $default;
    }

    public function setQuery($spec, $value = null)
    {
        if ((null === $value) && !is_array($spec)) {
            return false;
        }
        if ((null === $value) && is_array($spec)) {
            foreach ($spec as $key => $value) {
                $this->setQuery($key, $value);
            }
            return $this;
        }
        $_GET[(string) $spec] = $value;
        return $this;
    }


    public function getPost($key = null, $default = null)
    {
        if ($key ===  null) {
            return $_POST;
        }
        return (isset($_POST[$key])) ? $_POST[$key] : $default;
    }

    public function setPost($spec, $value = null)
    {
        if ((null === $value) && !is_array($spec)) {
            return false;
        }
        if ((null === $value) && is_array($spec)) {
            foreach ($spec as $key => $value) {
                $this->setPost($key, $value);
            }
            return $this;
        }
        $_POST[(string) $spec] = $value;
        return $this;
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
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