<?php 
    /*
        Template Name: Produtos
    */

    $GLOBALS['h1'] = "Produtos";
    $GLOBALS['isProduto'] = true;

    get_header('about');
?>
    <main>
        <p class="produtos-txt">O Inttenso Foods se preocupa em produzir os melhores produtos para você e sua família desfrutarem de sabores indescritíveis. <br/>Nas receitas doces ou salgadas, nosso mix atende a todas as necessidades. <br/><b>Conheça nossos produtos!</b> </p>
        <ul class="produtos-list">
            <li class="produtos-list-item">
                <a class="produtos-list-item-link"  href="<?php echo relativeUrl('categoria-condimentos') ?>">
                    <figure class="produtos-list-item-container">
                        <img src="<?php echo theme_image('produtos/condimentos.png') ?>" alt="" class="produtos-list-item-img">
                        <figcaption class="produtos-list-item-caption">Condimentos</figcaption>
                    </figure>
                </a>             
            </li>
            <li class="produtos-list-item">
                <a class="produtos-list-item-link"  href="<?php echo relativeUrl('categoria-temperos') ?>">
                    <figure class="produtos-list-item-container">
                        <img src="<?php echo theme_image('produtos/temperos.png') ?>" alt="" class="produtos-list-item-img">
                        <figcaption class="produtos-list-item-caption">Temperos</figcaption>
                    </figure>
                </a>
            </li>
            <li class="produtos-list-item">
                <a class="produtos-list-item-link"  href="<?php echo relativeUrl('categoria-pimentas') ?>">
                    <figure class="produtos-list-item-container">
                        <img src="<?php echo theme_image('produtos/pimentas.png') ?>" alt="" class="produtos-list-item-img">
                        <figcaption class="produtos-list-item-caption">Pimentas</figcaption>
                    </figure>
                </a>
            </li>
            <li class="produtos-list-item">
                <a class="produtos-list-item-link"  href="<?php echo relativeUrl('categoria-molho') ?>">
                    <figure class="produtos-list-item-container">
                        <img src="<?php echo theme_image('produtos/molhos.png') ?>" alt="" class="produtos-list-item-img">
                        <figcaption class="produtos-list-item-caption">Molhos</figcaption>
                    </figure>
                </a>
            </li>
            <li class="produtos-list-item">
                <a class="produtos-list-item-link"  href="<?php echo relativeUrl('condimentos-especiais-2') ?>">
                    <figure class="produtos-list-item-container">
                        <img src="<?php echo theme_image('produtos/condimentos-especiais.png') ?>" alt="" class="produtos-list-item-img">
                        <figcaption class="produtos-list-item-caption">Condimentos especiais</figcaption>
                    </figure>
                </a>
            </li>
            <li class="produtos-list-item">
                <a class="produtos-list-item-link"  href="<?php echo relativeUrl('categoria-encartelados') ?>">
                    <figure class="produtos-list-item-container">
                        <img src="<?php echo theme_image('produtos/encartelados.png') ?>" alt="" class="produtos-list-item-img">
                        <figcaption class="produtos-list-item-caption">Encartelados</figcaption>
                    </figure>
                </a>
            </li>
        </ul>
    </main>
    <?php get_footer(); ?>