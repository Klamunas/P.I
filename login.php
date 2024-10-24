<?php
require 'components/register.php'; // Verifique se o caminho está correto
?>
<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <title>Vista Bella Mar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="files/icon.png">

  <link rel="stylesheet" type="text/css" href="css/inicio.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <link rel="stylesheet" type="text/css" href="css/responsividade.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <script src='https://kit.fontawesome.com/6c1b2d82eb.js' crossorigin='anonymous'></script>

  <script>
    function login(caso) {
      document.getElementById("prancheta_registro").style.display = caso === 0 ? "block" : "none";
      document.getElementById("prancheta_login").style.display = caso === 0 ? "none" : "block";
    }
  </script>
</head>

<body>
  <!-- Navbar -->
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
              <li><a class="dropdown-item" href="Restaurantes.php">Restaurantes</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="fundo_login"></div>

  <div class="tela-login">
    <div id="prancheta_login">
      <h1>Vista Bella Mar</h1>

      <form class="caixa-login" action="login.php" method="POST">
        <div class="mb-3">
          <label for="inputEmailLogin" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="email" id="inputEmailLogin" required>
        </div>
        <div class="mb-3">
          <label for="inputPasswordLogin" class="form-label">Senha</label>
          <input type="password" class="form-control" name="password" id="inputPasswordLogin" required>
        </div>
        <br>
        <a class="btn_login btn btn-primary" onclick="login(0)">Se Registrar</a>
        <button type="submit" class="btn_login btn btn-success">Entrar</button>
      </form>
    </div>

    <div id="prancheta_registro" style="display: none;">
      <h1>Vista Bella Mar</h1>

      <form class="caixa-login" action="components/register.php" method="POST"> <!-- Ajuste o caminho se necessário -->
        <div class="mb-3">
          <label for="inputEmailRegistro" class="form-label">E-mail</label>
          <input type="email" class="form-control" name="email" id="inputEmailRegistro" required>
        </div>

        <div class="mb-3">
          <label for="inputEmailConfirm" class="form-label">Confirmar e-mail</label>
          <input type="email" class="form-control" name="confirm_email" id="inputEmailConfirm" required>
        </div>

        <div class="mb-3">
          <label for="inputPasswordRegistro" class="form-label">Senha</label>
          <input type="password" class="form-control" name="password" id="inputPasswordRegistro" maxlength="32" required>
        </div>

        <div class="mb-3">
          <label for="inputPasswordConfirm" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" name="confirm_password" id="inputPasswordConfirm" maxlength="32" required>
        </div>

        <div class="mb-3">
          <label for="inputTelefone" class="form-label">Número para contato</label>
          <input type="tel" class="form-control" name="number" placeholder="(DDD) 0000-0000" id="inputTelefone" required>
        </div>

        <div class="mb-3">
          <label for="inputEndereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" name="adress" id="inputEndereco" required>
        </div>

        <div class="mb-3">
          <label for="inputCEP" class="form-label">CEP</label>
          <input type="text" class="form-control" name="cep" id="inputCEP" maxlength="10" pattern="\d{2}\.\d{3}-\d{3}"
            placeholder="00.000-000" required>

          <br>
          <label>
            <input type="checkbox" required id="termos-de-uso">
            Aceito os termos de uso
          </label>
        </div>

        <br>

        <a class="btn_login btn btn-primary" onclick="login(1)">Voltar ao Login</a>
        <button type="submit" class="btn_login btn btn-success">Registrar</button>
      </form>
    </div>
  </div>

  <footer id="rodape">
    <img src="files/logo.png" id="icon_rodape">
  </footer>
</body>

</html>
