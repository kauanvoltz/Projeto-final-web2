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
        $conexao = Conexao::getConexao();
        $stmt = $conexao->query("select * from veiculo where id_veiculo = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findAll()
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->query("select * from veiculo;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($object)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao-> prepare('UPDATE veiculo SET placa=?, modelo=?, ano=?, cor=? WHERE id_veiculo=?');
        $stmt->bindParam(1, $object->placa);
        $stmt->bindParam(2, $object->modelo);
        $stmt->bindParam(3, $object->ano);
        $stmt->bindParam(4, $object->cor);
        $stmt->bindParam(5, $object->id_veiculo);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare('delete from veiculo where id_veiculo = ?');
        $stmt ->bindParam(1, $id);
        return $stmt->execute();
    }

}