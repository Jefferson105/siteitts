<?php 
    if(is_front_page()) {
        get_header('home'); 
    }else {
        get_header('about');    
    }

    //get_header();  
?>
<main>
    <section class="historia">
        <div class="historia-msg">
            <h3 class="historia-msg-tit1">Conheça a nossa história</h3>
            <h2 class="historia-msg-tit2">Quem somos</h2>
            <br/>
            <p class="historia-msg-txt">O Inttenso Foods nasceu com a missão de proporcionar e agregar valores às experiências culinárias. Com o amor em produzir cafés, decidimos levar mais sabor a tantos lares. Desta forma, o Inttenso Foods produz os mais diversos produtos, buscando novas formas agregar valor as experiências culinárias.
                <br/>
                <br/>
            Seja com os condimentos, molhos, pimentas, encartelados ou temperos, todos os cinco sentidos serão explorados através de sabores e aromas únicos. </p>
            <br/>
            <a class="historia-msg-button" href="empresa.php">Saiba Mais</a>
        </div>
        <figure class="historia-group">
            <img class="historia-group-img" src="<?php echo theme_image('quemSomos.jpg') ?>" />
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
                    <li class="produtos-slide-list-item">
                        <a href="<?php echo relativeUrl('produto-ketchup') ?>" class="link-container">
                            <figure class="produtos-slide-list-item-container">
                                <img class="produtos-slide-list-item-container-img" alt="Ketchup 370ml" src="<?php echo theme_image('produtos/ketchup_370ml.png') ?>">
                                <figcaption class="produtos-slide-list-item-container-caption">Ketchup 370ml</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li class="produtos-slide-list-item">
                        <a href="<?php echo relativeUrl('produto-pimenta-biquinho') ?>" class="link-container">
                            <figcaption class="produtos-slide-list-item-container">
                                <img src="<?php echo theme_image('produtos/pimenta_biquinho.png') ?>" alt="Pimenta biquinho" class="produtos-slide-list-item-container-img">
                                <figcaption class="produtos-slide-list-item-container-caption">Pimenta biquinho 60ml</figcaption>
                            </figcaption>
                        </a>    
                    </li>
                    <li class="produtos-slide-list-item">
                        <a href="<?php echo relativeUrl('produto-pasta-de-alho') ?>" class="link-container">
                            <figcaption class="produtos-slide-list-item-container">
                                <img src="<?php echo theme_image('produtos/pasta_alho.png') ?>" alt="Pasta de alho" class="produtos-slide-list-item-container-img">
                                <figcaption class="produtos-slide-list-item-container-caption">Pasta de alho 500g</figcaption>
                            </figcaption>
                        </a>
                    </li>
                    <li class="produtos-slide-list-item">
                        <a href="<?php echo relativeUrl('produto-pimenta-cumarim-amarela') ?>" class="link-container">
                            <figcaption class="produtos-slide-list-item-container">
                                <img src="<?php echo theme_image('produtos/pimenta_marela.png') ?>" alt="Pimenta amarela" class="produtos-slide-list-item-container-img">
                                <figcaption class="produtos-slide-list-item-container-caption">Pimenta cumarim 180g</figcaption>
                            </figcaption>
                        </a>    
                    </li>
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
        <p class="receitas-txt">Confira nossas receitas e surpreenda-se com os sabores!</p>
        <section class="receitas-cards">
            <div class="cards">
                <a href="receita_tomate_recheado.php" class="cards-conteudo">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/tomate-recheado-p.jpg') ?>" class="cards-conteudo-pratos-comidas" />
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Tomate recheado com muçarela, parmesão e orégano </h3>
                        <p class="cards-conteudo-text-description">Uma entrada simples, rápida e deliciosa para ser servida durante um momento especial!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank">
                            <img src="<?php echo theme_image('face.svg" class="cards-conteudo-icons-social') ?>">
                        </a>
                    </div>
                </a>
            </div>
            <div class="cards">
                <a href="receita_beijinho.php" class="cards-conteudo">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/beijinho-p.jpg" class="cards-conteudo-pratos-comidas') ?>">
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Beijinho</h3>
                        <p class="cards-conteudo-text-description">Suas festinhas vão ficar ainda mais doces com essa deliciosa receita de Beijinho!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="<?php echo theme_image('face.svg" class="cards-conteudo-icons-social') ?>"></a>
                    </div>
                </a>
            </div>
            <div class="cards">
                <a href="receita_strogonoff_carne.php" class="cards-conteudo">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/strogonoff-carne-p.jpg') ?>" class="cards-conteudo-pratos-comidas">
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Strogonoff de Carne</h3>
                        <p class="cards-conteudo-text-description">Uma deliciosa receita que não deixará sobrar nada!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="<?php echo theme_image('face.svg" class="cards-conteudo-icons-social') ?>"></a>
                    </div>
                </a>
            </div>
        </section>
    </section>
</main>

<?php get_footer(); ?>