<html?php
?>
<!doctype php>
< lang="pt">

<head>
    <meta charset="utf-8">
    <title>Vista Bella Mar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="files/icon.png">

    <link rel="stylesheet" type="text/css" href="css/inicio.css" />
    <link rel="stylesheet" type="text/css" href="css/quartos.css" />
    <link rel="stylesheet" type="text/css" href="css/pagamento-pos-reserva.css" />

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

    <!-- Quarto 1 -->
    <div class="tela-titulo">
        <br>
        <p class="inst-titulo">Reserva de quarto</p>
        <br>
    </div>

    <div id="1" class="quarto_reserva">
        <div>
            <h1>Quarto Solteiro Standard</h1>
            <p>Um quarto com varanda e vista para a área de lazer.</p>

            <img class="img_reservar_quarto" src="files/q1.jpeg">
        </div>

        <div class="detalhes_quarto_reserva">
            <p class="resumo_quarto_esquerda">
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

            <p class="estatisticas_quarto">
                🚹Capacidade: 1 Pessoa<br>
                ♿Acessível? Não<br>
                🚭Fumantes? Sim

            <div class="checkin-out">
                <label>Data de Entrada: <input type="date"></label>
                <label>Data de Saída: <input type="date"></label>
            </div>
            </p>

            <div class="botoes_reserva_quarto_fechamento">
                <p class="reserva_button valor_quarto">R$299,00</p>

                <a class="reserva_button btn btn-success btn_reservar" href="pagamento-pos-reserva.php">Reservar</a>
            </div>
        </div>
    </div>

    <div id="1" class="quarto_reserva">
        <div>
            <h1>Quarto Solteiro Master</h1>
            <p>Um quarto com varanda e vista para a área de lazer.</p>

            <img class="img_reservar_quarto" src="files/q2.jpeg">
        </div>

        <div class="detalhes_quarto_reserva">
            <p class="resumo_quarto_esquerda">

                <br>O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do
                design e
                <br>da arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                <br>cultural de São Paulo, a Avenida Paulista.
                <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                <br>lobby, rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
            </p>

            <p class="estatisticas_quarto">
                🚹Capacidade: 1 Pessoa<br>
                ♿Acessível? Não<br>
                🚭Fumantes? Sim

            <div class="checkin-out">
                <label>Data de Entrada: <input type="date"></label>
                <label>Data de Saída: <input type="date"></label>
            </div>
            </p>

            <div class="botoes_reserva_quarto_fechamento">
                <p class="reserva_button valor_quarto">R$399,00</p>

                <a class="reserva_button btn btn-success btn_reservar" href="pagamento-pos-reserva.php">Reservar</a>
            </div>
        </div>
    </div>

    <div id="1" class="quarto_reserva">
        <div>
            <h1>Quarto Solteiro Deluxe</h1>
            <p>Um quarto com varanda e vista para a área de lazer.</p>

            <img class="img_reservar_quarto" src="files/q3.jpeg">
        </div>

        <div class="detalhes_quarto_reserva">
            <p class="resumo_quarto_esquerda">
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

            <p class="estatisticas_quarto">
                🚹Capacidade: 1 Pessoa<br>
                ♿Acessível? Não<br>
                🚭Fumantes? Sim

            <div class="checkin-out">
                <label>Data de Entrada: <input type="date"></label>
                <label>Data de Saída: <input type="date"></label>
            </div>
            </p>

            <div class="botoes_reserva_quarto_fechamento">
                <p class="reserva_button valor_quarto">R$499,00</p>

                <a class="reserva_button btn btn-success btn_reservar" href="pagamento-pos-reserva.php">Reservar</a>
            </div>
        </div>
    </div>

    <div id="1" class="quarto_reserva">
        <div>
            <h1>Quarto Casal Standard</h1>
            <p>Quarto com varanda maior e vista para a praia</p>

            <img class="img_reservar_quarto" src="files/q4.jpg">
        </div>

        <div class="detalhes_quarto_reserva">
            <p class="resumo_quarto_esquerda">

                <br>O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do
                design e
                <br>da arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                <br>cultural de São Paulo, a Avenida Paulista.
                <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                <br>lobby, rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
            </p>

            <p class="estatisticas_quarto">
                🚹Capacidade: 1 Pessoa<br>
                ♿Acessível? Não<br>
                🚭Fumantes? Sim

            <div class="checkin-out">
                <label>Data de Entrada: <input type="date"></label>
                <label>Data de Saída: <input type="date"></label>
            </div>
            </p>

            <div class="botoes_reserva_quarto_fechamento">
                <p class="reserva_button valor_quarto">R$299,00</p>

                <a class="reserva_button btn btn-success btn_reservar" href="pagamento-pos-reserva.php">Reservar</a>
            </div>
        </div>
    </div>

    <div id="1" class="quarto_reserva">
        <div>
            <h1>Quarto Solteiro Standard</h1>
            <p>Quarto para uma pessoa com serviços básicos.</p>

            <img class="img_reservar_quarto" src="files/q5.jpeg">
        </div>

        <div class="detalhes_quarto_reserva">
            <p class="resumo_quarto_esquerda">
                O Vista Bella Mar Hotel traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor
                do
                design e da
                <br>arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                cultural
                <br>de São Paulo, a Avenida Paulista.
                <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                lobby,
                <br>rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
            </p>

            <p class="estatisticas_quarto">
                🚹Capacidade: 1 Pessoa<br>
                ♿Acessível? Não<br>
                🚭Fumantes? Sim

            <div class="checkin-out">
                <label>Data de Entrada: <input type="date"></label>
                <label>Data de Saída: <input type="date"></label>
            </div>
            </p>

            <div class="botoes_reserva_quarto_fechamento">
                <p class="reserva_button valor_quarto">R$299,00</p>

                <a class="reserva_button btn btn-success btn_reservar" href="pagamento-pos-reserva.php">Reservar</a>
            </div>
        </div>
    </div>

    <div id="1" class="quarto_reserva">
        <div>
            <h1>Quarto Casal Deluxe</h1>
            <p>Quarto com varanda maior e vista para a praia</p>

            <img class="img_reservar_quarto" src="files/q6.jpeg">
        </div>

        <div class="detalhes_quarto_reserva">
            <p class="resumo_quarto_esquerda">
                <br>O Vista Bella Mar traz os conceitos de tranquilidade e bem-estar em conjunto com o melhor do
                design e
                <br>da arquitetura para o equilíbrio completo da sua estadia em meio ao principal ícone econômico e
                <br>cultural de São Paulo, a Avenida Paulista.
                <br>O Refúgio que você precisa para viver as sensações e experiências da vida.
                <br>O Vista Bella Mar conta com uma biblioteca e serviço de chás, restaurante Primo Piano no
                <br>lobby, rooftop com piscina, SPA e Fitness Center, além de um belíssimo jardim vertical.
            </p>

            <p class="estatisticas_quarto">
                🚹Capacidade: 1 Pessoa<br>
                ♿Acessível? Não<br>
                🚭Fumantes? Sim

            <div class="checkin-out">
                <label>Data de Entrada: <input type="date"></label>
                <label>Data de Saída: <input type="date"></label>
            </div>
            </p>
            <div class="botoes_reserva_quarto_fechamento">
                <p class="reserva_button valor_quarto">R$299,00</p>

                <a class="reserva_button btn btn-success btn_reservar" href="pagamento-pos-reserva.php">Reservar</a>
            </div>
        </div>
    </div>

    <footer id="rodape">
        <img src="files/logo.png" id="icon_rodape">
    </footer>
</body>

<script>
    (() => {
        const url = window.location.href.split("=")[1]

        if (url == 4)
            document.getElementById("img_quarto").src = `/files/q${url}.jpg`
        else
            document.getElementById("img_quarto").src = `/files/q${url}.jpeg`
    })()
</script>

</html>