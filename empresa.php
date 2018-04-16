<?php 
    /*
        Template Name: Empresa
    */

    $GLOBALS['h1'] = "Empresa";
    $GLOBALS['isProduto'] = false;

    get_header('about');
?>
    <main>
        <section class="nossaHistoria">
            <div class="nossaHistoria-hist">
                <h2 class="nossaHistoria-hist-title">Nossa história</h2>
                <h3 class="nossaHistoria-hist-title1">Viva inttensamente esses sabores!</h3>
                <p class="nossaHistoria-hist-txt">O Inttenso Foods nasceu com a missão de proporcionar e agregar valores às experiências culinárias. Com o amor em produzir cafés, decidimos levar mais sabor a tantos lares. Desta forma, o Inttenso Foods produz os mais diversos produtos, buscando novas formas agregar valor as experiências culinárias.</p>
                <p class="nossaHistoria-hist-txt">Seja com os condimentos, molhos, pimentas, encartelados ou temperos, todos os cinco sentidos serão explorados através de sabores e aromas únicos.</p>
                <p class="nossaHistoria-hist-txt">Com produtos fabricados com matérias – primas selecionadas, o Inttenso Foods preocupa-se com o alto padrão, qualificação e segurança na produção de seu mix. Em todos os momentos do seu dia, compartilhe bons momentos, compartilhe Inttenso Foods.</p>
            </div>
            <figure class="nossaHistoria-img">
                <img src="<?php echo theme_image('quemSomos.jpg') ?>" />
            </figure>
        </section>
        <section class="qualidades">
            <div class="container qualidades-container">
                <div class="qualidades-container-item">
                    <H4 class="qualidades-container-item-title">MISSÃO</H4>
                    <p class="qualidades-container-item-txt">Comercializar condimentos, molhos, pimentas, encartelados e temperos, abrangendo e atendendo a vários segmentos alimentícios com qualidade, autenticidade e alto padrão. Ter reconhecimento à nível nacional sobre os excelentes atributos de seus molhos, pimentas, cafés, condimentos, encartelados e temperos. </p>
                </div>
                <div class="qualidades-container-item">
                    <H4 class="qualidades-container-item-title">VISÃO</H4>
                    <p class="qualidades-container-item-txt">Produzir e comercializar os melhores condimentos, molhos, pimentas, encartelados e temperos do mercado, sendo reconhecido pela alta qualidade a comercialização e distribuição de seus produtos em todo o território brasileiro.</p>
                </div>
                <div class="qualidades-container-item">
                    <H4 class="qualidades-container-item-title">VALORES</H4>
                    <p class="qualidades-container-item-txt">Compromisso, Dedicação, Determinação, Diálogo, Integridade, Luta, Motivação, Objetividade, Persistência, Planejamento, Qualificação, Responsabilidade, Resultados, Segurança, Trabalho</p>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>