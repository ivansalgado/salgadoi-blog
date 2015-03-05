<?php
    require_once(__DIR__ . "/../model/config.php");
     
    
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
    //suggests another username if username already exists
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
    
    //hides password
    $hashedPassword = crypt($password, $salt);
    
    
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
            . "email = '$email',"
            . "username = '$username',"
            . "password = '$hashedPassword',"
            . "salt = '$salt'");
    
    if($query){
        //creates user and allows the new user to post
        echo "Successfully created user: $username";
        header("Location: " . $path . "/../index.php");
    }
    
    //tells whether there was an error iin creating a new user
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    