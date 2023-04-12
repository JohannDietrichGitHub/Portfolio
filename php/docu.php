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
<style>
  .thumbnail img {
    width: 100%;
    height: 300px; /* hauteur fixe pour les images */
    object-fit: cover; /* pour couvrir tout le carré */
  }
  
  .caption h3 {
    white-space: nowrap; /* empêche le texte de passer à la ligne */
    overflow: hidden; /* cache le texte qui dépasse de la boîte */
    text-overflow: ellipsis; /* affiche "..." à la fin de la chaîne de caractères */
  }
</style>

<div class="container">
  <?php
    // Tableau de projets (à remplir avec des données de base de données ou autre)
    $projets = array(
      array("titre" => "E4 - Mise en place d’une page administrateur permettant d’éditer les méta description des pages web.", "image" => "seo.jpg", "lien" => "https://projet1.com"),
      array("titre" => "E4 - Mise en place d’un système d’affichage, d’ajout, de suppression et de modification d’articles de vente", "image" => "articles.png", "lien" => "https://projet2.com"),
      array("titre" => "E4 - Mise en place d’un système pour les payements en ligne, dans le cas d’une boutique d’E-commerce.", "image" => "vente.PNG", "lien" => "https://projet3.com"),
      array("titre" => "E4 - Mise en place d’un système de sauvegarde de données de manière périodique.", "image" => "BDD.jpg", "lien" => "https://projet4.com"),
      array("titre" => "E4 - Installation et sécurisation d’un serveur web Debian.", "image" => "debian.jpg", "lien" => "https://projet5.com"),
      array("titre" => "E4 - Création d’une page de pseudo quiz a plusieurs choix pour tester le niveau d’anglais.", "image" => "image6.jpg", "lien" => "https://projet6.com"),
      array("titre" => "E5 - Portfolio", "image" => "image7.jpg", "lien" => "https://projet7.com"),
      array("titre" => "E5 - Bricobrac", "image" => "image8.jpg", "lien" => "https://projet8.com"),
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