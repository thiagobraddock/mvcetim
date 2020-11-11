<?php
namespace MVCETIM\Models;

use PDO;

class Conexao
{
    private $conn;
    protected function connect()
    {
        try
        {
            $this->conn = new \PDO('mysql:host=' 
            . DATABASE['host'] . ';dbname=' 
            . DATABASE['dbname'] . '; charset=utf8', 
            DATABASE['user'], 
            DATABASE['password'],  
            DATABASE['options']);

            return $this->conn;
            
        }
        catch(\Exception $erro)
        {
            die('Erro ao conectar<br>' . $erro->getMessage());
        }
    }
    
}