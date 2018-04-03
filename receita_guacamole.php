<?php 
    /*
        Template Name: Receita Guacamole
    */

    get_header('receita');
?>
    <main>
        <figure class="receitas-individual-foto">
            <img src="<?php echo theme_image('receitas/tomate-recheado-g.jpg') ?>" />
        </figure>
        <section class="receitas-individual-sobre">
            <h2 class="receitas-individual-sobre-title">Guacamole</h2>
            <div class="receitas-individual-sobre-container">
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-info-ingredientes">
                    <h3 class="receitas-individual-sobre-container-info-title">Ingredientes</h3>
                    <p class="receitas-individual-sobre-container-info-txt">
                        <ul>
                            <li>1 abacate maduro descascado</li>
                            <li>2 tomates médios maduros</li>
                            <li>1 cebola picada</li>
                            <li>1 pimenta dedo-de-moça sem sementes</li>
                            <li>1/2 de xícara de folhas de coentro Inttenso Foods picadas</li>
                            <li>Suco de 1 limão</li>
                            <li>Pimenta do reino Inttenso Foods</li>
                            <li>Sal a gosto</li>
                            <li>2 colheres (sopa) de azeite</li>
                        </ul>
                    </p>
                </div>
                <div class="receitas-individual-sobre-container-info receitas-individual-sobre-container-modo">
                    <h3 class="receitas-individual-sobre-container-info-title">Modo de fazer</h3>
                    <ol>
                        <li>Pique os tomates, as cebolas, a pimenta dedo de moça e as folhas de coentro Inttenso Foods e coloque-os em uma tigela;</li>
                        <li>Acrescente o abacate e amasse-o;</li>
                        <li>Misture com cuidado para que o abacate não vire uma pasta, os pequenos pedaços fazem parte da receita;</li>
                        <li>Acrescente o azeite;</li>
                        <li>Prove e acrescente o sal e a pimenta do reino Inttenso Foods;</li>
                        <li>Sirva em seguida com os seus chips.</li>
                    </ol>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>