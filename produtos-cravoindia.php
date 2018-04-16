<?php 
    /*
        Template Name: Produto Cravo India
    */

    $GLOBALS['h1'] = "Cravo da Índia";
    $GLOBALS['isProduto'] = true;

    get_header('about');
?>
<main>
        <p class="produtos-breadcrumb"><span>produtos</span> | <span>Condimentos</span> | <span>CRAVO DA ÍNDIA Inttenso foods</span></p>
        <section class="produtos-individual">
            <figure class="produtos-individual-img">
                <img class="produtos-individual-img-prod" src="<?php echo theme_image('produtos/condimento_cravo_india.png') ?>" />
                <img class="produtos-individual-img-info" src="<?php echo theme_image('fundo_produto.png') ?>" />
                <p class="produtos-individual-img-txt">
                    <span>Peso Líquido:35g.</span><br />
                    <span>Validade: VIDE LOTE</span>
                </p>
            </figure>
            <div class="produtos-individual-info">
                <div class="produtos-individual-info-container"> 
                    <h3 class="produtos-individual-info-nome">CRAVO DA ÍNDIA 35g</h3>
                    <p class="produtos-individual-info-txt">Conservar em local seco e arejado. Depois de aberto conservar preferencialmente
                    em geladeira. Válido por 30 dias depois de aberto.
                    </p>
                    <table class="produtos-individual-info-table">
                        <caption>
                            <span>Informação nutricional</span>
                            <span>Porção de 1 g (1 colher de chá)
                            </span>
                        </caption>
                        <tr>
                            <th>Quantidade por porção</th>
                            <th></th>
                            <th>%VD*</th>
                        </tr>
                        <tr>
                            <td>Valor energético</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Carboidratos</td>
                            <td>menor que 1g</td>
                            <td>0</td>
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
                            <td>214mg</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="produtos-individual-info-valores"> * % Valores Diários de referência com base em uma dieta de 2.000kcal ou 8.400kJ. 
                            **Seus valores diários podem ser maiores ou menores dependendo de suas necessidades energéticas.
                            (***) Não contém quantidade significativa deste(s) nutriente(s). 
                        </tr>
                    </table>
                    <div class="produtos-individual-ingrediente">
                        <h4 class="produtos-individual-ingrediente-title">Ingredientes:</h4>
                        <p class="produtos-individual-ingrediente-txt">: Cravo da índia em grãos. Alérgicos: Não contém glúten.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <p class="produtos-individual-modo"><i>Modo de conservação:</i> Conservar em local seco e arejado.  Depois de aberto conservar preferencialmente em geladeira.Válido por 30 dias depois de aberto.</p>
    </main>
    <?php get_footer(); ?>