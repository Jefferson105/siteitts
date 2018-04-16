<?php 
    /*
        Template Name: Produtos
    */

    $GLOBALS['h1'] = "Produtos";
    $GLOBALS['isProduto'] = true;

    get_header('about');

    $text = get_field("texto");
    $categorias = get_field("categorias");
?>
    <main>
        <p class="produtos-txt"><?php echo $text; ?></p>
        <ul class="produtos-list">
            <?php foreach($categorias as $categoria) { ?>
                <li class="produtos-list-item">
                    <a class="produtos-list-item-link"  href="<?php echo $categoria["link"]; ?>">
                        <figure class="produtos-list-item-container">
                            <img src="<?php echo $categoria["imagem_produto"]; ?>" alt="" class="produtos-list-item-img">
                            <figcaption class="produtos-list-item-caption"><?php echo $categoria["nome_categoria"]; ?></figcaption>
                        </figure>
                    </a>             
                </li>
            <?php } ?>
        </ul>
    </main>
    <?php get_footer(); ?>