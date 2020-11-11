<?php
namespace MVCETIM\Core;
class View
{
    public function render($viewpath, $layout = null)
    {
        if($layout === null)
        {
            $this->view = $viewpath;
            require_once 'app/Views/layout.php';

        }
        else if($layout === false)
        {
            require_once 'app/Views/' . $viewpath . '.php';
        }
        else
        {
            $this->view = $layout;
            require_once "app/Views/{$layout}.php";
        }
    }
}