<?php
require_once('connection.php');
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
                <form action="index.php" name="form" id="form" method="post">
                <div class="form-group">
                    <label for="sujet">Sujet</label>
                    <input type="text" class="form-control" id="sujet" name="sujet"  placeholder="sujet" required>
                 </div>
                 <div class="form-group">
                    <label for="mail">Mail</label>
                    <input type="mail" class="form-control" id="mail" name="mail"  placeholder="mail" required>
                 </div>
                 <div class="form-group">
                    <label for="raison">Contenu</label>
                    <textarea class="form-control textraison" id="raison" name="raison"  required></textarea>
                 </div>
                 <label for="case_cochee">
                    <input type="checkbox" name="case_cochee" value="1" required> 
                    <a href="charte_info.php">J'accepte les termes et conditions de la charte informatique de ce site.</a>
                </label>
                <button type="submit" class="btn btn-form-color">Envoyer</button>
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
<button id="myBtn" class="btn btn-front-color">contactez moi !</button>
<script src="..\JS\indexjs.js"></script>

</body>
