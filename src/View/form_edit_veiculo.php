<?php require_once '../Controller/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Veiculos</title>

    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #212529;
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.3);
            padding: 15px;
            border-radius: 15px;
            width: 30%;
        }

        fieldset {
            border: 3px solid white;
        }

        legend {
            border: 3px solid white;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
            color: black;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            letter-spacing: 2px;
            width: 100%;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~.labelInput{
            top: -10px;
            font-size: 12px;
            color: gray;
        }

       #voltar{
            width: 45%;
            border: none;
            padding: 10px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
            margin-right: 25px;
       }
       #cadastrar{
            width: 45%;
            border: none;
            padding: 10px;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
       }
       #cadastrar:hover{
        background-color: #57da74;
       }
       #voltar:hover{
        background-color: #f34336;
       }
    </style>
</head>

<body >

<?php
session_start();
$veiculo = $_SESSION['info_veiculo'];
?>
    <div class=" box">
    <form action="../Controller/Veiculo.php?operation=editar" method="POST">
    <input type="hidden" name="code" value="<?= $veiculo ['id_veiculo'] ?>">   
    <fieldset>
            <legend> <b> Editar veículos </b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="modelo" id="modelo" class="inputUser" required min="1" value="<?=$veiculo ['modelo'] ?>">
                <label for="modelo" class="labelInput">Modelo do veículo</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="placa" id="placa" class="inputUser" required min="1" value="<?=$veiculo ['placa'] ?>">
                <label for="placa" class="labelInput">Placa</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="ano" id="ano" class="inputUser" required min="1" value="<?=$veiculo["ano"]?>" >
                <label for="ano" class="labelInput">Ano</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="cor" id="cor" class="inputUser" required min="1" value="<?=$veiculo["cor"]?>"> 
                <label for="cor" class="labelInput">Cor</label>
            </div>
            
            <br>
            <div>
            <button type="button" name="submit" id="voltar" onclick="goBack()"> Voltar</button>
            <button type="submit" name="submit" id="cadastrar"> Editar</button>
            </div>
        </fieldset>
    </form>
    </div>

















   <script src="../view/js/voltar.js"></script>
</body>

</html>