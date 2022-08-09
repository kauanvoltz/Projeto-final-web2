<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Lista de Clientes</title>
</head>

<body>

    <body style="background-color: #343a40;">


        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Barra de navegação</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="form_add_clientes.php">Cadastrar clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="form_add_veiculos.php">Cadastrar veiculos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-current="page" href="#">Listar clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../Controller/Veiculo.php?operation=listar">Listar veiculos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../Controller/User.php?operation=logout">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="table-responsive-md">
            <table class="table table-dark table-sm">
                <thead class="">
                    <tr>

                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Número</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Complemento</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
              
                </tbody>
            </table>











            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>

</html>