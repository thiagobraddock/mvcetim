<?php

namespace MVCETIM\Models;

class Model extends Conexao
{

    /**
     * Função Genérica - Select, Retorna todos os dados da consulta
     * 
     * @param $sql
     * @param $param
     * @return $data
     */

    protected function SelectAll($sql, $param = null)
    {
        try {
            $query = $this->connect()->prepare($sql);
            $query->execute($param);
            $data = $query->fetchAll(\PDO::FETCH_OBJ);
            return $data;
            $query = null;
        } 
        catch (\Exception $erro) {
            echo 'Erro ao executar query<br>' . $erro->getMessage();
            exit;
        }
    }
}
