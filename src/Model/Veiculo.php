<?php

namespace APP\Model;

class Veiculo
{

    private int $id_veiculo;
    private string $placa;
    private string $modelo;
    private int $ano;
    private string $cor;
    //private Cliente $cliente;
    public function __construct(string $placa, string $modelo, int $ano, string $cor, int $id_veiculo = 0)
    {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->id_veiculo = $id_veiculo;
    }
}
