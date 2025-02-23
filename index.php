<?php
  session_start();
?>
<!doctype php>
<php lang="pt">

<head>
  <meta charset="utf-8">
  <title>Vista Bella Mar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="shortcut icon" href="files/icon.png">

  <link rel="stylesheet" type="text/css" href="css/inicio.css" />
  <link rel="stylesheet" type="text/css" href="css/quartos.css" />

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
              <!--<li><a class="dropdown-item" href="Eventos.html">Eventos</a></li>-->
              <li><a class="dropdown-item" href="Restaurantes.php">Restaurantes</a></li>
            </ul>
          </li>

          <li class="nav-item nav-login">
            <?php
              if(!isset($_SESSION['user_id'])|| $_SESSION['user_id'] == null || empty($_SESSION['user_id'])) {
                echo "<a class='nav-link hoverable' href='login.php'>Entrar</a>";
              } else {
                echo "<a class='nav-link hoverable' onclick='logout()'>Sair</a>";
              }
            ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--0 navbar-->

  <!--1 carousel-->
  <div id="carouselExampleControls" class="carrossel_inicio carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="files/q1.jpeg" class="d-block w-100" alt="sl1">
      </div>
      <div class="carousel-item">
        <img src="files/q5.jpeg" class="d-block w-100" alt="sl2">
      </div>
      <div class="carousel-item">
        <img src="files/q2.jpeg" class="d-block w-100" alt="sl3">
      </div>
      <div class="carousel-item">
        <img src="files/q4.jpg" class="d-block w-100" alt="sl3">
      </div>
    </div>
  </div>

  <!--1 bloco quebra de linha-->
  <div class="bloco_conteudo">
    <p class="titulo">Nossos Quartos</p>
    <center>
      <hr>
    </center>
    <p class="subtitulo">Temos opções incríveis em nosso hotel</p>

    <div class="container text-center lista_quartos">
      <div class="row lista_quartos_inicio">
        <div class="card col card_quarto qart_1">
          <div class="dados_quarto">
            <h5 class="nome_cidade">Solteiro Standart</h5>
            <p class="texto_quarto">Quarto básico para hóspedes desacompanhados.</p>
            <a href="Quartos.php#quarto1" class="btn btn-primary button_quarto">Mais detalhes</a>
          </div>
        </div>

        <div class="card col card_quarto qart_2">
          <div class="dados_quarto">
            <h5 class="nome_cidade">Solteiro Master</h5>
            <p class="texto_quarto">Quarto executivo para hóspedes desacompanhados.</p>
            <a href="Quartos.php#quarto_2" class="btn btn-primary button_quarto">Mais detalhes</a>
          </div>
        </div>

        <div class="card col card_quarto qart_3">
          <div class="dados_quarto">
            <h5 class="nome_cidade">Solteiro Deluxe</h5>
            <p class="texto_quarto">Quarto de luxo para hóspedes desacompanhados.</p>
            <a href="Quartos.php#quarto_3" class="btn btn-primary button_quarto">Mais detalhes</a>
          </div>
        </div>

        <div class="card col card_quarto qart_4">
          <div class="dados_quarto">
            <h5 class="nome_cidade">Casal Standard</h5>
            <p class="texto_quarto">Quarto básico para um casal de hóspedes.</p>
            <a href="Quartos.php#quarto_4" class="btn btn-primary button_quarto">Mais detalhes</a>
          </div>
        </div>

        <div class="card col card_quarto qart_5">
          <div class="dados_quarto">
            <h5 class="nome_cidade">Casal Master</h5>
            <p class="texto_quarto">Quarto executivo para um casal de hóspedes.</p>
            <a href="Quartos.php#quarto_5" class="btn btn-primary button_quarto">Mais detalhes</a>
          </div>
        </div>

        <div class="card col card_quarto qart_6">
          <div class="dados_quarto">
            <h5 class="nome_cidade">Casal Deluxe</h5>
            <p class="texto_quarto">Quarto de luxo para um casal de hóspedes.</p>
            <a href="Quartos.php#quarto_6" class="btn btn-primary button_quarto">Mais detalhes</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--0 carousel area de lazer-->
  <div id="institucional" class="bloco_conteudo bloco_institucional">
    <div class="bloco_conteudo">
      <p class="titulo">Quem somos </p>
      <p class="subtitulo">Conheça a história da nossa rede</p>
      <div>
        <p class="detalhe-inst">A Vista Bella Mar é uma operadora de hotéis de origem curitibana. Há mais de 20 anos no
          mercado, iniciou sua operação na capital paranaense e após a expansão bem sucedida na capital, passou a
          administrar empreendimentos em outras regiões do Brasil.
          Com o foco em excelência em serviços e performance estratégica de captação de receitas, a HCC Hotels vem
          se destacando no mercado da hotelaria nacional.</p>

        <br>
        <br>

        <div class="container text-center">
          <div class="row lista_colunas_insti">
            <div class="col col_insti">
              <p>Nossa missão</p>
              <p class="inst-miss">Servir aos hóspedes com excelência, atuando como especialista em hotelaria e
                criando valores para os acionistas e para o Brasil</p>
            </div>

            <div class="col col_insti quadro_insti">
              <p>Nossa visão para o futuro</p>
              <p class="inst-vis">Ser referência em hoteleiros na região do litoral</p>
            </div>

            <div class="col col_insti quadro_insti">
              <p>Nossos valores</p>
              <p class="inst-val">Resultado: sem ele não há crescimento sustentável
                Simplicidade: segredo da empresa de sucesso<br>
                Excelência: amamos o nosso trabalho<br>
                Desenvolvimento: Busca de processos embasado na ética, missão e valores<br>
                Ética: presente em todas as nossas ações com o forte desejo de uma sociedade avançada.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contato" class="bloco_conteudo bloco_contato">
    <p class="titulo">Fale Conosco 📱</p>
    <p class="subtitulo">Entre em contato conosco pelo formulário abaixo</p>

    <form id="formulario_contato" class="row col-md-6 container">
      <div class="col-md-6">
        <label for="inputEmail" class="form-label">Email</label>
        <input type="email" class="form-control" required id="inputEmail">
      </div>

      <div class="col-md-6">
        <label for="inputTelefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" required id="inputTelefone">
      </div>

      <div class="col-md-6">
        <label for="inputName" class="form-label">Nome</label>
        <input type="text" class="form-control" required id="inputName">
      </div>

      <div class="col-md-6">
        <label for="inputSobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" required id="inputSobrenome">
      </div>

      <div class="col-12">
        <label for="inputObservacao" class="form-label">Sua observação!</label>
        <textarea class="form-control" id="inputObservacao" required rows="10"
          placeholder="Escreva algo aqui para nos enviar!"></textarea>
      </div>

      <div class="d-grid button_enviar_contato">
        <button class="btn btn-success" type="button">Enviar</button>
      </div>
    </form>
  </div>

  <footer id="rodape">
    <center>
      <img src="files/logo.png" id="icon_rodape">
    </center>
  </footer>

  <script>
    function logout() {
      window.location.href = './components/logout.php';
    }
  </script>
</body>