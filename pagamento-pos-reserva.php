<?php
?>
<!DOCTYPE php>
<php lang="pt">

<head>
    <meta charset="utf-8">
    <title>Vista Bella Mar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="files/icon.png">

    <link rel="stylesheet" type="text/css" href="css/inicio.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" type="text/css" href="css/pagamento-pos-reserva.css" />

    <link rel="stylesheet" type="text/css" href="css/responsividade.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script src='https://kit.fontawesome.com/6c1b2d82eb.js' crossorigin='anonymous'></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar_topo navbar_color">
        <div class="container-fluid">
            <a href="index.php"><img src="files/logo.png" height="36"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-2x fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="Quartos.php">Quartos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Institucional.php">Institucional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#rodape">Informações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contato">Contato</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Nossos serviços
                        </a>
                        <ul class="dropdown-menu navbar_color" aria-labelledby="navbarDropdownMenuLink">
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

    <div id="fundo_login"></div>

    <div id="prancheta_pagamento">
        <h1>Realizar o pagamento</h1>
        <form id="area_pagamento">
            <div class="mb-3">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" required maxlength="50"
                    placeholder="Nome no cartão">
            </div>

            <div class="dados_input_pagamento">
                <div class="mb-3">
                    <label for="inputNumCard" class="form-label">Número do cartão</label>
                    <input type="text" class="form-control" id="inputNumCard" required maxlength="19"
                        pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}" placeholder="0000 0000 0000 0000">
                </div>

                <div class="mb-3">
                    <label for="inputVencimento" class="form-label">Vencimento</label> <br>
                    <select class="input_vencimento">
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select>

                    <input type="number" class="input_vencimento" min="2023" max="2050" step="1" value="2023" />
                </div>

                <div class="mb-3">
                    <label for="inputSecurityNum" class="form-label">Código de segurança</label>
                    <input type="text" class="form-control" id="inputSecurityNum" required maxlength="3"
                        pattern="[0-9]{3}" placeholder="000">
                </div>
            </div>

            <button type="submit" class="btn btn-success">Efetuar Pagamento</button>

            <a href="#" target="_blank" class="pag-pix">
                <img id="logo_pix" src="files/pagamento-pix.jpg" alt="pix">
            </a>
        </form>
    </div>

    <footer id="rodape">
        <img src="files/logo.png" id="icon_rodape">
    </footer>
</body>

</html>