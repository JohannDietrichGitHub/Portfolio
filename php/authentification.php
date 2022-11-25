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

<header>
  <?php
    require_once ('navbar.php');
  ?>
</header>
<body>
<center>
    <div class="form_signup form-login">
        <div class="formtitle">Créer un compte</div> 
        <br><br>
        <form action='creation_compte.php' name="form" id="form" method="post">
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
</center>
</body>