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
      array("titre" => "E4 - Mise en place d’une page administrateur permettant d’éditer les méta description des pages web.", "image" => "/images/seo.jpg", "lien" => "docs/E4 - Mise en place d’une page administrateur permettant d’éditer les méta description des pages web..pdf"),
      array("titre" => "E4 - Mise en place d’un système d’affichage, d’ajout, de suppression et de modification d’articles de vente", "image" => "/images/articles.PNG", "lien" => "docs\E4-Mise_en_place_d’un_système_d’affichage,_d’ajout,_de_suppression_et_de_modification_d’articles_de_vente.pdf"),
      array("titre" => "E4 - Mise en place d’un système pour les payements en ligne, dans le cas d’une boutique d’E-commerce.", "image" => "/images/vente.PNG", "lien" => "docs\E4 - Mise en place d’un système pour les payements en ligne, dans le cas d’une boutique d’E-commerce.pdf"),
      array("titre" => "E4 - Mise en place d’un système de sauvegarde de données de manière périodique.", "image" => "/images/BDD.jpg", "lien" => "https://projet4.com"),
      array("titre" => "E4 - Installation et sécurisation d’un serveur web Debian.", "image" => "/images/debian.jpg", "lien" => "docs/E4 - Installation et sécurisation d’un serveur web Debian. .pdf"),
      array("titre" => "E4 - Création d’une page de pseudo quiz a plusieurs choix pour tester le niveau d’anglais.", "image" => "/images/quiz.png", "lien" => "docs\E4 - Création d’une page de pseudo quiz a plusieurs choix pour tester le niveau d’anglais.pdf"),
      array("titre" => "E4 - Portfolio", "image" => "images/portfolio.png", "lien" => "docs\E5 PORTFOLIO.pdf"),
      array("titre" => "E5 - ", "image" => "", "lien" => ""),
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