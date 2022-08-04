<?php

if (($_SERVER['SERVER_NAME']) == "localhost"){
    define('DNS','mysql:host=localhost:3307;dbname=estacionamento');
    define('USER','root');
    define('PASSWORD','');
}else{
    define('DNS', 'mysql:host=localhost;dbname=id19357024_estacionamentobd');
    define('USER', 'id19357024_kauanvoltz');
    define('PASSWORD', '*XKwK)%u+%4%!CFi');
}