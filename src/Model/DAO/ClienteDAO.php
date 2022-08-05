<?php

namespace APP\Model\DAO;

use APP\Model\Conexao;
use PDO;

class ClienteDAO implements DAO
{
    function insert($object)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare("INSERT INTO cliente VALUES (null,?,?,?,?,?,?,?,?,?,?);");
        $stmt->bindParam(1, $object->cpf);
        $stmt->bindParam(2, $object->nome);
        $stmt->bindParam(3, $object->telefone);
        $stmt->bindParam(4, $object->endereco->id);
        $stmt->bindParam(5, $object->endereco->endereco);
        $stmt->bindParam(6, $object->endereco->numero);
        $stmt->bindParam(7, $object->endereco->cep);
        $stmt->bindParam(8, $object->endereco->bairro);
        $stmt->bindParam(9, $object->endereco->cidade);
        $stmt->bindParam(10, $object->endereco->complemento);
        return $stmt->execute();
    }
    public function findOne($id)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->query("select * from cliente where id_cliente = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findAll()
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->query("select * from cliente;");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($object)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare("UPDATE cliente SET cpf=?,nome=?,telefone=? WHERE id_cliente=?;");
        $stmt->bindParam(1, $object->cpf);
        $stmt->bindParam(2, $object->nome);
        $stmt->bindParam(3, $object->telefone);
        return $stmt->execute();
    }
    public function delete($id)
    {
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare("delete from cliente where id_cliente = ?");
        $stmt->bindParam(1,$id);
        return $stmt->execute();
    }
}
