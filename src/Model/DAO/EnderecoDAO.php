<?php

namespace APP\Model\DAO;

use APP\Model\Conexao;
use PDO;

class EnderecoDAO implements DAO
{
    public function insert($object)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare("INSERT INTO endereco VALUES (null,?,?,?,?,?,?);");
        $stmt->bindParam(1,$object->endereco);
        $stmt->bindParam(2,$object->numero);
        $stmt->bindParam(3,$object->cep);
        $stmt->bindParam(4,$object->bairro);
        $stmt->bindParam(5,$object->cidade);
        $stmt->bindParam(6,$object->complemento);
        return $stmt->execute();
    }
    public function findOne($id)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->query("select * from endereco where id_endereco = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findAll()
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->query("select * from endereco;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($object)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare("UPDATE endereco SET endereco=?,numero=?,cep=?,bairro=?,cidade=?,complemento=? WHERE id_endereco=?;");
        $stmt->bindParam(1,$object->endereco);
        $stmt->bindParam(2,$object->numero);
        $stmt->bindParam(3,$object->cep);
        $stmt->bindParam(4,$object->bairro);
        $stmt->bindParam(5,$object->cidade);
        $stmt->bindParam(6,$object->complemento);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare("delete from endereco where id_endereco = ?");
        $stmt->bindParam(1,$id);
        return $stmt->execute();
    }

}
