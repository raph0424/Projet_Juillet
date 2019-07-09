<?php
session_start();
      require_once("../controleur/leControleur.php");
$unControleur = new leControleur("localhost","recap","root","");
$result1 = $unControleur->selectEtudiant();
$result2 = $unControleur->selectClasse();
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Orange Event</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="#intro" class="scrollto"><img src="../img/cfa.png" alt="" title=""></a>
      </div>
    <?php
    require_once("NavBar.php");
    ?> 
    </div>
  </header>
    <div>
    <br><br>
    <?php
    require_once("affichage/vuewhatsapp.php");
    ?> 
    <br><br><br>
  </div>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-info">
            <img src="../img/cfa.png" alt="TheEvenet">
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
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/venobox/venobox.min.js"></script>
  <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="../contactform/contactform.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>