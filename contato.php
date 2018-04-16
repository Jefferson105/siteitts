<?php 
    /*
        Template Name: Contato
    */

    $GLOBALS['h1'] = "Fale Conosco";
    $GLOBALS['isProduto'] = false;

    get_header('about');

    $frase = get_field("frase_fale_conosco");
?>
    <main class="contato">
        <p class="contato-txt"><?php echo $frase ?></p>
        <form class="contato-form">
            <input type="text" class="contato-form-input contato-form-input-100" placeholder="NOME" />
            <input type="text" class="contato-form-input contato-form-input-50" placeholder="EMAIL" />
            <input type="text" class="contato-form-input contato-form-input-50 input-telefone" placeholder="TELEFONE" />
            <input type="text" class="contato-form-input contato-form-input-100" placeholder="ASSUNTO" />
            <textarea class="contato-form-input contato-form-input-text" placeholder="MENSAGEM"></textarea>
            <button class="contato-form-button">Enviar mensagem</button>
        </form>
        <figure class="contato-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15004.734181390491!2d-43.95233645787379!3d-19.916668774690667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbr!4v1521997922364" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </figure>
    </main>

<?php get_footer(); ?>