<?php

namespace APP\CPntroller;

use APP\Model\Cliente;
use APP\Model\Endereco;
use APP\Model\DAO\EnderecoDAO;
use APP\Model\DAO\ClienteDAO;
use APP\Utils\Redirect;
use APP\Model\Validacao;
use Error;
use PDOException;

require '../../vendor/autoload.php';

if (!isset($_GET['operation'])) {
    Redirect::redirect('Nenhuma operação foi enviada', type: 'error');
}
switch ($_GET['operation']) {
    case 'inserir':
        inserirCliente();
        break;
    case 'listar':
        listarCliente();
    case 'consultar':
        break;
        consultarCliente();
        break;
    case 'remover':
        removerCliente();
        break;
    case 'editar':
        editarCliente();
        break;
    default:
        Redirect::redirect('A operação informada é inválida', type: 'error');
}

function inserirCliente()
{
    if (empty($_POST)) {
        session_start();
        Redirect::redirect(
            type: 'error',
            message: 'Requisição inválida!'
        );

        $cpfDoCliente = $_POST['cpf'];
        $telefoneDoCliente = $_POST['telefone'];
        $enderecoDoCliente = $_POST['endereco'];
        $numeroDoEndereco = $_POST['numero'];
        $cepDoEndereco = $_POST['cep'];
        $bairroDoEndereco = $_POST['bairro'];
        $cidadeDoEndereco = $_POST['cidade'];
        $complementoDoENdereco = $_POST['complemento'];

        $error = array();

        if (!Validacao::validarCpf($cpfDoCliente)) {
            array_push($error, "O CPF do cliente deve conter 11 caracteres!");
        }

        if (!Validacao::validarTelefone($telefoneDoCliente)) {
            array_push($error, "O telefone do cliente deve conter no mínimo 9 caracteres!");
        }

        if (!Validacao::validarEndereco($enderecoDoCliente)) {
            array_push($error, "O endereço do cliente deve conter no mínimo 5 caracteres!");
        }

        if (!Validacao::validarNumero($numeroDoEndereco)) {
            array_push($error, "O Número do endereço deve conter no mínimo 1 caracter!");
        }

        if (!Validacao::validarCep($cepDoEndereco)) {
            array_push($error, "O CEP deve conter 7 caracteres!");
        }

        if (!Validacao::validarBairro($bairroDoEndereco)) {
            array_push($error, "O bairro deve conter no mínimo 5 caracteres!");
        }

        if (!Validacao::validarCidade($cidadeDoEndereco)) {
            array_push($error, "A cidade deve conter no mínimo 5 caracteres!");
        }

        if (!Validacao::validarComplemento($complementoDoENdereco)) {
            array_push($error, "O complemento deve conter no mínimo 3 caracteres!");
        }

        if ($error) {
            Redirect::redirect(
                message: $error,
                type: 'warning'
            );
        } else {
            $cliente = new Cliente(
                cpf: $cpfDoCliente,
                telefone: $telefoneDoCliente,
                endereco: new Endereco(
                    endereco: $enderecoDoCliente,
                    numero: $numeroDoEndereco,
                    cep: $cepDoEndereco,
                    bairro: $bairroDoEndereco,
                    cidade: $cidadeDoEndereco,
                    complemento: $complementoDoENdereco,
                ),
                id: $id = 0
            );
            try {
                $dao = new ClienteDAO();
                $resultado = $dao->insert($cliente);
                if ($resultado) {
                    Redirect::redirect(
                        message: "O cliente $cpfDoCliente foi cadastrado com sucesso!"
                    );
                } else {
                    Redirect::redirect("Lamento, não foi possível cadastrar o cliente $cpfDoCliente", type: 'error');
                }
            } catch (PDOException $e) {
                Redirect::redirect("Lamento, houve um erro inesperado!", type: 'error');
            }
        }
    }
}
function removerCliente()
{
    if (empty($_GET['code'])) {
        Redirect::redirect(message: 'O código do cliente não foi informado', type: 'error');
    }
    $code = (float) $_GET['code'];
    $error = array();
    if (!Validacao::validarNumero($code)) {
        array_push($erro, 'Código do cliente inválido!');
    }
    if ($error) {
        Redirect::redirect($error, type: 'warning');
    } else {
        try {
            $dao = new ClienteDAO();
            $resultado = $dao->delete($code);
            if ($resultado) {
                Redirect::redirect(message: 'Cliente removido com sucesso!');
            } else {
                Redirect::redirect(message: ['Não foi possível remover o cliente'], type: 'warning');
            }
        } catch (PDOException $e) {
            Redirect::redirect("Lamento, houve um erro inesperado:", type: 'error');
        }
    }
}

function listarCliente()
{
    try{
        session_start();
        $dao = new ClienteDAO();
        $cliente = $dao->findAll();
        if($cliente) {
            $_SESSION['lista_de_clientes'] = $cliente;
            header('location:../View/lista_de_cliente.php');
        }else{
            Redirect::redirect(message:['Não existem clientes cadastrados!'], type: 'error');
        }
    }catch(PDOException $e){
        Redirect::redirect("Lamento, hoive um erro inseperado!", type:'erro');
    }
}
