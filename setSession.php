<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Set Session</title>
</head>
<body>
    <?php
        $_SESSION["name"] = "Scott";
    ?>
    <h1>Session is being set   name => "Scott"</h1>
</body>
</html>