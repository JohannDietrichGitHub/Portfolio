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

    
  ?>
</header>
<body>
<center> <!-- formulaire de connection -->
    Login  
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
    </form>
    <div><a href="authentification.php">Pas encore de compte ?</a></div>
</center>
<?php
try
{
     $conn = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["username"]))  
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
                {    
                     $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username"); /* permet de chercher la colone"droits" determinant si un utilisateur est administrateur ou non */
                     $stmt->execute(['username' => $_POST["username"]]); 
                     $user = $stmt->fetch();
                     $droits = $user[4];
                     $_SESSION["username"] = $_POST["username"]; /* Crée les variables de sessions permettant donc de confirmer la connection et plus */
                     $_SESSION["droits"] = $droits;

                     header("location:articles.php");  
                }  
                else  
                {  
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

?>
</body>