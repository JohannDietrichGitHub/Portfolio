<<<<<<< HEAD
<?php
// Initialize the session
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
=======
>>>>>>> bbb0e2d (a)
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Contact</title>
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<<<<<<< HEAD
<div id="myModal" class="modal">
    <div class="container1">
            <center>
            <div class="form_signup form-login">
                <div>Si vous voulez me contacter, veuillez insérer les informations demandées ci-dessous et je vous joindrais aussi rapidement que possible !</div> 
                <br><br>
                <form action="Index.php" name="form" id="form" method="post">
                <div class="form-group">
                    <label for="sujet">sujet</label>
                    <input type="text" class="form-control" id="sujet" name="sujet"  placeholder="sujet" required>
                 </div>
                 <div class="form-group">
                    <label for="mail">mail</label>
                    <input type="mail" class="form-control" id="mail" name="mail"  placeholder="mail" required>
                 </div>
                 <div class="form-group">
                    <label for="raison">raison</label>
                    <textarea class="form-control textraison" id="raison" name="raison"  required></textarea>
                 </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
                <div><button class="fermer">fermer</button></div>
            </div>
            </center>
        
    </div>
</div>
<?php
if (isset($_POST['sujet'])) {
    $sujet =  $_POST['sujet'];
    $mail =  $_POST['mail'];
    $raison =  $_POST['raison'];

    $sql = "INSERT INTO contact (id, sujet, mail, raison) VALUES (?,?,?,?)";
    $conn->prepare($sql)->execute([null, $sujet, $mail, $raison]);
}


?>
 <br>
<button id="myBtn" class="btn btn-primary">contactez moi !</button>
=======
<?php
$conn = new mysqli('localhost','root','','test_portfolio');
if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}
else echo "connection established";

?>
<div id="myModal" class="modal">
    <div class="container">
        <div class="color">

            <center>
                <form action="Index.php" name="form" id="form" method="post">

                <p>
                    <label for="prenom">prenom:</label>
                    <input type="text" name="prenom" id="prenom" required>
                </p>


                <p>
                    <label for="nom">nom:</label>
                    <input type="text" name="nom" id="nom" required>
                </p>


                <p>
                    <label for="mail">mail:</label>
                    <input type="text" name="mail" id="mail" required>
                </p>
                <p>
                    <input type="submit" value="Submit">
                </p>
                    <button class="close">fermer</button>
                </form>
            </center>
        </div>
    </div>
</div>
<?php
if (isset($_POST['prenom'])) {
    $prenom =  $_REQUEST['prenom'];
    $nom =  $_REQUEST['nom'];
    $mail =  $_REQUEST['mail'];

    $sql = "INSERT INTO test VALUES ('0','$prenom','$nom','$mail')";
    mysqli_query($conn, $sql);
}





$sql = "SELECT * FROM test";
$result = $conn->query($sql);
?> <br> <?php
if($result = $conn->query($sql)){
    while($utilisateur = $result->fetch_object()){
        echo $utilisateur->prenom.' '.$utilisateur->nom;
    }
}

?>
 <br>
<button id="myBtn">Open Modal</button>
>>>>>>> bbb0e2d (a)
<script src="..\JS\indexjs.js"></script>

</body>
