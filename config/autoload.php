<?php
spl_autoload_register(function($class){
    //prefixo do NameSpace
    $prefix = 'MVCETIM';
    //diretorio PAI para as classes
    $base_dir = 'app';
    //testa se a classe usa o padrao de NameSpace
    $len = strlen($prefix);
    if(strncmp($prefix, $class, $len) !== 0)
    {
        return;
    }
    //Pega o nome relativo da classe
    $relative_path = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_path) . '.php';
    $fileC = $base_dir . str_replace('\\', '/', $relative_path) . 'Controller.php';

    //Se existir esse arquivo na pasta indicada
    if(file_exists($file))
    {
        require_once $file;
    }
    else if(file_exists($fileC))
    {
        require_once $fileC;
    }
});