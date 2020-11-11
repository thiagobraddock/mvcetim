<?php

/* == Constantes == */
$urlSite = "http://localhost/mvcetim/";
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('PUBLICO', $urlSite . 'public/assets/');
define('DATABASE', [
    'host'      => 'localhost',
    'dbname'    => 'bd_mvcetim',
    'user'      => 'root',
    'password'  => '',
    'options' => [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
]);



/* == TimeZone == */
date_default_timezone_set('America/Sao_Paulo');

function info()
{
    echo 'TIMEZONE-> ' . date_default_timezone_get();
    echo '<br>DATA: '. $date = date('d/m/Y h:i:s a', time());
}

function alert($cor, $msg)
{
   $alerta = <<<MSG
    <div class="alert alert-{$cor} alert-dismissible fade show" role="alert">
        {$msg}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>    
MSG;
    return $alerta;
}

/* == DEBUG == */
function debug($parametro)
{
    echo "<pre>";
    echo "<h2>DEBUGANDO ...</h2>";
    var_dump($parametro);
    echo "</pre>";
}

