<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inttenso Foods</title>
    <?php wp_head(); ?>
</head>
<body>
    <?php $pagename ?>
    <header class="header">
        <nav class="header-menu">
            <ul class="header-menu-list">
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('empresa') ?>">Empresa</a></li>
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('produtos') ?>">Produtos</a></li>
                <li class="header-menu-list-item logo"><a href="<?php echo relativeUrl() ?>"><img src="<?php echo theme_image('logo.png'); ?>" /></a></li>
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('receitas') ?>">Receitas</a></li>
                <li class="header-menu-list-item"><a href="<?php echo relativeUrl('contato') ?>">Fale conosco</a></li>
            </ul>
        </nav>
        <figure class="header-banner">
            <img src="<?php echo theme_image('header_other.png') ?>" />
        </figure>
        <h1 class="produtos-h1">Produtos | Cafés</h1>
    </header>