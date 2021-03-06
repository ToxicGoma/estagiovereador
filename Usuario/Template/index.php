<?php include_once '../../Administrador/gabinete/funcoes.class.php';
  include_once '../../Administrador/telefonesuteis/funcoes.class.php';
  
  include_once "../../Administrador/noticias/funcoes.class.php";
  include_once '../../Administrador/noticias/dadosnoticias.php';
  
  include_once "../../Administrador/telefonesuteis/funcoes.class.php";
  include_once '../../Administrador/telefonesuteis/dadostelefonesuteis.php';

  $funcoesnoticias = new FuncoesNoticias();
  $listarnoticia = $funcoesnoticias->listarlimit();



  $gabinete = new Funcoes();
  $listar = $gabinete->listar();

  $telefonesuteis = new FuncoesTelefonesUteis();
  $listartelefones = $telefonesuteis->listar();
  




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Vereador Antonio Zenoir</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/antonio/psd.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/EnviarMSG.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Antonio Zenoir</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#portfolio">Noticias</a></li>
         <!-- <li><a href="#portfolio">Portfolio</a></li>-->
          <li><a href="#team">Equipe</a></li>
          <li><a href="#contact">Contato</a></li>
          
          <li class="menu-has-children"><a href="">Telefones Uteis</a>
            <ul>
      <?php foreach ($listartelefones as $linhatelefone){ ?>
              <li><a href="#"><?php echo $linhatelefone['nome']; ?>: <?php echo $linhatelefone['numero']; ?></a></li>
              <?php } ?>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/causaanimal.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Causa Animal</h2>
                <p>Os animais também têm direitos e estamos dispostos a ajudá-los.</p>
                <a href="#about" class="btn-get-started scrollto">Mais Informação</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/comunidade.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Comunidade</h2>
                <p>Dispostos a servir e ajudar a melhorar a qualidade de vida.</p>
                <a href="#about" class="btn-get-started scrollto">Mais Informação</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/educacao.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Educação</h2>
                <p>Com a educação você vai muito mais longe.</p>
                <a href="#about" class="btn-get-started scrollto">Mais Informação</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/saude.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Saúde</h2>
                <p>Melhor saúde significa maior segurança em nossas vidas.</p>
                <a href="#about" class="btn-get-started scrollto">Mais Informação</a>
              </div>
            </div>
          </div>

  

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">


    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Sobre Antonio Zenoir</h3>
          <p>Natural de Porto Alegre, Santanense desde 1978, chamado carinhosamente e reconhecido em nossa cidade como "Nosso Diretor" ,esteve a frente por mais de 19 anos de Escolas importantes, como as Escolas Estaduais Nossa Senhora do Livramento e Professor Chaves.
