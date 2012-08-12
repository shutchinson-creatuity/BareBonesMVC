<?php

class View
{

    private $viewScriptPath;

    public function __construct()
    {
        $this->viewScriptPath = DOC_ROOT . 'lib/views/scripts/';
    }

    public function render($viewScriptName)
    {
        include $this->viewScriptPath . $viewScriptName;
    }

    public function setViewScriptPath($path)
    {
        $this->viewScriptPath = DOC_ROOT . $path;
    }

}
