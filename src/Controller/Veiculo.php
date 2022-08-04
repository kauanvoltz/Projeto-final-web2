<?php

namespace APP\Controller;

use APP\Model\Veiculo;
use APP\Model\Redirect;
use APP\Model\Validacao;


require '../../vendor/autoload.php';

if (!isset($_GET['operation'])){
    Redirect::redirect(message: 'Nenhuma operação foi enviada!', type: 'error');
}

    switch ($_GET['operation']){
        case 'inserir':
            inserirVeiculo();
            break;
        case 'listar':
            listarVeiculo();
            break;
        case 'remover':
            removerVeiculo();
            break;
        case 'consultar':
            consultarVeiculo();
            break;
        case 'editar':
            editarVeiculo();
            break;
        default:
            Redirect::redirect(message: 'A operação informada é inválida!', type: 'error');
    }

    function inserirVeiculo()
    { 
        if(empty($_POST)){
            session_start();
            Redirect::redirect(
                type:'error',
                message: 'Requidição inválida!'
            );
        }
        $placaDoVeiculo = $_POST["placa"];
        $modeloDoVeiculo = $_POST["modelo"];
        $anoDoVeiculo = $_POST['ano'];
        $corDoVeiculo = $_POST["cor"];

        $error = array();

              

    }
