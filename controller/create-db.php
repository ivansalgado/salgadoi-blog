<?php

    require_once (__DIR__ . "/../model/database.php");
    $connection = new misqli($host, $username, $password);
    
    if($connection->connect_error){
        die("Error: " . $connection->connect_error);
    }
    else{
        echo "Success" . $connection->host_info;
    }
    
    $connection->close();