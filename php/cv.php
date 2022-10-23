<?php
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
    <script src="..\JS\indexjs.js"></script>
</head>


<?php
/* Cherche dans la BDD les données a insérer dans le CV */
$user = $conn->query("SELECT * FROM datacv ORDER BY id DESC LIMIT 1")->fetch();
$experiences = $user[1];
$presentation = $user[2];
$competences = $user[3];
$diplomes = $user[4];

?>


<header>
  <?php
    require_once ('navbar.php');
  ?>
</header>
<body> <!-- Blocs créants le CV et insérant les données de la BDD -->
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 80f19c4 (affichage pourle cv)

    
    <div class="reveal">
      <section id="reveal CV ">
        <center><h1><label>CV</label></center></h1>
<<<<<<< HEAD

        <div class="cvprincipal"> 
          <div class="premiercontainercv"> 
            <div class="presentationgeneral"> Présentation générale :
=======
    <div class="contindex"> </div>
      <section id="CV">
        <div class="container"> </div>
        <center><h1><label>PARTIE CV</label></center></h1>
=======
>>>>>>> 80f19c4 (affichage pourle cv)

        <div class="cvprincipal"> 
          <div class="premiercontainercv"> 
<<<<<<< HEAD
            <div class="presentationgeneral"> présentation générale
>>>>>>> 33485dd (Finition du système de login)
=======
            <div class="presentationgeneral"> Présentation générale :
>>>>>>> 769682e (Petit fixage de couleur de texte pour certaines pages)
                <br> <?php echo $presentation;?>
            </div>
            <div class="photo"> Photo : </div>
          </div>
          <div class="deuxiemecontainercv"> 
            <div class="contincontcv"> 
<<<<<<< HEAD
<<<<<<< HEAD
              <div class="diplome"> Diplomes :
                <br> <?php echo $diplomes;?>
              </div>
              <div class="experiences"> Experiences :
=======
              <div class="diplome"> diplome
                <br> <?php echo $diplomes;?>
              </div>
              <div class="experiences"> experiences
>>>>>>> 33485dd (Finition du système de login)
=======
              <div class="diplome"> Diplomes :
                <br> <?php echo $diplomes;?>
              </div>
              <div class="experiences"> Experiences :
>>>>>>> 769682e (Petit fixage de couleur de texte pour certaines pages)
                <br> <?php echo $experiences;?>
              </div>
            </div>
            <div class="reseau">Réseaux :</div>
          </div>
<<<<<<< HEAD
<<<<<<< HEAD
          <div class="competences"> Competences : 
=======
          <div class="competences"> competences 
>>>>>>> 33485dd (Finition du système de login)
=======
          <div class="competences"> Competences : 
>>>>>>> 769682e (Petit fixage de couleur de texte pour certaines pages)
             <br> <?php echo $competences;?>
          </div>
<<<<<<< HEAD
        </div>
        <div class="contactezmoi">
=======
        </div><div class="contactezmoi">
>>>>>>> b929ed8 (Remise en place du formulaire de contact)
        <?php
          require_once ('formtest.php');
        ?></div>
        </section>
    </div>
</body>