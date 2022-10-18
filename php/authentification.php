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
<<<<<<< HEAD
    <div class="form_signup form-login">
        <div class="formtitle">Créer un compte</div> 
        <br><br>
        <form action="authentification.php" name="form" id="form" method="post">
        <div class="form-group">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" class="form-control" id="username" name="username"  placeholder="Nom d'utilisateur" required>
         </div>
         <div class="form-group">
            <label for="mail">Adresse mail :</label>
            <input type="mail" class="form-control" id="mail" name="mail"  placeholder="mail" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
        </div>
        <div class="form-group">
            <label for="confpassword">Confirmation du mot de passe :</label>
            <input type="password" class="form-control" id="confpassword" name="confpassword" placeholder="Confirmation de mot de passe" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer un compte</button>
        </form>
        <div><a href="login.php">Déja un compte ?</a></div>
    </div>
=======
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
>>>>>>> 33485dd (Finition du système de login)
</center>
<?php



<<<<<<< HEAD
<<<<<<< HEAD
if(isset($_POST['username'])){   /* vérifie si le formulaire a été envoyé */

    $stmt = $conn->prepare("SELECT username FROM users WHERE username=:username");
    $stmt->execute(['username' => $_POST["username"]]); 
    $user = $stmt->fetch();
    if (empty($user)){
        $usernamebdd = "";
    }
    else { $usernamebdd = $user[0]; }


    $stmt = $conn->prepare("SELECT mail FROM users WHERE mail=:mail");
    $stmt->execute(['mail' => $_POST["mail"]]); 
    $user = $stmt->fetch();
    if (empty($user)){
        $mailbdd = "";
    }
    else { $mailbdd = $user[0]; }

=======

$usernamebdd = $mailbdd = ""; /* a changer, doit chercher dans bdd si ils existent ou pas */

if(isset($_POST['username'])){   /* vérifie si le formulaire a été envoyé */

>>>>>>> 33485dd (Finition du système de login)
=======
if(isset($_POST['username'])){   /* vérifie si le formulaire a été envoyé */

    $stmt = $conn->prepare("SELECT username FROM users WHERE username=:username");
    $stmt->execute(['username' => $_POST["username"]]); 
    $user = $stmt->fetch();
    if (empty($user)){
        $usernamebdd = "";
    }
    else { $usernamebdd = $user[0]; }


    $stmt = $conn->prepare("SELECT mail FROM users WHERE mail=:mail");
    $stmt->execute(['mail' => $_POST["mail"]]); 
    $user = $stmt->fetch();
    if (empty($user)){
        $mailbdd = "";
    }
    else { $mailbdd = $user[0]; }

>>>>>>> 1e9d5a7 (Finition du système empêchant 2 même noms d'utilistaeurs/adresses mail)
    if($_POST['password']== $_POST['confpassword']){ /* vérifie si les mots de passes sont les memes */
        if ($_POST['username']== $usernamebdd || $_POST['mail']== $mailbdd) {  /* vérifie si le nom d'utilisateur ou l'adresse mail ne sont pas déja utilisés */
            echo "nom d'utilisateur ou adresse mail déja utilisés";
        }
        else {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $mdphash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, mail, password) VALUES (?,?,?)";
            $conn->prepare($sql)->execute([$_POST['username'], $_POST['mail'], $mdphash]);
            header("location:login.php");  
=======
        $sql = "INSERT INTO users (username, mail, password) VALUES (?,?,?)";
        $conn->prepare($sql)->execute([$_POST['username'], $_POST['mail'], $_POST['password']]);
>>>>>>> 33485dd (Finition du système de login)
=======
        $mdphash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, mail, password) VALUES (?,?,?)";
        $conn->prepare($sql)->execute([$_POST['username'], $_POST['mail'], $mdphash]);
>>>>>>> b929ed8 (Remise en place du formulaire de contact)
=======
            $mdphash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, mail, password) VALUES (?,?,?)";
            $conn->prepare($sql)->execute([$_POST['username'], $_POST['mail'], $mdphash]);
>>>>>>> 1e9d5a7 (Finition du système empêchant 2 même noms d'utilistaeurs/adresses mail)
        }
    }
    else {
        echo "mots de passes pas identiques";
    }
}
?>
</body>