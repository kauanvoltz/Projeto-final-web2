<?php

namespace APP\Model\DAO;

use APP\Model\Conexao;
use PDO;

class UserDAO
{
  public function findUser($login){
    $conexao = Conexao::getConexao();
    $stmt = $conexao->query("select * from where login = '$login';");
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }  
}