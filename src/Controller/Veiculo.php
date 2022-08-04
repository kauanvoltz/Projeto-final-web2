<?php

namespace APP\Controller;

use APP\Model\Veiculo;
use APP\Utils\Redirect;
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

        
        if(!Validacao::validarPlaca($placaDoVeiculo)){
            array_push($error, "A placa do veículo deve conter 7 caracteres!");
        }

        if (!Validacao::validarModelo($modeloDoVeiculo)){
            array_push($error, "O modelo do veiculo deve conter pelo menos 1 caracter!");
        }

        if(!Validacao::validarAno($anoDoVeiculo)){
            array_push($error, "O ano do modelo deve conter 4 caracters!");
        }

        if(!Validacao::validarCor($corDoVeiculo)){
            array_push($error, "A cor do veiculo deve conter pelo menos 4 caracteres!");
        }

        if($error){
            Redirect::redirect(
                message:$error,
                type:'warning'
            );
       
        }

              

    }
