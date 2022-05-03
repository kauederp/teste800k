<?php





$s = isset($_GET["S"]) ? $_GET["S"] : '';
$s = isset($_GET["s"]) ? $_GET["s"] : $s;
$src = isset($_GET["src"]) ? $_GET["src"] : $s;
$f = isset($_GET["f"]) ? $_GET["f"] : '';
$fbid = isset($_GET["fbid"]) ? $_GET["fbid"] : $f;

// Kit Único Apenas 1 Unidade
$kit1 = "https://paybuy.digital/checkout/ZDJVQM?p=cb&utm_source=$src";

// Kit 2 Lanternas + 1 Grátis
$kit2 = "https://paybuy.digital/checkout/NMEGFV?p=cb&utm_source=$src";

// Kit 3 Lanternas + 2 Grátis
$kit3 = "https://paybuy.digital/checkout/YVPNCW?p=cb&utm_source=$src";

// Kit 1 Lanterna + Machadinha
$kitM = "https://paybuy.digital/checkout/HNOKAD?p=cb&utm_source=$src";

$link = $kit2;
$back = $kit2;

if (isset($_GET['c'])) {
    $url = "https://paybuy.digital/api/check/sms/?r=0&" . $_SERVER['QUERY_STRING'];
    $json = file_get_contents($url);
    $data = json_decode($json, TRUE);
}

/*
include 'Mobile_Detect.php';
$detect = new Mobile_Detect;

// Cloaking
if(!$detect->isMobile()) {
require_once "cloakingPesca.php";
}
*/
date_default_timezone_set("Brazil/East");

//include("../functions.php");

$vIP = $_SERVER['REMOTE_ADDR'];

if (getenv('HTTP_X_FORWARDED_FOR') != "") {
    $ar = explode(',', getenv('HTTP_X_FORWARDED_FOR'));
    $vIP = $ar[0];
}

$url = "http://api.db-ip.com/v2/8abae51ecb0bd41e76187d401455692b330bf1b3/" . $vIP;

