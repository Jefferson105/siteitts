<?php 
    /*
        Template Name: Produto Template
    */

    $produto = get_field('nome_produto');
    $categoria = get_field('categoria');
    $conservar_tabela_de_produto = get_field('conservar_tabela_de_produto');
    $informacao_nutricional = get_field('informacao_nutricional');
    $valor_energetico = get_field('valor_energetico');
    $carboidratos = get_field('carboidratos');
    $proteinas = get_field('proteinas');
    $gorduras_totais = get_field('gorduras_totais');
    $gorduras_saturadas = get_field('gorduras_saturadas');
    $gorduras_trans = get_field('gorduras_trans');
    $fibra_alimentar = get_field('fibra_alimentar');
    $sodio = get_field('sodio');
    $sodio_vd = get_field('sodio_vd');
    $ingredientes = get_field('ingredientes');
    $modo_de_conservacao = get_field('modo_de_conservacao');
    $imagem_do_produto = get_field('imagem_do_produto');
    $peso_liquido = get_field('peso_liquido');
    $_valores_diarios_de_referencia = get_field('_valores_diarios_de_referencia');
    $validade = get_field('validade');
    $valor_energetico_vd = get_field('valor_energetico_vd');
    $carboidratos_vd = get_field('carboidratos_vd');
    $proteinas_vd = get_field('proteinas_vd');
    $gorduras_totais_vd = get_field('gorduras_totais_vd');
    $gorduras_saturadas_vd = get_field('gorduras_saturadas	vd');
    $gorduras_trans_vd = get_field('gorduras_trans	vd');
    $fibra_alimentar_vd = get_field('fibra_alimentar_vd');
    $peso_do_produto = get_field('peso_do_produto');

    $GLOBALS['h1'] = $produto;
    $GLOBALS['isProduto'] = true;

    get_header('about');
?>
    <?php echo $imagem_do_produto; ?>
    <main>
        <p class="produtos-breadcrumb"><span>produtos</span> | <span><?php echo $categoria; ?></span> | <span><?php echo $produto; ?> Inttenso foods</span></p>
        <section class="produtos-individual">
            <figure class="produtos-individual-img">
                <img class="produtos-individual-img-prod" src="<?php echo theme_image('produtos/condimento_acafrao.png') ?>" />
                <img class="produtos-individual-img-info" src="<?php echo theme_image('fundo_produto.png') ?>" />
                <p class="produtos-individual-img-txt">
                    <span><?php echo $peso_do_produto; ?></span><br />
                    <span><?php echo $validade; ?></span>
                </p>
            </figure>
            <div class="produtos-individual-info">
                <div class="produtos-individual-info-container"> 
                    <h3 class="produtos-individual-info-nome"><?php echo $produto; ?> 80g</h3>
                    <p class="produtos-individual-info-txt"><?php echo $modo_de_conservacao; ?>
                    </p>
                    <table class="produtos-individual-info-table">
                        <caption>
                            <span>Informação nutricional</span>
                            <span><?php echo $informacao_nutricional; ?>
                            </span>
                        </caption>
                        <tr>
                            <th>Quantidade por porção</th>
                            <th></th>
                            <th>%VD*</th>
                        </tr>
                        <tr>
                            <td>Valor energético</td>
                            <td> <?php echo $valor_energetico; ?> </td>
                            <td> <?php echo $valor_energetico_vd; ?></td>
                        </tr>
                        <tr>
                            <td>Carboidratos</td>
                            <td><?php echo $carboidratos; ?></td>
                            <td><?php echo $carboidratos_vd; ?></td>
                        </tr>
                        <tr>
                            <td>Proteínas</td>
                            <td><?php echo $proteinas; ?></td>
                            <td><?php echo $proteinas_vd; ?></td>
                        </tr>
                        <tr>
                            <td>Gorduras Totais</td>
                            <td><?php echo $gorduras_totais; ?></td>
                            <td><?php echo $gorduras_totais_vd; ?></td>
                        </tr>
                        <tr>
                            <td>Gorduras Saturadas</td>
                            <td><?php echo$gorduras_saturadas; ?></td>
                            <td><?php echo$gorduras_saturadas_vd; ?></td>
                        </tr>
                        <tr>
                            <td>Gorduras Trans</td>
                            <td><?php echo $gorduras_trans; ?></td>
                            <td><?php echo $gorduras_trans_vd; ?></td>
                        </tr>
                        <tr>
                            <td>Fibra alimentar</td>
                            <td><?php echo $fibra_alimentar; ?></td>
                            <td><?php echo $fibra_alimentar_vd; ?></td>
                        </tr>
                        <tr>
                            <td>Sódio</td>
                            <td><?php echo $sodio; ?></td>
                            <td><?php echo $sodio_vd; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3" class="produtos-individual-info-valores">  <?php echo $_valores_diarios_de_referencia; ?>
                        </tr>
                    </table>
                    <div class="produtos-individual-ingrediente">
                        <h4 class="produtos-individual-ingrediente-title">Ingredientes:</h4>
                        <p class="produtos-individual-ingrediente-txt">  <?php echo $ingredientes; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <p class="produtos-individual-modo"><i>Modo de conservação:</i>  <?php echo $modo_de_conservacao; ?> </p>
    </main>
    <?php get_footer(); ?>