<?php
session_start();
if(isset($_SESSION['mdp']))
    {
      $connec ='Deconnexion';
      $linkCon ='vue/deconnexion.php';
      $event = 'vue/classe.php';
    }
    else
    {
      $linkCon ='vue/connexion.php';
      $connec ='Connexion';
      $event = 'vue/connexion.php';
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Cfa Insta</title>
  <link rel="icon" href="img/favicon.png"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>


<body>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="index.php" class="scrollto"><img src="img/cfa.png" ></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="">Accueil</a></li>
            <?php   if(isset($_SESSION['nom'])) 
        {?>
            <li><a href="vue/note.php">Note</a></li><?php
        }?>
<?php   if(isset($_SESSION['nom']))
        {?>
            <li><a href="<?php echo $event; ?>">Classe</a></li>
        <?php
        }?>
        <li><a href="<?php echo $linkCon; ?>"><?php echo $connec; ?></a></li>
<?php   if(isset($_SESSION['login']) && $_SESSION['login'] == "admin")
        {?>
            <li class="buy-tickets"><a href="vue/billet.php">Billet de retard</a></li><?php
        }?>
<?php   if(isset($_SESSION['nom']))
        {?>
           <li class="buy-tickets"><a href="vue/whatsapp.php">Whatsapp</a></li><?php
        }?>
    </ul>
</nav>
    </div>
    </header>
    <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>Cfa Insta</span></h1>
      <a href="https://www.youtube.com/watch?v=5I7Og59740E&feature=youtu.be" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
    </div>
  </section>
  <main id="main">

    <section id="venue" class="wow fadeInUp">
      <div class="container-fluid">
        <div class="section-header">
          <h2>Cfa Insta</h2>
          <p><small style="font-style: italic;">Où sommes nous ?</small></p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12484.097973906048!2d2.3422515710231884!3d48.86853905302017!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc403d0594e8dc5f!2sCFA+INSTA!5e0!3m2!1sfr!2sfr!4v1562579769501!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6 venue-info">
            <div class="row justify-content-center">
              <div class="col-11 col-lg-8">
                <h3>L'école </h3>
                <p>Créé en 2009 par Ryad Lebib et Hubert Trapet, le CFA INSTA accueille et forme près de 500 étudiant(e)s par an pour leur assurer un avenir professionnel.
                  Notre réactivité et notre écoute du marché s'est traduite par la mise en place de formations adaptées et diplômantes reconnues par l’État (titres RNCP et diplômes d'État), en informatique (développement, logiciel et réseaux), en ressources humaines et en comptabilité.
                  Depuis près de 10 ans, le CFA INSTA propose plusieurs formations en alternance (contrat d’apprentissage ou de professionnalisation) en comptabilité et RH et en initiale et en alternance en informatique. Nos formations vont de bac+ 2 à bac+5.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <section id="supporters" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>
        <div class="row no-gutters supporters-wrap clearfix">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>       
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>         
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/8.png" class="img-fluid" alt="">
            </div>
              </div>
        </div>
      </div>
    </section>
    <section id="faq" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>F.A.Q </h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">
                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">CFA, quésaco ?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                    Les centres de formation d'apprentis (CFA) donnent aux apprentis une formation générale et technique qui complète la formation reçue dans les entreprises.
Les apprentis ont un statut de jeune travailleur salarié en entreprise, sous la responsabilité d'un maître d'apprentissage. Ils ont conclu un contrat de travail.
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Qui sommes-nous ?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                    Le CFA Insta est une école de formation de type CFA proposant des formations adaptées et diplômantes reconnues par l’État (titres RNCP et diplômes d'État), nous avons vu le jour en 2009, nous fêtons donc aujourd'hui nos 10 ans ! 
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Que propose le CFA Insta ? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                    Le CFA Insta vise l'excellence en proposant des formations de qualité de Bac + 2 à Bac + 5 en informatique (aussi bien en réseau qu'en dévelopement) ainsi qu'en comptabilité et en ressources humaines. Les formations sont disponibles aussi bien alternance qu'en initial
                    </p>
                  </div>
                </li>
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Pourquoi choisir le CFA Insta ?<i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                    Le CFA Insta, fort d'un grand succès et d'une expansion constante forme plus de 500 étudiants par an, le taux d'insertion dans les marché de l'emplois étant de 95%, CFA Insta c'est avant tout la garantie de pouvoir mener à biens vos projets professionnels. De plus du personnel de qualité et à l'écoute vous aideront à touver une entreprise pour votre alternance.
                    </p>
                  </div>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contacter nous</h2>
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adresse</h3>
              <address>12 Rue de Cléry, 75002 Paris</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Numéro de téléphone</h3>
              <p><a href="tel:+33647389923">01.43.41.72.50</a></p>
            </div>
              </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:cfa-insta@gmail.com">cfa-insta@gmail.com</a></p>
            </div>
          </div>
        </div>
    </section>
  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/cfa.png" alt="TheEvenet">
            <p>
            L'informatique concerne le traitement automatique de l'information grâce à l'exécution de programmes par des machines 
            (systèmes embarqués, ordinateurs, applications, etc.). Notre cursus informatique couvre deux pans de l'informatique :
               les systèmes d'information (SI) en réseaux et la programmation et le développement.


            </p>
          </div>

          <div class="col-lg-1 col-md-1 footer-links">
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Liens utiles</h4>
            <ul>
            <li><i class="fa fa-angle-right"></i> <a href="index.php">Accueil</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="vue/note.php">Notes</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="vue/deconnexion.php">Déconnexion</a></li>
            </ul>
          </div>
           <div class="col-lg-1 col-md-1 footer-links">
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contactez nous</h4>
            <p>
            12 Rue de Cléry, 75002 Paris<br/>
            01.43.41.72.50<br/>
            cfa-insta@gmail.com<br/>
            </p>
            <div class="social-links">
              <a href="https://twitter.com/CFAINSTA" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/cfainsta" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.linkedin.com/school/cfa-insta/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Cfa-Insta</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by<a href=""> Cfa insta</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
