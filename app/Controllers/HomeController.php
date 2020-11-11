<?php

namespace MVCETIM\Controllers;

class Home extends Controller
{
    public function index()
    {
        $this->view->titulo = 'HOME | MVCETIM 2020';
        $this->view->filmes = $this->montaFilmes();
        $this->view->render('layout');
    }

    public function montaFilmes()
    {
        $obra = new \MVCETIM\Models\AudioVisual;
        $obra->listaTipo(['filme']);
        $filmes = $obra->queryResult();
        return $filmes;
    }

}