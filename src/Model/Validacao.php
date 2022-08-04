<?php

namespace APP\Model;

class Validacao
{
    public static function validarNome(string $nome): bool 
    {
        return mb_strlen($nome) > 2 ;
    }

    public static function validarNumero(float $numero)
    {
        return $numero > 0;
    }
}