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
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Contact</title>
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div id="myModal" class="modal">
    <div class="container1">
            <center>
            <div class="form_signup form-login">
                <div>Si vous voulez me contacter, veuillez insérer les informations demandées ci-dessous et je vous joindrais aussi rapidement que possible !</div> 
                <br><br>
                <form action="Index.php" name="form" id="form" method="post">
<<<<<<< HEAD
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
=======

                <p>
                        <label for="sujet">sujet:</label>
                        <input type="text" name="sujet" id="sujet" required>
                </p>
                <p>
                    <label for="mail">mail:</label>
                    <input type="text" name="mail" id="mail" required>
                </p>
                <p>
                    <label for="raison">raison:</label>
                    <textarea name="raison" id="raison" required> </textarea>
                </p>
                <p>
                    <input type="submit" value="Envoyer">
                </p>
                <p>
                    <button class="fermer">fermer</button>
                </p>
>>>>>>> 33485dd (Finition du système de login)
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
<script src="..\JS\indexjs.js"></script>

</body>
