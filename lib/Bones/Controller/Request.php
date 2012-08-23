<?php

namespace Bones\Controller;

class Request
{

    private $uri        =    null;
    private $baseUrl    =    null;
    private $get        =    array();
    private $post       =    array();
    private $server     =    array();

    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->server = $_SERVER;
        $this->uri = isset($this->server['REQUEST_URI']) ? $this->server['REQUEST_URI'] : '';
        if (isset($this->server['QUERY_STRING'])) {
            $this->uri = str_replace('?' . $this->server['QUERY_STRING'], '', $this->uri);
        }
        $this->baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    }

    public function get($key = null, $default = null)
    {
        if ($key ===  null) {
            return $this->get;
        }
        return (isset($this->get[$key])) ? $this->get[$key] : $default;
    }

    public function post($key = null, $default = null)
    {
        if ($key ===  null) {
            return $this->post;
        }
        return (isset($this->post[$key])) ? $this->post[$key] : $default;
    }

    public function server($key = null, $default = null)
    {
        if ($key === null) {
            return $this->server;
        }
        return (isset($this->server[$key])) ? $this->server[$key] : $default;
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
