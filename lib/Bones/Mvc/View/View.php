<?php

namespace Bones\Mvc\View;

class View
{

    private $viewScriptPath;

    public function __construct()
    {
        $this->viewScriptPath = BASE_DIR . 'app/views/scripts/';
    }

    public function render($viewScriptName)
    {
        ob_start();
        include $this->viewScriptPath . $viewScriptName;
        return ob_get_clean();
    }

    public function getViewScriptPath()
    {
        return $this->viewScriptPath;
    }

    public function setViewScriptPath($path)
    {
        $this->viewScriptPath = BASE_DIR . $path;
    }
}
