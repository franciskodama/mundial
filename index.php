<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mundial Comunicação Visual </title>
  <meta name="description" content="Portfolio Template"/>
  <meta name="author" content="sego">

  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/style.css?4">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body id="body">

<?php
session_start();
$token = md5(uniqid(rand(), true));
$_SESSION['token'] = $token;
date_default_timezone_set('America/Sao_Paulo');
?>
  <!-- <div id="preloader">
    <div class="cssload-container">
      <div class="cssload-double-torus">
      </div>
    </div>
  </div> -->

  <header>
    <div class="container">
      <a href="#home" class="logo">
        <img src="assets/images/logo_mundial_bco.png" alt="Logotipo Mundial" class="logo-white">
        <img src="assets/images/logo_mundial_prt.png" alt="Logotipo Mundial" class="logo-black">
      </a>

      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <ul class="site-menu">
		    <li><a href="#home">Home</a></li>
		    <li><a href="#about">Quem somos</a></li>
		    <li><a href="#clients">Clientes</a></li>
        <li><a href="#what-we-do">Serviços</a></li>
	   	  <li><a href="#our-works">Nossos Trabalhos</a></li>
	 	    <li><a href="#orcamento">Orçamento</a></li>
        <li><a href="#contact-us">Contato</a></li>
	    </ul>
    </div>
  </header>

  <div class="section hero" id="home">
    <div class="owl-carousel owl-full-width" id="hero-slide">
      <div class="slide"><img src="assets/images/mun_banners_1920x1079_front.jpg" alt="slide">
        <div class="content">
          <div class="dta">
           <div class="container">
              <h2>mundial comunicação visual</h2>
              <h3>obstinados em qualidade</h3>
           </div>
          </div>
        </div>
      </div>

      <div class="slide"><img src="assets/images/Home_Banners_1920x1079_vitor.jpg" alt="slide">
        <div class="content">
          <div class="dta">
            <div class="container">
            <h2>satisfação total do cliente</h2>
            <h3>atendimento personalizado</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="slide"><img src="assets/images/1920x1079_slider_work.jpg" alt="slide">
        <div class="content">
          <div class="dta">
           <div class="container">
              <h2>qualidade diferenciada</h2>
              <h3>desde a matéria prima até a entrega</h3>
           </div>
          </div>
        </div>
      </div>
    </div>

    <div class="doWn"><span></span></div>
  </div>

  <div class="about section" id="about">
    <div class="container">
      <div class="row">

        <div class="col-md-7 about-left">
          <h2 class="head">Quem somos</h2>
          <h3 class="sub-head">conheça nossa história</h3>
          <p>Baseada em um grande espírito empreendedor de seu fundador, surge em 1989 nossa empresa, após a compra de equipamentos de silk screen usados e um curso para aprender a técnica.</p>
          <p>Com uma busca constante de aprendizado e oferecendo qualidade e atendimento diferenciado ao cliente, a empresa seguiu crescendo e se transformando, possibilitando um grande avanço e novos produtos fabricados a partir da área de montagem de estruturas metálicas.</p>
          <p>Sempre com foco nas grandes empresas, porém sem deixar de atender pequenas encomendas, a Mundial aposta na qualidade: desde a escolha das melhores matérias-primas, até a produção e acabamento, com muita dedicação e busca de aperfeiçoamento a cada dia.
          <br><br>
        </div>

        <div class="col-md-5">
            <img class="img-responsive" src="./assets/images/465x310_time2019.jpg" alt="Time Mundial 2019" width="465" height="310">
        </div>
      </div>
    </div>
  </div>

  <div class="section clientes" id="clients">
    <div class="container">
      <div class="row">

        <h3 class="clientes-title">principais<br>clientes:</h3>

        <ul class="logos owl-carousel" id="logo-slide">
          <li><img src="./assets/images/logo_ambev.png" alt="Logotipo Ambev"></li>
          <li><img src="./assets/images/logo_blackdecker.png" alt="Logotipo Black Decker"></li>
          <li><img src="./assets/images/logo_duratex.png" alt="Logotipo Duratex"></li>
          <li><img src="./assets/images/logo_sesi.png" alt="Logotipo Sesi"></li>
          <li><img src="./assets/images/logo_fiemg.png" alt="Logotipo Fiemg "></li>
          <li><img src="./assets/images/logo_yara.png" alt="Logotipo Yara"></li>
          <li><img src="./assets/images/logo_valmont.png" alt="Logotipo Valmont"></li>
          <li><img src="./assets/images/logo_agronelli.png" alt="Logotipo Agronelli"></li>
        </ul>

      </div>
    </div>
  </div>

  <div class="section services" id="what-we-do">
    <div class="container">
      <div class="row">

        <h2 class="head">Serviços</h2>
        <h3 class="sub-head">confira o que oferecemos</h3>

        <div class="services-txt-apoio">
          <p>Somos especializados em elaborar soluções de comunicação visual de forma criativa, com<br>qualidade e durabilidade:</p>
          <br><br>
        </div>

        <div class="services-boards">
          <div class="item">
            <img src="./assets/images/icon_sign.png" alt="icone sinalização">
            <h3>Sinalização corporativa e de Segurança</h3>
            <p>Sua empresa necessita de placas de sinalização para indicação de caminhos, avisos, bem como prevenção de acidentes, atendendo às normas vigentes.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_pdv.png" alt="icone ponto de venda">
            <h3>Marketing</h3>
            <p>Invista em comunicação visual externa e interna do seu negócio deixando-o mais moderno e atrativo, promovendo um ambiente mais agradável para o seu cliente.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_painelmagneticos.png" alt="Quadros Magnéticos e Ímãs">
            <h3>Quadros magnéticos e ímãs</h3>
            <p>Produção de ímãs promocionais personalizados, ímãs de neodímio com logo da sua empresa e quadros de gestão magnéticos.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_frota.png" alt="icone sinalização de frota">
            <h3>Personalização de Frota</h3>
            <p>Um dos melhores custos-benefícios em propaganda no mercado, divulga sua marca e aumenta sua segurança e de seus clientes.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_banner.png" alt="icone banners">
            <h3>Cavaletes, Banners e Faixas</h3>
            <p>Ótimas ferramentas para divulgação de produtos, ofertas, eventos, e apresentações.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_gestao.png" alt="icone quadros de gestao">
            <h3>Quadros de Gestão e Painéis</h3>
            <p>Desenvolvemos quadros para gestão de projetos e tarefas para facilitar o seu dia-a-dia e painéis para as mais diversas finalidades.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_adesivo.png" alt="icone adesivos">
            <h3>Etiquetas e Adesivos Diversos</h3>
            <p>Produzimos etiquetas dupla-face e demais etiquetas especiais, além da melhor qualidade de impressão em adesivos, nos tamanhos e formatos que sua empresa precisa.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_acrilico.png" alt="icone placas e displays de Acrílico">
            <h3>Placas e Displays</h3>
            <p>Cortes laser e router CNC em diversos materiais, como acrílico, MDF, PETG, Poliestireno, PVC, entre outros.</p>
          </div>
          <div class="item">
            <img src="./assets/images/icon_special.png" alt="icone projetos especiais">
            <h3>Projetos Especiais</h3>
            <p>Entendemos sua demanda e entregamos a melhor solução customizada para seu projeto.</p>
          </div>
        </div>

      </div>
    </div>

    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_dc.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_dewalt.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_letters.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_nelltech.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_panelpics.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_projemassa.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_setetur.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_ubyfol.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_uftm.jpg">
    <img class="visually-hidden" src="assets/images/nossos-trabalhos/20200321_work_ultragaz.jpg">
  </div>

  <div class="section portfolio light-bg" id="our-works">
    <div class="container">

      <h2 class="head">Nossos trabalhos</h2>
      <h3 class="sub-head">Veja alguns de nossos trabalhos</h3>
      <br><br>

      <ul class="work-nav filters filters-group">
        <li class="visually-hidden"><button class="filter is-checked filter-all" data-filter="all">Todos</button></li>
        <li><button class="filter filter-1" data-filter="1">Projetos Especiais</button></li>
        <!-- <li><button class="filter" data-filter="2">Sinalização</button></li> -->
        <li><button class="filter" data-filter="3">Impressão Digital</button></li>
        <li><button class="filter" data-filter="4">Corte a laser e router</button></li>
        <!-- <li><button class="filter" data-filter="5">Estruturas metálicas</button></li> -->
        <li><button class="filter" data-filter="6">Personalizações</button></li>
      </ul>

      <div class="row work-masonry work-gallery">
        <div class="col-sm-6 filtr-item" data-category="1">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_dc.jpg" title="Diagnostic Center">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_dc.jpg" alt="Projetos Especiais">
              <div class="project-detail">
                <div class="dta">
                  <h3>Projetos Especiais</h3>
                  <span>Adesivo</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-6 filtr-item" data-category="6">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_dewalt.jpg" title="DeWalt">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_dewalt.jpg" alt="Personalizações">
              <div class="project-detail">
                <div class="dta">
                  <h3>Personalização de Frota</h3>
                  <span>Adesivo</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="4">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_letters.jpg" title="Corte a laser e router">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_letters.jpg" alt="Corte a laser e router">
              <div class="project-detail">
                <div class="dta">
                  <h3>Corte a laser e router</h3>
                  <span>Fachada</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="4">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_nelltech.jpg" title="Nelltech">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_nelltech.jpg" alt="Corte a laser e router">
              <div class="project-detail">
                <div class="dta">
                  <h3>Corte a laser e router</h3>
                  <span>Fachada Interna</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="3">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_panelpics.jpg" title="Painel">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_panelpics.jpg" alt="Impressão">
              <div class="project-detail">
                <div class="dta">
                  <h3>Impressão Digital</h3>
                  <span>Painel de Fotos</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="6">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_projemassa.jpg" title="Projemassa">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_projemassa.jpg" alt="Personalizações">
              <div class="project-detail">
                <div class="dta">
                  <h3>Personalização de Frota</h3>
                  <span>Adesivo</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="6">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_setetur.jpg" title="Setetur">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_setetur.jpg" alt="Personalizações">
              <div class="project-detail">
                <div class="dta">
                  <h3>Personalização de Frota</h3>
                  <span>Adesivo</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="4">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_ubyfol.jpg" title="Ubyfol">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_ubyfol.jpg" alt="Corte a laser e router">
              <div class="project-detail">
                <div class="dta">
                  <h3>Corte a laser e router</h3>
                  <span>Placas</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="6">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_uftm.jpg" title="UFTM">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_uftm.jpg" alt="Personalizações">
              <div class="project-detail">
                <div class="dta">
                  <h3>Personalizações</h3>
                  <span>Adesivo</span>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 filtr-item" data-category="6">
          <div class="work-item">
            <a href="assets/images/nossos-trabalhos/20200321_work_ultragaz.jpg" title="Ultragaz">
              <img class="img-responsive" src="assets/images/nossos-trabalhos/20200321_work_ultragaz.jpg" alt="Personalizações">
              <div class="project-detail">
                <div class="dta">
                  <h3>Personalizações</h3>
                  <span>Adesivo</span>
                </div>
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="section promo"  id="orcamento" style="background-image:url(assets/images/1920x1280_orcamento.jpg);" data-stellar-background-ratio="0.5">
    <div class="container white">
      <h4>Precisa de um orçamento sem compromisso?</h4>
      <h2>Entre em contato conosco!</h2>
      <br>
      <br>
      <a class="btn smooth" href="#contact-us">solicitar um orçamento</a>
    </div>
  </div>

  <div class="section light-bg" id="our-works">
    <div class="container">

      <h2 class="head padding-top">Nossos Equipamentos</h2>
      <h3 class="sub-head">As principais máquinas que fazem tudo acontecer</h3>

      <div class="row team">
        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/01_mun_equip_273x284_router.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Permite o corte e a usinagem de diversos materiais, como MDF, madeira, PVC de variadas espessuras e ACM. Fabricação de letras-caixa em PVC expandido e MDF.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Router CNC MACH AX Pro</h5>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/02_mun_equip_273x284_rolandre640.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Impressão de alta qualidade (Tinta Ecosolvente) em vinis adesivos e lonas. Produção de adesivos que não necessitam recortes. Impressão de lonas para confecção de banners, faixas, etc. Largura útil: 1,60m.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Plotter Roland RE 640</h5>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/03_mun_equip_273x284_novacut.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Corte e gravação a laser em acrílicos, PETG, MDF. Permite corte preciso de letras para fachadas e placas com letras em relevo. Acabamento excelente para cortes em acrílico. Corte preciso para visores em PETG para diversas aplicações. Gravação em alumínio anodizado e diversos outros materiais.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Máq. de corte a laser Novacut</h5>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/04_mun_equip_273x284_rolandsp540.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Impressão de alta qualidade (Tinta Ecosolvente) e recorte de vinis adesivos. Produção de etiquetas, rótulos, adesivos em geral, recortes de letreiros para aplicação em placas e demais superfícies. Impressão de lonas para confecção de banners e faixas. Largura útil: 1,34m.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Plotter Roland SP 540i</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row team">
        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/05_mun_equip_273x284_rolandvg640.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Impressão de alta qualidade (Tinta Ecosolvente) e recorte de vinis adesivos. Produção de etiquetas, rótulos, adesivos diversos, recortes em vinil para aplicação em superfícies diversas. Largura útil: 1,60m.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Plotter Roland VG 640</h5>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/06_mun_equip_273x284_laminadora.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Aplicação de vinil transparente para proteção de adesivos impressos em impressora solvente para promover uma maior durabilidade ao material.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Laminadoras</h5>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/07_mun_equip_273x284_rotstamp.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Máquina de transfer giratório para copos de acrílico, canecas, taças, etc.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Transfer Giro 360 RotStamp</h5>
            </div>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-team">
            <figure>
              <img class="img-responsive" src="assets/images/equipamentos/08_mun_equip_273x284_datacart.jpg" alt="member">
              <div class="overlay">
                <div class="table">
                  <div class="content">
                    <span>Impressão de alta qualidade em cartões de PVC para crachás, cartões de identificação, credenciais, cartões de informações empresariais, etc.</span>
                  </div>
                </div>
              </div>
            </figure>
            <div class="figcaption">
              <h5>Impressora térmica de cartões</h5>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="section testmonials parallax" id="testmonials" style="background-image:url(assets/images/1920x1280_depoimento.jpg);" data-stellar-background-ratio="0.5">
	  <div class="container">

	    <h2 class="head white">Depoimentos</h2>
	    <h3 class="sub-head white">Veja o que nossos clientes têm a dizer.</h3>

	    <div id="testmonial-slider">
        <div class="item">
          <figure class="figure">
      	   <img src="assets/images/dep-francis-kodama.jpg" alt="member">
          </figure>
          <h3>Francis Kodama</h3>
          <h5>Circus Comunicação</h5>
          <p>"Sempre que preciso de um trabalho de qualidade diferenciada, sei que posso contar com a experiência e acabamento excepcionais da Mundial Comunicação Visual."</p>
        </div>

        <div class="item">
          <figure class="figure">
           <img src="assets/images/dep-tvjockey_Teste2.jpg" alt="member">
          </figure>
          <h3>Delfino Filho</h3>
          <h5>TV Jockey</h5>
          <p>"Recomendo a todos. Profissionalismo e produtos de ótima qualidade."</p>
        </div>

        <div class="item">
          <figure class="figure">
           <img src="assets/images/dep-luiz-nojiri.jpg" alt="member">
          </figure>
          <h3>Luiz Nojiri</h3>
          <h5>FIEMG</h5>
          <p>"Excelente serviço. Melhor atendimento de Uberaba."</p>
        </div>

        <div class="item">
          <figure class="figure">
          <img src="assets/images/dep-carlos-cunha.jpg" alt="member">
          </figure>
          <h3>Carlos Cunha</h3>
          <h5>Usina Jaguara</h5>
          <p>"Onde trabalho levo os serviços da Mundial Comunicações, excelente serviço!!!"</p>
        </div>
	    </div>
    </div>
  </div>

  <div class="section contact-us" id="contact-us">
    <div class="container">

      <h2 class="head">Contato</h2>
      <h3 class="sub-head">Como podemos ajudar sua empresa?</h3>

      <div class="row">
        <div class="col-sm-4">
          <ul>
            <li>
              <span class="ico icon-location"></span>
              Alameda Lilás, 421 | Grande Horizonte<br>
              CEP 38057-080 | Uberaba - MG
            </li>
            <li>
              <span class="ico icon-phone"></span>
              + 55 34 3315 4358 | 3312 8445
            </li>
            <li>
              <span class="ico icon-bubble"></span>
              contato@mundialcomunicacao.com.br<br>
            </li>
            <li>
              <span class="ico icon-whatsapp"></span>
              + 55 34 9972-6822
            </li>
          </ul>
        </div>

        <div class="col-sm-8">
          <form id="contactform" data-toggle="validator" class="shake scroll-reveal">
            <input type="hidden" name="token" id="token" value="<?php echo $token;?>" />

            <div class="form-group col-sm-6">
              <input type="text" class="form-control" id="name" placeholder="Seu nome" maxlength="50" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-6">
              <input type="phone" class="form-control" id="phone" placeholder="Seu telefone" maxlength="14" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-12">
              <input type="email" class="form-control" id="email" placeholder="Seu e-mail" maxlength="50" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group col-sm-12">
              <textarea id="message" class="form-control" rows="6" placeholder="Escreva aqui sua mensagem" maxlength="255" required></textarea>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-sm-12">
              <button type="submit" id="form-submit" class="btn btn-default btn-submit light-bg">enviar</button>
            </div>
            <div id="msgSubmit"></div>
          </form>
        </div>

      </div>
   </div>
  </div>

  <div id="map"></div>

  <footer class="footer">
    <div class="back-top"></div>
    <div class="container">
      <p>© 2020 Mundial Comunicação Visual. Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="assets/js/vendor/jquery.easing-1.3.pack.js"></script>
  <!-- Pace -->
  <script src="assets/js/plugins/pace.min.js"></script>
  <!-- Bootsrap core -->
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <!-- Plugins -->
  <script src="assets/js/plugins/jquery.smooth-scroll.min.js"></script>
  <script src="assets/js/plugins/jquery.waypoints.min.js"></script>
  <script src="assets/js/plugins/device-detect.js"></script>
  <script src="assets/js/plugins/owl.carousel.js"></script>
  <script src="assets/js/plugins/jquery.stellar.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.masonry.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/plugins/jquery.filterizr.js"></script>
  <script src="assets/js/vendor/jquery.fancybox.min.js"></script>
  <script src="assets/js/vendor/jquery.maskedinput.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDs3mrTgrYd6_hJS50x4Sha1lPtS2T-_JA"></script>
  <!-- Contact Form Script -->
  <script type="text/javascript" src="assets/contact-form/js/validator.min.js"></script>
  <script type="text/javascript" src="assets/contact-form/js/form-scripts.js"></script>
  <!-- Custom Script -->
  <script src="assets/js/function.js"></script>

  </body>
</html>