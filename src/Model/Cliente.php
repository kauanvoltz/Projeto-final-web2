<?php

namespace APP\Model;

class Cliente
{
    private int $id;
    private string $nome;
    private string $cpf;
    private string $telefone;
    private Endereco $endereco;

    public function __construct(string $nome,string $cpf,string $telefone,Endereco $endereco,int $id = 0)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->id = $id;
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }
}
