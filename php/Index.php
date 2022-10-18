<?php
// Initialize the session
session_start();
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
<center><h1><div class="premierblocktitre"> PORTFOLIO JOHANN DIETRICH !</div></h1></center>
  <br>
  <section id="sec-1">
  <div class="container">
    <a href="#CV">
      <div class="scroll-downn"></div>
    </a>
  </div>
  </section>
  <?php
  require_once('cv.php');
  ?>
  <a href="index.php">remonter</a>
</body>