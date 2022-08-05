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
    public static function validarPlaca(string $placa)
    {
        return mb_strlen($placa) == 7;
    }
    public static function validarModelo(string $modelo)
    {
        return mb_strlen($modelo) > 0;
    }
    public static function validarAno(string $ano)
    {
        return mb_strlen($ano) == 4;
    }
    public static function validarCor(string $cor)
    {
        return mb_strlen($cor) >= 4;
    }
}