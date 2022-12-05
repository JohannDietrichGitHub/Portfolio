<?php
function creeruncompte($conn){ //fonction de création de compte appelée sur authentification.php
    if(!empty($_POST)){   /* vérifie si le formulaire a été envoyé */

        $stmt = $conn->prepare("SELECT username FROM users WHERE username=:username");
        $stmt->execute(['username' => $_POST["username"]]); 
        $user = $stmt->fetch();
        if (empty($user)){
            $usernamebdd = "";
        }
        else { $usernamebdd = $user[0]; }


        $stmt = $conn->prepare("SELECT mail FROM users WHERE mail=:mail");
        $stmt->execute(['mail' => $_POST["mail"]]); 
        $user = $stmt->fetch();
        if (empty($user)){
            $mailbdd = "";
        }
        else { $mailbdd = $user[0]; }

        if($_POST['password']== $_POST['confpassword']){ /* vérifie si les mots de passes sont les memes */
            if ($_POST['username']== $usernamebdd || $_POST['mail']== $mailbdd) {  /* vérifie si le nom d'utilisateur ou l'adresse mail ne sont pas déja utilisés */
                echo "nom d'utilisateur ou adresse mail déja utilisés";
            }
            else {
                $mdphash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, mail, password) VALUES (?,?,?)";
                $conn->prepare($sql)->execute([$_POST['username'], $_POST['mail'], $mdphash]);
                header("location:articles.php"); 
                exit; 
            }
        }
        else {
            echo "mots de passes pas identiques";
        }
    }
}


function se_connecter($conn){  //fonction de connection pour login.php
    if(!empty($_POST))  
    {
        $stmt = $conn->prepare("SELECT password FROM users WHERE username=?");
        $stmt->execute([$_POST["username"]]); 
        $passwd = $stmt->fetch();

        if ($passwd !=null){
            if (password_verify($_POST["password"], $passwd[0])){    
                $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username"); /* permet de chercher la colone"droits" determinant si un utilisateur est administrateur ou non */
                $stmt->execute(['username' => $_POST["username"]]); 
                     $user = $stmt->fetch();
                     $droits = $user[4]; //vérifiie dans la BDD si l'utilisateur a des droits administrateurs
                     $_SESSION["username"] = $_POST["username"]; /* Crée les variables de sessions permettant donc de confirmer la connection et plus */
                     $_SESSION["droits"] = $droits;
                     //creation de logs
                     $sql = "INSERT INTO logs (username, actions, pages,date_temps) VALUES (?,?,?,?)";
                     $conn->prepare($sql)->execute([$_POST['username'], "Login", "login.php",time_now()]);

                     header("location:articles.php");  
                     exit;
                }  
                else  
                {  
                     echo "Mauvais mot de passe ou nom d'utilisateur";
                }
            }
            else 
                {
                    echo "Nom d'utilisateur inconnu";
                }
        } 
}



function logout($conn){
    $sql = "INSERT INTO logs (username, actions, pages, date_temps) VALUES (?,?,?,?)"; //logs de déconnection
    $conn->prepare($sql)->execute([$_SESSION["username"], "Logout/Changement de compte", "connection.php",time_now()]);
    $_SESSION = array();
    session_destroy();//déconnecte l'utilisateur
}

function time_now(){ //défini le temps et la date actuel d'une connection ou déconnection
    date_default_timezone_set('Europe/Paris');
    $jour_Actuel=date("d");
    $mois_Actuel=date("m");
    $annee_Actuelle=date("Y");
    $heure_Actuelle=date("H");
    $minute_Actuelle=date("i");
    $seconde_Actuelle=date("s");

    return ("$annee_Actuelle-$mois_Actuel-$jour_Actuel $heure_Actuelle:$minute_Actuelle:$seconde_Actuelle");
}

function barre_comp($competences){
    $competence=explode(" ",$competences);
    $count =0;
    foreach ($competence as $test){
        $comp_pourcentage=explode(";",$competence[$count]);
        $comp_language= $comp_pourcentage[0];
        $comp_pourc_language = $comp_pourcentage[1];
        $count+=1;
        echo $comp_language.":";
        echo "<div class='progress'><div class='progress-bar' role='progressbar' style='width: $comp_pourc_language%' aria-valuenow='$comp_pourc_language' aria-valuemin='0' aria-valuemax='100'>$comp_pourc_language%</div></div>";
    }
}
function obtenir_article($conn){
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id=?");
    $stmt->execute([1]);
    $infos_article = $stmt->fetch();

    return ([
        'titre' =>$infos_article["titre"],
        'contenu' =>$infos_article["contenu"],
        'auteur' =>$infos_article["auteur"]
    ]);
}
function ajout_article($conn){
    $sql = "INSERT INTO articles (titre, contenu, auteur) VALUES (?,?,?)";
    $conn->prepare($sql)->execute([$_POST['titre'], $_POST['contenu'], $_SESSION["username"]]);
    header("location:articles.php"); 
    exit; 
}