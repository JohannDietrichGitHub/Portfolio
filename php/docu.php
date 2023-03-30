<?php
require_once('connection.php');
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Documents/Projets</title>
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
<?php 
$stmt = $conn->prepare("SELECT * FROM projets");
$stmt->execute(); 
$projets = $stmt->fetchAll(); 
if (!empty($projets)){
    $var = "";
    foreach ($projets as $projet){
        $var .="<div class='boite_de_projet'> Titre :  ".$projet ['titre']." : <br> description : ".$projet['description']."<br> lien : <a href='". $projet['lien']."'>Voir le projet</a>
        </div>";
    }
    echo $var;
}
else {
  echo "pas de projets";
}

require_once('footer.php');?>
</body>