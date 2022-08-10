<?php

namespace APP\Model;

class Validacao
{
    public static function validarNome(string $nome): bool
    {
        return mb_strlen($nome) > 2;
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
    public static function validarCpf(string $cpf)
    {
        return mb_strlen($cpf) == 11;
    }
    public static function validarTelefone(string $telefone)
    {
        return mb_strlen($telefone) >=9 && mb_strlen($telefone) < 14;
    }
    public static function validarEndereco(string $endereco){
        return mb_strlen($endereco) >= 1;
    }
    public static function validarCep(int $cep){
        return mb_strlen($cep) == 8;
    }
    public static function validarBairro(string $bairro){
        return mb_strlen($bairro) >= 1;
    }
    public static function validarCidade(string $cidade){
        return mb_strlen($cidade) >= 1;
    }
   
}
