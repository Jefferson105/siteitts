<?php 
    /*
        Template Name: Produto Ketchup
    */

    $GLOBALS['h1'] = "Ketchup Tradicional";
    $GLOBALS['isProduto'] = true;

    get_header('about');
?>
<main>
        <p class="produtos-breadcrumb"><span>produtos</span> | <span>Condimentos Especiais</span> | <span>Ketchup Tradicional Inttenso foods</span></p>
        <section class="produtos-individual">
            <figure class="produtos-individual-img">
                <img class="produtos-individual-img-prod" src="<?php echo theme_image('produtos/ketchup_370ml.png') ?>" />
                <img class="produtos-individual-img-info" src="<?php echo theme_image('fundo_produto.png') ?>" />
                <p class="produtos-individual-img-txt">
                    <span>Peso Líquido: 370ml.</span><br />
                    <span>Validade: VIDE LOTE</span>
                </p>
            </figure>
            <div class="produtos-individual-info">
                <div class="produtos-individual-info-container"> 
                    <h3 class="produtos-individual-info-nome">Ketchup Tradicional 370ml</h3>
                    <p class="produtos-individual-info-txt">Conservar em local seco e arejado. Depois de aberto conservar preferencialmente
                    em geladeira. Válido por 30 dias depois de aberto.
                    </p>
                    <table class="produtos-individual-info-table">
                        <caption>
                            <span>Informação nutricional</span>
                            <span>Porção de 12 g (1 colher de sopa)
                            </span>
                        </caption>
                        <tr>
                            <th>Quantidade por porção</th>
                            <th></th>
                            <th>%VD*</th>
                        </tr>
                        <tr>
                            <td>Valor energético</td>
                            <td>16 kcal = 67 kJ</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Carboidratos</td>
                            <td>4g</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Proteínas</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Gorduras Totais</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Gorduras Saturadas</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Gorduras Trans</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Fibra alimentar</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Sódio</td>
                            <td>172mg</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="produtos-individual-info-valores"> * % Valores Diários de referência com base em uma dieta de 2.000kcal ou 8.400kJ. 
                            **Seus valores diários podem ser maiores ou menores dependendo de suas necessidades energéticas.
                            (***) Não contém quantidade significativa deste(s) nutriente(s). Alérgicos: Não contém glúten.
                            </td>
                        </tr>
                    </table>
                    <div class="produtos-individual-ingrediente">
                        <h4 class="produtos-individual-ingrediente-title">Ingredientes:</h4>
                        <p class="produtos-individual-ingrediente-txt"> Polpa de tomate, açúcar, amido, vinagre, sal, realçador de sabor glutamato monossódico. Corantes: vermelho allura e caramelo IV. Conservante benzoato de sódio.
                        Antioxidante ácido cítrico.
                        Alérgicos: Não contém glúten.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <p class="produtos-individual-modo"><i>Modo de conservação:</i> Conservar em local seco e arejado.  Depois de aberto conservar preferencialmente em geladeira.Válido por 30 dias depois de aberto.</p>
    </main>
    <?php get_footer(); ?>