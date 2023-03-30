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

    
    <div class="reveal">
      <section id="reveal CV ">
        <center><h1>CV</center></h1>

        <div class="cvprincipal"> 
            <div class="premiercontainercv"> 
                <div class="presentationgeneral"> Présentation générale :
                    <br> <?php echo $presentation;?>
                </div>
                <div class="photo"><img src="..\images\tete.jpg" alt="moi" width="140px" height="100%"></div>
            </div>
            <div class="deuxiemecontainercv"> 
                <div class="contincontcv"> 
                    <div class="diplome"> Diplomes :
                        <br> <?php echo $diplomes;?>
                    </div>
                    <div class="competences"> Competences : 
                        <br> <?php barre_comp($competences);?>
                    </div>
                </div>
                <div class="reseau">Mes réseaux :<br><br>
                    <a href="https://linkedin.com/in/johann-dietrich-aa3296228"><img src="../logo-linkedIn.png" alt="linkedin" width="120px" height="30px"></a>  <br><br>
                    <a href="https://github.com/jojohub69"><img src="../GitHub-Logo.png" alt="github" width="120px" height="60px"></a><br><br>
                </div>
            </div>
            <div class="experiences"> Experiences :
                <br> <?php echo $experiences; ?>
            </div>
        </div>
        <div class="contactezmoi"> 
            <div class="form_contact">
                <?php
                require_once ('formtest.php');
                ?>
            </div>
            <div class="download_cv">
                <a href="../../DIETRICH_Johann_CV.pdf" download="DIETRICH_Johann_CV.pdf">
                    Téléchargez mon CV !
                </a>
            </div>
        </div>
        <div class="copyright">© 2022-2023 DIETRICH JOHANN PORTFOLIO </div>
        </section>
    </div>
</body>