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

    $conn = new mysqli('localhost','root','','test_portfolio');
    if($conn->connect_error){
        die("Connection failed : ". $conn->connect_error);
    }
    $username_err ="";
    $password_err="";
    $confpassword_err="";
  ?>
</header>
<body>
<center>
    Sign up 
    <br><br><br>
    <form action="authentification.php" name="form" id="form" method="post">   
    <p>
        <label for="username">username:</label>
        <input type="text" name="username" id="username" required>
    </p>    
    <p>
        <label for="password">password:</label>
        <input type="password" name="password" id="password" required>
    </p>
    <p>
        <label for="confpassword">confirm password:</label>
        <input type="password" name="confpassword" id="confpassword" required>
    </p>
    <p>
        <input type="submit" value="Submit">
    </p>
</center>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confpassword"]))){
        $confpassword_err = "Please confirm password.";     
    } else{
        $confpassword = trim($_POST["confpassword"]);
        if(empty($password_err) && ($password != $confpassword)){
            $confpassword_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confpassword_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: admin.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}

echo $username_err;
echo $password_err;
echo $confpassword_err;

?>
</body>