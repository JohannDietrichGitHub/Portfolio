<?php
function creeruncompte($conn){
    if(isset($_POST['username'])){   /* vérifie si le formulaire a été envoyé */

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



