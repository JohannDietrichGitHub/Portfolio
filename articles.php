<?php
require_once('connection.php');
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Articles</title>
    <?php require_once('head.php');?>


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
<button class="btn-show-selection">Selection d'articles</button>
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
    <?php   
            if(!empty($_POST)){ 
            unset($_SESSION['article_id']);
            $_SESSION['article_id'] = $infos_article['id'];
        ?>
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
        <?php require_once("comm.php"); ?>
    </div>
    <?php }
    else{
        echo "<br><br><center><div class='white'><h2>Veuillez choisir un article à la gauche de l'écran </h2></div></center>";
    } include('footer.php');?>
<script>
    var afficher = document.getElementsByClassName("btn-show-selection")[0];
var selecteurArticles = document.getElementsByClassName("selection_article")[0];

afficher.addEventListener("click", function() {
    if (selecteurArticles.style.display === "none") {
        selecteurArticles.style.display = "block";
    } else {
        selecteurArticles.style.display = "none";
    }
});
    </script>
</body>