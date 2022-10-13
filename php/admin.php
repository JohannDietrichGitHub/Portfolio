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
<?php
$conn = new mysqli('localhost','root','','test_portfolio');
if($conn->connect_error){
    die("Connection failed : ". $conn->connect_error);
}
?>
    <center>

        <br>
        <form action="admin.php" name="form" id="form" method="post">   
        <p>
            <label for="experiences">experiences:</label>
            <input type="text" name="experiences" id="experiences" required>
        </p>    
        <p>
            <label for="presentation">presentation:</label>
            <input type="text" name="presentation" id="presentation" required>
        </p>    
        <p>
            <label for="competences">competences:</label>
            <input type="text" name="competences" id="competences" required>
        </p>
        <p>
            <label for="diplomes">diplomes:</label>
            <input type="text" name="diplomes" id="diplomes" required>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
        </form>
    </center>
    <?php
    if (isset($_POST['experiences'])) {
        $experiences =  $_REQUEST['experiences'];
        $presentation =  $_REQUEST['presentation'];
        $competences =  $_REQUEST['competences'];
        $diplomes =  $_REQUEST['diplomes'];

        $sql = "UPDATE datacv SET experiences = '".$experiences."', presentation = '".$presentation."', competences = '".$competences."', diplomes = '".$diplomes."' WHERE id = 1";
        mysqli_query($conn, $sql);
    } ?>
</body>