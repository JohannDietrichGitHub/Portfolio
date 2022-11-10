<?php
// Initialize the session
session_start();
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "test_portfolio";

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
<<<<<<< HEAD
=======

    
>>>>>>> 33485dd (Finition du système de login)
  ?>
</header>
<body>
<center> <!-- formulaire de connection -->
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<div class="form_signup form-login">
=======
<div class="form_signup">
>>>>>>> 2c131bd (Mise en place du font et embellissement général)
=======
<div class="form_signup form-login">
>>>>>>> a691bc7 (Finalisation du visuel des formulaires actuels)
    <div class="formtitle">Se connecter</div> 
    <br><br>
    <form action="login.php" name="form" id="form" method="post">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a691bc7 (Finalisation du visuel des formulaires actuels)
        <input type="text" class="form-control" id="username" name="username"  placeholder="Nom d'utilisateur" required>
     </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <div><a href="authentification.php">Pas encore de compte ?</a></div>
</div>
</center>
<?php
     $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["username"]))  
    {          
            $stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
            $stmt->execute([$_POST["username"]]); 
            $passwd = $stmt->fetch();

            if ($passwd !=null){
                if (password_verify($_POST["password"], $passwd[0]))
=======
    Login  
=======
    <label>Login</label>  
>>>>>>> 769682e (Petit fixage de couleur de texte pour certaines pages)
    <br><br><br>
    <form action="login.php" name="form" id="form" method="post">   
    <p>
        <label for="username">username:</label>
        <input type="text" name="username" id="username" required>
    </p>    
    <p>
        <label for="password">password:</label>
        <input type="password" name="password" id="password" required>
    </p>
    <p>
        <input type="submit" value="se connecter">
    </p>
=======
        <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Nom d'utilisateur">
     </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
>>>>>>> 2c131bd (Mise en place du font et embellissement général)
    </form>
    <div><a href="authentification.php">Pas encore de compte ?</a></div>
</div>
</center>
<?php
     $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["username"]))  
<<<<<<< HEAD
<<<<<<< HEAD
          {    
                $query = "SELECT * FROM users WHERE username = :username AND password = :password";  /* Verifie si le nom d'utilisateur et le mot de passe sont existants dans la BDD et si c'est le cas, commence la session */
                $statement = $conn->prepare($query);  
                $statement->execute(  
                    array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
>>>>>>> 33485dd (Finition du système de login)
=======
          {     
                $query = 'SELECT * FROM users WHERE (username = :username)';

                /* Values array for PDO. */
                $values = [':username' => $_POST["username"]];
                
                /* Execute the query */
                try
                {
                  $res = $conn->prepare($query);
                  $res->execute($values);
                }
                catch (PDOException $e)
                {
                  /* Query error. */
                  echo 'Query error.';
                  die();
                }
                
                $row = $res->fetch(PDO::FETCH_ASSOC);

                if (password_verify($_POST["password"], $row['password']))
>>>>>>> b929ed8 (Remise en place du formulaire de contact)
=======
    {          
            $stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
            $stmt->execute([$_POST["username"]]); 
            $passwd = $stmt->fetch();

            if ($passwd !=null){
                if (password_verify($_POST["password"], $passwd[0]))
>>>>>>> b0cc7db (Re mise en place de la navbar)
                {    
                     $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username"); /* permet de chercher la colone"droits" determinant si un utilisateur est administrateur ou non */
                     $stmt->execute(['username' => $_POST["username"]]); 
                     $user = $stmt->fetch();
                     $droits = $user[4];
                     $_SESSION["username"] = $_POST["username"]; /* Crée les variables de sessions permettant donc de confirmer la connection et plus */
                     $_SESSION["droits"] = $droits;

<<<<<<< HEAD
                     //creation de logs
                     $sql = "INSERT INTO logs (username, actions, pages) VALUES (?,?,?)";
                     $conn->prepare($sql)->execute([$_POST['username'], "Login", "login.php"]);

=======
>>>>>>> 33485dd (Finition du système de login)
                     header("location:articles.php");  
                }  
                else  
                {  
<<<<<<< HEAD
<<<<<<< HEAD
                     echo "Mauvais mot de passe ou nom d'utilisateur";
                }
            }
            else 
                {
                    echo "Nom d'utilisateur inconnu";
                }
        } 
=======
                     $message = '<label>Wrong Data</label>';  
                }    
            }
        }   
        catch(PDOException $error)  
        {  
             $message = $error->getMessage();  
        }  
catch(PDOException $e)
{
     echo $e->getMessage();
}
>>>>>>> 33485dd (Finition du système de login)
=======
                     echo "Mauvais mot de passe ou nom d'utilisateur";
                }
            }
            else 
                {
                    echo "Nom d'utilisateur inconnu";
                }
        } 
>>>>>>> b0cc7db (Re mise en place de la navbar)

?>
</body>