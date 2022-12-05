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
    if (!empty($_POST)) 
    {
        $article_choisi = choisir_article($conn);
        $infos_article = obtenir_article($conn,$article_choisi['id']);

    }

?>
</header>
<body>

    <center><h1><div class="premierblocktitre">Articles</div></h1></center>

    <!-- partie montrant les différents articles choisissables -->
    <div class="selection_article">
        <label>Sélectionnez un article à voir</label>
        <br>
        <form class="selecticle" method="POST">
            <select name="select" class="form-select" aria-label="Default select example">
            <?php
            $data = $conn->query("SELECT * FROM articles")->fetchAll();
            foreach ($data as $row) 
                {
                echo "<option value=$row[id]> $row[titre] </option>";
                }
            ?>
            </select>
            <br><br><button type="submit" class="btn btn-primary">Selectionner</button>
        </form>
    </div>
    <?php if(!empty($_POST)){ ?>
    
    <!-- Partie montrant l'article choisi -->
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
        </div>
    </div>
    <?php }
    else{
        echo "<br><br><center><h2>Veuillez choisir un article à la gauche de l'écran </h2></center>";
    } ?>
</body>