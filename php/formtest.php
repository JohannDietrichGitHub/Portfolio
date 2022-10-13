<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Contact</title>
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php
$conn = new mysqli('localhost','root','','test_portfolio');
if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}
?>
<div id="myModal" class="modal">
    <div class="container1">
        <div class="color">
            <center>
                <div class="annoncecontact">
                    Si vous voulez me contacter, veuillez insérer les informations demandées ci-dessous et je vous joindrais aussi rapidement que possible !
                </div>
                <br>
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
                    <label for="raison">raison:</label>
                    <textarea name="raison" id="raison" required> </textarea>
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
    $raison =  $_REQUEST['raison'];

    $sql = "INSERT INTO test VALUES ('0','$prenom','$nom','$mail','$raison')";
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
<button id="myBtn">contactez moi !</button>
<script src="..\JS\indexjs.js"></script>

</body>
