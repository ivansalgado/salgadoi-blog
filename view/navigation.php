<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    }
?>

<nav>
    <ul>
        <li>
            <a href="<?php echo $path . "post.php" ?>"><button type="button" class="btn btn-default"><h1>Blog Post Form</h1></button></a>
        </li>
    </ul>
</nav>