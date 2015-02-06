<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    
    
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
    
    
    <div>
        <a type="submit">
            <button type="button" class="btn">Post<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
        </a>
    </div>
</form>