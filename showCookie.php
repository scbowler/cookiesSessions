<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Show cookie</title>
</head>
<body>
    <h1>Cookie is being shown</h1>
    <?php 
        $fromCookie = $_COOKIE['name'];
        echo "<h2>$fromCookie</h2>";
    ?>
</body>
</html>