<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    }
?>

<!--allows users to post (when logged in)-->
<nav>
    <ul>
        <li>
            <a href="<?php echo $path . "post.php" ?>"><button type="button" class="btn btn-default"><h5 id="s">Create a Post</h5></button></a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="<?php echo $path . "/../controller/logout-user.php" ?>"><button type="button" class="btn btn-default"><h5 id="s">Log Out</h5></button></a>
        </li>
    </ul>
</nav>