Mais de 35 anos dedicado ao magistério com graduação em Pedagogia na extinta ASPEs em 1988 e Pós-graduado na UFRGS em Gestão Escolar em 2009.
Tem a área da educação como uma das 4 causas mais importantes que o Vereador Antonio Zenoir defende.
Com uma ativa participação em Movimentos Sociais e  voluntário no Movimento Escoteiro, o Vereador Antonio Zenoir, traçou sua vida dentro de valores como ética, lealdade, liderança e dedicação no que se dispôs a fazer dentro de principal lema que é "SERVIR"!
Recebeu ao longo de sua história vários reconhecimentos e condecorações:
- Diploma "O Mestre", no Legislativo Municipal, pela sua carreira no magistério;
- Certificado de Reconhecimento Público, no Executivo Municipal, pelo seu trabalho social;
- Medalha de Bons Serviços 15 anos, concedida pela União dos Escoteiros do Brasil, pela liderança que exerceu frente aos Grupos Escoteiros Gen. Flores da Cunha 157/RS e Duque de Caxias 369/RS e no 12° Distrito Escoteiro como Comissário Distrital;
- Medalha Gratidão Bronze, concedida pela União dos Escoteiros do Brasil por seus serviços prestado na implantação e manutenção do movimento escoteiro em Sant'Ana do Livramento;
Além de reconhecimentos de entidades como "Amigo da Conferência" da Conferência São Vicente de Paulo, "Apoiador do PROERD" da Brigada Militar e "Amigo do CLJ" pela sua vivência e essência cristã.
Como legislador luta por uma gestão  de qualidade na educação, na sáude, na causa animal, além de atender a todos da comunidade pessoalmente, o vereador Antonio Zenoir realiza um atendimento diferenciado nas redes sociais com canais que somente o seu gabinete tem, como o "Gabinete Digital", que nada mais é que um canal direto de comunicação dos Santanense com suas demandas.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/antonio/AntonioF4e.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/antonio/AntonioF1.jpeg" alt="" class="img-fluid">
              </div>
              
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/antonio/AntonioF3e.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Ultimas Noticias</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
      <?php foreach ($listarnoticia as $linhanoticia){ ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="../../Administrador/noticias/portadas/<?php echo $linhanoticia['portada']; ?>" class="img-fluid" alt="">
                <a href="../../Administrador/noticias/portadas/<?php echo $linhanoticia['portada']; ?>" data-lightbox="portfolio" data-title="Data de Publicação: <?php   $datenueva = explode("-", $linhanoticia['datant']);  echo "".$datenueva[2]."/".$datenueva[1]."/".$datenueva[0]."";?> " class="link-preview" title="Previsualizar"><i class="ion ion-eye"></i></a>
                <a href="veruna.php?ID=<?php echo $linhanoticia['id']; ?>" class="link-details" title="Mas Detalhes"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="veruna.php?ID=<?php echo $linhanoticia['id']; ?>"><?php echo $linhanoticia['titulo']; ?> </a></h4>
                <p><?php echo $linhanoticia['tiponoticia']; ?></p>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
          

        
      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================--
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Parcerias</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================--
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipe de Trabalho</h3>
          <p></p>
        </div>

        <div class="row">
          <?php foreach ($listar as $linha){ ?>
          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="../../Administrador/gabinete/img/<?php echo $linha['foto']; ?>" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4><?php echo $linha['nome']; ?></h4>
                  <span><?php echo $linha['cargo']; ?></span>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contate-nos</h3>
          <p>Deixe sua mensagem ou você pode nos ver diretamente em nosso local</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Localização</h3>
              <address><a href="https://www.google.com/maps/place/Municipal+City+Council+of+Sant'Ana+do+Livramento/@-30.8894316,-55.5383615,15z/data=!4m5!3m4!1s0x0:0xb6e87e52eec1ff08!8m2!3d-30.8894316!4d-55.5383615">R. Sen. Salgado Filho, 528 - Centro, Santana do Livramento - RS, 97573-432, Brasil</a></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefone</h3>
              <p><a href="tel:+55984152836">+55 9 84152836</a></p>
              <p><a href="tel:+3241-8624">+3241-8624</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>E-mail</h3>
              <p><a href="mailto:info@example.com">gabinetevereadorantoniozenoir@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Sua mensagem foi enviada com sucesso!</div>
          <div id="errormessage"></div>
          <form action="../../Administrador/mensagens/inserir.php" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nome" class="form-control" id="name" placeholder="Nome Completo" data-rule="minlen:4" data-msg="Digite o nome completo" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email - exemplo@gmail.com" data-rule="email" data-msg="Email invalido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="mensagem" rows="5" data-rule="required" data-msg="Digite sua mensagem" placeholder="Mensagem"></textarea>
              <div class="validation"></div>
            </div>
            <!--<div class="text-center"><button type="submit">Enviar</button></div>-->
            <div class="text-center"><input type='submit' value='Enviar' id='EnviarMensaje'/></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
          <a href="https://www.santanadolivramento.rs.leg.br"><img src="img/antonio/logo.png" width="130" height="130"alt="logo"></a>
            <p></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes Sociais</h4>
            <ul>
            <li><i class="ion-ios-arrow-right"></i> <a href="https://www.facebook.com/vereadorantoniozenoir/">Facebook</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="https://api.whatsapp.com/send?phone=55984152836">WhatsApp</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Instagram</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tipos de Serviços</h4>
            <ul>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Causa Animal</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Comunidade</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Educação</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Saude</a></li>
            </ul>
            <!--
            <p>
              A108 Adam Street <br>
              <br>
               <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
-->
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
          <a href="../../Administrador/template/login.php"><img src="img/antonio/gabinetedigital.jpeg" width="130" height="130" alt="logo"></a><!--
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>-->
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Antonio Zenoir</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://www.linkedin.com/in/antonydsm/">Antony Maikel da Silva Mello</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
