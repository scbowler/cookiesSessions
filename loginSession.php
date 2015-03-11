<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<body>
    <h1>Login</h1>
    
    <form action="landSession.php" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="password" placeholder="Password">
        <button>Submit</button>
    </form>
    
    <h2>Previous session info</h2>
    <?php
        if(isset($_SESSION['name']) && isset($_SESSION['password'])){
            echo "<h3>Name: ".$_SESSION['name']."<br>Password: ".$_SESSION['password']."</h3>";
        }else{
            echo "<h3>There is no session info.</h3>";
        }
    ?>
</body>
</html>