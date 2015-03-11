<?php
    $name = $_POST['name'];
    $password = $_POST['password'];

    setcookie("name", $name, time()+(60*60*24*30));
    setcookie("password", $password, time()+(60*60*24*30));
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Set cookie</title>
</head>
<body>
    <h1>Your Info</h1>
    
    <?php
        if(isset($_COOKIE['name'])){
            echo "<h2>Welcome back last time your name was: ".$_COOKIE['name']."<br>Your password was: ".$_COOKIE['password']."</h2>";
        }else{
            echo "<h2>Hello, ".$_POST['name']."<br>You will be remembered as ".$_POST['name']."<br>Your password has been set to: ".$_POST['password']."</h2>";
        }
        
    ?>
    <h3><a href="loginform.php">Return to login page</a></h3>
</body>
</html>