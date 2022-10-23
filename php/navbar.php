


<div class="assemblagenavbar">
    <nav class="navperso navbar navbar-expand-lg navbar-light ">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="http://localhost:3000/php/index.php"">index</a>
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
                if($_SESSION["droits"] == 1){?>
            <a class="nav-item nav-link active" href="http://localhost:3000/php/admin.php"">Admin</a>
            <?php } }?>
            <a class="nav-item nav-link active" href="http://localhost:3000/php/login.php"">Se connecter</a>
        </div>
        </div>
    </nav>
</div>