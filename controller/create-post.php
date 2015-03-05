<?php
    require_once(__DIR__ . "/../model/config.php");

    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
    
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
    
    if ($query) {
        echo "<p>Successfully inserted post: $title</p>";
        header("Location: " . $path . "/../index.php");
    }
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }
    
    echo "<p>Title $title</p>";
    echo "<p>Post $post</p>";