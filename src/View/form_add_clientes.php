
<?php require_once '../Controller/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar clientes</title>

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


    <div class=" box">
    <form action="">
        <fieldset>
            <legend> <b> Cadastro de clientes </b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required min="1" >
                <label for="nome" class="labelInput">Nome</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="cpf" id="cpf" class="inputUser" required  min="1">
                <label for="cpf" class="labelInput">CPF</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="telefone" id="telefone" class="inputUser" required min="1" >
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <p><b> Endereço </b></p>
            <br>
            <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required  min="1" >
                <label for="endereco" class="labelInput">Logradouro</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="number" name="numero" id="numero" class="inputUser" required min="1">
                <label for="numero" class="labelInput">Número residêncial</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="cep" id="cep" class="inputUser" required min="1" max="7">
                <label for="cep" class="labelInput">CEP</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="bairro" id="bairro" class="inputUser" required min="1" max="25">
                <label for="bairro" class="labelInput">Bairro</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required min="1" max="25">
                <label for="cidade" class="labelInput">Cidade</label>
            </div>
            <br>
            <div class="inputBox">
                <input type="text" name="complemento" id="complemento" class="inputUser" min="1" max="10">
                <label for="complemento" class="labelInput">Complemento</label>
            </div>
            <br>
            <div>
            <button type="button" name="submit" id="voltar" onclick="goBack()"> Voltar</button>
            <button type="submit" name="submit" id="cadastrar"> Cadastrar</button>
            </div>
        </fieldset>
    </form>
    </div>

















   <script src="../view/js/voltar.js"></script>
</body>

</html>