<?php

namespace Bones\View;

class View
{

    private $viewScriptPath;

    public function __construct()
    {
        $this->viewScriptPath = DOC_ROOT . 'app/views/scripts/';
    }

    public function render($viewScriptName)
    {
        ob_start();
        include $this->__file;
        ob_get_clean();
        include $this->viewScriptPath . $viewScriptName;
        return ob_get_clean();

    }

    public function setViewScriptPath($path)
    {
        $this->viewScriptPath = DOC_ROOT . $path;
    }
}
