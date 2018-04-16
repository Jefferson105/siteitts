<?php 
    /*
        Template Name: Receita Tomate Recheado
    */

    $GLOBALS['h1'] = "Receita Tomate Recheado";
    $GLOBALS['isProduto'] = false;

    get_header('receita');
?>
    <main>
        <figure class="receitas-individual-foto">
            <img src="<?php echo theme_image('receitas/tomate-recheado-p.jpg') ?>" />
        </figure>
        <section class="receitas-individual-sobre">
            <h2 class="receitas-individual-sobre-title">Tomate recheado com muçarela, parmesão e orégano</h2>
            <div class="receitas-individual-sobre-container">
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-info-ingredientes">
                    <h3 class="receitas-individual-sobre-container-info-title">Ingredientes</h3>
                    <p class="receitas-individual-sobre-container-info-txt">
                        <ul>
                            <li>6 tomates (grandes)</li>
                            <li>Sal</li> 
                            <li>Pimenta do reino Inttenso Foods (a gosto)</li>
                            <li>300g de muçarela (picada)</li>
                            <li>1/2 xícara de queijo parmesão ralado (chá</li>)
                            <li>Orégano Intenso Foods (para povilhar)</li>
                            <li>2 colheres de azeite (sopa)</li>
                        </ul>
                    </p>
                </div>
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-modo">
                    <h3 class="receitas-individual-sobre-container-info-title">Modo de fazer</h3>
                    <ol>
                        <li>Corte a superfície dos tomates, formando uma tampa, e retire as sementes;</li>
                        <li>Tempere-os com sal e pimenta do reino Inttenso Foods e recheie com muçarela;</li>
                        <li>Polvilhe queijo ralado e orégano Intteso Foods;</li>
                        <li>Regue com azeite de oliva;</li>
                        <li>Finalize em forno pré-aquecido em temperatura mpedia (180 C) por cerca de 15 minutos ou até derreter o queijo;</li>
                        <li>Sirva em seguida.</li>
                    </ol>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>