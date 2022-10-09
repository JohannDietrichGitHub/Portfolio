<<<<<<< HEAD



<div class="assemblagenavbar">
    <nav class="navperso navbar navbar-expand-lg navbar-light ">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="http://localhost:3000/php/index.php"">Accueil</a>
        <a class="nav-item nav-link active" href="http://localhost:3000/php/docu.php""> Documentation</a>
        <a class="nav-item nav-link active" href="http://localhost:3000/php/articles.php"">Articles</a>
        </div>
    </div>
    </nav>
    <nav class="navperso1 navbar navbar-expand-lg navbar-light ">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php   
            if(isset($_SESSION["username"]))  
            {   
                if($_SESSION["droits"] == 1){
                    ?><a class="nav-item nav-link active" href="http://localhost:3000/php/admin.php"">Admin</a><?php //permet de voir la page admin uniquement si on l'es
                }
            }
            else {
                ?> <a class="nav-item nav-link active inexist" href="http://localhost:3000/php/admin.php"">admin</a> <?php //permet simplement un meilleur alignement de la navbar
            }?>
            <a class="nav-item nav-link active" href="http://localhost:3000/php/login.php"">Se connecter</a>
        </div>
        </div>
    </nav>
</div>
=======
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">Features</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </div>
    </div>
    </nav>
>>>>>>> bbb0e2d (a)
