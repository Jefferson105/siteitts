<?php 
    /*
        Template Name: Categoria Condimentos Especiais
    */

    get_header('about');
?>
    <main>
        <p class="produtos-txt">O Inttenso Foods se preocupa em produzir os melhores produtos para você e sua família desfrutarem de sabores indescritíveis. <br/>Nas receitas doces ou salgadas, nosso mix atende a todas as necessidades. <br/><b>Conheça nossos produtos!</b> </p>
        <ul class="produtos-list">
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="produto-ketchup.php">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/ketchup_370ml.png') ?>" />
                    <figcaption>
                        <p><strong>Ketchup Tradicional 370ml</strong></p>
                        <p>7898955459560</p>
                        <p><strong>Ketchup sachê 6g:</strong> 7898955459409</p>
                        <p><strong>Maionese sachê 6g:</strong> 7898955459065</p>
                    </figcaption>
                </figure>
            </a>
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="produto-mostarda.php">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Mostarda 200g.png') ?>" />
                    <figcaption>
                        <p><strong>Mostarda Amarela 200g</strong></p>
                        <p>7898955459577</p>
                    </figcaption>
                </figure>
            </a>
            </li>
        </ul>
    </main>
    <?php get_footer(); ?>