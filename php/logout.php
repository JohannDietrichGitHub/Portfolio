<?php
// Initialize the session
session_start();
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 33786bd (Début de création de logs)
//creation de logs
 $sql = "INSERT INTO logs (username, actions, pages) VALUES (?,?,?)";
 $conn->prepare($sql)->execute([$_SESSION["username"], "Logout", "Logout.php"]);

<<<<<<< HEAD
=======
 
>>>>>>> 33485dd (Finition du système de login)
=======
>>>>>>> 33786bd (Début de création de logs)
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>