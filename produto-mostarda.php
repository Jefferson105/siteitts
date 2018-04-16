<?php 
    /*
        Template Name: Produto Mostarda
    */

    $GLOBALS['h1'] = "Mostarda Amarela";
    $GLOBALS['isProduto'] = true;

    get_header('about');
?>
<main>
        <p class="produtos-breadcrumb"><span>produtos</span> | <span>Condimentos Especiais</span> | <span>Mostarda Amarela Inttenso foods</span></p>
        <section class="produtos-individual">
            <figure class="produtos-individual-img">
                <img class="produtos-individual-img-prod" src="<?php echo theme_image('produtos/Mostarda 200g.png') ?>" />
                <img class="produtos-individual-img-info" src="<?php echo theme_image('fundo_produto.png') ?>" />
                <p class="produtos-individual-img-txt">
                    <span>Peso Líquido: 200g.</span><br />
                    <span>Validade: VIDE LOTE</span>
                </p>
            </figure>
            <div class="produtos-individual-info">
                <div class="produtos-individual-info-container"> 
                    <h3 class="produtos-individual-info-nome">Mostarda Amarela 200g</h3>
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
                            <td>17 kcal = 71 kJ</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Carboidratos</td>
                            <td>2g</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Proteínas</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Gorduras Totais</td>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Gorduras Saturadas</td>
                            <td>1</td>
                            <td>5</td>
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
                            <td>98mg</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="produtos-individual-info-valores"> * % Valores Diários de referência com base em uma dieta de 2.000kcal ou 8.400kJ. 
                            **Seus valores diários podem ser maiores ou menores dependendo de suas necessidades energéticas.
                            (***) Não contém quantidade significativa deste(s) nutriente(s).
                        </tr>
                    </table>
                    <div class="produtos-individual-ingrediente">
                        <h4 class="produtos-individual-ingrediente-title">Ingredientes:</h4>
                        <p class="produtos-individual-ingrediente-txt"> Água, vinagre, amido, açúcar, sal, mostarda, especiarias, corante amarelo, estabilizante: goma xantana, conservante: benzoato de sódio, sorbato de potássio.
                        Alérgicos: Não contém glúten.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <p class="produtos-individual-modo"><i>Modo de conservação:</i> Conservar em local seco e arejado.  Depois de aberto conservar preferencialmente em geladeira.Válido por 30 dias depois de aberto.</p>
    </main>
    <?php get_footer(); ?>