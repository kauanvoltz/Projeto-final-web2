<?php

namespace APP\Controller;

require_once '../../vendor/autoload.php';

use APP\Model\DAO\UserDAO;
use APP\Utils\Redirect;
use PDOException;

if (empty($_GET['operation'])) {
    Redirect::redirect(message: 'Requisição inválida!', type: 'error');
}

switch ($_GET['operation']) {
    case 'login':
        login();
        break;
    case 'logout':
        logout();
        break;
    default:
        Redirect::redirect(message: 'Operação inválida!', type: 'error');
}

function login()
{
    if(empty($_POST)){
        Redirect::redirect(message: 'Requisição inválida!', type:'error');
    }
    $login = $_POST['login'];
    $password = $_POST['password'];

    $dao = new userDAO();
    $user = $dao->findUser($login);

    if ($user) {
        if (password_verify($password, $user['password'])){
            session_start();
            $_SESSION['auth'] = $login;
            header('location:../View/index.html');
        } else {
            Redirect::redirect(message: ['Nenhum usuário foi localizado com essas credeciais'], type: 'warning');
        }
    } else {
        Redirect::redirect(message:['Nenhum usuário foi localizado com essas credenciais'], type: 'warning');
    }
}
function logout()
{
    session_start();
    session_destroy();
    header('location:../../home.php');
}