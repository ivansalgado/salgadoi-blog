<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"?>">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username"/>
    </div>
    
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password"/>
    </div>
    
    <div>
        <button type="submit">Submit</button>
    </div>
</form>