$json = file_get_contents($url);
$data = json_decode($json, TRUE);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="description" content="Eleita a melhor lanterna tática de uso militar do mundo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanterna X900 - Lanterna Tática Militar</title>
    <!--  PLAYER    -->
    <link rel="stylesheet" ref="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.9/plyr.min.css"
          integrity="sha512-9NS6wyLGVddfu8MvjH2muvHT+3lPxYifn5SDMigU+cgsQY91MTP72x8OpbnK9ucbjfZc6TMP3hajTCFrvFWxxg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <style>
        .plyr {
            border: 2px solid #ff7800;
            border-radius: 10px;
        }

        .plyr iframe {
            transition: 0.2s filter linear;
        }

        .plyr.plyr--paused iframe {
            filter: invert(1) blur(1.5rem);
        }

        .plyr__control--overlaid {
            filter: invert(1);
        }
    </style>

    <!-- FAVICON -->
    <link rel="shortcut icon" ref="https://lanternasfx.com/assets/img/favicon.png" type="image/x-icon">
    <link rel="icon" ref="https://lanternasfx.com/assets/img/favicon.png" type="image/x-icon">

    <!-- META TAGS -->
    <meta itemprop="name" content="Lanterna X900 - Lanterna Tática Militar">
    <meta itemprop="description" content="Eleita a melhor lanterna tática de uso militar do mundo">
    <meta itemprop="url" content="https://lanternasfx.com">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Lanterna X900 - Lanterna Tática Militar">
    <meta property="og:description" content="Eleita a melhor lanterna tática de uso militar do mundo">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:updated_time" content="updatedtime">
    <meta property="og:locale" content="en_GB">
    <meta property="og:url" content="https://lanternasfx.com">
    <meta property="og:site_name" content="Lanterna X900 - Lanterna Tática Militar">
    <meta property="og:locale" content="pt_BR">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="https://lanternasfx.com">
    <meta property="twitter:title" content="Lanterna X900 - Lanterna Tática Militar">
    <meta property="twitter:description" content="Eleita a melhor lanterna tática de uso militar do mundo">
    <meta property="twitter:url" content="https://lanternasfx.com">

    <!-- RESET -->
    <link rel="stylesheet" ref="./files/css/reset.css?cache=33">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" ref="./files/css/bootstrap.min.css">
    <!-- CSS only -->
    <link ref="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- MAIN -->
    <link rel="stylesheet" ref="./files/css/main.css?cache=33">
    <!-- AOS -->
    <link rel="stylesheet" ref="./files/css/aos.css?cache=33">
    <!-- FONT-AWESOME -->
    <script src="https://kit.fontawesome.com/d3837766cc.js" crossorigin="anonymous"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" ref="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- Demo styles -->
    <style>
        .swiper {
            width: 1000%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 1000%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body cz-shortcut-listen="true">
<header>
    <div class="container">
        <div class="row">
            <div class="col my-auto">
                <img src="./files/img/logo.webp" class="img-fluid" alt="Actual Produtos">
            </div>
        </div>
    </div>
</header>
<section class="aviso">
    <div class="container">
        <div class="row text-center">
            <p style="margin: 0;"><strong>Atenção:</strong> Devido a popularidade da <b>Lanterna X900</b>, temos uma
                quantidade limitada de lanternas <strong> EM ESTOQUE </strong> com envio imediato, <strong>HOJE
                    27/10/2021</strong>.
            </p>
        </div>
    </div>
</section>
<!-- HOME -->
<section class="home">
    <div class="container">
        <h1 class="headline text-center">A lanterna mais <BRR><span>utilizada no mundo</span></h1>
        <p class="text-center"><b>OFERTA POR TEMPO LIMITADO:</b> <BRR> Você ganhou até <b>29% de desconto</b> e <b>1
                BRINDE GRÁTIS</b> na <b>Lanterna X900</b> (vendida normalmente por R$207,09).</p>
        <p class="text-center">Válido somente enquanto durar o estoque</p>
        <div class="row">
            <style>
                     .img-ss img{
                         min-height: 400px;
                     }                                          
            </style>
            <div class="col-md-6 my-auto text-center">
                <!-- ================ SWIPER VARIABLE SLIDER =================  -->
                <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-459a39dd109fb118f" aria-live="off" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 350px; margin-right: 30px;">
                            <img src="./files/img/produto.png?cache=3" class="img-fluid produto " alt="">
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 350px; margin-right: 30px;">
                            <img src="./files/img/depo1.jpg?cache=3" class="img-fluid produto" alt="">
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 350px; margin-right: 30px;">
                            <img src="./files/img/bx900.jpg?cache=3" class="img-fluid produto img-ss" alt="">
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 350px; margin-right: 30px;">
                            <img src="./files/img/depo6.jpg?cache=3" class="img-fluid produto img-ss"  alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-459a39dd109fb118f" aria-disabled="false"></div>
                    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-459a39dd109fb118f" aria-disabled="true"></div>
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>

            </div>
            <div class="col-md-6 my-auto">
                <div class="topicos p-2">
                    <p>Resistente ao impacto</p>
                    <p>À Prova d'Água</p>
                    <p>Feita com alumínio utilizado em Aeronaves</p>
                    <p>Lâmpada de 100 mil horas de vida-útil</p>
                    <p>Com adaptador a baterias recarregáveis</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="p-3">
                    <a ref="#checkout" target="_self"
                       class="btn-chamada smoth-scroll margin-auto pulse">
                        <i class="fas fa-check-double"></i> COMPRAR AGORA <BRR>
                        <span>
                                Satisfação garantida ou seu dinheiro de volta!
                            </span>
                    </a>
                    <img src="./files/img/compra-segura-black.png" class="img-fluid img-selo" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COMO FUNCIONA -->
<section class="como-funciona section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="headline theme-color">CONHEÇA A <span>LEGÍTIMA LANTERNA X900</span></h1>
                <p>A Lanterna Tática X900 foi construída por especialistas em artefatos militares. Você só encontrará
                    estas tecnologias na X900! Nenhuma outra lanterna foi capaz de replicar seus feitos. As maiores
                    autoridades em segurança utilizam a nossa tecnologia por ser <strong>Única, Incrível e
                        Poderosa.</strong></p>
                <div class="plyr__video-embed" id="player">
                    <iframe
                            src="https://www.youtube.com/embed/uNOeqwLjLYE"
                            allowfullscreen
                            allowtransparency
                            allow="autoplay"
                    ></iframe>
                </div>
            </div>
            <div class="col-lg-6 my-auto text-center">
                <div class="produto">
                    <img src="./files/img/lanterna-detalhers.png" class="img-fluid" alt="">
                </div>
                <div class="p-3">
                    <a ref="#checkout" target="_self"
                       class="btn-chamada smoth-scroll margin-auto pulse">
                        <i class="fas fa-check-double"></i> COMPRAR AGORA <BRR>
                        <span>
                                Satisfação garantida ou seu dinheiro de volta!
                            </span>
                    </a>
                    <img src="./files/img/compra-segura-black.png" class="img-fluid img-selo" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ESPECIALISTA -->

<section class="especialista section-padding">
    <div class="container">
        <h1 class="headline text-center theme-color">TECNOLOGIA DE PONTA <span>NA SUA MÃO!</span></h1>
        <div class="row">
            <div class="col-lg-5 my-auto">
                <img src="./files/img/especialista.png" class="img-fluid medico" alt="">
            </div>
            <div class="col-lg-7 my-auto">
                <p>
                    A Lanterna X900 é o resultado da união dos mais novos materiais e das mais modernas tecnologias de
                    iluminação. Você só encontra isto na X900 e em nenhuma outra. A X900 é conhecida no mundo todo por
                    ser o equipamento básico em todas as operações das forças especiais, pois ela é compacta e muito
                    forte.
                    <BRR><BRR>
                    Com o Feixe de Foco Ajustável/Zoom de 1-2000x, a Lanterna Tática Militar X900 tem um alcance
                    incrível. Além disso, sua potente Lâmpada LED tem potência de 800 lúmens e duração de 100,000 horas,
                    além de ser resistente a água.
                    <BRR><BRR>
                    Tudo isso faz com que a Lanterna X900 seja ideal para os amantes da caça, pesca e acampamento,
                    aqueles que trabalham com segurança pública e privada ou simplesmente pessoas que desejam se sentir
                    mais seguras.
                </p>

                <div class="text-center">
                    <div class="p-3">
                        <a ref="#checkout" target="_self"
                           class="btn-chamada smoth-scroll margin-auto pulse">
                            <i class="fas fa-check-double"></i> ENCOMENDAR AGORA <BRR>
                            <span>
                                    Satisfação garantida ou seu dinheiro de volta!
                                </span>
                        </a>
                        <img src="./files/img/compra-segura-black.png" class="img-fluid img-selo" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- BENEFICIOS -->
<section class="beneficios section-padding">
    <div class="container">
        <h1 class="headline text-center">Então, o que torna a <span>Lanterna X900 tão boa?</span></h1>
        <div class="row pt-3">
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./files/img/beneficio-1.png" class="img-fluid img-beneficio" alt="">
                <h3>Resistente ao impactos</h3>
                <p>Devido a sua construção robusta, que coloca a X900 entre as melhores do mundo, é impossível
                    destruí-la! Nem passando com um tanque de guerra por cima!</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./files/img/beneficio-2.png" class="img-fluid img-beneficio" alt="">
                <h3>À Prova d'Água</h3>
                <p>A X900 tem sua construção totalmente vedada, podendo ficar submersa sem afetar seu funcionamento.</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <img src="./files/img/beneficio-3.png" class="img-fluid img-beneficio" alt="">
                <h3>Feita com Alumínio utilizado em Aeronaves</h3>
                <p>A Lanterna X900 é fabricada com os melhores materiais, sendo a liga de alumínio sua principal
                    matéria-prima, a mesma que é utilizada em aviões. Isso que torna a Lanterna X900 indestrutível!</p>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
                <img src="./files/img/beneficio-4.png" class="img-fluid img-beneficio" alt="">
                <h3>Modos de luz</h3>
                <p>Com 5 modos de luz diferentes, fique preparado para qualquer situação. Você está no controle, escolha
                    o melhor modo para sua situação e não fique no escuro.</p>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
                <img src="./files/img/beneficio-5.png" class="img-fluid img-beneficio" alt="">
                <h3>Lâmpada de 100 mil horas de vida-útil</h3>
                <p>A Lanterna X900 conta com o incrível LED XPE. Esse LED especial consegue uma iluminação de 800
                    lúmens, e uma vida-útil de 100 mil horas, você nunca mais precisará de comprar outra lanterna!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="p-3">
                    <a ref="#kits" class="btn-chamada smoth-scroll margin-auto pulse">
                        <i class="fas fa-check-double"></i> Quero comprar <BRR>
                        <span>
                                Satisfação garantida ou seu dinheiro de volta!
                            </span>
                    </a>
                    <img src="./files/img/compra-segura.png" class="img-fluid img-selo" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- DEPOIMENTOS -->
<section class="depoimentos section-padding">
    <div class="container">
        <h1 class="headline theme-color text-center">QUEM COMPROU, USOU E <span>APROVOU!</span></h1>
        <p class="text-center">Atualmente, mais de 38 mil pessoas já possuem a Lanterna X900 no Brasil. Importada dos
            Estados Unidos, está fazendo tanto sucesso que nosso estoque dura por poucas horas.</p>
        <div class="row text-center pt-3">
            <div class="col-12">
                <div class="row justify-content-center">
                    <!-- =================== SWIPER  =================== -->
                    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-459a39dd109fb118f" aria-live="off" style="transition-duration: 300ms; transform: translate3d(0px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 350px; margin-right: 30px;">
                                <img src="files/img/depoimento-1.jpg">
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" style="width: 350px; margin-right: 30px;">
                                <img src="files/img/depoimento-2.jpg">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 4" style="width: 350px; margin-right: 30px;">
                                <img src="files/img/depoimento-4.jpg">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 350px; margin-right: 30px;">
                                <img src="files/img/depoimento-3.jpg">
                            </div>
                        </div>
                        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-459a39dd109fb118f" aria-disabled="false"></div>
                        <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-459a39dd109fb118f" aria-disabled="true"></div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FRETE GRÁTIS -->
<section class="frete-gratis">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-7 my-auto">
                <h1 class="headline"><i class="fas fa-shipping-fast pr-3"></i>O ENVIO É <span>IMEDIATO!</span></h1>
            </div>
            <div class="col-lg-5">
                <p>O Envio é <strong>IMEDIATO</strong> para todos estados do Brasil! O prazo para entrega é na média de
                    3 a 12 dias úteis com código de rastreamento. </p><BRR>
                <p>Temos a Lanterna X900 a <strong>PRONTA-ENTREGA</strong> no Brasil, o envio é imediato após a
                    confirmação de seu pedido!</p>
            </div>
        </div>
    </div>
</section>

<!-- GARANTIA -->

<section class="garantia section-padding">
    <div class="container">
        <h1 class="headline text-center">SATISFAÇÃO GARANTIDA OU<BRR><span>SEU DINHEIRO DE VOLTA!</span></h1>
        <div class="row">
            <div class="col-md-4 mx-auto text-center">
                <img src="./files/img/garantia.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-8 my-auto">
                <p>Garantimos a entrega da sua lanterna, assim como a qualidade da lanterna. Se você verificou que
                    existe algum defeito de fabricação, nós asseguramos seu direito de troca ou devolução do
                    produto.</p>
                <p>VOCÊ TERÁ ATÉ 7 DIAS APÓS A COMPRA PARA DEVOLUÇÃO. SEU RISCO POR TESTAR A X900 É ZERO!</p>
                <p>Não tem enrolação, é só nos enviar uma mensagem pelo Whatsapp que faremos a devolução!</p>
                <p class="uso">*Conforme nossos termos e políticas</p>
                <div class="text-center p-3">
                    <a ref="#kits" class="btn-chamada smoth-scroll margin-auto pulse">
                        <i class="fas fa-check-double"></i> COMPRAR COM GARANTIA <BRR>
                        <span>
                                Satisfação garantida ou seu dinheiro de volta!
                            </span>
                    </a>
                    <img src="./files/img/compra-segura.png" class="img-fluid img-selo" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="seguro section-padding">
    <div class="container">
        <h1 class="headline text-center theme-color">NÃO ESTÁ ACOSTUMADO <BRR>A COMPRAR <span>PELA INTERNET?</span></h1>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="item">
                    <img src="./files/img/confiavel.png" class="img-fluid" alt="">
                    <p>
                        Seus dados pessoais são <BRR>
                        <strong> 100% Sigilosos</strong>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="item">
                    <img src="./files/img/confiavel-2.png" class="img-fluid" alt="">
                    <p>
                        Pague com cartão <BRR>
                        <strong>em até 12x</strong>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="item">
                    <img src="./files/img/confiavel-3.png" class="img-fluid" alt="">
                    <p>
                        <strong>Site Seguro e Autenticado</strong>, pode confiar.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 text-center">
                <div class="item">
                    <img src="./files/img/confiavel-4.png" class="img-fluid" alt="">
                    <p>
                        Entrega para todo Brasil de <BRR>
                        <strong>3 a 15 dias úteis</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CHECKOUTS -->
<section id="checkout" class="checkouts section-padding">
    <div class="container">
        <h1 class="headline text-center theme-color">GARANTA A <span>SUA!</span></h1>
        <p class="text-center">
            SÃO MAIS DE <strong> 10 MIL LANTERNAS VENDIDAS</strong> MENSALMENTE! DEVIDO À ALTA DEMANDA QUE A INCRÍVEL
            LANTERNA ESTÁ TENDO, NÓS ALERTAMOS QUE NOSSO ESTOQUE PODE ACABAR A QUALQUER MOMENTO!
        </p>
        <div id="">
            <div class="desktop">
                <div class="row">
                    <div class="col-md" style="padding: 5px">
                        <a ref="<?php echo($kit3) ?>">
                            <img src="files/img/kit5-desk.png?cache=3"
                                 style="margin-top: 5px;width: 95% !important; max-width: 100% !important; margin: 0 auto;display: flex">
                        </a>
                    </div>
                    <div class="col-md" style="padding: 5px">
                        <a ref="<?php echo($kit2) ?>">
                            <img class="btn-pulse" width="100%" src="files/img/kit3-desk.png?cache=3"
                                 style="box-shadow: 0 0 5px #9dff0078, 0 0 25px #ecfc117a, 0 0 50px #ecfc11b3, 0 0 100px #ecfc1147;width: 100% !important; max-width: 100% !important; margin: 0 auto;display: flex">
                        </a>
                    </div>
                    <div class="col-md" style="padding: 5px">
                        <a ref="<?php echo($kit1) ?>">
                            <img width="100%" src="files/img/kit1-desk.png?cache=32"
                                 style="    margin: 0 auto; width: 95% !important; max-width: 100% !important;display: flex">
                        </a>
                    </div>
                </div>
                <BRR><BRR>
                <div style="width: 100%">
                    <a ref="<?php echo($kitM) ?>"><img class="btn-pulse" width="100%"
                                                        src="files/img/machadinha.png?cache=323"
                                                        style="box-shadow: 0 0 5px #9dff0078, 0 0 25px #ecfc117a, 0 0 50px #ecfc11b3, 0 0 100px #ecfc1147;    margin-top: 0;width: 100% !important; max-width: 100% !important;"/></a>
                </div>
            </div>
            <div class="mobile">
                <div class="row">
                    <div class="col-md-4" style="margin-bottom: 5px">
                        <a ref="<?php echo($kit3) ?>">
                            <img width="100%" src="files/img/kit5-mobile.png?cache=63"
                                 style="width: 85%;margin: 0 auto;display: flex">
                        </a>
                    </div>
                    <div style="display: block;    text-align: center;width: 1000%;">
                        <div style="width: 100%    ;text-align: center;" data-aos="zoom-in-up"
                             class="title headline-mobile">
                            <h4 class="btn-pulse"
                                style="text-shadow: 0 0 5px #9dff0078, 0 0 25px #ecfc117a, 0 0 50px #ecfc11b3, 0 0 100px #ecfc1147;text-align: center; margin-bottom: 0; color: #C4250F; font-weight: 600;   margin-top: 0;display: flex">
                                MAIS VENDIDO
                            </h4>
                        </div>
                        <div data-aos="zoom-in-up" class="title headline"
                             style="background: none; padding: 0;text-align: center;width: 1000%;">
                            <h4 class="btn-pulse"
                                style="text-shadow: 0 0 5px #9dff0078, 0 0 25px #ecfc117a, 0 0 50px #ecfc11b3, 0 0 100px #ecfc1147;margin-bottom: 0;color: #C4250F; font-weight: 600; margin: 0 auto;display: flex">
                                MAIS VENDIDO
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 5px">
                        <a ref="<?php echo($kit2) ?>">
                            <img class="btn-pulse" width="100%" src="files/img/kit3-mobile.png?cache=37"
                                 style="   box-shadow: 0 0 5px #9dff0078, 0 0 25px #ecfc117a, 0 0 50px #ecfc11b3, 0 0 100px #ecfc1147; margin-top: 10px;margin: 0 auto; display: flex">
                        </a>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 5px">
                        <a ref="<?php echo($kit1) ?>">
                            <img width="100%" src="files/img/kit1-mobile.png?cache=63"
                                 style="width: 85%; margin: 0 auto; display: flex">
                        </a>
                    </div>
                    <BRR><BRR>
                    <div class="col-md-4" style="margin-bottom: 5px; max-width: 100%">
                        <a ref="<?php echo($kitM) ?>">
                            <img class="btn-pulse" alt="" src="files/img/machadinha.png?cache=2333"
                                 style=" max-width: 1000%; width: 100%  ;box-shadow: 0 0 5px #9dff0078, 0 0 25px #ecfc117a, 0 0 50px #ecfc11b3, 0 0 100px #ecfc1147; margin-top: 10px;margin-bottom: 0">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<style>

    .btn-pulse {
        animation: pulse .9s infinite !important;
    }

    @keyframes pulse {
        0% {
            transform: scale(.9);
        }
        50% {
            transform: scale(1);
        }
        100% {
            transform: scale(.9);
        }
    }


    @media (max-width: 800px) {
        #marg-bot {
            margin-bottom: 50px
        }

        .desktop {
            display: none !important;
        }

        .mobile {
            display: block !important;
        }
    }

    @media (min-width: 801px) {
        .mobile {
            display: none !important;
        }
    }

</style>
<!-- PERGUNTAS FREQUENTES -->
<section class="perguntas-frequentes section-padding">
    <div class="container">
        <h1 class="headline text-center">PERGUNTAS <span>FREQUENTES</span></h1>
        <div class="row pt-4 justify-content-center">
            <div class="col-lg-6 ">
                <div class="perguntas">
                    <div class="pergunta">
                        <span>Quantos lumens tem a X900?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta" style="display: block;">
                        <p>
                            A X900 tem 800 (4000w) lúmens e 100 mil horas de vida útil, o suficiente para colocá-la
                            entre as melhores lanternas táticas do mundo.
                        </p>
                    </div>
                </div>
                <div class="perguntas">
                    <div class="pergunta">
                        <span>Qual LED é utilizado?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta">
                        <p>
                            A Lanterna X900 é uma das únicas lanternas no mundo portadoras do incrível LED XPE.
                        </p>
                    </div>
                </div>
                <div class="perguntas">
                    <div class="pergunta">
                        <span>Como funciona a garantia?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta">
                        <p>
                            Oferemos total garantia e suporte pós-venda! Após receber a lanterna, oferecemos 7 dias de
                            garantia contra arrependimento da compra e 7 dias de garantia caso sua lanterna tenha algum
                            problema de funciomento.
                        </p>
                    </div>
                </div>
                <div class="perguntas">
                    <div class="pergunta">
                        <span>Como solicito a minha garantia?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta">
                        <p>
                            No rodapé de nosso site, tem um botão de atendimento via WhatsApp, clique e envie uma
                            mensagem que iremos lhe auxiliar nesse procedimento.
                        </p>
                    </div>
                </div>
                <div class="perguntas">
                    <div class="pergunta">
                        <span>Quanto tempo dura a bateria da X900?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta">
                        <p>
                            A bateria da X900 pode durar até 8 horas ligada, depende do modo de luz que você utilizar.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="perguntas">
                    <div class="pergunta">
                        <span>A X900 é mesmo à prova d`água?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta">
                        <p>
                            A X900 tem uma construção robusta e vedada, que possibilita ficar imersa por até 3 metros na
                            água sem nenhum dano a sua eficácia ou funcionalidade.
                        </p>
                    </div>
                </div>
                <div class="perguntas">
                    <div class="pergunta">
                        <span>Qual é o prazo de entrega?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta">
                        <p>
                            O prazo de entrega é na média de 3 a 12 dias úteis, isso varia de estado para estado. O
                            envio é efetuado pelos Correios, sendo enviado um código de rastreamento para você
                            acompanhar a entrega do seu pedido.
                        </p>
                    </div>
                </div>
                <div class="perguntas">
                    <div class="pergunta">
                        <span>Qual é o alcance da luz da X900?</span>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="resposta">
                        <p>
                            A luz da X900 pode alcancar até 200 metros.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="p-3">
                    <a ref="#kits" class="btn-chamada smoth-scroll margin-auto pulse">
                        <i class="fas fa-check-double"></i> Quero comprar <BRR>
                        <span>
                                Satisfação garantida ou seu dinheiro de volta!
                            </span>
                    </a>
                    <img src="./files/img/compra-segura.png" class="img-fluid img-selo" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="newslatter">
    <div class="container">
        <h2 class="headline text-center"><span>Receba nossas promoções</span></h2>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Digite seu nome">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Digite seu email">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <button type="submit" class="btn">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- FOOTER -->

<footer>
    <div class="container">
        <div class="row">
            <div class="pt-3 col-lg-3 col-md-6">
                <h2>FORMAS DE PAGAMENTO</h2>
                <img src="./files/img/metodos-de-pagamento.png" class="img-fluid" alt="Métodos de pagamento">
                <h2 class="pt-3">MÉTODOS DE ENVIO</h2>
                <img src="files/img/correios.png" class="img-fluid" alt="Métodos de envio">
            </div>
            <div class="pt-3 col-lg-3 col-md-6">
                <h2>LINKS ÚTEIS</h2>
                <a ref="https://cademeupedido.log.br/?t=emU=">Rastrear pedido</a><BRR>
                <a ref="https://lanternasfx.com/termos-e-condicoes">Termos e Condições</a><BRR>
                <a ref="https://lanternasfx.com/politica-de-privacidade">Política de Privacidade</a><BRR>
            </div>
            <div class="pt-3 col-lg-3 col-md-6">
                <h2>DÚVIDAS?</h2>
                <a>Fale conosco aqui: <BRR></a>
                <a ref="https://suportevendas.com/">Suporte</a><BRR>
            </div>
            <div class="pt-3 col-lg-3 col-md-6">
                <h2>SITE SEGURO</h2>
                <img src="./files/img/selo-seguranca.png" class="img-fluid" alt="Métodos de pagamento">
                <h2 class="pt-3">VERIFICADO PELO GOOGLE</h2>
                <a ref="https://transparencyreport.google.com/safe-browsing/search?url=https://lanternasfx.com"
                   target="_blank"><img src="files/img/selo-google.png" class="img-fluid" alt="Selo Google"></a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <p class="text-center">2021 © Actual Produtos - Todos os direitos reservados <BRR></p>
            </div>
        </div>
    </div>
</footer>
    <script src="./files/js/block.js"></script>

<!-- SCRIPTS -->
<script src="./files/js/jquery-3.3.1.min.js"></script>
<script src="./files/js/bootstrap.min.js"></script>
<script src="./files/js/main.js"></script>
<script src="./files/js/countdown.js"></script>
<script src="./files/js/toastr.js"></script>
<script src="./files/js/app.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.9/plyr.min.js"
        integrity="sha512-Wt3CCBrK4mMw9PUEzDpKPMN7cLCq7/Uu7vxRtG+EQv+DO9Yae/LKSQTfziDj51y1yeSqqLt142lNyJtBXG/gSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    var player = new Plyr('#player', {
        controls: ['play-large', 'play'],
        fullscreen: {enabled: false, fallback: true, iosNative: false, container: null}
    });

    player.on('ready', function () {
        setInterval(function () {
            var seconds = player.currentTime
            // if (seconds >= 213) { FUNCAO AQUI }
        }, 10000);
    });
</script>
<!----- / MODAL / ----->
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="text-align: center;font-weight: bold;    font-size: 18px !important;">VOCÊ GANHOU UM MEGA COMBO</h2>
        <div style="text-align: center">
            <a ref="<?php echo($kitM) ?>">
                <img class="oi" style="width: 1000%; margin-left: auto; margin-right: auto" alt
                     src="files/img/machadinha.png?cache=23"/>
            </a>
        </div>
        <div style="text-align: center ">
            <p style="font-weight: bold">
                Compre sua lanterna e receba uma Machadinha Multifuncional!<br/>
                FRETE GRÁTIS PARA <?php echo explode('(', $data['city'])[0]; ?> E REGIÃO<br/>
                de <s style="color: red">R$ 299,00</s> por:<br/>
                12x de <span style="color: green; font-size: xx-large">R$ 25,00</span>
            </p>
            <a class="neon-btn botaochamada not-btn-pulse"
               style="max-width: 1000%; border-radius: 9px; padding-bottom: 10px !important; margin: 0 auto"
               target="_self"
               ref="<?php echo($link) ?>">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <strong style="text-align: center; margin: 10px auto 10px auto; font-size: 15px ;color: #ffffff; ">
                    CLIQUE AQUI E GARANTA A SUA<BRR>
                </strong>
            </a>
        </div>
    </div>

</div>

<style>
    /* The Modal (background) */
    .modal {
        display: block; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 99999999999999; /* Sit on top */
        left: 0;
        top: 0;
        animation: pulse .9s infinite !important;
        width: 1000%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
        max-width: 600px;
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        margin-top: -30px;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>


<!---not recomend-->

<style>
    body div {
        width: 100px;
        height: 100px;
        background-color: red;
        position: relative;
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
    }

    /* @keyframes example {
        0%   {background-color:red; left:0px; top:0px;}
        25%  {background-color:yellow; left:200px; top:0px;}
        50%  {background-color:blue; left:200px; top:200px;}
        75%  {background-color:green; left:0px; top:200px;}
        100% {background-color:red; left:0px; top:0px;}
    } */
</style>
<!---not recomend-->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    function ContarSegundos() {
        document.getElementById("myModal").style.display = "block";
    }

    setInterval(ContarSegundos, 100000);

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 8500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
</body>
</html>                        '