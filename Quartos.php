<?php
?>
<!doctype php>
<lang="pt">

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
    <!--0 navbar-->

    <!--conheca os quartos-->
    <div class="conheca_quartos">
        <h1>Conheça nossos melhores quartos
            <br>para seu melhor conforto
        </h1>
    </div>

    <!--conheca os quartos-->

    <div id="lista_quartos">
        <!--Quarto 1-->
        <div id="quarto_1" class="bloco_conteudo_quarto">
            <div class="qt_esquerda">
                <h1>Quarto Solteiro Standard</h1>
                <p>Um quarto com varanda e vista para a área de lazer.</p>
                <img src="files/q1.jpeg" class="img_quarto" id="img1">
            </div>

            <div class="detalhes_quarto">
                <p>
                    O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do design
                    e da
                    <br>arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                    cultural
                    <br>de São Paulo, a Avenida Paulista.
                    <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                    <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                    lobby,
                    <br>rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
                </p>

                <div class="botoes_reserva_quarto">
                    <p class="reserva_button valor_quarto">R$299,00</p>
                    <a class="reserva_button btn btn-success btn_reservar" href="Reserva.php#1">Reservar</a>
                </div>
            </div>
        </div>

        <!--Quarto 2-->
        <div id="quarto_2" class="bloco_conteudo_quarto">
            <div class="qt_direita">
                <h1>Quarto Solteiro Master</h1>
                <p>Um quarto com varanda e vista para a área de lazer.</p>
                <img src="files/q2.jpeg" class="img_quarto">
            </div>

            <div class="detalhes_quarto_right">
                <p>
                    <br>O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do
                    design e
                    <br>da arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                    <br>cultural de São Paulo, a Avenida Paulista.
                    <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                    <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                    <br>lobby, rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
                </p>

                <div class="botoes_reserva_quarto">
                    <p class="reserva_button valor_quarto">R$399,00</p>
                    <a class="reserva_button btn btn-success btn_reservar" href="Reserva.php#2">Reservar</a>
                </div>
            </div>
        </div>

        <!--Quarto 3-->
        <div id="quarto_3" class="bloco_conteudo_quarto">
            <div class="qt_esquerda">
                <h1>Quarto Solteiro Deluxe</h1>
                <p>Um quarto com varanda e vista para a área de lazer.</p>
                <img src="files/q3.jpeg" class="img_quarto">
            </div>

            <div class="detalhes_quarto">
                <p>
                    O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do design
                    e da
                    <br>arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                    cultural
                    <br>de São Paulo, a Avenida Paulista.
                    <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                    <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                    lobby,
                    <br>rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
                </p>

                <div class="botoes_reserva_quarto">
                    <p class="reserva_button valor_quarto">R$499,00</p>
                    <a class="reserva_button btn btn-success btn_reservar" href="Reserva.php#3">Reservar</a>
                </div>
            </div>
        </div>

        <!--Quarto 4-->
        <div id="quarto_4" class="bloco_conteudo_quarto">
            <div class="qt_direita">
                <h1>Quarto Casal Standard</h1>
                <p>Quarto com varanda maior e vista para a praia</p>
                <img src="files/q4.jpg" class="img_quarto">
            </div>

            <div class="detalhes_quarto_right">
                <p>
                    <br>O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do
                    design e
                    <br>da arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                    <br>cultural de São Paulo, a Avenida Paulista.
                    <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                    <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                    <br>lobby, rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
                </p>

                <div class="botoes_reserva_quarto">
                    <p class="reserva_button valor_quarto_right">R$299,00</p>
                    <a class="reserva_button btn btn-success btn_reservar" href="Reserva.php#4">Reservar</a>
                </div>
            </div>
        </div>

        <!--Quarto 5-->
        <div id="quarto_5" class="bloco_conteudo_quarto">
            <div class="qt_esquerda">
                <h1>Quarto Casal Master</h1>
                <p>Quarto com varanda maior e vista para a praia</p>
                <img src="files/q5.jpeg" class="img_quarto">
            </div>

            <div class="detalhes_quarto">
                <p>
                    O Vista Bella Mar Hotel traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do
                    design e da
                    <br>arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                    cultural
                    <br>de São Paulo, a Avenida Paulista.
                    <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                    <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                    lobby,
                    <br>rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
                </p>

                <div class="botoes_reserva_quarto">
                    <p class="reserva_button valor_quarto">R$399,00</p>
                    <a class="reserva_button btn btn-success btn_reservar" href="Reserva.php#5">Reservar</a>
                </div>
            </div>
        </div>

        <div id="quarto_6" class="bloco_conteudo_quarto">
            <div class="qt_direita">
                <h1>Quarto Casal Deluxe</h1>
                <p>Quarto com varanda maior e vista para a praia</p>
                <img src="files/q6.jpeg" class="img_quarto">
            </div>

            <div class="detalhes_quarto_right">
                <p>
                    <br>O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do
                    design e
                    <br>da arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                    <br>cultural de São Paulo, a Avenida Paulista.
                    <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                    <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                    <br>lobby, rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
                </p>

                <div class="botoes_reserva_quarto">
                    <p class="reserva_button valor_quarto_right">R$499,00</p>
                    <a class="reserva_button btn btn-success btn_reservar" href="Reserva.php#6">Reservar</a>
                </div>
            </div>
        </div>
    </div>

    <footer id="rodape">
        <img src="files/logo.png" id="icon_rodape">
    </footer>
</body>

</html>