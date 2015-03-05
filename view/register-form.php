<?php

    //links to all google, css, and jquery files
    require_once(__DIR__ . "/../model/config.php");
    echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
    echo "<link rel='shortcut icon' type='image/x-icon' href='ico/b.ico'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/bootstrap-theme.css'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/bootstrap.css'>";
    echo "<link type='text/css' rel='stylesheet' href='../css/css.css' />";
    echo "<link href='http://fonts.googleapis.com/css?family=Carme' rel='stylesheet' type='text/css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>";
    echo "<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>";
    echo "<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>";
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>";
    echo "<link rel='stylesheet' href='https://ajax.googleapis.com/ajax/lids/jqueryui/1.11.2/themes/smoothness/juery-ui.css' />";
?>

<!--register-->
<article id="c">Sign up</article>
<h3>Create an account to share your ideas</h3>

<!--creates a user when submit button is pushed-->
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div class="jumbotron col-xs-4" id="1">
        <!--submit your email adress-->
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email"/>
    </div>
    <!--create a username-->
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username"/>
    </div>
    <!--create a password-->
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password"/>
    </div>
    <!--create new account-->
    <div>
        <button type="submit" class="btn" id="reg">Submit</button>
    </div>
        
    </div>
</form>

<!--jquery scripts-->
<?php
 echo "<script src='js/bootstrap.min.js'></script>";
 echo "<script type='text/javascript' src='scripts.js'></script>";
?>