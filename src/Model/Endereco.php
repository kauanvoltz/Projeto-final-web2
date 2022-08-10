<?php

namespace APP\Model;

class Endereco
{
    private int $id;
    private string $endereco;
    private int $numero;
    private int $cep;
    private string $bairro;
    private string $cidade;
    private ?string $complemento;

    public function __construct(string $endereco,int $numero,int $cep,string $bairro,string $cidade,?string $complemento= null,int $id=0)
    {
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->cep = $cep;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->complemento = $complemento;
        $this->id = $id;
        
    }
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

}
