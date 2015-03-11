<?php
    session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delete Session</title>
</head>
<body>
    <h1>Information from session is being deleted</h1>
    <?php
        session_unset();
        session_destroy();
    ?>
</body>
</html>