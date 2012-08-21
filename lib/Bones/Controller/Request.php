<?php

namespace Bones\Controller;

class Request
{

    private $get        =    array();
    private $post       =    array();
    private $uri        =    null;
    private $baseUrl    =    null;


    //const MAX_URL_PARAM_COUNT             =   9;
    //const MAX_URL_PARAM_COUNT_FRONTEND    =   4;

    public function __construct()
    {
        $this->uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        if (isset($_SERVER['QUERY_STRING'])) {
            $this->uri = str_replace('?' . $_SERVER['QUERY_STRING'], '', $this->uri);
        }
        $this->baseUrl = WEB_ROOT;
    }

    public function get($key = null, $default = null)
    {
        if ($key ===  null) {
            return $_GET;
        }
        return (isset($_GET[$key])) ? $_GET[$key] : $default;
    }

    //public function setQuery($spec, $value = null)
    //{
    //    if (($value === null) && !is_array($spec)) {
    //        return false;
    //    }
    //    if (($value === null) && is_array($spec)) {
    //        foreach ($spec as $key => $value) {
    //            $this->setQuery($key, $value);
    //        }
    //        return $this;
    //    }
    //    $_GET[(string) $spec] = $value;
    //    return $this;
    //}

    public function post($key = null, $default = null)
    {
        if ($key ===  null) {
            return $_POST;
        }
        return (isset($_POST[$key])) ? $_POST[$key] : $default;
    }

    //public function setPost($spec, $value = null)
    //{
    //    if (($value === null) && !is_array($spec)) {
    //        return false;
    //    }
    //    if (($value === null) && is_array($spec)) {
    //        foreach ($spec as $key => $value) {
    //            $this->setPost($key, $value);
    //        }
    //        return $this;
    //    }
    //    $_POST[(string) $spec] = $value;
    //    return $this;
    //}

    public function server($key = null, $default = null)
    {
        if ($key === null) {
            return $_SERVER;
        }
        return (isset($_SERVER[$key])) ? $_SERVER[$key] : $default;
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    public function getUri()
    {
        return $this->uri;
    }
}
