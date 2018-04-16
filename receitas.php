<?php 
    /*
        Template Name: Receitas
    */

    get_header('receita');

    $frase = get_field("frase_receita");
    $listaReceitas = get_field("lista_receitas");
?>
    <section class="receitas">
        <p class="receitas-txt"><?php echo $frase; ?></p>
        <section class="receitas-cards">
            <?php foreach($listaReceitas as $receitas) { ?>
                <div class="cards">
                    <a class="cards-conteudo" href="<?php echo relativeUrl('receita-tomate-recheado') ?>"> 
                        <figure class="cards-conteudo-pratos">
                            <img src="<?php echo $receitas["imagem_receita"]; ?>" class="cards-conteudo-pratos-comidas" />
                        </figure>
                        <div class="cards-conteudo-text">
                            <h3 class="cards-conteudo-text-title"><?php echo $receitas["nome_receita"]; ?></h3>
                            <p class="cards-conteudo-text-description"><?php echo $receitas["apresentacao_receitas"]; ?></p>
                            <a class="cards-conteudo-icons" href="<?php echo $receitas["link"]; ?>" target="_blank">
                                <img src="<?php echo theme_image('face.svg') ?>" class="cards-conteudo-icons-social">
                            </a>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </section>
        <ul class="receitas-paginator">
            <li class="receitas-paginator-item active">1</li>
            <!--<li class="receitas-paginator-item">2</li>
            <li class="receitas-paginator-item">3</li>
            <li class="receitas-paginator-item">(...)</li>-->
        </ul>
    </section>
    <?php get_footer(); ?>