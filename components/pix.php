<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento PIX</title>
    <style>
        /* Garantindo que o body ocupe a tela inteira */
        body {
            margin: 0;
            padding: 0;
            height: 100vh; /* Ocupa toda a altura da tela */
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            background-color: #f9f9f9;
        }

        /* Centralização do container que vai envolver o QR Code */
        #qrCodeContainer {
            position: relative; /* Necessário para o ajuste de posicionamento */
            text-align: center; /* Centraliza o conteúdo do container */
        }

        /* Estilos para a imagem */
        img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        /* Estilos para o botão */
        #closeButton {
            margin-top: 10px;
            background-color: #ff5e57;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="qrCodeContainer">
        <img src="/files/qrcode.png" alt="QR Code PIX">
        <button id="closeButton">Fechar</button>
    </div>
</body>
</html>
