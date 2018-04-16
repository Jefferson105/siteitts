<?php 
    /*
        Template Name: Receitas
    */

    get_header('receita');
?>
    <section class="receitas">
        <p class="receitas-txt">Sabores surpreendentes, receitas que inspiram! Conheça nossas receitas e descubra novas formas de encantar.</p>
        <section class="receitas-cards">
            <div class="cards">
                <a class="cards-conteudo" href="<?php echo relativeUrl('receita-tomate-recheado') ?>"> 
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/tomate-recheado-p.jpg') ?>" class="cards-conteudo-pratos-comidas" />
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Tomate recheado com muçarela, parmesão e orégano </h3>
                        <p class="cards-conteudo-text-description">Uma entrada simples, rápida e deliciosa para ser servida durante um momento especial!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank">
                            <img src="<?php echo theme_image('face.svg') ?>" class="cards-conteudo-icons-social">
                        </a>
                    </div>
                </a>
            </div>
            <div class="cards">
            <a class="cards-conteudo" href="<?php echo relativeUrl('receita-beijinho') ?>">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/beijinho-p.jpg') ?>" class="cards-conteudo-pratos-comidas">
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Beijinho</h3>
                        <p class="cards-conteudo-text-description">Suas festinhas vão ficar ainda mais doces com essa deliciosa receita de Beijinho!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="<?php echo theme_image('face.svg') ?>" class="cards-conteudo-icons-social"></a>
                    </div>
                </a>
            </div>
            <div class="cards">
            <a class="cards-conteudo" href="<?php echo relativeUrl('receita-strogonoff-carne') ?>">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/strogonoff-carne-p.jpg') ?>" class="cards-conteudo-pratos-comidas">
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Strogonoff de Carne</h3>
                        <p class="cards-conteudo-text-description">Uma deliciosa receita que não deixará sobrar nada!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="<?php echo theme_image('face.svg') ?>" class="cards-conteudo-icons-social"></a>
                    </div>
                </a>
            </div>
            <div class="cards">
            <a class="cards-conteudo" href="<?php echo relativeUrl('receita-guacamole') ?>">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/guacamole-p.jpg') ?>" class="cards-conteudo-pratos-comidas" />
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Guacamole</h3>
                        <p class="cards-conteudo-text-description">Uma receita deliciosa que irá deixar as confraternizações ainda mais divertidas e saborosas!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="<?php echo theme_image('face.svg') ?>" class="cards-conteudo-icons-social"></a>
                    </div>
                </a>
            </div>
            <div class="cards">
            <a class="cards-conteudo" href="<?php echo relativeUrl('receita-molho-pesto') ?>">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/molho-pesto-p.jpg') ?>" class="cards-conteudo-pratos-comidas" />
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Molho Pesto</h3>
                        <p class="cards-conteudo-text-description">O molho Pesto não combina apenas com salada caprese, e sim com muitas outras! Confira a nossa receita e leve mais esse sabor para o seu dia a dia!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="<?php echo theme_image('face.svg') ?>'" class="cards-conteudo-icons-social"></a>
                    </div>
                </a>
            </div>
            <div class="cards">
            <a class="cards-conteudo" href="<?php echo relativeUrl('receita-bolo-laranja-camomila') ?>">
                    <figure class="cards-conteudo-pratos">
                        <img src="<?php echo theme_image('receitas/bolo-laranja-camomila-p.jpg') ?>" class="cards-conteudo-pratos-comidas" />
                    </figure>
                    <div class="cards-conteudo-text">
                        <h3 class="cards-conteudo-text-title">Bolo de Laranja com Camomila</h3>
                        <p class="cards-conteudo-text-description">Um delicioso bolo, simples de ser feito, que deixará o seu lanche ainda mais gostoso!</p>
                        <a class="cards-conteudo-icons" href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="<?php echo theme_image('face.svg') ?>" class="cards-conteudo-icons-social"></a>
                    </div>
                </a>
            </div>
        </section>
        <ul class="receitas-paginator">
            <li class="receitas-paginator-item active">1</li>
            <!--<li class="receitas-paginator-item">2</li>
            <li class="receitas-paginator-item">3</li>
            <li class="receitas-paginator-item">(...)</li>-->
        </ul>
    </section>
    <?php get_footer(); ?>