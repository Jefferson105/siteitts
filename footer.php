<footer class="footer">
    <div class="container footer-main">
        <figure class="footer-logo">
            <img src="<?php echo theme_image('logo.png') ?>">
        </figure>
        <address class="footer-address">
            <h4 class="footer-title">Contato:</h4>
            Rua São Francisco, nº 40<br />
            Bairro Mosenhor Parreiras<br />
            Luz/MG | CEP 35.595-000<br />
            Telefax: (37) 3421-6600<br />
            cafeinttenso@cafeinttenso.com.br
        </address>
        <ul class="footer-menu">
            <li class="footer-menu-tit"><h4 class="footer-title">Menu</h4></li>
            <li class="footer-menu-item"><a href="<?php echo relativeUrl() ?>">Home</a></li>
            <li class="footer-menu-item"><a href="<?php echo relativeUrl('empresa') ?>">Empresa</a></li>
            <li class="footer-menu-item"><a href="<?php echo relativeUrl('produtos') ?>">Produtos</a></li>
            <li class="footer-menu-item"><a href="<?php echo relativeUrl('receitas') ?>">Receitas</a></li>
            <li class="footer-menu-item"><a href="<?php echo relativeUrl('contato') ?>">Fale conosco</a></li>
        </ul>
        <div class="footer-social">
            <h4 class="footer-title">Rede Social</h4>
            <a href="https://www.facebook.com/inttensofoods/" target="_blank"><img class="footer-social-imgFace" src="img/facebook-logo.svg" /></a>
        </div>
    </div>
    <p class="footer-copy">2018 Copyright todos os direitos reservados. Desenvolvido por Unick360</p>
    <?php wp_footer(); ?>
</footer>
</body>
</html>