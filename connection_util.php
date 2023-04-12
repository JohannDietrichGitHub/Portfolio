<?php
require_once ('connection.php');
require_once ('fonctions.php');

if(!empty($_POST)){   /* vérifie si le formulaire a été envoyé */
    if (isset($_SESSION["username"])){
        logout($conn);
        header('connection_util.php');
        exit;
    }
    else 
    {
        se_connecter($conn);//demande de la fonction de connnection
    }
}
?>