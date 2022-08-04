<?php

namespace APP\Controller;

use APP\Model\Veiculo;
use APP\Utils\Redirect;
use APP\Model\Validacao;
use PDOException;

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

            try{
                $dao = VeiculoDAO();
                $resultado = $dao->insert($veiculo);
                if ($result) {
                    Redirect::redirect(
                        message: "O veículo $modeloDoVeiculo foi cadastrado com sucesso!"
                    );
                }else{
                    Redirect::redirect("Lamento, não foi possivel cadastrar o veículo $modeloDoVeiculo", type:'error');
                }
            }catch(PDOException $e){
                Redirect::redirect("Lamento, houve um erro inesperado!", type:'error');
            }
        }
    }

    function listarVeiculo()
    {
        try{
            session_start();
            $dao = new VeiculoDAO();
            $veiculos = $dao->findAll();
            if($veiculos){
                $_SESSION['lista_de_veiculos'] = $veiculos;
                header('location:../View/lista_de_veiculos.php');
            }else{
                Redirect::redirect(message: ['Não existem veiculos cadastrados!'], type: 'warning');
            }
        }catch(PDOException $e){
            Redirect::redirect("Lamento, houve um erro inesperado!", type:'error');
        }
    }
    function removerVeiculos()
    {
        if (empty($_GET['code'])) {
            Redirect::redirect(message: 'O código do veículo não foi informado!', type: 'error');
        }

        $code = (float) $_GET['code'];
        $error = array();

        if (!Validation::validarNumero($code)){
            array_push($error, 'Código do veículo inválido!');
        }

        if ($error){
            Redirect::redirect($error, type:'warning');
        }else{
            try {
                $dao = new VeiculoDAO();
                $resultado = $dao->delte($code);
                if($resultado){
                    Redirect::redirect(message: 'Veículo removido com sucesso!');
                } else{
                    Redirect::redirect(message: ['Não foi possível remover o veículo'], type: 'warning');
                }
            }catch(PDOException $e) {
                Redirect::redirect("Lamento, houve um erro inesperado!", type:'error');
            }
        }
    }
    function consultarVeiculo()
    {
        if(empty($_GET['code'])){
            Redirect::redirect(message: 'O código do veículo não foi informado!', type:'error');
        }
        $code = $_GET['code'];
        $dao = new VeiculoDAO();
        try{
            $resultado = $dao->findOne($code);
        } catch(PDOException $e) {
            Redirect::redirect("Lamento, houve um erro inesperado!", type:'error');
        }
        if($resultado){
            session_start();
            $_SESSION['info_veiculo'] = $resultado;
            header("location:../View/form_edit_veiculo.php");
        }else{
            Redirect::redirect(message:'Lamento, não localizamos o veículo em nossa base de dados', type:'error');
        }
    }
