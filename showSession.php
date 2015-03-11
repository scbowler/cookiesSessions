<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Show Session</title>
</head>
<body>
    <h1>Information from session is:</h1>
    <?php
        echo "<h2>The name for session = ".$_SESSION['name']."</h2>";
    ?>
</body>
</html>