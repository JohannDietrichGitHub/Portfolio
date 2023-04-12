<?php
require_once('connection.php');
?>
<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Portfolio</title>
  <?php require_once('head.php');?>

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