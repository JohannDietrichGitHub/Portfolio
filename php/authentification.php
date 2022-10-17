<?php
// Initialize the session
session_start();
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "test_portfolio";

try
{
     $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Contact</title>
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="..\JS\indexjs.js"></script>
</head>

<header>
  <?php
    require_once ('navbar.php');
  ?>
</header>
<body>
<center>
    Sign up 
    <br><br><br>
    <form action="authentification.php" name="form" id="form" method="post">   
    <p>
        <label for="username">username:</label>
        <input type="text" name="username" id="username" required>
    </p>    
    <p>
        <label for="mail">adresse mail:</label>
        <input type="text" name="mail" id="mail" required>
    </p>   
    <p>
        <label for="password">password:</label>
        <input type="password" name="password" id="password" required>
    </p>
    <p>
        <label for="confpassword">confirm password:</label>
        <input type="password" name="confpassword" id="confpassword" required>
    </p>
    <p>
        <input type="submit" value="S'enregistrer">
    </p>
    <div><a href="login.php">Déja un compte ?</a></div>
</center>
<?php




$usernamebdd = $mailbdd = ""; /* a changer, doit chercher dans bdd si ils existent ou pas */

if(isset($_POST['username'])){   /* vérifie si le formulaire a été envoyé */

    if($_POST['password']== $_POST['confpassword']){ /* vérifie si les mots de passes sont les memes */
        if ($_POST['username']== $usernamebdd || $_POST['mail']== $mailbdd) {  /* vérifie si le nom d'utilisateur ou l'adresse mail ne sont pas déja utilisés */
            echo "nom d'utilisateur ou adresse mail déja utilisés";
        }
        else {
        $sql = "INSERT INTO users (username, mail, password) VALUES (?,?,?)";
        $conn->prepare($sql)->execute([$_POST['username'], $_POST['mail'], $_POST['password']]);
        }
    }
    else {
        echo "mots de passes pas identiques";
    }
}
?>
</body>