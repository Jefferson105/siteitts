<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inttenso Foods</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <nav class="header-menu">
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
        <figure class="header-banner">
            <img src="<?php echo theme_image('header_other.png') ?>" />
        </figure>
        <h1 style="display: none">Receitas</h1>
        <img class="receitas-imgHeader" src="<?php echo theme_image('receita_branco.png') ?>" />
    </header>