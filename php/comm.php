<?php
require_once('connection.php');
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Contact</title>
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="..\JS\indexjs.js"></script>
</head>
<body>
    <div class="boite_de_commentaire">
        <?php if (isset($_SESSION["username"])){?>
            <form action="ajouter_com.php" name="form" id="form" method="post">
                <div class="form-group black">
                    Un commentaire ?
                    <input type="text" class="form-control" id="commentaire" name="commentaire"  placeholder="..." required>
                </div>
                <center><button type="submit" class="btn btn-dark">Publier</button></center>
            </form>
        <?php } else { echo "veuillez vous connecter pour mettre des commentaires"; }?>
    </div>
    <div class="boite_de_commentaire">
        <?php echo appel_com($conn);?>
    </div>
</body>