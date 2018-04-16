<?php 
    $slideHome = get_field('primeiro_slide');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo("title"); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="header-menu home">
            <a class="header-menu-logo" href="http://<?php echo relativeUrl('') ?>">
                <img src="<?php echo theme_image('logo.png'); ?>" />
            </a>
            <img class="header-menu-mobile" src="<?php echo theme_image('menu.svg'); ?>" />
            <ul class="header-menu-list">
                <li class="header-menu-list-item back">
                    <button><img src="<?php echo theme_image('left-arrow.svg') ?>" /></button>
                    <p>Back</p>
                </li>
                <li class="header-menu-list-item home">
                    <a href="<?php echo relativeUrl('') ?>">Home</a>
                </li>
                <li class="header-menu-list-item">
                    <a href="<?php echo relativeUrl('empresa') ?>">Empresa</a>
                </li>
                <li class="header-menu-list-item">
                    <a href="<?php echo relativeUrl('produtos') ?>">Produtos</a>
                </li>
                <li class="header-menu-list-item logo">
                    <a href="<?php echo relativeUrl('') ?>">
                        <img src="<?php echo theme_image('logo.png'); ?>" />
                    </a>
                </li>
                <li class="header-menu-list-item">
                    <a href="<?php echo relativeUrl('receitas') ?>">Receitas</a>
                </li>
                <li class="header-menu-list-item">
                    <a href="<?php echo relativeUrl('contato') ?>">Fale conosco</a>
                </li>
            </ul>
        </nav>
        <nav class="header-slide slide container">
            <button class="header-slide-button slide-button" id="left-slide">
                <img src="<?php echo theme_image('left-arrow.svg'); ?>" />
            </button>
            <ul class="header-slide-list slide-list">
                <?php foreach($slideHome as $slide) { ?>
                    <li data-banner="<?php echo $slide["imagem_de_fundo_slide"]; ?>" class="header-slide-list-item">
                        <a href="<?php echo $slide["link_slide"]; ?>" class="header-slide-list-item-link">
                            <div class="header-slide-list-item-content main-slide">
                                <p class="main-slide-frases">
                                    <span class="main-slide-frases-1"><?php echo $slide["frase_slide"]; ?></span>
                                    <span class="main-slide-frases-2"><?php echo $slide["frase_no_link"]; ?></span>
                                </p>
                                <img class="main-slide-img" src="<?php echo $slide["imagem_no_slide"]; ?>" />
                            </div>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <button class="header-slide-button slide-button" id="right-slide">
                <img src="<?php echo theme_image('right-arrow.svg') ?>" />
            </button>
        </nav>
        <figure class="header-banner">
            <img id="banner-slider" src="<?php echo theme_image('fundo_slide0.jpg') ?>" />
            <img class="header-banner-leaves" src="<?php echo theme_image('header4.png') ?>" />
        </figure>
        <figure class="header-bottom">
            <img src="<?php echo theme_image('header1.png') ?>" />
        </figure>
    </header>