<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- balise pour rendre la page responsive -->
    <link rel="stylesheet" href="..\CSS\indexcss.css"/>
    <script src="..\JS\indexjs.js"></script>
</head>

<div class="assemblagenavbar">
    <nav class="navperso navbar navbar-expand-lg navbar-secondary bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="Index.php">Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="docu.php">Documentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="articles.php">Articles</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        <?php   
            if(isset($_SESSION["username"]))  
            {   
                if($_SESSION["droits"] == 1){
                    ?><a class="nav-item nav-link active" href="admin.php">Admin</a><?php //permet de voir la page admin uniquement si on l'es
                }
                ?></li><li class="nav-item"> <a class="nav-item nav-link active" href="logout.php">Se déconnecter</a><?php //permet de voir la page admin uniquement si on l'es
            }
            else {
                ?> <a class="nav-item nav-link active" href="login.php">Se connecter</a> <?php //permet de se connecter uniquement si l'on ne l'es pas déjà
            }?>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>