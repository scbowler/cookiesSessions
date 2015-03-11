<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Show Session Info</title>
</head>
<body>
    <?php
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
    ?>
    <h1>Here is the information from this session</h1>
    
    <?php
        echo "<h3>Your name is: ".$_SESSION['name']."<br>Your password is: ".$_SESSION['password']."</h3>";
    ?>
    <h4><a href="loginSession.php">Reurn to login</a></h4>
</body>