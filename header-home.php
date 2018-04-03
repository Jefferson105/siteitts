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
            <ul class="header-menu-list">
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('empresa') ?>">Empresa</a></li>
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('produtos') ?>">Produtos</a></li>
                <li class="header-menu-list-item logo"><a href="<?php echo relativeUrl() ?>"><img src="<?php echo theme_image('logo.png'); ?>" /></a></li>
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('receitas') ?>">Receitas</a></li>
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('contato') ?>">Fale conosco</a></li>
            </ul>
        </nav>
        <nav class="header-slide slide container">
            <button class="header-slide-button slide-button">
                <img src="<?php echo theme_image('left-arrow.svg'); ?>" />
            </button>
            <ul class="header-slide-list slide-list">
                <li class="header-slide-list-item">
                    <div class="header-slide-list-item-content main-slide">
                        <p class="main-slide-frases">
                            <span class="main-slide-frases-1">Com você e sua família nos melhores momentos</span>
                            <span class="main-slide-frases-2">Conheça todas as nossas linhas</span>
                        </p>
                        <img class="main-slide-img" src="<?php echo theme_image('inttenso_prod.png'); ?>" />
                    </div>
                </li>
            </ul>
            <button class="header-slide-button slide-button">
                <img src="<?php echo theme_image('right-arrow.svg') ?>" />
            </button>
        </nav>
        <figure class="header-banner">
            <img src="<?php echo theme_image('header2.jpg') ?>" />
            <img src="<?php echo theme_image('header3.png') ?>" />
            <img class="header-banner-leaves" src="<?php echo theme_image('header4.png') ?>" />
        </figure>
        <figure class="header-bottom">
            <img src="<?php echo theme_image('header1.png') ?>" />
        </figure>
    </header>

<?php //wp_nav_menu(array('theme_location'=>'primary', 'container' => false, 'menu_class' => 'header-menu-list')); ?>