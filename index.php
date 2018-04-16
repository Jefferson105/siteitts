<?php 
    /*
        Template Name: Home Template
    */

    if(is_front_page()) {
        get_header('home'); 
    }else {
        get_header('about');    
    }

    //get_header();  
    $frase_receitas = get_field('frase_receitas');
    $text_quem = get_field('quem_somos');
    $img_quem = get_field('imagem_quem_somos');
    $seccao_produtos = get_field('seccao_produtos');
    $receitas = get_field('receitas_home');
?>
<input type="hidden" value="<?php print_r($seccao_produtos); ?>" />
<input type="hidden" value="<?php print_r($receitas); ?>" />
<main>
    <section class="historia">
        <div class="historia-msg">
            <h3 class="historia-msg-tit1">Conheça a nossa história</h3>
            <h2 class="historia-msg-tit2">Quem somos</h2>
            <br/>
            <p class="historia-msg-txt"><?php echo $text_quem ?></p>
            <br/>
            <a class="historia-msg-button" href="empresa.php">Saiba Mais</a>
        </div>
        <figure class="historia-group">
            <img class="historia-group-img" src="<?php echo $img_quem["url"]; ?>" />
        </figure>
    </section>
    <section class="produtos">
        <div class="container">
            <h2 class="produtos-title">Produtos</h2>
            <nav class="produtos-slide slide">
                <!--<button class="produtos-slide-button slide-button">
                    <img src="<?php //echo theme_image('left-arrow.svg') ?>" />
                </button>-->
                <ul class="produtos-slide-list slide-list">
                    <?php foreach($seccao_produtos as $produto) { ?>
                        <li class="produtos-slide-list-item">
                            <a href="<?php echo $produto["link"]; ?>" class="link-container">
                                <figure class="produtos-slide-list-item-container">
                                    <img class="produtos-slide-list-item-container-img" alt="" src="<?php echo $produto["imagem_produto_slide"]; ?>">
                                    <figcaption class="produtos-slide-list-item-container-caption"><?php echo $produto["nome_do_produto"]; ?></figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php } ?>
                    
                </ul>
                <!--<button class="produtos-slide-button slide-button">
                    <img src="<?php //echo theme_image('right-arrow.svg') ?>" />
                </button>-->
            </nav>
        </div>
    </section>
    <section class="receitas">
        <h2 class="receitas-titulo">Receitas</h2>
        <img class="receitas-imgtitle" src="<?php echo theme_image('receita.png') ?>" />
        <p class="receitas-txt"><?php echo $frase_receitas; ?></p>
        <section class="receitas-cards">
            <?php foreach($receitas as $receita) { ?>
                <div class="cards">
                    <a href="<?php echo $receita["link"]; ?>" class="cards-conteudo">
                        <figure class="cards-conteudo-pratos">
                            <img src="<?php echo $receita["imagem_receita"]; ?>" class="cards-conteudo-pratos-comidas" />
                        </figure>
                        <div class="cards-conteudo-text">
                            <h3 class="cards-conteudo-text-title"><?php echo $receita["nome_receita"]; ?></h3>
                            <p class="cards-conteudo-text-description"><?php echo $receita["texto_receita"]; ?></p>
                            <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank">
                                <img src="<?php echo theme_image('face.svg" class="cards-conteudo-icons-social') ?>">
                            </a>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </section>
    </section>
</main>

<?php get_footer(); ?>