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
    $infos_article = obtenir_article($conn);
  ?>
</header>
<body>
    <center><h1><div class="premierblocktitre">Articles</div></h1></center>
    <div class="main_article">
        <div class="titre_article">
        <?php echo '<h2>'.  $infos_article['titre'].'</h2>'?>
        </div>
        <div class="contenu_article">
            <?php echo '<h4>'.$infos_article['contenu'].'</h4>' ?> <br><br>
            <div>
                <?php echo '<h5>'.$infos_article['auteur'].'</h5>'?>
            </div> 
        </div>
        <div class="commentaires">
            Ici se trouveront les commentaires
        </div>
    </div>
</body>