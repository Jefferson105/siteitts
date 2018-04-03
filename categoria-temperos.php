<?php 
    /*
        Template Name: Categoria Temperos
    */

    get_header('about');
?>
    <main>
        <p class="produtos-txt">O Inttenso Foods se preocupa em produzir os melhores produtos para você e sua família desfrutarem de sabores indescritíveis. <br/>Nas receitas doces ou salgadas, nosso mix atende a todas as necessidades. <br/><b>Conheça nossos produtos!</b> </p>
        <ul class="produtos-list">
            <li class="produtos-list-item">
                <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-tempero-alho-sal') ?>">
                    <figure class="produtos-list-item-container">
                        <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Tempero-alho-e-sal-500g.png') ?>" />
                        <figcaption>
                            <p><strong>Tempero Alho e Sal 500g</strong></p>
                            <p>7898955459683</p>
                        </figcaption>
                    </figure>
                </a>
            </li>
            <li class="produtos-list-item">
                <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-pasta-de-alho') ?>">
                    <figure class="produtos-list-item-container">
                        <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Pasta-de-alho-500g.png') ?>" />
                        <figcaption>
                            <p><strong>Tempero Pasta de Alho 500g</strong></p>
                            <p>7898955459676</p>
                        </figcaption>
                    </figure>
                </a>
            </li>
            <li class="produtos-list-item">
                <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-temperos-completos') ?>">
                    <figure class="produtos-list-item-container">
                        <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Tempero-completo-500g.png') ?>" />
                        <figcaption>
                            <p><strong>Tempero Completo 500g</strong></p>
                            <p>7898955459690</p>
                        </figcaption>
                    </figure>
                </a>
            </li>
        </ul>
    </main>
    <?php get_footer(); ?>