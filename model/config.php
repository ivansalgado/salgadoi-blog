<?php
    require_once (__DIR__ . "/Database.php");
    session_start();
    session_regenerate_id(true);
    
    $path = "/salgadoi-blog/";
    
    $host = "localhost";
    $username  = "root";
    $password  = "root";
    $database = "blog_db";
    
    if(!isset($_SESSION["connection"])){
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }