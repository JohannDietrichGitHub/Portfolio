<?php
require_once('connection.php');
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- balise pour rendre la page responsive -->
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <script src="..\JS\indexjs.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<header>
  <?php
    require_once ('navbar.php');
  ?>
</header>
<body>
<center><h1><div class="premierblocktitre"> Portfolio johann Dietrich !</div></h1></center>
  <br>
  <section id="sec-1">
  <img class = "center" src="../logo-certa.png" alt="BTS SIO">
  <div class="container">
    <a href="#CV">
      <div class="scroll-downn"></div>
    </a>
  </div>
  </section>
  <?php
  require_once('pres.php');
  require_once('cv.php');
  ?>
   <?php include('footer.php');?>
</body>