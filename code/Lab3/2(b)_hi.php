<?php
session_start();

if (!empty($_SESSION["name"]) and !empty($_SESSION["surname"]) and !empty($_SESSION["age"])) {
    echo "hi " . $_SESSION["name"] . " " . $_SESSION["surname"] . " (age = " . $_SESSION["age"] . ")";
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<br>
<a href="2(b)_start.php">Back</a>
</body>
</html>