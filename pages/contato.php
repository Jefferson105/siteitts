<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fale Conosco</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/contato.css" />
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
    <header class="header">
        <nav class="header-menu home">
            <a class="header-menu-logo" href="index.php">
                <img src="../img/logo.png" />
            </a>
            <img class="header-menu-mobile" src="../img/menu.svg" />
            <ul class="header-menu-list">
                <li class="header-menu-list-item back">
                    <button><img src="../img/left-arrow.svg" /></button>
                    <p>Back</p>
                </li>
                <li class="header-menu-list-item home">
                    <a href="index.php">Home</a>
                </li>
                <li class="header-menu-list-item">
                    <a href="empresa.php">Empresa</a>
                </li>
                <li class="header-menu-list-item">
                    <a href="produtos.php">Produtos</a>
                </li>
                <li class="header-menu-list-item logo">
                    <a href="index.php">
                        <img src="../img/logo.png" />
                    </a>
                </li>
                <li class="header-menu-list-item">
                    <a href="receitas.php">Receitas</a>
                </li>
                <li class="header-menu-list-item">
                    <a href="contato.php">Fale conosco</a>
                </li>
            </ul>
        </nav>
        <figure class="header-banner">
            <img src="../img/header_other.png" />
        </figure>
        <h1>Fale Conosco</h1>
    </header>
    <main class="contato">
        <p class="contato-txt">Entre em contato com a Inttenso Foods e tire as suas dúvidas! <br/><b>Preencha o formulário abaixo ou ligue para (37) 3421 – 6600. </b></p>
        <form class="contato-form">
            <input type="text" class="contato-form-input contato-form-input-100" placeholder="NOME" />
            <input type="text" class="contato-form-input contato-form-input-50" placeholder="EMAIL" />
            <input type="text" class="contato-form-input contato-form-input-50 input-telefone" placeholder="TELEFONE" />
            <input type="text" class="contato-form-input contato-form-input-100" placeholder="ASSUNTO" />
            <textarea class="contato-form-input contato-form-input-text" placeholder="MENSAGEM"></textarea>
            <button class="contato-form-button">Enviar mensagem</button>
        </form>
        <figure class="contato-map">
            <!--<img src="img/mapa_bh.png" />-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15004.734181390491!2d-43.95233645787379!3d-19.916668774690667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbr!4v1521997922364" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </figure>
    </main>
    <footer class="footer">
        <div class="container footer-main">
            <figure class="footer-logo">
                <img src="img/logo.png">
            </figure>
            <address class="footer-address">
                <h4 class="footer-title">Contato:</h4>
                Rua São Francisco, nº 40<br />
                Bairro Mosenhor Parreiras<br />
                Luz/MG | CEP 35.595-000<br />
                Telefax: (37) 3421-6600<br />
                cafeinttenso@cafeinttenso.com.br
            </address>
            <ul class="footer-menu">
                <li class="footer-menu-tit"><h4 class="footer-title">Menu</h4></li>
                <li class="footer-menu-item"><a href="index.php">Home</a></li>
                <li class="footer-menu-item"><a href="empresa.php">Empresa</a></li>
                <li class="footer-menu-item"><a href="produtos.php">Produtos</a></li>
                <li class="footer-menu-item"><a href="receitas.php">Receitas</a></li>
                <li class="footer-menu-item"><a href="contato.php">Fale conosco</a></li>
            </ul>
            <div class="footer-social">
                <h4 class="footer-title">Rede Social</h4>
                <img class="footer-social-imgFace" src="img/facebook-logo.svg" />
            </div>
        </div>
        <p class="footer-copy">2018 Copyright todos os direitos reservados. Desenvolvido por Unick360</p>
    </footer>
</body>
</html>