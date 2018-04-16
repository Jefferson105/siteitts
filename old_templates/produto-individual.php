<?php 
    /*
        Template Name: Produto Individual
    */

    get_header('about');
?>
    <main>
        <p class="produtos-breadcrumb"><span>produtos</span> | <span>Molhos</span> | <span>Tomate seco inttenso foods</span></p>
        <section class="produtos-individual">
            <figure class="produtos-individual-img">
                <img class="produtos-individual-img-prod" src="<?php echo theme_image('tomate-seco.png') ?>" />
                <img class="produtos-individual-img-info" src="<?php echo theme_image('fundo_produto.png') ?>" />
                <p class="produtos-individual-img-txt">
                    <span>Peso Líquido: 180g</span><br />
                    <span>Validade: VIDE LOTE</span>
                </p>
            </figure>
            <div class="produtos-individual-info">
                <div class="produtos-individual-info-container"> 
                    <h3 class="produtos-individual-info-nome">Tomate Seco Inttenso foods</h3>
                    <p class="produtos-individual-info-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit.</p>
                    <table class="produtos-individual-info-table">
                        <caption>
                            <span>Informação nutricional</span>
                            <span>Porção de 30g (2 fatias)</span>
                        </caption>
                        <tr>
                            <th>Quantidade por porção</th>
                            <th></th>
                            <th>%VD*</th>
                        </tr>
                        <tr>
                            <td>Valor energético</td>
                            <td>130 kcal = 469 KJ</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>Carboidratos</td>
                            <td>1,0 g</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Proteínas</td>
                            <td>7,0g</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>Gorduras Totais</td>
                            <td>9,0 g</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <td>Gorduras Saturadas</td>
                            <td>5,8 g</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>Gorduras Trans</td>
                            <td>0 g</td>
                            <td>**</td>
                        </tr>
                        <tr>
                            <td>Fibra alimentar</td>
                            <td>0 g</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>Sódio</td>
                            <td>160 mg</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="produtos-individual-info-valores">(*) % Valores diários de referência com base em uma dieta de 2000 kcal ou 8400 kj. Seus valores diários podem ser maiores ou menores, dependendo de suas necessidades energéticas.</td>
                        </tr>
                    </table>
                    <div class="produtos-individual-ingrediente">
                        <h4 class="produtos-individual-ingrediente-title">Ingredientes:</h4>
                        <p class="produtos-individual-ingrediente-txt">Após aberto, guarde o pacote em um recipiente fechado dentro da geladeira, para preservar o sabor e o aroma do café. Consumir preferencialmente em 30 dias.</p>
                    </div>
                </div>
            </div>
        </section>
        <p class="produtos-individual-modo"><i>Modo de conservação:</i> Após aberto, guarde o pacote em um recipiente fechado dentro da geladeira, para preservar o sabor e o aroma do café. Consumir preferencialmente em 30 dias.</p>
    </main>
    <?php get_footer(); ?>