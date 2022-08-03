<?php

namespace APP\Model;

class Veiculo
{

    private int $id;
    private string $placa;
    private string $modelo;
    private int $ano;
    private string $cor;
    //private Cliente $cliente;
    public function __construct(string $placa, string $modelo, int $ano, string $cor, int $id = 0)
    {
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->cor = $cor;
        $this->id = $id;
    }
}
