<?php 
    /*
        Template Name: Receita Beijinho
    */

    $GLOBALS['h1'] = "Receita Beijinho";
    $GLOBALS['isProduto'] = false;

    get_header('receita');
?>
    <main>
        <figure class="receitas-individual-foto">
            <img src="<?php echo theme_image('receitas/beijinho-g.jpg') ?>" />
        </figure>
        <section class="receitas-individual-sobre">
            <h2 class="receitas-individual-sobre-title">Beijinho</h2>
            <div class="receitas-individual-sobre-container">
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-info-ingredientes">
                    <h3 class="receitas-individual-sobre-container-info-title">Ingredientes</h3>
                    <p class="receitas-individual-sobre-container-info-txt">
                        <ul>
                            <li>1 Lata - Leite Condensado</li>
                            <li>1 Colher de sopa - Margarina sem Sal</li>
                            <li>1 Xícara (Chá) - Coco Ralado</li>
                            <li>Cravo da Índia Inttenso Foods</li>
                        </ul>
                    </p>
                </div>
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-modo">
                    <h3 class="receitas-individual-sobre-container-info-title">Modo de fazer</h3>
                    <ol>
                        <li>Aqueça a panela, misture o leite condensado, a margarina e o coco ralado;</li>
                        <li>Leve ao fogo baixo, mexendo sempre até desprender do fundo;</li>
                        <li>Transfira a mistura para um prato fundo untado com manteiga, espalhe bem e deixe esfriar;</li>
                        <li>Faça pequenas bolinhas com as mãos untadas com margarina e passe-as sobre o coco ralado para confeitar;</li>
                        <li>Decore cada beijinho com um cravo Inttenso Foods;</li>
                        <li>Sirva em seguida.</li>
                    </ol>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>