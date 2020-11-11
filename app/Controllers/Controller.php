<?php

namespace MVCETIM\Controllers;
class Controller
{
    public function __construct()
    {
        $this->view = new \MVCETIM\Core\View();
    }
}