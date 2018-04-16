<?php 
    /*
        Template Name: Receita Molho Pesto
    */

    $GLOBALS['h1'] = "Receita Molho Pesto";
    $GLOBALS['isProduto'] = false;

    get_header('receita');
?>
    <main>
        <figure class="receitas-individual-foto">
            <img src="<?php echo theme_image('receitas/molho-pesto-g.jpg') ?>" />
        </figure>
        <section class="receitas-individual-sobre">
            <h2 class="receitas-individual-sobre-title">Molho Pesto</h2>
            <div class="receitas-individual-sobre-container">
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-info-ingredientes">
                    <h3 class="receitas-individual-sobre-container-info-title">Ingredientes</h3>
                    <p class="receitas-individual-sobre-container-info-txt">
                        <ul>
                            <li>1 maço de manjericão</li>
                            <li>1 dente de alho</li>
                            <li>5 colheres de azeite</li>
                            <li>Pimenta do Reino Inttenso Foods a gosto</li>
                            <li>Sal a gosto</li>
                        </ul>
                    </p>
                </div>
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-modo">
                    <h3 class="receitas-individual-sobre-container-info-title">Modo de fazer</h3>
                    <ol>
                        <li>Em um processador, bata as folhas de 1/4 de maço de manjericão, 1/4 de dente de alho, sal e pimenta do reino Inttenso Foods com 1 colher de sopa de azeite;</li>
                        <li>Acrescente mais 4 colheres de sopa de azeite até triturar as folhas;</li>
                        <li> Se preciso, acerte o sal e a pimenta do reino Inttenso Foods e termine de bater;</li>
                        <li>Não bata em excesso pois isso estimula a oxidação das folhas, o que deixa o molho pesto escuro;</li>
                        <li>Sirva com saladas, torradas e massas.</li>
                    </ol>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>