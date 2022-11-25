<?php
function creeruncompte($conn){
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
function se_connecter($conn){
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
                     $droits = $user[4];
                     $_SESSION["username"] = $_POST["username"]; /* Crée les variables de sessions permettant donc de confirmer la connection et plus */
                     $_SESSION["droits"] = $droits;

                     //creation de logs
                     $sql = "INSERT INTO logs (username, actions, pages) VALUES (?,?,?)";
                     $conn->prepare($sql)->execute([$_POST['username'], "Login", "login.php"]);

                     header("location:articles.php");  
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



