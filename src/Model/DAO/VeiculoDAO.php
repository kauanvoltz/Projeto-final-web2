<?php

namespace APP\Model\DAO;

use APP\Model\Conexao;
use PDO;

class VeiculoDAO implements DAO
{
    public function insert($object)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao -> prepare("INSERT INTO veiculo VALUES(null,?,?,?,?);");
        $stmt -> bindParam(1, $object-> placa);
        $stmt -> bindParam(2, $object -> modelo);
        $stmt -> bindParam(3, $object -> ano);
        $stmt -> bindParam(4, $object-> cor);
        return $stmt->execute();
    }

    public function findOne($id)
    {
        
    }
    public function findAll()
    {
        
    }
    public function update($object)
    {
        
    }
    public function delete($id)
    {
        
    }

    public function findID()
    {
        $conexao = Conexao::getConexao();
        $result = $conexao ->query("SELECT max(id_veiculo) as id_veiculo FROM veiculo;");
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}