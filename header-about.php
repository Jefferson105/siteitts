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
        <nav class="header-menu">
            <ul class="header-menu-list">
                <li class="header-menu-list-item"><a href="empresa.php">Empresa</a></li>
                <li class="header-menu-list-item"><a href="produtos.php">Produtos</a></li>
                <li class="header-menu-list-item logo"><a href="index.php"><img src="img/logo.png" /></a></li>
                <li class="header-menu-list-item"><a href="receitas.php">Receitas</a></li>
                <li class="header-menu-list-item"><a href="contato.php">Fale conosco</a></li>
            </ul>
        </nav>
        <figure class="header-banner">
            <img src="img/header_other.png" />
        </figure>
        <h1 class="produtos-h1">Produtos | Cafés</h1>
    </header>