<?php
require_once('connection.php');
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Documents/Projets</title>
  <?php require_once('head.php');?>


<header>
  <?php
    require_once ('navbar.php');
  ?>
</header>
<body>
<center><h1><div class="premierblocktitre"> Projets E4 et E5</div></h1></center>
<br>
<div class="container">
  <?php
    // Tableau de projets
    $projets = array(
      array("titre" => "E4 - Mise en place d’une page administrateur permettant d’éditer les méta description des pages web.", "image" => "../images/seo.jpg", "lien" => "https://projet1.com"),
      array("titre" => "E4 - Mise en place d’un système d’affichage, d’ajout, de suppression et de modification d’articles de vente", "image" => "../images/articles.PNG", "lien" => "https://projet2.com"),
      array("titre" => "E4 - Mise en place d’un système pour les payements en ligne, dans le cas d’une boutique d’E-commerce.", "image" => "../images/vente.PNG", "lien" => "https://projet3.com"),
      array("titre" => "E4 - Mise en place d’un système de sauvegarde de données de manière périodique.", "image" => "../images/BDD.jpg", "lien" => "https://projet4.com"),
      array("titre" => "E4 - Installation et sécurisation d’un serveur web Debian.", "image" => "../images/debian.jpg", "lien" => "https://projet5.com"),
      array("titre" => "E4 - Création d’une page de pseudo quiz a plusieurs choix pour tester le niveau d’anglais.", "image" => "/images/quiz.png", "lien" => "https://projet6.com"),
      array("titre" => "E5 - Portfolio", "image" => "images/portfolio.png", "lien" => "https://projet7.com"),
      array("titre" => "E5 - Bricobrac", "image" => "/images/bricobrac.png", "lien" => "https://projet8.com"),
    );
    
    // Boucle pour afficher chaque projet dans une case cliquable
    for ($i=0; $i < count($projets); $i+=4) {
      echo '<div class="row mb-5">';
      for ($j=0; $j < 4 && $i+$j < count($projets); $j++) {
        $projet = $projets[$i+$j];
        echo '<div class="col-md-3">';
        echo '<a href="'.$projet['lien'].'" class="thumbnail">';
        echo '<img src="'.$projet['image'].'" alt="'.$projet['titre'].'">';
        echo '<div class="caption">';
        echo '<h3>'.$projet['titre'].'</h3>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }
      echo '</div>';
    }
  ?>
</div>
 <?php include('footer.php');?>
</body>