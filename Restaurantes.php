<html?php
?>
<!doctype php>
< lang="pt">

<head>
  <meta charset="utf-8">
  <title>Vista Bella Mar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="/files/icon.png">

  <link rel="stylesheet" type="text/css" href="css/inicio.css" />
  <link rel="stylesheet" type="text/css" href="css/restaurante.css" />

  <link rel="stylesheet" type="text/css" href="css/responsividade.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src='https://kit.fontawesome.com/6c1b2d82eb.js' crossorigin='anonymous'></script>
</head>

<body>
  <!--1 Navbar-->
  <nav class="navbar navbar-expand-lg navbar_topo navbar_color custom">
    <div class="container-fluid">
      <a href="index.php"><img src="files/logo.png" height="36"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-2x fa-bars"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active hoverable" aria-current="page" href="Quartos.php">Quartos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" href="index.php#institucional">Institucional</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" href="index.php#rodape">Informações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hoverable" href="index.php#contato">Contato</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hoverable" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">Nossos serviços</a>
            <ul class="dropdown-menu navbar_color" aria-labelledby="navbarDropdownMenuLink">
              <!--<li><a class="dropdown-item" href="Eventos.php">Eventos</a></li>-->
              <li><a class="dropdown-item" href="Restaurantes.php">Restaurantes</a></li>
            </ul>
          </li>

          <li class="nav-item nav-login">
            <a class="nav-link hoverable" href="login.php">Entrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--0 Navbar-->

  <div class="quadro-rest">
    <h1>A melhor gastronomia para você!</h1>
  </div>

  <div class="disposicao">
    <h1>Restaurantes</h1>
    <center>
      <hr>
    </center>
    <p>á sua disposição em nosso hotel</p>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner carousel-restaurante">
      <div class="carousel-item active">
        <img src="files/res1.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="files/res2.jpeg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="files/res3.jpg" class="d-block w-100">
      </div>
    </div>
  </div>

  <div class="bloco_conteudo">
    <div class="container text-center">
      <div class="row lista_restaurante">

        <div class="col">
          <h4>Café da manhã</h4>
          <br>
          <p>Casa di Sirena: 7h30 às 10h30</p>
          <br>
          <p>Qoya: 6h30 às 10h</p>
          <br>
          <p>Suryaa: 6h30 às 10h</p>
          <br>
          <p>Radisson: 6h às 10h</p>
          <br>
          <p>Quality: 6h30 às 10h</p>
          <br>
          <p>Go Inn: 6h30 às 10h</p>
        </div>
        <div class="col">
          <h4>Almoço</h4>
          <br>
          <p>Casa di Sirena: 7h30 às 10h30</p>
          <br>
          <p>Qoya: 6h30 às 10h</p>
          <br>
          <p>Suryaa: 6h30 às 10h</p>
          <br>
          <p>Radisson: 6h às 10h</p>
          <br>
          <p>Quality: 6h30 às 10h</p>
          <br>
          <p>Go Inn: 6h30 às 10h</p>
        </div>
        <div class="col">
          <h4>Jantar</h4>
          <br>
          <p>Casa di Sirena: 7h30 às 10h30</p>
          <br>
          <p>Qoya: 6h30 às 10h</p>
          <br>
          <p>Suryaa: 6h30 às 10h</p>
          <br>
          <p>Radisson: 6h às 10h</p>
          <br>
          <p>Quality: 6h30 às 10h</p>
          <br>
          <p>Go Inn: 6h30 às 10h</p>
        </div>
        <div class="col">
          <h4>Bar</h4>
          <br>
          <p>Casa di Sirena: 7h30 às 10h30</p>
          <br>
          <p>Qoya: 6h30 às 10h</p>
          <br>
          <p>Suryaa: 6h30 às 10h</p>
          <br>
          <p>Radisson: 6h às 10h</p>
          <br>
          <p>Quality: 6h30 às 10h</p>
          <br>
          <p>Go Inn: 6h30 às 10h</p>
        </div>
      </div>
    </div>
  </div>

  <!--1 rodapé-->
  <footer id="rodape">
    <img src="files/logo.png" id="icon_rodape">
  </footer>
  <!--0 rodapé-->
</body>

</html>