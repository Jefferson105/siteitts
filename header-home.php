<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inttenso Foods</title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ) ?>/css/style.css" />
    <?php wp_head(); ?>
</head>
<body>
    <?php $pagename ?>
    <header class="header">
        <nav class="header-menu home">
            <ul class="header-menu-list">
                <li class="header-menu-list-item"><a href="index.php">Home</a></li>
                <li class="header-menu-list-item"><a href="empresa.php">Empresa</a></li>
                <li class="header-menu-list-item"><a href="produtos.php">Produtos</a></li>
                <li class="header-menu-list-item logo"><img src="img/logo.png" /></li>
                <li class="header-menu-list-item"><a href="receitas.php">Receitas</a></li>
                <li class="header-menu-list-item"><a href="contato.php">Fale conosco</a></li>
            </ul>
        </nav>
        <nav class="header-slide slide container">
            <button class="header-slide-button slide-button">
                <img src="img/left-arrow.svg" />
            </button>
            <ul class="header-slide-list slide-list">
                <li class="header-slide-list-item">
                    <div class="header-slide-list-item-content main-slide">
                        <p class="main-slide-frases">
                            <span class="main-slide-frases-1">Com você e sua família nos melhores momentos</span>
                            <span class="main-slide-frases-2">Conheça todas as nossas linhas</span>
                        </p>
                        <img class="main-slide-img" src="img/inttenso_prod.png" />
                    </div>
                </li>
            </ul>
            <button class="header-slide-button slide-button">
                <img src="img/right-arrow.svg" />
            </button>
        </nav>
        <figure class="header-banner">
            <img src="img/header2.png" />
            <img src="img/header3.png" />
            <img class="header-banner-leaves" src="img/header4.png" />
        </figure>
        <figure class="header-bottom">
            <img src="img/header1.png" />
        </figure>
    </header>