<?php

namespace MVCETIM\Models;

class AudioVisual extends Model
{
    private $queryResult;
    private $msg;


    public function queryResult()
    {
        return $this->queryResult;
    }

    public function getMsg()
    {
        return $this->msg;
    }
    
    
    public function listaTipo($parametro)
    {
        $sql = "SELECT * FROM audiovisual WHERE tipo = ?";
        $this->queryResult = $this->SelectAll($sql, $parametro);
        $this->msg = $parametro;
    }





}