<?php

namespace APP\Model;

use PDO;

class Conexao 
{
    private static PDO $conexao;

    private function __construct()
    {
    }

    public static function getConexao()
    {
        if (empty(self::$conexao)){
            self::$conexao = new PDO(DNS, USER, PASSWORD, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        }
        return self::$conexao;
    }
   
}



