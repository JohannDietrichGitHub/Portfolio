<head> 		
    <meta charset="utf-8" /> <!--encodage en utf8-->
	<title>Contact</title>
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="..\JS\indexjs.js"></script>
</head>


<?php
$conn = new mysqli('localhost','root','','test_portfolio');
if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}
$sql = "SELECT * FROM datacv";
$result = $conn->query($sql);
?> <br> <?php
if($result = $conn->query($sql)){
    while($temp = $result->fetch_object()){
$experiences = $temp->experiences.' '.$presentation = $temp->presentation .' '.$competences = $temp->competences .' '.$diplomes = $temp->diplomes;
}
}
?>


<header>
  <?php
    require_once ('navbar.php');
  ?>
</header>
<body>

    <div class="contindex"> </div>
      <section id="CV">
        <div class="container"> </div>
        <center><h1><div>PARTIE CV</div></center></h1>

        <div class="cvprincipal"> 
          <div class="premiercontainercv"> 
            <div class="presentationgeneral"> présentation générale
                <br>
                <?php echo $presentation ?>
            </div>
            <div class="photo"> photo </div>
          </div>
          <div class="deuxiemecontainercv"> 
            <div class="contincontcv"> 
              <div class="diplome"> diplome
                <br>
                <?php echo $diplomes ?>
              </div>
              <div class="experiences"> experiences
                <br>
              <?php echo $experiences ?>
              </div>
            </div>
            <div class="reseau">réseaux</div>
          </div>
          <div class="competences"> competences 
          <br>
                <?php echo $competences ?>
          </div>
        </div>
        <?php
          require_once ('formtest.php');
        ?>
        </section>
</body>