<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inttenso Foods</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header class="header">
        <nav class="header-menu home">
            <ul class="header-menu-list">
                <li class="header-menu-list-item"><a href="empresa.php">Empresa</a></li>
                <li class="header-menu-list-item"><a href="produtos.php">Produtos</a></li>
                <li class="header-menu-list-item logo"><a href="index.php"><img src="img/logo.png" /></a></li>
                <li class="header-menu-list-item"><a href="receitas.php">Receitas</a></li>
                <li class="header-menu-list-item"><a href="contato.php">Fale conosco</a></li>
            </ul>
        </nav>
        <nav class="header-slide slide container">
            <button class="header-slide-button slide-button" id="left-slide">
                <img src="img/left-arrow.svg" />
            </button>
            <ul class="header-slide-list slide-list" id="slide-header">
                <li class="header-slide-list-item">
                    <div class="header-slide-list-item-content main-slide">
                        <p class="main-slide-frases">
                            <span class="main-slide-frases-1">Com você e sua família nos melhores momentos</span>
                            <span class="main-slide-frases-2">Conheça todas as nossas linhas</span>
                        </p>
                        <img class="main-slide-img" src="img/inttenso_prod.png" />
                    </div>
                </li>
                <li class="header-slide-list-item">
                    <div class="header-slide-list-item-content main-slide">
                        <p class="main-slide-frases">
                            <span class="main-slide-frases-1">O sabor que faltava na mesa</span>
                            <span class="main-slide-frases-2">Conheça todas as nossas linhas</span>
                        </p>
                        <img class="main-slide-img" src="img/inttenso_prod.png" />
                    </div>
                </li>
                <li class="header-slide-list-item">
                    <div class="header-slide-list-item-content main-slide">
                        <p class="main-slide-frases">
                            <span class="main-slide-frases-1">Pimentinha, pimenta ou pimentão?</span>
                            <span class="main-slide-frases-2">Conheça nosso mix de pimentas!</span>
                        </p>
                        <img class="main-slide-img" src="img/inttenso_prod.png" />
                    </div>
                </li>
            </ul>
            <button class="header-slide-button slide-button" id="right-slide">
                <img src="img/right-arrow.svg" />
            </button>
        </nav>
        <figure class="header-banner">
            <img id="banner-slider" src="img/fundo_slide0.jpg" />
            <img class="header-banner-leaves" src="img/header4.png" />
        </figure>
        <figure class="header-bottom">
            <img src="img/header1.png" />
        </figure>
    </header>
    <main>
        <section class="historia">
            <div class="historia-msg">
                <h3 class="historia-msg-tit1">Conheça a nossa história</h3>
                <h2 class="historia-msg-tit2">Quem somos</h2>
                <br/>
                <p class="historia-msg-txt">O Inttenso Foods nasceu com a missão de proporcionar e agregar valores às experiências culinárias. Com o amor em produzir cafés, decidimos levar mais sabor a tantos lares. Desta forma, o Inttenso Foods produz os mais diversos produtos, buscando novas formas agregar valor as experiências culinárias.
                    <br/>
                    <br/>
                Seja com os condimentos, molhos, pimentas, encartelados ou temperos, todos os cinco sentidos serão explorados através de sabores e aromas únicos. </p>
                <br/>
                <a class="historia-msg-button" href="empresa.php">Saiba Mais</a>
            </div>
            <figure class="historia-group">
                <!--<img class="historia-group-img historia-group-img-1" src="img/cafe1.png" />
                <img class="historia-group-img historia-group-img-2" src="img/cafe2.png" />
                <img class="historia-group-img historia-group-img-3" src="img/cafe3.png" />-->
                <img class="historia-group-img" src="img/quemSomos.jpg" />
            </figure>
        </section>
        <section class="produtos">
            <div class="container">
                <h2 class="produtos-title">Produtos</h2>
                <nav class="produtos-slide slide">
                    <button class="produtos-slide-button slide-button">
                        <img src="img/left-arrow.svg" />
                    </button>
                    <ul class="produtos-slide-list slide-list">
                        <li class="produtos-slide-list-item">
                            <figure class="produtos-slide-list-item-container">
                                <img class="produtos-slide-list-item-container-img" alt="Ketchup 370ml" src="img/ketchup_370ml.png">
                                <figcaption class="produtos-slide-list-item-container-caption">Ketchup 370ml</figcaption>
                            </figure>
                        </li>
                        <li class="produtos-slide-list-item">
                            <figcaption class="produtos-slide-list-item-container">
                                <img src="img/pimenta_biquinho.png" alt="Pimenta biquinho" class="produtos-slide-list-item-container-img">
                                <figcaption class="produtos-slide-list-item-container-caption">Pimenta biquinho 60ml</figcaption>
                            </figcaption>
                        </li>
                        <li class="produtos-slide-list-item">
                            <figcaption class="produtos-slide-list-item-container">
                                <img src="img/pasta_alho.png" alt="Pasta de alho" class="produtos-slide-list-item-container-img">
                                <figcaption class="produtos-slide-list-item-container-caption">Pasta de alho 500g</figcaption>
                            </figcaption>
                        </li>
                        <li class="produtos-slide-list-item">
                            <figcaption class="produtos-slide-list-item-container">
                                <img src="img/pimenta_marela.png" alt="Pimenta amarela" class="produtos-slide-list-item-container-img">
                                <figcaption class="produtos-slide-list-item-container-caption">Pimenta cumarim 180g</figcaption>
                            </figcaption>
                        </li>
                    </ul>
                    <button class="produtos-slide-button slide-button">
                        <img src="img/right-arrow.svg" />
                    </button>
                </nav>
            </div>
        </section>
        <section class="receitas">
            <h2 class="receitas-titulo">Receitas</h2>
            <img class="receitas-imgtitle" src="img/receita.png" />
            <P class="receitas-txt">Confira nossas receitas e surpreenda-se com os sabores!</P>
            <section class="receitas-cards">
                <a href="receita-individual.php" class="cards">
                    <div class="cards-conteudo">
                        <figcaption class="cards-conteudo-pratos">
                            <img src="img/macarrao.jpg" class="cards-conteudo-pratos-comidas">
                        </figcaption>
                        <div class="cards-conteudo-text">
                            <h3 class="cards-conteudo-text-title">LOREM IPSUM DOLOR</h3>
                            <P class="cards-conteudo-text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit.  
                            </P>
                        </div>
                        <figcaption class="cards-conteudo-icons">
                            <a href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="img/face.svg" class="cards-conteudo-icons-social"></a>
                        </figcaption>
                    </div>
                </a>
                <a href="receita-individual.php" class="cards">
                    <div class="cards-conteudo">
                        <figcaption class="cards-conteudo-pratos">
                            <img src="img/carne.jpg" class="cards-conteudo-pratos-comidas">
                        </figcaption>
                        <div class="cards-conteudo-text">
                            <h3 class="cards-conteudo-text-title">LOREM IPSUM DOLOR</h3>
                            <P class="cards-conteudo-text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit.   
                            </P>
                        </div>
                        <figcaption class="cards-conteudo-icons">
                            <a href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="img/face.svg" class="cards-conteudo-icons-social"></a>
                        </figcaption>
                    </div>
                </a>
                <a href="receita-individual.php" class="cards">
                    <div class="cards-conteudo">
                        <figcaption class="cards-conteudo-pratos">
                            <a href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="img/salada.jpg" class="cards-conteudo-pratos-comidas"></a>
                        </figcaption>
                        <div class="cards-conteudo-text">
                            <h3 class="cards-conteudo-text-title">LOREM IPSUM DOLOR</h3>
                            <p class="cards-conteudo-text-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit consectetur adipiscing elit.  
                            </p>
                        </div>
                        <figcaption class="cards-conteudo-icons">
                            <a href="https://www.facebook.com/inttensofoods/" target="_blank"><img src="img/face.svg" class="cards-conteudo-icons-social"></a>
                        </figcaption>
                    </div>
                </a>
            </section>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer-main">
            <figure class="footer-logo">
                <img src="img/logo.png">
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
                <li class="footer-menu-item"><a href="index.php">Home</a></li>
                <li class="footer-menu-item"><a href="empresa.php">Empresa</a></li>
                <li class="footer-menu-item"><a href="produtos.php">Produtos</a></li>
                <li class="footer-menu-item"><a href="receitas.php">Receitas</a></li>
                <li class="footer-menu-item"><a href="contato.php">Fale conosco</a></li>
            </ul>
            <div class="footer-social">
                <h4 class="footer-title">Rede Social</h4>
                <a href="https://www.facebook.com/inttensofoods/" target="_blank"><img class="footer-social-imgFace" src="img/facebook-logo.svg" /></a>
            </div>
        </div>
        <p class="footer-copy">2018 Copyright todos os direitos reservados. Desenvolvido por Unick360</p>
    </footer>
</body>
</html>