<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inttenso Foods</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/receitas.css" />
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="../js/script.js"></script>
</head>
<body>
    <header class="header">
        <nav class="header-menu">
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
        <h1 style="display: none">Receitas</h1>
        <img class="receitas-imgHeader" src="../img/receita_branco.png" />
    </header>
    <main>
        <figure class="receitas-individual-foto">
            <img src="../img/receitas/tomate-recheado-g.jpg" />
        </figure>
        <section class="receitas-individual-sobre">
            <h2 class="receitas-individual-sobre-title">Tomate recheado com muçarela, parmesão e orégano</h2>
            <div class="receitas-individual-sobre-container">
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-info-ingredientes">
                    <h3 class="receitas-individual-sobre-container-info-title">Ingredientes</h3>
                    <p class="receitas-individual-sobre-container-info-txt">
                        <ul>
                            <li>6 tomates (grandes)</li>
                            <li>Sal</li> 
                            <li>Pimenta do reino Inttenso Foods (a gosto)</li>
                            <li>300g de muçarela (picada)</li>
                            <li>1/2 xícara de queijo parmesão ralado (chá</li>)
                            <li>Orégano Intenso Foods (para povilhar)</li>
                            <li>2 colheres de azeite (sopa)</li>
                        </ul>
                    </p>
                </div>
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-modo">
                    <h3 class="receitas-individual-sobre-container-info-title">Modo de fazer</h3>
                    <ol>
                        <li>Corte a superfície dos tomates, formando uma tampa, e retire as sementes;</li>
                        <li>Tempere-os com sal e pimenta do reino Inttenso Foods e recheie com muçarela;</li>
                        <li>Polvilhe queijo ralado e orégano Intteso Foods;</li>
                        <li>Regue com azeite de oliva;</li>
                        <li>Finalize em forno pré-aquecido em temperatura mpedia (180 C) por cerca de 15 minutos ou até derreter o queijo;</li>
                        <li>Sirva em seguida.</li>
                    </ol>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer-main">
            <figure class="footer-logo">
                <img src="../img/logo.png">
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
                <img class="footer-social-imgFace" src="../img/facebook-logo.svg" />
            </div>
        </div>
        <p class="footer-copy">2018 Copyright todos os direitos reservados. Desenvolvido por Unick360</p>
    </footer>
</body>
</html>