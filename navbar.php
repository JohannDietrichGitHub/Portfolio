<head>
<?php require_once('head.php');?>


<div class="assemblagenavbar">
    <nav class="navperso navbar navbar-expand-lg navbar-secondary bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Portfolio</a>
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