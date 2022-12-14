<?php require_once '../Controller/auth.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Tela Inicial</title>
</head>

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
                <a class="nav-link disabled" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page"  href="form_add_clientes.php">Cadastrar clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page"  href="form_add_veiculos.php">Cadastrar veiculos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page"  href="../Controller/Cliente.php?operation=listar">Listar clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../Controller/Veiculo.php?operation=listar">Listar veiculos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../Controller/User.php?operation=logout">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/direitos-ao-deixar-o-carro-no-estacionamento-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/carros-estacionados-novos-e-velhos-19807252.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/parking-825371_1920.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/funcionarios.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      

<button type="button"  style="width: 100%;" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Código fonte
  </button>
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Código fonte</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Obrigado por visitar nosso site, caso queira ver o código fonte do site <a href="https://github.com/kauanvoltz/Projeto-final-web2">clique aqui</a>
            
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
  
        </div>
      </div>
    </div>
  </div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>