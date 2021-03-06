<?php 
    /*
        Template Name: Categoria Molhos
    */

    $GLOBALS['h1'] = "Molhos";
    $GLOBALS['isProduto'] = false;

    get_header('about');
?>
    <main>
        <p class="produtos-txt">O Inttenso Foods se preocupa em produzir os melhores produtos para você e sua família desfrutarem de sabores indescritíveis. <br/>Nas receitas doces ou salgadas, nosso mix atende a todas as necessidades. <br/><b>Conheça nossos produtos!</b> </p>
        <ul class="produtos-list">
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-molho-alho-roxo') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Molho de alho roxo 900ml.png') ?>" />
                    <figcaption>
                        <p><strong>Molho de Alho Roxo 150ml</strong></p>
                        <p>Molho de Alho Roxo 900ml | 7898955459607 </p>
                        <p>Molho de Alho Roxo 150ml | 7898955459539 </p>
                    </figcaption>
                </figure>
                </a>
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link"href="<?php echo relativeUrl('produto-molho-barbecure') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Molho barbecue 270g.png') ?>" />
                    <figcaption>
                        <p><strong>Molho Barbecure 270g</strong></p>
                        <p>7898955459584</p>
                    </figcaption>
                </figure>  
            </a>  
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-molho-ingles') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Molho ingles 900ml.png') ?>" />
                    <figcaption>
                        <p><strong>Molho Inglês 150ml e 900ml</strong></p>
                        <p>Molho Inglês 900ml | 7898955459614</p>
                        <p>Molho Inglês 150 ml | 7898955459560</p>
                    </figcaption>
                </figure>  
            </a>  
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-alho-roxo-apimentado') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Molho de alho roxo 900ml.png') ?>" />
                    <figcaption>
                        <p><strong>Molho de Alho Roxo Apimentado 150ml e 900ml</strong></p>
                        <p>Molho de Alho Roxo Apimentado 900 ml | 9898955459621</p>
                        <p>Molho de Alho Roxo Apimentado 150 ml | 7898955459546</p>
                    </figcaption>
                </figure>  
            </a>  
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-pimenta-extra-forte') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/MOLHO DE PIMENTA EXTRA  FORT 150.png') ?>" />
                    <figcaption>
                        <p><strong>Molho de Pimenta Extra Forte 150ml e 900ml</strong></p>
                        <p>Molho de Pimenta Extra Forte 900ml | 7898955459638</p>
                        <p>Molho de Pimenta Extra Forte 150ml | 7898955459508</p>
                    </figcaption>
                </figure>   
            </a> 
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-pimenta-forte') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Molho de pimenta forte 900ml.png') ?>" />
                    <figcaption>
                        <p><strong>Molho de Pimenta Forte 150ml e 900ml</strong></p>
                        <p>Molho de Pimenta Forte 900ml | 7898955459652</p>
                        <p>Molho de Pimenta Forte 150ml | 7898955459515</p>
                    </figcaption>
                </figure> 
            </a>   
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-pimenta-suave') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/Molho de oimenta suave 900ml.png') ?>" />
                    <figcaption>
                        <p><strong>Molho de Pimenta Suave 150ml e 900ml</strong></p>
                        <p>Molho de Pimenta Suave 900ml | 7898955459645</p>
                        <p>Molho de Pimenta Suave 150ml | 7898955459522</p>
                    </figcaption>
                </figure>  
            </a>  
            </li>
            <li class="produtos-list-item">
            <a class="produtos-list-item-link" href="<?php echo relativeUrl('produto-shoyu') ?>">
                <figure class="produtos-list-item-container">
                    <img class="produtos-list-item-img" src="<?php echo theme_image('produtos/MOLHO SHOYO 150.png') ?>" />
                    <figcaption>
                        <p><strong>Molho Shoyu 150ml e 900ml</strong></p>
                        <p>Molho Shoyu 900ml | 7898955459669</p>
                        <p>Molho Shoyu 150ml | 7898955459553</p>
                    </figcaption>
                </figure>    
            </a>
            </li>
        </ul>
    </main>
    <?php get_footer(); ?>