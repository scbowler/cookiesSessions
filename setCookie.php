<?php
    $value = "Scott";
    setcookie("name", $value, time()+(10*365*24*60*60));
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Set cookie</title>
</head>
<body>
    <h1>Cookie is being set</h1>
</body>
</html>