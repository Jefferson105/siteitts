<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo("title"); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
    <?php $pagename ?>
    <header class="header">
        <nav class="header-menu home">
            <?php wp_nav_menu(); ?>
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
                        <img class="main-slide-img" src="http://localhost:8080/wordpress/wp-content/uploads/2018/04/inttenso_prod.png" />
                    </div>
                </li>
            </ul>
            <button class="header-slide-button slide-button">
                <img src="img/right-arrow.svg" />
            </button>
        </nav>
        <figure class="header-banner">
            <img src="http://localhost:8080/wordpress/wp-content/uploads/2018/04/header2.png" />
            <img src="http://localhost:8080/wordpress/wp-content/uploads/2018/04/header1.png" />
            <img class="header-banner-leaves" src="http://localhost:8080/wordpress/wp-content/uploads/2018/04/header4.png" />
        </figure>
        <figure class="header-bottom">
            <img src="http://localhost:8080/wordpress/wp-content/uploads/2018/04/header1.png" />
        </figure>
    </header>