<?php
require_once ('connection.php');
require_once ('fonctions.php');

if(!empty($_POST)){   /* vérifie si le formulaire a été envoyé */
    ajouter_com($conn,$_SESSION['article_id']);
  }
?>