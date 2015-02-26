<?php
    require_once(__DIR__ . "/../model/config.php");
    
    unset($_SESSION["unauthenticated"]);
    //return to index once logged out
    session_destroy();
    header("Location: " . $path . "index.php");